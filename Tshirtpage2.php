<html>
<head>
	<title>Tshirt2</title>
	<link rel="stylesheet" type="text/css" href="tshirt.css">
</head>
<body>

	<?php ///connecting nsbmtshirts database
	
	$connection= mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"nsbmtshirts"); //selecting the database

	?>

	
	<div id="container">
	<ul>
		<li><a href="">Login Page</a></li>
		<li><a href="">Home</a></li>
		<li><a href="">Book My T-shirt</a></li>
		<li><a href="">Contact Details</a></li>
	</ul> 
	</div>

	

	<div id="right"> 
	<h2>19.1 Batch Party Tshirt</h2>
	<hr>
	<table id="tshirtdetails" border="0">
		<form name="tshirt_details" action=""  method="POST">

		<?php

			//selecting the tshirt_details table in database where prodID='SE1040'
			$result= mysqli_query($connection,"select * from tshirt_details where prodID='SE1040'");

		
			//Retriving the data & display on the page
		while($row = mysqli_fetch_array($result))
		{
			?>

	<tr>
		<td >Student ID: </td> 
		<td><input type="text" id="stid" name="stid" placeholder="Student ID" ></td>
	</tr> 


	<tr>
		<td >Contact NO: </td> 
		<td><input type="text" id="contno" name="contno" placeholder="Contact No" ></td>
	</tr> 


		


	<tr>
		<td >Product ID: </td> 
		<td><input  id="pid" name="pid" readonly="readonly"  value=<?php echo $row["prodID"]; ?> ></td>
	</tr> 


	<tr>
		<td >Material: </td> 
		<td><select name="Material">
			<option name="material1" ><?php echo $row["Material1"];?> </option>
			<option name="material2"><?php echo $row["Material2"];?> </option>
			
		</select>

		</td>
	</tr> 

	<tr>
		<td>Color: </td> 
		<td> <select name="color">
			<option name="color1"><?php echo $row["Color1"];?></option>
			<option name="color2"><?php echo $row["Color2"];?></option>
			<option name="color3"> <?php echo $row["Color3"];?></option>
		</select>

		</td>
	</tr>

	<tr>
		<td>Size: </td> 
		<td> <select name="Size">
			<option name="size1"><?php echo $row["Size1"];?></option>
			<option name="size2"><?php echo $row["Size2"];?></option>
			<option name="size3"><?php echo $row["Size3"];?> </option>
			<option name="size3"><?php echo $row["Size4"];?> </option>
		</select>
		</td>
	</tr>

	<tr>
		<td>Price: </td> <td><input id="prices" name="prices" readonly="readonly"  value=<?php echo $row["Prices"];break;}?>/=> </td>
	</tr>		


	<tr>
		<td><input type="submit" value="Order Now" name="order"> </td>
		<td><a href="../Size chart/checksize.html"><input type="button" value="Check Size Chart" name="checks"></a></td>
	</tr>
</form>
</table>
	</div>

	<div id="left">
	<table id="tshirttable" border="0">
	<tr>
		<td>
	<a href="red.jpg"><img src="red.jpg"></a>
		</td>

		<td>
	<a href="blue.jpg"><img src="blue.jpg"></a>
		</td>
	</tr>

	<tr>
		<td  id="thirdrow" colspan="2">
	<a href="black.jpg"><img id="thirdimg" src="black.jpg"></a>
		</td>
	</tr>
</table>
	</div>

	<div id="bottom">
			this is bottom side
	</div>





<?php
//storing user input data in user table
$StudentID=$_REQUEST["stid"];
$ContactNO=$_REQUEST["contno"];
$ProductID=$_REQUEST["pid"];
$Material=$_REQUEST["Material"];
$Color=$_REQUEST["color"];
$Size=$_REQUEST["Size"];
$Price=$_REQUEST["prices"];

$query="INSERT INTO order_details (StudentID, ContactNO, ProductID, Material, Color, Size, Price)
 VALUES ('$StudentID', '$ContactNO', '$ProductID', '$Material', '$Color', '$Size', '$Price');";

 if($connection->query($query))
 {
 	echo "record added successfully";
 }
 else
 	echo "error";



?>

</body>
</html>
