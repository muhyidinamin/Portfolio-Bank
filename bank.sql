-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 08:13 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`No` int(11) NOT NULL,
  `Admin` varchar(10) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`No`, `Admin`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurs`
--

CREATE TABLE IF NOT EXISTS `tb_kurs` (
  `Kode` varchar(3) NOT NULL,
  `Mata_uang` varchar(20) NOT NULL,
  `Jual` float NOT NULL,
  `Beli` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kurs`
--

INSERT INTO `tb_kurs` (`Kode`, `Mata_uang`, `Jual`, `Beli`) VALUES
('AUD', 'Dollar Australia', 9910.14, 9830.14),
('CAD', 'Dollar canada', 9773.67, 9793.69),
('CHF', 'Swiss Franc', 13200.8, 13100.8),
('CNY', 'Yuan Cina', 1996.27, 1876.27),
('DKK', 'Danish Krone', 1969.99, 1889.99),
('EUR', 'Euro ', 14402.9, 14302.9),
('GBP', 'Great Britain Pound', 16001, 15901),
('HKD', 'Dollar Hongkong', 1692.88, 1662.88),
('JPY', 'Yen Jepang', 127.38, 123.98),
('NZD', 'New Zeland Dollar', 9246.28, 9166.28),
('SAR', 'Arab Saudi Real', 3509.93, 3429.93),
('SEK', 'Krona Swedia', 1515.07, 1435.07),
('SGD', 'Dollar Singapura', 9429.96, 9409.96),
('USD', 'Dollar Amerika', 13027, 13007);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nasabah`
--

CREATE TABLE IF NOT EXISTS `tb_nasabah` (
  `Ktp` varchar(16) NOT NULL,
  `Nama_depan` varchar(20) NOT NULL,
  `Nama_belakang` varchar(20) NOT NULL,
  `Alamat` varchar(70) NOT NULL,
  `No_telp` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nasabah`
--

INSERT INTO `tb_nasabah` (`Ktp`, `Nama_depan`, `Nama_belakang`, `Alamat`, `No_telp`) VALUES
('3309032409949001', 'Muhamad Muhyidin', 'Amin', 'Cabean Kunti, Cepogo, Boyolali', '083865614484'),
('033007766554433', 'Agus', 'Wibawa', 'Gunung Kidul, Yogyakarta', '081457890123'),
('033776564765757', 'Yudi', 'Raharjo', 'Semarang', '087654325789'),
('33090413070211', 'Muhamad Rosyid', 'Ridla', 'Cabean Kunti, Cepogo, Boyolali', '085456902890'),
('9245', 'Heny', 'Has', 'Djogjakarta', '098765'),
('123444450001', 'Lusiana', 'Citra Dewi', 'Kp.kedunggede', '085693996903'),
('144455578950002', 'Citra ', 'Dewi', 'Bekasi', '089525391176'),
('3309032409949', 'Muhamad Rosyid', 'Ridla', 'Cabean Kunti, Cepogo, Boyolali', '081238790078'),
('80808080', 'Muhamad Rosyid', 'Ridla', 'Cepogo', '087256986451'),
('12345678', 'Muhyi', 'Amin', 'Cepogo', '083865614484'),
('90909090', 'Muh', 'yi', 'Cpg', '086432678123'),
('808080', 'Lusi', 'Ana', 'Bekasi', '089765234908'),
('7070', 'Muhyidin', 'Amin', 'Cepogo', '083865614484');

-- --------------------------------------------------------

--
-- Table structure for table `tb_promo`
--

CREATE TABLE IF NOT EXISTS `tb_promo` (
`Id` int(11) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_promo`
--

INSERT INTO `tb_promo` (`Id`, `Judul`, `Gambar`, `Deskripsi`) VALUES
(1, 'A&W Restaurant', 'AW.jpg', 'Diskon 30% untuk 3 (tiga) jenis Burger Favorit (Chicken Sandwich, MozzaTM atau Fish Sandwich)\r\n\r\nBerlaku Hingga\r\n\r\n14-01-2017\r\nDiskon 30% untuk 3 (tiga) jenis Burger Favorit (Chicken Sandwich, MozzaTM atau Fish Sandwich)\r\n\r\nSyarat & Ketentuan:\r\n\r\n    Diskon 30% untuk 3 (tiga) jenis Burger Favorit (Chicken Sandwich, MozzaTM atau Fish Sandwich)\r\n    Tidak berlaku untuk outlet di bandara/airport\r\n    Tidak dapat digabungkan dengan program promosi lain\r\n    Berlaku di seluruh outlet Jakarta\r\n    Berlaku untuk Kartu Kredit CentralBank\r\n\r\n\r\nLokasi:\r\nSeluruh Outlet A&W Restaurant Area Karawang'),
(2, 'CentralBank Garuda Indonesia', 'GI.jpg', ' Diskon hingga 25%\r\n    Berlaku untuk penerbangan domestik & internasional\r\n\r\nBerlaku Hingga\r\n\r\n15-12-2016\r\nDiskon hingga 25%\r\nSyarat & Ketentuan:\r\n\r\n    Periode pembelian & penerbangan: hingga 15 Desember 2016\r\n    Booking code: CentralBank14\r\n    Diskon 25% untuk Business Class\r\n    Diskon hingga 10% untuk Economy Class\r\n    Berlaku untuk penerbangan domestik & internasional\r\n    Pembelian tiket dapat dilakukan di seluruh kantor & tempat penjualan tiket Garuda Indonesia atau www.garuda-indonesia.com\r\n\r\n\r\nLokasi:\r\nTel: 0804 1 807 807 atau (021) 2351 9999\r\nWeb: www.garuda-indonesia.com\r\n'),
(3, 'STARBUCK COFFEE', 'star.jpg', 'Free Upsize & Free 1 tall Beverages\r\n    Berlaku untuk semua jenis Kartu Kredit CentralBank\r\n\r\nBerlaku Hingga\r\n\r\n30-06-2017\r\n\r\nFree Upsize\r\nSyarat & ketentuan:\r\n\r\n    Berlaku untuk seluruh jenis minuman di Starbucks Coffee\r\n    Tidak dapat digabung dengan promo lain\r\n    Berlaku untuk seluruh jenis Kartu Kredit CentralBank\r\n\r\n \r\n\r\nStarbucks Payday Promo\r\nFree 1 tall Beverages\r\nSyarat & ketentuan:\r\n\r\n    Beli dan top up Starbucks Card min. Rp 200.000,-\r\n    Top up/ Reload Starbucks Card min. Rp 200.000,-\r\n    Berlaku setiap tanggal 25 - akhir bulan\r\n    Berlaku setiap bulan\r\n    Berlaku untuk seluruh jenis Kartu Kredit CentralBank');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE IF NOT EXISTS `tb_rekening` (
`No_rek` int(10) NOT NULL,
  `Ktp` varchar(16) NOT NULL,
  `Pin` varchar(6) NOT NULL,
  `Saldo` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1220940024 ;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`No_rek`, `Ktp`, `Pin`, `Saldo`) VALUES
(1220940000, '3309032409949001', '123456', 2899000),
(1220940002, '033007766554433', '297225', 1026000),
(1220940003, '033776564765757', '875392', 460000),
(1220940018, '33090413070211', '846670', 900000),
(1220940017, '9245', '654483', 20000000),
(1220940007, '123444450001', '591079', 1000000000),
(1220940008, '144455578950002', '585270', 5000000),
(1220940016, '3309032409949', '584320', 9800000),
(1220940019, '80808080', '330085', 881000),
(1220940020, '12345678', '417508', 800000),
(1220940021, '90909090', '293253', 900000),
(1220940022, '808080', '776804', 100000),
(1220940023, '7070', '814785', 446000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
`No` int(11) NOT NULL,
  `No_rek` varchar(10) NOT NULL,
  `Tgl` datetime NOT NULL,
  `Transaksi` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Nilai` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`No`, `No_rek`, `Tgl`, `Transaksi`, `Status`, `Nilai`) VALUES
(56, '1220940023', '2002-12-16 07:54:19', 'Isi Pulsa', 'OUT', 25000),
(57, '1220940023', '2016-12-02 07:12:46', 'Isi Pulsa', 'OUT', 25000),
(55, '1220940003', '2002-12-16 07:08:00', 'Transfer', 'IN', 90000),
(54, '1220940023', '2016-12-02 07:08:00', 'Transfer', 'OUT', 90000),
(53, '1220940000', '2002-12-16 06:39:37', 'Transfer', 'IN', 9000),
(52, '1220940023', '2016-12-02 06:39:36', 'Transfer', 'OUT', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_userbanking`
--

CREATE TABLE IF NOT EXISTS `tb_userbanking` (
  `Username` varchar(16) NOT NULL,
  `No_rek` varchar(10) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userbanking`
--

INSERT INTO `tb_userbanking` (`Username`, `No_rek`, `Password`) VALUES
('amin', '1220940023', '123'),
('rosyid1', '1220940018', 'rosyid'),
('muhyidin', '1220940000', 'muhyidin'),
('rosyid', '1220940018', 'rosyid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_kurs`
--
ALTER TABLE `tb_kurs`
 ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
 ADD PRIMARY KEY (`Ktp`);

--
-- Indexes for table `tb_promo`
--
ALTER TABLE `tb_promo`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
 ADD PRIMARY KEY (`No_rek`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_userbanking`
--
ALTER TABLE `tb_userbanking`
 ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_promo`
--
ALTER TABLE `tb_promo`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
MODIFY `No_rek` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1220940024;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
