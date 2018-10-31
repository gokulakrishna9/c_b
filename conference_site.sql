My Drive
DETAILS
ACTIVITY
Select a file or folder to view its details.

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 50.62.209.110:3306
-- Generation Time: Sep 01, 2017 at 10:36 PM
-- Server version: 5.5.43-37.2-log
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectinfinity_scientific_conferences`
--
CREATE DATABASE IF NOT EXISTS `projectinfinity_scientific_conferences` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projectinfinity_scientific_conferences`;

-- --------------------------------------------------------

--
-- Table structure for table `attendee_description`
--

CREATE TABLE `attendee_description` (
  `conference_id` int(11) NOT NULL,
  `attendee_description_id` int(11) NOT NULL,
  `attendee_description` int(11) NOT NULL,
  `visible` varchar(3) NOT NULL COMMENT 'YES or NO',
  `rank` int(11) NOT NULL COMMENT '1 to 9'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Table that describes who can attend the conference.';

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('tb53882m46cqjlt961cpsjpun03eu0gf', '27.6.50.58', 1497443899, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439373434333839393b),
('2aouj09rpc5gsob8i1bpdeirpn85433f', '27.6.50.58', 1497444178, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439373434343130373b),
('ecgq2pdb6ogmo7c9a6bhbeptmsf88dk0', '27.6.53.72', 1499505596, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393530353539363b),
('qqpn3dsiq1ed5fq2avjoq9c8lc3o13ti', '128.199.124.86', 1499505597, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393530353539373b),
('uf17cfp91o2kqv78vtucgivhh9c94jep', '27.6.53.72', 1499506089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393530363038393b),
('ug4n09jk7n17e8jnecvi23723o7mco4s', '27.6.53.72', 1499512499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531323236373b),
('8ecoil9jgtorfpraa5n5s5c5gq6du9k2', '128.199.124.86', 1499512308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531323330383b),
('nfh10vcn42ldjfko9avgh4cub3iui6os', '27.6.53.72', 1499512656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531323635353b),
('9ibed7qcipp585qek771s4ukslq573j3', '27.6.53.72', 1499512869, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531323836393b),
('u651ma37355e6c09n6ch10ffkgf8fbh1', '27.6.53.72', 1499513224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531323932363b),
('e2dne8jpqsa5u0j83mc5qpfaj1bgqkss', '27.6.53.72', 1499513499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531333430373b),
('dv97us1ugmobj5pf7djvlcd8n3fbrflp', '27.6.53.72', 1499514006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531333737333b),
('mtpoum13m64k8oamo62h2tp0s5cmqbn0', '27.6.53.72', 1499514102, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531343130323b),
('9h6u1aa9guurk5pipbnmv7uk5l5fpeqj', '27.6.53.72', 1499514993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531343733323b),
('27ghpe1028noau9i6ltj8nv2btomrc45', '27.6.53.72', 1499515079, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531353037393b),
('vdmq4gvjujvervjadu94f6g7hsjcq24d', '27.6.53.72', 1499515215, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531353231353b),
('kg2oiiqo9al7pejqk1pc0nmirdkjroao', '27.6.53.72', 1499515896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531353734373b),
('4h48ebq31rpabtqvmiqh9975p019ojgn', '27.6.53.72', 1499516323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531363036313b),
('pdrg8uhui75h6rp90dfm3ou7d0k13p4m', '27.6.53.72', 1499516262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531363236323b),
('r8e1dbelitl3rqfibjm1v5mn2g3qn2r7', '27.6.53.72', 1499516423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531363432333b),
('05i16e4cetl3tvvocoam816nkooti89d', '27.6.53.72', 1499518791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531383730323b),
('fiiu792ltvd88jvu83dgvpleke169935', '27.6.53.72', 1499519944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393531393635373b),
('5ji31n0pql7olo2ssa72ombfvthk9dts', '27.6.53.72', 1499520459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532303232313b),
('t46r6756vsb6j2lamfkhhks2o2bm3kss', '27.6.53.72', 1499520271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532303237313b),
('7c08rc5j2a519kqjceensq4jcigsvp6t', '27.6.53.72', 1499521153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532303931353b),
('833grff996kg2v5o43afsqduf9ck311e', '27.6.53.72', 1499521481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532313335343b),
('rvin6aln2pb2dbasan38hk86h6ganpst', '27.6.53.72', 1499528734, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532383733343b),
('ndkfrthosms958qqrus8p7hph502chmj', '27.6.53.72', 1499529645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532393634353b),
('lar6qc1gv8v7tsr6s7d36bq391e3ir0o', '64.233.173.135', 1499529956, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393532393935363b),
('db2g2chbeam4dvisl93jq299sj9sqfjm', '27.6.53.72', 1499532674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393533323634373b),
('qkov4grcjie5l4osgm5abhorbc9bbfdv', '64.233.173.136', 1499549278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393534393237383b),
('vfmakfpbedt3h7dbr4ktskrsk0664fn6', '223.182.15.23', 1499549280, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393534393238303b),
('r6q4fakqkplgtn20ttogkhmhj3i4krvd', '64.233.173.136', 1499553153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393535333135333b),
('hks3jj0sacmn9blqcl6l0s39lprhfb2k', '223.182.72.148', 1499553196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393535333135343b),
('02cna4o3uv10ve0on2vqvgrie4bsms89', '64.233.173.134', 1499553340, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393535333234353b),
('ep2ovpu1p8qvfvu3aurv5srlu3nsn9sj', '27.6.53.72', 1499561430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393536313433303b),
('jjdk723mr97780j641l8pg5e7nbutej8', '27.6.53.72', 1499565292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393536353032383b),
('h6uth41nfrpe4rogu0mhetgjlo66ncjv', '27.6.53.72', 1499565799, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393536353738373b),
('ov59i5d87kesardhoes0elbkikjei953', '27.6.53.72', 1499566235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393536363233353b),
('u79ald0grs1o4nt0s167r04rgn6ke3rf', '27.6.53.72', 1499576763, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393537363637373b),
('f94nn6jmofn9if348o1o6o579olqib7k', '27.6.53.72', 1499577284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393537373136323b),
('ruv8treinladtl6njledkaljk8pjqscn', '27.6.53.72', 1499578486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393537383337313b),
('k1bd09jdu1qfr698gpjfc6e0tgqkejso', '27.6.53.72', 1499579163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393537383930353b),
('k0sjh906rqm2r05mj1u5mvfa2s8ocu9b', '27.6.53.72', 1499581768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393538313539353b),
('gccuukrckhe063bdos66ukhebi699ouf', '27.6.53.72', 1499582056, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393538323031303b),
('psbjm5i249lhd3uvc5na0hcbkjrrn0s1', '27.6.53.72', 1499603009, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393630333030393b),
('p6pq3hom1o8k3b4gopgs5vi71jt4om6d', '27.6.35.187', 1499709286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393730393039363b),
('u6cbvl9aes7k4rvv0vi8o34as38s8rjn', '27.6.35.187', 1499709403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393730393430333b),
('ckkdubmr22nas03v98ffklslh3s1m3fv', '27.6.53.72', 1499711524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439393731313532343b),
('uqf8se8beab6em6qbfl2ihi0a13p32q9', '27.6.35.187', 1500097325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303039373332353b),
('9pai24h8gepgplu4hov2as39nf1mcstv', '64.233.173.135', 1500150904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303135303930333b),
('v215rm7vrjr40v8lam58e6mr0h5c9qev', '27.6.35.187', 1500150905, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303135303930353b),
('jhp5frddq4r75599661184hchou7ofme', '101.127.156.76', 1500171427, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303137313432373b),
('hgdc4ln56ntofojbul41iachtoeoeo9m', '101.127.156.76', 1500196752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303139363735323b),
('30v1frbrj4r4h9su3j1dquf1o90s21rl', '27.6.53.72', 1500381570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303338313535353b),
('ahni9i3dk3m9vmj7ol4tcj8m055951kh', '27.6.53.72', 1500475711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303437353535383b),
('7atovugjds4pickjmejliuchb9cuh4ck', '27.6.35.187', 1500530677, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533303637363b),
('onvlrgge74tl1604loc6k5eijh2e0tn4', '27.6.35.187', 1500530713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533303731333b),
('7ip9o51vladimai4t6cclr7ul13ei0ha', '27.6.35.187', 1500531438, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533313139333b),
('uqjlco0b0qbtrl6tapt44eaqaaqscfgd', '27.6.35.187', 1500531707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533313533393b),
('ld6csdbmglt04v5iaq23jpesb8308maa', '27.6.35.187', 1500531704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533313730343b),
('fbe6vrobdmamppseev445ad40np9d7pf', '27.6.35.187', 1500533306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533333033373b),
('dmf403sccrm47l6lgn68paro7na09fr3', '27.6.35.187', 1500533290, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533333135383b),
('ak2trg05f9vqbvaaup27u75e1jgje02e', '27.6.35.187', 1500533821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533333739323b),
('73jsffvpaf8ptsgltbtbitio8l9sheus', '27.6.35.187', 1500533839, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533333833393b),
('qolgifrq4tl1enc9u7aojb8h17fqf3g1', '27.6.35.187', 1500536336, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533363136343b),
('iqnncjkd1m68ttfm0ps974g2e5slv6ao', '27.6.35.187', 1500536301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533363138353b),
('4p2ieamer8k0pd1gekja9qq6bh467dbi', '27.6.35.187', 1500538932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303533383933323b),
('pll54l9ijc2ln9pgh2l74n13rkgn8f28', '27.6.35.187', 1500547383, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303534373338333b),
('d02gq18ckgqera8sq0mtv83rgvfjii7b', '27.6.35.187', 1500550777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303535303730353b),
('29826t1ub9gf16bsfcgjpmlj6s61i2bl', '64.233.173.136', 1500554755, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303535343735353b),
('nkbojaplkoepgv6tbeouc4dqclncmc75', '27.6.35.187', 1500569149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303536393134393b),
('ckjf74rd7hl9b1t20b289jue1f3li241', '27.6.53.72', 1500628182, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303632383138323b),
('2m0kbo6rk058b849s1nihdnpr3ddjf5k', '27.6.53.72', 1500628913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303632383931333b),
('v18j0vqv3h53vl6066viphb5oo43cbe3', '27.6.45.88', 1500892437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530303839323433373b),
('funnlk1kb9dl2pqotokm83igcalt1hrf', '64.233.173.136', 1501272230, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530313237323233303b),
('8g7mdt7qitikbupegbgf0h3uq72c32ft', '27.6.45.88', 1501272232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530313237323233323b),
('6tep0m84v3d24gjp7itrmviq6g9nd2r3', '27.6.45.88', 1501523966, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530313532333936363b),
('aml49rni7t7ugtpkg0bkovt53ujsgvqs', '27.6.45.88', 1503138246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530333133383234363b),
('tjcquvdh089embihptd1pr9rusvkelhl', '27.6.45.88', 1503139126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530333133393132363b);

-- --------------------------------------------------------

--
-- Table structure for table `conference_description`
--

CREATE TABLE `conference_description` (
  `conference_id` int(11) NOT NULL,
  `conference_url` varchar(300) NOT NULL,
  `conference_title` varchar(250) NOT NULL,
  `conference_theme` varchar(250) NOT NULL,
  `conference_description` varchar(1500) NOT NULL,
  `venue` varchar(300) NOT NULL,
  `venue_lattitude` varchar(15) NOT NULL,
  `venue_longitude` varchar(15) NOT NULL,
  `contact_us` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `important_dates`
--

CREATE TABLE `important_dates` (
  `conference_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(300) NOT NULL,
  `visible` varchar(3) NOT NULL COMMENT 'YES or NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Registration open, early bird registration, and so on...';

-- --------------------------------------------------------

--
-- Table structure for table `organizing_members`
--

CREATE TABLE `organizing_members` (
  `conference_id` int(11) NOT NULL,
  `organizing_member_id` int(11) NOT NULL,
  `member_first_name` varchar(250) NOT NULL,
  `member_last_name` varchar(250) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `institute` varchar(300) NOT NULL,
  `country_id` int(11) NOT NULL,
  `photo_url` varchar(300) NOT NULL,
  `biography` varchar(1500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Each conference needs a committee, of professors, scientists';

-- --------------------------------------------------------

--
-- Table structure for table `program_schedule`
--

CREATE TABLE `program_schedule` (
  `conference_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `day` date NOT NULL,
  `session_start` datetime NOT NULL,
  `session_end` datetime NOT NULL,
  `session_description` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purpose_of_conference`
--

CREATE TABLE `purpose_of_conference` (
  `conference_id` int(11) NOT NULL,
  `purpose_id` int(11) NOT NULL,
  `purpose_description` varchar(300) NOT NULL,
  `purpose_rank` int(1) NOT NULL COMMENT '1 to 9',
  `visible` varchar(3) NOT NULL COMMENT 'YES or NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quick_link`
--

CREATE TABLE `quick_link` (
  `conference_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `link_description` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `visible` varchar(3) NOT NULL COMMENT 'YES or NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scientific_sessions`
--

CREATE TABLE `scientific_sessions` (
  `conference_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `session_description` varchar(200) NOT NULL,
  `session_name` varchar(150) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `visible` varchar(3) NOT NULL COMMENT 'YES or NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Storing the session information within the conference.';

-- --------------------------------------------------------

--
-- Table structure for table `special_features`
--

CREATE TABLE `special_features` (
  `conference_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `feature_description` varchar(150) NOT NULL,
  `visible` varchar(3) NOT NULL COMMENT 'YES or NO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Bullet points of important features of the conference.';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(75) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `created_on`) VALUES
(1, 'gokul', '431b04904c05d3b001fef9d161ea2973', '2017-06-14 12:38:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee_description`
--
ALTER TABLE `attendee_description`
  ADD PRIMARY KEY (`attendee_description_id`),
  ADD KEY `conference_id` (`conference_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `conference_description`
--
ALTER TABLE `conference_description`
  ADD PRIMARY KEY (`conference_id`);

--
-- Indexes for table `important_dates`
--
ALTER TABLE `important_dates`
  ADD PRIMARY KEY (`date_id`),
  ADD KEY `conference_id` (`conference_id`);

--
-- Indexes for table `organizing_members`
--
ALTER TABLE `organizing_members`
  ADD PRIMARY KEY (`organizing_member_id`),
  ADD KEY `conference_id` (`conference_id`);

--
-- Indexes for table `program_schedule`
--
ALTER TABLE `program_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `purpose_of_conference`
--
ALTER TABLE `purpose_of_conference`
  ADD PRIMARY KEY (`purpose_id`),
  ADD KEY `conference_id` (`conference_id`);

--
-- Indexes for table `quick_link`
--
ALTER TABLE `quick_link`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `conference_id` (`conference_id`);

--
-- Indexes for table `scientific_sessions`
--
ALTER TABLE `scientific_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `conference_id` (`conference_id`);

--
-- Indexes for table `special_features`
--
ALTER TABLE `special_features`
  ADD PRIMARY KEY (`conference_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `user_name_2` (`user_name`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendee_description`
--
ALTER TABLE `attendee_description`
  MODIFY `attendee_description_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conference_description`
--
ALTER TABLE `conference_description`
  MODIFY `conference_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `important_dates`
--
ALTER TABLE `important_dates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organizing_members`
--
ALTER TABLE `organizing_members`
  MODIFY `organizing_member_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scientific_sessions`
--
ALTER TABLE `scientific_sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `special_features`
--
ALTER TABLE `special_features`
  MODIFY `conference_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;