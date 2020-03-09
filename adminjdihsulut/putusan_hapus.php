<?php
include "koneksi.php";

	$sql = "DELETE FROM putusan WHERE id_put = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "putusan_data.php?sts=Putusan Peradilan";
  </script>
