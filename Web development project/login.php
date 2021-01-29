<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
guestOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge0">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <link rel="stylesheet" href="assets/css/style.css">
        
        <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

        
        <title>Login</title>
    </head>
    <body>
        <!--header-->
        <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


        <div class="auth-content">
            <form action="login.php" method="post">
                <h2 class="form-title">Login</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>
                <div>
                    <button type="submit" name="login-btn" class="btn btn-big">Login</button>
                </div>
                <p>Don't yet have an account? <a href="<?PHP echo BASE_URL .'/register.php' ?>">Sign Up</a></p>
            </form>
        </div>
       
        
        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Custom Script-->
        <script src="assets/js/scripts.js"></script>
        
    </body>
</html>