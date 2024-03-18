-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2024 at 10:45 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skycodeit_arena`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_details`
--

CREATE TABLE `apply_details` (
  `apply_id` int NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pincode` int NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `fathername` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fmobile` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `course` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `check_list1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `check_list2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `check_list3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_details`
--

INSERT INTO `apply_details` (`apply_id`, `fname`, `lname`, `address`, `city`, `pincode`, `dob`, `email`, `mobile`, `fathername`, `fmobile`, `course`, `check_list1`, `check_list2`, `check_list3`) VALUES
(21, 'Yoga', 'Lysandra Logan', '', 'Salem', 0, '0000-00-00', 'yogaprakash57@gmail.com', '9677431553', '', '', 'UI/UX Design', '', '', ''),
(22, 'yoga', 'yoga', '', 'sa', 0, '0000-00-00', 'yogaprakash57@gmail.com', '9677431553', '', '', 'DAE-Diploma in Animation Engineering', '', '', ''),
(23, 'Neha ', 'Jain', 'Srinagar ', 'Bangalore', 560050, '1995-03-22', 'nehak2203@gmail.com', '8904540934', 'Kiran jain', '', 'Graphics, Web Design and Development', 'SSLC/Class X', 'PUC', 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `apply_status`
--

CREATE TABLE `apply_status` (
  `status_id` int NOT NULL,
  `apply_status_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `query` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `verified` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_status`
--

INSERT INTO `apply_status` (`status_id`, `apply_status_id`, `name`, `email`, `mobile`, `query`, `verified`) VALUES
(123, '49.205.148.155', 'Skycode', 'yogaprakash57@gmail.com', '9677431553', 'ggg', 'yes'),
(124, '', 'yoga', 'yoga@gmail.com', '9677431553', 'arena', ''),
(125, '', 'yoga', 'yoga@gmail.com', '9677431553', 'arena', ''),
(126, '', 'yoga', 'yoga@gmail.com', '9677431553', '', ''),
(130, '49.37.179.120', 'Maruthi', 'maruthupunith@gmail.com', '6361543811', '', 'yes'),
(131, '', 'Preeti ', 'preetimish33@gmail.com', '8296304678', 'VFX ', ''),
(132, '106.220.250.110', 'Yoi', 'yog@gmail.com', '9677431553', 'Ggg', 'yes'),
(133, '', 'Aishwarya', 'aishuabhi17@gmail.com', '8749097639', 'Interested in Animation Course', ''),
(134, '', 'Kishan datta B P ', 'dattabpk36@gmail.com', '8660390982', 'Hi ', ''),
(135, '', 'Jayesh', 'j.vadhia@yahoo.com', '9611140000', 'Interested in Graphic design and digital marketing courses', ''),
(136, '42.105.124.197', 'Akash', '', '8970526117', '', 'yes'),
(137, '49.43.240.86', 'preetham', 'preethamkrishna1998@gmail.com', '7899094353', '', 'yes'),
(138, '49.43.240.86', 'preetham', 'preethamkrishna1998@gmail.com', '7899094353', '', 'yes'),
(139, '49.43.240.86', 'preetham', 'preethamkrishna1998@gmail.com', '7899094353', '', 'yes'),
(140, '', 'Mari', 'maripandian557@gmail.com', '0638373066', 'Hhhh', ''),
(141, '', 'KIRUTHIKA A R ', 'jrk1343@gmail.com', '9843246748', 'Application ', ''),
(142, '49.47.217.184', 'KIRUTHIKA A R ', 'jrk1343@gmail.com', '9843246748', 'Application ', 'yes'),
(143, '', 'harish', 'arenabsk@gmail.com', '9686939721', '', ''),
(144, '152.58.218.225', 'Asrith ', 'asrith321@gmail.com', '9567079440', '', 'yes'),
(145, '', 'HemanthKUMARR ', 'hemanthkumar19r99@gmail.com', '9880495724', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_images`
--

CREATE TABLE `carousel_images` (
  `carousel_id` int NOT NULL,
  `carousel_img` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carousel_images`
--

INSERT INTO `carousel_images` (`carousel_id`, `carousel_img`, `url`) VALUES
(23, 'gallery/7f5363a66343b52e8569b427d42cea91.jpg', 'https://youtu.be/R-FKU-hDplY?si=xAppgfO5thM6SPWY'),
(24, 'gallery/3c9d9b74ce5bdd16ed08e8778de471e8.jpg', 'https://youtu.be/mJWGw5-YYLY?si=v4UUy-RnpU7Gejen'),
(25, 'gallery/4b84e60a09a363b5c997afa9605f3c21.jpg', 'https://youtu.be/N5drobDnPxM?si=HrmzhcUaeWTIMXW7'),
(26, 'gallery/d3480030f3230a1c5646d62c302b039f.jpg', 'https://youtu.be/0sRmr_MZ274?si=W2SOOISeSUrAwosV'),
(27, 'gallery/3bdbc5eb555e4f55d6f8962df62d700d.jpg', 'https://youtu.be/qyynIr5VSKo?si=jDVEpnWgV3g2529e'),
(28, 'gallery/d357c53419d750225fdcf51fbcd7c949.jpg', 'https://youtu.be/YpKW_FOBRDo?si=WwuJ8R8GdjejlBSv'),
(29, 'gallery/20ff91e265a92588387211825623de8a.jpg', 'https://youtu.be/UCfTrOK1L10?si=KC6B3IOfrhJ6Tfh5'),
(30, 'gallery/b1dea067e5a99da5d7cf600890af89bc.jpg', 'https://youtu.be/lmtlaWi7tfY?si=OlPaO4l-gyY6xVsk'),
(31, 'gallery/4032c01050af351efca3824754bbf144.jpg', 'https://youtu.be/byKax4h-Cao?si=TNkNIpUTTvVxvOfm'),
(32, 'gallery/dac42244448187d9ed40ac6411abd283.jpg', 'https://youtu.be/QAofdnPXom0?si=uGgQk_P3QBjFw1Ip'),
(33, 'gallery/899bf6e876ce8c626ff0237c21136e62.jpg', 'https://youtu.be/FOoSzfPSNIw?si=GHHUMjKsKS8U0gJr');

-- --------------------------------------------------------

--
-- Table structure for table `download_brochure`
--

CREATE TABLE `download_brochure` (
  `pdf_id` int NOT NULL,
  `pdf_title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pdf_file` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `imagefiles` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `download_brochure`
--

INSERT INTO `download_brochure` (`pdf_id`, `pdf_title`, `pdf_file`, `imagefiles`) VALUES
(9, 'VFX prime', 'pdf/uploads/3019ff9b58b18c6515e7f28f45def82f.pdf', 'pdf/img/5ecc850905f29e7a7ff051467059298d.jpg'),
(11, 'VFX Film Making', '', 'pdf/img/97bdc00062ebbbc91c81f55a0d1eada4.jpg'),
(12, 'VFX Compositing & Editing', '', 'pdf/img/97fd0d1e55be84d61dfe5e3892fb4f98.jpg'),
(13, 'UI / UX', '', 'pdf/img/32816c7c36b6631582fbdb101f1034f2.jpg'),
(14, 'GRAPHIC WEB DESIGN AND DEVELOPMENT', 'pdf/uploads/14b5ff531ed3271ba773e08eb5944a92.pdf', 'pdf/img/b173bf890968e20b59e188f8cd2756c5.jpg'),
(16, 'Animation Prime', '', ''),
(17, '3D Digital  Game Art', 'pdf/uploads/cba1b53716e8997733df2c21557a6836.pdf', 'pdf/img/8a8a92f2e5628b5ed9d89a8f6f15957c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int NOT NULL,
  `gallery_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `image`) VALUES
(22, 'GAFX', 'gallery/80ccb60968957a132f85bb7881eedb87.jpg'),
(24, '', 'gallery/70fe63a32858fe3392e00275381edc4a.jpg'),
(25, '', 'gallery/4b9fb111b471d1c5da5a60f99918e121.jpg'),
(26, '', 'gallery/1de8d9c05e9097eb637886334cecc47a.jpg'),
(27, '', 'gallery/cfd511514ca8006004d25fa4aebcaadc.jpg'),
(28, '', 'gallery/e58b2136011b56479d1f57023fb4cf33.jpg'),
(29, '', 'gallery/9fa7843b2bfc78cc58e8ef94269e1d60.jpg'),
(30, '', 'gallery/5f2308339634b460643a6f2bdbfbd628.jpg'),
(31, '', 'gallery/8637168d1c64dc82154590e4a55d3ae3.jpg'),
(32, '', 'gallery/9d7e13fdc514015cb389d8cb76f622ef.jpg'),
(37, '', 'gallery/0cf0c13d0ee4bf3e659300d003575ef4.jpg'),
(38, '', 'gallery/d2e6bc77f4d524424ac4ca6e3885874e.jpg'),
(39, '', 'gallery/0faf0e3b2aa522f06a0f46f145f6487f.jpg'),
(40, '', 'gallery/d8af4cb5b76f2520e9ad79a94a3596ca.jpg'),
(41, '', 'gallery/65d31b781888f337ae303173beff9656.jpg'),
(42, '', 'gallery/0c4d25f371460fe4f48b2fabfb231300.jpg'),
(43, '', 'gallery/5d17ca6fa2784a9f71ba230c831cc21f.jpg'),
(44, '', 'gallery/30c24686dd3a58306885e7f54851fb63.jpg'),
(45, '', 'gallery/df175c70b29a38bd0bde26638671280c.jpg'),
(46, '', 'gallery/73935826f223ccd9ecd60b429fa4e39c.jpg'),
(47, '', 'gallery/e87fc4ac31cc8b2750acae8b1b72d02d.jpg'),
(48, '', 'gallery/b825c6594e53fa3caaa5897a31d9327d.jpg'),
(50, '', 'gallery/d9e5b18f9a0dc52c8c60ba8641413f9e.jpg'),
(52, '', 'gallery/be320451d727dc7bddfc2fe523ba1061.jpg'),
(53, '', 'gallery/f1643f90c293c8f491db90205cfa552b.jpg'),
(54, '', 'gallery/06c9e3729d7cd9781965fbd207cf93cc.jpg'),
(55, '', 'gallery/cf3cc71806954128d54ec5dfcbb7608f.jpg'),
(56, '', 'gallery/40673f427bbe17346150a56e6673f53a.jpg'),
(57, '', 'gallery/a2ead59371cae6293bbbb7f155a109ef.jpg'),
(58, '', 'gallery/9cdc983116007f9d65a0524c1cdb909a.jpg'),
(59, '', 'gallery/ebbdd29418694fddd2ad9393a3813c1f.jpg'),
(60, '', 'gallery/fbeec05745b39b4f15454c01acbf1410.png'),
(61, '', 'gallery/74517906193a9a10c6bec0c0b0293e17.png'),
(62, '', 'gallery/28a878b4db6632f99f783fc101ccdf2f.png'),
(63, '', 'gallery/9b8f42e0402dc4742bac9f2c10b37890.png'),
(64, '', 'gallery/409ce5e4089ecdaf2aacfe503e0c6b2e.png'),
(65, '', 'gallery/9cab026714ec7782b3e8450037657dc0.png'),
(66, '', 'gallery/d3abb9f9b03f21ebde17d65cd47a4823.png'),
(67, '', 'gallery/0ddf0d1f543dece50954b140f4f29715.png'),
(68, '', 'gallery/5a7f1ea570349f633dd238841f7bb4f5.png'),
(69, '', 'gallery/f2acb336bcce4c2033f6f19deb68a943.png'),
(70, '', 'gallery/59cc44992e7107e90ed21f9c94447875.png'),
(71, '', 'gallery/0e0785e616714eb2f86269302a7fc8c8.jpg'),
(72, '', 'gallery/c66b72dc13a9d369422cc15c250386fa.jpg'),
(73, '', 'gallery/4347304a364ee8ca78978b98212ec65a.jpg'),
(75, '', 'gallery/ecb41a374aa7eae51aa5fb905c0fa3ea.png'),
(76, '', 'gallery/58097d49324c7931641200c8e32e792a.png');

-- --------------------------------------------------------

--
-- Table structure for table `students_speaks`
--

CREATE TABLE `students_speaks` (
  `speaks_id` int NOT NULL,
  `speaks_name` varchar(100) NOT NULL,
  `speaks_company` varchar(100) NOT NULL,
  `speaks_designation` varchar(100) NOT NULL,
  `students_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_speaks`
--

INSERT INTO `students_speaks` (`speaks_id`, `speaks_name`, `speaks_company`, `speaks_designation`, `students_email`, `images`) VALUES
(1, 'yoga', 'Arena', 'Hr', 'yoga@gmail.com', 'img/4dfdf54eed88ea8f29660df23fa84a9c.jpg'),
(2, 'yoga', 'Arena', 'ddd', 'yoga@gmail.com', 'img/a149f0f76acde03deed810f0a22eb537.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_2d_animations`
--

CREATE TABLE `students_works_2d_animations` (
  `animations_id` int NOT NULL,
  `animations_file` varchar(200) NOT NULL,
  `animations_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_2d_animations`
--

INSERT INTO `students_works_2d_animations` (`animations_id`, `animations_file`, `animations_name`) VALUES
(2, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/HDh58mFU5M4\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika'),
(3, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/3wDiqlTNlfQ\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika'),
(4, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/IsN-fqGzpHg\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika'),
(5, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/VzT2xurZrbI\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi'),
(6, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/RLzC55ai0eo\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_3d_animations`
--

CREATE TABLE `students_works_3d_animations` (
  `animations_id` int NOT NULL,
  `animations_file` varchar(200) NOT NULL,
  `animations_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_3d_animations`
--

INSERT INTO `students_works_3d_animations` (`animations_id`, `animations_file`, `animations_name`) VALUES
(10, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/540-23XSRYg\" frameborder=\"0\" allowfullscreen></iframe>', 'Student works');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_architechtural`
--

CREATE TABLE `students_works_architechtural` (
  `architechtural_id` int NOT NULL,
  `architechtural_file` varchar(200) NOT NULL,
  `architechtural_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_architechtural`
--

INSERT INTO `students_works_architechtural` (`architechtural_id`, `architechtural_file`, `architechtural_name`) VALUES
(1, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi'),
(2, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika'),
(3, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'hello'),
(4, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi'),
(5, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_gaming`
--

CREATE TABLE `students_works_gaming` (
  `game_id` int NOT NULL,
  `game_file` varchar(200) NOT NULL,
  `game_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_gaming`
--

INSERT INTO `students_works_gaming` (`game_id`, `game_file`, `game_name`) VALUES
(1, 'images/student_work_gaming/165593e5dd0ee9db2fc1fe963f509170.jpg', 't'),
(2, 'images/student_work_gaming/24aea001c714af8aaf81bc1c0dca71b2.jpg', 'rrr'),
(3, 'images/student_work_gaming/8b75d452c030af63f373e250262ec2d6.jpg', 'sss'),
(4, 'images/student_work_gaming/8a569092306b6d5a1ab22a8a55961dbd.jpg', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_graphics`
--

CREATE TABLE `students_works_graphics` (
  `graphics_id` int NOT NULL,
  `graphics_file` varchar(200) NOT NULL,
  `graphics_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_graphics`
--

INSERT INTO `students_works_graphics` (`graphics_id`, `graphics_file`, `graphics_name`) VALUES
(3, 'images/student_work_graphics/800ceb304c8db46567f9da07f0437056.jpg', 'fff'),
(4, 'images/student_work_graphics/5aec88c7502515ce4a9f969869881651.jpg', 'r'),
(5, 'images/student_work_graphics/39054cb8d565bf67d5a5129089376649.jpg', 'gra'),
(6, 'images/student_work_graphics/296fadd9c65a04d4b8519c9f5a175567.jpg', 'yog');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_mix_media`
--

CREATE TABLE `students_works_mix_media` (
  `media_id` int NOT NULL,
  `media_file` varchar(200) NOT NULL,
  `media_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_mix_media`
--

INSERT INTO `students_works_mix_media` (`media_id`, `media_file`, `media_name`) VALUES
(1, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi'),
(2, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika'),
(3, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi'),
(4, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/0Olv8zM_rps\" frameborder=\"0\" allowfullscreen></iframe>', 'Deepika');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_sketches`
--

CREATE TABLE `students_works_sketches` (
  `sketches_id` int NOT NULL,
  `sketches_file` varchar(200) NOT NULL,
  `sketches_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_sketches`
--

INSERT INTO `students_works_sketches` (`sketches_id`, `sketches_file`, `sketches_name`) VALUES
(3, 'images/student_work_sketches/7968279803acd47498d786790f4a76e3.jpg', 'yyyy'),
(4, 'images/student_work_sketches/3938e0daa95ac2a838408664fa03bc09.jpg', 'yoga'),
(5, 'images/student_work_sketches/2140ea8e1f8e8001a79296db50ca4b96.jpg', 'yoga'),
(6, 'images/student_work_sketches/be25d5f8e95654271458c36dc53ddf58.jpg', 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_vfx`
--

CREATE TABLE `students_works_vfx` (
  `vfx_id` int NOT NULL,
  `vfx_file` varchar(200) NOT NULL,
  `vfx_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_vfx`
--

INSERT INTO `students_works_vfx` (`vfx_id`, `vfx_file`, `vfx_name`) VALUES
(4, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/rZOohIeJb3w\" frameborder=\"0\" allowfullscreen></iframe>', 'child'),
(5, '<iframe width=\"240\" height=\"240\" src=\"//www.youtube.com/embed/rZOohIeJb3w\" frameborder=\"0\" allowfullscreen></iframe>', 'Vathi'),
(6, 'https://youtu.be/Nejxnl6TsZU?si=0E5OnKJysz4urwtw', 'Ceative minds 2023'),
(7, 'https://youtu.be/JLi21iZwt3g?si=Z24i_JD0OFSJYfx2', 'Ceative minds 2023'),
(8, 'https://youtu.be/o25kgOdbKK0?si=23wBXT1CHftZx9yk', 'Ceative minds 2023');

-- --------------------------------------------------------

--
-- Table structure for table `students_works_web_design`
--

CREATE TABLE `students_works_web_design` (
  `design_id` int NOT NULL,
  `design_file` varchar(200) NOT NULL,
  `design_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students_works_web_design`
--

INSERT INTO `students_works_web_design` (`design_id`, `design_file`, `design_name`) VALUES
(1, 'images/student_work_web_design/e63a05bd597b8b586a4ba6c04326354a.jpg', 'yoga'),
(2, 'images/student_work_web_design/c481519d8b8445cafebbce9773f18e13.jpg', 'yoga'),
(3, 'images/student_work_web_design/e204cc5a09962b0d7a4dc4e9e162355b.jpg', 'yoga'),
(4, 'images/student_work_web_design/b3b30bbee0ff31f68c02c62ceb3974e3.jpg', 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `test_id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `test_img` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `test_status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`test_id`, `title`, `descriptions`, `test_img`, `test_status`) VALUES
(15, 'Ankitha ghosh', 'While we are going through this trauma of this virus ARENA BANASAHANKARI helped \r\nme to become self reliant person and explore careers opportunities virtually. Faculties \r\nhelped me to rediscovered my passion for animation and they are helping to reach my \r\ndreams along with having fun.', 'img/6fc0083b0f0f8f1ad3c7793d43494ea3.png', 'Student'),
(16, 'Naveen Kumar S', 'Yesss!! As a team we learned, we enjoyed, we worked on the toughest animation when no one did,\r\nwe shared things and cleared doubts among us, we all were passionate enough to do such work\r\nnever expected that we would get the most friendly and talented faculties, never bored but ever charming.', 'img/0500edf3cbc6332f56f356af80dd88eb.png', 'Student'),
(17, 'Megha Bhat', 'This lockdown stopped me from going beyond my imagination as well as we are sitting at home, but arena animation banashankari helped me to imagine and create new things. And also my faculties are made this lockdown more fun, exiting, as well as informative.', 'img/14c26fb1944570532a95287957d61fda.png', 'Student'),
(18, 'Divya K S', 'This is the best institution to learn animation in bangalore.\r\nFaculties are very friendly.I had a very good experience.\r\nThey took care a lot even in corona time with conducting\r\nonline classes.This is the best platform to achieve\r\nour dream goal in life. \"THANK YOU EVERYONE', 'img/e54193094543d6f079666fa179b46661.png', 'Student'),
(19, 'Rahul ram', 'Lockdown was very boring for others but very interesting\r\nand informative for us, we learnt the most productive\r\nthings through online classes and putting our imaginations\r\ndigitally was a fun part, thanks to the most charming\r\nfaculties and Arena Banashankari.', 'img/e99784eeca056e23d0cfb9b287a4a4ca.png', 'Student'),
(21, 'Krupa B K', 'ARENA BANASHANKARI is the destination where i felt very\r\nhopeful when i spoke to the director of the centre Mr.Prajwal\r\nmade me comfortable about my situation of starting up\r\n2nd career.Classes were held online which were fixed to my\r\nconvenient time to learn at my own comfort. Thank you Arenabsk!!', 'img/c632be6c4e2f38a91bea992f36fe3eb2.png', 'Student'),
(26, 'Lakshmi R Gowda', 'The learning experience at Arena Banashankari has been great. The staff is very supportive and cooperative with excellent environment both as well as offline and online. Heartily thanks for its contribution in fulfilling my dreams even in this pandemic situation.', 'img/4a2ddd2e56778f0b66339cd1d7a508b1.png', 'Student'),
(27, 'Navya Gowda', 'If you guys are searching for best animation courses your searching ends here!!!!.Arena animations is providing a best animation courses like graphics, web designing, VFX, vedio editing pro and more. Experienced faculties and friendly management with good environment.\r\nJoin arena to get creative knowledge', 'img/c987282d6fc6f0bc954a1917ac9b784f.png', 'Student'),
(28, 'Sujith Hampiholi', 'Lockdown was hard on all of us but the learning was made easy for us by Arena Animation. Online classes were fun for us we completed our projects and assignments which were the most productive and fun thing we did in the lockdown. Thanks to Arena Animation Banashankari.', 'img/f76ca2771ab56474df4ce4c476f0a4e6.png', 'Student'),
(29, 'Shravan S Bharadwaj', 'After i completed my engineering, I wanted to do something in creative field, And that is when i found ARENA ANIMATION BSK!! which not just helped me in taking up my career in Animation but also taught me so much about Film Making and other skills !!Prajwal sir and all the faculty are so friendly and they treat us so well!!', 'img/63dc30af91bbe85fd342e20750d59afe.png', 'Student'),
(30, 'Amisha', 'The best arena animation branch in Bangalore. Faculties here have so much knowledge about the courses they offer, also they are very friendly. We can ask doubts easily & they are very supportive. You will definitely feel the \"POSITIVE VIBES\"', 'img/d6dbbf6f4ff27fb47277bd4865ad99d0.png', 'Student'),
(31, 'Bharathi Govindhan', 'Arena animation BSK one of the finest and friendly animation. Fully knowleged staffs teaches and explain their experience politely.best atmosphere allover the animation. They gave best projects to do.we gain the future light through\r\nArena animation BSK', 'img/676a8a60b4274409ad2a3cd96905b000.png', 'Student'),
(32, 'Likith Kumar C', 'Such a funny and enjoyable moment that we had in arena ad shoot, product shoot, and got such a funny friends thank u for arena animation banashankari', 'img/9b90684429ad24917a05f6691c7e3892.png', 'Student'),
(33, 'Bhavya', 'Here within 1 year have created lot of memories, it is always fun to learn in our institute, faculties always assign tasks which showcase the skills of students as a BVOC student Excited for the upcoming days!', 'img/f7e12987d3e44b50279af81ce135d50e.png', 'Student'),
(34, 'Ritesh A', 'I got new experience nice teaching Good facultie I got new friends Best Animation courses Join Animation Learn Amazing and Exciting like Gaming, VFX, Audio-Video editing, Graphic Designing', 'img/595e571133b8d12ca0690cd64b2bf8ed.png', 'Student'),
(35, 'Shabeer', 'The best place to express your creativity. The facuties are well trained.its been a Wonderful experience so far. there is a very good work environment and its fun to study here.l totally recommend this institution', 'img/4f46f69fe47fbe61377da94602e26110.png', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int NOT NULL,
  `video` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `video_title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video`, `video_title`) VALUES
(40, '<iframe width=\"500\" height=\"350\" src=\"//www.youtube.com/embed/X7eQP3EWAj4\" frameborder=\"0\" allowfullscreen></iframe>', 'Student Testimonial'),
(41, '<iframe width=\"500\" height=\"350\" src=\"//www.youtube.com/embed/lWHqZelgiAc\" frameborder=\"0\" allowfullscreen></iframe>', 'Student Testimonial'),
(42, '<iframe width=\"500\" height=\"350\" src=\"//www.youtube.com/embed/aldjzRa_Wm8\" frameborder=\"0\" allowfullscreen></iframe>', 'Student Testimonial'),
(43, '<iframe width=\"500\" height=\"350\" src=\"//www.youtube.com/embed/avSt0Xn1-jY\" frameborder=\"0\" allowfullscreen></iframe>', 'Student Testimonial'),
(44, '<iframe width=\"500\" height=\"350\" src=\"//www.youtube.com/embed/A8i26JF5kb8\" frameborder=\"0\" allowfullscreen></iframe>', 'Student Testimonial'),
(45, '<iframe width=\"500\" height=\"350\" src=\"//www.youtube.com/embed/YMjmRPGNcu0\" frameborder=\"0\" allowfullscreen></iframe>', 'Student Testimonial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_details`
--
ALTER TABLE `apply_details`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `apply_status`
--
ALTER TABLE `apply_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `carousel_images`
--
ALTER TABLE `carousel_images`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `download_brochure`
--
ALTER TABLE `download_brochure`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `students_speaks`
--
ALTER TABLE `students_speaks`
  ADD PRIMARY KEY (`speaks_id`);

--
-- Indexes for table `students_works_2d_animations`
--
ALTER TABLE `students_works_2d_animations`
  ADD PRIMARY KEY (`animations_id`);

--
-- Indexes for table `students_works_3d_animations`
--
ALTER TABLE `students_works_3d_animations`
  ADD PRIMARY KEY (`animations_id`);

--
-- Indexes for table `students_works_architechtural`
--
ALTER TABLE `students_works_architechtural`
  ADD PRIMARY KEY (`architechtural_id`);

--
-- Indexes for table `students_works_gaming`
--
ALTER TABLE `students_works_gaming`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `students_works_graphics`
--
ALTER TABLE `students_works_graphics`
  ADD PRIMARY KEY (`graphics_id`);

--
-- Indexes for table `students_works_mix_media`
--
ALTER TABLE `students_works_mix_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `students_works_sketches`
--
ALTER TABLE `students_works_sketches`
  ADD PRIMARY KEY (`sketches_id`);

--
-- Indexes for table `students_works_vfx`
--
ALTER TABLE `students_works_vfx`
  ADD PRIMARY KEY (`vfx_id`);

--
-- Indexes for table `students_works_web_design`
--
ALTER TABLE `students_works_web_design`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_details`
--
ALTER TABLE `apply_details`
  MODIFY `apply_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `apply_status`
--
ALTER TABLE `apply_status`
  MODIFY `status_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `carousel_images`
--
ALTER TABLE `carousel_images`
  MODIFY `carousel_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `download_brochure`
--
ALTER TABLE `download_brochure`
  MODIFY `pdf_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `students_speaks`
--
ALTER TABLE `students_speaks`
  MODIFY `speaks_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students_works_2d_animations`
--
ALTER TABLE `students_works_2d_animations`
  MODIFY `animations_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_works_3d_animations`
--
ALTER TABLE `students_works_3d_animations`
  MODIFY `animations_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students_works_architechtural`
--
ALTER TABLE `students_works_architechtural`
  MODIFY `architechtural_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students_works_gaming`
--
ALTER TABLE `students_works_gaming`
  MODIFY `game_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_works_graphics`
--
ALTER TABLE `students_works_graphics`
  MODIFY `graphics_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students_works_mix_media`
--
ALTER TABLE `students_works_mix_media`
  MODIFY `media_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_works_sketches`
--
ALTER TABLE `students_works_sketches`
  MODIFY `sketches_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_works_vfx`
--
ALTER TABLE `students_works_vfx`
  MODIFY `vfx_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students_works_web_design`
--
ALTER TABLE `students_works_web_design`
  MODIFY `design_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `test_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
