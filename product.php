<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>products</title>
</head>
<body>
<div class="container text-center mt-5">
    <h1>Home Page</h1>
    <div class="d-flex justify-content-evenly">
<div class="card" style="width: 18rem;">
   <h1>Charger</h1>
  <div class="card-body">
    <h5 class="card-title">$200</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form action="database.php" method="POST">
    <button type="submit" class="form-control btn btn-primary" name="product" id="charger" value="charger">ADD</button>
    </form>
</div><div class="card" style="width: 18rem;">
   <h1>Mobile</h1>
  <div class="card-body">
    <h5 class="card-title">12000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form action="database.php" method="POST">
    <button type="submit" class="form-control btn btn-primary" name="product" id="mobile" value="mobile">ADD</button>
    </form>
</div><div class="card" style="width: 18rem;">
   <h1>Water</h1>
  <div class="card-body">
    <h5 class="card-title">$20</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form action="database.php" method="POST">
    <button type="submit" class="form-control btn btn-primary" name="product" id="water" value="water">ADD</button>
    </form>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

