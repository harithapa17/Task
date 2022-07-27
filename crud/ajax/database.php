<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$link = mysqli_connect($servername, $username, $password, $dbname);
if ($link == false) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>