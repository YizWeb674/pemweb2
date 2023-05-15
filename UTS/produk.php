<?php
require_once 'backend/dbkoneksi.php';
require_once 'template/header.php';

$result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");

?>


    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Units</h1>
            <span>Mari Cek Unit Terbaru Kami!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">

        <?php
            $no = 0;
            while($dbdata = mysqli_fetch_array($result)) {     
        ?>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-4-720x480.jpg" alt="">
              <div class="down-content">
                <?php echo '<h5><b>'. $dbdata['nama'] .'</b></h5>' ?>
                <?php echo '<p> kode : '. $dbdata['kode'] .'</p>'  ?>
                <div style="margin-bottom:10px;">
                <?php echo'<span> Rp. '. $dbdata['harga_jual'] .'</span>'?>
                </div>
                <a href="checkout.php" class="filled-button">Pesan Sekarang</a>
              </div>
            </div>
            <br>
          </div>
          <?php
            $no++;
              }
          ?>

          <!-- <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-2-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-3-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-4-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-5-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/product-6-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>
        </div> -->

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>


<?php
require_once 'template/footer.php';
?>