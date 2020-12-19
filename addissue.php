<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php
include('config.php');
require_once "header.php";

if(isset($_POST["Upload"]))
{
      $file=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
      $username=$_SESSION["username"];
      $location=$_POST["location"];
      $query="INSERT INTO problem (username,location,pic,status) VALUES ('$username','$location','$file','no action taken')";
      $query_run=mysqli_query($conn,$query);
      
      if($query_run)
{
      echo "<script> alert('image Uploaded');</script>";	
}
      else
{
       echo "<script > alert('image not  Uploaded') ;</script>";
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
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="addissue.php">Add Issue</a>      
     </li>
      <li class="nav-item">
         <a class="nav-link" href="myissues.php">My Issues</a>

      </li>
    </ul>
  </div>
</nav>

<form action=" " method="POST" enctype="multipart/form-data">
    <label >Enter Location</label>
    <input name="location" type="text"  id="location" placeholder="location"><br>
    <label>Choose the pic</label><br>
  <input type="file" name="pic" id="pic"><br>
  <input type="submit" value="Upload Image" name="Upload"><br>
</form>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>