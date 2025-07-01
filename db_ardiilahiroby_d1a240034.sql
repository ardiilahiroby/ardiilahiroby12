-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2025 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ardiilahiroby_d1a240034`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(1, 'Halo! Nama saya Ardi Ilahi Roby, saya lahir pada 12 Maret 2004 dan berasal dari sebuah desa kecil yang tenang dan sederhana. Meskipun berasal dari lingkungan yang jauh dari hiruk-pikuk kota, saya memiliki cita-cita besar menjadi seorang Ahli Cyber Security.\r\n\r\nSaya percaya bahwa latar belakang bukanlah penghalang untuk meraih impian, selama kita memiliki tekad, semangat belajar, dan kemauan untuk terus berkembang. Di tengah pesatnya perkembangan dunia digital, kebutuhan akan keamanan informasi semakin penting. Karena itu, saya ingin menjadi bagian dari garda terdepan yang menjaga sistem dan data dari ancaman siber.\r\n\r\nSaat ini, saya sedang menempuh pendidikan di Fakultas Ilmu Komputer, Universitas Subang, dan secara aktif memperdalam pengetahuan di bidang jaringan komputer, sistem keamanan informasi, serta teknik ethical hacking.\r\n\r\nBagi saya, menjadi ahli Cyber Security bukan hanya soal keahlian teknis, tetapi juga tentang tanggung jawab moral dalam menjaga privasi dan integritas data. Saya yakin, dengan kerja keras, ketekunan, dan semangat pantang menyerah, tidak ada yang mustahil untuk diraih — termasuk impian saya untuk menjadi seorang Cyber Security Expert profesional yang bermanfaat bagi banyak orang.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(1, 'Pentingnya Menjaga Privasi di Era Digital', 'Di era serba digital ini, hampir seluruh aktivitas kita terekam secara online—mulai dari transaksi, komunikasi, hingga kebiasaan browsing. Sayangnya, banyak dari kita yang masih mengabaikan pentingnya menjaga privasi.\r\nMenggunakan password yang kuat, menghindari membagikan data pribadi di media sosial, dan selalu waspada terhadap phising adalah langkah awal yang penting. Dunia digital tak hanya memberi kemudahan, tapi juga membawa risiko. Maka, menjaga privasi adalah bentuk perlindungan diri di masa kini.'),
(2, 'Hidup Sederhana, Bukan Berarti Tidak Bisa Sukses', 'Banyak orang berpikir bahwa kesuksesan hanya milik mereka yang lahir dari keluarga kaya atau tinggal di kota besar. Padahal, sejarah membuktikan, banyak tokoh hebat justru berasal dari latar belakang sederhana.\r\nHidup sederhana justru mengajarkan kita untuk tangguh, berhemat, dan menghargai proses. Tidak penting dari mana kita berasal, yang terpenting adalah ke mana kita melangkah dan seberapa keras kita berusaha untuk sampai ke sana.'),
(3, 'Mengapa Mahasiswa Harus Belajar Soft Skill Sejak Dini', 'Di dunia kerja, IPK tinggi memang penting, tapi bukan satu-satunya penentu kesuksesan. Soft skill seperti komunikasi, kerja sama tim, kepemimpinan, dan kemampuan berpikir kritis sangat dibutuhkan.\r\nBelajar soft skill tidak hanya dari buku, tapi bisa diasah lewat organisasi kampus, kegiatan sosial, atau kerja part-time. Semakin cepat kita melatih diri, semakin siap kita menghadapi dunia nyata setelah lulus.\r\n\r\n'),
(4, 'Mengenal Dunia Cyber Security dan Masa Depannya', 'Cyber Security atau keamanan siber adalah bidang yang kini semakin dibutuhkan. Dengan meningkatnya serangan digital, perusahaan dan instansi berlomba-lomba mencari ahli keamanan untuk melindungi data mereka.\r\nProfesi ini bukan hanya menjanjikan secara finansial, tapi juga memiliki peran besar dalam menjaga keamanan informasi. Dunia Cyber Security membutuhkan orang-orang yang cerdas, teliti, dan punya semangat untuk terus belajar karena ancaman terus berkembang.'),
(5, 'Jangan Takut Gagal, Karena Gagal Itu Proses Belajar', 'Setiap orang pasti pernah gagal. Tapi, orang sukses bukan mereka yang tidak pernah gagal—melainkan mereka yang tidak pernah menyerah.\r\nGagal adalah guru terbaik. Dari kegagalan, kita belajar untuk memperbaiki diri, menilai kelemahan, dan mencari strategi baru. Yang penting adalah terus bergerak, belajar dari pengalaman, dan percaya bahwa setiap kegagalan membawa kita selangkah lebih dekat ke keberhasilan.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_kirim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `nama`, `email`, `pesan`, `tanggal_kirim`) VALUES
(1, 'Ardi Ilahi Roby', 'ardiilahiroby12@gmail.com', 'Mantap', '2025-07-01 12:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(1, 'Personal 1', 'WhatsApp Image 2025-06-12 at 23.32.59_8a6e9ddd.jpg'),
(2, 'Vibes Sayang Heulang', 'WhatsApp Image 2025-06-12 at 23.32.59_38f339a4.jpg'),
(3, 'Personal 2', 'WhatsApp Image 2025-06-12 at 23.33.00_1b6ad84e.jpg'),
(4, 'Personal 3', 'WhatsApp Image 2025-06-25 at 23.00.32_df2a32b8.jpg'),
(5, 'Personal 4', 'WhatsApp Image 2025-06-25 at 23.03.45_f2192d8d.jpg'),
(6, 'Sunset Vibes', 'WhatsApp Image 2025-06-29 at 22.00.36_263d1f5b.jpg'),
(7, 'Personal 5', 'WhatsApp Image 2025-06-29 at 21.59.50_eb16edf7.jpg'),
(8, 'Personal 6', 'Ardi.jpg'),
(9, 'My Family', 'WhatsApp Image 2025-06-29 at 21.59.50_74d145f0.jpg'),
(10, 'Praktikum Pendidikan Jasmani', 'Praktikum Pendidikan Jasmani.jpg'),
(11, 'Sobat Cyber Academy 1', 'Certificate-of-Completion-Introduction-to-Information-Security.jpg'),
(12, 'Sobat Cyber Academy 2', 'Certificate-of-Completion-Classical-Cryptography-for-Beginner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('', ''),
('ARDI ILAHI ROBY', 'D1A240034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
