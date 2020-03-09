
<?php
include "koneksi.php";
				
				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO content VALUES(null, '$_POST[nama]', '$_POST[isi]', '$_POST[urutan]', '$_POST[create]', '$_POST[create]', NOW(), '1')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE content SET nama_content = '$_POST[nama]', isi_content = '$_POST[isi]', urutan = '$_POST[urutan]', edit_by = '$_POST[create]', tgl = NOW() WHERE id_content = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "konten_data.php?sts=Konten";
  </script>
		
		



