<?php 
    //Include the Database
    include('../inc/db.php') 
?>

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


<!--This is the page that shows edit page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
<div class="container">
    <form action="../handlers/update-post-handler.php" method="post">
        <div class="header">
            <label for="topic">Post Topic</label>
            <input type="text" name = "topic" placeholder = "Your blog topic" value="<?php echo $post_topic ?>" required>
        </div>

        <div class="body">
            <label for="body">Post body</label>
           <textarea name="body"  cols="30" rows="10" placeholder="Write your blog post here" required><?php echo $post_body ?></textarea>
        </div>
        <div class="select">
            <div>
            <label for="">Category</label>
            
            </div>
            <select name="category">
            <?php 

               include("../handlers/post-cat-handler.php");
            
            ?>
        </select>
        </div>
        <div class="btn">
            <button name="update_post">Submit</button>
        </div>

    </form>
</div>
</body>
</html>