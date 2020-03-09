
<?php
include "koneksi.php";

$namafolder="images/galeri/"; //tempat menyimpan file
$foldersimpan="../images/galeri/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO galeri VALUES(null, '$_POST[nama]', '$gambar', '$_POST[create]', '$_POST[create]', NOW(), '$_POST[bagian]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE galeri SET nama_gal = '$_POST[nama]', gambar_gal = '$gambar', editby = '$_POST[create]', tanggal = NOW() WHERE id_gal = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE galeri SET nama_gal = '$_POST[nama]', editby = '$_POST[create]', tanggal = NOW() WHERE id_gal = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "galeri_data.php?sts=Galeri";
  </script>
		
		



