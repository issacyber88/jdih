
<?php
include "koneksi.php";

	if($_GET['cek']=="tayang"){
		$sqlgs = "UPDATE berita SET status = '1' WHERE id_berita = '$_GET[id]'";
		mysqli_query($con, $sqlgs);
	}else{
		$sqlgs = "UPDATE berita SET status = '0' WHERE id_berita = '$_GET[id]'";
		mysqli_query($con, $sqlgs);
	}
		
   
?>

  <script type="text/javascript">
	window.location.href = "berita_data.php?sts=Berita&id=<?php echo $_GET['idp']; ?>";
  </script>
		
		



