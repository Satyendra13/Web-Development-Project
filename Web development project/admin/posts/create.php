<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge0">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <!--google font-->
         <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
        
        
        
        <!--custom styling-->
        <link rel="stylesheet" href="../../assets/css/style.css">
        
        <!--Admin styling-->        
        <link rel="stylesheet" href="../../assets/css/admin.css">
        
               
        <title>Admin Section - Add Post</title>
    </head>
    <body>
        <!--Admin Header-->
        <?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>
        
        <!--Admin page Wrapper-->
        
        <div class="admin-wrapper">  
        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php") ?>
        
        
            <!--Admin Content-->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add post</a>
                    <a href="index.php" class="btn btn-big">Manage post</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Add Post</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                        <div>
                        <label>Body</label>
                            <textarea name="editor" id="editor"><?php echo $editor ?></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        
                        <div>
                            <label>Topic</label>                            
                            <select name="topic_id" class="text-input">
                                <option value=""></option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <?php if (empty($published)): ?>
                                
                            <label>
                                <input type="checkbox" name="published">Publish
                            </label>

                            <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>Publish
                            </label>
                            <?php endif; ?>
                        </div>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                        </div>
                    </form>
                   
                </div>
            </div>
            <!--//Admin Content-->
            
            
        </div>
        <!--//Admin page wrapper-->
        
        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!--ckeditor-->
        <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
        
        <!--custom scripts-->
        <script src="../../assets/js/scripts.js"></script>
        
       
        
    </body>
</html>