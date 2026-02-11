@extends('WebsiteMaster')
@section('title', 'Privacy Policy')
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
            <h1 class="contact-heading">Privacy Policy</h1>
        </div>
    </div>
    <!-- Hero Section -->


  <!-- Policy Content -->
  <div class="container">
    <div class="policy-container">

      <div class="mb-5">
        <h2 class="">Privacy Policy – Rasoiwala</h2>
         <span><strong>Effective Date: [Insert Date]</strong></span>
        <p>Rasoiwala ("we", "us", or "our") respects your privacy and is committed to protecting your personal information. This Privacy Policy describes how we collect, use, and share your information when you use our mobile application ("App") and associated services.</p>
        <p>By using Rasoiwala, you agree to the practices outlined in this Privacy Policy.</p>
      
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 1. Information We Collect</h2>
        <p><strong>a. Personal Information</strong></p>
        <p>We collect the following personal data when you register or use the app:</p>
        <ul class="policy-list">
          <li>Name</li>
          <li>Mobile number</li>
          <li>Email address</li>
          <li>Location (for nearby chef/cook discovery)</li>
          <li>Profile picture (optional)</li>
          <li>Address (for service delivery)</li>
        </ul>
        <p>Payment information (processed securely via third-party providers; we do not store card details)</p>

        <p><strong>b. Usage Data</strong></p>
        <p>Device information (model, OS version, unique device ID)</p>
        <p>App usage analytics (crash logs, feature interactions)</p>
        <ul class="policy-list">
          <li>IP address</li>
          <li>Time and date of access</li>
          
        </ul>
       
        <p><strong>c. Location Data</strong></p>
        <p>Approximate or precise location (if permission granted) is used to show professionals in your area.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 2. How We Use Your Information</h2>
        <p>We use your data to:</p>
        <ul class="policy-list">
          <li>Register and manage your account</li>
          <li>Connect you with verified culinary professionals</li>
          <li>Process and confirm bookings and payments</li>
        <li>Send notifications related to your bookings</li>
        <li>Improve app performance and user experience</li>
       <li>Ensure compliance with laws and prevent fraud</li>
        </ul>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 3. Data Sharing and Disclosure</h2>
        <p>We do not sell your personal data. However, we may share it with:</p>
        <p>Culinary professionals (only relevant data to fulfill service: name, contact, address)</p>
        <ul class="policy-list">
          <li>Payment gateways for secure transaction processing</li>
          <li>Service providers (e.g., analytics, cloud hosting) under strict confidentiality</li>
          <li>Authorities, if required by law or to respond to legal process</li>
     
        </ul>
      </div>

      <div class="mb-5">
        <h2 class="section-title">4. Data Security</h2>
        <p>We implement appropriate technical and organizational measures to protect your data against unauthorized access, loss, or misuse.</p>
      </div>

      <div class="mb-5">
        <h2 class="section-title"> 5. Your Rights and Choices</h2>
        <p>You can:</p>
        <ul>
          <li>Access and update your account details</li>
           <li>Delete your account at any time</li>
            <li>Revoke location or notification permissions from your device settings</li>
             <li>Contact us to request deletion of your data</li>
        </ul>
      </div>

      <div>
        <h2 class="section-title"> 6. Data Retention</h2>
        <p>We retain your data as long as necessary to provide services and comply with legal obligations. Once no longer needed, your data is securely deleted or anonymized.
        </p>
      </div>


     <div>
        <h2 class="section-title"> 7. Children's Privacy</h2>
        <p>Rasoiwala is not intended for users under the age of 18. We do not knowingly collect personal data from minors.
        </p>
       
    </div>

        <div>
        <h2 class="section-title"> 8. Permissions Required</h2>
        <p>To ensure proper functioning, the app may request the following permissions:
        </p>
        <ul>
          <li><strong>Location:</strong> To show nearby chefs/cooks</li>
          <li><strong>Camera & Gallery:</strong> For optional profile or service image uploads</li>
          <li><strong>Storage:</strong> For uploading images and saving app-related files</li>
          <li><strong>Notifications:</strong> For booking alerts and updates</li>
        </ul>
        <p>You may control or revoke permissions anytime via your device settings.</p>
      </div>

        <div>
        <h2 class="section-title"> 9. Third-party Services</h2>
        <p>Our app integrates with third-party tools (e.g., payment gateways, analytics tools) that may collect anonymized usage data. We encourage you to review their privacy policies as well.
        </p>
      
      </div>
       <div>
        <h2 class="section-title"> 10. Updates to This Policy</h2>
        <p>We may update this Privacy Policy periodically. Changes will be reflected with an updated "Effective Date." Continued use of the app after updates indicates acceptance.
        </p>
      
      </div>

         <div>
        <h2 class="section-title"> 11. Contact Us</h2>
        <p>For questions or concerns about your data, contact us at:
        </p>
        <ul>
            <li><i class="bi bi-envelope-open-fill me-2"></i> Email: support@rasoiwala.in</li>
        </ul>
      </div>


      
    </div>
  </div>

</main>

@endsection
