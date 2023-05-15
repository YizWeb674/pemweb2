<?php
    require_once 'dbkoneksi.php';
    require_once 'template/sidebar_admin.php';

?>


<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Pesanan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
    <section class="content">
    <form method="POST" action="">
        <div class="form-group row">
            <label class="col-4 col-form-label">Tanggal Pesanan:</label>
            <div class="col-8">
            <input type="date" name="tanggal" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Nama Pemesan:</label>
            <div class="col-8">
            <input type="text" name="nama_pemesan" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Alamat Pemesan:</label>
            <div class="col-8">
            <input type="text" name="alamat_pemesan" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">No. HP:</label>
            <div class="col-8">
            <input type="text" name="no_hp" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Email:</label>
            <div class="col-8">
            <input type="email" name="email" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Jumlah Pesanan:</label>
            <div class="col-8">
            <input type="number" name="jumlah_pesanan" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Deskripsi:</label>
            <div class="col-8">
            <textarea name="deskripsi"  class="form-control" ></textarea>
            </div>        
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Produk:</label>
            <div class="col-8">
            <select name="produk_id" class="custom-select" >
                <?php
                    $qrrproduk = mysqli_query($conn, "SELECT * FROM produk");
                    if ($qrrproduk) {
                        while ($produk = mysqli_fetch_array($qrrproduk)) {
                            echo "<option value='" . $produk['id'] . "'>" . $produk['nama'] . "</option>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                ?>
            </select>
            </div>
        </div>
            
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="proses" type="submit" value="Tambah Pesanan" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

<?php
    if(isset($_POST['proses'])) {
        // Ambil data dari form
        $tanggal = $_POST['tanggal'];
        $namaPemesan = $_POST['nama_pemesan'];
        $alamatPemesan = $_POST['alamat_pemesan'];
        $noHp = $_POST['no_hp'];
        $email = $_POST['email'];
        $jumlahPesanan = $_POST['jumlah_pesanan'];
        $deskripsi = $_POST['deskripsi'];
        $produkId = $_POST['produk_id'];

        // Query untuk menambahkan pesanan baru ke database
        $query = "INSERT INTO pesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id)
                  VALUES ('$tanggal', '$namaPemesan', '$alamatPemesan', '$noHp', '$email', '$jumlahPesanan', '$deskripsi', '$produkId')";

        if (mysqli_query($conn, $query)) {
            echo "<script>window.location.href='pesanan.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

?>

    </section>
  </div>
</html>

<?php

require_once 'template/footer_admin.php';
?>