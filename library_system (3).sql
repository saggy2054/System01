-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 21, 2025 at 06:03 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `library_system`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `id` int(100) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gmail` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `contact`
-- 

INSERT INTO `contact` (`id`, `username`, `address`, `gmail`, `message`) VALUES 
(1, 'mayur', 'sangavi', 'mayur@gmail.com', 'nice');

-- --------------------------------------------------------

-- 
-- Table structure for table `cust_order`
-- 

CREATE TABLE `cust_order` (
  `ID` int(11) NOT NULL auto_increment,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `pno` int(200) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `cust_order`
-- 

INSERT INTO `cust_order` (`ID`, `firstname`, `lastname`, `gmail`, `pno`, `addr`, `product_id`, `product_name`, `product_description`, `product_price`) VALUES 
(25, 'sagar', 'tawsre', 'sagar@gmail.com', 2147483647, 'bmt', '18', 'Dhadpadnara Shyam', 'à¤§à¤¡à¤ªà¤¡à¤£à¤¾à¤°à¤¾ à¤¶à¥à¤¯à¤¾à¤®', '150'),
(26, 'sagar', 'taware', 'sagar@gmail.com', 2147483647, 'Baramati', '21', 'Sandhya', 'à¤¸à¤‚à¤§à¥à¤¯à¤¾', '550');

-- --------------------------------------------------------

-- 
-- Table structure for table `cust_regis`
-- 

CREATE TABLE `cust_regis` (
  `id` int(100) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `cust_regis`
-- 

INSERT INTO `cust_regis` (`id`, `username`, `mobile`, `email`, `password`, `address`) VALUES 
(31, 'sagar', 7387613425, 'sagar@gmail.com', '0000', 'bmt');

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `ID` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) default NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` (`ID`, `name`, `type`, `description`, `image`, `price`) VALUES 
(3, 'Vyakti Aani Vyalli', 'pu la collection', '&#2357;&#2381;&#2351;&#2325;&#2381;&#2340;&#2368; &#2310;&#2339;&#2367; &#2357;&#2354;&#2381;&#2354;&#2368;', 'uploadz/pl1.png', '996'),
(4, 'Asa Mi Asami', 'pu la collection', '&#2309;&#2360;&#2366; &#2350;&#2368; &#2309;&#2360;&#2366;&#2350;&#2368;', 'uploadz/pl2.png', '550'),
(5, 'Batatychi Chal', 'pu la collection', '&#2348;&#2335;&#2366;&#2335;&#2381;&#2351;&#2366;&#2330;&#2368; &#2330;&#2366;&#2355;', 'uploadz/pl3.png', '350'),
(6, 'Hasawanuk', 'pu la collection', '&#2361;&#2360;&#2357;&#2339;&#2370;&#2325;', 'uploadz/pl4.png', '500'),
(8, 'Tee Phulrani', 'pu la collection', '&#2340;&#2368; &#2347;&#2369;&#2354;&#2352;&#2366;&#2339;&#2368;', 'uploadz/pl5.png', '700'),
(9, 'Aghalpaghal', 'pu la collection', '&#2309;&#2328;&#2355;&#2346;&#2328;&#2355;', 'uploadz/pl6.png', '250'),
(10, 'Ek Shunya Mee', 'pu la collection', '&#2319;&#2325; &#2358;&#2370;&#2344;&#2381;&#2351; &#2350;&#2368;', 'uploadz/pl7.png', '450'),
(11, 'Ganagot', 'pu la collection', '&#2327;&#2339;&#2327;&#2379;&#2340;', 'uploadz/pl8.png', '650'),
(12, 'Purvrang', 'pu la collection', '&#2346;&#2370;&#2352;&#2381;&#2357;&#2352;&#2306;&#2327;', 'uploadz/Pl9.png', '200'),
(13, 'Gathoda', 'pu la collection', '&#2327;&#2366;&#2336;&#2379;&#2337;&#2306;', 'uploadz/Pl10.png', '900'),
(14, 'Urla Surla', 'pu la collection', '&#2313;&#2352;&#2354;&#2306; &#2360;&#2369;&#2352;&#2354;&#2306;', 'uploadz/Pl11.png', '500'),
(15, 'Khogir Bharati', 'pu la collection', '&#2326;&#2379;&#2327;&#2368;&#2352;&#2349;&#2352;&#2340;&#2368;', 'uploadz/pl12.png', '650'),
(17, 'Shyamchi Aai', 'sguruji collection', '&#2358;&#2381;&#2351;&#2366;&#2350;&#2330;&#2368; &#2310;&#2312;', 'uploadz/sane1.png', '890'),
(18, 'Dhadpadnara Shyam', 'sguruji collection', '&#2343;&#2337;&#2346;&#2337;&#2339;&#2366;&#2352;&#2366; &#2358;&#2381;&#2351;&#2366;&#2350;', 'uploadz/sane2.png', '150'),
(19, 'Fulancha Prayog', 'sguruji collection', '&#2347;&#2369;&#2354;&#2366;&#2330;&#2366; &#2346;&#2381;&#2352;&#2351;&#2379;&#2327;', 'uploadz/sane3.png', '83.56'),
(20, 'Manubaba', 'sguruji collection', '&#2350;&#2344;&#2369;&#2348;&#2366;&#2348;&#2366;', 'uploadz/sane4.png', '115'),
(21, 'Sandhya', 'sguruji collection', '&#2360;&#2306;&#2343;&#2381;&#2351;&#2366;', 'uploadz/sane5.png', '550'),
(22, 'Geetahriday', 'sguruji collection', '&#2327;&#2368;&#2340;&#2361;&#2371;&#2342;&#2351;', 'uploadz/sane6.png', '125'),
(23, 'Sundar Patre', 'sguruji collection', '&#2360;&#2369;&#2306;&#2342;&#2352; &#2346;&#2366;&#2340;&#2381;&#2352;&#2375;', 'uploadz/sane7.png', '90'),
(24, 'Chitra ni Charu', 'sguruji collection', '&#2330;&#2367;&#2340;&#2381;&#2352;&#2366; &#2344;&#2368; &#2330;&#2366;&#2352;&#2369;          ', 'uploadz/sane8.png', '70'),
(25, 'Bhartiya Sanskruti', 'sguruji collection', '&#2349;&#2366;&#2352;&#2340;&#2368;&#2351; &#2360;&#2306;&#2360;&#2381;&#2325;&#2371;&#2340;&#2368;', 'uploadz/sane9.png', '550'),
(26, 'God Shevat', 'sguruji collection', '&#2342;&#2375;&#2357; &#2358;&#2375;&#2357;&#2340;', 'uploadz/sane10.png', '225'),
(27, 'Karunadevi', 'sguruji collection', '&#2325;&#2352;&#2369;&#2339;&#2366;&#2342;&#2375;&#2357;&#2368;', 'uploadz/sane11.png', '60'),
(28, 'Balkumaransobti Shyamachi Aai', 'sguruji collection', '&#2348;&#2366;&#2355;&#2325;&#2369;&#2350;&#2366;&#2352;&#2366;&#2306;&#2360;&#2379;&#2348;&#2340;&#2368; &#2358;&#2381;&#2351;&#2366;&#2350;&#2330;&#2368; &#2310;&#2312;         ', 'uploadz/pl12.png', '650'),
(29, 'Panipat', 'vishwas collection', '&#2346;&#2366;&#2344;&#2367;&#2346;&#2340;', 'uploadz/vishwas1.png', '830'),
(30, 'Sambhaji', 'vishwas collection', '&#2360;&#2350;&#2381;&#2349;&#2366;&#2332;&#2368;', 'uploadz/vishwas2.png', '663'),
(31, 'ZhadaZhdti', 'vishwas collection', '&#2333;&#2366;&#2337;&#2366;&#2333;&#2337;&#2340;&#2368;', 'uploadz/vishwas3.png', '165'),
(32, 'pangira', 'vishwas collection', '&#2346;&#2366;&#2306;&#2327;&#2367;&#2352;&#2366;', 'uploadz/vishwas4.png', '3,500'),
(33, 'Chandramukhi', 'vishwas collection', '&#2330;&#2306;&#2342;&#2381;&#2352;&#2350;&#2369;&#2326;&#2368;', 'uploadz/vishwas5.png', '750'),
(34, 'NAGKESHAR', 'vishwas collection', '&#2344;&#2366;&#2327;&#2325;&#2375;&#2358;&#2352;', 'uploadz/vishwas6.png', '497'),
(35, 'Gabhulalelya Chandrabanat', 'vishwas collection', '&#2327;&#2366;&#2349;&#2369;&#2355;&#2354;&#2375;&#2354;&#2381;&#2351;&#2366; &#2330;&#2306;&#2342;&#2381;&#2352;&#2348;&#2344;&#2366;&#2340;                ', 'uploadz/vishwas7.png', '450'),
(36, 'Lust for Lalbagh', 'vishwas collection', '&#2354;&#2360;&#2381;&#2335; &#2347;&#2377;&#2352; &#2354;&#2366;&#2354;&#2348;&#2366;&#2327;', 'uploadz/vishwas8.png', '340'),
(37, 'Krantisurya', 'vishwas collection', '&#2325;&#2381;&#2352;&#2366;&#2306;&#2340;&#2368; &#2360;&#2370;&#2352;&#2381;&#2351;', 'uploadz/vishwas9.png', '248'),
(38, 'Dudiya', 'vishwas collection', '&#2358;&#2306;&#2325;&#2366;', 'uploadz/vishwas11.png', '900'),
(39, 'Ambi', 'vishwas collection', '&#2310;&#2306;&#2348;&#2368;', 'uploadz/vishwas12.png', '250'),
(40, 'Anna Bhaunchee Dardbharee Dastan', 'vishwas collection', '&#2309;&#2339;&#2381;&#2339;&#2366; &#2349;&#2366;&#2314;&#2306;&#2330;&#2368; &#2342;&#2352;&#2381;&#2342;&#2349;&#2352;&#2368; &#2342;&#2366;&#2360;&#2381;&#2340;&#2366;&#2344;', 'uploadz/vishwas13.png', '950'),
(42, 'Hindutva', 'veer collection', '&#2361;&#2367;&#2306;&#2342;&#2369;&#2340;&#2381;&#2357;', 'uploadz/veer2.png', '248'),
(43, 'Kale Pani', 'veer collection', '&#2325;&#2366;&#2355;&#2375; &#2346;&#2366;&#2339;&#2368;', 'uploadz/veer3.png', '159'),
(44, 'Hindu Pad Padashahi', 'veer collection', '&#2361;&#2367;&#2306;&#2342;&#2370; &#2346;&#2342; &#2346;&#2366;&#2342;&#2358;&#2366;&#2361;&#2368;', 'uploadz/veer4.png', '272'),
(45, 'Why I am a Hindu', 'veer collection', '&#2350;&#2368; &#2361;&#2367;&#2306;&#2342;&#2370; &#2325;&#2366; &#2310;&#2361;&#2375;', 'uploadz/veer5.png', '1,078'),
(46, 'Six golden pages of Indian history', 'veer collection', '&#2349;&#2366;&#2352;&#2340;&#2368;&#2351; &#2311;&#2340;&#2367;&#2361;&#2366;&#2360;&#2366;&#2340;&#2368;&#2354; &#2360;&#2361;&#2366; &#2360;&#2379;&#2344;&#2375;&#2352;&#2368; &#2346;&#2366;&#2344;', 'uploadz/veer6.png', '100'),
(47, '1857 - The First War of Independence', 'veer collection', '&#2407;&#2414;&#2411;&#2413; &#2330;&#2375; &#2360;&#2381;&#2357;&#2366;&#2340;&#2306;&#2340;&#2381;&#2352;&#2381;&#2351;&#2360;&#2350;&#2352;', 'uploadz/veer7.png', '82.17'),
(48, 'Mrityunjay', 'shivaji collection', '&#2350;&#2371;&#2340;&#2381;&#2351;&#2369;&#2306;&#2332;&#2351;', 'uploadz/shivaji1.png', '497'),
(49, 'camp', 'shivaji collection', '&#2331;&#2366;&#2357;&#2366;', 'uploadz/shivaji2.png', '500'),
(50, 'era', 'shivaji collection', '&#2351;&#2369;&#2327;&#2306;&#2343;&#2352;', 'uploadz/shivaji3.png', '450'),
(51, 'Kanchanakan', 'shivaji collection', '&#2325;&#2366;&#2306;&#2330;&#2344;&#2325;&#2339;', 'uploadz/shivaji4.png', '248'),
(52, 'Decorate the shells', 'shivaji collection', '&#2358;&#2375;&#2354;&#2325;&#2366; &#2360;&#2366;&#2332;', 'uploadz/shivaji5.png', '250'),
(53, 'Such minded patterns', 'shivaji collection', '&#2309;&#2358;&#2368; &#2350;&#2344;&#2375; &#2309;&#2360;&#2375; &#2344;&#2350;&#2369;&#2344;&#2375;', 'uploadz/shivaji6.png', '300'),
(54, 'Moravala', 'shivaji collection', '&#2350;&#2379;&#2352;&#2366;&#2357;&#2355;&#2366;', 'uploadz/shivaji7.png', '250'),
(55, 'Kadse', 'shivaji collection', '&#2325;&#2357;&#2337;&#2360;&#2375;', 'uploadz/shiavji8.png', '200.17'),
(56, 'zenduchi phule', 'Atre collection', '&#2333;&#2375;&#2306;&#2337;&#2369;&#2330;&#2368; &#2347;&#2369;&#2354;&#2375;', 'uploadz/atre1.png', '230'),
(57, 'Mi Kasa Jhalo?', 'Atre collection', '&#2350;&#2368; &#2325;&#2360;&#2366; &#2333;&#2366;&#2354;&#2379;?', 'uploadz/atre2.png', '363'),
(58, 'Mi atre boltoy', 'Atre collection', '&#2350;&#2368; &#2309;&#2340;&#2381;&#2352;&#2375; &#2348;&#2379;&#2354;&#2340;&#2379;&#2351;', 'uploadz/atre3.png', '265'),
(59, 'Vinod Gatha', 'Atre collection', '&#2357;&#2367;&#2344;&#2379;&#2342; &#2327;&#2366;&#2341;&#2366;', 'uploadz/atre4.png', '550'),
(60, 'Moruchi Mavashi', 'Atre collection', '&#2350;&#2379;&#2352;&#2369;&#2330;&#2368; &#2350;&#2366;&#2357;&#2358;&#2368;', 'uploadz/atre5.png', '150'),
(61, 'Marriage bond', 'Atre collection', '&#2354;&#2327;&#2381;&#2344;&#2366;&#2330;&#2368; &#2348;&#2375;&#2337;&#2368;', 'uploadz/atre6.png', '200.17'),
(62, 'Athvanitle Atre', 'Atre collection', '&#2310;&#2336;&#2357;&#2339;&#2368;&#2340;&#2354;&#2375; &#2309;&#2340;&#2381;&#2352;&#2375;', 'uploadz/atre7.png', '350'),
(63, 'Zalach Pahije', 'Atre Collection', '&#2333;&#2366;&#2354;&#2330; &#2346;&#2366;&#2361;&#2368;&#2332;&#2375;', 'uploadz/atre8.png', '140'),
(64, 'My life sentence ', 'veer collection', '&#2350;&#2366;&#2333;&#2368; &#2332;&#2344;&#2381;&#2350;&#2336;&#2375;&#2346;', 'uploadz/veer1.png', '520');
