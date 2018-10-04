<?php

$link = mysqli_connect("localhost", "root", "", "hospital");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$hash_pass=hash('sha512',$password);

if(!$this->CheckLoginInDB($email,$password))
{
header("Location:signin.html");
}
session_start();
$_SESSION[$this->GetLoginSessionVar()] = $email;

header("Location:signin.html");

function CheckLoginInDB($email,$password)
{
if(!$this->signin())
{
$this->HandleError("Database login failed!");
return false;
}         
$email = $this->SanitizeForSQL($email);
$pwdmd5 = md5($password);
$qry = "Select email from $this->tablename "." where email='email' and password='$hash_pass' "." and confirmcode='y'";
$result = mysql_query($qry,$this->connection);
if(!$result || mysql_num_rows($result) <= 0)
{
$this->HandleError("Error logging in. "."The username or password does not match");
return false;
}
return true;
}
?>