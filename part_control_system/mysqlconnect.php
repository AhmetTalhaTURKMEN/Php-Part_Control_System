<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'register';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL connection error! </br>";
    echo "Error: " . mysqli_connect_error();
    exit;
}

?>
