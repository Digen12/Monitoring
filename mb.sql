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

 Date: 24/06/2020 10:56:14
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
  PRIMARY KEY (`id_bimbingan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_bimbingan
-- ----------------------------
INSERT INTO `t_bimbingan` VALUES ('B0620001', '111', '321412521', 'TA2', 'disetujui', 'pembimbing1');
INSERT INTO `t_bimbingan` VALUES ('B0620002', '111', '3214125221', 'TA2', 'belum disetujui', 'pembimbing2');

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
INSERT INTO `t_dosen` VALUES ('321321312', 'irm', 'irma', '094218421', 'cimahi', 'perempuan', 'dsn', 'pembimbing2', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('321412521', 'fzr', 'faiza', '08942141', 'cimanggu', 'perempuan', 'dsn', 'pembimbing1', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('3214125221', 'fzr2', 'faiza2', '089421412', 'cimanggu2', 'perempuan', 'dsn', 'pembimbing1', 'pembimbing');
INSERT INTO `t_dosen` VALUES ('3421', 'wni', 'wina', '08978', 'alamat sup 0', 'perempuan', 'dsn', 'pembimbing1', 'kajur');

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 114 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_isi_survei
-- ----------------------------
INSERT INTO `t_isi_survei` VALUES ('P0620001', '111', '321412521', '1', 92);
INSERT INTO `t_isi_survei` VALUES ('P0620002', '111', '321412521', '2', 93);
INSERT INTO `t_isi_survei` VALUES ('P0620003', '111', '321412521', '1', 94);
INSERT INTO `t_isi_survei` VALUES ('P0620004', '111', '321412521', '3', 95);
INSERT INTO `t_isi_survei` VALUES ('P0620005', '111', '321412521', '5', 96);
INSERT INTO `t_isi_survei` VALUES ('P0620006', '111', '321412521', '1', 97);
INSERT INTO `t_isi_survei` VALUES ('P0620007', '111', '321412521', '3', 98);
INSERT INTO `t_isi_survei` VALUES ('P0620008', '111', '321412521', '3', 99);
INSERT INTO `t_isi_survei` VALUES ('P0620009', '111', '321412521', '4', 100);
INSERT INTO `t_isi_survei` VALUES ('P0620010', '111', '321412521', '2', 101);
INSERT INTO `t_isi_survei` VALUES ('P0620011', '111', '321412521', '1', 102);
INSERT INTO `t_isi_survei` VALUES ('P0620012', '111', '321412521', '2', 103);
INSERT INTO `t_isi_survei` VALUES ('P0620013', '111', '321412521', '1', 104);
INSERT INTO `t_isi_survei` VALUES ('P0620014', '111', '321412521', '4', 105);
INSERT INTO `t_isi_survei` VALUES ('P0620015', '111', '321412521', '5', 106);
INSERT INTO `t_isi_survei` VALUES ('P0620016', '111', '321412521', '3', 107);
INSERT INTO `t_isi_survei` VALUES ('P0620017', '111', '321412521', '3', 108);
INSERT INTO `t_isi_survei` VALUES ('P0620018', '111', '321412521', '4', 109);
INSERT INTO `t_isi_survei` VALUES ('P0620019', '111', '321412521', '1', 110);
INSERT INTO `t_isi_survei` VALUES ('P0620020', '111', '321412521', '5', 111);
INSERT INTO `t_isi_survei` VALUES ('P0620021', '111', '321412521', '1', 112);
INSERT INTO `t_isi_survei` VALUES ('P0620022', '111', '321412521', '3', 113);

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_materi
-- ----------------------------
INSERT INTO `t_materi` VALUES ('B0620001', '321412521', '111', '1', '2020-06-15', 'baju3', 'disetujui', 'test4', 1);
INSERT INTO `t_materi` VALUES ('B0620001', '321412521', '111', '2', '2020-06-15', 'baju555', 'disetujui', 'te5555', 2);
INSERT INTO `t_materi` VALUES ('B0620002', '321412521', '111', '2', '2020-06-15', 'baju', 'disetujui', 'test', 3);
INSERT INTO `t_materi` VALUES ('B0620002', '321412521', '111', '1', '2020-06-15', 'baju', 'disetujui', 'test', 4);

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
INSERT INTO `t_mhsw` VALUES ('111', 'yoga2', 'saputra2', '08976354952', 'cimahi2', 'perempuan', 2013, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('112', 'yoga3', 'saputra3', '8976354953', 'cimahi3', 'perempuan', 2014, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('113', 'yoga4', 'saputra4', '8976354954', 'cimahi4', 'perempuan', 2015, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('114', 'yoga5', 'saputra5', '8976354955', 'cimahi5', 'perempuan', 2016, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('115', 'yoga6', 'saputra6', '8976354956', 'cimahi6', 'perempuan', 2017, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('116', 'yoga7', 'saputra7', '8976354957', 'cimahi7', 'perempuan', 2018, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('117', 'yoga8', 'saputra8', '8976354958', 'cimahi8', 'perempuan', 2019, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('118', 'yoga9', 'saputra9', '8976354959', 'cimahi9', 'perempuan', 2020, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('119', 'yoga10', 'saputra10', '8976354960', 'cimahi10', 'perempuan', 2021, 'mhsw');
INSERT INTO `t_mhsw` VALUES ('120', 'yoga11', 'saputra11', '8976354961', 'cimahi11', 'perempuan', 2022, 'mhsw');

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 70 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_presepsi
-- ----------------------------
INSERT INTO `t_presepsi` VALUES ('P0620001', 1, 0, 0, 0, 0, 47, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620002', 0, 2, 0, 0, 0, 48, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620003', 1, 0, 0, 0, 0, 49, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620004', 0, 0, 3, 0, 0, 50, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620005', 0, 0, 0, 0, 5, 51, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620006', 1, 0, 0, 0, 0, 52, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620007', 0, 0, 3, 0, 0, 53, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620008', 0, 0, 3, 0, 0, 54, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620009', 0, 0, 0, 4, 0, 55, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620010', 0, 2, 0, 0, 0, 56, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620011', 1, 0, 0, 0, 0, 57, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620012', 0, 2, 0, 0, 0, 58, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620013', 1, 0, 0, 0, 0, 59, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620014', 0, 0, 0, 4, 0, 60, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620015', 0, 0, 0, 0, 5, 61, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620016', 0, 0, 3, 0, 0, 62, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620017', 0, 0, 3, 0, 0, 63, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620018', 0, 0, 0, 4, 0, 64, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620019', 1, 0, 0, 0, 0, 65, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620020', 0, 0, 0, 0, 5, 66, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620021', 1, 0, 0, 0, 0, 67, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620022', 0, 0, 3, 0, 0, 68, '111', '321412521');
INSERT INTO `t_presepsi` VALUES ('P0620001', 1, 0, 0, 0, 0, 69, '112', '32141521');
INSERT INTO `t_presepsi` VALUES ('P0620001', 1, 0, 0, 0, 0, 70, '112', '321412521');

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
INSERT INTO `t_user` VALUES ('111', '1112', 'mhsw', 'mhsw');
INSERT INTO `t_user` VALUES ('321321312', 'irma', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('321412521', 'qwe', 'dsn', 'pembimbing');
INSERT INTO `t_user` VALUES ('3421', '123', 'dsn', 'kajur');
INSERT INTO `t_user` VALUES ('koor', 'koor', 'dsn', 'koordinator');
INSERT INTO `t_user` VALUES ('tu', 'tu', 'tu', 'tu');

-- ----------------------------
-- View structure for bobot2
-- ----------------------------
DROP VIEW IF EXISTS `bobot2`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `bobot2` AS select kategori, sum(t_nilai_harapan.tidakpuas*1)+sum(t_nilai_harapan.kurangpuas*2)+sum(t_nilai_harapan.cukuppuas*3)+sum(puas*4)+sum(sangatpuas*5) as b  from t_nilai_harapan  GROUP BY t_nilai_harapan.kategori ;

-- ----------------------------
-- View structure for gap
-- ----------------------------
DROP VIEW IF EXISTS `gap`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `gap` AS select t_presepsi.id_survei,t_survei.kategori,count(nim) as mhs, sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp) as bobot1, (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim) as rata1,bobot2.b as bobot2, b/count(nim) as rata2 , (sum(tp)+sum(kp)+sum(cp)+sum(p)+sum(sp))/count(nim)-  b/count(nim) as hasil, t_presepsi.nid,t_presepsi.nim from t_presepsi left join t_survei on t_survei.id_survei = t_presepsi.id_survei left join bobot2 on bobot2.kategori = t_survei.kategori   GROUP BY nid,t_presepsi.id_survei ;

SET FOREIGN_KEY_CHECKS = 1;
