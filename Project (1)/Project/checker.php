<?php
include("connection2.php");

class Check
{
	function Authenticate($conn,$id,$pass)
	{
		$sql="SELECT * FROM User WHERE Username='".$id."'and Password=$pass";
		$ret=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($ret)>0)
			return 1;
		else
			return 0;
	}
}
	