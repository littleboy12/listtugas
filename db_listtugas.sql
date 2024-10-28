-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 12.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_listtugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `file` varchar(50) NOT NULL,
  `guru` varchar(50) NOT NULL,
  `tgl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`, `guru`, `tgl`) VALUES
(1, '01 JAM (BHS  ARAB) 31 juli 2021', 'files/01 JAM (BHS  ARAB) 31 juli 2021.docx', 'Jamaludin S.Ag', '2021-07-31'),
(2, '02 JAM (FIQIH) 31 juli 2021', 'files/02 JAM (FIQIH) 31 juli 2021.docx', 'Jamaludin S.Ag', '2021-07-31'),
(4, '04 IMM (KEMUHAMMADIYAHAN) 5 Agustus 2021', 'files/04 IMM (KEMUHAMMADIYAHAN) 5 Agustus 2021.doc', 'Imam Ashari', '2021-08-05'),
(5, '05 BUD (DATABASE) 06 Agustus 2021', 'files/05 BUD (DATABASE) 06 Agustus 2021.pdf', 'Asbudi S.Kom', '2021-08-06'),
(6, '06 JAM (BHS ARAB) 7 Agustus 2021', 'files/06 JAM (BHS ARAB) 7 Agustus 2021.docx', 'Jamaludin S.Ag', '2021-08-07'),
(7, '08 SYK (BTQ) 8 Agustus 2021', 'files/08 SYK (BTQ) 8 Agustus 2021.pdf', 'Syukron ', '2021-08-08'),
(8, '07 JAM (FIQIH) 07 Agustus 2021-590', 'files/07 JAM (FIQIH) 07 Agustus 2021-590.pdf', 'Jamal Hasyim S.Ag', '2021-08-07'),
(9, '09 BUD (PKK) 12 Agustus 2021', 'files/09 BUD (PKK) 12 Agustus 2021.pdf', 'Asbudi S.Kom', '2021-08-12'),
(11, '10 NIS (MATEMATIKA) 13 Agustus 2021', 'files/10 NIS (MATEMATIKA) 13 Agustus 2021.pdf', 'Nisa', '2021-08-14'),
(12, '11 JAM (FIQIH) 13 Agustus 2021', 'files/11 JAM (FIQIH) 13 Agustus 2021.jpg', 'Jamal Hasyim S.Ag', '2021-08-13'),
(13, '03 MET (PEMWEB) 2 Agustus 2021', 'files/03 MET (PEMWEB) 2 Agustus 2021.pdf', 'Mety Rasminy S.Kom', '2021-08-02'),
(15, '12 JAM (BHS ARAB) 21 Agustus 2021', 'files/12 JAM (BHS ARAB) 21 Agustus 2021.docx', 'Jamal Hasyim S.Ag', '2021-08-21'),
(16, '13 JAM (BHS ARAB) 28 Agustus 2021', 'files/13 JAM (BHS ARAB) 28 Agustus 2021.docx', 'Jamal Hasyim S.Ag', '2021-08-28'),
(17, '14 SYK (QURDIST) 21 Agustus 2021', 'files/14 SYK (QURDIST) 21 Agustus 2021.docx', 'Syukron S.Pd I', '2021-08-21'),
(18, '15 NIS (MATEMATIKA) 31 Agustus 2021', 'files/15 NIS (MATEMATIKA) 31 Agustus 2021.pdf', 'Khusnul Nur Annisa S.Pd ', '2021-08-31'),
(19, '16 MET (PEMWEB) 21 September 2021', 'files/16 MET (PEMWEB) 21 September 2021.docx', 'Mety Rasmyni S.Kom', '2021-09-02'),
(20, '17 NIS (MATEMATIKA) 9 September 2021', 'files/17 NIS (MATEMATIKA) 9 September 2021.pdf', 'Khusnul Nur Annisa S.Pd ', '2021-09-09'),
(21, '18 BUD (BASIS DATA) 10 September 2021', 'files/18 BUD (BASIS DATA) 10 September 2021.pdf', 'Asbudi S.Kom', '2021-09-10'),
(22, '19 JAM (FIQIH) 11 September 2021', 'files/19 JAM (FIQIH) 11 September 2021.jpg', 'Jamal Hasyim S.Ag', '2021-09-11'),
(23, '20 SYK (QURDIST) 12 September 2021', 'files/20 SYK (QURDIST) 12 September 2021.docx', 'Achmad Syukron S.Pd.I', '2021-09-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('a30af5cd-088d-11ec-a128-b888e301e540', 'Aldi Tulus P', 'Aldi Tulus', '6903a3b4ac97e4e4666231f005e966b4a3e23406', '1'),
('b541bf4d-fc05-11eb-a5be-b888e301e540', 'Tulus', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
