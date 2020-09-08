<?php 

//This is the functionality that retrieve categoried from the database

$sql = "SELECT * FROM category";

$result = mysqli_query($dbcon, $sql);

while($row = mysqli_fetch_array($result)){


    $cat_id = $row['id'];

    $cat = $row['name'];


echo "<option value=' $cat_id'>$cat</option>";

}

?>