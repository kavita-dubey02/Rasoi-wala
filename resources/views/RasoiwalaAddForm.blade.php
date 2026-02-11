@extends('WebsiteMaster')
@section('title', 'Rasoi Wala: पार्टी के लिए खास खाना')
@section('content')

<main>
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2 style="font-size: 28px">Rasoi Wala से जुड़ें</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="join-rasoiwala">
    <h2>Rasoi Wala से जुड़ें</h2>
    <p>Rasoi Wala से जुड़ने के लिए आपके पास आधार कार्ड, स्मार्टफोन, बैंक अकाउंट, पासपोर्ट फ़ोटो और होटल मैनेजमेंट से संबंधित डिप्लोमा या प्रमाणपत्र होना ज़रूरी है।</p>

    <form action="#" method="POST" enctype="multipart/form-data">
        <!-- Personal Details -->
        <label for="name">पूरा नाम (Full Name):</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">मोबाइल नंबर (Phone Number):</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">ईमेल पता (Email Address):</label>
        <input type="email" id="email" name="email" required>

        <label for="address">पता (Address):</label>
        <input type="text" id="address" name="address" required>

        <!-- Upload Documents -->
        <label for="aadhaar">आधार कार्ड (Aadhaar Card):</label>
        <input type="file" id="aadhaar" name="aadhaar" accept=".pdf, .jpg, .jpeg, .png" required>

        <label for="policeVerification">पुलिस सत्यापन प्रमाणपत्र (Police Verification Certificate):</label>
        <input type="file" id="policeVerification" name="policeVerification" accept=".pdf, .jpg, .jpeg, .png" required>

        <label for="photo">पासपोर्ट साइज फोटो (Passport Size Photo):</label>
        <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png" required>

        <label for="bankStatement">बैंक खाता विवरण (Bank Account Statement):</label>
        <input type="file" id="bankStatement" name="bankStatement" accept=".pdf, .jpg, .jpeg, .png" required>

        <label for="diploma">डिप्लोमा/प्रमाणपत्र (Hotel Management Diploma/Certificate):</label>
        <input type="file" id="diploma" name="diploma" accept=".pdf, .jpg, .jpeg, .png" required>

        <!-- Additional Info -->
        <label for="message">आप Rasoi Wala से क्यों जुड़ना चाहते हैं? (Why do you want to join Rasoi Wala?):</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit" class="btn hero-btn">जुड़ें (Join Now)</button>
    </form>
</div>
<style>
    /* Join Rasoi Wala Form Styles */
.join-rasoiwala {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 700px;
    margin: 20px auto;
    font-family: Arial, sans-serif;
}

.join-rasoiwala h2 {
    font-size: 26px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

.join-rasoiwala p {
    font-size: 16px;
    margin-bottom: 20px;
    color: #555;
    line-height: 1.5;
    text-align: justify;
}

.join-rasoiwala label {
    display: block;
    margin: 15px 0 5px;
    font-size: 14px;
    color: #333;
    font-weight: bold;
}

.join-rasoiwala input,
.join-rasoiwala textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    color: #555;
}

.join-rasoiwala input[type="file"] {
    padding: 5px;
}

.join-rasoiwala textarea {
    resize: vertical;
    height: 100px;
}

</style>


<script>
    function HomesubmitForm() {
        debugger

        var name = document.getElementById("name").value;

        var phone = document.getElementById("phone").value;

        var email = document.getElementById("email").value;

        var address = document.getElementById("address").value;

        var cuisine = document.getElementById("cuisine").value;

        var guests = document.getElementById("guests").value;

        var budget = document.getElementById("budget").value;


        if (!name || !phone || !email || !date || !cuisine || !guests || !budget) {

            alert("Please fill in all required fields.");

            return;

        }

        alert("Your form has been submitted!");

        var whatsappMessage = `Hello,

    I am ${name}. I would like to inquire about hiring a Chef for Home Visit. Below are my details:

    - **Mobile Number**: ${phone}
    - **Email**: ${email}
    - **Date**: ${date}
    - **Guests**: ${guests}
    - **Cuisine Preference**: ${cuisine}

    Please let me know if this is possible. Looking forward to your response.

    Thank you!`;

        var whatsappURL = `https://wa.me/918115286606?text=${encodeURIComponent(whatsappMessage)}`;




        window.open(whatsappURL, '_blank');

        location.reload();
    }
</script>

@endsection
