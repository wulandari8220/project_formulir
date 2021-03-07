<?php 

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

session_start();

if(!isset($_SESSION['username'])){
		if(!isset($_SESSION['password'])){
		header('Location: ../signin1/login.php');
		exit;
		}
	}


require_once('../../data/data.php');

$akun_born1 = explode("-",$_SESSION["akun_born1"]);
			$tanggal = $akun_born1[2];
			$bulan = $akun_born1[1];
			$tahun = $akun_born1[0];	
			
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
				<a class="icon" href="mydata.php">
					<!--https://www.pinclipart.com/pindetail/iRwxwJm_free-png-download-back-arrow-icon-png-images/-->
					<img src="../../img/PinClipart.com_welcome-back-clip-art_3434813.png">
				</a>
				<a class="icon1" href="../../index.php">
					<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
					<img src="../../img/PikPng.com_home-icon-png_1014572.png">
				</a>
			</div>
			<h1>SELAMAT DATANG DI PERPUSTAKAAN ONLINE</h1>
			<form action="results_update.php" method="POST">
			<table class="table">
			<!--Nama-->
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td>
					<input type="text" name="name" value="<?php echo $_SESSION["akun_name"] ?>">
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
					<input type="text" name="user" value="<?php echo $_SESSION["akun_username"] ?>">
					<?php if(isset($user_error)) : ?>
						<span><?php echo $user_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
			<!--Password-->
			<tr>
				<td>Password</td>
				<td> : </td>
				<td>
					<input type="password" name="pass" value="<?php echo $_SESSION["akun_password"] ?>">
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
					<input type="text" name="place" value="<?php echo $_SESSION["akun_born"]?>">
						<?php if(isset($place_error)) : ?>
						<span><?php echo $place_error ?></span>
						<?php endif ?>
					/ 
					<select name="date">
						<option value="">DD</option>
						<?php for($i=1; $i<32; $i++): ?>
						<?php if($tanggal == $i) : ?>
							<option value="<?php echo $tanggal?>" selected><?php echo $tanggal?></option>
						<?php else: ?>
							<option value="<?php 
									echo $i ?>">
								<?php 
									if($i<10) {
									echo '0'.$i;
								}else {
									echo $i;
								}
								?>
							</option>
						<?php endif ?>
						<?php endfor ?>
					</select>
					<?php if(isset($date_error)) : ?>
						<span><?php echo $date_error ?></span>
					<?php endif ?>
					
					<select name="month">
						<?php foreach ($months as $month):?>
							<?php if($bulan==$month->getAlph_month()): ?>
								<option value="<?php echo $month->getNum_month() ?>" selected>
								<?php echo $bulan ?>
								</option>
							<?php else: ?>
								<option value="<?php echo $month->getNum_month() ?>">
								<?php echo $month->getAlph_month()?>
								</option>
							<?php endif ?>
						<?php endforeach ?>
					</select>
					<?php if(isset($month_error)) : ?>
						<span><?php echo $month_error ?></span>
					<?php endif ?>
					
					<select name="years">
						<option value="">YYYY</option>
						<?php for($i=1950; $i<2013; $i++): ?>
							<?php if($tahun==$i): ?>
							<option value="<?php echo $tahun ?>" selected><?php echo $tahun ?></option>
							<?php else: ?>
							<option value="<?php echo $i ?>"><?php echo $i ?></option>
							<?php endif?>
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
						<?php if($_SESSION["akun_gender"]==$gender): ?>
							<option value="<?php echo $_SESSION["akun_gender"]?>" selected ><?php echo $_SESSION["akun_gender"] ?></option>
						<?php else: ?>
						<option value="<?php echo $gender?>">
							<?php echo $gender ?>
						</option>
						<?php endif ?>
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
						<?php if($_SESSION["akun_agama"]==$religion): ?>
							<option value="<?php echo $_SESSION["akun_agama"]?>" selected ><?php echo $_SESSION["akun_agama"] ?></option>
						<?php else: ?>
							<option value="<?php echo $religion?>">
								<?php echo $religion ?>
							</option>
						<?php endif ?>
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
				<td><textarea type="text" name="add"><?php echo $_SESSION["akun_place"]?></textarea>
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
							<?php if($_SESSION["akun_provinsi"]== $place): ?>
								<option value="<?php echo $_SESSION["akun_provinsi"]?>" selected><?php echo $_SESSION["akun_provinsi"] ?></option>
							<?php else: ?>
							<option value="<?php echo $place?>">
								<?php echo $place?>
							</option>
							<?php endif ?>
						<?php endforeach ?>
					</select>
				
					<?php if(isset($prv_error)) : ?>
						<span><?php echo $prv_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			
			<!--No. Hp-->
			<tr>
				<td>No. Handphone</td>
				<td> : </td>
				<td><input type="text" name="contact" value="<?php echo $_SESSION["akun_hp"]?>">
					<?php if(isset($contact_error)) : ?>
						<span><?php echo $contact_error ?></span>
					<?php endif ?>
				</td>
			</tr>
			<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
			<!--Nama Orangtua-->
			<tr>
				<td>Nama Orangtua</td>
				<td> : </td>
				<td><input type="text" name="parent" value="<?php echo $_SESSION["akun_parent"]?>">
					<?php if(isset($parent_error)) : ?>
						<span><?php echo $parent_error ?></span>
					<?php endif ?>
				</td>
			</tr>
		</table>
		
		<?php if(isset($name_error) || isset($user_error) || isset($pass_error) || isset($place_error) || isset($date_error) || isset($month_error) 
		|| isset($years_error) || isset($gender_error) || isset($religion_error) || isset($add_error) || isset($prv_error) || isset($contact_error)|| isset($parent_error) ): ?>
			<p class="error"><?php echo '*  Harus diisi '?></p>
			<p class="error"><?php echo '** Minimum 5 karakter' ?></p>
		<?php endif ?>
		
		<input type="submit" value="Simpan Perubahan">
		</form>
		</div>
	</div>
	
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
</body>
</html>