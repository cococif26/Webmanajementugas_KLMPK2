<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "todoist";

    $conn = mysqli_connect($host, $username, $password, $database);

    
    if ($conn->connect_error) {
        echo "Koneksi gagal";
        exit();
    }
    echo "berhasil nyambung ke dalam database";
?>

<!-- NPM : 065124088
     NAMA : Tanti Dwi Juliyanti -->


