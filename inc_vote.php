<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php
include('config.php');
require_once "header.php";


$sql1 = "UPDATE problem SET votes=votes+1 WHERE username='".$_SESSION["username"]."' and location='".$_SESSION["location"]."' ";
$result = $conn->query($sql1);
if($result)
{
echo "<script>location.replace('issues.php')</script>";
}
?>