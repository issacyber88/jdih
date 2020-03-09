<?php
session_start();
include "koneksi.php";

$session = $_SESSION['login88'];
//if already login
if($session == 1) //tanda @ untuk penanganan kode jika error NOTICE muncul
{
	?>
			<script type="text/javascript">
				window.location.href = "index.php?sts=Beranda";
			</script>
	<?php
}
else
{
	if((!isset($_POST['username'])) || (!isset($_POST['password'])))
	{
		?>
			<script type="text/javascript">
				window.location.href = "loginform.php";
			</script>
			<?php
	}
	
	$username = mysqli_escape_string($con, $_POST['username']);
	$password = mysqli_escape_string($con, md5($_POST['password']));
	
	$sqlx = "SELECT count(id_admin) as cek FROM admin WHERE password = '$password' AND id_admin = '$username'";
	$hasilx = mysqli_query($con, $sqlx);
	$datax = mysqli_fetch_array($hasilx);
	
	//kalau ada yang satu baris hasil, berarti valid
	if($datax['cek']!=0) //is_object sama kyk mysqli_fetch_array / mysql_fetch_object
	{
			$sqlxx = "SELECT * FROM admin WHERE password = '$password' AND id_admin = '$username'";
			$hasilxx = mysqli_query($con, $sqlxx);
			$dataxx = mysqli_fetch_array($hasilxx);
		
			$_SESSION['idq'] = $dataxx['id_admin'];
			$_SESSION['login88'] = 1;
			$_SESSION['passq'] = $password;	
			$_SESSION['userq'] = $username;				
			?>
			<script type="text/javascript">
				window.location.href = "index.php?sts=Beranda";
			</script>
			<?php
		
	}
	//kalau tidak kembali ke login
	else
	{
		?>
			<script type="text/javascript">
				window.alert("Username/Password Salah!");		
			</script>
			<script type="text/javascript">
				window.location.href = "loginform.php";
			</script>
		<?php
	}
}
?>


	
