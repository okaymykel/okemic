<?php require_once('../private/intialize.php'); 
    
    
    if (is_post_request()) {
        logout();
    }
    page_require_login();
    $blogs_set = find_all_posts();
    
?>
<?php $page_title = 'Home'; ?>
<?php include(SHARED_PATH . '/header.php') ?>

<div class="container">
    <div class="card_head">
        <h1>All posts</h1>
        <div class="card_head_right">
            <span style="margin-right: 1.5rem;"><a href="<?= url_for('/pages/new.php') ?>">Create Post</a></span>
            <span style="margin-right: 1.3rem;"><h3>User - <?php echo $_SESSION['email'] ?></h3></span>
            <form action="<?php echo url_for('/index.php') ?>" method="post">
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    
    <!-- display data when blog array is NOT next empty -->
    <?php if ($blogs_set->num_rows > 0) { ?>
        <div class="card_container">
            <?php while($blogs = mysqli_fetch_assoc($blogs_set)): ?>
                <div class="card">
                    <h3>Title -  <?= $blogs['topic']; ?> </h3>
                    <h5>Category - <?= ucfirst($blogs['name']); ?> </h5>
                    <p><?= truncate_string($blogs['body']); ?></p>
                    <div>
                        <span><a href="<?= url_for('/pages/view.php?id=') . h(u($blogs['id'])); ?>" class="card_btn">View</a></span>
                        <span><a href="<?= url_for('/pages/edit.php?id=') . h(u($blogs['id'])); ?>" class="card_btn">Edit</a></span>
                        <span><a href="<?= url_for('/pages/delete.php?id=') . h(u($blogs['id'])); ?>" class="card_btn">Delete</a></span>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php mysqli_free_result($blogs_set); ?>
    <?php } else { echo "<h1 class='no-content'>NO POST AVAILABLE AT THE MOMENT...</h1>"; }?>
    
    
    <?php include(SHARED_PATH . '/footer.php') ?>
</div>