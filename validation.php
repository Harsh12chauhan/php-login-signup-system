<?php
 session_start();
if(isset($_POST['email'])) {
include_once('config.php');

$email = $_POST['email'];  
$upassword = $_POST['upassword'];  
  
$sql = "SELECT * FROM register ";
$result = mysqli_query($_SESSION['conn'],$sql);

if(mysqli_num_rows($result)>0){
    while($r = mysqli_fetch_array($result)) {
            if ($r['email'] == $email && $r['upassword'] == $upassword) {
                $_SESSION['upassword'] = $r['upassword'];
                    $_SESSION['sno'] = $r['sno'];
            header("location: home.php");
        }
    }
    echo "<h1> Invalid Credentails</h1>";
}else
{
    echo "No result"; 
}
$_SESSION['conn']->close();
 }
?>