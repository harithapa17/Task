<?php

$link=mysqli_connect("localhost","root","","blog_sample");

 if($link == false) {
 
    echo "connection failed." . mysqli_connect_error();

 } ?>
