
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Log-in</title>
	<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/loginstyle.css" media="screen" type="text/css" />
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
	<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
</head>
<style>
body{
	background-image: url(images/SS1.jpg);
}	
.login-card{
	background-color: #03296d;
	color:white;
	opacity:0.90;
}
.login-card a{
	color:white;
	opacity:1;
}
.login-submit{
	background-color:rgb(245,124,35);
	opacity:1;
}

</style>
<script>
		function checkForm(form)
		{
			if(form.email.value == "") {
			  alert("Error: Email cannot be blank!");
			  form.email.focus();
			  return false;
			}
			
			re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
			if (!re.test(form.email.value))
			{
				alert("You have entered an invalid email address!");
				form.email.focus();
				return (false);
			}
			
			if(form.password.value == "") {
			  alert("Error: Enter your password");
			  form.password.focus();
			  return false;
			}
		}
</script>

<body>
  	<br><br><br><br>
  	<div class="login-card">
  		<h1><a href="home.html">SOMAIYA HOSPITAL</a></h1>
  		<h1>Log-in</h1>
  		<form onsubmit="return checkForm(this);" method="post" action="log.php">
    			<input type="text" placeholder="Email" name="email">
    			<input type="password" name="password" placeholder="Password" name="password">

    			<input type="submit" name="login" class="login login-submit" value="Login">
  		</form>
		<div class="login-help">
    			<a href="signin.html">New User ? Register</a>&nbsp &nbsp &nbsp •&nbsp &nbsp &nbsp <a href="#">Forgot Password</a>
  		</div>
		
	</div>
	
	<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>


</html>
