

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
 include('config.php'); 
//include('logout.php')

?>
<!DOCTYPE html>
<html>
<head>
  <title>LogOut system</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Welcome</h2>
      <p>You Are Successfully Login</p>
  </div>
	 
  <form method="post" action="logout.php">
  	
  	
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Logout</button>
  	</div>
  
  </form>
</body>
</html>