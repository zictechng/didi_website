<?php include("site_name.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Services <?php echo $companyName;?> || <?php echo $companySubTitle;?> </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.html" />
    <meta name="description" content="<?php echo $companyDes;?> " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/brote-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/brote.css" />
    <link rel="stylesheet" href="assets/css/brote-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header clearfix">
        <?php include("top_bar_pages.php"); ?>
        <?php include("nav_bar_pages.php");?>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-bubble"><img src="assets/images/shapes/page-header-bubble.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    
                    <h2>Services</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We’re Offering</span>
                    <h2 class="section-title__title">We Provide the Best Cleaning Services <br> for Our Customers</h2>
                </div>

                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-plumbing"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="plumbing-services.html">Fumigation</a></h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text">We are a well-established company, with a professional and pro-active approach to Fumigation services,pest management and control.</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-worker"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="office-cleaning.html">Office Cleaning</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text">Your office can have a fresh breath every day when we handle your office cleaning. Clean, well-kept facilities enhance corporate image of companies, and provide a healthy environment for customers and employees.</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-laundry"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="laundry-services.html">Laundry Service</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text">We provide home delivery laundry services for your convenient! You don't have to carry your dirty clothes around anymore. Contact us we will be right there. </p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-washing-plate"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="kitchen-cleaning.html">Home Cleaning</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text">Kitchen gets dirty faster than any other room in the house.
But we can help keep your kitchen clean with our professional cleaning services.</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-window-cleaner"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="window-cleaning.html">Deep Cleaning</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text">We provide a thorough deep scrubbing of all surfaces, even hard-to-reach areas. Applying disinfection chemicals to destroy microorganisms, all area in the house are reached.</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="services-one__single-top-bubble"
                                style="background-image: url(assets/images/shapes/services-one-single-top-bubble.png);">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-sanitary"></span>
                            </div>
                            <div class="services-one__single-inner">
                                <div class="services-one__title-box">
                                    <h3 class="services-one__title"><a href="toilet-cleaning.html">Toilet Cleaning</a>
                                    </h3>
                                </div>
                                <div class="services-one__text-box">
                                    <p class="services-one__text">Everyday use creates an environment for the development of bacterias, microbes, mold, limescale that accumulate on all surfaces which could endanger people health. Contact us for Deep Bathroom Cleaning</p>
                                </div>
                            </div>
                            <div class="services-one__overly-box"
                                style="background-image: url(assets/images/shapes/services-one-single-overlay-bg-1.png);">
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
                            <div class="section-title text-left">
                                <h3 class="services-one__title">We offer but not limited to:</h3>
                                <br/><br/>
                                <div class="get-to-know__points-box">
                                    <ul class="list-unstyled get-to-know__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Deep Cleaning</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Post-construction Cleaning</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled get-to-know__points get-to-know__points--two">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Industrial Cleaning</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Home/Office Cleaning</p>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                    <ul class="list-unstyled get-to-know__points get-to-know__points--two">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Daily Maintenance Cleaning</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Live-in Domestic Help</p>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>

                                <div class="get-to-know__points-box">
                                <ul class="list-unstyled get-to-know__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>Fumigation(pest control)</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick"></span>
                                        </div>
                                        <div class="text">
                                            <p>And More...</p>
                                        </div>
                                    </li>
                                </ul>
                             </div>
                            </div>
            </div>
                
        </section>
        <!--Services One End-->

        <!--Brand One Start-->
       
        <!--Brand One End-->

        <!--FAQ One Start-->
        <?php include("home_ask_question.php"); ?>
        <!--FAQ One End-->

        <!--Information Start-->
        <?php include("call_action_page.php");?>
        <!--Information End-->

        <!--Site Footer Start-->
        <?php include("footer.php"); ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->


    <?php include("mobile_nav.php") ?>
    <!-- /.mobile-nav__wrapper -->
 
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>

    <!-- template js -->
    <script src="assets/js/brote.js"></script>
</body>
</html>