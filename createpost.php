<?php

include('../../php/connect.php');
$title = mysqli_real_escape_string($conn, $_POST['title']);
$body = mysqli_real_escape_string($conn, $_POST['editor1']);

if(!empty($title) && !empty($body)){
    
$targetDir = "../../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','mp3','mp4');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $postid = random_int(654312, 678907654301);
            $poststat = "verified";
            $postowner = "fpnopowerblog";
            $query = "INSERT INTO posts(postid, title, body, postdoc, poststat, postowner)VALUES('{$postid}','{$title}','{$body}','{$fileName}','{$poststat}','{$postowner}')";
            $res = $conn->query($query);
//            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($res){
                echo = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                echo= "File upload failed, please try again.";
            } 
        }else{
            echo = "Sorry, there was an error uploading your file.";
        }
    }else{
        echo= 'Sorry, only JPG, JPEG, PNG, mp4, & mp3 files are allowed to upload.';
    }
}else{
    echo= 'Please select a file to upload.';
} 
    
    
}
else{
    echo "post title andbody cant be empty";
}





?>