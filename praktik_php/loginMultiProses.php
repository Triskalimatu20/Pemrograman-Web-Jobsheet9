<?php
include "koneksi.php"; 

$username = $_POST['username'] ?? '';
$password = md5($_POST['password'] ?? '');

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ($row['level'] === '1') {
        echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
    } elseif ($row['level'] === '2') {
        echo "Anda berhasil login. Silahkan menuju <a href='homeGuest.html'>Halaman HOME</a>";
    } else {
        echo "Level user tidak dikenali.";
    }
} else {
    // Jika username/password tidak cocok
    echo "Anda gagal login. Silahkan <a href='loginForm.html'>Login kembali</a>";
}
?>