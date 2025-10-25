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

// Query untuk membuat tabel 'users'
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Tabel 'users' berhasil dibuat.";
} else {
    echo "Error membuat tabel: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
