<?php
 
  session_start();

  include "conn.php";

  unset($_SESSION["id"]);

  unset($_SESSION["name"]);

  header("Location:index.php");

?>