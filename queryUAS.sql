-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 04:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overloop-database`
--

-- --------------------------------------------------------

--
-- Structure for view `view_sold_products`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_sold_products`  AS SELECT `C`.`name` AS `name`, `P`.`title` AS `product`, `CAT`.`name` AS `category`, `S`.`size` AS `size`, `D`.`loopkey` AS `loopkey` FROM ((((`customers` `C` join `details` `D` on(`D`.`customer_id` = `C`.`id`)) join `stocks` `S` on(`S`.`id` = `D`.`stock_id`)) join `products` `P` on(`P`.`id` = `S`.`product_id`)) join `categories` `CAT` on(`CAT`.`id` = `P`.`category_id`)) WHERE `D`.`status` = 'Sold' ORDER BY `C`.`name` ASC  ;

--
-- VIEW `view_sold_products`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
