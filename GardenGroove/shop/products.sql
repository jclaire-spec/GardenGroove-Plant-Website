-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 04:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Tiny Treasures', 220, 0x2e2f696d672f706c616e74312e706e67),
(2, 'Pocket Gardens', 170, 0x2e2f696d672f706c616e74322e706e67),
(3, 'Lilliputian Leaves', 199, 0x2e2f696d672f706c616e74332e706e67),
(4, 'Diminutive Delights', 249, 0x2e2f696d672f706c616e74342e706e67),
(5, 'Nano Nurtures', 299, 0x2e2f696d672f706c616e74352e706e67),
(6, 'Little Blossoms', 300, 0x2e2f696d672f706c616e74362e706e67),
(7, 'Bitty Botanicals', 278, 0x2e2f696d672f706c616e74372e706e67),
(8, 'Wee Wonders', 190, 0x2e2f696d672f706c616e74382e706e67),
(9, 'Miniature Greens', 250, 0x2e2f696d672f706c616e74392e706e67),
(10, 'Dainty Blooms', 270, 0x2e2f696d672f706c616e7431302e706e67),
(11, 'Itty Bitty Greens', 190, 0x2e2f696d672f706c616e7431312e706e67),
(12, 'Pocket-sized Posies', 155, 0x2e2f696d672f706c616e7431322e706e67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
