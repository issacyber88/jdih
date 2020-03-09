
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

$namafolder="file/produkhukum/"; //tempat menyimpan file
$foldersimpan="../file/produkhukum/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		$temp = explode(".", $_FILES["nama_file"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		//move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $newfilename);
			
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan . $newfilename)) {			

				$size = filesize_formatted($gambar);
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO produk_hukum VALUES(null, '$_POST[idp]', '$_POST[noperaturan]', '$_POST[tentang]', '$_POST[tglditetapkan]', '$_POST[tgldiundangkan]', '$_POST[noldtld]', '$_POST[keterangan]', '$size', '$gambar', '0', '$_POST[create]', '$_POST[create]', NOW(), NOW(), '$_POST[status]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE produk_hukum SET no_peraturan_ph = '$_POST[noperaturan]', tentang_ph = '$_POST[tentang]', tgl_ditetapkan_ph = '$_POST[tglditetapkan]', tgl_diundangkan_ph = '$_POST[tgldiundangkan]', no_ldtld_ph = '$_POST[noldtld]', keterangan_ph = '$_POST[keterangan]', size_ph = '$size', editby_ph = '$_POST[create]', date_editby_ph = NOW(), file_ph = '$gambar', status_ph = '$_POST[status]' WHERE id_ph = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE produk_hukum SET no_peraturan_ph = '$_POST[noperaturan]', tentang_ph = '$_POST[tentang]', tgl_ditetapkan_ph = '$_POST[tglditetapkan]', tgl_diundangkan_ph = '$_POST[tgldiundangkan]', no_ldtld_ph = '$_POST[noldtld]', keterangan_ph = '$_POST[keterangan]', editby_ph = '$_POST[create]', date_editby_ph = NOW(), status_ph = '$_POST[status]' WHERE id_ph = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "produkhukum_data.php?sts=Produk Hukum&id=<?php echo $_POST['idp']; ?>";
  </script>
		
		



