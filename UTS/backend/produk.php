<?php
    require_once 'dbkoneksi.php';
    require_once 'template/sidebar_admin.php';

    $result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stok Ketersediaan Unit</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-2">
            <a class="btn btn-success" href="form_produk.php">Tambah Unit</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <table width="100%" cellspacing="5" cellpadding="3">
            <thead class="table-info">    
                <tr>
                    <th class="p-2">No.</th>
                    <th class="p-2">Kode</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Stok</th>
                    <th class="p-2" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody class="table table-striped table-hover" >
                    <?php
                    $no = 1;
                        while($dbdata = mysqli_fetch_array($result)) {     
                    ?>
                <tr>
                    <td class="p-2"><?= $no ?></td>
                    <td class="p-2"><?= $dbdata['kode'] ?></td>
                    <td class="p-2"><?= $dbdata['nama'] ?></td>
                    <td class="p-2"><?= $dbdata['stok'] ?></td>
                    <td class="py-2">
                      <center>
                        <a class="btn btn-primary mx-2" href="view_produk.php?id=<?= $dbdata['id']?>"><i class="fas fa-eye"></i></a> <!-- view --> 
                        <a class="btn btn-info mx-2" href="edit_produk.php?id=<?= $dbdata['id']?>"><i class="fas fa-pencil-alt"></i></a> <!-- edit --> 
                        <a class="btn btn-danger mx-2" href="delete/del_produk.php?id=<?= $dbdata['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$dbdata['nama']?>?')) {return false}">
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

  require_once 'template/footer_admin.php';
?>