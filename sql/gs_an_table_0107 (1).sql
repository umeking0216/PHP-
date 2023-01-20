-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 1 月 19 日 16:34
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_0121`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table_0107`
--

CREATE TABLE `gs_an_table_0107` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name_kana` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `primary_school` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `parent_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `parent_kana` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `workplace` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `workplace_phone_number` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `parent_phone_number` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `health_level` text COLLATE utf8_unicode_ci NOT NULL,
  `club` text COLLATE utf8_unicode_ci NOT NULL,
  `request` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table_0107`
--

INSERT INTO `gs_an_table_0107` (`id`, `name`, `name_kana`, `sex`, `birthday`, `postal_code`, `address`, `phone_number`, `email`, `primary_school`, `parent_name`, `parent_kana`, `workplace`, `workplace_phone_number`, `parent_phone_number`, `health_level`, `club`, `request`, `img`, `indate`) VALUES
(3, '梅木悠太', 'うめきゆうた', '', '2023-01-02', '061-0500', '樺戸郡月形町52−108', '09037749274', 'yamasu.101@bb.wakwak.com', '月形小学校', '梅木洋一', 'うめきよういち', '（株）山ス伊藤商店', '0126532932', '09037749274', '良好', 'プログラミング部', 'よく頑張っていますよ', NULL, '2023-01-05 22:51:42'),
(5, '梅木　悠太', '梅木　悠太', '女', '2023-01-04', '061-0511', '本町17番地の2', '0126532932', 'yamasu.101@bb.wakwak.com', 'っd', 'っd', 'っっd', 'っっd', 'っd', 'っっd', 'っd', 'っっd', 'っっd', NULL, '2023-01-19 00:54:54'),
(6, '梅木　悠太', 'ssss', '男', '2023-01-25', '061-0511', '本町17番地の2', '0126532932', 'yamasu.101@bb.wakwak.com', 'cxcx', 'xzxz', 'cxcx', 'dddd', 'zxs', 'dsdsd', 'dsssds', 'dssd', 'aaaa', NULL, '2023-01-19 23:22:51'),
(7, '梅木　悠太', 'ssss', '男', '2023-01-25', '061-0511', '本町17番地の2', '0126532932', 'yamasu.101@bb.wakwak.com', 'cxcx', 'xzxz', 'cxcx', 'dddd', 'zxs', 'dsdsd', 'dsssds', 'dssd', 'aaaa', '20230119154304_個人写真.JPG', '2023-01-19 23:43:04');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table_0107`
--
ALTER TABLE `gs_an_table_0107`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_table_0107`
--
ALTER TABLE `gs_an_table_0107`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
