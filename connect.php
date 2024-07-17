<!DOCTYPE html>
<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '12345678';
$mysql_db = 'peracricket';

// Establishing MySQL connection
$connect = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$connect) {
    die("Connection Unsuccessful: " . mysqli_connect_error());
}
?>