<?php
session_start();
require_once("koneksi.php");
if(isset($_POST['simpan'])){
    $id_spp = $_POST['id_spp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $simpan = mysqli_query($db, "INSERT INTO spp VALUES
    ('$id_spp', '$tahun', '$nominal')");
        if($simpan){
            header("location: tabel_spp.php");
        }else{
            echo "<script>alert('Data sudah ada');</script>";
        }
}
?>
