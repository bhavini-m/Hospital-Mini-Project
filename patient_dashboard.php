<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Somaiya Hospital</title>
  <link rel="stylesheet" type="text/css" href="css/PD.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/PD.css">
</head>
<body>

<?php include("includes/head.php");  ?>

<div id="main" style="width:0px";>
<span style="font-size:25px;padding-left:5px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
  <?php include("sidenav.php"); ?> 

<div class="content">
<!-- <?php include("Appointment.html");   ?> -->

</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function openNav() {
    // $('#sidenav').toggleclass("new");
    var x=document.getElementById("mySidenav").style.width;
   if (x=="0px") { 
     document.getElementById("mySidenav").style.width="250px";
   document.getElementById("main").style.marginLeft = "250px";
 
}
else{
   document.getElementById("mySidenav").style.width ="0px";
    document.getElementById("main").style.marginLeft ="0px";
}

}
</script> 
  
</body>
</html>