<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ankit Rohilla — Web Developer</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- CSS -->
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

    <style>
    /* ===== DESKTOP NAV LINKS ===== */
    .desktop-main-nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .desktop-main-nav ul li a {
        display: inline-block;
        color: #222;
        font-weight: 600;
        font-size: 13px;
        padding: 7px 16px;
        border-radius: 30px;
        text-decoration: none;
        letter-spacing: 0.3px;
        transition: background 0.2s, color 0.2s;
    }
    .desktop-main-nav ul li a:hover,
    .desktop-main-nav ul li a.active {
        background: #5544FF;
        color: #fff !important;
    }

    /* ===== STICKY HEADER — compact + color fixes ===== */
    .navbar-sticky.navbar-fixed.sticked {
        padding: 2px 0 !important;
        min-height: auto !important;
    }
    .navbar-sticky.navbar-fixed.sticked .navbar-brand img {
        max-height: 30px !important;
    }
    .navbar-sticky.navbar-fixed.sticked .desktop-main-nav ul li a {
        color: #222;
    }
    .navbar-sticky.navbar-fixed.sticked .desktop-main-nav ul li a:hover,
    .navbar-sticky.navbar-fixed.sticked .desktop-main-nav ul li a.active {
        background: #5544FF;
        color: #fff !important;
    }

    /* ===== HIDE HAMBURGER ON DESKTOP ===== */
    @media (min-width: 992px) {
        .attr-right .attr-nav { display: none !important; }
        .attr-right .col-lg-2 { display: none !important; }
    }

    /* ===== BRAND TICKER — keep headings single-line ===== */
    .brand-style-one .item h2 {
        white-space: nowrap !important;
    }

    /* ===== PRELOADER FIX — full solid overlay ===== */
    .preloader {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        background: #0d0d0d !important;
        z-index: 999999999 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    .preloader svg { display: none !important; }

    /* ===== GLOBAL MOBILE RESPONSIVE ===== */
    @media (max-width: 991px) {
        /* Navbar */
        .navbar .container { flex-wrap: wrap; }
        .collapse.navbar-collapse { display: none; }
        .attr-right { margin-left: auto; }

        /* Banner */
        .banner-style-one-area .col-xl-4,
        .banner-style-one-area .col-xl-8 { flex: 0 0 100%; max-width: 100%; }
        .banner-style-one-area .pl-80 { padding-left: 15px !important; }
        .banner-style-one-area h1 { font-size: 36px; }
        .banner-style-one-area h2 { font-size: 24px; }
        .banner-style-one-area .top { flex-direction: column; }
        .banner-style-one-area .top .right { margin-top: 16px; }

        /* Side Menu — show as overlay */
        .side { width: 280px !important; }

        /* Footer */
        footer .col-lg-5,
        footer .col-lg-6 { flex: 0 0 100%; max-width: 100%; margin-bottom: 30px; }
        footer .offset-lg-1 { margin-left: 0; }
        footer .footer-items { flex-direction: column; }

        /* Project strips */
        .project-strip .row { flex-direction: column !important; }
        .project-strip .col-lg-7,
        .project-strip .col-lg-5 { flex: 0 0 100%; max-width: 100%; }
        .project-strip .info-col,
        .project-strip .info-col[style] { padding: 28px 0 !important; }

        /* Proj detail */
        .proj-detail-hero h1 { font-size: 32px !important; }
        .proj-detail-hero { min-height: 320px; padding-bottom: 36px; }
        .proj-info-card { position: static; margin-top: 32px; }
        .col-lg-8.pr-lg-5 { padding-right: 15px !important; }

        /* General containers */
        .container { padding-left: 20px; padding-right: 20px; }
        .default-padding { padding: 60px 0 !important; }
    }

    @media (max-width: 575px) {
        .portfolio-hero h1 { font-size: 28px !important; }
        .project-strip .info-col h2 { font-size: 24px !important; }
        .project-strip .info-col .proj-number { font-size: 54px; }
        .project-strip { padding: 50px 0 !important; }
        .proj-detail-hero h1 { font-size: 26px !important; }
        .proj-detail-hero .hero-meta { font-size: 13px; }
        .proj-detail-hero .hero-meta span { display: block; margin-bottom: 6px; }
        .proj-cta h3 { font-size: 24px !important; }
        .proj-nav-bar .row > .col-6 { font-size: 13px; }
        .btn-primary-proj, .btn-outline-proj { padding: 10px 18px; font-size: 13px; }
        .screenshot-card { height: 220px !important; }
        footer h2 { font-size: 26px; }
    }
    </style>
</head>

<body class="bg-fixed light-mode" style="background-image: url(assets/img/shape/2.jpg);">

<!-- WRAPPER START -->
<div class="wrapper">

<!-- PRELOADER -->
<div class="preloader" id="site-preloader">
    <div class="preloader-heading">
        <div class="load-text">
            <span>A</span><span>N</span><span>K</span><span>I</span><span>T</span>
        </div>
    </div>
</div>
<script>
/* Dismiss preloader after 1.4s — no GSAP SVG wave */
window.addEventListener('load', function(){
    var pl = document.getElementById('site-preloader');
    setTimeout(function(){
        pl.style.transition = 'opacity 0.5s ease';
        pl.style.opacity = '0';
        setTimeout(function(){ pl.style.display = 'none'; }, 500);
    }, 1000);
});
</script>

<!-- HEADER -->
<header>
<nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs nav-full-width navbar-fixed">

<div class="container d-flex justify-content-between align-items-center">

<!-- LOGO -->
<div class="col-xl-2 col-lg-3 col-6">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
        </a>
    </div>
</div>

<!-- DESKTOP NAV LINKS (visible lg+) -->
<div class="col-xl-7 col-lg-6 d-none d-lg-flex align-items-center justify-content-center">
    <nav class="desktop-main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="projects.php">Portfolio</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</div>

<!-- MENU BUTTON -->
<div class="attr-right col-xl-3 col-lg-3 col-6 d-flex justify-content-end align-items-center">
    <div class="attr-nav flex">
        <ul>
            <li class="side-menu">
                <a href="#">
                    <strong>MENU</strong>
                    <div class="line">
                        <span class="bar-1"></span>
                        <span class="bar-2"></span>
                        <span class="bar-3"></span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- SIDE MENU -->
    <div class="col-lg-2">
        <div class="side">
            <a href="#" class="close-side">
                Close <i class="fas fa-times"></i>
            </a>

            <div class="widget">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>

            <div class="widget">
                <div class="side-navbar-inner">
                    <div class="simple-menu">
                        <ul class="simple-menu-list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="projects.php">Portfolio</a></li>
                            <li><a href="resume.php">Resume</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

</div>

<!-- OVERLAY -->
<div class="overlay-screen"></div>

</nav>
</header>
