<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="shortcut icon" href="Logo 2.png" type="image/x-icon" />
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="script.js" defer></script>
	<title>Login Form</title>
</head>

<body>

	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2 class="h_account">Have an account?</h2>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
		</div>

		<div class="register-info-box">
			<h2 class="h_account">Don't have an account?</h2>
			<p class="black_text">Sign Up for free !</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>

		<form action="toCheckPath.php" method="POST">
			<div class="white-panel">
				<div class="login-show">
					<h2 class="form_head">Sign in</h2>

					<input type="text" name="Username" placeholder="Username" id="username" required>

					<input type="password" name="Password" placeholder="Password" id="userpassword" required>
					<ion-icon name="eye-off-outline" id="icon"></ion-icon>


					<input class="loginbtn" type="submit" name="submit" value="Login" id="submit">

					<a href="ForgetPassword.php">Forgot password?</a>
					<span class="checkbox"><input type="checkbox" name="remember-me" id="rememberme" onchange="remember()" />
						Remember Me</span>
					<div class="login-div">
						<span class="login-links"><a href="google.php" class="login-photo"><img class="googleimg" src="Google Logo.png" alt="" srcset=""></a></span>
						<span class="login-links"><a href="https://www.facebook.com/" class="login-photo"><img class="fbimg" src="Facebook Logo.png" alt="" /></a></span>
						<span class="login-links"><a href="https://twitter.com/i/flow/login" class="login-photo"><img class="twitimg" src="Twitter Logo.png" alt="" /></a></span>
					</div>
				</div>
		</form>
		<form action="newCustomers.php" method="POST">
			<div class="register-show">
				<h2 class="form_head">Sign Up</h2>
				<input type="text" name="name" placeholder="Name" required>
				<input type="text" name="email" placeholder="Email" required>
				<input type="text" name="phnumber" placeholder="Phone Number" pattern="[0-9]+" required>
				<input type="text" name="address" placeholder="Address"	>
				<input type="password" name="password" placeholder="Password" id="newaccpassword" required>
				<ion-icon name="eye-off-outline" id="icon2"></ion-icon>
				<input type="submit" name="submit" value="Register">
			</div>
		</form>

	</div>
	</div>
</body>

</html>