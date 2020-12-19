<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php
include('config.php');
require_once "header.php";

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
  <a class="navbar-link" href="userhome.php">Back</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="addissue.php">Add Issue</a>      
    </ul>
 <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="myissues.php">Update Issue</a>      
    </ul>
  </div>
</nav>

<form action=" " method="POST" enctype="multipart/form-data">
<table width="50%" border="1" cellpadding="5" cellspacing="5">
<thead>
<tr>
<th>IMAGE</th>
<th>location</th>
<th>status</th>
<th>votes</th>
<th>username</th>
</tr>
</thead>
<?php
$query="SELECT pic,location,status,votes,username FROM problem where username='";
$query_run=mysqli_query($conn,$query);

while($row = mysqli_fetch_array($query_run))
{
$_SESSION["username"]=$row["username"];
$_SESSION["location"]=$row["location"];
?>
<tr>
<td><?php  echo '<img src="data:image;base64,'.base64_encode($row['pic']).' " alt="Image" style=" width:200px; height:150px" >'; ?> </td>
<td><?php  echo $row["location"];?> </td>
<td><?php  echo $row["status"];?> </td>
<td><?php  echo $row["votes"];?> </td>
<td><?php  echo $row["username"];?> </td>
</tr> 
<?php
}
?>
</table>
</form>

</body>
</html>