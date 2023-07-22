<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from davur.dexignzone.com/dashboard/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 19:09:22 GMT -->
<head>
    <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard">
	<meta name="description" content="Discover Davur - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Davur provides advanced features and an easy-to-use interface for creating a top-quality website with frontend">
	<meta property="og:title" content="Davur : Restaurant Admin Dashboard + FrontEnd">
	<meta property="og:description" content="Discover Davur - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Davur provides advanced features and an easy-to-use interface for creating a top-quality website with frontend">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>Register</title>
    

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-12">
                   
                        <div class="row">                            
                                <div class="card login-card">
									<div class="card-body">
										<div class="row align-items-center">
											<div class="col-xl-6">
												<div class="text-center my-5">
												</div>
												<div class="media-login">
													<img src="assets/images/svg/student.svg" class="w-100" alt="">
												</div>
											</div>
											<div class="col-xl-6">
												<div class="auth-form">
													<h3 class="text-start mb-4 font-w600">Register</h3>
													<form method="POST" action="{{ route('register') }}">
                                                        @csrf
														<div class="form-group">
															<label class="mb-1 text-black">Username<span class="required">*</span></label>
															<input class="form-control" placeholder="username" name="name" value="{{ old('name') }}" required>
														</div>
														<div class="form-group">
															<label class="mb-1 text-black">Email<span class="required">*</span></label>
															<input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required >
														</div>
														<div class="form-group">
															<label class="mb-1 text-black">Password<span class="required">*</span></label>
															<input type="password" placeholder="Password" class="form-control" name="password" required >
														</div>
														<div class="form-group">
															<label class="mb-1 text-black">Repeat Password<span class="required">*</span></label>
															<input id="password-confirm" placeholder="Re-enter Password" type="password" class="form-control"  name="password_confirmation" required  >
														</div>
			
														<div class="text-center">
															<button type="submit" class="btn btn-primary btn-block">Sign In</button>
														</div>
													</form>
													<div class="new-account mt-3 d-flex align-items-center justify-content-between flex-wrap">
														<small class="mb-0">Don't have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></small>
														<small><a href="{{ route('password.request') }}" >Forgot Password?</a></small>
													</div>
															
												</div>
											</div>
										</div>
									</div>
								</div>
                           
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="assests/vendor/global/global.min.js"></script>
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/js/custom.min.js"></script><script src="js/deznav-init.js"></script>

</body>

</html>


