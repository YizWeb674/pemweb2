<?php
require_once 'dbkoneksi.php';
require_once 'template/sidebar_admin.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM kategori_produk WHERE id='$id'");
  $data = mysqli_fetch_array($query);
} else {
    echo "<script>window.location.href='kategori_produk.php';</script>";
}

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];

  $result = mysqli_query($conn, "UPDATE kategori_produk SET nama='$nama' WHERE id='$id'");

  if ($result) {
    echo "<script>window.location.href='kategori_produk.php';</script>";
  } else {
    echo "Gagal mengupdate kategori_produk.";
  }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Kategori Kendaraan</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'template/footer_admin.php';
?>
