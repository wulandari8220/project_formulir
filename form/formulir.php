
<?php 
/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
session_start();

if(isset($_SESSION['username'])){
		if(isset($_SESSION['password'])){
		header('Location: ../signin/signin1/true_login.php');
		exit;
		}
	}

require_once('../data/data.php');

if(!isset($plus_name)) {
		$plus_name = '';
	}

if(!isset($plus_user)) {
		$plus_user = '';
	}
	
if(!isset($plus_place)) {
		$plus_place = '';
	}	
	
if(!isset($plus_contact)) {
		$plus_contact = '';
	}
	
if(!isset($plus_parent)) {
		$plus_parent = '';
	}
	
/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulir</title>
	<link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
	<div class="main">
	<img src="../img/00ef085f770df8d6c0ca0ed2344c0729.jpg">
	<!-- https://id.pinterest.com/pin/1266706124128908/ -->
	<form method="POST" action="result-form.php">
		<div class="formulir">
		<div class="form_title">
			<div class="select_back">
				<a class="icon" href="../index.php">
					<!--https://www.pinclipart.com/pindetail/iRwxwJm_free-png-download-back-arrow-icon-png-images/-->
					<img src="../img/PinClipart.com_welcome-back-clip-art_3434813.png">
				</a>
				<a class="icon1" href="../index.php">
					<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
					<img src="../img/PikPng.com_home-icon-png_1014572.png">
				</a>
			</div>
			<h2>FORMULIR PENDAFTARAN ANGGOTA PERPUSTAKAAN ONLINE</h2>
		</div>
		<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
		<div class="table_form">
		<table class="table">
			<!--Nama-->
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td>
					<input type="text" name="name" value="<?php echo htmlspecialchars($plus_name) ?>">
					<?php if(isset($name_error)) : ?>
						<span><?php echo $name_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--User Name-->
			<tr>
				<td>User Name </td>
				<td> : </td>
				<td>
					<input type="text" name="user" value="<?php echo htmlspecialchars($plus_user) ?>">
					<?php if(isset($user_error)) : ?>
						<span><?php echo $user_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--Password-->
			<tr>
				<td>Password</td>
				<td> : </td>
				<td>
					<input type="password" name="pass">
					<?php if(isset($pass_error)) : ?>
						<span><?php echo $pass_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--Tempat/Tanggal Lahir-->
			<tr>
				<td>Tempat / Tanggal Lahir</td>
				<td> : </td>
				<td>
					<input type="text" name="place" value="<?php echo htmlspecialchars($plus_place) ?>">
						<?php if(isset($place_error)) : ?>
						<span><?php echo $place_error ?></span>
						<?php endif ?>
					/ 
					<select name="date">
						<option value="">DD</option>
						<?php for($i=1; $i<32; $i++): ?>
						<option value="<?php 
							if($i<10) {
								echo '0'.$i;
							}else {
								echo $i;
							}
							?>">
							<?php 
								if($i<10) {
								echo '0'.$i;
							}else {
								echo $i;
							}
							?>
						</option>
						<?php endfor ?>
					</select>
					<?php if(isset($date_error)) : ?>
						<span><?php echo $date_error ?></span>
					<?php endif ?>
					
					<select name="month">
						<?php foreach ($months as $month):?>
							<option value="<?php echo $month->getNum_month() ?>">
							<?php echo $month->getAlph_month()?>
							</option>
						<?php endforeach ?>
					</select>
					<?php if(isset($month_error)) : ?>
						<span><?php echo $month_error ?></span>
					<?php endif ?>
					
					<select name="years">
						<option value="">YYYY</option>
						<?php for($i=1950; $i<2013; $i++): ?>
							<option value="<?php echo $i ?>"><?php echo $i ?></option>
						<?php endfor ?>
					</select>
					<?php if(isset($years_error)) : ?>
						<span><?php echo $years_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
			<!--Jenis Kelamin-->
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<select name="gender">
					<option value="">--Pilih--</option>
					<?php foreach ($genders as $gender):?>
					<option value="<?php echo $gender?>">
						<?php echo $gender ?>
					</option>
					<?php endforeach ?>
					</select>
					
					<?php if(isset($gender_error)) : ?>
						<span><?php echo $gender_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--Agama-->
			<tr>
				<td>Agama</td>
				<td> : </td>
				<td>
					<select name="religion">
					<option value="">--Pilih--</option>
					<?php foreach ($religions as $religion):?>
					<option value="<?php echo $religion?>">
						<?php echo $religion ?>
					</option>
					<?php endforeach ?>
					</select>
				
					<?php if(isset($religion_error)) : ?>
						<span><?php echo $religion_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--Alamat-->
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea type="text" name="add"></textarea>
				<?php if(isset($add_error)) : ?>
					<span><?php echo $add_error ?></span>
				<?php endif ?>
				</td>
			</tr>

			<!--Provinsi-->
			<tr>
				<td></td>
				<td></td>
				<td>Provinsi : 
					<select name="prv">
						<option value="">--Pilih--</option>
						<?php foreach ($places as $place):?>
						<option value="<?php echo $place?>">
							<?php echo $place?>
						</option>
						<?php endforeach ?>
					</select>
				
					<?php if(isset($prv_error)) : ?>
						<span><?php echo $prv_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
			<!--No. Hp-->
			<tr>
				<td>No. Handphone</td>
				<td> : </td>
				<td><input type="text" name="contact" value="<?php echo htmlspecialchars($plus_contact) ?>">
					<?php if(isset($contact_error)) : ?>
						<span><?php echo $contact_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--Nama Orangtua-->
			<tr>
				<td>Nama Orangtua</td>
				<td> : </td>
				<td><input type="text" name="parent" value="<?php echo htmlspecialchars($plus_parent) ?>">
					<?php if(isset($parent_error)) : ?>
						<span><?php echo $parent_error ?></span>
					<?php endif ?>
				</td>
			</tr>
		</table>
		
		<div class="error">
		<?php if(isset($name_error) || isset($user_error) || isset($pass_error) || isset($place_error) || isset($date_error) || isset($month_error) 
		|| isset($years_error) || isset($gender_error) || isset($religion_error) || isset($add_error) || isset($prv_error) || isset($contact_error)|| isset($parent_error) ): ?>
			<p class="error1"><?php echo '*  Harus diisi '?></p>
			<p class="error2"><?php echo '** Minimum 5 karakter' ?></p>
		<?php endif ?>
		<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
		</div>
		
		</div>
		
		<div class="submit">
			<h2><input type="submit" value="Daftar"></h2>
		</div>
		
		</div>
	</form>
	</div>
</body>
</html>