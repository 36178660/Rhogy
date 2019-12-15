<?php
$server='localhost';
$user='root';
$password='';
$db='company';
$con= mysqli_connect($server,$user,$password,$db);
if(!$con)
{
    die("The database could not be selected".mysqli_connect_error());
}
?>