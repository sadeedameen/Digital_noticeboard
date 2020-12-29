<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Polytechnic</title>
    <style>
        body {
            overflow-x: hidden;
            overflow-y: hidden;
        }

        html {
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .inner_main_menu {
            margin: 0;
            width: device-widt;
        }

        .inner_main_menu ul {
            margin: 0;
            padding: 20px 0 0;
            list-style: none;
            text-align: center;
            margin-right: -200px;
        }

        .inner_main_menu ul li {
            float: none;
            display: inline-block;
        }

        .inner_main_menu ul li:nth-child(1) {
            float: center;
            text-align: center;
            font-size: 42px;
        }

        .inner_main_menu ul li:nth-child(2) {
            float: center;
            text-align: center;
            font-size: 25px;
        }

        .inner_main_menu ul li a {
            color: rgb(65, 65, 65);
            text-transform: capitalize;
            display: block;
        }

        #main_menu {
            width: 100%;
            position: relative;
        }

        .logo_area {
            width: 50px;
            height: 150px;
            position: absolute;
            content: "";
        }

        .logo_area img {
            width: 225px;
            height: 225px;
            padding: 15px 15px 15px;
        }

        .card {
            text-align: center;
            border-radius: 15px;
			align: center;
            border-left: solid rgb(161, 161, 161) 1px;
            border-right: solid rgb(173, 173, 173) 1px;
            box-shadow: 0px 3px 15px #aca7a7;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
    
    
   
    
    
</head>

<!-- Body structure -->
<!--            __________________________
First sessiom-> |         Heading        |                       
                |________________________|
                |    |L1C1|L1C2|L1C3|L1C4|
       ->       |    |____|____|____|_ __|
                |R1C1|                   |
                |    |                   |
                |    |        L2C1       |
                |    |                   |

R1C1 is row 1 column 1 containing college bg-info
L1 is Row 1 column 2
L2 is row 1 column 2 

Summary : Entire page devided into 1 row and 2 columns, Second column has 2 rows and in that, first row contains 4 columns and second row contains one colun  -->



<body>
    <!-- Start of first session -->
    <!-- Main container inside bodu -->
    <div class="container">
        <!-- Navigation, Setting this as the title part with logo and name -->

        <div class="main_menu">
            <div class="logo_area">
                <a href=""><img src="logo.png" alt=""></a>
            </div>
            <div class="inner_main_menu">
                <ul>
                    <li>
                        <a href="#" aria-disabled="true"> Government Polytechnic College Neyyattinkara <br>
                            Thiruvananthapuram</a>
                    </li>

                    <li>
                        <a href=" #" aria-disabled="true"> Project Developed By <b style="color: black;"> Department of
                                Electronics (2017 - 2020 Batch) </b> Students </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
   

  
        
    <div>IP address: <?php
                                        $myfile = fopen("ip.txt", "r") or die("Unable to open file!");
                                        echo "" . fread($myfile, filesize("ip.txt"));
                                        fclose($myfile);
                                        ?>
    </div>
      <div class="container-fluid" style="padding-top: 50px; padding-left: 60px; padding-bottom: 50px;">
        <!-- R1 -->
        <div class="row">
            <!-- R1C1 -->
            <div class="col-lg-3">
                <div class="card" style="width: 320px;">
                    <img src="poly.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>About GPTC Neyyattinkara</b></h5>
                        <p class="card-text" style="text-align: justify;">
                            Govt Polytechnic College, Neyyattinkara was established in the year 1991. The College was
                            affiliated to Board of Technical Examination. It is approved by AICTE (All India Council for
                            Technical Education).

                            GPTC offers various courses like Diploma. The college has a well developed infrastructure
                            and facilities like Auditorium, Sports and more.

                            The college has well trained and experienced faculty members. Govt Polytechnic College,
                            Neyyattinkara address, contact number is provided

                            in contact details : </p>
                        <p> 0471 222 2935 </p>
                        <p> 0471 222 6895 </p>
                        <p> 0471 222 7677 </p>


                    </div>
                    </div>
                    <br>
                    
                    
                <div class="card bg-white text-center" style="width: 320px;  height: 630px; align: center; overflow-x:hidden;">
                <blockquote class="blockquote mb-0" style="text-align: center";>
<!--
                    <div style="height: 5%"></div>
-->

                    <object type="text/html" data="card.php" style="width: 100%; height:570px; overflow-x:visible; 
                    margin-left:10px " standby="loading data" id="contentarea2">></object>
                    
                    <footer class="">

                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
        
                    
                </div>
            </div>
            <!-- R1C2 = L1-->
            <div class="col-lg-9 col-sm-12">
                <!-- L1R1 -->
                <div class="row">
                    <!-- L1C1 -->
                    <div class="col" style="margin-left: 0px;">
                        <div class="card bg-info text-white text-center" style="width: 260px; height: 180px;">
                            <blockquote class="blockquote mb-0">
                                <p>
                                    <h6>Temperature</h6>
                                </p>
                                <p>
                                    <h4><?php
                                        $myfile = fopen("temperature.txt", "r") or die("Unable to open file!");
                                        echo "Temperature:" . fread($myfile, filesize("temperature.txt"));
                                        fclose($myfile);
                                        ?></h4>
                                </p>
                                <footer class="text-white">
                                    <small>
                                        Live From Sensor Module
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- L1C2 -->
                    <div class="col" style="margin-left: -90px;">
                        <div class="card bg-primary text-white text-center" style="width: 260px; height: 180px;">
                            <blockquote class="blockquote mb-0">
                                <p>
                                    <h6>Time</h6>
                                </p>
                                <p>
                                    <h1>05:59:00 PM</h1>
                                </p>
                                <footer class=" text-white">
                                    <small>
                                        Live From Sensor Module
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- L1C3 -->
                    <div class="col" style="margin-left: -90px;">
                        <div class="card bg-success text-white text-center" style="width: 260px; height: 180px;">
                            <blockquote class="blockquote mb-0">
                                <p>
                                    <h6>Humidity</h6>
                                </p>
                                <p>
                                    <h5><?php
                                        $myfile = fopen("humidity.txt", "r") or die("Unable to open file!");
                                        echo "Humidity:" . fread($myfile, filesize("humidity.txt"));
                                        fclose($myfile);
                                        ?>.</h5>
                                </p>

                                <footer class=" text-white">
                                    <small>
                                        Live From Sensor Module
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- L1C4 -->

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

                    $sql = "SELECT * FROM notification";
                    $result = $conn->query($sql);
                    $outString = "***";
                    $imp = null;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($imp == null)
                                $imp = $row["info"];
                            $outString = $outString . $row["info"] . "***";
                        }
                    } else {
                        $outString = "*** No Notifications ***";
                    }

                    $conn->close();
                    ?>
                    <div class="col" style="margin-left: -90px;">
                        <div class="card bg-danger text-white text-center" style="width: 260px; height: 180px;">
                            <blockquote class="blockquote mb-0">
                                <p>
                                    <h4>Thought of the day</h4>
                                </p>
                                <p>
                                    <h6>
                                        <?php
                                        $myfile = fopen("admin/thought.txt", "r") or die("Unable to open file!");
                                        echo "" . fread($myfile, filesize("admin/thought.txt"));
                                        fclose($myfile);
                                        ?>.
                                    </h6>
                                    <footer class=" text-white">

                                    </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!-- L1R2 = L2 -->
                <div class="row">
                    <!-- L2C1 -->
                    <div class="col-lg-12" style="margin-left: -30px; margin-top: 20px; padding-right: 0px;">

                        <div class="card bg-white text-center" style=" height: 1200px; ">
                            <blockquote class="blockquote mb-0">
                                <p>Staff Details</p>
										 
                                <object type="text/html" data="tables/pHOD.php" style="width: 90%; height: 300%; border: solid #feff; overflow-x:visible;" standby="loading data" id="contentarea"></object>
                                <footer class="blockquote-footer ">

                                    <small>
                                        Developed By <cite title="Source Title">2017-2020 Batch</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- end of L2C1 -->
                </div>
                <!-- end of L1R2 = L2 -->

            </div>
        </div>

    </div>
    </div>

<script language = "javascript" type = "text/javascript">
var objTag = document.getElementById("contentarea");
if (objTag != null)
 {
	var i = 0;
	
	var tables = ["cabm.php", "ec.php", "General.php", "pHOD.php", "Cs.php", "Electronics.php", "Instrumentation.php"];
	setInterval(function(){
		objTag.setAttribute('data', 'tables/'+tables[i]); 
		i++;
		i = i % 7;
		}	
		, 16000);
	
        
 }
</script>   

    <!-- L1R3 = L3 -->

<div class="row container-fluid" style="padding-left: 60px; padding-top: 5px; padding-bottom: 50px">
<div class="col-5">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:20px">
    <div class="carousel-item active">

      <img class="d-block w-100" src="achievements/0.jpg" alt="First slide">
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/5.jpg" alt="Second slide">
     
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/1.jpg" alt="Second slide">
     
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/2.JPG" alt="Second slide">
     
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/3.JPG" alt="Second slide">
    
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/4.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/5.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/6.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/7.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/8.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/9.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/10.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/11.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/12.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/13.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/14.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/15.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/16.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/17.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/18.jpg" alt="Second slide">
    
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="achievements/19.jpg" alt="Second slide">
    
    </div>

  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="col-7" >
    <div class="card mb-3">
    
  <div class="card-body" style="height: 300px;>
    <h5 class="card-title">For GPTCN from Electronics batch - 2017-2020</h5>
    <p class="card-text">Govt Polytechnic College, Neyyattinkara was established in the year 1991. The College was affiliated to Board of Technical Examination. It is approved by AICTE (All India Council for Technical Education). GPTC offers various courses like Diploma. The college has a well developed infrastructure and facilities like Auditorium, Sports and more. The college has well trained and experienced faculty members. Govt Polytechnic College, Neyyattinkara address, contact number is provided in contact details </p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>


</div>


<div class="row container-fluid" style="padding-left: 60px">
<div class="col-2">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:50px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="logo.png" alt="First slide">
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="students/Akhiljith.BS.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Akhiljith.BS</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Akshay Kumar S.V (30-09-1999).jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Akshay Kumar S.V</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/AMALSANTHOSH.S.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>AMALSANTHOSH.S</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Anoj j s.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Anoj j s</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Anoop s.jpeg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Anoop s</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Anusha.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Anusha</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

</div>

<div class="col-2">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:50px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="logo.png" alt="First slide">
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="students/Arun vs.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Arun v</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Bharath.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Bharath</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Bibin Raj.jpeg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Bibin Raj</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/gokul gokul.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Gokul</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Jibin ss.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Jibin ss</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Jinitha.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Jinitha</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>


  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>

<div class="col-2">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:50px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="logo.png" alt="First slide">
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="students/Nandhu.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Nandhu</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Niran R k.jpeg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Niran R k</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Nisha.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Nisha</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Prabhul Chandra-01.jpeg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Prabhul Chandra</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Pranav. KS.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Pranav. KS</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Rajath lal R.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Rajath lal R</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>


  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="col-2">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:50px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="logo.png" alt="First slide">
    </div>
    <div class="carousel-item" >
     <img class="d-block w-100" src="students/Sajan J S.JPG" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Sajan J S</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Salini.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Salini</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/SANIYA K S.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>SANIYA K S</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/SANJEEV.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>SANJEEV</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Sarath rr.jpeg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Sarath R R</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Sreekuttan.jpg    " alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Sreekuttan</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>


  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="col-2">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:50px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="logo.png" alt="First slide">
    </div>

        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Aparna Raj.A.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Aparna Raj.A</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>

  </div>
  
          <div class="carousel-item" >
     <img class="d-block w-100" src="students/jinju.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Jinju</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
    
    
          <div class="carousel-item" >
     <img class="d-block w-100" src="students/Raj Mohan M-1.JPG" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Raj Mohan M</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
    
            <div class="carousel-item" >
     <img class="d-block w-100" src="students/Sujin vs.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Sujin vs</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>

  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

<div class="col-2">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="border: solid white 0.5px; border-radius:50px">
    <div class="carousel-item active">
      <img class="d-block w-100" src="logo.png" alt="First slide">
    </div>

        <div class="carousel-item" >
     <img class="d-block w-100" src="students/Lalraj lk.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Lalraj lk</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
    
            <div class="carousel-item" >
     <img class="d-block w-100" src="students/Aravind unni.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>Aravind unni</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>
    
        <div class="carousel-item" >
     <img class="d-block w-100" src="students/RAKHI AK .jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block" style="color:black; background:white; opacity: 0.7;">
     <h5>RAKHI AK</h5>
     <!-- <p>Electronics Batch</p> -->
     </div>
    </div>



  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>



</div>





    <div class="card bg-black text-center footer" style=" height: 100px; background: rcyan; color: white; border-radius: 0px;">


        <fieldset >
            <marquee bgcolor="cyan"><font size=5000> <mark><strong><code ><?php echo $outString; ?> 
            </code></strong><br></mark> </font></marquee>
        </fieldset>

    </div>


</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>




</script>

</html>
