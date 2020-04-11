-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Apr 2020 pada 06.43
-- Versi server: 8.0.19
-- Versi PHP: 7.4.4RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `noplat` varchar(9) NOT NULL,
  `idtipe` char(5) DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`noplat`, `idtipe`, `tahun`, `tarif`, `status`) VALUES
('DK2324FF', 'CH003', 2015, 267000, 'Baik'),
('L1122VV', 'AB001', 2009, 250000, 'Baik'),
('W1267BB', 'BN002', 2010, 300000, 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `noktp` char(16) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`noktp`, `nama`, `alamat`, `telepon`) VALUES
('1234567890123456', 'Bian', 'Surabaya', '081232377888'),
('3580125650002', 'Butet', 'Malang', '081999000767'),
('45352516272727', 'Bayu', 'Bali', '08167678888');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sopir`
--

CREATE TABLE `sopir` (
  `idsopir` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `sim` char(12) DEFAULT NULL,
  `tarif` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `sopir`
--

INSERT INTO `sopir` (`idsopir`, `nama`, `alamat`, `telepon`, `sim`, `tarif`) VALUES
(1, 'Edo', 'Semarang', '083119188452', '123234235111', 80000),
(2, 'Eka', 'Riau', '08123155678', '000112338456', 150000),
(3, 'Egi', 'Purwokerto', '081789786555', '333334545009', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipekendaraan`
--

CREATE TABLE `tipekendaraan` (
  `idtipe` char(5) NOT NULL,
  `tipe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tipekendaraan`
--

INSERT INTO `tipekendaraan` (`idtipe`, `tipe`) VALUES
('AB001', 'Matic'),
('BN002', 'Manual'),
('CH003', 'Matic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `notransaksi` char(10) NOT NULL,
  `noplat` varchar(9) DEFAULT NULL,
  `idsopir` int DEFAULT NULL,
  `noktp` char(16) DEFAULT NULL,
  `tanggalpesan` date DEFAULT NULL,
  `tanggalpinjam` date DEFAULT NULL,
  `tanggalkembalirencana` date DEFAULT NULL,
  `jamkembalirencana` time DEFAULT NULL,
  `tanggalkembalirealisasi` date DEFAULT NULL,
  `jamkembalirealisasi` time DEFAULT NULL,
  `denda` int DEFAULT NULL,
  `kmpinjam` int DEFAULT NULL,
  `kmkembali` int DEFAULT NULL,
  `bbmpinjam` varchar(50) DEFAULT NULL,
  `bbmkembali` varchar(50) DEFAULT NULL,
  `kondisipinjam` varchar(100) DEFAULT NULL,
  `kondisikembali` varchar(100) DEFAULT NULL,
  `kerusakan` varchar(100) DEFAULT NULL,
  `biayakerusakan` int DEFAULT NULL,
  `biayabbm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`notransaksi`, `noplat`, `idsopir`, `noktp`, `tanggalpesan`, `tanggalpinjam`, `tanggalkembalirencana`, `jamkembalirencana`, `tanggalkembalirealisasi`, `jamkembalirealisasi`, `denda`, `kmpinjam`, `kmkembali`, `bbmpinjam`, `bbmkembali`, `kondisipinjam`, `kondisikembali`, `kerusakan`, `biayakerusakan`, `biayabbm`) VALUES
('T000000001', 'L1122VV', 1, '1234567890123456', '2016-01-01', '2016-02-02', '2016-02-14', '18:00:00', '2016-02-14', '15:00:00', 0, 1000, 1200, 'full', 'full', 'baik', 'baik', 'tidak ada', 0, 0),
('T000000002', 'W1267BB', 2, '45352516272727', '2016-02-02', '2016-02-15', '2016-03-01', '18:00:00', '2016-03-03', '12:00:00', 400000, 700, 1500, 'full', 'setengah', 'baik', 'tidak', 'bemper penyok', 200000, 75000),
('T000000003', 'DK2324FF', 3, '3580125650002', '2016-03-03', '2016-03-11', '2016-04-04', '18:00:00', '2016-03-04', '21:00:00', 50000, 2000, 3000, 'setengah', 'full', 'baik', 'baik', 'tidak ada', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`noplat`),
  ADD KEY `idtipe` (`idtipe`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`noktp`),
  ADD UNIQUE KEY `telepon` (`telepon`);

--
-- Indeks untuk tabel `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`idsopir`),
  ADD UNIQUE KEY `telepon` (`telepon`),
  ADD UNIQUE KEY `sim` (`sim`);

--
-- Indeks untuk tabel `tipekendaraan`
--
ALTER TABLE `tipekendaraan`
  ADD PRIMARY KEY (`idtipe`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `noplat` (`noplat`),
  ADD KEY `idsopir` (`idsopir`),
  ADD KEY `noktp` (`noktp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sopir`
--
ALTER TABLE `sopir`
  MODIFY `idsopir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`idtipe`) REFERENCES `tipekendaraan` (`idtipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idsopir`) REFERENCES `sopir` (`idsopir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`noktp`) REFERENCES `pelanggan` (`noktp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
