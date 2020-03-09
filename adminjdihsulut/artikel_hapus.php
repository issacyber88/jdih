<?php
include "koneksi.php";

	$sql = "DELETE FROM artikel WHERE id_artikel = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "artikel_data.php?sts=Artikel";
  </script>
