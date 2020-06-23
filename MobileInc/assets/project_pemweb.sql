-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Bulan Mei 2019 pada 13.19
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
-- Database: `project_pemweb`
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
(1, 'NEOGEO Mini [Asia]', 990000, 'neogeo.jpg', 10, 'komponen_game', 0, 'The Neo Geo mini includes forty masterpieces from the Neo Geo era. It’s shaped like a nostalgic arcade machine, and it comes with a 3.5-inch liquid crystal display of its own. This means that you can enjoy the games without the need to connect it to a TV or a monitor.'),
(2, 'POWER SUPPLY PS2 ORIGINAL', 1950000, 'powersupply.jpg', 10, 'komponen_game', 0, 'POWER SUPPLY PS2 ORIGINAL 100%\r\nTERSEDIA BUAT PS2 SCPH 30000/50000\r\nDIJAMIN ORIGINAL\r\nShock Resistant\r\nMineral Glass\r\n200-meter water resistance\r\nLED light (Super illuminator)\r\nSelectable illumination duration (1.5 seconds or 3 seconds), afterglow\r\nWorld time\r\n31 time zones (48 cities + coordinated universal time), daylight saving on/off, Home city/World time city swapping\r\n1/100-second stopwatch\r\nMeasuring capacity: 23:59\'59.99\'\''),
(5, 'Pandora Box 4S', 2700000, 'pandora.jpg', 10, 'komponen_game', 0, 'Permisi topers para gamers mania...mau jual koleksi pribiadi game console pandora 4s , berisi 300 an game jaman dingdong , tinggal colok ke led tv sudah ada colokan hdmi dan adaptor lengkap. kondisi buka dus cek kelengkapan dan sudah di tes, habis itu simpan ke dus lagi, bila minat bisa wa ke 0812 8888 2650, prefer cod kirim kirim bisa pakai asuransi. thanks'),
(6, 'Adaptor Nintendo Wii 220v - Perak', 70000, 'adaptornintendo.jpg', 10, 'komponen_game', 0, 'KWSUPER / 220 VOLT / BISA SEMUA MESIN NINTENDO WII \r\nSEKARANG PAKAI BOX COKLAT \r\n\r\nLightweight and easy to use.\r\nA special circuit board is designed inside the adapter controlling the output of DC12V and 3.7A to provide additional protection to your Nintendo Wii console.\r\nInput: 100-240V\r\nOutput: DC12V 3.7A\r\nSpecial built-in controling circuit board, accurately regulating 12V and 3.7A of output.\r\nBrand new product with high quality.'),
(7, 'SLOT STIK PS2 FAT/TEBAL', 55000, 'slotstik.jpg', 10, 'komponen_game', 0, 'SLOT STIK PS2 FAT/TEBAL COCOK UNTUK SEMUA SERI MESIN PS2 FAT/TEBAL (10rb, 30rb, & 50rb)\r\n\r\n- BARANG 100% BARU\r\n- NO GARANSI\r\n- TEST\r\n\r\nCARA PEMESANAN SILAKAN KLIK MENU \" BELI \"\r\nJIKA INGIN ATAU ADA PERTANYA SILAKAN CHAT / DISKUSI PRODUK MELALUI TOKOPEDIA, KAMI DENGAN SENANG HATI AKAN MENJAWAB / MERESPON PERTANYAAN ANDA SECEPAT MUNGKIN.\r\nTHANKS'),
(8, 'TOMBOL R1 L1 TRIGGER BUTTON TURBO S4 PUBG', 12000, 'analog.jpg', 10, 'komponen_game', 0, 'olt PUBG TURBO L1 R1 Sharp Shooter Joystick Trigger Gaming\r\n\r\nCHICKEN KING !!! FAST SHOOTER !!! BOLT PUBG SPEED !!!\r\n\r\nBahan metal superrrr premium dgn kualitas dan fungsi TERBAIK !!!\r\nPertama di kelasnya..hadir dengan kecepatan tembakan HINGGA 17 tembakan / 2 detik !!!\r\nKhusus Anda yg JAGO TEMBAK!!'),
(9, 'Ipega PG-9062 Dark Fighter Bluetooth Gamepad', 199000, 'ipega.jpg', 10, 'wheels', 0, 'Garansi 1 tahun distributor\r\n\r\nGamepad Aksesoris dengan koneksi bluetooth untuk memainkan game-game yang ada di smartphone Android ataupun iPhone Apple, cocok dengan emulator tanpa perlu rooting, menjalankan. Cocok dengan key mapping, FC simulator, GBA emulator, arcade emulator, SFC simulator, N64 emulator, etc.'),
(10, 'Thrustmaster steering wheel T150 Pro for PC/PS3/PS4', 4490000, 'thrustmaster.jpg', 10, 'wheels', 0, 'READY GO-JEK/GRAB!!!\r\n\r\nLike new jarang dipakai\r\nSemua berfungsi dengan baik\r\nTidak ada dent/cacat\r\nDapat manual book cara pemakaian\r\n\r\nDapat di gunakan di PS3/PS4 dan PC\r\n\r\nJNE PACKING KAYU AMAN BURBBLE WRAP\r\nGOJEK/GRAB LANGSUNG ANTAR AMAN BUBBLE WRAP'),
(11, 'Nintendo Wii Steering Wheel White Wii Remote Controller not included', 75000, 'nintendowii.jpg', 10, 'wheels', 0, 'Nintendo Wii Steering Wheel White Wii Remote Controller not included\r\n\r\nWireless Racing Wheel\r\nPrecision Control\r\nAdjustable Steering Sensitivity\r\nRequires a Wii Remote Controller (not included)'),
(12, 'PXN V3II Racing Game Steering Wheel with Foldable Pedal', 1329500, 'pxn.jpg', 10, 'wheels', 0, 'Specifications: - Working voltage: DC 5V- Working current: less than 10mA (normal condition), less than 170mA (vibration condition) - Working temperature: 10 - 40 Deg.C - Working humidity: 20 - 80 percent'),
(13, 'Logitech G29 Driving Force racing Wheel for PS3/Ps4 garansi resmi', 4316000, 'logitech.jpg', 10, 'wheels', 0, 'Selamat Datang di Pusat Pembelanjaan Berkualitas\r\nKualitas dijamin Original \r\nBarng Baru dan Masih Bersegel Box \r\nTransaksi aman dan terpercaya!!!!!\r\nKAMI PACKING KUAT DAN SEAMAN MUNGKIN\r\nHARGA TERTERA MASIH HARGA PROMO\r\nJIKA PRODUK LIVE BERARTI STOCK TERSEDIA\r\nTRANSAKSI HANYA LEWAT TOKOPEDIA GARANSI RESMI 1 TAHUN'),
(16, 'Logitech Driving Force Shifter For G29 & G920 Driving Force Racing W - Hitam', 799000, 'shifter.jpg', 10, 'wheels', 0, 'Garansi Resmi 2 tahun Logitech Indonesia (Kemasan harap disimpan)\r\n\r\nDIDESAIN UNTUK G29 DAN G920 DRIVING FORCE WHEEL\r\nMasukkan gigi yang tepat pada waktu yang tepat.\r\nDriving Force™ Shifter didesain untuk kemudi balap G29 dan G920 Driving Force, untuk meningkatkan keasyikan game balap konsol dan PC terbaru. Tambahkan Driving Force Shifter pada pengaturan kemudi balap Anda untuk melengkapi kokpit balapan Anda untuk memperoleh pengalaman yang lebih realistis.'),
(17, 'Gimbot Tennis Tomy', 500000, 'gimbot.jpg', 10, 'gameboy', 0, 'Gimbot Tennis merk Tomy\r\nmade in japan original\r\nkondisi\r\n- lengkap tutup batre\r\n- suara nyaring\r\n- tombol2 normal responsif\r\n- layar pekat jernih\r\n\r\nmohon pm untuk konfirmasi stok'),
(18, 'Gameboy Retro FC 400 Game Mini Games Console Gamepad Retro FC Portable', 124000, 'gameboy.jpg', 10, 'gameboy', 0, 'retro-fc-168-games-console-game-mini-gamepad-retro-fc-portabel-gameboy-biru Features: Brand New and high quality. Built-in multi classic games. It will take you back to your childhood. Digital multi-platform device , can play on TV. Come with a rechargeable lithium battery and a USB cable , 2-3 hours of continuous game play. Convenient size and Lightweight, it is perfect for playing travel or on the go. Specifications: Material: ABS. Battery Capacity: 800mAh. Product Size: 11.7*7.8*2.4cm. Package Size: 14*9.8*5.7cm. Screen: 3 inch. Built-in: 400 games. Note: There could be some slight differences in the color of the actual item. Please allow 1-2cm differs due to manual measurement, thanks. Package Included: 1PC * MINI Console 1PC * User Manaul 1PC * Charge Cable 1PC * AV Cable 1PC * Package'),
(19, 'Kaset Nintendo Famicom 35 ribuan', 35000, 'kaset.jpg', 10, 'gameboy', 0, 'Kaset famicom bootleg : \r\n\r\n- Birthday Blowout : 35rb\r\n- F1 Race : 35rb\r\n- Flying Warriors : 35rb\r\n- Mach Rider : 35rb\r\n- Ninja Jajamaru kun : 35rb\r\n- Pacman : 35rb\r\n- Prince of Persia : 40rb\r\n- Solomon\'s Key : 35rb\r\n\r\nKondisi : normal tested di mesin famicom clone'),
(20, 'Powerbank gameboy retro 12000mAH p2p / power bank game boy retro', 109000, 'powerbank.jpg', 10, 'gameboy', 0, 'Spesifikasi:\r\n-Powerbank 12.000mAh\r\n-Layar game 2,5\"\r\n-indikator batt\r\n-speaker untuk suara game'),
(21, 'Orb Gaming Mini Arcade Machine', 799000, 'arcade.jpg', 10, 'gameboy', 0, 'Relieve hours of video game nostalgia with the Micro Arcade Machine! Loaded with 240 fun games, this console is integrated with an enhanced screen rear light to suit both bright and dim lighted environments.\r\n\r\nMiniature game arcade\r\nFeatures 240 video games\r\n2.5 TFT screen\r\n3 x AA batteries required (not included)\r\nNo Warranty'),
(22, 'Loupedeck + Photo Editing Console', 3850000, 'loudpedeck.jpg', 10, 'gameboy', 0, 'Product Highlight :\r\n\r\n• Edit Using Buttons, Dials, and Sliders\r\n• Adjust & Fine Tune Images\r\n• Command Multiple Editing Functions\r\n• Two Customizable Dials & 17 Buttons\r\n• Mechanical Keys\r\n• Ergonomic Design & Improved Build\r\n• Adobe Lightroom, Premiere Pro Compatible\r\n• Skylum Aurora HDR Compatible\r\n• Beta Integration for Capture One\r\n• Windows & Mac Compatible'),
(23, 'Stick Stik ps4 - Dualshock 4 - Wireless controller - Putih', 535000, 'stikps4.jpg', 10, 'joystick', 0, 'Input:\r\n- 6 axis motion sensing (3 axis accelerometer, 3 axis gyroscope)\r\n- 2 Analog sticks\r\n- 2 Analog triggers (L2, R2)\r\n- 12 Digital buttons (Triangle, Circle, Cross, Square, L1, R1, L3, R3, \"PS\", SHARE, OPTIONS, touchpad click)\r\n- Digital directional buttons\r\n- 2 point capacitive touchpad with click mechanism\r\n- Koneksi: microUSB (Micro-B) 2.0, Bluetooth v2.1+EDR,[25] 3.5mm TRRS (CTIA) stereo headset jack, extension port\r\n- Power: 3.7 V 1000 mAh Li-ion battery,[25] USB 3.0 host powered\r\n- Ukuran: 162 mm 52 mm 98 mm / 6.4 in 2.0 in 3.9 in\r\n- Perangkat: Playstation 4 System\r\n- Berat: 400\r\n- Kondisi: Original Refurbished'),
(24, 'STIK PS3 WIRELESS / STICK PS3 WIRELESS ORI PABRIK / OP - Hitam', 120000, 'stikps3.jpg', 10, 'joystick', 0, '* HARGA BELUM TERMASUK KABEL CHARGER\r\n* 100% baru\r\n* Fungsi getar Dual shock (Force feed back)\r\n* Motions sensor SIXAXIS\r\n* Bermain bersama teman - teman sampai 4 orang\r\n* Bisa digunakan untuk PS3 (langsung connect), \r\n* Bisa digunakan untuk PC (pake aplikasi motionjoy), \r\n* Bisa digunakan untuk laptop (pake aplikasi motionjoy), \r\n* Bisa digunakan untuk android (pake aplikasi sixaxis controller). \r\ntutorial silahkan cek di google/youtube'),
(25, 'stik ps2 original - Biru', 70000, 'stikps2.jpg', 10, 'joystick', 0, 'stik ps2 original pabrikan merk elite pastinya lebih kuat dan lebih awet sudah terbukti cocok sekali untuk rental apalagi personal djamin anti putus karna kabelnya yg berserat dan mesinnya yg tahan banting'),
(26, 'GameSir X1 BattleDock Converter Keyboard Mouse for PUBG,Mobile Legends - Perak', 340000, 'gamesir.jpg', 10, 'joystick', 0, '- Ready stock (bukan dropship)\r\n- Kurir sangat direkomendasikan menggunakan GOJEK / GRAB. Selain itu HANYA bisa JNE\r\n- Jenis kemasan stoples bervariasi tergantung supply dari pusat. \r\n- Bonus: 1 Batang Kayu Manis\r\n- Karena merupakan madu mentah, produk ini tidak dianjurkan untuk diberikan kepada bayi berusia 12 bulan ke bawah\r\n- Fatih Kitchen adalah Distributor resmi dari Java Honey'),
(27, 'KONTROL FREEK / CONTROLL FREEK / FPS FREEK PS4 - SNIPR', 49900, 'kontrol.jpg', 10, 'joystick', 0, 'Tersedia 20 Varian FPS FREEK\r\n*CQC Signature\r\n*CQCX\r\n*VORTEX\r\n*PHANTOM\r\n*CALL OF DUTY INFINITE WARFARE\r\n*CALL OF DUTY MODERN WARFARE\r\n*CALL OF DUTY ZOMBIES Quick Revive\r\n*CALL OF DUTY ZOMBIES Space Land Edition\r\n*CALL OF DUTY WW II\r\n*CALL OF DUTY HERITAGE EDITION\r\n*ULTRA\r\n*ALPHA\r\n*EDGE\r\n*DESTINY CQC SIGNATURE EDITION\r\n*DESTINY 2 CQC SIGNATURE EDITION\r\n*DESTINY 2 GHOST\r\n*SNIPR\r\n*GALAXY\r\n*STRIKER\r\n*FUTBOL FREEK\r\n*CLASSIC\r\n*INFERNO'),
(28, 'Joy Con Controller Switch - Hijau muda', 1050000, 'switch.jpg', 10, 'joystick', 0, 'A Joy-Con (L) and Joy-Con (R) together make up a set of Joy-Con controllers. Pick up an extra set of Joy-Con controllers to open new kinds of gaming possibilities!\r\nThe right Joy-Con Controller includes an NFC touchpoint to unlock amiibo functionality.');

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
  `Jumlah` int(10) NOT NULL,
  `ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`Kode_cart`, `Kode_product`, `Jumlah`, `ID_user`) VALUES
(1, 21, 1, 0),
(2, 1, 1, 0);

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
  MODIFY `Kode_cart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
