<!--footer-->
        
<div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                <h1 class="logo-text">drop<span>A</span>line
                </h1>
                    <p></p>
                <div class="contact">
                    <span><i class="fas fa-phone"> &nbsp; 9973112943</i></span>    
                    <span><i class="fas fa-envelope"> &nbsp; satyaku002@gmail.com</i></span>    
                </div>
                    <div class="social">
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <br>
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/quickLink/team.php' ?>">Team</a></li>
                        <li><a href="<?php echo BASE_URL . '/quickLink/mentors.php' ?>">Mentors</a></li>
                        <li><a href="<?php echo BASE_URL . '/quickLink/termAndConditions.php' ?>">Terms and Conditions</a></li>
                        <li><a href="<?php echo BASE_URL . '/quickLink/feedback.php' ?>">Feedback</a></li>
                    </ul>
                </div>
                <div class="footer-section contact-form">
                    <h2>Contact Us</h2>
                    <br>
                    <form action="index.php" method="post">
                        <input type="text" name="name" class="text-input contact-input" placeholder="Your name...">
                        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                        <textarea rows="1" name="message" class="text-input contact-input" placeholder="massage..."></textarea>
                        <button type="submit" name="send" class="btn btn-big contact-btn"><i class="fas fa-envelope"></i>Send</button>
                    </form>
                    <?php 
                    if(isset($_POST['ok'])){
                        include_once 'function.php';
                        $obj=new Contact();
                        $res=$obj->contact_us($_POST);
                        if($res==true){
                            echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                        }else{
                            echo "<script>alert('Something Went wrong!!')</script>";
                        }
                    }
                    ?>
                    
   
                </div>
            </div>
            <div class="footer-buttom">
            &copy; dropAline.com | Designed by Satyendra</div>
        </div>
        
        <!--//footer-->