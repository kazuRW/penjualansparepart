-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 02.51
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualansparepart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_invoice` varchar(30) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`) VALUES
(1, '11', 'INV-102425056', 6, 'vga', 1, 100000),
(2, '11', 'INV-15051238', 6, 'vga', 1, 100000),
(3, '11', 'INV-88440290', 7, 'Processor Intel Core i7-12700 4.9GHz', 4, 5280859),
(4, '11', 'INV-94871661', 8, 'Processor Intel Core i3-12100 3.3 GHz', 6, 1947758),
(5, '11', 'INV-92438515', 10, 'AMD Ryzen 7 5700G 3.8GHz Processor', 1, 3121042),
(6, '11', 'INV-92438515', 16, 'Sandisk SDSSDA-1T00-G27 1TB SSD Hard Drive', 1, 977232),
(7, '11', 'INV-92438515', 17, 'Adata Sata 3 SU650 3D 240GB Hard Drive', 1, 252537),
(8, '11', 'INV-81610856', 12, 'Zotac VGA RTX 3050 AMP 8GB GDDR6 Graphic Card', 1, 4632759),
(9, '11', 'INV-108830873', 14, 'Asrock VGA RX6500XT 4GB GDDR6 Graphic Card', 1, 2840058),
(10, '11', 'INV-15784326', 17, 'Adata Sata 3 SU650 3D 240GB Hard Drive', 1, 252537),
(11, '16', 'INV-63124869', 7, 'Processor Intel Core i7-12700 4.9GHz', 1, 5280859),
(12, '16', 'INV-46927197', 7, 'Processor Intel Core i7-12700 4.9GHz', 1, 5280859),
(13, '16', 'INV-105492718', 8, 'Processor Intel Core i3-12100 3.3 GHz', 1, 1947758),
(14, '16', 'INV-74951559', 7, 'Processor Intel Core i7-12700 4.9GHz', 1, 5280859),
(15, '16', 'INV-34499229', 8, 'Processor Intel Core i3-12100 3.3 GHz', 1, 1947758),
(16, '18', 'INV-35043609', 8, 'Processor Intel Core i3-12100 3.3 GHz', 1, 1947758),
(46, '2', 'INV-97863211', 7, 'Processor Intel Core i7-12700 4.9GHz', 2, 5280859),
(47, '2', 'INV-97863211', 9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 1, 3782318),
(48, '2', 'INV-38548688', 9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 1, 3782318),
(49, '3', 'INV-56781626', 9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 1, 3782318),
(50, '3', 'INV-93984587', 10, 'AMD Ryzen 7 5700G 3.8GHz Processor', 1, 3121042),
(51, '3', 'INV-93984587', 13, 'Asus VGA TUF RTX 3050 8GB GDDR6 Graphic Card', 1, 5829408),
(52, '3', 'INV-14631518', 9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 1, 3782318),
(53, '3', 'INV-103827220', 8, 'Processor Intel Core i3-12100 3.3 GHz', 1, 1947758),
(54, '3', 'INV-1852989', 10, 'AMD Ryzen 7 5700G 3.8GHz Processor', 1, 3121042),
(55, '3', 'INV-58772131', 18, 'Kingston Fury Beast RGB 16GB 2x8GB DDR5 5600Mhz RAM Memory', 1, 2191464),
(56, '3', 'INV-2220144', 7, 'Processor Intel Core i7-12700 4.9GHz', 1, 5280859),
(57, '5', 'INV-43552705', 9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 1, 3782318),
(58, '5', 'INV-43552705', 17, 'Adata Sata 3 SU650 3D 240GB Hard Drive', 1, 252537),
(59, '6', 'INV-48055221', 10, 'AMD Ryzen 7 5700G 3.8GHz Processor', 1, 3121042),
(60, '6', 'INV-48055221', 8, 'Processor Intel Core i3-12100 3.3 GHz', 2, 1947758),
(61, '6', 'INV-47585976', 11, 'Intel i9-10900K 3.7Ghz Processor', 1, 5969070),
(62, '6', 'INV-95891717', 8, 'Processor Intel Core i3-12100 3.3 GHz', 1, 1947758),
(63, '6', 'INV-14483672', 9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 1, 3782318);

--
-- Trigger `cart`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `cart` FOR EACH ROW BEGIN
	UPDATE product SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(7, 'Processor Intel Core i7-12700 4.9GHz', 'Memory:\r\n- Maximum internal memory supported by processor128 GB\r\n- Memory types supported by processorDDR4-SDRAM,DDR5-SDRAM\r\n- Memory channels : Dual-channel\r\n- Memory bandwidth (max)76.8 GB/s', 'Processor', 5280859, 3, 'intel-core-i7-12700-4_9ghz-processor.jpg'),
(8, 'Processor Intel Core i3-12100 3.3 GHz', 'Sekarang Anda dapat melakukan pemesanan tanpa harus keluar rumah dengan techinn, toko online Anda yang khusus menjual barang elektronik dan komputer. Kami ingin Anda menikmati waktu senggang Anda dengan cara yang unik dan karenanya kami menawarkan pilihan', 'Processor', 1947758, 2, 'intel-core-i3-12100-3_3-ghz-processor.jpg'),
(9, 'Intel Xeon E3-1220V6 3.0GHz CPU', 'Anda ingin membeli Intel Xeon E3-1220V6 3.0GHz CPU? Semua produk dari Intel memiliki kualitas terbaik sehingga Anda dapat menikmati aktivitas Anda tanpa ribet. Tempatkan pesanan CPU Intel Xeon E3-1220V6 3.0GHz Anda dan terima dalam beberapa hari. Tujuan k', 'Processor', 3782318, 4, 'intel-xeon-e3-1220v6-3_0ghz-cpu.jpg'),
(10, 'AMD Ryzen 7 5700G 3.8GHz Processor', 'Saat ini Prosesor AMD Ryzen 7 5700G 3.8GHz dengan harga terbaik dan sangat cocok untuk aktivitas Anda. Di techinn, Anda dapat menemukan produk lain yang melengkapi katalog Komponen kami dan khususnya ke dalam kategori Prosesor kami. Kami memiliki beragam ', 'Processor', 3121042, 6, 'amd-ryzen-7-5700g-3_8ghz-processor.jpg'),
(11, 'Intel i9-10900K 3.7Ghz Processor', 'Jika Anda mencari Prosesor Intel i9-10900K 3.7Ghz, Anda beruntung. Di toko elektronik dan komputer kami, Anda memiliki harga terbaik yang tersedia dan dengan keyakinan bahwa toko tersebut memberi Anda teknologi seperti itu. Jangan menunggu lebih lama dan ', 'Processor', 5969070, 9, 'intel-i9-10900k-3_7ghz-processor.jpg'),
(12, 'Zotac VGA RTX 3050 AMP 8GB GDDR6 Graphic Card', 'Selain itu, Kartu Grafis Zotac VGA RTX 3050 AMP 8GB GDDR6 dalam kategori Komponen dari toko elektronik dan komputer online Anda, Anda dapat menemukan produk lain yang terkait dengan Kartu grafis. Jika Anda tertarik untuk membeli produk lain dari merek Zot', 'Vga', 4632759, 9, 'zotac-vga-rtx-3050-amp-8gb-gddr6-graphic-card.jpg'),
(13, 'Asus VGA TUF RTX 3050 8GB GDDR6 Graphic Card', 'Apakah Anda ingin tahu produk elektronik dan komputer terkait lainnya yang dimiliki Asus? Di techinn, Anda dapat membeli semua item kartu grafis yang diperlukan agar Anda dapat memanfaatkan aktivitas Anda tanpa kerumitan. Kartu Grafis Asus VGA TUF RTX 305', 'Vga', 5829408, 9, 'asus-vga-tuf-rtx-3050-8gb-gddr6-graphic-card.jpg'),
(14, 'Asrock VGA RX6500XT 4GB GDDR6 Graphic Card', 'Kartu Grafis Asrock VGA RX6500XT 4GB GDDR6 tersedia dengan karakteristik yang berbeda. Beli di techinn dan dapatkan semua keuntungannya. Selain itu, Kartu Grafis VGA RX6500XT 4GB GDDR6 Asrock memiliki jaminan resmi dari merek Asrock. Anda juga dapat melen', 'Vga', 2840058, 9, 'asrock-vga-rx6500xt-4gb-gddr6-graphic-card.jpg'),
(15, 'Kingston DC500M 3.84TB Hard Disk SSD', 'Kingston DC500M 3.84TB Hard Disk SSD adalah produk sempurna untuk mencapai tujuan elektronik dan komputer Anda. Selesaikan pesanan Anda dengan produk hard disk SSD terkait lainnya dan nikmati hidup Anda tidak seperti sebelumnya. Beberapa produk Komponen k', 'Ssd', 10778215, 10, 'kingston-dc500m-3_84tb-hard-disk-ssd.jpg'),
(16, 'Sandisk SDSSDA-1T00-G27 1TB SSD Hard Drive', 'Di techinn, kami menunjukkan semua karakteristik Sandisk SDSSDA-1T00-G27 1TB SSD Hard Drive. Di toko elektronik dan komputer kami, Anda dapat menemukan Hard Disk SSD Sandisk SDSSDA-1T00-G27 1TB dengan berbagai ukuran. Pembayaran aman dan pengiriman terjam', 'Ssd', 977232, 9, 'sandisk-sdssda-1t00-g27-1tb-ssd-hard-drive.jpg'),
(17, 'Adata Sata 3 SU650 3D 240GB Hard Drive', 'Anda suka Harddisk Adata Sata 3 SU650 3D 240GB? Masuk ke bagian elektronik dan komputer kami dan temukan berbagai macam produk dan aksesori Komponen yang dapat membantu Anda mewujudkan aktivitas santai Anda. Kami memverifikasi bahwa produk elektronik dan ', 'Ssd', 252537, 7, 'adata-sata-3-su650-3d-240gb-hard-drive.jpg'),
(18, 'Kingston Fury Beast RGB 16GB 2x8GB DDR5 5600Mhz RAM Memory', 'Kingston FURY KF556C40BBAK2-16 is a kit of two 1G x 64-bit (8GB) DDR5-5600 CL40 SDRAM (Synchronous DRAM) 1Rx16, memory module, based on four 1G x 16-bit FBGA components per module. Each module kit supports Intel® Extreme Memory Profiles (Intel® XMP) 3.0. ', 'Ram', 2191464, 9, 'kingston-fury-beast-rgb-16gb-2x8gb-ddr5-5600mhz-ram-memory.jpg'),
(19, 'Kingston FURY Beast 32GB 2x16GB DDR4 3200Mhz RAM Memory', 'Apakah Anda tertarik dengan Memori RAM Kingston FURY Beast 32GB 2x16GB DDR4 3200Mhz? Jangan tunggu lagi, beli produk ini dengan harga terbaik dan selalu dengan keamanan yang kami tawarkan di techinn. Di sini Anda dapat menemukan semua informasi tentang Me', 'Ram', 1346006, 10, 'kingston-fury-beast-32gb-2x16gb-ddr4-3200mhz-ram-memory.jpg'),
(20, 'Corsair Vengance CMH64GX5M2B5600Z40K 64GB 2x32GB DDR5 5600Mhz Memory RAM', 'Di techinn kami berdedikasi untuk menciptakan produk elektronik dan komputer berkualitas tinggi yang akan membuat aktivitas Anda nyaman. Anda tertarik untuk membeli Corsair Vengance CMH64GX5M2B5600Z40K 64GB 2x32GB DDR5 5600Mhz Memory RAM? Anda beruntung, ', 'Ram', 3245690, 10, 'corsair-vengance-cmh64gx5m2b5600z40k-64gb-2x32gb-ddr5-5600mhz-memory-ram.jpg'),
(22, 'I5-4590, MAINBOARD H81, V-GEN 2X4GB DDR3, SSD 256GB, SIMBADDA SIM V-3150 380W, UNIARCH 20 INCH, RAPOO X120 KBMS', 'Intel Core i5-4590 3.3Ghz - Cache 6MB [Tray Tanpa Fan] Socket LGA 1150 - Haswell Refresh Series', 'PC Gaming', 4302000, 10, '20221022103400.jpg'),
(23, 'PROCESSOR INTEL i3-10105 [Box], MOBO H510, RAM 8GB, HDD 1TB SATA3, SIM V-3150 380W, ACER 19 INCH, RAPOO X120 KBMS', 'Intel Core i3-10105 3.7Ghz Up To 4.4Ghz - Cache 6MB [Box] Socket LGA 1200 - Comet Lake Refresh Series MSI H510M PRO-E (LGA1200, H510, DDR4, USB3.2, SATA3) Kingston Fury KF432C16BB/8 - Kingston Fury Beast DDR4 3200MHz (PC25600) 8GB (1x8GB) Toshiba 1TB SATA', 'PC Gaming', 5173000, 10, '20221022103322.jpg'),
(24, 'Razer BlackWidow V3 - YELLOW SWITCH - Mechanical Gaming Keyboard with Razer Chroma RGB', 'Mechanical Gaming Keyboard with Razer Chroma RGB', 'Produk Lainnya', 1499000, 10, 'razer.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `order_id` char(30) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL,
  `city` varchar(255) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `ekspedisi` varchar(100) NOT NULL,
  `tracking_id` varchar(30) NOT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `payment_limit` datetime DEFAULT NULL,
  `status` varchar(2) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`order_id`, `id_user`, `name`, `email`, `alamat`, `mobile_phone`, `city`, `kode_pos`, `payment_method`, `ekspedisi`, `tracking_id`, `transaction_time`, `payment_limit`, `status`, `gambar`) VALUES
('INV-14483672', '6', 'Rama', 'rama@gmail.com', 'jl cendana', '48378', 'Bekasi', '17131', 'Direct Bank Transfer', 'JNE', '32223314803', '2023-06-21 20:21:23', '2023-06-22 20:21:23', '0', NULL),
('INV-47585976', '6', 'Rama', 'rama@gmail.com', 'Jl Cendana Indah IV Blok NP no 5 Harapan Indah', '0895395850837', 'Bekasi', '17131', 'Direct Bank Transfer', 'JNE', '876542746714', '2023-06-16 09:58:09', '2023-06-17 09:58:09', '0', 'erd_baru_bgt.png'),
('INV-95891717', '6', 'Rama', 'rama@gmail.com', 'Jl Cendana Indah IV Blok NP No 5 Harapan Indah', '0895395850837', 'Bekasi', '17131', 'Direct Bank Transfer', 'JNE', '984638794169', '2023-06-16 10:12:01', '2023-06-17 10:12:01', '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama_user` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(255) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `level`, `avatar`) VALUES
(1, 'Owner RMZP', 'rmzparts@gmail.com', '202cb962ac59075b964b07152d234b70', '1', 'user.png'),
(2, 'hai', 'hai@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 'user.png'),
(3, 'ramadani', 'ramadani@gmail.com', '202cb962ac59075b964b07152d234b70', '2', 'user.png'),
(4, 'ma', 'ma@gmail.com', '33221bd7eb9e39ea6e61526555c6d6af', '2', 'user.png'),
(5, 'Rudi', 'rudi@gmail.com', 'd647b0b50779e3312944460ba65d23cf', '2', 'user.png'),
(6, 'Rama', 'rama@gmail.com', '33221bd7eb9e39ea6e61526555c6d6af', '2', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
