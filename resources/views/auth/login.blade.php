<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>

body{
    height:100vh;
    background: linear-gradient(120deg, #6a11cb, #2575fc, #ffbc00);
    background-size:300% 300%;
    animation:bgMove 10s infinite alternate;
    font-family: 'Poppins', sans-serif;
    overflow:hidden;
}

@keyframes bgMove{
    0%{background-position:left;}
    100%{background-position:right;}
}

/* floating circles */
.circle{
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.15);
    animation: float 6s infinite ease-in-out;
}
.circle1{width:200px;height:200px;top:10%;left:10%;}
.circle2{width:150px;height:150px;bottom:10%;right:10%;animation-delay:2s;}

@keyframes float{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-30px);}
}

/* card */
.login-box{
    background:rgba(255,255,255,0.12);
    backdrop-filter: blur(20px);
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 20px 50px rgba(0,0,0,0.3);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0;transform:translateY(40px);}
    to{opacity:1;transform:translateY(0);}
}

.left-img{
    background: url("/assets/image/login-img.png") no-repeat center/cover;
    min-height:500px;
}



.login-form{
    padding:40px;
    color:#fff;
}

.logo{
    font-size:26px;
    font-weight:700;
    margin-bottom:25px;
}

/* inputs */
.form-control{
    background:rgba(255,255,255,0.2);
    border:none;
    color:#fff;
    border-radius:12px;
    padding:12px 40px 12px 15px;
}
.form-control::placeholder{color:#eee;}
.form-control:focus{
    background:rgba(255,255,255,0.25);
    box-shadow:none;
    color:#fff;
}

.eye-btn {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #000000;
}

/* button */
.login-btn{
    background: linear-gradient(45deg, #ffbc00, #ffbc00);
    border:none;
    border-radius:50px;
    padding:12px;
    font-weight:600;
    letter-spacing:1px;
    transition:.3s;
}
.login-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

@media(max-width:768px){
    .left-img{display:none;}
}
.logo{
    text-align:center;
    margin-bottom:20px;
}

.logo img{
    width:140px;          /* size chota */
    height:auto;
    filter: brightness(0) invert(1);   /* logo white ho jayega */
}
.form-control{
    background:#fff;      /* white background */
    border:none;
    color:#000;           /* black text */
    border-radius:12px;
    padding:12px 40px 12px 15px;
}

.form-control::placeholder{
    color:#666;           /* placeholder gray */
}

.form-control:focus{
    background:#fff;
    color:#000;
    box-shadow:0 0 10px rgba(0,0,0,0.15);
}

</style>
</head>
<body>

<div class="circle circle1"></div>
<div class="circle circle2"></div>

<div class="container d-flex align-items-center justify-content-center vh-100">
<div class="row login-box col-lg-9">

    <!-- Image side -->
    <div class="col-md-6 left-img"></div>

    <!-- Form side -->
    <div class="col-md-6 login-form">
       <div class="logo text-center">
               <a href="{{ route('index') }}"><img src="{{ asset('assets/img/rasoiwala_2.png') }}"></a> 
</div>

 <h5 class="text-center mb-4">Login</h5>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

      <form method="post" action="{{ route('login') }}">
    @csrf

    {{-- Mobile --}}
    <div class="mb-3 position-relative">
        <input type="text" 
               name="mobile" 
               value="{{ old('mobile') }}"
               class="form-control @error('mobile') is-invalid @enderror" 
               placeholder="Enter mobile number">

        @error('mobile')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    {{-- Password --}}
    <div class="mb-3 position-relative">
        <input type="password" 
               name="password" 
               id="password"
               class="form-control @error('password') is-invalid @enderror" 
               placeholder="Password">

        <i class="fa fa-eye eye-btn" onclick="togglePass()"></i>

        @error('password')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid mt-4">
        <button class="btn login-btn text-white">LOGIN</button>
    </div>

    {{-- Login Failed Error --}}
    @if(session('error'))
        <div class="text-danger text-center mt-3">
            {{ session('error') }}
        </div>
    @endif
</form>


        <div class="mt-3 text-center">
            <small>Don't have account? <a href="/register" class="text-white">Sign up</a></small>
        </div>

    </div>

</div>
</div>

<script>
function togglePass(){
    let pass = document.getElementById("password");
    if(pass.type === "password"){
        pass.type = "text";
    }else{
        pass.type = "password";
    }
}
</script>

</body>
</html>
