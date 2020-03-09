<?php
include "koneksi.php";

	$sql = "DELETE FROM subsubsub_menu WHERE id_sssm = '$_GET[id4]'";
	mysqli_query($con, $sql);
	
?>

<script type="text/javascript">
  window.location.href = "subsubsubmenu_data.php?sts=Third Sub Menu&id2=<?php echo $_GET['id2']; ?>&id3=<?php echo $_GET['id3']; ?>";
  </script>
