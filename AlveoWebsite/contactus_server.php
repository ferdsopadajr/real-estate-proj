<?php
session_start();

// initializing variables
$fname = "";
$lname    = "";
$email    = "";
$contact = "";
$property_name    = "";
$property_description    = "";
$customer_question    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'password', 'alveoprop_db');

// REGISTER USER
if (isset($_POST['contact_us'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $property_name = mysqli_real_escape_string($db, $_POST['property_name']);
  $customer_question = mysqli_real_escape_string($db, $_POST['customer_question']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "Firstname is required"); }
  if (empty($lname)) { array_push($errors, "Lastname is required"); }
  if (empty($email)) { array_push($errors, "E-mail is required"); }
  if (empty($contact)) { array_push($errors, "Contact number is required"); }
  if (empty($property_name)) { array_push($errors, "Choose the property you'd like to inquire"); }
  if (empty($customer_question)) { array_push($errors, "Question is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 
  
 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO inquiries (fname, lname, email , contact, property_name, customer_question) 
  			  VALUES('$fname', '$lname', '$email', '$contact', '$property_name', '$customer_question')";
  	mysqli_query($db, $query);
  	$_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "Inquiry sent! ";
  	header('location: index.php');
  }
}
