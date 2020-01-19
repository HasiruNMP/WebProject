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
	$description=$_REQUEST["description"];
	$front=$_REQUEST["tfront"];
	$back=$_REQUEST["tback"];
	$side=$_REQUEST["tside"];



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

<table border="1" align="center" style="width: 600px;height: auto;">
	<tr>
		<td>Product ID:</td>	<td> <?php echo "$ProductID" ?> </td>
	</tr>
	<tr>
		<td>Event/Theme:</td>	<td> <?php echo "$theme" ?> </td>
	</tr>
	<tr>
		<td>Available Colours:</td>	
		<td> 
		<select name="color">
			<option style="background-color:<?php echo "$color1" ?>; "> <?php echo "$color1" ?> </option>
			<option style="background-color:<?php echo "$color2" ?>; "> <?php echo "$color2" ?> </option>
			<option style="background-color:<?php echo "$color3" ?>; "> <?php echo "$$color3" ?> </option>
			<option style="background-color:<?php echo "$color4" ?>; "> <?php echo "$$color4" ?> </option>
			
		</select>
		</td>
	</tr>
	<tr>
		<td>Available Materials:</td>	
		<td>
		
		 <?php echo "$material"?> 
		
		</td>
	</tr>
	<tr>
		<td>Price:</td>	<td> <?php echo "$price" ?> </td>
	</tr>
	<tr>
		<td>Description:</td>	<td> <?php echo "$description" ?> </td>
	</tr>
	<tr>
		<td>Contact Number:</td>	<td> <?php echo "$ContactNO" ?> </td>
	</tr>
	<tr>
		<td>Front view:</td> <td style="background-image: url('../images/<?php echo "$front" ?>');background-size: 200px;background-repeat: no-repeat;height: 200px;">  </td>
	</tr>
	<tr>
		<td>Back view:</td>	<td style="background-image: url('../images/<?php echo "$back" ?>');background-size: 200px;background-repeat: no-repeat;height: 200px;">  </td>
	</tr>
	<tr>
		<td>Side view:</td>	<td style="background-image: url('../images/<?php echo "$side" ?>');background-size: 200px;background-repeat: no-repeat;height: 200px;">  </td>
	</tr>




</table>


	

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






