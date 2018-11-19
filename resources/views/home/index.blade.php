@extends('theme/index')

@section('content')

        <!-- ***** Wellcome Area Start ***** -->
        <section class="welcome_area height-900 clearfix" id="home">
                <canvas id="canvas-1"></canvas>
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-12 col-md-5">
                            <!-- Welcome Thumb -->
                            <div class="welcome_thumb wow fadeInUp" data-wow-delay="0.8s">
                                <img src=" {{ asset('theme/img/bg-img/bg-1.png') }}" alt="">
                            </div>
                        </div>
        
                        <div class="col-12 col-md-7">
                            <!-- Welcome Text -->
                            <div class="welcome_text">
                                <h3>Exclusively for  <br>Mumbai , Navi Mumbai and Thane Region</h3>
                                <p>Our expertise is in filing the Notice of Intimation for Equitable Mortgage in all the registration offices across Mumbai, Navi Mumbai & Thane with door step service in 3 working days*. </p>
                                <a href="#" class="green-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Wellcome Area End ***** -->
        
            <!-- ***** About Us Area Start ***** -->
            {{-- <section class="about_us_area section_padding_150 clearfix" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>About Us</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Details -->
                            <div class="about-details">
                                <h2>Complete control over your company.</h2>
                                <p> Riyadh has both a web app and an android app to make your website easy and always available. It offers you all the designs in collaboration with some smart people. Your projects will look great everywhere you go. Use new components that come included! Riyadh is an advanced theme solution for desktop, tablet, and mobile devices. It works in all browsers and your clients can pay instantly, to improve their experience at all times anywhere they go. </p>
                                <a href="#" class="green-btn normal">Get Started</a>
                            </div>
                        </div>
        
                        <div class="col-12 col-md-6">
                            <!-- About Content -->
                            <div class="about-thumb">
                                <img src="{{ asset('theme/img/about-img/about-us.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** About Us Area  End ***** -->
        
            <!-- ***** Feature Area Start ***** -->
            <section class="feature_area section_padding_150_50 clearfix" id="process">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single feature Content -->
                            <div class="single_feature_content active wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Feature Text -->
                                <div class="feature_text">
                                    <h3>Step 1 : </h3>
                                    <!-- Icon -->
                                    <div class="feature_icon_text">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="line-2"></div>
                                    <p>You Call us. 
                                        We get in-touch with you. 
                                        We explain you the process.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single feature Content -->
                            <div class="single_feature_content active wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Feature Text -->
                                <div class="feature_text">
                                    <h3>Step 2 : </h3>
                                    <!-- Icon -->
                                    <div class="feature_icon_text">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="line-2"></div>
                                    <p>We mail / Whatsapp you the Process & Documents which are required for the Registration.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 active wow fadeInUp" data-wow-delay="0.8s">
                            <!-- Single feature Content -->
                            <div class="single_feature_content active">
                                <!-- Feature Text -->
                                <div class="feature_text">
                                    <h3>Step 3 : </h3>
                                    <!-- Icon -->
                                    <div class="feature_icon_text">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="line-2"></div>
                                    <p>An appointment is fixed to collect the documents.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 active wow fadeInUp" data-wow-delay="1s">
                            <!-- Single feature Content -->
                            <div class="single_feature_content active">
                                <!-- Feature Text -->
                                <div class="feature_text">
                                    <h3>Step 4 : </h3>
                                    <!-- Icon -->
                                    <div class="feature_icon_text">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="line-2"></div>
                                    <p>Our executive visit the designated venue on designated time to collect the set for registration.</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single feature Content -->
                            <div class="single_feature_content active wow fadeInUp" data-wow-delay="1.2s">
                                <!-- Feature Text -->
                                <div class="feature_text">
                                    <h3>Step 6 :</h3>
                                    <!-- Icon -->
                                    <div class="feature_icon_text">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="line-2"></div>
                                    <p>We collect the Service Charges, Money & Documents required for Registration..</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 active wow fadeInUp" data-wow-delay="1.4s">
                            <!-- Single feature Content -->
                            <div class="single_feature_content active">
                                <!-- Feature Text -->
                                <div class="feature_text">
                                    <h3>Step 7 :</h3>
                                    <!-- Icon -->
                                    <div class="feature_icon_text">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="line-2"></div>
                                    <p>We provide you the acknowledgement receipt for the Documents & Money collected..</p>
                                    <a href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Feature Area End ***** -->
        
            <!-- ***** Our Services Area Start ***** -->
            {{-- <section class="our_service_area section_padding_150 clearfix" id="service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Our Services</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
        
                        <div class="col-12 col-md-6">
                            <!-- About Content -->
                            <div class="service_content">
                                <!-- Thumb -->
                                <div class="service_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/service-img/1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- About Text -->
                                <div class="service_text wow flipInX" data-wow-delay="0.4s">
                                    <h5>Savings &amp; Investments</h5>
                                    <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.</p>
                                    <a href="#" class="green-btn about">Read services</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <!-- About Content -->
                            <div class="service_content">
                                <!-- Thumb -->
                                <div class="service_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/service-img/2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- About Text -->
                                <div class="service_text wow flipInX" data-wow-delay="0.6s">
                                    <h5>Savings &amp; Investments</h5>
                                    <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.</p>
                                    <a href="#" class="green-btn about">Read services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- About Content -->
                            <div class="service_content">
                                <!-- Thumb -->
                                <div class="service_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/service-img/3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- About Text -->
                                <div class="service_text wow flipInX" data-wow-delay="0.8s">
                                    <h5>Understand the situation</h5>
                                    <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.</p>
                                    <a href="#" class="green-btn about">Read services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- About Content -->
                            <div class="service_content">
                                <!-- Thumb -->
                                <div class="service_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/service-img/4.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- About Text -->
                                <div class="service_text wow flipInX" data-wow-delay="1s">
                                    <h5>Strategic Planning</h5>
                                    <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.</p>
                                    <a href="#" class="green-btn about">Read services</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Button -->
                    <div class="row">
                        <div class="col-12">
                            <div class="gallery_button text-center">
                                <a href="#" class="green-btn mt-30">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Our Services Area End ***** -->
        
            <!-- ***** Call To Action Area Start ***** -->
            {{-- <section class="call_to_action_area section_padding_150 clearfix bg-img bg-overlay3 bg-fixed" style="background-image: url(img/bg-img/bg-5.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="call_to_heading text-center">
                                <h2>Riyadh completes every project <br>with experience hand..</h2>
                                <p>Our strategy is simple: to create a place where the best researchers.</p>
                                <a href="#" class="green-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Call To Action Area End ***** -->
        
            <!-- ***** What We Do Area Start ***** -->
            {{-- <section class="what_we_do_area section_padding_150 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Discover the world of Creative</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row align-items-center justify-content-between what_we_do_content">
                        <div class="col-10 col-md-5">
                            <div class="what_we_content">
                                <!-- Thumb -->
                                <div class="what_we_thumb">
                                    <div class="image-hover-effect">
                                        <img src=" asset('theme/img/bg-img/bg-6.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="what_we_text">
                                    <h5>An All-in-One Web Solution for Your Business </h5>
                                    <a href="#">Load more<i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-md-5">
                            <div class="what_we_content">
                                <!-- Thumb -->
                                <div class="what_we_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/bg-img/bg-7.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="what_we_text">
                                    <h5>An All-in-One Web Solution for Your Business </h5>
                                    <a href="#">Load more<i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-md-5">
                            <div class="what_we_content">
                                <!-- Thumb -->
                                <div class="what_we_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/bg-img/bg-15.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="what_we_text">
                                    <h5>An All-in-One Web Solution for Your Business</h5>
                                    <a href="#">Load more<i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-md-5">
                            <div class="what_we_content">
                                <!-- Thumb -->
                                <div class="what_we_thumb">
                                    <div class="image-hover-effect">
                                        <img src="asset('theme/img/bg-img/bg-16.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="what_we_text">
                                    <h5>We Are Creative And Professional</h5>
                                    <a href="#">Load more<i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Button -->
                    <div class="row">
                        <div class="col-12">
                            <div class="gallery_button text-center mt-50">
                                <a href="#" class="green-btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** What We Do Area End ***** -->
        
            <!-- ***** Our Working Area Start ***** -->
            <section class="our_working_area section_padding_0_150 clearfix" id="documents">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Required Documents</h2>
                                <div class="line"></div>
                                <p>All the following documents Original & Photocopy to be signed and stamped by the Banks authority in Original</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Nav-tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="Wallet-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true"><i class="ti-desktop"></i>01.Lending Banks Name</a>
                                </li>
                                <!-- Nav Item -->
                                <li class="nav-item">
                                    <a class="nav-link" id="coin-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true"><i class="ti-menu"></i>02.Lending Banks Location</a>
                                </li>
                                <!-- Nav Item -->
                                <li class="nav-item">
                                    <a class="nav-link" id="buy-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true"><i class="ti-folder"></i>03.Lending Banks PAN Number</a>
                                </li>
                            </ul>
                            <!-- Tab Content -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="Wallet-tab">
                                    <!-- Single Tab Content -->
                                    <div class="single-tab-content">
                                        <div class="row align-items-center justify-content-center">
                                            <!-- Tab Content Text -->
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>Required</h4>
                                                    <p> 0.2% of the Loan Amount eSBTR / Stamp Papers / Franked for Memorandum of Deposit of Title Deeds with Bankers Stamp and Sign - Photocopy </p>
                                                     <p>   Photograph of all the borrowers </p>
                                                     <p>   Accepted Sanction Letter (photocopy) with Borrwers & Credit Managers Sign
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>Required</h4>
                                                    <p>All Borrowers PAN Card - Photocopy</p>
                                                    <p> Latest Index - 2 - Photocopy
                                                    </p>
                                                    <p>Notice Of Intimation regarding Mortgage by way of Deposit of Title Deed with
                                                        Rs. 100 Stamp Paper or Franking.
                                                   
                                                   </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>Required</h4>
                                                    <p>Self Attested Identity proof of Banks Represantative signing the "Notice of Intimation"
                                                    </p>
                                                    <p> List of Documents Deposited - Photocopy</p>
                                                    <p>Franking details letter from the Bank - Original</p>
                                                    <p>The above information is necessary to do data entry for efiling of Notice of Intimation Format and other related documents</p>
                                                    <a class="#" href="#">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="coin-tab">
                                    <!-- Single Tab Content -->
                                    <div class="single-tab-content">
                                        <div class="row align-items-center justify-content-center">
                                            <!-- Tab Content Text -->
                                            <div class="col-md-4">
                                                <!-- Tab Content Thumb -->
                                                <div class="tab-content-thumb text-center">
                                                    <div class="image-hover-effect">
                                                        <img src="asset('theme/img/working-img/2.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>02. Website concept</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>Great result</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu.</p>
                                                    <a class="#" href="#">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="buy-tab">
                                    <!-- Single Tab Content -->
                                    <div class="single-tab-content">
                                        <div class="row align-items-center justify-content-center">
                                            <!-- Tab Content Text -->
                                            <div class="col-md-4">
                                                <!-- Tab Content Thumb -->
                                                <div class="tab-content-thumb text-center">
                                                    <div class="image-hover-effect">
                                                        <img src="asset('theme/img/working-img/3.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>03. Development</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Tab Content Text -->
                                                <div class="tab-content-text text-center">
                                                    <h4>Great result</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu.</p>
                                                    <a class="#" href="#">Learn More</a>
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
            <!-- ***** Our Working Area End ***** -->
        
            <!-- ***** Video Area Start ***** -->
            {{-- <section class="video_area clearfix bg-overlay bg-img" style="background-image: url(theme/img/bg-img/bg-2.jpg)" data-jarallax-video="https://youtu.be/ByOPXIHaVfQ">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Heading Text -->
                        <div class="col-12">
                            <div class="video_text text-center">
                                <h4>Trusted by the best Companies in the World!</h4>
                                <p>Youtube video will appear in popover</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Video Area End ***** -->
        
            <!-- ***** Start faq Area ***** -->
            <section class="faq-area section_padding_150_100 clearfix" id="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Frequently Asked Question</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <!-- Faq Content -->
                        <div class="col-12 col-lg-6">
                            <!-- Single faq -->
                            <div class="single-faq wow fadeInUp" data-wow-delay="300ms">
                                <h2>How to Shoping From Riyadh?</h2>
                                <p>“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. borderline-inappropriate behavior.</p>
                            </div>
                        </div>
                        <!-- Single faq -->
                        <div class="col-12 col-lg-6">
                            <div class="single-faq wow fadeInUp" data-wow-delay="350ms">
                                <h2>How to Edit Your Website?</h2>
                                <p>“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. borderline-inappropriate behavior.</p>
                            </div>
                        </div>
                        <!-- Single faq -->
                        <div class="col-12 col-lg-6">
                            <div class="single-faq wow fadeInUp" data-wow-delay="400ms">
                                <h2>Why You Choose Riyadh?</h2>
                                <p>“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. borderline-inappropriate behavior.</p>
                            </div>
                        </div>
                        <!-- Single faq -->
                        <div class="col-12 col-lg-6">
                            <div class="single-faq wow fadeInUp" data-wow-delay="450ms">
                                <h2>How to Collect Data From Riyadh?</h2>
                                <p>“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. borderline-inappropriate behavior.</p>
                            </div>
                        </div>
                        <!-- Single faq -->
                        <div class="col-12 col-lg-6">
                            <div class="single-faq wow fadeInUp" data-wow-delay="500ms">
                                <h2>How to Learn Graphic Design?</h2>
                                <p>“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. borderline-inappropriate behavior.</p>
                            </div>
                        </div>
                        <!-- Faq Content -->
                        <div class="col-12 col-lg-6">
                            <!-- Single faq -->
                            <div class="single-faq wow fadeInUp" data-wow-delay="550ms">
                                <h2>How to Learn UI &amp; UX?</h2>
                                <p>“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior. borderline-inappropriate behavior.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Start faq Area ***** -->
        
            <!-- ***** Cool Fact Area Start ***** -->
            {{-- <section class="cool_fact_area section_padding_100_50">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single fact -->
                            <div class="single-fact text-center wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="counter">5962</h2>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single fact -->
                            <div class="single-fact text-center wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="counter">2394</h2>
                                <p>New Projects</p>
                            </div>
                        </div>
                        <!-- Single fact -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-fact text-center wow fadeInUp" data-wow-delay="1s">
                                <h2 class="counter">1439</h2>
                                <p>Tickets Submitted</p>
                            </div>
                        </div>
                        <!-- Single fact -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-fact text-center wow fadeInUp" data-wow-delay="1.2s">
                                <h2 class="counter">933</h2>
                                <p>Cup of Coffee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Cool Fact Area End ***** -->
        
            <!-- ***** Project Area Start ***** -->
            {{-- <section class="project_area section_padding_150 bg-img bg-fixed clearfix bg-overlay2" style="background-image: url(img/bg-img/bg-8.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="scetion_heading">
                                <h2>Amazing Projects</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="{{ asset('theme/img/project-img/pro-1.jpg') }}" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href=" asset('theme/img/project-img/pro-1.jpg') }}" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="{{ asset('theme/img/project-img/pro-2.jpg') }}" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="asset('theme/img/project-img/pro-2.jpg') }}" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="{{ asset('theme/img/project-img/pro-3.jpg') }}" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="img/project-img/pro-3.jpg" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="img/project-img/pro-4.jpg" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="{{ asset('theme/img/project-img/pro-4.jpg') }}" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="img/project-img/pro-5.jpg" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="{{ asset('theme/img/project-img/pro-5.jpg') }}" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="{{ asset('img/project-img/pro-6.jpg') }}" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="img/project-img/pro-6.jpg" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="{{ asset('theme/img/project-img/pro-3.jpg') }}" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="{{ asset('theme/img/project-img/pro-3.jpg') }}" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <!-- Single gallery Item -->
                            <div class="portfolio_gallery_iteam">
                                <img src="{{ asset('img/project-img/pro-5.jpg') }}" alt="">
                                <!-- single Content-->
                                <div class="single_content">
                                    <div class="special-table">
                                        <div class="special-table-cell">
                                            <!-- Project Title-->
                                            <div class="project_title text-center">
                                                <div class="image-popups">
                                                    <a href="{{ asset('img/project-img/pro-5.jpg') }}" data-effect="mfp-zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Button -->
                    <div class="row">
                        <div class="col-12">
                            <div class="gallery_button text-center">
                                <a href="#" class="green-btn white mt-30">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Project Area End ***** -->
        
            <!-- ***** Pricing Table Start ***** -->
            <section class="our_price_table_area section_padding_150_100" id="offices">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Registration Offices </h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <!-- Pricing Plane -->
                            <div class="pricing-plan text-center wow fadeInUp" data-wow-delay="0.4s">
                                <div class="pricing-head">
                                    <h3>Joint Sub-Registrar, Mumbai City - 1</h3>
                                    {{-- <h2>FREE</h2> --}}
                                </div>
                                <!-- Pricing Body -->
                                <div class="pricing-body">
                                    <ul>
                                       <li> Ground Floor, Old Custom House, Shahid Bhagatsingh Marg, Near Horiman Circle, Near Central Library Fort,Mumbai 400001.

                                        <li>
                                    </ul>
                                </div>
                                <!-- Pricing Footer -->
                                <div class="pricing-footer">
                                    <a href="#" class="green-btn">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- Pricing Plane -->
                            <div class="pricing-plan text-center wow fadeInUp" data-wow-delay="0.4s">
                                <div class="pricing-head">
                                    <h3>Joint Sub-Registrar, Mumbai City - 2</h3>
                                    {{-- <h2>FREE</h2> --}}
                                </div>
                                <!-- Pricing Body -->
                                <div class="pricing-body">
                                    <ul>
                                       <li> 1st Floor, Worli Telephone Exchange, Adarsh Nagar, Hatiskar Marg, Worli, Mumbai 400025.<li>
                                    </ul>
                                </div>
                                <!-- Pricing Footer -->
                                <div class="pricing-footer">
                                    <a href="#" class="green-btn">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- Pricing Plane -->
                            <div class="pricing-plan text-center wow fadeInUp" data-wow-delay="0.4s">
                                <div class="pricing-head">
                                    <h3>Joint Sub-Registrar, Mumbai City - 3</h3>
                                    {{-- <h2>FREE</h2> --}}
                                </div>
                                <!-- Pricing Body -->
                                <div class="pricing-body">
                                    <ul>
                                       <li> 1st Floor, Worli Telephone Exchange, Adarsh Nagar, Hatiskar Marg, Worli, Mumbai 400025.
                                        <li>
                                    </ul>
                                </div>
                                <!-- Pricing Footer -->
                                <div class="pricing-footer">
                                    <a href="#" class="green-btn">Sign Up</a>
                                </div>
                            </div>
                        </div>
                      
                       
        
                    </div>
                </div>
            </section>
            <!-- ***** Pricing Table End ***** -->
        
            <!-- ***** Our Team Area Start ***** -->
            <section class="our_team_area section_padding_150_100 clearfix" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Our Team</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single_team_content wow fadeInUp" data-wow-delay="1s">
                                        <!-- Image -->
                                        <div class="team_image">
                                            <img src="{{ asset('theme/img/team-img/team-1.jpg') }}" alt="">
                
                                            <!-- Hover Effect -->
                                            <div class="team_hover_effect">
                                                <!-- Icon -->
                                                <div class="team_icon">
                                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                                    <a href="#"> <i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Google-Plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Team Text -->
                                        <div class="team_text">
                                            <h5>Janson Sounders</h5>
                                            <p>Developer</p>
                                        </div>
                                    </div>
                                </div>
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single_team_content wow fadeInUp" data-wow-delay="1s">
                                <!-- Image -->
                                <div class="team_image">
                                    <img src="{{ asset('theme/img/team-img/team-1.jpg') }}" alt="">
        
                                    <!-- Hover Effect -->
                                    <div class="team_hover_effect">
                                        <!-- Icon -->
                                        <div class="team_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Google-Plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Text -->
                                <div class="team_text">
                                    <h5>Janson Sounders</h5>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single_team_content wow fadeInUp" data-wow-delay="1.2s">
                                <!-- Image -->
                                <div class="team_image">
                                    <img src="{{ asset('theme/img/team-img/team-1.jpg') }}" alt="">
        
                                    <!-- Hover Effect -->
                                    <div class="team_hover_effect">
                                        <!-- Icon -->
                                        <div class="team_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Google-Plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Text -->
                                <div class="team_text">
                                    <h5>Jara Smith</h5>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Our Team Area End ***** -->
        
            <!-- ***** Clients Words Area Start ***** -->
            {{-- <section class="testimonials_area section_padding_150 bg-img clearfix" style="background-image: url(img/bg-img/bg-13.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>From our clients</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="container">
                    <div class="row">
                        <!-- Heading Text -->
                        <div class="col-12">
                            <div class="client_slides owl-carousel">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Text  -->
                                    <div class="testimonial-description">
                                        <!-- Testimonial Image -->
                                        <div class="testimonial_image">
                                            <img src="{{ asset('theme/img/test-img/test-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial_text">
                                            <p>"Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work."</p>
                                        </div>
                                        <!-- Author Name -->
                                        <div class="testimonial_author_name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h5>Alex Champ</h5>
                                            <p>Design Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Text  -->
                                    <div class="testimonial-description">
                                        <!-- Testimonial Image -->
                                        <div class="testimonial_image">
                                            <img src="{{ asset('img/test-img/test-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial_text">
                                            <p>"Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work."</p>
                                        </div>
                                        <!-- Author Name -->
                                        <div class="testimonial_author_name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h5>Steven Champ</h5>
                                            <p>Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Text  -->
                                    <div class="testimonial-description">
                                        <!-- Testimonial Image -->
                                        <div class="testimonial_image">
                                            <img src="{{ asset('img/test-img/test-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial_text">
                                            <p>"Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work."</p>
                                        </div>
                                        <!-- Author Name -->
                                        <div class="testimonial_author_name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h5>Steven Champ</h5>
                                            <p>Design Manager</p>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Text  -->
                                    <div class="testimonial-description">
                                        <!-- Testimonial Image -->
                                        <div class="testimonial_image">
                                            <img src="{{ asset('theme/img/test-img/test-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial_text">
                                            <p>"Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work."</p>
                                        </div>
                                        <!-- Author Name -->
                                        <div class="testimonial_author_name">
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <h5>Steven Champ</h5>
                                            <p>Design Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Clients Words Area End ***** -->
        
            <!-- ***** Our Blog Area Start ***** -->
            {{-- <section class="our_blog_area section_padding_150_0 clearfix" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="section_heading">
                                <h2>Latest posts</h2>
                                <div class="line"></div>
                                <p>We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="blog_content left d-md-flex align-items-center">
                    <!-- Thumb -->
                    <div class="blog_thumb">
                        <div class="image-hover-effect">
                            <img src="{{ asset('theme/img/blog-img/blog-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- Single Content -->
                    <div class="blog_single_content left">
                        <a href="#">
                            <h5>Studio helping web 2.0 gain some momentum.</h5>
                        </a>
                        <h6>by Dorian Gray,</h6>
                        <a href="#">
                            <h6>Jun 27, 2018</h6>
                        </a>
                        <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.</p>
                        <!-- Button -->
                        <a class="green-btn white blog" href="#">Read more</a>
                    </div>
                </div>
                <div class="blog_content right d-md-flex align-items-center">
        
                    <!-- Single Content -->
                    <div class="blog_single_content">
                        <a href="#">
                            <h5>Gain some momentum.</h5>
                        </a>
                        <h6>by Dorian Gray,</h6>
                        <a href="#">
                            <h6>Jun 27, 2018</h6>
                        </a>
                        <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard.</p>
                        <!-- Button -->
                        <a class="green-btn blog" href="#">Read more</a>
                    </div>
                    <!-- Thumb -->
                    <div class="blog_thumb">
                        <div class="image-hover-effect">
                            <img src="{{ asset('theme/img/blog-img/blog-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Our Blog Area End ***** -->
        
            <!-- *****  Our partner Area Start *****  -->
            {{-- <div class="our_partner_area section_padding_100 clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Our Partners Area -->
                            <div class="our-partners-area">
                                <div class="row justify-content-center">
                                    <!-- Partner Slides -->
                                    <div class="col-12">
                                        <div class="partners-slides owl-carousel">
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-1.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-2.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-3.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-4.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-5.png') }}"  alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-6.png') }}"  alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-7.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('theme/img/partner-img/part-8.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- *****  Our partner Area End *****  -->
        
            <!-- ***** Contact Area End *****  -->
            <section class="contact_us_area section_padding_150 bg-img bg-overlay4" style="background-image: url(img/bg-img/bg-10.jpg);" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Heading Text -->
                            <div class="scetion_heading">
                                <h2>Contact Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Contact Form -->
                            <div class="contact_from_area clearfix">
                                <div class="contact_form">
                                    <form action="mail.php" method="post" id="main_contact_form">
                                        <div class="contact_input_area">
                                            <div id="success_fail_info"></div>
                                            <div class="row">
                                                <!-- Form Group -->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
        
                                                <!-- Form Group -->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                                    </div>
                                                </div>
        
                                                <!-- Form Group -->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Your Message *" required></textarea>
                                                    </div>
                                                </div>
                                                
                                                <!-- Button -->
                                                <div class="col-12">
                                                    <button type="submit" class="green-btn white">Send now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-12 col-md-5 ml-auto">
                            <div class="contact_deatils">
                                <!-- Content Info -->
                                <div class="contact_info_area">
                                    <div class="contact_info">
                                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                        <h5>Location</h5>
                                        <p>Aox street, newyork</p>
                                    </div>
                                    <!-- Content Info -->
                                    <div class="contact_info">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h5>E-mail</h5>
                                        <p>example@example.com</p>
                                    </div>
                                    <!-- Content Info -->
                                    <div class="contact_info">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <h5>Phone</h5>
                                        <p>+888 0221 2568</p>
                                    </div>
                                    <!-- Icon -->
                                    <div class="footer_social_icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                        <a href="#"> <i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Google-Plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Instagram"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- Google Maps -->
            <div id="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94482.79615407129!2d-0.19818122000950858!3d51.51651560026987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sbd!4v1530334547227" allowfullscreen></iframe>
            </div>
        
            <!-- ***** Contact Area End *****  -->
        
            <!-- ***** Bottom Footer Area Start *****  -->
            <div class="bottom-footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_area">
                                <!-- Footer Text -->
                                <div class="copywrite_text text-center">
                                    <p>Made With <i class="fa fa-heart"></i> by <a href="https://themeforest.net/user/designing-world/portfolio" target="_blank">Designing-World </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Bottom Footer Area End *****  -->
        


@endsection

