<?php

	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
	
	session_start();
	
	if(!isset($username)) {
		$username = '';
	}
	
	if(isset($_SESSION['username'])){
		if(isset($_SESSION['password'])){
		header('Location: true_login.php');
		exit;
		}
	}
	
	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
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
			<form action="results.php" method="post">
				<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>">
						<?php if(isset($name_error)) : ?>
							<span><?php echo $name_error ?></span>
						<?php endif ?>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password">
						<?php if(isset($password_error)) : ?>
							<span><?php echo $password_error ?></span>
						<?php endif ?>
					</td>
				</tr>
				</table>
				<?php if(isset($name_error) || isset($password_error)): ?>
					<p class="error"><?php echo '*  Harus diisi '?></p>
					<p class="error"><?php echo '** Minimum 5 karakter' ?></p>
				<?php endif ?>
				<input type="submit" value="Masuk">
			</form>
		<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
		</div>
	</div>
</body>
</html>