<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = '192.168.100.240:8082';
$databaseName = 'crud_db';
$databaseUsername = 'root2';
$databasePassword = 'root';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
