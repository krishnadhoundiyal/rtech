<?php
include('temp/header.php');
?>
    
    <section class="page-banner-wrap bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <div class="page-heading text-white">
                        <div class="page-title">
                            <h1>Contact Us</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Email Address</h4>
                                <!-- <span>Sent mail asap anytime</span> -->
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>info@riskinsurtech.com support@riskinsurtech.com</p>
                               
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Phone Number</h4>
                                <!-- <span>call us asap anytime</span> -->
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>+1 562-469-9335</p>
                               
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card3">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="title">
                                <h4>Office Address</h4>
                                <!-- <span>Sent mail asap anytime</span> -->
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>17604 Caliente Place, </p>
                                <p>Cerritos, CA-90703</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="contact-map-wrap">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5457.875323165521!2d144.90402300269133!3d-37.792722838344716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612018663424!5m2!1sen!2sbd" frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section-padding pb-0">
                <div class="col-12 text-center mb-20">
                    <div class="section-title">
                        <p>send us  message</p>
                        <h1>Don’t Hesited To Contact Us <br> Say Hello or Message</h1>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="contact-form">                                                        
                        <form  class="row conact-form" action="testmail.php" method="POST">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname">Full Name</label>
                                    <input type="text"   name="fname" placeholder="Enter Name" >                                         
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" placeholder="Enter Email Address" >                                         
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone">Phone Number</label>
                                    <input type="text"   name="phonenumber" placeholder="Enter Number">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Subject</label>
                                    <input type="text"  name="subject" placeholder="Enter Subject">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Enter Message</label>
                                    <textarea placeholder="Enter message"  name="message"></textarea>                                        
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12 text-center">
                                <button type="submit"  name="submit"class="theme-btn">send  message <i class="fas fa-arrow-right"></i></button>
                            </div>
                            <!-- <div class="col-md-12 col-12 text-center">
                            <div class="g-recaptcha" name="recaptcha" data-sitekey="6Le4UNklAAAAAKN3Au83s_7SIow1u1-TZugz-qji" required></div> 
                            </div> -->
                                                                 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-banner">
        <div class="container-fluid bg-cover section-bg" style="background-image: url('assets/img/cta_bg1.png')">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                        <h1>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h1>
                    </div>
                    <div class="col-xl-5 col-12 text-center text-xl-right">
                        <a href="contact.php" class="theme-btn mt-4 mt-xl-0">Get a quote <i class="fas fa-arrow-right"></i></a>
                        <a href="#" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> 

   <?php
   include('temp/footer.php');
   ?>

   <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>