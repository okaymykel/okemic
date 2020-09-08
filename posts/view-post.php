<?php 
   //Include Database and functionality that handles viewing of each created post.

   include('../inc/db.php');
   include("../handlers/view-post-handler.php");

?>

<!--View each post page -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
 </head>
 <body>
    <div class="container">
      <div class="header">
         <h4><?php echo $post_topic   ?></h4>
      </div>

      <div class="body">
        <p><?php echo $post_body  ?></p>
      </div>
    </div>
 </body>
 </html>