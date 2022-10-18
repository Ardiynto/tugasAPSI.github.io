<?php
session_start();
require_once("koneksi.php");
if(isset($_POST['simpan'])){
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
	 $level = $_POST['level'];
	
    
    $simpan = mysqli_query($db, "INSERT INTO petugas VALUES
    ('$id_petugas', '$username', '$password', '$nama_petugas', '$level')");
        if($simpan){
            header("location: tambah_petugas.php");
        }else{
            echo "<script>alert('Data sudah ada');</script>";
        }
}
?>
