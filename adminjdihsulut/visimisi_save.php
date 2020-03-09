
<?php
include "koneksi.php";

				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO visi_misi VALUES(null, '$_POST[nomor]', '$_POST[tipe]', '$_POST[isi]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE visi_misi SET nomor_vm = '$_POST[nomor]', tipe_vm = '$_POST[tipe]', isi_vm = '$_POST[isi]' WHERE id_vm = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}

?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "visimisi_data.php?sts=Visi & Misi";
  </script>
		
		



