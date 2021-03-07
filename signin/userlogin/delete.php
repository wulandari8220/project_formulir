<?php
/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

include '../../data/koneksi.php';

session_start();

if(!isset($_SESSION['username'])){
		if(!isset($_SESSION['password'])){
		header('Location: ../signin1/login.php');
		exit;
		}
	}

$delete_user = $_SESSION["akun_username"];
$delete_pass = $_SESSION["akun_password"];

$delete_akun = "DELETE from users where User_name = '$delete_user' AND Password = '$delete_pass' ";

mysqli_query($conn, $delete_akun);

$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../../index.php");
exit;
?>