
<?php
include "koneksi.php";

$namafolder="images/slideshow/"; //tempat menyimpan file
$foldersimpan="../images/slideshow/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO slideshow VALUES(null, '$_POST[judul1]', '$_POST[judul2]', '$_POST[ket]', '$gambar', '$_POST[tombol]', '$_POST[link]', '$_POST[create]', '$_POST[create]', NOW())";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE slideshow SET judul1_ss = '$_POST[judul1]', judul2_ss = '$_POST[judul2]', ket_ss = '$_POST[ket]', editby = '$_POST[create]', tombol_ss = '$_POST[tombol]', link_ss = '$_POST[link]', gambar_ss = '$gambar' WHERE id_ss = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE slideshow SET judul1_ss = '$_POST[judul1]', judul2_ss = '$_POST[judul2]', ket_ss = '$_POST[ket]', editby = '$_POST[create]', tombol_ss = '$_POST[tombol]', link_ss = '$_POST[link]' WHERE id_ss = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "slideshow_data.php?sts=Slideshow";
  </script>
		
		



