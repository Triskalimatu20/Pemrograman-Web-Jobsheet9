<?php
// Konfigurasi koneksi database 
$host = "localhost";
$user = "root";
$pass = "Triskamysql20052005#!";
$db   = "prakwebdb";  

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

//set karakter
mysqli_set_charset($connect, "utf8mb4");

