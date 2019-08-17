-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 12:54 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `as`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `foodname` varchar(225) NOT NULL,
  `spno` varchar(600) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`foodname`, `spno`, `quantity`) VALUES
('chicken', ' 456232 123 12', 1),
('hfff', ' nbhghh', 1),
('fsdfsd', ' dfsdfdfd', 2),
('vbfgcv', 'cvf', 2),
('bvc ', ' cvc', 5),
('fgvcx ', ' xcxcv', 5),
('Chickrice', ' dsdasdssf sdfsdf', 3),
('Chickrice', ' dsdasdssf sdfsdf', 3),
('hgf', ' htytfytftyf hfy', 1),
('bg', ' gftfhg', 2),
('bg', ' gftfhg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `cardNUM` int(12) NOT NULL,
  `expriy` varchar(6) NOT NULL,
  `code_num` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `deliveryNum` int(100) NOT NULL,
  `Date` varchar(14) NOT NULL,
  `Time` varchar(6) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`deliveryNum`, `Date`, `Time`, `Name`, `phoneNumber`, `Address`) VALUES
(1, '0000-00-00', '01', 'Thavananthan', 779304653, ' EllalanRoadNavakkiriPuttur'),
(2, '14/10/2017', '01', 'Thavananthan', 779304653, ' Ellalan Road. Navakkiri Puttur.'),
(3, '14/10/2017', '01.00', 'nanthan', 123456789, ' ddddd'),
(4, '15/10/2017', '4.00', 'ram', 2147483647, ' bvggvg'),
(5, '17/10/2017', '11.00 ', 'fdfgg', 779344741, ' cvvcvb vv c'),
(6, '18/10/2017', '1.00', 'vgfg', 112233456, ' fftrty hjgjh0'),
(7, '19/10/2017', '01.30', 'raku', 2147483647, ' ol;p'),
(8, '20/10/2017', '1.20', 'oookk', 2147483647, ' vvvvva'),
(9, '20/10/2017', '1.20', 'oookk', 2147483647, ' vvvvva'),
(10, '20/10/2017', '01.00', 'ooooooooo', 123456789, ' 8hfdgf'),
(11, '20/10/2017', '5.00', 'visakan', 779304653, ' 32mraja veethy nallur'),
(12, '20/10/2017', '5.00', 'visakan', 779304653, ' 32mraja veethy nallur'),
(13, '20/10/2017', '5.00', 'visakan', 779304653, ' 32mraja veethy nallur'),
(14, '20/10/2017', '5.00', 'Thavananthan', 779304653, ' 32mrahajkk'),
(15, '22/10/2017', '1.00', 'raju', 774563123, ' raju oooww'),
(16, '22/10/2017', '1.00', 'raju', 774563123, ' raju oooww'),
(17, '22/10/2017', '1.00', 'thavananthan', 779304653, ' nanthan01'),
(18, '22/10/2017', '1.00', 'thavananthan', 779304653, ' nanthan01'),
(19, '22/10/2017', '1.00', 'thavananthan', 779304653, ' nanthan01'),
(20, '23/10/2017', '7.00', 'oooo', 0, ' ooooooooooooopppppppppppppp'),
(21, '23/10/2017', '1.00', 'Nissanrayappu', 779304653, ' Jaffna Hopital Road'),
(22, '23/10/2017', '1.00', 'Nissanrayappu', 779304653, ' Jaffna Hopital Road'),
(23, '23/10/2017', '2.00', 'thavanthan', 779304653, ' jaffna road no.10'),
(24, '23/10/2017', '1.00', 'Thavananthan', 123456789, '122'),
(25, '23/10/2017', '1.00', 'Thavananthan', 123456789, '122'),
(26, '23/10/2017', '01.00', 'vithu', 779304653, ' vvbnv hghg'),
(27, '23/10/2017', '10.00', 'sogi', 779304653, ' jaffna'),
(28, '23/10/2017', '10.00', 'sogi', 779304653, ' jaffna'),
(29, '23/10/2017', '10.00', 'nallavan', 779304653, ' jaffna'),
(30, '23/10/2017', '10.00', 'nallavan', 774563123, ' jaffna');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackNum` int(10) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackNum`, `Name`, `Email`, `phoneNumber`, `Comment`) VALUES
(1, 'ram', 'ran14@gmail.com', 779304653, ' thank you for your service \r\n  keep it.'),
(2, 'nanan', 'nananan@gmail.com', 779632145, ' soooooo bad you have some error'),
(3, 'sdass', 'asdasae@gmail.com', 112345678, ' dfsd dfgdf dfgfd'),
(4, 'sdass', 'asdasae@gmail.com', 112345678, ' dfsd dfgdf dfgfd'),
(5, 'sdass', 'asdasae@gmail.com', 112345678, ' dfsd dfgdf dfgfd'),
(6, 'sdass', 'asdasae@gmail.com', 112345678, ' dfsd dfgdf dfgfd'),
(7, 'visa', 'vvisakan1234@gmail.com', 779304653, ' hhdfhf');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `memberId` int(6) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `password` text NOT NULL,
  `confirmPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`memberId`, `firstName`, `lastName`, `Email`, `phoneNumber`, `password`, `confirmPassword`) VALUES
(2, 'aseerr', 'asderfrg', 'nana@gmail.com', 779304563, 'nanthaN01@', 'nanthaN01@'),
(3, 'dfdf', 'dccv ', 'xcxcx@gmai.com', 774563123, '123456Sa', '123456Sa'),
(4, 'llllllllllllll', 'jjjjjj', 'uuuuuu@dd.com', 1122334455, 'nanthan01N', 'nanthan01N'),
(5, 'nanthan', 'nanthu', 'sdsdff@gmail.com', 123457854, 'sliitT123', 'sliitT123'),
(6, 'nanthan', 'nanthu', 'sdsf@gmail.com', 123457854, 'sliitT123', 'sliitT123'),
(7, 'ooka', 'vvvoa', 'nananan@gnil.com', 123457850, 'nanthan01S', 'nanthan01S'),
(8, 'PallaviN', 'thavan', 'nnanthu49@gmail.com', 214563789, '123456As', '123456As'),
(9, 'ram', 'raku', 'npallavi@gmail.com', 770045698, 'nanthu01', 'nanthu01'),
(11, 'njnjbbj', 'drdsrrc', 't7t78hij@gmail.com', 712345785, 'nissqnQ', 'nissqnQ'),
(12, 'gftasdft', 'gdjgfygsd', 'fsdfyscd@gmail.com', 712345785, 'nanthaN01@', 'nanthaN01@'),
(13, 'soji', 'kanth', 'niisan03@gmail.com', 774563125, 'nissan01', 'nissan01');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuNum` varchar(20) NOT NULL,
  `FoodName` varchar(30) NOT NULL,
  `prices` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuNum`, `FoodName`, `prices`) VALUES
('order1', 'Yakitori ', 1400),
('order10', 'Coxinha', 1200),
('order11', 'Yassa', 1600),
('order12', 'Schnitzel', 1900),
('order2', 'Wyngz', 1000),
('order3', 'Rollatini', 900),
('order4', 'Sanbeiji', 2400),
('order5', 'Pastilla', 400),
('order6', 'Padak', 1550),
('order7', 'Sanbei', 1320),
('order8', 'Kedjenou', 1600),
('order9', 'Dakjuk', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderNum` int(10) NOT NULL,
  `date` varchar(40) NOT NULL,
  `foodname` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderNum`, `date`, `foodname`, `price`, `quantity`, `total_price`) VALUES
(64, '20/10/2017', 'Rollatini', 900, 2, 1800),
(67, '20/10/2017', 'Kedjenou', 1600, 2, 3200),
(69, '21/10/2017', 'Dakjuk', 1400, 1, 1260),
(70, '21/10/2017', 'Dakjuk', 1400, 1, 1260),
(71, '21/10/2017', 'Dakjuk', 1400, 2, 2520),
(72, '21/10/2017', 'Dakjuk', 1400, 2, 2520),
(73, '21/10/2017', 'Schnitzel', 1900, 1, 1710),
(74, '21/10/2017', 'Schnitzel', 1900, 1, 1710),
(75, '21/10/2017', 'Schnitzel', 1900, 3, 5130),
(76, '21/10/2017', 'Schnitzel', 1900, 3, 5130),
(77, '21/10/2017', 'Yassa', 1600, 1, 1440),
(78, '21/10/2017', 'Yassa', 1600, 1, 1440),
(79, '21/10/2017', 'Schnitzel', 1900, 3, 5130),
(80, '21/10/2017', 'Schnitzel', 1900, 3, 5130),
(81, '21/10/2017', 'Schnitzel', 1900, 3, 5130),
(82, '21/10/2017', 'Schnitzel', 1900, 1, 1710),
(83, '21/10/2017', 'Schnitzel', 1900, 1, 1710),
(84, '21/10/2017', 'Coxinha', 1200, 2, 2160),
(85, '21/10/2017', 'Wyngz', 1000, 1, 1000),
(86, '21/10/2017', 'Dakjuk', 1400, 1, 1260),
(87, '22/10/2017', 'Padak', 1550, 2, 3100),
(88, '22/10/2017', 'Yakitori', 1400, 5, 7000),
(89, '22/10/2017', 'Yakitori', 1400, 5, 7000),
(90, '22/10/2017', 'Dakjuk', 1400, 1, 1260),
(91, '22/10/2017', 'Yassa', 1600, 1, 1440),
(92, '22/10/2017', 'Coxinha', 1200, 10, 10800),
(93, '22/10/2017', 'Yassa', 1600, 3, 4320),
(94, '22/10/2017', 'Kedjenou', 1600, 10, 16000),
(95, '22/10/2017', 'Pastilla', 400, 2, 800),
(96, '23/10/2017', 'Schnitzel', 1900, 3, 5130),
(97, '23/10/2017', 'Dakjuk', 1400, 5, 6300),
(98, '23/10/2017', 'Dakjuk', 1400, 5, 6300),
(99, '23/10/2017', 'Dakjuk', 1400, 5, 6300),
(100, '23/10/2017', 'Coxinha', 1200, 5, 5400),
(101, '23/10/2017', 'Coxinha', 1200, 5, 5400),
(102, '23/10/2017', 'Wyngz', 1000, 5, 5000),
(103, '23/10/2017', 'Dakjuk', 1400, 2, 2520),
(104, '23/10/2017', 'Dakjuk', 1400, 2, 2520),
(105, '23/10/2017', 'Dakjuk', 1400, 5, 6300),
(106, '23/10/2017', 'Wyngz', 1000, 2, 2000),
(107, '23/10/2017', 'Wyngz', 1000, 2, 2000),
(108, '23/10/2017', 'Sanbeiji', 2400, 1, 2400),
(109, '23/10/2017', 'Sanbeiji', 2400, 1, 2400),
(110, '23/10/2017', 'Rollatini', 900, 2, 1800),
(111, '23/10/2017', 'Wyngz', 1000, 2, 2000),
(112, '23/10/2017', 'Wyngz', 1000, 2, 2000),
(113, '23/10/2017', 'Dakjuk', 1400, 44, 55440),
(114, '23/10/2017', 'Wyngz', 1000, 2, 2000),
(115, '23/10/2017', 'Rollatini', 900, 3, 2700),
(116, '23/10/2017', 'Dakjuk', 1400, 5, 6300),
(117, '23/10/2017', 'Dakjuk', 1400, 5, 6300),
(118, '24/10/2017', 'Dakjuk', 1400, 3, 3780),
(119, '24/10/2017', 'Coxinha', 1200, 2, 2160),
(120, '24/10/2017', 'Schnitzel', 1900, 3, 5130);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_No` varchar(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_No`, `Name`, `phone`, `Age`, `Address`) VALUES
('1000', 'raju', 774123569, 20, 'jaffna '),
('1005', 'jgh', 774215652, 23, 'vbg'),
('1009', 'ram', 773214568, 24, 'puttur'),
('1010', 'raku', 2147483647, 63, '123jghj'),
('1200', 'sasi', 778956147, 26, 'Puttur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`deliveryNum`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackNum`);

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
  ADD PRIMARY KEY (`memberId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuNum`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderNum`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `deliveryNum` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackNum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member_details`
--
ALTER TABLE `member_details`
  MODIFY `memberId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderNum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
