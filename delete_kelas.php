<?php
include("koneksi.php");
mysqli_query($mysqli,"delete from kelas 
where id_kelas='$_GET[id_kelas]'");
header("location: tabel_kelas.php");
?>
