-- phpMyAdmin SQL
-- version 8.1
-- https://www.phpmyadmin.net/
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Inserting data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'COACH', 'Homme Solid Shirt', 67.00, './assets/products/image1.png', '2023-07-15 01:48:00'), 
(2, 'Tiffany & Co.', 'Homme Solid Shirt & Drawstring Waist Shorts ', 70.00, './assets/products/image2.png', '2023-07-15 01:48:00'),
(3, 'Tiffany & Co.', 'Homme Solid Shirt & Drawstring Waist Shorts ', 84.99, './assets/products/image3.png', '2023-07-15 01:48:00'),
(4, 'COACH', 'Homme Solid Shirt', 122.49, './assets/products/image4.png', '2023-07-15 01:48:00'),
(5, 'Omega', 'Drawstring Waist Pants', 70.00, './assets/products/image5.png', '2023-07-15 01:48:00'),
(6, 'Omega', 'Drawstring Waist Pants', 70.00, './assets/products/image6.png', '2023-07-15 01:48:00'),
(7, 'COACH', 'Drawstring Waist Pants', 84.99, './assets/products/image7.png', '2023-07-15 01:48:00'),
(8, 'Chanel', 'Drawstring Waist Pants', 84.99, './assets/products/image8.png', '2023-07-15 01:48:00'),
(9, 'Tiffany & Co.', 'Lapel Neck Overcoat Without Sweater', 84.99, './assets/products/image9.png', '2023-07-15 01:48:00'),
(10, 'Omega', 'Zip Up Bomber Jacket', 87.00, './assets/products/image10.png', '2023-07-15 01:48:00'),
(11, 'COACH', 'Zip Up Bomber Jacket', 87.00, './assets/products/image11.png', '2023-07-15 01:48:00'),
(12, 'Omega', 'Zip Up Bomber Jacket', 70.00, './assets/products/image12.png', '2023-07-15 01:48:00'),
(13, 'Tiffany & Co.', 'Cut-out Top', 67.00, './assets/products/image13.png', '2023-07-15 01:48:00'),
(14, 'Chanel', 'Solid Maxi Cami Dress', 87.00, './assets/products/image14.png', '2023-07-15 01:48:00'),
(15, 'COACH', 'Solid Maxi Cami Dress', 60.00, './assets/products/image15.png', '2023-07-15 01:48:00'),
(16, 'Chanel', 'Solid Maxi Cami Dress', 67.00, './assets/products/image16.png', '2023-07-15 01:48:00'),
(17, 'COACH', 'Neck Open Front Blazer & Pants Suit', 70.00, './assets/products/image17.png', '2023-07-15 01:48:00'),
(18, 'Tiffany & Co.', 'Neck Open Front Blazer & Pants Suit', 84.99, './assets/products/image18.png', '2023-07-15 01:48:00'),
(19, 'Omega', 'Neck Open Front Blazer & Pants Suit', 87.00, './assets/products/image19.png', '2023-07-15 01:48:00'),
(20, 'Tiffany & Co.', 'Neck Open Front Blazer & Pants Suit', 70.00, './assets/products/image20.png', '2023-07-15 01:48:00'),
(21, 'Omega', 'Men Single Button Blazer & Suit Pants Set', 84.99, './assets/products/2image1.png', '2023-07-15 01:48:00'),
(22, 'COACH', 'Men Single Button Blazer & Suit Pants Set', 152.00, './assets/products/image22.png', '2023-07-15 01:48:00'),
(23, 'COACH', 'Men Single Button Blazer & Suit Pants Set', 84.99, './assets/products/image23.png', '2023-07-15 01:48:00'),
(24, 'Tiffany & Co.', 'Men Single Button Blazer & Suit Pants Set', 84.99, './assets/products/image24.png', '2023-07-15 01:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Shivansh', 'Chhabra', '2020-03-28 13:07:17'),
(2, 'Bryan', 'Melo', '2020-03-28 13:07:17'), 
(3, 'Somtochi', 'Ezeh', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
