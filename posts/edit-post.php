<?php 
    //Include the Database
    include('../inc/db.php') 
?>

<?php 

//Include the functionality for edit page
    include('../handlers/edit-post-handler.php');
?>


<!--This is the page that shows edit page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
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
    <form action="../handlers/update-post-handler.php" method="post">
        <div class="header">
            <label for="topic"><b>Post Topic</b></label><br>
            <input type="text" name = "topic" placeholder = "Your blog topic" value="<?php echo $post_topic ?>" required>
        </div>

        <div class="body">
            <label for="body">Post body</label><br>
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