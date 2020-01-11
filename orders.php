<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nsbmtshirts";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
        ?>

        Select Car:
            <form method="post" action="orders.php">
            <label for="select"><select name="car" value="Select" size="1"> 
        <?php 

            $sql = "SELECT * FROM cars";  
            $result = mysql_query($sql) or die (mysql_error());  
            while ($row = mysql_fetch_array($result)) 
            { 
                    $id=$row["id"]; 
                    $car=$row["car"];  
                    $options.="<OPTION VALUE=\"$id\">".$car; 
            } 
            ?> 
                    <option>
                    <? echo $options ?>
                    </option>
                </select>
            <input type="submit" name="Submit" value="Submit">
            </form>










    </body>
</html>