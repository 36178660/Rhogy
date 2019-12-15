<?php
$server='localhost';
$user='root';
$password='';
$db='salesman';

$con=mysqli_connect($server,$user,$password,$db);
if(!$con)
{
    die("The connection could not be established".mysqli_connect_error());
}

?>
