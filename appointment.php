 <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/loginstyle.css" media="screen" type="text/css" />
  <script>
$(document).ready(function(){
    $("#dept").hide();
    $(".user-type").change(function(){
  $("#dept").toggle();
    });
});
</script>

<script>
        function checkForm(form)
      {
        if(form.fname.value == "") {
        alert("Error: Username cannot be blank!");
        form.name.focus();
        return false;
      }
      re = /^\w+$/;
      if(!re.test(form.name.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        form.name.focus();
        return false;
      }
      
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
      
      if(form.adate.value == "") {
        alert("Error: Date cannot be blank!");
        form.adate.focus();
        return false;
      }
      
      if(form.psymptom.value == "") {
        alert("Error: Symptom cannot be blank!");
        form.psymptom.focus();
        return false;
      }
      
      re= /^[A-Za-z]+$/;
      if(!re.test(form.psymptom.value))
      {
      alert('Please input alphabet characters only');
      return false;
      }
      
    
      
      
      }
</script>
<style type="text/css">
.login-card{
  background-color: #03296d;
  color:white;
  opacity:0.90;
  margin-left: 300px;
  width:650px;
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

<div class="login-card">
    <h2>APPOINTMENT FORM</h2>
<form onsubmit="return checkForm(this);"  method="POST" action="bapp.php"style="border:1px solid black,padding:10px">
  <input type="text" placeholder="firstrname" name="fname" value=<?php echo $_SESSION['user']; ?> >
  <input type="text" placeholder="lastname" name="lname" value=<?php echo 
$_SESSION['lname']; ?> >
<br>
  <input type="text" name="email" placeholder="E-mail" value=<?php echo $_SESSION['email']; ?>>
  <br>
   <label for="date">Enter date</label>
   <input type="DATE" name="adate"  placeholder="DATE"> 
<br><br>
    <label for="Symptoms">Symptoms</label>
    <input type="text" name="psymptom" class="form-control" id="exampleSym" placeholder="Describe your problem">
   
  <div class="dropdown">
  <label>Choose your department   </label>
 
  <select name="dept">
    <option class="dropdown-item">Cardiology</option>
    <option class="dropdown-item" value="loll" >Maternity ward</option> 
    <option class="dropdown-item">General physiology</option> 
    <option class="dropdown-item">ENT ward</option> 
  </select>
  <br> 
</div>
<label>choose your doctor</label>
    <select name="doc">
      <?php 
      $sql="select * from doctor";
      $result=mysqli_query($link,$sql);
      while($row = mysqli_fetch_assoc($result)){
        echo"<option value=".$row['email'].">DR. ".$row['fname']." ".$row['lname']."</option>";
      } 
      ?>
    </select>
    <br>
 <label>What time would you prefer</label><br>
<div class="form-check form-check-inline">
  <input  type="radio" name="atime"  value="morning">
  <label class="form-check-label" for="inlineCheckbox1">Morning</label>
</div>
<div class="form-check form-check-inline">
  <input  type="radio" name="atime" value="Afternoon">
  <label class="form-check-label" for="inlineCheckbox2">Afternoon</label>
</div>
<div class="form-check form-check-inline">
  <input  type="radio" name="atime" value="Evening">
  <label class="form-check-label" for="inlineCheckbox3">Evening</label>
</div><br><br>
<input type="submit" name="Book" class="login login-submit">
</form> </div>
<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>