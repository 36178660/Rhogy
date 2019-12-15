
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
    <link rel="stylesheet" href="home.css">
</head>
<body >

<div class="jumbotron" >
<p>Search icon: <span class="glyphicon glyphicon-search"></span></p>



</div>
<div class="container-fluid text-center">    
<div class="row content">
<div class="col-sm-2 sidenav">
<nav class="sidenav">
<ul>
    <li class="active" style="background-color:red"><a href="Homes.php">Home</a></li>
    <li><a href="customer.php">Customer</a></li>
    <li><a href="orders.php">Orders</a></li>
    <li><a href="salesman.php">Salesman</a></li>
    </ul>   
    </nav>   
</div>
<div class="col-sm-8 text-left" style="background-color:white; width:100%; box-shadow:0px 8px 8px 2px rgba(0,0,0,0.6);"> 

<div class="container">
<div class="jumbotron"  style="box-shadow:1px 8px 16px 1px rgba(0,0,0,0.8)">
<h1 style="color:blue;font-family:Algerian">CUSTOMER REGISTRATION</h1>
</div>
<form  class="form-horizontal"action="custreg.php" method="post" style="box-shadow:0px 8px 8px 0px rgba(0,0,0,0.8);padding:10px;color:black">
<div class="form-group">
<label for="id" class="control-label col-sm-2" style="color:black">customer ID</label>
<div class="col-sm-5">
<input type="number" class="form-control" id="id" name="id" placeholder="Enter Id" required>
</div>
</div>
<div class="form-group">
<label for="name" class="control-label col-sm-2"style="color:black">customer Name</label>
<div class="col-sm-5">
<input type="text" class="form-control" id="name" name="cust_name" placeholder="Enter Name" required>
</div>
</div>
<div class="form-group">
<label for="city" class="control-label col-sm-2"style="color:black">city</label>
<div class="col-sm-5">
<input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required>
</div>
</div>
<div class="form-group">
<label for="gr" class="control-label col-sm-2"style="color:black">Grade</label>
<div class="col-sm-5">
<input type="number" class="form-control" id="gr" name="grade" placeholder="Enter grade" required>
</div>
</div>
<div class="form-group">
<label for="sale" class="control-label col-sm-2" style="color:black">Salesman_Id</label>
<div class="col-sm-5">
<input type="number" class="form-control" id="sale" name="salesman_id" placeholder="Enter the salesman id" required>
</div>
</div>
<div class="form-group">
<div class="col-sm-5">
<input type="submit" class="btn btn-primary"  name="submit_form" value="Register">
</div>
</div>
</form>

</div>
<div>
    
</div>

    </div>

    <div class="col-sm-2 sidenav">
      <div class="well">
      <P></P> <a class="btn btn-success" href="maxcust.php">Max</a></p>
      </div>
      <div class="well">
        <p> <a class="btn btn-primary" href="count2.php">count_grade</a></p>
      </div>
      <div class="well">
        <p> <a class="btn btn-primary" href="addcust.php">add customer</a></p>
      </div>

</div>
</div> 
<footer>
<p style="background-color:rgba(56, 73, 75, 0.465); padding:20px; margin-top:700px">footer</p>
</footer>


</body>
</html>
