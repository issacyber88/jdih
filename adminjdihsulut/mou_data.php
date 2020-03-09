<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JDIH Sulut | MoU</title>
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
<?php include "header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MoU
        <small>Data MoU</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">MoU</a></li>
        <li class="active">Data MoU</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data MoU &nbsp;<a href="mou_tambah.php?sts=MoU&aksi=add" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="padding:1px;overflow:auto;width:auto;height:auto;border:0px solid grey">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="20">No</th>
                  <th>Tentang</th>
				  <th>Keterangan</th>
				  <th>File</th>
				  <th>Size</th>
				  <th>Hits</th>
				  <th>Add by</th>
				  <th>Edit by</th>
				  <th width="90">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
					$sqlgb = mysqli_query($con, "SELECT * FROM mou ORDER BY id_mou ASC");
					while($datagb = mysqli_fetch_array($sqlgb)){
						$no=$no+1;
						
				?>
                <tr>
                  <td><?php echo $no; ?></td>
				  <td><?php echo $datagb['tentang_mou']; ?></td>
				  <td><?php echo $datagb['keterangan_mou']; ?></td>
				  <td><?php echo $datagb['file_mou']; ?></td>
				  <td><?php echo $datagb['size_mou']; ?></td>
				  <td><?php echo $datagb['hits_mou']; ?></td>
				  <td><?php echo $datagb['addby_mou']; ?><br><?php echo $datagb['date_addby_mou']; ?></td>
				  <td><?php echo $datagb['editby_mou']; ?><br><?php echo $datagb['date_editby_mou']; ?></td>
				  <td>
					<a href="mou_tambah.php?id=<?php echo $datagb['id_mou']; ?>&aksi=edit&sts=MoU" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Ubah</a>
					<a href="mou_hapus.php?id=<?php echo $datagb['id_mou']; ?>&sts=MoU" class="btn btn-danger btn-xs" onClick="javascript: return confirm('Apakah Anda Yakin?');"><i class="fa fa-times"></i> Hapus</a>
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
