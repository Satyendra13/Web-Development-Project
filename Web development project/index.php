<?php 

include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/app/helpers/validateContactForm.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . " ' ";
}else if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . " ' ";
    $posts = searchPosts($_POST['search-term']);
}else{
    $posts = getPublishedPosts();
}

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

        
        <title>dropAline</title>
    </head>
    <body>
        <!--header-->
        <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        
        <!-- page Wrapper-->        
        <div class="page-wrapper">  
           
            <!--post slider-->        
            <div class="post-slider">
                <h1 class="slider-title">Trending Post</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>

                    <div class="post-wrapper">
                        <?php foreach ($posts as $post): ?>
                            <div class="post">
                                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                                <div class="post-info">
                                    <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                                    <i class="far fa-user"><?php echo $post['username']; ?></i>
                                    &nbsp;
                                    <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                </div>
                            </div>
                        <?php endforeach; ?>                       
                    </div>
            </div>
            
            <!--//post slider-->
            
        <!--content-->
            
        <div class="content clearfix">
            <!--main cintent-->
            
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>
                
                <?php foreach ($posts as $post): ?>

                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user"><?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text"><?php echo html_entity_decode(substr($post['editor'], 0, 150) . '...'); ?></p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div> 
                    </div>
                <?php endforeach; ?>
            </div>    
            <!--//main content-->
            
            <div class="sidebar">
                <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.php" method="post">
                  <input type="text" name="search-term" class="text-input" placeholder="Search..."> 
                </form>
                </div>
                
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>               
                        <?php endforeach; ?>
                   </ul>
                </div>
                
            </div>
        </div>   
            
        <!--//content-->
            
    </div>
        
        <!--footer-->
        <?php include(ROOT_PATH . "/app/includes/footer.php") ?>
        <?php include(ROOT_PATH . "/app/controllers/contact_us.php") ?>
        
        
        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>        
        
        <!--custom script-->
        <script src="assets/js/scripts.js"></script>
        
        <!--slick cariusel-->        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        
    </body>
</html>