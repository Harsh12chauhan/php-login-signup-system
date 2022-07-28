<?php
 session_start();
if (isset($_POST['email'])) {
 include_once('config.php');

  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $upassword = $_POST['upassword'];
  $phone = $_POST['phone'];
  
  $sql = "INSERT INTO register(uname,email,upassword,phone) VALUES('$uname','$email','$upassword','$phone')";
  
  if ($_SESSION['conn']->query($sql) == TRUE) {
    header("location: welcome.php");
  }else {
    echo " error:". $_SESSION['conn']. "<br>" .$_SESSION['conn']->error();
  }
$_SESSION['conn']->close();
}
?>