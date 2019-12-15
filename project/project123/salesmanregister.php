<?php
include ('patientcon.php');
if(isset($_POST['submit_form']))
{

    $id=$_POST['id'];
    $name=$_POST['salesman_name'];
    $city=$_POST['city'];
    $commission=$_POST['commission'];
    
    $sql="INSERT INTO salesman (salesman_id, name, city, commission) VALUES('$id','$name','$city','$commission')";
    $run_sql=mysqli_query($con,$sql);
    

}else{
}
if($run_sql){
header('location:successfulLogin.php');
}else{
header('location:unsuccess.php');
}


?>