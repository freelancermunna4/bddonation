-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 12:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donationbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

CREATE TABLE `cause` (
  `id` int(11) NOT NULL,
  `causename` varchar(255) NOT NULL,
  `causetitle` varchar(255) NOT NULL,
  `causediscription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cause`
--

INSERT INTO `cause` (`id`, `causename`, `causetitle`, `causediscription`) VALUES
(6, 'বন্যার্থীদের ক্রান বিতরন', 'বন্যার্থীদের ক্রান বিতরন', ' PHA+ZGdhc2hnZnRqZGpzZmRqZmdqZmdqPC9wPg==');

-- --------------------------------------------------------

--
-- Table structure for table `cause_area`
--

CREATE TABLE `cause_area` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(980) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cause_area`
--

INSERT INTO `cause_area` (`id`, `name`, `url`) VALUES
(1, 'Sylhet', 'https://www.google.com/'),
(2, 'Kurigram', 'https://www.google.com/'),
(4, 'বন্যার্থীদের ক্রান বিতরন', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phon` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `msg` longtext NOT NULL,
  `time` int(11) NOT NULL,
  `reply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phon`, `email`, `adress`, `msg`, `time`, `reply`) VALUES
(1, 'arif', '01774460047', 'arif00117744@gmail.com', 'Dinajpur', 'this is test messege,this is test messegethis is test messegethis is test messegethis is test messegethis is test messegethis is test messegethis is test messegethis is test ', 1660404243, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `activity` int(11) NOT NULL,
  `pay_method` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `ricive_phon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cause` varchar(255) NOT NULL,
  `email_number` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `trx_id` varchar(500) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `activity`, `pay_method`, `amount`, `ricive_phon`, `name`, `cause`, `email_number`, `mail`, `address`, `trx_id`, `reason`, `time`) VALUES
(231, 0, '\n      Bkash\n     ', 260, '\n    01719182586\n    ', 'arif', 'all', '01774462258', 'arif@agmail.com', 'didfgsdg', '4sdf9sdf5', 'waiting', 1660992469),
(232, 0, '\n      Bkash\n     ', 5000, '\n    01719182586\n    ', 'arif', 'all', '01774462258', 'arif@agmail.com', 'didfgsdg', '4sdf9sdf5', 'waiting', 1660992494),
(233, 1, 'Bkash', 364, '\n    01719182586\n    ', 'arif001', 'all', '01774462258', 'arif@agmail.com', 'didfgsdg', '4sdf9sdf5', 'waiting', 1660992503);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `copiright` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `twiter` varchar(500) NOT NULL,
  `github` varchar(500) NOT NULL,
  `web` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copiright`, `facebook`, `instagram`, `twiter`, `github`, `web`) VALUES
(1, '© 2022 Powered By Bangladeshi Software', 'https://www.facebook.com/', 'instagram', 'twitter', '    github', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`, `time`) VALUES
(10, 'second', '62f6b5be2569e6.49174803.jpg', 1660335550),
(11, 'first', '62f6b6213adbe7.49815183.jpg', 1660335649),
(12, 'theird', '62f6b62d1c0ae7.27126021.jpg', 1660335661),
(13, 'four', '62f6b634488ae9.98020926.jpg', 1660335668),
(14, 'five', '62f6b63a621a54.08468059.jpg', 1660335674),
(15, 'six', '62f6b64724d8d8.93430887.jpg', 1660335687),
(16, 'লোকেশন', '62ffa616a8d468.36466110.png', 1660921366);

-- --------------------------------------------------------

--
-- Table structure for table `hide_donate`
--

CREATE TABLE `hide_donate` (
  `id` int(11) NOT NULL,
  `activity` int(11) NOT NULL,
  `pay_method` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `ricive_phon` varchar(255) NOT NULL,
  `cause` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hide_donate`
--

INSERT INTO `hide_donate` (`id`, `activity`, `pay_method`, `amount`, `ricive_phon`, `cause`, `time`) VALUES
(66, 0, '\n      Bkash\n     ', 250, '\n    01719182586\n    ', 'Sylhet', 1656106859),
(67, 0, '\n      Bkash\n     ', 500, '\n    01719182586\n    ', 'Sylhet', 1656155795),
(68, 0, '\n      Bkash\n     ', 10, '\n    01719182586\n    ', 'all', 1656216083),
(69, 0, '\n      Bkash\n     ', 10, '\n    01719182586\n    ', 'Sylhet', 1656216105),
(70, 0, '\n      Bkash\n     ', 1, '\n    01719182586\n    ', 'Sylhet', 1656216113),
(71, 0, '\n      Bkash\n     ', 100, '\n    01719182586\n    ', 'all', 1656217326),
(72, 0, '\n      Bkash\n     ', 50000, '\n    01719182586\n    ', 'all', 1656217343),
(73, 0, '\n      Bkash\n     ', 100, '\n    01719182586\n    ', 'all', 1656218870),
(74, 0, '\n      Bkash\n     ', 100, '\n    01719182586\n    ', 'all', 1656235547),
(75, 0, '\n      Bkash\n     ', 500, '\n    01719182586\n    ', 'Sylhet', 1656235733),
(76, 0, '\n      Bkash\n     ', 630, '\n    01719182586\n    ', 'Sylhet', 1656238269),
(77, 0, '\n      Bkash\n     ', 630, '\n    01719182586\n    ', 'Sylhet', 1656238276),
(78, 0, '\n      Bkash\n     ', 63500, '\n    01719182586\n    ', 'Sylhet', 1656238281),
(79, 0, '\n      Islami Bank\n     ', 50000, '\n    20501380100525314\n    ', 'Kurigram', 1656238298),
(80, 0, '\n      Rocket\n     ', 10000, '\n    01719182586\n    ', 'all', 1656239637),
(81, 0, '\n      Bkash\n     ', 100, '\n    01719182586\n    ', 'Sylhet', 1656255307),
(82, 0, 'Select', 100, 'undefined', 'all', 1656293382),
(83, 0, '\n      Bkash\n     ', 1888888, '\n    01719182586\n    ', 'Sylhet', 1656296024),
(84, 0, 'Select', 100000, 'undefined', 'all', 1656307774),
(85, 0, '\n      Visa Card\n     ', 1000, '\n    4170338046268264\n    ', 'all', 1656316565),
(86, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'all', 1656316574),
(87, 0, '\n      Bkash\n     ', 205, '\n    01719182586\n    ', 'Sylhet', 1656327362),
(88, 0, '\n      Bkash\n     ', 205, '\n    01719182586\n    ', 'Sylhet', 1656327367),
(89, 0, '\n      Bkash\n     ', 100, '\n    01719182586\n    ', 'Sylhet', 1656329657),
(90, 0, '\n      Bkash\n     ', 100, '\n    01719182586\n    ', 'all', 1656354961),
(91, 0, '\n      Bkash\n     ', 400, '\n    01719182586\n    ', 'all', 1656398184),
(92, 0, '\n      Bkash\n     ', 4000, '\n    01719182586\n    ', 'all', 1656398193),
(93, 0, '\n      Bkash\n     ', 5000, '\n    01719182586\n    ', 'Sylhet', 1656398247),
(94, 0, '\n      Visa Card\n     ', 100, '\n    4170338046268264\n    ', 'all', 1656404745),
(95, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419417),
(96, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419432),
(97, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419434),
(98, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419435),
(99, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419437),
(100, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419439),
(101, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419440),
(102, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419442),
(103, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419443),
(104, 0, '\n      Bkash\n     ', 1000, '\n    01719182586\n    ', 'Sylhet', 1656419445),
(105, 0, '\n      Nagat\n     ', 100, '\n    01719182586\n    ', 'Sylhet', 1656488717),
(106, 0, '\n      Bkash\n     ', 500, '\n    01719182586\n    ', 'Sylhet', 1657506883),
(107, 0, '\n      Visa Card\n     ', 100, '\n    4170338046268264\n    ', 'all', 1660984309),
(108, 0, '\n      Visa Card\n     ', 200, '\n    4170338046268264\n    ', 'all', 1660984346);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `pagetitle` varchar(255) NOT NULL,
  `pagediscription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `pagename`, `pagetitle`, `pagediscription`) VALUES
(9, 'About Us', 'About Us. ', ' PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPldobyBkb2Vzbid0IG5lZWQgbW9uZXk/IFN0YXJ0IGVhcm5pbmcgZnJlZSBjb2lucyBieSB3YXRjaGluZyBZb3VUdWJlIHZpZGVvcy48L3A+');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methord`
--

CREATE TABLE `payment_methord` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `receive_from` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_methord`
--

INSERT INTO `payment_methord` (`id`, `name`, `msg`, `wallet`, `currency`, `receive_from`, `time`) VALUES
(1, 'Bkash', 'Send Money Bkash Personal Accaunt', '01719182586', 'BDT', 'Bkash Number', 0),
(2, 'Nagat', 'Send Money Nagat PERSONAL', '01719182586', 'BDT', 'Nagat Number', 0),
(3, 'Rocket', 'Send Money Rocket PERSONAL', '01719182586', 'BDT', 'Rocket Number', 0),
(4, 'Payoneer', 'Payoneer Account Email', 'shamimlem@yahoo.com', 'USD', 'Payoneer Email', 0),
(5, 'Bank', 'Islami Bank Account No', '20501380100525314', 'BDT', 'Bank Account Number', 0),
(6, 'VisaCard', 'Card Number', '4170338046268264', 'USD', 'Card Number', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_config`
--

CREATE TABLE `site_config` (
  `config_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_config`
--

INSERT INTO `site_config` (`config_name`, `config_value`) VALUES
('site_name', 'DONATION'),
('site_description', ' Youtube, Facebookà¥¤ The best place to get YouTube subscribers is none '),
('site_keywords', ' Subscribers on Youtube, Facebook, joblessbd, jobless'),
('site_url', 'http://localhost/bddonation'),
('login_wait_time', '5'),
('login_attempts', '10'),
('mail_delivery_method', '1'),
('smtp_host', 'mail.joblessbd.com '),
('smtp_port', '465'),
('smtp_auth', '0'),
('smtp_username', 'support@joblessbd.com'),
('smtp_password', 'Fk4kRZ6mNc5pVrH'),
('site_email', 'support@joblessbd.com'),
('noreply_email', 'support@joblessbd.com'),
('reg_reqmail', '0'),
('convert_rate', '100'),
('pay_min', '1.00'),
('currency_code', 'USD'),
('paypal', 'support@joblessbd.com'),
('payza', ''),
('cron_users', '0'),
('advertise_min', '2.00'),
('cron_ads', '3'),
('analytics_id', ''),
('solvemedia_c', ''),
('solvemedia_v', ''),
('solvemedia_h', ''),
('theme', 'default'),
('site_logo', 'Bd Lottery'),
('def_lang', 'en'),
('bank_status', '1'),
('bank_details', 'Complete with your bank account details here, to be able to receive payment by wire transfer.'),
('bkash_status', '1'),
('nogod_status', '1'),
('secured', 'ssl');

-- --------------------------------------------------------

--
-- Table structure for table `spend`
--

CREATE TABLE `spend` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `memo` varchar(5000) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spend`
--

INSERT INTO `spend` (`id`, `name`, `amount`, `image`, `memo`, `details`, `time`) VALUES
(8, 'marketing', 450, '62f68797c5a7b1.40170674.jpg', '62f68797c5fae3.49202188.jpg', 'marketing.................', 1660323735),
(10, 'gjhj', 25, '62f80207b07bb4.74175471.gif', '62f80207b09a69.36432460.gif', 'hjhggjhgj', 1660420615);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `mobile`, `email`, `whatsapp`) VALUES
(1, '017744', 'example11@mail.com', '0144');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `coins` decimal(10,2) NOT NULL DEFAULT 0.00,
  `membership` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `admin` smallint(3) UNSIGNED NOT NULL DEFAULT 0,
  `country_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `gender` int(2) UNSIGNED NOT NULL DEFAULT 0,
  `reg_time` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `last_activity` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `last_spin` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `ref` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `reg_ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `log_ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter` smallint(1) UNSIGNED NOT NULL DEFAULT 0,
  `activate` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `rec_hash` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `warn_message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `warn_expire` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `disabled` smallint(1) UNSIGNED NOT NULL DEFAULT 0,
  `ref_source` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `coins`, `membership`, `admin`, `country_id`, `gender`, `reg_time`, `last_activity`, `last_spin`, `ref`, `reg_ip`, `log_ip`, `newsletter`, `activate`, `rec_hash`, `warn_message`, `warn_expire`, `disabled`, `ref_source`) VALUES
(1, 'arif', 'arif@gmail.com', '1234', '0.00', 0, 1, 0, 0, 1652098432, 1661378312, 0, 0, '', '', 0, '0', '0', '', 0, 0, ''),
(401, 'arif', 'robbanibd7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1811070.00', 0, 0, 0, 0, 1652098432, 1655934754, 0, 0, '', '127.0.0.1', 0, '0', '0', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cause_area`
--
ALTER TABLE `cause_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hide_donate`
--
ALTER TABLE `hide_donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methord`
--
ALTER TABLE `payment_methord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_config`
--
ALTER TABLE `site_config`
  ADD UNIQUE KEY `config_name` (`config_name`);

--
-- Indexes for table `spend`
--
ALTER TABLE `spend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cause`
--
ALTER TABLE `cause`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cause_area`
--
ALTER TABLE `cause_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hide_donate`
--
ALTER TABLE `hide_donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_methord`
--
ALTER TABLE `payment_methord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spend`
--
ALTER TABLE `spend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
