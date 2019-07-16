<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <title>PetShop</title>
  </head>
  <body style="">
  
   <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="na">
  <a class="navbar-brand" href="#" style="color: white">PetShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: white">Home <span class="sr-only">(current)</span></a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <form class="form-inline my-2 my-lg-0">

      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <!--<button class="btn btn-outline-success my-2 my-sm-0" type=""><a href="Signup.html">SignUp</a></button>-->
      <button class="btn btn-outline-success my-2 my-sm-0" type=""><a href="logout.php"> logout</a></button>

    </form>

  </div>
      </nav><br>
      <center><h2><?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. 
<?php
}else echo "<h1>Please login first .</h1>";
          ?>
          </h2></center>

<br>
<div class="card-deck">
  <div class="card">
    <img src="pet.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title" align="center" style="color: ">Buy a Pet</h3>
      <center><button class="btn btn-success my-2 my-sm-0" type="submit"><a href="Buy.html" style="color: white"> Buy</a></button></center>
    </div>
  </div>
  <div class="card">
    <img src="sell.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title" align="center">Put up a pet for adoption</h3>
      <center><button class="btn btn-success my-2 my-sm-0" type="submit"><a href="PetSell.html" style="color: white">Sell</a></button></center>

    </div>
  </div>
  <div class="card">
    <img src="products.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title" align="center">Pet Products</h3>
      <center><button class="btn btn-success my-2 my-sm-0" type="submit"><a href="PetProducts.html" style="color: white">Products</a></button></center>
    </div>
  </div>
</div>
<div class="jumbotron">
  <a href="FeedBack.html">Feed Back</a> 
 <!-- <i class="fa fa-instagram" aria-hidden="true">Instagram</i> -->           
 <br> <a href="ContactUs.html">Contact Us</a>
 <br> <a href="AllRights.html">All Rights Reserved</a>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
    ?></a>
</body>
</html>