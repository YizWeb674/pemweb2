<?php
    require_once 'dbkoneksi.php';
    require_once 'template/sidebar_admin.php';

    $result = mysqli_query($conn, "SELECT * FROM kategori_produk ");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kategori Kendaraan</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-2">
            <a class="btn btn-success" href="form_kategori.php">Tambah Jenis Kendaraan</a>
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
                    <th class="p-2">ID</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody class="table table-striped table-hover" >
                    <?php
                        while($dbdata = mysqli_fetch_array($result)) {     
                    ?>
                <tr>
                    <td class="p-2"><?= $dbdata['id'] ?></td>
                    <td class="p-2"><?= $dbdata['nama'] ?></td>
                    <td class="py-2">
                      <center>
                        <a class="btn btn-info mx-2" href="edit_kategori.php?id=<?= $dbdata['id']?>"><i class="fas fa-pencil-alt"></i></a> <!-- edit --> 
                        <a class="btn btn-danger mx-2" href="delete/del_kategori.php?id=<?= $dbdata['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data Kategori Produk <?=$dbdata['nama']?>?')) {return false}">
                          <i class="fas fa-trash-alt"></i></a> <!-- delete --> 
                      </center>
                    </td>
                </tr>
                    <?php
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