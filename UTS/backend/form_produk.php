<?php
    require_once("dbkoneksi.php");
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
            <h1 class="m-0">Tambah Unit</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
    <section class="content">
      <form action="" method="post">
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Harga Beli</label> 
            <div class="col-8">
            <input id="hrgbeli" name="hrgbeli" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text3" class="col-4 col-form-label">Harga Jual</label> 
            <div class="col-8">
            <input id="hrgjual" name="hrgjual" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text4" class="col-4 col-form-label">Stok</label> 
            <div class="col-8">
            <input id="stok" name="stok" type="text" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <label for="text5" class="col-4 col-form-label">Minimal Stok</label> 
            <div class="col-8">
            <input id="minstok" name="minstok" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label">Deskripsi</label> 
            <div class="col-8">
              <textarea id="deskripsi" name="deskripsi" cols="20" rows="2" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Kategori</label> 
            <div class="col-8">
            <!-- mengambil data inputan kategori produk -->
            <?php 
              $sqljenis = "SELECT * FROM kategori_produk";
              $result = mysqli_query($conn, $sqljenis);

              if (!$result) {
                die("Error: " . mysqli_error($conn));
            }
          
            echo '<select id="select" name="kategori" class="custom-select">';
            
            while ($rowjenis = mysqli_fetch_assoc($result)) {
            
                echo '<option value="' . $rowjenis['id'] . '">' . $rowjenis['nama'] . '</option>';
                     
              }
            echo '</select>';
                
            ?>
                       
           <!-- <option value="mpv">MPV Car</option>
                <option value="suv">SUV Car</option>
                <option value="city">City Car</option>
                <option value="truck">Truck</option>
                <option value="bus">Bus</option> -->
            
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="proses" type="submit" value="Submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
      </form>

<?php
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['proses'])) {

            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $hrgbeli = $_POST['hrgbeli'];
            $hrgjual = $_POST['hrgjual'];
            $stok = $_POST['stok'];
            $minstok = $_POST['minstok'];
            $deskripsi = $_POST['deskripsi'];
            $kategori = $_POST['kategori'];
                        
                    
            // Insert product data into table
            $result = mysqli_query($conn, "INSERT INTO produk(kode ,nama ,harga_beli, harga_jual, stok, min_stok, deskripsi, kategori_produk_id) VALUES('$kode' ,'$nama','$hrgbeli', '$hrgjual', '$stok', '$minstok', '$deskripsi', '$kategori')");
            
            echo "<script>window.location.href='produk.php';</script>";

            // // Show message when user added
            // echo "User added successfully. <a href='index.php'>View Users</a>";
        }
 ?>

    </section>
</html>

