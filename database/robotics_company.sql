-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2022 pada 17.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotics_company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_galeri`
--

CREATE TABLE `data_galeri` (
  `ID` int(255) NOT NULL,
  `Nama_File` varchar(255) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_galeri`
--

INSERT INTO `data_galeri` (`ID`, `Nama_File`, `Judul`, `Deskripsi`) VALUES
(1, '1.jpg', 'Grass Cut Robo', 'Robot yang berfungsi untuk memotong rumput di halaman rumah.'),
(2, '2.jpg', 'Football Robo', 'Robot yang di desain khusus untuk bermain sepakbola.'),
(3, '3.jpg', 'Cleaning Robo', 'Robot yang digunakan untuk membantu membersihkan debu dirumah.'),
(4, '4.jpg', 'Home Service Robo', 'Robot yang digunakan untuk membantu pekerjaan rumahtangga.'),
(5, '5.jpg', 'Robo Pet', 'Kami mendesain nya semirip mungkin dengan hewan peliharaan konsumen.'),
(6, '6.jpg', 'Washing Robo', 'Robot yang kami desain khusus untuk menangani piring yang kotor.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `ID` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Domisili` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_user`
--

CREATE TABLE `kontak_user` (
  `ID` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telepon` varchar(255) NOT NULL,
  `Pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_galeri`
--
ALTER TABLE `data_galeri`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kontak_user`
--
ALTER TABLE `kontak_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_galeri`
--
ALTER TABLE `data_galeri`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak_user`
--
ALTER TABLE `kontak_user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
