<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
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
        
        <!--Admin styling -->        
        <link rel="stylesheet" href="../../assets/css/admin.css">
        
               
        <title>Admin Section - Manage Topic</title>
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
                    <a href="create.php" class="btn btn-big">Add Topic</a>
                    <a href="index.php" class="btn btn-big">Manage Topics</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Manage Topics</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                    
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
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