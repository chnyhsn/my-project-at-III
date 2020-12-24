-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-07 08:26:12
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `gobar`
--

-- --------------------------------------------------------

--
-- 資料表結構 `area`
--

CREATE TABLE `area` (
  `sid` int(11) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `area`
--

INSERT INTO `area` (`sid`, `area`) VALUES
(1, '信義區'),
(2, '大安區'),
(3, '中山區'),
(4, '大同區');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`sid`, `name`, `email`, `phone`, `password`, `birthday`, `address`, `level`) VALUES
(1, 'Joanna', '123@qqq.com', '0912123456', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1997-12-25', '台北市松山區', '白金會員'),
(2, 'Allen', '456@qqq.com', '0919294885', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '1997-12-17', '台北市信義區', '一般會員');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `shop` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `weekdays` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `noshow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`sid`, `shop`, `date`, `weekdays`, `time`, `people`, `name`, `phone`, `email`, `remarks`, `noshow`) VALUES
(1, 'Odin信義放感情', '2020-12-01', 'TUESDAY', '22:30:00', 2, 'wei', '0988888888', 'asass@com', 'noooo', 'xxx'),
(2, '小後苑Backyard Jr.', '2020-11-24', 'THURSDAY', '21:30', 2, 'wei', '0911111111', 'aaa@com', 'hi', 'xxx'),
(3, 'Alchemy Bar', '2020-11-30', 'MONDAY', '23:00', 2, 'boo', '0912222222', 'aa@com', 'aaaa', ''),
(4, 'Lost in NEMEA', '2020-12-24', 'THURSDAY', '23:00', 2, 'boo', '0912222222', 'aa@com', 'aaaa', ''),
(5, 'Commons', '2020-12-06', 'SUNDAY', '20:30', 3, 'Qoo', '0923411111', 'abc123@com', 'hello', ''),
(7, 'FRANK Taipei', '2020-12-29', 'TUESDAY', '23:30', 4, 'jjj', '0911111111', 'jjj@com', 'yaaaa', ''),
(8, '榕 RON Xinyi', '2020-11-27', 'FRIDAY', '23:30', 3, 'jojo', '0982736666', '123@com', '', ''),
(20, '安慰劑 Placebo Taipei', '2020-12-04', 'FRIDAY', '21:00', 3, '汪哈吉', '0917777777', 'shiba@dog.com', 'cute', ''),
(21, 'Attic Trade co.', '2020-12-05', 'SATURDAY', '20:00', 1, '汪汪', '0986666666', 'dog@dd.com', '', ''),
(22, 'FRANK Taipei', '2020-12-03', 'THURSDAY', '23:00', 1, 'abc', '0988888888', 'abc@c.com', '', ''),
(39, 'A Light', '2020-12-06', 'SUNDAY', '21:30', 5, '小小兵', '0911111123', 'abc@a.com', '', ''),
(40, 'A Light', '2020-12-06', 'SUNDAY', '21:30', 6, '6', '6', '6@6.com', '', ''),
(41, '小後苑Backyard Jr.', '2020-12-07', 'MONDAY', '20:30', 2, 'a', '1', '1@a.com', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `evaluation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `business_hours` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `area_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `shop`
--

INSERT INTO `shop` (`sid`, `name`, `evaluation`, `address`, `mobile`, `business_hours`, `price`, `area_sid`) VALUES
(1, 'Odin信義放感情', '4.9', '台北市信義區嘉興街127巷107號', '02-2732-2668', '18:00–02:00', '200', 1),
(2, '安慰劑 Placebo Taipei', '4.3', '台北市信義區基隆路二段83號', '02-8732-2345', '20:00–02:00', '200', 1),
(3, 'Lost in NEMEA', '4.7', '台北市信義區基隆路二段151-1號', '02-2736-7771', '20:00–02:30', '350', 1),
(4, '小後苑Backyard Jr.', '4.3', '台北市信義區松壽路9號3樓', '02-2722-0353', '11:00–02:00', '200', 1),
(5, 'Alchemy Bar', '4.4', '台北市信義區信義路五段16-1號2樓', '02-2720-0080', '20:00–03:00', '300', 1),
(6, 'Attic Trade co.', '4.9', '台北市信義區基隆路二段12號3樓', '02-2720-1150', '20:00–02:00', '300', 1),
(7, 'BARCODE Taipei', '4.2', '台北市信義區松壽路22號5樓', '0920-168-269', '21:00–02:30', '300', 1),
(8, 'Commons', '4.7', '台北市信義區光復南路447-48號', '02-2345-0050', '19:00–02:00\r\n', '250', 1),
(9, 'FRANK Taipei', '4.0', '台北市信義區松壽路12號 ATT 4 FUN 10樓', '0909-332-333', '21:00–02:30', '220', 1),
(10, 'Marquee', '4.4', '台北市信義區信義路五段16-1號', '02-2729-5409', '20:00–02:00', '220', 1),
(11, 'YEN Bar', '4.0', '台北市信義區忠孝東路五段10號', '02-7703-8887', '14:00–19:00', '250', 1),
(12, '榕 RON Xinyi', '4.5', '台北市信義區基隆路二段12號', '02-2720-0026', '12:00–03:00', '180', 1),
(13, '双喜 Cié Cié Taipei', '4.9', '台北市信義區松壽路22號3樓', '0978-803-377', '21:00–03:00', '300', 1),
(14, '來吧', '4.9', '台北市信義區光復南路415巷4號', '02-8786-9020', '18:00-02:00', '150', 1),
(15, '啜飲室 Landmark', '4.5', '台北市信義區忠孝東路五段68號', '02-2722-0592', '15:00-01:00', '200', 1),
(16, 'Marsalis Home Taipei', '4.4', '台北市信義區松仁路90號3樓', '02-8789-8166', '19:00-02:00', '350', 1),
(17, 'NIGHT ELEVEN', '4.9', '台北市信義區吳興街284巷8號之3號', '0908-680-090', '19:00-02:00', '240', 1),
(18, 'Under construction', '4.9', '台北市信義區莊敬路190-1號', '02-2366-0155', '18:00–02:00', '300', 1),
(19, 'Clear-Cut Bar', '5.0', '台北市信義區嘉興街12號', '02-22334537', '19:00-00:00', '250', 1),
(20, '渣男Taiwan Bistro', '4.9', '台北市信義區信義路五段150巷315弄12號', '02-2720-9820', '17:30–01:30', '160', 1),
(21, 'OPIUM Champagne', '4.0', '台北市信義區信義路五段16-2號', '02-8780-2258', '14:00–02:00', '160', 1),
(22, 'She_Design TAPAS', '4.7', '台北市信義區基隆路一段127號', '02-87873918', '12:00-01:00', '300', 1),
(23, 'DéNight Bar', '4.3', '台北市信義區逸仙路26巷1號', '02-2720-2233', '20:00-02:00', '100', 1),
(24, '美好時光Bistro', '4.3', '台北市信義區信義路六段34號', '02-2727-3777', '18:00-00:00', '400', 1),
(25, 'Woobar', '4.2', '台北市信義區忠孝東路五段10號10樓', '02-7703-8887', '10:00-02:00', '350', 1),
(26, 'A Light', '4.5', '台北市信義區基隆路一段396號', '02-2729-2996', '20:30-02:30\r\n', '300', 1),
(27, 'R SQUARED Taipei', '4.4', '台北市信義區仁愛路四段452巷8號', '02-2732 2722\r\n', '20:00–02:00', '300', 1),
(28, '晃Twinkie', '4.8', '台北市信義區虎林街143號', '02 8786 7652', '20:00–02:00', '250', 1),
(29, 'Find Alley', '5.0', '台北市信義區光復南路587號', '0965-315-873', '19:00–02:00', '250', 1),
(30, 'Charlie\'s Sports Bar', '4.6', '台北市信義區基隆路二段151號', '0987-346-022	\r\n', '19:00–02:00', '250', 1),
(31, '後院 L’arrière-cour', '4.4', '台北市大安區安和路二段23巷4號', '0965-315-873', '19:00-03:00', '300', 2),
(32, 'R&D Cocktail Lab', '4.4', '台北市大安區安和路二段23巷4號', '02-2704-7818', '19:00-03:00', '300', 2),
(33, 'ABV Bar&Kitchen', '4.4', '台北市大安區敦化南路一段233巷61號', '02-8732-2345', '12:00-01:30', '200', 2),
(34, 'GINZA SAKOH Taipei ', '4.5', '台北市中山區中山北路二段39巷10號', '02-2567-8433', '19:00-01:00', '400', 3),
(35, 'SoShow Bar', '4.4', ' 台北市中山區中山北路一段47號2f', '02-2541-8787', '18:00-02:00', '250', 3),
(36, '傻瓜屋咖啡廳小酒館', '4.0', '台北市中山區中山北路一段62號', '02-8786-7652', '20:00–02:00', '250', 3),
(37, '發琴吧 Ginspiration', '4.7', '台北市大同區迪化街一段76號3樓', '02-2556-2526', '18:30-00:00', '250', 4),
(38, '小城外Bar CityNorth', '4.5', '台北市中山區中山北路一段62號', '02-8786-7652', '20:00–02:00', '140', 4),
(39, '醜 Sponge', '4.5', '台北市大同區承德路一段24巷17號', '02-2550-7577', '20:00-02:00', '300', 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `area`
--
ALTER TABLE `area`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `shop`
--
ALTER TABLE `shop`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
