<?php
include("koneksi.php");
mysqli_query($mysqli,"delete from siswa 
where nisn='$_GET[nisn]'");
header("location:tabel_siswa.php");
 echo "<script>alert('Data berhasil ditambahkan. terimaksih');
			window.location='tabel_siswa.php?w=siswa';</script>";
?>
