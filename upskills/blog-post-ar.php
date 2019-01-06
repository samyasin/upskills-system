

<?php
include 'includes/db_connection.php';
include_once 'includes/header-ar.php'; 
$query = "select * from course where course_id = {$_GET['course_id']}";
mysqli_set_charset($link, "utf8");
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
                      
                        
                        <h1 class="white-text">كيف تبدأفي ال <?php echo $courseSet['course_ar_name']; ?></h1>
                        
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
                            <?php echo $courseSet['course_ar_desc']; ?>
                        </div>
                        <!-- /blog share -->

                        <!-- blog comments -->
                        <div class="blog-comments">

                            <div class="blog-reply-form">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th style="text-align: right;">الساعات</th>
                                        <th style="text-align:right;" >بدأ الدورة</th>
                                        <th style="text-align:right;" >انتهاء الدورة</th>                                    
                                    </tr>
                                    <tr>
                                        <td><?php echo $courseSet['hour'] ?></td>
                                        <td> <?php echo $courseSet['start_date'] ?> </td>
                                        <td><?php echo $courseSet['end_date'] ?></td>

                                    </tr>


                                </table>

                                <fieldset> 
                                    <legend>
                                        <h3>اسأل عن الخطة </h3>
                                    </legend>
                                    <form >
                                        <input class="input name-input" type="text" name="name" placeholder="الاسم"> 
                                        <input class="input name-input" type="email" name="email" placeholder="البريد الالكتروني"> 
                                        <input class="input name-input" type="email" name="mobile" placeholder="موبايل"> 
                                        <input class="input name-input" type="email" name="major" placeholder="التخصص">
                                        <br>
                                        <button class="main-button icon-button">ارسال</button>
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
                            
                     
                            
                            
                            
                            
                            
                            
                            
                            <div class="widget category-widget">
                            <h3>الدورات</h3>
                            <?php
                            $query = "select * from category";
                            //just for arabic query 
                            mysqli_set_charset($link, "utf8");
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {                    
                               echo "<a class='category' href='index-ar.php#courses'>{$row['ar_name']} <span></span></a>";
                                
                            }
                            ?>                          

                        </div>
                            
                            
                             
                            


                       
                        <!-- /aside blog -->

                    </div>
                    <!-- row -->

                </div>
                <!-- container -->

            </div>
            <!-- /Blog -->

            <!-- Footer -->
          <?php include_once'includes/footer-ar.php';?>