<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
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
        
               
        <title>Admin Section - Add Users</title>
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
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage Users
                    </a>
                </div>
                <div class="content">
                    <h2 class="page-title">Add User</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf"  value="<?php echo $passwordConf; ?>" class="text-input">
                        </div>
                        <div>
                            <?php if (isset($admin) && $admin == 1): ?>
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin                            
                                </label>
                            <?php else: ?>
                                <label>
                                <input type="checkbox" name="admin">
                                Admin                            
                            </label>
                            <?php endif; ?>
                            
                                
                        </div>
                        
                        <div>
                            <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
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