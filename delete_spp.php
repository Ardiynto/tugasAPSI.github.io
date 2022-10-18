<?php
include("koneksi.php");
mysqli_query($mysqli,"delete from kelas 
where id_spp='$_GET[id_spp]'");
header("location: spp.php");
 echo "<script>alert('Data berhasil ditambahkan. terimaksih');
			window.location='tabel_siswa.php?w=siswa';</script>";
?>
