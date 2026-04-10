 <?
 include 'koneksi.php';

$query = "SELECT Tugas *, User.nama, User.email 
          FROM Tugas 
          INNER JOIN User 
          ON Tugas.id_user = User.id_user 
          ORDER BY Tugas.id_tugas 
          DESC";

 $result = $conn -> query($query);

 if ($result -> num_rows > 0){
    foreach($result->fetch_all(MYSQLI_ASSOC) as $row){
        echo "<br>";
        
        // data class user
        echo "id_user : " . $row['id_user']. "nama_user : ". $row['nama_user']. "email : ". $row['email']. "password_user :" . $row['password_user'] ."<br>";

        // data class tugas
        echo "id_tugas : ". $row['id_tugas']. "id_user :" . $row['id_user']. "judul_tugas " . $row['judul_tugas']. "status_tugas :". $row['status_tugas']. "deskripsi :". $row['deskirpsi']. "tanggal_waktu :". $row['tanggal_waktu']. "<br>";

        // hubungin ke file edit dan delete
        echo "<a href='edit.php?id=" . $row['id_tugas'] . "'>Edit Tugas</a> | ";
        echo "<a href='delete.php?id=" . $row['id_tugas'] . "' onclick='return confirm(\"Yakin hapus tugas ini?\")'>Hapus Tugas</a>";
    }
} else {
        echo "Tidak ada data tugas yang ditemukan.";
    }
 ?>