<?php require_once('../../private/intialize.php');

page_require_login();

if(!isset($_GET['id'])) {
    redirect_to(url_for('/index.php'));
}

$id = $_GET['id'] ?? '1';
$blog = find_post_by_id($id);
?>


<?php $page_title = 'View Blog post'; ?>
<?php  include(SHARED_PATH . '/header.php'); ?>

<div class="container">
    <a href="<?php echo url_for('/index.php') ?>" class="submit_btn">&laquo; Back to List</a>
    <div style="margin: 1.3rem 0;">
        
        <h1>Topic - <span style="font-weight: normal;"><?php echo ucfirst($blog['topic']) ?></span></h1>
        <h1>Category - <span style="font-weight: normal;"><?php echo ucfirst($blog['name']) ?></span> </h1>
        <h1>Content - <span style="font-weight: normal;"><?php echo ucfirst($blog['body']) ?></span></h1>
    </div>
    <?php  include(SHARED_PATH . '/footer.php'); ?>
</div>