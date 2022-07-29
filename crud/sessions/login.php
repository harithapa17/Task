<?php
   
   session_start();
?>

<html >
   
   <head>
      <title>Tutorialspoint.com</title>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
             
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'hari' && 
                  $_POST['password'] == '1234') {
                
                
                  echo 'You have entered valid user name and password';
                  
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      
      
      
      
         <form   action = "login.php" method = "post">
            <h4 ><?php echo $msg; ?></h4>
            <input type = "text"  
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" name = "password" placeholder = "password" required>
            <button  type = "submit" name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      
      
   </body>
</html>