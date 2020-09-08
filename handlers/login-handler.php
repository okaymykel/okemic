<?php 
    //Starting a Session

    session_start();
 ?>
<?php

// This is a functionality that makes the login possible

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($dbcon, trim($_POST['email']));

$password = mysqli_real_escape_string($dbcon, trim($_POST['password']));

$sql = "SELECT * FROM auth where email = '$email' && password = '$password' ";


$result = mysqli_query($dbcon, $sql);

if(mysqli_num_rows($result)>0){

    $_SESSION['message'] = "You're Welcome to this blog!";
     $_SESSION['email'] = $email;
    header('Location: ./posts/list-post.php');
}else{

    $_SESSION['error'] = "Your details do not match our record!";

    header('Location: login.php');
}



}

?>
