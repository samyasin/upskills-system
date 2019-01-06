

<?php
include 'includes/db_connection.php';
include_once 'includes/header.php'; 
$query = "select * from course where course_id = {$_GET['course_id']}";
$result = mysqli_query($link, $query);
$courseSet = mysqli_fetch_assoc($result);
?>
    

        <!-- Hero-area -->
        <div class="hero-area section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
            <!-- /Backgound Image -->

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        
                        <h1 class="white-text">How to Get Started in <?php echo $courseSet['course_name']; ?></h1>
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /Hero-area -->

        <!-- Blog -->
        <div id="blog" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- main blog -->
                    <div id="main" class="col-md-9">

                        <!-- blog post -->
                        <div class="blog-post">
                            <?php echo "<img src='uploads/{$courseSet['course_image']}' height='200' width='600'></a>"; ?>
                        </div>
                        <!-- /blog post -->

                        <!-- blog share -->
                        <div class="blog-share">
                            <?php echo $courseSet['course_desc']; ?>
                        </div>
                        <!-- /blog share -->

                        <!-- blog comments -->
                        <div class="blog-comments">

                            <div class="blog-reply-form">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Hours</th>
                                        <th>Start date</th>
                                        <th>End date</th>                                    
                                    </tr>
                                    <tr>
                                        <td><?php echo $courseSet['hour'] ?></td>
                                        <td> <?php echo $courseSet['start_date'] ?> </td>
                                        <td><?php echo $courseSet['end_date'] ?></td>

                                    </tr>


                                </table>

                                <fieldset> 
                                    <legend>
                                        <h3>ASk For Outline</h3>
                                    </legend>
                                    <form >
                                        <input class="input name-input" type="text" name="name" placeholder="Name"> 
                                        <input class="input name-input" type="email" name="email" placeholder="Email"> 
                                        <input class="input name-input" type="email" name="mobile" placeholder="Mobile"> 
                                        <input class="input name-input" type="email" name="major" placeholder="Major">
                                        <br>
                                        <button class="main-button icon-button">Submit</button>
                                    </form>



                                </fieldset>
                            </div>
                            <!-- /blog reply form -->

                        </div>
                        <!-- /blog comments -->
                    </div>
                    <!-- /main blog -->

                    <!-- aside blog -->
                    <div id="aside" class="col-md-3">

                        <!-- search widget -->
                        <div class="widget search-widget">
                            <form>
                                <input class="input" type="text" name="search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- /search widget -->

                        <!-- category widget -->
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <?php
                            $query = "select * from category";
                            //just for arabic query 
                            mysqli_set_charset($link, "utf8");
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {                    
                               echo "<a class='category' href='index-ar.php#courses'>{$row['cat_name']} <span></span></a>";
                                
                            }
                            ?>  

                        <!-- /aside blog -->

                    </div>
                    <!-- row -->

                </div>
                <!-- container -->

            </div>
            <!-- /Blog -->

            <!-- Footer -->
            <footer id="footer" class="section">

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        <!-- footer logo -->
                        <div class="col-md-6">
                            <div class="footer-logo">
                                <a class="logo" href="index.html">
                                        <!--<img src="./img/logo.png" alt="logo">-->
                                    <h1 style="color: orange"> UP SKILLS</h1>
                                </a>
                            </div>
                        </div>
                        <!-- footer logo -->

                        <!-- footer nav -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- /footer nav -->

                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div id="bottom-footer" class="row">

                        <!-- social -->
                        <div class="col-md-4 col-md-push-8">
                            <ul class="footer-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- /social -->

                        <!-- copyright -->
                        <div class="col-md-8 col-md-pull-4">
                            <div class="footer-copyright">
                                <span>&copy; Copyright 2018. All Rights Reserved. |made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://web.facebook.com/upskills1/">UP SKILLS</a></span>
                            </div>
                        </div>
                        <!-- /copyright -->

                    </div>
                    <!-- row -->

                </div>
                <!-- /container -->

            </footer>
            <!-- /Footer -->

            <!-- preloader -->
            <div id='preloader'><div class='preloader'></div></div>
            <!-- /preloader -->


            <!-- jQuery Plugins -->
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
