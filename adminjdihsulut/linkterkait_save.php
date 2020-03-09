
<?php
include "koneksi.php";

$namafolder="images/link/"; //tempat menyimpan file
$foldersimpan="../images/link/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO link_terkait VALUES(null, '$_POST[nama]', '$gambar', '$_POST[url]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE link_terkait SET nama_lt = '$_POST[nama]', gambar_lt = '$gambar', url_lt = '$_POST[url]' WHERE id_lt = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE link_terkait SET nama_lt = '$_POST[nama]', url_lt = '$_POST[url]' WHERE id_lt = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "linkterkait_data.php?sts=Link Terkait";
  </script>
		
		



