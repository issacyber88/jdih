
<?php
include "koneksi.php";

$namafolder="file/peraturan/"; //tempat menyimpan file
$foldersimpan="../file/peraturan/"; //tempat menyimpan file

	$jenis_gambar=$_FILES['nama_file']['type'];
	
	if (!empty($_FILES["nama_file"]["tmp_name"]))
	{
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);	
		$gambarsimpan = $foldersimpan . basename($_FILES['nama_file']['name']);
		$temp = explode(".", $_FILES["nama_file"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		//move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $newfilename);
		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarsimpan)) {

				
				if($_POST['aksi']=="add")
				{
					$sql = "INSERT INTO peraturan VALUES(null, '$_POST[idp]', '$_POST[tglposting]', '$_POST[tahun]', '$_POST[nomor]', '$_POST[subjek]', '$gambar', '$_POST[create]', '$_POST[create]', '1', '', '', '', '$_POST[tajuk_katalog]', '$_POST[judul_katalog]', '$_POST[bentuk_katalog]', '$_POST[tanggal_katalog]', '$_POST[tentang_katalog]', '$_POST[tempat_katalog]', '$_POST[tahun_katalog]', '$_POST[sumber_katalog]', '$_POST[subjek_katalog]', '$_POST[singkatan_katalog]', '$_POST[lokasi_katalog]', '$_POST[subjek_abstrak]', '$_POST[tahun_abstrak]', '$_POST[singkatan_abstrak]', '$_POST[nomor_abstrak]', '$_POST[sumber_abstrak]', '$_POST[jumlah_abstrak]', '$_POST[bentuk_abstrak]', '$_POST[tentang_abstrak]', '$_POST[isi_abstrak]', '$_POST[dasar_hukum_abstrak]', '$_POST[diatur_tentang_abstrak]', '$_POST[catatan_abstrak]')";
					mysqli_query($con, $sql);	
				}elseif($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE peraturan SET 
					id_peraturan_cat = '$_POST[idp]', 
					tgl_posting = '$_POST[tglposting]', 
					tahun = '$_POST[tahun]', 
					nomor = '$_POST[nomor]', 
					subjek = '$_POST[subjek]', 
					file = '$gambar', 
					edit_by = '$_POST[create]', 
					count = '1', 
					status = '', 
					peraturan_status = '', 
					riwayat_status = '', 
					tajuk_katalog = '$_POST[tajuk_katalog]', 
					judul_katalog = '$_POST[judul_katalog]',
					bentuk_katalog = '$_POST[bentuk_katalog]',
					tanggal_katalog = '$_POST[tanggal_katalog]',
					tentang_katalog = '$_POST[tentang_katalog]',
					tempat_katalog = '$_POST[tempat_katalog]',					
					tahun_katalog = '$_POST[tahun_katalog]', 
					sumber_katalog = '$_POST[sumber_katalog]', 
					subjek_katalog = '$_POST[subjek_katalog]', 
					singkatan_katalog = '$_POST[singkatan_katalog]', 
					lokasi_katalog = '$_POST[lokasi_katalog]', 
					subjek_abstrak = '$_POST[subjek_abstrak]', 
					tahun_abstrak = '$_POST[tahun_abstrak]', 
					singkatan_abstrak = '$_POST[singkatan_abstrak]', 
					nomor_abstrak = '$_POST[nomor_abstrak]', 
					sumber_abstrak = '$_POST[sumber_abstrak]', 
					jumlah_abstrak = '$_POST[jumlah_abstrak]', 
					bentuk_abstrak = '$_POST[bentuk_abstrak]', 
					tentang_abstrak = '$_POST[tentang_abstrak]', 
					isi_abstrak = '$_POST[isi_abstrak]', 
					dasar_hukum_abstrak = '$_POST[dasar_hukum_abstrak]', 
					diatur_tentang_abstrak = '$_POST[diatur_tentang_abstrak]', 
					catatan_abstrak = '$_POST[catatan_abstrak]'
					WHERE id_peraturan = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
				
		}
	}else{
				if($_POST['aksi']=="edit"){
					$sqlgs = "UPDATE peraturan SET 
					id_peraturan_cat = '$_POST[idp]', 
					tgl_posting = '$_POST[tglposting]', 
					tahun = '$_POST[tahun]', 
					nomor = '$_POST[nomor]', 
					subjek = '$_POST[subjek]', 
					edit_by = '$_POST[create]', 
					count = '1', 
					status = '', 
					peraturan_status = '', 
					riwayat_status = '', 
					tajuk_katalog = '$_POST[tajuk_katalog]', 
					judul_katalog = '$_POST[judul_katalog]',
					bentuk_katalog = '$_POST[bentuk_katalog]',
					tanggal_katalog = '$_POST[tanggal_katalog]',
					tentang_katalog = '$_POST[tentang_katalog]',
					tempat_katalog = '$_POST[tempat_katalog]',		
					tahun_katalog = '$_POST[tahun_katalog]', 
					sumber_katalog = '$_POST[sumber_katalog]', 
					subjek_katalog = '$_POST[subjek_katalog]', 
					singkatan_katalog = '$_POST[singkatan_katalog]', 
					lokasi_katalog = '$_POST[lokasi_katalog]', 
					subjek_abstrak = '$_POST[subjek_abstrak]', 
					tahun_abstrak = '$_POST[tahun_abstrak]', 
					singkatan_abstrak = '$_POST[singkatan_abstrak]', 
					nomor_abstrak = '$_POST[nomor_abstrak]', 
					sumber_abstrak = '$_POST[sumber_abstrak]', 
					jumlah_abstrak = '$_POST[jumlah_abstrak]', 
					bentuk_abstrak = '$_POST[bentuk_abstrak]', 
					tentang_abstrak = '$_POST[tentang_abstrak]', 
					isi_abstrak = '$_POST[isi_abstrak]', 
					dasar_hukum_abstrak = '$_POST[dasar_hukum_abstrak]', 
					diatur_tentang_abstrak = '$_POST[diatur_tentang_abstrak]', 
					catatan_abstrak = '$_POST[catatan_abstrak]'
					WHERE id_peraturan = '$_POST[id]'";
					mysqli_query($con, $sqlgs);
				}
	}
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "peraturan_data.php?sts=Peraturan&id=<?php echo $_POST['idp']; ?>";
  </script>
		
		



