@extends('WebsiteMaster')
@section('title', 'About Us - Rasoi Wala | Our Story & Mission')
@section('content')
    <main>
        <!--? Hero Start -->
  <!-- About Us Hero Section -->
<div class="about-hero-section position-relative">
    <!-- Background Image -->
    <div class="hero-bg"></div>
    <!-- Semi-transparent Overlay -->
    <div class="hero-overlay"></div>

    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="hero-content text-center text-white">
            <h2 class="hero-title">About Us</h2>
            <p class="hero-subtitle">Discover our story, vision, and commitment to excellence</p>
        </div>
    </div>
</div>
        <!-- Hero End -->
      <!-- Unique About Section -->
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


     <!-- Unique Vision Section -->
<section class="about-low-area section-padding30 bg-vision position-relative">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Left Content -->
            <div class="col-lg-6 col-md-12">
                <div class="about-caption mb-50">
                    <!-- Section Title -->
                    <div class="section-tittle mb-35">
                        <span class="section-subtitle text-gradient">Our Vision</span>
                        <h2 class="gradient-text">Cooking Dreams, One Recipe at a Time</h2>
                        <div class="title-underline"></div>
                    </div>
                    <p class="pera-top text-justify">
                        At Rasoi Wala, our vision is to become a global culinary destination that celebrates the essence of authentic cooking, bringing people together through the flavors and traditions of diverse cuisines.
                    </p>

                    <!-- Icon Boxes -->
                <div class="row g-4 mt-4">
    
    <!-- Card 1 -->
    <div class="col-lg-6 col-md-6">
        <div class="icon-card-box d-flex align-items-start">
            <div class="icon-area">
                <i class="flaticon-restaurant"></i>
            </div>
            <p class="mb-0">
                Preserve and share the rich heritage of Indian and global culinary arts
            </p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-lg-6 col-md-6">
        <div class="icon-card-box d-flex align-items-start">
            <div class="icon-area">
                <i class="flaticon-tools-and-utensils-1"></i>
            </div>
            <p class="mb-0">
                Inspire a love for cooking by providing easy-to-follow, flavorful recipes
            </p>
        </div>
    </div>

</div>

                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 col-md-12">
                <div class="about-img-wrapper position-relative overflow-hidden rounded-4 shadow-lg">
                    <img src="assets/img/gallery/about.png" alt="Our Vision" class="img-fluid about-img" style="    width: 100%;">
                    <div class="img-overlay"></div>
                </div>
            </div>

        </div>
    </div>
</section>
        <!-- About Area End -->

   <div class="container ">
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

<div class="our-services section-padding30">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle text-center mb-70">
                    <h2>Our Training Partner</h2>
                    <p>Become a Certified Chef with Rasoiwala: 3-Month & 6-Month Programs</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/image/p1.jpeg') }}" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Digvijay Shah</h3>
                        <span>17 years experience</span>
                        <p>Uttar Pradesh</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/image/p3.jpeg') }}" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Himanshu Srivastava</h3>
                        <span>12 years experience</span>
                        <p>Allahabad</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-card">
                    <div class="team-img">
                        <img src="{{ asset('assets/image/p2.jpeg') }}" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Kumar Gaurav</h3>
                        <span>20 years experience</span>
                        <p>Jharkhand</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>



        <!--? About-3 Start -->
   <div class="newsletter-area section-bg" style="background-image: url('assets/img/gallery/section_bg03.png');">
    <div class="overlay"></div>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-6 col-lg-7 col-md-10">

                <div class="newsletter-box">
                    <h2>Subscribe to Our Newsletter</h2>
                    <p class="mb-4">
                        Stay updated with the latest recipes, cooking tips, and exclusive offers from Rasoi Wala.
                        Sign up today and never miss a delicious update!
                    </p>

                    <form action="#" class="newsletter-form d-flex">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

        <!-- About-3 End -->
    </main>

@endsection
