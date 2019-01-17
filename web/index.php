<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
<?php

$servername = "mysql";
$username = "root";
$password = "\"root\"";

//try {
//    $conn = new PDO("mysql:host=mysql;port=3306;dbname=webdb", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//    }
//catch(PDOException $e)
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }
//
    $con = mysqli_connect("0.0.0.0:3306","yohann","yohann","webdb");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
</div>
<?php include("includes/footer.php");?>

</body>
</html>
