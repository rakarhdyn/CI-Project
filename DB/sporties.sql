-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 03:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sporties`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'orioncell123@gmail.com', 1, '2021-05-08 23:48:37', 1),
(2, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:01:50', 1),
(3, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:16:47', 1),
(4, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:25:04', 1),
(5, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:25:58', 1),
(6, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:26:05', 1),
(7, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:27:52', 1),
(8, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:28:19', 1),
(9, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:28:31', 1),
(10, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:29:22', 1),
(11, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:29:36', 1),
(12, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:29:49', 1),
(13, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:30:26', 1),
(14, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 00:30:40', 1),
(15, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 01:05:56', 1),
(16, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 01:22:23', 1),
(17, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 01:31:03', 1),
(18, '::1', 'reza', NULL, '2021-05-09 01:33:36', 0),
(19, '::1', 'reza', NULL, '2021-05-09 01:33:44', 0),
(20, '::1', 'reza', NULL, '2021-05-09 01:35:00', 0),
(21, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 01:35:10', 1),
(22, '::1', 'reza@pradito.com', 6, '2021-05-09 01:38:32', 1),
(23, '::1', 'orioncell123@gmail.com', 1, '2021-05-09 03:55:18', 1),
(24, '::1', 'pradito30@gmail.com', 7, '2021-05-09 06:28:37', 1),
(25, '::1', 'orioncell123@gmail.com', 1, '2021-05-31 05:34:11', 1),
(26, '::1', 'orioncell123@gmail.com', 1, '2021-06-07 08:32:39', 1),
(27, '::1', 'orioncell123@gmail.com', 1, '2021-06-08 01:24:41', 1),
(28, '::1', 'orioncell123@gmail.com', 1, '2021-06-09 00:56:32', 1),
(29, '::1', 'orioncell123@gmail.com', 1, '2021-06-09 03:29:00', 1),
(30, '::1', 'orioncell123@gmail.com', 1, '2021-06-10 01:47:01', 1),
(31, '::1', 'orioncell123@gmail.com', 1, '2021-06-10 22:13:50', 1),
(32, '::1', 'admin@gmail.com', 8, '2021-06-11 04:05:11', 1),
(33, '::1', 'admin@gmail.com', 8, '2021-06-18 03:04:56', 1),
(34, '::1', 'admin@gmail.com', 8, '2021-06-20 23:32:34', 1),
(35, '::1', 'admin@gmail.com', 8, '2021-06-21 02:22:46', 1),
(36, '::1', 'AdminProject', NULL, '2021-06-23 01:34:33', 0),
(37, '::1', 'admin@gmail.com', 8, '2021-06-23 01:34:44', 1),
(38, '::1', 'admin@gmail.com', 8, '2021-06-30 10:08:30', 1),
(39, '::1', 'admin@gmail.com', 8, '2021-07-01 20:58:23', 1),
(40, '::1', 'admin@gmail.com', 8, '2021-07-04 20:38:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `badmin`
--

CREATE TABLE `badmin` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slide_1` varchar(255) NOT NULL,
  `slide_2` varchar(255) NOT NULL,
  `slide_3` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `badmin`
--

INSERT INTO `badmin` (`id`, `nama`, `gambar`, `slide_1`, `slide_2`, `slide_3`, `fasilitas`, `alamat`, `jam_operasional`, `kontak`, `created_at`) VALUES
(17, 'Badminton Hall Tirta Sari', 'tirta (1).png', 'tirta (2).jpg', 'tirta (1).jpg', 'tirta (3).jpg', 'Lapangan, Musholla, Kantin', 'Jl. Bahagia Raya No.8, Abadijaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417', '08.00 - 24.00', '021 7708177', '2021-07-05 13:36:22'),
(18, 'Gor Ilomata', 'ilomata (3).jpg', 'ilomata (4).jpg', 'ilomata (1).jpg', 'ilomata (2).jpg', 'Lapangan, Musholla, Kantin', 'Sukatani, Tapos, Depok City, West Java 16454', '08.00 - 22.00', '021 8741343', '2021-07-05 13:40:36'),
(19, 'Jaya Baru Badminton Arena', 'jayabaru (3).jpg', 'jayabaru (1).jpg', 'jayabaru (4).jpg', 'jayabaru (2).jpg', 'musola,kantin', 'Jalan Ampel No.22, Sukmajaya, Abadijaya, Depok, Kota Depok, Jawa Barat 16417', '06.00 - 22.00', '021 77830879', '2021-07-05 13:43:17'),
(20, 'GOR Lamahu', 'lumahu (1).jpg', 'lumahu (2).jpg', 'lumahu (3).jpg', 'lumahu (4).jpg', 'Lapangan, Musholla, Kantin', 'Jl. Merpati Putih, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat 16452', '07.00 - 24.00', '021 87908090', '2021-07-05 13:47:15'),
(21, 'Gor Bulutangkis Shaninaza', 'shaninaza (1).jpg', 'shaninaza (2).jpg', 'shaninaza (3).jpg', 'shaninaza (4).jpg', 'musola,kantin', 'Jl. H. Rijin, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451', '07.00 - 22.00', '081298437471', '2021-07-05 13:49:52'),
(22, 'GOR SIMA', 'sima (3).jpg', 'sima (1).jpg', 'sima (2).jpg', 'sima (4).jpg', 'Lapangan, Musholla, Kantin', 'Jl. Kabel No. 34 RT. 07/04, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '08.00 - 23.00', '085791827346', '2021-07-05 13:51:54'),
(23, 'Hall Badminton Sinar Logam', 'sinar (1).jpg', 'sinar (2).jpg', 'sinar (3).jpg', 'sinar (4).jpg', 'Lapangan, Musholla, Kantin', 'Jl. Tole Iskandar No.74, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415', '06.00 - 24.00', '(021) 7782946', '2021-07-05 13:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slide_1` varchar(255) NOT NULL,
  `slide_2` varchar(255) NOT NULL,
  `slide_3` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `nama`, `gambar`, `slide_1`, `slide_2`, `slide_3`, `fasilitas`, `alamat`, `jam_operasional`, `kontak`, `created_at`) VALUES
(15, 'Arco Basketball Court', 'arco.png', 'arco1.jpg', 'arco2.jpg', 'arco3.jpg', 'Lapangan', 'Jalan Delima Nomor 19, Kompleks Jl. Arco Raya No.Kel, Duren Seribu, Kec. Bojongsari, Kota Depok, Jawa Barat 16518', '08.00 - 22.00', '08119339597', '2021-07-05 11:59:23'),
(16, 'Fortuna Sport Center', 'fortuna.jpg', 'fortuna1.jpg', 'fortuna2.jpg', 'fortuna3.jpg', 'Lapangan, Musholla, Kantin', 'Jl. Raya Abdul Gani No.RT 10/04, Kalibaru, Kec. Cilodong, Kota Depok, Jawa Barat 16914', '08.00 - 22.00', '085280635095', '2021-07-05 12:04:47'),
(17, 'Gelora Hady ', 'hadi.jpg', 'hadi1.jpg', 'hadi2.jpg', 'hadi3.jpg', 'Lapangan, Musholla, Kantin', ' Pramuka Raya Gg. H. Jumin No.53, Mampang, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16433', '07.00 - 23.00', '081398699869', '2021-07-05 12:09:17'),
(18, 'Iblam Multisport Center', 'iblam.jpg', 'ibalm1.jpg', 'ibalm2.jpg', 'iblam3.jpg', 'Lapangan, Musholla, Kantin', 'Komplek IBLAM School of Law, Jl. R. Sanim, Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat 16426', '06.00 - 21.00', '085158453382', '2021-07-05 12:11:37'),
(19, 'Ocil Basketball Arena', 'ocil.jpg', 'ocil1.jpg', 'ocil2.jpg', 'ocil3.jpg', 'Lapangan, Musholla, Kantin', 'Gg. Bali, Cilodong, Kec. Cilodong, Kota Depok, Jawa Barat 16414', '06.00 - 22.00', '081385295676', '2021-07-05 12:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(10) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `notelp`, `email`, `message`) VALUES
(12, 'Reza Nova ', '08998009999', 'pradito30@gmail.com', 'mlkmmklmk'),
(15, 'Zanov', '081111111111', 'znv@gmial.com', 'ini goooddddd'),
(19, 'xeoxxe', '056166554433', 'xxe@theempire.com', 'lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, '),
(20, 'jiwon', '02346554433', 'kjw@theempire.com', 'lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, '),
(64, 'Lidya Elvi', '0318 6655 429', 'fathonah21@napitupulu.org', 'Ut ratione ut deleniti tempore eum. Et animi cumque saepe ut dicta quia. Maiores ea sunt asperiores nemo expedita.'),
(65, 'Rafi Damu ', '(+62) 767 9010 ', 'lfirgantoro@nurdiyanti.com', 'Rerum placeat laboriosam et nulla exercitationem id odio consequatur. Voluptatem alias officia laborum voluptas eligendi.'),
(66, 'Clara Hast', '(+62) 466 2534 ', 'lidya10@gmail.com', 'Eveniet possimus non porro ratione enim quasi eum. Totam fugit quam fuga qui sed placeat. Nihil aliquid natus aspernatur facilis exercitationem. Sint nesciunt officia quia eos totam.'),
(67, 'Sabrina Ka', '(+62) 234 9327 ', 'dono.sihombing@irawan.sch.id', 'Numquam rerum consequatur est ut eum nobis. Voluptatem molestiae nisi molestiae impedit alias nostrum sint esse.'),
(68, 'Qori Mardh', '(+62) 524 9656 ', 'talia.sihotang@gmail.co.id', 'Omnis assumenda culpa aspernatur est et. Natus laudantium rem aperiam at rerum. Qui ut quasi eos consectetur esse corporis. Quis temporibus ut ea odio iste sunt.'),
(69, 'Irfan Iswa', '0374 5906 932', 'qsantoso@yuniar.org', 'Perferendis voluptas odio amet. Dolorem et ullam est et libero tempora. Fugiat dolor consequatur perferendis vitae odio illo expedita.'),
(70, 'Zalindra S', '(+62) 864 6038 ', 'utama.wasis@yahoo.com', 'Libero laborum porro alias ratione sed. Doloremque quia ex numquam aut saepe voluptatibus. Provident pariatur et dolorem optio aut amet. Velit rem rem non laboriosam consequuntur ipsam.'),
(71, 'Cawisono H', '0520 0957 928', 'prabowo.garang@gmail.co.id', 'Impedit similique reprehenderit eum error. Molestiae iste dicta voluptatem est totam. Aut ab maxime repellat aut in. Earum iure quo nihil ipsam odio.'),
(72, 'Maria Dian', '(+62) 282 1564 ', 'niyaga.fujiati@wacana.info', 'Ex et voluptas ut. Recusandae rerum animi nihil dolorem sed. Nihil modi inventore quia repellendus ipsa.'),
(73, 'Carla Zami', '(+62) 771 7695 ', 'wijaya.jaiman@natsir.asia', 'Sit hic ex et. Laborum praesentium qui labore facilis vitae qui libero repudiandae. Ullam aut nihil dolores laboriosam.'),
(74, 'Kamila Nas', '0315 6669 459', 'imayasari@yahoo.co.id', 'Delectus tempora omnis tempora et architecto iusto rerum. Ea sit dolores sed ipsa iste. Fugit rerum ullam aut occaecati.'),
(75, 'Hartana Pr', '(+62) 266 1886 ', 'ardianto.ida@gmail.co.id', 'Hic id labore est sint. Rerum et ea velit non id doloribus qui minus. Error quia laboriosam accusamus. Non dicta perferendis eius commodi et id.'),
(76, 'Jarwi Hida', '029 4323 189', 'jumadi.rajata@wibisono.web.id', 'Distinctio reprehenderit voluptatibus sapiente est voluptatum odit. Sit excepturi minima similique veritatis facere consectetur rem. Non id optio enim nihil porro modi.'),
(77, 'Ajimat Nar', '(+62) 226 7899 ', 'kmandala@waluyo.biz.id', 'Sunt tempore modi ut dignissimos blanditiis. Illum consequatur sit ut nobis consequatur quo. Id quis dolorum assumenda quidem autem. Et earum velit laboriosam tenetur.'),
(78, 'Hendra Sin', '(+62) 467 2403 ', 'almira.melani@wasita.desa.id', 'Omnis eum rerum quia harum. Ut aut est aliquid a sequi adipisci. Optio voluptas dolorem dignissimos nulla. Est est est sed est sit.'),
(79, 'Budi Wibow', '(+62) 897 0439 ', 'nurul.namaga@gmail.co.id', 'Quae deserunt facere quia animi laboriosam omnis. Et inventore illo deleniti laudantium. Itaque iste ut laborum laudantium.'),
(80, 'Wirda Purn', '0354 4833 4469', 'vinsen.adriansyah@gmail.co.id', 'Quis aut corrupti voluptas maxime ex sed voluptatem quod. Nostrum voluptatum dicta sed dolorem officia. Eius id voluptatem autem tempora veniam excepturi laboriosam.'),
(81, 'Jati Samos', '0943 5527 047', 'drajata@yahoo.co.id', 'Eveniet sint facere doloribus qui error in perspiciatis mollitia. Reprehenderit doloremque incidunt in temporibus occaecati non autem. Deleniti dolorem facere modi quos.'),
(82, 'Oni Safitr', '(+62) 470 4265 ', 'melani.rini@kuswoyo.mil.id', 'Voluptatem eligendi ut aut sunt similique aut ducimus. Optio cupiditate totam voluptatibus ratione odit ut aut.'),
(83, 'Rama Bakia', '0855 226 964', 'lmaryati@hutapea.in', 'Libero porro ratione odio est consequatur dolor a. Vel enim corrupti ipsam cum. Quisquam illum modi minima repellat dolorum.'),
(84, 'Dimas Ardi', '0817 826 394', 'zwidodo@sirait.org', 'Non et officia quibusdam qui et saepe vitae. Quibusdam omnis facilis molestiae harum. Saepe eum velit molestiae ut amet id repellendus. Fugiat unde eligendi sit nam sed soluta. Fuga fuga ex est.'),
(85, 'Betania Pe', '(+62) 240 2098 ', 'latupono.rini@wulandari.info', 'Rem quae modi pariatur vero commodi voluptas quia. Nihil iste et aut voluptate. Quod ullam in aut quia totam natus et.'),
(86, 'Anom Mahes', '(+62) 999 0952 ', 'ynababan@melani.co.id', 'Quam ratione temporibus accusamus provident iure provident. Animi quo in ratione deleniti. Vel nisi quasi aut facere saepe.'),
(87, 'Kanda Indr', '0875 6286 065', 'bakianto.firgantoro@najmudin.go.id', 'Deleniti et similique nisi dignissimos error qui est. Voluptas qui eligendi ipsa. Voluptatibus ad in placeat nisi. Quod odit at autem quo ut consequatur.'),
(88, 'Wani Usama', '0743 2562 987', 'mriyanti@yahoo.com', 'Aliquid dolores totam est perspiciatis. Dolores occaecati autem earum pariatur quia eos.'),
(89, 'Mustofa Si', '(+62) 993 7961 ', 'canggriawan@pudjiastuti.co.id', 'Dolor corporis excepturi et ad sed eum. Aut vero et qui. Voluptates iure sunt incidunt pariatur consequatur.'),
(90, 'Luwes Naba', '0957 1993 360', 'sabri.kusmawati@yahoo.com', 'Deleniti occaecati expedita corporis aut omnis. Minus dolores aut accusamus a fugit impedit sapiente.'),
(91, 'Intan Zula', '0678 4486 763', 'wardaya57@yahoo.co.id', 'Eveniet quis maiores voluptas perspiciatis dolor beatae in. Cum corporis molestias aut nisi. Voluptates officiis exercitationem at ex nihil optio explicabo. Ratione qui aut quia possimus molestiae.'),
(92, 'Gasti Sals', '0823 7553 1764', 'gilda.sirait@yahoo.co.id', 'Eos est quod aut voluptas quae aut enim. Possimus et labore magni rerum consequatur sit. Animi et et officiis neque. Tempora eum dolorem id nostrum voluptatem.'),
(93, 'Luluh Walu', '(+62) 506 2663 ', 'usetiawan@farida.tv', 'Aut illum rerum nostrum repellat commodi quam. Sit praesentium nihil nulla placeat aut odio.'),
(94, 'Anita Uyai', '0242 8235 064', 'arahimah@hastuti.tv', 'Quod doloribus sit quia hic et. Vitae deserunt sint autem explicabo voluptas dolorum laborum molestiae. Sit quo esse velit perspiciatis. Et eaque qui similique.'),
(95, 'Harjaya Pa', '0299 9513 7486', 'cahya.mardhiyah@yahoo.co.id', 'Facere velit quia dicta sequi qui corrupti porro. Dolores nobis sapiente natus error minima et repellat. Voluptatem recusandae quae voluptatem. Magni rerum eveniet consectetur est.'),
(96, 'Muhammad S', '(+62) 378 9638 ', 'daliono83@yahoo.com', 'Eaque qui quam aut similique pariatur et earum. Unde ut atque vero sed quod. Quis eius deserunt fuga culpa. Dignissimos consequatur enim illum. Et velit consectetur ipsum inventore ut.'),
(97, 'Rudi Johan', '0984 7726 2209', 'fujiati.vino@yahoo.co.id', 'Blanditiis dolor recusandae ut amet quaerat corporis. Et nobis saepe quia consequatur. Minima qui laboriosam dolore corrupti inventore.'),
(98, 'Wasis Tham', '0775 6534 614', 'putra.yusuf@yahoo.co.id', 'Tenetur est deserunt enim eum qui autem consequuntur. Commodi eligendi consequatur ex quod. Ut veritatis consequatur repudiandae id temporibus. Est ab perferendis non ut reprehenderit doloremque.'),
(99, 'Dina Amali', '(+62) 603 5991 ', 'akarsana51@gmail.com', 'Hic aliquam ut animi esse ipsa saepe. Harum qui iusto culpa rem pariatur quibusdam quia mollitia.'),
(100, 'Perkasa Ta', '0965 7661 989', 'nnovitasari@najmudin.tv', 'Architecto sit beatae laudantium aut odit quod illum qui. Totam facere nobis ut ut. Ratione explicabo dolor expedita aliquam magnam facere. Ex a molestias praesentium sunt excepturi.'),
(101, 'Chandra Hi', '0873 3607 7565', 'belinda98@anggraini.mil.id', 'Et eos quo vel reprehenderit quasi omnis. Dolor sed iusto omnis. Excepturi nostrum reiciendis est natus quo. Et magni sit molestias dolorem hic voluptate tempora.'),
(102, 'Kambali Ma', '0290 6069 4969', 'chalim@halim.web.id', 'Voluptatum qui ipsa est aut et. Aut deserunt et voluptas. Harum aliquam occaecati suscipit optio omnis. Magnam repellat magnam quae accusamus deserunt minus consequuntur.'),
(103, 'Fitria Van', '(+62) 898 0015 ', 'asitumorang@januar.mil.id', 'Ipsam voluptatem quisquam sit repellat et nemo ea. Ab adipisci deleniti quis vel perspiciatis. Non pariatur tempora quasi qui a ut. Facere officia odio quis illum ipsum eum non deleniti.'),
(104, 'Intan Pusp', '(+62) 652 9822 ', 'ulya76@gmail.com', 'Officia assumenda expedita eius voluptatibus nobis incidunt consectetur. Ipsam et earum libero laborum odit.'),
(105, 'Respati Ha', '(+62) 285 0114 ', 'lazuardi.ratna@budiyanto.org', 'Minus officia aspernatur sunt sint. Est hic illo placeat beatae.'),
(106, 'Galur Wasi', '0864 9849 6380', 'alaksita@gmail.com', 'Repudiandae ut ipsum exercitationem ut dignissimos ea quos atque. Et reprehenderit corrupti aut sunt qui est porro. Dolor porro accusamus a iure. Ut deserunt enim dolorem quo.'),
(107, 'Ghaliyati ', '(+62) 873 272 8', 'saragih.nadia@gmail.co.id', 'Sint atque magnam perferendis maxime quo. Distinctio molestias ducimus est sunt. Eveniet possimus omnis eum consequuntur molestiae veniam ratione beatae. Nisi quis distinctio et nemo.'),
(108, 'Rahmi Yuli', '(+62) 304 1050 ', 'hakim.xanana@gmail.com', 'Magni eius dolorem voluptatem harum voluptates unde. Beatae voluptatem aut deleniti deserunt ea amet quae. Neque vero assumenda repellendus rem maiores itaque labore.'),
(113, 'Aku', '01111111111', 'aku@aku.aku', 'akuakuakuakuaku');

-- --------------------------------------------------------

--
-- Table structure for table `futsal`
--

CREATE TABLE `futsal` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slide_1` varchar(255) NOT NULL,
  `slide_2` varchar(255) NOT NULL,
  `slide_3` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `gambar`, `created_at`, `update_at`) VALUES
(1, 'Arema vs Barito Putera', 'gal1.png', '2021-05-03 12:26:00', '2021-05-08 12:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slide_1` varchar(255) NOT NULL,
  `slide_2` varchar(255) NOT NULL,
  `slide_3` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`id`, `nama`, `gambar`, `slide_1`, `slide_2`, `slide_3`, `fasilitas`, `alamat`, `jam_operasional`, `kontak`, `created_at`) VALUES
(11, 'Cakra Gym ', 'cakra.jpg', 'cakra1.jpg', 'cakra2.jpg', 'cakra3.jpg', 'Kamar Mandi, Alat Gym lengkap', 'Jl. H. Abdul Gani I No.2, RT.003/RW.002, Kalibaru, Kec. Cilodong, Kota Depok, Jawa Barat 16414', '08.00 - 23.00', '081284849840', '2021-07-05 12:01:17'),
(12, 'Duo Shine Fitness', 'duo.jpg', 'duo1.jpg', 'duo2.jpg', 'duo3.jpg', 'Alat Gym Lengkap', 'l. K.H.M. Yusuf Raya, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411', '07.30 - 22.00', '085959544200', '2021-07-05 12:03:13'),
(13, 'IKGAI Fitness', 'ikgai (2).jpg', 'ikgai (1).jpg', 'ikgai (3).jpg', 'ikgai (4).jpg', 'Alat Gym Lengkap', 'Jl. Margonda Raya No.Kav. 88, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423', '06.00 - 21.00', '(021) 77218781', '2021-07-05 13:56:58'),
(14, 'Nevaquit Gym', 'neva (1).jpg', 'neva (2).jpg', 'neva (3).jpg', 'neva (4).jpg', 'Alat Gym Lengkap', 'l. Kemang Raya, Sukmajaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412', '06.30 - 22.00', '0838-0640-8818', '2021-07-05 14:06:53'),
(15, 'TS Gymnastics Club', 'ts.png', 'ts1.jpg', 'ts2.jpg', 'ts3.jpg', 'Alat Gym Lengkap', 'Jl. Arif Rahman Hakim No.01-02, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16432', '09.00 - 21.00', '0857-9749-6871', '2021-07-05 14:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-04-28-090515', 'App\\Database\\Migrations\\News', 'default', 'App', 1619601157, 1),
(2, '2021-04-28-091310', 'App\\Database\\Migrations\\AlterNews', 'default', 'App', 1619601220, 2),
(3, '2021-05-03-052352', 'App\\Database\\Migrations\\Gallery', 'default', 'App', 1620019530, 3),
(5, '2021-05-03-091152', 'App\\Database\\Migrations\\Feedback', 'default', 'App', 1620033427, 4),
(6, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1620534698, 5),
(7, '2021-05-31-093931', 'App\\Database\\Migrations\\Futsal', 'default', 'App', 1622454291, 6),
(8, '2021-05-31-094844', 'App\\Database\\Migrations\\Basket', 'default', 'App', 1622454561, 7),
(9, '2021-05-31-095018', 'App\\Database\\Migrations\\Futsal', 'default', 'App', 1622454644, 8),
(10, '2021-05-31-095100', 'App\\Database\\Migrations\\Badmin', 'default', 'App', 1622454692, 9),
(11, '2021-05-31-095106', 'App\\Database\\Migrations\\Gym', 'default', 'App', 1622454692, 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) DEFAULT 'Zanov',
  `cover` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp(),
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `cover`, `content`, `created_at`, `update_at`, `slug`) VALUES
(1, 'Persija Juara Piala menpora 2021', 'Zanov', 'news1.jpg', 'Solo - Persija Jakarta keluar sebagai juara Piala Menpora 2021. Macan Kemayoran mengalahkan Persib Bandung di dua leg pertandingan final.\r\nFinal Piala Menpora 2021 pertemukan duel El Clasico. Persija vs Persib tersaji di dua leg final.\r\n\r\nLeg pertama berlangsung di Stadion Maguwoharjo, Rabu (21/4/2021). Di laga itu, Persija menang 2-0, lewat gol Braif Fatari dan Taufik Hidayat.\r\nSementara leg kedua digelar di Stadion Manahan Solo, Minggu (25/4/2021). Persija kembali menang 2-1. Gol Osvaldo Haay dan \r\nRiko Simanjuntak, cuma dibalas Ferdinan Sinaga.\r\n\r\nPersija pun keluar menjadi juara Piala Menpora 2021. Sementara Persib harus puas menjadi runner up. Sepanjang gelaran Piala Menpora 2021, \r\nPersija tampil apik. Di fase grup, Marko Simic dkk keluar sebagai pemimpin Grup B dengan 6 poin, hasil dua kemenangan dan sekali kalah.\r\n\r\nDi babak delapan besar, Persija kemudian menyingkirkan Barito Putera. Kemenangan 1-0 berkat gol Simic mengantar tim Ibu Kota ke semifinal.\r\nDi babak empat besar, Persija bisa menyingkirkan PSM Makassar. Berimbang 0-0 pada waktu normal di dua leg final, Persija kemudian menang \r\nadu penalti 4-3 atas Juku Eja.\r\n\r\nKemudian di final, Persija perkasa atas Persib. Setelah menang 2-0 di leg pertama, Persija kembali menang 2-1 di leg kedua, dan sudah cukup \r\nmemastikan trofi Piala Menpora 2021.', '2021-04-28 16:33:10', '2021-05-03 00:00:00', 'persija-juara-gg'),
(16, 'Kepolisian Berik Izin  Piala Menpora 2021', 'Zanov', 'kapolri_dan_menpora_1-169.jpg', 'Kepolisian akhirnya memberikan izin (pertandingan) untuk gelaran turnamen pramusim, Piala Menpora 2021. Hal itu disampaikan Kapolri \r\nJenderal Listyo Sigit Prabowo dalam jumpa pers di Mabes Polri, hari ini.\r\n\r\nDalam kesempatan itu, Kapolri bertemu Menpora, Zainudin Amali sebagai lanjutan untuk membahas perizinan. Listyo Sigit Prabowo mengatakan \r\nkepolisian memberikan izin setelah mempelajari proposal PSSI dan juga melihat situasi saat ini.\r\n\r\n\"Hari ini saya mendapatkan kunjungan Menpora sebagai tindak lanjut pertemuan sebelumnya, dimana beliau berharap bisa dilaksanakan kompetisi \r\nterkait dengan sepak bola,\" kata Kapolri. \r\n\r\n\"Menindaklanjuti hal tersebut kami kemudian melaksanakan rapat koordinasi untuk kemudian mempelajari bersama terkait dengan kondisi \r\nterkini yang ada bahwa olahraga khusus sepak bola tetap harus berjalan,\" lanjutnya. \r\n\r\nKepolisian menyatakan akan mengeluarkan surat resmi terkait izin digelarnya Piala Menpora 2021 pada petang ini. Kepolisian juga mengingatkan \r\nagar pelaksanaan turnamen harus mengedepankan kesehatan dan keselamatan, serta wajib menjalankan protokol kesehatan.\r\n\r\n\"Sore hari ini saya akan serahkan surat izin keramaian pra kompetisi,\" ujar Kapolri Jenderal Listyo Sigit Prabowo.\r\n\r\n\"Dalam rapat kami sepakat untuk berikan kesempatan tentunya dengan catatan bahwa penegakan prokes (protokol kesehatan) itu menjadi syarat \r\nutama. Tentunya dengan adanya kesepakatan tersebut,kami harus sama-sama menjaga komitmen, baik klub bola, pemain, dan suporter. \r\nDimana pun nantinya apabila ini diselenggarakan, penegakan prokes itu jadi prioritas,\" sambungnya.', '2021-05-09 10:25:18', '2021-05-09 10:25:18', 'izin-piala-menpora'),
(17, 'Gelandang Persib Alami Cedera Kepala', 'Zanov', '041779900_1618596038-20210416IY_Persib_Bandung_vs_PS_Sleman_23.jpg', 'Gelandang Persib Bandung, Dedi Kusnandar, harus dilarikan ke rumah sakit. Pemain berusia 29 tahun itu menderita cedera kepala di tengah \r\npertandingan melawan PSS Sleman pada leg kedua semifinal Piala Menpora 2021 di Stadion Manahan, Solo, Senin (19/4/2021) malam.\r\n\r\nDedi berbenturan dengan pemain PSS pada menit ke-38. Akibatnya, mantan gelandang Arema FC itu tidak bisa melanjutkan pertandingan.Dedi \r\nterpaksa ditandu untuk keluar lapangan dan dibawa ke Rumah Sakit Jogja International Hospital, Sleman, untuk mendapatkan perawatan \r\nlebih lanjut.', '2021-05-09 10:33:32', '2021-05-09 10:33:32', 'gelandang-persib-cedera'),
(19, 'Hilman Syah Layak Dipanggil ke Timnas', 'Zanov', '063499700_1618765880-7_20210418IY_Persija_Jakarta_vs_PSM_Makassar_08.jpg', 'Penampilan heroik Hilman Syah pada leg kedua semifinal Piala Menpora 2021 menuai pujian dari netizen. Kiper PSM Makassar itu dianggap layak \r\nuntuk membela Timnas Indonesia. Hilman Syah berhasil empat kali menggagalkan eksekutor Persija dalam adu tendangan penalti pada leg \r\nkedua laga empat besar Piala Menpora di Stadion Manahan, Solo, Minggu (18/4/2021).\r\n\r\nHilman Syah juga nihil kebobolan dalam dua kali pertemuannya dengan Persija di semifinal. Namun, PSM harus kalah 3-4 melalui babak tos-tosan.\r\nAsisten pelatih Timnas Indonesia, Nova Arianto, sepakat dengan penilaian netizen terhadap penampilan Hilman Syah. Namun, pemanggilan penjaga \r\ngawang berusia 23 tahun itu tergantung Kim Hae-woon.\r\n\r\nKim Hae-woon adalah pelatih kiper Timnas Indonesia. Pria asal Korea Selatan tersebut diberikan wewenang untuk merekomendasikan penjaga \r\ngawang ke pelatih Shin Tae-yong. \"Hilman Syah tampil sangat baik melawan Persija dan layak  dicoba ke Timnas Indonesia,\" kata Nova, Senin \r\n(19/4/2021).\r\n\r\nTimnas Indonesia akan menggelar pemusatan latihan di Jakarta pada 1 Mei 2021 untuk persiapan Kualifikasi Piala Dunia 2022 Zona Asia. Berkaca \r\ndari performanya, Hilman Syah berpeluang untuk diberikan kepercayaan.\r\n\r\n\"Namun, mengenai siapa kiper yang akan dipanggil ke Timnas Indonesia, staf pelatih kiper lebih paham tentang kriteria kiper yang layak,\" tutur Nova.\r\n\r\nPSM adalah tim pertama Hilman Syah di dunia sepak bola. Dia memperkuat tim berjulukan Pasukan Ramang itu sejak 2017. Sepanjang kariernya, \r\npenjaga gawang berpostur 183 cm itu belum pernah dipanggil ke Timnas Indonesia level usia dan senior.', '2021-05-09 10:43:59', '2021-05-09 10:43:59', 'hilman-syah-timnas'),
(21, 'Pasang Surut Rivalitas Persija Vs Persib', 'Zanov', '075501600_1618922008-Piala_Menpora_-_Sejarah_Panjang_Rivalitas_Persib_Bandung_Vs_Persija_Jakarta.jpg', 'Final ideal Piala Menpora 2021 yang diidam-idamkan banyak pihak terwujud. Persija Jakarta akan berhadapan dengan Persib Bandung di partai \r\npuncak. Persija Jakarta dan Persib punya sejarah rivalitas panjang dalam dua dekade belakangan. Persaingan antarkeduanya bukan meruncing \r\ndi atas lapangan, melainkan di luar lapangan.\r\n\r\nPermusuhan antara The Jakmania, pendukung Persija, dan Bobotoh, loyalis Persib, menjadi pangkal penyebabnya. Entah siapa yang memulai \r\nsebab kedua kubu saling menuding, pergesekan kedua suporter di satu stasiun televisi swasta pada era 2000-an menyebarkan virus negatif \r\nkebencian turun menurun.\r\n\r\nEfek negatif dirasakan ketika Persija bertandang ke Bandung atau sebaliknya saat Persib menyambangi Jakarta. Suporter kedua tim kerap \r\nmelancarkan aksi teror. Pemandangan menumpang kendaraan taktis (rantis) model barracuda dari lokasi penginapan menujuk stadion menjadi \r\nsesuatu yang wajar.\r\n\r\nCerita pilu tewasnya sejumlah suporter dari kedua klub membuat bara api permusuhan semakin panas. Dendam kesumat merasuki kedua \r\npaguyuban suporter. Dari mulai level pengurus teras hingga massa akar rumput. Kata-kata kasar atau tulisan berbau penghinaan bertebaran \r\ndi stadion baik ketika Persija Jakarta menjadi tuan rumah atau Persib.\r\n\r\nSejak meninggalnya seorang Bobotoh, Ricko Andrean pada 2017 dan seorang The Jakmania, Haringga Sirila, setahun berselang, kedua kelompok \r\nsuporter terus berefleksi untuk minimal menurunkan tensi permusuhan.\r\n\r\nPertemuan kedua tim pada 2019 menjadi buktinya. Untuk pertama kali sejak lima tahun terakhir, Persija bisa menjamu Persib di Stadion Utama \r\nGelora Bung Karno (SUGBK), Jakarta, dengan penonton.\r\n\r\nPertandingan tidak berakhir memuaskan untuk tuan rumah. Persija diimbangi Persib 1-1. Positifnya, The Jakmania mulai bisa menerima hasil itu \r\ndengan lapang dada, tidak ada luapan kekecewaan dalam bentuk kekerasan.\r\n\r\n\"Buat suporter terkhusus mungkin Bobotoh dan The Jakmania, selalu saya sampaikan bahwa bersatulah kalian demi bangsa itu, bersatulah kalian \r\ndemi bangsa, kami saudara semuanya,\" kata kapten Persib, Supardi Nasir.\r\n\r\nMeredanya hawa perseteruan kedua pendukung juga disebabkan faktor usia. Suporter yang pernah terlibat permusuhan di eranya, tidak lagi \r\nterpancing seiring dengan pergeseran zaman dan berjalannya waktu. Kekerasan menjadi cara kuno untuk menunjukkan siapa yang terhebad \r\ndi antara keduanya.', '2021-05-09 15:26:43', '2021-05-09 15:26:43', 'rival-persib-persija'),
(22, '3 Pemain Terbaik Semifinal Piala Menpora', 'Zanov', '012743400_1618920215-Piala_Menpora_-__3_Pemain_Terbaik_Semifinal.jpg', 'Persija Jakarta dan Persib Bandung keluar sebagai pemenang di babak semifinal Piala Menpora 2021. Keduanya berhasil lolos dari lubang jarum \r\nsecara dramatis. Persija harus bersusah payah mengalahkan PSM Makassar melalui adu tendangan penalti. Pasalnya, kedua tim bermain \r\nimbang 0-0 dalam dua kali pertemuan.\r\n\r\nPersija mengatasi PSM 4-3 melalui babak tos-tosan setelah dua kali tertinggal. Macan Kemayoran, julukannya, juga membutuhkan penendang \r\nkedelapan untuk menang.\r\n\r\nPersib nyaris memiliki cerita yang sama dengan Persija. Namun, tim berjulukan Pangeran Biru itu masih mampu mengalahkan PSS Sleman 3-2 \r\nsecara agregat lewat dua leg. Persib berhasil menang 2-1 atas PSS pada leg pertama. Pada pertemuan kedua, Pangeran Biru tertinggal 0-1 \r\nhingga menit ke-84 sebelum Ezra Walian menyamakan kedudukan untuk mengunci tiket ke final Piala Menpora.\r\n\r\nSejumlah pemain tampil impresif punya peran besar terhadap permainan timnya. Bola.com merangkum tiga di antara yang terbaik di semifinal \r\nPiala Menpora. Diantaranya :\r\n\r\nMarc Klok berhasil keluar dari tekanan ketika melawan PSM yang notabene mantan timnya. Gelandang berusia 28 tahun itu kerap menjadi \r\nsasaran permainan keras tim lawan. Namun, emosi Klok tidak terpancing. Dia tetap mampu menjadi jenderal lapangan tengah Persija.\r\n\r\nHilman Syah adalah bintang yang sebenarnya pada partai PSM kontra Persija. Dia dua kali tidak kebobolan dalam semifinal dan menahan empat \r\ntendangan di babak tos-tosan.\r\n\r\nEzra Walian adalah pemain yang tepat di tempat yang tepat. Berkat gol penyama kedudukannya, Persib berhasil melaju ke final Piala Menpora.', '2021-05-09 15:39:22', '2021-05-09 15:39:22', '3-pemain-terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'orioncell123@gmail.com', 'zanov', '$2y$10$S1zlnTKARGqYyjvH99gBv.3FH9Dk3gzI0tyttiQjOAIahZ1CJ5Vxa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-08 23:48:27', '2021-05-08 23:48:27', NULL),
(6, 'reza@pradito.com', 'reza', '$2y$10$eUCUlRevBj3WX9LTvslgtuN/vAcDfMCf4eHYKbqxSwTc6Lo4aGh52', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-09 01:38:19', '2021-05-09 01:38:19', NULL),
(7, 'pradito30@gmail.com', 'rezanp', '$2y$10$6y7ffNfIg3B.sQoZCyJS9eDhHoB.npglHnA1fL3Ec9Du205Qme4qO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-05-09 06:28:08', '2021-05-09 06:28:08', NULL),
(8, 'admin@gmail.com', 'AdminProject', '$2y$10$GsnCXJ3/Af21PxCsb9l4DeMd475YiEu7cEpcucub1nqK0O61DRu0m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-11 04:05:03', '2021-06-11 04:05:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `badmin`
--
ALTER TABLE `badmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `futsal`
--
ALTER TABLE `futsal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badmin`
--
ALTER TABLE `badmin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `futsal`
--
ALTER TABLE `futsal`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
