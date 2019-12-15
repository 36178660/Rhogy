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

    <p style="float:left" > <a class="btn btn-primary" href="max_purch.php">max_purch_gr_cust_Id</a></p>
    <p style="float:left; margin-left:40px" > <a class="btn btn-primary" href="max_purch_sales.php">max_purch_gr_sale_Id</a></p>
    <p style="float:right; margin-left:40px"> <a class="btn btn-success" href="purch_amt_2000.php">purch_max_2000</a></p>
    <p style="float:right; margin-left:40px"> <a class="btn btn-success" href="purch_amt_1000.php">purch_max_1000</a></p>
    <p style="float:left; margin-left:50px"> <a class="btn btn-success" href="btw_3007_3009.php">Max_btw_3007_3009</a></p>
    </div>

    <div class="container">
<div class="jumbotron">
<p style="float:left" > <a class="btn btn-primary" href="btw_2000_6000.php">btw_2000_6000</a></p>
<p style="float:left; margin-left:40px" > <a class="btn btn-primary" href="max_purch_IN.php">purch_range</a></p>
<p style="float:right; margin-left:40px"> <a class="btn btn-success" href="btw_5003_5008.php">Between_5003_5009</a></p>
    <p style="float:right"> <a class="btn btn-success" href="orders.php">HOME</a></p>
</div>
</div>
<div class="container">
<table class="table table-striped" style="background-color:white">
<thead>
<th>Customer ID</th>
<th>purchase amount</th>
</thead>
<tbody>
<?php
include('patientcon.php');
$sql="SELECT customer_id,MAX(purch_amt) as max FROM orders GROUP BY customer_id";
$sql_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($sql_run))
{
echo'
<tr>
<td>'.$rows['customer_id'].'</td>
<td>'.$rows['max'].'</td>


</tr>


';

}




?>

</tbody>
</table>


</div>

</div>
<script src="js/jquery.js"></script>
<script src = "bootstrap/js/bootstrap.js"></script>  
</body>
</html>