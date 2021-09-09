<?php

    date_default_timezone_set('America/New_York');

    //include the php file that contains the database conncetion code
    include 'connect.inc.php';
    
    //include the php file that will contain the nessacarry functions to post and retrieve comments to the database
    include 'comments.php';
?>

<!DOCTYPE html> 
<html>
<head>

    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <meta charset="UTF-8">
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
            <a href=""> home </a>
        </div>

        <div id = "blog">
            <a href="index.php"> blog </a>
        </div>

        <div id = "project">
            <a href="https://github.com/mcclearyke" target="_blank"> projects </a>
        </div>

        <div id = "contact">
            <a href="mailto: kendall.job99@gmail.com"> contact </a>
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
    <h4 class= "blog_name"> Brightspot Website Creation </h4>
    
    <div class = "blog_content">
   
        <p> Hello!</p>
        <p> I'm writing this blog post to discuss the main portions of the development of this webpage.
        Firstly, I decided to do the blog post prompt as my first experience with html and css was making a basic blog post. I thought this could be a good way to see how my skills have improved.</p>

        <h2> html / css </h2>
        <p> The html portion of this prompt came with relative ease after I had the websites contents planned out. I did need to review my past website projects to get a better understanding of some aspects to html that I may've forgotten in the past year. 
            I used the form tag for the first time for the input values and those worked as a means to pass values to the database.<p>
        <p> The css portion was enjoyable as before coding anything, I sketched out how I wanted the website to look like and then recreated it on Figma to get a visual of the blog post and the bulk of the css that 
            I would use for the remainder of the project.</p>

        <h2> mySQL </h2>
        <p> Going into this prompt, I knew that a database would be needed to store the comment data. I've had previous experience with Firebase in the past working with Android Studio, so I had a basic 
            understanding on how databases work. When deciding that I will be using mySQL, I realized that I would also have to download XAMPP and would be needing to use php.
            The inserting into the database is what gave me the most trouble with this post.</p>
        
        <h2> php </h2>
        <p> Php played a much bigger role in this prompt than I had thought going in, but I enjoyed learning about this language and how it works in tandem with the mySQL and Apache servers to run a program 
            on the local host.</p>
        <p> Creating this was a combination of utilizing languages I am comfortable with as well as implementing one that I had little expierence with. From this, I have a better understanding of mySQL as a database and how to use php to run code on my local host as well as the basic attributes to this language.</p>   
    
    </div>
<!-- Blog Content End-->
</div>

<!-- Comment Section Start -->
<div class = "commentSection">

    <h4 class= "comment_promt"> Leave a Comment: </h4>
    
   
<?php
   echo "<form method='POST' action='".insertComment($conn)."'>

    <!-- Container for the Comment Prompt Start -->
    <div class = 'comment_container'>

            <!-- User ID for the database -->
            <input type='hidden' name='poster_id'/>
            
            <!-- Date of the comment -->
            <input type='hidden' name='comment_date' value='".date('Y-m-d   H:i:s')."'/>

            <!-- Comment -->
            <textarea id='comment' name='comment_content'></textarea>

            <!-- Name -->
            <label class='cName' for='comment_name'> 
                Name
                <input type='text' id='comment_name' name='comment_name'/> 
            </label>
      
            <!-- Post Button -->
            <input type='submit' id='comment_post' name='comment_post' value='Post'/>   
        <!-- Container for the Comment Prompt End -->  
        </div> 

    </form>";
?>


    <!-- Posted Comment Section End -->
    <!-- PHP will be writing into these fields -->
    <div class = "commentPosted">
     
<?php      
      echo "<form method='GET' action = '".getComment($conn)."'>

      </form>";
?>
    </div>

<!-- Comment Section End -->
</div>
 
<!-- Javascript for Sticky Header -->
<script>
window.onscroll = function() {
    stickyHeader();
}

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position.
function stickyHeader() {
  if (window.pageYOffset > sticky) {
   
    header.classList.add("sticky");
  } 
  
  else {
    header.classList.remove("sticky");
  }
}

</script>
</body>
</html>
