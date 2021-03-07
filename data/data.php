<?php 
require_once('month.php');

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

$genders = array('Laki-Laki','Perempuan');
$religions = array('Islam','Protestan','Katolik','Hindu','Buddha','Khonghucu');

$null = new Month('','--Month--');
$jan = new Month(1,'Januari');
$feb = new Month(2,'Februari');
$mar = new Month(3,'Maret');
$apr = new Month(4,'April');
$mei = new Month(5,'Mei');
$jun = new Month(6,'Juni');
$jul = new Month(7,'Juli');
$ags = new Month(8,'Agustus');
$sep = new Month(9,'September');
$okt = new Month(10,'Oktober');
$nov = new Month(11,'November');
$des = new Month(12,'Desember');

$months = array($null,$jan,$feb,$mar,$apr,$mei,$jun,$jul,$ags,$sep,$okt,$nov,$des);

/* Portofolio ini dibuat oleh Wulandari github:(https://github.com/wulandari8220).*/

$places = array('Aceh','Sumatera Utara','Sumatera Barat','Riau','Kepulauan Riau','Jambi','Sumatera Selatan','Kep. Bangka Belitung','Bengkulu',
				'Lampung','DKI Jakarta','Banten','Jawa Barat','Jawa Tengah','DI Yogyakarta','Jawa Timur','Bali','Nusa Tenggara Barat','Nusa Tenggara Timur','Kalimantan Barat',
				'Kalimantan Tengah','Kalimantan Selatan','Kalimantan Timur','Kalimantan Utara','Sulawesi Utara','Gorontalo','Sulawesi Tengah','Sulawesi Barat','Sulawesi Selatan',
				'Sulawesi Tenggara','Maluku','Maluku Utara','Papua Barat','Papua');
?>