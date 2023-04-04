  <?php
   if(isset($_POST['submit'])){
      $nama_siswa = $_POST['nama'];
      $mata_kuliah = $_POST['matkul'];
      $uts = $_POST['uts'];
      $uas = $_POST['uas'];
      $tugas = $_POST['tugas'];
      
      // rumus perhitungan nilai total 
      $nilai_uts = $uts * 0.3;
      $nilai_uas = $uas * 0.35;
      $nilai_tugas = $tugas * 0.35;

      $hasil = $nilai_uts + $nilai_uas + $nilai_tugas;

      
      // hitung grade
      if($hasil >= 0 && $hasil <= 35) {
         $grade = 'E';
         $keterangan = 'Mohon maaf, anda dinyatakan<h1>TIDAK LULUS';

      } elseif ($hasil <= 55) {
         $grade = 'D';
         $keterangan = 'Mohon maaf, anda dinyatakan<h1>TIDAK LULUS';

      } elseif ($hasil <= 69) {
         $grade = 'C';
         $keterangan = 'Selamat! Anda dinyatakan<h1>LULUS';

      } elseif ($hasil <= 84) {
         $grade = 'B';
         $keterangan = 'Selamat! Anda dinyatakan<h1>LULUS';

      } elseif ($hasil <= 100) {
         $grade = 'A';
         $keterangan = 'Selamat! Anda dinyatakan<h1>LULUS';

      } else {
         $grade = 'I';
      }
   
      // hitung predikat
      switch ($grade) {
         case 'E':
            $predikat = 'Sangat Kurang';
            break;
         
         case 'D':
            $predikat = 'Kurang';
            break;
         
         case 'C':
            $predikat = 'Cukup';
            break;
         
         case 'B':
            $predikat = 'Memuaskan';
            break;
            
         case 'A':
            $predikat = 'Sangat Memuaskan';
            break;
         
         default:
            $predikat = 'Tidak ada';
            break;
      }

   }

 ?>


<!-- Mencetak Hasil Perhitungan Nilai  -->
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <title>Hasil Nilai Mahasiswa</title>
 </head>
 <body>
   <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-8">
               <h2 class="bg-warning p-3 ">Hasil Penilaian Mahasiswa</h2>
               <table class="table table">
                  <tr>
                     <td>Nama</td>
                     <td>: <?php echo $nama_siswa; ?></td>
                  </tr>
                  <tr>
                     <td>Mata Kuliah</td>
                     <td>: <?php echo $mata_kuliah; ?></td>
                  </tr>
                  <tr>
                     <td>Nilai UTS</td>
                     <td>: <?php echo $uts; ?></td>
                  </tr>
                  <tr>
                     <td>Nilai UAS</td>
                     <td>: <?php echo $uas; ?></td>
                  </tr>
                  <tr>
                     <td>Nilai Tugas/Praktikum</td>
                     <td>: <?php echo $tugas ?></td>
                  </tr>
                  <tr>
                     <td>Total Nilai</td>
                     <td>: <?php echo $hasil; ?></td>
                  </tr>
                  <tr>
                     <td>Grade</td>
                     <td>: <?php echo $grade; ?></td>
                  </tr>
                  <tr>
                     <td>Predikat</td>
                     <td>: <?php echo $predikat; ?></td>
                  </tr>
               </table>
            </div>
            <div class="col-4">
               <center>
                  <div class="bg-warning p-5"><?php echo $keterangan; ?></div>
               </center>
            </div>
        </div>
   </div>
 </body>
 </html>
