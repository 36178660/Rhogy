<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding Salesman</title>
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
<body>
    <div class="container">
    <div class="jumbotron">
    <h1>Salesman Details</h1>
    </div>
    <form action="salesmanregister.php" method="post" class="form-horizontal">
    <div class="form-group">
    <label for="id" class="control-label col-sm-2">Salesmanid</label>
    <div class="col-sm-5">
    <input type="text" id="id" name="id" placeholder="Enter Salesman ID" class="form-control">
    </div>
    </div>
    <div class="form-group">
    <label for="name" class="control-label col-sm-2">Salesman Name</label>
    <div class="col-sm-5">
    <input type="text" id="name" name="salesman_name" placeholder="Enter Salesman Name" class="form-control">
    </div>
    </div>
    <div class="form-group">
    <label for="city" class="control-label col-sm-2">City</label>
    <div class="col-sm-5">
    <input type="text" id="city" name="city" placeholder="Enter Salesman city" class="form-control">
    </div>
    </div>
    <div class="form-group">
    <label for="com" class="control-label col-sm-2">Commission</label>
    <div class="col-sm-5">
    <input type="text" id="com" name="commission" placeholder="Enter commission offered" class="form-control">
    </div>
    </div>
    <div class="form-group">
    
    <div class="col-sm-5">
    <input type="submit" name="submit_form" class="btn btn-outline-info" value="register Salesman" >
    </div>
    </div>
    
    </form>
    </div>
</body>
</html>