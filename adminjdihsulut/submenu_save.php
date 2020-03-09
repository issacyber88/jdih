
<?php
include "koneksi.php";

				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO sub_menu VALUES(null, '$_POST[nama]', '$_POST[submenu]', '$_POST[link]', '$_POST[id]', '$_POST[admin]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE sub_menu SET nama_sm = '$_POST[nama]', submenu_sm = '$_POST[submenu]', link_sm = '$_POST[link]', linkadmin_sm = '$_POST[admin]' WHERE id_sm = '$_POST[id2]'";
					mysqli_query($con, $sqlgs);
				}

?>
  <script type="text/javascript">
	window.location.href = "submenu_data.php?sts=First Sub Menu&id=<?php echo $_POST['id']; ?>";
  </script>
		
		



