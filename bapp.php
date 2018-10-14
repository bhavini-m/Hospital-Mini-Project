<?php
session_start();
?>
<style type="text/css">
  
.ham{
  width:100px;
  font-size: 100px;
  position:fixed;
  }

  .footer{
    position: fixed;
    bottom:0;
    text-align:center;
    background-color: #03296d;
    padding:5px 0px 5px 0px;
    width:100%;
    color:white;

  }
</style>
<!DOCTYPE html>
<html>
<head>
  <title> Somaiya Hospital</title>
  <link rel="stylesheet" type="text/css" href="css/PD.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/PD.css">
</head>
<body>
 <?php include("sidenav.php"); ?> 
<?php include("includes/head.php"); ?>
<div id="main">
<span class="ham" style="font-size:25px;padding-left:5px;cursor:pointer;position: fixed;" onclick="openNav()">&#9776;</span>
<?php include("appointment.php");?>

</div>
<div class="footer">
<P> © Copyright RAHULPUNJABI TRUST. All Rights Reserved. </P>
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