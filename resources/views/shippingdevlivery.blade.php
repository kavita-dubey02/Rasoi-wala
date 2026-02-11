@extends('WebsiteMaster')
@section('title', 'Shipping & Delivery Policy')
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
            <h1 class="contact-heading">Shipping & Delivery Policy</h1>
        </div>
    </div>
    <!-- Hero Section -->


  <!-- Policy Content -->
  <div class="container">
    <div class="policy-container">

      <div class="mb-5">
        <h2 class="">Shipping & Delivery Policy</h2>
        <p>At <strong>Rasoi Wala</strong>, we are committed to delivering fresh, hygienic, and delicious food to your doorstep with care and punctuality. Please read our Shipping & Delivery Policy to understand how we handle food delivery services across Lucknow.</p>
      </div>

     <div class="mb-5">
        <h2 class="">Delivery Areas</h2>
        <p>We currently offer delivery services in <strong>selected areas of Lucknow</strong>. You can check delivery availability for your location by entering your address at checkout or contacting our team.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> Delivery Timings</h2>
        <ul class="policy-list">
          <li>Our delivery window is<strong>9:00 AM to 9:00 PM,  </strong>seven days a week.</li>
          <li>Orders placed outside this time may be scheduled for the next available delivery slot.</li>
          <li>You can also pre-order meals for a specific time, and we’ll do our best to deliver accordingly.</li>
        </ul>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> Estimated Delivery Time</h2>
        <p>The average delivery time ranges between <strong>30 to 60 minutes</strong>, depending on location, order size, weather, and traffic.</p>
        <p>During peak hours or special events, delivery times may vary slightly.</p>
      </div>

        <div class="mb-5">
        <h2 class="section-title"> Delivery Charges</h2>
        <p>A minimal delivery fee may apply based on distance or order value.</p>
        <p>Orders above a certain amount (e.g., ₹499) may qualify for <strong>free delivery</strong>. Offers and conditions are subject to change.</p>
      </div>

         <div class="mb-5">
        <h2 class="section-title"></i> Order Tracking</h2>
        <p>Once your order is confirmed, you'll receive an order ID via SMS or WhatsApp.</p>
        <p>For real-time updates or queries, you can call our helpline directly.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> Failed Delivery</h2>
        <p>Delivery may fail in cases such as:</p>
        <ul class="policy-list">
          <li>Incorrect or incomplete delivery address</li>
          <li>Customer unavailable or unreachable</li>
          <li>Entry restrictions at the location (e.g., gated societies without access)</li>
        </ul>
        <p>In such cases, no refunds will be issued unless it's our mistake. We recommend that customers be available during the estimated delivery window.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title">Food Handling & Packaging</h2>
        <ul class="policy-list">
          <li>All food items are packed in hygienic, tamper-proof containers.</li>
          <li>Our delivery staff follow strict hygiene protocols and adhere to contactless delivery practices upon request.</li>
        </ul>
      </div>

        <div>
        <h2 class="section-title">Need Help?</h2>
        <p>For any delivery-related issues, delayed orders, or special requests, please contact:
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
