-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 07:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tr_sofeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Nim` varchar(10) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Nama`, `Nim`, `Password`) VALUES
(1, 'Resaa', '672017265', 'resa');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Id_Event` varchar(64) NOT NULL,
  `Nama_Event` varchar(100) NOT NULL,
  `Tgl_Publikasi` varchar(30) DEFAULT NULL,
  `Tgl_Pembaharuan` varchar(30) DEFAULT NULL,
  `Tgl_Mulai` varchar(20) DEFAULT NULL,
  `Tgl_Berakhir` varchar(20) DEFAULT NULL,
  `Detail_Event` text NOT NULL,
  `Kapasitas` int(11) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `Gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Id_Event`, `Nama_Event`, `Tgl_Publikasi`, `Tgl_Pembaharuan`, `Tgl_Mulai`, `Tgl_Berakhir`, `Detail_Event`, `Kapasitas`, `Harga`, `Status`, `Gambar`) VALUES
('5dde098e7c2bc', 'Diskom Vision', '2019-11-27 12:28:46', '2019-11-27 12:35:02', '2018-12-07', '2018-12-08', '<div>    Pameran karya mahasiswa DKV FTI UKSW, kegiatan ini untuk memperingati dies natalis fti. <br></div>', 0, 0, 0, '5dde098e7c2bc.jpg'),
('5dde0cccc2cff', 'Mega Party 2017', '2019-11-27 12:42:36', NULL, '2017-04-01', '2017-04-01', '<p>Dimeriahkan oleh :</p><p>- Penampilan Angkatan</p><p>- KBM Seni</p><p>- Orches Harmony</p><p>Dress Code : Casual</p>', 0, 0, 0, '5dde0cccc2cff.jpg'),
('5dde0d6b41500', 'Open Recruitment', '2019-11-27 12:45:15', NULL, '2019-10-26', '2019-10-27', '<p>Open recruitment kegiatan kampus.</p>', 0, 0, 0, '5dde0d6b41500.jpg'),
('5dde0e1a76a67', 'JOBFAIR UKSW 39', '2019-11-27 12:48:10', NULL, '2019-06-21', '2019-06-22', '<p>Kegitan yang di buat oleh uksw untuk mempertemukan antara pencari kerja dan pekerja , dimana kegiatan ini diikuti lebih dari 40 perusahaan.</p>', 0, 0, 0, '5dde0e1a76a67.jpg'),
('5dde0fe77eb5b', 'S.W.L', '2019-11-27 12:55:51', '2019-11-27 12:57:45', '2019-11-28', '2019-11-29', '<div style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Haiii paraaa Mahasiswa/i UKSW yang kece, </div><div style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">bagi kalian yang masih jadi Mahasiswa KuPu KuPu (Kuliah Pulang) Yukk Ikutan di kepanitiaan SatyaWacanaLoCaSh 2020 yang merupakan kegiatan pengabdian Masyarakat dalam bentuk pengajaran dan pemeriksaan kesehatan sebagai wujud Pelayanan kita bagi sesama.. </div><div style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Jangan lupa daftarkan dirimu di Stand pendaftran dan kumpulkan Persyaratannya.<br>Kami Tunggu Yaa, mari Melayani dan berdampak bagi sesama</div>', 0, 0, 1, '5dde0fe77eb5b.jpg'),
('5dde117934398', 'Seminar Cryptography', '2019-11-27 13:02:33', NULL, '2019-12-06', '2019-12-06', '<p><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Hai guys! Ngodein ada tekniknya juga loh, gimana caranya kode kita sampai ke orang yang kita tuju dengan pesan yang tepat. Pengen tau caranya?</span><img goomoji=\"1f644\" data-goomoji=\"1f644\" alt=\"????\" src=\"https://mail.google.com/mail/e/1f644\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">??????</span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Yuk datang di&nbsp;&nbsp;&nbsp;catat tanggal dan jamnya ya yaitu tanggal&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">6 Desember pukul 13.00 - 16.00 di Auditorium</b><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">&nbsp;</span><img goomoji=\"1f600\" data-goomoji=\"1f600\" alt=\"????\" src=\"https://mail.google.com/mail/e/1f600\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">??????</span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Tunggu apalagi? Yukk buruan daftar!! Catat tanggal&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">pendaftaran</b><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">nya guys!</span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><img goomoji=\"1f3e0\" data-goomoji=\"1f3e0\" alt=\"????\" src=\"https://mail.google.com/mail/e/1f3e0\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Tempat :&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Open Space lt.2 FTI UKSW</b><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><img goomoji=\"1f4c5\" data-goomoji=\"1f4c5\" alt=\"????\" src=\"https://mail.google.com/mail/e/1f4c5\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Tanggal :&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">27 November - 4 Desember 2019<br></b><img goomoji=\"23f0\" data-goomoji=\"23f0\" alt=\"?\" src=\"https://mail.google.com/mail/e/23f0\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Jam :&nbsp;</span><b style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">10.00 - 15.00 WIB</b><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">??????</span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Seminar ini tidak dipungut biaya apapun!!</span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Justru kalian akan mendapat Sertifikat dan Ilmu Keamanan Data guys!&nbsp;</span><img goomoji=\"1f609\" data-goomoji=\"1f609\" alt=\"????\" src=\"https://mail.google.com/mail/e/1f609\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"></span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">??????</span><br style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Kami tunggu di Open Space yaa untuk pendaftarannya!!&nbsp;</span><u style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><i>GRATISS</i></u><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">&nbsp;lho, yakin nggak mau daftar?&nbsp;</span><img goomoji=\"1f60c\" data-goomoji=\"1f60c\" alt=\"????\" src=\"https://mail.google.com/mail/e/1f60c\" data-image-whitelisted=\"\" class=\"CToWUd\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; margin: 0px 0.2ex; max-height: 24px;\"><br clear=\"all\" style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"></p><div style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\"><br></div><div style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;\">Terimakasih, selamat beraktivitas!</div>', 200, 0, 1, '5dde117934398.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Id_Event` varchar(64) NOT NULL,
  `Nim` varchar(10) NOT NULL,
  `Tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Id_Event`, `Nim`, `Tanggal`) VALUES
('5dcd13747e072', '672017001', '2019-11-25 17:16:10'),
('5dcd13747e072', '672017265', '2019-11-25 15:59:42'),
('5dcd5a18e583d', '672017265', '2019-11-17 20:52:06'),
('5dce2d7a1220e', '672017265', '2019-11-18 10:21:33'),
('5dceabfd59f24', '672017265', '2019-11-17 21:28:20'),
('5dcec7e4de849', '672017265', '2019-11-17 21:42:48'),
('5dd21233af8b4', '672017211', '2019-11-18 10:39:30'),
('5ddbbca64f331', '672017265', '2019-11-26 10:53:19'),
('5dde117934398', '672017265', '2019-11-27 13:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Nim` varchar(9) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Fakultas` varchar(20) NOT NULL,
  `Progdi` varchar(20) NOT NULL,
  `No_Hp` varchar(13) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Nim`, `Nama`, `Fakultas`, `Progdi`, `No_Hp`, `Password`) VALUES
('672017001', 'Dwi Kurniawan', 'FTEK', 'Sistem Komputer', '0824232323', 'dwi'),
('672017066', 'Rayson Tan', 'FTI', 'TI', '0483434934', 'sui'),
('672017265', 'Resa Renaldy', 'FTI', 'Teknik Informatika', '085394202728', 'resa12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nim` (`Nim`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id_Event`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Id_Event`,`Nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
