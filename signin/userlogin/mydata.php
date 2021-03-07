<?php 

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
include "../../data/koneksi.php";

require_once('../../data/data.php');

session_start();

if(!isset($_SESSION['username'])){
		if(!isset($_SESSION['password'])){
		header('Location: ../signin1/login.php');
		exit;
		}
	}


$user = $_SESSION['username'];
$psw = $_SESSION['password'];

$sql_prog1 = mysqli_query($conn, "SELECT * FROM users WHERE User_name='$user' AND password='$psw' ");
if(mysqli_num_rows($sql_prog1)>0) {
            $row_akun = mysqli_fetch_array($sql_prog1);
			$_SESSION["akun_id"] = $row_akun["id"];
            $_SESSION["akun_name"] = $row_akun["Nama"];
            $_SESSION["akun_username"] = $row_akun["User_name"];
            $_SESSION["akun_password"] = $row_akun["Password"];
            $_SESSION["akun_born"] = $row_akun["Tempat_lahir"];
			$_SESSION["akun_born1"] = $row_akun["Tanggal_lahir"];
            $_SESSION["akun_gender"] = $row_akun["Jenis_kelamin"];
            $_SESSION["akun_agama"] = $row_akun["Agama"];
			$_SESSION["akun_place"] = $row_akun["Alamat"];
            $_SESSION["akun_provinsi"] = $row_akun["Provinsi"];
			$_SESSION["akun_hp"] = $row_akun["No_hp"];
			$_SESSION["akun_parent"] = $row_akun["Nama_orangtua"];
			
			$akun_born1 = explode("-",$_SESSION["akun_born1"]);
			$tanggal = $akun_born1[2];
			$bulan = $akun_born1[1];
			$tahun = $akun_born1[0];		
}

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
switch($bulan){
		case "01" :
			$bulan = "Januari";
			break;
		case "02" :
			$bulan = "Februari";
			break;
		case "03" :
			$bulan = "Maret";
			break;
		case "04" :
			$bulan = "April";
			break;
		case "05" :
			$bulan = "Mei";
			break;
		case "06" :
			$bulan = "Juni";
			break;
		case "07" :
			$bulan = "Juli";
			break;
		case "08" :
			$bulan = "Agustus";
			break;
		case "09" :
			$bulan = "September";
			break;
		case "10" :
			$bulan = "Oktober";
			break;
		case "11" :
			$bulan = "November";
			break;
		case "12" :
			$bulan = "Desember";
			break;
}

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
			<a class="icon" href="../signin1/true_login.php">
				<!--https://www.pinclipart.com/pindetail/iRwxwJm_free-png-download-back-arrow-icon-png-images/-->
				<img src="../../img/PinClipart.com_welcome-back-clip-art_3434813.png">
			</a>
			<a class="icon1" href="../../index.php">
				<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
				<img src="../../img/PikPng.com_home-icon-png_1014572.png">
			</a>
			</div>
			<h1>SELAMAT DATANG DI PERPUSTAKAAN ONLINE</h1>
			<div class="mydata">
			<table>
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_name"] ?></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_username"] ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_password"] ?></td>
			</tr>
			<tr>
				<td>Tempat / Tanggal Lahir</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_born"]?> / <?php echo $tanggal.' '.$bulan.' '.$tahun?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_gender"]?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_agama"]?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_place"]?></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_provinsi"]?></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_hp"]?></td>
			</tr>
			<tr>
				<td>Nama Orangtua</td>
				<td> : </td>
				<td><?php echo $_SESSION["akun_parent"]?></td>
			</tr>
			</table>
			
			<a class="href_update" href="update.php">Edit</a>
			<a href="delete.php">Hapus akun</a>
			
			</div>
		</div>
	</div>
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
</body>
</html>