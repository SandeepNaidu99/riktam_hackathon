<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php
include('config.php');
require_once "header.php";

if(isset($_POST["submit"]))
{
echo "<script>location.replace('updateissue.php')</script>";
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

   <title>SWACHH URBAN</title>
<style>
h1 {text-align: center;}
p{text-align:center;}
</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-link" href="issues.php">Back</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    </div>
</nav>
<div class="container mt-4">
<h3>Update your password:</h3>
<hr>
<form action="" method="post">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter Username</label>
      <input type="text" class="form-control" name ="username" id="username" placeholder="username">
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>


