<html>
<head>
</head>
<body>
	<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
echo("Connection failed:".$conn->connect_error);
}
else
{
echo("Connection Successful");
}

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$gender=$_REQUEST['gender'];
$year=$_REQUEST['year'];



$query="INSERT INTO student (firstname, lastname, username, password, gender, year) VALUES ('$firstname', '$lastname', '$username', '$password', '$gender', '$year');";

if($conn->query($query))
{
echo "Record Added successfully!";
}
else
{
echo "Error";
}

?>

</body>
</html>
