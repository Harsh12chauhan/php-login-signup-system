<?php
session_start();
 include_once('config.php');

 
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $upassword = $_POST['upassword'];
 $phone = $_POST['phone'];
 
 $sql = "INSERT INTO register(uname,email,upassword,phone) VALUES('$uname','$email','$upassword','$phone')";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>addproduct-page</title>
</head>
<body>
<div class="container text-center mt-5">
        <div class="container text-center mb-5">
            <h1>Add Products</h1>
        </div>
        <div class="container text-center">
<form method="POST">
    <div class="form-group ">
      <input type="text" class="form-control" name="pname" id="inputEmail4" placeholder="Product Name">
    </div>
    <div class="form-group ">
      <input type="text" class="form-control" name="pid" id="inputPassword4" placeholder="Product Id">
    </div>
  <div class="form-group ">
    <input type="number" class="form-control" name="pquantity" id="inputAddress" placeholder="Quantity">
  </div>
  <div class="form-group ">
    <input type="number" class="form-control" name="pprice" id="inputAddress2" placeholder="Price">
    <button type="submit" class="btn btn-primary mt-5">Add Product</button>
  </div>
</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>
</html>