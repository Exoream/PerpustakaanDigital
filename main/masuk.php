<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login_user WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row_count = mysqli_num_rows($result);

$sql_admin = "SELECT * FROM login_admin WHERE username = ? AND password = ?";
$stmt_admin = mysqli_prepare($koneksi, $sql_admin);
mysqli_stmt_bind_param($stmt_admin, "ss", $username, $password);
mysqli_stmt_execute($stmt_admin);
$result_admin = mysqli_stmt_get_result($stmt_admin);
$row_count_admin = mysqli_num_rows($result_admin);

if ($row_count > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['role'] = 'user';

    header('location:pengguna.php');
    exit();
} else if ($row_count_admin > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['role'] = 'admin';

    header('location:admin.php');
    exit();
} else {
    echo "<script>alert('Username atau password Anda salah!'); window.location.href = 'login.php';</script>";
}

?>
