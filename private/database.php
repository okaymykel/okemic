<?php 

require_once('db_credentials.php');

function db_connection() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    confirm_db_connection();
    return $connection;
}

function confirm_db_connection() {
    if(mysqli_connect_errno()) {
        $error = 'Database connection failed: ';
        $error .= mysqli_connect_error();
        $error .= ' (' .  mysqli_connect_errno() . ')';
        exit($error);
    }
}

function close_db_connection($connection) {
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

function confirm_result_set($result_set) {
    if(!$result_set) {
        exit("Database query failed.");
    }
}

// In order to prevent SQL injection
function db_escape($connection, $string) {
    return mysqli_real_escape_string($connection, $string);
}

?>