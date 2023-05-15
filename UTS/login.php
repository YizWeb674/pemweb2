<?php
require_once 'template/header.php'
?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Login Admin</h1>
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
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="username" type="text" class="form-control" id="username" placeholder="Username" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="password" type="password" class="form-control" id="password" placeholder="Password" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button id="form-submit" class="border-button" type="button" value="Login" onclick="login()">Login</button>
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

  <script>
      function login() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Mengecek apakah username dan password sesuai
        if(username === 'admin' && password === '12345') {
          // Login berhasil, lakukan tindakan yang diinginkan
          console.log("Login berhasil!");

          // Redirect ke halaman lain
          window.location.href = "backend/home.php";
        } else {
          // Login gagal, tampilkan pesan error
          var errorElement = document.getElementById('error');
          errorElement.textContent = "Username atau password salah";
        }
      }
  </script>

<?php
require_once 'template/footer.php';
?>