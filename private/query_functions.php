<?php 

function create_post($post) {
    global $db;
    
    $query = "INSERT INTO post_table ";
    $query .= "(cat_id, topic, body) ";
    $query .= "VALUES ";
    $query .= "( '" . db_escape($db, $post['cat_id']). "', ";
    $query .= "' " . db_escape($db, $post['topic']) . "', ";
    $query .= "' " . db_escape($db, $post['body']) . "' ";
    $query .= ")";
    
    $result = mysqli_query($db  , $query);
    
    // if no result
    if (!$result) {
        echo mysqli_error($db);
        close_db_connection($db);
        exit;
    }
    
    return true;
}

function find_all_posts() {
    global $db;
    
    $query = "SELECT a.id, a.cat_id, a.topic, a.body, b.name ";
    $query .= "FROM post_table a LEFT JOIN category_table b ";
    $query .= "ON a.cat_id = b.id";
    $result = mysqli_query($db, $query);

    confirm_result_set($result);
    return $result;
}

function find_post_by_id($id) {
    global $db;
    
    $query = "SELECT a.id, a.cat_id, a.topic, a.body, b.name ";
    $query .= "FROM post_table a LEFT JOIN category_table b ";
    $query .= "ON a.cat_id = b.id ";
    $query .= "WHERE a.id=" . db_escape($db, $id);
    $query .= " LIMIT 1";
    
    $result = mysqli_query($db, $query);
    confirm_result_set($result);
    
    $data = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $data;
}

function find_all_categories() {
    global $db;
    
    $query = "SELECT * FROM category_table ";
    $result = mysqli_query($db, $query);
    
    confirm_result_set($result);
    return $result;
}

function find_category_by_id($id) {
    global $db;
    
    $query = "SELECT * FROM category_table ";
    $query .= "WHERE id=" . db_escape($db, $id);
    $query .= " LIMIT 1";
    $result_set = mysqli_query($db, $query);
    $result = mysqli_fetch_assoc($result_set);
    
    return $result;
}

?>