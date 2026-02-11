@extends('WebsiteMaster')
@section('title', 'Terms & Conditions')
@section('content')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
  
    .hero-section {
      background: linear-gradient(135deg, #0052D4, #4364F7, #6FB1FC);
      color: white;
      padding: 80px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .policy-container {
      background: #fff;
      padding: 60px 30px;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
      margin-top: -50px;
      z-index: 1;
      position: relative;
    }

   .section-title {
      font-size: 1.75rem;
      font-weight: 600;
      color: #343a40;
      margin-bottom: 20px;
      border-left: 5px solid #f7941d;
      padding-left: 15px;
          text-align: left !important;
    }
.section-title:after {
    content: "";
    width: 60px;
    height: 3px;
    background: none;
    display: block;
    margin: 8px auto 0;
    border-radius: 3px;
}
    ul.policy-list {
      list-style: none;
      padding-left: 0;
    }

    ul.policy-list li {
      margin-bottom: 15px;
      padding-left: 30px;
      position: relative;
      font-size: 1rem;
      color: #555;
    }

    ul.policy-list li::before {
      content: "\f26b";
      font-family: "bootstrap-icons";
      position: absolute;
      left: 0;
      top: 0;
      color: #4b2d14;
      font-size: 1.2rem;
    }
.policy-container a {
    color: blue;
}

  </style>
<main>
      <div class="contact-hero">
        <div class="contact-overlay"></div>
        <div class="container">
            <h1 class="contact-heading">Terms & Conditions</h1>
        </div>
    </div>

    <!-- Hero Section -->


  <!-- Policy Content -->
  <div class="container">
    <div class="policy-container">

      <div class="mb-5">
        <h2 class="">Terms & Conditions</h2>
        <p>Welcome to <strong>Rasoi Wala!</strong> By accessing or using our website <a href="">www.rasoiwala.in</a> or placing an order with us, you agree to the following Terms and Conditions. Please read them carefully before proceeding.</p>

      
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 1. Acceptance of Terms</h2>
        <p>By using our website or services, you confirm that you are at least 18 years old or are accessing the site under the supervision of a parent or guardian. Your use of the site constitutes your agreement to these Terms.</p>
    
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 2. Services Offered</h2>
        <p>Rasoi Wala provides:</p>
        <ul class="policy-list">
          <li>Online food ordering for takeaway or delivery.</li>
          <li>Information about our menu, offers, and location.</li>
          <li>Customer support via phone or online.</li>
        </ul>
        <p>All services are subject to availability and may be modified or discontinued without notice.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 3. Order Placement & Cancellation</h2>
        <p>Orders can be placed through our website or over the phone.</p>
        <p>Once placed, orders <strong>cannot be modified or cancelled</strong> after a certain preparation time.</p>
        <p>Rasoi Wala reserves the right to cancel any order due to unavailability of items, technical errors, or any unforeseen circumstances. In such cases, a full refund will be issued (if applicable).</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title">4. Pricing & Payment</h2>
        <p>All prices listed on the website are in Indian Rupees (INR) and inclusive of applicable taxes.</p>
        <p>We accept online payments via secure payment gateways (e.g., Razorpay, Paytm).</p>
        <p>Prices and menu items are subject to change without prior notice.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 5. Delivery Policy</h2>
        <p>Deliveries are subject to location availability and time slots.</p>
        <p>Estimated delivery times are only approximate and may vary due to traffic, weather, or order load.</p>
        <p>We are not liable for delays beyond our control.</p>
      </div>

      <div>
        <h2 class="section-title">6. Returns & Refunds</h2>
        <p>As food is perishable, <strong>returns are not accepted</strong> once delivered.
        </p>
        <p>If you receive an incorrect or spoiled item, please contact us immediately. Upon verification, a replacement or refund will be processed.</p>
      </div>
     <div>
        <h2 class="section-title"> 7. User Conduct</h2>
        <p>You agree not to:
        </p>
        <ul>
            <li>Misuse the website or attempt to hack or disrupt its functionality.</li>
            <li>Provide false information during ordering.</li>
            <li>Use offensive or inappropriate language while communicating with staff.</li>
        </ul>
      </div>
        <div>
        <h2 class="section-title"> 8. Intellectual Property</h2>
        <p>All content on the website—text, images, logos, menu items, and designs—is the property of Rasoi Wala and may not be reproduced or used without permission.
        </p>
      </div>
        <div>
        <h2 class="section-title"> 9. Limitation of Liability</h2>
        <p>Rasoi Wala shall not be held liable for:
        </p>
        <ul>
            <li>Any indirect or consequential damages arising out of the use or inability to use the service.</li>
            <li>Any delays, errors, or failures in delivery caused by third-party services or unforeseen events.</li>
        </ul>
      </div>
        <div>
        <h2 class="section-title">10. Modifications</h2>
        <p>We reserve the right to update or modify these Terms at any time. Changes will be posted on this page, and continued use of the website means acceptance of those changes.
        </p>
      </div>
        <div>
        <h2 class="section-title">11. Governing Law</h2>
        <p>These Terms & Conditions are governed by the laws of India. Any disputes arising out of or in connection with the services shall be subject to the jurisdiction of the courts in <strong>Lucknow, Uttar Pradesh</strong>.
        </p>
      </div>

          <div>
        <h2 class="section-title"> 12. Contact Us</h2>
        <p>For any questions or clarifications, feel free to contact:
        </p>
        <ul>
            <li><i class="bi bi-geo-alt-fill me-2"></i> Rasoi Wala, Tiraha Munshipulia Chauraha, Indira Nagar, Lucknow</li>
            <li><i class="bi bi-telephone-fill me-2"></i>   +91 8115286606</li>
            <li><i class="bi bi-envelope-open-fill me-2"></i> rasoiwala57@gmail.com</li>
        </ul>
      </div>

    </div>
  </div>

</main>

@endsection
