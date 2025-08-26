-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2025 at 06:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `image` varchar(30) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `telepon`, `image`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '081282441221', 'IMG_1755758977.jpeg'),
(2, 'Yudi Budiman', 'yudi01', '0c9091692802781f8758bcd54958a2e6', '081222233444665', 'default.png'),
(3, 'Siti Maspupah', 'ks01', '8980e8677d32490e44ec8412325a07a0', '0810010010', 'default.png'),
(4, 'Voshcaders', 'js01', 'f70aeed13d9e31e73dc8afeda6f0d82a', '08111114445566', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `cover` varchar(128) NOT NULL,
  `post` text NOT NULL,
  `tanggal_post` date NOT NULL,
  `jam_post` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `admin_id`, `judul`, `cover`, `post`, `tanggal_post`, `jam_post`) VALUES
(13, 4, 'Lokasi dan Rute Menuju Curug Cikondang', 'IMG_1756085486.jpg', '<p>Curug Cikondang terletak di Desa Wangunjaya, Kecamatan Campaka, Kabupaten Cianjur, Jawa Barat. Dari pusat kota Cianjur, jaraknya sekitar 37 kilometer dan bisa ditempuh dalam waktu sekitar 1,5 hingga 2 jam perjalanan.</p>\r\n\r\n<p>Untuk rutenya, kamu bisa lewat Jalan Raya Cianjur-Sukabumi. Setelah sampai di Kecamatan Campaka, ikuti petunjuk arah menuju Desa Wangunjaya. Meski jalannya sedikit berkelok dan menanjak, perjalanan kamu bakal terbayar dengan pemandangan indah sepanjang jalan.</p>\r\n\r\n<p>Tips Berkunjung ke Curug Cikondang</p>\r\n\r\n<ul>\r\n	<li><strong>Pakai Sepatu Yang Nyaman</strong>&nbsp;: Karena medan menuju curug cukup licin dan berbatu, pastikan kamu pakai sepatu yang nyaman dan anti selip.</li>\r\n	<li><strong>Bawa Bekal Secukupnya</strong>&nbsp;: Di sekitar curug belum banyak warung, jadi ada baiknya kamu bawa bekal sendiri. Jangan lupa bawa air minum biar nggak dehidrasi.</li>\r\n	<li><strong>Jaga Kebersihan</strong>&nbsp;: Selalu bawa pulang sampahmu sendiri ya. Mari kita sama-sama jaga keindahan Curug Cikondang.</li>\r\n	<li><strong>Perhatikan Waktu Kunjungan</strong>&nbsp;: Sebaiknya datang pagi atau siang hari biar bisa puas menikmati suasana curug. Hindari datang saat musim hujan karena jalurnya bisa jadi lebih licin.</li>\r\n</ul>\r\n\r\n<p>Curug Cikondang adalah destinasi wisata alam yang wajib kamu kunjungi kalau lagi main ke Cianjur. Dengan tiket masuk yang terjangkau dan pemandangan yang memanjakan mata, curug ini jadi tempat yang pas buat melepas penat dari rutinitas sehari-hari. Jadi, tunggu apa lagi? Yuk, rencanakan perjalanan seru ke Curug Cikondang sekarang juga!</p>\r\n', '2025-08-25', '08:31:27'),
(14, 4, 'Fasilitas di Curug Cikondang Cianjur', 'IMG_1756088103.jpg', '<p>Tak perlu khawatir saat berkunjung ke Curug Cikondang Cianjur karena tempat wisata ini memiliki fasilitas yang cukup memadai. Tersedia area parkir untuk motor dan mobil yang cukup luas.</p>\r\n\r\n<p>Ada juga toilet, musala, gazebo untuk tempat duduk dan bersantai, hingga warung yang menjual makanan tradisional, makanan ringan, hingga souvenir dan mainan.</p>\r\n', '2025-08-25', '09:15:03'),
(15, 4, 'Sejarah &amp; Asal-Usul Curug Cikondang', 'IMG_1756088539.jpg', '<p>Nama Curug Cikondang berasal dari dua kata dalam bahasa Sunda: &ldquo;ci&rdquo; yang berarti air, dan &ldquo;kondang&rdquo; yang merujuk pada jenis pohon loa yang dikenal secara ilmiah sebagai Ficus subracemosa Blume. Pohon kondang ini biasa tumbuh di hutan-hutan Asia Tenggara, memiliki tinggi hingga 40 meter dan diameter batang sekitar 1,75 meter. Meskipun secara linguistik &ldquo;kondang&rdquo; berarti terkenal, dalam konteks nama curug ini, makna tersebut justru menunjuk pada pohon khas yang ada di sekitarnya, bukan karena air terjunnya sudah dikenal luas sejak awal.</p>\r\n', '2025-08-25', '09:22:19'),
(16, 4, 'Daya Tarik &amp; Julukan &quot;Little Niagara&quot;', 'IMG_1756089246.jpg', '<p>Keindahan Curug Cikondang sangat memukau, dengan lebar aliran air sekitar 30 meter dan ketinggian mencapai 50 meter. Karena bentuknya yang melebar dan alirannya yang deras, curug ini sering dijuluki sebagai &quot;Little Niagara&quot; atau &quot;Niagara Mini&quot; dari Bumi Parahyangan. Fenomena visual dari air yang jatuh membentuk tirai lebar menambah pesona, terutama saat sinar matahari menerpa cipratan air, menciptakan nuansa magis dan instagramable</p>\r\n', '2025-08-25', '09:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Alam'),
(2, 'Supernatural');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `image` varchar(30) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `gender`, `email`, `password`, `status`, `telepon`, `alamat`, `image`) VALUES
(12, 'Dudun Surudun', 'Laki-Laki', 'dudun@gmail.com', '$2y$10$JHP.HryFKDSXfe47Whnuk.8HlYNZZRz1nlpUUsfrDne3SBeyf30DS', 'Karyawan', '0812312312300', 'Cianjur', 'default.png'),
(13, 'Azacky Habibilah Syahlan', 'Laki-Laki', 'azackyhabibilah90@gmail.com', '$2y$10$/plb48e1epQj9MEb7Uw34uemeF.aCxfBq2tRGvrxhS9H.5zDP26Yi', 'Pelajar', '087870735470', 'Kp.Sindang Kersa,Ds.Selagedang,Kec.CibeberKab.Cianjur', 'default.png'),
(14, 'Syifa Nurfadilah', 'Perempuan', 'sifaanurfadilah9@gmail.com', '$2y$10$fxLTp59mX2AvR0Hv/.q0neSjJ/qSb7COvXlKXXD4LFL/M5De73k4e', 'Pelajar', '085797172287', 'Kp tegallega rt04 rw02 desa cidadap kec campaka kab cianjur', 'default.png'),
(15, 'Dadan Suradan', 'Laki-Laki', 'dadan@gmail.com', '$2y$10$2RHkXggqWDmfMv/eCraUZOOEb7U9q9ByvH6ZVJxm1Cy1wj2bzgo9G', 'wiraswasta', '085212121212', 'campaka', 'default.png'),
(16, 'Irzi', 'Laki-Laki', 'irziazhar75@gmail.com', '$2y$10$WMXw9qx/Tb77P003JxkNZuxIoaQaNVzOTtiRFVEUGFmdU/K9kXHE.', 'Pelajar', '085774057963', 'Tangerang', 'default.png'),
(17, 'Mega', 'Perempuan', 'mega.ntara@yahoo.com', '$2y$10$izau5fIHmHMEO/lcIgq3fO.1WLjNzKHb9d9vgYffnYEM8zzPwymv2', 'Karyawan', '08176523289', 'Bogor', 'default.png'),
(18, 'Shhshs', 'Laki-Laki', 'ashilturquoise@awgarstone.com', '$2y$10$1MzayxtB1iazsUSOkpQHUeN5QGLM39ooZ0PZIpKonkwjE0ABUxIQG', 'asdasd', '09736674534', 'fgh', 'default.png'),
(19, 'herzumudri', 'Laki-Laki', 'herzumudri@gufum.com', '$2y$10$umHJ5kAsro8HkwjJBkDbqewuJePErdFYTWW1txax52iohMS5zZNmy', 'herzumudri', '08529637415', 'herzumudri', 'default.png'),
(20, 'ahmad dani', 'Laki-Laki', 'temonkumino@gmail.com', '$2y$10$zw6mwknioBx64um.GDGsa.nOHVNh.jYxsDopGko8ZgG8/kPrBpQwO', 'swasta', '085266312245', 'jl denai no 5', 'default.png'),
(21, 'gabrielle ann', 'Perempuan', 'gebyonicann@gmail.com', '$2y$10$rLwcECJBZ4mvxpfibIQSiuYdcIaXlyEJ0eiGlw1DIY/66N9gAz1kO', 'sei', '085754302981', 'jakarta utara, jakarta', 'default.png'),
(22, 'Muhammad Faisal', 'Laki-Laki', 'muhammadfaisal@gmail.com', '$2y$10$Ap1CDtOxNlzUMsOIFlCpd.pOTIfmS2ttRmdg/lmDxYaOylozpLv4C', 'Pelajar', '081231312', 'Warungbitung', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `qr_code` varchar(20) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lama` int(2) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_pembayaran` varchar(30) NOT NULL,
  `status_pembayaran` int(1) NOT NULL,
  `tgl_konfirmasi` varchar(30) DEFAULT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_member`, `qr_code`, `id_wisata`, `tanggal`, `lama`, `tgl_bayar`, `bukti_pembayaran`, `status_pembayaran`, `tgl_konfirmasi`, `jam`) VALUES
(52, 18, 'PM2407230001', 4, '2024-07-26', 4, '2024-07-23', 'IMG_23072024_1.jpg', 1, '1755756292', '10:02:34'),
(53, 22, 'PM2508210001', 3, '2025-08-23', 1, '2025-08-21', 'IMG_21082025_1.png', 1, '1755745452', '10:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `nama_lengkap` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_keluhan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `deskripsi` text NOT NULL,
  `star` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_keluhan`, `id_member`, `tanggal`, `id_wisata`, `is_active`, `deskripsi`, `star`) VALUES
(8, 12, '2023-02-01', 4, 1, 'Mantap memacu adrenalin', 5),
(10, 12, '2023-02-01', 3, 1, 'Keren sejuk', 5),
(13, 12, '2023-02-01', 18, 1, 'Pengalaman yang tidak akan terlupakan..keren', 5);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_wisata` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('Buka','Tutup') NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `link_map` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `kategori_id`, `nama`, `jenis_wisata`, `deskripsi`, `harga`, `status`, `jam_buka`, `jam_tutup`, `lokasi`, `link_map`, `gambar`, `created`) VALUES
(3, 2, 'Curug Cikondang', 'HTM', 'Wisata air terjun jadi salah satu primadona di Jawa Barat. Saking banyaknya jumlah air terjun di Bumi Parahyangan rasanya tidak cukup jika dihitung dengan jari jemari. Salah satu air terjun yang sangat mengagumkan berada di Kabupaten Cianjur. Destinasi wisata yang dimaksud adalah Curug Cikondang yang juga memiliki julukan sebagai Niagara Mini.', 5000, 'Buka', '08:00:00', '17:00:00', 'Desa Sukadana, Kecamatan Campaka, Kabupaten Cianjur, Jawa Barat.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.407483118245!2d107.34032831414143!3d-6.596172666313784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690889271b4141%3A0xd343046fe4b46bb6!2sSasak%20Panyawangan!5e0!3m2!1sen!2sid!4v1592325745708!5m2!1sen!2sid', 'IMG_1676085771.PNG', '2020-04-29 22:40:30'),
(4, 1, 'Canyoneering Curug Cikondang', 'HTM', 'Canyoneering, cara baru menikmati air terjun.\r\n\r\nMusim penghujan mungkin menjadi halangan bagi sebagian orang untuk beraktivitas, tapi itu tidak berlaku pada olahraga canyoneering.\r\n\r\nCanyoneering, adalah jenis olahraga alam yang belum begitu populer di Indonesia ini justru semarak dilakukan saat musim penghujan.\r\n\r\nSepintas, canyoneering mirip dengan panjat tebing, hanya saja dilakukan dibawah derasnya guyuran air terjun.\r\n\r\nMusim penghujan sengaja dipilih untuk memanjat, karena debit air terjun yang melimpah.\r\n\r\nTantangannya justru terletak pada hambatan derasnya air terjun.', 300000, '', '09:00:00', '17:00:00', 'Desa Sukadana, Kecamatan Campaka, Kabupaten Cianjur, Jawa Barat.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9298858116636!2d107.59605121414198!3d-6.655612566913697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6919134e097501%3A0xefdd99d91bdbf4bc!2sWana%20Wisata%20Cidomas!5e0!3m2!1sen!2sid!4v1592325977934!5m2!1sen!2sid', 'IMG_1676085932.PNG', '2020-04-29 22:41:05'),
(18, 0, 'Camping Area di Curug Cikondang', 'HTM', 'Camping juga menjadi aktivitas yang bisa anda lakukan saat berada di Curug Cikondang ini. Terdapat area camping yang sudah disediakan oleh pihak pengelola bagi wisatawan yang ingin berkemah disekitar curug.\r\n\r\nSebaiknya anda menyiapkan semua keperluan dan peralatan tenda yang lengkap agar menunjang kenyamanan bercamping. Nikmati sajian alam yang menawan selama anda berada disana. Namun pastikan kegiatan camping ini dilakukan saat musim kemarau yang cerah.', 15000, 'Buka', '08:30:00', '17:00:00', 'Curug Cikondang', 'https://goo.gl/maps/UE3Ck72PGzLT1JKe6', 'IMG_1676210706.jpg', '2023-02-12 14:05:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_ibfk_1` (`id_wisata`),
  ADD KEY `pemesanan_ibfk_2` (`id_member`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_kost` (`id_wisata`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
