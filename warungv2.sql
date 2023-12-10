-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 14.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warungv2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(8, 'cal1', '20231203083708.jpg'),
(10, 'cal3', '20231203102954.jpg'),
(14, 'coba', '20231204070721.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`) VALUES
(1, 'Yu zhong M5', '20231204052728.jpg', '2023-12-04'),
(4, 'Gacha Roger OPBR', '20231204053132.jpg', '2023-12-04'),
(5, 'Martis Epic Limited', '20231204123806.jpg', '2023-12-04'),
(6, 'Khufra Painted Skin', '20231204123817.jpg', '2023-12-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'Sejarah'),
(8, 'Bahasa Jawa'),
(10, 'Bahasa Inggris'),
(11, 'Bahasa Indonesia'),
(12, 'Matematika'),
(13, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `foto`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'CMS Pojan', '', '<p><span style=\"font-family: \'times new roman\', times, serif;\">Halooo, namaku <strong>Fauzan Anindwi Saputra</strong>. Saya biasa dipanggil Fauzan. Saya bersekolah di <strong>SMK N 2 Karanganyar</strong>, dengan jurusan <strong>Rekayasa Perangkat Lunak</strong></span></p>', 'https://instagram.com/fauzansaputra195/', 'https://facabook.com/Fauzan Saputra', 'fauzansaputra195@gmail.com', 'Palur Wetan Rt 01 Rw 07 Mojolaban Sukoharjo ', '085741599960');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(10, 'Pukis', '<p style=\"text-align: center;\"><strong>Opo sih Pukis Iku? Lan saking ngendi asale?</strong></p>\n<p>Pukis ya iku jajanan tradisional khas Indonesia. &nbsp;Didamel saking gandum. Ing proses damel kue pukis, ragi dibetahake supaya adonan saget ngembang kanthi sampurna.</p>\n<p>Kue pukis ngadahi warno sing khas, yaiku kuning ing sisih ndhuwur lan coklat ing sisih ngisor. Kue pukis niki ngadahi rasa manis lan gurih. Kangge nambahi rasa manis lan gurih, nginggil pukis biasane disiram ngangge kismis, keju, coklat, sukade, kacang utawa meses.</p>\n<p>Crita iki diwiwiti nalika jaman kolonial, masyarakat Sampang, Kebumen, diculik dening penjajah nalika jaman semono. Penjajah ngewajibake tiang sing diculik nyambut damel gawe kue pukis.</p>\n<p>Rikolo jaman semono, resep kue pukis mboten nate dicritakake marang sapa wae. Nanging, amargo wonten tiang ing antarane tiang sanes e angssl pitunjuk babagan bahan nopo kemawon sing dibetahake kangge ndamel pukis lan carane damel. Pungkasane, ana sing ngerti kabeh babagan nggawe pukis.</p>\n<p>Amarga bosen dijajah, tiang sing mangertos ndame pukis banjur mlayu saking papan penculikan lan bisa lolos. &nbsp;Mboten dangu sawise mlayu, banjur dheweke langsung latihan ndamel pukis dhewe. Akibate, jajan pukis iki dadi favorit lan misuwur ing saindhenging Indonesia.</p>', '20231203065132.jpg', 'Pukis', '8', '2023-12-03', 'pojan2'),
(11, 'Teori M-Series', '<p style=\"text-align: center;\"><strong>UPPER BRACKET</strong><br>onic vs btr -&gt; onic&nbsp;<br>onic vs geek -&gt; onic, geek turun LOWER BRACKET,&nbsp;<br>onic Grand Final</p>\r\n<p style=\"text-align: center;\"><strong>LOWER BRACKET</strong><br>rrq vs btr -&gt; rrq , btr OUT<br>rrq vs geek -&gt; rrq , geek OUT,&nbsp;<br>rrq Grand Final lawan Onic</p>\r\n<p style=\"text-align: center;\"><strong>RRQ &amp; ONIC OTEWE M5</strong><br>~~~~~~<br>pada ending nya &nbsp;malah<br><strong>GEEK &amp; ONIC OTEWE M5&nbsp;</strong><br><em>Wealah rek</em></p>', '20231203072009.jpg', 'Teori-M-Series', '13', '2023-12-03', 'pojan2'),
(12, 'Lapu-Lapu', '<p><em><strong>\"Pahlawan yang membela Kepulauan Vonetis dari pihak luar\"</strong></em></p>\n<p>Lapu-Lapu tinggal bersama orang Dorican lainnya di&nbsp;<a title=\"Kepulauan Vonetis\" href=\"https://mobile-legends.fandom.com/wiki/Vonetis_Islands\">Kepulauan Vonetis</a>&nbsp;, menjalani kehidupan di luar perselisihan duniawi.&nbsp;Namun kedatangan seorang panglima perang yang membelot dari&nbsp;<a title=\"Kekaisaran Moniyan\" href=\"https://mobile-legends.fandom.com/wiki/Moniyan_Empire\">Moniyan Empire</a>&nbsp;memecah keheningan ini membawa pembunuhan tanpa akhir.&nbsp;Lapu-Lapu mengumpulkan semua suku untuk melawan invasi panglima perang dan akhirnya menang, mengubah Kepulauan Vonetis menjadi surga kebebasan lagi.</p>\n<p><em><strong>\"LORE HERO\"</strong></em></p>\n<p>&nbsp;</p>\n<p><span>Dari atas puncak, Lapu-Lapu memandang ke bawah ke arah kobaran api perkemahan Moniyan yang berada di kaki gunung.&nbsp;Dia tidak pernah berpikir dia akan sekali lagi melangkah ke medan perang, tempat yang paling dia benci.&nbsp;Tapi dia tahu bahwa untuk melindungi hal yang paling penting, dia tidak bisa lagi melarikan diri.</span></p>\n<p><span>Pada awal pertengahan Era Perselisihan, suku Dorik datang ke Kepulauan Vonetis di sebelah tenggara daratan tempat mereka berkembang.</span></p>\n<p><span>Sama seperti ombak yang bergejolak yang merupakan keadaan normal laut, kepulauan yang sepi ini sama sekali tidak damai.&nbsp;Perlindungan laut dan gaya hidup terisolasi membuat Dorik melupakan sumpah yang dibuat oleh berbagai suku ratusan tahun sebelumnya untuk bergabung dan melawan angkatan laut Moniyan yang kuat dan selalu terjadi konflik antara suku besar dan kecil.</span></p>\n<p><span>Lapu-Lapu adalah pejuang paling terkenal di Kepulauan Vonetis.&nbsp;Ia dipekerjakan oleh berbagai suku dalam jangka waktu yang lama, berpindah antar pulau.&nbsp;Pertempuran tanpa akhir memberinya kelelahan, martabat, kehormatan, dan uang... Di medan perang, nyawa manusia tidak ada artinya.&nbsp;Jadi[,] apa nilai dari semua itu?&nbsp;Setelah berperang yang tak terhitung jumlahnya, dia kembali ke kampung halamannya dengan tubuh dan pikiran yang terluka.</span></p>\n<p><span>Lapu-Lapu menjalani kehidupan yang tenang di kampung halamannya seperti seorang pemburu biasa, bekerja saat matahari terbit dan beristirahat saat matahari terbenam.&nbsp;Namun kehidupan damai yang ia nanti-nantikan tidak bertahan lama.&nbsp;Beberapa panglima perang yang membelot dari Moniyan Empire mengarahkan perhatian mereka pada tanah bebas ini.&nbsp;Pasukan terlatih mendarat di Kepulauan Vonetis seperti gelombang pasang.&nbsp;Masyarakat Dorik yang tersebar tidak berdaya melawan, dan sebagian besar wilayah jatuh ke tangan musuh.</span></p>\n<p><span>Berbagai suku mengirimkan undangan ke Lapu-Lapu dengan harapan ia bisa bergabung dalam perkemahan mereka.&nbsp;Dia tidak mau lagi bekerja untuk kepentingan para pemimpin suku, tapi tidak mungkin dia bisa menjadi seorang kapitulator yang tercela, jadi dia menolak bujukan para pemimpin dan para Moniyan, dan hanya ingin tetap menjadi pemburu sederhana yang menjauhkan diri dari apa pun. perselisihan duniawi.</span></p>\n<p><span>Lapu-Lapu dan Moniyan membuat perjanjian non-agresi.&nbsp;Namun, di mata para Moniyan yang rakus, tidak ada netralitas dan semua yang ada di Kepulauan Vonetis adalah milik mereka.&nbsp;Tak lama kemudian, para Moniyan melanggar perjanjian dan menggeledah suku Lapu-Lapu saat dia keluar.</span></p>\n<p><span>Kehilangan yang memalukan itu hanya membawa air mata dari istri dan anak-anaknya serta rumah tangga yang hancur.&nbsp;Lapu-Lapu sangat marah.&nbsp;Dia hanya ingin melindungi segala sesuatu di sekitarnya.&nbsp;Jika Moniyan ingin membalas komprominya dengan pengkhianatan, dia akan membuat mereka melihat martabatnya yang tidak dapat diganggu gugat dalam bentuk darah mereka sendiri.</span></p>\n<p><span>Lapu-Lapu mengumpulkan para pemuda suku tersebut menjadi satu kesatuan dan memulai kampanye perlawanannya.&nbsp;Dia lebih akrab dengan kampung halamannya daripada siapa pun, dan tahu cara menyerang, bertarung, dan mundur di pegunungan dan hutan.&nbsp;Unit tersebut terus menyerang pangkalan Moniyan dan jalur suplai, datang dan pergi tanpa meninggalkan jejak, meninggalkan Moniyan dalam kebingungan dan kepanikan yang tiada henti.</span></p>\n<p><span>Ketika seorang panglima perang Moniyan mengetahui bahwa ini semua ulah Lapu-Lapu, para penyerbu keji itu mulai dengan sengaja menjarah desa-desa yang bersekutu dengan Lapu-Lapu.&nbsp;Mereka memperkuat pertahanan dan menyembunyikan perbekalan untuk memaksa Lapu-Lapu muncul.&nbsp;Desa-desa yang dulunya menyambut baik Lapu-Lapu kini sama sekali tidak dapat dikenali lagi di bawah pengaruh sepatu besi Moniyan.</span></p>\n<p><span>Lapu-Lapu yang patah hati memahami bahwa perang gerilya tidak akan cukup untuk meraih kemenangan akhir.&nbsp;Dorik ditakdirkan untuk menghadapi Kekaisaran Moniyan yang perkasa secara langsung;&nbsp;tanpa diragukan lagi merupakan tugas yang mustahil baginya dan unitnya.</span></p>\n<p><span>Oleh karena itu, ia harus menyatukan seluruh kekuatan yang bisa disatukan.</span></p>\n<p><span>Lapu-Lapu merekrut semua Dorik yang memiliki kemauan untuk melawan, dan melatih mereka menjadi pejuang yang andal, tidak peduli apakah mereka laki-laki atau perempuan.&nbsp;Ini bukanlah sekelompok preman yang haus akan kekuasaan, melainkan pasukan pemberontak yang lahir untuk melindungi dan memperjuangkan diri mereka sendiri.&nbsp;Setiap orang memiliki keberanian dan hati nurani untuk mengabdikan diri pada tanahnya.&nbsp;Mereka berkumpul di sekitar Lapu-Lapu dan bertarung bersamanya.</span></p>\n<p><span>Setelah melalui banyak pertempuran yang sulit, pertarungan yang menentukan akhirnya tiba.&nbsp;Lapu-Lapu memikat musuh ke kaki gunung tempat banyak prajurit Dorik bersembunyi, dan menarik unitnya ke dalam gunung.&nbsp;Musuh mengetahui bahwa Lapu-Lapu pandai berperang di hutan, dan sisi lain gunung itu adalah tebing, jadi mereka memutuskan untuk menjaga satu-satunya jalan keluar gunung di bagian bawah.&nbsp;Suku Moniyan percaya bahwa para pemberontak yang &ldquo;terjebak dan putus asa&rdquo; harus keluar dari gunung dan melawan tentara secara langsung, atau mati kelaparan di dalam gunung.</span></p>\n<p><span>Namun di tengah malam saat para Moniyan sedang tidur nyenyak menunggu kemenangan, Lapu-Lapu memerintahkan prajuritnya untuk menuruni tebing menggunakan tali yang terbuat dari tanaman merambat gunung, dan melancarkan serangan mendadak ke arah Moniyan.&nbsp;Semua penghinaan dan kebencian yang menumpuk berbentuk pedang cepat para prajurit Dorik, yang ditumpahkan pada Moniyan yang tidak menaruh curiga.&nbsp;Sebelum panglima perang Moniyan yang menyedihkan itu sempat bereaksi, dia dipenggal oleh Lapu-Lapu.</span></p>\n<p><span>Setelah pertempuran ini, penjajah Moniyan, yang telah kehilangan pemimpinnya, tidak dapat pulih, dan kekuatan perlawanan yang meningkat di bawah kepemimpinan Lapu-Lapu mendorong mereka kembali ke daratan.&nbsp;Kepulauan Vonetis sekali lagi menjadi surga yang cerah dan bebas.</span></p>', '20231203092236.jpg', 'Lapu-Lapu', '13', '2023-12-03', 'pojan2'),
(13, 'Benteng Vredeburg', '<p><strong>Benteng Vredeburg</strong>&nbsp;(<a title=\"Bahasa Jawa\" href=\"https://id.wikipedia.org/wiki/Bahasa_Jawa\">Jawa</a>:&nbsp;<span lang=\"jv\">ꦩꦸꦱꦶꦪꦸꦩ꧀​ꦧꦺꦠꦺꦁ​ꦮ꦳ꦽꦢꦼꦧꦸꦂꦒ꧀</span>,&nbsp;<abbr title=\"transliterasi\">translit.</abbr>&nbsp;<em><span title=\"Jawa-language romanization\"><em lang=\"jv-Latn\">Musiyum B&egrave;t&egrave;ng Vredeburg</em></span></em>) adalah sebuah bangunan&nbsp;<a title=\"Kuil\" href=\"https://id.wikipedia.org/wiki/Kuil\">kuil</a>&nbsp;yang terletak di depan&nbsp;<a title=\"Gedung Agung\" href=\"https://id.wikipedia.org/wiki/Gedung_Agung\">Gedung Agung</a>&nbsp;dan&nbsp;<a title=\"Keraton Ngayogyakarta Hadiningrat\" href=\"https://id.wikipedia.org/wiki/Keraton_Ngayogyakarta_Hadiningrat\">Kraton</a>&nbsp;<a class=\"mw-redirect\" title=\"Kesultanan Yogyakarta\" href=\"https://id.wikipedia.org/wiki/Kesultanan_Yogyakarta\">Kesultanan Yogyakarta</a>. Sekarang, benteng ini menjadi sebuah&nbsp;<a title=\"Museum\" href=\"https://id.wikipedia.org/wiki/Museum\">museum</a>. Di sejumlah bangunan di dalam benteng ini terdapat&nbsp;<a title=\"Diorama\" href=\"https://id.wikipedia.org/wiki/Diorama\">diorama</a>&nbsp;mengenai&nbsp;<a title=\"Sejarah Indonesia\" href=\"https://id.wikipedia.org/wiki/Sejarah_Indonesia\">sejarah Indonesia</a>.</p>\r\n<p><span style=\"font-size: 12pt;\"><strong><span id=\"Arsitektur\" class=\"mw-headline\">ARSITEKTUR</span></strong></span></p>\r\n<p>Benteng ini dibangun sebagai pusat pemerintahan dan pertahanan residen&nbsp;<a title=\"Belanda\" href=\"https://id.wikipedia.org/wiki/Belanda\">Belanda</a>&nbsp;kala itu, dengan dikelilingi oleh sebuah&nbsp;<a title=\"Parit\" href=\"https://id.wikipedia.org/wiki/Parit\">parit</a>&nbsp;(<em>jagang</em>) yang sebagian bekas-bekasnya telah direkonstruksi dan dapat dilihat hingga sekarang. Benteng berbentuk persegi ini mempunyai&nbsp;<em>bastion</em>&nbsp;(menara pantau) di keempat sudutnya.</p>\r\n<p><strong>SEJARAH</strong></p>\r\n<p>Pendirian&nbsp;<a class=\"mw-redirect\" title=\"Benteng Vredeburg\" href=\"https://id.wikipedia.org/wiki/Benteng_Vredeburg\">Benteng Vredeburg</a>&nbsp;berkaitan erat dengan lahirnya Kasultanan Yogyakarta.&nbsp;<a title=\"Perjanjian Giyanti\" href=\"https://id.wikipedia.org/wiki/Perjanjian_Giyanti\">Perjanjian Giyanti</a>&nbsp;13 Februari 1755 yang berhasil menyelesaikan perseteruan antara&nbsp;<a title=\"Pakubuwana III\" href=\"https://id.wikipedia.org/wiki/Pakubuwana_III\">Susuhunan Pakubuwono III</a>&nbsp;dengan&nbsp;<a title=\"Pangeran Mangkubumi\" href=\"https://id.wikipedia.org/wiki/Pangeran_Mangkubumi\">Pangeran Mangkubumi</a>&nbsp;(Sultan Hamengku Buwono I kelak) merupakan hasil politik Belanda yang selalu ingin ikut campur urusan dalam negeri raja-raja&nbsp;<a title=\"Jawa\" href=\"https://id.wikipedia.org/wiki/Jawa\">Jawa</a>&nbsp;waktu itu.</p>\r\n<p>Melihat kemajuan yang sangat pesat akan kraton yang didirikan oleh&nbsp;<a title=\"Hamengkubuwana I\" href=\"https://id.wikipedia.org/wiki/Hamengkubuwana_I\">Sultan Hamengku Buwono I</a>, rasa kekhawatiran pihak Belanda mulai muncul. Pihak Belanda mengusulkan kepada sultan agar diizinkan membangun sebuah benteng di dekat kraton. Pembangunan tersebut dengan dalih agar Belanda dapat menjaga keamanan kraton dan sekitarnya. Akan tetapi dibalik dalih tersebut maksud Belanda yang sesungguhnya adalah untuk memudahkan dalam mengontrol segala perkembangan yang terjadi di dalam kraton. Letak benteng yang hanya satu jarak tembak meriam dari kraton dan lokasinya yang menghadap ke jalan utama menuju kraton menjadi indikasi bahwa fungsi benteng dapat dimanfaatkan sebagai benteng strategi,&nbsp;<a title=\"Intimidasi\" href=\"https://id.wikipedia.org/wiki/Intimidasi\">intimidasi</a>, penyerangan dan blokade. Dapat dikatakan bahwa berdirinya benteng tersebut dimaksudkan untuk berjaga-jaga apabila sewaktu-waktu Sultan memalingkan muka memusuhi Belanda.</p>\r\n<p>Besarnya kekuatan yang tersembunyi dibalik kontrak politik yang dilahirkan dalam setiap perjanjian dengan pihak Belanda seakan-akan menjadi kekuatan yang sulit dilawan oleh setiap pemimpin pribumi pada masa kolonial Belanda. Dalam hal ini termasuk pula Sri Sultan Hamengku Buwono I. Oleh karena itu permohonan izin Belanda untuk membangun benteng dikabulkan.</p>\r\n<p><strong>SEKARANG</strong></p>\r\n<p>Melalui Surat Keputusan Mendikbud RI Prof. Dr.&nbsp;<a class=\"mw-redirect\" title=\"Fuad Hasan\" href=\"https://id.wikipedia.org/wiki/Fuad_Hasan\">Fuad Hasan</a>&nbsp;nomor 0475/O/1992 tanggal 23 November 1992 secara resmi Benteng Vredeburg menjadi Museum Khusus Perjuangan Nasional dengan nama Museum Benteng Yogyakarta.</p>\r\n<p>Untuk meningkatkan fungsionalisasi museum ini maka mulai tanggal 5 September 1997 mendapat limpahan untuk mengelola Museum Perjuangan Yogyakarta di Brontokusuman Yogyakarta, dari Museum Negeri Provinsi DIY Sonobudoyo. Berdasarkan Surat Keputusan Menteri Kebudayaan dan Pariwisata Nomor KM 48/OT.001/MKP/2003 tanggal 5 Desember 2003 Museum Benteng Vredeburg Yogyakarta merupakan Unit Pelaksana Teknis yang berkedudukan di lingkungan Kementerian dan Kebudayaan Deputi Bidang Sejarah dan Purbakala.</p>\r\n<p>Selanjutnya Sesuai dengan Surat Keputusan Menteri Kebudayaan dan Pariwisata Nomor: KM 48/OT.001/MKP/2003 tanggal 5 Desember 2003 Museum Benteng Vredeburg Yogyakarta mempunyai Kedudukan, Tugas Pokok dan Fungsi yaitu sebagai museum khusus merupakan Unit Pelaksana Teknis yang berkedudukan di lingkungan Kementerian dan Kebudayaan Deputi Bidang Sejarah dan Purbakala yang bertugas melaksanakan pengumpulan, perawatan, pengawetan, penelitian, penyajian, penerbitan hasil penelitian dan memberikan bimbingan edukatif kultural mengenai benda dan sejarah perjuangan bangsa Indonesia di wilayah Yogyakarta.</p>', '20231203161959.jpg', 'Benteng-Vredeburg', '11', '2023-12-03', 'pojan2'),
(14, 'Peristiwa Rengasdengklok', '<p><strong>Peristiwa Rengasdengklok</strong>&nbsp;adalah peristiwa penculikan yang dilakukan oleh sejumlah pemuda antara lain&nbsp;<a title=\"Soekarni\" href=\"https://id.wikipedia.org/wiki/Soekarni\">Soekarni</a>,&nbsp;<a title=\"Wikana\" href=\"https://id.wikipedia.org/wiki/Wikana\">Wikana</a>,&nbsp;<a title=\"D.N. Aidit\" href=\"https://id.wikipedia.org/wiki/D.N._Aidit\">Aidit</a>, dan&nbsp;<a title=\"Chaerul Saleh\" href=\"https://id.wikipedia.org/wiki/Chaerul_Saleh\">Chaerul Saleh</a>&nbsp;dari perkumpulan \"<em><a title=\"Menteng 31\" href=\"https://id.wikipedia.org/wiki/Menteng_31\">Menteng 31</a></em>\" terhadap&nbsp;<a title=\"Soekarno\" href=\"https://id.wikipedia.org/wiki/Soekarno\">Soekarno</a>&nbsp;dan&nbsp;<a class=\"mw-redirect\" title=\"Hatta\" href=\"https://id.wikipedia.org/wiki/Hatta\">Hatta</a>.</p>\r\n<p>Peristiwa ini terjadi pada tanggal 16 Agustus 1945 pukul 03.00 WIB, Soekarno dan Hatta dibawa ke <a class=\"mw-redirect\" title=\"Rengasdengklok\" href=\"https://id.wikipedia.org/wiki/Rengasdengklok\">Rengasdengklok</a>,&nbsp;<a class=\"mw-redirect\" title=\"Karawang\" href=\"https://id.wikipedia.org/wiki/Karawang\">Karawang</a>, untuk kemudian didesak agar mempercepat proklamasi kemerdekaan&nbsp;<a class=\"mw-redirect\" title=\"Republik Indonesia\" href=\"https://id.wikipedia.org/wiki/Republik_Indonesia\">Republik Indonesia</a>, sampai dengan terjadinya kesepakatan antara golongan tua yang diwakili Soekarno dan Hatta serta Mr.&nbsp;<a class=\"mw-redirect\" title=\"Achmad Subardjo\" href=\"https://id.wikipedia.org/wiki/Achmad_Subardjo\">Achmad Subardjo</a>&nbsp;dengan golongan muda tentang kapan proklamasi akan dilaksanakan terutama setelah&nbsp;<a title=\"Jepang\" href=\"https://id.wikipedia.org/wiki/Jepang\">Jepang</a>&nbsp;mengalami kekalahan dalam&nbsp;<a title=\"Perang Pasifik\" href=\"https://id.wikipedia.org/wiki/Perang_Pasifik\">Perang Pasifik</a>.<sup id=\"cite_ref-3\" class=\"reference\"></sup></p>\r\n<p>Menghadapi desakan tersebut, Soekarno dan Hatta tetap tidak berubah pendirian. Sementara itu di Jakarta, Chaerul dan kawan-kawan telah menyusun rencana untuk merebut kekuasaan. Tetapi apa yang telah direncanakan tidak berhasil dijalankan karena tidak semua anggota&nbsp;<a class=\"mw-redirect\" title=\"PETA\" href=\"https://id.wikipedia.org/wiki/PETA\">PETA</a> mendukung rencana tersebut.</p>\r\n<p>Proklamasi kemerdekaan Republik Indonesia rencananya akan dibacakan oleh Bung Karno dan Bung Hatta pada hari Jumat,&nbsp;<a title=\"17 Agustus\" href=\"https://id.wikipedia.org/wiki/17_Agustus\">17 Agustus</a>&nbsp;<a title=\"1945\" href=\"https://id.wikipedia.org/wiki/1945\">1945</a>. Ada dua lokasi pilihan untuk pembacaan teks proklamasi, yaitu Lapangan IKADA (yang sekarang telah menjadi Lapangan Monas) atau rumah Bung Karno di Jl. Pegangsaan Timur No. 56. Rumah Bung Karno akhirnya dipilih untuk menghindari kericuhan antara penduduk dan tentara Jepang karena tentara-tentara Jepang sudah berjaga-jaga di Lapangan IKADA setelah mendapat informasi ada sebuah acara yang akan diselenggarakan di lokasi tersebut. Teks Proklamasi disusun di Rengasdengklok. Awalnya, Bung Karno dan Bung Hatta ditempatkan di sebuah gubuk tua, pinggir kali dekat sawah yang tak layak kondisinya. Atas usulan KH. Darip pejuang dari Klender kepada Soekarni dan kawan-kawan, agar Bung Karno dan Bung Hatta ditempatkan di tempat yang layak, maka dipilih lah rumah saudagar Tionghoa bernama&nbsp;<a title=\"Djiaw Kie Siong\" href=\"https://id.wikipedia.org/wiki/Djiaw_Kie_Siong\">Djiaw Kie Siong</a>.&nbsp;<a class=\"mw-redirect\" title=\"Bendera Merah Putih\" href=\"https://id.wikipedia.org/wiki/Bendera_Merah_Putih\">Bendera Merah Putih</a>&nbsp;sudah dikibarkan para pejuang di Rengasdengklok pada Kamis tanggal&nbsp;<a title=\"16 Agustus\" href=\"https://id.wikipedia.org/wiki/16_Agustus\">16 Agustus</a>, sebagai persiapan untuk proklamasi kemerdekaan Indonesia.</p>\r\n<p>Karena tidak mendapat berita dari&nbsp;<a class=\"mw-redirect\" title=\"Jakarta\" href=\"https://id.wikipedia.org/wiki/Jakarta\">Jakarta</a>, maka&nbsp;<a class=\"new\" title=\"Jusuf Kunto (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Jusuf_Kunto&amp;action=edit&amp;redlink=1\">Jusuf Kunto</a>&nbsp;dikirim untuk berunding dengan pemuda-pemuda yang ada di Jakarta. Namun sesampainya di Jakarta, Kunto hanya menemui&nbsp;<a title=\"Wikana\" href=\"https://id.wikipedia.org/wiki/Wikana\">Wikana</a>&nbsp;dan Mr.&nbsp;<a title=\"Achmad Soebardjo\" href=\"https://id.wikipedia.org/wiki/Achmad_Soebardjo\">Achmad Soebardjo</a>, kemudian Kunto dan Subardjo ke Rengasdengklok untuk menjemput Soekarno, Hatta,&nbsp;<a title=\"Fatmawati\" href=\"https://id.wikipedia.org/wiki/Fatmawati\">Fatmawati</a>&nbsp;dan&nbsp;<a title=\"Guntur Soekarnoputra\" href=\"https://id.wikipedia.org/wiki/Guntur_Soekarnoputra\">Guntur</a>. Achmad Soebardjo mengundang Bung Karno dan Hatta berangkat ke Jakarta untuk membacakan proklamasi di Jalan Pegangsaan Timur No. 56, rumah Bung Karno. Pada tanggal&nbsp;<a title=\"16 Agustus\" href=\"https://id.wikipedia.org/wiki/16_Agustus\">16 Agustus</a>&nbsp;tengah malam rombongan tersebut sampai di Jakarta.</p>\r\n<p>Keesokan harinya, tepatnya tanggal&nbsp;<a title=\"17 Agustus\" href=\"https://id.wikipedia.org/wiki/17_Agustus\">17 Agustus</a>&nbsp;<a title=\"1945\" href=\"https://id.wikipedia.org/wiki/1945\">1945</a>&nbsp;pernyataan proklamasi dikumandangkan dengan&nbsp;<a class=\"mw-redirect\" title=\"Teks proklamasi Kemerdekaan Indonesia\" href=\"https://id.wikipedia.org/wiki/Teks_proklamasi_Kemerdekaan_Indonesia\">teks proklamasi Kemerdekaan Indonesia</a>&nbsp;yang diketik oleh&nbsp;<a title=\"Sayuti Melik\" href=\"https://id.wikipedia.org/wiki/Sayuti_Melik\">Sayuti Melik</a>&nbsp;menggunakan mesin ketik yang \"<em>dipinjam</em>\" (sebetulnya diambil) dari kantor Kepala Perwakilan&nbsp;<a title=\"Kriegsmarine\" href=\"https://id.wikipedia.org/wiki/Kriegsmarine\">Kriegsmarine</a>, Mayor (Laut) Dr. Hermann Kandeler.</p>\r\n<p><span style=\"font-size: 12pt;\"><strong><sup class=\"reference\">LATAR BELAKANG</sup></strong></span></p>\r\n<p>Pada waktu itu Soekarno dan Moh. Hatta, tokoh-tokoh menginginkan agar proklamasi dilakukan melalui&nbsp;<a class=\"mw-redirect\" title=\"PPKI\" href=\"https://id.wikipedia.org/wiki/PPKI\">PPKI</a>, sementara golongan pemuda menginginkan agar proklamasi dilakukan secepatnya tanpa melalui PPKI yang dianggap sebagai badan buatan&nbsp;<a title=\"Jepang\" href=\"https://id.wikipedia.org/wiki/Jepang\">Jepang</a>. Selain itu, hal tersebut dilakukan agar Soekarno dan Moh. Hatta tidak terpengaruh oleh Jepang. Para golongan pemuda khawatir apabila kemerdekaan yang sebenarnya merupakan hasil dari perjuangan bangsa Indonesia, menjadi seolah-olah merupakan pemberian dari Jepang.</p>\r\n<p>Sebelumnya golongan pemuda telah mengadakan suatu perundingan di salah satu lembaga bakteriologi di&nbsp;<a class=\"new\" title=\"Pegangsaan Timur (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Pegangsaan_Timur&amp;action=edit&amp;redlink=1\">Pegangsaan Timur</a>&nbsp;<a class=\"mw-redirect\" title=\"Jakarta\" href=\"https://id.wikipedia.org/wiki/Jakarta\">Jakarta</a>, pada tanggal&nbsp;<a title=\"15 Agustus\" href=\"https://id.wikipedia.org/wiki/15_Agustus\">15 Agustus</a>. Dalam pertemuan ini diputuskan agar pelaksanaan kemerdekaan dilepaskan segala ikatan dan hubungan dengan janji kemerdekaan dari Jepang. Hasil keputusan disampaikan kepada Ir. Soekarno pada malam harinya tetapi ditolak oleh Soekarno karena merasa bertanggung jawab sebagai ketua PPKI.</p>', '20231203170630.jpg', 'Peristiwa-Rengasdengklok', '7', '2023-12-03', 'pojan2'),
(15, 'PKKWU', '<p>Link Pdf :</p>\r\n<p class=\"MsoNormal\"><a href=\"file:///C:/xampp/htdocs/admin_pojan/assets/upload/konten/SYSTEM_LAYANAN_DISPLAY_WARUNG_PKKWU.pdf\" target=\"_blank\" rel=\"noopener\">Link Pdf</a></p>', '20231204024335.jpg', 'PKKWU', '13', '2023-12-04', 'pojan2'),
(16, 'Manual Book', '<p>Link Pdf :&nbsp;</p>', '20231204121004.jpg', 'Manual-Book', '10', '2023-12-04', 'pojan2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(1, 'pojan', 'pojan ', 'pojan', 'User'),
(5, 'pojan2', 'pojan2', 'pojan2', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
