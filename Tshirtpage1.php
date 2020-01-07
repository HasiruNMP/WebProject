<html>
<head>
	<title>Tshirt1 </title>
	<link rel="stylesheet" type="text/css" href="tshirt.css">
</head>
<body>
	<div id="container">
	<img src="nsbmlogo.png">
<table class="nav" align="right">
      <tr>
      	
        <td><button class="button" style="vertical-align:middle" onclick="home()"><span>Home</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="adminlogin()"><span>Admin Login</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="logout()"><span>Log Out</span></button></td>
      </tr>
    </table>

	<?php ///connecting nsbmtshirts database
	
	$connection= mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"nsbmtshirts"); //selecting the database

	?>

	
	

	</div>

	

	<div id="right"> 
		<?php

			//selecting the tshirt_details table in database where prodID='SE1040'
			$result= mysqli_query($connection,"select * from tshirt_details where prodID='1234'");

		
			//Retriving the data & display on the page
	

			while($row = mysqli_fetch_array($result))
		{
			?>
	

	<form name="tshirt_details" action="storinguserinputdata.php"  method="POST">
	<table id="tshirtdetails" border="0">
	<h2><input type="text" name="theme" id="theme" readonly="readonly" value=<?php echo $row["Theme"]; ?>> </h2>
	<hr>
		
	<tr>
		<td >Student ID: </td> 
		<td><input type="text" id="stid" name="stid" placeholder="Student ID" required></td>
	</tr> 

	<tr>
		<td >Gender: </td> 
		<td><input type="radio" id="gender" name="gender" value="Male">Male <input type="radio" id="gender" name="gender" value="Female">Female</td>
	</tr> 






	<tr>
		<td >Contact NO: </td> 
		<td><input type="text" id="contno" name="contno" placeholder="Contact No" required></td>
	</tr> 


		


	<tr>
		<td >Product ID: </td> 
		<td><input  id="pid" name="pid" readonly="readonly"  value=<?php echo $row["prodID"]; ?> ></td>
	</tr> 


	<tr>
		<td >Material: </td> 
		<td>
			<input  id="Material" name="Material" readonly="readonly"  value=<?php echo $row["Material"];?> >
		</td>
	</tr> 

	<tr>
		<td>Color: </td> 
		<td> <select name="color">
			<option> </option>
			<option name="color1" style="background:<?php echo $row["Color1"];?>;color:<?php echo $row["Color1"];?>"> <?php echo $row["Color1"];?></option>
			<option name="color2" style="background:<?php echo $row["Color2"];?>;color:<?php echo $row["Color2"];?>"> <?php echo $row["Color2"];?></option>
			<option name="color3" style="background:<?php echo $row["Color3"];?>;color:<?php echo $row["Color3"];?>"> <?php echo $row["Color3"];?></option>
			<option name="color4" style="background:<?php echo $row["Color4"];?>;color:<?php echo $row["Color4"];?>"> <?php echo $row["Color4"];?></option>
		</select>

		</td>
	</tr>

	<tr>
		<td>Size: </td> 
		<td> <select name="size">
			<option> </option>
			<option name="size1">S </option>
			<option name="size2">M</option>
			<option name="size2">L</option>
			<option name="size3">XL</option>
			<option name="size4">XXL </option>
		</select>
		</td>
	</tr>

	<tr>
<td>Price: </td> <td><input id="prices" name="prices" readonly="readonly"  value=<?php  echo  $row["Prices"];break; }?>>  </td>
	</tr>		


	<tr>
		<td><input type="submit" value="Order Now" name="order"> </td><td> <input type="reset" value="Reset" name="reset"> 
		<a href="../Size chart/checksize.html"><input type="button" value="Check Size Chart" name="checks"></a></td>
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







</body>
</html>
