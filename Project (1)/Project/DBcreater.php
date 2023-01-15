<?php
 $dbhost1 = 'localhost';
 $dbuser1 = 'root';
 $dbpass1= '';
 
 $conn= mysqli_connect($dbhost1,$dbuser1,$dbpass1);
 if(! $conn ) {
   die('Could not connect:'.mysqli_connect_error());
}


 $sql='CREATE DATABASE IF NOT EXISTS inventory';
 $ret=mysqli_query($conn,$sql);
 if(!$ret)
 {
echo " inventory db is not created<br/>".mysqli_error($conn);
 }
 
$sql2='USE inventory';
$ret2=mysqli_query($conn,$sql2);

if(!$ret2)
{
   echo' inventory db is no used<br/>'.mysqli_error($conn);
}


 $sql3="CREATE TABLE IF NOT EXISTS item(ID INT(10) AUTO_INCREMENT PRIMARY KEY,Catagory VARCHAR(40) NOT NULL,Location VARCHAR(30) NOT NULL,Number INT(10) NOT NULL,Price INT(10) NOT NULL)";
   
   $re=mysqli_query( $conn, $sql3 );
   if( !$re ) {
      echo'item table is not created!<br/>'.mysqli_error($conn);
   }
   
   $sql4="CREATE TABLE IF NOT EXISTS user(ID INT(10) AUTO_INCREMENT PRIMARY KEY,Username VARCHAR(20) NOT NULL,Password INT(4) NOT NULL)";
   
   $re=mysqli_query( $conn, $sql4 );
   if( !$re ) {
      echo'user table is not created!<br/>'.mysqli_error($conn);
   }
   
   
  $sql4="INSERT INTO item(ID,Catagory,Location,Number,Price) VALUES (NULL,'Couch','Addis Ababa',10,40000),(NULL,'Closet','Bahr dar',3,12000)";
   $result1=mysqli_query( $conn, $sql4);
   if(!$result1)
   {
      echo'value inserted  into item<br/>'.mysqli_error($conn);
   }
   
$sql5="INSERT INTO user(ID,Username,Password) VALUES (NULL,'MM11',1234),(NULL,'MM12',4567)";
   $result1=mysqli_query( $conn, $sql5);
   if(!$result1)
   {
      echo'value inserted into user <br/>'.mysqli_error($conn);
   }



?>