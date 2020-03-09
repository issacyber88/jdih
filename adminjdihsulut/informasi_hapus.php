<?php
include "koneksi.php";

	$sql = "DELETE FROM informasi WHERE id_inf = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "informasi_data.php?sts=Informasi";
  </script>
