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
            <li><a href="login.php">Login</a></li>
           
        </ul>
    </div>
</nav>
    <div class="container">
    <form action="login.php" method="post">
        <div class="header">
            <label for="email">Enter Your Email</label><br>
            <input type="email" name = "email" placeholder = "Enter Your email address here" required>
        </div>

        <div class="body">
            <label for="password">Enter your Password</label><br>
            <input type="password" name = "password" placeholder="Enter Your password here" required>
        </div>
    
        <div class="btn">
            <button name="submit">Submit</button>
        </div>

    </form>
</div> 
</body>
</html>