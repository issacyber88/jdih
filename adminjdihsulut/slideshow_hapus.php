<?php
include "koneksi.php";

	$sql = "DELETE FROM slideshow WHERE id_ss = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "slideshow_data.php?sts=Slideshow";
  </script>
