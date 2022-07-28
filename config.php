<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,"pages");
 if(!$conn){
    die("connection failed :".mysqli_connect_error());
 }
 $_SESSION['conn']  = $conn ;
?>