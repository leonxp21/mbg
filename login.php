<?php
$email=$_POST['email'];
$password=$_POST['password'];
if($email=='leondl69@gmail.com'&&$password='1234'){
$ket='LOGIN SUKSES';
}else{
$ket='GAGAL LOGIN';
}
echo $ket;
?>