<?php
include "koneksi.php";

	$sql = "DELETE FROM menu WHERE id_men = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "menu_data.php?sts=Menu";
  </script>
