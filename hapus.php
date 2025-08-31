<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: /PHP/tabel_mhs.php");
    exit;

} else {
    echo "ID tidak ditemukan!";
}
?>
