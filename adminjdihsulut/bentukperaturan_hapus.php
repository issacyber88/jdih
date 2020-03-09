<?php
include "koneksi.php";

	$sql = "DELETE FROM peraturan_cat WHERE id_peraturan_cat = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "bentukperaturan_data.php?sts=Bentuk Peraturan";
  </script>
