@extends('WebsiteMaster')
@section('title', 'रसोई वाला: हमसे संपर्क करें, हम आपकी मदद करेंगे')
@section('content')
<style>
    .contact_form .form-control {
    padding: 25px 15px;
    border-radius: 10px;
    border: 1px solid #ddd;
}
</style>
<main>

    <!-- HERO SECTION -->
    <div class="contact-hero">
        <div class="contact-overlay"></div>
        <div class="container">
            <h1 class="contact-heading">Contact Us</h1>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <section class="contact-outer">
        <div class="container">

            <!-- Map -->
            <div class="map-wrapper mt-5">
                <iframe loading="lazy"
                        src="https://www.google.com/maps?q=25.069993,85.129341&t=m&z=16&output=embed"
                        title="Location Map"
                        aria-label="Location"
                        allowfullscreen=""></iframe>
            </div>

            <div class="row mt-5">

                <!-- FORM -->
                <div class="col-lg-8">
                    <h4>Account Deletion Request</h4>
                        <p>If you wish to delete your account, please fill out the form and write <strong>“Account Deletion Request”</strong>  in the message box, then submit it. We will process your request promptly in accordance with our privacy policy.</p>
                    <div class="contact-card">
                        <h2 class="form-title">Get in Touch</h2>

                        <form class="contact_form pb-3">

                         
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input class="form-control" type="text" placeholder="Enter your name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input class="form-control" type="email" placeholder="Enter your email">
                                </div>
                                 <div class="col-md-12 mb-3">
                                    <input class="form-control" type="text" placeholder="Enter your phone no">
                                </div>
                                  <div class="col-md-12 mb-3">
                                    <textarea class="form-control mb-3" rows="6" placeholder="Enter Message" style="height: 115px; "></textarea>
                                </div>
                            </div>
                            <button class="btn-send">Send Message</button>
                        </form>

                       
                    </div>
                     
                </div>

                <!-- CONTACT INFO -->
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="info-box">
                        <span><i class="ti-home"></i></span>
                        <h4>Address</h4>
                        <p>570/1013 A GOPAL PURI, Lucknow 226005</p>
                    </div>

                    <div class="info-box">
                        <span><i class="ti-tablet"></i></span>
                        <h4>Contact</h4>
                        <p>+91 8115286606</p>
                    </div>

                    <div class="info-box">
                        <span><i class="ti-email"></i></span>
                        <h4>Email</h4>
                        <p> rasoiwala57@gmail.com</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>


@endsection
