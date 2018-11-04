<div class=content>
  <h4>MY PATIENTS/CURRENT APPOINTMENTS</h4>
 <hr>
<div class="container">
<?php 
  $link = mysqli_connect("localhost","root", "", "hospital");
  $email=$_SESSION['email'];
$sql="select * from appointment where  docemail='$email' AND status='noo'";
$result=mysqli_query($link,$sql);
  while($row=mysqli_fetch_assoc($result)){

      $em=$row['Email']; 
      $sql1="select * from profile where email='$em'";
        $result1=mysqli_query($link,$sql1);
        $row1=mysqli_fetch_assoc($result1);
       echo'
            <div class="row">
            <div class="col-8 patient">
            <div class="row">
            <div class="col-5">
            <img src="profile/'.$row1["photo"].'" width="200px" height="200px" style="margin-top:10px;">
            </div>
          <div class="col-7">';
          echo'<p>NAME: '.$row["fname"]." ".$row["lname"].'</p>';
          echo'<p>EMAIL: '.$row["Email"].'</p>';
          echo'<p>SYMPTOMS: '.$row["Symptoms"].'</p>';
          echo'<p>TIME: '.$row["time1"].'</p>';
          echo'<p>DATE: '.$row["date1"].'</p>';
          echo'<a href="doc_pat.php?show='.$row["Email"].'">show more</a>';
          echo'</div></div></div></div>';
    }

?>

    
</div>
<?php
if(isset($_GET['show']))



?>





</div>