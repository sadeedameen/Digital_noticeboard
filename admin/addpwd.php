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
<h2>Notice</h2>

<p><strong>Add</strong> thought of the day</p>

<form action="pwd.php" method = post>
  
  <label for="quali">New Password:</label><br>
  <input type = "password" id="quali" name="quali"><br><br>
  <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
  <input type="submit" value="Submit">
</form> 

<p>If you click "Submit", data will be saved on server".</p>

<a href="index.html">Admin Panel</a>
</body>
</html>

