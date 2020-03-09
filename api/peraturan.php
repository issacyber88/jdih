<?php
include_once('../koneksi.php');
$query = "SELECT * FROM peraturan ORDER BY id_peraturan DESC";
$result = mysqli_query($con,$query);
$array_data = array();
while($baris = mysqli_fetch_assoc($result))
{
  $array_data[]=$baris;
}
header('Content-Type: application/json');
echo json_encode($array_data);
?>