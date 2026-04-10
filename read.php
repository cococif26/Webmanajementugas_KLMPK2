<?php
include 'koneksi.php';

$query = "SELECT tugas.*, user.nama_user, user.email 
          FROM tugas 
          INNER JOIN user 
          ON tugas.id_user = user.id_user 
          ORDER BY tugas.id_tugas DESC";

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