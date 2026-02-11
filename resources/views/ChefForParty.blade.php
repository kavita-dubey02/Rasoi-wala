@extends('WebsiteMaster')
@section('title', 'Chef for Party')
@section('content')


    <div class="form-container" style="margin-top: 8%">
        <h2>Chef for Party - visit Plan</h2>
        <p>Experience the luxury of having a professional chef for your parties with our exclusive visit plans.</p>
        <p><strong>Multi-Cuisine Professionals | Customisable Menu | Prompt Service | Bartenders, Waiters, etc. | Starting from ₹1850/visit</strong></p>
        <form action="chefsubmitform" action="javascript:void(0);" method="post">
            <div class="form-group">
                <label for="name">Your Name :</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number :</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"
                    pattern="[0-9]{10}" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    title="Please enter a 10-digit phone number" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address :</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="date">Event Date :</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="cuisine">Preferred Cuisine :</label>
                <select id="cuisine" name="cuisine" required>
                    <option value="">Select a cuisine</option>
                    <option value="multi-cuisine">Multi-Cuisine</option>
                    <option value="indian">Indian</option>
                    <option value="continental">Continental</option>
                    <option value="italian">Italian</option>
                    <option value="chinese">Chinese</option>
                    <option value="Non-Veg">Non-Veg</option>
                    <option value="Veg">Veg</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="guests">Number of Guests</label>
                <input type="number" id="guests" name="guests" placeholder="Enter number of guests" required>
            </div>
            <div class="form-group">
                <label for="services">Additional Services : </label>
                <textarea id="services" name="services" placeholder="Specify additional services like bartenders, waiters, etc."></textarea>
            </div>
            <div class="form-group">
                <label for="budget">Estimated Budget :</label>
                <input type="text" id="budget" name="budget" placeholder="Enter your budget">
            </div>
            <button type="submit" class="btn hero-btn" onclick="ChefsubmitForm()">Confirm Booking</button>
        </form>
    </div>
    <style>
         /* Heading */
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
        .form-container {
            background: white;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;

        }

        h2 {
            text-align: center;
            color: #333;
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
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
    <script>
        function ChefsubmitForm() {
            debugger

            var name = document.getElementById("name").value;

            var phone = document.getElementById("phone").value;

            var email = document.getElementById("email").value;

            var date = document.getElementById("date").value;

            var cuisine = document.getElementById("cuisine").value;

            var guests = document.getElementById("guests").value;

            var services = document.getElementById("services").value;

            var budget = document.getElementById("budget").value;



            if (!name || !phone || !email || !date || !cuisine || !guests || !services || !budget) {

                alert("Please fill in all required fields.");

                return;

            }



            alert("Your form has been submitted!");



            var whatsappMessage = `Hello,

        I hope this message finds you well. My name is ${name}, and I would like to inquire about hiring a chef for a party. Below are my details:

        - **Mobile Number**: ${phone}
        - **Email Address**: ${email}
        - **Event Date & Timing**: ${date}
        - **Preferred Cuisine**: ${cuisine}
        - **Number of Guests**: ${guests}
        - **Services Required**: ${services}
        - **Estimated Budget**: ${budget}

        I look forward to hearing from you and discussing the details further.

        Best regards,
        ${name}`;


            var whatsappURL = `https://wa.me/918115286606?text=${encodeURIComponent(whatsappMessage)}`;



            window.open(whatsappURL, '_blank');

            location.reload();
        }
    </script>
@endsection
