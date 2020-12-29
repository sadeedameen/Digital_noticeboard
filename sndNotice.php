<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gptc";


$rows = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM notice";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $i = 0;
    while($row = $result->fetch_assoc()) {
        $rows[$i][0] = $row["head"];
        $rows[$i][1] =$row["info"];
        $rows[$i][2] =$row["date"];
        $i++;
        
   }
} else {
   echo"*** No Notice now ***";
}
echo json_encode($rows);

$conn->close();
?>
