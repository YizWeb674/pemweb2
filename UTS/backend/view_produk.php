<?php
    require_once 'dbkoneksi.php';
    require_once 'template/sidebar_admin.php';

    $id = $_GET['id']; 

    $query = mysqli_query($conn, "SELECT a.*, b.nama AS nama_kategori_produk FROM produk a JOIN kategori_produk b ON a.kategori_produk_id=b.id WHERE a.id=$id");
    $dbdata=mysqli_fetch_array($query);
    
    // $result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
    // $dbdata = mysqli_fetch_array($result)

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b> - <?= $dbdata['nama'] ?> - </b></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <table class="table table-info table-striped">
      <tr>
        <td>Kode</td>
        <td><?= $dbdata['kode'] ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><?= $dbdata['nama'] ?></td>
      </tr>
      <tr>
        <td>Harga Beli</td>
        <td><?= $dbdata['harga_beli'] ?></td>
      </tr>
      <tr>
        <td>Harga Jual</td>
        <td><?= $dbdata['harga_jual'] ?></td>
      </tr>
      <tr>
        <td>Stok</td>
        <td><?= $dbdata['stok'] ?></td>
      </tr>
      <tr>
        <td>Minimal Stok</td>
        <td><?= $dbdata['min_stok'] ?></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td><?= $dbdata['deskripsi'] ?></td>
      </tr>
      <tr>
        <td>Kategori Kendaraan</td>
        <td><?= $dbdata['nama_kategori_produk'] ?></td>
      </tr>
    </table>
    <div class="col-4">
      <a href="produk.php"><button class="btn btn-warning">Kembali</button></a>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

    require_once 'template/footer_admin.php';
?>