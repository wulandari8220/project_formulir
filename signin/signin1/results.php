<?php

	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
	
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	
	if(empty($username)) {
		$name_error = ' * ';
	} elseif (strlen($username)<5){
		$name_error = ' **';
	}
	
	if(empty($password)) {
		$password_error = ' * ';
	}elseif (strlen($password)<5){
		$password_error = ' ** ';
	}
	
	if(empty($name_error) && empty($password_error)) {
		include('prog-login.php');
	}else {
		include('login.php');
	}
?>