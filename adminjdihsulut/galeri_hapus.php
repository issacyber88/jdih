<?php
include "koneksi.php";

	$sql = "DELETE FROM galeri WHERE id_gal = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "galeri_data.php?sts=Galeri";
  </script>
