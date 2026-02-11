@extends('WebsiteMaster')
@section('title', 'One-Time Cook: Rasoi Wala')
@section('content')
<main>
    <!--? Hero Start -->
<div class="slider-area banner-hero" style="background-image: url('assets/img/gallery/section_bg02.png');">
    <div class="overlay"></div>

    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="hero-cap2 text-white">
                        <h2 class="fw-bold">Get a Cook for one-time</h2>
                        <h2 class="fw-bold">within 60 minutes</h2>

                        <p class="mt-3">
                            <span>Forget ordering online! </span>
                            <span>Get fresh food cooked in your kitchen.</span>
                        </p>
                    </div>

                    <div class="hero__btn mt-4">
                        <a href="#" class="btn hero-btn">Download App</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Hero End -->





    <!--? About-2 Area Start -->
  <section class="about-area2 section-padding30 bg-light position-relative">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Image Left -->
            <div class="col-lg-6 col-md-12">
                <div class="about-img-wrapper position-relative overflow-hidden rounded-4 shadow-lg">
                    <img src="assets/img/gallery/about2.png" alt="Our Mission" class="img-fluid about-img" style="    width: 100%;">
                    <div class="img-overlay"></div>
                </div>
            </div>

            <!-- Content Right -->
            <div class="col-lg-6 col-md-12">
                <div class="about-caption mb-50">
                    <!-- Section Title -->
                    <div class="section-tittle mb-30">
                        <span class="section-subtitle text-gradient">Our Mission</span>
                        <h2 class=" gradient-text">Bringing Flavors to Life</h2>
                        <div class="title-underline"></div>
                    </div>

                    <p class="pera-top text-justify">
                        Our mission is to deliver unparalleled culinary experiences that combine exceptional taste, hygiene, and quality. We are committed to crafting personalized menus that cater to diverse preferences, ensuring every dish reflects the unique needs of our customers.
                    </p>

                    <p class="pera-bottom text-justify">
                        Our goal is to make every event memorable by providing professional service, fresh ingredients, and a passion for excellence. Whether it’s a small gathering or a grand celebration, Rasoiwala strives to be your trusted partner in creating moments that matter, one meal at a time.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
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

        <div class="container">
            <div class="impact-section">
                <div class="impact-box">
                  <h1>3M+</h1>
                  <p>Meals Cooked with Love</p>
                </div>
                <div class="impact-box">
                  <h1>4,500+</h1>
                  <p>Verified & Trained Cooks</p>
                </div>
                <div class="impact-box">
                  <h1>10K+</h1>
                  <p>Households Served</p>
                </div>
              </div>

        </div>
    <section class="faq-wrapper">
    <h2 class="faq-title">Frequently Asked Questions</h2>

    <div class="faq-box">
        <div class="faq-header">
            <h4>What is a one-time cook service?</h4>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-body">
            <p>A one-time cook service provides fresh, home-style meals prepared for you in a single cooking session.</p>
        </div>
    </div>

    <div class="faq-box">
        <div class="faq-header">
            <h4>How does the one-time cook service work?</h4>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-body">
            <p>Our chefs visit your home with ingredients and prepare meals in one session.</p>
        </div>
    </div>

    <div class="faq-box">
        <div class="faq-header">
            <h4>What types of dishes can be prepared?</h4>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-body">
            <p>Veg, non-veg, and fully customizable dish options available.</p>
        </div>
    </div>

    <div class="faq-box">
        <div class="faq-header">
            <h4>How long does the cooking session take?</h4>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-body">
            <p>Usually 2–3 hours depending on dishes and quantity.</p>
        </div>
    </div>

    <div class="faq-box">
        <div class="faq-header">
            <h4>Is the service available for special occasions?</h4>
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-body">
            <p>Yes, perfect for events, parties, and celebrations.</p>
        </div>
    </div>

</section>



</main>
<script>
    document.querySelectorAll(".faq-box").forEach(box => {
    box.querySelector(".faq-header").addEventListener("click", () => {
        box.classList.toggle("active");

        let body = box.querySelector(".faq-body");
        if (box.classList.contains("active")) {
            body.style.maxHeight = body.scrollHeight + "px";
        } else {
            body.style.maxHeight = "0px";
        }
    });
});

</script>
@endsection
