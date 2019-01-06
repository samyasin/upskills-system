<?php
include 'includes/db_connection.php';
include_once 'includes/header.php'; 

$query = "select * from course where cat_id = {$_GET['cat_id']}";
$result = mysqli_query($link, $query);
//print_r(mysqli_error($link));
while ($row = mysqli_fetch_assoc($result)) {
    //   echo '<pre>';
//   print_r($row);
//    echo '<div class="col-md-3 col-sm-6 col-xs-6">';
//    echo '<div class="course">';
////                        echo "<a href='course.php?cat_id={$row['cat_id']}' class='course-img'>";
//    echo "<img src='uploads/{$row['course_image']}' style='width: 300px;height: 180px;'>";
//    echo '<i class="cou0rse-link-icon fa fa-link"></i></a>';
//    echo "<a class='course-title' href='#'>{$row['course_name']}</a>";
//    echo '<div class="course-details"></div></div></div>';
}
?>

        <!-- Hero-area -->
        <div class="hero-area section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
            <!-- /Backgound Image -->

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <ul class="hero-area-tree">
                            <li><a href="index.html">course</a></li>
                            <li>details</li>
                        </ul>
                        <h1 class="white-text">COURSE DETAILS</h1>

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

                        <!-- row -->
                        <div class="row">

                            <!-- single blog -->
                            <?php
                            $query = "select * from course where cat_id = {$_GET['cat_id']}";
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-md-6">';
                                echo '<div class="single-blog">';
                                echo '<div class="blog-img">';
                                echo "<a href='blog-post.php?course_id={$row['course_id']}'>";
                                echo "<img src='uploads/{$row['course_image']}' height='409' width='273'></a></div>";
                                echo" <h4><a href='blog-post.php?course_id={$row['course_id']}'>{$row['course_name']}</a></h4>";
                                echo '<div class="blog-meta"></div></div></div>';
                                
                                
                            }
                            
                            
                            ?>
                            
                            <!-- /single blog -->



                        </div>
                        <!-- /row -->

                        <!-- row -->
                        <div class="row">

                            <!-- pagination -->
                            <div class="col-md-12">
                                <div class="post-pagination">
                                    <a href="index.php" class="pagination-back pull-left">Back</a>
                                    <ul class="pages">
                                        <li class="active">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </ul>
                                    <a href="" class="pagination-next pull-right">Next</a>
                                </div>
                            </div>
                            <!-- pagination -->

                        </div>
                        <!-- /row -->
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


                        </div>
                        <!-- /category widget -->

                        <!-- posts widget -->


                        <!-- tags widget -->
                        
                        <!-- /tags widget -->

                    </div>
                    <!-- /aside blog -->

                </div>
                <!-- row -->

            </div>
            <!-- container -->

        </div>
        <!-- /Blog -->

        <!-- Footer -->
      <?php include_once'includes/footer.php';?>
