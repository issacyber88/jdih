
<?php
include "koneksi.php";

				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO subsubsub_menu VALUES(null, '$_POST[nama]', '$_POST[link]', '$_POST[id3]', '$_POST[admin]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE subsubsub_menu SET nama_sssm = '$_POST[nama]', link_sssm = '$_POST[link]', linkadmin_sssm = '$_POST[admin]' WHERE id_sssm = '$_POST[id3]'";
					mysqli_query($con, $sqlgs);
				}

?>

  <script type="text/javascript">
	window.location.href = "subsubsubmenu_data.php?sts=Third Sub Menu&id2=<?php echo $_POST['id2']; ?>&id3=<?php echo $_POST['id3']; ?>";
  </script>
		
		



