<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$tfront=$_REQUEST["tfront"];
	$tback=$_REQUEST["tback"];
	$tside=$_REQUEST["tside"];
	$theme=$_REQUEST["theme"];
	$colour1=$_REQUEST["colour1"];
	$colour2=$_REQUEST["colour2"];
	$colour3=$_REQUEST["colour3"];
	$colour4=$_REQUEST["colour4"];
	$materials=$_REQUEST["materials"];
	$description=$_REQUEST["description"];
	$price=$_REQUEST["price"];
	$telephone=$_REQUEST["telephone"];
?>
<table border="1">
	<tr>
		<td><?php echo $theme;?></td>
	</tr>
</table>

</body>
</html>