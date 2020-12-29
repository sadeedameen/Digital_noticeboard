<?php  
session_start();    
    //include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        //$username = stripcslashes($username);  
        $password = stripcslashes($password);  
       // $username = mysqli_real_escape_string($con, $username);  
        //$password = mysqli_real_escape_string($con, $password);  
      
       /* $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     */
        
$myfile = fopen("pwd.txt", "r") or die("Unable to open file!");
$mypwd = fread($myfile, filesize("pwd.txt"));
fclose($myfile);
                                            
        
 
if($username == 'admin')
{
  if($password == $mypwd)
{
		echo "HI";
$cookie_name = "user";
$cookie_value = "admin";
setcookie($cookie_name, $cookie_value, time() + (600), "/"); 
header("Location: index.php");
die();
}
else{
	echo "Wrong Password";
	header("Location: wlogin.html");
die();
	
}
}else
{
echo "Wrong User Name";
header("Location: wlogin.html");
die();
}
?>  
