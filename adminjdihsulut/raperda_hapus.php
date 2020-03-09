<?php
include "koneksi.php";

	$sql = "DELETE FROM raperda WHERE id_rap = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "raperda_data.php?sts=RAPERDA";
  </script>
