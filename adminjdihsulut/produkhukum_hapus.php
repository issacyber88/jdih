<?php
include "koneksi.php";

	$sql = "DELETE FROM produk_hukum WHERE id_ph = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "produkhukum_data.php?sts=Produk Hukum&id=<?php echo $_GET['idp']; ?>";
  </script>
