@extends('WebsiteMaster')
@section('title', 'Rasoi Wala - Authentic Recipes & Cooking Tips')
@section('content')
    <main>
        <!--? slider Area Start-->
     <div class="rw-hero-slider">
      <div class="rw-slide">
        <div class="rw-overlay"></div>
        <div class="container">
            <div class="rw-content-box">
                <span class="rw-subtitle">Discover Your Taste</span>
                <h1>Most Trusted Platform for At-Home Cooking Services</h1>
                <p>Find your perfect cook.</p>

                <a href="#" class="rw-btn">Download App</a>
            </div>
        </div>
    </div>

</div>

        <!-- slider Area End-->

        <!--? Our Services Start -->
  <div class="service-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle text-center mb-5">
                    <span>Services We Offer</span>
                    <h2>Discover Your Perfect Service</h2>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card ">
                    <h5>One-time Cook</h5>
                    <p>Get a professional cook at your home within 60 minutes.</p>

                    <ul>
                        <li><i class="fas fa-check"></i> Trained & Verified Cooks</li>
                        <li><i class="fas fa-check"></i> Healthy & Hygienic Food</li>
                        <li><i class="fas fa-check"></i> Tailored to Your Taste</li>
                        <li><i class="fas fa-check"></i> Quick Service</li>
                    </ul>

                    <p class="mt-3">Starting from</p>
                    <h2>₹285 / visit</h2>

                    <a href="{{ route('firstTimeCook') }}" class="btn hero-btn mt-3">Book Now</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card ">
                    <h5>Chef for Party</h5>
                    <p>Experienced chefs to elevate your party experience.</p>

                    <ul>
                        <li><i class="fas fa-check"></i> Multi-Cuisine Chefs</li>
                        <li><i class="fas fa-check"></i> Customisable Menu</li>
                        <li><i class="fas fa-check"></i> Prompt Service</li>
                        <li><i class="fas fa-check"></i> Bartenders & Waiters</li>
                    </ul>

                    <p class="mt-3">Starting from</p>
                    <h2>₹1850 / visit</h2>

                    <a href="{{ route('ChefForParty') }}" class="btn hero-btn mt-3">Book Now</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card ">
                    <h5>Chef for Home (Monthly)</h5>
                    <p>Hire a personal chef for premium monthly cooking service.</p>

                    <ul>
                        <li><i class="fas fa-check"></i> Multi-Cuisine Professionals</li>
                        <li><i class="fas fa-check"></i> Customisable Menu</li>
                        <li><i class="fas fa-check"></i> Live Cooking</li>
                        <li><i class="fas fa-check"></i> Fresh Ingredients</li>
                    </ul>

                    <p class="mt-3">Starting from</p>
                    <h2>₹6999 / month</h2>

                    <a href="{{ route('Homevisit') }}" class="btn hero-btn mt-3">Book Now</a>
                </div>
            </div>

        </div>
    </div>
</div>

        <!-- Our Services End -->

        <!--? Our Services Start -->
    <div class="why-section"
    style="background-image: url('{{ asset('assets/image/3 chef banner F.png') }}');">
    
    <div class="container position-relative">
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="color: white; font-size: 40px; font-weight: 700;">
                    Why Choose Rasoiwala?
                </h2>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="why-card text-center">
                    <img src="{{ asset('assets/img/professional_cooks.svg') }}" alt="">
                    <h5>Best Chef</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="why-card text-center">
                    <img src="{{ asset('assets/img/easy_booking.svg') }}" alt="">
                    <h5>Easy Booking</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="why-card text-center">
                    <img src="{{ asset('assets/img/timely_service.svg') }}" alt="">
                    <h5>Timely Service</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="why-card text-center">
                    <img src="{{ asset('assets/img/prompt_support.svg') }}" alt="">
                    <h5>Prompt Support</h5>
                </div>
            </div>

        </div>

    </div>
</div>

        <!-- Our Services End -->
        <!--? Our Services Start -->
   <div class="hiw-section">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="font-weight: 700;">How it Works</h2>
            </div>
        </div>

        <!-- Step line for desktop -->
        <div class="hiw-line d-none d-lg-block"></div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="hiw-card">
                    <div class="step-badge">1</div>
                    <img src="{{ asset('assets/img/Register_on_app_4372ed1276.svg') }}" alt="">
                    <h5><a href="#">Register on App</a></h5>
                    <p>Download the Rasoiwala App and register yourself</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="hiw-card">
                    <div class="step-badge">2</div>
                    <img src="{{ asset('assets/img/select_your_service_7ba59dddd5.svg') }}" alt="">
                    <h5><a href="#">Select Your Service</a></h5>
                    <p>Choose from range of available services</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="hiw-card">
                    <div class="step-badge">3</div>
                    <img src="{{ asset('assets/img/filldetails.svg') }}" alt="">
                    <h5><a href="#">Fill Details & Pay</a></h5>
                    <p>Share your preferences and complete the payment</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="hiw-card">
                    <div class="step-badge">4</div>
                    <img src="{{ asset('assets/img/Get_a_cook_b0e201f46a.svg') }}" alt="">
                    <h5><a href="#">Get a Cook</a></h5>
                    <p>Get a professionally-trained and trusted cook on time</p>
                </div>
            </div>

        </div>

    </div>
</div>

        <!-- Our Services End -->


        <!--? gallery Products Start -->
        <section class="gallery-area fix ">
            <!-- Gallery Top Start -->
            <div class="gallery-top section-bg pt-90 pb-40" data-background="assets/img/gallery/section_bg01.png">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Our Offerd Menu</span>
                                <h2>Some Trendy And Popular Courses Offerd</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-Fast" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Fast Food</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-South" role="tab" aria-controls="nav-profile"
                                        aria-selected="false"> South Dish</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                        href="#nav-Brakefirst" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Breakfast </a>
                                    <a class="nav-item nav-link" id="nav-dinner-tab" data-toggle="tab"
                                        href="#nav-Veg-Lunch" role="tab" aria-controls="nav-dinner"
                                        aria-selected="false"> Veg Lunch </a>
                                    <a class="nav-item nav-link" id="non-veg" data-toggle="tab" href="#nav-non-veg"
                                        role="tab" aria-controls="nav-dinner" aria-selected="false"> Non Veg Lunch
                                    </a>
                                    <a class="nav-item nav-link" id="nav-dinner-tab" data-toggle="tab"
                                        href="#nav-dinner" role="tab" aria-controls="nav-dinner"
                                        aria-selected="false"> Dinner</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gallery Top End -->
            <!-- Gallery Bottom Start -->
            <div class="container">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-Fast" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/f5.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/f2.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/f3.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/f4.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="nav-South" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/s5.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/s2.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/s3.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/s4.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Brakefirst" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/b1.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/b2.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/b3.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/b4.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-Veg-Lunch" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-non-veg" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/c1.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/c4.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/image/c3.jpeg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/image/c4.jpeg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Four -->
                    <div class="tab-pane fade" id="nav-dinner" role="tabpanel" aria-labelledby="nav-dinner">
                        <div class="row no-gutters">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/d2.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="gallery-box">
                                    <div class="single-gallery">
                                        <div class="gallery-img big-img"
                                            style="background-image: url({{ asset('assets/img/d2.jpg') }});"></div>
                                        <div class="g-caption">
                                            <h4>Delicious Food</h4>
                                            <a href="#" class="btn order-btn">Download App</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/d3.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="gallery-box">
                                            <div class="single-gallery">
                                                <div class="gallery-img smoll-img"
                                                    style="background-image: url({{ asset('assets/img/d4.jpg') }});">
                                                </div>
                                                <div class="g-caption">
                                                    <h4>Delicious Food</h4>
                                                    <a href="#" class="btn order-btn">Download App</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
            <!-- Gallery Bottom End -->
        </section>
        <!-- gallery Products End -->
        <!--? About-2 Area Start -->


        <!-- About-2 Area End -->
      <section class="about-modern py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image-wrap">
                    <img src="assets/img/gallery/about2.png" class="img-fluid main-img" alt="">
                    <div class="floating-card">
                        <h4>10+ Years</h4>
                        <p>of Culinary Excellence</p>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="sub-title">Why Choose Us</span>
                    <h2>Your Partner in Exceptional Dining</h2>

                    <p class="mt-3">
                        Welcome to Rasoiwala, where we transform ordinary events into extraordinary culinary
                        experiences. Our trained chefs specialize in a variety of cuisines, offering a diverse
                        menu that caters to all tastes.
                    </p>

                    <p>
                        Hygiene and freshness are at the heart of everything we do. From prompt service to visual
                        presentation, Rasoiwala promises to make every occasion unforgettable.
                    </p>

                    <ul class="about-features mt-3">
                        <li><i class="fa fa-check"></i> Hygienic & Fresh Food</li>
                        <li><i class="fa fa-check"></i> Multiple Cuisine Options</li>
                        <li><i class="fa fa-check"></i> Trained Professional Chefs</li>
                        <li><i class="fa fa-check"></i> Perfect for Every Occasion</li>
                    </ul>

                    <a href="{{ route('about') }}" class="btn about-btn mt-4">Learn More</a>
                </div>
            </div>

        </div>
    </div>
</section>



        <!--? Blog Area Start -->
      <section class="blog-modern py-5">
    <div class="container">

        <!-- Heading -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center">
                <span class="blog-subtitle">Our Latest Updates</span>
                <h2 class="blog-title">Recent From Our Blog</h2>
            </div>
        </div>

        <!-- Blog Cards -->
        <div class="row">

            <!-- Blog 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blog1.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h4>Addiction When Food Plate Becomes</h4>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blog2.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h4>Addiction When Food Plate Becomes</h4>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blog3.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h4>Addiction When Food Plate Becomes</h4>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        <!-- Blog Area End -->
  <section class="unique-section py-5">
    <div class="container">

        <!-- VIDEO + TEXT -->
        <div class="unique-box mb-5">
            <h3 class="section-title text-center mb-4">Don’t Take Our Word For It!</h3>

            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <div class="unique-image-wrapper">
                        <img src="assets/img/elements/d.jpg" class="img-fluid rounded-4 shadow-lg" style="width: 100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="unique-text">
                        इस वीडियो में हम आपको उन विषयों पर विस्तृत जानकारी देंगे जो इस विषय के बारे में आपको जानने की आवश्यकता हो सकती है। हम इस वीडियो में विभिन्न पहलुओं पर चर्चा करेंगे, जैसे कि इसका इतिहास, वर्तमान में इसकी स्थिति, और भविष्य में इसकी दिशा। वीडियो के माध्यम से हम आपको इन सभी महत्वपूर्ण तथ्यों से अवगत कराएंगे ताकि आप इस विषय को पूरी तरह से समझ सकें और उसका सही उपयोग कर सकें।
                    </p>

            
                </div>
            </div>
        </div>

        <!-- QUOTE SECTION -->
                <div class="unique-quote-box mb-5 p-4">
            <h3 class="section-title mb-4">Inspirational Quotes</h3>

            <blockquote class="beautiful-quote">
             “ जीवन में कभी न कभी हम सभी को चुनौतियों का सामना करना पड़ता है। ये चुनौतियाँ हमारे साहस, धैर्य, और दृढ़ संकल्प की परीक्षा लेती हैं। जब भी हम किसी कठिनाई से गुजरते हैं, हमें यह समझने की जरूरत होती है कि यह केवल एक अस्थायी स्थिति है, और इसे पार करने के बाद हम और भी मजबूत बनकर उभरेंगे। जीवन का असली मतलब इस बात में नहीं है कि हम कितनी बार गिरते हैं, बल्कि इस बात में है कि हम कितनी बार उठते हैं। अपने लक्ष्य के प्रति विश्वास और संघर्ष की भावना हमें कभी हारने नहीं देती। हर सफलता की शुरुआत एक छोटे से कदम से होती है, और यदि हम लगातार उस दिशा में आगे बढ़ते रहें, तो एक दिन हम अपने सपनों को हकीकत बना सकते हैं। यही जीवन का सच्चा उद्देश्य है - हर दिन कुछ नया सीखना और अपने अनुभवों से आगे बढ़ते हुए, अपने जीवन को और बेहतर बनाना। ”
            </blockquote>
        </div>

        <!-- GALLERY -->
      <div class="unique-gallery mb-5">
    <h3 class="section-title mb-4">Image Gallery</h3>

    <div class="row g-3 equal-gallery">
        <div class="col-md-4 col-6">
            <div class="gallery-card">
                <img src="{{ asset('assets/image/c1.jpeg') }}" class="gallery-img">
            </div>
        </div>

        <div class="col-md-4 col-6">
            <div class="gallery-card">
                <img src="{{ asset('assets/image/c2.jpeg') }}" class="gallery-img">
            </div>
        </div>

        <div class="col-md-4 col-6">
            <div class="gallery-card">
                <img src="{{ asset('assets/image/c3.jpeg') }}" class="gallery-img">
            </div>
        </div>

        <div class="col-md-6 col-6">
            <div class="gallery-card big-card">
                <img src="{{ asset('assets/image/c4.jpeg') }}" class="gallery-img">
            </div>
        </div>

        <div class="col-md-6 col-6">
            <div class="gallery-card big-card">
                <img src="{{ asset('assets/image/c5.jpeg') }}" class="gallery-img">
            </div>
        </div>
    </div>
</div>

    </div>
</section>


    </main>



@endsection
