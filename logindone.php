
<?php
include('config.php');
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$password = md5($password);
  	$query = "SELECT * FROM student WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  header('location: index.php');
  	}else {
  		echo "wrong email & password";
  	}
  
}

?>