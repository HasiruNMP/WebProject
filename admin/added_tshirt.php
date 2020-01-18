<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<title>Order details</title>
</head>
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
 	echo "<h1><center>Records Added Successfully!</center></h1>";
 }
 else
 	echo "error";



?>


	

<div>

<center>
<h1>  </h1>
<a href="adminpage.php"> <input class="button" type="button" value="Back To Admin Page" name="reset"> </a> 
</center>
</div>



<div id="contact" class="contact"><!--contacting options-->
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
</div>

	

</body>
</html>






