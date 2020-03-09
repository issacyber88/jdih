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
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
        <small>Tambah Peraturan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Peraturan</a></li>
        <li class="active">Tambah Peraturan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
		<form action="peraturan_save.php" role="form" id="form1" name="form1" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
        <div class="col-md-2">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"> PERATURAN</h3>
            </div>
            <!-- /.box-header -->
				<?php
				if($_GET['aksi']=="edit"){
					$sqlds = "SELECT * FROM peraturan WHERE id_peraturan = '$_GET[id]'";
					$hasilds = mysqli_query($con, $sqlds);
					$datads = mysqli_fetch_array($hasilds);
				}
				?>
				<input type="hidden" name="idp" value="<?php echo $_GET['idp']; ?>">
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<input type="hidden" name="aksi" value="<?php echo $_GET['aksi']; ?>">
				<input type="hidden" name="create" value="<?php echo $id; ?>">
              <div class="box-body">
				<div class="form-group">
				  <label for="exampleInputEmail1">Tanggal</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tglposting" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tgl_posting']; }else{ echo date('Y-m-d'); } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input type="number" min="1945" max="9999" class="form-control" id="exampleInputEmail1" placeholder="Tahun" name="tahun" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tahun']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Nomor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor" name="nomor" value="<?php if($_GET['aksi']=="edit"){ echo $datads['nomor']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Subjek</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subjek" name="subjek" value="<?php if($_GET['aksi']=="edit"){ echo $datads['subjek']; } ?>" required/>
                </div>
				<div class="form-group">
				  <label for="exampleInputEmail1">File</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" placeholder="File" name="nama_file" accept=".pdf,.doc,.docx,.xls,.xlsx" value="<?php if($_GET['aksi']=="edit"){ echo $datads['file']; } ?>" <?php if($_GET['aksi']=="add"){ echo "required/"; } ?>>
                </div>
			  </div>
          </div>
		  </div>
		  <div class="col-md-5">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"> KATALOG</h3>
            </div>
              <div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Tajuk</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tajuk" name="tajuk_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tajuk_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" name="judul_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['judul_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Bentuk</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bentuk" name="bentuk_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['bentuk_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
				  <label for="exampleInputEmail1">Tanggal</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal" name="tanggal_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tanggal_katalog']; }else{ echo date('Y-m-d'); } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tentang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tentang" name="tentang_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tentang_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tempat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat" name="tempat_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tempat_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input type="number" min="1945" max="9999" class="form-control" id="exampleInputEmail1" placeholder="Tahun" name="tahun_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tahun_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Sumber</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sumber" name="sumber_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['sumber_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Subjek</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subjek" name="subjek_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['subjek_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Singkatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Singkatan" name="singkatan_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['singkatan_katalog']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Lokasi</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lokasi" name="lokasi_katalog" value="<?php if($_GET['aksi']=="edit"){ echo $datads['lokasi_katalog']; } ?>" required/>
                </div>
              </div>
          </div>
		  </div>
		  <div class="col-md-5">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"> ABSTRAK</h3>
            </div>
              <div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Subjek</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subjek" name="subjek_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['subjek_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input type="number" min="1945" max="9999" class="form-control" id="exampleInputEmail1" placeholder="Tahun" name="tahun_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tahun_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Singkatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Singkatan" name="singkatan_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['singkatan_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Nomor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor" name="nomor_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['nomor_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Sumber</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sumber" name="sumber_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['sumber_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Jumlah</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah" name="jumlah_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['jumlah_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Bentuk</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bentuk" name="bentuk_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['bentuk_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Tentang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tentang" name="tentang_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['tentang_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Isi</label>
                  <textarea id="editor1" placeholder="Isi" name="isi_abstrak" rows="10" cols="80" required/><?php if($_GET['aksi']=="edit"){ echo $datads['isi_abstrak']; } ?></textarea>
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Dasar Hukum</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Dasar Hukum" name="dasar_hukum_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['dasar_hukum_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Diatur Tentang</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Diatur Tentang" name="diatur_tentang_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['diatur_tentang_abstrak']; } ?>" required/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Catatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Catatan" name="catatan_abstrak" value="<?php if($_GET['aksi']=="edit"){ echo $datads['catatan_abstrak']; } ?>" required/>
                </div>
              </div>
			  <div class="box-footer">
                <button type="submit" class="btn btn-danger">Simpan</button>
              </div>
		  </div>
          </div>
		  </form>
		</div>
	</div>
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
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
