<?php 
session_start();

if($_SESSION["usertype"] != "admin") {
	echo "<script type='text/javascript'>alert('You are not authorized to visit this page');
	window.location = 'logout.php';
	</script>";
}

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



if($_SESSION["admin_work"] == "add_account") 
{
		$first_name = $_POST["fname"];
		$last_name = $_POST["lname"];
		$ssn = $_POST["ssn"];
		$r1 = "select * from doctor where $ssn = '$email' ";
		$r2 = mysqli_query($con, $r1);
		$r3 = mysqli_num_rows($r2);
		if($r3 == 0) {
			$q1 = "insert into doctor(fname,lname,ssn) values('$first_name','$last_name','$ssn') ";
			mysqli_query($con, $q1);
			echo "<script type='text/javascript'>alert('Doctor Added');
				window.location = 'adminhome.php';
				</script>";
		}
	
}
else if($_SESSION["admin_work"] == "remove_account") 
		{
			$ssn = $_POST["ssn"];
			$q1 = "delete from doctor where ssn = '$ssn' ";
			mysqli_query($con, $q1);
			echo "<script type='text/javascript'>alert('Doctor Removed');
				window.location = 'adminhome.php';
				</script>";
		}
else if($_SESSION["admin_work"] == "remove_patient") 
		{
			$email = $_POST["email"];
			$q1 = "delete from patient where email = '$email' ";
			mysqli_query($con, $q1);
			echo "<script type='text/javascript'>alert('Patient Removed');
				window.location = 'adminhome.php';
				</script>";
		}
else if($_SESSION["admin_work"] == "add_admin") 
			{
				$email = $_POST["email"];
				$pass = $_POST["password"];
				$q = "insert into admin(email, password) values('$email','$pass' )";
				mysqli_query($con, $q);
				echo "<script type='text/javascript'>alert('Admin Added');
				window.location = 'adminhome.php';
				</script>";
				//header('location:adminhome.php');
			}
else if($_SESSION["admin_work"] == "remove_admin") 
				{
					$email = $_POST["email"];
					$q2 = "delete from admin where email = '$email' ";
					mysqli_query($con, $q2);
					echo "<script type='text/javascript'>alert('Admin Removed');
					window.location = 'adminhome.php';
					</script>";
				}
else if($_SESSION["admin_work"] == "change_data") 
				{
					$dream = $_POST["dream"];
					$vision = $_POST["vision"];
					$mission = $_POST["mission"];
					$brand = $_POST["brand"];
					$support = $_POST["support"];
					$emergency = $_POST["emergency"];
					$counseling = $_POST["counseling"];
					$healthcare = $_POST["healthcare"];
					$q5 = "insert into homeinfo(dream, vision, mission, brand, support, emergency, counseling, healthcare) values('$dream', '$vision', '$mission', '$brand', '$support', '$emergency', '$counseling', '$healthcare' )";
					mysqli_query($con, $q5);
					echo "<script type='text/javascript'>alert('Data reformed');
					window.location = 'adminhome.php';
					</script>";
				}
				
				else{
					echo "nothing";
				}
			
	
unset($_SESSION["admin_work"]);


?>
