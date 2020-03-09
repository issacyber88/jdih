<?php
include "koneksi.php";

	$sql = "DELETE FROM instruksi WHERE id_ins = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "instruksi_data.php?sts=Instruksi Gubernur";
  </script>
