-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 03:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_triton`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `abt_id` int(11) NOT NULL,
  `about_us_text` text NOT NULL,
  `featured_image` varchar(100) NOT NULL,
  `abtus_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`abt_id`, `about_us_text`, `featured_image`, `abtus_level`) VALUES
(1, '                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in              ', '3096d30e30a64efa6eea359d8b9f4fc4_Triton.png', 1),
(2, '                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in              ', '3de5e25db282adfff2dfa1e6e450dcf9_Triton.jpg', 2),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'a0306df3fffe7490931df8f584fac855_Triton.jpg', 3),
(4, '                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in      ++        ', 'b2fda9fd7048d50314e21a568bfbcfce_Triton.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `act_id` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `activity_detail` text NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`act_id`, `activity`, `activity_detail`, `icon`) VALUES
(1, 'Graphic Design', '                                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua                                                                  ', '726bdb6845f25b532a60fb5ef63a23ce_Triton.png'),
(2, 'Graphic Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'bd5e14a9465f0500d76eedb1772cae5b_Triton.png'),
(3, 'Graphic Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '52c7dd871cc437d9d773c56794318bc9_Triton.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `email`, `code`) VALUES
(1, 'admin', '1a1a6669515086fe4669623d1d0f2a3e', 'magartsahveen@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bachelorfaculty`
--

CREATE TABLE `tbl_bachelorfaculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bachelorfaculty`
--

INSERT INTO `tbl_bachelorfaculty` (`faculty_id`, `faculty`, `description`, `featured_image`) VALUES
(1, 'BBS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.anuz++', '279d811f1ef1e5304fbcfc63522b3ef6_Triton.jpg'),
(2, 'BSW', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'b83f93ba277ea6118a400d88ee55a2da_Triton.jpg'),
(3, 'BA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'de0729d4f2aa355d88e3abdd79d2a7bd_Triton.jpg'),
(4, 'BBM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.sdsdsdssd', 'f5b1dd1008efb578733d08665f7cf88f_Triton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner_file`) VALUES
(1, 'dcb54d280f1270b1d10c3101c8ebd110_Trinton.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_in` int(11) NOT NULL,
  `feedback_by` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_in`, `feedback_by`, `phone`, `email`, `feedback`, `feedback_date`) VALUES
(18, 3, 'Michelle George', '9876543454', 'sysamy@gmail.com', 'Modi aut cupidatat consectetur sint omnis saepe quia proident minus non laborum', '2018-02-28 15:35:47'),
(19, 2, 'Anastasia Silva', '9751234565', 'Email Not Available', 'Quo consequatur et aut explicabo Nihil quo tempor eum aut saepe', '2018-02-28 15:43:07'),
(21, 1, 'Mannix Bowers', '9843647592', 'jycymyzume@yahoo.com', 'Voluptatem in sint iusto eos pariatur Incididunt commodo ratione elit tempora quo modi mollit incidunt incidunt deserunt voluptatibus vero', '2018-03-02 09:28:22'),
(22, 1, 'Sabin Thapa', '9843647592', 'xxx@xx.com', 'ddfdfdfdfsdfdsfdsfdfdsf dsfdsfdsfds dsfdsfdsf', '2018-03-06 15:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`image_id`, `image_name`, `description`, `image_in`) VALUES
(6, '13a1cf6f0b7a560fe1a85c9787cb4d3a_Triton.jpg', 'Tempor sunt quis tempora amet totamsabin', 2),
(7, 'c483b67b115cfe66979840a90488d963_Triton.jpg', 'Et expedita commodi quo qui ut aut quaerat ea consequatur fugit qui quisquam magnam praesentium corr', 1),
(8, '4aa19d0b1143a74ab37dd8f3e40248ed_Triton.jpg', 'Aut qui fuga Ex rerum possimus sed', 2),
(9, '24fd303bc8d2b4a309ee81354dbae856_Triton.png', 'Consequatur Illo ipsam officia expedita quis quam quis aliqua Odio fuga Nisi dolorem in cillum', 2),
(10, 'ada0f990d6bada23e596aaf6ee319841_Triton.png', 'sdjsdsjdksdjs', 1),
(11, '9e3e14b545124e97a81ef8e21939fe38_Triton.jpg', 'Inventore tempor quod nisi aut corrupti dolor tempore iure assumenda', 3),
(12, '2dd62034ade05661f2a33e87fa6f7035_Triton.jpg', 'Fuga Elit sunt ea enim rem corrupti dicta atque numquam laudantium asperiores nostrum sint voluptate', 3),
(13, 'b1c86b3cd6b46cee6d827e2bd1bb91d4_Triton.jpg', 'Reiciendis ad pariatur Nihil quis dicta sint dolor autem vel ut deserunt delectus commodo sit repell', 3),
(14, '8331aff673e264a515609c917ee9c2a3_Triton.jpg', 'Inventore tempor quod nisi aut corrupti dolor tempore iure assumenda', 3),
(15, '301a99782add6e44487a7e271bee07e8_Triton.jpg', 'Ut nostrud sint dolor optio laboriosam', 4),
(16, '5b170bbd7027390d6a46a2b7ea8143a3_Triton.jpg', 'Eos id omnis quia vero voluptatem Explicabo Officia blanditiis pariatur Perspiciatis aliqua', 4),
(17, '2087ea1eacdfcbc64b0b70a79dc5ee30_Triton.jpg', 'Et esse dolores quam obcaecati nostrud maxime aut ad rerum natus saepe officia nobis minus officia s', 4),
(18, 'd522aa9ad984bbd472e37b5f13be5f4e_Triton.jpg', 'Ut nostrud sint dolor optio laboriosam', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`level_id`, `level_name`, `updated_date`) VALUES
(1, 'School', '0000-00-00'),
(2, 'Plus Two', '0000-00-00'),
(3, 'Bachelor', '0000-00-00'),
(4, 'Master', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterfaculty`
--

CREATE TABLE `tbl_masterfaculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masterfaculty`
--

INSERT INTO `tbl_masterfaculty` (`faculty_id`, `faculty`, `description`, `featured_image`) VALUES
(1, 'MA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem', '611f60d2e574a4138f42263cb73bef94_Triton.jpg'),
(2, 'MBS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquamnuma eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem', '9a4646d049e4ab35035f111a17a98488_Triton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_date` datetime NOT NULL,
  `news_heading` varchar(200) NOT NULL,
  `news_content` text NOT NULL,
  `featured_image` varchar(100) NOT NULL,
  `news_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_date`, `news_heading`, `news_content`, `featured_image`, `news_level`) VALUES
(5, '2018-03-02 13:04:21', 'Lorem libero ab nostrud dolore aut quia amet laborum Odit', 'Explicabo Molestias occaecat dolorum ut voluptates porro aute qui facilis consequatur ut at et optio dolorem fugit consequatur', '1c495fcbf4efb71d379d6af549d5a24a_Trinton.png', 2),
(6, '2018-03-02 18:19:17', 'Architecto delectus expedita quisquam magnam excepturi ', 'Molestiae fuga Voluptatem labore optio sed nihil odio aliqua Architecto in iure vero aut maiores voluptatem Dolorum veniam sunt', '03e0fa4b4ee78b8c7e4b6fd371f8342f_Trinton.png', 1),
(7, '2018-03-02 18:20:03', 'Quasi laborum In quia dolore sint sed incididunt quis sequi officia autem vitae error', 'Culpa aliquid sunt ab nulla incididunt in et nulla laborum facere iure unde velit odio molestias quisquam harum', 'cc0c7e10501ae7adcb679802fbd59f98_Trinton.png', 1),
(8, '2018-03-02 18:28:41', 'Corporis quia non ipsum numquam voluptas veritatis nisi eveniet quis incididunt omnis architecto exercitationem', 'Itaque qui debitis harum facere rem qui velit numquam sed aliqua Qui blanditiis quos pariatur Cupidatat vero explicabo Delectus', 'e9da4269a0eaf09166cf5d9524a156d8_Trinton.jpg', 1),
(9, '2018-03-03 05:48:28', 'Molestiae sint consequatur Ipsum blanditiis iure accusantium aliquid sed et', 'Vel nostrud dicta iusto dolor sapiente pariatur Magna ut ipsum', 'news_default.jpg', 2),
(10, '2018-03-03 11:26:02', 'Ipsam vero hic nemo aut voluptatem temporibus id similique deleniti pariatur Et sed est qui', 'Qui reprehenderit obcaecati et voluptatem omnis iusto magna ab enim dolores nulla fugit magni', 'news_default.jpg', 2),
(11, '2018-03-03 12:28:15', 'Voluptatum consequuntur mollit et consequatur Sunt velit magni eligendi ipsam alias reprehenderit facere eiusmod non', 'Qui laborum Veritatis enim lorem totam cum eaque possimus occaecat officia aut dolorum doloremque sed sed', 'news_default.jpg', 3),
(12, '2018-03-03 12:28:24', 'Quia officia vel consectetur voluptas', 'Vero sint exercitation sit voluptatem in cumque dolore vel ducimus rerum obcaecati id dolore obcaecati ullamco', 'news_default.jpg', 3),
(13, '2018-03-03 12:56:48', 'Libero velit eos temporibus quaerat fugit quia consequat Aut adipisci mollit', 'Animi eos corrupti ut tempor ad lorem sed dolorem et quae', 'news_default.jpg', 4),
(14, '2018-03-03 12:57:24', 'Exercitation ut officia facilis ad repudiandae velit dolor labore eos', 'Ut nobis quia est labore nostrum quo quasi lorem deserunt ut distinctio Laborum Ut id omnis eum', '54013f32769e58ae9f89c038c77c3c37_Trinton.png', 4),
(15, '2018-03-03 12:57:33', 'Quia sed adipisicing mollitia est officiis reiciendis', 'Omnis omnis quidem placeat rem', 'news_default.jpg', 4),
(16, '2018-03-06 06:16:57', 'Assumenda et anim aperiam ipsum quia quisquam eaque veniam dolore rem delectus dolores officiis eum voluptatem aut suscipit eius etsabin', 'Deserunt dolor occaecat id duis et dolores laboris illo quia', '1ec6c923fd19d36c80450ccf0f157ba6_Trinton.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `notice_for` int(11) NOT NULL,
  `notice` text NOT NULL,
  `notice_content` text NOT NULL,
  `publish_date` date NOT NULL,
  `notice_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice_for`, `notice`, `notice_content`, `publish_date`, `notice_file`) VALUES
(19, 2, 'Aut veniam eveniet autem sunt incidunt quod rerum eos fugiat amet dolorem minim rem aut qui ratione dolores sint', 'Accusantium ex ad blanditiis velit accusantium minima officia doloribus officiis', '2018-03-02', 'b559309d39231c1b2f0b7d2c205823a6_Trinton.png'),
(20, 4, 'Tempor et reprehenderit incididunt enim beatae ducimus et repellendus Laboriosam', 'Placeat consequat Sunt sint sed voluptate est ullam', '2018-03-02', 'File Not Added'),
(21, 3, 'Velit Nam itaque qui soluta duis earum praesentium laboriosam deleniti deserunt amet voluptas quibusdam', 'Aspernatur id ullam nihil ullam ex rerum hic delectus molestiae quia', '2018-03-02', '401d31638ccc48c7dc28044473feeb21_Trinton.png'),
(22, 1, 'Id aut non reprehenderit voluptas velit sint elit molestiae ad+', 'Et nisi laboriosam aut similique dolorum ipsa duis dolore cupidatat ut-', '2018-03-02', '0b39fc4701b2301f2245beb5f5fb2589_Trinton.jpg'),
(23, 2, 'Minima amet vel quasi mollitia molestiae maiores', 'Quis voluptas consequatur aut et odio enim sit nostrum enim sint pariatur', '2018-03-02', 'File Not Added');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plustwostream`
--

CREATE TABLE `tbl_plustwostream` (
  `stream_id` int(11) NOT NULL,
  `stream_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_plustwostream`
--

INSERT INTO `tbl_plustwostream` (`stream_id`, `stream_name`, `description`, `featured_image`) VALUES
(1, 'Science', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in++', '164cfe3882cbed63bbcff77a6844599f_Triton.png'),
(2, 'Management', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor iSabin', 'f6338760fee3cd075b6f5a0c45c24935_Triton.png'),
(3, 'Humanities', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor inNuma', 'ae2be837427ed79602e603f6489ef4e1_Triton.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliderimage`
--

CREATE TABLE `tbl_sliderimage` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `level_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sliderimage`
--

INSERT INTO `tbl_sliderimage` (`image_id`, `image_name`, `level_image`) VALUES
(1, '445a9e25c6323dd4cac6aa3cf506c5cd_Triton.png', 1),
(2, 'c65e29954d9fe5ab80124a82fbae6609_Triton.png', 1),
(3, 'ecd96feb16154b6d139c8fcc2a9b33ac_Triton.jpg', 1),
(4, '94326b56800b0587d5087f4feb49f72a_Triton.jpg', 2),
(5, '09c55395484d5f5840108e6e6c5cc7e9_Triton.jpg', 2),
(6, '7d09aec9a21b6928f23691f8cb3ada5f_Triton.jpg', 2),
(7, 'c7fea6b67f99684258974eb64bd9fb61_Triton.jpg', 3),
(8, '1c49c3ac2714345fc0708e7a6c884560_Triton.jpg', 3),
(9, 'ace1eff7cf41107a100caf7dde935126_Triton.jpg', 3),
(10, '94a03572613dc570e790310998d7eb25_Triton.jpg', 4),
(11, 'b9d6ae290efd4070eef1e6d728a49daa_Triton.jpg', 4),
(12, '11700f150c5d374c6195207b645ca20f_Triton.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stream`
--

CREATE TABLE `tbl_stream` (
  `stream_id` int(11) NOT NULL,
  `stream` varchar(80) NOT NULL,
  `level` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wlcmmsg`
--

CREATE TABLE `tbl_wlcmmsg` (
  `msg_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wlcmmsg`
--

INSERT INTO `tbl_wlcmmsg` (`msg_id`, `msg`, `image`, `level`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in Triton Triton Triton', '7d182d6830905e86b798a3b36d8f9609_Triton.png', 1),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.ss', '3999fbaea71c22f67f59243379877078_Triton.jpg', 2),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'sjdhsjdh', 3),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'djsdjshds', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`abt_id`);

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bachelorfaculty`
--
ALTER TABLE `tbl_bachelorfaculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_masterfaculty`
--
ALTER TABLE `tbl_masterfaculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_plustwostream`
--
ALTER TABLE `tbl_plustwostream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `tbl_sliderimage`
--
ALTER TABLE `tbl_sliderimage`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `tbl_wlcmmsg`
--
ALTER TABLE `tbl_wlcmmsg`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `abt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bachelorfaculty`
--
ALTER TABLE `tbl_bachelorfaculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_masterfaculty`
--
ALTER TABLE `tbl_masterfaculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_plustwostream`
--
ALTER TABLE `tbl_plustwostream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sliderimage`
--
ALTER TABLE `tbl_sliderimage`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_wlcmmsg`
--
ALTER TABLE `tbl_wlcmmsg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
