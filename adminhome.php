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


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Panel</title>
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
            	</ul>

        	</div>

        	<div class="content">
			
            	<h1 style="margin-left:70px;">Here you can do stuff</h1>

            	<div id="box" style="margin-left:100px;">
                	<div class="box-top">Add Doctor</div>
               	 	<div class="box-panel">Create an account of a newly employed doctor.</div>
            	</div>

            	<div id="box" style="margin-left:100px;">
                	<div class="box-top">Remove Doctor</div>
                	<div class="box-panel">Deactivate or completely remove a doctor's account from the system</div>
            	</div>


				<div id="box" style="margin-left:100px;">
					<div class="box-top">Add Admin</div>
					<div class="box-panel">Add another admin for the system</div>
				</div>
        	</div>


		</div>
		<!-- #container -->
	    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<script src="js/admin.js"></script>
		
	</body>	
</html>
