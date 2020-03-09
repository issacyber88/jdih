<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JDIH Sulut | Artikel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php include "header.php"; 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Artikel
        <small>Data Artikel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Artikel</a></li>
        <li class="active">Data Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Artikel &nbsp;<a href="artikel_tambah.php?sts=Artikel&aksi=add" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="padding:1px;overflow:auto;width:auto;height:auto;border:0px solid grey">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="20">ID</th>
                  <th>Waktu</th>
				  <th>Judul</th>
				  <th>Isi</th>
				  <th>Add by</th>
				  <th>Edit by</th>
				  <th width="151">Gambar</th>
				  <th>Pengunjung</th>
				  <th>Status</th>
				  <th width="40">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
					$sqlgb = mysqli_query($con, "SELECT * FROM artikel ORDER BY id_Artikel DESC");
					while($datagb = mysqli_fetch_array($sqlgb)){
						$no=$no+1;
				?>
                <tr>
                  <td><?php echo $no; ?></td>
				  <td><?php echo $datagb['hari']."<br>".date("d-m-Y", strtotime($datagb['tanggal']))."<br>".$datagb['jam']; ?></td>
				  <td><?php echo $datagb['judul']; ?></td>
				  <td><?php 
					$string = $datagb['isi_artikel'];
					$string = strip_tags($string);
					if (strlen($string) > 500) {

						// truncate string
						$stringCut = substr($string, 0, 500);
						$endPoint = strrpos($stringCut, ' ');

						//if the string doesn't contain any space then it will cut without word basis.
						$string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
						$string .= '..... ';
					}
					echo $string;
				  ?></td>
				  <td><?php echo $datagb['add_by']; ?></td>
				  <td><?php echo $datagb['edit_by']; ?></td>
				  <td><img src="../<?php echo $datagb['gambar']; ?>" height="100"></td>
				  <td><?php echo $datagb['counter']; ?></td>
				  <td><?php if($datagb['status']==0){ echo "<font color='red'><b>TIDAK</b></font>"; }else{ echo "<font color='green'><b>TAYANG</b></font>"; } ?></td>
				  <td>
					<?php if($datagb['status']==0){ ?>
					<a href="artikel_proses.php?id=<?php echo $datagb['id_artikel']; ?>&cek=tayang" class="btn btn-success btn-xs"><i class="fa fa-check-circle-o"></i> <b>TAYANGKAN</b></a>
					<?php }else{ ?>
					<a href="artikel_proses.php?id=<?php echo $datagb['id_artikel']; ?>&cek=tidak" class="btn btn-warning btn-xs"><i class="fa fa-circle-o"></i> <b>TIDAK TAYANG</b></a>
					<?php } ?>
					<a href="artikel_tambah.php?id=<?php echo $datagb['id_artikel']; ?>&aksi=edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Ubah</a>
					<a href="artikel_hapus.php?id=<?php echo $datagb['id_artikel']; ?>" class="btn btn-danger btn-xs" onClick="javascript: return confirm('Apakah Anda Yakin?');"><i class="fa fa-times"></i> Hapus</a>
				  </td>
                </tr>
					<?php } ?>
                </tbody>
               
              </table>
			  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php"; ?>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
