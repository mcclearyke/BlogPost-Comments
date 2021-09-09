<?php


function insertComment($conn) {

    //Conditional to check for if the submit button was pressed or not
    if(isset( $_POST['comment_post'])) {
    
    //Once the button is pressed -> insert into database

        //Get the variables that will be inserted into the database
        $poster_id = $_POST['poster_id'];

        $comment_date = $_POST['comment_date'];

        $comment_name = $_POST['comment_name'];

        $comment_content = $_POST['comment_content'];

        //now insert them into the database
        $sql = "INSERT INTO comments (poster_id, comment_date, comment_name, comment_content) 
                VALUES ('$poster_id', '$comment_date', '$comment_name', '$comment_content')";
        
        $result = $conn->query($sql);   
    }
}

