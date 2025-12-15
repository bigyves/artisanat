-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2025 at 05:51 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artisanat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `IDCAT` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `ETAT` int(11) NOT NULL,
  `DAT_DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CL_ID` int(11) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `DATECREATION` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `COM_ID` int(11) NOT NULL,
  `NUM` varchar(255) NOT NULL,
  `PRIXT` double NOT NULL,
  `IDCLI` int(11) NOT NULL,
  `IDPERS` int(11) NOT NULL,
  `ETAT` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `IDFO` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `ETAT` int(11) NOT NULL,
  `DAT_DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `ID_FOURN` int(11) NOT NULL,
  `NIF` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `DATECREATION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `IDPERS` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `TEL` varchar(255) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `ETAT` varchar(20) NOT NULL,
  `NIV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `IDPERS` int(11) NOT NULL,
  `ADRESSE` varchar(255) NOT NULL,
  `DATECREATION` datetime NOT NULL,
  `IDFONC` int(11) NOT NULL,
  `MAIL` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodcommande`
--

CREATE TABLE `prodcommande` (
  `PROD_ID` int(11) NOT NULL,
  `PRIXT` double NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `IDPROD` int(11) NOT NULL,
  `IDCOM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodenregistre`
--

CREATE TABLE `prodenregistre` (
  `PROD_ID_ENR` int(11) NOT NULL,
  `PRIXT` double NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `IDPROD` int(11) NOT NULL,
  `IDPERS` int(11) NOT NULL,
  `PRODUIT_DOU` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `PRODUIT_ID` int(11) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `PRIXACHAT` varchar(255) NOT NULL,
  `PRIXVENTE` varchar(255) NOT NULL,
  `PROMO` double NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `CODE` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PRODUIT_DOU` datetime NOT NULL,
  `IDCAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`PRODUIT_ID`, `DESIGNATION`, `PRIXACHAT`, `PRIXVENTE`, `PROMO`, `QUANTITE`, `CODE`, `IMAGE`, `DESCRIPTION`, `PRODUIT_DOU`, `IDCAT`) VALUES
(1, 'Decoration Noel', '87000', '90000', 0, 5, '4562', '9.jpeg', 'Below is an example of a basic card with mixed content and a fixed width', '2025-12-11 19:43:11', 1),
(2, 'elephant', '87000', '90000', 0, 5, '202014', '8.jpeg', 'Below is an example of a basic card with mixed content and a fixed width', '2025-12-11 20:03:12', 3),
(3, 'lion en bois', '150000', '250000', 180000, 56, '251dcc12', '7.jpeg', 'Below is an example of a basic card with mixed content and a fixed width', '2025-12-11 22:08:15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `produitfournis`
--

CREATE TABLE `produitfournis` (
  `FRNTURE_ID` int(11) UNSIGNED NOT NULL,
  `IDFRNISEUR` int(11) NOT NULL,
  `PROD_ID` int(11) DEFAULT NULL,
  `DATERCREATION` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IDCAT`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`ID_FOURN`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`PRODUIT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IDCAT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `PRODUIT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
