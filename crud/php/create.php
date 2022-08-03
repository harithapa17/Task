<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $link->query($sql);

    if ($result == true) {

     header('location:read.php');

     //echo "New record created successfully.";
      
     // echo "<a href='read.php'> View page </a>";

    } else {

       echo "Error:". $sql . "<br>". $link->error;

    } 

   // $link->close(); 

   mysqli_close($link);

  }

?>

<html>

<body>

<h2>Signup Form</h2>

<form action="create.php" method="POST">

  <fieldset>

    <h3>Personal information:</h3>

    First name:<br>

    <input type="text" name="firstname" required>

    <br>

    Last name:<br>

    <input type="text" name="lastname" required>

    <br>

    Email:<br>

    <input type="email" name="email" required>

    <br>

    Password:<br>

    <input type="password" name="password" required>

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>

This page displays a signup form that stores the details entered on the page into the table.

