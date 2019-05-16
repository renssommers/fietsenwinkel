-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 09:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgoossens_chaingang`
--

-- --------------------------------------------------------

--
-- Table structure for table `acties`
--

CREATE TABLE `acties` (
  `actie_id` int(11) NOT NULL,
  `actie_naam` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_prijs` int(11) NOT NULL,
  `medewerker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bestellingen`
--

CREATE TABLE `bestellingen` (
  `bestelling_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `klant_id` int(11) NOT NULL,
  `bestelling_bedrag` int(11) NOT NULL,
  `bestelling_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `klant_id` int(11) NOT NULL,
  `klant_voornaam` varchar(255) NOT NULL,
  `klant_achternaam` varchar(255) NOT NULL,
  `klant_geslacht` varchar(255) NOT NULL,
  `klant_email` varchar(255) NOT NULL,
  `klant_telefoon` varchar(255) NOT NULL,
  `klant_straat` varchar(255) NOT NULL,
  `klant_huisnr` int(11) NOT NULL,
  `klant_postcode` varchar(255) NOT NULL,
  `klant_plaats` varchar(255) NOT NULL,
  `klant_username` varchar(255) NOT NULL,
  `klant_wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medewerkers`
--

CREATE TABLE `medewerkers` (
  `medewerker_id` int(11) NOT NULL,
  `medewerker_voornaam` varchar(255) NOT NULL,
  `medewerker_achternaam` varchar(255) NOT NULL,
  `medewerker_email` varchar(255) NOT NULL,
  `medewerker_telefoon` varchar(255) NOT NULL,
  `medewerker_username` varchar(255) NOT NULL,
  `medewerker_wachtwoord` varchar(255) NOT NULL,
  `medewerker_rol` varchar(255) NOT NULL,
  `medewerker_geslacht` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nieuwsbrief`
--

CREATE TABLE `nieuwsbrief` (
  `nieuwsbrief_id` int(11) NOT NULL,
  `nieuwsbrief_email` varchar(255) NOT NULL,
  `klant_email` varchar(255) NOT NULL,
  `klant_id` int(11) NOT NULL,
  `klant_voornaam` varchar(255) NOT NULL,
  `klant_geslacht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `product_id` int(11) NOT NULL,
  `product_naam` varchar(255) NOT NULL,
  `product_merk` varchar(255) NOT NULL,
  `product_categorie` varchar(255) NOT NULL,
  `product_kleur` tinyint(1) NOT NULL,
  `product_prijs` varchar(255) NOT NULL,
  `product_omschrijving` text NOT NULL,
  `product_specificaties` text NOT NULL,
  `product_fotos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `review_titel` varchar(255) NOT NULL,
  `review_beschrijving` text NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `klant_id` int(11) NOT NULL,
  `bestelling_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_naam` varchar(255) NOT NULL,
  `klant_voornaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acties`
--
ALTER TABLE `acties`
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `product_prijs` (`product_prijs`),
  ADD UNIQUE KEY `medewerker_id` (`medewerker_id`);

--
-- Indexes for table `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD UNIQUE KEY `bestelling_id` (`bestelling_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `klant_id` (`klant_id`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD UNIQUE KEY `klant_id` (`klant_id`),
  ADD UNIQUE KEY `klant_voornaam` (`klant_voornaam`),
  ADD UNIQUE KEY `klant_geslacht` (`klant_geslacht`),
  ADD UNIQUE KEY `klant_email` (`klant_email`);

--
-- Indexes for table `medewerkers`
--
ALTER TABLE `medewerkers`
  ADD UNIQUE KEY `medewerker_id` (`medewerker_id`);

--
-- Indexes for table `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  ADD UNIQUE KEY `nieuwsbrief_id` (`nieuwsbrief_id`),
  ADD UNIQUE KEY `klant_email` (`klant_email`),
  ADD UNIQUE KEY `klant_id` (`klant_id`),
  ADD UNIQUE KEY `klant_voornaam` (`klant_voornaam`),
  ADD UNIQUE KEY `klant_geslacht` (`klant_geslacht`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `product_naam` (`product_naam`),
  ADD UNIQUE KEY `product_prijs` (`product_prijs`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD UNIQUE KEY `klant_id` (`klant_id`),
  ADD UNIQUE KEY `bestelling_id` (`bestelling_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `product_naam` (`product_naam`),
  ADD UNIQUE KEY `klant_voornaam` (`klant_voornaam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
