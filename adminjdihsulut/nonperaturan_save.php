
<?php
include "koneksi.php";

$namafolder="file/nonperaturan/"; //tempat menyimpan file
$foldersimpan="../file/nonperaturan/"; //tempat menyimpan file
	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO nonperaturan VALUES(null, '$_POST[judul]', '$gambar', '', '$_POST[create]', '$_POST[create]', '1', '$_POST[tglposting]', '$_POST[col_number_katalog]', '$_POST[pengarang_katalog]', '$_POST[judul_katalog]', '$_POST[kota_katalog]', '$_POST[penerbit_katalog]', '$_POST[tahun_katalog]', '$_POST[jilid_katalog]', '$_POST[jumlah_katalog]', '$_POST[tebal_katalog]', '$_POST[subjek_pengarang_katalog]', '$_POST[no_induk_katalog]', '$_POST[status_katalog]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE nonperaturan SET 
					judul = '$_POST[judul]', 
					file = '$gambar', 
					thumb = '', 
					add_by = '$_POST[create]', 
					edit_by = '$_POST[create]', 
					count = '1', 
					tgl_posting = '$_POST[tglposting]', 
					col_number_katalog = '$_POST[col_number_katalog]', 
					pengarang_katalog = '$_POST[pengarang_katalog]', 
					judul_katalog = '$_POST[judul_katalog]', 
					kota_katalog = '$_POST[kota_katalog]', 
					penerbit_katalog = '$_POST[penerbit_katalog]', 
					tahun_katalog = '$_POST[tahun_katalog]', 
					jilid_katalog = '$_POST[jilid_katalog]', 
					jumlah_katalog = '$_POST[jumlah_katalog]', 
					tebal_katalog = '$_POST[tebal_katalog]', 
					subjek_pengarang_katalog = '$_POST[subjek_pengarang_katalog]', 
					no_induk_katalog = '$_POST[no_induk_katalog]', 
					status_katalog = '$_POST[status_katalog]'
					WHERE id_nonperaturan = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE nonperaturan SET 
					judul = '$_POST[judul]', 
					thumb = '', 
					add_by = '$_POST[create]', 
					edit_by = '$_POST[create]', 
					count = '1', 
					tgl_posting = '$_POST[tglposting]', 
					col_number_katalog = '$_POST[col_number_katalog]', 
					pengarang_katalog = '$_POST[pengarang_katalog]', 
					judul_katalog = '$_POST[judul_katalog]', 
					kota_katalog = '$_POST[kota_katalog]', 
					penerbit_katalog = '$_POST[penerbit_katalog]', 
					tahun_katalog = '$_POST[tahun_katalog]', 
					jilid_katalog = '$_POST[jilid_katalog]', 
					jumlah_katalog = '$_POST[jumlah_katalog]', 
					tebal_katalog = '$_POST[tebal_katalog]', 
					subjek_pengarang_katalog = '$_POST[subjek_pengarang_katalog]', 
					no_induk_katalog = '$_POST[no_induk_katalog]', 
					status_katalog = '$_POST[status_katalog]'
					WHERE id_nonperaturan = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "nonperaturan_data.php?sts=Non Peraturan";
  </script>
		
		



