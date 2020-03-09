
<?php
include "koneksi.php";
				
				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO informasi VALUES(null, '$_POST[nama]', '$_POST[isi]', NOW(), '$_POST[create]', '$_POST[create]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE informasi SET isi_inf = '$_POST[isi]', editby = '$_POST[create]' WHERE id_inf = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "informasi_data.php?sts=Informasi";
  </script>
		
		



