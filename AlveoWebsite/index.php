<?php include('contactus_server.php') ?>
<?php

$connect = mysqli_connect("localhost", "root", "password", "alveoprop_db");  
 function fill_property_name($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM inquiries ";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["property_name"].'">'.$row["property_name"].'</option>';  
      }  
      return $output;  
 }  


?>
<!DOCTYPE html>
<html>
<title>Alveo Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
	  background : light;
  }
  .wrap{
	  width: 1000px
	  margin : auto;
	  margin-top : 50px 
  }
  .card {
	  box-shadow: 0  4px  8px 0 rgba(0,0,0,0.2);
	  transition: 0.3s;
	  width: 500px;
	  height: 400px; 
	  
	  background:#fff
	  text-align:center;
	  font-size:16px
	  font-family : sans serif;
	  float: left;
	  margin : 10px;
	
  }
  .card:hover{
	  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.6);
  }
  .container{
	  padding:10px 16px
  }
  </style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <div class="container">
      <a><b>PHILIPPINES PROPERTIES<b></a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="#about" class="w3-bar-item w3-button">Projects</a>
        <a href="#" class="w3-bar-item w3-button">Locations</a>
  	   <a href="#projects" class="w3-bar-item w3-button">Articles</a>
        <a href="buying_guide.php" class="w3-bar-item w3-button">Buying Guide</a>
        <a href="contact_us.php" class="w3-bar-item w3-button">Contact us</a>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<!-- Header -->
<header>
<!----Grid System Medium ----->
<div class="container">
  
  <div class="row">
    <div class="col-md-6" style="background-color:white;">
    <br>
<div class="panel panel-default">
  <div class="panel-body" >
  <Font size = "15px" color = "#0072ae" style = "San Serif"><b>&nbsp Are you looking for <br> &nbsp your new home?</b></Font><br>
  </div><p><Font size = "4px" color = "#44a4d4">&nbsp &nbsp &nbsp &nbsp &nbsp <b>Inquire now to visit your new found home!</b></Font></p>
  <br>
  <p><Font size = "3px" color = "Gray">
 &nbsp &nbsp &nbsp &nbsp &nbsp <b>Alveo Land Corp. is the Philippines leading innovative developer of <br>
 &nbsp &nbsp &nbsp &nbsp &nbsp vibrant communities and groundbreaking living solutions. Armed <br>
 &nbsp &nbsp &nbsp &nbsp &nbsp with sharper foresight, unparalleled excellence, total commitment, <Br>
 &nbsp &nbsp &nbsp &nbsp &nbsp  and an inherent passion and drive for innovation, Alveo Land offers <br>
 &nbsp &nbsp &nbsp &nbsp &nbsp  an extensive portfolio of holistic developments for living and <br>
 &nbsp &nbsp &nbsp &nbsp &nbsp working well.</b>
 
  </p>
  <BR>
  <!--- Button Inquire ---->
   &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
  <button type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#Contact_Modal">CONTACT US NOW  <span class="glyphicon glyphicon-envelope"></span></button>  
  
  <!----- Modal ----->
  
  
  <!------->
  <br>
 <br>
</div>
    </div>
	<br>
	<br>
    <div class="col-md-6" style="background-color:white;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/AlveoWebsite/imgs/lumira.jpg" alt="Lumira Place" >
    </div>

    <div class="item">
      <img src="/AlveoWebsite/imgs/orean.png" alt="Orean Place">
    </div>

    <div class="item">
      <img src="/AlveoWebsite/imgs/seladon.jpg" alt="Seladon Place">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>


</header>

<!-- Page content -->
  <div class="w3-row-padding">
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><CENTER><Font color = "#0072ae">Alveo New Projects</Font><br><Font size = "3px" color = "Gray"><B>INQUIRE NOW</B></FONT></Center></h3>
  </div>

  <div class="wrap">
    <div class="card">
   <div class = "container">
   <div class="row">
    <div class="col-sm-3" style="background-color:light;">
	<div class="panel panel-default">
	<!-- panel body -->
  <center><img src="/AlveoWebsite/imgs/lumira.jpg" alt="House" width="250" height="200"></center>
  <br>
  <p><font size = "2.5px">
  <i>Description</i>
  </p></font><br><br><br>
  
  <label><font size = "1.5px" color = "gray">Bathrooms:</font> &nbsp <label><font size = "1.5px" color = "gray"><b>0</b></font> &nbsp
  <label><font size = "1.5px" color = "gray">Bedrooms:</font> &nbsp <label><font size = "1.5px" color = "gray"><b>0</b></font> &nbsp
  <label><font size = "1.5px" color = "gray">Garages:</font> &nbsp <label><font size = "1.5px" color = "gray"><b>0</b></font> &nbsp

  </div>
       
      </div>
	   <div class="col-sm-3" style="background-color:light;">
	  <label><font size = "5px" color = "#0072ae"><b>Property name</b></label>
	  <label><font size = "2px" color = "gray">Location</font><br>
	  <label><font size = "4px" color = "#0072ae"><b><u>Property location</b></u></label><br>
	    <label><font size = "2px" color = "gray">Space</font><br>
	  <label><font size = "4px" color = "#0072ae"><b><u>Property space</b></u></label><br>
	    <label><font size = "2px" color = "gray">Amenities</font><br>
	  <label><font size = "4px" color = "#0072ae"><b><u>Property amenities</b></u></label><br>
	    <label><font size = "2px" color = "gray">Starting Price</font><br>
	  <label><font size = "4px" color = "#0072ae"><b><u>Property price</b></u></label><br><br>
	  <a href="projects.php" class="btn btn-info btn-lg">INQUIRE NOW</a></button>
	  </div>
    </div>
    </div>
	 </div>
	 </div>
    
	
    <div class="wrap">
    <div class="card">
	 <div class = "container">
	  <div class="row">
   <div class="col-sm-3" style="background-color:light;">
	<div class="panel panel-default">
	<!-- panel body -->
       <center>  <img src="/AlveoWebsite/imgs/orean.png" alt="House" width="250" height="200"></center>
		
  </div>
       
      </div>
	   <div class="col-sm-3" style="background-color:light;">
	   
	  </div>
      </div>
    </div>
	</div>
		</div>
		
     <div class="wrap">
    <div class="card">
		 <div class = "container">
	  <div class="row">
   <div class="col-sm-3" style="background-color:light;">
	<div class="panel panel-default">
	<!-- panel body -->
        <center> <img src="/AlveoWebsite/imgs/lerato.jpg" alt="House" width="250" height="200"> </center>
		</div>
       
      </div>
	   <div class="col-sm-3" style="background-color:light;">
	   
    </div>
    </div>
    </div>
	 </div>
	 </div>
    
	</div>

  <div class="w3-row-padding">
   <div class="wrap">
    <div class="card">
	 <div class = "container">
	  <div class="row">
   <div class="col-sm-3" style="background-color:light;">
	<div class="panel panel-default">
	<!-- panel body -->
       <center> <img src="/AlveoWebsite/imgs/ferndalevilla.jpg" alt="House" width="250" height="200"></center>
 </div>     
	  
      </div>
	   <div class="col-sm-3" style="background-color:light;">
	   
    </div>
    </div>
    </div>
	 </div>
	 </div>
	
     <div class="wrap">
    <div class="card">
	 <div class = "container">
	   <div class="row">
   <div class="col-sm-3" style="background-color:light;">
	<div class="panel panel-default">
	<!-- panel body -->
        <center> <img src="/AlveoWebsite/imgs/seladon.jpg" alt="House"width="250" height="200"> </center>
     </div>     
	  
      </div>
	   <div class="col-sm-3" style="background-color:light;">
	   
    </div>
    </div>
    </div>
	 </div>
	 </div>
	
    <div class="wrap">
    <div class="card">
	 <div class = "container">   <div class="row">
   <div class="col-sm-3" style="background-color:light;">
	<div class="panel panel-default">
	<!-- panel body -->
       <center> <img src="/AlveoWebsite/imgs/senta.jpg" alt="House"width="250" height="200"></center>
		 </div>     
	  
      </div>
	   <div class="col-sm-3" style="background-color:light;">
	   
    </div>
    </div>
    </div>
	 </div>
	 </div>
 
  </div>
<br>
<br>
<br>
<br>
 <!---- Pager ------->
 
 <div class="container">
                 
  <ul class="w3-center ">
    <li><a href="#"><Font size = "5px">View all projects </font>&nbsp &nbsp &nbsp <span class="glyphicon glyphicon-arrow-right" color = "#0072ae"></span></a></li>
  </ul>
</div>
  
<!-- End page content / Footer -->
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

<div id="Contact_Modal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" action="contact_us.php">
   <div class="modal-content">
     <?php include('contactus_errors.php'); ?>
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title"><FONT size = "6px" color = "#0072ae"  > INQUIRY </Font> <br> <Font size = "3px" color = "gray"><i>Send message and inquire easily.</i></font></h4>
    </div>
    <div class="modal-body">
     <label>Firstname </label>
     <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control" />
		<br />
     <label>Lastname</label>
     <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control" />
		<br />
     <label>Email Address</label>
     <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" />
     <br />
	  <label>Contact Number</label>
     <input type="text" name="contact" value="<?php echo $contact; ?>" class="form-control" />
     <br />
	   
		<div >
	 <select class = "form-control" name="property_name" id="property_name">
	  <option value="<?php echo $property_name; ?>">Choose a property you'd like to inquire about</option>  
                          <?php echo fill_property_name($connect); ?>  
	  </select><br>
</div>
					 
	 <label>Customer Question</label>
     <input type="text" name="customer_question" value="<?php echo $customer_question; ?>" class="form-control" />
     <br />
     <br />
 
    </div>
    <div class="modal-footer">
   	<div class="input-checkbox">
	<center><input type="checkbox" name="agreement" onchange="document.getElementById('contact_us').disabled = !this.checked;" ><Font size = "2px" color = "#0072ae"><i> I hereby agree processing my personal data.</i></font><br><br>
		</center></div>
  	<center><div class="input-group">
  	  <button type="submit"  class="btn btn-info btn-lg" name="contact_us" id="contact_us" disabled>Send Message &nbsp <span class="glyphicon glyphicon-envelope"></span></button></center>
  	</div>
    </div>
    </div>
  
 </form>
 
 
 </div>
</div>

</body>
</html>
