-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 10:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpr_gy`
--

-- --------------------------------------------------------

--
-- Table structure for table `annual_report`
--

CREATE TABLE `annual_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annual_report`
--

INSERT INTO `annual_report` (`id`, `judul`, `gambar`, `dokumen`, `created_at`, `updated_at`) VALUES
(2, 'Annual Report 2012', '1650455237_Vision.jpg', '1650455237_BPR_Guna_Yatra_-_Modal_Kerja.pdf', '2022-04-20 00:01:47', '2022-04-20 00:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `tanggal`, `foto`, `judul`, `deskripsi`) VALUES
(1, '2021-08-31', '1641795533_1627013028_bpr.jpeg', 'OJK Keluarkan Aturan Baru Soal BPR & BPRS, Ini Hal yang Baru', '<p><strong>Jakarta, CNBC Indonesia</strong>&nbsp;- Otoritas Jasa Keuangan (OJK) mengeluarkan aturan baru terkait dengan Rencana Bisnis (RBB) Bank Perkreditan Rakyat (BPR) dan Bank Pembiayaan Rakyat Syariah (BPRS). Aturan ini dipaparkan dalam POJK Nomor 15 /POJK.03/2021 yang mulai berlaku sejak 24 Agustus 2021. Aturan ini dikeluarkan sebagai panduan BPR dan BPRS dalam menyusun RBB yang mencerminkan arah dan kebijakan pengembangan usaha BPR dan BPRS dalam jangka pendek, jangka menengah, dan jangka panjang. POJK baru ini merupakan penyempurnaan dari POJK No.37/POJK.03/2016 tentang RBB BPR dan BPRS, sebab dalam aturan yang lama dinilai sudah tidak sesuai dengan perkembangan ketentuan terkini yang berkaitan dengan rencana bisnis. Selain itu juga ditujukan untuk meningkatkan efisiensi, mendorong penyederhanaan pelaporan BPR dan BPRS dan mendukung pengaturan yang berbasis prinsip.</p>\r\n\r\n<p>Pengaturan utama yang dilakukan adalah seperti penyesuaian definisi sehubungan dengan penggabungan Laporan Realisasi Rencana Bisnis dan Laporan Pengawasan Rencana Bisnis menjadi Laporan Pelaksanaan dan Pengawasan Rencana Bisnis. Lalu terdapat pengurangan cakupan laporan rencana bsinis BPR dan BPRS menjadi bagian ringkasan eksekutif, strategi bisnis dan kebijakan, proyeksi laporan keuangan, target rasio dan pos keuangan, rencana penghimpunan dana, dan rencana penyaluran dana. Lalu rencana permodalan, rencana pengembangan dan pengadaan teknologi informasi dan pengembangan sumber daya manusia, rencana pelaksanaan kegiatan usaha baru bagi BPR atau rencana penerbitan produk dan pelaksanaan aktivitas baru bagi BPRS, rencana pengembangan dan/atau perubahan jaringan kantor, dan terakhir informasi lainnya yang berkaitan dengan informasi yang diperkirakan memengaruhi kegiatan usaha BPR dan BPRS.</p>\r\n\r\n<p>Dalam aturan ini juga OJK meminta BPR dan BPRS melakukan penyesuaian rencana bisnis dan penyesuaian kriteria perubahan rencana bisnis berdasarkan inisiatif sendiri. Selain itu, juga dalam aturan baru ini terdapat penyesuaian sanksi bagi anggota Direksi dan/atau anggota Dewan Komisaris yang tidak memenuhi kewajiban penyusunan RBB.</p>'),
(2, '2021-04-21', '1641796894_1627044103_1720405gedung-OJK-kontan780x390.jpg', 'OJK: Wajib Modal Minimum, Banyak BPR Ajukan Merger!', '<p><strong>Bali, CNBC&nbsp;Indonesia</strong>&nbsp;- Otoritas Jasa Keuangan (OJK) mengungkapkan kewajiban ketentuan modal inti mampu mendorong bank perkreditan rakyat (BPR) ramai-ramai mengajukan konsolidasi dan merger. Peraturan POJK&nbsp;Nomor 5/POJK.03/2015 tentang Kewajiban Penyediaan Modal Minimum dan Pemenuhan Modal Inti Minimum BPR&nbsp;memang memberikan&nbsp;masa transisi bagi BPR untuk memenuhi kewajiban modal inti yakni Rp 3 miliar di 2020 dan Rp6 miliar pada 2024.</p>\r\n\r\n<p>&quot;BPR itu trennya udah melakukan merger tanpa diminta, mereka juga sama ada transisi memenuhi modal inti Rp 1 miliar, Rp 3 miliar sampai Rp 6 miliar sampai 2024. Sekarang ini aturannya BPR yang baru ini kemarin di Desember kita keluarkan POJK BPR,&nbsp;kita kategorikan sesuai dengan klasternya, Jawa, Bali, Sumatera, Kalimantan, Sulawesi, dibagi tiga untuk penyiapan modal,&quot; kata&nbsp;Teguh Supangkat, Deputi Komisioner Pengawas Perbankan I OJK, dalam pelatihan media OJK di Nusa Dua, Bali, Jumat (9/4/2021).</p>\r\n\r\n<p>Dia menjelaskan, saat ini sudah ada lebih dari 10 BPR yang melakukan penggabungan usaha.&nbsp;OJK&nbsp;juga telah memproses sekitar 4-5 izin merger BPR.</p>\r\n\r\n<p>OJK&nbsp;pun mengatur pendirian BPR baru berdasarkan zonasi wilayah pada Desember 2020 yang tertuang dalam POJK Nomor 62/POJK.03/2020 tentang Bank Perkreditan Rakyat. Adapun modal disetor pendirian BPR ditetapkan paling sedikit Rp 100 miliar untuk BPR&nbsp;di zona 1, Rp 50 miliar di zona 2, dan Rp 25 miliar di zona 3. Tujuan klaster ini agar pendirian BPR bisa merata di semua wilayah.</p>\r\n\r\n<p>&quot;Untuk penyiapan modal BPR yang baru ini kami kategorikan sesuai dengan klasternya. Di Jawa dan Bali karena sudah banyak [BPR] sehingga Rp 100 miliar, Sumatra Rp50 miliar, dan yang paling sedikit jumlahnya [BPR] Rp 25 miliar. Ini untuk antisipasi ke depan karena BPR saat ini sudah 1.700an,&quot; katanya.</p>\r\n\r\n<p>Teguh menjelaskan tiap tahun ada beberapa yang melakukan merger. BPR&nbsp;juga harus dimiliki warga negara Indonesia. &quot;Ga boleh asing makanya kita kesulitan BPR go public [mencatatkan saham perdana di bursa], karena kan bisa dimiliki asing, kadang ada beberapa pemilik yang punya lebih dari 1 BPR itu yang digabung, lalu ada beberapa Pemda yang punya beberapa BPR itu juga digabung, untuk jadi BPR&nbsp;lebih kuat lagi.&quot;</p>'),
(3, '2022-01-09', '1641797416_hati-hati_pinjol.jpeg', 'Dicabut Izinnya Oleh OJK, Jangan Pinjam di 46 Pinjol Ini!', '<p><strong>Jakarta, CNBC Indonesia</strong>&nbsp;- Jumlah pinjaman online (pinjol) terdaftar dan berizin dari Otoritas Jasa Keuangan (OJK). Jika pada awal 2020 jumlah pinjol resmi OJK mencapai 149 penyelenggara, kini tinggal 103 penyelenggara. Berkurangnya jumlah pinjol terdaftar dan berizin dari OJK ini dikarenakan 46 pinjol telah dicabut surat terdaftar di OJK. Ada beberapa alasan izin pinjol tersebut dicabut. Mulai dari dari tak memenuhi persyaratan yang diminta OJK hingga ketidakmampuan manajemen untuk meneruskan operasi perusahaan. Kabar baiknya, kini ada 103 pinjol berizin dari OJK. Artinya mereka sudah memenuhi semua regulasi yang ditetapkan OJK. Mulai dari pemenuhan permodalan maupun manajemen risiko dalam menjalankan bisnis.</p>\r\n\r\n<p>&quot;OJK mengimbau masyarakat untuk selalu menggunakan jasa penyelenggara fintech lending yang sudah terdaftar/berizin dari OJK. Hubungi Kontak OJK 157 melalui nomor telepon 157 atau layanan whatsapp 081 157 157 157 untuk mengecek status izin penawaran produk jasa keuangan yang diterima,&quot; ungkap OJK dalam keterangan tertulis, Senin (10/1/2022).</p>\r\n\r\n<p>Pada awal 2020, OJK melakukan moratorium atau penghentian sementara pendaftaran layanan baru pinjol. Ini untuk menyehatkan industri pinjol dan membuat aturan baru yang membuat reputasi pinjol semakin baik. Para pinjol akan beroperasi dengan model bisnis adaptif serta manajemen risiko yang terukur.</p>\r\n\r\n<p>Berikut daftar pinjol yang dicabut izin terdaftarnya oleh OJK:</p>\r\n\r\n<ol>\r\n	<li>PT Digital Tunai Kita</li>\r\n	<li>PT Kapital Boost Indonesia</li>\r\n	<li>PT Global Kapital Tech</li>\r\n	<li>PT Gerakan Digital Akselerasi Indonesia</li>\r\n	<li>PT Maslahat Indonesia Mandiri</li>\r\n	<li>PT Arga Berkah Sejahtera</li>\r\n	<li>PT Berkah Kelola Dana</li>\r\n	<li>PT Danon Digital Nusantara</li>\r\n	<li>PT Mitra Pendanaan Mandiri</li>\r\n	<li>PT Amanah Karyananta Nusantara</li>\r\n	<li>PT Digilend Mobile Nusantara</li>\r\n	<li>PT Digital Yinshan Technology</li>\r\n	<li>PT Finlink Technology Indonesia.</li>\r\n	<li>PT Kinerja Sukses Gemilang</li>\r\n	<li>PT Pendanaan Gotong Royong</li>\r\n	<li>PT Newline Fintech Indonesia</li>\r\n	<li>PT Dynamic Credit Asia</li>\r\n	<li>PT Sinergi Mitra Finansial</li>\r\n	<li>PT Digital Bertahan Indonesia</li>\r\n	<li>PT Mikro Kapital Indonesia</li>\r\n	<li>PT Pasar Dana Teknologi</li>\r\n	<li>PT Teknologi Finansial Asia</li>\r\n	<li>PT Artha Simo Indonesia</li>\r\n	<li>PT Empat Kali Indonesia</li>\r\n	<li>PT Indo Fintek Digital</li>\r\n	<li>PT Dana Aguna Nusantara</li>\r\n	<li>PT Anantara Digital Indonesia</li>\r\n	<li>PT Perlu Fintech Indonesia</li>\r\n	<li>PT Digitron Solusi Indonesia</li>\r\n	<li>PT Jayindo Fintek Pratama</li>\r\n	<li>PT Satrio Jaya Persada</li>\r\n	<li>PT Teknologi Indonesia Sentosa</li>\r\n	<li>PT PAM Finansial Teknologi</li>\r\n	<li>PT Coco Digital Technology</li>\r\n	<li>PT Evian Teknologi Indonesia</li>\r\n	<li>PT Smart Karya Digital</li>\r\n	<li>PT Tujuh Mandiri Sejahtera</li>\r\n	<li>PT Berkah Finteck Syariah</li>\r\n	<li>PT Pundiku Mitra Sejahtera</li>\r\n	<li>PT Serba Digital Teknologi</li>\r\n	<li>PT Solusi Bijak Indonesia</li>\r\n	<li>PT Prima Fintech Indonesia</li>\r\n	<li>PT Oke Ptop Indonesia</li>\r\n	<li>PT BBX Digital Teknologi.</li>\r\n	<li>PT Alfa Fintech Indonesia</li>\r\n	<li>PT Kas Wagon Indonesia.</li>\r\n</ol>'),
(4, '2021-11-02', '1641798337_OJK.jpg', 'OJK Luncurkan OBox untuk BPR dan BPRS, Apa Itu?', '<p><strong>JAKARTA, KOMPAS.com</strong> - Otoritas Jasa Keuangan (OJK) meluncurkan aplikasi OJK Box atau OBox untuk bank perkreditan rakyat (BPR) dan bank pembiayaan rakyat syariah (BPRS). OBox merupakan aplikasi yang memungkinkan bank untuk meningkatkan alur informasi kepada OJK terutama yang bersifat transaksional. Informasi tersebut nantinya akan melengkapi laporan yang sudah ada, sehingga OJK dan bank dapat meningkatkan pengawasan terhadap potensi risiko yang timbul lebih dini. OBox merupakan aplikasi yang memungkinkan bank untuk meningkatkan alur informasi kepada OJK terutama yang bersifat transaksional. Informasi tersebut nantinya akan melengkapi laporan yang sudah ada, sehingga OJK dan bank dapat meningkatkan pengawasan terhadap potensi risiko yang timbul lebih dini. Informasi tersebut nantinya akan melengkapi laporan yang sudah ada, sehingga OJK dan bank dapat meningkatkan pengawasan terhadap potensi risiko yang timbul lebih dini.<br />\r\n<br />\r\n&quot;OBox sebagai salah satu penyampaian data dari BPR dan BPRS kepada OJK, sehingga informasi dan data yang disampaikan kepada kami menjadi lebih cepat dan efektif,&quot; kata Deputi Komisioner Pengawas Perbankan II OJK, Bambang Widjanarko, dalam peluncuran OBox BPR dan BPRS, Selasa (2/11/2021).</p>\r\n\r\n<p>Bambang mengatakan, aplikasi OBox sebagai teknologi pengawas industri perbankan sudah diterapkan pada bank umum di Indonesia sejak 2019.<br />\r\nKemudian, OJK memutuskan untuk melakukan kajian penerapan OBox untuk BPR dan BPRS pada 2020. Pada Juli 2021, OJK mulai melakukan pengembanagn aplikasi pengawasan tersebut untuk BPR serta BPRS.<br />\r\n<br />\r\n&quot;Dalam pelaksanaannya, kami juga melakukan kegiatan sosialisasi ini kepada seluruh stakeholders, dan kepada seluruh pengurus BPR dan BPRS, serta pengawas terkait BPR dan BPRS,&quot; tutur Bambang.<br />\r\n<br />\r\nDengan diluncurkannya OBox untuk BPR dan BPRS, Bambang berharap, alur informasi bank kepada otoritas dapat dipercepat, sehingga pada akhirnya akan meningkatkan kewaspadaan terhadap berbagai risiko yang mungkin terjadi.<br />\r\n<br />\r\n&quot;Kami berharap aplikasi OBox ini memberikan manfaat, baik bagi BPR dan BPRS, maupun dalam pengawasan di OJK, sehingga industri BPR dan BPRS memiliki daya tahan yang lebih baik dan juga daya saing yang optimal,&quot; ucap Bambang.<br />\r\n<br />\r\n&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `deposito`
--

CREATE TABLE `deposito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Tunggu','Proses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposito`
--

INSERT INTO `deposito` (`id`, `nama`, `alamat`, `telp`, `email`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rere', 'Lontar', '082246681122', 'rere@gmail.com', 'Rp12.500.000', 'Tunggu', '2022-04-21 01:45:55', '2022-04-21 01:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `good_corporate_governance`
--

CREATE TABLE `good_corporate_governance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `good_corporate_governance`
--

INSERT INTO `good_corporate_governance` (`id`, `judul`, `gambar`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Good Corporate Governance 2012', '1650456629_2ec6adedc86415db09c47758226dcb0b.jpg', '1650456629_price_list_astro_socio.pdf', '2022-04-20 05:09:25', '2022-04-20 05:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `investasi`
--

CREATE TABLE `investasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Tunggu','Proses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investasi`
--

INSERT INTO `investasi` (`id`, `nama`, `alamat`, `telp`, `email`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tes 1', 'Tes 1', '088123456781', 'tes@gmail.com', 'Rp10.000.000', 'Tunggu', '2022-04-19 05:15:24', '2022-04-19 05:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `konsumsi`
--

CREATE TABLE `konsumsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Tunggu','Proses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumsi`
--

INSERT INTO `konsumsi` (`id`, `nama`, `alamat`, `telp`, `email`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ari Budiman', 'Jl. Kertajaya 5A No.11', '089934567622', 'ariman@gmail.com', 'Rp1.000.000', 'Tunggu', '2022-04-19 04:36:55', '2022-04-19 04:36:55'),
(2, 'Try Konsumsi', 'Try Konsumsi 4F No. 11', '088123456781', 'trykonsumsi@gmail.com', 'Rp3.000.000', 'Tunggu', '2022-04-19 06:37:31', '2022-04-19 06:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `objektif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keuntungan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_01_152141_create_kontak_table', 1),
(5, '2021_07_20_042513_create_konsumsi_table', 1),
(6, '2021_07_20_042544_create_modal_kerja_table', 1),
(7, '2021_07_20_042612_create_deposito_table', 1),
(8, '2021_07_20_042651_create_tabungan_table', 1),
(9, '2021_07_20_042924_create_loker_table', 1),
(10, '2021_07_20_052933_create_berita_table', 1),
(11, '2021_07_24_003446_create_pelamar_table', 1),
(12, '2022_04_19_042022_create_investasi_table', 2),
(13, '2022_04_19_042050_create_multiguna_table', 2),
(14, '2022_04_19_042112_create_tinjauan_keuangan_table', 2),
(15, '2022_04_19_042129_create_annual_report_table', 2),
(16, '2022_04_19_042152_create_good_governance_corporate_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modal_kerja`
--

CREATE TABLE `modal_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Tunggu','Proses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modal_kerja`
--

INSERT INTO `modal_kerja` (`id`, `nama`, `alamat`, `telp`, `email`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Coba Modal Kerja', 'Coba Modal Kerja 1', '088123456781', 'cobamodalkerja@gmail.com', 'Rp5.000.000', 'Selesai', '2022-04-19 06:35:15', '2022-04-19 06:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `multiguna`
--

CREATE TABLE `multiguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Tunggu','Proses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiguna`
--

INSERT INTO `multiguna` (`id`, `nama`, `alamat`, `telp`, `email`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Testing Multiguna', 'Testing Multiguna', '088123456781', 'testingmultiguna@gmail.com', 'Rp10.000.000', 'Tunggu', '2022-04-19 05:16:20', '2022-04-19 05:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gunayatra@gmail.com', '$2y$10$nRe6ec4vxPfwy6QPb3qYkeruy/1rmj8vuv4HlGZVoJrrcV8W7lsnW', '2022-04-17 06:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Tunggu','Proses','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id`, `nama`, `alamat`, `telp`, `email`, `nominal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Muqit Nur Salam Marsam', 'Jl. Manukan Rejo 3', '089637667028', 'muqitryu@gmail.com', 'Rp100.000', 'Tunggu', '2022-04-17 05:58:03', '2022-04-17 05:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `tinjauan_keuangan`
--

CREATE TABLE `tinjauan_keuangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinjauan_keuangan`
--

INSERT INTO `tinjauan_keuangan` (`id`, `periode`, `asset`, `kredit`, `dpk`, `laba`, `created_at`, `updated_at`) VALUES
(1, '2020-04', '100', '25', '10', '5', NULL, NULL),
(3, '2020-04', '110', '35', '12', '7', NULL, NULL),
(4, '2020-12', '111', '36', '12', '8', NULL, NULL),
(5, '2021-04', '115', '40', '20', '9', NULL, NULL),
(6, '2021-08', '117', '35', '17', '8', NULL, NULL),
(7, '2021-12', '120', '40', '20', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin BPR GY', 'gunayatra@gmail.com', NULL, '$2y$10$jmm8SXBuYtNxE.oc8VgapunnT0yrfLeNdBAUkqFvtrMGlE3//9Cj2', '5e47idgfHu0A6KSo0FcNEl9ygRUH01eRrthzshBRKvYmLxVLPOI8TbIRZOEg', '2022-04-17 06:03:38', '2022-04-17 06:03:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annual_report`
--
ALTER TABLE `annual_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposito`
--
ALTER TABLE `deposito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `good_corporate_governance`
--
ALTER TABLE `good_corporate_governance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investasi`
--
ALTER TABLE `investasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsumsi`
--
ALTER TABLE `konsumsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal_kerja`
--
ALTER TABLE `modal_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiguna`
--
ALTER TABLE `multiguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinjauan_keuangan`
--
ALTER TABLE `tinjauan_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annual_report`
--
ALTER TABLE `annual_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deposito`
--
ALTER TABLE `deposito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `good_corporate_governance`
--
ALTER TABLE `good_corporate_governance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investasi`
--
ALTER TABLE `investasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konsumsi`
--
ALTER TABLE `konsumsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `modal_kerja`
--
ALTER TABLE `modal_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `multiguna`
--
ALTER TABLE `multiguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tinjauan_keuangan`
--
ALTER TABLE `tinjauan_keuangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
