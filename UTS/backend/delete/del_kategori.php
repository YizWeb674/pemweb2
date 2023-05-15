<?php
// include database connection file
require_once("../dbkoneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM kategori_produk WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../kategori_produk.php");
?>