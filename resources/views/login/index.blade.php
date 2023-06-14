<!DOCTYPE html>
<html>
<head>
	<title>Tokopedia | Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/img/icon tokopaedi.svg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
	<img class="wave" src="assets/img/image.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/undraw_shopping_bags_m7sb.svg">
		</div>
		<div class="login-content">
			<form action="/login" method="post">
				@csrf
				@if (session()->has('success'))
				  <div class="alert alert-primary alert-dismissible fade show" role="alert">
					{{ session('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				  </div>
				@endif
				@if (session()->has('LoginError'))
				  <div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('LoginError') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				  </div>
				@endif

				<img src="assets/img/icon tokopaedi.svg">
				<h2 class="title"> Login </h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="input-box"> 
					<input type="text" placeholder="Email" class="form-control @error('email')
					is-invalid
						@enderror" name="email" id="email" required autofocus>
						@error('email')
						<div class="invalid-feedback fs-6" 
						style="font-size: 10px;
						color: red;
						transform:translate(0%,320%);
						">
							{{ $message }}
						</div>
						@enderror
					</div>
           		</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="input-box"> 
				  <input type="password" placeholder="Password" class=" form-control @error('password')
				  	is-invalid
			  		@enderror"" name="password" id="password" required>
					  @error('password')
					  <div class="invalid-feedback" style="transform:translate(-20%,130%)">
						  {{ $message }}
					  </div>
					  @enderror
				  </div>
				 </div>
            	<a href="forgotpass" id="a">Forgot Password?</a>
				<button class="btn">Login</button>
            	<a href="/register" id="btn">Belum Punya Akun?</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
