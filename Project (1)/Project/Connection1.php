<?php
class Connection
{
private $dbhost="localhost:3306";
private $dbuser="root";
private $dbpass="";

public function Connect()
{
	$conn=mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass);
	mysqli_select_db($conn,'Inventory');
	return $conn;
}
public function Excute($sql)
{
	$conn=$this->Connect();
	mysqli_select_db($conn,'Inventory');
	$ret=mysqli_query($conn,$sql);
	
	return $ret;
}
}


?>