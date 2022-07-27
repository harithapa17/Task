 <html> 
 
 <head> 
 
 <title>Add Data Using AJAX</title> 
   
</head> 
 
<body> 
    
   <h2 align="center">Add Blog</h2> 
   
   <p align="center" ><a href="index.php" >View All Blogs</a></p> 
   
   <form align="center"> 
     
       <label for="email">Title:</label> 
    
       <input type="text" > </br></br>
      
    
       <label for="pwd">Description:</label> 
     
       <textarea > </textarea></br> </br>
    
    
       <button type="button">Submit</button> 
   </form> 

   
   
    <script> 
 
      $('#save').click(function () { 
   
      $title = $('#title').val(); 
 
      $desc = $("#description").val(); 
     
      $.ajax({url:"insert.php", 
      
      method:"POST", 
      
      data:{titlecol:$title,desccol:$desc}, 
 
      success:function(dataabc){ 
  
      window.location.href="index.php"; 

    }}); 
      
 }); 
   
 </script> 
   
 </body> 
 
 </html>