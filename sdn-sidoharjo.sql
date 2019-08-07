-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 11. Desember 2015 jam 11:26
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sd`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_category`
-- 

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL auto_increment,
  `category_title` varchar(100) NOT NULL,
  `category_slug` varchar(200) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data untuk tabel `tbl_category`
-- 

INSERT INTO `tbl_category` VALUES (1, 'News', 'news');
INSERT INTO `tbl_category` VALUES (6, 'Career', 'career');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_download`
-- 

CREATE TABLE `tbl_download` (
  `download_id` int(11) NOT NULL auto_increment,
  `download_title` varchar(100) NOT NULL,
  `download_file` varchar(100) NOT NULL,
  `download_date` datetime NOT NULL,
  PRIMARY KEY  (`download_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `tbl_download`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_event`
-- 

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL auto_increment,
  `event_title` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_isi` text NOT NULL,
  `event_slug` varchar(255) NOT NULL,
  PRIMARY KEY  (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data untuk tabel `tbl_event`
-- 

INSERT INTO `tbl_event` VALUES (1, 'PEMBENTUKAN TEAM ADIWIYATA SDN SIDOHARJO 1 LAMONGAN', '2015-09-22', '<p><strong><img alt="" src="/assets/a/plugins/media/upload/images/ADIWIYATA.jpg" style="height:345px; width:490px" /></strong></p>\n\n<p><strong>Pembentukan team Adiwiyata SDN SIDOHARJO 1 Lamongan. </strong></p>\n\n<p>&nbsp;</p>\n', 'pembentukan-team-adiwiyata-sdn-sidoharjo-1-lamongan');
INSERT INTO `tbl_event` VALUES (2, 'Event Pangkatrejo Carnival', '2015-08-23', '<p><img alt="" src="/assets/a/plugins/media/upload/images/Untitled-1.jpg" style="height:252px; width:323px" /></p>\n\n<p>GROUP DRUM BAND GEMA MAHARDIKA SDN Sidoharjo 1 Lamongan saat mengikuti Event di Kelurahan Pangkat Rejo</p>\n\n<p>Warga antusias atas kehadiran GROUP DRUM BAND SDN Sidoharjo 1 Lamongan</p>\n\n<p>&nbsp;</p>\n', 'event-pangkatrejo-carnival');
INSERT INTO `tbl_event` VALUES (3, 'PRAMUKA SDN SIDOHARJO I LAMONGAN Dalam Rangka HAORNAS', '2015-10-16', '<p>SDN SIDOHARJO 1 LAMONGAN Akan mengikuti Lomba Pramuka Dalam Rangka HAORNAS (Hari Olah raga Nasional ) Siswa Yang mengikuti Pramuka Terdiri dari siswa kls 4,5 dan 6, kecuali yang mengikuti Kegitan Drum Band. Siswa Terseleksi Dalam Latihan Yang dilakukan Selama 1 Bulan Saja.. Terdiri Dari Putra 10 Orang Putri 10 Orang ..</p>\n', 'pramuka-sdn-sidoharjo-i-lamongan-dalam-rangka-haornas');
INSERT INTO `tbl_event` VALUES (4, 'Drum Band Dalam Rangka Sumpah Pemuda ( Piala Gubernur ) ', '2015-10-25', '<p><img alt="" src="/assets/a/plugins/media/upload/images/DSC04884.jpg" style="height:300px; width:400px" /></p>\n\n<p>PERSONIL DRUM BAND SDN SIDOHARJO I LAMONGAN Siap Mengikuti HAORNAS di Surabaya 25 Oktober 2015</p>\n', 'drum-band-dalam-rangka-sumpah-pemuda-piala-gubernur');
INSERT INTO `tbl_event` VALUES (5, 'Perpisahan Hj.Kastin Dwi Sampurnawati', '2015-10-03', '<p><img alt="" src="/assets/a/plugins/media/upload/images/Perpisahan-2.jpg" style="height:347px; width:518px" /></p>\n\n<p>Acara Perpisahan Kepala Sekolah Hj.Kastin Dwi Sampurnawati, S.Pd, Dalam Masa baktinya di SDN Sidoharjo 1 Lamongan Banyak memberikan perubahan Pada SDN Sidoharjo 1 Lamongan dari dulu yang secara finansial sangat berantakan sekarag sudah maju dan berkembang pesat dan juga memberi kekompakan pada bapak ibu guru dan paguyuban kelas</p>\n', 'perpisahan-hjkastin-dwi-sampurnawati');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_gallery`
-- 

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL auto_increment,
  `gallery_album_id` int(11) NOT NULL,
  `gallery_data` varchar(255) NOT NULL,
  `gallery_type` enum('photo','video') NOT NULL,
  PRIMARY KEY  (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

-- 
-- Dumping data untuk tabel `tbl_gallery`
-- 

INSERT INTO `tbl_gallery` VALUES (18, 2, 'DSC03283.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (19, 2, 'DSC03287.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (20, 2, 'DSC03291.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (21, 2, 'DSC03298.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (22, 2, 'DSC03307.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (23, 2, 'DSC03337.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (24, 2, 'DSC03368.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (25, 2, 'DSC01272.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (26, 2, 'DSC01273.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (27, 2, 'DSC01267.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (28, 2, 'DSC01242.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (29, 1, 'DSC03496.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (30, 1, 'DSC03481.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (31, 1, 'DSC03503.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (32, 1, 'DSC00223.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (33, 1, 'DSC00179.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (34, 1, 'DSC00193.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (35, 3, '1_(1).JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (36, 3, '1_(2).JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (37, 3, '1_(3).JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (38, 3, '1_(4).JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (39, 3, '1.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (40, 3, 'DSC03026.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (42, 4, '1_(2).jpg', 'photo');
INSERT INTO `tbl_gallery` VALUES (43, 4, '1_(3)1.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (44, 4, '1_(4)1.JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (45, 4, '1_(5).JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (46, 4, '1_(6).JPG', 'photo');
INSERT INTO `tbl_gallery` VALUES (47, 1, 'pembelajran-kelas.jpg', 'photo');
INSERT INTO `tbl_gallery` VALUES (48, 1, 'kegiatan-sekolah.jpg', 'photo');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_gallery_album`
-- 

CREATE TABLE `tbl_gallery_album` (
  `gallery_album_id` int(11) NOT NULL auto_increment,
  `gallery_album_image` varchar(100) NOT NULL,
  `gallery_album_title` varchar(100) NOT NULL,
  `gallery_album_desc` varchar(255) NOT NULL,
  `gallery_album_slug` varchar(255) NOT NULL,
  PRIMARY KEY  (`gallery_album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data untuk tabel `tbl_gallery_album`
-- 

INSERT INTO `tbl_gallery_album` VALUES (1, '/assets/a/plugins/media/upload/images/hari-raya-qurban.jpg', 'Kegiatan Sekolah', 'SD Negeri Sidoharjo 1 Lamongan tidak hanya memiliki kegiatan akademik dan non akademik, di sekolah ini juga terdapat berbagai macam kegiatan yang dapat menumbuh kembangkan potensi anak yang patut untuk diikuti', 'kegiatan-sekolah');
INSERT INTO `tbl_gallery_album` VALUES (2, '/assets/a/plugins/media/upload/images/slide/galery.jpg', 'Kegiatan Ekstrakurikuler', 'Kegiatan Ekstrakurikuler di SD Negeri Sidoharjo 1 Lamongan terbilang cukup banya dan memiliki prestasi yang dapat dibanggakan. Ekskul yang dinaungi oleh pihak sekolah diantaranya Drum Band, Pramuka dan TPQ', 'kegiatan-ekstrakurikuler');
INSERT INTO `tbl_gallery_album` VALUES (3, '/assets/a/plugins/media/upload/images/slide/galery.jpg', 'Prestasi Siswa', 'SD Negeri Sidoharjo 1 Lamongan merupakan sekolah dasar yang senantiasa berusaha untuk menumbuh kembangkan bakat, minat dan prestasi siswa didiknya. Banyak prestasi yang telah diraih oleh siswa siswi yang patut untuk dibanggakan.', 'prestasi-siswa');
INSERT INTO `tbl_gallery_album` VALUES (4, '/assets/a/plugins/media/upload/images/slide/galery.jpg', 'Sarana dan Prasarana', 'Sarana dan prasarana merupakan salah satu komponen yang selalu ditingkatkan oleh pihak tim pengembang SD Negeri Sidoharjo 1 Lamongan. Pihak sekolah berpendapat sarana dan prasarana merupakan komponen yang dapat membuat siswa siswi menjadi semangat untuk b', 'sarana-dan-prasarana');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_menu`
-- 

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL auto_increment,
  `menu_title` varchar(25) NOT NULL,
  `menu_link` varchar(255) NOT NULL,
  PRIMARY KEY  (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data untuk tabel `tbl_menu`
-- 

INSERT INTO `tbl_menu` VALUES (4, 'Profile', 'http://sdnsidoharjo1lamongan.sch.id/page/4/tentang-sekolah');
INSERT INTO `tbl_menu` VALUES (5, 'Galery', 'http://sdnsidoharjo1lamongan.sch.id/gallery');
INSERT INTO `tbl_menu` VALUES (6, 'Ekstra', 'http://sdnsidoharjo1lamongan.sch.id/page/5/ekstra');
INSERT INTO `tbl_menu` VALUES (7, 'Prestasi', 'http://sdnsidoharjo1lamongan.sch.id/page/6/prestasi');
INSERT INTO `tbl_menu` VALUES (8, 'Contact Us', 'http://sdnsidoharjo1lamongan.sch.id/page/3/contact-map');
INSERT INTO `tbl_menu` VALUES (9, 'Testimoni', 'http://sdnsidoharjo1lamongan.sch.id/web/testimoni');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_page`
-- 

CREATE TABLE `tbl_page` (
  `page_id` int(11) NOT NULL auto_increment,
  `page_title` varchar(200) NOT NULL,
  `page_isi` text NOT NULL,
  `page_image` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  PRIMARY KEY  (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data untuk tabel `tbl_page`
-- 

INSERT INTO `tbl_page` VALUES (3, 'Contact & Map', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d718.2576565306972!2d112.4163436877485!3d-7.129253011387569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1440309398895" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>', '', 'contact-map');
INSERT INTO `tbl_page` VALUES (4, 'Tentang Sekolah', '<style>\n.informasi{\n	width: 80%;\n	padding: 10px;\n	background-color:white;\n	border-style:solid;\n	border-width:0px;\n	border-color:none;\n	border-left-width:4px;\n	border-left-color:#1479ee;\n}\nh4{\n	font-size:26px;\n	color:#1479ee;\n}\n\nul li{\n	list-style-type : none;\n	position:left;\n	\n}\na:link {\n    text-decoration: none;\n}\n\na:visited {\n    text-decoration: none;\n}\n\na:hover {\n    text-decoration: none;\n}\n\na:active {\n    text-decoration: none;\n}\n</style>\n<div class="container">\n<div class="row">\n		<ul class="informasi">\n			<li class="keterangan"><h4><a href="http://sdnsidoharjo1lamongan.sch.id/page/7/sekapur-sirih">Selayang Pandang SD Negeri 1 Sidoharjo Lamongan</a><h4></li>\n			<li>Sekapur Sirih SD Negeri 1 Sidoharjo Lamongan</li>\n		</ul>\n	</div>\n	<div class="row">\n		<ul class="informasi">\n			<li class="keterangan"><h4><a href="http://sdnsidoharjo1lamongan.sch.id/page/8/struktur-organisasi">Struktur Organisasi</a><h4></li>\n			<li>Struktur Organisasi SD Negeri 1 Sidoharjo Lamongan Periode 2015/2016</li>\n		</ul>\n	</div>\n	<div class="row">\n		<ul class="informasi">\n			<li class="keterangan"><h4><a href="http://sdnsidoharjo1lamongan.sch.id/page/9/guru-dan-karyawan">Data Guru dan Karyawan</a><h4></li>\n			<li>Data Guru dan Karyawan SD Negeri Sidoharjo 1 Lamongan Periode 2015/2016</li>\n		</ul>\n	</div>\n</div>', '/assets/a/plugins/media/upload/images/02.png', 'tentang-sekolah');
INSERT INTO `tbl_page` VALUES (5, 'Ekstra', '<ul>\n	<li>\n	<h4><a href="http://sdnsidoharjo1lamongan.sch.id/page/10/ekskul-drumband">Ekstra Kurikuler Drumband</a></h4>\n\n	<h4>&nbsp;</h4>\n	</li>\n	<li>Ekstra Durmband SD Negeri&nbsp; Sidoharjo 1 Lamongan</li>\n</ul>\n\n<ul>\n	<li>\n	<h4><a href="http://sdnsidoharjo1lamongan.sch.id/page/11/ekskul-tpq">Ekstra Kurikuler TPQ</a></h4>\n\n	<h4>&nbsp;</h4>\n	</li>\n	<li>Ekstra TPQ SD Negeri&nbsp; Sidoharjo 1 Lamongan</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>\n	<h4><a href="http://sdnsidoharjo1lamongan.sch.id/page/12/ekstra-pramuka">Ekstra Pramuka</a></h4>\n	</li>\n	<li>Ekstra Pramuka SD Negeri&nbsp; Sidoharjo 1 Lamongan</li>\n</ul>\n', '', 'ekstra');
INSERT INTO `tbl_page` VALUES (6, 'Prestasi', '<p>Prestasi</p>\n', '', 'prestasi');
INSERT INTO `tbl_page` VALUES (7, 'Sekapur sirih', '<h4>Sekapur Sirih<br/>SD Negeri Sidoharjo 1 Lamongan</h4>\n\n\n<hr />\n<p>SD Negeri Sidoharjo 1 Lamongan dibangun pada 15 Februari 1965. Terletak di jalan sumargo No. 06 Lamongan, kelurahan Sidoharjo. SD Negeri Sidoharjo berbatasan dengan di sebelah timu perumahan lapas, sebelah barat kantor Dinas Perikanan, sebelah utara (depan) kantor Lapas. Memiliki luas lahan dengan bangunan berbentuk U yang mengalami pegembangan bangunan keselatan, diatas tanah yang luasnya sekitar 2275 m2. Bangunan sekolah mayoritas berwarna hijau, berkeramik, dan memiliki banyak pepohonan hijau yang membuat ruang dan kesejukan di siang hari.</p>\n\n<p>Berawal dari sekilar tahun 1970-an SD yang bangunannya masih berdinding sengah badan papan dan ram-raman dari besi, disekitarnya banyak pohon cemara yang menjulang tinggi serta setiap musim penghujan sering di landa banjir, tetap berdiri kokoh. Dengan semangat, kemauan dan kemampuan yang ada, setahap demi setahap, mengikuti perkembangan zaman, SDN Sidoharjo 1 Lamongan dapat bangkit dan diakui oleh masyarakat lamongan dan tidak lagi tersisihkan. Mulai dari dewan guru yang berkompeten, segala ekstrakurikuler pemenang lomba siswa baik akademik maupun non akademik sekaligus banyak meraih keuaraan dari tingkat kecamatan, kabupaten, provinsi, maupun nasional. Tambah tahun jumlah siswa semakin meningkat.</p>\n\n<p>Alhamdulillah pada tahun pelajaran 2015/2016 SD Negeri Sidoharjo 1 Lamongan telah begitu banyak piala, penghargaan maupun medali emas yang dapat ditunjukkan ke masyarakat luas. Dilihat dari segala segi SD Negeri Sidoharjo 1 Lamongan mampu bersaing dengan lembaga setingkatnya terutama dikabupaten lamongan. Hal ini juga tidak kalah pentingnya dukungan dari masyarakat, komite, stake holder, pejabat kalangan pendidikan dan semua pihak demi terwujudnya sekolah favorit dan yang diunggulkan. Semoga hari esok lebih maju, selalu eksis dan semakin jaya.</p>\n\n<p>Amin.....</p>\n', '/assets/a/plugins/media/upload/images/slide/slide(1).jpg', 'sekapur-sirih');
INSERT INTO `tbl_page` VALUES (8, 'Struktur Organisasi', '<p>Sekapur sirih SD Negeri Sidoharjo 1 Lamongan</p>\n', '', 'struktur-organisasi');
INSERT INTO `tbl_page` VALUES (9, 'Guru dan Karyawan', '\n<h4>Data Guru dan Karyawan Periode 2015/2016</h4>\n<hr/>\n<table class="table table-bordered">\n		  <th class="active">Nama Pejabat</th>\n		  <th class="active">Jabatan</th>\n		  <th class="active">Tahun Jabatan</th>\n		<tr>\n		  <td>Hj. Ninik Iswati, M.Pd</td>\n		  <td>Plt. Kepala Sekolah</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Depi Suryawati</td>\n		  <td>Petugas Perpus</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Didik Agus Purnomo</td>\n		  <td>Penjaga Sekolah</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Siti Azizah, S.Pd</td>\n		  <td>Guru Kelas 1A</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Titik Lestari, S.Pd.SD</td>\n		  <td>Guru Kelas 1B</td>\n		  <td>2015</td>\n		</tr>\n		</tr>\n		<tr>\n		  <td>Anan Munhidlatul U, S.Pd</td>\n		  <td>Guru Kelas 2A</td>\n		  <td>2015</td>\n		</tr>\n		</tr>\n		<tr>\n		  <td>Purwati, S.Pd.SD</td>\n		  <td>Guru Kelas 2B</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Evy Dwi W, S.Pd.SD</td>\n		  <td>Guru Kelas 4B</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Lu''lul''in Nafisah, S.Pd.SD</td>\n		  <td>Guru Kelas 3B</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Anik Sri Wahyuni, S.Pd</td>\n		  <td>Guru Kelas 4B</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Ivan Budi Wirawan, SE</td>\n		  <td>Guru Kelas 3C</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Kaseno</td>\n		  <td>Guru Kelas 6A</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Endang Priyantini, S.Pd.SD</td>\n		  <td>Guru Kelas 6B</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Suparman, S.Pd</td>\n		  <td>Guru Kelas 5A</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Tri Wulandari, S.Pd.SD</td>\n		  <td>Guru Kelas 5B</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Djakfar Majruf Arjono, S.Pd</td>\n		  <td>Guru Kelas 3A</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Mukarromah, S.Pd.I</td>\n		  <td>Guru PAI</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Mufarokhah, S.Ag</td>\n		  <td>Guru PAI</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Fatih Syahrial A, S.Pd</td>\n		  <td>Guru PJOK</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Dian Dwi Alifatul Faizah</td>\n		  <td>Guru Bahasa Arab</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Niswatun Hasanah, S.Pd.I</td>\n		  <td>Guru Bahasa Arab</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Achmad Chalimi, S.Pd.i</td>\n		  <td>Guru Bahasa Arab</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Evi Maulidyah, S.Pd</td>\n		  <td>Guru Bahasa Inggris</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Ilman Rizza Afandi, A.Ma</td>\n		  <td>Staff Tata Usaha</td>\n		  <td>2015</td>\n		</tr>\n	</table>\n\n<h4>Data Guru Ekstra Kurikuler Periode 2015/2016</h4>\n<hr/>\n<table class="table table-bordered">\n		  <th class="active">Nama Pejabat</th>\n		  <th class="active">Jabatan</th>\n		  <th class="active">Tahun Jabatan</th>\n		<tr>\n		  <td>Evy Dwi W,S.Pd.SD</td>\n		  <td>\n		  Guru Ekstra Kurikuler :<br/>\n		  <ul>\n			<li>Seni Tari</li>\n			<li>Seni Angklung</li>\n			<li>Seni Suara</li>\n			<li>Pantomin</li>\n			<li>Karawitan</li>\n		  </ul>\n		  </td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Endang Priyantini, S.Pd.SD</td>\n		  <td>Guru Ekstra Kurikuler Teater/Puisi</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Fatih Syahrial A, S.Pd</td>\n		  <td>\n		  Guru Ekstra Kuriluer :<br/>\n		  <ul>\n			<li>Atletik</li>\n			<li>Drum Band</li>\n			<li>TPQ</li>\n		  </ul>\n		  </td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Ivan Budi Wirawan,SE</td>\n		  <td>\n		  Guru Ekstra Kuriluer :<br/>\n		  <ul>\n			<li>Bahasa Mandarin</li>\n			<li>Komputer</li>\n		  </ul>\n		  </td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Siti Azzizah, S.Pd</td>\n		  <td>Guru Ekstra Kurikuler Pramuka</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Purwati, S.Pd.SD</td>\n		  <td>Guru Ekstra Kurikuler Pramuka</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Ana Munhidlatul U, S.Pd</td>\n		  <td>\n		  Guru Ekstra Kuriluer :<br/>\n		  <ul>\n			<li>TPQ</li>\n			<li>Komputer</li>\n		  </ul>\n		  </td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>Purwanto</td>\n		  <td>Guru Ekstra Kurikuler Seni Tari</td>\n		  <td>2015</td>\n		</tr>\n		<tr>\n		  <td>\n			Achmad Chalimi, S.Pd.I<br/>\n			Dian Dwi Alifatul Faizah<br/>\n			Niswatun Hasanah, S.Pd.i\n		  </td>\n		  <td>Guru Ekstra Kurikuler TPQ</td>\n		  <td>2015</td>\n		</tr>\n	</table>', '', 'guru-dan-karyawan');
INSERT INTO `tbl_page` VALUES (10, 'Ekskul drumband', '<p>&nbsp;</p>\n\n<h4>Ekstra Kurikuler Drumband</h4>\n\n<hr />\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>\n', '/assets/a/plugins/media/upload/images/slide/slide1.jpg', 'ekskul-drumband');
INSERT INTO `tbl_page` VALUES (11, 'Ekskul TPQ', '<h4>Ekstra Kurikuler TPQ</h4>\n<hr/>\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>\n', '/assets/a/plugins/media/upload/images/slide/slide1(1).jpg', 'ekskul-tpq');
INSERT INTO `tbl_page` VALUES (12, 'Ekstra Pramuka', '<p>Ekstra Pramuka</p>\n\n<ul>\n	<li><strong>Pramuka</strong> adalah singkatan dari Praja Muda Karana, yang artinya orang-orang berjiwa muda dan suka berkarya. Kata berjiwa muda disini merupakan ukuran semangat untuk maju.</li>\n	<li><strong>Kepramukaan</strong> adalah nama kegiatan yang ada di dalam pramuka itu sendiri, kegiatan yang dimaksudkan disini adalah kegiatan yang menarik dan mengandung pendidikan. Ada banyak sekali kegiatan yang ada di Pramuka (Akan di bahas pada Postingan berikutnya)</li>\n	<li><strong>Gerakan Pramuka</strong> adalah wadah atau organisasi tempat pramuka itu berkumpul dan menyelesaikan masalah secara bersama. tingkatan organisasi ini misalnya seperi Gerakan Pramuka Kwartir Daerah, Gugus depan dan lain sebagainya (lebih rinci akan khusus di bahas pada struktur organisasi Gerakan Pramuka)&nbsp;</li>\n</ul>\n', '/assets/a/plugins/media/upload/images/gagaga.jpg', 'ekstra-pramuka');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_posts`
-- 

CREATE TABLE `tbl_posts` (
  `posts_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `posts_judul` varchar(255) NOT NULL,
  `posts_isi` text NOT NULL,
  `posts_image` varchar(255) NOT NULL,
  `posts_date` date NOT NULL,
  `posts_time` time NOT NULL,
  `posts_slug` varchar(255) NOT NULL,
  `posts_status` int(11) NOT NULL,
  PRIMARY KEY  (`posts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41440 ;

-- 
-- Dumping data untuk tabel `tbl_posts`
-- 

INSERT INTO `tbl_posts` VALUES (41423, 1, 1, 'Pembelajaran Kelas 6', '<p><img alt="" src="/assets/a/plugins/media/upload/images/pembelajran-kelas.jpg" style="height:389px; width:518px" /></p>\n\n<p>Sistem Pembelajaran Kelas 6 Mata Pelajaran IPS</p>\n', '/assets/a/plugins/media/upload/images/pembelajran-kelas.jpg', '2015-10-06', '08:44:06', 'pembelajaran-kelas-6', 1);
INSERT INTO `tbl_posts` VALUES (41431, 1, 3, 'F Menhub Jonan Ungkap Pesawat AirAsia QZ8501 Alami "Stall"', '<p>Menteri Perhubungan Ignasius Jonan memberikan penjelasan mengenai jatuhnya pesawat AirAsia QZ8501 di Selat Karimata, perairan dekat Pangkalan Bun, Kalimantan Tengah, pada 28 Desember 2014 silam. Menurut Jonan, seperti dilansir dari AFP, pesawat itu berusaha untuk meningkatkan ketinggian dengan kecepatan cukup tinggi, yang melebihi kecepatan normal.</p>\n\n<p>&quot;Di menit terakhir, pesawat naik dengan kecepatan di atas normal,&quot; kata Jonan, di Jakarta, Selasa (20/1/2015), mengutip data radar.</p>\n\n<p>&quot;Pesawat kemudian naik dengan kecepatan di atas batas normal kemampuan pesawat, kemudian mengalami stall,&quot; kata Jonan.</p>\n\n<p>Sebelumnya, tim SAR gabungan yang dipimpin Badan SAR Nasional sudah menemukan kotak hitam pesawat AirAsia di kedalaman Selat Karimata. Kotak hitam itu berisi perekam data penerbangan (flight data recorder) dan perekam suara kokpit (cockpit voice recorder) yang akan digunakan untuk menyelidiki penyebab jatuhnya pesawat.</p>\n\n<p>Saat ini, kotak hitam masih berada di Komite Nasional Keselamatan Transportasi yang masih mengunduh data awal. Menurut Kepala KNKT Tatang Kurniadi, petugasnya membutuhkan waktu lama untuk mengunduh data awal. Hingga saat ini, tim SAR gabungan sudah menemukan 53 jenazah dari pesawat AirASia QZ8501.</p>\n\n<p>Pesawat AirAsia tersebut mengangkut 162 orang termasuk penumpang dan awak pesawat yang berangkat dari Bandara Juanda, Surabaya, dengan tujuan Bandara Changi, Singapura.</p>\n', '', '2015-01-21', '01:11:00', 'menhub-jonan-ungkap-pesawat-airasia-qz8501-alami-stall', 1);
INSERT INTO `tbl_posts` VALUES (41436, 1, 7, 'Sudah 25 Tahun Photoshop Memanipulasi Foto', '<p>Adobe Photoshop menandai hari jadinya yang ke-25 pada Kamis, 19 Februari 2015. Ini sekaligus mengingatkan kita bahwa telah 25 tahun manusia mampu memanipulasi hasil fotografi melalui komputer.&nbsp;<br />\r\n<br />\r\nKonsep &quot;memanipulasi&quot; yang ditawarkan Photoshop tersebut nyatanya telah menjadi peradaban baru saat ini. Melalui berbagai aplikasi yang menjamur, manusia dapat mengedit sebuah gambar sedemikian rupa.&nbsp;<br />\r\n<br />\r\nMedia sosial seperti Instagram dan Path pun menawarkan pengeditan foto sederhana melalui aneka filter. Kini, rasanya seperti sayur tanpa garam jika foto yang dibidik tak diedit terlebih dahulu sebelum dipamerkan untuk umum.&nbsp;</p>\r\n', '', '2015-02-20', '14:44:11', 'sudah-25-tahun-photoshop-memanipulasi-foto', 1);
INSERT INTO `tbl_posts` VALUES (41437, 1, 1, 'GOUP DRUM BAND GEMA MAHARDIKA SDN Sidoharjo 1 Lamongan Event Hari Sumpah Pemuda', '<p><img alt="" src="/assets/a/plugins/media/upload/images/DSC04884.jpg" style="height:388px; width:517px" /></p>\n\n<p>Group Drum Band GEMA MAHARDIKA SDN Sidoharjo 1 Lamongan Akan mengikuti Lomba DI Surabaya dalam Rangka HARI Sumpah Pemuda, Persiapan di lakukan mulai dari latihan dan kostum dll</p>\n', '/assets/a/plugins/media/upload/images/DSC04884.jpg', '2015-10-06', '08:45:35', 'goup-drum-band-gema-mahardika-sdn-sidoharjo-1-lamongan-event-hari-sumpah-pemuda', 1);
INSERT INTO `tbl_posts` VALUES (41438, 1, 0, 'Pramuka SDN Sidoharjo 1 Lamongan', '<p><img alt="" src="/assets/a/plugins/media/upload/images/enggrang-iii%281%29.jpg" style="height:388px; width:517px" /></p>\n\n<p>SDN Sidoharjo 1 Lamongan Kemarin pada tanggal 16, 17 dan 18 mengikuti pramuka dalam rangka (HAORNAS) HAri Olah Raga NASional dan mendapat juara 3 Lomba enggrang , kita bersyukur masih bisa mendapat piala meski cuman 1, kata salah satu Pembina Sdn Sidoharjo 1 Lamongan</p>\n', '/assets/a/plugins/media/upload/images/pramuka-haornas.jpg', '2015-10-19', '09:20:59', 'pramuka-sdn-sidoharjo-1-lamongan', 1);
INSERT INTO `tbl_posts` VALUES (41439, 1, 1, 'Pramuka SDN Sidoharjo 1 Lamongan Jeladri Asri', '<p><img alt="" src="/assets/a/plugins/media/upload/images/enggrang-iii(1).jpg" style="height:389px; width:518px" /></p>\n\n<p>Sdn Sidoharjo 1 Lamongan Mengikuti Kegiata Pramuka Dalam Rangka Haornas Pada tanggal 16,17 dan 18 oktober 2015, hasilnya SDN Sidoharjo 1 Lamongan Mendapat Juara 3 Lomba Eggrang Putra lomba eggrang ini di wakili oleh Muhammad Rif&#39;an Efendi Dari kelas 6B, meski Mendapat juara 3 kami bersyukur sudah mendapat 1 piala, kata salah satu pembina Pramuka SDN Sidoharjo 1 Lamongan.</p>\n', '/assets/a/plugins/media/upload/images/pramuka-haornas.jpg', '2015-10-19', '09:28:11', 'pramuka-sdn-sidoharjo-1-lamongan-jeladri-asri', 1);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_setting`
-- 

CREATE TABLE `tbl_setting` (
  `web_title` text NOT NULL,
  `web_description` text NOT NULL,
  `web_keyword` text NOT NULL,
  `web_image` varchar(255) NOT NULL,
  `google_seo` text NOT NULL,
  `web_id` int(1) NOT NULL,
  `footer` text NOT NULL,
  `custom_css` text NOT NULL,
  PRIMARY KEY  (`web_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data untuk tabel `tbl_setting`
-- 

INSERT INTO `tbl_setting` VALUES ('SDN SIDOHARJO I LAMONGAN', 'SD Negeri SIdoharjo 1 Lamongan Merupakan  salah satu sekolah dasar yang terdepan di Kab. Lamongan. SDN Sidoharjo 1 memiliki cukup banyak prestasi dibidang akademik dan non akademik, bertujuan untuk mencetak siswa siswi berprestasi dengan mengembangkan kualitas pendidikan dan sarana prasarana.', 'sd negeri sidoharjo lamongan , sd negeri lamongan, lamongan, sekolah dasar, sdn, sidoharjo 1', '/assets/a/plugins/media/upload/images/sdn.png', 'UA-67689494-1', 1, '<h3>SDN SIDOHARJO 1 </h3>\n<p>Jl. Sumargo No. 06 Lamongan<br>\nTelf. (0322) 314712 <br>Kode Pos 62217</p>	', '.carousel-caption {\n    padding-top: 0px;\n    padding-bottom: 0px;\n}\n.informasi{\n	width: 80%;\n	padding: 10px;\n	background-color:white;\n	border-style:solid;\n	border-width:0px;\n	border-color:none;\n	border-left-width:4px;\n	border-left-color:#1479ee;\n}\nh4{\n	font-size:26px;\n	color:#1479ee;\n}\na:link {\n    text-decoration: none;\n}\n\na:visited {\n    text-decoration: none;\n}\n\na:hover {\n    text-decoration: none;\n}\n\na:active {\n    text-decoration: none;\n}\n.isi{\nbackground-color:white;\n}\nth{\nbackground-color=#c1dde7;\n}\nul li{\n	list-style-type : none;\n	position:left;\n	\n}\n.materi{\npadding:40px;\n}');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_slide`
-- 

CREATE TABLE `tbl_slide` (
  `slide_id` int(11) NOT NULL auto_increment,
  `slide_title` varchar(100) NOT NULL,
  `slide_image` varchar(255) NOT NULL,
  `slide_link` varchar(255) NOT NULL,
  PRIMARY KEY  (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data untuk tabel `tbl_slide`
-- 

INSERT INTO `tbl_slide` VALUES (1, 'Gedung SD Negeri Sidoharjo 1 Lamongan', '/assets/a/plugins/media/upload/images/slide/slide(1).jpg', '#');
INSERT INTO `tbl_slide` VALUES (2, 'Ekstra Kulikuler Drum Band', '/assets/a/plugins/media/upload/images/slide/slide1.jpg', '#');
INSERT INTO `tbl_slide` VALUES (3, 'Prestasi Siswa', '/assets/a/plugins/media/upload/images/slide/slide2.jpg', '#');
INSERT INTO `tbl_slide` VALUES (4, 'Ruang Kelas dan Kantin', '/assets/a/plugins/media/upload/images/slide/slide3.jpg', '#');
INSERT INTO `tbl_slide` VALUES (5, 'Perpustakaan SD Negeri Sidoharjo 1 Lamongan', '/assets/a/plugins/media/upload/images/slide/slide4.jpg', '#');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_testimoni`
-- 

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL auto_increment,
  `testimoni_name` varchar(255) NOT NULL,
  `testimoni_isi` varchar(255) NOT NULL,
  `testimoni_date` datetime NOT NULL,
  PRIMARY KEY  (`testimoni_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data untuk tabel `tbl_testimoni`
-- 

INSERT INTO `tbl_testimoni` VALUES (9, 'Codekece', 'SD Negeri SIdohajo 1 Lamongan Merupakan salah satu sekolah dasar yang tedapar di Jl. Sumargo No. 06 Lamongan. SD Sidoharjo memiliki cukup banyak prestasi dibidang akademik dan non akademik, bertujuan untuk mencetak siswa siswi berprestasi dengan mengemban', '2015-09-16 13:29:04');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `tbl_user`
-- 

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_nama_depan` varchar(25) NOT NULL,
  `user_nama_belakan` varchar(25) NOT NULL,
  `user_login` varchar(25) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `tbl_user`
-- 

INSERT INTO `tbl_user` VALUES (1, 'SDN SIDOHARJO 1', 'LAMONGAN', 'sdnsidoharjo1', '1080263afdc297637808404f0b163225');
