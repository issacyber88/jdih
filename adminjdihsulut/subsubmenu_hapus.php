<?php
include "koneksi.php";

	$sql = "DELETE FROM subsub_menu WHERE id_ssm = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "subsubmenu_data.php?sts=Second Sub Menu&id2=<?php echo $_POST['id2']; ?>";
  </script>
