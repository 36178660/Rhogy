<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <script src ="js/jquery.js"></script>
    <script src="bootstrap/js/boostrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
<h1 class="h1"> Register Here</h1>
 <a class="btn btn-primary" href="Login.php">Login Page</a>
        </div>
        <form action="salesmanUserRegistration.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="first" class="control-label col-sm-3">First Name</label>
                <div class="col-sm-6">
<input type="text" name="first" id="first" class="form-control" placeholder="Enter  First Name" required>
</div>
</div>
<div class="form-group">
<label for="last" class="control-label col-sm-3"> Last Name</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="last" name="last" placeholder="Enter last Name" required>
</div>
</div>
<div class="form-group">
<label for="mail" class="control-label col-sm-3"> Email</label>
<div class="col-sm-6">
<input type="email" class="form-control" id="mail" name="email" placeholder="Enter Email" required>
</div>
</div>
<div class="form-group">
<label for="pass" class="control-label col-sm-3"> Password</label>
<div class="col-sm-6">
<input type="password" class="form-control" id="pass" name="password" placeholder="Enter your Password" required>
</div>
</div>
<div class="form-group">
<div class="col-sm-2">
<input type="submit" class="form-control btn btn-success"  name="submit_form" value="submit" >
</div>
</div>



        </form>



        </div>
    </div>
</body>
</html>