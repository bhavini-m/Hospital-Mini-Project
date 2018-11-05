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
}

mysqli_select_db($con, 'hospital');

$admin_work = "remove_account";
$_SESSION["admin_work"] = $admin_work;

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Remove faculty or student</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   		<link rel="stylesheet" href="css/loginstyle.css" media="screen" type="text/css" />
		<link rel="stylesheet" href="css/adminstyle.css" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>	

	<body>
		<div id="header">
        		<div class="navbar-header">
      					<a class="navbar-brand" href="#" style="font-size:30px;">Admin Panel</a>
    			</div>
			<ul class="nav navbar-nav navbar-right" style="font-size:20px; margin-right:10px;">
      					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    			</ul>
    		</div>


    		<div id="container">

        		<div class="sidebar">
            	<ul id="nav" style="font-size:18px;">
               		<li>
                   		<a class="selected" href="#">Home</a>
                	</li>
					
                	<li>
                   		<a href="adminaddacc.php">Add Doctor</a>
                	</li>
					
                	<li>
                   		<a href="adminremoveacc.php">Remove Doctor</a>
                	</li>
					
					<li>
                    	<a href="addadmin.php">Add Admin</a>
                	</li>
					
					<li>
                    	<a href="removeadmin.php">Remove Admin</a>
                	</li>
					
					<li>
                    	<a href="admindoc.php">View Doctors</a>
                	</li>
					
					<li>
                    	<a href="adminpat.php">View Patients</a>
                	</li>
					
					<li>
                    	<a href="adminchange.php">Change Data</a>
                	</li>
            	</ul>

        	</div>

        	<div class="content">
			
            		<h2 style="margin-left:40px;">Remove Account from Somaiya Hospital</h2>
			<form action="adminactivity.php" method="POST" style="margin-left:40px; font-size:18px;"><br>
				Doctor's SSN<br><input type="text" placeholder="SSN" name="ssn"><br><br>
				
				<input type="submit" name="login" class="login login-submit" value="Login">
			</form>
        		</div>

		</div>
		<!-- #container -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<script src="js/admin.js"></script>
	</body>	
</html>
