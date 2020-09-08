<?php
/*
Development Connection

$host = 'localhost';

$dbUsername = 'root';

$dbPass = '';

$dbName = 'blog';

*/
//Remote Connection

$host = 'remotemysql.com';

$dbUsername = 'U9Kk8XGtcG';

$dbPass = 'HTfTIbKvCp';

$dbName = 'U9Kk8XGtcG';



$dbcon = mysqli_connect($host, $dbUsername, $dbPass, $dbName);

if($dbcon){


    
}else{

    echo "Database connection failed!";

}


?>