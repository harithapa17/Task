<?php

include("conn.php");

$title= $_post['titlecol'];

$deccol= $_post['desccol'];

$adddate= $_post('y-m-d');

$sql="INSERT INTO posts( title, description, post_at )  VALUES( '".$title."','".$desccol."','".$adddate."')";

mysqli_query($link,$sql);

?>
