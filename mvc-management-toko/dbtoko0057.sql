-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2024 pada 18.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko0057`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_brg` char(6) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `harga` int(16) NOT NULL,
  `stok` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_brg`, `nama_brg`, `harga`, `stok`) VALUES
('AA24VV', 'Buku PHP Cepat Nempel', 250000, 3),
('ARGS21', 'Buku Belajar Kilat Ala Ahli', 150000, 30),
('P12RR1', 'Komic Detektive Conan Vol 21', 100000, 10),
('R24BB1', 'Komic Initial D Final State Boss Race', 250000, 5),
('R24BB2', 'Komic Initial D Final State', 190000, 10),
('TY22V1', 'Buku Astronomi Percodingan', 340000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plg` char(6) NOT NULL,
  `nama_plg` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `nama_plg`, `alamat`) VALUES
('112401', 'Fareza Dava Rabbani', 'Pasekaran Griya Permai Batang Anti Banjir'),
('112402', 'Reca Axton', 'JL Promkorpri Pasekaran Batang'),
('112403', 'Caca Marica Makan Merica', 'Kauman Batang'),
('112404', 'Rico Adi S', 'Batang Intinya'),
('112405', 'Miauw', 'JL.Durian 23 Pekalongan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(8) NOT NULL,
  `kd_brg` char(6) NOT NULL,
  `id_plg` char(6) NOT NULL,
  `jumlah` smallint(5) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tgl_trans` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `kd_brg`, `id_plg`, `jumlah`, `bayar`, `tgl_trans`) VALUES
(1, 'AA24VV', '112401', 1, 250000, '2024-11-04 17:12:33'),
(2, 'P12RR1', '112402', 4, 400000, '2024-11-04 17:12:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plg`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `kd_brg` (`kd_brg`),
  ADD KEY `id_plg` (`id_plg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kd_brg`) REFERENCES `barang` (`kd_brg`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_plg`) REFERENCES `pelanggan` (`id_plg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
