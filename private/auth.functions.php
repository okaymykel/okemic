
<?php 

    function login_user($user)  {
    
        session_regenerate_id();
        
        // Temporary fix
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        
        return true;
    }
    
    function logout() {
        unset($_SESSION['email']);
        unset($_SESSION['user_id']);
        return true;
    }
    
    function is_logged_in() {
        return isset($_SESSION['user_id']) && isset($_SESSION['email']);
    }
    
    // FOR AUTHENTICATION
    function page_require_login() {
        if (!is_logged_in()) {
            redirect_to(url_for('login.php'));
        }
    }

?>