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

<p><strong>Add</strong> a new Notice</p>

<form action="insertNotice.php" method = post>
  <label for="name">Heading/Subject</label><br>
  <input type="text" id="name" name="name"  required> <br><br>
  <label for="quali">Details:</label><br>
  <textarea id="quali" name="quali" rows="18" cols="100" > </textarea><br><br>
  <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
  <input type="submit" value="Submit">
</form> 

<p>If you click "Submit", data will be saved on server".</p>

<a href="notice.php">Back</a>
<a href="index.html">Admin Panel</a>
</body>
</html>

