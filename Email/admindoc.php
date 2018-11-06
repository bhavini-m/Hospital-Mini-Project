<?php

session_start();
/*if(!isset($_SESSION['username'])){
header('location:Login.html');
}*/
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hospital";

$con = mysqli_connect($servername, $username, $password, $dbname);

if($con == NULL){
	echo" connection failed";
}

mysqli_select_db($con, 'hospital');
$email = $_SESSION['email'];
//$q1 = "select * from doctor";
//$q2 = mysqli_query($con, $q1);
//$q3 = mysqli_fetch_array($q2);


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
		
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<style type="text/css">
	
		/* The grid: Three equal columns that floats next to each other */
		.column {
    		float: left;
    		width: 33%;
    		padding: 50px;
    		text-align: center;
    		font-size: 30px;
    		cursor: pointer;
    		color: black;
    		border-style: solid;
    		border-width: 1px;
		}

		.containerTab {
    		text-align: center;
    		padding: 20px;
    		color: black;
		}
		
		/* Clear floats after the columns */
		.row:after {
    		content: "";
    		display: table;
    		clear: both;
		}
			
		.rules
		{
			border:1px solid #888;
			box-shadow: 2px 2px #aaa;
			width:80%;
			margin:2px auto;
		}

		/* Closable button inside the container tab */
		.closebtn {
    		float: right;
    		color: black;
    		font-size: 35px;
    		cursor: pointer;
		}

		#imagerule
		{
			float:left;
		}

		form
		{
			margin: 40px 450px;
		}

		#container {height: 100%; width:100%; font-size: 0;margin :20px auto;font-size: 30px;}
		#sub1, #sub2, #sub3, #sub4{display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 15px;}
		
		#sub1{width: 24%;height:400px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub2{width: 24%;height:400px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub3{width: 24%;height:400px; border:1px solid black; margin:1px 2px; padding:4px;}
		#sub4{width: 24%;height:400px; border:1px solid black; margin:1px 2px; padding:4px;}

		#sub1:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub2:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub3:hover{box-shadow: 2px 2px 2px 2px #888;}
		#sub4:hover{box-shadow: 2px 2px 2px 2px #888;}

	
</style>
		
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
                   		<a class="selected" href="adminhome.php">Home</a>
                	</li>
					
                	<li>
                   		<a href="adminaddacc.php">Add Doctor</a>
                	</li>
					
                	<li>
                   		<a href="adminremovedoc.php">Remove Doctor</a>
                	</li>
					
					<li>
                   		<a href="adminremovepat.php">Remove Patient</a>
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

        	<div>
  	
  	<h2>Doctor Database</h2>
		<div class="content">
			<?php
				//$div = $_SESSION['div'];
				//$email=$_SESSION['email'];
				//$q3 = " select * from records where division='$division' && email='$email' && branch = '$branch' && display = 'visible' ";
				$q3 = "select * from doctor";
				$result = mysqli_query($con, $q3);
				$num = mysqli_num_rows($result);
			?>
			<h3>Doctors At Somaiya Hospitals <?php echo "$num";?> </h3><br>
			<?php 
			if(mysqli_num_rows($result) > 0)
				{
				echo "<table class='w3-table-all'>
    				<thead>
      					<tr class='w3-light-grey'>
        					<th>First Name</th>
							<th>Last Name</th>
							<th>SSN</th>
        					<th>Email</th>
        					<th>Department</th>
							<th>Mobile </th>
							<th>Gender</th>
						
      					</tr>
    				</thead>";
					while($rows = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>" . $rows['fname'] . "</td>";
						echo "<td>" . $rows['lname'] . "</td>";
						echo "<td>" . $rows['ssn'] . "</td>";
						echo "<td>" . $rows['email'] . "</td>";
						echo "<td>" . $rows['department'] . "</td>";
						echo "<td>" . $rows['mobile_number'] . "</td>";
						echo "<td>" . $rows['gender'] . "</td>";
						echo "</tr>";
					} 
				}else {
					echo "0 results.";
				}
			echo "</table>";
			?>
			
		</div>
</div>



		</div>
		<!-- #container -->
	    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<script src="js/admin.js"></script>
		
	</body>	
</html>	
	
<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>
</html>
