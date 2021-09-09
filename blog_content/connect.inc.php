<?php  
       $conn = mysqli_connect('localhost', 'root', '', 'blog_comment_section');

       //Check if it runs or not
       if (!$conn) {
        
            //kill the connection
            die("Connection failed:" .mysqli_connect_error());
       }
?> 