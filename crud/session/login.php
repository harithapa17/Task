<?php
  
   session_start();

   include 'conn.php';

   $msg = '';

   if(isset($_POST['login']) && !empty($_POST['uname']) 
                             && !empty($_POST['password']) ){
    
        //      $uname=$_POST["uname"];
              
         //     $password=$_POST["password"];

        //      $hash=hash_password($password,PASSWORD_BCRYPT);


    
//       $sql= "select * from session";

   $sql = "SELECT * from session WHERE uname='" . $_POST['uname'] . "' and password='" . $_POST['password'] ."'";

   $result = mysqli_query($link,$sql);

   $row = mysqli_fetch_array($result);

   if(is_array($row)) {

   $_SESSION["uname"]=$row['uname'];

   $_SESSION["password"]=$row['password'];

   } else {
   
     echo "Invalid Username or Password!";

     header("login.php");

   }

   } else 
    {
         $msg = "Wrong username or password.";
    
        }

   if(isset($_SESSION['uname'])  && isset($_SESSION['password'])) {

    header("location:welcome.php");

   }

?>

<html>

<head>

    <title>  User login</title>

</head>

<body>

    <form action="" method="POST" align="center">
        
        <h3 align="center"> Enter Login Details</h3>
    
        <p align="center">

        Username:</br>

        <input type="text" name="uname" placeholder="user name"></br>

        Password:</br>

        <input type="password" name="password" placeholder="password"> </br></br>

        <input type="submit" name="login" value="login"></br></br> 

        <a href="signup.php"> Create account</a>

        </p>

    </form>

</body>

</html>