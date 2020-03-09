<?php
include "koneksi.php";

	$sql = "DELETE FROM tautan_terkait WHERE id_link = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "tautanterkait_data.php?sts=Tautan Terkait";
  </script>
