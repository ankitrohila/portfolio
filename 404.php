<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antux - Personal Portfolio Template">

    <!-- ========== Page Title ========== -->
    <title>Shared on THEMELOCK.COM - Antux - Personal Portfolio Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

</head>

<body class="bg-fixed" style="background-image: url(assets/img/shape/2.jpg);">

    <!-- Header 
    ============================================= -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">

            <div class="container d-flex justify-content-between align-items-center">            
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="index.php" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version Light</a></li>
                                <li><a href="index-dark.html">Home Version Dark</a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a class="smooth-menu" href="service.php">Services</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="projects.php">Portfolio</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="resume.php">Resume</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="pricing.php">Pricing</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="contact.php">contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button">
                                <a href="#">Let's Talk <i class="fas fa-comment-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->


                </div>
                <!-- Main Nav -->
            </div>  

            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding-bottom pt-200 pt-md-200 pt-xs-160 text-center">
        <!-- Shape -->
        <div class="shape-left" style="background: url(assets/img/shape/44-left.png);"></div>
        <div class="shape-right" style="background: url(assets/img/shape/44-right.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="error-box">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>404</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth.
                        </p>
                        <a class="btn mt-20 btn-md btn-theme" href="index.html">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->


    <?php include 'chatbot/chatbot.php'; ?>
    
    <!-- Start Footer 
    ============================================= -->
    <?php include 'includes/footer.php'; ?>
    <!--Footer Ends 
    ============================================= -->