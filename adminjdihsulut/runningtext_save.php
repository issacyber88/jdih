
<?php
include "koneksi.php";
				
				
			
					$sqlgs = "UPDATE informasi SET isi_inf = '$_POST[isi]', editby = '$_POST[create]' WHERE nama_inf = 'running text'";
					mysqli_query($con, $sqlgs);
		
				
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "runningtext_data.php?sts=Running Text";
  </script>
		
		



