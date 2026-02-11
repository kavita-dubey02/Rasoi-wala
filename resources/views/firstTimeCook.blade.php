@extends('WebsiteMaster')
@section('title', 'One-Time Cook: Rasoi Wala')
@section('content')


    <div class="popup-content" style="margin-top:8%">
        <h2>Book a One-Time Cook</h2>
        <p>Experience the luxury of having a professional chef for your special occasions with our exclusive one-time cook service.</p>
        <p><strong>Multi-Cuisine Professionals | Customisable Menu | Starting from ₹ 285 / visit</strong></p>

        <form id="firstBookingForm" action="javascript:void(0);" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="name">Mobile Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"
                    pattern="[0-9]{10}" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    title="Please enter a 10-digit phone number" required>
            </div>
            <div class="form-group">
                <label for="address">Address/Location:</label>
                <textarea id="address" name="address" placeholder="Enter your address or pin location" required></textarea>
            </div>
            <div class="form-group">
                <label for="dateTime">Preferred Date & Time:</label>
                <input type="datetime-local" id="dateTime" name="dateTime" required>
            </div>
            <div class="form-group">
                <label for="cuisine">Preferred Cuisine:</label>
                <select id="cuisine" name="cuisine" required>
                    <option value="">Select Cuisine</option>
                    <option value="Indian">Indian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Continental">Continental</option>
                    <option value="South Indian">South Indian</option>
                    <option value="Non-Veg">Non-Veg</option>
                    <option value="Veg">Veg</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="specialInstructions">Special Instructions:</label>
                <textarea id="specialInstructions" name="specialInstructions"
                    placeholder="Mention allergies, preferences, or other notes"></textarea>
            </div>
            <button type="submit" class="btn hero-btn" onclick="submitForm()">Confirm Booking</button>
        </form>
    </div>
    <style>
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        /* Paragraph */
        p {
            text-align: center;
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .popup-form {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .popup-content {
            background: #fbf6f6;
            padding: 47px;
            border-radius: 10px;
            width: 100%;
            /* max-width: 757px; */
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }

        .btn.hero-btn {
            background: #28a745;
            color: #fff;
            padding: 28px 19px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn.hero-btn:hover {
            background: #218838;
        }
    </style>
    <script>
        function submitForm() {
            debugger

            var name = document.getElementById("name").value;

            var phone = document.getElementById("phone").value;

            var address = document.getElementById("address").value;



            var dateTime = document.getElementById("dateTime").value;

            var cuisine = document.getElementById("cuisine").value;



            if (!name || !phone || !address || !dateTime || !cuisine) {

                alert("Please fill in all required fields.");

                return;

            }



            alert("Your form has been submitted!");



            var whatsappMessage = `Hello, I am ${name}. I would like to inquire about hiring a one-time cook. Here are my details:
            - Mobile Number: ${phone}
            - Address: ${address}
            - Preferred Timing: ${dateTime}
            - Cuisine Preference: ${cuisine}

            Please let me know if this is possible. Looking forward to your response. Thank you!`;



            var whatsappURL = `https://wa.me/918115286606?text=${encodeURIComponent(whatsappMessage)}`;



            window.open(whatsappURL, '_blank');

            location.reload();
        }
    </script>
@endsection
