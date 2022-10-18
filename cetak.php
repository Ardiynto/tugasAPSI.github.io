<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>History Pembayaran</title>
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
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                                        <tr>
            <td>No. </td>
            <td>Nama Petugas</td>
            <td>Nama Siswa</td>
            <td>Tgl/Bulan/Tahun dibayar</td>
            <td>Tahun / Nominal harus dibayar</td>
            <td>Jumlah yang dibayar</td>
            <td>Status</td>
            <td>Aksi</td>
        </tr>
                                    </thead>
                                    <tbody>
<?php
$totalDataHalaman = 5;
$data = mysqli_query($db, "SELECT * FROM pembayaran");
$hitung = mysqli_num_rows($data);
$totalHalaman = ceil($hitung / $totalDataHalaman);
$halAktif = (isset($_GET['hal'])) ? $_GET['hal'] : 1;
$dataAwal = ($totalDataHalaman * $halAktif) - $totalDataHalaman;
// Kita panggil tabel pembayaran
// Setelah kita panggil, JOIN tabel yang ter relasi ke tabel pembayaran
$sql = mysqli_query($db, "SELECT * FROM pembayaran
JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas 
JOIN siswa ON pembayaran.nisn = siswa.nisn
JOIN spp ON pembayaran.id_spp = spp.id_spp
ORDER BY tgl_bayar ASC LIMIT $dataAwal, $totalDataHalaman");
$no = 1;
while($r = mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $r['nama_petugas']; ?></td>
            <td><?= $r['nama']; ?></td>
            <td><?= $r['tgl_bayar'] . "/" . $r['bulan_dibayar'] . "/" . $r['tahun_dibayar']; ?></td>
            <td><?= $r['tahun'] . " | Rp. " . $r['nominal']; ?></td>
            <td><?= $r['jumlah_bayar']; ?></td>
            <td>
<?php
// Jika jumlah bayar sesuai dengan yang harus dibayar maka Status LUNAS
if($r['jumlah_bayar'] == $r['nominal']){ ?>
                <font style="color: darkgreen; font-weight: bold;">LUNAS</font>
<?php }else{ ?>                             BELUM LUNAS <?php } ?> </td>
            <td>
<?php
// Jika siswa ingin membayar lunas sisa pembayaran
if($r['jumlah_bayar'] == $r['nominal']){ echo "-";
}else{ ?>
    <a href="?lunas&id=<?= $r['id_pembayaran']; ?>">BAYAR LUNAS</a>
<?php } ?>  </td>
        </tr>
<?php $no++; } ?>
    </table>
	<script>
window.print();
	</script>
</body>
</html>
								