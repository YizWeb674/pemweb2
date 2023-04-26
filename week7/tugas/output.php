<?php

require 'index.php';

//action form
if (isset($_GET ['submit'])) {
//input form
    $nama = $_GET['nama'];
    $bb = $_GET['berat'];
    $tbp = $_GET['tinggi'];
    $umur = $_GET['umur'];
    $jk = $_GET['jk'];
    $tb = $tbp/100;

//RUMUS BMI : bb/(tb * tb)
    $bmi = $bb/($tb * $tb);

// Menentukan Kesimpulan BMI 
    if($bmi < 18.5){
        $ket = '<h4>Anda Kekurangan Berat Badan';
    }elseif($bmi < 25){
        $ket = '<h4>Berat Badan Anda Ideal';
    }elseif($bmi < 30){
        $ket = '<h4>Anda Kelebihan Berat Badan';
    }elseif($bmi > 30){
        $ket = '<h4>Anda Obesitas';
    }
  }
?>

<!-- Mencetak Hasil Perhitungan -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hasil BMI</title>
</head>
<body>
    <center><h3 class="mt-5 mx-4 bg-light p-2 rounded-2">Hasil Perhitungan BMI Anda</h3></center>
      <div class="bg-light rounded-4 mx-4 mb-3 p-2">
        <div class="row m-3">
            <div class="col-2">
                Nama 
            </div>
            <div class="col-10">
                : <?= $nama ?>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-2">
                Berat Badan 
            </div>
            <div class="col-10">
                : <?= $bb ?> kg
            </div>
        </div>
        <div class="row m-3">
            <div class="col-2">
                Tinggi Badan 
            </div>
            <div class="col-10">
                : <?= $tbp ?> cm
            </div>
        </div>
        <div class="row m-3">
            <div class="col-2">
                Umur 
            </div>
            <div class="col-10">
                : <?= $umur ?> tahun
            </div>
        </div>
        <div class="row m-3">
            <div class="col-2">
                Jenis Kelamin 
            </div>
            <div class="col-10">
                : <?= $jk ?>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-2">
                BMI Anda
            </div>
            <div class="col-10">
                : <?= $bmi ?>
            </div>
        </div>
        <center>
        <div class="row m-3">
            <div class="col-12">
                Dapat disimpulkan bahwa
                <br>
                <?= $ket ?> 
            </div>
        </div>
      </div>
    </center>
</body>
</html>