<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="m-4" method="get" action="output.php">
  <center><h3 class="m-2" >Form Isian Indeks Massa Tubuh(BMI)</h3></center>
  <div class="form-group row">
    <label for="nama" class="col-2 col-form-label">Nama</label> 
    <div class="col-10">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-2 col-form-label">Berat Badan (kg)</label> 
    <div class="col-10">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div> 
        <input id="berat" name="berat" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-2 col-form-label">Tinggi Badan (cm)</label> 
    <div class="col-10">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrows-v"></i>
          </div>
        </div> 
        <input id="tinggi" name="tinggi" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-2 col-form-label">Umur</label> 
    <div class="col-10">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-blind"></i>
          </div>
        </div> 
        <input id="umur" name="umur" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Jenis Kelamin</label> 
    <div class="col-10">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki - Laki"> 
        <label for="jk_0" class="custom-control-label">Lelaki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-10">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
