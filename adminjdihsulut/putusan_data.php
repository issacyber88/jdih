<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JDIH Sulut | Putusan Peradilan</title>
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
        Putusan Peradilan
        <small>Data Putusan Peradilan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Putusan Peradilan</a></li>
        <li class="active">Data Putusan Peradilan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Putusan Peradilan &nbsp;<?php if($bagian==""){ ?><a href="putusan_tambah.php?sts=Putusan Peradilan&aksi=add" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</a><?php } ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="padding:1px;overflow:auto;width:auto;height:auto;border:0px solid grey">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="20">No</th>
                  <th>Tahun Gugatan</th>
				  <th>No. Perkara</th>
				  <th>Objek Perkara</th>
				  <th>Penggugat</th>
				  <th>Tergugat</th>
				  <th>Tuntutan</th>
				  <th>Tahapan/Proses</th>
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
					if($bagian==""){
						$sqlgb = mysqli_query($con, "SELECT * FROM putusan ORDER BY id_put ASC");
					}else{
						$sqlgb = mysqli_query($con, "SELECT * FROM putusan WHERE bagian = '$bagian' ORDER BY id_put ASC");
					}
					while($datagb = mysqli_fetch_array($sqlgb)){
						$no=$no+1;
						
				?>
                <tr>
                  <td><?php echo $no; ?></td>
				  <td><?php echo $datagb['tahungugat_put']; ?></td>
				  <td><?php echo $datagb['noperkara_put']; ?></td>
				  <td><?php echo $datagb['objekperkara_put']; ?></td>
				  <td><?php echo $datagb['penggugat_put']; ?></td>
				  <td><?php echo $datagb['tergugat_put']; ?></td>
				  <td><?php echo $datagb['tuntutan_put']; ?></td>
				  <td><?php echo $datagb['tahapan_put']; ?></td>
				  <td><?php echo $datagb['keterangan_put']; ?></td>
				  <td><?php echo $datagb['file_put']; ?></td>
				  <td><?php echo $datagb['size_put']; ?></td>
				  <td><?php echo $datagb['hits_put']; ?></td>
				  <td><?php echo $datagb['addby_put']; ?><br><?php echo $datagb['date_addby_put']; ?></td>
				  <td><?php echo $datagb['editby_put']; ?><br><?php echo $datagb['date_editby_put']; ?></td>
				  <td>
					<?php if($bagian!=""){ ?><a href="putusan_tambah.php?id=<?php echo $datagb['id_put']; ?>&aksi=edit&sts=Putusan Peradilan" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Ubah</a><?php } ?>
					<a href="putusan_hapus.php?id=<?php echo $datagb['id_put']; ?>&sts=Putusan Peradilan" class="btn btn-danger btn-xs" onClick="javascript: return confirm('Apakah Anda Yakin?');"><i class="fa fa-times"></i> Hapus</a>
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
