<?php
/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

session_start();

if(!isset($_SESSION['username'])){
		if(!isset($_SESSION['password'])){
		header('Location: ../signin1/login.php');
		exit;
		}
	}

include '../../data/koneksi.php';

$id = $_SESSION["akun_id"];
$up_name = $_POST['name'];
$up_user_name = $_POST['user'];
$up_password = $_POST['pass'];
$up_plc = $_POST['place'];

$up_date = $_POST['date'];
$up_mth = $_POST['month'];
$up_year = $_POST['years'];

$up_birth = $up_year."-".$up_mth."-".$up_date;

$up_gdr = $_POST['gender'];
$up_rgn = $_POST['religion'];
$up_address = $_POST['add'];
$up_prov = $_POST['prv'];
$up_tlp = $_POST['contact'];
$up_parent = $_POST['parent'];

$queryUpdate ="UPDATE users SET Nama='$up_name',User_name='$up_user_name',Password='$up_password',Tempat_lahir='$up_plc',Tanggal_lahir='$up_birth',
				Jenis_kelamin='$up_gdr',Agama='$up_rgn',Alamat='$up_address',Provinsi='$up_prov',No_hp='$up_tlp',Nama_orangtua='$up_parent' WHERE id='$id' ";

mysqli_query($conn,$queryUpdate);

header("Location: mydata.php");
exit;

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
?>