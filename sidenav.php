<style>
#main {
  transition: margin-left .5s;
  /*position: relative;*/
}
#mysidenav{
  width:0px;
}
  .sidenav {
  box-sizing: border-box;
    height: 100%;
    width:250px;
    position:fixed;
    z-index: 1;
    top: 66px;
    left:0;
    background-color: #03296d;
    overflow-x: hidden;
    transition: 0.5s;
}
.sidenav a {
    padding: 6px 6px 6px 30px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: block;
    transition: 0.3s;

}
.dropdown-btn {
    padding: 6px 6px 6px 30px;
    text-decoration: none;
    font-size: 20px;
    color: white;
     font-size: 20px;
    display: block;
    width: 250px;
    text-align: left;
    cursor: pointer;
    margin:0px 5px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}

.sidenav a:hover ,.sidenav span:hover{
    background-color: rgb(245,124,35);
    color: white;
}

li{
  margin:0px;
  list-style-type: none;
}
.list-item {
  margin:0px 5px;
}
/*.inside li{
list-style-type: none;
color:white;
}
.inside{
  display:none;
}*/

.dropdown-container {
    display: none;
    padding-left:10px;
    background-color: #03296d;
    transition:5s;
   
}.dropdown-container a{
padding-left: 50px;
}
.pro-image{
margin-left: 50px;

}

</style>


<div id="mySidenav" class="sidenav" style="width:250px">
    <div class="pro-image">
      <?php 
      $link = mysqli_connect("localhost","root", "", "hospital");
      $email=$_SESSION['email'];

      $sql="select * from profile where email='$email'";
      $result=mysqli_query($link,$sql);
      $num = mysqli_num_rows($result);
      if($num==1)
      {
        $row=mysqli_fetch_assoc($result);
        echo"<img src='profile/".$row['photo']."'width='120px' height='120px'>";
      }
      else{
      echo"<img src='profile/default.png' width='120px' height='120px'>";
     }
     ?>
     </div>
    <li class="list-item"><a href="patient_dashboard.php">YOUR PROFILE</a></li>
 <span class="dropdown-btn ">Appointment 
    <i class="fa fa-caret-down"></i>
  </span>
  <div class="dropdown-container">
    <a href="bapp.php">Book</a>
  </div>
  <li class="list-item"><a href="pat_report.php">Check Reports</a></li>
  <li class="list-item"><a href="pay_fee.html">Pay</a></li>
  <li class="list-item"><a href="logout.php">Logout</a></li>

</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
