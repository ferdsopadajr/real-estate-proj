<?php include('contactus_server.php') ?>
<?php

$connect = mysqli_connect("localhost", "root", "", "alveoprop_db");  
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
<title>Alveo Contact Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 40%;
  margin: 0px auto;
  padding: 50px;
  border: 1px solid #44a4d4;
  background: white;
  border-radius: 10px 10px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  color: gray;
  margin: 3px;
  font-size: 17px;
}
.input-group input {
  height: 40px;
  width: 272%;
  padding: 10px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

.input-group checkbox {
  height: 50px;
  width: 50%;
  padding: 10px 10px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 14px 140px;
  font-size: 18px;
  color: white;
  background: #44a4d4;
  border: none;
  border-radius: 10px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
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
<br>
<br>
<br>
<!----Content ------->
<body>
  <form method="post" action="contact_us.php">
  	<?php include('contactus_errors.php'); ?>
	<label><Font size = "6px" color = "#0072ae"><b>INQUIRY</b></Font></label><br>
	<label><Font size = "2px" color = "gray"><i>Send message and inquire easily.</i></Font></label><br><br>
  	<div class="input-group">
  	  <label>Firstname</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Lastname</label>
  	  <input type="text" name="lname" value="<?php echo $lname; ?>">
  	</div>
  		<div class="input-group">
  	  <label>E-mail Address</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contact number</label>
  	  <input type="text" name="contact" value="<?php echo $contact; ?>">
  	</div>
	<br>
	<div >
	 <select style="width:538px; height : 40px; border-radius : 5px; font-size : 15px" name="property_name" id="property_name">
	  <option value="<?php echo $property_name; ?>">Choose a property you'd like to inquire about</option>  
                          <?php echo fill_property_name($connect); ?>  
	  </select><br>
</div>

	<div class="input-group">
  	  <label>Customer Question</label>
  	  <input type="text" name="customer_question" value="<?php echo $customer_question; ?>">
  	</div>
  	</div>
	
	<br>
	<br>
	<!--- Agreement --->

		<div class="input-checkbox">
	<center><input type="checkbox" name="agreement" onchange="document.getElementById('contact_us').disabled = !this.checked;" ><Font size = "2px" color = "#0072ae"><i> I hereby agree processing my personal data.</i></font><br><br>
		</center></div>
 	<div class="input-group">
  	  <center> <button type="submit" class="btn" name="contact_us" id="contact_us" disabled>Send Message &nbsp <span class="glyphicon glyphicon-envelope"></span></button></center>
  	</div>
  
  </form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



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
