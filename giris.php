<?php 
if (isset($_POST['giris'])) {
  
   session_start();
   $_SESSION['message']='';
   $connect=mysql_select_db("qeydiyyat",mysql_connect("localhost","root","ferid-ferid")) or die("baglanmadi");
   if ($_SERVER['REQUEST_METHOD']=='POST') {

  $mail=$_POST['mail'];
  $parol=$_POST['parol'];
  if ($mail!=NULL and $parol!=NULL) {
  $mail=md5($_POST['mail']);
  $parol=md5($_POST['parol']);
  $select=mysql_query("select *from qeyd where mail='$mail' and parol='$parol'");
  if(mysql_num_rows($select)>0){
    while ($row=mysql_fetch_assoc($select)) {
    	
  $_SESSION['mail']=$row["mail"];
  $_SESSION['parol']=$row["parol"];
  $_SESSION['start']=time();
  $_SESSION['end']=$_SESSION['start']+(24*60);
   header("location: w3templates/index.php");
    }
   
    }
    else  {
    echo "<script>alert('Bu e-mail hesabı qeydiyyatdan keçməyib.Hesab yaratmaginiz tələb olunur!!!');</script>";
}
    
}
else{
    echo "<script>alert('Xahiş edilir E-mail ve parolunuzu tam daxil edin!!!');</script>";
}

}}

 ?>
