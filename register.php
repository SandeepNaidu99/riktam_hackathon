<?php
include('config.php');
require_once "header.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if(isset($_POST['submit'])){
$sql1 = "SELECT * FROM users WHERE username='".$_POST["username"]."' ";
$result = $conn->query($sql1);	
if ($result->num_rows > 0) {
echo "<script>alert('Sorry, user already exist!');</script>";
}
elseif( strlen(trim($_POST["password"])) < 5 )
{
echo "<script>alert('password should be minimum of 6 characters!');</script>";
}
elseif($_POST["password"]!=$_POST["confirm_password"])
{
echo "<script>alert('Passwords are not matched');</script>";
}
else{
$sql = "INSERT INTO users(username,password)
VALUES ('" . $_POST["username"] ."','" . $_POST["password"] . "' )";

if ($conn->query($sql) === TRUE) {
echo "<script>alert('Registration Successful')</script>";
echo "<script>location.replace('login.php');</script>";
} else {
echo "<script>alert('There was an Error');</script>" . $sql . "<br>" . $conn->error;
}
$conn->close();
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-link" href="index.php">Back</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav>

<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="confirm_password">
    </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

