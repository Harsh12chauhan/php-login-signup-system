<?php
session_start();
// function button1() {
//   echo "This is Button1 that is selected";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>page </title>
</head>
<body>
<div class="container text-center mt-5 ">
     <div class="container  text-center mb-5"><h1>HOME</h1></div> 
    <div class="d-flex justify-content-evenly">
<div class="card" style="width: 18rem;">
<?php
        if(array_key_exists('water', $_POST)) {
            water();
        }elseif (array_key_exists('charger', $_POST)) {
          charger();
        }
        elseif (array_key_exists('mobile', $_POST)) {
          mobile();
        }
        function water() {
          ++$_SESSION['count'];
          $product = "water";
          $price = 20;
            array_push($_SESSION['price'],$price); 
            array_push($_SESSION['arr'],$product); 
          }
          function charger() {
            $product = "charger";
            $price = 200;
            array_push($_SESSION['price'],$price); 
            array_push($_SESSION['arr'],$product); 
          }
          function mobile() {
            $product = "mobile";
            $price = 5500;
            array_push($_SESSION['price'],$price); 
            array_push($_SESSION['arr'],$product); 
        }
    ?>
   <form  method="POST">
   <h1>Water</h1>
  <div class="card-body">
    <h5 class="card-title">$20</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <input type="submit" name="water" class="form-control btn btn-primary" value="ADD" />
  </form>
  </div>
</div>
<div class="card" style="width: 18rem;">
   <h1>Charger</h1>
  <div class="card-body">
    <h5 class="card-title">$150</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form  method="POST">
<input type="submit" class="form-control btn btn-primary"  name="charger" id="charger" value="Add"/>  </div>
</form>
</div>
<div class="card" style="width: 18rem;">
   <h1>Mobile</h1>
  <div class="card-body">
    <h5 class="card-title">$5500</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form method="POST">
<input type="submit" class="form-control btn btn-primary"  name="mobile" id="mobile" value="Add"/>  </div>
</form>
</div>
</div>
<div class="container">
  <form action="logout.php" method="POST">
    <input type="submit" class="btn btn-dark" value="logout"/>
  </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>