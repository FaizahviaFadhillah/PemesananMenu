<?php

include('config/config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Pastikan password cocok
    if ($password1 == $password2) {
        // Hash password sebelum menyimpan ke database (pastikan untuk menggunakan metode keamanan yang sesuai)
        $hashed_password = password_hash($password1, PASSWORD_DEFAULT);

        // Query untuk menyimpan data ke dalam tabel "user1"
        $sql = "INSERT INTO user1 (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
			alert('Data telah berhasil dikirim');
			window.location = 'login.php';
			</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>
			alert('Konfirmasi password tidak sesuai');
			window.location = 'register.php';
			</script>";
    }
}

// Tutup koneksi ke database
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
<title>Dreaming Cafe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SignUp</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action=" " method="POST">
					<input class="text" type="text" name="email" placeholder="Email" required autocomplete="off">
					<input class="text email" type="text" name="username" placeholder="username" required autocomplete="off">
					<input class="text" type="password" name="password1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required="">
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Have an Account? <a href="login.php"> SignIn Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023| Dreaming Cafe</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>