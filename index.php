<?php
include('temp/header.php');
?>

<section class="hero-slide-wrapper hero-2">
    <div class="hero-text">RiskInsur Tech</div>
    <div class="hero-slider-2 owl-carousel">
        <!-- Slide 1 -->
        <div class="single-slide bg-cover" style="background-image: url('assets/img/home2/cs5.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-4">
                        <div class="hero-contents">
                            <!-- <h1>Insurance AI Solutions</h1> -->
                            <p>Next Gen AI solutions for businesses in risk & claims landscape.</p>
                            <a href="about.php" class="theme-btn minimal-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Text Columns for Slide 1 -->
                <div class="row highlight-group">
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                            <p>Insurance AI Solutions</p>
                        </div>
                        <div class="underline" data-slide="0"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                            <p>Insurance GenAI Solutions</p>
                        </div>
                        <div class="underline" data-slide="1"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                            <p>Insurance ML Solutions</p>
                        </div>
                        <div class="underline" data-slide="2"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="single-slide bg-cover" style="background-image: url('assets/img/home2/cs6.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-4">
                        <div class="hero-contents">
                            <!-- <h1>Insurance GenAI Solutions</h1> -->
                            <p>AI revolution for your insurance business made simple & reliable for future.</p>
                            <a href="gen-ai.php" class="theme-btn minimal-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Text Columns for Slide 2 -->
                <div class="row highlight-group">
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                            <p>Insurance AI Solutions</p>
                        </div>
                        <div class="underline" data-slide="0"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                            <p>Insurance GenAI Solutions</p>
                        </div>
                        <div class="underline" data-slide="1"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents">
                            <p>Insurance ML Solutions</p>
                        </div>
                        <div class="underline"  data-slide="2"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="single-slide bg-cover" style="background-image: url('assets/img/home2/cs4.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-4">
                        <div class="hero-contents">
                            <!-- <h1>Insurance ML Solutions</h1> -->
                            <p>Custom Machine Learning solutions for the Insurance industry.</p>
                            <a href="about.php" class="theme-btn minimal-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Text Columns for Slide 3 -->
                <div class="row highlight-group" >
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                            <p>Insurance ML Solutions</p>
                        </div>
                        <div class="underline" data-slide="0"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents">
                            <p>Insurance GenAI Solutions</p>
                        </div>
                        <div class="underline"  data-slide="1"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents"  >
                            <p>Insurance ML Solutions</p>
                        </div>
                        <div class="underline" data-slide="2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Owl Carousel CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
$(document).ready(function(){
    var autoplayTimeout = 3000; // Time between slides in milliseconds
    var autoplaySpeed = 1000;   // Speed of the transition in milliseconds
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 1000,
        animateOut: 'fadeOut',
        items: 1,
        onChanged: resetAndStartLoadingBar,  // Custom function to highlight text
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    function highlightText(event) {
        var activeIndex = event.item.index - event.relatedTarget._clones.length / 2;
        var totalItems = event.item.count;
        activeIndex = (activeIndex % totalItems + totalItems) % totalItems;
        console.log(activeIndex)
        $('.underline').removeClass('highlight');
        $('.underline[data-slide="' + activeIndex + '"]').addClass('highlight');

        // Start countdown to change underline color
        changeUnderlineColor(activeIndex);
    }

    function changeUnderlineColor(activeIndex) {
        var interval = 100; // Check interval in milliseconds
        var elapsedTime = 0;
        var underline = $('.underline[data-slide="' + activeIndex + '"] .underline');

        var timer = setInterval(function() {
            elapsedTime += interval;
            var percentage = elapsedTime / autoplayTimeout;
            var color = getColorBasedOnTime(percentage);
            //console.log(color)
            underline.css('background-color', color);

            if (elapsedTime >= autoplayTimeout) {
                clearInterval(timer);
            }
        }, interval);
    }

    function getColorBasedOnTime(percentage) {
        // Example: color transition from green to red
        var startColor = {r: 0, g: 255, b: 0}; // Green
        var endColor = {r: 255, g: 0, b: 0}; // Red

        var r = Math.round(startColor.r + (endColor.r - startColor.r) * percentage);
        var g = Math.round(startColor.g + (endColor.g - startColor.g) * percentage);
        var b = Math.round(startColor.b + (endColor.b - startColor.b) * percentage);

        return 'rgb(' + r + ',' + g + ',' + b + ')';
    }

    // Initial highlight for the first slide
    $('.underline[data-slide="0"]').addClass('highlight');
    function resetAndStartLoadingBar(event) {
        // Calculate the relative index of the active slide
        var activeIndex = event.item.index - event.relatedTarget._clones.length / 2;
        var totalItems = event.item.count;

        // Normalize index to handle looping
        activeIndex = (activeIndex % totalItems + totalItems) % totalItems;

        // Stop any ongoing animations and reset all loading bars
        $('.underline').stop(true, true).css('width', '0');

        // Animate the underline corresponding to the active slide
        $('.underline[data-slide="' + activeIndex + '"]').animate({ width: '100%' }, autoplayTimeout, 'linear');
    }

    // Initial start of the loading bar for the first slide
    resetAndStartLoadingBar({ item: { index: 0, count: $('.owl-carousel .single-slide').length }, relatedTarget: { _clones: [] } });
});
</script>
<style>
    .highlight {
        background-color: red; /* Highlight background color */
        color: red !important;
}
.underline {
    height: 2px;
    width: 100%;
    background-color: red;
    transition: background-color 0.3s ease; /* Smooth transition for color change */
    margin-top: 5px; /* Space between text and line */
}
    </style>
<section class="features-wrapper features-2 section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-6">
                <div class="row mtm-30">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="cloud-computing.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-monitor"></i>
                                </div>
                                <h4><a href="cloud-computing.php">Cloud Computing Security</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="security-services.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-pyramid"></i>
                                </div>
                                <h4><a href="security-services.php">Security Services</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="software-service-details.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-diagram"></i>
                                </div>
                                <h4><a href="software-service-details.php">Software Development </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="database-management.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-diagram-1"></i>
                                </div>
                                <h4><a href="database-management.php">Database Management </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="network-service.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-meeting"></i>
                                </div>
                                <h4><a href="network-service.php">Network and Infrastructure </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="it-consulting.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="it-consulting.php">IT Consulting </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="data-management.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="data-management.php">Data Management Services </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="insurance-ai.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href=".php">Insurance AI Solutions </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="insurance-genai.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="data-management.php">Insurance GenAI Solution </a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="insurance-ml.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="data-management.php">Insurance ML Solutions </a></h4>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-stats"></i>
                            </div>
                            <h4><a href="#">Data Management Services</a></h4>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-12 col-xl-5 offset-xl-1 mt-5 mt-xl-0">
                <div class="section-title">
                    <p>How can help you</p>
                    <h1>Business Solutions To Growth Business</h1>
                </div>
                <p class="mt-20">RiskInsurTech has established itself as a preferred partner for providing high-quality
                    support services in the insurance market by leveraging its extensive industry knowledge, expertise
                    in business processes, global delivery capabilities, flexible engagement models, and a track record
                    of successful projects.
                    RiskInsurTech, is based in Cerritos, California, focuses on providing specialized services to the
                    insurance industry. Our clients include prominent insurance carriers, third-party administrators,
                    JPAs, and self-insured corporations.</p>
                <a href="about.php" class="theme-btn mt-30">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <svg class="feature-bg">
        <path fill-rule="evenodd" opacity="0.039" fill="rgb(8, 106, 215)"
            d="M-0.000,232.999 C-0.000,232.999 239.131,-52.566 575.000,47.000 C910.869,146.565 1087.000,55.653 1231.000,19.999 C1375.000,-15.654 1800.820,-31.520 1915.000,232.999 C1445.000,232.999 -0.000,232.999 -0.000,232.999 Z" />
    </svg>
</section>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 pr-xl-5">
                <div class="section-title mb-30">
                    <p>About Company</p>
                    <h1>7+ Year Of Experience <br> In IT Solutions</h1>
                </div>

                <p class="pr-md-5">RiskInsurTech is an IT services company specializing in providing quality support
                    services to the insurance industry. Headquartered in Cerritos, California, we have established
                    ourselves as a trusted partner for leading insurance carriers, third-party administrators, JPAs, and
                    self-insured corporations. Our expertise in business processes, global delivery capabilities, and
                    flexible engagement models has enabled us to deliver successful projects and earn proven
                    credentials. At RiskInsurTech, we are committed to serving the insurance industry with our deep
                    industry knowledge and unwavering dedication to quality services
                </p>

                <div class="about-check-list d-flex">
                    <div class="banner bg-cover" style="background-image: url('assets/img/about_list.jpg')"></div>

                    <ul class="checked-list">
                        <li>Cloud Computing Security</li>
                        <li>Security Services</li>
                        <li>Software Development Services</li>
                        <li>Database Management Services</li>
                        <li>Network and Infrastructure </li>
                        <li>IT Consulting Services</li>
                        <li>Data Management Services</li>
                    </ul>
                </div>

            </div>

            <div class="col-xl-6 col-md-10 col-lg-6 pl-xl-5 col-12 mt-5 mt-xl-0">
                <div class="about-thum">
                    <div class="item top-image text-right">
                        <img src="assets/img/about-big-thumb-1.jpg" alt="rrdevs">
                    </div>
                    <div class="item bottom-image">
                        <img src="assets/img/about-big-thumb-2.jpg" alt="rrdevs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="funfact-wrapper bottom text-white">
    <div class="container">
        <div class="funfact-content-grid bg-cover" style="background-image: url('assets/img/funfact-line.png')">
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-gem"></i>
                </div>
                <h3>50</h3>
                <p>Project Completed</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-drafting-compass"></i>
                </div>
                <h3>85</h3>
                <p>Expert Consultants</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-stars"></i>
                </div>
                <h3>96</h3>
                <p>5 Stars Rating</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-trophy-alt"></i>
                </div>
                <h3>25</h3>
                <p>Awards Winning</p>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="services-wrapper service-1 section-padding section-bg">
        <div class="container">
            <div class="row mb-50">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-white text-center">
                        <p>IT services</p>
                        <h1>Our Professional Solutions <br>
                            For IT Business</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item">
                        <div class="icon">
                            <img src="assets/img/icon/sicon1.png" alt="service">
                        </div>
                        <h4>Cloud Computing Security</h4>
                        <p>Our certified Cloud DevOps Engineers provide app development and management services , on the cloud</p>
                        <a href="#">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item">
                        <div class="icon">
                            <img src="assets/img/icon/sicon2.png" alt="service">
                        </div>
                        <h4>Security Services</h4>
                        <p>Our team of experts provides comprehensive security solutions to identify and prioritize your organization's security risks</p>
                        <a href="#">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item">
                        <div class="icon">
                            <img src="assets/img/icon/sicon3.png" alt="service">
                        </div>
                        <h4>Software Development</h4>
                        <p>Our full-stack teams comprise designers, architects, developers, QA specialists, and deployment experts.</p>
                        <a href="#">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 col-12">
                    <div class="single-service-item">
                        <div class="icon">
                            <img src="assets/img/icon/sicon4.png" alt="service">
                        </div>
                        <h4>Database Management Services</h4>
                        <p>We specialize in optimizing your data systems to ensure uninterrupted performance  </p>
                        <a href="#">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- <section class="faq-section section-padding">
        <div class="faq-bg bg-cover d-none d-lg-block" style="background-image: url('assets/img/faq_home_2.jpg')"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                    <div class="col-12 col-lg-12 mb-40">
                        <div class="section-title">
                            <p>Why choose us</p>
                            <h1>Innovating Solutions <br> Digital Mindset</h1>
                        </div>
                    </div>

                    <div class="faq-content">
                        <div class="faq-accordion">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="faq1">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-1">
                                            Can I Get Internet In My Area?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header" id="faq2">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" href="#faq-2">
                                                How Helping Solve Climate Change ?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-2" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-3">
                                                How To Integrate Social Mobile Web ?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header" >
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                                Mobile Emails Increase Conversion ?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin 
                                        </div>
                                    </div>
                                </div> 
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- <section class="our-team-wrapper section-padding">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-12 col-md-7 text-center text-md-left">
                    <div class="section-title">
                        <p>Exclusive Members</p>
                        <h1>Meet Our Experience Team Members</h1>
                    </div>
                </div>
                <div class="col-12 col-md-5 mt-4 mt-md-0 text-center text-md-right">
                    <a href="team.html" class="theme-btn off-white">View all Member <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="team-members-list row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team1.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Wallace S. Camacho</h4>
                            <p>Business Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member active">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team2.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Lawrence Pacheco</h4>
                            <p>Web Developer</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team3.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Timothy L. Figueroa</h4>
                            <p>Business Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team4.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Michael L. Branch</h4>
                            <p>Product Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->

<!-- <section class="case-study-carousel-wrapper">
        <div class="container text-center">
            <div class="case-study-items owl-carousel">
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs1.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Business Knowladge</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Business Knowladge</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs2.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Market Leader Idea</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Market Leader Idea</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs3.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Relationship Buildup</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Relationship Buildup</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs1.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Business Knowladge</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Business Knowladge</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs3.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Relationship Buildup</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Relationship Buildup</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- <section class="consultations-wrapper section-padding bg-contain pb-0" style="background-image: url('assets/img/circle-bg-2.png')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5">
                    <h1>Don’t Hesited To <br> Contact With Us, We’re  Very Friendly </h1>
                    <p class="mt-3">Sed ut perspiciatis unde omnis natus error sit voluptatem 
                        accusa ntium doloremque laudantium totam rem aperiamea
                        queipsa quae abillo inventore veritatise.</p>

                    <div class="call-consultation mt-30 mb-40">
                        <div class="icon">
                            <i class="fal fa-phone-plus"></i>
                        </div>
                        <div class="content">
                            <span>Phone Number</span>
                            <h5><a href="tel:+012 (345) 789 66">+012 (345) 789 66</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
                    <div class="consultations-form text-white">
                        <p>let’s talk with us</p>
                        <h1>Free Consultations</h1>
                        <form action="#">
                            <input type="text" placeholder="Full Name Here">
                            <input type="email" placeholder="Email Address">
                            <textarea placeholder="Write Message"></textarea>
                            <button class="theme-btn" type="submit">Get Free Quote <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- <section class="testimonial-wrapper pt-50 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="testimonial-carousel-2 owl-carousel owl-theme">
                        <div class="single-testimonial active">
                            <div class="icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <h2>On the other hand denounc with
                                ghteo indignation and dislike men 
                                who so beguiled and demoralized 
                                the charms of pleasure the momen
                                blinded by desire cannot foresee 
                                the pain and trouble.</h2>
                            <div class="client-info">
                                <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                                <div class="client-bio">
                                    <h3>Salman Ahmed</h3>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <h2>On the other hand denounc with
                                ghteo indignation and dislike men 
                                who so beguiled and demoralized 
                                the charms of pleasure the momen
                                blinded by desire cannot foresee 
                                the pain and trouble.</h2>
                            <div class="client-info">
                                <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                                <div class="client-bio">
                                    <h3>Rahul M. McLean</h3>
                                    <p>WordPress Expert</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <h2>On the other hand denounc with
                                ghteo indignation and dislike men 
                                who so beguiled and demoralized 
                                the charms of pleasure the momen
                                blinded by desire cannot foresee 
                                the pain and trouble.</h2>
                            <div class="client-info">
                                <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                                <div class="client-bio">
                                    <h3>Salman Ahmed</h3>
                                    <p>Frontend Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->

<!-- <div class="client-brand-logo-wrap">
    <div class="container">
        <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
            <div class="single-client">
                <img src="assets/img/brand/1.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/2.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/3.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/4.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/b4.png" alt="">
            </div>
        </div>
    </div>
</div> -->

<section class="cta-banner">
    <div class="container-fluid bg-cover section-bg" style="background-image: url('assets/img/cta_bg1.png')">
        <div class="cta-content">
            <div class="row align-items-center">
                <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                    <h1>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h1>
                </div>
                <div class="col-xl-5 col-12 text-center text-xl-right">
                    <a href="contact.php" class="theme-btn mt-4 mt-xl-0">Get a quote <i
                            class="fas fa-arrow-right"></i></a>
                    <a href="#" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn">read more <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
   include('temp/footer.php');
   ?>