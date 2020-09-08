<?php
//The logout function is performed here.

session_start();

session_destroy();

header("location: ../login.php");



?>