<?php
// Start the session
if(!isset($_COOKIE["user"])) {
header("Location: login.html");

}
?>
<html>
	<head>
		<Title>Administrator Dashboard</Title>
		<link rel="stylesheet" type="text/css" href="indexstyle.css">
		</br></br></br></br></br>
		<h1>
Government Polytechnic College Neyyattinkara</br>
Thiruvananthapuram

</h1>	
</head>
	<body>
		<h3><font color="white">Administrator Dashboard</font></h3>
		<a href="view.php"><b>Staff Information</b></a>
		</br></br>
		<a href="notice.php"><b>     Notices </b>    </a>
		</br></br>
		<a href="notif.php"><b>Notifications</b></a>
		</br></br>
		<a href="addthought.php"><b>Thought of the day</b></a>
		</br></br>
		<a href="addpwd.php"><b>Admin passward</b></a>
		</br></br>
		<a href="logout.php"><b>Logout</b></a>
		
		
		
	</body>
</html>
