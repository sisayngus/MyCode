<?php
include("Select.php");
$obj1= new Item();
$Iobj= new Connection();

$val=$Iobj->Connect();
$va=$obj1->Edit($val,$_POST['id'],$_POST['cat'],$_POST['num'],$_POST['price'],$_POST['loc']);
if(!$va)
	echo "error".mysqli_error($val);

?>
<html>

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
<a href="./Add.php" style="text-decoration:none"><button class="btn btn-info" style="width:260;margin:20;height:40px">Add Item</button></a>
<a href="./Delete.php"><button class="btn btn-info" style="width:260;margin:20;height:40px">Remove Item</button></a>
<a href="./Update.php"><button class="btn btn-info" style="width:260;margin:20;height:40px">Edit Item detail</button></a>
<button class="btn btn-warning" style="width:260;margin:20;height:40px">View Item</button></div>
<div style="width:70%;height:300px;float:right">
<table class="table table-striped table-hover">
<tr>
<th id="id">
ItemID
</th>
<th id="ic">
Item Catagory
</th>
<th>
Price
</th>
<th>
Amount in warehouse
</th>
<th>
Located Branch
</th>
</tr>
<?php
$obj1= new Item();
$Iobj= new Connection();

$val=$Iobj->Connect();
$va=$obj1->Select($val);
while($row=mysqli_fetch_assoc($va)){
echo"
<tr>
<td>".$row['ID']."
</td>
<td>".$row['Catagory']."
<td>".$row['Price']."
<td>".$row['Number']."
<td>".$row['Location']."
</tr>

<tr>
</tr>";}
?>
</table>
</div>





</body>
</html>