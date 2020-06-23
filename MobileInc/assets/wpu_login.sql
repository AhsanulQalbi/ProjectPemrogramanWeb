-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Bulan Mei 2019 pada 06.40
-- Versi server: 5.7.19
-- Versi PHP: 7.3.3

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
(1, 'Razer Man o War', 2600000, 'razermanowar.jpg', 10, 'laptop&aksesoris', 0, 'Featrues :\r\n- Advanced 7.1 virtual Surround sound Engine\r\n- Powerful 50mm drivers and sound isolation for immersive gaming Audio\r\n- In-line controls and fully Retractable Microphone for Easy access\r\n- Works perfectly with standard 3.5 mm jack devices\r\n- Compatibility with PC, Mac, Xbox one and PS4'),
(2, 'Casio G-Shock GA-710GB ', 1950000, 'casiogshock.jpg', 10, 'laptop&aksesoris', 0, 'Case / bezel material: Resin\r\nResin Band\r\nShock Resistant\r\nMineral Glass\r\n200-meter water resistance\r\nLED light (Super illuminator)\r\nSelectable illumination duration (1.5 seconds or 3 seconds), afterglow\r\nWorld time\r\n31 time zones (48 cities + coordinated universal time), daylight saving on/off, Home city/World time city swapping\r\n1/100-second stopwatch\r\nMeasuring capacity: 23:59\'59.99\'\''),
(5, 'Sodimm DDR3L 4GB Kingston', 535000, 'sodimmkingston.jpg', 10, 'laptop&aksesoris', 0, 'Memory/ Ram Kingston DDR3L 4GB PC 12800 Sodimm\r\n\r\nGaransi Resmi Lifetime Kingston'),
(6, 'Meja Laptop Notebook Belajar Lipat Kecil', 138000, 'mejalaptop.jpg', 10, 'laptop&aksesoris', 0, 'Selama Product masih di pajang artinya readystok, langsung di beli bossku\r\n\r\nKELEBIHANNYA Etable:\r\n- Bisa untuk meja notebook dan laptop, minimal 14 inch dan maksimal 17 inch,\r\n- Meja Lipat Flexible (Bisa dimasukkan ke dalam tas)\r\n- Meja Belajar Mudah disimpan dimana saja \r\n- Meja Lantai Ringan (Tidak sampai 2 kg)\r\n- Kaki kokoh meskipun terkesan ringkih atau goyang,\r\n- Ketinggian kaki bisa diatur\r\n- Kompatible dengan segala ukuran laptop/ notebook\r\n- Ukuran lebar 56 sentimeter x 32 sentimeter\r\n- Ketinggian meja up to 31cm\r\n- Sudut penyangga meja up to 70*\r\n- Kemiringan coolingpad (2 FAN) dapat diatur (max 70 degree)\r\n- Setelah meja dilipat ukurannya mnjadi: 28 x 32 cm'),
(7, 'ACER ASPIRE 3 A315-41-R97J RYZEN 5', 6890000, 'aceraspire3.jpg', 10, 'laptop&aksesoris', 0, 'ACER ASPIRE 3 A315-41 BLACK\r\n\r\n- AMD RYZEN 5 Quad Core 2500U 2.0GHz up to 3.6GHz (4MB Cache), 8 Threads\r\n- 8GB RAM DDR4 (4GB x 2 Dual Channel)\r\n- 1TB HDD (SSD M.2 Slot Available)\r\n- AMD Radeon RX VEGA 8 CUs (DDR4 Shared Graphics Memory)\r\n- WINDOWS 10 HOME SL\r\n- Non DVD\r\n- 15.6\"HD LED Display\r\n- Audio by ACER TRUEHARMONY\r\n- 1x HDMI, 1x Gigabit LAN, Webcam\r\n- 1x Card Reader, WiFi MU-MIMO 802.11ac + Bluetooth v4.2\r\n- USB 2.0 x 2, USB 3.0 x 1 \r\n- Weight : 2.1kg included battery\r\n- Garansi Resmi PT. Acer Indonesia 1 Tahun\r\n- ACER BAG\r\n- Premium & Slim Design'),
(8, 'Corsair RAM DDR3 8GB For MAC', 960000, 'corsair.jpg', 10, 'laptop&aksesoris', 0, 'Memory Type DDR3\r\n- Memory Size 8GB \r\n- 1333MHz\r\n- Voltage 1.35V / 1.5V\r\n- PC3-12800 (1600MHz)\r\n\r\n\r\nTanya Dahulu Sebelum Membeli Untuk Memastikan Ketersediaan Barang!\r\nTerima Kasih'),
(9, 'NEW 2DS LL / XL BNIB CFW LUMA PERMANEN + 32GB', 2350000, 'nintendo.jpg', 10, 'Gaming', 0, 'Kelengkapan:\r\n- Dus / Box\r\n- Manual Book\r\n- AR Card 6 pcs\r\n- Stylus\r\n- Micro SD 32GB (Full Game, boleh request, list game dikirimkan via mediafire)\r\n- Adaptor 220v ORIGINAL '),
(10, 'Digital alliance Meca Master RGB Blue', 525000, 'mekanik.jpg', 10, 'Gaming', 0, 'Brand Digital Alliance\r\nType Meca MAster\r\nSwitch Outemu Blue Switch\r\nFull anti Ghosting\r\nFull Key 104 Key\r\nMaterial ABS\r\nRemovable Switch Anti Dust\r\nKeycaps Double Injection\r\nLED Efec RGB With Software (16.8M color)\r\ndimension 440 x 139 x 37mm\r\nPanjang Kabel 1.8M\r\nForm Factor Full Size Keyboard\r\nWater Proof\r\nOs Microsoft Mac Os'),
(11, 'New 3ds XL / LL Nintendo 3dsxl', 2950000, '3ds.jpg', 10, 'Gaming', 0, 'Kelengkapan :Unit New 3DS XL / LL (Metalic Black/Red Maroon/White )\r\nStylush Pen\r\nManual Book\r\nAr-Card\r\nKabel USB (untuk chger, bisa di sambung ke kepala chargeran HP)\r\nMicro SD 32 GB '),
(12, 'Stick Stik PS4 Wireless Controller Dualshock 4', 665000, 'controller.jpg', 10, 'Gaming', 0, 'SELAMA IKLAN MASIH ADA SELALU READY STOCK yah...\r\n\r\n** FREE USB KABEL UNTUK CHARGE **\r\n\r\nGARANSI RESMI SONY INDONESIA 1 TAHUN\r\n\r\nModel terbaru CUH-ZZCT2\r\nada LED Bar di touchpad\r\n100% BARU DAN ORIGINAL\r\n\r\nJangan tanya lagi ini refubished atau gak baru\r\n\r\nGAK BARU GAK SESUAI SPEC tinggal komplain, \r\ngak perlu bayar ongkos kirim kita tanggung semua'),
(13, 'Minecraft Account Premium [100% ORIGINAL]', 100000, 'minecraft.jpg', 10, 'Gaming', 0, 'Akses 100%\r\nKondisi : Baru\r\nBonus Minecraft Win 10 Edition Key\r\nGaransi 1 Tahun *Syarat dan ketentuan berlaku\r\nTestimoni : fb•com/ANShop•27/reviews/'),
(16, 'Left 4 Dead 1 dan 2 For PC or Laptop', 14000, 'leftdead2.jpg', 10, 'Gaming', 0, 'Versi Repack\r\nIsi paket adalah\r\nLeft 4 Dead 1 dan Left 4 Dead 2\r\n\r\n\r\nSpesifikasi Recommended Left 4 Dead 1 dan 2\r\n\r\nOS: Windows 7.\r\nCPU: Intel Core 2 Duo @2.4GHz.\r\nGPU/VGA : NVIDIA GeForce GT 7600 / AMD Radeon X1600.\r\nRAM: 2 GB.\r\nHDD: 13 GB'),
(17, 'YAMAHA NMAX NON ABS - PALEMBANG - Hitam', 28879000, 'yamaha-nmax-abs.jpg', 10, 'Otomotif', 0, 'Mesin\r\nTipe Mesin : Liquid cooled 4-stroke, SOHC \r\nJumlah/Posisi silinder : Single Cylinder\r\nKapasitas Mesin : 155cc\r\nDiameter x langkah : 58,0 mm x 58.7 mm\r\nPerbandingan kompresi : 10,5 : 1\r\nDaya maksimum : 11.1 kW/8000 rpm\r\nTorsi maksimum : 14.4 Nm/6000 rpm\r\nSistem Starter : Electric Starter\r\nSistem Pelumasan : Basah\r\nKapasitas Oli Mesin : Total 1,00 L ; Berkala 0,90 L\r\nSistem Bahan Bakar : FI (Fuel Injection)\r\nTipe Kopling : Kering, Centrifugal Automatic\r\nTipe Transmisi : V-belt Automatic'),
(18, 'All New Honda BeAT eSP CW', 16100000, 'beat.jpeg', 10, 'Otomotif', 0, 'ALL NEW BEAT SPORTY ESP CW\r\nDimensi (P x L x T)	1,856 x 666 x 1,068 mm\r\nJarak sumbu Roda	1.256 mm\r\nJarak terendah ke tanah	146 mm \r\nBerat kosong	94 kg \r\nTinggi tempat duduk	740 mm\r\n735 mm (BeAT Pop)\r\nRangka	Tulang punggung\r\nSuspensi depan	Teleskopik\r\nSuspensi belakang	Lengan ayun dengan peredam kejut tunggal\r\nUkuran Ban depan	80/90-14 M/C 40P\r\n(Khusus Honda BeAT eSP & BeAT Street eSP menggunakan ban tubeless)\r\nUkuran Ban Belakang	90/90-14 M/C 46P\r\n(Khusus Honda BeAT eSP & BeAT Street e'),
(19, 'NEW VARIO 125 ESP CBS ISS', 20885000, 'vario.jpg', 10, 'Otomotif', 0, 'Honda All New Vario 125 eSP Sepeda Motor merupakan generasi terbaru mesin matic honda yang lebih efisien irit bahan bakar dan ramah lingkungan. Dilengkapi dengan teknologi CBS (Combi Brake System) dengan menarik tuas rem kiri maka rem belakang dan depan dapat berfungsi dengan optimal yaitu sistem untuk mematikan mesin secara otomatis pada saat berhenti sejenak lebih dari 3 detik dan mesin menyala ketika tuas gas diputar.'),
(20, 'Sarung Cover Stir Setir Mobil Anti Slip Kulit Sport Edition 2 Side Vie - Kuning', 109000, 'steer.jpeg', 10, 'Otomotif', 0, 'DETAIL PRODUK :\r\nTerbuat dari kulit, nyaman untuk di Grip setiap hari, dan Mempercantik tampilan interior anda \r\nUkuran M untuk diameter steer 38 cm \r\nWuling, Xpander, Innova, Accent, Avanza 2006, Xenia 2006, APV, APV Arena, Pajero, Fortuner, Everest, Grandis, Vios lama, Corolla Altis, Civic Batman, Altis, Camry, New Panther, New Kijang, Rush, Terios, Captiva, Sirion, Trajet, Picanto, Baleno lama - baru, Swift, Karimun, Karimun Estilo, Granmax, Livina lama - baru, Serena, Evalia, Biante, Picanto lama - baru, Visto, Kijang Kapsul, Luxio, Taft, Strada, Nissan Navara, Terrano, CRV2005-2012, Merci C200, BMW 318i dll '),
(21, 'Karpet Mobil Alas Kaki Karet Tebal', 168000, 'karpet.jpg', 10, 'Otomotif', 0, 'Karpet Mobil Alas Kaki Karet Tebal Transparan Premium 1 Set 5 Pcs\r\n\r\nharga tertera sudah 1 set 5 pc : depan 2, belakang 2, belakang tengah 1.\r\nbahan lebih tebal dan awet dipakai. tidak licin.\r\n\r\nbisa digunakan untuk semua jenis mobil (universal)\r\ndepan: 68 x 48cm\r\nbelakang : 49 x 47.5cm\r\nbelakang tengah : 49 x 18cm\r\n\r\nwarna : transparan, dan transparan hitam\r\n\r\nada pertanyaan ? langsung chat yuk !'),
(22, 'Knalpot dua suara pakai remot ukuran 3 inch', 1500000, 'knalpot.jpg', 10, 'Otomotif', 0, 'alias knalpot dengan remote, solusi bagi pingin punya mobil suara knalpot freeflow tapi ketika pencet remote langsung balik ke sistem knalpot standart full silent\r\n\r\nkelebihan produk ini adalah modul katup terpisah dgn pipa alias model cadridge, sehingga aman ketika proses pengelasan\r\n\r\nsaya hanya jual barang, tidak terima pasang, untuk pemasangan bisa dibawa ke tukang knalpot , untuk pemasangan elektrik tinggal colokin ke lighter\r\nkalau ingin suara kenceng gak sopan pasang sebelum resonator, jika ingin agak halus pasang setelah resonator\r\nso langsung saja balik ke ke knalpot standart ditambah valvetronic / cutout exhaust'),
(23, 'Frisian Flag Susu Bubuk Keluarga Instant Plain 800g Box', 66398, 'frisian.jpg', 10, 'Makanan & Minuman', 0, 'Deskripsi Produk\r\nPenuhi kebutuhan kalsium keluarga Anda dengan Frisian Flag Bendera Bubuk Instant 800gr Box. Susu ini kaya akan kandungan kombinasi 13 vitamin serta 10 mineral yang akan menyehatkan pola hidup Anda sekeluarga.\r\n\r\n- Dapat dinikmati oleh anak-anak dan orang dewasa\r\n- Mengandung inulin, iodium, dan fosfor\r\n- Kandungan gula 30% lebih rendah\r\n\r\nSpesifikasi Produk\r\nJenis Produk: Susu Bubuk\r\nBerat Bersih: 800 gram\r\nKemasan: Kardus'),
(24, 'Daging Sapi Wagyu Beef Mess / Wagyu Meltik Batik / Trim Wagyu pack 1kg', 120000, 'daging.jpg', 10, 'Makanan & Minuman', 0, '==SUPER SALE==\r\n- SEMULA Rp179rb/kg -\r\n- SEKARANG Rp120rb/kg -\r\nDISKONNYA 59RB CUII,TUNGGU APA LAGIII\r\n\r\nLEBIH DISARANKAN PAKAI INSTAN KURIR SEBAB UNTUK KURIR SAMEDAY PERKIRAAN SAMPAI 5-7 JAM :)'),
(25, 'Madu Bima99 @3Sacht', 20000, 'madu.jpg', 10, 'Makanan & Minuman', 0, 'madu bima 99 sachet, cocok kita bawa pada saat perjalan, khasiatnya tetap sama dengan dengan madu bima 99 pahit hitam super'),
(26, 'Madu Mentah Java Honey (Alami) 320 ml (tanpa sarang)', 109000, 'madumentah.jpg', 10, 'Makanan & Minuman', 0, '- Ready stock (bukan dropship)\r\n- Kurir sangat direkomendasikan menggunakan GOJEK / GRAB. Selain itu HANYA bisa JNE\r\n- Jenis kemasan stoples bervariasi tergantung supply dari pusat. \r\n- Bonus: 1 Batang Kayu Manis\r\n- Karena merupakan madu mentah, produk ini tidak dianjurkan untuk diberikan kepada bayi berusia 12 bulan ke bawah\r\n- Fatih Kitchen adalah Distributor resmi dari Java Honey'),
(27, 'Kopi Dynamic isi 30 saset', 380000, 'kopi.jpg', 10, 'Makanan & Minuman', 0, 'INFO LENGKAP KOPI DYNAMIC :\r\nSaatnya Kini Anda Mengetahui Informasi yang Lengkap dan Benar Tentang Kopi Dynamic Serta Peduli Akan Kebugaran Stamina dan Vitalitas Tubuh Anda Untuk Menopang Segala Kegiatan Anda Saat Bekerja dan Membahagiakan Pasangan Anda Khususnya.'),
(28, 'Alpukat Mentega Avocadron', 48000, 'alpukat.jpg', 10, 'Makanan & Minuman', 0, 'INFO AVOCADRON\r\nMohon dibaca terlebih dahulu sebelum membeli.\r\n\r\n\r\nAlpukat Reguler (3-5 buah) 48rb/kg\r\n\r\nMin order 2 kg\r\n\r\nSebagian besar BELUM ADA YANG MATANG. Rata-rata matang dlm 2-5 hari.\r\nApabila ada yang matang akan dicampur sesuai dengan urutan order.\r\n\r\nSimpan alpukat dalam suhu ruang apabila BELUM MATANG. Kalau sudah matang bisa dimasukkan ke dalam kulkas, tahan 1-2 hari. ');

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
  MODIFY `Kode_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
