<?php
include "koneksi.php";

	$sqlgs = "UPDATE contact SET status = 'Selesai' WHERE id_contact = '$_GET[id]'";
	mysqli_query($con, $sqlgs);
			
?>

<script type="text/javascript">
  window.location.href = "kontak_data.php?sts=Kontak";
  </script>
