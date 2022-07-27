<?php

$link=mysqli_connect("localhost","root","","mydb");

if($link == false){
  
    echo " connection h error." .mysqli_connect_error();

}?> 