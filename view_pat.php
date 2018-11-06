<?php 
session_start();
$email=$_SESSION['email'];
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
img{
	border-radius:20px;
}
	.container{
		border:5px solid #03296d;
		border-radius:20px;
	}

	p{
		font-size:20px;
		color:#03296d;
	}
	a:link{
		text-decoration: none;
	}
	.submit input{
		margin:0 40%;
		
		text-align: center;
		border:2px solid #03296d;
		background-color: #03296d;
		color:white;
		}
</style>
<?php
if(isset($_GET['show']))
{
$link = mysqli_connect("localhost","root", "", "hospital");
$mail=$_GET['show'];
$_SESSION["maill"]=$mail;	
$sql1="select *from patient where email='$mail'";
$sql2="select * from appointment where Email='$mail' and status='noo'";
$result1=mysqli_query($link,$sql1);
$result2=mysqli_query($link,$sql2);
$row1=mysqli_fetch_assoc($result1);
$row2=mysqli_fetch_assoc($result2);

?>
<div class="container">
	
	<!-- <h1 style="text-align:center;">Patient detail's</h1> -->
<?php 
 $sql3="select * from profile where email='$mail'";
        $result3=mysqli_query($link,$sql3);
        $row3=mysqli_fetch_assoc($result3);


       echo'
            <div class="row">
            <div class="col-12 patient">
            <div class="row">
            <div class="col-4">
            <h3>Profile photo</h3><hr>
            <img src="profile/'.$row3["photo"].'" alt="patient didnt upload photo" width="180px" height="180px" style="margin-top:10px;">
            </div>
          <div class="col-4">
          <h3>Patient details</h3><hr>';

          echo'<p>NAME: '.$row2["fname"]." ".$row2["lname"].'</p>';
          echo'<p>EMAIL: '.$row2["Email"].'</p>';
          echo'<p>MOBILE NUMBER: '.$row1["mobile_number"].'</p>';
          echo'<p>GENDER: '.$row1["gender"].'</p>';
          echo'</div>';

			echo'<div class="col-4">';
          echo '<h3>Appointment details</h3><hr>';
          echo'<p>EMAIL: '.$row1["email"].'</p>';
          echo'<p>SYMPTOMS: '.$row2["Symptoms"].'</p>';
          echo'<p>TIME: '.$row2["time1"].'</p>';
          echo'<p>DATE: '.$row2["date1"].'</p>';	
          echo'</div>';
      
?>
	
</div></div></div>
<br>
<br>
<div class="submit">


	<form action="view_pat.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="reportf"><br><br>
  <input type="submit" name="report" value="Report submit">
</form>


</div>
</div>
<br><br> 

<div class="container">
	<h3>
		Appointment done?
	</h3>
<p>
	<form method="post">

		<input type="submit" name="done" value="done">
	</form>
<strong>note:</strong>If you click yes Patient will be removed from your current appointments and will be shifted to past appointments</p>  
	</div>
	

<?php
if(isset($_POST['done'])){
$ss="update appointment set status='done' where Email='$mail'";
mysqli_query($link,$ss); 
header("location:doc_pat.php");
}

if(isset($_POST['report'])){






$target="report/".basename($_FILES["reportf"]["name"]);
$rep=$_FILES["reportf"]["name"];

$sql="INSERT INTO report VALUES('$email','$mail','$rep')";
mysqli_query($link,$sql);
if(move_uploaded_file($_FILES["reportf"]["tmp_name"], $target))
  $msg="image uploaded";	
}

}
?> 

