<?php include_once 'includes/db_connection.php'; ?>
<?php include_once 'includes/header.php'; ?>

        <!-- Home -->
        <div id="home" class="hero-area">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
            <!-- /Backgound Image -->

            <div class="home-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="white-text">UPSKILLS ACADEMY </h1>
                            <p class="lead white-text">For Training & Conultations </p>
                            <p class="lead white-text">Welcome to UPSKILLS Academy! If you're seeking a promising future, and looking for a life mentor well you’ve found the right place. </p>
                            <!--<a class="main-button icon-button" href="#">Get Started!</a>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Home -->

        <!-- About -->
        <div id="about" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row" id="about">

                    <div class="col-md-6">
                        <div class="section-header">
                            <h2 style="color: orange">Welcome to UPSKILLS</h2>

                        </div>

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-flask"></i>
                            <div class="feature-content">
                                <h4>Practical experience </h4>
                                <p>Our Academy focuses mostly on how to provide practical experience to qualify our students for the job market in various fields.</p>
                            </div>
                        </div>
                        <!-- /feature -->

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-users"></i>
                            <div class="feature-content">
                                <h4>Expert Teachers</h4>
                                <p>Our team doesn't only include teachers but also leaders who have enough experience to pass on technical skills,general tactics and life lessons.</p>
                            </div>
                        </div>
                        <!-- /feature -->

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-comments"></i>
                            <div class="feature-content">
                                <h4>Community</h4>
                                <p>Our unit follows strategic planning and team development, we are a whole-system of collaboration, in UPSKILLS you'll be surrounded by your supporting family.</p>
                            </div>
                        </div>
                        <!-- /feature -->

                    </div>

                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="./img/about.png" alt="">
                        </div>
                    </div>

                </div>
                <!-- row -->

            </div>
            <!-- container -->
        </div>
        <!-- /About -->

        <!-- Courses -->
        <div id="courses" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">
                    <div class="section-header text-center">
                        <h2>Explore Courses</h2>
                        <p class="lead">show our latest courses.</p>
                    </div>
                </div>
                <!-- /row -->

                <!-- courses -->
                <div id="courses-wrapper">
                <!-- single course -->
                    <!-- row -->
                    <div class="row">
                    <?php
                    // fetch all cat 
                    $query= "select * from category";
                    $result= mysqli_query($link, $query);                            
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<div class="col-md-3 col-sm-6 col-xs-6">';
                        echo '<div class="course">';
                        echo "<a href='course.php?cat_id={$row['cat_id']}' class='course-img'>";
                        echo "<img src='uploads/{$row['cat_image']}' style='width: 300px;height: 180px;'>";
                        echo '<i class="cou0rse-link-icon fa fa-link"></i></a>';
                        echo "<a class='course-title' href='#'>{$row['cat_name']}</a>";
                        echo '<div class="course-details"></div></div></div>';                        
                    }                    
                    ?>
                 </div>
                    <!-- /row -->

                </div>
                <!-- /courses -->

                <div class="row">
                    <div class="center-btn">
                        <a class="main-button icon-button" href="#">More Courses</a>
                    </div>
                </div>

            </div>
            <!-- container -->

        </div>
        <!-- /Courses -->

        <!-- Call To Action -->
        <div id="cta" class="section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/salameh.jpg)"></div>
            <!-- /Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="col-md-6">
                        <h2 class="white-text">photo gallery</h2>
                        <p class="lead white-text">LET PHOTO TALK.....</p>
                        <a class="main-button icon-button" href="photo.php">Get Started!</a>

                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Call To Action -->

        <!-- Why us -->
        <div id="why-us" class="section">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">
                    <div class="section-header text-center">
                        <h2>Why UPSKILLS</h2>
                        <p class="lead"> </p>
                    </div>

                    <!-- feature -->
                    <div class="col-md-4" id="ab">
                        <div class="feature">
                            <i class="feature-icon fa fa-flask"></i>
                            <div class="feature-content">
                                <h4>Practical experience</h4>
                                <p>Nowadays, in order to find a job in this competetive market you have to be well experienced and qualified. Have you ever wondered how do I enhance myself? Well we have the answer. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-users"></i>
                            <div class="feature-content">
                                <h4>Expert Teachers</h4>
                                <p>Our teachers create an optimal classroom climate for learning. We rely less on praise and more on providing effective feedback. We only hope to create a productive community.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-comments"></i>
                            <div class="feature-content">
                                <h4>Events</h4>
                                <p>We organise a wide range of events to reach out to people in Jordan, discussions lead to sharing ideas and high-yielding thoughts.  </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>
                <!-- /row -->

                <hr class="section-hr">

                <!-- row -->
                <div class="row">

                    <div class="col-md-6">
                        <h3>Here's a compressed video inclusive of UPSKILLS' family. </h3>
                        <p class="lead">Alone we can do so little; together we can do so much.</p>
                        <p>"It is literally true that you can succeed best and quickest by helping others to succeed." – Napolean Hill</p>
                    </div>

                   <div class="col-md-5 col-md-offset-1">
                        <!--<a class="about-video" href="#">-->
                        <iframe width="580" height="400" src="https://www.youtube.com/embed/QzBwa_u7w00" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                            <!--<img src="./img/about-video.jpg" alt="">-->
                            <!--<i class="play-icon fa fa-play"> </i>-->
                        <!--</a>-->
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Why us -->

        <!-- Contact CTA -->
        <div id="contact-cta" class="section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
            <!-- Backgound Image -->

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="white-text">Contact Us</h2>
                        <p class="lead white-text">To know about us </p>
                        <a class="main-button icon-button" href="contact.php">Contact Us Now</a>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Contact CTA -->

        
                    
                    <?php include_once'includes/footer.php';?>
           
