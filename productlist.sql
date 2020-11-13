-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2020 at 07:19 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_comments` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_comments`, `product_id`) VALUES
(19, 'very smooth on hands', 12),
(18, 'super', 2),
(13, 'super\n', 1),
(17, 'best coffee in winter', 2),
(15, 'tyduiuyf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

DROP TABLE IF EXISTS `product_information`;
CREATE TABLE IF NOT EXISTS `product_information` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `product_image` text NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`id`, `title`, `description`, `product_image`, `price`) VALUES
(1, 'Mash Grapefruit Sparkling Water', 'This lightly effervescent water \"mashes\" together zesty grapefruit and citrus flavors.', 'https://ii3.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/76727_XXX_v1.tif&wid=2000&cvt=jpeg', 4.99),
(2, 'Pumpkin Spice Blend Coffee, 12 Oz.', 'the spicy goodness of fresh-baked pumpkin pie with hints of nutmeg, clove, and cinnamon.', 'https://ii3.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/7429_XXX_v1.tif&wid=2000&cvt=jpeg', 16),
(3, 'Jasmine And Grapefruit Recovery Bath Soak', 'Made with arnica Montana flower extract and jasmine and grapefruit essential oils', 'https://ii3.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/88779_XXX_v1.tif&wid=650&cvt=jpeg', 11),
(4, 'Whimsical Knit Holiday Sweater Ornaments ', 'Why We Love It, Handcrafted of fabric and manmade materials with wire hangers', 'https://ii2.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/97468_XXX_v1.tif&wid=2000&cvt=jpeg', 27.84),
(5, 'Twig Peace Sign Wreath With Berries Hanging', 'Lend a tranquil touch to your holiday decor with our exclusive hanging peace sign', 'https://ii2.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/97015_XXX_v1.tif&wid=2000&cvt=jpeg', 19),
(6, ' Marrons whole Chestnuts product of france ', 'In the south-central region of France, south of Lyon and north of Avignon', 'https://ii3.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/17825_XXX_v1.tif&wid=2000&cvt=jpeg', 9.99),
(7, 'Brass Starburst Two Light Logan Wall Sconce', 'Crafted of iron with a matte brass finish, our exclusive dual-light Logan wall sconce.', 'https://ii.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/61208_XXX_v1.tif&wid=2000&cvt=jpeg', 69.98),
(12, 'A&G Winter Woodlands Hand Cream', 'Made with moisturizing shea butter to help hands stay soft in the cold weather, our exclusive hand cream ', 'https://ii2.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/98000_XXX_v1.tif&wid=2000&cvt=jpeg', 18.75),
(11, 'David Rio Orca Spice Sugar-Free Chai Mix', 'Aromatic and delicious, David Rio Orca Spice Sugar-Free Chai Mix is a sugar-free blend of black tea ', 'https://ii2.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/17919_XXX_v1.tif&wid=2000&cvt=jpeg', 59.94),
(8, 'Daelmans Caramel Stroopwafel Box Set Of 9', ' the original stroopwafel sold by street-side vendors in 18th-century Netherlands', 'https://ii.worldmarket.com/fcgi-bin/iipsrv.fcgi?FIF=/images/worldmarket/source/22556_XXX_v1.tif&wid=2000&cvt=jpeg', 42.99);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
