<?php
session_start();
require_once("koneksi.php");
if(isset($_POST['simpan'])){
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

    $simpan = mysqli_query($db, "INSERT INTO kelas VALUES
    ('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')");
        if($simpan){
            header("location: tambah_kelas.php");
        }else{
            echo "<script>alert('Data sudah ada');</script>";
        }
}
?>
