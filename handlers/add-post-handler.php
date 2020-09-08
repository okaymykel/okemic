<?php 

//Get requests from the form and saving them into database

if(isset($_POST['addpost'])){

    $topic = mysqli_real_escape_string($dbcon, trim($_POST['topic']));

    $body = mysqli_real_escape_string($dbcon, trim($_POST['body']));

    $category = mysqli_real_escape_string($dbcon, trim($_POST['category']));

    $dt = new DateTime("now", new DateTimeZone('Africa/Lagos'));

    $date_created = $dt->format('m/d/Y, H:i:s.');

    $date_updated = $dt->format('m/d/Y, H:i:s.');


    //SQL Query to save request into database

    $sql = "INSERT INTO post(cat_id, topic, body, date_created, date_updated) VALUES('$category', '$topic', '$body', '$date_created', '$date_updated')";

    $result = mysqli_query($dbcon, $sql);

    if($result){

      header('location: ../posts/list-post.php');
        
    }else{

       die('Something went wrong!').mysqli_error($result);


}

}


?>