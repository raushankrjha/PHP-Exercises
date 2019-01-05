
<?php

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
include('config.php');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$password = md5($password);
  	$query = "SELECT * FROM student WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
		session_start();
                // Store data in session variables
				$_SESSION["loggedin"] = true;
				$_SESSION["id"] = $id;
				$_SESSION["username"] = $username;                            
				
				// Redirect user to welcome page
				header("location: index.php");
  	}else {
  		echo "wrong email & password";
  	}
  
}

?>