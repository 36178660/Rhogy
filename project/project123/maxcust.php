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
<P>highest grade for each of the cities of the customers</P>
      <p style="float:right"> <a class="btn btn-success" href="orders.php">HOME</a></p>
    </div>

   
<div class="jumbotron">
<table class="table table-striped">
<thead>
<th>City</th>
<th>Max Grade</th>
</thead>
<tbody>
<?php
include('patientcon.php');
$sql="SELECT city,MAX(grade) as max FROM customer GROUP BY city";
$sql_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($sql_run))
{
    echo'
    <tr>
    <td>'.$rows['city'].'</td>
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