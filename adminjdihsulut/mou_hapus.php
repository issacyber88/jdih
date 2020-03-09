<?php
include "koneksi.php";

	$sql = "DELETE FROM mou WHERE id_mou = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "mou_data.php?sts=MoU";
  </script>
