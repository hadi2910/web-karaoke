<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == "register") {
        $mregister = "Berhasil Membuat Akun. Silahkan Login";
    } else if ($_GET['message'] == "failed") {
        $mgagal = "Login Gagal. Username atau Password Salah";
    } else if ($_GET['message'] == "logout") {
        $mlogout = "Anda telah berhasil logout";
    } else if ($_GET['message'] = "belum_login") {
        $mbelumlogin = "Silahkan login terlebih dahulu";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Login Form</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="banner">
		<video autoplay muted loop>
			<source src="background.mp4" type="video/mp4">
		</video>
		<div class="box">
		<form autocomplete="off"  method="POST" action="sessions.php">
			<h2>Sign in</h2>
			<p class="text-light text-center">
            <?php
            if (isset($_GET['message'])) {
                if ($_GET['message'] == "register") {
                    echo ($mregister);
                } else if ($_GET['message'] == "failed") {
                    echo ($mgagal);
                } else if ($_GET['message'] == "logout") {
                    echo ($mlogout);
                } else if ($_GET['message'] = "belum_login") {
                    echo ($mbelumlogin);
                }else if($_GET['message'] == "belum_login")
                {
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>
        </p>
			<div class="inputBox">
				<input type="text" required="required" name="username">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password ?</a>
				<a href="regis.php">Signup</a>
			</div>
			<input type="submit" value="Login">
			<div class="links">
				<a href="home.php">Back to home?</a>
			</div>
		</form>
	</div>
	</div>
</body>
</html>