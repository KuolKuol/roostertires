-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 04:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roostertires`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `price` double NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`features`)),
  `sku` varchar(50) NOT NULL,
  `vendor_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`vendor_links`)),
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `images`, `features`, `sku`, `vendor_links`, `type`) VALUES
(1, 'MX2 100/90-19 ROOSTER Rear Tire', 'ROOSTER TERRAX MX2 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. ', 89.95, '[\"tires/110-90-19/1109019a.png\",\"tires/110-90-19/1109019b.png\",\"tires/110-90-19/1109019c.png\",\"tires/110-90-19/1109019d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"As the track dries up the softer compound will maintain grip.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT1009019RMMZ', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-rear-tire-100-90-19\"}', 'tire'),
(2, 'MX2 110/90-19 ROOSTER Rear Tire	', 'ROOSTER TERRAX MX2 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. \r\n', 94.95, '[\"tires/110-90-19/1109019a.png\",\"tires/110-90-19/1109019b.png\",\"tires/110-90-19/1109019c.png\",\"tires/110-90-19/1109019d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Motocross racing.\",\"As the track dries up the softer compound will maintain grip.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT1109019RMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-rear-tire-110-90-19?_pos=3&_sid=a623923fd&_ss=r\"}', 'tire'),
(3, 'MX2 60/100-14 ROOSTER Front Tire', 'ROOSTER TERRAX MX2 High Performance front tires are trusted by top riders and designed to provide maximum bite for high velocity cornering speeds. Expect no corner roll and as the track dries up the softer compound to maintain its grip.', 39.95, '[\"tires/60-100-14/6010014a.png\",\"tires/60-100-14/6010014b.png\",\"tires/60-100-14/6010014c.png\",\"tires/60-100-14/6010014d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT6010014FMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-front-tire-60-100-14\"}', 'tire'),
(4, 'MX2 70/100-17 ROOSTER Front Tire', 'ROOSTER TERRAX MX2 High Performance front tires are trusted by top riders and designed to provide maximum bite for high velocity cornering speeds. Expect no corner roll and as the track dries up the softer compound to maintain its grip.', 49.95, '[\"tires/70-100-17/7010017a.png\",\"tires/70-100-17/7010017b.png\",\"tires/70-100-17/7010017c.png\",\"tires/70-100-17/7010017d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT7010017FMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-front-tire-70-100-17\"}', 'tire'),
(5, 'MX2 70/100-19 ROOSTER Front Tire', 'ROOSTER TERRAX MX2 High Performance front tires are trusted by top riders and designed to provide maximum bite for high velocity cornering speeds. Expect no corner roll and as the track dries up the softer compound to maintain its grip.', 49.95, '[\"tires/70-100-17/7010017a.png\",\"tires/70-100-17/7010017b.png\",\"tires/70-100-17/7010017c.png\",\"tires/70-100-17/7010017d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT7010019FMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-front-tire-70-100-19\"}', 'tire'),
(6, 'MX2 80/100-12 ROOSTER Rear Tire', 'ROOSTER TERRAX MX2 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits.', 44.95, '[\"tires/80-100-12/8010012a.png\",\"tires/80-100-12/8010012b.png\",\"tires/80-100-12/8010012c.png\",\"tires/80-100-12/8010012d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT8010012RMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-rear-tire-80-100-12\"}', 'tire'),
(7, 'MX2 80/100-21 ROOSTER Front Tire	', 'ROOSTER TERRAX MX2 High Performance front tires are trusted by top riders and designed to provide maximum bite for high velocity cornering speeds. Expect no corner roll and as the track dries up the softer compound to maintain its grip.', 79.95, '[\"tires/80-100-21-X/8010021a.png\",\"tires/80-100-21-X/8010021b.png\",\"tires/80-100-21-X/8010021c.png\",\"tires/80-100-21-X/8010021d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT8010021FMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-front-tire-80-100-21\"}', 'tire'),
(8, 'MX2 90/100-14 ROOSTER Rear Tire	', 'ROOSTER TERRAX MX2 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. ', 49.95, '[\"tires/90-100-16/9010016a.png\",\"tires/90-100-16/9010016b.png\",\"tires/90-100-16/9010016c.png\",\"tires/90-100-16/9010016d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT9010014RMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-rear-tire-90-100-14\"}', 'tire'),
(9, 'MX2 90/100-16 ROOSTER Rear Tire', 'ROOSTER TERRAX MX2 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. ', 54.95, '[\"tires/90-100-16/9010016a.png\",\"tires/90-100-16/9010016b.png\",\"tires/90-100-16/9010016c.png\",\"tires/90-100-16/9010016d.png\"]', '[\"Designed for soft to intermediate terrain\",\"Race proven grip matched with amazing traction adapts to the demands of Moto Cross racing.\",\"Sidewall zones are designed to deliver great handling.\",\"Aggressive tread pattern increases performance and even wear over the life of the tire.\",\"Maximum adhesion on all types of terrain\"]', 'RT9010016RMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx2-rear-tire-90-100-16\"}', 'tire'),
(10, 'MZ1 110/100-18 ROOSTER Rear Tire', 'ROOSTER TERRAX MZ1 Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 94.95, '[\"tires/120-90-18/1209018a.png\",\"tires/120-90-18/1209018b.png\",\"tires/120-90-18/1209018c.png\",\"tires/120-90-18/1209018d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT11010018RMMZ', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mz1-rear-tire-110-100-18\"}', 'tire'),
(11, 'MZ1 110/90-19 ROOSTER Rear Tire	', 'ROOSTER TERRAX MZ1 Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 79.95, '[\"tires/110-90-19/1109019a.png\",\"tires/110-90-19/1109019b.png\",\"tires/110-90-19/1109019c.png\",\"tires/110-90-19/1109019d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT1109019RMMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mz1-rear-tire-110-90-19\"}', 'tire'),
(12, 'MZ1 120/80-19 ROOSTER Rear Tire	', 'ROOSTER TERRAX MZ1 Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 84.95, '[\"tires/120-90-18/1209018a.png\",\"tires/120-90-18/1209018b.png\",\"tires/120-90-18/1209018c.png\",\"tires/120-90-18/1209018d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT1208019RMMZ', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mz1-120-90-19-rooster-rear-tire\"}', 'tire'),
(13, 'MZ1 120/90-18 ROOSTER Rear Tire	', 'ROOSTER TERRAX MZ1 Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 109.95, '[\"tires/120-90-18/1209018a.png\",\"tires/120-90-18/1209018b.png\",\"tires/120-90-18/1209018c.png\",\"tires/120-90-18/1209018d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT1209018RMMZ', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mz1-rear-tire-120-90-18\"}', 'tire'),
(14, 'MZ1 80/100-21 ROOSTER Front Tire', 'ROOSTER TERRAX MZ1 Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 79.95, '[\"tires/80-100-12/8010012a.png\",\"tires/80-100-12/8010012b.png\",\"tires/80-100-12/8010012c.png\",\"tires/80-100-12/8010012d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT8010021FMMZ', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mz1-front-tire-80-100-21\"}', 'tire'),
(15, 'MZ1 90/90-21 ROOSTER Front Tire', 'ROOSTER TERRAX MZ1 Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 79.95, '[\"tires/80-100-21-Z/8010021a.png\",\"tires/80-100-21-Z/8010021b.png\",\"tires/80-100-21-Z/8010021c.png\",\"tires/80-100-21-Z/8010021d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT909021FMMZ', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mz1-front-tire-90-90-21\"}', 'tire'),
(16, 'MX3 110/90-19 ROOSTER Rear Tire', 'ROOSTER TERRAX MX3 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. ', 104.95, '[\"tires/mx3/MX31209019a.png\",\"tires/mx3/MX31209019b.png\",\"tires/mx3/MX31209019c.png\",\"tires/mx3/MX31209019d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT1109019RHM3', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx3-110-90-19-rooster-rear-tire\"}', 'tire'),
(17, 'MX3 120/90-19 ROOSTER Rear Tire', 'ROOSTER TERRAX MX3 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. ', 104.95, '[\"tires/mx3/MX31209019a.png\",\"tires/mx3/MX31209019b.png\",\"tires/mx3/MX31209019c.png\",\"tires/mx3/MX31209019d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT1209019RHM3', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx3-120-90-19-rooster-rear-tire-1\"}', 'tire'),
(18, 'MX3 80/100-21 ROOSTER Front Tire', 'ROOSTER TERRAX MX3 High Performance rear tires are trusted by top riders and designed to provide maximum bite for hard acceleration. Especially designed for faster starts and corner exits. ', 104.95, '[\"tires/mx3/MX38010021a.png\",\"tires/mx3/MX38010021b.png\",\"tires/mx3/MX38010021c.png\",\"tires/mx3/MX38010021d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT8010021FHM3', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx3-80-100-21-rooster-front-tire\"}', 'tire'),
(19, 'MSX 110/100-18 ROOSTER Rear Tire	', 'ROOSTER TERRAX MSX Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 109.95, '[\"tires/msx/MSX11010018a.png\",\"tires/msx/MSX11010018b.png\",\"tires/msx/MSX11010018c.png\",\"tires/msx/MSX11010018d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT8010021FHM3', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/mx3-80-100-21-rooster-front-tire\"}', 'tire'),
(20, 'MSX 140/80-18 ROOSTER Rear Tire', 'ROOSTER TERRAX MSX Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 129.95, '[\"tires/msx/MSX1408018a.png\",\"tires/msx/MSX1408018b.png\",\"tires/msx/MSX1408018c.png\",\"tires/msx/MSX1408018d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT1408018RSMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-140-80-18-rooster-rear-tire\"}', 'tire'),
(21, 'MSX 80/100-21 ROOSTER Front Tire', 'ROOSTER TERRAX MSX Enduro Soft, Designed to provide aggressive traction in soft terrain with an extended wear life. MX grip coupled with Enduro strength and wear. ', 89.95, '[\"tires/msx/MSX8010021a.png\",\"tires/msx/MSX8010021b.png\",\"tires/msx/MSX8010021c.png\",\"tires/msx/MSX8010021d.png\"]', '[\"Maximum traction and handling for mud and extreme conditions\",\"Increased resistance to punctures and pinch flats\",\"Excellent for all weather in soft application\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\",\"Maximum adhesion on all types of terrain\"]', 'RT8010021FSMX', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire'),
(22, 'Rooster Tire Tubes', 'All Rooster Tire tubes are made from Butyl rubber which is a synthetic rubber with very good air retention properties. Due to its unique molecular structure Butyl rubber has very good tear resistance and is able to maintain good tensile and tear strength after extended exposure to heat.', 0, '[\"tubes/1.4mm-OEM-Tube.png\",\"tubes/2.5mm-Heavy-Duty-Tube.png\",\"tubes/4.0mm-Ultra-Heavy-Duty-Tube.png\"]', '[\"Standard Tubes are equivalent to OEM Specifications for stock bikes.\",\"Heavy Duty Tubes are much heavier and 2.5mm thick for increased durability and longevity.\",\"Ultra Duty Tubes are very thick at 4.0mm these are designed to withstand extreme riding conditions.\"]', 'RT', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/tubes\"}', 'tube'),
(23, 'Adventure 1', 'ROOSTER Adventure 1 & 2 Off Road Series. Go everywhere the road or trail takes you with the confidence that you are going to get power and braking to the ground.', 89.95, '[\"tires/adventure/adventure1.png\"]', '[\"Comfortable road handling and superior off road performance.\",\"Resistant to punctures and pinch flats\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\"]', 'RTADV1', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire'),
(24, 'Adventure 2', 'ROOSTER Adventure 1 & 2 Off Road Series. Go everywhere the road or trail takes you with the confidence that you are going to get power and braking to the ground.', 89.95, '[\"tires/adventure/adventure2.png\"]', '[\"Comfortable road handling and superior off road performance.\",\"Resistant to punctures and pinch flats\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\"]', 'RTADV2', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire'),
(25, 'Trials Comp 1', 'ROOSTER Trials 1 & 2 Off Road Series. Go everywhere the road or trail takes you with the confidence that you are going to get power and braking to the ground.', 149.95, '[\"tires/trials/1-110-9018.png\"]', '[\"Comfortable road handling and superior off road performance.\",\"Resistant to punctures and pinch flats\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\"]', 'RTTC1', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire'),
(26, 'Trials Comp 2\r\n', 'ROOSTER Trials 1 & 2 Off Road Series. Go everywhere the road or trail takes you with the confidence that you are going to get power and braking to the ground.', 149.95, '[\"tires/trials/2-110-90-18.png\"]', '[\"Comfortable road handling and superior off road performance.\",\"Resistant to punctures and pinch flats\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\"]', 'RTTC2', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire'),
(27, 'MSS 120/90-19 Rear Tire', 'ROOSTER TERRAX MSS High Performance rear sand tires are trusted by top riders and designed to provide maximum acceleration and handling. Made with an intermediate compound the MSS will propel through loose ground and still perform like a regular when on harder surfaces.', 89.95, '[\"tires/mss/MSS1209019a.png\",\"tires/mss/MSS1209019b.png\",\"tires/mss/MSS1209019c.png\",\"tires/mss/MSS1209019d.png\"]', '[\"Designed for loose terrain\",\"Race proven technology for tracks or terrain featuring a variety of conditions\",\"Sidewall zones are designed to deliver great handling\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\"]', 'RTMSS1209019', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire'),
(28, 'MSS 110/90-19 Rear Tire', 'ROOSTER TERRAX MSS High Performance rear sand tires are trusted by top riders and designed to provide maximum acceleration and handling. Made with an intermediate compound the MSS will propel through loose ground and still perform like a regular when on harder surfaces.', 87.95, '[\"tires/mss/MSS1209019a.png\",\"tires/mss/MSS1209019b.png\",\"tires/mss/MSS1209019c.png\",\"tires/mss/MSS1209019d.png\"]', '[\"Designed for loose terrain\",\"Race proven technology for tracks or terrain featuring a variety of conditions\",\"Sidewall zones are designed to deliver great handling\",\"Aggressive tread pattern increases performance and even wear over the life of the tire\"]', 'RTMSS1109019', '{\"ridersonly.ca\":\"https://ridersonly.ca/products/msx-80-100-21-rooster-front-tire\"}', 'tire');

-- --------------------------------------------------------

--
-- Table structure for table `sponsored_riders`
--

CREATE TABLE `sponsored_riders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `class` varchar(100) NOT NULL,
  `bike_number` int(10) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsored_riders`
--

INSERT INTO `sponsored_riders` (`id`, `first_name`, `last_name`, `class`, `bike_number`, `image_url`) VALUES
(1, 'Cole ', 'Johnson', 'Intermediate', 363, 'cole-johnson.png'),
(2, 'Daniel', 'Miller', 'Pro', 377, 'daniel-miller.png'),
(3, 'Stephen', 'Juno', 'Pro', 63, 'stephen-Juno.png'),
(4, 'Daryl ', 'Levy ', '250 Beginner', 192, 'daryl-levy.png');

-- --------------------------------------------------------

--
-- Table structure for table `tire_variants`
--

CREATE TABLE `tire_variants` (
  `id` int(11) NOT NULL,
  `discipline` varchar(20) NOT NULL,
  `size` varchar(100) NOT NULL,
  `series` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tire_variants`
--

INSERT INTO `tire_variants` (`id`, `discipline`, `size`, `series`, `product_id`) VALUES
(1, 'motocross', '100/90-19', 'mx2', 1),
(2, 'motocross', '110/90-19', 'mx2', 2),
(3, 'motocross', '60/100-14', 'mx2', 3),
(4, 'motocross', '70/100-17', 'mx2', 4),
(5, 'motocross', '70/100-19', 'mx2', 5),
(6, 'motocross', '80/100-12', 'mx2', 6),
(7, 'motocross', '80/100-21', 'mx2', 7),
(8, 'motocross', '90/100-14', 'mx2', 8),
(9, 'motocross', '90/100-16', 'mx2', 9),
(10, 'enduro', '110/100-18', 'mz1', 10),
(11, 'enduro', '110/90-19', 'mz1', 11),
(12, 'enduro', '120/80-19', 'mz1', 12),
(13, 'enduro', '120/90-18', 'mz1', 13),
(14, 'enduro', '80/100-21', 'mz1', 14),
(15, 'enduro', '90/90-21', 'mz1', 15),
(16, 'motocross', '110/90-19', 'mx3', 16),
(17, 'motocross', '110/90-19', 'mx3', 17),
(18, 'motocross', '80/100-21', 'mx3', 18),
(19, 'enduro', '110/80-18', 'msx', 19),
(20, 'enduro', '140/80-18', 'msx', 20),
(21, 'enduro', ' 80/100-21', 'msx', 21),
(22, 'adventure ', '120-80-19, 110/90-17, 120/80-17, 130/80-17, 110/100-18', 'Adventure 1', 23),
(23, 'adventure ', '120/80-17', 'Adventure 2', 24),
(24, 'trials', '110/90-18', 'Trials Comp 1', 25),
(25, 'trials', '110/90-18', 'Trials Comp 2', 26),
(26, 'motocross', '120/90-19', 'mss', 27),
(27, 'motocross', '110/90-19', 'mss', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tube_variants`
--

CREATE TABLE `tube_variants` (
  `id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `thickness` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tube_variants`
--

INSERT INTO `tube_variants` (`id`, `size`, `thickness`, `product_id`) VALUES
(1, '80/100-12', 'OEM/Standard 1.4mm', 22),
(2, '60/100-14', 'OEM/Standard 1.4mm', 22),
(3, '70/100-17', 'OEM/Standard 1.4mm', 22),
(4, '90/100-14', 'OEM/Standard 1.4mm', 22),
(5, '90/100-16', 'OEM/Standard 1.4mm', 22),
(6, '80/100-21', 'OEM/Standard 1.4mm', 22),
(7, '100/90-19', 'OEM/Standard 1.4mm', 22),
(8, '110/90-19', 'OEM/Standard 1.4mm', 22),
(9, ' 80/100-12', 'Heavy Duty 2.5mm', 22),
(10, '60/100-14', 'Heavy Duty 2.5mm', 22),
(11, '70/100-17', 'Heavy Duty 2.5mm', 22),
(12, '70/100-19', 'Heavy Duty 2.5mm', 22),
(13, '90/100-14', 'Heavy Duty 2.5mm', 22),
(14, ' 90/100-16', 'Heavy Duty 2.5mm', 22),
(15, '80/100-21', 'Heavy Duty 2.5mm', 22),
(16, '100/90-19', 'Heavy Duty 2.5mm', 22),
(17, '110/90-19', 'Heavy Duty 2.5mm', 22),
(18, '110/100-18', 'Heavy Duty 2.5mm', 22),
(19, ' 120/90-18', 'Heavy Duty 2.5mm', 22),
(20, '80/100-21', 'Ultra Duty 4.0mm', 22),
(21, '110/90-19', 'Ultra Duty 4.0mm', 22),
(22, '110/100-18', 'Ultra Duty 4.0mm', 22),
(23, '120/90-18', 'Ultra Duty 4.0mm', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsored_riders`
--
ALTER TABLE `sponsored_riders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tire_variants`
--
ALTER TABLE `tire_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tube_variants`
--
ALTER TABLE `tube_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sponsored_riders`
--
ALTER TABLE `sponsored_riders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tire_variants`
--
ALTER TABLE `tire_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tube_variants`
--
ALTER TABLE `tube_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tire_variants`
--
ALTER TABLE `tire_variants`
  ADD CONSTRAINT `tire_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `tube_variants`
--
ALTER TABLE `tube_variants`
  ADD CONSTRAINT `tube_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
