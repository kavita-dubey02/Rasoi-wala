@extends('WebsiteMaster')
@section('title', 'Rasoi Wala: पार्टी के लिए खास खाना')
@section('content')
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".2s">Rasoi wala  का हिस्सा बनें </span>
                                <h1 data-animation="fadeInLeft" data-delay=".4s" style="font-size: 34px;color:white">हमसे जुड़े 4500 से भी ज़्यादा कुक्स का हिस्सा बनें और अपने कौशल को आगे बढ़ाएँ।</h1>

                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="{{route('RasoiwalaAddForm')}}" class="btn hero-btn" id="openPopupBtn" data-animation="fadeInLeft"
                                        data-delay=".8s">Rasoi wala से जुड़ें</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".2s">हुनर से पैसे कमाएँ। </span>
                                <h1 data-animation="fadeInLeft" data-delay=".4s" style="font-size: 34px;color:white">अपने खाना बनाने की प्रतिभा को एक नई शुरुआत दें और इसके माध्यम से पैसे कमाएँ।
                                </h1>

                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="#" class="btn hero-btn" id="openPopupBtn" data-animation="fadeInLeft"
                                        data-delay=".8s">Rasoi wala से जुड़ें</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
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
    <section class="faq-container">
        <h2 style="text-align: center">आपके प्रश्न</h2>

        <div class="faq-item">
            <button class="faq-question">
                Rasoi Wala  से कैसे जुड़ें?
                <span class="icon">+</span>
            </button>
            <div class="faq-answer">
                <p>  Rasoi Wala से जुड़ने के लिए ऊपर दिए गए Rasoi Wala से जुड़ें’ का बटन दबा कर फॉर्म भरें या हमें 8115286606 पर कॉल करें।</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Rasoi Wala से कौन जुड़ सकते हैं?
                <span class="icon">+</span>
            </button>
            <div class="faq-answer">
                <p> Rasoi Wala  से हर वह कुक जुड़ सकते हैं जो खाना पकाने की प्रतिभा रखते हैं और 18 साल से ज़्यादा उम्र के हैं। </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Rasoi Wala  से जुड़ने के लिए किन चीजों की आवश्यकता है?
                <span class="icon">+</span>
            </button>
            <div class="faq-answer">
                <p>Rasoi Wala से जुड़ने के लिए आपके पास आधार कार्ड, स्मार्टफोन, बैंक अकाउंट, पासपोर्ट फ़ोटो और होटल मैनेजमेंट से संबंधित डिप्लोमा या प्रमाणपत्र होना ज़रूरी है।</p>

            </div>
        </div>

    </section>


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
