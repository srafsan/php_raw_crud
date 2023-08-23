<?php
function connectToDB() {
    $connection = new mysqli('localhost', 'root', 'root', 'crudoperations');

    if (!$connection) {
        die(mysqli_error($connection));
    }

    return $connection;
}

$databaseConnection = connectToDB();