<?php
    $connection = new mysqli('localhost', 'root', 'root', 'crudoperations');

    if(!$connection) {
        die(mysqli_error($connection));
    }