
<?php
include "koneksi.php";

				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO subsub_menu VALUES(null, '$_POST[nama]', '$_POST[submenu]', '$_POST[link]', '$_POST[id2]', '$_POST[admin]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE subsub_menu SET nama_ssm = '$_POST[nama]', submenu_ssm = '$_POST[submenu]', link_ssm = '$_POST[link]', linkadmin_ssm = '$_POST[admin]' WHERE id_ssm = '$_POST[id3]'";
					mysqli_query($con, $sqlgs);
				}

?>

  <script type="text/javascript">
	window.location.href = "subsubmenu_data.php?sts=Second Sub Menu&id2=<?php echo $_POST['id2']; ?>";
  </script>
		
		



