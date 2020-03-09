<?php
include "koneksi.php";

	$sql = "DELETE FROM pejabat WHERE id_pjb = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "pejabat_data.php?sts=Pejabat";
  </script>
