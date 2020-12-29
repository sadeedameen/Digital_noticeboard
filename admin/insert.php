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
    $name = test_input($_POST["name"]);
    $quali = test_input($_POST["quali"]);
    $dept = test_input($_POST["dept"]);
    $pos = test_input($_POST["pos"]);
    
  

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

    $sql = "INSERT INTO staff (NAME,QUALIFICATION,DEPARTMENT,POSITION) VALUES ('".$name."', '".$quali."', '".$dept."', '".$pos."')";

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
<a href="view.php">Back</a>
<a href="index.html">Admin Panel</a>
</body>
</html>
