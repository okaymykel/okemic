<?php 
   //View each post created based on the selected id
   
   if(isset($_GET['post_id'])){

   $post_id = $_GET['post_id'];
   $sql = "SELECT * FROM post where id=$post_id";
   $result = mysqli_query($dbcon, $sql);

   while($row = mysqli_fetch_assoc($result)){
      $post_topic = $row['topic'];
      $post_body = $row['body'];
   }

}

 ?>