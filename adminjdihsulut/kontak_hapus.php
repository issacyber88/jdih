<?php
include "koneksi.php";

	$sql = "DELETE FROM contact WHERE id_contact = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "kontak_data.php?sts=Kontak";
  </script>
