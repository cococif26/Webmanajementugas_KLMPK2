<?php
include 'koneksi.php';

$query = "SELECT tasks.*, profiles.nama_user, profiles.email 
          FROM tasks 
          INNER JOIN profiles
          ON tasks.id_user = profiles.id_user 
          ORDER BY tasks.id_tugas DESC";

$result = $conn->query($query);

if ($result->num_rows > 0){
    foreach($result->fetch_all(MYSQLI_ASSOC) as $row){
        echo "<br>";
        
        // data user
        echo "id_user : " . $row['id_user'] .
             " nama_user : ". $row['nama_user'] .
             " email : ". $row['email'] .
             "<br>";

        // data tugas
        echo "id_tugas : ". $row['id_tugas'] .
             " judul_tugas : " . $row['judul_tugas'] .
             " status_tugas : ". $row['status_tugas'] .
             " deskripsi : ". $row['deskripsi'] .
             " tanggal_waktu : ". $row['tanggal_waktu'] .
             "<br>";

        echo "<a href='edit.php?id=" . $row['id_tugas'] . "'>Edit</a> | ";
        echo "<a href='delete.php?id=" . $row['id_tugas'] . "' onclick='return confirm(\"Yakin?\")'>Hapus</a>";
    }
} else {
    echo "Tidak ada data tugas yang ditemukan.";
}
?>

<!-- NPM : 065124089
     NAMA : Siti Ranjani -->