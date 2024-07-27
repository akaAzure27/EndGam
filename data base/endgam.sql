-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 10:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endgam`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `game_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(2, 'Action'),
(4, 'Adventure'),
(1, 'Role-Playing'),
(5, 'Simulation'),
(6, 'Sport & Racing'),
(3, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `game_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `image_path`, `release_date`, `created_at`, `game_path`) VALUES
(1, 'FINAL FANTASY XIV', 'img/games/finalfantasyxiv.jpg', '2010-09-30', '2023-04-27 15:24:53', 'final_fantasy_xiv.php'),
(2, 'TOWER OF FANTASY', 'img/games/toweroffantasy.jpg', '2021-12-16', '2023-04-27 15:39:24', 'tower_of_fantasy.php'),
(3, 'DOTA 2', 'img/games/dota2.jpg', '2013-07-09', '2023-04-27 15:42:09', 'dota_2.php'),
(4, 'SUMMONER WARS: CHRONICLES', 'img/games/summonerswars.jpg', '2022-08-16', '2023-04-27 15:47:38', 'summoner_wars.php'),
(5, 'GENSHIN IMPACT', 'img/games/genshinimpact.jpg', '2020-09-28', '2023-04-27 17:10:54', NULL),
(6, 'BLACK DESERT', 'img/games/blackdesert.jpg', '2014-12-17', '2023-04-27 17:15:41', NULL),
(7, 'LOST ARK', 'img/games/lostark.jpg', '2019-12-04', '2023-04-27 17:20:05', NULL),
(8, 'MONSTER HUNTER RISE', 'img/games/monsterhunterrise.jpg', '2021-03-26', '2023-04-27 17:22:28', NULL),
(9, 'RAGNAROK ONLINE', 'img/games/ragnarokonline.jpg', '2002-08-31', '2023-04-27 20:25:25', NULL),
(10, 'APEX LEGENDS', 'img/games/apexlegends.jpg', '2019-02-04', '2023-04-27 20:56:26', 'apex_legends.php'),
(11, 'PUBG: BATTLEGROUNDS', 'img/games/pubg.jpg', '2017-03-23', '2023-04-27 21:01:03', 'pubg.php'),
(12, 'GRAND THEFT AUTO V', 'img/games/gta.jpg', '2013-09-17', '2023-04-27 21:09:49', 'gta.php'),
(13, 'ELDEN RING', 'img/games/eldenring.jpg', '2022-02-25', '2023-04-27 21:11:50', NULL),
(14, 'MARVEL SNAP', 'img/games/marvelsnap.jpg', '2022-10-18', '2023-04-27 21:17:05', NULL),
(15, 'STELLARIS', 'img/games/stellaris.jpg', '2006-05-09', '2023-04-27 21:26:31', NULL),
(16, 'THE RIFT BREAKER', 'img/games/theriftbreaker.jpg', '2021-10-14', '2023-04-27 21:50:19', NULL),
(17, 'GEMS OF WAR', 'img/games/gemsofwar.jpg', '2014-11-20', '2023-04-27 21:55:43', NULL),
(18, 'THE TENANTS', 'img/games/thetenants.jpg', '2021-03-25', '2023-04-27 21:59:27', NULL),
(19, 'CIRCUS ELECTRIQUE', 'img/games/circuselectrique.jpg', '2022-09-06', '2023-04-27 22:03:22', NULL),
(20, 'GOING MEDIEVAL', 'img/games/goingmedieval.jpg', '2021-06-01', '2023-04-28 18:53:30', NULL),
(21, 'THE SIMS 4', 'img/games/thesims.jpg', '2014-09-02', '2023-04-28 18:55:07', 'thesims.php'),
(22, 'NBA 2K23', 'img/games/nba.jpg', '2022-09-08', '2023-04-28 18:58:41', 'nba.php'),
(23, 'WWE 2k23', 'img/games/wwe.jpg', '2023-03-16', '2023-04-28 19:01:50', NULL),
(24, 'EA SPORTS FIFA 23', 'img/games/fifa.jpg', '2022-09-29', '2023-04-28 19:04:22', 'fifa.php'),
(25, 'WAR THUNDER', 'img/games/warthunder.jpg', '2012-11-01', '2023-04-28 19:07:08', NULL),
(26, 'ASSETTO CORSA', 'img/games/assettocorsa.jpg', '2014-12-19', '2023-04-28 19:12:02', NULL),
(27, 'NEED FOR SPEED UNBOUND', 'img/games/nfs.jpg', '2022-12-02', '2023-04-28 19:18:39', 'nfs.php');

-- --------------------------------------------------------

--
-- Table structure for table `game_categories`
--

CREATE TABLE `game_categories` (
  `game_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_categories`
--

INSERT INTO `game_categories` (`game_id`, `category_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 4),
(5, 1),
(5, 2),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(7, 1),
(7, 2),
(7, 4),
(8, 1),
(8, 2),
(8, 4),
(8, 6),
(9, 1),
(10, 2),
(10, 4),
(11, 2),
(11, 4),
(12, 2),
(12, 4),
(12, 6),
(13, 1),
(13, 2),
(13, 4),
(14, 3),
(15, 3),
(15, 5),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(16, 5),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(18, 3),
(18, 5),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(20, 5),
(21, 4),
(21, 5),
(22, 5),
(22, 6),
(23, 5),
(23, 6),
(24, 5),
(24, 6),
(25, 2),
(25, 5),
(26, 5),
(26, 6),
(27, 2),
(27, 6);

-- --------------------------------------------------------

--
-- Table structure for table `game_genres`
--

CREATE TABLE `game_genres` (
  `game_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_platforms`
--

CREATE TABLE `game_platforms` (
  `game_id` int(11) NOT NULL,
  `platform_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_platforms`
--

INSERT INTO `game_platforms` (`game_id`, `platform_id`) VALUES
(1, 1),
(2, 1),
(2, 6),
(3, 1),
(4, 1),
(4, 6),
(5, 1),
(5, 3),
(5, 4),
(5, 6),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 6),
(7, 1),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(9, 1),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 6),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(11, 6),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(15, 1),
(15, 2),
(15, 4),
(16, 1),
(16, 3),
(17, 1),
(17, 2),
(17, 4),
(18, 1),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(19, 5),
(20, 1),
(21, 1),
(21, 2),
(21, 4),
(22, 1),
(22, 2),
(22, 3),
(22, 4),
(22, 5),
(22, 6),
(23, 1),
(23, 2),
(23, 3),
(23, 4),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(24, 5),
(25, 1),
(25, 2),
(25, 3),
(25, 4),
(26, 1),
(27, 1),
(27, 3);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mygame`
--

CREATE TABLE `mygame` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `game_image` varchar(255) NOT NULL,
  `buy_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mygame`
--

INSERT INTO `mygame` (`game_id`, `game_name`, `game_image`, `buy_time`) VALUES
(12, 'GRAND THEFT AUTO V', 'img/games/gta.jpg', '2023-05-04 04:07:18'),
(22, 'NBA 2K23', 'img/games/nba.jpg', '2023-05-04 04:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `platform_id` int(11) NOT NULL,
  `platform_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`platform_id`, `platform_name`) VALUES
(6, 'Android'),
(1, 'Microsoft Windows'),
(5, 'Nintendo Switch'),
(4, 'Play Station 4'),
(3, 'Play Station 5'),
(2, 'X Box One');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `game_id` int(11) NOT NULL,
  `game_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`game_id`, `game_price`) VALUES
(1, NULL),
(2, NULL),
(3, 50000),
(4, 75000),
(5, NULL),
(6, NULL),
(7, 50000),
(8, 150000),
(9, NULL),
(10, 100000),
(11, NULL),
(12, 250000),
(13, 150000),
(14, 150000),
(15, 200000),
(16, NULL),
(17, NULL),
(18, NULL),
(19, NULL),
(20, NULL),
(21, 100000),
(22, 500000),
(23, 400000),
(24, 500000),
(25, NULL),
(26, 100000),
(27, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `birthdate`, `image_path`, `description`) VALUES
('azure27', 'azure', '123', 'kefas0524@gmail.com', '2023-05-04', 'img/profile/dota2_big.jpg', 'gsah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`game_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD PRIMARY KEY (`game_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD PRIMARY KEY (`game_id`,`platform_id`),
  ADD KEY `platform_id` (`platform_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`),
  ADD UNIQUE KEY `genre_name` (`genre_name`);

--
-- Indexes for table `mygame`
--
ALTER TABLE `mygame`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`platform_id`),
  ADD UNIQUE KEY `platform_name` (`platform_name`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `platform_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD CONSTRAINT `game_categories_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`),
  ADD CONSTRAINT `game_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD CONSTRAINT `game_genres_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`),
  ADD CONSTRAINT `game_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

--
-- Constraints for table `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD CONSTRAINT `game_platforms_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`),
  ADD CONSTRAINT `game_platforms_ibfk_2` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`platform_id`);

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
