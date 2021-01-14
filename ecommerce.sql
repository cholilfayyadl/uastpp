-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 04:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id_user` int(255) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sandi` varchar(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id_user`, `nama_depan`, `nama_belakang`, `no_hp`, `email`, `sandi`, `gambar`) VALUES
(19, 'wahyu Muhammad', 'Fadly', '089621930015', 'admin@gmail.com', 'admin', '20190630141929_gambar_produk_19.jpg'),
(20, '', '', '', '', '', ''),
(21, 'wahyu', 'fadly', '089621930016', 'admin1@gmail.com', 'admin', ''),
(22, 'Arsi Imam', 'Baihaqi', '123', 'admin2@gmail.com', 'admin2', '20190630141612_gambar_produk_22.jpg'),
(23, 'wahyu', 'fadly', '990', 'admin3@gmail.com', 'admin3', ''),
(25, 'wa', 'wa', '1122', 'wahyumuhammadfadly@gmail.com', 'admin', ''),
(26, 'wahyu', 'fadly', '100', 'awd@gmail.com', 'awd', ''),
(27, 'wahyu', 'fadly', '089621930017', 'wahyu.fadly@students.amikom.ac', 'admin', ''),
(28, 'wahyu', 'fadly', '089621932215', 'wahyu.fadly@students.amikom.ac.id', 'admin', ''),
(29, 'thata', 'audia berko', '08123812749', 'thata@gmail.com', 'thata', '20190630143125_gambar_produk_29.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(255) NOT NULL,
  `id_user_artikel` int(255) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `deskripsi_artikel` varchar(5000) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `moderator_artikel` varchar(255) NOT NULL,
  `kategori_artikel` varchar(255) NOT NULL,
  `batas_artikel` varchar(255) NOT NULL,
  `nasional_artikel` char(1) DEFAULT NULL,
  `internasional_artikel` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_user_artikel`, `judul_artikel`, `deskripsi_artikel`, `gambar`, `moderator_artikel`, `kategori_artikel`, `batas_artikel`, `nasional_artikel`, `internasional_artikel`) VALUES
(19, 19, 'Mobile Legend Antar Kampus Baru', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627065540_gambar_produk_19.jpg', 'm1', 'Game Shoot', '2019-09-01', '0', '0'),
(22, 19, 'Seminar Pubg Lokal Mobile', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627083322_gambar_produk_22.jpg', 'm1', 'Game Shoot', '2019-09-10', '0', '1'),
(23, 19, 'Seminar Akademik Enterpreneur 2019', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627071820_gambar_produk_23.jpg', 'm2', 'Game Shoot', '2019-12-11', '1', '0'),
(24, 19, 'Semnas Amikom', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627081513_gambar_produk_24.jpg', 'm1', 'Game Shoot', '2019-10-01', '1', '0'),
(25, 19, 'Event Mobile Legend Se DIY', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627083537_gambar_produk_25.jpg', 'm1', 'Game Shoot', '2019-10-18', '1', '0'),
(26, 19, 'Point Blank Antar Kelurahan', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627083716_gambar_produk_26.jpg', 'm1', 'Game Shoot', '2019-08-28', '0', '1'),
(27, 19, 'Bertamasya dan mengenal binatang', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627095301_gambar_produk_27.jpg', 'm2', 'Workshop', '2019-10-10', '1', '1'),
(28, 19, 'Di cari Event Teamwork Building', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627095714_gambar_produk_28.jpg', 'm2', 'Seminar', '2019-08-31', '1', '1'),
(29, 19, 'Online Tournament PUBG PC', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627114135_gambar_produk_29.jpg', 'm2', 'Game Shoot', '2019-10-11', '1', '1'),
(30, 19, 'Pemberian Beasiswa Amerika', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627122837_gambar_produk_30.jpg', 'm2', 'Seminar', '2019-08-31', '0', '1'),
(31, 19, 'Pendanaan Start Up Online', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627122906_gambar_produk_31.jpg', 'm2', 'Seminar', '2019-09-20', '0', '1'),
(32, 19, 'Pembuatan Acara Meeting Online', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627123039_gambar_produk_32.jpg', 'm1', 'Seminar', '2019-09-12', '1', '0'),
(33, 19, 'Seminar Kartun Animasi TV', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627123147_gambar_produk_33.png', 'm1', 'Seminar', '2019-09-06', '1', '0'),
(34, 19, 'Workshop Enterpreneur DAY', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627123442_gambar_produk_34.jpg', 'm1', 'Workshop', '2019-08-18', '1', '0'),
(35, 19, 'Fun Day Old Generation Public Speaking', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627123641_gambar_produk_35.jpg', 'm2', 'Game Shoot', '2019-10-05', '1', '1'),
(36, 19, 'Young Day Meet in Public', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627123941_gambar_produk_36.jpg', 'm1', 'Game Shoot', '2019-08-28', '0', '0'),
(37, 19, '100 Kopi Gratis Malioboro City', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627124057_gambar_produk_37.jpg', 'm2', 'Game Fun', '2019-10-10', '1', '1'),
(38, 19, 'Liburan Bersama Satwa Liar', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627124143_gambar_produk_38.jpg', 'm1', 'Game Fun', '2019-09-14', '1', '1'),
(39, 28, 'Pertandingan Badminton Amikom', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\n                                    Bentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br><br>\r\n                                    <b>EVENT ORGANIZER DALAM DUNIA USAHA</b><br>\r\n\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\n\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190627171530_gambar_produk_39.jpg', 'm1', 'olahraga', '2019-09-08', '1', '1'),
(40, 19, 'Seminar Workshop SEO', 'Dalam pengertian sederhana yang di sebut sebagai Event Organizer adalah pengelola suatu kegiatan (Pengorganisir Acara). Setiap kegiatan yang di selenggarakan bertujuan untuk memperoleh keuntungan di kedua belah pihak, baik penyelenggara maupun yang hadir pada saat kegiatan berlangsung. Keuntungan ini tidak harus bersifat material namun juga bisa bersifat non material.<br>\r\nBentuk sebuah Event Organizer sendiri sebenarnya telah di kenal di berbagai organisasi kemasyarakatan, lingkungan pekerjaan, maupun dalam lingkungan pendidikan (in-house production). Diantaranya; kepanitian peringatan HUT RI di lingkungan tempat tinggal kita, kepanitian Out Bond di lingkungan kerja, kepanitian ulang tahun sekolah yang di selenggarakan oleh OSIS, dan lain sebagainya.<br>\r\n<br>\r\n<h3>EVENT ORGANIZER DALAM DUNIA USAHA</h3>\r\nPerkembangan dunia usaha di Indonesia, dewasa ini telah memperlihatkan ke arah yang menggembirakan. Terbukti dengan semakin menjamurnya berbagai bentuk badan usaha yang bergerak dalam bidang barang maupun jasa, baik itu skala kecil maupun besar. Salah satunya adalah Event Organizer.<br>\r\nDalam pengertian ini yang di maksudkan dengan Event Organizer lebih mengarah pada profesi, yaitu suatu lembaga baik formal maupun non formal, yang di percaya untuk melakukan kegiatan. Misal; peluncuran suatu produk baru, pesta, seminar, pagelaran musik, dan lain sebagainya, di sesuaikan dengan permintaan pengguna jasa atau inisiatif Event Organizer sendiri.', '20190630075432_gambar_produk_40.jpg', 'm2', 'Game Fun', '2019-09-21', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(255) NOT NULL,
  `id_user_kategori` int(255) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `id_user_kategori`, `nama_kategori`) VALUES
(4, 19, 'Game Fun'),
(5, 19, 'Seminar'),
(11, 22, 'Seminar Lokal'),
(12, 22, 'Game'),
(14, 19, 'Workshop'),
(15, 28, 'olahraga'),
(20, 19, 'Sport Game');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id_testimonial` int(255) NOT NULL,
  `id_user_testimonial` int(255) NOT NULL,
  `isi_testimonial` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id_testimonial`, `id_user_testimonial`, `isi_testimonial`) VALUES
(5, 19, 'Secara umum, Esponsor sudah baik dan pelaporan cukup jelas. Senang bisa membantu teman-teman yang membutuhkan lewat Esponsor.'),
(6, 29, 'Layanan nya sangat memuaskan, design website yang responsive dan apik bikin tambah semangat hehehe'),
(7, 22, 'Sudah banyak sekali membantu proses kegiatan saya, acara kegiatan saya semakin menjadi karena banyak mengenal relasi dari website ini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id_testimonial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
