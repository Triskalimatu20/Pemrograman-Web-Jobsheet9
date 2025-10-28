<?php
$conn = pg_connect("host=localhost dbname=prakwebdb user=postgres password=Triskapostgre20#");

if (!$conn) {
    die("Koneksi ke PostgreSQL gagal: " . pg_last_error());
}

// Buat tabel users jika belum ada
$sql_create = 'CREATE TABLE IF NOT EXISTS public."user" (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)';
 
$result = pg_query($conn, $sql_create);

if ($result) { 
    echo "Koneksi ke Database Berhasil.<br>";
} else { 
    echo "Gagal membuat tabel: " . pg_last_error($conn); 
}
?>
