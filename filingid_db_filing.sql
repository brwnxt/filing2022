-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jan 2023 pada 16.10
-- Versi server: 10.3.37-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filingid_db_filing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`username`, `password`) VALUES
('adminfiling', '53eb42651353b541f60ec5a62141269b'),
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('adminfil', 'adde916e41caa4fa40d2a62001a4d3c8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npm` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `id_line` varchar(15) NOT NULL,
  `no_wa` varchar(30) NOT NULL,
  `pilihan_workshop` varchar(20) NOT NULL,
  `identitas_diri` varchar(250) NOT NULL,
  `pilihan_pembayaran` varchar(20) NOT NULL,
  `bukti_pembayaran` varchar(250) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `email`, `npm`, `nama`, `kelas`, `jurusan`, `id_line`, `no_wa`, `pilihan_workshop`, `identitas_diri`, `pilihan_pembayaran`, `bukti_pembayaran`, `date`, `stat`) VALUES
(5, 'ihsanulalif12@gmail.com', 12119901, 'Ilham', '3KA06', 'Sistem Informasi', '@brwnxt', '082384367812', 'Laravel Basic', '', 'BCA', '1656275646_1654412427_filing.jpg', '2022-06-26 20:36:07', 2),
(8, 'ihsanulalif12@gmail.com', 12119901, 'Ihsanul Alif', '2KA06', 'Sistem Informasi', '@alifihsanul', '082384367812', 'Laravel Basic', '', 'BCA', '1656740292_1654412427_filing.jpg', '2022-07-02 05:38:18', 2),
(19, 'ihsanulalif12@gmail.com', 12119901, 'Ihsanul Alif', '2KA06', 'Sistem Informasi', '@alifihsanul', '082384367812', 'Laravel Basic', '1657964043_Screenshot 2022-07-16 162049.jpg', 'DKI', '1657964043_1649325879_LaravelBasic_SenaBayuN.jpg', '2022-07-16 09:36:54', 1),
(20, 'ihsanulalif12@gmail.com', 12119901, 'Ilham Kurniawan', '2KA06', 'Sistem Informasi', '@brwnxt', '082384367812', 'Laravel Basic', '1658967855_Screenshot 2022-07-25 163817.jpg', 'DKI', '1658967855_WhatsApp Image 2022-07-07 at 06.28.34.jpeg', '2022-07-28 00:30:11', 1),
(21, 'ihsanulalif12@gmail.com', 12119901, 'Ilham Kurniawan', '2KB06', 'Sistem Komputer', '@brwnxt', '082384367812', 'Laravel Basic', '1658994142_Screenshot 2022-07-25 170331.jpg', 'DKI', '1658994142_Screenshot 2022-07-25 163817.jpg', '2022-08-02 16:52:24', 2),
(22, 'ihsanulalif12@gmail.com', 12119901, 'Ilham Kurniawan', '2KA06', 'Sistem Informasi', '@brwnxt', '082384367812', 'Laravel Basic', '1658994190_Screenshot 2022-07-25 163817.jpg', 'DKI', '1658994190_Screenshot 2022-07-25 170331.jpg', '2022-08-02 16:52:29', 2),
(23, 'ihsanulalif12@gmail.com', 12119901, 'Ilham Kurniawan', '3KA06', 'Sistem Informasi', '@brwnxt', '082384367812', 'Laravel Basic', '1659459258_Screenshot 2022-07-25 164300.jpg', 'DKI', '1659459258_Screenshot 2022-07-25 163817.jpg', '2022-08-02 16:55:26', 1),
(24, 'ihsanulalif12@gmail.com', 12119901, 'Ihsanul Alif', '3KA06', 'Sistem Informasi', '@brwnxt', '082384367812', 'Laravel Basic', '1659489764_Ihsanul Alif.jpg', 'DANA', '1659489764_Laravel Basic_Ihsanul Alif.jpg', '2022-08-03 01:23:37', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
