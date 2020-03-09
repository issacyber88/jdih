
<?php
include "koneksi.php";

				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO menu VALUES(null, '$_POST[nama]', '$_POST[submenu]', '$_POST[link]', '$_POST[admin]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE menu SET nama_men = '$_POST[nama]', submenu_men = '$_POST[submenu]', link_men = '$_POST[link]', linkadmin_men = '$_POST[admin]' WHERE id_men = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}

?>

  <script type="text/javascript">
	window.location.href = "menu_data.php?sts=Menu";
  </script>
		
		



