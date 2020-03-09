
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

$namafolder="file/putusan/"; //tempat menyimpan file
$foldersimpan="../file/putusan/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				$size = filesize_formatted($gambar);
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO putusan VALUES(null, '$_POST[tahungugat]', '$_POST[noperkara]', '$_POST[objekperkara]', '$_POST[penggugat]', '$_POST[tergugat]', '$_POST[tuntutan]', '$_POST[tahapan]', '$_POST[keterangan]', '$gambar', '$size', '0', '$_POST[create]', '$_POST[create]', NOW(), NOW(), '$_POST[bagian]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE putusan SET tahungugat_put = '$_POST[tahungugat]', noperkara_put = '$_POST[noperkara]', objekperkara_put = '$_POST[objekperkara]', penggugat_put = '$_POST[penggugat]', tergugat_put = '$_POST[tergugat]', tuntutan_put = '$_POST[tuntutan]', tahapan_put = '$_POST[tahapan]', keterangan_put = '$_POST[keterangan]', size_put = '$size', editby_put = '$_POST[create]', date_editby_put = NOW(), file_put = '$gambar' WHERE id_put = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE putusan SET tahungugat_put = '$_POST[tahungugat]', noperkara_put = '$_POST[noperkara]', objekperkara_put = '$_POST[objekperkara]', penggugat_put = '$_POST[penggugat]', tergugat_put = '$_POST[tergugat]', tuntutan_put = '$_POST[tuntutan]', tahapan_put = '$_POST[tahapan]', keterangan_put = '$_POST[keterangan]', editby_put = '$_POST[create]', date_editby_put = NOW() WHERE id_put = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "putusan_data.php?sts=Putusan Peradilan";
  </script>
		
		



