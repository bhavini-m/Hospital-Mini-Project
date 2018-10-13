
<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hospital";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con == NULL){
	echo" connection failed";
}else{
	echo " connection"; 
}

mysqli_select_db($con, 'hospital');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$hash_pass=hash('sha512',$password);
$usertype = $_POST['usertype'];
$dept = $_POST['department'];
$ssn = $_POST['ssn'];

if($usertype == "patient"){
$usertype = "patient";
}else{
$usertype = "doctor";
}

echo $usertype;

$q = " select * from $usertype where email = '$email' && password = '$password' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);



if($num == 1){
	echo" duplicate data ";
}else{
	if($usertype == "patient") {
		
		$qy= " insert  into patient(fname , lname, mobile_number, email, password , gender ) values ('$fname' , '$lname', '$mobile', '$email', '$password' , '$gender' ) ";
	}else {
		$q1 = " select * from admin where ssn = '$ssn' ";
		$result1 = mysqli_query($con, $q1);
		$num1 = mysqli_num_rows($result1);
		if ($num1 == 1)
		{
		$qy = " insert into doctor(fname, lname , email, password , department, mobile_number, gender) values ('$fname', '$lname', '$email', '$password', '$dept', '$mobile', '$gender') "; 	
		}
		else
		{
			
		}
	}
	mysqli_query($con, $qy);
	$_SESSION['user'] = $fname;
	header('location:Login.php');
}

mysqli_close($con);

/*
session_start();
$link = mysqli_connect("localhost", "root", "", "hospital");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$fname = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$contact = $_POST['mobile'];
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$usertype = mysqli_real_escape_string($link, $_POST['usertype']);

// for usertype doctor
$department = mysqli_real_escape_string($link, $_POST['department']);
$essn = mysqli_real_escape_string($link, $_POST['ssn']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$hash_pass=hash('sha512',$password);

 
// attempt insert query execution
if($usertype == "patient"){
$usertype = "patient";
}else{
$usertype = "doctor";
}

echo $usertype;

/*$q = " select * from $usertype where name = '$fname' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


	if ($usertype=="patient")
	{
		$sql = "INSERT INTO signin (name, email, contact, gender, usertype, password) 
		VALUES ('$fname','$email','$contact','$gender', '$usertype','$hash_pass')";
	}
	else
	{
		$sql = "INSERT INTO signin (name, email, contact, gender, usertype, department, employee_ssn, password) 
			VALUES ('$fname','$email','$contact','$gender', '$usertype','$department','ssn','$hash_pass')";
	}
	


if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
    $_SESSION['fname'] = $name;
	header("Location:Login.php");
exit;
}
 else
 {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 

mysqli_close($link);
*/

?>