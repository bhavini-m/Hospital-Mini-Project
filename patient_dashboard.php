<?php
session_start();
$link = mysqli_connect("localhost","root", "", "hospital");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["Book"]))
{
$fname=$_POST['fname'];
$email=$_POST["email"];
$date1=$_POST["adate"];
$sym=$_POST["psymptom"];
$dept=$_POST["dept"];
$time1=$_POST["atime"];

$sql = "INSERT INTO appointment (fname, Email, date1, Symptoms ,department, time1) 
    VALUES ('$fname','$email','$date1','$sym', '$dept','$time1')";
 
if(mysqli_query($link, $sql))
{
 echo"added"; 
}

}
?>
<style type="text/css">
 *{
  box-sizing: border-box;
 } 
.ham{
  width:100px;
  font-size: 100px;
  position:fixed;
  }

  .footer{
    text-align:center;
    background-color: #03296d;
    padding:5px 0px 0px 0px;
    margin-bottom: 0px;
    width:100%;
    color:white;
    position:fixed;
    bottom:0;

  }
  .left{
    width:49%;
    float:left;
    margin-left:3px;
  }
.info p
  { 
    background-color:  #03296d;
    color:white;
    border-left: 10px solid rgb(245,124,35);
    padding :5px;
    margin-bottom: 2px;
    margin-left: 5px;
    box-shadow: 5px 5px 4px #888;   
  }
  .featured{
    height:50%;
     margin-left: 5px;
    border:1px solid black;
  }
  .update{
    height:50%;
    border:1px solid black;
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

<div id="main">
<span class="ham" style="font-size:25px;padding-left:5px;cursor:pointer;position: fixed;" onclick="openNav()">&#9776;</span>
 <?php include("sidenav.php"); ?> 
  <br>
  <br>
  <div class="left">
<div class="info">
<p>HERE YOU CAN UPDATE YOUR PROFILE</p>
<p>BOOK AN APPOINMENT WITH DOCTOR or CONSULT AN DOCTOR</p>
<p>VIEW YOUR APPOINMENT STATUS AND REPORTS</p>
<p>VIEW FEATURED EVENTS</p>
</div> 
<div class="featured">

</div>
</div>
<div class="update left">
<p>here is the section for profile updation</p>
</div>

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