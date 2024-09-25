<?php
// Start the session
if(!isset($_COOKIE["user"])) {
header("Location: alogin.html");
die();
}
?>
<!DOCTYPE html>
<html>
<body>

	
	<head><link rel="stylesheet" type="text/css" href="addstyle.css"></head>
<h3>Admin Panel</h3>
<h2>Staff Details</h2>

<p><strong>Add/Edit</strong> staff setails</p>

<form action="insert.php" method = post>
  <label for="name">NAME:</label><br>
  <input type="text" id="name" name="name" required><br><br>
  <label for="quali">QUALIFICATION:</label><br>
  <input type="text" id="quali" name="quali"><br><br>
  <label for="dept">DEPARTMENT:</label><br>
  <input list="dept" name="dept">
  <datalist id="dept">
    <option value="N/A">
    <option value="ELECTRONICS ENGINEERING">
    <option value="INSTRUMENTATION ENGINEERING">
    <option value="COMPUTER ENGINEERING">
    <option value="ELECTRONICS &COMMUNICATION">
    <option value="COMPUTER APPLICATION&BUSINESS MANAGEMENT">
  </datalist><br><br>
  <label for="pos">POSITION:</label><br>
  <input type="text" id="pos" name="pos" required><br><br>
  
  <input type="submit" value="Submit">
</form> 

<p>If you click "Submit", data will be saved on server".</p>

<a href="view.php">Back</a>
<a href="index.html">Admin Panel</a>
</body>
</html>

