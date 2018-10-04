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
    width:0px;
    position:fixed;
    z-index: 1;
    top: 66px;
    left:0;
    background-color: #03296d;
    overflow-x: hidden;
    transition: 0.5s;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 100px;
    right: 25px;
  
}

</style>


<div id="mySidenav" class="sidenav" style="width:0px">
 
  <a href="#">Appointment</a>
  <a href="#">CHECK REPORTS</a>
  <a href="#">PAY</a>
  <a href="#">LOGOUT</a>
</div>


