<?php
include "koneksi.php";

	$sql = "DELETE FROM katalog WHERE id_kat = '$_GET[id]'";
	mysqli_query($con, $sql);
	
	$sqls = "DELETE FROM peraturan WHERE id_peraturan_cat = '$_GET[id]'";
	mysqli_query($con, $sqls);
	
?>

<script type="text/javascript">
  window.location.href = "katalog_data.php?sts=Katalog";
  </script>
