/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50123
 Source Host           : localhost:3306
 Source Schema         : mb

 Target Server Type    : MySQL
 Target Server Version : 50123
 File Encoding         : 65001

 Date: 11/07/2020 16:30:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_bimbingan
-- ----------------------------
DROP TABLE IF EXISTS `t_bimbingan`;
CREATE TABLE `t_bimbingan`  (
  `id_bimbingan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nim` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nid` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kategori` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bimbingan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_bimbingan
-- ----------------------------
INSERT INTO `t_bimbingan` VALUES ('B0620001', '3411161048', '412190585', 'TA2', 'disetujui', 'pembimbing2', 'PE0720001');
INSERT INTO `t_bimbingan` VALUES ('B0620005', '3411161046', '412166863', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001');
INSERT INTO `t_bimbingan` VALUES ('B0620006', '3411161077', '412166863', 'TA2', 'disetujui', 'pembimbing1', 'PE0720001');
INSERT INTO `t_bimbingan` VALUES ('B0720001', '3411161048', '412166969', 'TA2', 'belum disetujui', 'pembimbing1', 'PE0720001');

-- ----------------------------
-- Table structure for t_dosen
-- ----------------------------
DROP TABLE IF EXISTS `t_dosen`;
CREATE TABLE `t_dosen`  (
  `nid` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_depan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_belakang` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `struktur` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_dosen
-- ----------------------------
INSERT INTO `t_dosen` VALUES ('412100992', 'Fatan', 'Kasyidi', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412110561', 'Eddie', 'Krishna Putra', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing1', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412116459', 'Ade', 'Kanianingsih', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412127670', 'Esmeralda', 'C. Djamal', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'pembimbing1', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412157175', 'Gunawan', 'Abdillah', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412166863', 'Yulison', 'Herry Chrisnanto', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing1', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412166969', 'Tacbir', 'Hendro Pudjiantoro', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing1', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412167079', 'Faiza', 'Renaldi', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412174182', 'Rezki', 'Yuniarti', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412175878', 'Agus', 'Komarudin', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412176273', 'Wina', 'Witanti', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'kajur');
INSERT INTO `t_dosen` VALUES ('412180078', 'Asep', 'Id Hadiana', '081220942222', 'Cihanjuang', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412182990', 'Ridwan', 'Ilyas', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412185888', 'Fajri', 'Rakhmat Umbara', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412190585', 'Puspita N', 'Sabrina', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'P1jugaP2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412196490', 'Irma', 'Santikarama', '081220942222', 'Cimahi', 'perempuan', 'dsn', 'pembimbing2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('412198688', 'Herdi', 'Ashaury', '081220942222', 'Cimahi', 'Laki-laki', 'dsn', 'pembimbing2', 'koordinator');

-- ----------------------------
-- Table structure for t_isi_survei
-- ----------------------------
DROP TABLE IF EXISTS `t_isi_survei`;
CREATE TABLE `t_isi_survei`  (
  `id_survei` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nim` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nid` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jawaban` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periode` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 180 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_isi_survei
-- ----------------------------
INSERT INTO `t_isi_survei` VALUES ('P0620001', '3411161077', '412166863', '3', 158, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620002', '3411161077', '412166863', '3', 159, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620003', '3411161077', '412166863', '3', 160, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620004', '3411161077', '412166863', '3', 161, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620005', '3411161077', '412166863', '3', 162, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620006', '3411161077', '412166863', '3', 163, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620007', '3411161077', '412166863', '3', 164, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620008', '3411161077', '412166863', '3', 165, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620009', '3411161077', '412166863', '3', 166, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620010', '3411161077', '412166863', '3', 167, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620011', '3411161077', '412166863', '3', 168, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620012', '3411161077', '412166863', '3', 169, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620013', '3411161077', '412166863', '3', 170, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620014', '3411161077', '412166863', '3', 171, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620015', '3411161077', '412166863', '3', 172, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620016', '3411161077', '412166863', '3', 173, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620017', '3411161077', '412166863', '3', 174, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620018', '3411161077', '412166863', '3', 175, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620019', '3411161077', '412166863', '3', 176, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620020', '3411161077', '412166863', '3', 177, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620021', '3411161077', '412166863', '3', 178, 'PE0720001');
INSERT INTO `t_isi_survei` VALUES ('P0620022', '3411161077', '412166863', '3', 179, 'PE0720001');

-- ----------------------------
-- Table structure for t_materi
-- ----------------------------
DROP TABLE IF EXISTS `t_materi`;
CREATE TABLE `t_materi`  (
  `id_bimbingan` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nid` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nim` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pertemuan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_pertemuan` date NULL DEFAULT NULL,
  `materi_pertemuan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ket_pertemuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `linenumber` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`linenumber`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_materi
-- ----------------------------
INSERT INTO `t_materi` VALUES ('B0620005', '412166863', '3411161046', '1', '2020-06-25', 'latar belakang', 'disetujui', 'BAB I', 7);
INSERT INTO `t_materi` VALUES ('B0620005', '412166863', '3411161046', '2', '2020-06-25', 'Identifikasi Masalah', 'disetujui', 'BAB I', 8);
INSERT INTO `t_materi` VALUES ('B0620006', '412166863', '3411161077', '1', '2020-06-25', 'latar belakang', 'disetujui', 'BAB I', 9);
INSERT INTO `t_materi` VALUES ('B0620001', '412190585', '3411161048', '2', '2020-06-26', 'Kesimpulan Dan Saran', 'disetujui', 'BAB 5', 10);
INSERT INTO `t_materi` VALUES ('B0620005', '412166863', '3411161046', '3', '2020-06-26', 'UML', 'disetujui', 'BAB 3', 11);
INSERT INTO `t_materi` VALUES ('B0620001', '412190585', '3411161048', '1', '2020-06-26', 'latar belakang', 'disetujui', 'BAB I', 12);
INSERT INTO `t_materi` VALUES ('B0620001', '412190585', '3411161048', '3', '2020-06-27', 'fasfa', 'disetujui', 'fasf', 13);
INSERT INTO `t_materi` VALUES ('B0620001', '412190585', '3411161048', '4', '2020-06-27', 'dsadas', 'disetujui', 'dasda', 14);
INSERT INTO `t_materi` VALUES ('B0620001', '412190585', '3411161048', '5', '2020-07-05', 'dsad', 'belum disetujui', 'KET.\\DASDAS.DASDJ', 15);

-- ----------------------------
-- Table structure for t_mhsw
-- ----------------------------
DROP TABLE IF EXISTS `t_mhsw`;
CREATE TABLE `t_mhsw`  (
  `nim` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_depan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_belakang` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `angkatan` int(5) NULL DEFAULT NULL,
  `keterangan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nim`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mhsw
-- ----------------------------
INSERT INTO `t_mhsw` VALUES ('3411131029', 'Ikwan', 'Bagja Dirgantara', '081254321111', 'Cimahi', 'Laki-laki', 2013, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411141011', 'Rizal', 'Nurrizki', '081254321111', 'Cimahi', 'Laki-laki', 2014, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411151111', 'Mentari', 'Liem', '081254321111', 'Cimahi', 'perempuan', 2015, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161001', 'Rahmania Aulia', 'Ikrimah Putri', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161002', 'Agya', 'Java Maulidin', '089606590810', 'Cimahi', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161011', 'Shisi', 'Prayesti', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161028', 'Bima', 'Wahyu Utama', '082210022173', 'Cihanjuang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161034', 'Muhammad Yusriel ', 'Ilyasa Aziz', '082298831864', 'Cimahi', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161036', 'Agung', 'Wahyu Hadiana', '081388488886', 'Padalarang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161040', 'Sheila', 'Nurmeila Ashma', '081224899789', 'Cimahi', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161044', 'Ardi', 'Destiawan Atmajaya', '082262128703', 'Cimahi', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161045', 'Novia Retno', 'Larasati S', '089655730742', 'Cimahi', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161046', 'Febry', 'Ramadhan', '089648165065', 'Parongpong', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161048', 'Budi', 'Dwi', '085320942911', 'Cihampelas', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161049', 'Indra', 'Gunawan', '089606029860', 'Padalarang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161052', 'Rizkia', 'Ramadan', '081254321111', 'Cimahi', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161058', 'Yusuf', 'Andas Ramadhan', '081299192924', 'Cihanjuang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161064', 'Silvia', 'Rusmawanti', '089688507563', 'Cimahi', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161066', 'Helmi', 'Fachrureza', '0895422671292', 'Batujajar', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161070', 'Mahbub', 'Ar-Rozi As', '089650041739', 'Cimahi', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161077', 'Rahandanu', 'Rachmat', '085314088511', 'Cimahi', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161084', 'Rully', 'Haryadi', '081254321111', 'Padalarang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161109', 'Rayzha', 'Raka Putra', '081312966904', 'Padalarang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161139', 'Dony', 'Septian', '082216121638', 'Cihanjuang', 'Laki-laki', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('3411161150', 'Debi', 'Darmawan', '085781054096', 'Cimahi', 'Laki-laki', 2016, 'mhsw');

-- ----------------------------
-- Table structure for t_nilai_harapan
-- ----------------------------
DROP TABLE IF EXISTS `t_nilai_harapan`;
CREATE TABLE `t_nilai_harapan`  (
  `kategori` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sangatpuas` int(255) NULL DEFAULT NULL,
  `puas` int(255) NULL DEFAULT NULL,
  `cukuppuas` int(255) NULL DEFAULT NULL,
  `kurangpuas` int(255) NULL DEFAULT NULL,
  `tidakpuas` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`kategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_nilai_harapan
-- ----------------------------
INSERT INTO `t_nilai_harapan` VALUES ('assurance', 1, 1, 2, 2, 2);
INSERT INTO `t_nilai_harapan` VALUES ('empathy', 3, 3, 1, 0, 0);
INSERT INTO `t_nilai_harapan` VALUES ('reability', 1, 2, 3, 1, 1);
INSERT INTO `t_nilai_harapan` VALUES ('responsiveness', 2, 2, 2, 1, 1);
INSERT INTO `t_nilai_harapan` VALUES ('tangibles', 1, 1, 1, 2, 3);

-- ----------------------------
-- Table structure for t_periode
-- ----------------------------
DROP TABLE IF EXISTS `t_periode`;
CREATE TABLE `t_periode`  (
  `id_periode` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `semester` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_periode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_periode
-- ----------------------------
INSERT INTO `t_periode` VALUES ('PE0720001', 'Genap', '2020/2021 Semester Genap', 'aktif');
INSERT INTO `t_periode` VALUES ('PE0720002', 'Ganjil', '2020/2021 semester Ganjil', 'tidak aktif');

-- ----------------------------
-- Table structure for t_presepsi
-- ----------------------------
DROP TABLE IF EXISTS `t_presepsi`;
CREATE TABLE `t_presepsi`  (
  `id_survei` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tp` int(255) NULL DEFAULT NULL,
  `kp` int(255) NULL DEFAULT NULL,
  `cp` int(255) NULL DEFAULT NULL,
  `p` int(255) NULL DEFAULT NULL,
  `sp` int(255) NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nid` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `periode` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 137 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_presepsi
-- ----------------------------
INSERT INTO `t_presepsi` VALUES ('P0620001', 0, 0, 3, 0, 0, 115, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620002', 0, 0, 3, 0, 0, 116, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620003', 0, 0, 3, 0, 0, 117, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620004', 0, 0, 3, 0, 0, 118, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620005', 0, 0, 3, 0, 0, 119, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620006', 0, 0, 3, 0, 0, 120, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620007', 0, 0, 3, 0, 0, 121, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620008', 0, 0, 3, 0, 0, 122, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620009', 0, 0, 3, 0, 0, 123, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620010', 0, 0, 3, 0, 0, 124, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620011', 0, 0, 3, 0, 0, 125, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620012', 0, 0, 3, 0, 0, 126, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620013', 0, 0, 3, 0, 0, 127, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620014', 0, 0, 3, 0, 0, 128, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620015', 0, 0, 3, 0, 0, 129, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620016', 0, 0, 3, 0, 0, 130, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620017', 0, 0, 3, 0, 0, 131, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620018', 0, 0, 3, 0, 0, 132, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620019', 0, 0, 3, 0, 0, 133, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620020', 0, 0, 3, 0, 0, 134, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620021', 0, 0, 3, 0, 0, 135, '3411161077', '412166863', 'PE0720001');
INSERT INTO `t_presepsi` VALUES ('P0620022', 0, 0, 3, 0, 0, 136, '3411161077', '412166863', 'PE0720001');

-- ----------------------------
-- Table structure for t_saran
-- ----------------------------
DROP TABLE IF EXISTS `t_saran`;
CREATE TABLE `t_saran`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nid` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_saran
-- ----------------------------
INSERT INTO `t_saran` VALUES (1, '111', '321412521', '  good job bos');
INSERT INTO `t_saran` VALUES (2, '111', '321412521', '  test');
INSERT INTO `t_saran` VALUES (3, '111', '321412521', '  okay');
INSERT INTO `t_saran` VALUES (4, '111', '321412521', '  okay');
INSERT INTO `t_saran` VALUES (5, '111', '321412521', '  okay');
INSERT INTO `t_saran` VALUES (6, '111', NULL, '  saran');
INSERT INTO `t_saran` VALUES (7, '111', NULL, '  okay deh');
INSERT INTO `t_saran` VALUES (8, '111', '321412521', '  ');
INSERT INTO `t_saran` VALUES (9, '111', '321412521', '  okaydeh');

-- ----------------------------
-- Table structure for t_survei
-- ----------------------------
DROP TABLE IF EXISTS `t_survei`;
CREATE TABLE `t_survei`  (
  `id_survei` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `survei` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_survei`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_survei
-- ----------------------------
INSERT INTO `t_survei` VALUES ('P0620001', 'reability', 'ini kegiatan reability', 'apakah reability ? 1');
INSERT INTO `t_survei` VALUES ('P0620002', 'reability', 'ini kegiatan reability', 'apakah reability ? 2');
INSERT INTO `t_survei` VALUES ('P0620003', 'reability', 'ini kegiatan reability', 'apakah reability ? 3');
INSERT INTO `t_survei` VALUES ('P0620004', 'reability', 'ini kegiatan reability', 'apakah reability ? 4');
INSERT INTO `t_survei` VALUES ('P0620005', 'reability', 'ini kegiatan reability', 'apakah reability ? 5');
INSERT INTO `t_survei` VALUES ('P0620006', 'reability', 'ini kegiatan reability', 'apakah reability ? 6');
INSERT INTO `t_survei` VALUES ('P0620007', 'reability', 'ini kegiatan reability', 'apakah reability ? 7');
INSERT INTO `t_survei` VALUES ('P0620008', 'reability', 'ini kegiatan reability', 'apakah reability ? 8');
INSERT INTO `t_survei` VALUES ('P0620009', 'tangibles', 'ini kegiatan tangibles', 'apakah tangibles ? 1');
INSERT INTO `t_survei` VALUES ('P0620010', 'tangibles', 'ini kegiatan tangibles', 'apakah tangibles ? 2');
INSERT INTO `t_survei` VALUES ('P0620011', 'tangibles', 'ini kegiatan tangibles', 'apakah tangibles ? 3');
INSERT INTO `t_survei` VALUES ('P0620012', 'tangibles', 'ini kegiatan tangibles', 'apakah tangibles ? 4');
INSERT INTO `t_survei` VALUES ('P0620013', 'responsiveness', 'ini kegiatan responsiveness', 'apakah responsiveness ? 1');
INSERT INTO `t_survei` VALUES ('P0620014', 'responsiveness', 'ini kegiatan responsiveness', 'apakah responsiveness ? 2');
INSERT INTO `t_survei` VALUES ('P0620015', 'responsiveness', 'ini kegiatan responsiveness', 'apakah responsiveness ?3');
INSERT INTO `t_survei` VALUES ('P0620016', 'responsiveness', 'ini kegiatan responsiveness', 'apakah responsiveness ? 4');
INSERT INTO `t_survei` VALUES ('P0620017', 'assurance', 'ini kegiatan assurance', 'apakah assurance ? 1');
INSERT INTO `t_survei` VALUES ('P0620018', 'assurance', 'ini kegiatan assurance', 'apakah assurance ? 2');
INSERT INTO `t_survei` VALUES ('P0620019', 'assurance', 'ini kegiatan assurance', 'apakah assurance ? 3');
INSERT INTO `t_survei` VALUES ('P0620020', 'empathy', 'ini kegiatan empathy', 'apakah empathy ?1');
INSERT INTO `t_survei` VALUES ('P0620021', 'empathy', 'ini kegiatan empathy', 'apakah empathy ?2');
INSERT INTO `t_survei` VALUES ('P0620022', 'empathy', 'ini kegiatan empathy', 'apakah empathy ?3');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `id_user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('3411131029', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411141011', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411151111', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161001', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161002', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161011', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161028', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161034', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161036', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161040', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161044', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161045', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161046', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161048', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161049', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161052', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161058', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161064', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161066', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161070', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161077', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161084', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161109', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161139', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('3411161150', 'mhsw', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('412100992', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412110561', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412116459', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412127670', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412157175', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412166863', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412166969', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412167079', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412174182', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412175878', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412176273', 'dosen', 'dsn', 'kajur');
INSERT INTO `t_user` VALUES ('412180078', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412182990', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412185888', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412190585', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412196490', 'dosen', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('412198688', 'dosen', 'dsn', 'koordinator');
INSERT INTO `t_user` VALUES ('tu', 'tu', 'tu', 'tu');

-- ----------------------------
-- View structure for bobot2
-- ----------------------------
DROP VIEW IF EXISTS `bobot2`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `bobot2` AS select kategori, sum(t_nilai_harapan.tidakpuas*1)+sum(t_nilai_harapan.kurangpuas*2)+sum(t_nilai_harapan.cukuppuas*3)+sum(puas*4)+sum(sangatpuas*5) as b  from t_nilai_harapan  GROUP BY t_nilai_harapan.kategori ; ;

-- ----------------------------
-- View structure for gap
-- ----------------------------
DROP VIEW IF EXISTS `gap`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `gap` AS select t_presepsi.id_survei,t_survei.kategori,count(nim) as mhs, sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp) as bobot1, (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim) as rata1,bobot2.b as bobot2, b/count(nim) as rata2 , (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim)-  b/count(nim) as hasil, t_presepsi.nid,t_presepsi.nim from t_presepsi left join t_survei on t_survei.id_survei = t_presepsi.id_survei left join bobot2 on bobot2.kategori = t_survei.kategori   GROUP BY nid,t_presepsi.id_survei ; ;

SET FOREIGN_KEY_CHECKS = 1;
