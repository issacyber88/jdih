<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JDIH Sulut | Peraturan</title>
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
        Peraturan
        <small>Data Peraturan</small>
		&nbsp;<a href="katalog_data.php?sts=Katalog" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Peraturan</a></li>
        <li class="active">Data Peraturan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Peraturan &nbsp;<a href="peraturan_tambah.php?sts=Peraturan&aksi=add&idp=<?php echo $_GET['id']; ?>" class="btn btn-default"><i class="fa fa-plus"></i> Tambah</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="padding:1px;overflow:auto;width:auto;height:auto;border:0px solid grey">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="20">No</th>
                  <th>Peraturan</th>
				  <th>Tanggal Posting</th>
				  <th>Tahun</th>
				  <th>Nomor</th>
				  <th>Subjek</th>
				  <th>File</th>
				  <th>Add by</th>
				  <th>Edit by</th>
				  <th>Count</th>
				  <th>Status</th>
				  <th>Peraturan Status</th>
				  <th>Riwayat Status</th>
				  <th>Tajuk Katalog</th>
				  <th>Judul Katalog</th>
				  <th>Bentuk Katalog</th>
				  <th>Tanggal Katalog</th>
				  <th>Tentang Katalog</th>
				  <th>Tempat Katalog</th>
				  <th>Tahun Katalog</th>
				  <th>Sumber Katalog</th>
				  <th>Subjek Katalog</th>
				  <th>Singkatan Katalog</th>
				  <th>Lokasi Katalog</th>
				  <th>Subjek Abstrak</th>
				  <th>Tahun Abstrak</th>
				  <th>Singkatan Abstrak</th>
				  <th>Nomor Abstrak</th>
				  <th>Sumber Abstrak</th>
				  <th>Jumlah Abstrak</th>
				  <th>Bentuk Abstrak</th>
				  <th>Tentang Abstrak</th>
				  <th>Isi Abstrak</th>
				  <th>Dasar Hukum Abstrak</th>
				  <th>Diatur Tentang Abstrak</th>
				  <th>Catatan Abstrak</th>
				  <th width="40">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
					$sqlgb = mysqli_query($con, "SELECT * FROM katalog, peraturan WHERE peraturan.id_peraturan_cat = katalog.id_kat AND id_peraturan_cat = '$_GET[id]' ORDER BY id_peraturan DESC");
					while($datagb = mysqli_fetch_array($sqlgb)){
						$no=$no+1;
				?>
                <tr>
                  <td><?php echo $no; ?></td>
				  <td><?php echo $datagb['nama_kat']; ?></td>
				  <td><?php echo date("d-m-Y", strtotime($datagb['tgl_posting'])); ?></td>
				  <td><?php echo $datagb['tahun']; ?></td>
				  <td><?php echo $datagb['nomor']; ?></td>
				  <td><?php echo $datagb['subjek']; ?></td>
				  <td><?php echo $datagb['file']; ?></td>
				  <td><?php echo $datagb['add_by']; ?></td>
				  <td><?php echo $datagb['edit_by']; ?></td>
				  <td><?php echo $datagb['count']; ?></td>
				  <td><?php echo $datagb['status']; ?></td>
				  <td><?php echo $datagb['peraturan_status']; ?></td>
				  <td><?php echo $datagb['riwayat_status']; ?></td>
				  <td><?php echo $datagb['tajuk_katalog']; ?></td>
				  <td><?php echo $datagb['judul_katalog']; ?></td>
				  <td><?php echo $datagb['bentuk_katalog']; ?></td>
				  <td><?php echo $datagb['tanggal_katalog']; ?></td>
				  <td><?php echo $datagb['tentang_katalog']; ?></td>
				  <td><?php echo $datagb['tempat_katalog']; ?></td>
				  <td><?php echo $datagb['tahun_katalog']; ?></td>
				  <td><?php echo $datagb['sumber_katalog']; ?></td>
				  <td><?php echo $datagb['subjek_katalog']; ?></td>
				  <td><?php echo $datagb['singkatan_katalog']; ?></td>
				  <td><?php echo $datagb['lokasi_katalog']; ?></td>
				  <td><?php echo $datagb['subjek_abstrak']; ?></td>
				  <td><?php echo $datagb['tahun_abstrak']; ?></td>
				  <td><?php echo $datagb['singkatan_abstrak']; ?></td>
				  <td><?php echo $datagb['nomor_abstrak']; ?></td>
				  <td><?php echo $datagb['sumber_abstrak']; ?></td>
				  <td><?php echo $datagb['jumlah_abstrak']; ?></td>
				  <td><?php echo $datagb['bentuk_abstrak']; ?></td>
				  <td><?php echo $datagb['tentang_abstrak']; ?></td>
				  <td><?php echo $datagb['isi_abstrak']; ?></td>
				  <td><?php echo $datagb['dasar_hukum_abstrak']; ?></td>
				  <td><?php echo $datagb['diatur_tentang_abstrak']; ?></td>
				  <td><?php echo $datagb['catatan_abstrak']; ?></td>
				  <td>
					<a href="peraturan_tambah.php?id=<?php echo $datagb['id_peraturan']; ?>&aksi=edit&idp=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
					<a href="peraturan_hapus.php?id=<?php echo $datagb['id_peraturan']; ?>&idp=<?php echo $_GET['id']; ?>" class="btn btn-danger btn-xs" onClick="javascript: return confirm('Apakah Anda Yakin?');"><i class="fa fa-times"></i></a>
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
