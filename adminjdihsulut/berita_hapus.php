<?php
include "koneksi.php";

	$sql = "DELETE FROM berita WHERE id_berita = '$_GET[id]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "berita_data.php?sts=Berita&id=<?php echo $_GET['id']; ?>";
  </script>
