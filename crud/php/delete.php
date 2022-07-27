<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `user` WHERE `id`='$user_id'";

     $result = $link->query($sql);

     if ($result == TRUE) {

      //  echo "Record deleted successfully.";
        
       // echo "<a href=read.php> view </a>";

     header('location:read.php');

    }else{

        echo "Error:" . $sql . "<br>" . $link->error;

    }

} 

?>