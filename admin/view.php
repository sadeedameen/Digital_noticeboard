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
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="viewstyle.css">
   
    <title>Staff Details</title>
</head>
	
	
	<h2>Staff Details</h2>
    <div>
		
        <table border=3>
            <caption>Staff Details</caption>	
 <tr><th>NAME</th><th>QUALIFICATION</th><th>DEPARTMENT</th><th>POSITION</th><th colspan="2"><a href="add.php" title="Add a new staff ">New staff</a></th></tr>
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

$sql = "SELECT * FROM staff ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo "<tr><td>".$row["NAME"]."</td><td>".$row["QUALIFICATION"]."</td><td>".$row["DEPARTMENT"]."</td><td>".$row["POSITION"]."</td><td><button onclick=\"document.location='edit.php?id=".$row["No"]."'\">Edit</button></td><td><button onclick=\"myFunction('".$row["NAME"]."', '".$row["No"]."')\">Delete</button></td></tr>";
       
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
  var addr="delete.php?id=";
  var str1 = "Do you really want to delete ";
  var msg = str1.concat(name);
  if (confirm(msg)) {
	  
  window.location.assign(addr.concat(id))
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
    window.alert(txt);
  }
  
}
</script>    
    <a href="index.html">Admin Panel</a>
</body>

</html>
