<?php
include("koneksi.php");
mysqli_query($mysqli,"delete from petugas 
where id_petugas='$_GET[id_petugas]'");
header("location: tabel_petugas.php");
?>
	