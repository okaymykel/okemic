<?php

require_once('../../private/intialize.php');
page_require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/index.php'));
}

$id = $_GET['id'];

if(is_post_request()) {
    $result = delete_post($id);
    $_SESSION['message'] = "The subject was deleted successfully";
    redirect_to(url_for('/index.php'));
}

$blog = find_post_by_id($id);

?>

<?php $page_title = 'Delete post'; ?>
<?php  include(SHARED_PATH . '/header.php'); ?>

<div class="container">
    <a href="<?php echo url_for('/index.php') ?>" class="submit_btn">&laquo; Back to List</a>
    
    <div class="mt">
        <h1>Delete Post</h1>
        <p>Are you sure you want to delete this post?</p>
        <h2 class="item"><?php echo h($blog['topic']); ?></h2>
    
        <form action="<?php echo url_for('/pages/delete.php?id=' . h(u($blog['id']))); ?>" method="post">
            <div>
                <button type="submit" class="submit_btn">Delete Post</button>
            </div>
        </form>
    </div>
</div>
