<?php
require 'koneksi.php';
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO login_user(nama, username, email, password) 
        VALUES('$name', '$username', '$email', '$password')";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "login.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}