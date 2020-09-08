
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
    <title>Create Post</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<nav class="nav-bar">
    <div class="nav-list">
        <ul>
            <li><a href="list-post.php">Blog</a></li>
            <li><a href= "add-post.php">Create Post</a></li>
            <li><a href="../handlers/logout-handler.php">Log out of blog</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <form action="add-post.php" method="post">
        <div class="header">
            <label for="topic">Post Title</label><br>
            <input type="text" name = "topic" placeholder = "Enter Your post topic here" required>
        </div>

        <div class="body">
            <label for="body">Post body</label><br>
           <textarea name="body"  cols="30" rows="10" placeholder="Write your post here" required></textarea>
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