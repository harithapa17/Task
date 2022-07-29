<?php
 session_Start();

 unset($_SESSION["username"]);
 unset($_SESSION["password"]);

 echo "you cleared the session.";
 header("login.php");
?>