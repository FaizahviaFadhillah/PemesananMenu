<?php
include('config/config.php');

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
		<h1>SignIn</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
            <form action=" " method="POST">
					<input class="text email" type="text" name="username" placeholder="username" required autocomplete="off">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input type="submit" value="SIGNIN" name="submit">
				</form>
				<?php
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				// Tangkap data dari formulir jika form disubmit
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$username = $_POST['username'];
					$password = $_POST['password'];
				
					// Query untuk mengambil data user dari tabel "user1" berdasarkan username
					$sql = "SELECT * FROM user1 WHERE username='$username'";
					$result = $conn->query($sql);
				
					if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						// Verifikasi password
						if (password_verify($password, $row['password'])) {
							header('location:home.php');
            				exit();
							// Redirect atau lakukan tindakan setelah login sukses
						} else {
							echo "<script>
							alert('Username atau Password salah!');
							window.location = 'login.php';
						</script>"; 
						}
					} else {
						echo "<script>
						alert('Username atau Password salah!');
						window.location = 'login.php';
					</script>"; 
					}
				}
				
				// Tutup koneksi ke database
				$conn->close();
				?>
				<p>Don't have an Account? <a href="register.php"> SIGNUP Now!</a></p>
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