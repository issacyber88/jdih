<?php
include "koneksi.php";

	$sql = "DELETE FROM bagian_berita WHERE id_bb = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "bagianberita_data.php?sts=Berita";
  </script>
