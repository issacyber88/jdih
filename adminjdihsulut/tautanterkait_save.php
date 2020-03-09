
<?php
include "koneksi.php";


				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO link VALUES(null, '$_POST[nama]', '$_POST[url]', '$_POST[create]', '$_POST[create]', NOW())";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE link SET nama_link = '$_POST[nama]', url_link = '$_POST[url]', editby = '$_POST[create]' WHERE id_link = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}

   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "tautanterkait_data.php?sts=Tautan Terkait";
  </script>
		
		



