<?php
require_once("dbkoneksi.php");
require_once 'template/sidebar_admin.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $tanggal = $_POST['tanggal'];
    $namaPemesan = $_POST['nama_pemesan'];
    $alamatPemesan = $_POST['alamat_pemesan'];
    $noHp = $_POST['no_hp'];
    $email = $_POST['email'];
    $jumlahPesanan = $_POST['jumlah_pesanan'];
    $deskripsi = $_POST['deskripsi'];
    $produkId = $_POST['produk_id'];

    // Query update data pesanan
    $sql = "UPDATE pesanan SET tanggal='$tanggal', nama_pemesan='$namaPemesan', alamat_pemesan='$alamatPemesan',
            no_hp='$noHp', email='$email', jumlah_pesanan='$jumlahPesanan', deskripsi='$deskripsi',
            produk_id='$produkId' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diupdate.');</script>";
        echo "<script>window.location.href='pesanan.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
    }
}

// Ambil data pesanan yang akan diupdate
$id = $_GET['id'];

$sql = "SELECT * FROM pesanan WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$tanggal = $row['tanggal'];
$namaPemesan = $row['nama_pemesan'];
$alamatPemesan = $row['alamat_pemesan'];
$noHp = $row['no_hp'];
$email = $row['email'];
$jumlahPesanan = $row['jumlah_pesanan'];
$deskripsi = $row['deskripsi'];
$produkId = $row['produk_id'];
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
                    <h1 class="m-0">Update Pesanan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
    <section class="content">
        <form action="edit_pesanan.php" method="post">

            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?php echo $tanggal; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="<?php echo $namaPemesan; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
                <div class="col-8">
                    <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control"
                        value="<?php echo $alamatPemesan; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-4 col-form-label">Nomor HP</label>
                <div class="col-8">
                    <input id="no_hp" name="no_hp" type="text" class="form-control" value="<?php echo $noHp; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                <div class="col-8">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control"
                        value="<?php echo $jumlahPesanan; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="20" rows="2"
                        class="form-control"><?php echo $deskripsi; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">Produk</label>
                <div class="col-8">
                    <?php
                    $sqlProduk = "SELECT * FROM produk";
                    $resultProduk = mysqli_query($conn, $sqlProduk);

                    if (!$resultProduk) {
                        die("Error: " . mysqli_error($conn));
                    }

                    echo '<select id="produk_id" name="produk_id" class="custom-select">';
                    while ($rowProduk = mysqli_fetch_array($resultProduk)) {
                        $selected = ($produkId == $rowProduk['id']) ? "selected" : "";
                        echo '<option value="' . $rowProduk['id'] . '" ' . $selected . '>' . $rowProduk['nama'] . '</option>';
                    }
                    echo '</select>';
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <button name="update" type="submit" value="Update" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>
</html>

