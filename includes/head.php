<style>
	
*{
  box-sizing: border-box;
}
header{
 font-size:1.2em; 
} 
.H{   
display:inline;
 font-size:1.9em; 
 top:25px;
 left:25px;
   }
 .header{ 
  position:sticky;
  top:0;
  background-color:#03296d; 
  color:white;  
  padding: 8px 0px;
  z-index: 1; 
}
</style>



<div class="header">
 <!--  <span style="font-size:25px;padding-left:5px;cursor:pointer" onclick="openNav()">&#9776;</span> -->
    <div class="H"><img  width="50px" height="50px" src="images/logo.png">
      <a style="padding-left:15px">SOMAIYA HOSPITAL</a>
    </div>
    
      <div class="user"> 
        <?php
        echo "welcome ".$_SESSION["user"];
        ?> 
      </div>
  </div> 