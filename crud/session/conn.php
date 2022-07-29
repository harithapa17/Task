<?php
 
 $db_server="localhost";
 
 $db_username="root";
 
 $db_password="";
 
 $db_name="demo";

 $link=mysqli_connect($db_server,$db_username,$db_password,$db_name);

 if($link==false)
  
 echo "connection failed." . mysqli_connect_error($link);

?>