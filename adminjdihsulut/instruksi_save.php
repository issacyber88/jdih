
<?php
include "koneksi.php";

function filesize_formatted($file)
{
    $bytes = filesize($file);

    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
    }
}

$namafolder="file/instruksi/"; //tempat menyimpan file
$foldersimpan="../file/instruksi/"; //tempat menyimpan file
	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				$size = filesize_formatted($gambar);
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO instruksi VALUES(null, '$_POST[tentang]', '$_POST[ket]', '$gambar', '$size', '0', '$_POST[create]', '$_POST[create]', NOW(), NOW())";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE instruksi SET tentang_ins = '$_POST[tentang]', keterangan_ins = '$_POST[ket]', size_ins = '$size', editby_ins = '$_POST[create]', date_editby_ins = NOW(), file_ins = '$gambar' WHERE id_ins = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE instruksi SET tentang_ins = '$_POST[tentang]', keterangan_ins = '$_POST[ket]', editby_ins = '$_POST[create]', date_editby_ins = NOW() WHERE id_ins = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "instruksi_data.php?sts=Instruksi Gubernur";
  </script>
		
		



