
<?php
include "koneksi.php";
				
			$sqlk = mysqli_query($con, "SELECT * FROM bagian WHERE nama_bag = '$_POST[bagian]'");
			$datak = mysqli_fetch_array($sqlk);	
				
				
				
				
				
					if($_POST['aksi']=="add")
					{
						$sqlgbh = mysqli_query($con, "SELECT count(id_admin) as cek FROM admin WHERE id_admin = '$_POST[username]'");
						$datagbh = mysqli_fetch_array($sqlgbh);
				
						if($datagbh['cek']==0){
							
						$sql = "INSERT INTO admin VALUES('$_POST[username]', '".md5($_POST['password'])."', '$_POST[nama]', '$_POST[tipe]', '$_POST[jabatan]', '$_POST[bagian]', '$datak[id_bag])";
						mysqli_query($con, $sql);	
						
							$hasilgf = mysqli_query($con, "SELECT * FROM tipe_akses ORDER BY id_ta ASC");
							while($datagf = mysqli_fetch_array($hasilgf)){
								$cek="";
								if(isset($_POST[$datagf['id_ta']])){
									$cek=1;
								}else{
									$cek=0;
								}
								$sqlk = "INSERT INTO admin_akses VALUES(null, '$_POST[username]', '$datagf[id_ta]', '$cek')";
								mysqli_query($con, $sqlk);
							}
						}else{
						?>
						
						  <script type="text/javascript">
							alert("Username sudah digunakan!"); 
						  </script>
						  <script type="text/javascript">
							window.location.href = "admin_tambah.php?sts=Admin";
						  </script>
						
						<?php
						}
						
					}elseif($_POST['aksi']=="edit"){
						
						$sqlgbh = mysqli_query($con, "SELECT count(id_admin) as cek FROM admin WHERE id_admin = '$_POST[username]' AND id_admin <> '$_POST[username]'");
						$datagbh = mysqli_fetch_array($sqlgbh);
				
						if($datagbh['cek']==0){
							
						$sqlgs = "UPDATE admin SET id_admin = '$_POST[username]', nama_lengkap = '$_POST[nama]', password = '".md5($_POST['password'])."', jabatan = '$_POST[jabatan]', tipe = '$_POST[tipe]', bagian = '$_POST[bagian]', idp_bb = '$datak[id_bag]' WHERE id_admin = '$_POST[id]'";
						mysqli_query($con, $sqlgs);
						
							$hasilgf = mysqli_query($con, "SELECT * FROM tipe_akses ORDER BY id_ta ASC");
							while($datagf = mysqli_fetch_array($hasilgf)){
								$cek="";
								if(isset($_POST[$datagf['id_ta']])){
									$cek=1;
								}else{
									$cek=0;
								}
								$sqlgsg = "UPDATE admin_akses SET akses_aa = '$cek' WHERE idp_pgn = '$_POST[id]' AND idp_ta = '$datagf[id_ta]'";
								mysqli_query($con, $sqlgsg);
							}
						}else{
						?>
						
						  <script type="text/javascript">
							alert("Username sudah digunakan!"); 
						  </script>
						  <script type="text/javascript">
							window.location.href = "admin_tambah.php?sts=Admin";
						  </script>
						
						<?php
						}
					}
				
				
				
   
?>

  <script type="text/javascript">
    alert("Berhasil disimpan!"); 
  </script>
  <script type="text/javascript">
	window.location.href = "admin_data.php?sts=Admin";
  </script>
		
		



