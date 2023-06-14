<!DOCTYPE html>
<html>
<head>
	<title>Tokopedia | Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/img/icon tokopaedi.svg">
</head>
<body>
	<img class="wave" src="assets/img/image.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/undraw_shopping_bags_m7sb.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				
				@if (session()->has('success'))
				  <div class="alert alert-primary alert-dismissible fade show" role="alert">
					{{ session('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				  </div>
				@endif

				<img src="assets/img/icon tokopaedi.svg">
				<h2 class="title"> Please Login </h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="input-box"> 
					<input type="text" placeholder="Username" required>
					</div>
           		</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="input-box"> 
				  <input type="password" placeholder="Password" required>
				  </div>
				 </div>
            	<a href="forgotpass" id="a">Forgot Password?</a>
            	<a href="/home" class="btn">login</a>
            	<a href="/register" id="btn">Belum Punya Akun?</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
