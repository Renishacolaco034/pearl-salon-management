-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 02:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ordnumber` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ordnumber`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(41, '778093706', 'gdd', 'prata861@gmail.com', '3454334467', 'bj', 'cod', 'Flawless Finishing Touch Flawless Brows\r\n(1Pcs)(1), Bella makeup sponge,blender with black kajal,eyelashes(1)', '3000'),
(42, '816099071', 'gdd', 'prata861@gmail.com', '3454334467', 'bj', 'cod', 'Lakme Complexion Care Face Cream, Beige, 9g(1)', '1500'),
(43, '422968842', 'Prameetha Dsouza', 'prameetha861@gmail.com', '8151879443', 'bj', 'cod', 'Flawless Finishing Touch Flawless Brows\r\n(1Pcs)(1), Maybelline New York The Blushed Palette Eyeshadow.(1)', '3400'),
(44, '429426134', 'pam', 'prata861@gmail.com', '8878877878', 'bj', 'cod', 'Flawless Finishing Touch Flawless Brows\r\n(1Pcs)(1), Bella makeup sponge,blender with black kajal,eyelashes(1)', '3000'),
(45, '418078453', 'Prameetha Dsouza', 'pram@gmail.com', '4589898984', 'jfjgk', 'cod', 'Flawless Finishing Touch Flawless Brows\r\n(1Pcs)(2), Garnier facial cream(white speed)(1)', '5850'),
(46, '892059377', 'Prameetha Dsouza', 'Prameetha861@gmail.com', '8151879443', 'bj', 'cod', 'Flawless Finishing Touch Flawless Brows\r\n(1Pcs)(1)', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `real_price` varchar(25) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `Total_quantity` int(200) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `real_price`, `product_qty`, `Total_quantity`, `product_image`, `product_code`) VALUES
(1, 'Lakme Complexion Care Face Cream, 9g (1Pcs)', '1500', '2000', 1, 30, 'image/imag_1.webp', 'p1000'),
(2, 'Bella makeup sponge,blender with black kajal,eyelashes', '500', '1000', 1, 0, 'image/imag_2.jpg', 'p1001'),
(3, 'Flawless Finishing Touch Flawless Brows\r\n(1Pcs)', '2500', '3500', 1, 50, 'image/imag_3.jpg', 'p1002'),
(4, 'Maybelline New York The Blushed Palette Eyeshadow.', '900', '1300', 1, 0, 'image/imag_4.webp', 'p1003'),
(5, 'Plum mega nourish for hair', '900', '1400', 1, 20, 'image/imag_5.jpg', 'p1004'),
(6, 'Moms co.kit Shampoo kit', '1500', '2000', 1, 10, 'image/imag_6.jpg', 'p1005'),
(7, 'Garnier facial cream, White speed', '850', '1000', 1, 60, 'image/imag_7.jpeg', 'p1006'),
(9, 'Lavender body spa combo', '1000', '1500', 1, 100, 'image/imag_8.jpeg', 'p1007'),
(10, 'fjf', '43', '5', 1, 9, 'bg-2.jpg', 'p1008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
