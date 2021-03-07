<?php
	include "../data/koneksi.php";
	
	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
	
	$plus_name = filter_input(INPUT_POST, 'name');
	$plus_user = filter_input(INPUT_POST, 'user');
	$plus_pass = filter_input(INPUT_POST, 'pass');
	$plus_place = filter_input(INPUT_POST, 'place');
	$plus_date = filter_input(INPUT_POST, 'date');
	$plus_month = filter_input(INPUT_POST, 'month');
	$plus_years = filter_input(INPUT_POST, 'years');
	$plus_gender = filter_input(INPUT_POST, 'gender');
	$plus_religion = filter_input(INPUT_POST, 'religion');
	$plus_add = filter_input(INPUT_POST, 'add');
	$plus_prv = filter_input(INPUT_POST, 'prv');
	$plus_contact = filter_input(INPUT_POST, 'contact');
	$plus_parent = filter_input(INPUT_POST, 'parent');
	
	/* Nama */
	if(empty($plus_name)) {
		$name_error = ' * ';
	} elseif (strlen($plus_name)<5){
		$name_error = ' ** ';
	}
	
	/* User name */
	$user_double = mysqli_query($conn,"SELECT User_name FROM users");
	
	if(empty($plus_user == $user_double) ) {
		$user_error = '*** username sudah digunakan';
	}
	
	if(empty($plus_user)) {
		$user_error = ' * ';
	}elseif (strlen($plus_user)<5){
		$user_error = ' ** ';
	}

	/* Password */
	if(empty($plus_pass)) {
		$pass_error = ' * ';
	} elseif (strlen($plus_pass)<5){
		$pass_error = ' ** ';
	}
	
	/* Tempat Lahir */
	if(empty($plus_place)) {
		$place_error = ' * ';
	}
	
	/* Tanggal Lahir */
	if(empty($plus_date)) {
		$date_error = ' * ';
	}
	
	/* Bulan Lahir */
	if(empty($plus_month)) {
		$month_error = ' * ';
	}
	
	/* Tahun Lahir */
	if(empty($plus_years)) {
		$years_error = ' * ';
	}
	
	/* Jenis Kelamin */
	if(empty($plus_gender)) {
		$gender_error = ' * ';
	}
	
	/* Agama*/
	if(empty($plus_religion)) {
		$religion_error = ' * ';
	}
	
	/* Alamat */
	if(empty($plus_add)) {
		$add_error = ' * ';
	} elseif (strlen($plus_add)<5){
		$add_error = ' ** ';
	}
	
	/* Provinsi*/
	if(empty($plus_prv)) {
		$prv_error = ' * ';
	}
	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
	/* No. Hp */
	if(empty($plus_contact)) {
		$contact_error = ' * ';
	} elseif (strlen($plus_contact)<7){
		$contact_error = ' ** ';
	}
	
	/* Nama Orangtua */
	if(empty($plus_parent)) {
		$parent_error = ' * ';
	}
	
	if(empty($name_error) && empty($user_error) && empty($pass_error) && empty($place_error) && empty($date_error) && empty($month_error) 
	&& empty($years_error) && empty($gender_error) && empty($religion_error) && empty($add_error) && empty($prv_error) && empty($contact_error)&& empty($parent_error) ) {
		include('daftar.php');
	}else {
		include('formulir.php');
	}
	
	/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
?>