
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
	<title>Regis Form</title>
	<link rel="stylesheet" href="regis.css">
</head>
<body>
	<div class="banner">
		<video autoplay muted loop>
			<source src="background.mp4" type="video/mp4">
		</video>
		<div class="box">
		<form autocomplete="off" method="POST" action="cek_regis.php">
			<h2>Sign up</h2>
			<div class="inputBox">
				<input type="text" required="required" name="username">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" required="required" name="email">
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password ?</a>
				<a href="login.php">Sign in</a>
			</div>
			<input type="submit" value="Buat Akun">
		</form>
	</div>
	</div>
</body>
</html>
