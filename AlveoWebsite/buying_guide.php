<!DOCTYPE html>
<html>
<title>Alveo Buying Guide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--internal style sheet ---->
  <style>
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 0;
    top: 0;
    left: 0;
    background-color: #0072ae;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 130px;
}

.sidenav a {
    padding: 18px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #FFFFFF;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #44a4d4;
}

.sidenav .closebtn {
    position: absolute;
    top: 30px;
    right: 10px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  </style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <Font Color = "#0072ae" size = "5px">Philippines Properties</Font></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="#about" class="w3-bar-item w3-button">Projects</a>
      <a href="#contact" class="w3-bar-item w3-button">Locations</a>
	   <a href="#projects" class="w3-bar-item w3-button">Articles</a>
      <a href="buying_guide.php" class="w3-bar-item w3-button">Buying Guide</a>
      <a href="contact_us.php" class="w3-bar-item w3-button">Contact us</a>
    </div>
  </div>
</div>

<!---- Side Nav ----->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#HOW TO RESERVE?"><span class="glyphicon glyphicon-triangle-right"></span>HOW TO RESERVE?</a>
  <a href="#"><span class="glyphicon glyphicon-triangle-right"></span>PAYMENT FACILITIES</a>
  <a href="#"><span class="glyphicon glyphicon-triangle-right"></span>DOCUMENTS NEEDED</a>
  
</div>

&nbsp <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; 
<h2><Font color = "#0072ae" size = "5px"><span class="glyphicon glyphicon-menu-hamburger"></span><b>BUYING GUIDE</b></h2></span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<!---- Body Content ------->

<div class="panel panel-default">
  <center><div class="panel-heading" ><FONT SIZE = "6px" color = "#0072ae"><b>HOW TO RESERVE?</b></div></center>
  <div class="panel-body" >
  <center><p>

  <Font size = "4px" color = "#0072ae" ><b>Step 1</b><br>
  Choose your preferred location and the type unit. <br>
  <b>Step 2</b><br>
  Request for a sample computation of the unit through our <br>
  accredited seller to get an idea on the financing<br>
  <b>Step 3</b><br>
  Fill up completely and sign the Reservation Agreement form and <br>
  prepare 2 valid ID's. Click <a href ="#">here</a> to download the Reservation Agreement (RA).<br>
  <b>Step 4</b><br>
  Pay the Reservation Free (RF). If the RF is in cash, a Provisional Receipt (PR)<br>
  will be issued by the Cashier. If in check, no PR is issued. Official Receipt<br>
  will be mailed to the buyer.<br>
   </Font>
   <Font size = "3px" color = "gray"><i>Payment for reservation fee thru credit card, direct deposit,
   & remittance using iRemit are also possible.</i>
   </p></center>  <hr>
  <!------->
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
 <p><Font color = "Gray" size = "3px">
 
 All information pictures and images on this site are copyrighted material and owned<br>
 by their respective creators or owners 
  All plans, information in this website are for indentification and references only. All<br>
 details are subject to change withour prior notice and do not form part of an offer <br>
 contact. <br><br>
  <Font color ="#0072ae" size = "3px">
 Contact this number if you have <br> questions &nbsp &nbsp  <b>+(63) 9999 888877 </b></Font><br><br>
   <Font color ="#0072ae" size = "4px">
 <b>Copyright © 2018 ALVEO###.com</b> </Font><br>
 <br>
  <Font color ="#0072ae" size = "5px">
 <b>PHILIPPINES PROPERTIES 2018</b> </Font>
 
 
 </p>
</footer>


</body>
</html>