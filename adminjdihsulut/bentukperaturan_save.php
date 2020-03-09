
<?php
include "koneksi.php";
		
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO peraturan_cat VALUES(null, '$_POST[parent]', '$_POST[bentuk]', '$_POST[level]', '$_POST[urutan]', '$_POST[link]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE peraturan_cat SET 
					id_peraturan_cat_parent = '$_POST[parent]', 
					bentuk = '$_POST[bentuk]', 
					level = '$_POST[level]',
					menu_link = '$_POST[link]',
					urutan = '$_POST[urutan]'
					WHERE id_peraturan_cat = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}

?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "bentukperaturan_data.php?sts=Bentuk Peraturan";
  </script>
		
		



