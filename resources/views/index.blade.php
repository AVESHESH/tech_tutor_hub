
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('assets/img/fav.png')}}">

    <title>Tech Tutor Hub</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap-extend.css')}}">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="{{url('assets/css/master_style.css')}}">

	<!-- Lion_admin skins -->
	<link rel="stylesheet" href="{{url('assets/css/_all-skins.css')}}">	

</head>
<body class="hold-transition bg-img" style="background-image: url(../assets/img/cover.jpg)" data-overlay="4">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-lg-8 col-md-11 col-12">
				<div class="row align-items-center justify-content-md-center h-p100" data-overlay-light="9">
					<div class="col-lg-5 col-md-6 col-12">
						<div class="p-40 text-center content-bottom">
							<img src="{{url('assets/img/fav.png')}}" class="rounded-circle b-2 p-10 border-dark" alt="" />
							<div class="text-center">
							  <p class="mt-10 text-bold">Tech Tutor Hub</p>
							  <p class="gap-items-2 mb-0">
								  <a class="btn btn-social-icon btn-outline btn-circle btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-circle btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-circle btn-google" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-circle btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 col-12">
						<div class="p-20 content-bottom">
							<div class="content-top-agile">
								<h2>Get started with Us</h2>
								<p class="text-fade">Sign in to start your session</p>
							</div>
							<form action="{{url('login')}}" method="post">
								@csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Email" name="email">
										<div class="input-group-prepend">
											<span class="input-group-text bg-danger border-danger"><i class="ti-user"></i></span>
										</div>
										
									</div>
									@error('email')
										<p class="text-danger">{{$message}}</p>
											
										@enderror
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="password" class="form-control" placeholder="Password" name="password">
										<div class="input-group-prepend">
											<span class="input-group-text bg-danger border-danger"><i class="ti-lock"></i></span>
										</div>
									</div>
									@error('password')
										<p class="text-danger">{{$message}}</p>
											
										@enderror
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 {{-- <div class="fog-pwd text-right">
										<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
									  </div> --}}
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-danger btn-block margin-top-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>			

							
						</div>
					</div>
				</div>
				
				
			</div>
			
			
		</div>
	</div>
	

<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="{{url('assets/js/jquery.min.js')}}"></script>
	
	<!-- popper -->
	<script src="{{url('assets/js/popper.min.js')}}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>

</body>
</html>
