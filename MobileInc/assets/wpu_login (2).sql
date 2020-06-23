-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Bulan Mei 2019 pada 03.44
-- Versi server: 5.7.19
-- Versi PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailriwayattransaksi`
--

CREATE TABLE `detailriwayattransaksi` (
  `Kode_detail` int(10) NOT NULL,
  `Kode_riwayat` int(10) NOT NULL,
  `Kode_barang` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `Kode_barang` int(100) NOT NULL,
  `Nama_barang` varchar(100) NOT NULL,
  `Harga_barang` int(10) NOT NULL,
  `Pic` varchar(100) NOT NULL,
  `Stok` int(10) NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `Favorit` int(5) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`Kode_barang`, `Nama_barang`, `Harga_barang`, `Pic`, `Stok`, `Kategori`, `Favorit`, `detail`) VALUES
(1, 'Razer Man o War', 2600000, 'razermanowar.jpg', 10, 'Headset', 1, 'Featrues :\r\n- Advanced 7.1 virtual Surround sound Engine\r\n- Powerful 50mm drivers and sound isolation for immersive gaming Audio\r\n- In-line controls and fully Retractable Microphone for Easy access\r\n- Works perfectly with standard 3.5 mm jack devices\r\n- Compatibility with PC, Mac, Xbox one and PS4'),
(2, 'Casio G-Shock GA-710GB ', 1950000, 'casiogshock.jpg', 2, 'Aksesoris', 0, 'Case / bezel material: Resin\r\nResin Band\r\nShock Resistant\r\nMineral Glass\r\n200-meter water resistance\r\nLED light (Super illuminator)\r\nSelectable illumination duration (1.5 seconds or 3 seconds), afterglow\r\nWorld time\r\n31 time zones (48 cities + coordinated universal time), daylight saving on/off, Home city/World time city swapping\r\n1/100-second stopwatch\r\nMeasuring capacity: 23:59\'59.99\'\'');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayattransaksi`
--

CREATE TABLE `riwayattransaksi` (
  `Kode_transaksi` int(10) NOT NULL,
  `Kode_user` int(10) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Kode_cart` int(10) NOT NULL,
  `Kode_product` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Yehezkiel Gunawan', 'yeski.kaz123@gmail.com', 'Saya.jpeg', '$2y$10$2OLvNwPth7moo2W2x7C49uiPFZq0JMvJInvTkslmWX4259dNPCmqC', 1, 1, 1554955971),
(4, 'Baskoro', 'baskoro@gmail.com', 'baskoro.jpg', '$2y$10$VzoTguTroQt5RBCiPqXrfO1W9MP6QWDe6Us.l9ZoQQu2rbskLotIq', 2, 1, 1554958167),
(5, 'Erik', 'erik@gmail.com', 'default.jpg', '$2y$10$V6.swNa9Qfe2C2nCs8Cy9.WsPBjhGt6K3a/0KLtZrAcLEfDIvspUS', 2, 0, 1555849335),
(6, 'Arif', 'yeski.coba@gmail.com', 'default.jpg', '$2y$10$6jIC7UtU0cXmm2EEoLjUXO.mjXlY/oGowQvYO.gunlEeLPby8H1SG', 2, 0, 1555853292),
(7, 'Lapet', 'ahsanulqalbi@gmail.com', 'default.jpg', '$2y$10$Q6m/XMMTSbEWWSG6zblntum8wbGI0CtLksCOYRXk7xHu8gAnOTe7q', 2, 1, 1557139071),
(8, 'ahsanul', 'ahsanul.fajar@student.umn.ac.id', 'default.jpg', '$2y$10$3BlyMtengiMimxUiOAsss.1.nNwa6BU83aSiEjVovqJgUKN1LoIZm', 1, 1, 1557139131);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(10, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(5, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-user-edit', 1),
(4, 5, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 5, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailriwayattransaksi`
--
ALTER TABLE `detailriwayattransaksi`
  ADD PRIMARY KEY (`Kode_detail`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Kode_barang`);

--
-- Indeks untuk tabel `riwayattransaksi`
--
ALTER TABLE `riwayattransaksi`
  ADD PRIMARY KEY (`Kode_transaksi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Kode_cart`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailriwayattransaksi`
--
ALTER TABLE `detailriwayattransaksi`
  MODIFY `Kode_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `Kode_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayattransaksi`
--
ALTER TABLE `riwayattransaksi`
  MODIFY `Kode_transaksi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Kode_cart` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
