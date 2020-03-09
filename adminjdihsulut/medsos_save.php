
<?php
include "koneksi.php";
				
				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO media_sosial VALUES(null, '$_POST[nama]', '$_POST[link]', '$_POST[icon]', '$_POST[create]', '$_POST[create]', NOW())";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE media_sosial SET nama_ms = '$_POST[nama]', link_ms = '$_POST[isi]', icon_ms = '$_POST[icon]', editby = '$_POST[create]' WHERE id_ms = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "medsos_data.php?sts=Media Sosial";
  </script>
		
		



