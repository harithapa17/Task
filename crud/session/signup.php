<?php

session_start();

include "conn.php";

if(isset($_POST['submit']) ){

 
 $uname=$_POST['uname'];

 $password=$_POST['password'];

 $hash=password_hash($password,PASSWORD_BCRYPT);

 $sql="INSERT INTO session (uname,password)  VALUES('$uname','$hash')";

 $result = mysqli_query($link,$sql);

 if($result == true){

   header("location:login.php");

 }else {

    echo "error". $sql ."<br>". $link->error;

 }

}else {
     
    echo "not signedup yet.";

}

mysqli_close($link);

?>

<html>

<head>

    <title>signup page </title>

</head>

<body>

  <form action="signup.php" method="POST">

<h2 align="center">Create Account</h2> 
  
<p align="center"> 

   <label >User Name: </label></br>

   <input type="text" name="uname" placeholder="user name" > </input></br></br>

   <label >Password: </label></br>

   <input type="password" name="password" placeholder="password"> </input></br></br>

   <input type="submit" name="submit" value="submit">

 </p>

  </form>
  
</body>

</html>
