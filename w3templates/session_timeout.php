<?php 
session_start();
$_SESSION['if']=time();
if($_SESSION['if']>$_SESSION['end'])
{
	session_destroy();
	header("location: ../Qeydiyyat.php");
	echo "<script> alert('vaxtiniz bitdi!!')</script>";


}

 ?>