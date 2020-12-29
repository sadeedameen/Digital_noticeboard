<?php
// Start the session
if(!isset($_COOKIE["user"])) {
header("Location: alogin.html");
die();
}
?>
<html>
<head>
	<title>GPTC Admin</title>
	<link rel="stylesheet" type="text/css" href="finemsg.css">
		
</head>
<body>
	
		</br> </br> </br>
		<table align="center" style="margin: 0px auto;"><tr><th><font color=white><h2>
	
<?php

    $servername = "localhost";  
    $username = "root";
    $password = "";
    $dbname = "gptc";
    
    
    if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = ($_GET["id"]);
    $id = test_input($id);
	}
	else
	{
		echo "NO id";
	}

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM notification WHERE no=".$id;

    if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
		} else {
		echo "Error deleting record: " . mysqli_error($conn);
		}

    $conn->close();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

</h3></font>
</th></tr></table>
</br>
<a href="notif.php">Back</a>
<a href="index.html">Admin Panel</a>
</body>
</html>
