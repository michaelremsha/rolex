
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programmer22_maindb`
--

-- CREATE DATABASE programmer22_maindb;
USE programmer22_maindb;


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `type` text NOT NULL,
  `model_number` int(11) NOT NULL,
  `model_case` text NOT NULL,
  `water_resistance` text NOT NULL,
  `movement` text NOT NULL,
  `caliber` text NOT NULL,
  `power_reserve` text NOT NULL,
  `bracelet` text NOT NULL,
  `dial` text NOT NULL,
  `large_title` text NOT NULL,
  `small_title` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pid`, `type`, `model_number`, `model_case`, `water_resistance`, `movement`, `caliber`, `power_reserve`, `bracelet`, `dial`, `large_title`, `small_title`, `description`, `price`) VALUES
(1, 0, 'cat', 0, '', '', '', '', '', '', '', 'top category', 'top category', 'top category description', 0),
(4, 1, 'cat', 0, '', '', '', '', '', '', '', 'Date Just', 'Date Just', 'Date Just Description', 0),
(5, 4, 'cat', 0, '', '', '', '', '', '', '', 'Date Just Pearl', 'Date Just Pearl', 'Date Just Pearl Description', 0),
(6, 1, 'cat', 0, '', '', '', '', '', '', '', 'Day-Date', 'Day-Date', 'Day-Date Description', 0),
(7, 4, 'item', 100001, 'Metal', '70m', 'Perpetual', '3285', '72 Hours', 'Oyster', 'Black', 'Datejust 36', 'Datejust 36', 'Oyster, 36 mm, Oystersteel', 4500),
(8, 4, 'item', 100002, 'Metal', '72m', 'Mechanical', '3285', '72 Hours', 'Oyster', 'Gold', 'Datejust 37', 'Datejust 37', 'Oyster, 37 mm, Oystersteel', 4800),
(9, 4, 'item', 100003, 'Metal', '72mm', 'Mechanical', '3285', '72 Hours', 'Oyster', 'Black', 'Datejust 38', 'Datejust 38', 'Oyster, 38 mm, Oystersteel', 5000),
(10, 5, 'item', 100004, 'Gold', '72m', 'Perpetual', '3285', '72 Hours', 'Oyster', 'Black', 'Datejust 38', 'Datejust 38', 'Oyster, 38 mm, Oystersteel', 5100),
(11, 6, 'item', 100005, 'Gold', '72m', 'Perpetual', '3285', '72 Hours', 'Oyster', 'White', 'Day Date 42', 'Day Date 42', 'Oyster, 42 mm, Oystersteel', 5500),
(12, 6, 'item', 100006, 'Gold', '72m', 'Perpetual', '3285', '72 Hours', 'Oyster', 'Black', 'Day Date 38', 'Day Date 38', 'Oyster, 38 mm, Oystersteel', 6120);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
