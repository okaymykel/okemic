<php session_start(); ?>
<?php include('inc/db.php') ?>

<?php include('handlers/login-handler.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="nav-bar">
    <div class="nav-list">
        <ul>
            <li><a href="">Blog</a></li>
           
        </ul>
    </div>
</nav>
    <div class="container">
    <form action="login.php" method="post">
        <div class="header">
            <label for="email">Email</label>
            <input type="email" name = "email" placeholder = "Your email address" required>
        </div>

        <div class="password">
            <label for="password">Password</label>
            <input type="password" name = "password" placeholder="Your password" required>
        </div>
    
        <div class="btn">
            <button name="submit">Submit</button>
        </div>

    </form>
</div> 
</body>
</html>