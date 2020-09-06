<?php require_once('../../private/intialize.php');

if (is_post_request()) {

    $result = create_post($_POST['data']);
    
    if($result === true) {
        $new_id = mysqli_insert_id($db);
        echo $new_id;
        $_SESSION['response'] = "Blog post was created successfully.";
        redirect_to(url_for('/pages/view.php?id=' . $new_id));
    } else {
        $errors = $result;
    }

}

$categories = [];
$category_set = find_all_categories();

?>


<?php $page_title = 'Create Blog post'; ?>
<?php  include(SHARED_PATH . '/header.php'); ?>

<div class="container">
    <a href="<?php echo url_for('/index.php') ?>">&laquo; Back to List</a>

    <h1>Create a new blog post</h1>
    <?php echo display_errors($errors); ?>
    <form action=" <?php echo url_for('/pages/new.php'); ?> " method="post">
        <div>
            <label for="data[topic]">Topic</label>
            <input type="text" name="data[topic]" id="">
        </div>
        <div>
            <label for="data[cat_id]">Category</label>
            <select name="data[cat_id]" id="">
                <option value=""></option>
                <?php while($categories = mysqli_fetch_assoc($category_set)): ?>
                    <option value="<?= $categories['id'] ?>"><?= ucfirst($categories['name']) ?></option>
                <?php endwhile ?>
                <?php mysqli_free_result($category_set); ?>
            </select>
        </div>
        <div>
            <label for="data[body]">Content</label>
            <textarea name="data[body]" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <button type="submit" class="submit_btn">Submit</button>
        </div>
    </form>
    
    <?php  include(SHARED_PATH . '/footer.php'); ?>
</div>