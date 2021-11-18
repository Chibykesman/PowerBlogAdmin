<?php session_start(); if(!isset($_SESSION['id'])) { header('location: ./'); } ?>

<?php 
include('include/head.php');
include('include/navigate.php');?>



<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 card bg-white p-4">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-10">
                        <div class="col-sm-12 col-12 ">
                        <form method="post" id="postform" enctype="multipart/form-data"> 
                            <div class="row">
                            <div class="form-group p-2 col-8">
                                <label>Post Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            
                            <div class="col-4 form-group p-2">
                                <label>Images or videos</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            
                            <div class="p-2">
                                <label>Post Body</label>
                                <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short></textarea>
                            </div>
                                
                            <div class="form-group p-2">
                                <button class=" btn btn-outline-primary btn-rounded btn-md" type="submit" name="submit" id="createpost">Create Post <i class="icofont-plus"></i></button>
                            </div>
                                
                        </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <p class="card-title">Post Statistics</p>
                            </div>
                            
                            <div class="card-body">
                                new - update
                            </div>
                        </div>
                    </div>
</div>
        </div>

    </div>
</div>







  <script>
    CKEDITOR.replace('editor1', {
      uiColor: '#CCEAEE',
      removeButtons: 'PasteFromWord'
    });
  </script>

<?php include('include/close.php');?> 