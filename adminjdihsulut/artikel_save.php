
<?php
include "koneksi.php";

$cek=date("N", strtotime($_POST['tanggal']));

if($cek==1){
	$hari="Senin";
}elseif($cek==2){
	$hari="Selasa";
}elseif($cek==3){
	$hari="Rabu";
}elseif($cek==4){
	$hari="Kamis";
}elseif($cek==5){
	$hari="Jumat";
}elseif($cek==6){
	$hari="Sabtu";
}elseif($cek==7){
	$hari="Minggu";
}

$namafolder="images/artikel/"; //tempat menyimpan file
$foldersimpan="../images/artikel/";

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);	
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO artikel VALUES(null, '$_POST[judul]', '$_POST[isi]', '$hari', '$_POST[tanggal]', NOW(), '1', '$_POST[create]', '$_POST[create]', '$gambar', '0')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE artikel SET judul = '$_POST[judul]', isi_artikel = '$_POST[isi]', hari = '$hari', tanggal = '$_POST[tanggal]', jam = NOW(), edit_by = '$_POST[create]', gambar = '$gambar' WHERE id_artikel = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE artikel SET judul = '$_POST[judul]', isi_artikel = '$_POST[isi]', hari = '$hari', tanggal = '$_POST[tanggal]', jam = NOW(), edit_by = '$_POST[create]' WHERE id_artikel = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "artikel_data.php?sts=artikel";
  </script>
		
		



