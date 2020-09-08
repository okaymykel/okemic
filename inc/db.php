<?php

$host = 'localhost';

$dbUsername = 'root';

$dbPass = '';

$dbName = 'blog';

$dbcon = mysqli_connect($host, $dbUsername, $dbPass, $dbName);

if($dbcon){


    
}else{

    echo "failed";

}


?>