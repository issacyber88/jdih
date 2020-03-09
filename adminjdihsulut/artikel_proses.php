
<?php
include "koneksi.php";

	if($_GET['cek']=="tayang"){
		$sqlgs = "UPDATE artikel SET status = '1' WHERE id_artikel = '$_GET[id]'";
		mysqli_query($con, $sqlgs);
	}else{
		$sqlgs = "UPDATE artikel SET status = '0' WHERE id_artikel = '$_GET[id]'";
		mysqli_query($con, $sqlgs);
	}
		
   
?>

  <script type="text/javascript">
	window.location.href = "artikel_data.php?sts=Artikel";
  </script>
		
		



