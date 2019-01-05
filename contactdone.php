<?php 
include('config.php');
// REGISTER USER
if (isset($_POST['contact'])) {
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $message = mysqli_real_escape_string($db, $_POST['message']);
   
    $query = "INSERT INTO contact (name, email, mobile,subject,message)
  			  VALUES('$name', '$email', '$mobile','$subject','$message')";
    $results = mysqli_query($db, $query);
    
    
    }
    
    
    ?>