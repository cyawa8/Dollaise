-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2022 pada 11.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsdbx`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `member_id` int(11) NOT NULL,
  `member_fname` varchar(50) DEFAULT NULL,
  `member_lname` varchar(50) DEFAULT NULL,
  `member_date` date DEFAULT NULL,
  `member_address` varchar(100) DEFAULT NULL,
  `member_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`member_id`, `member_fname`, `member_lname`, `member_date`, `member_address`, `member_email`) VALUES
(1, 'vincent', 'richard', '2021-12-07', 'marunda baru V', 'vincent.richard12345@gmail.com'),
(2, 'fanyy', 'lentine', '2021-12-22', 'Harapan 1 Air Kenanga', 'tiffanyvalentine.0@gmail.com'),
(7, 'william', 'kim', '2021-12-25', 'warakas', 'jettslayer@gmail.com'),
(8, 'park derrent', 'ssi', '2021-12-25', 'cengkareng lah', 'derrent.is.back@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `kontak_pengirim` varchar(30) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `kontak_penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`id_pengiriman`, `nama_pengirim`, `kontak_pengirim`, `nama_penerima`, `kontak_penerima`) VALUES
(1, 'vinbcent', '123', 'richard', '321'),
(2, 'vincernt', '0896574099252', 'marco', '23156464821');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `laporan_id` int(5) NOT NULL,
  `pesan` varchar(300) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`laporan_id`, `pesan`, `email`, `name`) VALUES
(5, 'Derrent Antonio', 'derrent.is.back@gmai', 'ya gitulah'),
(6, 'Steven', 'tepencyang@gmail.com', 'tepen is back'),
(8, 'toko mainannya dibka kapan ya?', 'vincent.richard12345', 'vincent'),
(9, 'tombol home rusak', 'yunikristanti@mail.c', 'yuni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`product_id`, `product_name`, `product_stock`, `product_price`) VALUES
(19, 'lilin ulang tahun', 91, 7000),
(20, 'post it', 300, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_returpembelian`
--

CREATE TABLE `tb_returpembelian` (
  `pretur_id` int(5) NOT NULL,
  `pretur_date` date NOT NULL,
  `product_id` int(5) NOT NULL,
  `pretur_amount` int(100) NOT NULL,
  `pretur_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_returpembelian`
--

INSERT INTO `tb_returpembelian` (`pretur_id`, `pretur_date`, `product_id`, `pretur_amount`, `pretur_price`) VALUES
(9, '2022-01-04', 19, 9, 7000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_returpenjualan`
--

CREATE TABLE `tb_returpenjualan` (
  `sretur_id` int(5) NOT NULL,
  `sretur_date` date NOT NULL,
  `product_id` int(5) NOT NULL,
  `sretur_amount` int(100) NOT NULL,
  `sretur_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_returpenjualan`
--

INSERT INTO `tb_returpenjualan` (`sretur_id`, `sretur_date`, `product_id`, `sretur_amount`, `sretur_price`) VALUES
(8, '2022-01-04', 19, 5, 7000),
(9, '2022-01-04', 20, 1, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `supplier_id` int(5) NOT NULL,
  `supplier_fname` varchar(20) NOT NULL,
  `supplier_lname` varchar(20) NOT NULL,
  `supplier_address` text NOT NULL,
  `supplier_nohp` varchar(30) NOT NULL,
  `supplier_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`supplier_id`, `supplier_fname`, `supplier_lname`, `supplier_address`, `supplier_nohp`, `supplier_email`) VALUES
(11, 'vincent', 'richard', 'Marunda Baru 6', '089654092550', 'emeronron@gmail.com'),
(12, 'william', 'chandra', 'warakas', '08889994489', 'wilchan@gmial.com'),
(13, 'derrent ', 'antonio', 'kanaan', '08886195888', 'asdad@asdad'),
(14, 'Juni Kristanti', 'Purnomo', 'Tirtoyoso 5', '08886195888', 'yunyun@gmail.com'),
(15, 'michael', 'Reinhard', 'babagan 28', '1595235685', 'chyencehn@gmail.com'),
(16, 'vincent', 'antonio', 'BKT', '544645465465', 'vincent.richard88@yahoo.co.id'),
(17, 'dayya', 'nugroho', 'Jl.Kesemek', '06555118898', 'dayyanugroho12@gmail.com'),
(18, 'marco', 'antonio', 'taman patih', '088889855512', 'marco.senpai@gmail.com'),
(22, 'derrent ', 'cent2', 'kanaan 12312', '1595235685', 'centcent@gg.vv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksipembelian`
--

CREATE TABLE `tb_transaksipembelian` (
  `purchase_id` int(5) NOT NULL,
  `purchase_date` date NOT NULL,
  `supplier_id` int(5) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `purchase_amount` int(10) NOT NULL,
  `purchase_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksipembelian`
--

INSERT INTO `tb_transaksipembelian` (`purchase_id`, `purchase_date`, `supplier_id`, `product_name`, `purchase_amount`, `purchase_price`) VALUES
(24, '2022-01-04', 18, 'tisue basah', 20, '17000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksipenjualan`
--

CREATE TABLE `tb_transaksipenjualan` (
  `sell_id` int(5) NOT NULL,
  `sell_date` date NOT NULL,
  `product_id` int(5) NOT NULL,
  `sell_amount` int(100) NOT NULL,
  `sell_price` int(20) NOT NULL,
  `sell_total` int(20) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksipenjualan`
--

INSERT INTO `tb_transaksipenjualan` (`sell_id`, `sell_date`, `product_id`, `sell_amount`, `sell_price`, `sell_total`, `member_id`) VALUES
(32, '2022-01-04', 19, 10, 7000, 70000, 1),
(33, '2022-01-04', 20, 5, 2000, 10000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(4) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_password`) VALUES
(1284, 'emeron', 'lovely', 'emeronron@gmail.com', 12),
(1285, 'edric', 'suryadi', 'edric@gmail.com', 1),
(1287, 'michael', 'tanu', 'chen@gmail.com', 5),
(1288, 'susanto', 'tanuhariono', 'susanto121@gmail.com', 123),
(1291, 'jonas', 'jonis', 'egegngab@gmail.com', 123),
(1292, 'Tiffany', 'Valentine', 'tiffanyvalentine.@gmail.com', 123),
(1293, 'vincent', 'richard', 'tanuharionorichard@gmail.com', 0),
(1294, 'vincent', 'richard', 'vincent@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indeks untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`laporan_id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `tb_returpembelian`
--
ALTER TABLE `tb_returpembelian`
  ADD PRIMARY KEY (`pretur_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `tb_returpenjualan`
--
ALTER TABLE `tb_returpenjualan`
  ADD PRIMARY KEY (`sretur_id`),
  ADD KEY `tb_product` (`product_id`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indeks untuk tabel `tb_transaksipembelian`
--
ALTER TABLE `tb_transaksipembelian`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indeks untuk tabel `tb_transaksipenjualan`
--
ALTER TABLE `tb_transaksipenjualan`
  ADD PRIMARY KEY (`sell_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `tb_transaksipenjualan_ibfk_2` (`member_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `laporan_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_returpembelian`
--
ALTER TABLE `tb_returpembelian`
  MODIFY `pretur_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_returpenjualan`
--
ALTER TABLE `tb_returpenjualan`
  MODIFY `sretur_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `supplier_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksipembelian`
--
ALTER TABLE `tb_transaksipembelian`
  MODIFY `purchase_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksipenjualan`
--
ALTER TABLE `tb_transaksipenjualan`
  MODIFY `sell_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1295;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_returpembelian`
--
ALTER TABLE `tb_returpembelian`
  ADD CONSTRAINT `tb_returpembelian_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tb_produk` (`product_id`);

--
-- Ketidakleluasaan untuk tabel `tb_returpenjualan`
--
ALTER TABLE `tb_returpenjualan`
  ADD CONSTRAINT `tb_product` FOREIGN KEY (`product_id`) REFERENCES `tb_produk` (`product_id`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksipembelian`
--
ALTER TABLE `tb_transaksipembelian`
  ADD CONSTRAINT `tb_transaksipembelian_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `tb_supplier` (`supplier_id`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksipenjualan`
--
ALTER TABLE `tb_transaksipenjualan`
  ADD CONSTRAINT `tb_transaksipenjualan_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tb_produk` (`product_id`),
  ADD CONSTRAINT `tb_transaksipenjualan_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `tb_member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
