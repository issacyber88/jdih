<?php
include "koneksi.php";

	$sql = "DELETE FROM pengetahuan_praktis WHERE id_pengetahuan_praktis = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "pengetahuanpraktis_data.php?sts=Pengetahuan Praktis";
  </script>
