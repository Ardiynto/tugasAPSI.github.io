<?php
session_start();
require_once("koneksi.php");
if(isset($_POST['simpan'])){
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $simpan = mysqli_query($db, "INSERT INTO siswa VALUES
    ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp')");
        if($simpan){
            header("location: tabel_siswa.php");
        }else{
            echo "<script</script>";
        }
}
?>
