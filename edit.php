<?php
include 'koneksi.php';

$conn->query("ALTER TABLE Tugas rename tasks");
$conn->query("ALTER TABLE User rename profiles");

?>

<!-- NPM : 065124086
     NAMA : Salsabila Citra Yaristiana -->