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
$q3 = "select * from homeinfo";
$result = mysqli_query($con, $q3);
$num = mysqli_num_rows($result);
$rows = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title> Somaiya Hospital</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
header{
 font-size:1.2em; 
} 
.H{   
  position: relative;
 font-size:1.9em; 
 top:25px;
 left:25px;
   }
 .hehe{ 
  background-color:#03296d; 
  color:white;  
}
 .nav-link{   
  color-white;
   }
  .navbar-default{
color-white;
}   
li{ 
  padding-right: 15px; 
   }
 .slideshow{
  height:10%;
  border:1px solid white;
 	
  margin-top: 0px;
}
.S1{
  width:100%;
  opacity:0.8;
}
.question{
 position:relative;
left:800px;
bottom:15px;
width:30%;
} 
.btn-outline-success{
color:white;
border-color: transparent;
}
.btn:hover{
  background-color:rgb(245,124,35);
 
  border-color:rgb(245,124,35); 
}
.nav-link{
  border-radius: 3px;
}
.nav-link:hover{
 background-color: rgb(245,124,35); 
 color:#03296d;
}
a:hover{
	 color:#03296d;
}
.top-footer{
 background-color: #03296d;
 color:white;
 border-bottom: 1px solid #03296d  ;
}
.footer-line{
  color:white;
  background-color: #03296d;
}
.btn-form{
background-color:#03296d;
}
.btn-form:hover{
text:rgb(245,124,35);
}
.navbar{
background-color:#03296d;
}
div.sticky {
  position: sticky;
  top: 0; 
  z-index: 1;
}
.navbar{
background-color:#03296d;
}
.icon i{
  color:#03296d;
}
.fa-home{
padding-right:10px;
color:white;
}
.ins{
  float:right;
}




</style>
</head>
<body>
<div class="hehe">
<div class="container">
   <div class="H"><img  width="50px" height="50px" src="images/logo.png"><a style="padding-left:15px">SOMAIYA HOSPITAL</a></div>
   <div class="right">
   <form class="form-inline my-2 my-lg-0 question">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
  </div>
    </div> 
  </div>
</div> 





<!-- new nav -->
<div class="sticky">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a href="home.html"> <i class="fa fa-home fa-6"></i></a>
            <ul class="navbar-nav mr-auto">
                
            <li class="nav-item active">
            <a class="nav-link"  href="#about">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#service">Services <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#doctors">Doctors <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="#contact">Contact us <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="Login.php">Payement portal <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->

        <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
                <a class="nav-link" href="Login.php">Login</a>
            </li>
        </ul>
        </div>
</div>
</nav>
</div>


<div class="container">
<div class="slideshow">
  <img class="S1" src="images/SS1.jpg">


</div>
</div>


<section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Somaiya Hospital<br>Ultimate Dream</h2>
            <hr class="botm-line"> 
			<?php echo $rows ['dream'] ; ?> 
            
			
           
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Vision</h3>
                <p><?php echo " " . $rows['vision'] . " "; ?></p>
				
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Mission</h3>
                <p><?php echo " " . $rows['mission'] . " "; ?></p>
				
              </div>
            </div>
			<div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>The Brand</h3>
                <p> <?php echo " " . $rows['brand'] . " "; ?> </p>
				
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Services</h2>
          <hr class="botm-line">
         <!-- <p>hey bro</p>-->
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p><?php echo " " . $rows['support'] . " "; ?></p>
			  
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Emergency Services</h4>
              <p><?php echo " " . $rows['emergency'] . " "; ?></p>
			  
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
              <p> <?php echo " " . $rows['counseling'] . " "; ?></p>
			  
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Premium Healthcare</h4>
              <p><?php echo " " . $rows['healthcare'] . " "; ?></p>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  
 <!-- <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Opening Hours</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>Monday - Friday</td>
                    <td>8.00 - 17.00</td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>9.30 - 17.30</td>
                  </tr>
                  <tr>
                    <td>Sunday</td>
                    <td>9.30 - 15.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  
  
  
  <section id="doctors" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Doctors!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="images/d1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Arun Varma</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="images/d2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>John D'souza</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="images/d3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jinal Shah</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="images/d4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Karan Das</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 <!-- <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">see what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
           
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
         
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
                        <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
          
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
           
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
         
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
          <p class="text-right text-primary"><i>— Medilap Healthcare</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section> 

  
  
  


  contact section


  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Vidyanagar, Vidya Vihar East<br>Ghatkopar East, Mumbai<br>&nbsp;Maharashtra 400077</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>somaiyahospital@gmail.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>250632269</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query!</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Send Message</button>
              </div>
            </form>
          </div>
        </div>
		
		<div class="col-md-4 col-sm-4">
            <div class="col-md-4 col-sm-4"></div>
            <div>
              <h3>Opening Hours</h3>
				<br>Monday to Friday: 8.00 - 17.00<br><br>
                Saturday: 9.30 - 17.30<br><br>
                Sunday: 9.30 - 15.00
                  
            </div>
          </div>
		
      </div>
    </div>
  </section>-->
  
  
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
         
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x" ></i>Vidyanagar, Vidya Vihar East<p style="padding-left:3.1em">Ghatkopar East, Mumbai<br><br>Maharashtra 400077</p></p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>somaiyahospital@gmail.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>250632269</p>
        </div>
        <div class="col-md-4 col-sm-4">
			<div>
              <h3>Opening Hours</h3>
				<br>Monday to Friday: 8.00 - 17.00<br><br>
                Saturday: 9.30 - 17.30<br><br>
                Sunday: 9.30 - 15.00
                  
            </div>
        </div>
      </div>
    </div>
  </section>
 
  
  
  
  
  
  
  
  
 
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Committed to providing the best treatment for the past 50 years.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="home.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Services</a></li>
                <li><a href="Login.php"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
           Copyright SOMAIYA TRUST. All Rights Reserved. 
			
            <div class="credits">
           <p></p>
               
		
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementByClassName("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
  <script src="js/Smooth.js">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>