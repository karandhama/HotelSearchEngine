<?php
    $username = 'root';
    $password = '';
    $db = 'Hotelsearchengine';
    $host = 'localhost';

    $conn = mysqli_connect($host,$username,$password,$db);
    if ($conn->connect_error) {
        die("Connection Error ".$conn->connect_error);
    }
?>