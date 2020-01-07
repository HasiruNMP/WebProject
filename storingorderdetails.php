<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"nsbmtshirts"); //selecting the database

//storing user input data in order_details table
$StudentID=$_REQUEST["stid"];
$Gender=$_REQUEST["gender"];
$ContactNO=$_REQUEST["contno"];
$Theme=$_REQUEST["theme"];
$ProductID=$_REQUEST["pid"];
$Material=$_REQUEST["Material"];
$Color=$_REQUEST["color"];
$Size=$_REQUEST["size"];
$Price=$_REQUEST["prices"];


if(isset($_REQUEST["order"]))
{

$query="INSERT INTO orders (Theme, StudentID, Gender, ContactNO, ProductID, Material, Color, Size, Price) VALUES ('$Theme', '$StudentID', '$Gender', '$ContactNO', '$ProductID', '$Material', '$Color', '$Size', '$Price');";
}

 if($connection->query($query))
 {
 	echo "record added successfully";
 }
 else
 	echo "error";



?>

<h1> Thankyour For ordering </h1>

</body>
</html>