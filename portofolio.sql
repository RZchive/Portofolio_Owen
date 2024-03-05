-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 07:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `ID` int(11) NOT NULL,
  `Keahlian` text NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`ID`, `Keahlian`, `Deskripsi`) VALUES
(2, 'Anak Magang BSN (Badan Standarisasi Nasional)', '<p>Bekerja sebagai seorang anak magang di BSN Mempelajari tentang hosting CI3,Bootstrap,DLL.</p>\r\n\r\n<p>Bekerja selama 6 Bulan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kepala`
--

CREATE TABLE `kepala` (
  `ID` int(11) NOT NULL,
  `Gambar` text NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kepala`
--

INSERT INTO `kepala` (`ID`, `Gambar`, `Deskripsi`) VALUES
(4, 'WhatsApp_Image_2023-06-19_at_13_37_46.jpeg', '<p>Halo! Saya Adalah</p>\r\n\r\n<p><strong>Owen Braintly Taniel</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `No_Telp` varchar(30) NOT NULL,
  `IG` text NOT NULL,
  `YT` text NOT NULL,
  `Twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`ID`, `Email`, `No_Telp`, `IG`, `YT`, `Twitter`) VALUES
(6, 'braintyowen@gmail.com', '082385302150', 'https://instagram.com/aap.5a?igshid=Y2IzZGU1MTFhOQ==', 'https://youtube.com/@secondfeast5653', 'https://twitter.com/OBraintly?t=MUIKyf7kvyKexyW84WeaDA&s=08');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` int(11) NOT NULL,
  `Gambar` text NOT NULL,
  `Nama_Project` text NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `Gambar`, `Nama_Project`, `Link`) VALUES
(2, 'Project1.PNG', 'website sekolah', 'https://rpllabschool.my.id/\r\n'),
(3, 'Project_2.PNG', 'Website rental', 'https://owenrental.rpllabschool.my.id/'),
(4, 'project3.PNG', 'Backend Website Jurnal', 'https://projectowen.rpllabschool.my.id/jurnal/'),
(5, 'project4.PNG', 'Website Ajax+bootstrap', 'https://projectowen.rpllabschool.my.id/Table/'),
(6, 'Gallery.PNG', 'Gallery Java', 'http://ukk28.rpl.smklbfu.sch.id/');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `ID` int(11) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`ID`, `Deskripsi`) VALUES
(0, '<p>Nama Saya Adalah Owen Braintly Taniel. Saya biasanya di panggil owen oleh teman-teman saya&nbsp; Murid di SMK Labor Pekanbaru Dari Tahun&nbsp; 2021. Saya suka bermain game dan mengcoding. saya juga pernah Magang di BSN. Saya Bisa Meggunakan CI3,Bootstrap,PHP,HTML,Dll.&nbsp;</p>\r\n\r\n<p>Saya Merupakan anak tertua dari dua bersaudara, Saya tinggal dengan ibu saya dan adik saya. saya biasanya menghabiskan waktu saya bermain game dang mencoba coba code.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Role_ID` int(6) NOT NULL,
  `Email` text NOT NULL,
  `Nama` text NOT NULL,
  `Password` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Role_ID`, `Email`, `Nama`, `Password`, `Image`) VALUES
(1, 1, 'Admin@gmail.com', 'Admin', '$2y$10$WBT1JnVhI.hXybZxh8m.MOSbx0ouwegzCfmOJVJKf1Op.vSNu2QY6', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kepala`
--
ALTER TABLE `kepala`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kepala`
--
ALTER TABLE `kepala`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
