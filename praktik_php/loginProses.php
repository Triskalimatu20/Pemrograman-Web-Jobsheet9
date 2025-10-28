<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM public.\"user\" WHERE username = '$username' AND password = '$password'";
$result = pg_query($conn, $query);

if (!$result) {
    die("Query gagal: " . pg_last_error($conn));
}

$cek = pg_num_rows($result);

if ($cek > 0) {
    echo "Anda berhasil login. Silakan menuju ";
    echo "<a href='homeAdmin.html'>Halaman HOME</a>";
} else {
    echo "Anda gagal login. Silakan ";
    echo "<a href='loginForm.html'>Login kembali</a>";
}

pg_close($conn);
?>