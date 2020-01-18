<?php
session_start();
if ( isset( $_SESSION['password'] ) ) {
} else {
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    header("Location: ../login/login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	
<body>

<table class="site">
	<tr class="top">
		<td class="head"><!--Name of the site-->
			<img src="../images/tshirtlogo.png"style="width:310px;height: auto;" >
		</td>
		<td class="logo"><!--logo class-->
			<img src="../images/nsbmlogo.png"style="width:310px;height: auto;" >
		</td>
	</tr>
	
	</table>

	
	<hr>

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
 	echo "<h1><center>Your order has been sucessfully recorded !</center></h1>";
 }
 else
 	echo "error";



?>



	

<div>

<center>
<h1>  </h1>
<a href="../index.php"> <input class="button" type="button" value="Back To Home Page" name="reset"> </a> 
</center>
</div>



<div id="contact" class="contact"><!--contacting options-->
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
</div>

	


</body>
</html>