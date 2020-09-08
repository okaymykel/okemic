<?php 
    //Include database
    
    include('../inc/db.php');

?>

<?php 

    //Update the selected post from the database

    if(isset($_POST['update_post'])){

        $post_topic = mysqli_real_escape_string($dbcon, trim($_POST['topic']));

        $post_body = mysqli_real_escape_string($dbcon, trim($_POST['body']));

        $category = mysqli_real_escape_string($dbcon, trim($_POST['category']));

        $dt = new DateTime("now", new DateTimeZone('Africa/Lagos'));

        $date_created = $dt->format('m/d/Y, H:i:s.');
    
        $date_updated = $dt->format('m/d/Y, H:i:s.');
    
    };

    $sql = "UPDATE post SET cat_id = '$category', topic='$post_topic', body = '$post_body', date_created = '$date_updated', date_updated='$date_updated' ";

    $result = mysqli_query($dbcon, $sql);

    header('location:../posts/list-post.php');
?>sss