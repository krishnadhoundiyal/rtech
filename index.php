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
                            <a href="ai.php" class="theme-btn minimal-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Text Columns for Slide 1 -->
                <div class="row highlight-group">
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                        <p>Generative AI solutions</p>
                        </div>
                        <div class="underline" data-slide="0"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                        <p>Artifical Intelligence Solutions</p>
                        </div>
                        <div class="underline" data-slide="1"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                        <p>Machine Learning Solutions</p>
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
                        <p>Generative AI solutions</p>
                        </div>
                        <div class="underline" data-slide="0"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                        <p>Artifical Intelligence Solutions</p>
                        </div>
                        <div class="underline" data-slide="1"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents">
                        <p>Machine Learning Solutions</p>
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
                            <a href="ml.php" class="theme-btn minimal-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Text Columns for Slide 3 -->
                <div class="row highlight-group" >
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents" >
                        <p>Generative AI solutions</p>
                        </div>
                        <div class="underline" data-slide="0"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents">
                        <p>Artifical Intelligence Solutions</p>
                        </div>
                        <div class="underline"  data-slide="1"></div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="hero-contents"  >
                        <p>Machine Learning Solutions</p>
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
    var autoplayTimeout = 4000; // Time between slides in milliseconds
    var autoplaySpeed = 1000;   // Speed of the transition in milliseconds
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
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
// Form functionality
    // Enable download button only if all fields are filled
    $('#downloadForm input').on('input', function() {
        if ($('#email').val() && $('#name').val() && $('#phone').val()) {
            $('#downloadBtn').prop('disabled', false);
        } else {
            $('#downloadBtn').prop('disabled', true);
        }
    });

    // Handle the download button click
    $('#downloadBtn').click(function() {
        if (!$(this).prop('disabled')) {
            window.location.href = 'assets/pdf/dummy-pdf_2.pdf'; // Replace with your actual PDF path
        }
    });
});
</script>
<style>

.gradient-background {
        background: linear-gradient(to right, #89a7b8, #ffffff); /* Gradient from light pink to white */
    }

    .input-soft {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 10px;
        font-size: 15px;
        background-color: #fff;
        transition: border-color 0.3s ease;
    }

    .input-soft:focus {
        border-color: #007bff; /* Soft blue on focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2); /* Subtle shadow effect */
    }

    .soft-button {
        background-color: #007bff; /* Common primary color */
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        color: white;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .soft-button:disabled {
        background-color: #cccccc; /* Gray for disabled state */
    }

    .soft-button:hover:not(:disabled) {
        background-color: #0056b3; /* Slightly darker blue on hover */
    }

    .modal-header {
        border-bottom: 1px solid #ddd; /* Soft border for header */
    }

    .modal-title {
        color: #333; /* Neutral color for title */
    }
    #formModal {
        margin-top: 100px; /* Pushes the modal down from the top */
    }

    @media (max-width: 767.98px) {
        /* Adjust modal positioning for smaller screens */
        #formModal {
            margin-top: 100px; /* Less margin on smaller screens for better responsiveness */
        }
    }
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

/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
        .service-details-post-wrapper {
            padding: 20px 10px; /* Smaller padding on mobile */
        }
    }
    </style>
<section class="service-details-post-wrapper section-padding">
<div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
            <a href="index.php">
                        <img src="assets/img/insuretecBlacksmall.png" alt="">
                    </a>
                    <h1 class="mb-4 text-muted">Why choose RiskInsurTech?</h1>
                    <p class="mt-4">
                    Choosing RiskInsurtech means partnering with industry veterans who deeply understand the risk and claims landscape within the insurance sector. Our core team alone, composed of seasoned professionals and data scientists, is dedicated to addressing the unique challenges faced by insurance businesses. We provide a full range of services, including AI, Generative AI, machine learning, NLP, data, and cloud solutions, all specifically tailored to meet the demands of the insurance industry.
                    <br>
                    Our seamless approach combines human expertise with cutting-edge technology to deliver impactful results. Our consultants, data architects, and ML engineers bring extensive industry knowledge and collaborate with top-tier partners to ensure your insurance business gets the right technology solutions. With expansive experience and client acumen, our consulting, advisory, and delivery capabilities are designed to help you overcome your most significant challenges in risk and claims management.
                    <br>
                    At RiskInsurtech, we are committed to responsible practices, ensuring our solutions align with industry standards like HIPAA and GDPR. Whether you're adopting AI, leveraging data, or building scalable cloud platforms, our ability to orchestrate across robust transformation ecosystems keeps your insurance business at the forefront of innovation, empowering you to advance and scale confidently in a competitive market.
                </p>
                    </div>

 <!-- Right side grid 2*2 -->
  <!-- Right Column with 2x2 Grid -->
  <div class="col-md-6">
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                <div class="card h-100 d-flex">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Icon -->
                        <div class="icon mb-2">
                            <i class="flaticon-speech-bubble fa-2x"></i>
                        </div>
                        <!-- Card Title -->
                        <h5 class="card-title">15+ years of industry experience</h5>
                        <!-- Card Text -->
                        <p class="card-text">We deliver expert solutions combining risk and claims knowledge with advanced technology skills.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                <div class="card h-100 d-flex">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Icon -->
                        <div class="icon mb-2">
                            <i class="flaticon-speech-bubble fa-2x"></i>
                        </div>
                        <!-- Card Title -->
                        <h5 class="card-title">Competitive Pricing</h5>
                        <!-- Card Text -->
                        <p class="card-text">The solutions are flexible, scalable, secure, customized to your needs, and cost-effective.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                <div class="card h-100 d-flex">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Icon -->
                        <div class="icon mb-2">
                            <i class="flaticon-speech-bubble fa-2x"></i>
                        </div>
                        <!-- Card Title -->
                        <h5 class="card-title">Industry-Leading Security</h5>
                        <!-- Card Text -->
                        <p class="card-text">We follow HIPAA, CCPA, CPRA, CMIA, and responsible AI practices for PII data protection.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4">
                <div class="card h-100 d-flex">
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Icon -->
                        <div class="icon mb-2">
                            <i class="flaticon-speech-bubble fa-2x"></i>
                        </div>
                        <!-- Card Title -->
                        <h5 class="card-title">Customer-Centric Focus</h5>
                        <!-- Card Text -->
                        <p class="card-text">We personalize every solution to fit your needs and priorities with care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>

            </div>
        </div>
    </div>
</section>
<section class="features-wrapper features-2">
<h2 class="text-muted" style="text-align:center">Our Solutions</h2>

    <div class="container" style="padding-top:2px">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row mtm-30">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="gen-ai.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-monitor"></i>
                                </div>
                                <h4><a href="gen-ai.php">Gen AI Services</a></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="ai.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-pyramid"></i>
                                </div>
                                <h4><a href="ai.php">AI Solutions</a></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="ml.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-diagram"></i>
                                </div>
                                <h4><a href="ml.php">Machine Learning Services</a></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="ml.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-meeting"></i>
                                </div>
                                <h4><a href="ml.php">MLOps and DevOps</a></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="ai.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="ai.php">Cloud Native Solutions</a></h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <a href="gen-ai.php">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="gen-ai.php">Data Management Services</a></h4>
                            </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <svg class="feature-bg">
        <path fill-rule="evenodd" opacity="0.039" fill="rgb(8, 106, 215)"
            d="M-0.000,232.999 C-0.000,232.999 239.131,-52.566 575.000,47.000 C910.869,146.565 1087.000,55.653 1231.000,19.999 C1375.000,-15.654 1800.820,-31.520 1915.000,232.999 C1445.000,232.999 -0.000,232.999 -0.000,232.999 Z" />
    </svg>
</section>

<section class="features-wrapper features-2">
<h2 class="text-muted" style="text-align:center">Who we serve</h2>
    <div class="container" style="padding-top:2px">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row mtm-30">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            
                                <div class="icon">
                                    <i class="flaticon flaticon-monitor"></i>
                                </div>
                                <h4>TPAs</h4>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            
                                <div class="icon">
                                    <i class="flaticon flaticon-pyramid"></i>
                                </div>
                                <h4>JPAs</h4>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                    
                                <div class="icon">
                                    <i class="flaticon flaticon-diagram"></i>
                                </div>
                                <h4>Risk Pools</h4>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            
                                <div class="icon">
                                    <i class="flaticon flaticon-meeting"></i>
                                </div>
                                <h4>Insurers</h4>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                           
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4>Self Insured</h4>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4>Brokers</h4>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <svg class="feature-bg">
        <path fill-rule="evenodd" opacity="0.039" fill="rgb(8, 106, 215)"
            d="M-0.000,232.999 C-0.000,232.999 239.131,-52.566 575.000,47.000 C910.869,146.565 1087.000,55.653 1231.000,19.999 C1375.000,-15.654 1800.820,-31.520 1915.000,232.999 C1445.000,232.999 -0.000,232.999 -0.000,232.999 Z" />
    </svg>
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
                    <h2>
                    Read how RiskInsurTech led the Gen AI assessment and adaption at
                    a prominent software provider in the risk and claims landscape industry!


                    </h2>
                </div>
                <div class="col-xl-5 col-12 text-center text-xl-right">
                    <a href="contact.php" class="theme-btn mt-4 mt-xl-0">Get a quote <i class="fas fa-arrow-right"></i></a>
                    <!-- Button to trigger modal -->
                    <button type="button" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn" data-toggle="modal" data-target="#formModal">Read more <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
 <!-- Modal Structure -->
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-custom" role="document">
        <div class="modal-content gradient-background">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Fill Out the Form to Download</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="downloadForm">
                    <div class="form-group">
                        <input type="email" class="form-control input-soft" id="email" placeholder="Email address *" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-soft" id="name" placeholder="Full Name *" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control input-soft" id="phone" placeholder="Phone Number *" required>
                    </div>
                    <button type="button" id="downloadBtn" class="btn btn-primary soft-button" disabled>Download PDF</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
   include('temp/footer.php');
   ?>