<style type="text/css">
   .showw{
  color:white;
border:1px solid  #03296d;
border-radius:5px;
padding:5px;
background-color: #03296d;
}
.showw:hover{
  background-color:black;
  color:white;
}
a:link{
  text-decoration: none;
}
</style>
<div class=content>
<h4>Previous patients</h4>
 <hr>
<?php 
  $link = mysqli_connect("localhost","root", "", "hospital");
  $email=$_SESSION['email'];
$sql="select * from appointment where  docemail='$email' and status='done'";
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
            <img src="profile/'.$row1["photo"].'" width="150px" height="150px" style="margin-top:10px;">
            </div>
          <div class="col-7"><br>';
          echo'<p>NAME: '.$row["fname"]." ".$row["lname"].'</p>';
          echo'<p>EMAIL: '.$row["Email"].'</p>';
          echo'<p>SYMPTOMS: '.$row["Symptoms"].'</p>';
          echo'<p>TIME: '.$row["time1"].'</p>';
          echo'<p>DATE: '.$row["date1"].'</p>';
          echo'</div></div></div></div>';
    }

?>
  

</div>