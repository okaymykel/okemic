<?php 

//SQL Queries to select post from database based on chosen post id

    if(isset($_GET['post_id'])){

    $post_id = $_GET['post_id'];
    
      $sql = "SELECT * FROM post WHERE id=$post_id";

      $result = mysqli_query($dbcon, $sql);

      while($row = mysqli_fetch_assoc($result)){
          $post_topic = $row['topic'];
          $post_body = $row['body'];
          $post_cat = $row['cat_id'];
      }
      
    }

?>