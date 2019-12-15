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
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="home.css">
</head>
<body >

<div class="jumbotron"  style="background-color:#212529">
<a class="btn btn-success" href="/php/Kendi/Login.php"style="float:right">Admin</a>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="pic3.jpg" alt="" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<div>
<a class="btn btn-outline-danger" href="Loginvalidation.php" float="right">Logout</a>
</div>
    
  </div>
</nav>

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
<div class="col-sm-8 text-left"> 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic7.jpg" class="d-block w-100" alt="..." height="100%" width="1200px">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pic5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><img src="pic2.jpg" alt="" height="70px" width="100%"></p>
      </div>
      <div class="well">
        <p><img src="pic7.jpg" alt=""  height="70px"></p>
      </div>


</div>
</div> 

<footer>
<p style="background-color:#212529; padding:20px; margin-top:150px"></p>
</footer>

</body>
</html>