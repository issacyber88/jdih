<?php
include "koneksi.php";

	$sql = "DELETE FROM link_terkait WHERE id_lt = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "linkterkait_data.php?sts=Link Terkait";
  </script>
