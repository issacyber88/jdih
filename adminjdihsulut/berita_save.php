
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

$namafolder="images/berita/"; //tempat menyimpan file
$foldersimpan="../images/berita/"; //tempat menyimpan file
	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO berita VALUES(null, '$_POST[judul]', '$_POST[isi]', '$hari', '$_POST[tanggal]', NOW(), '1', '$_POST[create]', '$_POST[create]', '$gambar', '$_POST[idp]', '0', '$_POST[slideshow]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE berita SET judul = '$_POST[judul]', isi_berita = '$_POST[isi]', hari = '$hari', tanggal = '$_POST[tanggal]', jam = NOW(), edit_by = '$_POST[create]', slideshow = '$_POST[slideshow]', gambar = '$gambar' WHERE id_berita = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE berita SET judul = '$_POST[judul]', isi_berita = '$_POST[isi]', hari = '$hari', tanggal = '$_POST[tanggal]', jam = NOW(), edit_by = '$_POST[create]', slideshow = '$_POST[slideshow]' WHERE id_berita = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "berita_data.php?sts=Berita&id=<?php echo $_POST['idp']; ?>";
  </script>
		
		



