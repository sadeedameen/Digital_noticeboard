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
	<h2>'Password saved</h2>
		</br> </br> </br>
		<table align="center" style="margin: 0px auto;"><tr><th><font color=white><h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$name = test_input($_POST["name"]);
    $quali = test_input($_POST["quali"]);
    
$myfile = fopen("pwd.txt", "w") or die("Unable to open file!");
$txt = $quali;
fwrite($myfile, $txt);
fclose($myfile); 

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

</h3></font>
</th></tr></table>
</br>

<a href="index.html">Admin Panel</a>

</body>
</html>
