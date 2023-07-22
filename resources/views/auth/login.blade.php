



<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from davur.dexignzone.com/dashboard/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 19:08:40 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>Login</title>
    <!-- Favicon icon -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-12">
					<div class="row align-items-center ">
						<div class="card login-card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6">
										<div class="text-center my-5">
											<a href="index.html"><img src="assests/images/logo-full.png" alt=""></a>
										</div>
										<div class="media-login">
											<img src="assets/images/svg/student.svg" class="w-100" alt="">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="auth-form">
											<h3 class="text-start mb-4 font-w600">Login</h3>
											<form  method="POST" action="{{ route('login') }}">
                                                @csrf
												<div class="form-group">
													<label class="mb-1 text-black">Email<span class="required">*</span></label>
													<input type="email"  placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required >
												</div>
												<div class="form-group">
													<label class="mb-1 text-black">Password<span class="required">*</span></label>
													<input type="password" placeholder="password" class="form-control"  name="password" required >
												</div>
												<div class="form-row d-flex justify-content-between mt-4 mb-2">
													<div class="form-group">
														<div class=" form-check ms-1">
															<input type="checkbox" class="form-check-input" id="basic_checkbox_2">
															<label class="custom-control-label ms-1" for="basic_checkbox_2"  name="remember" {{ old('remember') ? 'checked' : '' }} >
                                                                <label class="custom-control-label" for="customCheck" >Remember my preference</label>
														</div>
													</div>
												</div>
												<div class="text-center">
													<button type="submit" class="btn btn-primary btn-block">Sign In</button>
												</div>
											</form>
											<div class="new-account mt-3 d-flex align-items-center justify-content-between flex-wrap">
												<small class="mb-0">Don't have an account? <a class="text-primary"  href="{{route ('register')}}">Sign up</a></small>
												<small href="{{ route('password.request') }}">Forgot Password?</small>
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
    <script src="assets/vendor/global/global.min.js"></script>
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/deznav-init.js"></script>

</body>


</html>