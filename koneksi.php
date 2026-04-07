<<<<<<< HEAD
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
=======
coba nambah commit di file koneksi
>>>>>>> e958bde5da5aae2af635e58b1e15790b9314e672
