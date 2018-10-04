<?php
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
*/

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

?>