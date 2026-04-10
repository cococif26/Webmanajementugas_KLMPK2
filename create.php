<!-- ini comment buat bikin hal create -->
<?php
    include 'koneksi.php';

    $conn->query("DROP TABLE IF EXISTS Tugas");
    $conn->query("CREATE TABLE Tugas(
        id_tugas INT PRIMARY KEY AUTO_INCREMENT, 
        id_user INT, 
        judul_tugas VARCHAR(50), 
        status_tugas VARCHAR(20), 
        deskripsi VARCHAR(255), 
        tanggal_waktu DATE
    )");

    $conn->query("DROP TABLE IF EXISTS User");
    $conn->query("CREATE TABLE User(
        id_user INT PRIMARY KEY AUTO_INCREMENT, 
        nama_user VARCHAR(50), 
        email VARCHAR(50), 
        password_user VARCHAR(50)
    )");

    echo "<br>Tabel Tugas berhasil dibuat!";
    echo "<br>Tabel User berhasil dibuat!";
?>

<!-- NPM : 065124067
     NAMA : Siti Robiatul Adawiah -->