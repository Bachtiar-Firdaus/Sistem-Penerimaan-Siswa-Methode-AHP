<!-- <?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>
 -->
<?php
// Koneksi ke database
$db['host'] = "localhost"; //host
$db['user'] = "root"; //username database
$db['pass'] = ""; //password database
$db['name'] = "codegoo_ahp"; //nama database
$mysqli = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);

