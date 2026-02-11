@extends('WebsiteMaster')
@section('title', 'Chef for Home Visit - Monthly Plan')
@section('content')

    <form id="FormHomevisit" action="javascript:void(0);" method="post" style="margin-top: 8%">
        <h2>Chef for Home Visit - Monthly Plan</h2>
        <p>Experience the luxury of having a professional chef for your parties with our exclusive monthly plans.</p>
        <p><strong>Multi-Cuisine Professionals | Customisable Menu | Starting from ₹6999/month</strong></p>

        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}"
            maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            title="Please enter a 10-digit phone number" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email Address"  required>

        <label for="date">Preferred Start Date:</label>
        <input type="date" id="date" name="date" required>

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

        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests" required>

        <label for="services">Additional Services (if any):</label>
        <textarea id="services" name="services"></textarea>

        <label for="budget">Estimated Monthly Budget (₹):</label>
        <input type="number" id="budget" name="budget" required>

        <button type="submit" class="btn hero-btn" onclick="HomesubmitForm()">Confirm Booking</button>
    </form>
    <style>
        /* Form Container */
        form {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

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

        /* Label and Input Fields */
        label {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
            display: block;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: #555;
        }

        input[type="date"] {
            padding: 8px;
        }

        textarea {
            height: 120px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            form {
                padding: 20px;
                width: 90%;
            }
        }
    </style>


    <script>
        function HomesubmitForm() {
            debugger

            var name = document.getElementById("name").value;

            var phone = document.getElementById("phone").value;

            var email = document.getElementById("email").value;

            var date = document.getElementById("date").value;

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
