<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/mybootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>

<body style="text-align: center; width: 300px">
    <div class="row">
    <div class="col-12">
        <div class=" card text-justify">
            <div class="card-header"><b><h2 id="sub">Notice</h2></b>
                
            </div>
            <div class="card-body">
                
                <p class="card-text" id="sdd"></>
.</p>

<script>
var i=0;
setInterval(function(){ 
	
var xmlhttp = new XMLHttpRequest();		
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("sub").innerHTML = myObj[i][0];
    document.getElementById("sdd").innerHTML = myObj[i][1];
    document.getElementById("date").innerHTML = myObj[i][2];
    i++;
	i = i % myObj.length;
  }
};
xmlhttp.open("GET", "sndNotice.php", true);
xmlhttp.send();

} , 16000);

</script>

                
            </div>
            <div class="card-footer text-muted">
                <b id="date"></b>
            </div>
        </div>
    </div>

 
</body>

</html>
