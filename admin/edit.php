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
<h2>Staff Details</h2>

<p><strong>Edit</strong> staff setails</p>


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

    $sql = "select * from staff where No = ".$id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		$row = $result->fetch_assoc();
				
	?>

<form action="update.php" method = post>
  <label for="name">NAME:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $row["NAME"];?>" required> <br><br>
  <label for="quali">QUALIFICATION:</label><br>
  <input type="text" id="quali" name="quali" value="<?php echo $row["QUALIFICATION"];?>" ><br><br>
  <label for="dept">DEPARTMENT:</label><br>
  <input list="dept" name="dept" value="<?php echo $row["DEPARTMENT"];?>">
  <datalist id="dept">
    <option value="N/A">
    <option value="ELECTRONICS ENGINEERING">
    <option value="INSTRUMENTATION ENGINEERING">
    <option value="COMPUTER ENGINEERING">
    <option value="ELECTRONICS &COMMUNICATION">
    <option value="COMPUTER APPLICATION&BUSINESS MANAGEMENT">
  </datalist><br><br>
  <label for="pos">POSITION:</label><br>
  <input type="text" id="pos" name="pos" value="<?php echo $row["POSITION"];?>" required><br><br>
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

