<?php
session_start();
require_once("koneksi.php");

if(!isset($_SESSION['nisn'])){
    header("location: login_siswa.php");
}else{
    $nisn = $_SESSION['nisn'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
</head>
<body>
<style type="text/css">
 body{
	 font-family: sans-serif;
 }
 table{
	 margin: 20px auto;
	 border-collapse: collapse;
 }
 table th,
 table td{
border: 1px solid #3c3c3c;
padding: 3px 8px;
 }
 
 a{
	 background: blue;
	 color: #fff;
	 padding: 8px 10px;
	 text-decoration: none;
	 border-radius: 2px;
 }
 .tengah{
	 text-align: center;
 }
 </style>
 <h3 align="center">LAPORAN DATA TRANSAKSI<h3>
<?php
// Kita lakukan proses pencariannya disini

    // Kita panggil table siswa
    $biodataSiswa = mysqli_query($db, "SELECT * FROM siswa 
                    JOIN kelas ON siswa.id_kelas=kelas.id_kelas 
                    WHERE nisn='$nisn'");
    // Table pembayaran wajib kita panggil
    $historyPembayaran = mysqli_query($db, "SELECT * FROM pembayaran
                         JOIN petugas ON pembayaran.id_petugas=petugas.id_petugas
                         JOIN spp ON pembayaran.id_spp=spp.id_spp
                         WHERE nisn='$nisn'
                         ORDER BY tgl_bayar");
    $r_siswa = mysqli_fetch_assoc($biodataSiswa);
?>

<table cellpadding="5">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?= $r_siswa['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><?= $r_siswa['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $r_siswa['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $r_siswa['nama_kelas'] . " | " . $r_siswa['kompetensi_keahlian']; ?></td>
            </tr>
        </table>
 
 
 
 <table cellpadding="5" cellspacing="0" border="1">
            <tr>
                <td>No. </td>
                <td>Tanggal Pembayaran</td>
                <td>Pembayaran Melalui</td>
                <td>Tahun SPP | Nominal yang harus dibayar</td>
                <td>Jumlah yang sudah dibayar</td>
                <td>Status</td>
            </tr>
<?php 
$no=1;
while($r_trx = mysqli_fetch_assoc($historyPembayaran)){ ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $r_trx['tgl_bayar'] . " " . $r_trx['bulan_dibayar'] . " " .
                        $r_trx['tahun_dibayar']; ?></td>
                <td><?= $r_trx['nama_petugas']; ?></td>
                <td><?= $r_trx['tahun'] . " | Rp. " . $r_trx['nominal']; ?></td>
                <td><?= "Rp. " . $r_trx['jumlah_bayar']; ?></td>
<?php
if($r_trx['jumlah_bayar'] == $r_trx['nominal']){ ?>
                <td><font style="color: darkgreen; font-weight: bold;">LUNAS</font></td>
                
<?php }else{ ?> <td>BELUM LUNAS</td>
                <td><a href="transaksi.php?lunas&id=<?= $r_trx['id_pembayaran']; ?>">
                BAYAR LUNAS</a></td>
<?php } ?>
            </tr>
<?php $no++; }?>
        </table>
	<script>
window.print();
	</script>
</body>
</html>
								