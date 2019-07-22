-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 11:12 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisementlog`
--

CREATE TABLE `advertisementlog` (
  `advertisementlog_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `advert_transaction_tracking_id` varchar(225) NOT NULL,
  `timepaid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisementlog`
--

INSERT INTO `advertisementlog` (`advertisementlog_id`, `user_id`, `advert_transaction_tracking_id`, `timepaid`) VALUES
(1, 1, '891ee074-bc40-45f4-81c2-c1e7332ce4ba', '2017-08-10 17:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `advertlog`
--

CREATE TABLE `advertlog` (
  `advertlog_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `advert_transaction_tracking_id` varchar(225) NOT NULL,
  `advert_key` varchar(225) NOT NULL,
  `timepaid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `businesscycle`
--

CREATE TABLE `businesscycle` (
  `businesscycle_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user` varchar(100) NOT NULL,
  `timeadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesscycle`
--

INSERT INTO `businesscycle` (`businesscycle_id`, `user_id`, `user`, `timeadded`) VALUES
(91, 3, 'joshuageneral', '2017-08-04 14:55:12'),
(93, 1, 'mycatering', '2017-08-04 02:47:17'),
(94, 1, 'joshuahotels', '2017-08-04 02:47:24'),
(95, 1, 'joshuafood', '2017-08-04 02:47:29'),
(96, 1, 'esther', '2017-08-04 02:47:50'),
(97, 1, 'Benjamin', '2017-08-04 02:47:56'),
(98, 1, 'Joshua', '2017-08-04 02:53:59'),
(99, 1, 'cars', '2017-08-09 15:51:26'),
(100, 1, 'joshuageneral', '2017-08-09 15:51:43'),
(101, 1, 'jayjay', '2017-08-09 15:52:03'),
(102, 8, 'mycatering', '2017-08-09 16:07:17'),
(103, 12, 'cars', '2017-08-09 06:54:39'),
(104, 12, 'mycatering', '2017-08-09 06:54:46'),
(105, 12, 'joshuahotels', '2017-08-09 06:54:49'),
(106, 12, 'joshuafood', '2017-08-09 06:54:55'),
(107, 12, 'joshuageneral', '2017-08-09 06:55:00'),
(108, 12, 'esther', '2017-08-09 06:55:05'),
(109, 12, 'Benjamin', '2017-08-09 06:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `cars_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `carprice` varchar(20) NOT NULL,
  `carmodel` varchar(50) NOT NULL,
  `cardetails` text NOT NULL,
  `cartype` varchar(50) NOT NULL,
  `carcolors` varchar(225) NOT NULL,
  `carmanufacturer` varchar(50) NOT NULL,
  `carimage` varchar(100) NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`cars_id`, `user_id`, `user_name`, `carname`, `carprice`, `carmodel`, `cardetails`, `cartype`, `carcolors`, `carmanufacturer`, `carimage`, `dateposted`) VALUES
(2, 11, 'Benjamin', 'ARV', '1246778', 'arv', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'newcar', 'red,green,yellow', 'arv', 'uploads/carimages/188b20695a608049345c.jpg', '2017-08-04 01:59:04'),
(3, 11, 'Benjamin', 'Aston martin', '24560000', 'Aston', 'iunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terustin. Nesciu', 'newcar', 'red,green,yellow', 'Aston', 'uploads/carimages/9056e79e52aaa1b98017.jpg', '2017-08-04 08:20:18'),
(8, 3, 'cars', 'ert ert', '3452345', 'dfgsdfg dfg dfg', 'DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction functionDataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction functionDataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function', 'newcar', 'we we,w er,wer,werwer', 'rw rwerwer', 'uploads/carimages/969d06f2b5d82721530a.png', '2017-08-04 02:51:22'),
(10, 3, 'cars', 'er ert ert er te', '34534534', 'rt hdghfd ghfd', 'DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction functionDataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction functionDataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function', 'newcar', 'dfgdfg,gfd,gdfgdfgd,ggdfgdfg,fgdfgf', 'df gdfg dfg', 'uploads/carimages/7ea030dd53058cb22f49.png', '2017-08-04 02:52:13'),
(12, 3, 'cars', 'gfh fh f gh', '45645645', 'fhfgh ghfh fg', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 'newcar', 'ffdfdfg,dfgdfg,dfgdfgfdgdfg,fdgdfg', 'v vdfgdfgdfg fg g', 'uploads/carimages/2294657d12e8b2df4068.png', '2017-08-04 05:07:37'),
(13, 3, 'cars', 'astorn', '345345345', 'fgdfgfggddfgdgg  df fd  fg fd  gdfg f', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 'newcar', 'fghfghf,ghfgh,fgh,fghf,ghfghfghf,ghfghfghfg,hfgh,fghfg,hfghfgh', 'fghfg', 'uploads/carimages/241f6f86cd0883ee554d.png', '2017-08-04 05:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `carscover`
--

CREATE TABLE `carscover` (
  `carscover_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `bannerimage` varchar(100) NOT NULL,
  `backgroundcolor` varchar(20) NOT NULL,
  `aboutshop` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carscover`
--

INSERT INTO `carscover` (`carscover_id`, `user_id`, `user_name`, `bannerimage`, `backgroundcolor`, `aboutshop`, `timeposted`) VALUES
(1, 3, 'cars', 'uploads/covercarsimages/a4c05a1d7b45d40a706a.jpg', 'black', 'ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', '2017-07-20 17:10:31'),
(3, 11, 'Benjamin', 'uploads/covercarsimages/339b299489a11241f99d.jpg', 'grey', 'View\r\nAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring s', '2017-08-04 05:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `catering_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `cateringservice` varchar(225) NOT NULL,
  `cateringserviceprice` varchar(20) NOT NULL,
  `cateringserviceimage` varchar(100) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`catering_id`, `user_id`, `user_name`, `cateringservice`, `cateringserviceprice`, `cateringserviceimage`, `timeposted`) VALUES
(1, 4, 'mycatering', 'French fries', '15000', 'uploads/cateringimages/1d31abfb2c09c3499da7.jpg', '2017-07-15 03:41:31'),
(3, 4, 'mycatering', 'd', '3', 'uploads/cateringimages/ee0589ef5f2d666f8180.jpg', '2017-07-19 19:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `cateringcover`
--

CREATE TABLE `cateringcover` (
  `cateringcover_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `bannerimage` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `servicedelivery` text NOT NULL,
  `backgroundcolor` varchar(50) NOT NULL,
  `containercolor` varchar(50) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cateringcover`
--

INSERT INTO `cateringcover` (`cateringcover_id`, `user_id`, `user_name`, `bannerimage`, `about`, `servicedelivery`, `backgroundcolor`, `containercolor`, `timeposted`) VALUES
(5, 4, 'mycatering', 'uploads/covercateringimages/0fe5d16428024c1b3ca6.jpg', 'About catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring service', 'About catring serviceAbout catring service', 'black', 'yellow', '2017-07-22 11:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `cosmetics`
--

CREATE TABLE `cosmetics` (
  `cosmetics_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `cosmeticname` varchar(225) NOT NULL,
  `cosmeticprice` varchar(10) NOT NULL,
  `cosmeticdetails` text NOT NULL,
  `newcosmetic` varchar(20) NOT NULL,
  `cosmeticcolors` text NOT NULL,
  `cosmeticmanufacturer` varchar(100) NOT NULL,
  `cosmeticimage` varchar(100) NOT NULL,
  `cosmeticoffer` varchar(20) NOT NULL,
  `productquantity` int(225) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosmetics`
--

INSERT INTO `cosmetics` (`cosmetics_id`, `user_id`, `user_name`, `cosmeticname`, `cosmeticprice`, `cosmeticdetails`, `newcosmetic`, `cosmeticcolors`, `cosmeticmanufacturer`, `cosmeticimage`, `cosmeticoffer`, `productquantity`, `timeposted`) VALUES
(1, 1, 'Joshua', 'Cute-x', '234', 'cute-x is an amazing product that you should buy', 'newcosmetic', 'red,green,blu,pink', 'X-en', 'uploads/cosmeticimages/21c0e08637a09d7e0248.png', '12%', 7, '2017-07-14 21:16:01'),
(2, 1, 'Joshua', 'full pimp', '456', 'okay', 'newcosmetic', 'red,yellow', 'pimp', 'uploads/cosmeticimages/1fa1f1b46ec70d646227.jpg', '12', 56, '2017-07-19 16:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `cosmeticscover`
--

CREATE TABLE `cosmeticscover` (
  `cosmeticscover_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `bannerimage` varchar(100) NOT NULL,
  `backgroundcolor` varchar(20) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosmeticscover`
--

INSERT INTO `cosmeticscover` (`cosmeticscover_id`, `user_id`, `user_name`, `bannerimage`, `backgroundcolor`, `timeposted`) VALUES
(4, 1, 'Joshua', 'uploads/covercosmeticimages/712455183f76acaef821.jpg', 'pink', '2017-07-20 17:03:17'),
(5, 4, 'mycatering', 'uploads/covercateringimages/b75cc67c34563af0c869.jpg', 'black', '2017-07-21 07:58:58'),
(6, 10, 'esther', 'uploads/coverfarmingimages/02331e016aa8fd304aa0.png', 'sdf', '2017-07-28 05:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `producttitle` varchar(100) NOT NULL,
  `productcategory` varchar(20) NOT NULL,
  `productprice` varchar(20) NOT NULL,
  `productimage` varchar(50) NOT NULL,
  `productdetails` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `user_id`, `user_name`, `producttitle`, `productcategory`, `productprice`, `productimage`, `productdetails`, `timeposted`) VALUES
(1, 5, 'joshuaeducation', 'Baby sitter club', 'Book', '123', 'uploads/educationimages/56b6ef4d0618c4ade659.jpg', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\n\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', '2017-07-15 05:21:32'),
(2, 5, 'joshuaeducation', 'James Brownowich', 'Printing paper', '2345', 'uploads/educationimages/ff842f329677a2d17de4.png', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', '2017-07-15 05:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `farming`
--

CREATE TABLE `farming` (
  `farming_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `farmproduct` varchar(100) NOT NULL,
  `farmproductcategory` varchar(100) NOT NULL,
  `farmproductprice` double NOT NULL,
  `farmproductimage` varchar(225) NOT NULL,
  `farmproductdetails` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farming`
--

INSERT INTO `farming` (`farming_id`, `user_id`, `user_name`, `farmproduct`, `farmproductcategory`, `farmproductprice`, `farmproductimage`, `farmproductdetails`, `timeposted`) VALUES
(1, 10, 'esther', 'high breed', 'dairy cattle', 120000, 'uploads/farmingimages/eff4be8cea855a7afeec.jpg', 'al band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliq', '2017-07-28 02:21:22'),
(2, 10, 'esther', 'Dairy', 'dairy products', 55, 'uploads/farmingimages/141e19ebe21df4fcbf2a.jpg', 'adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea co', '2017-07-28 02:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `farmingcover`
--

CREATE TABLE `farmingcover` (
  `farmingcover_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `bannerimage` varchar(200) NOT NULL,
  `bodybackgroundcolor` varchar(50) NOT NULL,
  `contentbackgroundcolor` varchar(50) NOT NULL,
  `sectiononeimage` varchar(225) NOT NULL,
  `sectiononetitle` text NOT NULL,
  `sectiononecontent` text NOT NULL,
  `sectiontwoimage` varchar(225) NOT NULL,
  `sectiontwotitle` text NOT NULL,
  `sectiontwocontent` text NOT NULL,
  `sectionthreeimage` varchar(225) NOT NULL,
  `sectionthreetitle` text NOT NULL,
  `sectionthreecontent` text NOT NULL,
  `sectionfourimage` varchar(225) NOT NULL,
  `sectionfourtitle` text NOT NULL,
  `sectionfourcontent` text NOT NULL,
  `mainsectionimage` varchar(225) NOT NULL,
  `mainsectiontitle` text NOT NULL,
  `mainsectioncontent` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `snackname` varchar(50) NOT NULL,
  `snackprice` varchar(20) NOT NULL,
  `snackimage` varchar(50) NOT NULL,
  `snackdetails` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `user_id`, `user_name`, `snackname`, `snackprice`, `snackimage`, `snackdetails`, `timeposted`) VALUES
(2, 7, 'joshuafood', 'Meat ball and supergetti', '567', 'uploads/snackimages/c0a28b185795201ec659.jpg', 'woow all you may need', '2017-07-15 08:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `generalshop`
--

CREATE TABLE `generalshop` (
  `generalshop_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productprice` varchar(20) NOT NULL,
  `productspecification` text NOT NULL,
  `productcategory` varchar(50) NOT NULL,
  `productmanufacturer` varchar(50) NOT NULL,
  `productimage` varchar(50) NOT NULL,
  `productquantity` int(12) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalshop`
--

INSERT INTO `generalshop` (`generalshop_id`, `user_id`, `user_name`, `productname`, `productprice`, `productspecification`, `productcategory`, `productmanufacturer`, `productimage`, `productquantity`, `timeposted`) VALUES
(2, 8, 'joshuageneral', 'game pad', '3454', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'electronics', 'microsoft', 'uploads/generalshopimages/64d384f7166391c5ac83.jpg', 23, '2017-07-21 14:12:18'),
(4, 8, 'joshuageneral', 'rooter', '2873', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'gadgets', 'me', 'uploads/generalshopimages/2b45c1c0c2c4cc3b4c81.jpg', 4, '2017-07-21 14:13:39'),
(5, 8, 'joshuageneral', 'xbox', '798', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'games', 'me', 'uploads/generalshopimages/b3c323b146d131ba170a.jpg', 5, '2017-07-21 14:14:09'),
(6, 8, 'joshuageneral', 'Iphone 6s', '999.99', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'gadgets', 'apple', 'uploads/generalshopimages/d412e97adf16cc4a6407.jpg', 54, '2017-07-21 14:14:47'),
(7, 8, 'joshuageneral', 'nicon', '345', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'camera', 'me', 'uploads/generalshopimages/8b86d2dcc2d7844227e0.jpg', 0, '2017-07-21 14:15:53'),
(8, 8, 'joshuageneral', 'digi', '546', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'camera', 'microsoft', 'uploads/generalshopimages/f2503cd520b22aa6fa7e.jpg', 0, '2017-07-21 14:16:29'),
(9, 8, 'joshuageneral', 'deck', '345', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'games', 'me', 'uploads/generalshopimages/e4eff3e9ea9839207c8f.jpg', 0, '2017-07-21 14:17:00'),
(10, 8, 'joshuageneral', 'Iphone 6s', '435', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'dfg dfg', 'df dfh d', 'uploads/generalshopimages/7375642156cd25896509.jpg', 0, '2017-07-21 14:17:54'),
(11, 8, 'joshuageneral', 'jlkhklh', '989', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'hgkjhhj', 'gjhghjg', 'uploads/generalshopimages/315dac1f81cbe57c4ac6.jpg', 0, '2017-07-21 14:22:52'),
(12, 8, 'joshuageneral', 'kjhljkhjlk', '890', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'kjhkjhhkj', 'hhjhkj', 'uploads/generalshopimages/66bb34336aa00cd46abc.jpg', 0, '2017-07-21 14:23:07'),
(14, 8, 'joshuageneral', 'uy yyu u', '789', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 'hj hg  j', 'gkjgjhg', 'uploads/generalshopimages/005950f2753c2a6b01b8.jpg', 0, '2017-07-21 14:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `generalshoporders`
--

CREATE TABLE `generalshoporders` (
  `generalshoporders_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `shopname` varchar(50) NOT NULL,
  `shopper` varchar(50) NOT NULL,
  `shopperusername` varchar(50) NOT NULL,
  `typeofbusiness` varchar(225) NOT NULL,
  `qty` int(50) NOT NULL,
  `product` longtext NOT NULL,
  `orderserialno` varchar(50) NOT NULL,
  `desccription` text NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `grouporder` varchar(50) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orderfilled` int(11) NOT NULL DEFAULT '0',
  `timeorderfilled` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalshoporders`
--

INSERT INTO `generalshoporders` (`generalshoporders_id`, `user_id`, `user_name`, `shopname`, `shopper`, `shopperusername`, `typeofbusiness`, `qty`, `product`, `orderserialno`, `desccription`, `subtotal`, `grouporder`, `timeposted`, `orderfilled`, `timeorderfilled`) VALUES
(186, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 1, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;4&lt;/td&gt;\r\n    &lt;td&gt;game pad&lt;/td&gt;\r\n    &lt;td&gt;#C81E728D9D&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$13,816.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#D3D9446802&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$435.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;rooter&lt;/td&gt;\r\n    &lt;td&gt;#A87FF679A2&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$2,873.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$3,456.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$999.99&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '1679091C5A', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '999.99', '6861463489CA998', '2017-08-04 09:51:33', 1, ''),
(187, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 3, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;4&lt;/td&gt;\r\n    &lt;td&gt;game pad&lt;/td&gt;\r\n    &lt;td&gt;#C81E728D9D&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$13,816.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#D3D9446802&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$435.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;rooter&lt;/td&gt;\r\n    &lt;td&gt;#A87FF679A2&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$2,873.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$3,456.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;3&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$2,999.97&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '1679091C5A', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '73,133.91', '5D5886281CAFB9A', '2017-08-04 09:55:56', 1, ''),
(188, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 5, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;4&lt;/td&gt;\r\n    &lt;td&gt;game pad&lt;/td&gt;\r\n    &lt;td&gt;#C81E728D9D&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$13,816.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#D3D9446802&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$435.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;rooter&lt;/td&gt;\r\n    &lt;td&gt;#A87FF679A2&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$2,873.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$3,456.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;5&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$4,999.95&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '1679091C5A', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '79,133.85', 'C52C9E776E5471A', '2017-08-04 09:57:56', 1, ''),
(189, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 6, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$3,456.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;6&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$5,999.94&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '1679091C5A', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '28,367.82', 'B1FD7CFA399F3DD', '2017-08-04 09:58:59', 0, ''),
(190, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 0, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$3,456.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', 'C4CA4238A0', 'hahaha no details to provide', '10,368.00', '8CDABDE303ED3B7', '2017-08-04 09:59:43', 1, ''),
(191, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 1, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;game pad&lt;/td&gt;\r\n    &lt;td&gt;#C81E728D9D&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$3,454.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;rooter&lt;/td&gt;\r\n    &lt;td&gt;#A87FF679A2&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$2,873.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;2&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$6,912.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;2&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$1,999.98&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;smart glass&lt;/td&gt;\r\n    &lt;td&gt;#ECCBC87E4B&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;nicon&lt;/td&gt;\r\n    &lt;td&gt;#8F14E45FCE&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;digi&lt;/td&gt;\r\n    &lt;td&gt;#C9F0F895FB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$546.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '52,853.94', 'C11581D0A11A4E5', '2017-08-04 10:05:46', 1, ''),
(192, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 1, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '1,035.00', '5FE9643FC55DF24', '2017-08-04 10:07:12', 1, ''),
(193, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 1, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '1,035.00', '38598A4907B859E', '2017-08-04 10:07:15', 1, ''),
(194, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 1, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '1,035.00', '00067ECDBE58D84', '2017-08-04 10:34:19', 1, ''),
(195, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 1, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$3,456.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$345.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '11,403.00', '0F299F9FA357CE4', '2017-08-04 10:36:28', 1, ''),
(196, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 2, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;3&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$10,368.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$999.99&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;2&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$690.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '38,567.97', 'EDEAEE08C9CC3AD', '2017-08-03 17:02:30', 1, ''),
(198, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 10, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;3&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$10,368.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$999.99&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;10&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$3,450.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E[9]', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '46,847.97', '9AF0C48FA12D586', '2017-08-03 18:07:45', 1, ''),
(199, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 15, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB+5&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;3&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0+1&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$10,368.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A+6&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$999.99&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;15&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E+9&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$5,175.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '52,022.97', 'F53CB3CC90D759D', '2017-08-03 18:10:40', 0, ''),
(200, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 19, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#E4DA3B7FBB|5&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;3&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#C4CA4238A0|1&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$10,368.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#1679091C5A|6&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$999.99&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;19&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#45C48CCE2E|9&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$6,555.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '56,162.97', '344DFD8E9D3A2E8', '2017-08-03 18:12:26', 0, ''),
(201, 8, 'joshuageneral', 'joshua general shop', '3', 'cars', 'generalshop', 19, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n    &lt;thead&gt;\r\n    &lt;tr&gt;\r\n    &lt;th&gt;Qty&lt;/th&gt;\r\n    &lt;th&gt;Product&lt;/th&gt;\r\n    &lt;th&gt;Serial #&lt;/th&gt;\r\n    &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n    &lt;th&gt;Subtotal&lt;/th&gt;\r\n    &lt;/tr&gt;\r\n    &lt;/thead&gt;\r\n    &lt;tbody&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;xbox&lt;/td&gt;\r\n    &lt;td&gt;#5&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$798.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;3&lt;/td&gt;\r\n    &lt;td&gt;bootiess&lt;/td&gt;\r\n    &lt;td&gt;#1&lt;/td&gt;\r\n    &lt;td&gt;hahaha no details to provide...&lt;/td&gt;\r\n    &lt;td&gt;$10,368.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;1&lt;/td&gt;\r\n    &lt;td&gt;Iphone 6s&lt;/td&gt;\r\n    &lt;td&gt;#6&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$999.99&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n      \r\n    &lt;tr&gt;\r\n    &lt;td&gt;19&lt;/td&gt;\r\n    &lt;td&gt;deck&lt;/td&gt;\r\n    &lt;td&gt;#9&lt;/td&gt;\r\n    &lt;td&gt;Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ...&lt;/td&gt;\r\n    &lt;td&gt;$6,555.00&lt;/td&gt;\r\n    &lt;/tr&gt;\r\n        &lt;/tbody&gt;\r\n    &lt;/table&gt;', '45C48CCE2E', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', '56,162.97', '41144271EBE15AE', '2017-08-03 18:15:37', 0, ''),
(202, 1, 'Joshua', 'shopup', '1', 'Joshua', 'cosmetics', 0, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n        &lt;thead&gt;\r\n        &lt;tr&gt;\r\n        &lt;th&gt;Qty&lt;/th&gt;\r\n        &lt;th&gt;Product&lt;/th&gt;\r\n        &lt;th&gt;Serial #&lt;/th&gt;\r\n        &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n        &lt;th&gt;Subtotal&lt;/th&gt;\r\n        &lt;/tr&gt;\r\n        &lt;/thead&gt;\r\n        &lt;tbody&gt;\r\n          \r\n        &lt;tr&gt;\r\n        &lt;td&gt;11&lt;/td&gt;\r\n        &lt;td&gt;full pimp&lt;/td&gt;\r\n        &lt;td&gt;#C81E728D9D&lt;/td&gt;\r\n        &lt;td&gt;okay...&lt;/td&gt;\r\n        &lt;td&gt;$5,016.00&lt;/td&gt;\r\n        &lt;/tr&gt;\r\n          \r\n        &lt;tr&gt;\r\n        &lt;td&gt;7&lt;/td&gt;\r\n        &lt;td&gt;Cute-x&lt;/td&gt;\r\n        &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n        &lt;td&gt;cute-x is an amazing product that you should buy...&lt;/td&gt;\r\n        &lt;td&gt;$1,638.00&lt;/td&gt;\r\n        &lt;/tr&gt;\r\n                &lt;/tbody&gt;\r\n        &lt;/table&gt;', 'C4CA4238A0', 'cute-x is an amazing product that you should buy', '6,654.00', '24AE276AA617E9E', '2017-08-04 13:54:14', 1, ''),
(203, 7, 'joshuafood', 'Joshua snack-in', '1', 'Joshua', 'food', 2, '&lt;table class=&quot;table table-striped&quot;&gt;\r\n        &lt;thead&gt;\r\n        &lt;tr&gt;\r\n        &lt;th&gt;Qty&lt;/th&gt;\r\n        &lt;th&gt;Product&lt;/th&gt;\r\n        &lt;th&gt;Serial #&lt;/th&gt;\r\n        &lt;th style=&quot;width: 59%&quot;&gt;Description&lt;/th&gt;\r\n        &lt;th&gt;Subtotal&lt;/th&gt;\r\n        &lt;/tr&gt;\r\n        &lt;/thead&gt;\r\n        &lt;tbody&gt;\r\n          \r\n        &lt;tr&gt;\r\n        &lt;td&gt;12&lt;/td&gt;\r\n        &lt;td&gt;Chips and burger&lt;/td&gt;\r\n        &lt;td&gt;#C4CA4238A0&lt;/td&gt;\r\n        &lt;td&gt;Chips\r\n2. crust bugger\r\n3. three cheese layers...&lt;/td&gt;\r\n        &lt;td&gt;$7,188.00&lt;/td&gt;\r\n        &lt;/tr&gt;\r\n          \r\n        &lt;tr&gt;\r\n        &lt;td&gt;2&lt;/td&gt;\r\n        &lt;td&gt;Meat ball and supergetti&lt;/td&gt;\r\n        &lt;td&gt;#C81E728D9D&lt;/td&gt;\r\n        &lt;td&gt;woow all you may need...&lt;/td&gt;\r\n        &lt;td&gt;$1,134.00&lt;/td&gt;\r\n        &lt;/tr&gt;\r\n                &lt;/tbody&gt;\r\n        &lt;/table&gt;', 'C81E728D9D', 'woow all you may need', '8,322.00', 'BE59ACB3E23F9BE', '2017-08-04 04:30:06', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotels_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `hotelname` varchar(50) NOT NULL,
  `hotellocation` varchar(50) NOT NULL,
  `hotelroomdetails` text NOT NULL,
  `hotelroomprice` varchar(20) NOT NULL,
  `hotelroompriceduration` varchar(20) NOT NULL,
  `hotelroomimage` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotels_id`, `user_id`, `user_name`, `hotelname`, `hotellocation`, `hotelroomdetails`, `hotelroomprice`, `hotelroompriceduration`, `hotelroomimage`, `timeposted`) VALUES
(4, 6, 'joshuahotels', 'Hotel suite', 'Nairobi', 'cozy and warm', '1255', 'per night', 'uploads/hotelimages/b8dd0a0b575aa2b5e1cf.jpg', '2017-08-04 16:20:55'),
(5, 6, 'joshuahotels', 'class', 'mombasa', 'cool', '34555', 'per night', 'uploads/hotelimages/05b4832cbff9aac0abb4.jpg', '2017-08-04 16:21:29'),
(6, 6, 'joshuahotels', 'All in one', 'Nairobi', 'cozy and warm', '34555', 'per night', 'uploads/hotelimages/fc1d933fd8e96bee27e1.jpg', '2017-08-04 16:22:10'),
(7, 6, 'joshuahotels', 'yeah', 'mombasa', 'cozy and warm', '34555', 'per night', 'uploads/hotelimages/d1876b3c8c1ad5605d4f.jpg', '2017-08-04 16:25:01'),
(8, 6, 'joshuahotels', 'Jasmin grand hotel', 'Nairobi', 'Its a cool and cozy 5 star hotel for family vacations.\r\nCall now to make inquiries for your desired rooms.\r\n1. Single person rooms\r\n2. Family rooms\r\n3. Presidential suites\r\n\r\nAll at a very affordable price range', '6000', 'Per night', 'uploads/hotelimages/9aa2a08ed5b60d38bd05.jpg', '2017-08-09 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `hotelscover`
--

CREATE TABLE `hotelscover` (
  `hotelscover_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `bannerimage` varchar(225) NOT NULL,
  `backgroundcolor` varchar(50) NOT NULL,
  `articleonetitle` varchar(225) NOT NULL,
  `articleoneimageurl` text NOT NULL,
  `articleonecontent` text NOT NULL,
  `articletwotitle` varchar(225) NOT NULL,
  `articletwoimageurl` text NOT NULL,
  `articletwocontent` text NOT NULL,
  `articlethreetitle` varchar(225) NOT NULL,
  `articlethreeimageurl` text NOT NULL,
  `articlethreecontent` text NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelscover`
--

INSERT INTO `hotelscover` (`hotelscover_id`, `user_id`, `user_name`, `bannerimage`, `backgroundcolor`, `articleonetitle`, `articleoneimageurl`, `articleonecontent`, `articletwotitle`, `articletwoimageurl`, `articletwocontent`, `articlethreetitle`, `articlethreeimageurl`, `articlethreecontent`, `timeposted`) VALUES
(2, 6, 'joshuahotels', 'uploads/coverhotelsimages/89efcd7ad975d53dc748.jpg', 'grey', 'ONE', 'http://localhost/flatdesign/images/slide/slide(7).png', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our', 'TWO', 'http://localhost/flatdesign/images/image(2).jpg', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our', 'THREE', 'http://localhost/flatdesign/images/pp.jpg', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our', '2017-07-26 01:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(225) NOT NULL,
  `pesapal_merchant_reference` varchar(225) NOT NULL,
  `pesapal_transaction_tracking_id` varchar(225) NOT NULL,
  `pesapal_transaction_tracking_id_subscription_verifier` varchar(225) NOT NULL,
  `timepaid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `shopname` varchar(225) NOT NULL,
  `shopowner` varchar(225) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `viewed` int(1) NOT NULL DEFAULT '0',
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_id`, `user_id`, `user_name`, `shopname`, `shopowner`, `subject`, `message`, `viewed`, `timeposted`) VALUES
(1, 1, 'Joshua', 'joshua general shop', 'joshuageneral', 'Message to joshuageneral', 'Hello joshua general of johua general shop, are you always available?Riusmod tempor incididunt ut labor erem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, '2017-07-27 12:26:37'),
(2, 1, 'Joshua', 'cars', 'cars', 'to cars', 'hello cars, i hope this is cars shopRiusmod tempor incididunt ut labor erem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, '2017-07-27 12:29:10'),
(3, 1, 'Joshua', 'cars', 'cars', 'Second message to cars', 'ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 0, '2017-07-27 16:02:05'),
(4, 1, 'Joshua', 'cars', 'cars', 'to cars', 'ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 0, '2017-07-27 18:26:37'),
(5, 6, 'joshuahotels', 'cars', 'cars', 'to cars', 'ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 0, '2017-07-27 18:27:24'),
(6, 6, 'joshuahotels', 'cars', 'cars', 'joanuary is much fon', 'ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 1, '2017-07-27 19:00:18'),
(7, 6, 'joshuahotels', 'cars', 'cars', 's is kjdhfl jhfsk jhf slkjfh lskjf hlskj fhs', 'ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.ustin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', 1, '2017-07-27 19:00:34'),
(8, 6, 'joshuahotels', 'cars', 'cars', 'sending to cars', 'wooow', 1, '2017-07-27 20:06:34'),
(9, 8, 'joshuageneral', 'shopup', 'Joshua', 'w3schools', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.', 1, '2017-08-04 03:50:31'),
(10, 8, 'joshuageneral', 'shopup', 'Joshua', 'my name is', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.', 0, '2017-08-04 03:50:50'),
(11, 8, 'joshuageneral', 'shopup', 'Joshua', 'This is a long one', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.', 1, '2017-08-04 03:51:04'),
(12, 1, 'Joshua', 'joshua general shop', 'joshuageneral', 'Message to joshuageneral', 'The Lord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and I will dwell in the house of the Lord for ever.The Lord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and I will dwell in the house of the Lord for ever.The Lord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and I will dwell in the house of the Lord for ever.The Lord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and I will dwell in the house of the Lord for ever.', 0, '2017-08-09 16:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `offpageviews`
--

CREATE TABLE `offpageviews` (
  `offpageviews_id` int(225) NOT NULL,
  `shopname` varchar(225) NOT NULL,
  `shopowner` varchar(225) NOT NULL,
  `shopid` int(225) NOT NULL,
  `allcount` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offpageviews`
--

INSERT INTO `offpageviews` (`offpageviews_id`, `shopname`, `shopowner`, `shopid`, `allcount`) VALUES
(2, 'cars', 'cars', 10, 6),
(3, 'Josh catering service', 'mycatering', 11, 5),
(4, 'joshua general shop', 'joshuageneral', 15, 40),
(5, 'shopup', 'Joshua', 1, 23),
(6, 'Joshua snack-in', 'joshuafood', 14, 3),
(7, 'shopup bookshop', 'joshuaeducation', 12, 8),
(8, 'esthers farm', 'esther', 17, 3),
(9, 'joshua5starhotel', 'joshuahotels', 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pageviews`
--

CREATE TABLE `pageviews` (
  `pageviews_id` int(225) NOT NULL,
  `shopname` varchar(225) NOT NULL,
  `shopowner` varchar(225) NOT NULL,
  `shopid` int(225) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `timeviewed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pageviews`
--

INSERT INTO `pageviews` (`pageviews_id`, `shopname`, `shopowner`, `shopid`, `user_name`, `user_id`, `timeviewed`) VALUES
(1, 'cars', 'cars', 10, 'Joshua', 1, '2017-08-04 08:08:10'),
(2, 'Josh catering service', 'mycatering', 11, 'Joshua', 1, '2017-08-04 08:26:07'),
(3, 'cars', 'cars', 10, 'joshuageneral', 8, '2017-08-04 08:40:50'),
(4, 'shopup', 'Joshua', 1, 'joshuageneral', 8, '2017-08-04 09:01:44'),
(5, 'shopup', 'Joshua', 1, 'cars', 3, '2017-08-04 09:33:59'),
(6, 'shopup', 'Joshua', 1, 'Joshua', 1, '2017-08-04 03:44:18'),
(7, 'shopup', 'Joshua', 1, 'explor3educat10', 2, '2017-08-04 03:44:54'),
(8, 'shopup', 'Joshua', 1, 'mycatering', 4, '2017-08-04 03:46:03'),
(9, 'cars', 'cars', 10, 'joshuaeducation', 5, '2017-08-04 03:46:41'),
(10, 'Josh catering service', 'mycatering', 11, 'joshuaeducation', 5, '2017-08-04 03:46:44'),
(11, 'joshua5starhotel', 'joshuahotels', 13, 'joshuaeducation', 5, '2017-08-04 03:46:47'),
(12, 'joshua general shop', 'joshuageneral', 15, 'joshuaeducation', 5, '2017-08-04 03:46:50'),
(13, 'benja automotives', 'Benjamin', 18, 'joshuaeducation', 5, '2017-08-04 03:46:53'),
(14, 'shopup', 'Joshua', 1, 'joshuaeducation', 5, '2017-08-04 03:46:56'),
(15, 'cars', 'cars', 10, 'joshuahotels', 6, '2017-08-04 03:47:50'),
(16, 'joshua5starhotel', 'joshuahotels', 13, 'joshuahotels', 6, '2017-08-04 03:47:53'),
(17, 'Josh catering service', 'mycatering', 11, 'joshuahotels', 6, '2017-08-04 03:47:56'),
(18, 'joshua general shop', 'joshuageneral', 15, 'joshuahotels', 6, '2017-08-04 03:48:00'),
(19, 'shopup', 'Joshua', 1, 'joshuahotels', 6, '2017-08-04 03:48:03'),
(20, 'esthers farm', 'esther', 17, 'joshuahotels', 6, '2017-08-04 03:48:27'),
(21, 'benja automotives', 'Benjamin', 18, 'joshuahotels', 6, '2017-08-04 03:48:30'),
(22, 'jayjaymeals', 'jayjay', 21, 'joshuahotels', 6, '2017-08-04 03:48:33'),
(23, 'Joshua snack-in', 'joshuafood', 14, 'joshuahotels', 6, '2017-08-04 03:48:36'),
(24, 'joshua general shop', 'joshuageneral', 15, 'joshuageneral', 8, '2017-08-04 06:24:23'),
(25, 'joshua general shop', 'joshuageneral', 15, 'Joshua', 1, '2017-08-04 08:28:29'),
(26, 'joshua5starhotel', 'joshuahotels', 13, 'Joshua', 1, '2017-08-04 22:54:22'),
(27, 'Joshua snack-in', 'joshuafood', 14, 'Joshua', 1, '2017-08-04 22:54:54'),
(28, 'esthers farm', 'esther', 17, 'Joshua', 1, '2017-08-05 18:27:17'),
(29, 'jayjaymeals', 'jayjay', 21, 'Joshua', 1, '2017-08-08 15:11:54'),
(30, 'benja automotives', 'Benjamin', 18, 'Joshua', 1, '2017-08-09 03:06:51'),
(31, 'Josh catering service', 'mycatering', 11, 'joshuageneral', 8, '2017-08-09 16:07:02'),
(32, 'shopup bookshop', 'joshuaeducation', 12, 'Joshua', 1, '2017-08-09 06:42:06'),
(33, 'cars', 'cars', 10, 'jayjay', 12, '2017-08-09 06:54:38'),
(34, 'Josh catering service', 'mycatering', 11, 'jayjay', 12, '2017-08-09 06:54:44'),
(35, 'joshua5starhotel', 'joshuahotels', 13, 'jayjay', 12, '2017-08-09 06:54:48'),
(36, 'Joshua snack-in', 'joshuafood', 14, 'jayjay', 12, '2017-08-09 06:54:53'),
(37, 'joshua general shop', 'joshuageneral', 15, 'jayjay', 12, '2017-08-09 06:54:58'),
(38, 'esthers farm', 'esther', 17, 'jayjay', 12, '2017-08-09 06:55:04'),
(39, 'benja automotives', 'Benjamin', 18, 'jayjay', 12, '2017-08-09 06:55:09'),
(40, 'jayjaymeals', 'jayjay', 21, 'jayjay', 12, '2017-08-09 06:55:15'),
(41, 'shopup', 'Joshua', 1, 'jayjay', 12, '2017-08-09 07:32:52'),
(42, 'joshua general shop', 'joshuageneral', 15, 'esther', 10, '2017-08-09 09:10:26'),
(43, 'joshua general shop', 'joshuageneral', 15, 'cars', 3, '2017-08-09 13:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `paidadverts`
--

CREATE TABLE `paidadverts` (
  `paidadverts_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `adverttitle` varchar(225) NOT NULL,
  `advertdetails` text NOT NULL,
  `advertimage` text NOT NULL,
  `advertisingterms` varchar(10) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paidadverts`
--

INSERT INTO `paidadverts` (`paidadverts_id`, `user_id`, `user_name`, `adverttitle`, `advertdetails`, `advertimage`, `advertisingterms`, `timeposted`) VALUES
(1, 1, 'Joshua', 'Joshua', 'delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pi', 'uploads/paidadvertsimages/b067e4eec7eca76e0980.jpg', 'advertisin', '2017-08-10 14:42:02'),
(2, 1, 'Joshua', 'try rty', 'ord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and ', 'uploads/paidadvertsimages/6e7802280db8515d3c72.jpg', 'yes', '2017-08-10 15:00:08'),
(3, 1, 'Joshua', '5464', 'ord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and ', 'uploads/paidadvertsimages/4ac274489610d2dc51e6.jpg', 'yes', '2017-08-10 15:01:55'),
(4, 1, 'Joshua', 'tr', 'trord is my shepherd; I shall not want. He maketh me to lie down in green pastures: he leadeth me beside the still waters. He restoreth my soul: he leadeth me in the paths of righteousness for his name\'s sake. Yea, though I walk through the valley of the shadow of death, I will fear no evil: for thou art with me; thy rod and thy staff they comfort me. Thou preparest a table before me in the presence of mine enemies: thou anointest my head with oil; my cup runneth over. Surely goodness and mercy shall follow me all the days of my life: and ', 'uploads/paidadvertsimages/e73441173e123ef77608.jpg', 'yes', '2017-08-10 15:03:38'),
(5, 1, 'Joshua', '23', '234', 'uploads/paidadvertsimages/ac648ee42fc16a53d48b.jpg', 'yes', '2017-08-10 15:08:03'),
(6, 1, 'Joshua', 'rtyry', 'rt yr y', 'uploads/paidadvertsimages/b5f0ffe3f7560c5c5afe.jpg', 'yes', '2017-08-10 15:09:57'),
(7, 1, 'Joshua', 'yt', 'yt', 'uploads/paidadvertsimages/8d91809441a5796fa1d8.jpg', 'yes', '2017-08-10 15:12:03'),
(8, 1, 'Joshua', 'fty', 'tyt', 'uploads/paidadvertsimages/00c02144d0ea952e9506.jpg', 'yes', '2017-08-10 15:13:02'),
(9, 1, 'Joshua', 'ghj', 'ghj', 'uploads/paidadvertsimages/5f75f6f09c811f8ce212.jpg', 'yes', '2017-08-10 15:16:52'),
(10, 1, 'Joshua', 'tyu', 'tyu', 'uploads/paidadvertsimages/b942c7f8527098daec56.jpg', 'yes', '2017-08-10 15:17:47'),
(11, 1, 'Joshua', 'try', 'rt yr', 'uploads/paidadvertsimages/7cbfa32f03b3d5fd8ed6.jpg', 'yes', '2017-08-10 15:18:32'),
(12, 1, 'Joshua', 'hg', 'hg', 'uploads/paidadvertsimages/a278886344fffdfa9b89.jpg', 'yes', '2017-08-10 15:34:06'),
(13, 1, 'Joshua', 'dfg', 'fdg', 'uploads/paidadvertsimages/3d18cc959eece6e14beb.jpg', 'yes', '2017-08-10 15:34:55'),
(14, 1, 'Joshua', 'efw', 'efw', 'uploads/paidadvertsimages/415776949482e2f24f28.jpg', 'yes', '2017-08-10 15:39:57'),
(15, 1, 'Joshua', 'ewr', 'werw', 'uploads/paidadvertsimages/a6d4f0f39abd20d3ec54.jpg', 'yes', '2017-08-10 16:05:49'),
(16, 1, 'Joshua', 'ewr', 'werw', 'uploads/paidadvertsimages/c53a7f1199ee4f80738d.jpg', 'yes', '2017-08-10 16:06:35'),
(17, 1, 'Joshua', 'ewr', 'werw', 'uploads/paidadvertsimages/97926038808d911fa753.jpg', 'yes', '2017-08-10 16:06:53'),
(18, 1, 'Joshua', 'ewr', 'werw', 'uploads/paidadvertsimages/10dc2b8dbbfbb17872d4.jpg', 'yes', '2017-08-10 16:07:59'),
(19, 1, 'Joshua', 'ewr', 'werw', 'uploads/paidadvertsimages/1417d1bd55d7b4d88f23.jpg', 'yes', '2017-08-10 16:11:06'),
(20, 1, 'Joshua', 'ewr', 'werw', 'uploads/paidadvertsimages/ec1117136244e2e8bf67.jpg', 'yes', '2017-08-10 16:12:00'),
(21, 1, 'Joshua', 'dsf', 'dgsd', 'uploads/paidadvertsimages/533b2fcf96cc0ee8b723.jpg', 'yes', '2017-08-10 16:18:19'),
(22, 1, 'Joshua', 'fgd', 'fgd', 'uploads/paidadvertsimages/b8fed748da7293de7e85.jpg', 'yes', '2017-08-10 16:18:57'),
(23, 1, 'Joshua', 'fdg', 'dfg', 'uploads/paidadvertsimages/b1a8c6a86d5f0ff41f9b.jpg', 'yes', '2017-08-10 16:20:41'),
(24, 1, 'Joshua', 'fdg', 'dfg', 'uploads/paidadvertsimages/96809daa36a15f3ec017.jpg', 'yes', '2017-08-10 16:21:34'),
(25, 1, 'Joshua', 'fdg', 'dfg', 'uploads/paidadvertsimages/29eed9547b96f6ca3d8d.jpg', 'yes', '2017-08-10 16:22:33'),
(26, 1, 'Joshua', 'fdg', 'dfg', 'uploads/paidadvertsimages/17dfd3a8a6a3635a1a0e.jpg', 'yes', '2017-08-10 16:24:51'),
(27, 1, 'Joshua', 'fdg', 'dfg', 'uploads/paidadvertsimages/9a40550bc8c220c95dc6.jpg', 'yes', '2017-08-10 16:25:22'),
(28, 1, 'Joshua', 'ewr', 'wer', 'uploads/paidadvertsimages/7b159402b8c0f796a3e0.jpg', 'yes', '2017-08-10 16:30:12'),
(29, 1, 'Joshua', 'ewr', 'wer', 'uploads/paidadvertsimages/7d7d7396609c2a52a24a.jpg', 'yes', '2017-08-10 16:32:07'),
(30, 1, 'Joshua', 'ewr', 'wer', 'uploads/paidadvertsimages/abffe1746dc4fb30fa32.jpg', 'yes', '2017-08-10 16:32:33'),
(31, 1, 'Joshua', 'ewr', 'wer', 'uploads/paidadvertsimages/38e52018c07c1c9c1a63.jpg', 'yes', '2017-08-10 16:33:43'),
(32, 1, 'Joshua', 'joshua isaac advert', 'delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pi delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pi', 'uploads/paidadvertsimages/288561429673f88c2672.jpg', 'yes', '2017-08-10 16:34:54'),
(33, 1, 'Joshua', 'we', 'wer', 'uploads/paidadvertsimages/32cf803951658b20579c.jpg', 'yes', '2017-08-10 16:42:39'),
(34, 1, 'Joshua', 'w', 'fe', 'uploads/paidadvertsimages/cc955a9ba1f558643264.jpg', 'yes', '2017-08-10 16:44:29'),
(35, 1, 'Joshua', 'saf', 'asf', 'uploads/paidadvertsimages/c9a9ef791d9d7c83fd78.jpg', 'yes', '2017-08-10 16:47:06'),
(36, 1, 'Joshua', 'dsa', 'sda', 'uploads/paidadvertsimages/6323f9d90b5dc86b3fbc.jpg', 'yes', '2017-08-10 16:48:09'),
(37, 1, 'Joshua', 'bt', 't', 'uploads/paidadvertsimages/2b7fd88abd5b3814901d.jpg', 'yes', '2017-08-10 17:11:13'),
(38, 1, 'Joshua', 'fe', 'wwef', 'uploads/paidadvertsimages/46a426ae8156f4b8cfd7.jpg', 'yes', '2017-08-10 17:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `productreviews_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `shopowner` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `actualproduct` int(225) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`productreviews_id`, `user_id`, `user_name`, `shopowner`, `message`, `actualproduct`, `timeposted`) VALUES
(13, 3, 'cars', 'mycatering', 'this s my first presice trial code', 3, '2017-08-09 10:12:19'),
(14, 1, 'Joshua', 'joshuageneral', 'GAME PAD at commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. VeroOccaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi p', 2, '2017-08-09 10:13:11'),
(15, 1, 'Joshua', 'joshuageneral', 'ROOTER at commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. VeroOccaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. VeroOccaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi p', 4, '2017-08-09 10:13:37'),
(16, 1, 'Joshua', 'joshuageneral', '2017-08-09 13:13:11\r\nGAME PAD at commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. VeroOccaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-o', 2, '2017-08-09 10:23:14'),
(17, 3, 'cars', 'joshuageneral', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est ad', 2, '2017-08-09 13:55:58'),
(18, 5, 'joshuaeducation', 'joshuageneral', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adOccaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est ad', 2, '2017-08-09 13:56:56'),
(19, 1, 'Joshua', 'joshuageneral', 'This is great but you can find the same product at a cheaper rate in this shop http://localhost/newshopupSite/shopsproduct/joshuageneral/12', 2, '2017-08-09 14:09:06'),
(20, 1, 'Joshua', 'joshuageneral', 'http://localhost/newshopupSite/shopsproduct/joshuageneral/12', 2, '2017-08-09 14:09:25'),
(21, 5, 'joshuaeducation', 'joshuageneral', 'Hello bro ,kuna rooter ya soo moja?', 4, '2017-08-09 16:23:30'),
(22, 1, 'Joshua', 'joshuageneral', 'Hehe amazon free. My budget reads 10 bob', 4, '2017-08-09 16:25:38'),
(23, 1, 'Joshua', 'joshuageneral', 'ROOTER at commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, ec', 4, '2017-08-09 16:26:42'),
(24, 1, 'Joshua', 'joshuageneral', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.', 4, '2017-08-09 16:27:33'),
(25, 1, 'Joshua', 'joshuageneral', 'haha githeri ni 5bob huku', 4, '2017-08-09 16:27:50'),
(26, 1, 'Joshua', 'joshuageneral', 'haha', 4, '2017-08-09 16:56:44'),
(27, 5, 'joshuaeducation', 'joshuageneral', 'adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', 4, '2017-08-09 17:14:06'),
(28, 5, 'joshuaeducation', 'joshuageneral', 'adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit', 4, '2017-08-09 17:14:15'),
(29, 5, 'joshuaeducation', 'joshuageneral', 'adipisicing. Consectetur nisi DIY minim messenger bag. Cred', 4, '2017-08-09 17:14:26'),
(30, 1, 'Joshua', 'esther', 'Haiya hii n\'gombe ni ya dunia gani', 1, '2017-08-09 17:24:30'),
(31, 1, 'Joshua', 'esther', 'Ng\'ombe, Ngamia ng\'ong\'o', 1, '2017-08-09 17:27:21'),
(32, 1, 'Joshua', 'cars', 'cool ride', 4, '2017-08-09 18:30:32'),
(33, 1, 'Joshua', 'cars', 'Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est ad http://localhost/newshopupSite/car/cars/4', 4, '2017-08-09 19:16:37'),
(34, 1, 'Joshua', 'esther', 'Write your review here if you have ever used this product*', 2, '2017-08-09 21:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shops_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `shopkey` varchar(50) NOT NULL,
  `typeofbusiness` varchar(50) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `exactbusinesslocation` varchar(50) NOT NULL,
  `popularname` varchar(50) NOT NULL,
  `orderbutton` varchar(5) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `premium` int(2) NOT NULL DEFAULT '0',
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shops_id`, `user_id`, `user_name`, `shopname`, `shopkey`, `typeofbusiness`, `phonenumber`, `idnumber`, `country`, `town`, `exactbusinesslocation`, `popularname`, `orderbutton`, `currency`, `premium`, `timecreated`) VALUES
(1, 1, 'Joshua', 'shopup', '09e36e7b2b75d63ef7a989e26c386f4e', 'cosmetics', 2147483647, '23456789', 'Kenya', 'Nairobi', 'nai', 'Jo', '', 'Ksh', 1, '2017-07-14 18:46:04'),
(10, 3, 'cars', 'cars', '956d194d97ff3883e7c776dac83d88dc', 'cars', 223434, '234234', 'kenya', 'narobi', 'nai', 'msee', '', '', 1, '2017-07-14 23:47:37'),
(11, 4, 'mycatering', 'Josh catering service', '0700e88fe452e24667c5894f6a1930d8', 'catering', 770396785, '1234567', 'kenya', 'narobi', 'nai', 'josh', '', '', 1, '2017-07-15 01:22:47'),
(12, 5, 'joshuaeducation', 'shopup bookshop', 'e56b2ce9e4323a609f1e62e87bee0f4b', 'education', 770396785, '65756765', 'kenya', 'narobi', 'nai', 'jos', '', '', 1, '2017-07-15 04:42:50'),
(13, 6, 'joshuahotels', 'joshua5starhotel', '44e050fec1656bc21ee7a636c83eae01', 'hotels', 770396785, '234234', 'kenya', 'narobi', 'kenyatta market', 'josh', '', '', 1, '2017-07-15 06:47:34'),
(14, 7, 'joshuafood', 'Joshua snack-in', '9955e97820555ab3b17ac43645b50b99', 'food', 770396785, '234234', '0728040738', 'narobi', 'nai', 'josh', '', '', 1, '2017-07-15 07:46:15'),
(15, 8, 'joshuageneral', 'joshua general shop', '443b436ec5bd311b9932377fcfb665a9', 'generalshop', 223434, '234234', 'kenya', 'narobi', 'nai', 'ertevrt', '', '$', 1, '2017-07-15 09:44:30'),
(17, 10, 'esther', 'esthers farm', 'b78a059f3cea71d7d3c39f5349341736', 'farming', 770396785, '1234567', 'kenya', 'Eldoret', 'Kapsoya', 'entuga', '', 'CAD $', 1, '2017-07-28 00:48:51'),
(18, 11, 'Benjamin', 'benja automotives', '43912450aa9079cad8320d752c287bbe', 'cars', 455614627, '7656412', 'Brazil', 'Rio', 'Rio', 'benji', 'yes', 'YUAN', 1, '2017-08-04 01:35:37'),
(21, 12, 'jayjay', 'jayjaymeals', '7dc52cd36fb04468d9f025f485183335', 'food', 2147483647, '234234', 'Germany', 'Eldoret', 'student', 'Josh', '', '', 0, '2017-08-04 04:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `yearofbirth` int(5) NOT NULL,
  `userphonenumber` varchar(20) NOT NULL,
  `country` varchar(225) NOT NULL,
  `userlocation` varchar(225) NOT NULL,
  `profileimage` varchar(50) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `first_name`, `middle_name`, `last_name`, `gender`, `yearofbirth`, `userphonenumber`, `country`, `userlocation`, `profileimage`, `joining_date`) VALUES
(1, 'Joshua', 'jayisaac0@gmail.com', '$2y$10$prdynRHw47jjxfjZkXgMjOo/hzwHSiwd2khyxFi3tWGJ3xkjTeu.e', 'Joshua', 'me', 'Isaac', 'male', 1993, '+254770396785', 'Kenya', 'nai', 'uploads/profileimages/1b4ff99dcaa433178b8a.jpg', '2017-07-14 16:13:23'),
(2, 'explor3educat10', 'jayisaac00@gmail.com', '$2y$10$02hrCb50WObqpUrRm6PTFO7q0r/75go5diHZhoWHrH27NzQxpiyMu', '', '', '', '', 0, '', '', '', '', '2017-07-14 16:17:22'),
(3, 'cars', 'cars@gmail.com', '$2y$10$F9IIPpocK9L3yFL3Pd6KyeZkejtB1m0YggwUsJfjvFn0sv4SYvbaS', 'Astorn', 'Martin', 'Yama', 'male', 1990, '+254770396785', '', '', 'uploads/profileimages/9eb3099c4107625b5ed7.jpg', '2017-07-14 23:45:03'),
(4, 'mycatering', 'mycatering@gmail.com', '$2y$10$W6pIQuVVdL2HC7vM3vYd9e/E/5CejPSQMl6yAlACGnq7CWCxlo34i', 'Finannda', 'heis', 'love', 'female', 1992, '+55567859387', '', '', 'uploads/profileimages/7ab35c5f1b335e4c00b6.jpg', '2017-07-15 01:21:23'),
(5, 'joshuaeducation', 'joshuaeducation@gmail.com', '$2y$10$cNrUbynY7.nZFjKEp9CLtewVZrRpqyspN9G5GS32zk6qcqdIoBEqq', 'amazon', 'free', 'oad', 'male', 1992, '+254770396785', '', '', 'uploads/profileimages/8f4f1f135690a4b8cda5.jpg', '2017-07-15 04:41:32'),
(6, 'joshuahotels', 'joshuahotels@gmail.com', '$2y$10$DVc1gGxwmI.LVyiA8M7J9.28I1Ukg9viIksHTTFCYpYZ2oYjJov2q', 'cool', '5 star', 'hotel', 'male', 1990, '+25467856743', '', '', 'uploads/profileimages/0d953d836131eac50e07.jpg', '2017-07-15 06:46:12'),
(7, 'joshuafood', 'joshuafood@gmail.com', '$2y$10$ZCM96Jz1CCqEN80xe8YwHuq5BeLiae4WcoT36Ne2Dtd0Z79uQJwcu', 'Rose', 'Muchiri', 'Wambui', 'female', 1997, '+254770396785', 'Kenya', 'Membley', 'uploads/profileimages/3dfe38017a412e0481f9.jpg', '2017-07-15 07:44:34'),
(8, 'joshuageneral', 'joshuageneral@gmail.com', '$2y$10$8z2eSg3OEvOyCcGNf15Qvu2is9CpnT7W3Z9GfMb6NgAGnngtcTB.S', 'Joshua', 'Joshua', 'Programmer', 'male', 1990, '+254770396785', 'Kenya', 'Kenyatta university', 'uploads/profileimages/7eb4cc0b04fa81af2b8a.jpg', '2017-07-15 09:19:23'),
(9, 'Avery', 'avery@gmail.com', '$2y$10$ZIhyuodjWRAkxEKx1sgZq.pSeELKtk12C/DE2uxwU6C3.BEcjjnFq', '', '', '', '', 0, '', '', '', '', '2017-07-18 18:27:39'),
(10, 'esther', 'esther@gmail.com', '$2y$10$lzkfKMJKeHyEFsAm6f6.juKkdZ4veYV8XzrOecWps/45t.JCsiMLe', 'esther', 'moraa', 'isaac', 'female', 1987, '+254770396785', '', '', 'uploads/profileimages/f0e15ae4471035636c14.jpg', '2017-07-28 00:35:12'),
(11, 'Benjamin', 'benjamin@gmail.com', '$2y$10$hXUMMHGXChNlOHVPV2Fv3OnA36r4XlCEaRoeZh4S/jKUL1if6BJge', 'Benjamin', 'Franklin', 'Juniour', 'male', 1967, '+4562456543', '', '', 'uploads/profileimages/111b2924c49b1204e584.jpg', '2017-08-04 01:32:25'),
(12, 'jayjay', 'jay@gmail.com', '$2y$10$fG0NdD2I8.gKr2viGUJZ4eawd6ZfDj6ll1IMFQYU92elHo7hdigfK', 'he', 'ment', 'to school', 'male', 1990, '+254770396785', '', 'nai', 'uploads/profileimages/eb498d8af5e408ebcdfd.jpg', '2017-08-04 02:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisementlog`
--
ALTER TABLE `advertisementlog`
  ADD PRIMARY KEY (`advertisementlog_id`);

--
-- Indexes for table `advertlog`
--
ALTER TABLE `advertlog`
  ADD PRIMARY KEY (`advertlog_id`);

--
-- Indexes for table `businesscycle`
--
ALTER TABLE `businesscycle`
  ADD PRIMARY KEY (`businesscycle_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cars_id`);

--
-- Indexes for table `carscover`
--
ALTER TABLE `carscover`
  ADD PRIMARY KEY (`carscover_id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`catering_id`);

--
-- Indexes for table `cateringcover`
--
ALTER TABLE `cateringcover`
  ADD PRIMARY KEY (`cateringcover_id`);

--
-- Indexes for table `cosmetics`
--
ALTER TABLE `cosmetics`
  ADD PRIMARY KEY (`cosmetics_id`);

--
-- Indexes for table `cosmeticscover`
--
ALTER TABLE `cosmeticscover`
  ADD PRIMARY KEY (`cosmeticscover_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `farming`
--
ALTER TABLE `farming`
  ADD PRIMARY KEY (`farming_id`);

--
-- Indexes for table `farmingcover`
--
ALTER TABLE `farmingcover`
  ADD PRIMARY KEY (`farmingcover_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `generalshop`
--
ALTER TABLE `generalshop`
  ADD PRIMARY KEY (`generalshop_id`);

--
-- Indexes for table `generalshoporders`
--
ALTER TABLE `generalshoporders`
  ADD PRIMARY KEY (`generalshoporders_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotels_id`);

--
-- Indexes for table `hotelscover`
--
ALTER TABLE `hotelscover`
  ADD PRIMARY KEY (`hotelscover_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `offpageviews`
--
ALTER TABLE `offpageviews`
  ADD PRIMARY KEY (`offpageviews_id`);

--
-- Indexes for table `pageviews`
--
ALTER TABLE `pageviews`
  ADD PRIMARY KEY (`pageviews_id`);

--
-- Indexes for table `paidadverts`
--
ALTER TABLE `paidadverts`
  ADD PRIMARY KEY (`paidadverts_id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`productreviews_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shops_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisementlog`
--
ALTER TABLE `advertisementlog`
  MODIFY `advertisementlog_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `advertlog`
--
ALTER TABLE `advertlog`
  MODIFY `advertlog_id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `businesscycle`
--
ALTER TABLE `businesscycle`
  MODIFY `businesscycle_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cars_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `carscover`
--
ALTER TABLE `carscover`
  MODIFY `carscover_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `catering_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cateringcover`
--
ALTER TABLE `cateringcover`
  MODIFY `cateringcover_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cosmetics`
--
ALTER TABLE `cosmetics`
  MODIFY `cosmetics_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cosmeticscover`
--
ALTER TABLE `cosmeticscover`
  MODIFY `cosmeticscover_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `farming`
--
ALTER TABLE `farming`
  MODIFY `farming_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `farmingcover`
--
ALTER TABLE `farmingcover`
  MODIFY `farmingcover_id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `generalshop`
--
ALTER TABLE `generalshop`
  MODIFY `generalshop_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `generalshoporders`
--
ALTER TABLE `generalshoporders`
  MODIFY `generalshoporders_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotels_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hotelscover`
--
ALTER TABLE `hotelscover`
  MODIFY `hotelscover_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `offpageviews`
--
ALTER TABLE `offpageviews`
  MODIFY `offpageviews_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pageviews`
--
ALTER TABLE `pageviews`
  MODIFY `pageviews_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `paidadverts`
--
ALTER TABLE `paidadverts`
  MODIFY `paidadverts_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `productreviews_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shops_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
