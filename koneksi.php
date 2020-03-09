<?php

$x=0;
if($x==1){
	$con = mysqli_connect('localhost','c11_jdih','8GT@yXd9p');
	if(!$con){
	die('Could not connect :' .mysqli_error());
	}
	mysqli_select_db($con, 'c11_jdih') or die (mysqli_error());
}elseif($x==0){
	$con = mysqli_connect('localhost','root','');
	if(!$con){
	die('Could not connect :' .mysqli_error());
	}
	mysqli_select_db($con, 'jdih') or die (mysqli_error());
}
?>
