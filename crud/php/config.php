<?php

$link=mysqli_connect("localhost","root","","mydb");

if($link == false){
  
    echo " connection error." .mysqli_connect_error();

}?> 