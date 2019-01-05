<html>
   
  
   
   <body>
      
      <?php
         if( isset($_COOKIE["name"]))
         {
            echo "Welcome :" . $_COOKIE["name"] . "<br />";
            echo "Course :" . $_COOKIE["course"] . "<br />";
            echo "Mobile :" . $_COOKIE["mobile"] . "<br />";
            echo "College :" . $_COOKIE["college"] . "<br />";
         }
         else
            echo "Cookie Not Set" . "<br />";
      ?>
      
   </body>
</html>