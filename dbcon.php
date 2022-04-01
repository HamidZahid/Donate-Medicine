<!---------------------------->
<!--this code is used to connect with database-->
<!---------------------------->

<?php

// set connection parrameters
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "donate_medicine";

// create connection
$connection = new mysqli($server_name, $user_name, $password, $db_name);

// check connection for errors
if ($connection->connect_error) {
    die("Cannot Connect with DB".$connection->connect_error);
}else {
//    echo "DB Connected    ";
}

?>

