<?php 

include "config.php";

$sql = "SELECT * FROM user";

$result = $link->query($sql);

?>

<html>

<head>

    <title>View Page</title>

</head>

<body>    

<table align="center" color="red" border="1">

    <h3 align="center">USERS <a  href="create.php"> Add New user </a></h3>

    <thead>
       
        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

           if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><a  href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a  href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

        </table>


</body>

</html>