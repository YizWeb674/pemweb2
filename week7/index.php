<?php

// class Tes{

// }

// $a = new Tes();

// var_dump($a);

class Mobil{
    public $nama,
           $merek,
           $warna;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
}


$mobil1 = new Mobil();


class Produk{
    public $nama = 'ini nama',
           $jenis = 'ini jenis',
           $harga = 00000 ;


    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }


    public function printHarga(){
            return $this->harga;        
    }
}

$produk1 = new Produk('hoodie', 'pakaian', 80000 );

$produk2 = new Produk('rolex', 'jam tangan', 12000000);

$produk3 = new Produk('pajero', 'mobil', 500000000);

echo "Nama : $produk1->nama <br> Jenis : $produk1->jenis <br> Harga : $produk1->harga";

?>