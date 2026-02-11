@extends('WebsiteMaster')
@section('title', 'Cancellation & Refund Policy')
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
            <h1 class="contact-heading">Cancellation & Refund Policy</h1>
        </div>
    </div>
    <!-- Hero Section -->


  <!-- Policy Content -->
  <div class="container">
    <div class="policy-container">

      <div class="mb-5">
        <h2 class="">Cancellation & Refund Policy</h2>
        <p>At Rasoi Wala, we take pride in preparing each order with utmost care and quality. Since our food is freshly made, we follow a strict cancellation and refund policy to ensure fair service to all our customers.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> Order Cancellation</h2>
        <p><strong>1. Customer-Initiated Cancellation</strong></p>
        <ul class="policy-list">
          <li>Orders can only be cancelled <strong>within 5 minutes</strong> of placing them and <strong>before food preparation begins</strong> .</li>
          <li>Once the food is under preparation or out for delivery, the order <strong>cannot be cancelled</strong> .</li>
          <li>To cancel an order, call us immediately at <strong>[Insert Phone Number]</strong> with your order ID.</li>
        </ul>

         <p><strong>2. Rasoi Wala-Initiated Cancellation</strong></p>
         <p>We reserve the right to cancel an order due to:</p>
        <ul class="policy-list">
          <li>Unavailability of ingredients or menu items</li>
          <li>Technical issues on the website or payment gateway</li>
          <li>Delivery location not serviceable</li>
          <li>Inappropriate or fraudulent order activity</li>
        </ul>
        <p>In such cases, customers will be informed, and a <strong>full refund</strong> will be issued promptly.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> Refund Policy</h2>
        <p><strong>1. Eligible Refund Scenarios</strong></p>
        <p>Refunds may be considered in the following cases:</p>
        <ul class="policy-list">
          <li>The order was cancelled by Rasoi Wala</li>
          <li>Incorrect or incomplete order delivered</li>
          <li>Food was found to be damaged, spoiled, or unfit for consumption (with photographic evidence provided within 30 minutes of delivery)</li>
        </ul>
        <p>All refund requests will be verified and processed at our discretion.</p>

          <p><strong>2. Non-Refundable Scenarios</strong></p>
        <ul class="policy-list">
          <li>Delay in delivery due to traffic, weather, or third-party factors</li>
          <li>Change of mind or taste preferences</li>
          <li>Partial consumption of the food</li>
          <li>Wrong address or unavailability at the time of delivery</li>
        </ul>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> Refund Processing Time</h2>
        <ul class="policy-list">
          <li>If approved, the refund will be initiated within <strong>2–4 business days</strong> to the original payment method.</li>
          <li>For UPI or wallet payments, refunds may reflect instantly or take up to <strong>7 working days</strong> , depending on the bank.</li>
        </ul>
      </div>

     
        <div>
        <h2 class="section-title"> Need Support?</h2>
        <p>For cancellations, refund requests, or issues with your order, please contact:
        </p>
        <ul>
            <li><i class="bi bi-geo-alt-fill me-2"></i> Rasoi Wala, Tiraha Munshipulia Chauraha, Indira Nagar, Lucknow</li>
            <li><i class="bi bi-telephone-fill me-2"></i> +917355727766</li>
            <li><i class="bi bi-envelope-open-fill me-2"></i> rasoiwala57@gmail.com</li>
        </ul>
      </div>
    </div>
  </div>

</main>

@endsection
