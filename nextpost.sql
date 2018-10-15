-- phpMyAdmin SQL Dump
-- version 4.8.0-alpha1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.10.10
-- Generation Time: Oct 15, 2018 at 09:41 AM
-- Server version: 5.7.21-1ubuntu1
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextpost`
--

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_ACCOUNTS`
--

CREATE TABLE `TABLE_ACCOUNTS` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `instagram_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `proxy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `login_required` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_ACCOUNTS`
--

INSERT INTO `TABLE_ACCOUNTS` (`id`, `user_id`, `instagram_id`, `username`, `password`, `proxy`, `date`, `last_login`, `login_required`) VALUES
(1, 2, '7352070697', 'shypper.my', 'wan13wan', '', '2018-09-28 05:26:40', '2018-10-15 09:28:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_comment_log`
--

CREATE TABLE `TABLE_auto_comment_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `commented_media_code` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_comment_schedule`
--

CREATE TABLE `TABLE_auto_comment_schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `target` text NOT NULL,
  `comments` text NOT NULL,
  `timeline_feed` text NOT NULL,
  `speed` varchar(20) NOT NULL,
  `daily_pause` tinyint(1) NOT NULL,
  `daily_pause_from` time NOT NULL,
  `daily_pause_to` time NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `schedule_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `last_action_date` datetime NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_follow_log`
--

CREATE TABLE `TABLE_auto_follow_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `followed_user_pk` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TABLE_auto_follow_log`
--

INSERT INTO `TABLE_auto_follow_log` (`id`, `user_id`, `account_id`, `status`, `followed_user_pk`, `data`, `date`) VALUES
(1, 2, 1, 'success', '3585376630', '{\"trigger\":{\"type\":\"hashtag\",\"id\":\"iphone\",\"value\":\"iphone\"},\"followed\":{\"pk\":\"3585376630\",\"username\":\"pedrohphotos\",\"full_name\":\"PH   P H O T O S\",\"profile_pic_url\":\"https:\\/\\/instagram.fkul1-1.fna.fbcdn.net\\/vp\\/469997693a2139655e759d7552c4f330\\/5C3FA9A8\\/t51.2885-19\\/s150x150\\/36962817_249654245832422_1319367443130351616_n.jpg\"}}', '2018-09-28 05:46:52'),
(2, 2, 1, 'success', '5803143319', '{\"trigger\":{\"type\":\"hashtag\",\"id\":\"iphone\",\"value\":\"iphone\"},\"followed\":{\"pk\":\"5803143319\",\"username\":\"classystuffs_id\",\"full_name\":\"Iphone Case Bali\",\"profile_pic_url\":\"https:\\/\\/instagram.fkul1-1.fna.fbcdn.net\\/vp\\/086bbd4cfc22a0ab67bb683be766310e\\/5C423394\\/t51.2885-19\\/s150x150\\/38963935_456294401540421_6961852050753716224_n.jpg\"}}', '2018-09-28 05:52:08'),
(3, 2, 1, 'success', '8629791853', '{\"trigger\":{\"type\":\"hashtag\",\"id\":\"malaysia\",\"value\":\"malaysia\"},\"followed\":{\"pk\":\"8629791853\",\"username\":\"kainbatikembospekalongan1\",\"full_name\":\"Grosir Kain Batik\",\"profile_pic_url\":\"https:\\/\\/instagram.fkul1-1.fna.fbcdn.net\\/vp\\/5ce03afdf5ab3043a3ec76379aeee087\\/5C5FAB9A\\/t51.2885-19\\/s150x150\\/41467598_329398114289679_2605029133972930560_n.jpg\"}}', '2018-09-28 05:57:07'),
(4, 2, 1, 'success', '7140989480', '{\"trigger\":{\"type\":\"hashtag\",\"id\":\"malaysia\",\"value\":\"malaysia\"},\"followed\":{\"pk\":\"7140989480\",\"username\":\"apple.accessories.my\",\"full_name\":\"No.1 Accessories Apple MY\\ud83d\\udcf1\",\"profile_pic_url\":\"https:\\/\\/instagram.fkul10-1.fna.fbcdn.net\\/vp\\/a86235840da7c740ee0dc50847e53ab8\\/5C619878\\/t51.2885-19\\/s150x150\\/41421640_179872396228176_1998366708514947072_n.jpg\"}}', '2018-09-28 06:11:30'),
(5, 2, 1, 'success', '8186985329', '{\"trigger\":{\"type\":\"hashtag\",\"id\":\"malaysia\",\"value\":\"malaysia\"},\"followed\":{\"pk\":\"8186985329\",\"username\":\"muslimcollection14\",\"full_name\":\"muslimcollection (drf store)\",\"profile_pic_url\":\"https:\\/\\/instagram.fkul10-1.fna.fbcdn.net\\/vp\\/f29048b5e769d34f6762d23d21384838\\/5C5A9A42\\/t51.2885-19\\/s150x150\\/39986961_2333052576923842_8145575514619248640_n.jpg\"}}', '2018-09-28 10:58:35'),
(6, 2, 1, 'success', '8605279757', '{\"trigger\":{\"type\":\"hashtag\",\"id\":\"iphonex\",\"value\":\"iphonex\"},\"followed\":{\"pk\":\"8605279757\",\"username\":\"ishopvia\",\"full_name\":\"iShopVia\",\"profile_pic_url\":\"https:\\/\\/instagram.fkul10-1.fna.fbcdn.net\\/vp\\/67735da51597a16d2cd9f25ce1570e74\\/5C29495C\\/t51.2885-19\\/s150x150\\/41464592_1083270798498923_1576592759609884672_n.jpg\"}}', '2018-09-28 11:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_follow_schedule`
--

CREATE TABLE `TABLE_auto_follow_schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `target` text NOT NULL,
  `speed` varchar(20) NOT NULL,
  `daily_pause` tinyint(1) NOT NULL,
  `daily_pause_from` time NOT NULL,
  `daily_pause_to` time NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `schedule_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `last_action_date` datetime NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TABLE_auto_follow_schedule`
--

INSERT INTO `TABLE_auto_follow_schedule` (`id`, `user_id`, `account_id`, `target`, `speed`, `daily_pause`, `daily_pause_from`, `daily_pause_to`, `is_active`, `schedule_date`, `end_date`, `last_action_date`, `data`) VALUES
(1, 2, 1, '[{\"type\":\"hashtag\",\"id\":\"iphonex\",\"value\":\"iphonex\"},{\"type\":\"hashtag\",\"id\":\"malaysia\",\"value\":\"malaysia\"}]', 'very_fast', 0, '00:00:00', '00:00:00', 1, '2018-09-28 11:34:12', '2030-12-12 23:59:59', '2018-09-28 11:22:12', '{}');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_like_log`
--

CREATE TABLE `TABLE_auto_like_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `liked_media_code` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_like_schedule`
--

CREATE TABLE `TABLE_auto_like_schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `target` text NOT NULL,
  `timeline_feed` text NOT NULL,
  `speed` varchar(20) NOT NULL,
  `daily_pause` tinyint(1) NOT NULL,
  `daily_pause_from` time NOT NULL,
  `daily_pause_to` time NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `schedule_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `last_action_date` datetime NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_repost_log`
--

CREATE TABLE `TABLE_auto_repost_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `original_media_code` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL,
  `is_removable` tinyint(1) NOT NULL,
  `remove_scheduled` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `remove_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_repost_schedule`
--

CREATE TABLE `TABLE_auto_repost_schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `target` text NOT NULL,
  `caption` text NOT NULL,
  `remove_delay` varchar(20) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `daily_pause` tinyint(1) NOT NULL,
  `daily_pause_from` time NOT NULL,
  `daily_pause_to` time NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `schedule_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `last_action_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_unfollow_log`
--

CREATE TABLE `TABLE_auto_unfollow_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `unfollowed_user_pk` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_auto_unfollow_schedule`
--

CREATE TABLE `TABLE_auto_unfollow_schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `daily_pause` tinyint(1) NOT NULL,
  `daily_pause_from` time NOT NULL,
  `daily_pause_to` time NOT NULL,
  `keep_followers` tinyint(1) NOT NULL,
  `whitelist` text NOT NULL,
  `source` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `schedule_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `last_action_date` datetime NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_CAPTIONS`
--

CREATE TABLE `TABLE_CAPTIONS` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_FILES`
--

CREATE TABLE `TABLE_FILES` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `filesize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_FILES`
--

INSERT INTO `TABLE_FILES` (`id`, `user_id`, `title`, `info`, `filename`, `filesize`, `date`) VALUES
(1, 2, '5b1f91e454872.JPG', '', 'watetasu-5badbbb9c3849.jpg', '294670', '2018-09-28 05:27:21'),
(2, 2, '35265128_2207545022798643_1521762545684185088_n.jpg', '', 'muxofeke-5badbe4e987dd.jpg', '91849', '2018-09-28 05:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_GENERAL_DATA`
--

CREATE TABLE `TABLE_GENERAL_DATA` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_GENERAL_DATA`
--

INSERT INTO `TABLE_GENERAL_DATA` (`id`, `name`, `data`) VALUES
(1, 'settings', '{\"site_name\":\"Nextpost\",\"site_description\":\"Nextpost - Auto Post, Schedule & Manage your Instagram Multi Account\",\"site_keywords\":\"nextpost, instagram, auto post, schedule, multiple accounts, social media\",\"currency\":\"MYR\",\"proxy\":true,\"user_proxy\":true,\"geonamesorg_username\":\"\",\"logomark\":\"\",\"logotype\":\"\"}'),
(2, 'integrations', '{\"dropbox\":{\"api_key\":\"\"},\"google\":{\"api_key\":\"\",\"client_id\":\"\",\"analytics\":{\"property_id\":\"\"}},\"onedrive\":{\"client_id\":\"\"},\"paypal\":{\"client_id\":\"\",\"client_secret\":\"\",\"environment\":\"sandbox\"},\"stripe\":{\"environment\":\"sandbox\",\"publishable_key\":\"\",\"secret_key\":\"\"},\"facebook\":{\"app_id\":\"\",\"app_secret\":\"\"}}'),
(3, 'free-trial', '{\"size\":7,\"storage\":{\"total\":\"100.00\",\"file\":-1},\"max_accounts\":1,\"file_pickers\":{\"dropbox\":true,\"onedrive\":true,\"google_drive\":true},\"post_types\":{\"timeline_photo\":true,\"timeline_video\":true,\"story_photo\":true,\"story_video\":true,\"album_photo\":true,\"album_video\":true},\"spintax\":true,\"modules\":[]}'),
(4, 'email-settings', '{\"smtp\":{\"host\":\"\",\"port\":\"\",\"encryption\":\"\",\"auth\":true,\"username\":\"\",\"password\":\"\",\"from\":\"\"},\"notifications\":{\"emails\":\"\",\"new_user\":true,\"new_payment\":true},\"email_verification\":false}');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_OPTIONS`
--

CREATE TABLE `TABLE_OPTIONS` (
  `id` int(10) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TABLE_OPTIONS`
--

INSERT INTO `TABLE_OPTIONS` (`id`, `option_name`, `option_value`) VALUES
(3, 'np_video_processing', '1'),
(4, 'np_search_in_caption', '1');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_ORDERS`
--

CREATE TABLE `TABLE_ORDERS` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gateway` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payment_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total` double(10,2) NOT NULL,
  `paid` double(10,2) NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_PACKAGES`
--

CREATE TABLE `TABLE_PACKAGES` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monthly_price` double(10,2) NOT NULL,
  `annual_price` float(10,2) NOT NULL,
  `settings` text COLLATE utf8_unicode_ci NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_PACKAGES`
--

INSERT INTO `TABLE_PACKAGES` (`id`, `title`, `monthly_price`, `annual_price`, `settings`, `is_public`, `date`) VALUES
(1, 'Alpha', 4.99, 49.00, '{\"storage\":{\"total\":\"150.00\",\"file\":\"15.00\"},\"max_accounts\":1,\"file_pickers\":{\"dropbox\":false,\"onedrive\":false,\"google_drive\":false},\"post_types\":{\"timeline_photo\":true,\"timeline_video\":false,\"story_photo\":true,\"story_video\":false,\"album_photo\":true,\"album_video\":false},\"spintax\":false}', 1, '2017-03-18 19:22:44'),
(2, 'Beta Pack', 7.99, 79.00, '{\"storage\":{\"total\":\"250\",\"file\":\"30.00\"},\"max_accounts\":3,\"file_pickers\":{\"dropbox\":true,\"onedrive\":true,\"google_drive\":true},\"post_types\":{\"timeline_photo\":true,\"timeline_video\":true,\"story_photo\":true,\"story_video\":true,\"album_photo\":true,\"album_video\":true},\"spintax\":true,\"modules\":[]}', 1, '2017-03-18 19:29:19'),
(3, 'Gamma Pack', 17.99, 165.79, '{\"storage\":{\"total\":\"300.00\",\"file\":\"50.00\"},\"max_accounts\":-1,\"file_pickers\":{\"dropbox\":true,\"onedrive\":true,\"google_drive\":true},\"post_types\":{\"timeline_photo\":true,\"timeline_video\":true,\"story_photo\":true,\"story_video\":true,\"album_photo\":true,\"album_video\":true},\"spintax\":true,\"modules\":[\"auto-follow\",\"auto-comment\",\"auto-like\",\"auto-repost\",\"auto-unfollow\"]}', 1, '2017-03-18 19:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_PLUGINS`
--

CREATE TABLE `TABLE_PLUGINS` (
  `id` int(11) NOT NULL,
  `idname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_PLUGINS`
--

INSERT INTO `TABLE_PLUGINS` (`id`, `idname`, `is_active`) VALUES
(1, 'auto-follow', 1),
(2, 'auto-comment', 1),
(3, 'auto-like', 1),
(4, 'auto-repost', 1),
(5, 'auto-unfollow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_POSTS`
--

CREATE TABLE `TABLE_POSTS` (
  `id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `first_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `media_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remove_media` text COLLATE utf8_unicode_ci NOT NULL,
  `account_id` int(11) NOT NULL,
  `is_scheduled` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `schedule_date` datetime NOT NULL,
  `publish_date` datetime NOT NULL,
  `is_hidden` tinyint(1) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_POSTS`
--

INSERT INTO `TABLE_POSTS` (`id`, `status`, `user_id`, `type`, `caption`, `first_comment`, `location`, `media_ids`, `remove_media`, `account_id`, `is_scheduled`, `create_date`, `schedule_date`, `publish_date`, `is_hidden`, `data`) VALUES
(3, 'published', 2, 'story', '', '', '', '1', '0', 1, 0, '2018-09-28 05:36:55', '2018-09-28 05:36:55', '2018-09-28 05:37:00', 0, '{\"upload_id\":\"365815510704225\",\"pk\":\"1878150582826841777\",\"id\":\"1878150582826841777_7352070697\",\"code\":\"BoQiAEUFjax\"}'),
(5, 'published', 2, 'album', 'gggg', '', '', '1,2', '0', 1, 0, '2018-09-28 05:38:28', '2018-09-28 05:38:28', '2018-09-28 05:38:37', 0, '{\"upload_id\":null,\"pk\":\"1878151395934582373\",\"id\":\"1878151395934582373_7352070697\",\"code\":\"BoQiL5lFbZl\"}');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_PROXIES`
--

CREATE TABLE `TABLE_PROXIES` (
  `id` int(11) NOT NULL,
  `proxy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `use_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_USERS`
--

CREATE TABLE `TABLE_USERS` (
  `id` int(11) NOT NULL,
  `account_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_subscription` tinyint(1) NOT NULL,
  `settings` text COLLATE utf8_unicode_ci NOT NULL,
  `preferences` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `expire_date` datetime NOT NULL,
  `date` datetime NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TABLE_USERS`
--

INSERT INTO `TABLE_USERS` (`id`, `account_type`, `email`, `username`, `password`, `firstname`, `lastname`, `package_id`, `package_subscription`, `settings`, `preferences`, `is_active`, `expire_date`, `date`, `data`) VALUES
(1, 'admin', 'ADMIN_EMAIL', 'admin', '$2y$10$YJizzfv5NieQrmJLcF.9T.WPagNklBO4e.TycMwt7IDIH3JSH/zfG', 'ADMIN_FIRSTNAME', 'ADMIN_LASTNAME', 3, 1, '{\"storage\":{\"total\":\"300.00\",\"file\":\"50.00\"},\"max_accounts\":-1,\"file_pickers\":{\"dropbox\":true,\"onedrive\":true,\"google_drive\":true},\"post_types\":{\"timeline_photo\":true,\"timeline_video\":true,\"story_photo\":true,\"story_video\":true,\"album_photo\":true,\"album_video\":true},\"spintax\":true}', '{\"timezone\":\"ADMIN_TIMEZONE\",\"dateformat\":\"Y-m-d\",\"timeformat\":\"24\",\"language\":\"en-US\"}', 1, '2030-12-31 23:59:59', '0000-00-00 00:00:00', '{}'),
(2, 'admin', 'ridwanramly04@gmail.com', 'user_5badb893737bb', '$2y$10$YJizzfv5NieQrmJLcF.9T.WPagNklBO4e.TycMwt7IDIH3JSH/zfG', 'Ridwan', 'Ramli', 3, 0, '{\"storage\":{\"total\":\"100.00\",\"file\":-1},\"max_accounts\":1,\"file_pickers\":{\"dropbox\":true,\"onedrive\":true,\"google_drive\":true},\"post_types\":{\"timeline_photo\":true,\"timeline_video\":true,\"story_photo\":true,\"story_video\":true,\"album_photo\":true,\"album_video\":true},\"spintax\":true,\"modules\":[\"auto-follow\",\"auto-comment\",\"auto-like\",\"auto-repost\",\"auto-unfollow\"]}', '{\"timezone\":\"Asia\\/Kuala_Lumpur\",\"dateformat\":\"Y-m-d\",\"timeformat\":\"24\",\"language\":\"en-US\"}', 1, '2018-12-05 05:13:55', '2018-09-28 05:13:55', '{}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TABLE_ACCOUNTS`
--
ALTER TABLE `TABLE_ACCOUNTS`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`,`username`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `TABLE_auto_comment_log`
--
ALTER TABLE `TABLE_auto_comment_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `commented_media_code` (`commented_media_code`);

--
-- Indexes for table `TABLE_auto_comment_schedule`
--
ALTER TABLE `TABLE_auto_comment_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `TABLE_auto_follow_log`
--
ALTER TABLE `TABLE_auto_follow_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `followed_user_pk` (`followed_user_pk`);

--
-- Indexes for table `TABLE_auto_follow_schedule`
--
ALTER TABLE `TABLE_auto_follow_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `TABLE_auto_like_log`
--
ALTER TABLE `TABLE_auto_like_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `liked_media_code` (`liked_media_code`);

--
-- Indexes for table `TABLE_auto_like_schedule`
--
ALTER TABLE `TABLE_auto_like_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `TABLE_auto_repost_log`
--
ALTER TABLE `TABLE_auto_repost_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `original_media_code` (`original_media_code`);

--
-- Indexes for table `TABLE_auto_repost_schedule`
--
ALTER TABLE `TABLE_auto_repost_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `TABLE_auto_unfollow_log`
--
ALTER TABLE `TABLE_auto_unfollow_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `unfollowed_user_pk` (`unfollowed_user_pk`);

--
-- Indexes for table `TABLE_auto_unfollow_schedule`
--
ALTER TABLE `TABLE_auto_unfollow_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `TABLE_CAPTIONS`
--
ALTER TABLE `TABLE_CAPTIONS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `TABLE_FILES`
--
ALTER TABLE `TABLE_FILES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TABLE_GENERAL_DATA`
--
ALTER TABLE `TABLE_GENERAL_DATA`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `TABLE_OPTIONS`
--
ALTER TABLE `TABLE_OPTIONS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TABLE_ORDERS`
--
ALTER TABLE `TABLE_ORDERS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TABLE_PACKAGES`
--
ALTER TABLE `TABLE_PACKAGES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TABLE_PLUGINS`
--
ALTER TABLE `TABLE_PLUGINS`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idname` (`idname`);

--
-- Indexes for table `TABLE_POSTS`
--
ALTER TABLE `TABLE_POSTS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status` (`status`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `TABLE_PROXIES`
--
ALTER TABLE `TABLE_PROXIES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TABLE_USERS`
--
ALTER TABLE `TABLE_USERS`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TABLE_ACCOUNTS`
--
ALTER TABLE `TABLE_ACCOUNTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TABLE_auto_comment_log`
--
ALTER TABLE `TABLE_auto_comment_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_comment_schedule`
--
ALTER TABLE `TABLE_auto_comment_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_follow_log`
--
ALTER TABLE `TABLE_auto_follow_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `TABLE_auto_follow_schedule`
--
ALTER TABLE `TABLE_auto_follow_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TABLE_auto_like_log`
--
ALTER TABLE `TABLE_auto_like_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_like_schedule`
--
ALTER TABLE `TABLE_auto_like_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_repost_log`
--
ALTER TABLE `TABLE_auto_repost_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_repost_schedule`
--
ALTER TABLE `TABLE_auto_repost_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_unfollow_log`
--
ALTER TABLE `TABLE_auto_unfollow_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_auto_unfollow_schedule`
--
ALTER TABLE `TABLE_auto_unfollow_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_CAPTIONS`
--
ALTER TABLE `TABLE_CAPTIONS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_FILES`
--
ALTER TABLE `TABLE_FILES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `TABLE_GENERAL_DATA`
--
ALTER TABLE `TABLE_GENERAL_DATA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `TABLE_OPTIONS`
--
ALTER TABLE `TABLE_OPTIONS`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `TABLE_ORDERS`
--
ALTER TABLE `TABLE_ORDERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_PACKAGES`
--
ALTER TABLE `TABLE_PACKAGES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `TABLE_PLUGINS`
--
ALTER TABLE `TABLE_PLUGINS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `TABLE_POSTS`
--
ALTER TABLE `TABLE_POSTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `TABLE_PROXIES`
--
ALTER TABLE `TABLE_PROXIES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TABLE_USERS`
--
ALTER TABLE `TABLE_USERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `TABLE_ACCOUNTS`
--
ALTER TABLE `TABLE_ACCOUNTS`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `TABLE_USERS` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TABLE_CAPTIONS`
--
ALTER TABLE `TABLE_CAPTIONS`
  ADD CONSTRAINT `captions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `TABLE_USERS` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TABLE_POSTS`
--
ALTER TABLE `TABLE_POSTS`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `TABLE_USERS` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `TABLE_ACCOUNTS` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
