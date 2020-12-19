<?php
define('db_sn','localhost');
define('db_un','root');
define('db_pw','');
define('db_name','civic');

$conn=mysqli_connect(db_sn,db_un,db_pw,db_name);
if($conn==false){
dir('Error:Cannot connect');
}
else{
}
?>
