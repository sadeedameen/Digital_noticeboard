<?php
// Start the session
if(!isset($_COOKIE["user"])) {
header("Location: alogin.html");
die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="viewstyle.css">
    
    <title>Notice</title>
</head>

<body>
	
	<h2>Notice Details</h2>
		<div>
        <table border=3 align="center" style="margin: 0px auto;">
            <caption>Notice Details</caption>	
 <tr><th>Date</th><th>Heading</th><th>Details</th><th colspan="2"><a href="addNotice.php" title="Add a new Notice ">New Notice</a></th></tr>
<?php
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

$sql = "SELECT * FROM notice ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo "<tr><td>".$row["date"]."</td><td>".$row["head"]."</td><td>".$row["info"]."</td><td><button onclick=\"document.location='editNotice.php?id=".$row["no"]."'\">Edit</button></td><td><button onclick=\"myFunction('".$row["head"]."', '".$row["no"]."')\">Delete</button></td></tr>";
       
    }
} else {
    echo "0 results";
}

$conn->close();
?>



</table>
    </div>
    

<script>
function myFunction(name, id) {
  var txt;
  var addr="deleteNotice.php?id=";
  var str1 = "Do you really want to delete ->";
  var msg = str1.concat(name);
  if (confirm(msg)) {
	  
  window.location.assign(addr.concat(id))
    
  } else {
    txt = "You pressed Cancel!";
    window.alert(txt);
  }
  
}
</script>    
    <a href="index.html">Admin Panel</a>
</body>

</html>
