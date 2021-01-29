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
        
               
        <title>Admin Section - Manage Posts</title>
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
                    <h2 class="page-title">Manage Posts</h2>
                    
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $key => $post): ?> 
                            <tr>
                                <td><?php echo $key +1; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td><?php echo $post['username']; ?></td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                                <?php if ($post['published']): ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
                                <?php else: ?>                               
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
                                <?php endif; ?>
                            </tr>                                
                            <?php endforeach; ?>

                        </tbody>
                        
                    </table>
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