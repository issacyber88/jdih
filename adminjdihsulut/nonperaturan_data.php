<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JDIH Sulut | Non Peraturan</title>
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
        Non Peraturan
        <small>Data Non Peraturan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Non Peraturan</a></li>
        <li class="active">Data Non Peraturan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Non Peraturan &nbsp;<a href="nonperaturan_tambah.php?sts=Non Peraturan&aksi=add" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="padding:1px;overflow:auto;width:auto;height:auto;border:0px solid grey">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="20">No</th>
                  <th>Judul</th>
				  <th>File</th>
				  <th>Thumb</th>
				  <th>Add by</th>
				  <th>Edit by</th>
				  <th>Count</th>
				  <th>Tanggal Posting</th>
				  <th>Nomor Katalog</th>
				  <th>Pengarang Katalog</th>
				  <th>Judul Katalog</th>
				  <th>Kota Katalog</th>
				  <th>Penerbit Katalog</th>
				  <th>Tahun Katalog</th>
				  <th>Jilid Katalog</th>
				  <th>Jumlah Katalog</th>
				  <th>Tebal Katalog</th>
				  <th>Subjek Pengarang Katalog</th>
				  <th>Nomor Induk Katalog</th>
				  <th>Status Katalog</th>
				  <th width="40">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
					$sqlgb = mysqli_query($con, "SELECT * FROM nonperaturan ORDER BY id_nonperaturan DESC");
					while($datagb = mysqli_fetch_array($sqlgb)){
						$no=$no+1;
				?>
                <tr>
                  <td><?php echo $no; ?></td>
				  <td><?php echo $datagb['judul']; ?></td>
				  <td><?php echo $datagb['file']; ?></td>
				  <td><?php echo $datagb['thumb']; ?></td>
				  <td><?php echo $datagb['add_by']; ?></td>
				  <td><?php echo $datagb['edit_by']; ?></td>
				  <td><?php echo $datagb['count']; ?></td>
				  <td><?php echo date("d-m-Y", strtotime($datagb['tgl_posting'])); ?></td>
				  <td><?php echo $datagb['col_number_katalog']; ?></td>
				  <td><?php echo $datagb['pengarang_katalog']; ?></td>
				  <td><?php echo $datagb['judul_katalog']; ?></td>
				  <td><?php echo $datagb['kota_katalog']; ?></td>
				  <td><?php echo $datagb['penerbit_katalog']; ?></td>
				  <td><?php echo $datagb['tahun_katalog']; ?></td>
				  <td><?php echo $datagb['jilid_katalog']; ?></td>
				  <td><?php echo $datagb['jumlah_katalog']; ?></td>
				  <td><?php echo $datagb['tebal_katalog']; ?></td>
				  <td><?php echo $datagb['subjek_pengarang_katalog']; ?></td>
				  <td><?php echo $datagb['no_induk_katalog']; ?></td>
				  <td><?php echo $datagb['status_katalog']; ?></td>
				  <td>
					<a href="nonperaturan_tambah.php?id=<?php echo $datagb['id_nonperaturan']; ?>&aksi=edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
					<a href="nonperaturan_hapus.php?id=<?php echo $datagb['id_nonperaturan']; ?>" class="btn btn-danger btn-xs" onClick="javascript: return confirm('Apakah Anda Yakin?');"><i class="fa fa-times"></i></a>
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
