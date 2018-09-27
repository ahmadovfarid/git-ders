<?php 
if (isset($_POST['hesab_yarat'])){
  session_start();
$connect=mysqli_connect("localhost","root","ferid-ferid","qeydiyyat") or die("baglanmadi");
   if ($_SERVER['REQUEST_METHOD']=='POST') {

  $mail=$_POST['mail'];
  $parol=$_POST['parol'];
  
  if ($mail!=NULL and $parol!=NULL) {
    
    $mail=md5($mail);
  $parol=md5($parol);
  	$select=mysqli_query($connect,"select *from qeyd where mail='$mail' and parol='$parol'");
$insert=mysqli_query($connect,"INSERT INTO qeyd(mail,parol) 
VALUES ('$mail','$parol')");  
if(mysqli_num_rows($select)>0){

  	echo "<script>alert('Artıq bu hesab qeydiyyatdan kecmisdir.Başqa bir hesab yoxlayin ve ya bu hesabla daxil olun!!!');</script>";
  }
 
else if($insert){
  $_SESSION['mail']=$mail;
  $_SESSION['parol']=$parol;
  $_SESSION['start']=time();
  $_SESSION['end']=$_SESSION['start']+(24*60);
    	header("location: w3templates/index.php");
    }
}
    else  {
    echo "<script>alert('Xahiş edilir E-mail ve parolunuzu tam daxil edin!!!');</script>";
  }
  
  }
}

?>