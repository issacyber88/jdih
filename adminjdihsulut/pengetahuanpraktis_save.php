
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
				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO pengetahuan_praktis VALUES(null, '$_POST[judul]', '$_POST[isi]', '$hari', '$_POST[tanggal]', NOW(), '1', '$_POST[create]', '$_POST[create]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE pengetahuan_praktis SET judul = '$_POST[judul]', isi_pengetahuan_praktis = '$_POST[isi]', hari = '$hari', edit_by = '$_POST[create]', tanggal = '$_POST[tanggal]' WHERE id_pengetahuan_praktis = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "pengetahuanpraktis_data.php?sts=Pengetahuan Praktis";
  </script>
		
		



