<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/rasoiwala_2.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        .mobile-close-btn {
    background: none;
    border: none;
    font-size: 22px;
    font-weight: bold;
    align-self: flex-end;
    cursor: pointer;
    margin-bottom: 20px;
    color: #333;
}

        /* HEADER WRAPPER */
.header-wrapper {
    position: sticky;
    top: 0;
    z-index: 9999;
    background: #fff;
    box-shadow: 0 2px 20px rgba(0,0,0,0.05);
}

/* CONTAINER FLEX */
.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 80px;
}

/* LOGO */
.header-logo img {
    height: 70px;
    object-fit: contain;
}

/* DESKTOP MENU */
.header-menu a {
    margin: 0 18px;
    font-weight: 600;
    color: #222;
    text-decoration: none;
    transition: 0.3s;
}
.header-menu a:hover {
    color: #e63946;
}

/* DROPDOWN */
.header-dropdown {
    position: relative;
}
.header-dropdown button {
    border: none;
    background: none;
    font-weight: 600;
    color: #222;
    cursor: pointer;
}
.header-dropdown-menu {
    position: absolute;
    top: 35px;
    left: 0;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    width: 180px;
    display: none;
    flex-direction: column;
}
.header-dropdown:hover .header-dropdown-menu {
    display: flex;
}
.header-dropdown-menu a {
    padding: 10px 15px;
}

/* CONTACT BUTTON */
.header-contact-btn {
    background: #ffbc00;
    padding: 9px 20px;
    border-radius: 30px;
    color: white !important;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
}
.header-contact-btn:hover {
    background: #c62828;
}

/* MOBILE TOGGLE */
.header-toggle {
    width: 30px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 20px;
}
.header-toggle span {
    display: block;
    height: 3px;
    width: 100%;
    background: #333;
    border-radius: 2px;
}

/* MOBILE MENU */
.header-mobile-menu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 75%;
    height: 100vh;
    background: #fff;
    padding: 30px 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    transition: right 0.3s ease-in-out;
    z-index: 9998;
}
.header-mobile-menu.active {
    right: 0;
}
.header-mobile-menu a,
.header-mobile-menu button {
    text-decoration: none;
    color: #222;
    font-weight: 500;
    padding: 10px 0;
    display: block;
    width: 100%;
    text-align: left;
    border: none;
    background: none;
}

/* MOBILE DROPDOWN SUBMENU */
.mobile-submenu {
    display: none;
    flex-direction: column;
    padding-left: 15px;
}
.mobile-submenu.active {
    display: flex;
}

        /* HEADER WRAPPER */
.rw-header {
    background: #ffffff;
    border-bottom: 1px solid #eaeaea;
    box-shadow: 0 2px 20px rgba(0,0,0,0.05);
    position: sticky;
    top: 0;
    z-index: 999;
}

/* NAVBAR */
.rw-nav {
    display: flex;
    height: 80px;
    align-items: center;
    justify-content: space-between;
}

/* LOGO */
.rw-logo img {
    height: 70px;
    object-fit: contain;
}

/* DESKTOP MENU */
.rw-menu a {
    margin: 0 18px;
    font-weight: 600;
    color: #222;
    text-decoration: none;
    transition: 0.3s;
}

.rw-menu a:hover {
    color: #e63946;
}

/* DROPDOWN */
.rw-dropdown {
    position: relative;
}

.rw-dropdown button {
    border: none;
    background: none;
    font-weight: 600;
    margin: 0 18px;
    color: #222;
}

.rw-dropdown:hover .rw-dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(5px);
}

.rw-dropdown-menu {
    position: absolute;
    top: 35px;
    left: 0;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    padding: 12px 0;
    width: 180px;
    visibility: hidden;
    opacity: 0;
    transition: all 0.2s ease;
}

.rw-dropdown-menu a {
    display: block;
    padding: 10px 15px;
    white-space: nowrap;
}

/* CONTACT BUTTON */
.rw-contact-btn {
    background: #ffbc00;
    padding: 9px 20px;
    border-radius: 30px;
    color: white !important;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
}

.rw-contact-btn:hover {
    background: #c62828;
}

/* MOBILE TOGGLE  */
.rw-toggle {
    width: 30px;
    cursor: pointer;
}
.rw-toggle span {
    display: block;
    height: 3px;
    margin: 5px 0;
    background: #000;
}

/* MOBILE MENU */
.rw-mobile-menu {
    display: none;
    flex-direction: column;
    background: white;
    padding: 20px;
    border-top: 1px solid #eee;
}

.rw-mobile-menu a {
    padding: 12px 0;
    border-bottom: 1px solid #f0f0f0;
    color: #111;
    display: block;
}

.rw-mobile-dropdown {
    background: none;
    border: none;
    width: 100%;
    padding: 12px 0;
    text-align: left;
    font-weight: 600;
}

.rw-mobile-submenu {
    padding-left: 15px;
    display: none;
}
.rw-footer {
 background: linear-gradient(135deg, #222223, #222223);
    padding: 70px 0 20px;
    color: #f1f1f1;
    font-size: 15px;
}

/* LOGO BOX */
.rw-footer-logo img {
    width: 130px;
    filter: brightness(0) invert(1);
    padding: 10px;
    border-radius: 14px;
}

/* ABOUT TEXT */
.rw-footer-about p {
    color: #dcdcdc;
    margin-top: 15px;
    text-align: justify;
}

/* APP IMAGES */
.rw-apps img {
    width: 150px;
    margin-right: 10px;
    margin-top: 10px;
}

/* BLOCK HEADINGS */
.rw-footer-block h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #ffffff;
}

/* LIST LINKS */
.rw-footer-block ul li {
    margin-bottom: 10px;
}

.rw-footer-block a {
    color: #cfcfcf;
    text-decoration: none;
    transition: 0.3s;
}

.rw-footer-block a:hover {
    color: #ffbc00;
    margin-left: 5px;
}

/* GALLERY */
.rw-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 7px;
}

.rw-gallery img {
    width: 100%;
    border-radius: 8px;
    transition: 0.3s;
}

.rw-gallery img:hover {
    transform: scale(1.08);
}

/* DIVIDER */
.rw-footer-divider {
    border: 0;
    height: 1px;
    background: rgba(255,255,255,0.1);
    margin: 40px 0;
}

/* FOOTER BOTTOM */
.rw-footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.rw-footer-bottom p {
    color: #cccccc;
    margin: 0;
}

.rw-footer-bottom a {
    color: #ffbc00;
    text-decoration: none;
}

/* SOCIAL ICONS */
.rw-social {
    display: flex;
    align-items: center;
    gap: 12px;
}

.rw-social a {
    color: #fff;
    font-size: 18px;
    transition: 0.3s;
}

.rw-social a:hover {
    color: #ffbc00;
}

    </style>
        <style>
        .googlepay-badge {
            display: flex;
            background-color: rgb(28, 28, 28);
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            gap: 0.6vw;
            border-radius: 1.4vw 1.4vw 0px 0px;
            padding: 0.5vw 1vw 0.5vw 1.3vw;
            position: fixed;
            top: 40vh;
            right: -4.4vw;
            transform: rotate(-90deg);
            z-index: 999;
            cursor: pointer;
        }

        .googlepay-badge:hover {
            background-color: #444;
            /* Slightly lighter on hover */
        }

        /* Google Pay icon styling */
        .googlepay-badge img {
            width: 24px;
            /* Icon size */
            height: auto;
        }

        @media (max-width: 768px) {
            .googlepay-badge {
                display: flex;
                background-color: rgb(28, 28, 28);
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                gap: 0.6vw;
                border-radius: 1.4vw 1.4vw 0px 0px;
                padding: 0.5vw 1vw 0.5vw 1.3vw;
                position: fixed;
                top: 56vh;
                right: -12.4vw;
                transform: rotate(-90deg);
                z-index: 999;
                cursor: pointer;
            }
        }
    </style>
       <style>
        /* WhatsApp Icon Styling */
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            /* Distance from the bottom */
            left: 20px;
            /* Distance from the left */
            background-color: #25D366;
            /* WhatsApp Green */
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        /* Tooltip Text */
        .whatsapp-tooltip {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            bottom: 80px;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .whatsapp-icon:hover .whatsapp-tooltip {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>

<body>
    <!--? Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/rasoiwala_2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    <!-- TOPBAR START -->
<!-- Topbar (Desktop Only) -->
<div class="topbar d-none d-lg-block py-2" style="color:#fff;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-1">

            <!-- Left: Contact -->
            <div>
                <a href="tel:+91-9559853222" class="text-white me-2">
                    <i class="fa-solid fa-phone me-2"></i> +91-8115286606
                </a>

               <a href="#" class="text-white ml-2">
          <i class="fa-solid fa-location-dot me-2"></i> Address-: 570/1013 A, Gopal Puri, Lucknow 226005
        </a>

            </div>

            <!-- Right: Social Icons -->
        <!-- Social Media Icons (UL-LI) -->
<ul class="social-icons d-flex list-unstyled gap-3 mb-0">
    <li>
        <a href="#" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
    </li>
    <li>
        <a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a>
    </li>
    <li>
        <a href="#" class="text-white"><i class="fa-brands fa-x-twitter"></i></a>
    </li>
    <li>
        <a href="#" class="text-white"><i class="fa-brands fa-youtube"></i></a>
    </li>
</ul>


        </div>
    </div>
</div>


<!-- TOPBAR END -->

<header class="header-wrapper">
    <div class="container header-container">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="header-logo">
            <img src="{{ asset('assets/img/rasoiwala_2.png') }}" alt="Rasoiwala Logo">
        </a>

        <!-- Desktop Menu -->
        <nav class="header-menu d-none d-lg-flex">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('about') }}">About</a>

            <div class="header-dropdown">
                <button>Our Services ▾</button>
                <div class="header-dropdown-menu">
                    <a href="{{ route('onetimecooks') }}">One-time Cook</a>
                    <a href="{{ route('chefparty') }}">Chef for Party</a>
                </div>
            </div>

            <a href="{{ route('RasoiwalaSe') }}">Rasoiwala से जुड़ें</a>
            <a href="{{ route('cooksnearme') }}">Cooks Near Me</a>
            <a href="{{ route('Contact') }}">Contact</a>
        </nav>

       
@auth
    <div class="flex items-center gap-2">
        <span class="text-sm text-gray-600">Welcome,</span>
        <span class="font-semibold text-gray-800">
            {{ auth()->user()->name }}
        </span>
    </div>
    <a href="{{ route('web-admin.logout') }}" class="header-contact-btn d-none d-lg-block">
    <i class="fa-solid fa-right-to-bracket me-2"></i> logout
</a>
 <a href="{{ route('web-admin.dashboard') }}" class="header-contact-btn d-none d-lg-block">
    <i class="fa-solid fa-bars me-2"></i>
    @else
  <!-- Contact Button -->
      <a href="{{ route('login') }}" class="header-contact-btn d-none d-lg-block">
    <i class="fa-solid fa-right-to-bracket me-2"></i> Login
</a>

@endauth





        <!-- Mobile Toggle -->
        <div class="header-toggle d-lg-none">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- Mobile Menu -->
<div class="header-mobile-menu">
    <button class="mobile-close-btn">✕ Close</button>

    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('about') }}">About</a>

    <button class="mobile-dropdown-btn">Our Services ▾</button>
    <div class="mobile-submenu">
        <a href="{{ route('onetimecooks') }}">One-time Cook</a>
        <a href="{{ route('chefparty') }}">Chef for Party</a>
    </div>

    <a href="{{ route('RasoiwalaSe') }}">Rasoiwala से जुड़ें</a>
    <a href="{{ route('cooksnearme') }}">Cooks Near Me</a>
    <a href="{{ route('Contact') }}" class="header-contact-btn">Contact</a>
</div>

</header>



    <main>
        @yield('content')
    </main>

<footer class="rw-footer">
    <div class="container">

        <div class="row gy-5 justify-content-between">

            <!-- LOGO + ABOUT -->
            <div class="col-lg-4 col-md-6">
                <div class="rw-footer-about">
                    <div class="rw-footer-logo">
                        <img src="{{ asset('assets/img/rasoiwala_2.png') }}" alt="Rasoiwala">
                    </div>
                    <p>
                        A Rasoiwala, often referred to as the soul of traditional Indian kitchens, plays 
                        a vital role in crafting culinary delights that bring people together.
                    </p>

                    <div class="rw-apps">
                        <img src="{{ asset('assets/img/google_play_bb87168764.svg') }}" alt="">
                        <img src="{{ asset('assets/img/app_store_e12d7f52d9.svg') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- NAVIGATION -->
            <div class="col-lg-2 col-md-6">
                <div class="rw-footer-block">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="{{ route('Contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- USEFUL LINKS -->
            <div class="col-lg-3 col-md-6">
                <div class="rw-footer-block">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Investor Relation</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('termcondition') }}">Terms & Conditions</a></li>
                        <li><a href="{{ route('shippingdevlivery') }}">Shipping & Delivery Policy</a></li>
                        <li><a href="{{ route('cancellation') }}">Cancellation & Refund Policy</a></li>
                    </ul>
                </div>
            </div>

            <!-- GALLERY -->
            <div class="col-lg-3 col-md-6">
                <div class="rw-footer-block">
                    <h4>Gallery</h4>
                    <div class="rw-gallery">
                        <img src="assets/img/gallery/instagram1.png" alt="">
                        <img src="assets/img/gallery/instagram2.png" alt="">
                        <img src="assets/img/gallery/instagram3.png" alt="">
                        <img src="assets/img/gallery/instagram4.png" alt="">
                        <img src="assets/img/gallery/instagram5.png" alt="">
                        <img src="assets/img/gallery/instagram6.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <hr class="rw-footer-divider">

        <!-- BOTTOM -->
        <div class="rw-footer-bottom">
            <p>© <script>document.write(new Date().getFullYear());</script> All rights reserved |
                Designed by <a href="https://www.marvsoftwares.com/" target="_blank">MARV Softwares India (P) Limited.</a>
            </p>

            <div class="rw-social">
                <span>Follow Us:</span>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fas fa-globe"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </div>
</footer>


    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    {{-- <a href="#" target="_blank" class="googlepay-badge">
        <i class="fab fa-google-play"></i>
        Available on
    </a> --}}

 
    <a href="https://wa.me/+917355727766" target="_blank">
        <div class="whatsapp-icon">
            <i class="fab fa-whatsapp"></i>

        </div>
    </a>
    <!-- JS here -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function(){
    const toggle = document.querySelector('.header-toggle');
    const mobileMenu = document.querySelector('.header-mobile-menu');
    const mobileDropdown = document.querySelector('.mobile-dropdown-btn');
    const mobileSubmenu = document.querySelector('.mobile-submenu');
    const closeBtn = document.querySelector('.mobile-close-btn');

    // Mobile menu toggle
    toggle.addEventListener('click', function(){
        mobileMenu.classList.toggle('active');
    });

    // Close button
    closeBtn.addEventListener('click', function(){
        mobileMenu.classList.remove('active');
    });

    // Submenu toggle
    mobileDropdown.addEventListener('click', function(){
        mobileSubmenu.classList.toggle('active');
    });
});
</script>


</body>

</html>
