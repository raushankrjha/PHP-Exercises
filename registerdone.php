<?php 
include('config.php');
// REGISTER USER
if (isset($_POST['reg_user'])) {
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password = md5($password_1);
    $query = "INSERT INTO student (name, email, password)
  			  VALUES('$name', '$email', '$password')";
    $results = mysqli_query($db, $query);
    
    
    
    }
    
    
    ?>