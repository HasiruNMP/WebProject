<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="Photos/logo1.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Order details</title>
</head>
<body>

<?php

$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"nsbmtshirts"); //selecting the database

//storing user input data in order_details table
	$theme=$_REQUEST["theme"];
	$ProductID=$_REQUEST["prodID"];
	$material=$_REQUEST["materials"];
	$color1=$_REQUEST["color1"];
	$color2=$_REQUEST["color2"];
	$color3=$_REQUEST["color3"];
	$color4=$_REQUEST["color4"];
	$price=$_REQUEST["price"];
	$ContactNO=$_REQUEST["contno"];



if(isset($_REQUEST["submit"]))
{

$query="INSERT INTO tshirts (Theme, prodID, Material, Color1, Color2, Color3, Color4, Prices, ContactNO)
 VALUES ('$theme', '$ProductID', '$material', '$color1', '$color2', '$color3', '$color4', '$price', '$ContactNO');";
}

 if($connection->query($query))
 {
 	echo "record added successfully";
 }
 else
 	echo "error";



?>

<h1> Thank you for ordering </h1>

</body>
</html>






