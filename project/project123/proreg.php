<?php
include('patientcon.php');

if(isset($_POST['submit_form']))
{
    $id=$_POST['id'];
    $name=$_POST['pro_name'];
    $price=$_POST['price'];
    $com=$_POST['com'];
    
    $sql="INSERT INTO item_mast (PRO_ID,PRO_NAME,PRO_PRICE,PRO_COM) VALUES('$id','$name','$price','$com')";
    $sql_run=mysqli_query($con,$sql);
}else{

}
if($sql_run){
session_start();
header('location:item_mast.php');
}else{
echo"The connection to the database failed";
}

?>