<?php
//include("config.php");

$db= mysqli_connect("localhost","root","", "hospital");

session_start();
if(isset($_POST['login']))
{
$email=$_POST["email"];
$password=$_POST["password"];
$password=hash("sha512",$password);
//echo $password;
$sql = "SELECT * FROM signin where email='$email' and password='$password'";
$result=mysqli_query($db,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$_SESSION['user']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['success'] = "You are now logged in";
header('location:patient_dashboard.php');




 
}


?>