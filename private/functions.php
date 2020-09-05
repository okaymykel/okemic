<?php 

// HELPER FUNCTIONS

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}

function url_for($script_path) {
    if($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function u($string=""){
    // encode reserved characters in string
    return urlencode($string);
}

function h($string=""){
    // make html chars harmless
    return htmlspecialchars($string);
}


function display_errors($errors=array()) {
    $output = '';
    if(!empty($errors)) {
      $output .= "<div class='errors'>";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach($errors as $error) {
        $output .= "<li>" . h($error) . "</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
}

function truncate_string($string, $length=30) {
    return strtok(wordwrap($string, $length, "...\n"), "\n");
}

?>