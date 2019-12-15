<?php
include('salesConnection.php');
if(isset($_POST['submit_form']))
{
$first=$_POST['first'];
$last=$_POST['last'];
$mail=$_POST['email'];
$pass=$_POST['password'];


$sql="INSERT INTO salesmen(firstName,lastName,email,password) VALUES('$first','$last','$mail','$pass')";
$sql_run=mysqli_query($con,$sql);
}else{

}
if($sql_run)
{
session_start();
header('location:successfulLogin.php');
}else{

}

?>