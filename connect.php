<?php
function connectToDB() {
    $connection = new mysqli('localhost', 'root', '', 'crud_operations');

    if (!$connection) {
        die(mysqli_error($connection));
    }

    return $connection;
}

$databaseConnection = connectToDB();


//$connection = new mysqli('localhost', 'root', '', 'crud_operations');
//
//if($connection) {
//  echo "Connection successful";
//} else {
//  die(mysqli_error($connection));
//}