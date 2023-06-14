<!DOCTYPE html>
<html>
<head>
	<title>TOKOPEDIA | Register</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.forgot.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/fontawesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
	<img class="wave " src="assets/img/blob-scene-haikei.png">
	<div class="container" style="width: fit-content">
		<div class="login-content px-5 m-auto">
			<form action="/register" method="post">
				@csrf
				<img src="assets/img/icon tokopaedi.svg">
				<h2 class="title">Registration form</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" id="name" required value="{{ old('name') }}">
						@error('name')
						<div class="invalid-feedback" style="transform:translate(-20%,130%)">
							{{ $message }}
						</div>
						@enderror
           		   </div>
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
						@error('username')
						<div class="invalid-feedback" style="transform:translate(-20%,130%)">
							{{ $message }}
						</div>
						@enderror
                    </div>
                    <div class="i">
                        <i class="bi bi-envelope-at"></i>
                    </div>
                    <div class="div">
                        <input type="email" class="input form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" id="email" required value="{{ old('email') }}">
						@error('email')
						<div class="invalid-feedback" style="transform:translate(-20%,130%)">
							{{ $message }}
						</div>
						@enderror
					</div>
                      <div class="i">
						<i class="fas fa-lock"></i>
						</div>
                   	<div class="div">
           		   		<input type="password" class="input form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" id="password" required>
							  @error('password')
							  <div class="invalid-feedback" style="transform:translate(-20%,130%)">
								  {{ $message }}
							  </div>
							  @enderror
           		   </div>
           		</div>
					<button class="btn"> Register </button>
				<div class="text-center fs-6"> 
					<a href="/signup">Sing up</a> or <a href="/login">Sign in</a> 
				</div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
