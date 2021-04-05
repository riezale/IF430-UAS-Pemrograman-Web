-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2020 pada 17.25
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merchandise`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gidn`
--

CREATE TABLE `gidn` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gidn`
--

INSERT INTO `gidn` (`id`, `username`, `email`, `password`, `role`, `is_active`, `image`, `jeniskelamin`, `tgllahir`) VALUES
(7, 'admin', 'admin@gmail.com', '$2y$10$rL5Mlxzs6qcfB5Lhw3RpteZGcYT4H6rsJlsloki7ZOEwfUXIQjcgu', 0, 1, '', '', ''),
(8, 'isal', 'isalgaming@gmail.com', '$2y$10$ddb2vxjSTqYKytkbtNVXRO3pYtVG9cUeFtJR8vcpng9Dnuk5SeMp2', 0, 1, '', '', ''),
(9, 'isals', 'isals@gmail.com', '$2y$10$pdjuK2kOT6mG6IgImNasRezhrveqKvkQjFLVNPNHNRWLXMIIZ/Qny', 2, 1, '', '', ''),
(10, 'testing123', 'testing123@gmail.com', '$2y$10$UQ9VIZ6Oa8A6rZa7YwnkOOCqpUykQMIhf.0I8.He4fSVgDcwmPoWO', 2, 1, '', '', ''),
(11, 'admin1', 'admin1@gmail.com', '$2y$10$V/7OeypRBTuYt5VKnGQ1beHeKCohDrRo1YhQply885xk4qFnvCCRe', 2, 1, '', '', ''),
(13, 'register123', 'register123@gmail.com', '$2y$10$TEzR71Og8heqDkRrts4fFugnZd1I08WkTuQiq4bsJZyNcF7lYm/ze', 0, 1, '', '', ''),
(14, 'aaaaaaaa', 'aaaaaaaa@gmail.com', '$2y$10$7Dd53e2ICaQAHWT9vVdokelI2QDJbMAPjQMDnM28NBrL10dlCVZWy', 0, 1, '', '', ''),
(17, 'aaaa', 'aaaa@gmail.com', '$2y$10$V0uPGW8k85MgLT4T3/vujuhxtv83.zrd.lVB7yETl7UUWZg8FTv/.', 2, 1, '', '', ''),
(18, 'madoka', 'madokontol@gmail.com', '$2y$10$b1b.ok1TQeSUkvPrEDIdMeIbhsvulwUv.uSIbsUAhN0jmMA08/nQG', 1, 1, '', '', ''),
(19, 'biji1', 'biji1@gmail.com', '$2y$10$qfB1I7kNiaY/LHLHs428u.qtE.VKcvf0H8bPquqCVI4.y5xRJDhM6', 1, 1, 'test.png', '', ''),
(20, 'uname', 'uname@gmail.com', '$2y$10$0bpIUhVX1j1vF5.4gXEcLOwJZ1Fe7WBX1TzS05bzo3tmti2WNC/7m', 1, 1, 'default.jpg', '', ''),
(0, 'jericho', 'jerichokefas@gmail.com', '$2y$10$IKnxQzf5OC9DPBk09h5QCuhQAfMIdBsXuUih8BEyVwg9AGRry/xeW', 2, 1, 'default.jpg', '', ''),
(0, 'manusia', 'manusia@gmail.com', '$2y$10$2.OoW7MVKbgh95LUOunus.2gFju14c5um1KALf6vZ2oF2khAf4YA6', 1, 1, 'default.jpg', '', ''),
(0, 'aldo', 'aldo@gmail.com', '$2y$10$4c2SQ3hbzBMy7Ilx1FEaTe3RNHT8w9980rWVzaIesJmyDRnlpIPNe', 2, 1, 'default.jpg', '', ''),
(0, 'abcd1234', 'abcd1234@gmail.com', '$2y$10$SvIFKFgLGHOlZIp0BGe9Qu1WrGawA10XEuJ4aRBI85UM3SSlLUWFK', 1, 1, 'default.jpg', '', ''),
(0, 'baru', 'baru@gmail.com', '$2y$10$V9oEiEPQHUxAqmM.lddIYuwnTWVH5w2sYRnvE/NNQHjLgTC.txw.O', 1, 1, 'default.jpg', 'pria', '2020-05-12'),
(0, 'usernamehere', 'usernamehere@gmail.com', '$2y$10$3eRiD7uKXwSl4BA2Ok31dO7q0aUXqamyXjQijJED9ntN.srQ0nEua', 1, 1, 'default.jpg', 'wanita', '2013-02-06'),
(0, 'pelerkntl', 'pelerkntl@gmail.com', '$2y$10$qIHhKcEwJau8q6IR1xw00uoQjHOUf/OkPAgHNtDuzQK3CGxKCnX4O', 1, 1, 'default.jpg', 'pria', '2010-02-28'),
(0, 'iniuser', 'iniuser@gmail.com', '$2y$10$HWgxRdREWYiLD1g2lPE3Ru48gkqNbGc3Uq74Zh3iIbTajYwAt/XWS', 2, 1, 'default.jpg', 'pria', '2020-04-28'),
(0, 'kontolgede1', 'kontolgede1@gmail.com', '$2y$10$KpKzPmVon.LqdvuVSTF04ue9BgiB.lgjvAyO1jfPb7QmvRl3hUzOa', 0, 1, 'default.jpg', 'pria', '2020-05-12'),
(0, 'kontolgede1', 'kontolgede21@gmail.com', '$2y$10$e3xzCFFCCQo.xaSfVYenXeXScSW2uJk0B0AnhAqddSvYie4u2gNP.', 0, 1, 'default.jpg', 'pria', '2020-05-22'),
(0, 'kontolgede1', 'kontolgede11@gmail.com', '$2y$10$URfdhXV3rCha.sNTnJpi0.Ug6JYPEXi9IjZhyMrzn0nWmywkseLNy', 0, 1, 'default.jpg', 'pria', '2020-05-01'),
(0, 'userkontol', 'userkontol@gmail.com', '$2y$10$1BdEpCd.EhbqefEqcVFp5OfFwjEhcplIBvysfLQqy27vdD3o3zA.6', 2, 1, 'default.jpg', 'pria', '2020-05-14'),
(0, 'wdwd', 'wdwdwd@gmail.com', '$2y$10$2/KltvCqjKBh6242PYpk9.91kkToeXa4MZALJ7qYLKXTRsG..lSle', 2, 1, 'default.jpg', 'pria', '2020-05-14'),
(0, 'wdwd', 'wdwdwd1@gmail.com', '$2y$10$VLN.QD0J75CjAsq5yS0gs.kBPuGG8/qE9zVq5G1taMzYq0zTXde9S', 2, 1, 'default.jpg', 'wanita', '2020-05-22'),
(0, 'ngentot1', 'ngentot1@gmail.com', '$2y$10$nVmUu8LkWn2EMnMDXmFQSOsrRRAdHooyR7tJ260Wf3gkEr3JPKiZm', 2, 1, 'default.jpg', 'wanita', '2020-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `harga`, `stok`, `gambar`) VALUES
(4, 'GIDN Special Hoodie', 'Special Merchandise', 400000, 10, 'hoodie211.jpg'),
(6, 'Tissue Mickey', 'tissue extra soft', 100000, 10, 'GUEST_2c5844f4-1cc5-4959-a350-7882b70e8a1d2.jpg'),
(8, 'GIDN Special Hoodie 2', 'Special Merchandise ++', 400000, 11, 'hoodie21111.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(3, 'aldo', 'Gading Serpong', '2020-05-21 15:41:00', '2020-05-22 15:41:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(4, 3, 6, 'Tissue Mickey', 1, 100000, ''),
(5, 3, 4, 'GIDN Special Hoodie', 1, 400000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_produk` BEFORE INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
