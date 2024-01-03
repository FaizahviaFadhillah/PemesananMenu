<?php

$dbHost = 'localhost';
$dbName = 'pemesananmenu';
$dbUser = 'root';
$dbPassword = '';

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}

?>
