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

    <p style="float:left" > <a class="btn btn-primary" href="min.php">MIN</a></p>
    <p style="float:left; margin-left:40px" > <a class="btn btn-primary" href="max.php">MAX</a></p>
    <p style="float:right; margin-left:50px"> <a class="btn btn-success" href="purch_amt.php">purch_sum</a></p>
    <p style="float:left; margin-left:50px"> <a class="btn btn-success" href="AVG.php">Average_purch_amt</a></p>
    <p style="float:right"> <a class="btn btn-success" href="orders.php">HOME</a></p>
    </div>

   
<div class="jumbotron">
<?php
include('patientcon.php');
$sql="SELECT MIN(purch_amt) as 'min' FROM orders";
$sql_run=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($sql_run);
echo" <h1><b><span>Purchase_Amount_Min: </span></b></h1>".$rows['min'];



?>

</div>

</div>
<script src="js/jquery.js"></script>
<script src = "bootstrap/js/bootstrap.js"></script>  
</body>
</html>