
<?php
function redirect($lokasi)
{
	header("Location: $lokasi");
	exit();
}
//check login menggunakan session
function is_login()
{
	$returnValue = false;
	if(isset($_SESSION['loginq']))
	{
		$returnValue = $_SESSION['loginq'];
	}
	return $returnValue;
}
?>
