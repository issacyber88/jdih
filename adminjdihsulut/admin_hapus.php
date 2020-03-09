<?php
include "koneksi.php";

	$sql = "DELETE FROM admin WHERE id_admin = '$_GET[id]'";
	mysqli_query($con, $sql);
			
?>

<script type="text/javascript">
  window.location.href = "admin_data.php?sts=Admin";
  </script>
