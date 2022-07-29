<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,"pages");
 if(!$conn){
    die("connection failed :".mysqli_connect_error());
 }
 $products = array("");
 $price = array("");
 $count = 0;
 
 $_SESSION['conn']  = $conn ;
 $_SESSION['arr'] = $products;
 $_SESSION['price'] = $price;
 $_SESSION['count']= $count;
?>