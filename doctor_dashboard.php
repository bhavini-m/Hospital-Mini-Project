<?php
session_start();
$link = mysqli_connect("localhost","root", "", "hospital");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST["profile"])){
  $email=$_SESSION['email'];
  $msg="";
$sql="select * from profile where email='$email'";
$result=mysqli_query($link,$sql);
$num = mysqli_num_rows($result);
$target="profile/".basename($_FILES["photo"]["name"]);
$image=$_FILES["photo"]["name"];
if($num==1){
$sql="update profile SET photo='$image' where email='$email'";
mysqli_query($link,$sql);
if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target))
$msg="image uploaded";
}
else{
$sql="INSERT INTO profile VALUES('$email','$image','set')";
mysqli_query($link,$sql);
if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target))
  $msg="image uploaded";
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
  z-index:1;
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
    border:3px solid  #03296d;
    position:relative;
    
  }
  .top{
    font-size:20px;
    border:2px solid  #03296d;
    width:30%;
    background-color: #03296d;
    color:white ;
    padding:3px;
    border-radius:10px;
    position: relative;
    top:-20px;
    left:10px;
    z-index:1;

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

<div id="main" style="margin-left:250px">
<span class="ham" style="font-size:25px;padding-left:5px;cursor:pointer;position: fixed;" onclick="openNav()">&#9776;</span>
 <?php include("doc_sidenav.php"); ?>  
  <br>
  <br>
  <div class="left">
<div class="info">
<p>HERE YOU CAN UPDATE YOUR PROFILE</p>
<!--p>BOOK AN APPOINMENT WITH DOCTOR or CONSULT AN DOCTOR</p-->
<!--p>VIEW YOUR APPOINMENT STATUS AND REPORTS</p-->
<p>VIEW FEATURED EVENTS</p>
</div> 
<div class="featured">

</div>
</div>

<!-- profile updation -->
<div class="update left">
<div class="top">Update profile</div>
<div>
<p>upload or change profile photo</p>
<form action="doctor_dashboard.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="photo"><br><br>
  <input type="submit" name="profile">
</form>
</div>
</div>


</div>
<div class="footer">
<P> © Copyright Somaiya TRUST. All Rights Reserved. </P>
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