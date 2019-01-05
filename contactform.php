<?php 

include('config.php') ;
include('contactdone.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Contact Us</h2>
  </div>
	
  <form method="post" action="contactform.php">
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" placeholder="Enter Name">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter Email">
  	</div>
  	<div class="input-group">
  	  <label>Mobile</label>
  	  <input type="phone" name="mobile" placeholder="Enter Mobile ">
  	</div>
      <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="subject" placeholder="Enter Subject ">
  	</div>
      
      <div class="input-group">
  	  <label>Message</label>
        <textarea name="message" >Enter text here...</textarea>
  	</div>
  	<div class="input-group">
  	  <button type="submit"  class="btn" name="contact">Send</button>
  	</div>
  
  </form>
</body>
</html>