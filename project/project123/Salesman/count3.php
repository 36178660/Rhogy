<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    
</head>
<body>
<div class="container">
<div class="jumbotron" style="box-shadow:0px 8px 8px 2px rgba(0,0,0,0.6)">
    <h1 style="font-family:Arial; color:purple">Customer Details</h1>
<P>orders for date August 17th, 2012</P>
      <p style="float:right"> <a class="btn btn-success" href="orders.php">HOME</a></p>
      <p sytle="float:left"><a class="btn btn-primary" href="count3.php">count_salesmen</a></p>
    </div>

   
<div class="jumbotron">
<?php
include('patientcon.php');
$sql="SELECT COUNT(DISTINCT salesman_id) as count FROM orders";
$sql_run=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($sql_run);
echo" <h1><b><span>count: </span></b></h1>".$rows['count'];



?>

</div>

</div>
<script src="js/jquery.js"></script>
<script src = "bootstrap/js/bootstrap.js"></script>  
</body>
</html>