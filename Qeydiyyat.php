
<?php  include 'giris.php';?>
<?php  include 'hesab_yarat.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ana  Sehife</title>
	<link rel="stylesheet" type="text/css" href="qeydiyyat.css">
</head>
<body>
	<?php 
@session_start();
if(@$_SESSION['mail'] && @$_SESSION['parol']){
header("location: w3templates/index.php");

die();
}
?> 
	<div class="header"><div><img src="smile1.gif" class="smile1"></div><span><h1>Xoş Gəlmisiniz...</h1></span><div><img src="smile1.gif" class="smile2" ></div></div>
<form action="" id="qeydiyyat" method="POST" >
	<fieldset>
		<legend>Qeydiyyat</legend>
	<label style="margin-left: 23px;">E-mail:</label><input type="email" name="mail"><br><br>
	<label >Parolunuz:</label><input type="password" name="parol"><br><br><br>
    <input type="Submit"   name="giris" value="Giriş" style="background-color:rgb(72, 169, 227);"><br><br>
    <input type="Submit"  name="hesab_yarat" value="Hesab Yarat" style="background-color: #69a74e;" >
</fieldset>
	</form>
</body>
</html>

