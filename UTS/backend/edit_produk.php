<?php
  require_once("dbkoneksi.php");
  require_once 'template/sidebar_admin.php';


  if(isset($_POST['update'])) {
    $id = $_POST['id'];

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $hrgbeli = $_POST['hrgbeli'];
    $hrgjual = $_POST['hrgjual'];
    $stok = $_POST['stok'];
    $minstok = $_POST['minstok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    //query update data produk
    $sql = "UPDATE produk SET kode='$kode', nama='$nama', harga_beli='$hrgbeli', harga_jual='$hrgjual',
     stok='$stok', min_stok='$minstok', deskripsi='$deskripsi', kategori_produk_id='$kategori' WHERE id='$id'";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diupdate.');</script>";
        echo "<script>window.location.href='produk.php';</script>";
    } else {
        echo "<script>alert('Error: ".$sql."<br>".mysqli_error($conn)."');</script>";
    }
}

//ambil data produk yang akan diupdate
    $id = $_GET['id'];

    $sql = "SELECT * FROM produk WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $kode = $row['kode'];
    $nama = $row['nama'];
    $hrgbeli = $row['harga_beli'];
    $hrgjual = $row['harga_jual'];
    $stok = $row['stok'];
    $minstok = $row['min_stok'];
    $deskripsi = $row['deskripsi'];
    $kategori = $row['kategori_produk_id'];


// mysqli_close($conn);
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
            <h1 class="m-0">Update Unit</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
    <section class="content">
      <form action="edit_produk.php" method="post">
        
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control"
            value=<?php echo $kode;?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control"
            value=<?php echo $nama;?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Harga Beli</label> 
            <div class="col-8">
            <input id="hrgbeli" name="hrgbeli" type="text" class="form-control"
            value=<?php echo $hrgbeli;?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="text3" class="col-4 col-form-label">Harga Jual</label> 
            <div class="col-8">
            <input id="hrgjual" name="hrgjual" type="text" class="form-control"
            value=<?php echo $hrgjual;?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="text4" class="col-4 col-form-label">Stok</label> 
            <div class="col-8">
            <input id="stok" name="stok" type="text" class="form-control"
            value=<?php echo $stok;?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="text5" class="col-4 col-form-label">Minimal Stok</label> 
            <div class="col-8">
            <input id="minstok" name="minstok" type="text" class="form-control"
            value=<?php echo $minstok;?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label">Deskripsi</label> 
            <div class="col-8">
              <textarea id="deskripsi" name="deskripsi" cols="20" rows="2" class="form-control"
              value=<?php echo $deskripsi;?>></textarea>
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
          
            echo '<select id="kategori" name="kategori" class="custom-select" value=<?php echo $kategori;?>>';
            
            while ($rowjenis = mysqli_fetch_array($result)) {
            
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
              <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              <button name="update" type="submit" value="Update" class="btn btn-primary" value=>Submit</button>
            </div>
        </div>
      </form>

    </section>
</html>

