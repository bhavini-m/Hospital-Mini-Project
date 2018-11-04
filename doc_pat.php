<style>
*{
  box-sizing: border-box;   
}

.patient{
 border:4px solid #03296d;
border-radius:15px;
margin-bottom:20px;
margin-left:40px;
background-color:#5F679D;
color:white;
}
.patient a{
  text-decoration: none;
}
h4{
  margin-left:35px;
padding-top:10px;
color:white;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
session_start();
$link = mysqli_connect("localhost","root", "", "hospital");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<style type="text/css"> 
  
.ham{
  width:100px;
  font-size: 100px;
  position:fixed;
  }

  .footer{
    text-align:center;
    background-color: #03296d;
    padding:5px 0px 5px 0px;
    width:100%;
    color:white;
    position:fixed;
    bottom:0px;

  }
  h4{
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

<?php include("includes/head.php");  ?>

<div id="main" style="margin-left:250px";>
<span class="ham" style="font-size:25px;padding-left:5px;cursor:pointer;position: fixed;" onclick="openNav()">&#9776;</span>

 <?php 

 include("doc_sidenav.php");

  include("allpatient.php"); 

   ?>
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