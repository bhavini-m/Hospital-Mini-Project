<style>
.sorry {
  font-size:22px;
  margin-left:20px;

}
.details{
  border:3px solid black;
  width:50%;
  margin:15px;
  padding:10px;
   background-color:grey;
   border-radius:10px;
}
.details p{
  font-size: 22px;
  color:white; 
}
.details p strong{
  color:#03296d;
}
.note{
  margin-left:15px;
  padding:10px;
  border:3px solid black;
  border-radius:10px;
  width:50%;
}
.note p{
  font-size:20px;
}
.note strong{
  color:green;
}
</style>
<?php
session_start();
$link = mysqli_connect("localhost","root", "", "hospital"); 
if(isset($_POST["Book"]))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST["email"];
$date1=$_POST["adate"];
$sym=$_POST["psymptom"];
$dept=$_POST["dept"];
$doc=$_POST['doc'];
$time1=$_POST["atime"];
$sql = "INSERT INTO appointment (fname,lname, Email, date1, Symptoms ,department,docemail, time1,status) 
    VALUES ('$fname','$lname','$email','$date1','$sym','$dept','$doc','$time1','noo')";
 
if(mysqli_query($link, $sql))
{
 //appointment added 
}

//include("Email/appointmentfixed.php");
} 
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
<div id="main" style="margin-left:250px">
<span class="ham" style="font-size:25px;padding-left:5px;cursor:pointer;position: fixed;" onclick="openNav()">&#9776;</span>
<?php 
$email=$_SESSION['email'];
$sql="select * from appointment where Email='$email'";
$result=mysqli_query($link,$sql);
$num=mysqli_num_rows($result);

if($num==0){
include("appointment.php");
}
else{
  $check=1;
  $num=mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)){
        if($row['status']=='noo')
          {?><br><br>
            <div class="sorry">
              <p>Your current appointment</p>
            </div>
              <div class="details">
                <p><strong>Departement</strong>: <?php echo $row['department']; ?></p>
                <p><strong>Doctor's mail ID</strong>:<?php echo $row['docemail']; ?></p>
                <p><strong>Date: </strong><?php echo $row['date1']; ?></p>
                <p><strong>time:</strong> <?php echo $row['time1']; ?></p>
              </div>
              <div class="note">
                <p><strong>NOTE:</strong>You can apply for other appointment only if your current/previous appointment is completed.</p> 
              </div>

            </div>
        <?php
        $check=2;
        break;
      }
      } 
      if($check==1)
      {
    include("appointment.php");
}
}
?>

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