<?php
include "koneksi.php";

	$sql = "DELETE FROM content WHERE id_content = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "konten_data.php?sts=Konten";
  </script>
