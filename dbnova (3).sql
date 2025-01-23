-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 12:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnova`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `created_at`) VALUES
(8, 1, 1, 2, '2024-12-29 07:35:45'),
(16, 10, 2, 1, '2025-01-17 16:58:41'),
(17, 10, 3, 1, '2025-01-18 09:06:17'),
(18, 15, 2, 1, '2025-01-18 11:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('Pending','Completed','Canceled') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` enum('pending','confirmed','failed') DEFAULT 'pending',
  `tanggal_pemesanan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total_price`, `status`, `created_at`, `payment_status`, `tanggal_pemesanan`) VALUES
(1, 1, 100000.00, 'Pending', '2024-12-27 14:25:09', 'pending', '2025-01-18 19:51:33'),
(2, 2, 45000.00, 'Completed', '2024-12-27 14:25:09', 'pending', '2025-01-18 19:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `payment_proof` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `customer_name`, `amount_paid`, `payment_method`, `created_at`, `payment_proof`) VALUES
(1, 'ORDER1735480053', 'fattah@gmail.com', 200000.00, 'bca', '2024-12-29 20:47:33', NULL),
(2, 'ORDER1735481194', 'fattah@gmail.com', 200000.00, 'bca', '2024-12-29 21:06:34', NULL),
(3, 'ORDER1735482896', 'fattah@gmail.com', 450000.00, 'bca', '2024-12-29 21:34:56', NULL),
(4, 'ORDER1735487850', 'fattah@gmail.com', 450000.00, 'bri', '2024-12-29 22:57:30', NULL),
(5, 'ORDER1735490008', 'fattah@gmail.com', 450000.00, 'mandiri', '2024-12-29 23:33:28', NULL),
(6, 'ORDER1735520114', 'deaadelianaputri@gmail.com', 1035000.00, 'bca', '2024-12-30 07:55:14', NULL),
(7, 'ORDER1735522146', 'fattah@gmail.com', 400000.00, 'bca', '2024-12-30 08:29:06', NULL),
(8, 'ORDER1737198657', 'deaadelianaputri@students.amikom.ac.id', 190000.00, 'bca', '2025-01-18 18:10:57', NULL),
(9, 'ORDER1737199176', 'deaadelianaputri@students.amikom.ac.id', 190000.00, 'bca', '2025-01-18 18:19:36', NULL),
(10, 'ORDER1737199975', 'deaadelianaputri@students.amikom.ac.id', 390000.00, 'bca', '2025-01-18 18:32:55', NULL),
(11, 'ORDER1737200864', 'fattah@gmail.com', 580000.00, 'bca', '2025-01-18 18:47:44', NULL),
(12, 'ORDER1737202373', 'deaadelianaputri@students.amikom.ac.id', 580000.00, 'bca', '2025-01-18 19:12:53', NULL),
(13, 'ORDER1737204198', 'deaadelianaputri@students.amikom.ac.id', 580000.00, 'bca', '2025-01-18 19:43:18', NULL),
(14, 'ORDER1737209403', 'deaadelianaputri@students.amikom.ac.id', 580000.00, 'bca', '2025-01-18 21:10:03', NULL),
(15, 'ORDER1737210607', 'deaadelianaputri@students.amikom.ac.id', 960000.00, 'bca', '2025-01-18 21:30:07', NULL),
(16, 'ORDER1737211183', 'deaadelianaputri@students.amikom.ac.id', 390000.00, 'bca', '2025-01-18 21:39:43', NULL),
(17, 'ORDER1737211742', 'deaadelianaputri@students.amikom.ac.id', 190000.00, 'bri', '2025-01-18 21:49:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `review_count` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `rating`, `review_count`, `status`, `image`, `created_at`) VALUES
(1, 'Earring Star', 200000.00, 'Star-shaped earrings with a unique and adorable antique design, perfect for those who love handmade accessories. These earrings are carefully crafted with attention to detail, offering a charming and personalized touch to your everyday style. Ideal as a gift or a delightful addition to your jewelry collection.', 4.7, 150, 'Available', 'uploads/product/blueearring.jpg', '2024-12-28 12:00:00'),
(2, 'Flower Earring', 190000.00, 'Beautifully crafted Flower Earrings made with care by local artisans. Featuring an elegant floral design, these earrings showcase the perfect blend of tradition and modern style. Lightweight and comfortable to wear, they are ideal for both casual outings and formal events. A must-have accessory to enhance your look while supporting quality local craftsmanship', 4.5, 200, 'Available', 'uploads/product/flowerearring.jpg', '2024-12-25 10:30:00'),
(3, 'Kawai Set Yellow', 250000.00, 'Kawai Set Yellow is a charming jewelry set consisting of a necklace and a matching ring, designed with a vibrant yellow theme. Crafted with attention to detail, this set perfectly combines playful elegance and modern style. Ideal for brightening up your outfit, whether for casual gatherings or special occasions. A stunning accessory set to express your unique personality!', 4.9, 85, 'Out of Stock', 'uploads/product/fullsetkawaiyellow.jpg', '2024-12-20 09:15:00'),
(4, 'Ribbon earring\r\n', 150000.00, 'Ribbon Earrings with a delicate and elegant bow design, perfect for adding a touch of charm to any outfit. These earrings are lightweight and crafted with high-quality materials, ensuring comfort and durability. Whether for everyday wear or special occasions, Ribbon Earrings make a stylish and versatile accessory for all fashion lovers.', 4.6, 110, 'Available', 'uploads/product/pearlearring.jpg', '2024-12-18 14:45:00'),
(5, 'Pearl earrings', 185000.00, 'Timeless and sophisticated, these Pearl Earrings are a perfect blend of elegance and simplicity. Featuring high-quality pearls with a radiant finish, they add a touch of classic charm to any outfit. Ideal for formal events, casual outings, or as a thoughtful gift, these earrings are a must-have accessory for every jewelry collection.', 4.8, 95, 'Available', 'uploads/product/loveearring.jpg', '2024-12-15 11:00:00'),
(6, 'Elegant Necklace', 230000.00, 'A beautifully designed necklace, perfect for special occasions.', 4.7, 180, 'Available', 'uploads/product/lovenecklace.jpg', '2024-12-29 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'adinda', 'adinda@gmail.com', '$2y$10$EdF/WiKsZNL9sFHTWpsM6uv9LCuoUIiKLMzpZwwq1mOvANZozTDBG', '2024-12-27 14:12:16'),
(2, 'Ana Craft', 'ana@example.com', 'hashed_password', '2024-12-27 14:24:36'),
(3, 'Budi Artisan', 'budi@example.com', 'hashed_password', '2024-12-27 14:24:36'),
(4, 'Vivi Amelia', 'vivi@gmail.com', '$2y$10$frlYwYE1Zkcf0MOnkQr.qOXcefhmU3pwteXtAtMI6z0K0z5U1Asya', '2024-12-27 16:15:09'),
(5, 'Adinda nur', 'sempurna@gmail.com', '$2y$10$bAxB0drst8HcdUPFYpZEW.AR95NKc5o7zZacmIY/VO4ZIx22I719q', '2024-12-27 16:16:41'),
(9, 'Vivi Amelia', 'qfwf@gmail.com', '$2y$10$z.76puVrevsxq6Q4SJa2X.wdVXY27/zS9We5BXoLLVSrDKWmGmE.e', '2024-12-27 16:22:48'),
(10, 'fattah', 'fattah@gmail.com', '$2y$10$MhR/ihrBIY16vapVcsXfLeKQ6qd028fxHqJVK5o7KDzBl0NLbzfyW', '2024-12-27 19:35:28'),
(11, 'nenek turbo', 'turbojet@gmail.com', '$2y$10$kKfJ2/o/1n7a/29xhZbm8.zX6Ow4PqqtGK4/Q88MUjC9akNMu/13C', '2024-12-27 20:49:55'),
(12, 'nexuko', 'nezuko@gmail.com', '$2y$10$Fisxhwn4p0T5fQXuea7QrujEpMG4L8lVadwt6JRnI2kOorsZ65tBC', '2024-12-28 10:34:19'),
(15, 'dintut', 'admin1@gmail.com', '$2y$10$c02VMhRNQ9lVNrhb4cx6G.x5OpxfNspEd44/MfaQK0DTOV8d9Uoa2', '2025-01-15 09:27:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
