<body class="hold-transition skin-blue sidebar-mini">
<?php
	session_start();
	$session = $_SESSION['login88'];
	if($session == 0)
	{ 
	?>
	<script type="text/javascript">
		window.location.href = "loginform.php";
	</script>
	<?php
	}
	include "koneksi.php";
	$id=$_SESSION['idq'];
	$password=$_SESSION['passq'];
	$username=$_SESSION['userq'];
	$sql = mysqli_query($con, "SELECT * FROM admin WHERE password = '$password' AND id_admin = '$username'");
	$data = mysqli_fetch_array($sql);
	$nama=$data['nama_lengkap'];
	$bagian=$data['bagian'];
	$idbb=$data['idp_bb'];
	$tipe=$data['tipe'];
?>
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>JD</b>IH</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>JDIH</b> Admin</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $data['nama_lengkap']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../images/user.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $data['nama_lengkap']; ?> - <?php echo $data['id_admin']; ?>
                  <small><?php echo $data['email']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../images/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $data['nama_lengkap']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<?php
			$hasil1 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '1' LIMIT 1");
			$data1 = mysqli_fetch_array($hasil1);
				if($data1['akses_aa']==1){
		?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-home text-red"></i> <span>Template</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="<?php if($_GET['sts']=="Slideshow"){ echo "active"; } ?>"><a href="slideshow_data.php?sts=Slideshow"><i class="fa fa-toggle-right"></i> Slideshow</a></li>
            <li class="<?php if($_GET['sts']=="Informasi"){ echo "active"; } ?>"><a href="informasi_data.php?sts=Informasi"><i class="fa fa-info"></i> Informasi</a></li>
			<li class="<?php if($_GET['sts']=="Running Text"){ echo "active"; } ?>"><a href="runningtext_data.php?sts=Running Text"><i class="fa fa-outdent"></i> Running Text</a></li>
			<li class="<?php if($_GET['sts']=="Link Terkait"){ echo "active"; } ?>"><a href="linkterkait_data.php?sts=Link Terkait"><i class="fa fa-link"></i> Link Terkait</a></li>
			<li class="<?php if($_GET['sts']=="Media Sosial"){ echo "active"; } ?>"><a href="medsos_data.php?sts=Media Sosial"><i class="fa fa-facebook"></i> Media Sosial</a></li>
			<li class="<?php if($_GET['sts']=="Tautan Terkait"){ echo "active"; } ?>"><a href="tautanterkait_data.php?sts=Tautan Terkait"><i class="fa fa-link"></i> Tautan Terkait</a></li>
          </ul>
        </li>
		<?php
				}
			
			$hasil2 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '2' LIMIT 1");
			$data2 = mysqli_fetch_array($hasil2);
				if($data2['akses_aa']==1){
		?>
		<li class="<?php if($_GET['sts']=="Konten"){ echo "active"; } ?>"><a href="konten_data.php?sts=Konten"><i class="fa fa-pencil-square text-red"></i> <span> Profil</span></a></li>
		<?php
				}
			
			$hasil3 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '3' LIMIT 1");
			$data3 = mysqli_fetch_array($hasil3);
				if($data3['akses_aa']==1){
		?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-info text-red"></i> <span>Informasi Hukum</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="<?php if($_GET['sts']=="Putusan"){ echo "active"; } ?>"><a href="putusan_data.php?sts=Putusan"><i class="fa fa-gavel"></i> Putusan Peradilan</a></li>
            <li class="<?php if($_GET['sts']=="MoU"){ echo "active"; } ?>"><a href="mou_data.php?sts=MoU"><i class="fa fa-gavel"></i> MoU</a></li>
			<li class="<?php if($_GET['sts']=="Artikel"){ echo "active"; } ?>"><a href="artikel_data.php?sts=Artikel"><i class="fa fa-newspaper-o"></i> Artikel</a></li>
			<li class="<?php if($_GET['sts']=="Berita"){ echo "active"; } ?>"><a href="berita_data.php?id=<?php echo $idbb; ?>"><i class="fa fa-newspaper-o"></i> Berita</a></li>
			<li class="<?php if($_GET['sts']=="Instruksi"){ echo "active"; } ?>"><a href="instruksi_data.php?sts=Media Sosial"><i class="fa fa-gavel"></i> Instruksi Gubernur</a></li>
		  </ul>
        </li>
		<?php
				}
			
			$hasil4 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '4' LIMIT 1");
			$data4 = mysqli_fetch_array($hasil4);
				if($data4['akses_aa']==1){
		?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-gavel text-red"></i> <span>Peraturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="<?php if($_GET['sts']=="Bentuk Peraturan"){ echo "active"; } ?>"><a href="bentukperaturan_data.php?sts=Bentuk Peraturan"><i class="fa fa-gavel"></i> Bentuk Peraturan</a></li>
			<li class="<?php if($_GET['sts']=="Katalog"){ echo "active"; } ?>"><a href="katalog_data.php?sts=Katalog"><i class="fa fa-gavel"></i> Katalog/Produk Hukum</a></li>
			<!--<li class="<?php if($_GET['sts']=="Produk Hukum"){ echo "active"; } ?>"><a href="produkhukum_data.php?sts=Produk Hukum"><i class="fa fa-gavel"></i> Produk Hukum</a></li>-->
			<!--<li class="<?php if($_GET['sts']=="Peraturan"){ echo "active"; } ?>"><a href="peraturan_data.php?sts=Peraturan"><i class="fa fa-gavel"></i> Peraturan</a></li>-->
			<!--<li class="<?php if($_GET['sts']=="Non Peraturan"){ echo "active"; } ?>"><a href="nonperaturan_data.php?sts=Non Peraturan"><i class="fa fa-gavel"></i> Non Peraturan</a></li>-->
		  </ul>
        </li>
		<?php
				}
			$hasil5 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '5' LIMIT 1");
			$data5 = mysqli_fetch_array($hasil5);
				if($data5['akses_aa']==1){
		?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-gavel text-red"></i> <span>RANPERDA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="<?php if($_GET['sts']=="RANPERDA"){ echo "active"; } ?>"><a href="raperda_data.php?sts=RANPERDA"><i class="fa fa-gavel"></i> Kabupaten/Kota</a></li>
            <li class="<?php if($_GET['sts']=="RANPERDA"){ echo "active"; } ?>"><a href="raperda_data.php?sts=RANPERDA"><i class="fa fa-gavel"></i> Provinsi</a></li>
		  </ul>
        </li>
		<?php
				}
			$hasil6 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '6' LIMIT 1");
			$data6 = mysqli_fetch_array($hasil6);
				if($data6['akses_aa']==1){
		?>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-gear text-red"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($_GET['sts']=="Data Admin"){ echo "active"; } ?>"><a href="admin_data.php?sts=Data Admin"><i class="fa fa-user-secret"></i> Admin</a></li>
          </ul>
        </li>
		<?php
				}
			
			$hasil7 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '7' LIMIT 1");
			$data7 = mysqli_fetch_array($hasil7);
				if($data7['akses_aa']==1){
		?>
		<li class="<?php if($_GET['sts']=="Galeri"){ echo "active"; } ?>"><a href="galeri_data.php?sts=Galeri"><i class="fa fa-image text-red"></i> <span> Galeri Kegiatan</span></a></li>
		<?php
				}
			
			$hasil8 = mysqli_query($con, "SELECT * FROM admin_akses WHERE idp_pgn = '$id' AND idp_ta = '8' LIMIT 1");
			$data8 = mysqli_fetch_array($hasil8);
				if($data8['akses_aa']==1){
		?>
		<li class="<?php if($_GET['sts']=="Kontak"){ echo "active"; } ?>"><a href="kontak_data.php?sts=Kontak"><i class="fa fa-envelope text-red"></i> <span> Pesan Masuk</span></a></li>
		<?php } ?>
		<!--
		<li class="header">-------------</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        -->
        <li class="header"></li>
        <li><a href="logout.php"><i class="fa fa-sign-out text-red"></i> <span>Keluar</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>