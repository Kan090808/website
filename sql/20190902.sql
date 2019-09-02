-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `website`
--

-- --------------------------------------------------------

--
-- 資料表結構 `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'WordPress 示範留言者', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-08-29 14:32:40', '2019-08-29 06:32:40', '網站管理員你好，這是一則預留內容留言。\n如需開始審閱、編輯及刪除留言，請前往 [控制台] 的 [留言] 頁面進行必要的操作。\n留言者個人頭像來源為 <a href=\"https://zh-tw.gravatar.com\" target=\"_blank\">Gravatar</a>。', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/website', 'yes'),
(2, 'home', 'http://localhost/website', 'yes'),
(3, 'blogname', '簡先生的網頁', 'yes'),
(4, 'blogdescription', 'MrKan&#039;s Official Website', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'kanjingterng@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'Y 年 n 月 j 日', 'yes'),
(24, 'time_format', 'a g:i', 'yes'),
(25, 'links_updated_date_format', 'Y 年 n 月 j 日a g:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '', 'yes'),
(29, 'rewrite_rules', '', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:60:\"C:\\xampp\\htdocs\\website/wp-content/themes/new-blog/style.css\";i:1;s:0:\"\";}', 'no'),
(40, 'template', 'new-blog', 'yes'),
(41, 'stylesheet', 'new-blog', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '44719', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', 'Asia/Taipei', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '13', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'initial_db_version', '44719', 'yes'),
(94, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(95, 'fresh_site', '0', 'yes'),
(96, 'WPLANG', 'zh_TW', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:5:{s:19:\"wp_inactive_widgets\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(103, 'cron', 'a:6:{i:1567409561;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1567449161;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1567492361;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1567492369;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1567492371;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(104, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'recovery_keys', 'a:0:{}', 'yes'),
(116, 'theme_mods_twentynineteen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1567060413;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(125, '_site_transient_timeout_browser_666332998c62658cc43216116351bf1f', '1567665170', 'no'),
(126, '_site_transient_browser_666332998c62658cc43216116351bf1f', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"76.0.3809.100\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(127, '_site_transient_timeout_php_check_d1959de4b7de84f195ea226c4728f095', '1567665171', 'no'),
(128, '_site_transient_php_check_d1959de4b7de84f195ea226c4728f095', 'a:5:{s:19:\"recommended_version\";s:3:\"7.3\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(132, 'can_compress_scripts', '1', 'no'),
(145, 'current_theme', 'New Blog', 'yes'),
(146, 'theme_mods_zlotus', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1567060650;s:4:\"data\";a:5:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-4\";a:0:{}s:9:\"sidebar-5\";a:0:{}}}}', 'yes'),
(147, 'theme_switched', '', 'yes'),
(148, 'widget_zlotus_about_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(149, 'widget_zlotus_social_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(150, 'widget_zlotus_latest_news_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(151, 'widget_zlotus_facebook_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(152, 'widget_zlotus_promo_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(157, 'theme_mods_new-blog-lite', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1567060693;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes'),
(160, 'theme_mods_new-blog', 'a:22:{i:0;b:0;s:18:\"nav_menu_locations\";a:2:{s:6:\"menu-1\";i:2;s:6:\"menu-2\";i:2;}s:18:\"custom_css_post_id\";i:-1;s:29:\"new_blog_banner_slider_enable\";b:0;s:28:\"new_blog_sidebar_enable_page\";b:1;s:23:\"new_blog_sidebar_enable\";b:0;s:29:\"new_blog_footer_slider_enable\";b:0;s:50:\"new_blog_footer_slider_post_taxonomy_UseBlankImage\";b:0;s:21:\"new_blog_footer_title\";b:0;s:24:\"new_blog_read_more_title\";s:6:\"更多\";s:26:\"new_blog_social_top_enable\";b:1;s:29:\"new_blog_social_bottom_enable\";b:1;s:28:\"new_blog_social_url_Facebook\";s:34:\"https://www.facebook.com/jingterng\";s:27:\"new_blog_twitter_url_enable\";b:0;s:27:\"new_blog_youtube_url_enable\";b:0;s:29:\"new_blog_pinterest_url_enable\";b:0;s:29:\"new_blog_sidebar_about_enable\";b:1;s:28:\"new_blog_sidebar_about_title\";s:12:\"歡迎瀏覽\";s:31:\"new_blog_sidebar_about_textarea\";s:108:\"網站除了有我的簡介之外，還會推薦一些好用的工具或產品，希望大家多多關注。\";s:30:\"new_blog_sidebar_slider_enable\";b:0;s:27:\"new_blog_sidebar_post_title\";s:12:\"近期文章\";s:28:\"new_blog_sidebar_post_enable\";b:0;}', 'yes'),
(162, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:0:{}}', 'yes'),
(167, 'category_children', 'a:0:{}', 'yes'),
(175, '_site_transient_timeout_theme_roots', '1567408149', 'no'),
(176, '_site_transient_theme_roots', 'a:6:{s:13:\"new-blog-lite\";s:7:\"/themes\";s:8:\"new-blog\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";s:6:\"zlotus\";s:7:\"/themes\";}', 'no'),
(177, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/zh_TW/wordpress-5.2.2.zip\";s:6:\"locale\";s:5:\"zh_TW\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/zh_TW/wordpress-5.2.2.zip\";s:10:\"no_content\";b:0;s:11:\"new_bundled\";b:0;s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.2.2\";s:7:\"version\";s:5:\"5.2.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1567406351;s:15:\"version_checked\";s:5:\"5.2.2\";s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:4:\"core\";s:4:\"slug\";s:7:\"default\";s:8:\"language\";s:5:\"zh_TW\";s:7:\"version\";s:5:\"5.2.2\";s:7:\"updated\";s:19:\"2019-09-01 18:00:05\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/5.2.2/zh_TW.zip\";s:10:\"autoupdate\";b:1;}}}', 'no'),
(178, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1567406352;s:7:\"checked\";a:6:{s:13:\"new-blog-lite\";s:5:\"1.0.0\";s:8:\"new-blog\";s:5:\"1.1.4\";s:14:\"twentynineteen\";s:3:\"1.4\";s:15:\"twentyseventeen\";s:3:\"2.2\";s:13:\"twentysixteen\";s:3:\"2.0\";s:6:\"zlotus\";s:5:\"1.0.0\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(179, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1567406353;s:7:\"checked\";a:2:{s:19:\"akismet/akismet.php\";s:5:\"4.1.2\";s:9:\"hello.php\";s:5:\"1.7.2\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:2:{i:0;a:7:{s:4:\"type\";s:6:\"plugin\";s:4:\"slug\";s:7:\"akismet\";s:8:\"language\";s:5:\"zh_TW\";s:7:\"version\";s:5:\"4.1.2\";s:7:\"updated\";s:19:\"2019-06-21 07:17:45\";s:7:\"package\";s:74:\"https://downloads.wordpress.org/translation/plugin/akismet/4.1.2/zh_TW.zip\";s:10:\"autoupdate\";b:1;}i:1;a:7:{s:4:\"type\";s:6:\"plugin\";s:4:\"slug\";s:11:\"hello-dolly\";s:8:\"language\";s:5:\"zh_TW\";s:7:\"version\";s:5:\"1.7.2\";s:7:\"updated\";s:19:\"2019-04-03 10:42:20\";s:7:\"package\";s:78:\"https://downloads.wordpress.org/translation/plugin/hello-dolly/1.7.2/zh_TW.zip\";s:10:\"autoupdate\";b:1;}}s:9:\"no_update\";a:2:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.2\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no');

-- --------------------------------------------------------

--
-- 資料表結構 `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_wp_trash_meta_status', 'publish'),
(4, 5, '_wp_trash_meta_time', '1567068296'),
(5, 7, '_menu_item_type', 'custom'),
(6, 7, '_menu_item_menu_item_parent', '0'),
(7, 7, '_menu_item_object_id', '7'),
(8, 7, '_menu_item_object', 'custom'),
(9, 7, '_menu_item_target', ''),
(10, 7, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(11, 7, '_menu_item_xfn', ''),
(12, 7, '_menu_item_url', 'http://localhost/website'),
(13, 6, '_wp_trash_meta_status', 'publish'),
(14, 6, '_wp_trash_meta_time', '1567068336'),
(15, 8, '_edit_lock', '1567069542:1'),
(16, 11, '_edit_lock', '1567070332:1'),
(17, 11, '_wp_trash_meta_status', 'publish'),
(18, 11, '_wp_trash_meta_time', '1567070349'),
(19, 12, '_edit_lock', '1567070235:1'),
(20, 13, '_edit_lock', '1567087789:1'),
(21, 15, '_wp_trash_meta_status', 'publish'),
(22, 15, '_wp_trash_meta_time', '1567083621'),
(23, 16, '_wp_trash_meta_status', 'publish'),
(24, 16, '_wp_trash_meta_time', '1567083649'),
(25, 17, '_wp_trash_meta_status', 'publish'),
(26, 17, '_wp_trash_meta_time', '1567083697'),
(27, 18, '_wp_trash_meta_status', 'publish'),
(28, 18, '_wp_trash_meta_time', '1567083704'),
(29, 19, '_wp_trash_meta_status', 'publish'),
(30, 19, '_wp_trash_meta_time', '1567083765'),
(31, 20, '_edit_lock', '1567083660:1'),
(32, 22, '_menu_item_type', 'custom'),
(33, 22, '_menu_item_menu_item_parent', '0'),
(34, 22, '_menu_item_object_id', '22'),
(35, 22, '_menu_item_object', 'custom'),
(36, 22, '_menu_item_target', ''),
(37, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(38, 22, '_menu_item_xfn', ''),
(39, 22, '_menu_item_url', ''),
(40, 21, '_wp_trash_meta_status', 'publish'),
(41, 21, '_wp_trash_meta_time', '1567084138'),
(42, 23, '_wp_trash_meta_status', 'publish'),
(43, 23, '_wp_trash_meta_time', '1567084158'),
(45, 24, '_customize_changeset_uuid', '90c016dc-48cc-461e-b536-3a2f203816ef'),
(46, 25, '_edit_lock', '1567084260:1'),
(48, 26, '_customize_changeset_uuid', '90c016dc-48cc-461e-b536-3a2f203816ef'),
(50, 27, '_customize_changeset_uuid', '90c016dc-48cc-461e-b536-3a2f203816ef'),
(52, 28, '_customize_changeset_uuid', '90c016dc-48cc-461e-b536-3a2f203816ef'),
(53, 33, '_menu_item_type', 'post_type'),
(54, 33, '_menu_item_menu_item_parent', '22'),
(55, 33, '_menu_item_object_id', '24'),
(56, 33, '_menu_item_object', 'page'),
(57, 33, '_menu_item_target', ''),
(58, 33, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(59, 33, '_menu_item_xfn', ''),
(60, 33, '_menu_item_url', ''),
(61, 34, '_menu_item_type', 'post_type'),
(62, 34, '_menu_item_menu_item_parent', '22'),
(63, 34, '_menu_item_object_id', '26'),
(64, 34, '_menu_item_object', 'page'),
(65, 34, '_menu_item_target', ''),
(66, 34, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(67, 34, '_menu_item_xfn', ''),
(68, 34, '_menu_item_url', ''),
(69, 35, '_menu_item_type', 'post_type'),
(70, 35, '_menu_item_menu_item_parent', '22'),
(71, 35, '_menu_item_object_id', '27'),
(72, 35, '_menu_item_object', 'page'),
(73, 35, '_menu_item_target', ''),
(74, 35, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(75, 35, '_menu_item_xfn', ''),
(76, 35, '_menu_item_url', ''),
(77, 36, '_menu_item_type', 'post_type'),
(78, 36, '_menu_item_menu_item_parent', '0'),
(79, 36, '_menu_item_object_id', '28'),
(80, 36, '_menu_item_object', 'page'),
(81, 36, '_menu_item_target', ''),
(82, 36, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(83, 36, '_menu_item_xfn', ''),
(84, 36, '_menu_item_url', ''),
(85, 25, '_wp_trash_meta_status', 'publish'),
(86, 25, '_wp_trash_meta_time', '1567084276'),
(87, 38, '_menu_item_type', 'taxonomy'),
(88, 38, '_menu_item_menu_item_parent', '0'),
(89, 38, '_menu_item_object_id', '3'),
(90, 38, '_menu_item_object', 'category'),
(91, 38, '_menu_item_target', ''),
(92, 38, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(93, 38, '_menu_item_xfn', ''),
(94, 38, '_menu_item_url', ''),
(95, 37, '_wp_trash_meta_status', 'publish'),
(96, 37, '_wp_trash_meta_time', '1567084369'),
(98, 39, '_customize_changeset_uuid', '42db5494-da3d-49f7-8171-80db9e265bd2'),
(99, 40, '_edit_lock', '1567084430:1'),
(100, 42, '_menu_item_type', 'post_type'),
(101, 42, '_menu_item_menu_item_parent', '0'),
(102, 42, '_menu_item_object_id', '39'),
(103, 42, '_menu_item_object', 'page'),
(104, 42, '_menu_item_target', ''),
(105, 42, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(106, 42, '_menu_item_xfn', ''),
(107, 42, '_menu_item_url', ''),
(108, 40, '_wp_trash_meta_status', 'publish'),
(109, 40, '_wp_trash_meta_time', '1567084434'),
(110, 43, '_wp_trash_meta_status', 'publish'),
(111, 43, '_wp_trash_meta_time', '1567085156'),
(112, 44, '_edit_lock', '1567085469:1'),
(113, 44, '_wp_trash_meta_status', 'publish'),
(114, 44, '_wp_trash_meta_time', '1567085473'),
(115, 45, '_edit_lock', '1567085573:1'),
(116, 45, '_wp_trash_meta_status', 'publish'),
(117, 45, '_wp_trash_meta_time', '1567085574'),
(118, 28, '_edit_lock', '1567085462:1'),
(119, 46, '_wp_attached_file', '2019/08/laptop-2038734_1280.jpg'),
(120, 46, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1280;s:6:\"height\";i:960;s:4:\"file\";s:31:\"2019/08/laptop-2038734_1280.jpg\";s:5:\"sizes\";a:11:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-300x225.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-768x576.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:576;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:32:\"laptop-2038734_1280-1024x768.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:34:\"new-blog-feature-display-thumbnail\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-600x290.jpg\";s:5:\"width\";i:600;s:6:\"height\";i:290;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:31:\"new-blog-blog-display-thumbnail\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-700x485.jpg\";s:5:\"width\";i:700;s:6:\"height\";i:485;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:31:\"new-blog-blog-1colume-thumbnail\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-750x350.jpg\";s:5:\"width\";i:750;s:6:\"height\";i:350;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:25:\"new-blog-banner-thumbnail\";a:4:{s:4:\"file\";s:32:\"laptop-2038734_1280-1280x600.jpg\";s:5:\"width\";i:1280;s:6:\"height\";i:600;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:25:\"new-blog-footer-thumbnail\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-240x200.jpg\";s:5:\"width\";i:240;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:26:\"new-blog-sidebar-thumbnail\";a:4:{s:4:\"file\";s:31:\"laptop-2038734_1280-450x401.jpg\";s:5:\"width\";i:450;s:6:\"height\";i:401;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"new-blog-sidebar-latestpost-thumbnail\";a:4:{s:4:\"file\";s:29:\"laptop-2038734_1280-90x80.jpg\";s:5:\"width\";i:90;s:6:\"height\";i:80;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:3:\"2.2\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:9:\"iPhone 6s\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:4:\"4.15\";s:3:\"iso\";s:2:\"32\";s:13:\"shutter_speed\";s:16:\"0.03030303030303\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(121, 48, '_edit_lock', '1567085888:1'),
(122, 48, '_wp_trash_meta_status', 'publish'),
(123, 48, '_wp_trash_meta_time', '1567085890'),
(124, 49, '_wp_trash_meta_status', 'publish'),
(125, 49, '_wp_trash_meta_time', '1567085943'),
(126, 50, '_wp_trash_meta_status', 'publish'),
(127, 50, '_wp_trash_meta_time', '1567085976'),
(128, 24, '_edit_lock', '1567407355:1');

-- --------------------------------------------------------

--
-- 資料表結構 `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-08-29 14:32:40', '2019-08-29 06:32:40', '<!-- wp:paragraph -->\n<p>歡迎使用 WordPress。這是這個網站的第一篇文章，試試為這篇文章進行編輯或直接刪除，然後開始撰寫新文章！</p>\n<!-- /wp:paragraph -->', '網站第一篇文章', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2019-08-29 14:32:40', '2019-08-29 06:32:40', '', 0, 'http://localhost/website/?p=1', 0, 'post', '', 1),
(2, 1, '2019-08-29 14:32:40', '2019-08-29 06:32:40', '<!-- wp:paragraph -->\n<p>這是一個範例頁面。頁面與網站文章不同，因為它顯示的位置為固定位置，並且大多數的佈景主題會將它顯示在網站導覽選單中。大多數人會新增一個〈關於〉頁面，以便向網站訪客介紹自己。〈關於〉頁面的內容類似以下示範：</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>嗨，你好！白天我是一位郵差，晚上則是個滿懷抱負的演員，這是用來展現自我的網站。我住在高雄，養了一隻極通人性的狗叫小黑；最愛喝啤酒，目標是為市面上買的到的所有啤酒都寫一篇評論。</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>或是像這樣：</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>XYZ Doohickey Comany 成立於 1971 年，公司成立以來，我們一直為大眾提供高品質的網站客製化服務。目前公司位於台北市，有超過 2,000 名員工，並持續為開源社群提供資源及場地。</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>身為一位新的 WordPress 使用者，請前往<a href=\"http://localhost/website/wp-admin/\">控制台</a>刪除這個頁面，並建立屬於自己的頁面。祝使用愉快！</p>\n<!-- /wp:paragraph -->', '範例頁面', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2019-08-29 14:32:40', '2019-08-29 06:32:40', '', 0, 'http://localhost/website/?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-08-29 14:32:40', '2019-08-29 06:32:40', '<!-- wp:heading --><h2>我們是誰</h2><!-- /wp:heading --><!-- wp:paragraph --><p>我們的網站網址為 http://localhost/website。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>這個網站收集了哪些個人資訊，以及為什麼要收集這些資訊</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>留言</h3><!-- /wp:heading --><!-- wp:paragraph --><p>使用者在這個網站發佈留言後，我們會收集顯示於留言表單中的資料、使用者的來源 IP 位址及瀏覽器的使用者代理程式字串，以協助網站偵測垃圾留言。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>這個網站會根據使用者的電子郵件地址建立匿名字串  (亦稱為<strong>雜湊值</strong>)，並提供給 Gravatar 個人頭像服務以查詢這個使用者是否為這項服務的使用者。如需瞭解 Gravatar 個人頭像服務的隱私權政策，請造訪 <a title=\"Automattic 的隱私權政策\" href=\"https://automattic.com/privacy/\" target=\"_blank\">https://automattic.com/privacy/</a>。網站管理員核准使用者發佈的留言後，使用者的個人資料圖片便會在留言內容中公開顯示。</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>媒體</h3><!-- /wp:heading --><!-- wp:paragraph --><p>如需將圖片上傳至這個網站，請避免上傳內嵌 EXIF GPS 位置資料的圖片，因為其他使用者可以從網站上下載圖片並擷取當中的位置資料。</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>聯絡表單</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookie</h3><!-- /wp:heading --><!-- wp:paragraph --><p>使用者在這個網站發佈留言時，可以選擇是否在 Cookie 中儲存使用者姓名、電子郵件地址及網站網址；儲存這些資料是為了使用者更加方便，以便讓使用者發佈其他留言時，無需再次填寫個人資料。在使用者不自行清除裝置 Cookie 的狀況下，這些 Cookie 在個人裝置上保留一年。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>如果使用者造訪這個網站的登入頁面，系統會設定一個臨時 Cookie 以確定使用者的瀏覽器是否接受 Cookie；這個 Cookie 不包含任何個人資料，並會在使用者關閉瀏覽器時捨棄。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>使用者登入網站後，系統會設定幾個 Cookie 以儲存使用者的登入資訊及顯示項目設定；登入資訊 Cookie 會保留兩天，顯示項目設定 Cookie 則會保留一年。如果登入時核取了 [保持登入] 這項設定，使用者的登入狀態會維持兩週；帳號登出後，便會移除使用者裝置上的登入資訊 Cookie。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>使用者編輯或發佈文章時，會在瀏覽器中儲存其他 Cookie。這個 Cookie 不包含任何個人資料，僅記錄表示使用者撰寫的文章的文章 ID，並會在一天後過期。</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>來自第三方網站的嵌入內容</h3><!-- /wp:heading --><!-- wp:paragraph --><p>這個網站上的文章可能會嵌入視訊、圖片、文章等內容，而來自第三方網站的嵌入內容，其隱私權處理方式與使用者造訪這些網站時的規定完全相同。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>這些第三方網站會以下列 (但不限於) 方式收集與使用者相關的資料。<br/>\n<ul>\n<li>Cookie</li>\n<li>嵌入第三方追蹤程式碼</li>\n<li>監視使用者與嵌入內容的互動 (無論使用者是否有網站帳號或是否登入網站)</li>\n</ul></p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>使用者資料分析</h3><!-- /wp:heading --><!-- wp:heading --><h2>這個網站的個人資料分享對象</h2><!-- /wp:heading --><!-- wp:heading --><h2>這個網站的個人資料保留期限</h2><!-- /wp:heading --><!-- wp:paragraph --><p>當使用者在這個網站發佈留言後，該則留言及其中繼資料將會無限期保留。這樣系統便可以自動辨識及核准任何後續留言，而不須將其保留在待審核的佇列中。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>針對在這個網站上註冊的使用者，這個網站還會儲存他們在使用者 [個人資料] 頁面中提供的個人資訊。全部使用者都可以隨時查看、編輯或刪除自己的個人資訊 (無法變更的使用者名稱除外)。請注意，網站管理員也可以查看及編輯這些個人資訊。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>使用者對個人資料擁有哪些權利</h2><!-- /wp:heading --><!-- wp:paragraph --><p>如果使用者在這個網站擁有帳戶或曾發佈留言，便可以要求下載使用者在這個網站上的個人資料的資料匯出檔，這個檔案包含使用者提供給這個網站的全部個人資料。使用者也可以要求清除曾提供給這個網站的全部個人資料，但這項要求不包含站方為了管理、法律或安全目的而必須保留的相關資料。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>這個網站會將使用者資料傳送至何處</h2><!-- /wp:heading --><!-- wp:paragraph --><p>使用者留言資料會傳送至垃圾留言自動偵測服務進行檢查。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>網站聯絡資訊</h2><!-- /wp:heading --><!-- wp:heading --><h2>其他資訊</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>這個網站保護個人資料的方式</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>這個網站會採取的個人資料外洩處理程序</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>這個網站會從第三方接收哪些個人資料</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>這個網站對使用者個人資料進行了哪些自動化決策或分析</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>監管行業揭露需求</h3><!-- /wp:heading -->', '隱私權政策', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2019-08-29 14:32:40', '2019-08-29 06:32:40', '', 0, 'http://localhost/website/?page_id=3', 0, 'page', '', 0),
(4, 1, '2019-08-29 14:32:51', '0000-00-00 00:00:00', '', '自動草稿', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-08-29 14:32:51', '0000-00-00 00:00:00', '', 0, 'http://localhost/website/?p=4', 0, 'post', '', 0),
(5, 1, '2019-08-29 16:44:56', '2019-08-29 08:44:56', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 08:44:56\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'b2df8239-504f-47e5-b92c-e3f579821c7d', '', '', '2019-08-29 16:44:56', '2019-08-29 08:44:56', '', 0, 'http://localhost/website/2019/08/29/b2df8239-504f-47e5-b92c-e3f579821c7d/', 0, 'customize_changeset', '', 0),
(6, 1, '2019-08-29 16:45:36', '2019-08-29 08:45:36', '{\n    \"new-blog::nav_menu_locations[menu-1]\": {\n        \"value\": -3787393401536139300,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 08:45:36\"\n    },\n    \"nav_menu[-3787393401536139300]\": {\n        \"value\": {\n            \"name\": \"\\u4e3b\\u83dc\\u55ae\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 08:45:36\"\n    },\n    \"nav_menu_item[-5942526389759777000]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"\",\n            \"menu_item_parent\": 0,\n            \"position\": 1,\n            \"type\": \"custom\",\n            \"title\": \"\\u9996\\u9801\",\n            \"url\": \"http://localhost/website\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u9996\\u9801\",\n            \"nav_menu_term_id\": -3787393401536139300,\n            \"_invalid\": false,\n            \"type_label\": \"\\u81ea\\u8a02\\u9023\\u7d50\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 08:45:36\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '73ef390c-8e06-4a5b-a6c8-bd6c66b40596', '', '', '2019-08-29 16:45:36', '2019-08-29 08:45:36', '', 0, 'http://localhost/website/2019/08/29/73ef390c-8e06-4a5b-a6c8-bd6c66b40596/', 0, 'customize_changeset', '', 0),
(7, 1, '2019-08-29 16:45:36', '2019-08-29 08:45:36', '', '首頁', '', 'publish', 'closed', 'closed', '', '%e9%a6%96%e9%a0%81', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/%e9%a6%96%e9%a0%81/', 1, 'nav_menu_item', '', 0),
(8, 1, '2019-08-29 16:46:19', '2019-08-29 08:46:19', '', '關於我', '', 'publish', 'closed', 'closed', '', '%e9%97%9c%e6%96%bc%e6%88%91', '', '', '2019-08-29 16:46:19', '2019-08-29 08:46:19', '', 0, 'http://localhost/website/?page_id=8', 0, 'page', '', 0),
(9, 1, '2019-08-29 16:46:19', '2019-08-29 08:46:19', '', '關於我', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2019-08-29 16:46:19', '2019-08-29 08:46:19', '', 8, 'http://localhost/website/2019/08/29/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2019-08-29 16:48:20', '2019-08-29 08:48:20', '', '關於我', '', 'inherit', 'closed', 'closed', '', '8-autosave-v1', '', '', '2019-08-29 16:48:20', '2019-08-29 08:48:20', '', 8, 'http://localhost/website/2019/08/29/8-autosave-v1/', 0, 'revision', '', 0),
(11, 1, '2019-08-29 17:19:09', '2019-08-29 09:19:09', '{\n    \"blogdescription\": {\n        \"value\": \"MrKan\'s Official Website\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 09:19:09\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'b7b67503-703e-49f7-8df7-ee5de1280ff5', '', '', '2019-08-29 17:19:09', '2019-08-29 09:19:09', '', 0, 'http://localhost/website/?p=11', 0, 'customize_changeset', '', 0),
(12, 1, '2019-08-29 17:19:36', '0000-00-00 00:00:00', '', '自動草稿', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-08-29 17:19:36', '0000-00-00 00:00:00', '', 0, 'http://localhost/website/?page_id=12', 0, 'page', '', 0),
(13, 1, '2019-08-29 21:00:01', '2019-08-29 13:00:01', '<!-- wp:image {\"id\":46} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/website/wp-content/uploads/2019/08/laptop-2038734_1280-1024x768.jpg\" alt=\"\" class=\"wp-image-46\"/></figure>\n<!-- /wp:image -->', '首頁', '', 'publish', 'closed', 'closed', '', '%e9%a6%96%e9%a0%81', '', '', '2019-08-29 21:34:03', '2019-08-29 13:34:03', '', 0, 'http://localhost/website/?page_id=13', 0, 'page', '', 0),
(14, 1, '2019-08-29 21:00:01', '2019-08-29 13:00:01', '', '首頁', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2019-08-29 21:00:01', '2019-08-29 13:00:01', '', 13, 'http://localhost/website/2019/08/29/13-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2019-08-29 21:00:21', '2019-08-29 13:00:21', '{\n    \"page_on_front\": {\n        \"value\": \"13\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:00:21\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '21a1849a-912a-440f-9a67-447d661f4025', '', '', '2019-08-29 21:00:21', '2019-08-29 13:00:21', '', 0, 'http://localhost/website/2019/08/29/21a1849a-912a-440f-9a67-447d661f4025/', 0, 'customize_changeset', '', 0),
(16, 1, '2019-08-29 21:00:49', '2019-08-29 13:00:49', '{\n    \"new-blog::new_blog_banner_slider_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:00:49\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '93046cc1-0639-4e1f-abc1-77bd8753e3bf', '', '', '2019-08-29 21:00:49', '2019-08-29 13:00:49', '', 0, 'http://localhost/website/2019/08/29/93046cc1-0639-4e1f-abc1-77bd8753e3bf/', 0, 'customize_changeset', '', 0),
(17, 1, '2019-08-29 21:01:37', '2019-08-29 13:01:37', '{\n    \"new-blog::new_blog_sidebar_enable_page\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:01:37\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'b494db46-5229-496b-948f-fe1d6c646cc5', '', '', '2019-08-29 21:01:37', '2019-08-29 13:01:37', '', 0, 'http://localhost/website/2019/08/29/b494db46-5229-496b-948f-fe1d6c646cc5/', 0, 'customize_changeset', '', 0),
(18, 1, '2019-08-29 21:01:44', '2019-08-29 13:01:44', '{\n    \"new-blog::new_blog_sidebar_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:01:44\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '84f2d2a5-40e5-4595-83d6-9724035a16df', '', '', '2019-08-29 21:01:44', '2019-08-29 13:01:44', '', 0, 'http://localhost/website/2019/08/29/84f2d2a5-40e5-4595-83d6-9724035a16df/', 0, 'customize_changeset', '', 0),
(19, 1, '2019-08-29 21:02:45', '2019-08-29 13:02:45', '{\n    \"new-blog::new_blog_footer_slider_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:02:45\"\n    },\n    \"new-blog::new_blog_footer_slider_post_taxonomy_UseBlankImage\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:02:45\"\n    },\n    \"new-blog::new_blog_footer_title\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:02:45\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '33a83617-df1d-4b83-a542-3e2a6b4fca9e', '', '', '2019-08-29 21:02:45', '2019-08-29 13:02:45', '', 0, 'http://localhost/website/2019/08/29/33a83617-df1d-4b83-a542-3e2a6b4fca9e/', 0, 'customize_changeset', '', 0),
(20, 1, '2019-08-29 21:03:10', '0000-00-00 00:00:00', '', '自動草稿', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-08-29 21:03:10', '0000-00-00 00:00:00', '', 0, 'http://localhost/website/?page_id=20', 0, 'page', '', 0),
(21, 1, '2019-08-29 21:08:58', '2019-08-29 13:08:58', '{\n    \"nav_menu_item[-7803727903546886000]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"custom\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"custom\",\n            \"title\": \"\\u95dc\\u65bc\\u6211\",\n            \"url\": \"http://\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u95dc\\u65bc\\u6211\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u81ea\\u8a02\\u9023\\u7d50\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:08:58\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '50af7223-4ae5-437a-8923-a74cb2cec4b4', '', '', '2019-08-29 21:08:58', '2019-08-29 13:08:58', '', 0, 'http://localhost/website/2019/08/29/50af7223-4ae5-437a-8923-a74cb2cec4b4/', 0, 'customize_changeset', '', 0),
(22, 1, '2019-08-29 21:08:58', '2019-08-29 13:08:58', '', '關於我', '', 'publish', 'closed', 'closed', '', '%e9%97%9c%e6%96%bc%e6%88%91', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/%e9%97%9c%e6%96%bc%e6%88%91/', 2, 'nav_menu_item', '', 0),
(23, 1, '2019-08-29 21:09:18', '2019-08-29 13:09:18', '{\n    \"nav_menu_item[22]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"custom\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"custom\",\n            \"title\": \"\\u95dc\\u65bc\\u6211\",\n            \"url\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u95dc\\u65bc\\u6211\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u81ea\\u8a02\\u9023\\u7d50\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:09:18\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'eb1a9cb3-05f6-4415-93c0-247c7cd9a032', '', '', '2019-08-29 21:09:18', '2019-08-29 13:09:18', '', 0, 'http://localhost/website/2019/08/29/eb1a9cb3-05f6-4415-93c0-247c7cd9a032/', 0, 'customize_changeset', '', 0),
(24, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '<!-- wp:paragraph -->\n<p>目前市面上有很多免費且好用的線上履歷平台，讓大家可以製作專屬且美觀的履歷表，方便儲存及分享，操作簡單也可參考他人的履歷表。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>我所使用的是<a href=\"https://www.cakeresume.com\">CakeResume</a>，有興趣的可以去體驗看看。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>對我的履歷有興趣，可以點此閱覽 -->  https://www.cakeresume.com/kanjingterng </p>\n<!-- /wp:paragraph -->', '履歷表', '', 'publish', 'closed', 'closed', '', '%e5%b1%a5%e6%ad%b7%e8%a1%a8', '', '', '2019-09-02 14:48:14', '2019-09-02 06:48:14', '', 0, 'http://localhost/website/?page_id=24', 0, 'page', '', 0),
(25, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '{\n    \"nav_menus_created_posts\": {\n        \"value\": [\n            24,\n            26,\n            27,\n            28\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:11:15\"\n    },\n    \"nav_menu_item[-4386672756681005000]\": {\n        \"value\": {\n            \"object_id\": 24,\n            \"object\": \"page\",\n            \"menu_item_parent\": 22,\n            \"position\": 4,\n            \"type\": \"post_type\",\n            \"title\": \"\\u5c65\\u6b77\\u8868\",\n            \"url\": \"http://localhost/website/?page_id=24\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u5c65\\u6b77\\u8868\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u9801\\u9762\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:10:47\"\n    },\n    \"nav_menu_item[-4748201959640601000]\": {\n        \"value\": {\n            \"object_id\": 26,\n            \"object\": \"page\",\n            \"menu_item_parent\": 22,\n            \"position\": 3,\n            \"type\": \"post_type\",\n            \"title\": \"\\u7c21\\u4ecb\",\n            \"url\": \"http://localhost/website/?page_id=26\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u7c21\\u4ecb\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u9801\\u9762\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:10:47\"\n    },\n    \"nav_menu_item[-7804529856230879000]\": {\n        \"value\": {\n            \"object_id\": 27,\n            \"object\": \"page\",\n            \"menu_item_parent\": 22,\n            \"position\": 5,\n            \"type\": \"post_type\",\n            \"title\": \"\\u6280\\u8853\",\n            \"url\": \"http://localhost/website/?page_id=27\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u6280\\u8853\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u9801\\u9762\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:11:15\"\n    },\n    \"nav_menu_item[-4203555732429310000]\": {\n        \"value\": {\n            \"object_id\": 28,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 3,\n            \"type\": \"post_type\",\n            \"title\": \"\\u4f5c\\u54c1\\u96c6\",\n            \"url\": \"http://localhost/website/?page_id=28\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u4f5c\\u54c1\\u96c6\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u9801\\u9762\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:11:15\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '90c016dc-48cc-461e-b536-3a2f203816ef', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 0, 'http://localhost/website/?p=25', 0, 'customize_changeset', '', 0),
(26, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '簡介', '', 'publish', 'closed', 'closed', '', '%e7%b0%a1%e4%bb%8b', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 0, 'http://localhost/website/?page_id=26', 0, 'page', '', 0),
(27, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '技術', '', 'publish', 'closed', 'closed', '', '%e6%8a%80%e8%a1%93', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 0, 'http://localhost/website/?page_id=27', 0, 'page', '', 0),
(28, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '作品集', '', 'publish', 'closed', 'closed', '', '%e4%bd%9c%e5%93%81%e9%9b%86', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 0, 'http://localhost/website/?page_id=28', 0, 'page', '', 0),
(29, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '履歷表', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 24, 'http://localhost/website/2019/08/29/24-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '簡介', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 26, 'http://localhost/website/2019/08/29/26-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '技術', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 27, 'http://localhost/website/2019/08/29/27-revision-v1/', 0, 'revision', '', 0),
(32, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', '作品集', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2019-08-29 21:11:15', '2019-08-29 13:11:15', '', 28, 'http://localhost/website/2019/08/29/28-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', ' ', '', '', 'publish', 'closed', 'closed', '', '33', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/33/', 4, 'nav_menu_item', '', 0),
(34, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', ' ', '', '', 'publish', 'closed', 'closed', '', '34', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/34/', 3, 'nav_menu_item', '', 0),
(35, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', ' ', '', '', 'publish', 'closed', 'closed', '', '35', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/35/', 5, 'nav_menu_item', '', 0),
(36, 1, '2019-08-29 21:11:15', '2019-08-29 13:11:15', ' ', '', '', 'publish', 'closed', 'closed', '', '36', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/36/', 6, 'nav_menu_item', '', 0),
(37, 1, '2019-08-29 21:12:49', '2019-08-29 13:12:49', '{\n    \"nav_menu_item[-4905471151398959000]\": {\n        \"value\": {\n            \"object_id\": 3,\n            \"object\": \"category\",\n            \"menu_item_parent\": 0,\n            \"position\": 5,\n            \"type\": \"taxonomy\",\n            \"title\": \"\\u6587\\u7ae0\\u5206\\u4eab\",\n            \"url\": \"http://localhost/website/category/%e6%96%87%e7%ab%a0%e5%88%86%e4%ba%ab/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u6587\\u7ae0\\u5206\\u4eab\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u5206\\u985e\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:12:49\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '8cbe089f-5762-4522-854a-85e7188f52bf', '', '', '2019-08-29 21:12:49', '2019-08-29 13:12:49', '', 0, 'http://localhost/website/2019/08/29/8cbe089f-5762-4522-854a-85e7188f52bf/', 0, 'customize_changeset', '', 0),
(38, 1, '2019-08-29 21:12:49', '2019-08-29 13:12:49', ' ', '', '', 'publish', 'closed', 'closed', '', '38', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/38/', 7, 'nav_menu_item', '', 0),
(39, 1, '2019-08-29 21:13:54', '2019-08-29 13:13:54', '', '推薦列表', '', 'publish', 'closed', 'closed', '', '%e6%8e%a8%e8%96%a6%e5%88%97%e8%a1%a8', '', '', '2019-08-29 21:13:54', '2019-08-29 13:13:54', '', 0, 'http://localhost/website/?page_id=39', 0, 'page', '', 0),
(40, 1, '2019-08-29 21:13:54', '2019-08-29 13:13:54', '{\n    \"nav_menu_item[36]\": {\n        \"value\": {\n            \"menu_item_parent\": 0,\n            \"object_id\": 28,\n            \"object\": \"page\",\n            \"type\": \"post_type\",\n            \"type_label\": \"\\u9801\\u9762\",\n            \"url\": \"http://localhost/website/%e4%bd%9c%e5%93%81%e9%9b%86/\",\n            \"title\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"nav_menu_term_id\": 2,\n            \"position\": 6,\n            \"status\": \"publish\",\n            \"original_title\": \"\\u4f5c\\u54c1\\u96c6\",\n            \"_invalid\": false\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:13:50\"\n    },\n    \"nav_menu_item[33]\": {\n        \"value\": {\n            \"menu_item_parent\": 22,\n            \"object_id\": 24,\n            \"object\": \"page\",\n            \"type\": \"post_type\",\n            \"type_label\": \"\\u9801\\u9762\",\n            \"url\": \"http://localhost/website/%e5%b1%a5%e6%ad%b7%e8%a1%a8/\",\n            \"title\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"nav_menu_term_id\": 2,\n            \"position\": 4,\n            \"status\": \"publish\",\n            \"original_title\": \"\\u5c65\\u6b77\\u8868\",\n            \"_invalid\": false\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:13:50\"\n    },\n    \"nav_menu_item[35]\": {\n        \"value\": {\n            \"menu_item_parent\": 22,\n            \"object_id\": 27,\n            \"object\": \"page\",\n            \"type\": \"post_type\",\n            \"type_label\": \"\\u9801\\u9762\",\n            \"url\": \"http://localhost/website/%e6%8a%80%e8%a1%93/\",\n            \"title\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"nav_menu_term_id\": 2,\n            \"position\": 5,\n            \"status\": \"publish\",\n            \"original_title\": \"\\u6280\\u8853\",\n            \"_invalid\": false\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:13:50\"\n    },\n    \"nav_menus_created_posts\": {\n        \"value\": [\n            39\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:13:50\"\n    },\n    \"nav_menu_item[38]\": {\n        \"value\": {\n            \"object_id\": 3,\n            \"object\": \"category\",\n            \"menu_item_parent\": 0,\n            \"position\": 7,\n            \"type\": \"taxonomy\",\n            \"title\": \"\\u6587\\u7ae0\\u5206\\u4eab\",\n            \"url\": \"http://localhost/website/category/%e6%96%87%e7%ab%a0%e5%88%86%e4%ba%ab/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u6587\\u7ae0\\u5206\\u4eab\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u5206\\u985e\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:13:54\"\n    },\n    \"nav_menu_item[-3672916798373417000]\": {\n        \"value\": {\n            \"object_id\": 39,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 8,\n            \"type\": \"post_type\",\n            \"title\": \"\\u63a8\\u85a6\\u5217\\u8868\",\n            \"url\": \"http://localhost/website/?page_id=39\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\\u63a8\\u85a6\\u5217\\u8868\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"\\u9801\\u9762\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:13:54\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '42db5494-da3d-49f7-8171-80db9e265bd2', '', '', '2019-08-29 21:13:54', '2019-08-29 13:13:54', '', 0, 'http://localhost/website/?p=40', 0, 'customize_changeset', '', 0),
(41, 1, '2019-08-29 21:13:54', '2019-08-29 13:13:54', '', '推薦列表', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2019-08-29 21:13:54', '2019-08-29 13:13:54', '', 39, 'http://localhost/website/2019/08/29/39-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2019-08-29 21:13:54', '2019-08-29 13:13:54', ' ', '', '', 'publish', 'closed', 'closed', '', '42', '', '', '2019-08-29 22:02:13', '2019-08-29 14:02:13', '', 0, 'http://localhost/website/2019/08/29/42/', 8, 'nav_menu_item', '', 0),
(43, 1, '2019-08-29 21:25:56', '2019-08-29 13:25:56', '{\n    \"new-blog::new_blog_read_more_title\": {\n        \"value\": \"\\u66f4\\u591a\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:25:56\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '7b8d90ff-86e6-4685-8b69-7a4da15a2f32', '', '', '2019-08-29 21:25:56', '2019-08-29 13:25:56', '', 0, 'http://localhost/website/2019/08/29/7b8d90ff-86e6-4685-8b69-7a4da15a2f32/', 0, 'customize_changeset', '', 0),
(44, 1, '2019-08-29 21:31:13', '2019-08-29 13:31:13', '{\n    \"new-blog::new_blog_social_top_enable\": {\n        \"value\": true,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:30:49\"\n    },\n    \"new-blog::new_blog_social_bottom_enable\": {\n        \"value\": true,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:30:49\"\n    },\n    \"new-blog::new_blog_social_url_Facebook\": {\n        \"value\": \"https://www.facebook.com/jingterng\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:31:13\"\n    },\n    \"new-blog::new_blog_twitter_url_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:31:13\"\n    },\n    \"new-blog::new_blog_youtube_url_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:31:13\"\n    },\n    \"new-blog::new_blog_pinterest_url_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:31:13\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'de907b48-7393-4950-a24c-11b14af72e27', '', '', '2019-08-29 21:31:13', '2019-08-29 13:31:13', '', 0, 'http://localhost/website/?p=44', 0, 'customize_changeset', '', 0),
(45, 1, '2019-08-29 21:32:54', '2019-08-29 13:32:54', '{\n    \"new-blog::new_blog_sidebar_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:31:53\"\n    },\n    \"new-blog::new_blog_sidebar_enable_page\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:32:53\"\n    },\n    \"new-blog::new_blog_sidebar_about_enable\": {\n        \"value\": true,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:32:53\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '2b7fa148-4969-4793-9c53-1566708b79ba', '', '', '2019-08-29 21:32:54', '2019-08-29 13:32:54', '', 0, 'http://localhost/website/?p=45', 0, 'customize_changeset', '', 0),
(46, 1, '2019-08-29 21:33:47', '2019-08-29 13:33:47', '', 'laptop-2038734_1280', '', 'inherit', 'open', 'closed', '', 'laptop-2038734_1280', '', '', '2019-08-29 21:33:47', '2019-08-29 13:33:47', '', 13, 'http://localhost/website/wp-content/uploads/2019/08/laptop-2038734_1280.jpg', 0, 'attachment', 'image/jpeg', 0),
(47, 1, '2019-08-29 21:34:03', '2019-08-29 13:34:03', '<!-- wp:image {\"id\":46} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/website/wp-content/uploads/2019/08/laptop-2038734_1280-1024x768.jpg\" alt=\"\" class=\"wp-image-46\"/></figure>\n<!-- /wp:image -->', '首頁', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2019-08-29 21:34:03', '2019-08-29 13:34:03', '', 13, 'http://localhost/website/?p=47', 0, 'revision', '', 0),
(48, 1, '2019-08-29 21:38:10', '2019-08-29 13:38:10', '{\n    \"new-blog::new_blog_sidebar_enable_page\": {\n        \"value\": true,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:35:08\"\n    },\n    \"new-blog::new_blog_sidebar_about_title\": {\n        \"value\": \"\\u6b61\\u8fce\\u700f\\u89bd\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:35:08\"\n    },\n    \"new-blog::new_blog_sidebar_about_textarea\": {\n        \"value\": \"\\u7db2\\u7ad9\\u9664\\u4e86\\u6709\\u6211\\u7684\\u7c21\\u4ecb\\u4e4b\\u5916\\uff0c\\u9084\\u6703\\u63a8\\u85a6\\u4e00\\u4e9b\\u597d\\u7528\\u7684\\u5de5\\u5177\\u6216\\u7522\\u54c1\\uff0c\\u5e0c\\u671b\\u5927\\u5bb6\\u591a\\u591a\\u95dc\\u6ce8\\u3002\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:36:08\"\n    },\n    \"new-blog::new_blog_sidebar_slider_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:36:08\"\n    },\n    \"new-blog::new_blog_sidebar_post_title\": {\n        \"value\": \"\\u8fd1\\u671f\\u6587\\u7ae0\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:38:08\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'f83d9e0a-fec8-40f7-bf63-831c0a8124a5', '', '', '2019-08-29 21:38:10', '2019-08-29 13:38:10', '', 0, 'http://localhost/website/?p=48', 0, 'customize_changeset', '', 0),
(49, 1, '2019-08-29 21:39:03', '2019-08-29 13:39:03', '{\n    \"new-blog::new_blog_sidebar_post_enable\": {\n        \"value\": false,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:39:03\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ef880af0-9082-4002-8464-0f63071a9064', '', '', '2019-08-29 21:39:03', '2019-08-29 13:39:03', '', 0, 'http://localhost/website/?p=49', 0, 'customize_changeset', '', 0),
(50, 1, '2019-08-29 21:39:36', '2019-08-29 13:39:36', '{\n    \"sidebars_widgets[wp_inactive_widgets]\": {\n        \"value\": [\n            \"archives-2\",\n            \"categories-2\",\n            \"meta-2\"\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:39:36\"\n    },\n    \"sidebars_widgets[sidebar-1]\": {\n        \"value\": [\n            \"search-2\",\n            \"recent-posts-2\",\n            \"recent-comments-2\"\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-08-29 13:39:36\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '77f7a230-8c2a-44b4-afc0-c32c2a8478e2', '', '', '2019-08-29 21:39:36', '2019-08-29 13:39:36', '', 0, 'http://localhost/website/?p=50', 0, 'customize_changeset', '', 0),
(51, 1, '2019-09-02 14:46:05', '2019-09-02 06:46:05', '<!-- wp:paragraph -->\n<p>目前市面上有很多免費且好用的線上履歷平台，讓大家可以製作專屬且美觀的履歷表，方便儲存及分享，操作簡單也可參考他人的履歷表。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>我所使用的是<a href=\"https://www.cakeresume.com\">CakeResume</a>，有興趣的可以去體驗看看。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', '履歷表', '', 'inherit', 'closed', 'closed', '', '24-autosave-v1', '', '', '2019-09-02 14:46:05', '2019-09-02 06:46:05', '', 24, 'http://localhost/website/?p=51', 0, 'revision', '', 0),
(52, 1, '2019-09-02 14:48:14', '2019-09-02 06:48:14', '<!-- wp:paragraph -->\n<p>目前市面上有很多免費且好用的線上履歷平台，讓大家可以製作專屬且美觀的履歷表，方便儲存及分享，操作簡單也可參考他人的履歷表。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>我所使用的是<a href=\"https://www.cakeresume.com\">CakeResume</a>，有興趣的可以去體驗看看。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>對我的履歷有興趣，可以點此閱覽 -->  https://www.cakeresume.com/kanjingterng </p>\n<!-- /wp:paragraph -->', '履歷表', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2019-09-02 14:48:14', '2019-09-02 06:48:14', '', 24, 'http://localhost/website/?p=52', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, '未分類', 'uncategorized', 0),
(2, '主菜單', '%e4%b8%bb%e8%8f%9c%e5%96%ae', 0),
(3, '文章分享', '%e6%96%87%e7%ab%a0%e5%88%86%e4%ba%ab', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(7, 2, 0),
(22, 2, 0),
(33, 2, 0),
(34, 2, 0),
(35, 2, 0),
(36, 2, 0),
(38, 2, 0),
(42, 2, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 8),
(3, 3, 'category', '', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'kan'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"aa8005ea22f77396f53921d45bc6b186a64c616f495a00ea6e83aa3b65ac28d9\";a:4:{s:10:\"expiration\";i:1567579156;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36\";s:5:\"login\";i:1567406356;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'nav_menu_recently_edited', '2'),
(19, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(20, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}');

-- --------------------------------------------------------

--
-- 資料表結構 `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'kan', '$P$BkQ.ByDYfj/GAFKzbKR2AG7trwqPdV1', 'kan', 'kanjingterng@gmail.com', '', '2019-08-29 06:32:40', '', 0, 'kan');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- 資料表索引 `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- 資料表索引 `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- 資料表索引 `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- 資料表索引 `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- 資料表索引 `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- 資料表索引 `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- 資料表索引 `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- 資料表索引 `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- 資料表索引 `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- 資料表索引 `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- 資料表索引 `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
