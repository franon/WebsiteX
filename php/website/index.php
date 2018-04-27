<?php
include "head.php";
?>
<div id="main">
<?php
if(isset($_GET['hal'])){
	switch($_GET['hal']){
		case 'profil'	: include 'profil.php';break;
		case 'kontak'	: include 'kontak.php';break;
		case 'Pengumuman'	: include 'Pengumuman.php';break;
		default			: include '404.php';
	}
}else{
	include 'home.php';
}
?>
</div>
<?php
include "sidebar.php";
include "footer.php";
?>
