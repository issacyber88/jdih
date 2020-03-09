<?php
include "koneksi.php";

	$sql = "DELETE FROM sub_menu WHERE id_sm = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "submenu_data.php?sts=First Sub Menu&id=<?php echo $_POST['id']; ?>";
  </script>
