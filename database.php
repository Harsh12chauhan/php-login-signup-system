<?php
session_start();
if (isset($_SESSION['upassword'])) {
    include_once('config.php');
}
else {
       header("location:index.php");
   }
   $product = $_POST['product'];
   $userid = $_SESSION['sno'];
   
$sql = "SELECT * FROM products ";
$result = mysqli_query($_SESSION['conn'],$sql);



if(mysqli_num_rows($result)>0){
    while($r = mysqli_fetch_array($result)) {
        if ($r['pname'] == $product) {
            $productid = $r['pid']; 
            $odr = "INSERT INTO orders(ouserid,oproductid) VALUES('$userid','$productid')";
            $_SESSION['conn']->query($odr);
            header("location: product.php");
        }
    }
}

// echo $userid;
?>

