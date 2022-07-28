<?php
     session_start();
     if (isset($_SESSION['upassword'])) {
     include_once('config.php');
}
    else {
        header("location:index.php");
        echo "<h1>error</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Home-page</title>
</head>
<body>
<div class="container text-center mt-5">
<div class="container text-center mb-5">
<h1> welcome Home</h1>
</div>

<?php
$sql = "SELECT * FROM register ";
$result = mysqli_query($_SESSION['conn'],$sql);

if(mysqli_num_rows($result)>0){
    while($r = mysqli_fetch_array($result)) {
        echo $r['sno']."&emsp;&emsp;".$r['email']."&emsp;&emsp; ".$r['uname']."&emsp;&emsp; ".$r['upassword']."&emsp;&emsp; ".$r['phone']."&emsp;&emsp; ".$r['date']."<br>"."<br>"."<br>";
    }
}
?>
<form action="logout.php" method="POST">
<input type="submit" class="btn btn-dark" value="logout"/>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>