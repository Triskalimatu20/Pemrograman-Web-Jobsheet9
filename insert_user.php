<?php
// Koneksi ke MySQL
$host = "localhost";
$user = "root";
$password = "Triskamysql20052005#!";
$database = "prakwebdb";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query insert dengan IGNORE
$sql = "INSERT IGNORE INTO user (id, username, password) VALUES (1, 'admin', '123')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil dimasukkan (data sudah ada, abaikan).";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
