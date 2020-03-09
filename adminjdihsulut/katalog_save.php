
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

$namafolder="file/katalog/"; //tempat menyimpan file
$foldersimpan="../file/katalog/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				$size = filesize_formatted($gambar);
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO katalog VALUES(null, '$_POST[nama]', '$size', '$gambar', '0', '$_POST[kate]', '$_POST[create]', '$_POST[create]', NOW(), NOW())";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE katalog SET nama_kat = '$_POST[nama]', size_kat = '$size', editby_kat = '$_POST[create]', date_editby_kat = NOW(), file_kat = '$gambar' WHERE id_kat = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE katalog SET nama_kat = '$_POST[nama]', editby_kat = '$_POST[create]', date_editby_kat = NOW() WHERE id_kat = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "katalog_data.php?sts=Katalog";
  </script>
		
		



