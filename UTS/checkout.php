<?php
require_once 'backend/dbkoneksi.php';
require_once 'template/header.php';

?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Let's Checkout!</h1>
            <span>Selangkah lagi menuju mobil impian anda!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                <form id="contact" action="" method="post">
                    <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Tanggal Pesan</small>
                        <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="">
                        </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Nama</small>
                        <input name="nama_pemesan" type="text" class="form-control" id="nama" placeholder="Nama Anda">
                        </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Alamat</small>
                        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat Anda">
                        </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">No.Hp</small>
                        <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Kontak Anda">
                        </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Email</small>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Anda">
                        </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Jumlah Pesanan</small>
                        <input name="jumlah_pesanan" type="number" class="form-control" id="jumlah_pesanan" placeholder="Berapa Unit?">
                        </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Deskripsi</small>
                        <textarea rows="1" name="deskripsi" class="form-control" id="deskripsi"></textarea>
                        </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                        <small class="form-label">Pilih Produk</small>
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
                        </fieldset>
                    </div>
                    <div class="col-lg-12 m-3">
                        <fieldset>
                        <button name="proses" value="Tambah Pesanan" type="submit" id="form-submit" class="border-button">Checkout</button>
                        </fieldset>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

<?php
// $id = $_GET['id'];

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
            echo "<script>window.location.href='sukses.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>



<?php
require_once 'template/footer.php';

?>