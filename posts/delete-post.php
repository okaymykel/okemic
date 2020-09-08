
<?php 
//Include Database
    include('../inc/db.php');

?>


<?php 

//This is functionality that handles deletion of posts.

    if(isset($_GET['post_id'])){

    
    $post_id = $_GET['post_id'];

    $sql = "DELETE FROM post where id=$post_id";

    $result = mysqli_query($dbcon, $sql);
    
    header("location: list-post.php");

}

?>