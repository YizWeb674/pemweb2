<?php
require_once 'dbkoneksi.php';
require_once 'template/sidebar_admin.php';

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];

    $query = "INSERT INTO kategori_produk (nama) VALUES ('$nama')";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<script>alert('Data kategori produk berhasil ditambahkan')</script>";
        echo "<script>window.location.href='kategori_produk.php'</script>";
    } else {
        echo "<script>alert('Data kategori produk gagal ditambahkan')</script>";
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
                    <h1 class="m-0">Tambah Jenis Kendaraan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="kategori_produk.php">Kategori Kendaraan</a></li>
                        <li class="breadcrumb-item active">Tambah Jenis Kendaraan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form role="form" method="POST" action="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Kategori">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'template/footer_admin.php';
?>
