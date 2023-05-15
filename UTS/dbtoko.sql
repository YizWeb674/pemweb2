-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 17.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Mobil MPV'),
(2, 'Mobil SUV'),
(3, 'City Car'),
(4, 'Truk'),
(5, 'Bus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pemesan` varchar(45) DEFAULT NULL,
  `alamat_pemesan` varchar(45) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2015-11-04', '9720000', NULL, NULL, NULL, NULL, NULL, 1),
(11, '2023-05-15', 'Andi', 'Jakarta Selatan', '08952458298', 'andijsa@gmail.com', 2, 'pesan mobil', 13),
(13, '2023-05-16', 'Supri', 'Bekasi', '08121323917', 'supriak@gmail.com', 3, 'pesan hyundai creta', 16),
(14, '2023-05-09', 'Supri', 'bogor', '08888877638', 'suprir@gmail.ea', 5, 'pesan innova', 13),
(15, '2023-05-15', 'Ali', 'BSD city', '081213123456', 'aliiuy@gmial.com', 3, 'antar segera', 15),
(16, '2023-05-15', 'Subhan', 'Bintaro', '08999912890', 'subsub@gmail', 4, 'pesan nissan terra', 6),
(17, '2023-05-11', 'Umar', 'Pondok Indah', '0877762819', 'ummmr@gmail', 3, 'pesan fortuner', 15),
(18, '2023-05-15', 'Ahmed', '', '08999888777', 'medah@gmail.com', 2, 'Pesan Pajero 2 untit, antar segera', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_beli`, `harga_jual`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(5, 'BUS001', 'Scania RK110 DD', 1900000000, 2100000000, 6, 2, '', 5),
(6, 'SUV002', 'Nissan Terra', 550000000, 700000000, 7, 1, '', 2),
(13, 'MPV010', 'Toyota Innova Reborn', 450000000, 500000000, 24, 2, '', 1),
(15, 'SUV922', 'Toyota Fortuner GR Sport', 530000000, 700000000, 13, 3, '', 2),
(16, 'MPV210', 'Hyundai Creta', 280000000, 330000000, 23, 3, '', 1),
(21, 'BUS298', 'Mercedes Benz RK105 SHD', 1100000000, 1500000000, 71, 3, '', 5),
(22, 'TRK874', 'Isuzu Giga', 540000000, 650000000, 23, 3, '', 4),
(26, 'TRK990', 'Hino H11RB', 1200000000, 1600000000, 21, 2, 'bus hino double decker', 5),
(27, 'SUV342', 'Mitsubishi Pajero Sport', 570000000, 650000000, 45, 2, 'pajero 2023', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_customer_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_produk_jenis_produk1_idx` (`kategori_produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_kategori_produk1` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
