<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>

<body style="text-align: center;">
	<h2> INSTRUMENTATION ENGINEERING </h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <caption>INSTRUMENTATION ENGINEERING</caption>	
 <tr><th>NAME</th><th>QUALIFICATION</th><th>DEPARTMENT</th><th>POSITION</th><tr>
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

$sql = "SELECT * FROM staff where DEPARTMENT = 'INSTRUMENTATION ENGINEERING'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo "<tr><td>".$row["NAME"]."</td><td>".$row["QUALIFICATION"]."</td><td>".$row["DEPARTMENT"]."</td><td>".$row["POSITION"],"</td></tr>";
       
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</table>
    </div>
</body>

</html>
