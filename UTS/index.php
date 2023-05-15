<?php
require_once 'backend/dbkoneksi.php';
require_once 'template/header.php'; 

?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>SELAMAT DATANG DI</h6>
                  <h4>Otofay!</h4>
                  <p>Otofay adalah sebuah website yang bertujuan untuk menjual kendaraan, khususnya mobil, kepada pengguna. Situs ini dirancang untuk memberikan pengalaman
                    belanja yang nyaman dan mudah bagi pengguna yang ingin membeli mobil baru atau bekas.</p>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Latar belakang otofay</h6>
                  <p>Industri otomotif adalah salah satu industri yang terus berkembang, dan permintaan akan kendaraan terus meningkat. Namun, konsumen juga menghadapi berbagai
                    tantangan dalam mencari, memilih, dan membeli kendaraan yang sesuai dengan kebutuhan mereka. Otofay hadir sebagai solusi untuk mengatasi tantangan tersebut dengan menyediakan platform yang menghubungkan konsumen dengan penjual kendaraan, memudahkan proses pencarian dan pembelian, serta memberikan pengalaman belanja yang nyaman dan transparan.</p>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>VISI DAN MISI KAMI</h6>
                  <p>Menjadi platform penjualan kendaraan daring terkemuka yang memberikan pengalaman belanja yang terbaik bagi konsumen,
                    serta menjadi mitra terpercaya bagi dealer dan penjual kendaraan dalam mencapai kesuksesan bisnis mereka.</p>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->


    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our <em>Units</em></h2>
              <span>Mari periksa unit kami yang tersedia saat ini!</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="media/fortuner.png" alt="">
              <div class="down-content">
                <h4>Toyota Fortuner GR Sport</h4>
                    <p>New Fortuner GR Sport 2023 kini dengan mesin terbaru 2800cc. Harga mulai Rp 650 jutaan.</p>
                <a href="produk.php" class="filled-button">Pesan Sekarang</a>
              </div>
            </div>
            
            <br>
          </div>
          <div class="col-md-4 mt-5">
            <div class="service-item">
              <img src="media/innova.png" alt="">
              <div class="down-content">
                <h4>Toyota Innova Reborn</h4>
                <p>Toyota Innova Reborn bermesin 2.393 cc dengan tenaga 146,9 hp dan torsi maksimum hingga 342 Nm</p>
                <a href="produk.php" class="filled-button">Pesan Sekarang</a>
              </div>
            </div>

            <br>
          </div>
          <div class="col-md-4 mt-5">
            <div class="service-item">
              <img src="media/lc300.png" alt="">
              <div class="down-content">
                <h4>Land Cruiser 300</h4>
                <p>Land Cruiser 300 bermesin V6D-turbo 3.346 cc, mampu menghasilkan daya 305 PS dan torsi puncak 700 Nm</p>
                <a href="produk.php" class="filled-button">Pesan Sekarang</a>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>SEJARAH KAMI</span>
                <h2><em>Otofay</em> dimulai dari mana?</h2>
                <p>Otofay dimulai oleh sekelompok pengusaha yang memiliki minat dan keahlian dalam industri otomotif. Mereka melihat potensi pasar yang besar dalam industri penjualan mobil secara online,
                    serta kebutuhan pengguna untuk memiliki platform yang mudah digunakan dan dapat diandalkan untuk membeli kendaraan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="section-heading">
          <h2>Event <em>Kami</em></h2>
          <span>Segera ikuti Event terbaru Kami!</span>
        </div>

        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Meliput Peluncuran Mitsubishi Pajero Elektrik<br> <small>Grand Hyatt &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-2'>Berkunjung ke Pabrik Audi Motorsport di Jerman! <br> <small>Minggu &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-3'>Ajang modifikasi speedometer mobil pertama di Indonesia <br> <small>Bintaro &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
            </ul>

            <br>


            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                <h4><a href="blog-details.html">
              </article>
              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blog-details.html">
              </article>
              <article id='tabs-3'>
                <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                <h4><a href="blog-details.html">
                </p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>



<?php
require_once 'template/footer.php';
?>