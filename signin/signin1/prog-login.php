<?php
	session_start();

	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

	include "../../data/koneksi.php";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql_prog = mysqli_query($conn, "SELECT * FROM users WHERE User_name='$username' AND password='$password' ");
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulir</title>
	<link rel="stylesheet" href="../../stylesheet.css">
</head>
<body>
	<div class="main">
	<img src="../../img/00ef085f770df8d6c0ca0ed2344c0729.jpg">
	<!-- https://id.pinterest.com/pin/1266706124128908/ -->
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
		<div class="menu">
			<div class="select_back">
				<a class="icon" href="../../index.php">
					<!--https://www.pinclipart.com/pindetail/iRwxwJm_free-png-download-back-arrow-icon-png-images/-->
					<img src="../../img/PinClipart.com_welcome-back-clip-art_3434813.png">
				</a>
				<a class="icon1" href="../../index.php">
					<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
					<img src="../../img/PikPng.com_home-icon-png_1014572.png">
				</a>
			</div>
			<h1>SELAMAT DATANG DI PERPUSTAKAAN ONLINE</h1>
			<?php if(!empty($username) && !empty($password)): ?>
		
			<?php 
			
			$result = mysqli_num_rows($sql_prog);
			?>
				<?php if($result): ?>
				<?php 
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header("Location: true_login.php");
					exit;
				?>

				<?php else : ?>
					<p><?php echo "username dan password anda salah" ?></p>
				<?php endif ?>
			<?php endif?>
		</div>
	</div>
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
</body>
</html>