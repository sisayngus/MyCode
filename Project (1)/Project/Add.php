<html>
<?php
include("Select.php");
?>
<head>
<style>

table,tr
{
 border:solid 2px ;
}
#id
{
	width:80px;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div style="background-color:blue;height:100px" class="container-fluid">
<div style="width:400px;height:100px;float:left">
<Image src="./image/logo.jpg" style="width:100px;height:100px;border-radius:50%;float:left" /></div>
<p style="color:white;padding-top:30;font-size:33px;float:left"><b>Welcome to M$M inventory</b></p>
</div>
<div>


<div style="border-right:solid 2px ;width:30%;float:left;height:520px">
<button class="btn btn-warning" style="width:260;margin:20;height:40px">Add Item</button></a>
<a href="./Delete.php"><button class="btn btn-info" style="width:260;margin:20;height:40px">Remove Item</button></a>
<a href="./Update.php"><button class="btn btn-info" style="width:260;margin:20;height:40px">Edit Item detail</button></a>
<a href="./HTML_Interface.php"><button class="btn btn-info" style="width:260;margin:20;height:40px">View Item</button></a></div>
<div style="width:70%;height:300px;float:right;margin-top:10px">
<div style="width:20%;height:60px;border-top:solid 2px;float:left;border-right:solid 2px;text-align:center"><p style="font-size:30px;color:black">Item</p> </div>
<div style="width:80%;height:60px;border-bottom:solid 2px;float:right"> </div>
<form action="Ahandler.php" method="POST">
<input type="text" placeholder="Item category" name='cat' style="margin-top:50px;height:50px;width:400px"/></br>

<input type="text" placeholder="Location" name='loc'     style="margin-top:50px;height:50px;width:400px;"/><br>
<input type="number" placeholder="Item Price" name='price' style="margin-top:50px;height:50px;width:100px;float:left"/>
<p style="float:left;font-size:30px;margin-top:50px;color:green">$</p>
<div style="float:left;width:200px">.</div>
<input type="number" placeholder="Amount in stalk" name='num' style="margin-top:50px;height:50px;width:200px;float:left"/></br></br></br></br></br>

<input type="submit" value="Add Item" class="btn btn-success" />
</form>

</div>





</body>
</html>