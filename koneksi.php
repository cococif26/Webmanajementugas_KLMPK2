<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "TodoIst";

    $conn = mysqli_connect($host, $username, $password, $database);

    
    if ($conn->connect_error) {
        echo "Koneksi gagal";
        exit();
    }
    echo "berhasil nyambung ke database";
?>