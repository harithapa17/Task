<?php
  
 session_start();

 include "conn.php";

?>

<html>

 <head>
   
   <title> User Login   </title>

 </head>

 <body>

 <?php 

   if($_SESSION["name"]){

    ?>
    
    Welcome <?php echo $_SESSION["name"]; ?> .Click here to <a href = "logout.php" title="logout" >Logout.</a>


<?php

   } else {

    echo "<h1> Please login first.</h1>";

   }

   ?>

 </body>

</html>