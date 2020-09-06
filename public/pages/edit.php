<?php require_once('../../private/intialize.php'); 
page_require_login();


if(!isset($_GET['id'])) {
    redirect_to(url_for('/index.php'));
}

$id = $_GET['id'];
$blog = find_post_by_id($id);
$categories = [];
$category_set = find_all_categories();

if (is_post_request()) {
    $data = $_POST['data'];
    $data['id'] = $id;
    $result = update_post($data);
    
    if ($result === true) {
        $_SESSION['message'] = "The subject was updated successfully";
        redirect_to(url_for('/pages/view.php?id='. $id));
    } else {
        $errors = $result;
  }
}

?>



<?php $page_title = 'Edit Blog post'; ?>
<?php  include(SHARED_PATH . '/header.php'); ?>

<div class="container">
    <a href="<?php echo url_for('/index.php') ?>" class="submit_btn">&laquo; Back to List</a>
    
    <div class="mt">
        <h1>Edit blog post</h1>
        <?php echo display_errors($errors); ?>
        <form action=" <?php echo url_for('/pages/edit.php?id=' . h(u($id))); ?> " method="post">
        <div>
            <label for="data[topic]">Topic</label>
            <input type="text" name="data[topic]" id="" value="<?php echo $blog['topic']; ?>">
        </div>
        <div>
            <label for="data[cat_id]">Category</label>
            <select name="data[cat_id]" id="">
                <?php while($categories = mysqli_fetch_assoc($category_set)): ?>
                    <?php $selected = $categories['id'] == $blog['cat_id'] ? 'selected' : ''; ?>
                    <option value="<?= $categories['id'] ?>" <?php echo $selected ?>><?= ucfirst($categories['name']) ?></option>
                    <?php endwhile ?>
                    <?php mysqli_free_result($category_set); ?>
                </select>
            </div>
            <div>
                <label for="data[body]">Content</label>
                <textarea name="data[body]" id="" cols="30" rows="5"><?php echo $blog['body']; ?></textarea>
            </div>
            <div>
                <button type="submit" class="submit_btn">Edit Post</button>
            </div>
        </form>
    </div>
    
    <?php  include(SHARED_PATH . '/footer.php'); ?>
</div>