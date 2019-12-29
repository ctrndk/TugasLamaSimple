-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 12:50 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_caramudah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
`id_guest` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id_guest`, `tanggal`, `nama`, `email`, `pesan`) VALUES
(1, '2017-06-02', 'Yoga', 'yogathok@gmail.com', 'Wah memang semakin mudah ya min, coba saja saya tahu website ini dari dulu. sangat membantu'),
(2, '2017-06-03', 'Ramadhani', 'mrx@gmail.com', 'Terima kasih Cara Mudah Dev atas jasa pembuatan websitenya. saya sangat puas, aman, fleksibel dan kekinian deh'),
(3, '2017-06-03', 'Teguh Sulaiman', 'teguh.android@gmail.com', 'saya sangat setuju dengan program CMD Dev mengenai review apapun itu, tetapi terkadang kami bingung anu tersebut untuk dikelola dengan baik, untuk itu saran dari saya menganjurkan agar mengeluarkan program bimbingan pelatihan dan seminar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(2) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` int(2) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `nim`, `kelas`, `foto`) VALUES
(1, 'Catra Andika Ramadhani', 'CatraXP', 'ctrndk@gmail.com', '0792ab3528b28a53f9aeeefb0ebd020f', 2015150071, 2, 'ctrndk.jpg'),
(2, 'Fuad Ahmad Endaryanto', 'FuadAhmad', 'fuadahmad343@gmail.com', '763e52f1845084d4b06c1611f39fde96', 2015150056, 2, 'fu.jpg'),
(3, 'Muhammad Job Jaelani', 'JobJ', 'jobjaelani@gmail.com', '27a06a9e3d5e7f67eb604a39536208c9', 2015150078, 2, 'job.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
 ADD PRIMARY KEY (`id_guest`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
MODIFY `id_guest` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
