<?php
    require_once 'dbkoneksi.php';
    require_once 'template/sidebar_admin.php';

    // $id = $_GET['id'];

    // $query = mysqli_query($conn, "SELECT a.*, b.nama AS nama_produk FROM produk a JOIN produk b ON a.produk_id=b.id WHERE a.id=$id");
    // $query = mysqli_query($conn, "SELECT pesanan.*, produk.nama FROM pesanan JOIN produk ON pesanan.produk_id = produk.id WHERE pesanan.id = $id");

    $query = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY id");

    $dbdata=mysqli_fetch_array($query);
    // $result = mysqli_query($conn, "SELECT * FROM pesanan ORDER BY id DESC");

?>

<head>
  <style>
    th{
      text-align: center;
    }
  </style>
</head>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Pesanan Unit</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-2">
            <a class="btn btn-success" href="form_pesanan.php">Tambah Pesanan</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <table class="table table-light table-striped" width="100%" cellspacing="5" border="1" cellpadding="3">
            <thead class="table-primary">    
                <tr>
                    <th class="p-2">No.</th>
                    <th class="p-2">Tgl.Pesanan</th>
                    <th class="p-2">Nama Pemesan</th>
                    <th class="p-2">Alamat</th>
                    <th class="p-2">No.Hp</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Quantity</th>
                    <th class="p-2">Deskripsi</th>
                    <th class="p-2">ID Produk</th>
                    <th class="p-2" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody class="table table-striped table-hover" >
                    <?php
                    $no = 1;
                        while($dbdata = mysqli_fetch_array($query)) {     
                    ?>
                <tr>
                    <td class="p-2"><?= $no ?></td>
                    <td class="p-2"><?= $dbdata['tanggal'] ?></td>
                    <td class="p-2"><?= $dbdata['nama_pemesan'] ?></td>
                    <td class="p-2"><?= $dbdata['alamat_pemesan'] ?></td>
                    <td class="p-2"><?= $dbdata['no_hp'] ?></td>
                    <td class="p-2"><?= $dbdata['email'] ?></td>
                    <td class="p-2"><?= $dbdata['jumlah_pesanan'] ?></td>
                    <td class="p-2"><?= $dbdata['deskripsi'] ?></td>
                    <td class="p-2"><?= $dbdata['produk_id'] ?></td>
                    <td class="py-2">
                      <center>
                        <a class="btn btn-info my-1" href="edit_pesanan.php?id=<?= $dbdata['id']?>"><i class="fas fa-pencil-alt"></i></a> <!-- edit --> 
                        <a class="btn btn-danger my-1" href="delete/del_pesanan.php?id=<?= $dbdata['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data Pesanan <?=$dbdata['nama_pemesan']?>?')) {return false}">
                          <i class="fas fa-trash-alt"></i></a> <!-- delete --> 
                      </center>
                    </td>
                </tr>
                    <?php
                    $no++;
                        }
                    ?>

            </tbody>    
        </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php

    // require_once 'template/footer_admin.php';
?>