<?php
include "koneksi.php";

	$sql = "DELETE FROM visi_misi WHERE id_vm = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "visimisi_data.php?sts=Visi & Misi";
  </script>
