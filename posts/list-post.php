<php session_start(); ?>
<?php 
    //Include create post functionality, login functionality and Database
    include('../handlers/add-post-handler.php');
    include('../handlers/login-handler.php');
    include('../inc/db.php');
    ?>

<?php 

    //SQL Query to fetch all the posts from datbase

    $sql = "SELECT * FROM post ORDER BY date_created DESC";

    $result = mysqli_query($dbcon, $sql);
    

?>

<!--View all posts page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List Page</title>
</head>
<body>
<nav class="nav-bar">
    <div class="nav-list">
        <ul>
            <li><a href="">Blog</a></li>
            <li><a href= "add-post.php">Create Post</a></li>
            <li><a href="../handlers/logout-handler.php">Log out of blog</a></li>
        </ul>
    </div>
</nav>
    
    <div class="container">
    <div class="message">
        <span> <?php echo $_SESSION['message'] ?></span>
    </div>
   
    <?php while($row = mysqli_fetch_assoc($result)) {?>
        <div class="title">
            <h3><?php echo $row['topic'] ?></h3>
        </div>
        <div class="body">
            <p><?php echo $row['body'] ?></p>
        </div>
            <span>Post created on: <?php echo $row['date_created'] ?></span>
        <div>
            <a href="view-post.php?post_id=<?php echo $row['id']?>">View Post</a>
            <a href="edit-post.php?post_id=<?php echo $row['id']?>">Edit</a>
            <a href="delete-post.php?post_id=<?php echo $row['id']?>">Delete</a>
           </div>
       <?php } ?>

       
    </div>
</body>
</html>