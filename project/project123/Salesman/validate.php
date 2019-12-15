<?php
include('connection.php');
if(isset($_POST['submit_form']))
{
    $uname=$_POST['email'];
    $pass=$_POST['password'];

    $sql="select * from user_details where email='".$uname."' and password='".$pass."'";
    $sql_run=mysqli_query($con,$sql);

    $count=mysqli_num_rows($sql_run);
    if ($count==1)
    {
        session_start();
        header('location:Homes.php');
    }else{
        header('location:unsuccess.php');

    }
}


?>