-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2021 pada 07.56
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbruko`
--
CREATE DATABASE IF NOT EXISTS `dbruko` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbruko`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('tyan', 'tyan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
  `kdruko` varchar(5) DEFAULT NULL,
  `kriteria` varchar(20) DEFAULT NULL,
  `nilai` decimal(10,2) DEFAULT NULL,
  `maks` decimal(10,2) DEFAULT NULL,
  `min` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`kdruko`, `kriteria`, `nilai`, `maks`, `min`) VALUES
('H1101', 'LUAS RUKO', '0.43', '0.43', '0.23'),
('H1101', 'HARGA', '0.08', '0.12', '0.08'),
('H1101', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1101', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1101', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1102', 'LUAS RUKO', '0.34', '0.43', '0.23'),
('H1102', 'HARGA', '0.10', '0.12', '0.08'),
('H1102', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1102', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1102', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1103', 'LUAS RUKO', '0.33', '0.43', '0.23'),
('H1103', 'HARGA', '0.10', '0.12', '0.08'),
('H1103', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1103', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1103', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1104', 'LUAS RUKO', '0.32', '0.43', '0.23'),
('H1104', 'HARGA', '0.10', '0.12', '0.08'),
('H1104', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1104', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1104', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1105', 'LUAS RUKO', '0.31', '0.43', '0.23'),
('H1105', 'HARGA', '0.10', '0.12', '0.08'),
('H1105', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1105', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1105', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1106', 'LUAS RUKO', '0.30', '0.43', '0.23'),
('H1106', 'HARGA', '0.10', '0.12', '0.08'),
('H1106', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1106', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1106', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1107', 'LUAS RUKO', '0.29', '0.43', '0.23'),
('H1107', 'HARGA', '0.11', '0.12', '0.08'),
('H1107', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1107', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1107', 'AKSES JALAN', '0.06', '0.06', '0.06'),
('H1108', 'LUAS RUKO', '0.23', '0.43', '0.23'),
('H1108', 'HARGA', '0.12', '0.12', '0.08'),
('H1108', 'STRATEGIS RUKO', '0.24', '0.24', '0.24'),
('H1108', 'FASILITAS', '0.15', '0.15', '0.15'),
('H1108', 'AKSES JALAN', '0.06', '0.06', '0.06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah_ruko`
--

CREATE TABLE IF NOT EXISTS `daerah_ruko` (
  `kddaerah` varchar(5) NOT NULL,
  `daerah_ruko` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kddaerah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daerah_ruko`
--

INSERT INTO `daerah_ruko` (`kddaerah`, `daerah_ruko`) VALUES
('RK01', 'Ruko kalibanteng kidul'),
('RK02', 'Ruko Ngaliyan'),
('RK03', 'Ruko Simongan'),
('RK04', 'Ruko Manyaran'),
('RK05', 'Ruko kalibanteng kulon'),
('RK06', 'Ruko Tawangsari'),
('RK07', 'Ruko Tawang Mas'),
('RK08', 'Ruko Gisikdrono'),
('RK09', 'Ruko Tambakharjo'),
('RK10', 'Ruko Tugu'),
('RK11', 'Ruko Cabean'),
('RK12', 'Ruko Bulu Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `keterangan`) VALUES
(1, 'Listrik 2200 watt,Air PDAM,Tempat Parkir,AC,Kamar Mandi 2,Kamar Tidur 2,Dapur'),
(2, 'Listrik 1300 watt,Air PDAM,Tempat Parkir,Kamar Mandi 2,Kamar Tidur 2,Dapur'),
(3, 'Listrik 2200 watt,Air Artetis,Tempat Parkir,Kamar Mandi 2,Kamar Tidur 2,Dapur'),
(4, 'Listrik 1300 watt,Air Artetis,Tempat Parkir,Kamar Mandi,Kamar Tidur,Dapur'),
(5, 'Listrik 2200 watt,Air PDAM,Tempat Parkir,Kamar Mandi,Dapur'),
(6, 'Listrik 1300 watt,Air Artetis,Tempat Parkir,Kamar Mandi,Dapur'),
(7, 'Listrik 2200 watt,Air PDAM,Tempat Parkir,Dapur'),
(8, 'Listrik 2200 watt,Air Artetis,Tempat Parkir,Dapur'),
(9, 'Listrik 1300 watt,Air PDAM,Tempat Parkir,Dapur'),
(10, 'Listrik 1300 watt,Air Artetis,Tempat Parkir,Dapur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `kdruko` varchar(5) NOT NULL,
  `vi` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`kdruko`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`kdruko`, `vi`) VALUES
('H1101', '0.83'),
('H1102', '0.55'),
('H1103', '0.50'),
('H1104', '0.45'),
('H1105', '0.40'),
('H1106', '0.36'),
('H1107', '0.32'),
('H1108', '0.17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruko`
--

CREATE TABLE IF NOT EXISTS `ruko` (
  `kdruko` varchar(5) NOT NULL,
  `kdtype` varchar(100) DEFAULT NULL,
  `kddaerah` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `harga` double(11,0) DEFAULT NULL,
  `luas_ruko` double(3,0) DEFAULT NULL,
  `strategis_ruko` int(11) DEFAULT NULL,
  `deskripsi` text,
  `akses_jalan` int(2) DEFAULT NULL,
  `fasilitas` int(2) DEFAULT NULL,
  `kontak` varchar(14) NOT NULL,
  `statusruko` varchar(30) NOT NULL,
  PRIMARY KEY (`kdruko`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruko`
--

INSERT INTO `ruko` (`kdruko`, `kdtype`, `kddaerah`, `tempat`, `harga`, `luas_ruko`, `strategis_ruko`, `deskripsi`, `akses_jalan`, `fasilitas`, `kontak`, `statusruko`) VALUES
('H1001', 'R02', 'RK02', 'Ruko Ngaliyan (jl.kalipancur)', 8750000000, 420, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,15 menit dekat pasar,dekat kawasan perumahan                 ', 10, 1, '082261137320', 'Jual'),
('H1002', 'R05', 'RK05', 'Ruko Kalibanteng kulon (jl.siliwangi)', 125000000, 140, 1, 'Berada  di jalan utama siliwangi,5 menit bandara ahmad yani,10 menit kawasan gatot subroto,10 menit Rumah sakit tugu,Dekat kawasan perumahan,2 menit rumah sakit columbia  ', 10, 2, '081931952941', 'Sewa'),
('H1003', 'R02', 'RK02', 'Ruko Ngaliyan (gatsu purwoyoso)', 3800000000, 106, 2, 'Berada di jalan utama,10 menit kawasan,10 menit Rumah sakit,10 menit Dekat kawasan perumahan,10 menit Dekat Sekolahan         ', 10, 3, '082261137320', 'Jual'),
('H1004', 'R02', 'RK02', 'Ruko Ngaliyan (gatot subroto purwoyoso plaza)', 75000000, 80, 2, 'Berada  di jalan utama,15 menit kawasan industri,15 menit Rumah sakit,Dekat kawasan perumahan,15 menit dekat pintu gerbang toll krapyak', 10, 3, '087871776696', 'Sewa'),
('H1005', 'R02', 'RK02', 'Ruko Ngaliyan (BSB CITY)', 111000000, 100, 2, 'Berada di jalan utama,20 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan', 10, 3, '081390000965', 'Sewa'),
('H1006', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*17', 97000000, 216, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '622486579697', 'Jual'),
('H1007', 'R09', 'RK09', 'Ruko Tambakharjo (north west)', 60000000, 67, 2, 'Berada di jalan utama,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan', 10, 6, '082261137320', 'Sewa'),
('H1008', 'R02', 'RK02', 'Ruko Ngaliyan (gatot subroto purwoyoso plaza)', 95000000, 106, 2, 'Berada  di jalan utama,15 menit kawasan,15 menit Rumah sakit,Dekat kawasan perumahan,15 menit dekat pintu masuk toll    ', 10, 3, '087871776696', 'Sewa'),
('H1009', 'R02', 'RK02', 'Ruko Ngaliyan (jl.prof hamka)', 85000000, 115, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,15 menit dekat kawasan,15 menit dekat pasar,15 menit dekat pintu masuk toll,dekat kawasan perumahan', 10, 4, '081325958383', 'Sewa'),
('H1010', 'R02', 'RK02', 'Ruko Ngaliyan (kawasan candi gatsu)', 100000000, 133, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,10 menit dekat kawasan,15 menit dekat pasar,dekat kawasan perumahan', 10, 5, '081931952941', 'Sewa'),
('H1011', 'R08', 'RK08', 'Ruko Gisikdrono (jl jenderal sudirman)', 90000000, 75, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,5 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '081573336501', 'Sewa'),
('H1012', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*', 105000000, 110, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,20 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '081573336501', 'Sewa'),
('H1013', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*2', 100000000, 160, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan                  ', 10, 6, '081573336501', 'Sewa'),
('H1014', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*3', 150000000, 240, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan                  ', 10, 6, '081573336501', 'Sewa'),
('H1015', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*4', 95000000, 216, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan                  ', 10, 6, '081573336501', 'Sewa'),
('H1016', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro WI)*5', 120000000, 155, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan                 ', 10, 6, '08112995988', 'Sewa'),
('H1017', 'R02', 'RK02', 'Ruko Ngaliyan (jl.candi panataran)', 850000000, 52, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,15 menit dekat kawasan,15 menit dekat pasar,dekat kawasan perumahan', 10, 6, '082136342229', 'Jual'),
('H1018', 'R08', 'RK08', 'Ruko Gisikdrono (pamularsih)', 100000000, 75, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan               ', 10, 6, '082486579697', 'Sewa'),
('H1019', 'R02', 'RK02', 'Ruko Ngaliyan (kawasan candi gatsu)', 75000000, 95, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,10 menit dekat kawasan,10 menit dekat pasar,dekat kawasan perumahan    ', 10, 6, '085870166651', 'Sewa'),
('H1020', 'R03', 'RK03', 'Ruko Simongan (simongan raya)', 75000000, 60, 2, 'Berada di jalan utama,10 menit kawasan,10 menit Rumah sakit,10 menit Dekat kawasan perumahan,10 menit Dekat Sekolahan', 10, 6, '081390000965', 'Sewa'),
('H1021', 'R03', 'RK03', 'Ruko Simongan (jl. simongan raya)*', 1200000000, 60, 2, 'Berada di jalan utama,10 menit kawasan,10 menit Rumah sakit,10 menit Dekat kawasan perumahan,10 menit Dekat Sekolahan   ', 10, 6, '081255099413', 'Jual'),
('H1022', 'R03', 'RK03', 'Ruko Simongan (jl. simongan raya)*2', 1800000000, 67, 2, 'Berada di jalan utama,10 menit kawasan,10 menit Rumah sakit,10 menit Dekat kawasan perumahan,10 menit Dekat Sekolahan', 10, 6, '08999988229', 'Jual'),
('H1023', 'R02', 'RK02', 'Ruko Ngaliyan (siliwangi purwoyoso)', 8750000000, 458, 2, 'Berada di jalan utama,10 menit kawasan,10 menit Rumah sakit,10 menit Dekat kawasan perumahan,10 menit Dekat Sekolahan  ', 10, 6, '087871776696', 'Jual'),
('H1024', 'R06', 'RK06', 'Ruko Tawangsari (arteri yos sudarso)', 80000000, 80, 1, 'Berada  di jalan utama,10 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan,2 menit rumah sakit columbia', 10, 6, '081573336501', 'Sewa'),
('H1025', 'R07', 'RK07', 'Ruko Tawang Mas (bizpark semarang indah)', 80000000, 80, 1, 'Berada  di jalan utama,10 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan    ', 10, 6, '081573336501', 'Sewa'),
('H1026', 'R06', 'RK06', 'Ruko Tawangsari (mutiara marina)', 60000000, 90, 1, 'Berada  di jalan utama,10 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan  ', 10, 6, '081573336501', 'Sewa'),
('H1027', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro Yl1120)*6', 140000000, 150, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '08122919158', 'Sewa'),
('H1028', 'R06', 'RK06', 'Ruko Tawang Mas (bizpark madukoro)', 90000000, 80, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '08983813785', 'Sewa'),
('H1029', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro raya)*7', 120000000, 115, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '085225955957', 'Sewa'),
('H1030', 'R06', 'RK06', 'Ruko Tawangsari (marina)', 80000000, 112, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '081805888257', 'Sewa'),
('H1031', 'R06', 'RK06', 'Ruko Tawangsari (anjasmoro raya)*8', 105000000, 165, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '08243521919', 'Sewa'),
('H1032', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*8', 105000000, 110, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '08243521919', 'Sewa'),
('H1033', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*9', 160000000, 180, 2, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '0817297171', 'Sewa'),
('H1034', 'R06', 'RK06', 'Ruko Tawangsari (madukoro)', 280000000, 160, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '082322191517', 'Sewa'),
('H1035', 'R01', 'RK01', 'Ruko Kalibanteng Kidul', 55000000, 80, 1, 'Berada  di jalan utama,10 menit bandara ahmad yani,15 menit kawasan gatot subroto,15 menit Rumah sakit tugu,Dekat kawasan perumahan', 10, 7, '081390000965', 'Sewa'),
('H1036', 'R02', 'RK02', 'Ruko Ngaliyan (jl.bringin raya)', 475000000, 50, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,15 menit dekat kawasan,15 menit dekat pasar,dekat kawasan perumahan   ', 10, 7, '082325969620', 'Jual'),
('H1037', 'R07', 'RK07', 'Ruko Tawang Mas (semarang indah)', 35000000, 40, 1, 'Berada  di jalan utama,10 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 9, '081390000965', 'Sewa'),
('H1038', 'R02', 'RK02', 'Ruko Ngaliyan (Jl.Prof.Dr.Hamka)', 23000000, 12, 2, 'Dekat jalan utama,5 menit dekat rumah sakit,20 menit dekat kawasan,10 menit dekat pasar,dekat kawasan perumahan    ', 5, 9, '087788280148', 'Sewa'),
('H1039', 'R02', 'RK02', 'Ruko Ngaliyan (graha bukit)', 650000000, 36, 3, 'Dekat jalan utama,15 menit dekat rumah sakit,20 menit dekat kawasan,15 menit dekat pasar,dekat kawasan perumahan', 10, 7, '081225062775', 'Jual'),
('H1040', 'R02', 'RK02', 'Ruko Ngaliyan (jl.bringin depan sma 8)', 495000000, 120, 3, 'Dekat jalan utama,15 menit dekat rumah sakit,20 menit dekat kawasan,15 menit dekat pasar,dekat kawasan perumahan', 5, 7, '085640733754', 'Jual'),
('H1041', 'R05', 'RK05', 'Ruko Kalibanteng Kulon * (jl.sri kuncoro)', 655000000, 37, 1, 'Berada  di jalan utama,10 menit bandara ahmad yani,15 menit kawasan gatot subroto,15 menit Rumah sakit tugu,Dekat kawasan perumahan', 10, 7, '082133469188', 'Jual'),
('H1042', 'R02', 'RK02', 'Ruko Ngaliyan (segi tiga mas)', 600000000, 32, 2, 'Dekat jalan utama,5 menit dekat rumah sakit,15 menit dekat kawasan,10 menit dekat pasar,dekat kawasan perumahan', 10, 7, '089505843431', 'Jual'),
('H1043', 'R03', 'RK03', 'Ruko Simongan (gajah mungkur)', 60000000, 63, 2, 'Berada di jalan utama,10 menit kawasan,10 menit Rumah sakit,10 menit Dekat kawasan perumahan,10 menit Dekat Sekolahan', 10, 7, '081229937733', 'Sewa'),
('H1044', 'R02', 'RK02', 'Ruko Ngaliyan (kalipancur)', 850000000, 59, 2, 'Berada  di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan   ', 10, 7, '085225676801', 'Jual'),
('H1045', 'R01', 'RK01', 'Ruko Kalibanteng Kidul (suratmo)', 55000000, 80, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 7, '08983813785', 'Sewa'),
('H1046', 'R07', 'RK07', 'Ruko Tawang Mas (semarang indah)*2', 42000000, 79, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 7, '08243521919', 'Sewa'),
('H1047', 'R05', 'RK05', 'Ruko Kalibanteng kulon (jl.siliwangi)*3', 120000000, 120, 2, 'Berada di jalan utama,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 7, '087700099168', 'Sewa'),
('H1048', 'R02', 'RK02', 'Ruko Ngaliyan (jl.wates)', 500000000, 75, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,20 menit dekat kawasan,20 menit dekat pasar,dekat kawasan perumahan  ', 10, 9, '081286056860', 'Jual'),
('H1049', 'R02', 'RK02', 'Ruko Ngaliyan (permata garden no 26)', 17000000, 75, 3, 'Dekat jalan utama,20 menit dekat rumah sakit,20 menit dekat kawasan,20 menit dekat pasar,dekat kawasan perumahan', 10, 8, '0895395100760', 'Sewa'),
('H1050', 'R05', 'RK05', 'Ruko Kalibanteng Kulon (jl.sri kuncoro)', 45000000, 90, 1, 'Berada  di jalan sri kuncoro,5 menit bandara ahmad yani,10 menit kawasan gatot subroto,10 menit Rumah sakit tugu,Dekat kawasan perumahan,2 menit rumah sakit columbia      ', 10, 9, '081573336501', 'Sewa'),
('H1051', 'R02', 'RK02', 'Ruko Ngaliyan (kawasan candi gatot subroto)', 65000000, 80, 2, 'Dekat jalan utama,15 menit dekat rumah sakit,10 menit dekat kawasan,15 menit dekat pasar,dekat kawasan perumahan', 10, 8, '085870166651', 'Sewa'),
('H1052', 'R04', 'RK04', 'Ruko Manyaran', 18500000, 21, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan             ', 10, 9, '085736387714', 'Sewa'),
('H1053', 'R04', 'RK04', 'Ruko Manyaran (jl.Dr Suratmo)', 2400000000, 103, 1, 'Berada di jalan utama,10 menit bandara ahmad yani,10 menit kawasan industri,20 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '081901809666', 'Jual'),
('H1054', 'R04', 'RK04', 'Ruko Manyaran (jl.abdurahman shaleh)', 90000000, 132, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '08562771745', 'Sewa'),
('H1055', 'R04', 'RK04', 'Ruko Manyaran (jl.abdurahman shaleh)*2', 70000000, 90, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '082242445928', 'Sewa'),
('H1056', 'R04', 'RK04', 'Ruko Manyaran (manyaran raya)', 1300000000, 125, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '082133469188', 'Jual'),
('H1057', 'R02', 'RK02', 'Ruko Ngaliyan (Ngaliyan square)', 200000000, 225, 2, 'Berada di jalan utama,10 menit kawasan industri,5 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '081325958383', 'Sewa'),
('H1058', 'R10', 'RK10', 'Ruko Tugu (mangkang)', 50000000, 300, 2, 'Berada di jalan utama,5 menit kawasan industri,5 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '0817290525', 'Sewa'),
('H1059', 'R05', 'RK05', 'Ruko Kalibanteng Kulon (siliwangi)*4', 60000000, 115, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 9, '081228740270', 'Sewa'),
('H1060', 'R08', 'RK08', 'Ruko Gisikdrono (sudirman)', 175000000, 100, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '08122919168', 'Sewa'),
('H1061', 'R03', 'RK03', 'Ruko Simongan (jl. simongan raya)*3', 80000000, 54, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 3, '081931944555', 'Sewa'),
('H1062', 'R08', 'RK08', 'Ruko Gisikdrono (pamularsih)*2', 200000000, 300, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '62243521919', 'Sewa'),
('H1063', 'R07', 'RK07', 'Ruko Tawang Mas (madukoro)*2', 945000000, 80, 2, 'Berada di jalan utama,20 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '0811270357', 'Jual'),
('H1064', 'R11', 'RK11', 'Ruko Cabean (Puspowarno)', 2500000000, 132, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 3, '085234618873', 'Jual'),
('H1065', 'R07', 'RK07', 'Ruko Tawang Mas (bizpark madukoro)*2', 105000000, 88, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '081901230456', 'Jual'),
('H1066', 'R02', 'RK02', 'Ruko Ngaliyan (gatot subroto xmsk156)', 2250000000, 106, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '082486579697', 'Jual'),
('H1067', 'R02', 'RK02', 'Ruko Ngaliyan (BSB CITY)*2', 1800000000, 120, 2, 'Berada di jalan utama,10 menit kawasan industri,15 menit Rumah sakit,Dekat kawasan perumahan      ', 10, 6, '087755519977', 'Jual'),
('H1068', 'R06', 'RK06', 'Ruko Tawang sari (puri anjasmoro)*10', 2500000000, 113, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '085900277757', 'Jual'),
('H1069', 'R08', 'RK08', 'Ruko Gisikdrono (ronggolawe)', 1750000000, 75, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '622486579697', 'Jual'),
('H1070', 'R02', 'RK02', 'Ruko Ngaliyan (Ngaliyan)', 1350000000, 52, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 6, '082138883385', 'Jual'),
('H1071', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)', 475000000, 35, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan            ', 10, 9, '081573336501', 'Jual'),
('H1072', 'R07', 'RK07', 'Ruko Tawang Mas (bizpark madukoro)*3', 3200000000, 88, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 3, '081573336501', 'Jual'),
('H1073', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)*2', 2000000000, 120, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan      ', 10, 4, '081573336501', 'Jual'),
('H1074', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)*3', 2000000000, 100, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 4, '081573336501', 'Jual'),
('H1075', 'R07', 'RK07', 'Ruko Tawang Mas (semarang indah)*2', 1350000000, 84, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 4, '081573336501', 'Jual'),
('H1076', 'R05', 'RK05', 'Ruko Kalibanteng Kulon (jl.sri kuncoro)*2', 1300000000, 84, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan      ', 10, 9, '081573336501', 'Jual'),
('H1077', 'R05', 'RK05', 'Ruko Kalibanteng Kulon (siliwangi)*2', 1750000000, 75, 2, 'Berada di jalan utama,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan      ', 10, 6, '081573336501', 'Jual'),
('H1078', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)*4', 500000000, 35, 2, 'Berada di jalan utama,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 8, '085225955957', 'Jual'),
('H1079', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)*5', 500000000, 35, 2, 'Berada di jalan utama,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan             ', 10, 8, '087700099158', 'Jual'),
('H1080', 'R05', 'RK05', 'Ruko Kalibanteng Kulon (siliwangi)*5', 3200000000, 115, 2, 'Berada di jalan utama,15 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 4, '622486579697', 'Jual'),
('H1081', 'R07', 'RK07', 'Ruko Tawang Mas (bizpark madukoro)*4', 9200000000, 80, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan       ', 10, 6, '08983813785', 'Jual'),
('H1082', 'R04', 'RK04', 'Ruko Manyaran (suropati)', 1500000000, 122, 2, 'Berada di jalan utama,12 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '081573336501', 'Jual'),
('H1083', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*11', 3500000000, 240, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n                        ', 10, 1, '622486579697', 'Jual'),
('H1084', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*12', 6200000000, 350, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n            ', 10, 1, '622486579697', 'Jual'),
('H1085', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)*6', 900000000, 80, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '622486579697', 'Jual'),
('H1086', 'R02', 'RK02', 'Ruko Ngaliyan (siliwangi)*2', 970000000, 85, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '62817290525', 'Jual'),
('H1087', 'R12', 'RK12', 'Ruko Bulu Selatan (suyudono)', 1750000000, 106, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '087745474159', 'Jual'),
('H1088', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*13', 3250000000, 99, 1, 'Berada di jalan utama,10 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan', 10, 4, '087898989696', 'Jual'),
('H1089', 'R07', 'RK07', 'Ruko Tawangsari (puri anjasmoro)*14', 6240000000, 475, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 6, '088215217777', 'Jual'),
('H1090', 'R07', 'RK07', 'Ruko Tawang Mas (semarang indah)*4', 1350000000, 84, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 4, '081573336501', 'Jual'),
('H1091', 'R06', 'RK06', 'Ruko Tawangsari (puri niaga)', 170000000, 155, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '622983435555', 'Jual'),
('H1092', 'R04', 'RK04', 'Ruko Manyaran (jl.Dr Suratmo)*2', 6000000000, 348, 1, 'Berada di jalan utama,10 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n      ', 10, 1, '0817455400', 'Jual'),
('H1093', 'R09', 'RK09', 'Ruko Tambakharjo (graha padma)*7', 2000000000, 120, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 6, '089673588288', 'Jual'),
('H1094', 'R06', 'RK06', 'Ruko Tawang Mas (puri anjasmoro)*15', 6200000000, 280, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 4, '089673588288', 'Jual'),
('H1095', 'R04', 'RK04', 'Ruko Manyaran (jl.abdurahman shaleh)*3', 2750000000, 98, 2, 'Berada di jalan utama,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan                               ', 10, 6, '0816663997', 'Jual'),
('H1096', 'R06', 'RK06', 'Ruko Tawangsari (arteri)*2', 2750000000, 130, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 4, '085100424279', 'Jual'),
('H1097', 'R06', 'RK06', 'Ruko Tawangsari (arteri)*3', 2100000000, 112, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 4, '085100424279', 'Jual'),
('H1098', 'R06', 'RK06', 'Ruko Tawangsari (arteri)*4', 3200000000, 180, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 4, '085100424279', 'Jual'),
('H1099', 'R06', 'RK06', 'Ruko Tawangsari (jl.amarta)', 1500000000, 109, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan ', 10, 8, '081931944555', 'Jual'),
('H1100', 'R06', 'RK06', 'Ruko Tawangsari (puri anjasmoro)*16', 320000000, 113, 1, 'Berada di jalan utama,5 menit bandara ahmad yani,10 menit kawasan industri,10 menit Rumah sakit,Dekat kawasan perumahan \r\n', 10, 8, '085900277757', 'Jual'),
('H1101', 'R11', 'RK11', 'green 1', 1729300000, 242, 2, '      fhdghfhfkufkyhf      ', 10, 6, '085900277757', 'Jual'),
('H1102', 'R11', 'RK11', 'green2', 1471200000, 191, 2, '      ggjjk.jk.jk.jk.j      ', 10, 6, '085900277757', 'Jual'),
('H1103', 'R11', 'RK11', 'green3', 1456000000, 188, 2, '      hj,k.jk.l.j,jhghg      ', 10, 6, '085900277757', 'Jual'),
('H1104', 'R11', 'RK11', 'green4', 1425700000, 182, 2, '      shfguky      ', 10, 6, '085900277757', 'Jual'),
('H1105', 'R11', 'RK11', 'green5', 1390200000, 175, 2, '      gjklkolkiou      ', 10, 6, '081573336501', 'Jual'),
('H1106', 'R11', 'RK11', 'green6', 1354800000, 168, 2, '      stghj      ', 10, 6, '081573336501', 'Jual'),
('H1107', 'R11', 'RK11', 'green7', 1319400000, 161, 2, '      ttyyiii      ', 10, 6, '085900277757', 'Jual'),
('H1108', 'R11', 'RK11', 'green8', 1172700000, 132, 2, '      tuyuuiiuoi      ', 10, 6, '085900277757', 'Jual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_ruko`
--

CREATE TABLE IF NOT EXISTS `wilayah_ruko` (
  `kdtype` varchar(3) NOT NULL,
  `wilayah_ruko` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kdtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah_ruko`
--

INSERT INTO `wilayah_ruko` (`kdtype`, `wilayah_ruko`) VALUES
('R01', 'Kalibanteng Kidul'),
('R02', 'Ngaliyan'),
('R03', 'Simongan'),
('R04', 'Manyaran'),
('R05', 'Kalibanteng Kulon'),
('R06', 'Tawangsari'),
('R07', 'Tawang Mas'),
('R08', 'Gisikdrono'),
('R09', 'Tambakharjo'),
('R10', 'Tugu'),
('R11', 'Cabean'),
('R12', 'Bulu Selatan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
