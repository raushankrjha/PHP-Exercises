<?php
   setcookie( "name", "", time()- 60, "/","", 0);
   setcookie( "course", "", time()- 60, "/","", 0);
   setcookie( "mobile", "", time()- 60, "/","", 0);
   setcookie( "college", "", time()- 60, "/","", 0);
?>
<?php
echo "Cookie Deleted";
?>