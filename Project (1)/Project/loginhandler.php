<?php
include ("checker.php");
if(isset($_SESSION['authenticate']))
{
	include("HTML_Interface.php");
}

$obj1= new Check();
$Iobj= new Connection123();

$val=$Iobj->Connect();
$check=$obj1->Authenticate($val,$_POST['username'],$_POST['password']);
if($check===1)
	{
		$_SESSION['authenticate']=1;
		unset($_SESSION['message']);
	include("HTML_Interface.php");
	}
	else
	{
		$_SESSION['message']="incorrect username or password";
		include("index.php");
	
	}


?>