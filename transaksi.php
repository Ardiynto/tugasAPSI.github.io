<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaksi Pembayaran</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/mediaelementplayer.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/icon.jpg">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard topnav">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <a href="index.php" class="navbar-brand"> 
                 <b>Aplikasi Pembayaran SPP</b>
                </a>

               <ul class="nav navbar-nav search-nav">
                  <li class="active"><a href="#">Menu Item</a></li>
                  <li class="dropdown menu-large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Mega<b class="caret"></b> </a>
                    <ul class="dropdown-menu megamenu row">
                      <li>
                       
                        <div class="col-sm-6 col-md-3 sub-megamenu">
                          <div class="col-md-12" style="padding-top:10px;">
                              <h4 style="margin-left:10px;"><b>Program Studi</b></h4>
                          </div>
                          <div class="col-sm-6">
                            <ul class="nav">
                              <li><a href="#"><span class="fa fa-angle-right"></span> RPL</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> MM</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> DKV</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> TKKR</a></li>
							  <li><a href="#"><span class="fa fa-angle-right"></span> TKR</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> AP</a></li>
                                 <li><a href="#"><span class="fa fa-angle-right"></span> TP</a></li>
                            </ul>
                          </div>
                          <div class="col-sm-6">
                            <ul class="nav">
                              <li><a href="#"><span class="fa fa-angle-right"></span> TESA</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> AP</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> TKR</a></li>
                              <li><a href="#"><span class="fa fa-angle-right"></span> UPW</a></li>
							  <li><a href="#"><span class="fa fa-angle-right"></span> TKR</a></li>
                              
                              <li><a href="#"><span class="fa fa-angle-right"></span> TB</a></li>
                              
                            </ul>
                          </div>
                          
                        </div>
                        <div class="col-sm-6 col-md-9 sub-megamenu">
                          <div class="col-md-6">
                            
                                    <h4><b></b></h4>
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
										<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
										<li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
										<li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="item active">
                                          <img class="img-responsive" data-src="holder.js/800x500/auto/#777:#555/text:First slide" alt="First slide" src="asset/img/img1.jpeg">
                                        </div>
                                        <div class="item">
                                          <img class="img-responsive" data-src="holder.js/800x500/auto/#666:#444/text:Second slide" alt="Second slide" src="asset/img/img2.jpeg">
                                        </div>
                                        <div class="item">
                                          <img class="img-responsive" data-src="holder.js/800x500/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img3.jpeg">
                                        </div>
										<div class="item">
                                          <img class="img-responsive" data-src="holder.js/800x500/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img4.jpeg">
                                        </div>
										<div class="item">
                                          <img class="img-responsive" data-src="holder.js/800x500/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img5.jpeg">
                                        </div>
                                      </div>
                                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                      </a>
                                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                      </a>
                                    </div>
                                    <p style="padding-top:10px;">SMKN 1 LINGSAR.12/03/2021 <br>di atas adalah slide gambar dari beberapa kegiatan yang pernah di laksanakan di SMKN 1 LINGSAR <br>SMKN 1 LINGSAR saat ini telah memiliki 13 program studi/jurusan     </p>
                                    <div style="padding-top:5px;">
                                      
                                    </div> 
                          </div>
                          <div class="col-md-6">
                            <div class="col-md-6 hidden-sm" style="padding:5px;">
                              <img class="img-responsive" data-src="holder.js/200x200/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img5.jpeg">
                            </div>
                            <div class="col-md-6 hidden-sm" style="padding:5px;">
                              <img class="img-responsive" data-src="holder.js/200x200/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img1.jpeg">
                            </div>
                            <div class="col-md-6 hidden-sm" style="padding:5px;">
                              <img class="img-responsive" data-src="holder.js/200x200/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img4.jpeg">
                            </div>
                            <div class="col-md-6 hidden-sm" style="padding:5px;">
							<img class="img-responsive" data-src="holder.js/200x200/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img3.jpeg">
                            </div>
							<div class="col-md-6 hidden-sm" style="padding:5px;">
                              <img class="img-responsive" data-src="holder.js/100x100/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img6.jpeg">
                            </div>
							<div class="col-md-6 hidden-sm" style="padding:5px;">
                              <img class="img-responsive" data-src="holder.js/100x100/auto/#555:#333/text:Third slide" alt="Third slide" src="asset/img/img7.jpeg">
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="tabel_siswa.php">Tabel Siswa</a></li>
                  <li><a href="tabel_kelas.php">Tabel Kelas</a></li>
                  <li><a href="tabel_petugas.php">Tabel Petugas</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="transaksi.php">Transaksi Pembayaran</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="history.php">History Pembayar</a></li>
                </ul>
              </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>SMKN 1 LINGSAR</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/icon.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <!-- start: Content -->
        
            
               <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tabel Transaksi</h3>
                        <p class="animated fadeInDown">
                          Data Transaksi <span class="fa-angle-right fa"></span> Tabel Transaksi
                        </p>
                    </div>
                  </div>
              </div>
			  
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Transaksi
								<div class="btn-group">
                                         <a href="tambah_transaksi.php"><button class="btn btn-success">Tambah Data <i class="icon-plus icon-white"></i></button></a>
                                     
									 </div>
									<a target="_blank" href="cetak.php" class="btn btn-success">CETAK</a>
					</h3>
								
					</div>
					
                    <div class="panel-body">
                      <div class="responsive-table">
					  <form action="" method="POST">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
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
   

<?php
// Ada siswa yang ingin membayar sisa pembayaran
if(isset($_GET['lunas'])){
    $id = $_GET['id'];
    $ambilData = mysqli_query($db, "SELECT * FROM pembayaran JOIN spp ON pembayaran.id_spp=spp.id_spp 
                                    WHERE id_pembayaran = '$id'");
    $row = mysqli_fetch_assoc($ambilData);
    $sisa = $row['nominal'] - $row['jumlah_bayar'];
    $hasil = $row['jumlah_bayar'] + $sisa;
    $update = mysqli_query($db, "UPDATE pembayaran SET jumlah_bayar='$hasil' WHERE id_pembayaran='$id'");
    if($update){
        
    }else{
		 echo "<script>alert('gagal');
			window.location='transaksi.php?w=transaksi';</script>";
	}
	
}
?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>

          
     
          
      
      <!-- end: content -->


      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Ui Elements
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                       <span class="fa fa-check-square-o"></span>Forms
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Tables
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>Calendar
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Pages
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="asset/js/plugins/holder.min.js"></script>
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<!-- end: Javascript -->
</body>
</html>
