<?php

    date_default_timezone_set('America/New_York');

    //include the php file that contains the database conncetion code
    include 'connect.inc.php';
    
    //include the php file that will contain the nessacarry functions to post and retrieve comments to the database
    include 'comments.inc.php';
?>

<!DOCTYPE html> 
<html>
<head>

    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
    <link rel = "stylesheet" type = "text/css" href = "style.css">

    <title>Coding with Kendall Blog</title>

    <!-- blogTitle Start : Full Container-->
    <div class = "blogTitle">
    <!-- logoFrame Start : Logo Section-->
    <div id = "logoFrame">
        <h1 id = "item1"> } </h1>
        <h2 id = "item2"> Coding </h2>
        <h2 id = "item3"> with </h2>
        <h2 id = "item4"> Kendall </h2>
        <h1 id = "item5"> { </h1>
    <!-- logoFrame End-->
    </div>
    <!-- blogTitle End -->
    </div>

    <!-- Header Start - MAKE STICKY-->
    <div class = "blogHeader" id="myHeader">
        
        <div id = "home">
            <a href="http://google.com"> home </a>
        </div>

        <div id = "blog">
            <a href="http://google.com"> blog </a>
        </div>

        <div id = "project">
            <a href="http://google.com"> project </a>
        </div>

        <div id = "contact">
            <a href="http://google.com"> contact </a>
        </div>
    <!-- Header End - MAKE STICKY-->
    </div>
</head>

<body>
<!-- Blog Content Start -->
<div class = "blogBody">
  
    <!-- Image -->
    <img src = "blog_image.jpg">
   
    <!-- Blog Image -->
    <p id = "author_name"> Kendall McCleary </p>
    <p id = "date_posted"> April 24th 2021 </p>
    <p id = "time_posted"> 5:43 pm</p>
    
    <!-- blog content -->
    <h4 id = "blog_name"> Brightspot Website Creation </h4>
    
    <div class = "blog_content">
   
        <p id = "blog_content_writing"> I'll add stuff in here last :)</p>
    </div>
<!-- Blog Content End-->
</div>

<!-- Comment Section Start -->
<div class = "commentSection">

    <h4 id = "comment_promt"> Leave a Comment: </h4>
    
    <!-- Container for the Comment Prompt Start -->
    <div class = "comment_container">
 
<?php
   echo "<form method='POST action='".insertComment($conn)."'>

            <!-- User ID for the database -->
            <input type='hidden' name='poster_id'>
            
            <!-- Date of the comment -->
            <input type='hidden' name='comment_date' value='".date('Y-m-d H:i:s')."'>

            <!-- Comment -->
            <textarea name='comment_content'></textarea>

            <!-- Name -->
            <label class='cName' for='comment_name'> 
                Name
                <input type='text' id='comment_name' name='comment_name'> 
            </label>
      
            <!-- Post Button -->
            <input type='submit' id='comment_post' name='comment_post' value='Post'>    
    </form>";
?>

    <!-- Container for the Comment Prompt End -->  
    </div>

    <!-- Posted Comment Section End -->
    <!-- PHP will be writing into these fields -->
    <div class = "commentPosted">

        <p class = "poster_icon">
            <i class="far fa-user-circle"></i>
        </p>
        
        <form action = "" method="GET">

            <!-- Poster Name Field -->
            <input type="text" id = "poster_comment_name"> 

            <!-- Posted Comment Field -->
            <textarea id = "posted_comment"></textarea>

        </form>

    </div>

   <!-- Comment Section End -->
</div>
</div>
</body>
</html>