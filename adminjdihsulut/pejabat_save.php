
<?php
include "koneksi.php";

$namafolder="images/pejabat/"; //tempat menyimpan file
$foldersimpan="../images/pejabat/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO pejabat VALUES(null, '$_POST[nama]', '$_POST[jabatan]', '$_POST[pangkat]', '$_POST[golongan]', '$gambar', '$_POST[ket]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE pejabat SET nama_pjb = '$_POST[nama]', jabatan_pjb = '$_POST[jabatan]', pangkat_pjb = '$_POST[pangkat]', golongan_pjb = '$_POST[golongan]', ket_pjb = '$_POST[ket]', foto_pjb = '$gambar' WHERE id_pjb = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE pejabat SET nama_pjb = '$_POST[nama]', jabatan_pjb = '$_POST[jabatan]', pangkat_pjb = '$_POST[pangkat]', golongan_pjb = '$_POST[golongan]', ket_pjb = '$_POST[ket]' WHERE id_pjb = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "pejabat_data.php?sts=pejabat";
  </script>
		
		



