<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>RiskInsur Tech</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="assets/css/metismenu.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<style>
    /* Style for the mobile navigation menu */
    .mobile-nav {
        background-color: black; /* Set the background to black */
        color: white;            /* Set text color to white */
    }

    .mobile-nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* Style each menu item */
    .mobile-nav ul li {
        border-bottom: 1px solid white; /* Add white bottom border to each menu item */
    }

    /* Style for links in the mobile menu */
    .mobile-nav ul li a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 15px 20px;
        font-size: 16px; /* Default font size */
        background: none; /* Ensure no background color change */
    }
    /* Remove background or color change when the li or a is active/selected */
    .mobile-nav ul li.active,
    .mobile-nav ul li.active a,
    .mobile-nav ul li a.active,
    .mobile-nav ul li a:active,
    .mobile-nav ul li a:focus,
    .mobile-nav ul li a:hover {
        background-color: transparent !important; /* Ensure no background color on active */
        color: white; /* Keep the text white */
    }

    /* Reduce font size for smaller devices */
    @media (max-width: 768px) {
        .mobile-nav ul li a {
            font-size: 14px; /* Smaller font size for smaller devices */
            padding: 12px 15px; /* Reduce padding */
        }
    }
        /* Reduce font size for smaller devices */
        @media (max-width: 500px) {
        .mobile-nav ul li a {
            font-size: 14px; /* Smaller font size for smaller devices */
            padding: 12px 15px; /* Reduce padding */
        }
    }

    /* Style for the dropdown icon */
    .mobile-nav ul li a i {
        float: right;
    }

    /* Close button styling */
    .close-nav {
        font-size: 18px;
        color: white;
        background: none;
        border: none;
        padding: 10px;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    /* Action bar styling */
    .action-bar {
        margin-top: 20px;
        padding: 15px;
    }

    .action-bar a {
        color: white;
        display: block;
        padding: 10px 0;
        text-decoration: none;
    }

    /* Overlay when menu is open */
    .overlay {
        background: rgba(0, 0, 0, 0.7);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999;
        display: none; /* Hide until the menu is active */
    }

    /* Show the overlay when menu is open */
    .mobile-nav-wrap.active ~ .overlay {
        display: block;
    }


    </style>

<body class="body-wrapper">    
    
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
                <!-- <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                    R
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        K
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        H
                    </span>
                </div> -->
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- welcome content start from here -->

    <header class="header-wrap header-2">
        <div class="top-header d-none d-md-block">
            <div class="container-flud">
                <div class="row">
                    <div class="col-md-7 pr-md-0 col-12">
                        <div class="header-cta">
                            <ul>
                                <li>
                                  <a href="mailto:info@riskinsurtech.com"><i class="fal fa-envelope"></i> info@riskinsurtech.com</a>
                                </li>
                                <li>
                                  <a href="tel:+1 562-469-9335"><i class="fal fa-phone"></i> +1 562-469-9335</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="header-right-cta d-flex justify-content-end">
                            <div class="social-profile mr-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <!-- <a href="#"><i class="fab fa-behance"></i></a> -->
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            
                            <!-- <div class="lan-select ml-30">
                                <form>
                                    <select id="lan">
                                        <option>English</option>
                                        <option>China</option>
                                        <option>Bangla</option>
                                        <option>Hindi</option>
                                    </select>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                <div class="header-logo">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/insuretechwhite_small.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.php">Services <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="ai.php">AI Solutions</a></li>
                                        <li><a href="gen-ai.php">Gen AI Solutions</a></li>
                                        <li><a href="ml.php">ML Solutions</a></li>
                                        <li><a href="ml.php">Cloud Based Solutions</a></li>
                                        <li><a href="gen-ai.php">DevOps Solutions</a></li>
                                        <li><a href="ml.php">MLOps Solutions</a></li>
                                        <li><a href="ai.php">QA Automation Solutions</a></li>
                                        <li><a href="ml.php">Big Data Solutions</a></li>
                                        <li><a href="gen-ai.php">Web Application development solutions</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.php">Who we serve<i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                        <li><a href="ai.php">TPAs/JPAs</a></li>
                                        <li><a href="gen-ai.php">Insurers</a></li>
                                        <li><a href="ml.php">Self Insured</a></li>
                                        <li><a href="ai.php">Risk Pools</a></li>
                                        <li><a href="ai.php">Software Providers in Risk & Clain Landscapes</a></li>
                                        
                                    </ul>
                                <!-- <li><a href="services.php">Services <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                        <li><a href="cloud-computing.php">Cloud Computing Security</a></li>
                                        <li><a href="security-services.php">Security Services</a></li>
                                        <li> <a href="software-service-details.php">Software Development Services</a></li>
                                        <li> <a href="database-management.php">Database Management Services</a></li>
                                        <li> <a href="network-service.php">Network and Infrastructure Services</a></li>
                                        <li> <a href="it-consulting.php">IT Consulting Services</a></li>
                                        <li> <a href="data-management.php">Data Management Services</a></li>
                                    </ul>
                            </li> -->
                            <li><a href="about.php">Resources <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                        <li><a href="ai.php">Client Success Stories</a></li>
                                        <li><a href="index.php">About</a></li>
                                       
                                    </ul>
                            </li>
                            <li><a href="about.php">Business Resources <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                        <li><a href="ai.php">6 ways gen AI can improve risk and claim landscapes</a></li>
                                        <li><a href="ml.php">What is ai quotient? For P&C Insurers</a></li>
                                        <li><a href="gen-ai.php">AI Insurance, will it take your job</a></li>
                                       
                                    </ul>
                            </li>
                                <!-- <li><a href="cases-grid.html">Case Study</a></li>
                                <li><a href="news.html">News</a></li> -->
                                <!-- <li><a href="contact.php">Contact Us</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <div class="header-btn-cta">
                            <a href="contact.php" class="theme-btn">Schedule a Free Call</a>
                        </div>
                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
    <div class="mobile-nav-wrap">
        <div id="hamburger">
            <i class="fal fa-bars"></i>
        </div>
        <!-- mobile menu - responsive menu  -->
        <div class="mobile-nav">
            <button type="button" class="close-nav">
                <i class="fal fa-times-circle"></i>
            </button>
            <nav class="sidebar-nav">
                <ul class="metismenu" id="mobile-menu">

                    <!-- Services Dropdown -->
                    <li>
                        <a href="services.php">Services <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                        <li><a href="ai.php">AI Solutions</a></li>
                                        <li><a href="gen-ai.php">Gen AI Solutions</a></li>
                                        <li><a href="ml.php">ML Solutions</a></li>
                                        <li><a href="ml.php">Cloud Based Solutions</a></li>
                                        <li><a href="gen-ai.php">DevOps Solutions</a></li>
                                        <li><a href="ml.php">MLOps Solutions</a></li>
                                        <li><a href="ai.php">QA Automation Solutions</a></li>
                                        <li><a href="ml.php">Big Data Solutions</a></li>
                                        <li><a href="gen-ai.php">Web Application development solutions</a></li>
                                    </ul>
                    </li>

                    <!-- Who We Serve Dropdown -->
                    <li>
                        <a href="about.php">Who we serve <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                        <li><a href="ai.php">TPAs/JPAs</a></li>
                                        <li><a href="gen-ai.php">Insurers</a></li>
                                        <li><a href="ml.php">Self Insured</a></li>
                                        <li><a href="ai.php">Risk Pools</a></li>
                                        <li><a href="ai.php">Software Providers in Risk & Clain Landscapes</a></li>
                                        </ul>
                    </li>

                    <!-- Resources Dropdown -->
                    <li>
                        <a href="about.php">Resources <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="ai.php">Client Success Stories</a></li>
                            <li><a href="index.php">About</a></li>
                        </ul>
                    </li>

                    <!-- Business Resources Dropdown -->
                    <li>
                        <a href="about.php">Business Resources <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="ai.php">6 ways Gen AI can improve risk and claim landscapes</a></li>
                            <li><a href="ai.php">What is AI quotient? For P&C Insurers</a></li>
                            <li><a href="ai.php">AI Insurance, will it take your job</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <!-- Action Bar with Contact Info -->
            <div class="action-bar">
                <a href="mailto:info@riskinsurtech.com"><i class="fal fa-envelope-open-text"></i> info@riskinsurtech.com</a>
                <a href="tel:123-456-7890"><i class="fal fa-phone"></i> +1 562-469-9335</a>
                <a href="contact.php" class="d-btn theme-btn black">Consultancy</a>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</div>

                    </div>
                </div>
            </div>
        </div>
    </header>