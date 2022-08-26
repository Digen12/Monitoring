-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 15.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mb`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `bobot2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `bobot2` (
`kategori` varchar(25)
,`b` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `gap`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `gap` (
`id_survei` varchar(25)
,`kategori` varchar(20)
,`mhs` bigint(21)
,`bobot1` decimal(65,0)
,`rata1` decimal(65,4)
,`bobot2` decimal(65,0)
,`rata2` decimal(65,4)
,`hasil` decimal(65,4)
,`nid` varchar(25)
,`nim` varchar(25)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_bimbingan`
--

CREATE TABLE `t_bimbingan` (
  `id_bimbingan` varchar(25) NOT NULL,
  `nim` varchar(18) DEFAULT NULL,
  `nid` varchar(18) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `periode` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_bimbingan`
--

INSERT INTO `t_bimbingan` (`id_bimbingan`, `nim`, `nid`, `kategori`, `status`, `keterangan`, `periode`) VALUES
('B0620001', '3411161048', '412190585', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001'),
('B0620005', '3411161046', '412166863', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0620006', '3411161077', '412166863', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0720001', '3411161048', '412176273', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0720002', '3411161058', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720003', '3411151048', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720004', '3411151048', '412157175', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720005', '3411151177', '412157175', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720006', '3411151177', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720007', '3411161146', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720008', '3411161146', '412100992', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001'),
('B0720009', '3411161043', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720010', '3411161043', '412196490', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720011', '3411151073', '412166863', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720012', '3411151073', '412180078', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720013', '3411161019', '412176273', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0720014', '3411161019', '412190585', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001'),
('B0720015', '3411161076', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720016', '3411161076', '412100992', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001'),
('B0720017', '3411161120', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720018', '3411161120', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720019', '3411161007', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720020', '3411161007', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720021', '3411161001', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720022', '3411161001', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720023', '3411161053', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720024', '3411161053', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720025', '3411161073', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720026', '3411161073', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720027', '3411161003', '412180078', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720028', '3411161003', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720029', '3411151127', '412180078', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720030', '3411151127', '412198688', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720031', '3411161156', '412182990', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720032', '3411161156', '412100992', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001'),
('B0720033', '3411161118', '412175878', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720034', '3411161118', '412174182', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720035', '3411161052', '412175878', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720036', '3411161052', '412174182', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720037', '3411151148', '412174182', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720038', '3411151148', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720039', '3411151147', '412174182', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720040', '3411151147', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720041', '3411161098', '412110561', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720042', '3411161098', '412166969', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720043', '3411161012', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720044', '3411161012', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720045', '3411161040', '412176273', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0720046', '3411161040', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720047', '3411151131', '412190585', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720048', '3411151131', '412198688', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720049', '3411161014', '412182990', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720050', '3411161014', '412100992', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001'),
('B0720051', '3411161087', '412182990', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720052', '3411161087', '412100992', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720053', '3411161047', '412100992', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720054', '3411161047', '412182990', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720055', '3411161028', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720056', '3411161028', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720057', '3411151171', '412190585', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720058', '3411151171', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720059', '3411161077', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720060', '3411161125', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720061', '3411161125', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720062', '3411161138', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720063', '3411161138', '412196490', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720064', '3411161153', '412182990', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720065', '3411161153', '412174182', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720066', '3411141146', '412182990', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720067', '3411141146', '412174182', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720068', '3411141105', '412127670', 'TA2', 'disetujui', 'pembimbing1', 'PE0720002'),
('B0720069', '3411141105', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720070', '3411141123', '412127670', 'TA2', 'disetujui', 'pembimbing1', 'PE0720002'),
('B0720071', '3411141123', '412174182', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720072', '3411141027', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720073', '3411141027', '412198688', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720074', '3411141004', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720075', '3411141004', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720076', '3411141045', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720077', '3411141045', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720078', '3411131101', '412166863', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720079', '3411131101', '412180078', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720080', '3411141036', '412127670', 'TA2', 'disetujui', 'pembimbing1', 'PE0720002'),
('B0720081', '3411141036', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720082', '3411141037', '412127670', 'TA2', 'disetujui', 'pembimbing1', 'PE0720002'),
('B0720083', '3411141037', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720084', '3411141012', '412127670', 'TA2', 'disetujui', 'pembimbing1', 'PE0720002'),
('B0720085', '3411141012', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720086', '3411141076', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720087', '3411141076', '412182990', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720088', '3411161058', '412100992', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720089', '3411161046', '412116459', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720090', '3411131029', '412176273', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0720091', '3411131029', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720092', '3411161139', '412175878', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720093', '3411161139', '412174182', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720094', '3411161045', '412176273', 'TA1', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720095', '3411161045', '412196490', 'TA1', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720096', '3411161044', '412176273', 'TA1', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720097', '3411161044', '412190585', 'TA1', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720098', '3411161066', '412176273', 'TA1', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720099', '3411161066', '412190585', 'TA1', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720100', '3411161036', '412176273', 'TA1', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720101', '3411161036', '412190585', 'TA1', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720102', '3411161011', '412180078', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720103', '3411161011', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720104', '3411161070', '412176273', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720105', '3411161070', '412180078', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720106', '3411161064', '412176273', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720107', '3411161064', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720108', '3411161150', '412176273', 'TA1', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720109', '3411161150', '412190585', 'TA1', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720110', '3411161034', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720111', '3411161034', '412196490', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720112', '3411161002', '412167079', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720113', '3411161002', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720114', '3411141011', '412176273', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720115', '3411141011', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720116', '3411161049', '412176273', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720117', '3411161049', '412167079', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720118', '3411161084', '412176273', 'TA1', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720119', '3411161084', '412190585', 'TA1', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720120', '3411161109', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001'),
('B0720121', '3411161109', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001'),
('B0720122', '3411141097', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720123', '3411141097', '412180078', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720124', '3411141047', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720125', '3411141047', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720126', '3411141080', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720127', '3411141080', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720128', '3411141095', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720129', '3411141095', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720130', '3411141031', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720131', '3411141031', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720132', '3411141063', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720133', '3411141063', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720134', '3411141132', '412127670', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720135', '3411141132', '412175878', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720136', '3411141158', '412167079', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720002'),
('B0720137', '3411141158', '412185888', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720002'),
('B0720138', '3411161201', '412116459', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001'),
('B0720139', '3411161201', '412190585', 'TA2', 'belum disetujui', 'pembimbing2', 'PE0720001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dosen`
--

CREATE TABLE `t_dosen` (
  `nid` varchar(20) NOT NULL,
  `nama_depan` varchar(25) DEFAULT NULL,
  `nama_belakang` varchar(25) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `level` varchar(25) DEFAULT NULL,
  `struktur` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_dosen`
--

INSERT INTO `t_dosen` (`nid`, `nama_depan`, `nama_belakang`, `hp`, `alamat`, `jenis_kelamin`, `keterangan`, `level`, `struktur`) VALUES
('412100992', 'FKI', 'Fatan Kasyidi', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing2', 'pembimbing'),
('412110561', 'EKP', 'Eddie Krishna Putra', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing1', 'pembimbing'),
('412116459', 'ADK', 'Ade Kanianingsih', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'pembimbing'),
('412127670', 'ECD', 'Esmeralda C. Djamal', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'pembimbing1', 'pembimbing'),
('412157175', 'GNA', 'Gunawan Abdillah', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412166863', 'YHC', 'Yulison Herry Chrisnanto', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412166969', 'THP', 'Tacbir', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412167079', 'FZR', 'Faiza Renaldi', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412174182', 'RZK', 'Rezki Yuniarti', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'pembimbing'),
('412175878', 'AGK', 'Agus Komarudin', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412176273', 'WNI', 'Wina Witanti', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'kajur'),
('412180078', 'AIH', 'Asep Id Hadiana', '081220942222', 'Cihanjuang', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412182990', 'RDI', 'Ridwan Ilyas', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing'),
('412185888', 'FRU', 'Fajri Rakhmat Umbara', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing2', 'pembimbing'),
('412190585', 'PNS', 'Puspita N Sabrina', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'pembimbing'),
('412196490', 'ISR', 'Irma Santikarama', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'pembimbing2', 'pembimbing'),
('412198688', 'HAY', 'Herdi Ashaury', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing2', 'koordinator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_isi_survei`
--

CREATE TABLE `t_isi_survei` (
  `id_survei` varchar(25) DEFAULT NULL,
  `nim` varchar(25) DEFAULT NULL,
  `nid` varchar(25) DEFAULT NULL,
  `jawaban` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `periode` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_isi_survei`
--

INSERT INTO `t_isi_survei` (`id_survei`, `nim`, `nid`, `jawaban`, `id`, `periode`) VALUES
('P0620001', '3411141123', '412127670', '4', 268, 'PE0720002'),
('P0620002', '3411141123', '412127670', '4', 269, 'PE0720002'),
('P0620003', '3411141123', '412127670', '4', 270, 'PE0720002'),
('P0620004', '3411141123', '412127670', '4', 271, 'PE0720002'),
('P0620005', '3411141123', '412127670', '4', 272, 'PE0720002'),
('P0620006', '3411141123', '412127670', '4', 273, 'PE0720002'),
('P0620007', '3411141123', '412127670', '4', 274, 'PE0720002'),
('P0620008', '3411141123', '412127670', '4', 275, 'PE0720002'),
('P0620009', '3411141123', '412127670', '4', 276, 'PE0720002'),
('P0620010', '3411141123', '412127670', '4', 277, 'PE0720002'),
('P0620011', '3411141123', '412127670', '4', 278, 'PE0720002'),
('P0620012', '3411141123', '412127670', '4', 279, 'PE0720002'),
('P0620013', '3411141123', '412127670', '4', 280, 'PE0720002'),
('P0620014', '3411141123', '412127670', '4', 281, 'PE0720002'),
('P0620015', '3411141123', '412127670', '4', 282, 'PE0720002'),
('P0620016', '3411141123', '412127670', '4', 283, 'PE0720002'),
('P0620017', '3411141123', '412127670', '4', 284, 'PE0720002'),
('P0620018', '3411141123', '412127670', '4', 285, 'PE0720002'),
('P0620019', '3411141123', '412127670', '4', 286, 'PE0720002'),
('P0620020', '3411141123', '412127670', '4', 287, 'PE0720002'),
('P0620021', '3411141123', '412127670', '4', 288, 'PE0720002'),
('P0620022', '3411141123', '412127670', '4', 289, 'PE0720002'),
('P0620001', '3411161048', '412176273', '1', 290, 'PE0720001'),
('P0620002', '3411161048', '412176273', '1', 291, 'PE0720001'),
('P0620003', '3411161048', '412176273', '1', 292, 'PE0720001'),
('P0620004', '3411161048', '412176273', '1', 293, 'PE0720001'),
('P0620005', '3411161048', '412176273', '1', 294, 'PE0720001'),
('P0620006', '3411161048', '412176273', '1', 295, 'PE0720001'),
('P0620007', '3411161048', '412176273', '1', 296, 'PE0720001'),
('P0620008', '3411161048', '412176273', '1', 297, 'PE0720001'),
('P0620009', '3411161048', '412176273', '1', 298, 'PE0720001'),
('P0620010', '3411161048', '412176273', '1', 299, 'PE0720001'),
('P0620011', '3411161048', '412176273', '1', 300, 'PE0720001'),
('P0620012', '3411161048', '412176273', '1', 301, 'PE0720001'),
('P0620013', '3411161048', '412176273', '1', 302, 'PE0720001'),
('P0620014', '3411161048', '412176273', '1', 303, 'PE0720001'),
('P0620015', '3411161048', '412176273', '1', 304, 'PE0720001'),
('P0620016', '3411161048', '412176273', '1', 305, 'PE0720001'),
('P0620017', '3411161048', '412176273', '1', 306, 'PE0720001'),
('P0620018', '3411161048', '412176273', '1', 307, 'PE0720001'),
('P0620019', '3411161048', '412176273', '1', 308, 'PE0720001'),
('P0620020', '3411161048', '412176273', '1', 309, 'PE0720001'),
('P0620021', '3411161048', '412176273', '1', 310, 'PE0720001'),
('P0620022', '3411161048', '412176273', '1', 311, 'PE0720001'),
('P0620001', '3411161077', '412166863', '1', 334, 'PE0720001'),
('P0620002', '3411161077', '412166863', '1', 335, 'PE0720001'),
('P0620003', '3411161077', '412166863', '1', 336, 'PE0720001'),
('P0620004', '3411161077', '412166863', '1', 337, 'PE0720001'),
('P0620005', '3411161077', '412166863', '1', 338, 'PE0720001'),
('P0620006', '3411161077', '412166863', '1', 339, 'PE0720001'),
('P0620007', '3411161077', '412166863', '1', 340, 'PE0720001'),
('P0620008', '3411161077', '412166863', '1', 341, 'PE0720001'),
('P0620009', '3411161077', '412166863', '1', 342, 'PE0720001'),
('P0620010', '3411161077', '412166863', '1', 343, 'PE0720001'),
('P0620011', '3411161077', '412166863', '1', 344, 'PE0720001'),
('P0620012', '3411161077', '412166863', '1', 345, 'PE0720001'),
('P0620013', '3411161077', '412166863', '1', 346, 'PE0720001'),
('P0620014', '3411161077', '412166863', '1', 347, 'PE0720001'),
('P0620015', '3411161077', '412166863', '5', 348, 'PE0720001'),
('P0620016', '3411161077', '412166863', '3', 349, 'PE0720001'),
('P0620017', '3411161077', '412166863', '3', 350, 'PE0720001'),
('P0620018', '3411161077', '412166863', '4', 351, 'PE0720001'),
('P0620019', '3411161077', '412166863', '3', 352, 'PE0720001'),
('P0620020', '3411161077', '412166863', '3', 353, 'PE0720001'),
('P0620021', '3411161077', '412166863', '4', 354, 'PE0720001'),
('P0620022', '3411161077', '412166863', '4', 355, 'PE0720001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_materi`
--

CREATE TABLE `t_materi` (
  `id_bimbingan` varchar(15) DEFAULT NULL,
  `nid` varchar(18) DEFAULT NULL,
  `nim` varchar(18) DEFAULT NULL,
  `pertemuan` varchar(20) DEFAULT NULL,
  `tgl_pertemuan` date DEFAULT NULL,
  `materi_pertemuan` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ket_pertemuan` varchar(50) DEFAULT NULL,
  `linenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_materi`
--

INSERT INTO `t_materi` (`id_bimbingan`, `nid`, `nim`, `pertemuan`, `tgl_pertemuan`, `materi_pertemuan`, `status`, `ket_pertemuan`, `linenumber`) VALUES
('B0720090', '412176273', '3411131029', '1', '2020-06-25', 'Latar belakang, rumusan masalah, tujuan penelitian, keluaran dan manfaat penelitian', 'disetujui', 'BAB I', 45),
('B0720090', '412176273', '3411131029', '2', '2020-06-25', 'Metode penelitian', 'disetujui', 'BAB I', 46),
('B0720090', '412176273', '3411131029', '3', '2020-06-26', 'Tinjauan Pustaka', 'disetujui', 'BAB 2', 47),
('B0720090', '412176273', '3411131029', '4', '2020-06-26', 'Analisis sistem berjalan', 'belum disetujui', 'BAB 3', 48),
('B0720090', '412176273', '3411131029', '5', '2020-07-15', 'Analisis sistem baru', 'belum disetujui', 'BAB 3', 49),
('B0720013', '412176273', '3411161019', '1', '2020-06-15', 'Latar belakang sampai dengan tujuan penelitian', 'disetujui', 'BAB I', 50),
('B0720013', '412176273', '3411161019', '2', '2020-06-17', 'Metode Penelitian', 'disetujui', 'BAB I', 51),
('B0720013', '412176273', '3411161019', '3', '2020-06-18', 'Tinjauan pustaka', 'belum disetujui', 'BAB 2', 52),
('B0720045', '412176273', '3411161040', '1', '2020-06-26', 'Latar belakang, Tujuan penelitian', 'disetujui', 'BAB I', 53),
('B0720045', '412176273', '3411161040', '2', '2020-06-26', 'Tinjauan Pustaka', 'disetujui', 'BAB 2', 54),
('B0720045', '412176273', '3411161040', '3', '2020-06-27', 'analisis sistem', 'disetujui', 'BAB 3', 55),
('B0720045', '412176273', '3411161040', '4', '2020-06-27', 'Analisis sistem baru', 'disetujui', 'BAB 3', 56),
('B0720045', '412176273', '3411161040', '5', '2020-06-28', 'UML', 'disetujui', 'BAB 3', 57),
('B0720045', '412176273', '3411161040', '6', '2020-06-29', 'Mockup', 'belum disetujui', 'BAB 3', 58),
('B0720045', '412176273', '3411161040', '7', '2020-06-30', 'Implementasi', 'belum disetujui', 'BAB 4', 59),
('B0720001', '412176273', '3411161048', '1', '2020-07-01', 'Latar belakang', 'disetujui', 'BAB I', 60),
('B0720001', '412176273', '3411161048', '2', '2020-07-01', 'Metode penelitian', 'disetujui', 'BAB I', 61),
('B0720001', '412176273', '3411161048', '3', '2020-07-01', 'Tinjauan Pustaka', 'disetujui', 'BAB 2', 62),
('B0720001', '412176273', '3411161048', '4', '2020-07-01', 'Analisis sistem', 'disetujui', 'BAB 3', 63),
('B0720001', '412176273', '3411161048', '5', '2020-07-01', 'Analisis sistem baru', 'disetujui', 'BAB 3', 64),
('B0720001', '412176273', '3411161048', '6', '2020-07-02', 'UML', 'disetujui', 'BAB 3', 65),
('B0720001', '412176273', '3411161048', '7', '2020-07-03', 'Implementasi', 'disetujui', 'BAB 4', 66),
('B0720001', '412176273', '3411161048', '8', '2020-07-03', 'Kesimpulan', 'disetujui', 'BAB 5', 67),
('B0720068', '412127670', '3411141105', '1', '2020-07-15', 'Latar belakang', 'disetujui', 'BAB I', 68),
('B0720068', '412127670', '3411141105', '2', '2020-07-15', 'Tinjauan Pustaka', 'disetujui', 'BAB 2', 69),
('B0720068', '412127670', '3411141105', '3', '2020-07-15', 'Analisis Sistem', 'belum disetujui', 'BAB 3', 70),
('B0720070', '412127670', '3411141123', '1', '2020-07-15', 'Latar belakang', 'disetujui', 'BAB I', 71),
('B0720070', '412127670', '3411141123', '2', '2020-07-15', 'Tinjauan Pustaka', 'disetujui', 'BAB 2', 72),
('B0720070', '412127670', '3411141123', '3', '2020-07-15', 'UML', 'belum disetujui', 'BAB 3', 73),
('B0620001', '412190585', '3411161048', '1', '2020-07-15', 'Latar belakang', 'disetujui', 'BAB I', 74),
('B0620001', '412190585', '3411161048', '2', '2020-07-15', 'Tinjauan Pustaka', 'disetujui', 'BAB 2', 75),
('B0620001', '412190585', '3411161048', '3', '2020-07-15', 'UML', 'disetujui', 'BAB 3', 76),
('B0620001', '412190585', '3411161048', '4', '2020-07-15', 'UML', 'belum disetujui', 'BAB 3', 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mhsw`
--

CREATE TABLE `t_mhsw` (
  `nim` varchar(20) NOT NULL,
  `nama_depan` varchar(25) DEFAULT NULL,
  `nama_belakang` varchar(25) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `angkatan` int(5) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_mhsw`
--

INSERT INTO `t_mhsw` (`nim`, `nama_depan`, `nama_belakang`, `hp`, `alamat`, `jenis_kelamin`, `angkatan`, `keterangan`) VALUES
('3411121001', 'Prasetyo', 'Dwi', '081254321111', 'Cimahi', 'Laki-laki', 2012, 'mhsw'),
('3411131001', 'Dwi', 'Prasetyo', '081254321111', 'Cimahi', 'Laki-laki', 2013, 'mhsw'),
('3411131029', 'Ikwan', 'Bagja Dirgantara', '081254321111', 'Cimahi', 'Laki-laki', 2013, 'mhsw'),
('3411131051', 'Alvin', 'Sofiyan Hermawan', '081254321111', 'Cimahi', 'Laki-laki', 2013, 'mhsw'),
('3411131101', 'Niken', 'Laras Kuntari', '081254321111', 'Cimahi', 'perempuan', 2013, 'mhsw'),
('3411131140', 'Rohmat', 'Hidayat', '081254321111', 'Cimahi', 'Laki-laki', 2013, 'mhsw'),
('3411141004', 'Ratih', 'Mutiara Syaida', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141011', 'Rizal', 'Nurrizki', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141012', 'Burhanudin', 'Ramdani', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141023', 'Erry', 'Fuadilah', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141027', 'Fadjrin', 'Puja Agdriawan', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141031', 'Kartika', 'Nur Oktaviani', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141036', 'Fitri', 'Nur Suciani', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141037', 'Andri', 'Ariyanto', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141045', 'Desty', 'Ivana Pryantika', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141047', 'Heny', 'Indriani', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141061', 'Dion', 'Christian', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141063', 'Deka', 'Panca Gustiawan', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141076', 'Hamid', 'Fadhilah', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141080', 'Adit', 'Saputra Himawan', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141082', 'Wawa', 'Nurazizah', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141095', 'Rizki', 'Abdillah', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141097', 'Idham', 'Pratama Putra', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141105', 'Alse', 'Liez Ibanez', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141119', 'Taufik', 'Ramdani', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141123', 'Riyan', 'Firmansyah', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141132', 'Heni', 'Nuraeni', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411141146', 'Ari', 'Gunawan', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw'),
('3411141158', 'Ira', 'Oktavia', '081254321111', 'Cimahi', 'perempuan', 2014, 'mhsw'),
('3411151048', 'Muhammad', 'Gin-Gin', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411151073', 'Yosia', 'Oktavian Pailan', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411151127', 'Reza', 'Faragista', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411151131', 'Mentari', 'Liem', '081254321111', 'Cimahi', 'perempuan', 2015, 'mhsw'),
('3411151147', 'Muhammad', 'Dwi Laksono', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411151148', 'Kresna', 'Septyana Ekaputra', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411151171', 'Reno', 'Setiawan', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411151177', 'Oki', 'Iskandar', '081254321111', 'Cimahi', 'Laki-laki', 2015, 'mhsw'),
('3411161001', 'Rahmania Aulia', 'Ikrimah Putri', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161002', 'Agya', 'Java Maulidin', '089606590810', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161003', 'Nurul', 'Annisa', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161007', 'Hana', 'Riana Yasin', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161011', 'Shisi', 'Prayesti', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161012', 'Kundika', 'Whicak Bawhika Syaufa', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161014', 'Wildan', 'Pratama', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161019', 'Resty', 'Awaliah Febrianty', '081254321111', 'Padalarang', 'perempuan', 2016, 'mhsw'),
('3411161028', 'Bima', 'Wahyu Utama', '082210022173', 'Cihanjuang', 'Laki-laki', 2016, 'mhsw'),
('3411161034', 'Muhammad Yusriel ', 'Ilyasa Aziz', '082298831864', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161036', 'Agung', 'Wahyu Hadiana', '081388488886', 'Padalarang', 'Laki-laki', 2016, 'mhsw'),
('3411161040', 'Sheila', 'Nurmeila Ashma', '081224899789', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161043', 'Sofa', 'Marwati', '081254321111', 'Padalarang', 'perempuan', 2015, 'mhsw'),
('3411161044', 'Ardi', 'Destiawan Atmajaya', '082262128703', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161045', 'Novia Retno', 'Larasati S', '089655730742', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161046', 'Febry', 'Ramadhan', '089648165065', 'Parongpong', 'Laki-laki', 2016, 'mhsw'),
('3411161047', 'Reza', 'Dwi Putra', '081254321111', 'Batujajar', 'Laki-laki', 2016, 'mhsw'),
('3411161048', 'Budi', 'Dwi Prasetyo', '085320942911', 'Cihampelas', 'Laki-laki', 2016, 'mhsw'),
('3411161049', 'Indra', 'Gunawan', '089606029860', 'Padalarang', 'Laki-laki', 2016, 'mhsw'),
('3411161052', 'Rizkia', 'Ramadan', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161053', 'Yuliani', 'Dwi Utami', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161058', 'Yusuf', 'Andas Ramadhan', '081299192924', 'Cihanjuang', 'Laki-laki', 2016, 'mhsw'),
('3411161064', 'Silvia', 'Rusmawanti', '089688507563', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161066', 'Helmi', 'Fachrureza', '0895422671292', 'Batujajar', 'Laki-laki', 2016, 'mhsw'),
('3411161070', 'Mahbub', 'Ar-Rozi As', '089650041739', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161073', 'Dini', 'Eka Pratiwi', '081254321111', 'Batujajar', 'perempuan', 2016, 'mhsw'),
('3411161076', 'Indra', 'Jaya Rukmana', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161077', 'Rahandanu', 'Rachmat', '085314088511', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161084', 'Rully', 'Haryadi', '081254321111', 'Padalarang', 'Laki-laki', 2016, 'mhsw'),
('3411161087', 'Muhamad', 'Rizal Firmansyah', '081254321111', 'Padalarang', 'Laki-laki', 2016, 'mhsw'),
('3411161098', 'Rafi', 'Muhammad Afif', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161109', 'Rayzha', 'Raka Putra', '081312966904', 'Padalarang', 'Laki-laki', 2016, 'mhsw'),
('3411161118', 'Selia', 'Aysiah', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161120', 'Ajeng', 'Suci Ananda', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161125', 'Syarifudin', 'Yoga Pinasty', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161138', 'Lidya', 'Siti Hasfari', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw'),
('3411161139', 'Dony', 'Septian', '082216121638', 'Cihanjuang', 'Laki-laki', 2016, 'mhsw'),
('3411161146', 'Muhammad', 'Yusup Zakaria', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161150', 'Debi', 'Darmawan', '085781054096', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161153', 'Muhammad', 'Rivaldi Irawan', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161156', 'Yoga', 'Esa Mahendra', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161200', 'Ryan', 'Beni', '081254321111', 'Cimahi', 'Laki-laki', 2016, 'mhsw'),
('3411161201', 'Bella', 'Donata', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai_harapan`
--

CREATE TABLE `t_nilai_harapan` (
  `kategori` varchar(25) NOT NULL,
  `sangatpuas` int(255) DEFAULT NULL,
  `puas` int(255) DEFAULT NULL,
  `cukuppuas` int(255) DEFAULT NULL,
  `kurangpuas` int(255) DEFAULT NULL,
  `tidakpuas` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
-- Kesalahan membaca data untuk tabel mb.t_nilai_harapan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `mb`.`t_nilai_harapan`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_periode`
--

CREATE TABLE `t_periode` (
  `id_periode` varchar(25) NOT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_periode`
--

INSERT INTO `t_periode` (`id_periode`, `semester`, `keterangan`, `status`) VALUES
('PE0720001', 'Genap', '2019/2020 Semester Genap', 'aktif'),
('PE0720002', 'Ganjil', '2020/2021 Semester Ganjil', 'tidak aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_presepsi`
--

CREATE TABLE `t_presepsi` (
  `id_survei` varchar(25) DEFAULT NULL,
  `tp` int(255) DEFAULT NULL,
  `kp` int(255) DEFAULT NULL,
  `cp` int(255) DEFAULT NULL,
  `p` int(255) DEFAULT NULL,
  `sp` int(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `nim` varchar(25) DEFAULT NULL,
  `nid` varchar(25) DEFAULT NULL,
  `periode` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_presepsi`
--

INSERT INTO `t_presepsi` (`id_survei`, `tp`, `kp`, `cp`, `p`, `sp`, `id`, `nim`, `nid`, `periode`) VALUES
('P0620001', 0, 0, 0, 4, 0, 137, '3411161048', '412190585', NULL),
('P0620002', 0, 0, 0, 4, 0, 138, '3411161048', '412190585', NULL),
('P0620003', 0, 2, 0, 0, 0, 139, '3411161048', '412190585', NULL),
('P0620004', 0, 0, 3, 0, 0, 140, '3411161048', '412190585', NULL),
('P0620005', 0, 2, 0, 0, 0, 141, '3411161048', '412190585', NULL),
('P0620006', 0, 0, 3, 0, 0, 142, '3411161048', '412190585', NULL),
('P0620007', 0, 0, 3, 0, 0, 143, '3411161048', '412190585', NULL),
('P0620008', 0, 0, 0, 4, 0, 144, '3411161048', '412190585', NULL),
('P0620009', 0, 0, 0, 4, 0, 145, '3411161048', '412190585', NULL),
('P0620010', 0, 0, 0, 4, 0, 146, '3411161048', '412190585', NULL),
('P0620011', 0, 0, 0, 4, 0, 147, '3411161048', '412190585', NULL),
('P0620012', 0, 0, 3, 0, 0, 148, '3411161048', '412190585', NULL),
('P0620013', 1, 0, 0, 0, 0, 149, '3411161048', '412190585', NULL),
('P0620014', 0, 0, 3, 0, 0, 150, '3411161048', '412190585', NULL),
('P0620015', 0, 0, 0, 4, 0, 151, '3411161048', '412190585', NULL),
('P0620016', 0, 2, 0, 0, 0, 152, '3411161048', '412190585', NULL),
('P0620017', 0, 0, 3, 0, 0, 153, '3411161048', '412190585', NULL),
('P0620018', 0, 0, 0, 4, 0, 154, '3411161048', '412190585', NULL),
('P0620019', 0, 0, 3, 0, 0, 155, '3411161048', '412190585', NULL),
('P0620020', 0, 0, 0, 4, 0, 156, '3411161048', '412190585', NULL),
('P0620021', 0, 0, 3, 0, 0, 157, '3411161048', '412190585', NULL),
('P0620022', 0, 0, 3, 0, 0, 158, '3411161048', '412190585', NULL),
('P0620001', 0, 2, 0, 0, 0, 159, '3411161048', '412190585', NULL),
('P0620002', 0, 0, 3, 0, 0, 160, '3411161048', '412190585', NULL),
('P0620003', 0, 0, 0, 4, 0, 161, '3411161048', '412190585', NULL),
('P0620004', 0, 0, 0, 4, 0, 162, '3411161048', '412190585', NULL),
('P0620005', 0, 0, 0, 4, 0, 163, '3411161048', '412190585', NULL),
('P0620006', 0, 0, 3, 0, 0, 164, '3411161048', '412190585', NULL),
('P0620007', 1, 0, 0, 0, 0, 165, '3411161048', '412190585', NULL),
('P0620008', 0, 2, 0, 0, 0, 166, '3411161048', '412190585', NULL),
('P0620009', 0, 0, 3, 0, 0, 167, '3411161048', '412190585', NULL),
('P0620010', 0, 0, 0, 4, 0, 168, '3411161048', '412190585', NULL),
('P0620011', 0, 0, 0, 0, 5, 169, '3411161048', '412190585', NULL),
('P0620012', 0, 0, 3, 0, 0, 170, '3411161048', '412190585', NULL),
('P0620013', 0, 0, 0, 4, 0, 171, '3411161048', '412190585', NULL),
('P0620014', 0, 0, 3, 0, 0, 172, '3411161048', '412190585', NULL),
('P0620015', 0, 2, 0, 0, 0, 173, '3411161048', '412190585', NULL),
('P0620016', 0, 0, 3, 0, 0, 174, '3411161048', '412190585', NULL),
('P0620017', 0, 0, 0, 4, 0, 175, '3411161048', '412190585', NULL),
('P0620018', 0, 0, 3, 0, 0, 176, '3411161048', '412190585', NULL),
('P0620019', 0, 0, 0, 4, 0, 177, '3411161048', '412190585', NULL),
('P0620020', 0, 0, 3, 0, 0, 178, '3411161048', '412190585', NULL),
('P0620021', 0, 0, 0, 0, 5, 179, '3411161048', '412190585', NULL),
('P0620022', 1, 0, 0, 0, 0, 180, '3411161048', '412190585', NULL),
('P0620001', 1, 0, 0, 0, 0, 181, '3411161048', '412176273', NULL),
('P0620002', 1, 0, 0, 0, 0, 182, '3411161048', '412176273', NULL),
('P0620003', 1, 0, 0, 0, 0, 183, '3411161048', '412176273', NULL),
('P0620004', 1, 0, 0, 0, 0, 184, '3411161048', '412176273', NULL),
('P0620005', 1, 0, 0, 0, 0, 185, '3411161048', '412176273', NULL),
('P0620006', 1, 0, 0, 0, 0, 186, '3411161048', '412176273', NULL),
('P0620007', 1, 0, 0, 0, 0, 187, '3411161048', '412176273', NULL),
('P0620008', 1, 0, 0, 0, 0, 188, '3411161048', '412176273', NULL),
('P0620009', 1, 0, 0, 0, 0, 189, '3411161048', '412176273', NULL),
('P0620010', 1, 0, 0, 0, 0, 190, '3411161048', '412176273', NULL),
('P0620011', 1, 0, 0, 0, 0, 191, '3411161048', '412176273', NULL),
('P0620012', 1, 0, 0, 0, 0, 192, '3411161048', '412176273', NULL),
('P0620013', 1, 0, 0, 0, 0, 193, '3411161048', '412176273', NULL),
('P0620014', 1, 0, 0, 0, 0, 194, '3411161048', '412176273', NULL),
('P0620015', 1, 0, 0, 0, 0, 195, '3411161048', '412176273', NULL),
('P0620016', 1, 0, 0, 0, 0, 196, '3411161048', '412176273', NULL),
('P0620017', 1, 0, 0, 0, 0, 197, '3411161048', '412176273', NULL),
('P0620018', 1, 0, 0, 0, 0, 198, '3411161048', '412176273', NULL),
('P0620019', 1, 0, 0, 0, 0, 199, '3411161048', '412176273', NULL),
('P0620020', 1, 0, 0, 0, 0, 200, '3411161048', '412176273', NULL),
('P0620021', 1, 0, 0, 0, 0, 201, '3411161048', '412176273', NULL),
('P0620022', 1, 0, 0, 0, 0, 202, '3411161048', '412176273', NULL),
('P0620001', 0, 0, 0, 4, 0, 225, '3411141123', '412127670', 'PE0720002'),
('P0620002', 0, 0, 0, 4, 0, 226, '3411141123', '412127670', 'PE0720002'),
('P0620003', 0, 0, 0, 4, 0, 227, '3411141123', '412127670', 'PE0720002'),
('P0620004', 0, 0, 0, 4, 0, 228, '3411141123', '412127670', 'PE0720002'),
('P0620005', 0, 0, 0, 4, 0, 229, '3411141123', '412127670', 'PE0720002'),
('P0620006', 0, 0, 0, 4, 0, 230, '3411141123', '412127670', 'PE0720002'),
('P0620007', 0, 0, 0, 4, 0, 231, '3411141123', '412127670', 'PE0720002'),
('P0620008', 0, 0, 0, 4, 0, 232, '3411141123', '412127670', 'PE0720002'),
('P0620009', 0, 0, 0, 4, 0, 233, '3411141123', '412127670', 'PE0720002'),
('P0620010', 0, 0, 0, 4, 0, 234, '3411141123', '412127670', 'PE0720002'),
('P0620011', 0, 0, 0, 4, 0, 235, '3411141123', '412127670', 'PE0720002'),
('P0620012', 0, 0, 0, 4, 0, 236, '3411141123', '412127670', 'PE0720002'),
('P0620013', 0, 0, 0, 4, 0, 237, '3411141123', '412127670', 'PE0720002'),
('P0620014', 0, 0, 0, 4, 0, 238, '3411141123', '412127670', 'PE0720002'),
('P0620015', 0, 0, 0, 4, 0, 239, '3411141123', '412127670', 'PE0720002'),
('P0620016', 0, 0, 0, 4, 0, 240, '3411141123', '412127670', 'PE0720002'),
('P0620017', 0, 0, 0, 4, 0, 241, '3411141123', '412127670', 'PE0720002'),
('P0620018', 0, 0, 0, 4, 0, 242, '3411141123', '412127670', 'PE0720002'),
('P0620019', 0, 0, 0, 4, 0, 243, '3411141123', '412127670', 'PE0720002'),
('P0620020', 0, 0, 0, 4, 0, 244, '3411141123', '412127670', 'PE0720002'),
('P0620021', 0, 0, 0, 4, 0, 245, '3411141123', '412127670', 'PE0720002'),
('P0620022', 0, 0, 0, 4, 0, 246, '3411141123', '412127670', 'PE0720002'),
('P0620001', 1, 0, 0, 0, 0, 247, '3411161048', '412176273', 'PE0720001'),
('P0620002', 1, 0, 0, 0, 0, 248, '3411161048', '412176273', 'PE0720001'),
('P0620003', 1, 0, 0, 0, 0, 249, '3411161048', '412176273', 'PE0720001'),
('P0620004', 1, 0, 0, 0, 0, 250, '3411161048', '412176273', 'PE0720001'),
('P0620005', 1, 0, 0, 0, 0, 251, '3411161048', '412176273', 'PE0720001'),
('P0620006', 1, 0, 0, 0, 0, 252, '3411161048', '412176273', 'PE0720001'),
('P0620007', 1, 0, 0, 0, 0, 253, '3411161048', '412176273', 'PE0720001'),
('P0620008', 1, 0, 0, 0, 0, 254, '3411161048', '412176273', 'PE0720001'),
('P0620009', 1, 0, 0, 0, 0, 255, '3411161048', '412176273', 'PE0720001'),
('P0620010', 1, 0, 0, 0, 0, 256, '3411161048', '412176273', 'PE0720001'),
('P0620011', 1, 0, 0, 0, 0, 257, '3411161048', '412176273', 'PE0720001'),
('P0620012', 1, 0, 0, 0, 0, 258, '3411161048', '412176273', 'PE0720001'),
('P0620013', 1, 0, 0, 0, 0, 259, '3411161048', '412176273', 'PE0720001'),
('P0620014', 1, 0, 0, 0, 0, 260, '3411161048', '412176273', 'PE0720001'),
('P0620015', 1, 0, 0, 0, 0, 261, '3411161048', '412176273', 'PE0720001'),
('P0620016', 1, 0, 0, 0, 0, 262, '3411161048', '412176273', 'PE0720001'),
('P0620017', 1, 0, 0, 0, 0, 263, '3411161048', '412176273', 'PE0720001'),
('P0620018', 1, 0, 0, 0, 0, 264, '3411161048', '412176273', 'PE0720001'),
('P0620019', 1, 0, 0, 0, 0, 265, '3411161048', '412176273', 'PE0720001'),
('P0620020', 1, 0, 0, 0, 0, 266, '3411161048', '412176273', 'PE0720001'),
('P0620021', 1, 0, 0, 0, 0, 267, '3411161048', '412176273', 'PE0720001'),
('P0620022', 1, 0, 0, 0, 0, 268, '3411161048', '412176273', 'PE0720001'),
('P0620001', 1, 0, 0, 0, 0, 291, '3411161077', '412166863', 'PE0720001'),
('P0620002', 1, 0, 0, 0, 0, 292, '3411161077', '412166863', 'PE0720001'),
('P0620003', 1, 0, 0, 0, 0, 293, '3411161077', '412166863', 'PE0720001'),
('P0620004', 1, 0, 0, 0, 0, 294, '3411161077', '412166863', 'PE0720001'),
('P0620005', 1, 0, 0, 0, 0, 295, '3411161077', '412166863', 'PE0720001'),
('P0620006', 1, 0, 0, 0, 0, 296, '3411161077', '412166863', 'PE0720001'),
('P0620007', 1, 0, 0, 0, 0, 297, '3411161077', '412166863', 'PE0720001'),
('P0620008', 1, 0, 0, 0, 0, 298, '3411161077', '412166863', 'PE0720001'),
('P0620009', 1, 0, 0, 0, 0, 299, '3411161077', '412166863', 'PE0720001'),
('P0620010', 1, 0, 0, 0, 0, 300, '3411161077', '412166863', 'PE0720001'),
('P0620011', 1, 0, 0, 0, 0, 301, '3411161077', '412166863', 'PE0720001'),
('P0620012', 1, 0, 0, 0, 0, 302, '3411161077', '412166863', 'PE0720001'),
('P0620013', 1, 0, 0, 0, 0, 303, '3411161077', '412166863', 'PE0720001'),
('P0620014', 1, 0, 0, 0, 0, 304, '3411161077', '412166863', 'PE0720001'),
('P0620015', 0, 0, 0, 0, 5, 305, '3411161077', '412166863', 'PE0720001'),
('P0620016', 0, 0, 3, 0, 0, 306, '3411161077', '412166863', 'PE0720001'),
('P0620017', 0, 0, 3, 0, 0, 307, '3411161077', '412166863', 'PE0720001'),
('P0620018', 0, 0, 0, 4, 0, 308, '3411161077', '412166863', 'PE0720001'),
('P0620019', 0, 0, 3, 0, 0, 309, '3411161077', '412166863', 'PE0720001'),
('P0620020', 0, 0, 3, 0, 0, 310, '3411161077', '412166863', 'PE0720001'),
('P0620021', 0, 0, 0, 4, 0, 311, '3411161077', '412166863', 'PE0720001'),
('P0620022', 0, 0, 0, 4, 0, 312, '3411161077', '412166863', 'PE0720001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_saran`
--

CREATE TABLE `t_saran` (
  `id` int(11) NOT NULL,
  `nim` varchar(25) DEFAULT NULL,
  `nid` varchar(25) DEFAULT NULL,
  `saran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_saran`
--

INSERT INTO `t_saran` (`id`, `nim`, `nid`, `saran`) VALUES
(13, '3411141105', '412127670', 'Bimbingan sudah baik'),
(14, '3411141123', '412127670', 'Lebih baik lagi'),
(15, '3411161048', '412176273', '  sudah baik'),
(16, '3411161046', '412166863', '  lebih baik lagi'),
(17, '3411161077', '412166863', '  Sudah baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_survei`
--

CREATE TABLE `t_survei` (
  `id_survei` varchar(25) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `survei` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_survei`
--

INSERT INTO `t_survei` (`id_survei`, `kategori`, `keterangan`, `survei`) VALUES
('P0620001', 'reability', 'Meliputi pelayanan yang diberikan oleh pihak jurusan prosedur dan keakuratan pelayanan', 'Frekuensi ujian skripsi/TA'),
('P0620002', 'reability', 'ini kegiatan reliability 2', 'Jangka waktu penyelesaian skripsi/TA'),
('P0620003', 'reability', 'ini kegiatan reliability 3', 'Rentang waktu yang disediakan dosen untuk memeriksa proposal/Skripsi/TA'),
('P0620004', 'reability', 'ini kegiatan reliability 4', 'Dosen membantu merumuskan judul Skripsi/TA'),
('P0620005', 'reability', 'ini kegiatan reliability 5', 'Dosen mengarahkan mahasiswa cara mengakses jurnal elektronik maupun informasi ilmiah cetak'),
('P0620006', 'reability', 'ini kegiatan reliability 6', 'Dosen mengarahkan mahasiswa menulis Skripsi/TA dalam bahasa Indonesia yang baik dan benar beserta detail penulisannya'),
('P0620007', 'reability', 'ini kegiatan reliability 7', 'Dosen mengarahkan mahasiswa menulis proposal/Skripsi/TA sesuai pedoman yang berlaku'),
('P0620008', 'reability', 'ini kegiatan reliability 8', 'Dosen mengarahkan mahasiswa dan memberi masukan pada saat akan ujian Skripsi/ujian komprehensif'),
('P0620009', 'tangibles', 'meliputi keadaan ruang, penyediaan ruang jadi lebih kepada fasilitas ketika kegiatan bimbingan berlangsung', 'Apakah tempat bimbingan cukup nyaman untuk melakukan kegiatan bimbingan ?'),
('P0620010', 'tangibles', 'ini kegiatan tangibles 2', 'Apakah memberatkan mahasiswa untuk hadir ditempat bimbingan ?'),
('P0620011', 'tangibles', 'ini kegiatan tangibles 3', 'Apakah suasana tempat bimbingan mendukung motivasi mahasiswa untuk bimbingan ?'),
('P0620012', 'tangibles', 'ini kegiatan tangibles 4', 'Waktu yang disediakan dosen untuk konsultasi proposal/Skripsi/TA'),
('P0620013', 'responsiveness', 'kesigapan para dosen membantu mahasiswa dengan pelayanan yang cepat tanggap (ketika mahasiswa membutuhkan atau ingin segera bimbingan , dosen yang bersangkutan bisa langsung membimbing mahasiswa tersebut)', 'Kepuasan secara umum dari mahasiswa terhadap kinerja dosen pembimbing'),
('P0620014', 'responsiveness', 'ini kegiatan responsiveness 2', 'Bersedia konsultasi di luar jadwal bimbingan yang telah disepakati'),
('P0620015', 'responsiveness', 'ini kegiatan responsiveness 3', 'Saat bimbingan Skripsi/TA, dosen memberikan penjelasan ulang terhadap revisi/koreksi tertulis yang dilakukan'),
('P0620016', 'responsiveness', 'ini kegiatan responsiveness 4', 'Dosen memotivasi mahasiswa memilih topik/judul yang inovatif'),
('P0620017', 'assurance', 'Bebas dari bahaya, resiko, atau keragu-raguan. jadi mungkin lebih ke jaminan agar mahasiswa tersebut yakin dengan penelitian yang sedang diambil dan benar-benar diarahkan oleh dosen pembimbing', 'Kesesuaian keahlian dosen pembimbing skripsi/TA dengan materi skripsi/TA'),
('P0620018', 'assurance', 'ini kegiatan assurance 2', 'Apakah dosen memahami masalah atau topik dari judul skripsi/TA'),
('P0620019', 'assurance', 'ini kegiatan assurance 3', 'Nilai ujian skripsi/TA '),
('P0620020', 'empathy', 'Usaha untuk memahami kebutuhan mahasiswa', 'Ketepatan bimbingan selalu tepat waktu'),
('P0620021', 'empathy', 'ini kegiatan empathy 2', 'Pembimbing selalu bersikap adil dalam melayani mahasiswa sesuai dengan urutan datang '),
('P0620022', 'empathy', 'ini kegiatan empathy 3', 'Pembimbing selalu bersedia membantu mahasiswa ketika mendapatkan kesulitan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `password`, `level`, `keterangan`) VALUES
('3411121001', 'mhsw', 'mhsw', 'mhsw'),
('3411131001', 'mhsw', 'mhsw', 'mhsw'),
('3411131029', 'mhsw', 'mhsw', 'mhsw'),
('3411131051', 'mhsw', 'mhsw', 'mhsw'),
('3411131052', 'mhsw', 'mhsw', 'mhsw'),
('3411131101', 'mhsw', 'mhsw', 'mhsw'),
('3411141004', 'mhsw', 'mhsw', 'mhsw'),
('3411141011', 'mhsw', 'mhsw', 'mhsw'),
('3411141012', 'mhsw', 'mhsw', 'mhsw'),
('3411141027', 'mhsw', 'mhsw', 'mhsw'),
('3411141031', 'mhsw', 'mhsw', 'mhsw'),
('3411141036', 'mhsw', 'mhsw', 'mhsw'),
('3411141037', 'mhsw', 'mhsw', 'mhsw'),
('3411141045', 'mhsw', 'mhsw', 'mhsw'),
('3411141047', 'mhsw', 'mhsw', 'mhsw'),
('3411141063', 'mhsw', 'mhsw', 'mhsw'),
('3411141076', 'mhsw', 'mhsw', 'mhsw'),
('3411141080', 'mhsw', 'mhsw', 'mhsw'),
('3411141095', 'mhsw', 'mhsw', 'mhsw'),
('3411141097', 'mhsw', 'mhsw', 'mhsw'),
('3411141105', 'mhsw', 'mhsw', 'mhsw'),
('3411141123', 'mhsw', 'mhsw', 'mhsw'),
('3411141132', 'mhsw', 'mhsw', 'mhsw'),
('3411141146', 'mhsw', 'mhsw', 'mhsw'),
('3411141158', 'mhsw', 'mhsw', 'mhsw'),
('3411151048', 'mhsw', 'mhsw', 'mhsw'),
('3411151073', 'mhsw', 'mhsw', 'mhsw'),
('3411151127', 'mhsw', 'mhsw', 'mhsw'),
('3411151131', 'mhsw', 'mhsw', 'mhsw'),
('3411151147', 'mhsw', 'mhsw', 'mhsw'),
('3411151148', 'mhsw', 'mhsw', 'mhsw'),
('3411151171', 'mhsw', 'mhsw', 'mhsw'),
('3411151177', 'mhsw', 'mhsw', 'mhsw'),
('3411161001', 'mhsw', 'mhsw', 'mhsw'),
('3411161002', 'mhsw', 'mhsw', 'mhsw'),
('3411161003', 'mhsw', 'mhsw', 'mhsw'),
('3411161007', 'mhsw', 'mhsw', 'mhsw'),
('3411161011', 'mhsw', 'mhsw', 'mhsw'),
('3411161012', 'mhsw', 'mhsw', 'mhsw'),
('3411161014', 'mhsw', 'mhsw', 'mhsw'),
('3411161019', 'mhsw', 'mhsw', 'mhsw'),
('3411161028', 'mhsw', 'mhsw', 'mhsw'),
('3411161034', 'mhsw', 'mhsw', 'mhsw'),
('3411161036', 'mhsw', 'mhsw', 'mhsw'),
('3411161040', 'mhsw', 'mhsw', 'mhsw'),
('3411161043', 'mhsw', 'mhsw', 'mhsw'),
('3411161044', 'mhsw', 'mhsw', 'mhsw'),
('3411161045', 'mhsw', 'mhsw', 'mhsw'),
('3411161046', 'mhsw', 'mhsw', 'mhsw'),
('3411161047', 'mhsw', 'mhsw', 'mhsw'),
('3411161048', 'mhsw', 'mhsw', 'mhsw'),
('3411161049', 'mhsw', 'mhsw', 'mhsw'),
('3411161052', 'mhsw', 'mhsw', 'mhsw'),
('3411161053', 'mhsw', 'mhsw', 'mhsw'),
('3411161058', 'mhsw', 'mhsw', 'mhsw'),
('3411161064', 'mhsw', 'mhsw', 'mhsw'),
('3411161066', 'mhsw', 'mhsw', 'mhsw'),
('3411161070', 'mhsw', 'mhsw', 'mhsw'),
('3411161073', 'mhsw', 'mhsw', 'mhsw'),
('3411161076', 'mhsw', 'mhsw', 'mhsw'),
('3411161077', 'mhsw', 'mhsw', 'mhsw'),
('3411161084', 'mhsw', 'mhsw', 'mhsw'),
('3411161087', 'mhsw', 'mhsw', 'mhsw'),
('3411161098', 'mhsw', 'mhsw', 'mhsw'),
('3411161109', 'mhsw', 'mhsw', 'mhsw'),
('3411161118', 'mhsw', 'mhsw', 'mhsw'),
('3411161120', 'mhsw', 'mhsw', 'mhsw'),
('3411161125', 'mhsw', 'mhsw', 'mhsw'),
('3411161138', 'mhsw', 'mhsw', 'mhsw'),
('3411161139', 'mhsw', 'mhsw', 'mhsw'),
('3411161146', 'mhsw', 'mhsw', 'mhsw'),
('3411161150', 'mhsw', 'mhsw', 'mhsw'),
('3411161153', 'mhsw', 'mhsw', 'mhsw'),
('3411161156', 'mhsw', 'mhsw', 'mhsw'),
('3411161200', 'mhsw', 'mhsw', 'mhsw'),
('3411161201', 'mhsw', 'mhsw', 'mhsw'),
('412100992', 'dosen', 'dsn', 'pembimbing'),
('412110561', 'dosen', 'dsn', 'pembimbing'),
('412116459', 'dosen', 'dsn', 'pembimbing'),
('412127670', 'dosen', 'dsn', 'pembimbing'),
('412157175', 'dosen', 'dsn', 'pembimbing'),
('412166863', 'dosen', 'dsn', 'pembimbing'),
('412166969', 'dosen', 'dsn', 'pembimbing'),
('412167079', 'dosen', 'dsn', 'pembimbing'),
('412174182', 'dosen', 'dsn', 'pembimbing'),
('412175878', 'dosen', 'dsn', 'pembimbing'),
('412176273', 'dosen', 'dsn', 'kajur'),
('412180078', 'dosen', 'dsn', 'pembimbing'),
('412182990', 'dosen', 'dsn', 'pembimbing'),
('412185888', 'dosen', 'dsn', 'pembimbing'),
('412190585', 'dosen', 'dsn', 'pembimbing'),
('412196490', 'dosen', 'dsn', 'pembimbing'),
('412198688', 'dosen', 'dsn', 'koordinator'),
('tu', 'tu', 'tu', 'tu');

-- --------------------------------------------------------

--
-- Struktur untuk view `bobot2`
--
DROP TABLE IF EXISTS `bobot2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bobot2`  AS  select `t_nilai_harapan`.`kategori` AS `kategori`,sum(`t_nilai_harapan`.`tidakpuas` * 1) + sum(`t_nilai_harapan`.`kurangpuas` * 2) + sum(`t_nilai_harapan`.`cukuppuas` * 3) + sum(`t_nilai_harapan`.`puas` * 4) + sum(`t_nilai_harapan`.`sangatpuas` * 5) AS `b` from `t_nilai_harapan` group by `t_nilai_harapan`.`kategori` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `gap`
--
DROP TABLE IF EXISTS `gap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gap`  AS  select `t_presepsi`.`id_survei` AS `id_survei`,`t_survei`.`kategori` AS `kategori`,count(`t_presepsi`.`nim`) AS `mhs`,sum(`t_presepsi`.`tp`) + sum(`t_presepsi`.`kp`) + sum(`t_presepsi`.`cp`) + sum(`t_presepsi`.`p`) + sum(`t_presepsi`.`sp`) AS `bobot1`,(sum(`t_presepsi`.`tp`) + sum(`t_presepsi`.`kp`) + sum(`t_presepsi`.`cp`) + sum(`t_presepsi`.`p`) + sum(`t_presepsi`.`sp`)) / count(`t_presepsi`.`nim`) AS `rata1`,`bobot2`.`b` AS `bobot2`,`bobot2`.`b` / count(`t_presepsi`.`nim`) AS `rata2`,(sum(`t_presepsi`.`tp`) + sum(`t_presepsi`.`kp`) + sum(`t_presepsi`.`cp`) + sum(`t_presepsi`.`p`) + sum(`t_presepsi`.`sp`)) / count(`t_presepsi`.`nim`) - `bobot2`.`b` / count(`t_presepsi`.`nim`) AS `hasil`,`t_presepsi`.`nid` AS `nid`,`t_presepsi`.`nim` AS `nim` from ((`t_presepsi` left join `t_survei` on(`t_survei`.`id_survei` = `t_presepsi`.`id_survei`)) left join `bobot2` on(`bobot2`.`kategori` = `t_survei`.`kategori`)) group by `t_presepsi`.`nid`,`t_presepsi`.`id_survei` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_bimbingan`
--
ALTER TABLE `t_bimbingan`
  ADD PRIMARY KEY (`id_bimbingan`) USING BTREE;

--
-- Indeks untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`nid`) USING BTREE;

--
-- Indeks untuk tabel `t_isi_survei`
--
ALTER TABLE `t_isi_survei`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `t_materi`
--
ALTER TABLE `t_materi`
  ADD PRIMARY KEY (`linenumber`) USING BTREE;

--
-- Indeks untuk tabel `t_mhsw`
--
ALTER TABLE `t_mhsw`
  ADD PRIMARY KEY (`nim`) USING BTREE;

--
-- Indeks untuk tabel `t_nilai_harapan`
--
ALTER TABLE `t_nilai_harapan`
  ADD PRIMARY KEY (`kategori`) USING BTREE;

--
-- Indeks untuk tabel `t_periode`
--
ALTER TABLE `t_periode`
  ADD PRIMARY KEY (`id_periode`) USING BTREE;

--
-- Indeks untuk tabel `t_presepsi`
--
ALTER TABLE `t_presepsi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `t_saran`
--
ALTER TABLE `t_saran`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `t_survei`
--
ALTER TABLE `t_survei`
  ADD PRIMARY KEY (`id_survei`) USING BTREE;

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_isi_survei`
--
ALTER TABLE `t_isi_survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- AUTO_INCREMENT untuk tabel `t_materi`
--
ALTER TABLE `t_materi`
  MODIFY `linenumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `t_presepsi`
--
ALTER TABLE `t_presepsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT untuk tabel `t_saran`
--
ALTER TABLE `t_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
