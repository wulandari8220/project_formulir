<?php 
include "../data/koneksi.php";

session_start();

if(!isset($_SESSION['username'])){
		if(!isset($_SESSION['password'])){
		header('Location: signin1/login.php');
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
	<link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
	<div class="main">
	<img src="../img/00ef085f770df8d6c0ca0ed2344c0729.jpg">
	<!-- https://id.pinterest.com/pin/1266706124128908/ -->
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
		<div class="menu">
			<div class="select_back">
				<a class="icon" href="signin1/true_login.php">
					<!--https://www.pinclipart.com/pindetail/iRwxwJm_free-png-download-back-arrow-icon-png-images/-->
					<img src="../img/PinClipart.com_welcome-back-clip-art_3434813.png">
				</a>
				<a class="icon1" href="../index.php">
					<!--https://www.pikpng.com/pngvi/oJomRo_html5-newly-released-logo-vector-and-png-svg-file-desenhos-arquitetura-logo/-->
					<img src="../img/PikPng.com_home-icon-png_1014572.png">
				</a>
			</div>
			<h1>ANGGOTA PERPUSTAKAAN ONLINE</h1>
			<div class="user">
				<table>
				<tr>
					<td class="td_no" width="40px">No.</td>
					<td class="td_name" width="100px">Nama</td>
					<td class="td_gender" width="100px">Jenis Kelamin</td>
					<td class="td_religion" width="80px">Agama</td>
					<td class="td_place" width="250px">Alamat</td>
					<td class="td_prov" width="150px">Provinsi</td>
				</tr>
				
				<?php
				
				$batas=6;
				$halaman = $_GET['halaman'];
				if(empty($halaman)) {
					$posisi=0;
					$halaman=1;
				}else{
					$posisi = ($halaman - 1) * $batas;
				}
				
				$paging = mysqli_query($conn,"SELECT * FROM users LIMIT $posisi,$batas");
				$number = 1+$posisi;
				
				?>
				<?php while($data=mysqli_fetch_array($paging)) :?>
				<tr>
					<td><?php echo $number++ ?></td>
					<td><?php echo $data['Nama'] ?></td>
					<td><?php echo $data['Jenis_kelamin'] ?></td>
					<td><?php echo $data['Agama'] ?></td>
					<td><?php echo $data['Alamat'] ?></td>
					<td><?php echo $data['Provinsi'] ?></td>
				</tr>
				
				<?php endwhile ?>
				
				<?php 
				$paging2 = mysqli_query($conn,"SELECT * FROM users") or die(mysqli_error());
				$jmldata = mysqli_num_rows($paging2);
				$jmlhalaman = ceil($jmldata/$batas);
				?>
				
					<p>Halaman :
					<?php for($i=1; $i<=$jmlhalaman; $i++): ?>
						<?php if($i != $halaman):?>
							<a  class="halaman_user" href="user.php?halaman=<?php echo $i?>"><?php echo $i?></a>
						<?php else: ?>
							<b><?php echo $i ?></b>
						<?php endif?>
					<?php endfor ?>
					</p>	
				</table>
			</div>
			<p>Total anggota: <?php echo $jmldata." orang"?></p>
		</div>
	</div>
	<!-- Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).-->
</body>
</html>