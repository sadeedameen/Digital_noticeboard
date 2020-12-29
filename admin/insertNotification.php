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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quali = test_input($_POST["quali"]);
    
  

    $servername = "localhost";  
    $username = "root";
    $password = "";
    $dbname = "gptc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO notification (info) VALUES ('".$quali."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlspecialchars_decode($data);
    $data = addslashes($data);
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

