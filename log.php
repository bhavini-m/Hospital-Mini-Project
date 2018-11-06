<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hospital";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con == NULL){
	echo "connection failed";
}
else{
	echo "connection"; 
}
mysqli_select_db($con, 'hospital');

$email = $_POST['email'];
$password = mysqli_real_escape_string($con, $_POST['password']);
//$hash_pass=hash('sha512',$password);

$q1 = "select * from patient where email = '$email' && password = '$password' && status = 'inactive'";
$q2 = "select * from doctor where email = '$email' && password = '$password' && status = 'inactive'";
$q3 = "select * from admin where email = '$email' && password = '$password' ";

$result = mysqli_query($con, $q1);
$num = mysqli_num_rows($result);
echo ($num);
if($num == 1) {
	//echo ("lol one");
	$row = mysqli_fetch_assoc($result);
	$_SESSION["email"] = $email;
	$_SESSION["user"]= $row['fname'];
	$_SESSION['lname']=$row['lname'];
	$_SESSION["usertype"] = "patient";
	$q = "update patient set status = 'active' where email = '$email' ";
	mysqli_query($con, $q);
	header('location:patient_dashboard.php');
	
}
else {
	//echo ("lol two");
	$result = mysqli_query($con, $q2);
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	if($num == 1) 
	{
		
		$_SESSION["email"] = $email;
		$_SESSION["user"]=$row['fname'];
		$_SESSION["usertype"] = "doctor";
		$q = "update doctor set status = 'active' where email = '$email' ";
		mysqli_query($con, $q);	
		header('location:doctor_dashboard.php');
	}
	else 
	{
		//echo ("lol three");
		$result = mysqli_query($con, $q3);
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		if($num == 1) {
			$_SESSION["email"] = $email;
			
			$_SESSION["usertype"] = "admin";
			$q = "update admin set status = 'active' where email = '$email' ";
			mysqli_query($con, $q);
			header('location:adminhome.php');
		}
		else {
			//echo ("lol four");
			echo "Username/Password is incorrect.";
			header('location:Login.php');
		}
	}
}

/*$db= mysqli_connect("localhost","root","", "hospital");

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
	$_SESSION['usertype']=$row['usetype'];
	$_SESSION['success'] = "You are now logged in";
	if($_SESSION['usertype']== "patient")
	{
		header('location:patient_dashboard.php');
	}
	if($_SESSION['usertype']== "doctor")
	{
		header('location:doctor_dashboard.php');
	}
	if($_SESSION['usertype']== "admin")
	{
		header('location:adminhome.php');
	}
}
*/


?>