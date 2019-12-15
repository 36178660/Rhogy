<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery"></script>
    <script src = "bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="home1.css">
    
</head>
<body >

<div class="container">
<div class="jumbotron">
<h1>user Details</h1>
<a class="btn btn-outline-success" href="customer.php">Home</a>
</div>
<?php
if(isset($_GET['id'])){
    include('patientcon.php');
    $sql="select * from customer where customer_id='$_GET[id]'";
    $sql_run=mysqli_query($con,$sql);
    while($rows=mysqli_fetch_row($sql_run)){
    echo'
        <div class="row">
    <div class="col-sm-3">Customer Identification</div>
    <div class="col-sm-3">'.$rows[0].'</div>
    </div>
    <div class="row">
    <div class="col-sm-3">Name</div>
    <div class="col-sm-3">'.$rows[1].'</div>
    </div>
    <div class="row">
    <div class="col-sm-3">City</div>
    <div class="col-sm-3">'.$rows[2].'</div>
    </div>
    <div class="row">
    <div class="col-sm-3">grade</div>
    <div class="col-sm-3">'.$rows[3].'</div>
    </div>
    <div class="row">
    <div class="col-sm-3">Salesman_id</div>
    <div class="col-sm-3">'.$rows[4].'</div>
    </div>
    ';
    }
    
}

?>


</div>
</div>

</body>
</html>
