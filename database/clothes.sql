USE clothes;

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
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int NOT NULL,
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
(1, 'Express', 'Mens Leather Jacket', 69.99, '../assets/Products/men/image1.png', '2023-08-04 16:30:00'), 
(2, 'Gymshark', 'Gymshark Mens Jogger Pants', 39.99, '../assets/Products/men/image2.png', '2023-08-04 16:30:00'),
(3, 'Nike', 'NIKE Mens Jogger Pants', 49.99, '../assets/Products/men/image3.png', '2023-08-04 16:30:00'),
(4, 'Shein', 'Brown Top & Bottoms', 59.99, '../assets/Products/men/image4.png', '2023-08-04 16:30:00'),
(5, 'Omega', 'Streetwear Jacket', 49.99, '../assets/Products/men/image5.png', '2023-08-04 16:30:00'),
(6, 'Omega', 'Womens Navy & Tan Crop Top', 29.99, '../assets/Products/women/image1.png', '2023-08-04 16:30:00'),
(7, 'COACH', 'Womens Dress', 49.99, '../assets/Products/women/image2.png', '2023-08-04 16:30:00'),
(8, 'Chanel', 'Womens Short Sleeve Top & Pants', 54.99, '../assets/Products/women/image3.png', '2023-08-04 16:30:00'),
(9, 'Shein', 'Womens Dress | White w/Black Accents', 19.99, '../assets/Products/women/image4.png', '2023-08-04 16:30:00'),
(10, 'Omega', 'Womens Elegant Dress', 49.99, '../assets/Products/women/image5.png', '2023-08-04 16:30:00'),
(11, 'Carters', 'Kids Graphic Shirt & Shorts', 29.99, '../assets/Products/kids/image1.png', '2023-08-04 16:30:00'),
(12, 'Carters', 'Kids Blue & Black Outfit', 29.99, '../assets/Products/kids/image2.png', '2023-08-04 16:30:00'),
(13, 'Carters', 'Kids Black & Red Outfit', 29.99, '../assets/Products/kids/image3.png', '2023-08-04 16:30:00'),
(14, 'Carters', 'Kids White & Green Outfit', 29.99, '../assets/Products/kids/image4.png', '2023-08-04 16:30:00'),
(15, 'Carters', 'Kids Light Blue Dress', 19.99, '../assets/Products/kids/image5.png', '2023-08-04 16:30:00'),
(16, 'COACH', 'Oversized Glasses', 14.99, '../assets/Products/accessories/image1.png', '2023-08-04 16:30:00'),
(17, 'Apple', 'iPhone 11 | 12 | 13 Phone Case', 19.99, '../assets/Products/accessories/image2.png', '2023-08-04 16:30:00'),
(18, 'Lids', 'New York Hat | Tan', 19.99, '../assets/Products/accessories/image3.png', '2023-08-04 16:30:00'),
(19, 'Omega', 'Yellow Watch w/Bird Design', 24.99, '../assets/Products/accessories/image4.png', '2023-08-04 16:30:00'),
(20, 'Tiffany & Co.', 'Custom Made Men watch', 70.00, '../assets/Products/accessories/image5.png', '2023-08-04 16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data for table `user`
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
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
