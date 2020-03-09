<?php
include "koneksi.php";

	$sql = "DELETE FROM peraturan WHERE id_peraturan = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "peraturan_data.php?sts=Peraturan&id=<?php echo $_GET['idp']; ?>";
  </script>
