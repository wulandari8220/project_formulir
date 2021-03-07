<?php

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

session_start();

if(isset($_SESSION['username'])){
		if(isset($_SESSION['password'])){
		header('Location: ../signin/signin1/true_login.php');
		exit;
		}
	}
	


include "../data/koneksi.php";

$name = $_POST['name'];
$user_name = $_POST['user'];
$password = $_POST['pass'];
$plc = $_POST['place'];

$date = $_POST['date'];
$mth = $_POST['month'];
$year = $_POST['years'];

$birth = $year."-".$mth."-".$date;

$gdr = $_POST['gender'];
$rgn = $_POST['religion'];
$address = $_POST['add'];
$prov = $_POST['prv'];
$tlp = $_POST['contact'];
$parent = $_POST['parent'];

$mysql = "INSERT INTO users (Nama,User_name,Password,Tempat_lahir,Tanggal_lahir,Jenis_kelamin,Agama,Alamat,Provinsi,No_hp,Nama_orangtua) VALUES ('$name','$user_name','$password','$plc','$birth','$gdr','$rgn','$address','$prov','$tlp','$parent')";

$result = mysqli_query($conn,$mysql);

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
?>

<!DOCTYPE HTML >

<html>
<head>
	<meta charset="utf-8">
	<title>Formulir</title>
	<link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
	<div class="main">
	<img src="../img/00ef085f770df8d6c0ca0ed2344c0729.jpg">
	<!-- https://id.pinterest.com/pin/1266706124128908/ -->
	
	<?php if($result): ?>
		
		<div class="daftar">
			<h3><?php echo "Anda Berhasil Mendaftar !!" ?></h3>
			<div class="select_back">
			<a class="icon2" href="../index.php">
			<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
			<img src="../img/PikPng.com_home-icon-png_1014572.png">
		</a>
		</div>
		</div>
	  <?php else : ?>
		<div class="daftar">
			<h3><?php echo "Gagal Mendaftar !!" ?></h3>
			<div class="select_back">
			<a class="icon2" href="../index.php">
			<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
			<img src="../img/PikPng.com_home-icon-png_1014572.png">
			</a>
		</div>
		</div>
	<?php endif ?>
	</div>
	
</body>
</html>
<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/-->
<?php mysqli_close($conn) ?>