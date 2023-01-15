<?php
include("Connection1.php");

class Item
{
	
	function Select($conn)
	{
$sql="SELECT * FROM Item";
	$ret=mysqli_query($conn,$sql);
	if($ret)
	return $ret;
else
	echo "error detected".mysqli_error($conn);
	}
	function SelectSp($id,$conn)
	{
$sql="SELECT * FROM Item WHERE ID=$id";
	$ret=mysqli_query($conn,$sql);
	if($ret)
	return $ret;
else
	echo "error detected".mysqli_error($conn);
	}
	
	
	function Edit($conn,$id,$cat,$n,$pr,$loc)
	{
		//$sql="UPDATE Item set First_Name='".$_POST['Fname']."',Last_Name='".$_POST['Lname']."'  where id=$i";
$sql="UPDATE Item SET ID=$id, Catagory='".$cat."', Price=$pr, Number=$n, Location='".$loc."' where ID=$id";
	$ret=mysqli_query($conn,$sql);
	return $ret;
	}
	
	function Delet1($id,$conn)
	{
$sql="DELETE  FROM Item WHERE ID=$id";
	$ret=mysqli_query($conn,$sql);
	return $ret;
	}
	
	function Add($conn,$cat,$n,$pr,$loc)
	{
$sql="INSERT INTO Item VALUES (NULL,'".$cat."',$pr,$n,'".$loc."')";
	$ret=mysqli_query($conn,$sql);
	return $ret;
	}
	
	
}
?>