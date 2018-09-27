<?php  
if (isset($_GET['delete'])){
	session_start();
	session_destroy();
header("location: ../Qeydiyyat.php");
}

?>