<?php
// Start the session
if(!isset($_COOKIE["user"])) {
header("Location: alogin.html");
die();
}
?>
<!DOCTYPE html>
<html>
	<head><link rel="stylesheet" type="text/css" href="addstyle.css"></head>
<body>
<div>	
<h3>Admin Panel</h3>
<h2>Notification</h2>

<p><strong>Edit</strong> Notification</p>


<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = ($_GET["id"]);
    
}
else
{
 echo "NO id";
}
 
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

    $sql = "select * from notification where no = ".$id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		$row = $result->fetch_assoc();
				
	?>

<form action="updateNotification.php" method = post>
  <label for="quali">Details:</label><br>
  <textarea id="quali" name="quali" rows="18" cols="100" ><?php echo $row["info"];?></textarea><br><br>
  <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
  <input type="submit" value="Submit">
</form> 
<?php
	
	} else 
	{
		echo "0 results";
	}
    $conn->close();

 
?>

<p>If you click "Submit", data will be updated on server".</p>
<a href="view.php">Back</a>
<a href="index.html">Dasboard</a>

</div>
</body>
</html>


