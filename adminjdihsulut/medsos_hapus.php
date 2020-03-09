<?php
include "koneksi.php";

	$sql = "DELETE FROM media_sosial WHERE id_ms = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "medsos_data.php?sts=Media Sosial";
  </script>
