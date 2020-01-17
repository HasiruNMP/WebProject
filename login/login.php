<html>
<head>
<title>NSBM T-shirts Login</title>
<link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
<link rel="stylesheet" type="text/css" href="../styles/style.css">
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

    <form id="login-form" method="post" action="#"><center>
        <img src="../images/logo1.png" class="avatar">
        <p id="l1">LOGIN HERE</p>
        <table>

            <tr>
                <td><p align="left" id="sid">Student ID</p>
                    <input type="text" name="studentid" id="user_id" placeholder="                Student ID"></td>  
                
            </tr>

            <tr>
                <td><p align="left" id="sid">Password</p>
                    <input type="password" name="password" id="user_pass" placeholder="                  Password"></input></td>   
            </tr>

            <tr>
                <input type="submit" class="submit" name="submit" value="login" id="sub">
            </tr>

        </table>
    </form>

<a href="../admin/adminlogin.php"> Admin Login </a>




<?php
   ob_start();
   session_start();
    
//error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nsbmtshirts";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
   die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST["studentid"]) AND isset($_POST["password"])) {
$stuid= $_POST['studentid'];
$password= $_POST['password'];

$sql = "SELECT * FROM `students` WHERE `stuid` = '$stuid' AND `password` = '$password';";
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
echo $row['stuid'];
echo $row['password'];
$stuid2 = $row['stuid'];
$password2 = $row['password'];
}

echo $stuid2;
echo $password2;

if ($stuid = $stuid2 && $pass = $password2) 
{
   $_SESSION['valid'] = true;
   $_SESSION['timeout'] = time();
   $_SESSION['stuid'] = $stuid2;
   $_SESSION['password'] = $password2;
   
   echo 'You have entered valid use name and password';
   header("Location: ". $_SESSION['current_page']);
}
else 
{
   echo 'Wrong username or password';
}
}
?>
    <div id="contact" class="contact"><!--contacting options-->
    <p ><u><center>Contact Us</center></u></p>
    <p><center>tshirts@nsbm.com</center></p>
    <p><center>011-1231235</center></p>
</div>


</body>
</html>