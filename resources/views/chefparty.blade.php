@extends('WebsiteMaster')
@section('title', 'Party Chef: Expert Culinary Experience')
@section('content')
    <main>
        <!--? Hero Start -->
   <div class="event-hero-section">
    <div class="event-hero-overlay"></div>

    <div class="container">
        <div class="event-hero-content">
            <h1>Exclusive Chef Services for Your Special Events</h1>
            <p class="text-white">Premium dishes, professional chefs, and unforgettable taste delivered at your venue.</p>
        </div>
    </div>
</div>

        <!-- Hero End -->
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
        <section class="faq-container">
            <h2 style="text-align: center">Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question">
                    What types of food do you offer?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We offer a wide range of traditional and authentic home-cooked Indian dishes, including vegetarian
                        and non-vegetarian options.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can I place an order?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You can place an order through our website or mobile app. Just select your desired dishes and proceed
                        to checkout!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you offer home delivery?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, we provide home delivery to your doorstep within a specified radius from our kitchen.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are the ingredients fresh?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! We source fresh ingredients daily to prepare delicious meals that remind you of home.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I customize my order?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can customize your order to suit your taste preferences. Just let us know when placing your
                        order!</p>
                </div>
            </div>
        </section>
        <div style="position: relative;">
            <div class="booktrial_container__8g8F_" style="padding: 0px;">
                <div class="booktrial_banner__iBsOc">
                    <img src="{{ asset('assets/image/d.webp') }}" alt="Rasoiwala banner" style="width: 100%; height:300px;">
                </div>
                <div class="booktrial_content__bwAtY">
                    <p style="color: white">What are you waiting for, when it’s</p>
                    <h2 style="color: #ffbc00">Good Food. Good People. Good Life.</h2>
                </div>
            </div>
        </div>

    </main>
    <script>
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const parentItem = question.parentElement;
                parentItem.classList.toggle('active');

                const icon = question.querySelector('.icon');
                if (parentItem.classList.contains('active')) {
                    icon.textContent = "-";
                } else {
                    icon.textContent = "+";
                }
            });
        });
    </script>

@endsection
