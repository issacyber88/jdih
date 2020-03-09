<?php
include "koneksi.php";

	$sql = "DELETE FROM nonperaturan WHERE id_nonperaturan = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "nonperaturan_data.php?sts=Non Peraturan";
  </script>
