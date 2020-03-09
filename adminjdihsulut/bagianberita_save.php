
<?php
include "koneksi.php";


				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO bagian_berita VALUES(null, '$_POST[nama]', '$_POST[create]', '$_POST[create]', NOW())";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE bagian_berita SET nama_bb = '$_POST[nama]', editby = '$_POST[create]' WHERE id_bb = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				

   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "bagianberita_data.php?sts=Berita";
  </script>
		
		



