<?php
/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header('Location: signin1/login.php');
exit;

?>