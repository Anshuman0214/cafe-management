<?php

$databaseHost = 'localhost';
$databaseName = 'cfms';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(!$con) {
    die(mysqli_connect_error());
}
?>
