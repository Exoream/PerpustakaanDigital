<?php

include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM penerbit WHERE id_penerbit = $id";

if (mysqli_query($koneksi, $sql)) {
    ?>
        <script>
            document.location.href = "tampilpenerbit.php"
        </script>
    <?php
} else {
    echo "Data Gagal Dihapus: " . $sql . "" . mysqli_error($koneksi);
}

?>