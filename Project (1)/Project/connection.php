<?php 
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
	die("conection is not established".mysqli_error()."<br>");
}
$retval=mysqli_select_db($conn,"Inventory");
if(!$retval)
{
	die("database is not selected".mysqli_error($conn)."<br>");
}


?>