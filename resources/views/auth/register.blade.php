<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
    /* ===== BACKGROUND SAME AS LOGIN ===== */
    body {
        height: 100vh;
        background: linear-gradient(120deg, #6a11cb, #2575fc, #ffbc00);
        background-size: 300% 300%;
        animation: bgMove 10s infinite alternate;
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }

    @keyframes bgMove {
        0% {
            background-position: left;
        }

        100% {
            background-position: right;
        }
    }

    /* floating shapes */
    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        animation: float 6s infinite ease-in-out;
    }

    .c1 {
        width: 200px;
        height: 200px;
        top: 10%;
        left: 10%;
    }

    .c2 {
        width: 150px;
        height: 150px;
        bottom: 10%;
        right: 10%;
        animation-delay: 2s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    /* card */
    .login-box {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* left image */
    .left-img {
        background:url('{{ asset('assets/image/login-img.png') }}') center/cover no-repeat;
        min-height: 520px;
        /* animation:zoomImg 6s infinite alternate; */
    }

    @keyframes zoomImg {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(1.05);
        }
    }

    /* form */
    .login-form {
        padding: 40px;
        color: #fff;
    }

    /* logo */
    .logo img {
        width: 140px;
        filter: brightness(0) invert(1);
        margin-bottom: 15px;
    }

    /* inputs */
    .form-control {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: #fff;
        border-radius: 12px;
        padding: 12px 40px 12px 15px;
    }

    .form-control::placeholder {
        color: #eee;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
        color: #fff;
    }

    .eye-btn {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #fff;
    }

    /* button */
    .login-btn {
        background: linear-gradient(45deg, #ffbc00, #ffbc00);
        border: none;
        border-radius: 50px;
        padding: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        transition: .3s;
    }

    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    @media(max-width:768px) {
        .left-img {
            display: none;
        }
    }

    .form-control {
        background: #fff;
        /* white background */
        border: none;
        color: #000;
        /* black text */
        border-radius: 12px;
        padding: 12px 40px 12px 15px;
    }

    .form-control::placeholder {
        color: #666;
        /* placeholder gray */
    }

    .form-control:focus {
        background: #fff;
        color: #000;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    }

    .eye-btn {
        color: #000;
    }
    </style>
</head>

<body>

    <div class="circle c1"></div>
    <div class="circle c2"></div>

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row login-box col-lg-9">

            <!-- left image -->
            <div class="col-md-6 left-img"></div>

            <!-- form -->
            <div class="col-md-6 login-form">

                <div class="logo text-center">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/rasoiwala_2.png') }}"></a>
                </div>

                <h5 class="text-center mb-4">Create Account</h5>

                <form method="post" action="{{route('register.user')}}">
                    @csrf

                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full Name"
                            value="{{ old('name') }}">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile"
                            value="{{ old('mobile') }}">
                        @error('mobile')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3 position-relative">
                        <input type="password" name="password" id="p1" class="form-control" placeholder="Password">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3 position-relative">
                        <input type="password" name="confirm-password" id="p2" class="form-control"
                            placeholder="Confirm Password">
                    </div>


                    <div class="d-grid mt-3">
                        <button class="btn login-btn text-white">REGISTER</button>
                    </div>

                </form>

                <div class="text-center mt-3">
                    <small>Already have account?
                        <a href="/login" class="text-white">Login</a>
                    </small>
                </div>

            </div>

        </div>
    </div>

    <script>
    function t1() {
        let x = document.getElementById("p1");
        x.type = x.type === "password" ? "text" : "password";
    }

    function t2() {
        let x = document.getElementById("p2");
        x.type = x.type === "password" ? "text" : "password";
    }
    </script>

</body>

</html>