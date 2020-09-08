
<?php 
//Include Database and create post functionality.
    include('../inc/db.php');
    include('../handlers/add-post-handler.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
<div class="container">
    <form action="add-post.php" method="post">
        <div class="header">
            <label for="topic">Email</label>
            <input type="text" name = "topic" placeholder = "Your blog topic" required>
        </div>

        <div class="body">
            <label for="body">Post body</label>
           <textarea name="body"  cols="30" rows="10" placeholder="Write your blog post here" required></textarea>
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
            <button name="addpost">Submit</button>
        </div>

    </form>
</div>
</body>
</html>