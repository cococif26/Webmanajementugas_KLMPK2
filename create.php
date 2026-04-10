<!-- ini comment buat bikin hal create -->
 <?php
    include 'koneksi.php';

    $conn->("DROP TABLE IF EXISTS Tugas");
    $conn->("CREATE TABLE Tugas(id_tugas VARCHAR(10) PRIMARY KEY AUTO_INCREMENT, id_user VARCHAR(10), judul_tugas VARCHAR(50), status_tugas VARCHAR(20), deskripsi VARCHAR(255), tanggal_waktu DATE)");

    $conn->("DROP TABLE IF EXISTS User");
    $conn->("CREATE TABLE User(id_user VARCHAR(10) PRIMARY KEY AUTO_INCREMENT, nama_user VARCHAR(50), email VARCHAR(50), password_user VARCHAR(50))");

    echo "<br>Tabel Tugas berhasil dibuat!";
    echo "<br>Tabel User berhasil dibuat!";
?>
<!-- Siti Robiatul Adawiah 065124067 -->