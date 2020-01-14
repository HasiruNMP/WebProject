<!DOCTYPE html>
<html>
<head>
	<title>Storing order details </title>
	<link rel="shortcut icon" type="image/x-icon" href="Photos/logo1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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



	<table class="site">
	<tr class="top">
		<td class="head"><!--Name of the site-->
			<img src="Photos/tshirtlogo.png"style="width:310px;height: auto;" >
		</td>
		<td class="logo"><!--logo class-->
			<img src="Photos/nsbmlogo.png"style="width:310px;height: auto;" >
		</td>
	</tr>
	
	</table>

	<div>
	<table class="clearfix" align="center">
      <tr>
      	
        <td><button class="button" style="vertical-align:middle" onclick="adminlogin()"><span>Admin Login</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="studentlogin()"><span>Log Out</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='#contact'"><span>Contact Us</span></button></td>
      </tr>
    </table>
</div>
	<hr>

<div>


<h1> Thankyour For ordering </h1>
</div>



<div id="contact" class="contact"><!--contacting options-->
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
</div>

	


</body>
</html>