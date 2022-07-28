<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>login-page</title>
</head>
<body>
<div class="container mt-5">
<form action="validation.php" method="POST">
  <div class="mb-3">
    <div class="container text-center"><h1>Login</h1>
    <!-- <label for="formGroupExampleInput" class="form-label">Invalid Credentails</label> -->
  </div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="email" required >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="upassword" id="upassword" required>
</div>
  <div class="container text-center">
      <button type="submit" class="btn btn-dark">Login</button>
  </div>
  <div class="container text-center mt-5">
  <label for="formGroupExampleInput" class="form-label">Don't have a account <a href="register.php">register here</a></label>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>