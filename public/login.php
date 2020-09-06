<?php 

    require_once('../private/intialize.php');
    
    $errors = [];
    if (is_post_request()) {
        $data = $_POST['data'];
        
        if (!isset($data['email']) || !trim($data['email'])) {
            $errors[] = 'The email field is required.';
        }
        
        if (!isset($data['password']) || !trim($data['password'])) {
            $errors[] = 'The password field is required.';
        }
        if(empty($errors)) {
            $user = find_user_by_email($data['email']);
            
            if($user && $user['password'] == $data['password']) {
                // To be included
                // password_verify($data['password'], $user['password']);
                login_user($user);
                redirect_to(url_for('/index.php'));
            } else {
                $errors[] = 'Login was not successful.';
            }
        } else {
            $errors[] = 'Login was not successful.';
        }
    }
    
?>


<?php $page_title = 'Login user'; ?>
<?php  include(SHARED_PATH . '/header.php'); ?>
<div class="container">
    <div>
        <h1>Login User</h1>
        <?php echo display_errors($errors); ?>
        <form action=" <?php echo url_for('/login.php'); ?> " method="post">
            <div>
                <label for="data[email]">Email</label>
                <input type="email" name="data[email]" id="">
            </div>
            <div>
                <label for="data[password]">Password</label>
                <input type="password" name="data[password]" id="">
            </div>
            <div>
            <button type="submit" class="submit_btn">Login</button>
        </div>
        </form>
    </div>
    <?php  include(SHARED_PATH . '/footer.php'); ?>
</div>