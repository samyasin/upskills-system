<?php include_once 'includes/db_connection.php';?>
<?php include_once 'includes/header-ar.php'; ?>


        <!-- Home -->
        <div id="home" class="hero-area">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
            <!-- /Backgound Image -->

            <div class="home-wrapper">
                <div class="container">
                    <div class="row">
                        <div  class="col-md-8">
                            <h1 class="white-text">اكاديمية تطوير المهارات للاستشارات التعليمية  </h1>
                         <!--   <p class="lead white-text">للتدريب والاستشارات </p>-->
                            <p  class="lead white-text">مرحبًا بك في أكاديمية تطوير المهارات للاستشارات التعليمية! إذا كنت تبحث عن مستقبل واعد ، وتبحث عن معلم يطور المهارات  الحياتية فقد وجدت المكان المناسب. </p>
                            <!--<a class="main-button icon-button" href="#">Get Started!</a>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Home -->

        <!-- About -->
        
            
            <div id="about" class="section" >
               
            
            
  
           
        

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row" id="about">

                    <div class="col-md-6">
                        <div class="section-header">
                            <h2 style="color: orange; font-family:'Lalezar', cursive;">اهلا بك في اكاديمية تطوير المهارات للاستشارات التعليمية </h2>

                        </div>

                        <!-- feature -->
                        <div  class="feature">                            
                            <i class="feature-icon fa fa-flask " ></i>
                            <div class="feature-content">
                                <h4 >الخبرة العملية  </h4>
                                <p>تركز أكاديميتنا في الغالب على كيفية توفير الخبرة العملية لتأهيل طلابنا لسوق العمل في مختلف المجالات.</p>
                            </div>
                        </div>
                        <!-- /feature -->

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-users"></i>
                            <div class="feature-content">
                                <h4>المعلمون الخبراء</h4>
                                <p>لا يضم فريقنا فقط المعلمين ولكن أيضًا القادة الذين لديهم خبرة كافية لتمرير المهارات الفنية والتكتيكات العامة ودروس الحياة.</p>
                            </div>
                        </div>
                        <!-- /feature -->

                        <!-- feature -->
                        <div class="feature">
                            <i class="feature-icon fa fa-comments"></i>
                            <div class="feature-content">
                                <h4>تواصل اجتماعي</h4>
                                <p>وتتبع وحدتنا التخطيط الاستراتيجي وتطوير الفريق ، فنحن نظام تعاون كامل ، في UPSKILLS سوف تكون محاطًا بأسرتك الداعمة.</p>
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
                        <h2>اكتشف الدورات</h2>
                        
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
                        $query = "select * from category";
                        //just for arabic query 
                        mysqli_set_charset($link, "utf8");
                        $result = mysqli_query($link, $query);
                        while ($row = mysqli_fetch_assoc($result)) {                            
                            echo '<div class="col-md-3 col-sm-6 col-xs-6">';
                            echo '<div class="course">';
                            echo "<a href='course-ar.php?cat_id={$row['cat_id']}' class='course-img'>";
                            echo "<img src='uploads/{$row['cat_image']}' style='width: 300px;height: 180px;'>";
                            echo '<i class="cou0rse-link-icon fa fa-link"></i></a>';
                            echo "<a class='course-title' href='#'>{$row['ar_name']}</a>";
                            echo '<div class="course-details"></div></div></div>';
                        }
                        ?>
                    </div>
                    <!-- /row -->

                </div>
                <!-- /courses -->

                <div class="row">
                    <div class="center-btn">
                        <a class="main-button icon-button" href="#">كل الدورات</a>
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
                        <h2 class="white-text">معرض الصور</h2>
                        <p class="lead white-text">دع الصور تتحدث</p>
                        <a class="main-button icon-button" href="photo-ar.php">المزيد من الصور</a>

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
                        <h2>لماذا اكاديمية تطوير المهارات للاستشارات التعليمية ؟</h2>
                        <p class="lead"> </p>
                    </div>

                    <!-- feature -->
                    <div class="col-md-4" id="ab">
                        <div class="feature">
                            <i class="feature-icon fa fa-flask"></i>
                            <div class="feature-content">
                                <h4>الخبرة العملية </h4>
                                <p>في الوقت الحاضر ، من أجل العثور على وظيفة في هذه السوق التنافسية يجب أن تكون من ذوي الخبرة والمؤهلين. هل تساءلت يومًا كيف يمكنني تحسين نفسي؟ حسنا، نحن نمتلك الاجابة. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-users"></i>
                            <div class="feature-content">
                                <h4>المعلمون الخبراء</h4>
                                <p>ينشئ مدرسونا مناخًا مثاليًا للفصول الدراسية للتعلم. نعتمد أقل على الثناء والمزيد على تقديم ردود فعل فعالة. نأمل فقط في إنشاء مجتمع منتج.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="feature-icon fa fa-comments"></i>
                            <div class="feature-content">
                                <h4>الاحداث</h4>
                                <p>ننظم مجموعة واسعة من الأحداث للتواصل مع الناس في الأردن ، وتؤدي المناقشات إلى تبادل الأفكار والأفكار عالية العائد.  </p>
                            </div>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>
                <!-- /row -->

                <hr class="section-hr">

                <!-- row -->
                <div class="row">

                    <div class="col-md-6" style="padding-right:50px;">
                        <h3>إليك فيديو يتضمن عائلة UPSKILLS. </h3>
                        <!--<p class="lead">وحده يمكننا أن نفعل القليل جدا. معا يمكننا أن نفعل الكثير</p>-->
                        <p>"صحيح أنه يمكنك أن تنجح بشكل أفضل وأسرع من خلال مساعدة الآخرين على النجاح. "- نابليون هيل</p>
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
                        <h2 class="white-text">تواصل معنا</h2>
                        <p class="lead white-text">لتتعرف من نحن  </p>
                        <a class="main-button icon-button" href="contact-ar.php">تواصل معنا الان </a>
                    </div>

                </div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /Contact CTA -->

        <!-- Footer -->
       <?php include_once'includes/footer-ar.php';?>
       