<?php 
 
 $hostname = 'localhost';
 $db = 'dbtoko';
 $username = 'root';
 $password = '';
 $charset='utf8mb4';
 
 $conn  = mysqli_connect($hostname, $username, $password, $db);


// memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

  
 ?>
