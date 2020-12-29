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
    $id = test_input($_POST["id"]);
  

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

    $sql = "UPDATE staff SET NAME='".$name."',QUALIFICATION='".$quali."',DEPARTMENT='".$dept."',POSITION='".$pos."' WHERE No=".$id;

    if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
		} else {
		echo "Error updating record: " . mysqli_error($conn);
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
</br>

</h3></font>
</th></tr></table>
<a href="view.php">Back</a>
<a href="index.html">Admin Panel</a>
</body>
</html>

