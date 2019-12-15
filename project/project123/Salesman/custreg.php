<?php
include('patientcon.php');
if (isset($_POST['submit_form']))
{
$id=$_POST['id'];
$name=$_POST['cust_name'];
$city=$_POST['city'];
$grade=$_POST['grade'];
$sale=$_POST['salesman_id'];
$mysqli->autocommit(false);
$sql="INSERT INTO customer (customer_id, cust_name,city,grade,salesman_id) VALUES('$id','$name','$city','$grade','$sale')";
$mysqli->commit();
$run_sql=mysqli_query($con,$sql);
}else
{

}
if($run_sql)
{
    header('location:customer.php');
}else{
    echo "The connection to the database was not successful";
}

?>
