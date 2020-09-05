<?php require_once('../../private/intialize.php');

$id = $_GET['id'] ?? '1';
$blog = find_post_by_id($id);
?>


<?php $page_title = 'View Blog post'; ?>
<?php  include(SHARED_PATH . '/header.php'); ?>

<div class="container">
    <div style="margin-bottom: 1rem;">
        <h1>Topic - <?php echo ucfirst($blog['topic']) ?></h1>
        <h1>Category - <?php echo ucfirst($blog['name']) ?></h1>
        <h1>Content - <?php echo ucfirst($blog['body']) ?></h1>
    </div>
    <?php  include(SHARED_PATH . '/footer.php'); ?>
</div>