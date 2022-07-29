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
 $num = 0;
 $count1 = 0;
 $count2 = 0;
 
 $_SESSION['conn']  = $conn ;
 $_SESSION['arr']   = $products;
 $_SESSION['price'] = $price;
 $_SESSION['num'] = $num ;
 $_SESSION['count1']=  $count1 ;
 $_SESSION['count2']=  $count2 ;
 $quantity = array("$num","$count1","$count2");
//  $quantity = array(" $_SESSION['num']"," $_SESSION['count1']","$_SESSION['count2']");
 $_SESSION['quantity'] = $quantity;

foreach ($quantity as $key => $value) {
  echo $value."<br>";
}

?>