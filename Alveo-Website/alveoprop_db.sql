-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 12:54 PM
-- Server version: 5.6.37-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alveoprop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inquiry_id` int(11) NOT NULL,
  `fname` int(25) NOT NULL,
  `lname` int(25) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` int(11) NOT NULL,
  `property_name` varchar(250) NOT NULL,
  `customer_question` text NOT NULL,
  `inquiry_status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `property_pic` varchar(300) DEFAULT NULL,
  `property_pic1` varchar(300) DEFAULT NULL,
  `property_pic2` varchar(300) DEFAULT NULL,
  `property_pic3` varchar(300) DEFAULT NULL,
  `property_name` varchar(250) NOT NULL,
  `property_vid` varchar(200) NOT NULL,
  `property_location` varchar(250) NOT NULL,
  `property_map` varchar(500) NOT NULL,
  `property_type` varchar(250) NOT NULL,
  `property_space` varchar(500) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `garages` int(11) NOT NULL,
  `property_amenities` varchar(10000) NOT NULL,
  `property_description` varchar(10000) NOT NULL,
  `property_price` int(11) NOT NULL,
  `property_maxprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `property_pic`, `property_pic1`, `property_pic2`, `property_pic3`, `property_name`, `property_vid`, `property_location`, `property_map`, `property_type`, `property_space`, `bedrooms`, `bathrooms`, `garages`, `property_amenities`, `property_description`, `property_price`, `property_maxprice`) VALUES
(1, 'properties/Cavite/Ardia Vermosa/Ardia Vermosa.jpg', 'properties/Cavite/Ardia Vermosa/pic1.jpg', 'properties/Cavite/Ardia Vermosa/pic2.jpg', 'properties/Cavite/Ardia Vermosa/pic3.jpg', 'Ardia Vermosa', 'https://www.youtube.com/embed/zsvawE5LzDM', 'Vermosa, Imus, Cavite', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7729.573689600217!2d120.95173675798361!3d14.381741157843383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d399945fc4e7%3A0x9c861bfdb99ea317!2sArdia+Vermosa!5e0!3m2!1sen!2sph!4v1538324973189', 'Lot', '267 to 520 sqm', 0, 0, 0, 'Clubhouse, Lap Pool, Kiddie Pool, Basketball Court, Play Area, Jogging Trail, Multi-purpose Field, Pocket Parks', 'Ardia Vermosa is Alveo Land’s stand-alone upscale community that aims to rejuvenate the mind and body of its residents inside the emerging self-sustaining estate in Cavite.', 7717000, 15052000),
(2, 'properties/Cavite/Westborough/Westborough.jpg', 'properties/Cavite/Westborough/pic1.jpg', 'properties/Cavite/Westborough/pic2.jpg', 'properties/Cavite/Westborough/pic3.jpg', 'Westborough', 'https://www.youtube.com/embed/uCKLn41cfCw', 'Barangay Inchican, Silang, Cavite', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15468.1080980409!2d121.0471267!3d14.251646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd7d1325e5bf0f%3A0xc9e5e516f746c03d!2sSouth+Forbes!5e0!3m2!1sen!2sph!4v1538643269462', 'Lot', '300 to 2600 sqm', 0, 0, 0, 'Full-scale Supermarket, Local Cafes and Restaurants, International Dining Establishments, Fitness Center, Entertainment Venues, Jogging Path, Bike Route', 'A joint venture of Alveo Land and Cathay Land, Westborough is envisioned to become the preferred destination for urban lifestyle essentials in the South. A prime spot for shopping, dining, business, and relaxation, it\'s a breath of fresh air with up to 40% of the land area dedicated to open spaces. Westborough will capture Southern living at its finest: breezy and leisurely, yet distinctly modern and dynamic at the same time.', 6600000, 76000000),
(3, 'properties/Cebu/BPI Cebu Corporate Center/BPI Cebu Corporate Center.jpg', 'properties/Cebu/BPI Cebu Corporate Center/pic1.jpg', 'properties/Cebu/BPI Cebu Corporate Center/pic2.jpg', 'properties/Cebu/BPI Cebu Corporate Center/pic3.jpg', 'BPI Cebu Corporate Center', 'https://www.youtube.com/embed/zBxxzKcLP6U', 'Cebu Business Park, Mindanao Ave., Cebu City', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1962.6529442952924!2d123.9017191!3d10.3173866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9993f3341dd15%3A0x19bd860b28cea871!2sBPI+Cebu+Corporate+Center!5e0!3m2!1sen!2sph!4v1538644829358', 'Condominium', '68 to 143 sqm', 0, 0, 0, 'Schools such as Cebu Global Language School and others, Hospitals like DR. K Dental Clinic, Zeel International Store, Restaurants such as Ngohiong Express, Active Zone Shopping Center', 'Providing a unique working and living space, BPI Cebu Corporate Center is no doubt the best condominium that has changed the face of Cebu City and its environs. As an iconic tower that seeks to meet the needs of businesses and individuals, this great property offers the best environment that reflects the desires of investors in this time and era when condo living is entirely in a new level. Indeed, it’s the best place to buy an office or living space that meets the industry standards.', 8100000, 16000000),
(4, 'properties\\Cebu\\Solinea\\Solinea.jpg', 'properties\\Cebu\\Solinea\\pic1.jpg', 'properties\\Cebu\\Solinea\\pic2.jpg', 'properties\\Cebu\\Solinea\\pic3.jpg', 'Solinea', 'https://www.youtube.com/embed/d9-YPaJWyMQ', 'Block 11, Cardinal Rosales Ave., Cebu City', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7850.622834413604!2d123.9028372!3d10.3169433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9993f81f0ecb7%3A0xde9811cab25bf76!2sSolinea+Tower+two!5e0!3m2!1sen!2sph!4v1538647205995', 'Condominium', '32 to 148 sqm', 0, 0, 0, 'Landscape Parks, Green Open Spaces, Play Areas, Garden Decks, An expansive luxurious swimming pool, A central clubhouse with a gym', 'The Solinea Place is a high-rise residential community development, primarily condo units occupying 2.6 hectares of prime property in the middle of the energetic city. The project is a resort inspired community in a quiet neighborhood with amenities typical of a nature reserve where green surroundings highlight the backdrop. The development offers a balanced living between a fast-paced locality set against a verdant and relaxing sanctuary.', 3800000, 19100000),
(5, 'properties\\Cebu\\Sedona Parc\\Sedona Parc.jpg', NULL, NULL, NULL, 'Sedona Parc', 'https://www.youtube.com/embed/jajn62_xQB0', 'Leyte Loop, Cebu City', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.3378286936127!2d123.9066956147967!3d10.31482529263574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9996aba68a59d%3A0xd3d95d8ab4a345e6!2sSedona+Parc+By+Alveo!5e0!3m2!1sen!2sph!4v1538647997477', 'Condominium', '269 to 541 sqm', 0, 0, 0, '5 Podium Parking Levels, 2 Passenger Elevators, Automatic Sprinkler and Smoke Detection Systems, Water Reservoir and Separate Fire Reserves, Rainwater Collection System, Natural Ventilation, Sanitary Disposal System - Refuse Rooms, Maintenance by Ayala Property Management Corporation, 24-hour Security, Designer Lobby, Private Lounge - 61 sq.m. nook for intimate gatherings, Fitness Gym - 48 sq.m., Function Room - 73 sq.m. - opening up to pool area, Swimming Pool - 3 lanes and 20 metersin length, Roof Deck - 371 sq.m., Park - n extension of the building\'s amenities', 'Sedona Parc is being hailed as the new, stylish oasis in the heart of Cebu City. Sedona Parc, a development by Alveo Land development, is a residential condominium comprising of 114 units designed for an upscale lifestyle in a highly-accessible park-side, tranquil setting.', 3000000, 16000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
