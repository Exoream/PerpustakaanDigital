<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login_admin(id_admin, username, password) 
            VALUES('null', '$username', '$password')";

if(mysqli_query($koneksi, $sql)){ 
    ?>
    <script>
        document.location.href = "tampiladmin.php";
    </script>
    <?php
}else{
    echo "Pendaftaran Gagal : " . $sql . "" . mysqli_error($koneksi);
}