<?php
session_start();

// Menghapus semua data session
session_unset();
session_destroy();

// Menghapus cookie "remember_me"
setcookie('rememberme', '', time() + 60);

// Mengarahkan pengguna kembali ke halaman login
header('location:login.php');
exit();
?>