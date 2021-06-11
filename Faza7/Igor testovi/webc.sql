-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2021 at 02:52 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webc`
--
CREATE DATABASE IF NOT EXISTS `webc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `webc`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fajl`
--

CREATE TABLE `fajl` (
  `putanja` varchar(256) DEFAULT NULL,
  `idFajl` int(11) NOT NULL,
  `ekstenzija` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klijent`
--

CREATE TABLE `klijent` (
  `idKlijent` int(11) NOT NULL,
  `izabraniLekar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klijent`
--

INSERT INTO `klijent` (`idKlijent`, `izabraniLekar`) VALUES
(9, 2),
(10, 2),
(11, 2),
(8, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `idK` int(11) NOT NULL,
  `sifra` varchar(200) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `jmbg` varchar(13) NOT NULL,
  `brLk` varchar(12) NOT NULL,
  `pol` char(1) NOT NULL,
  `brTel` varchar(20) NOT NULL,
  `idUloge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`idK`, `sifra`, `ime`, `prezime`, `email`, `jmbg`, `brLk`, `pol`, `brTel`, `idUloge`) VALUES
(1, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Petar', 'Petrovic', 'admin1@test.com', '1234567890001', '00000001', 'm', '061000001', 3),
(2, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Aleksa', 'Aleksic', 'lekar1@test.com', '1234567890002', '00000002', 'm', '061000002', 2),
(3, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Jovan', 'Jovanovic', 'lekar2@test.com', '1234567890003', '00000003', 'm', '061000003', 2),
(4, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Marina', 'Marinkovic', 'lekar3@test.com', '1234567890004', '00000004', 'z', '061000004', 2),
(5, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Aleksandra', 'Aleksandrovic', 'lekar4@test.com', '1234567890005', '00000005', 'z', '061000005', 2),
(6, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Ivana', 'Ivanovic', 'sluzbenik1@test.com', '1234567890006', '00000006', 'z', '061000006', 1),
(7, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Marko', 'Markovic', 'sluzbenik2@test.com', '1234567890007', '00000007', 'm', '061000007', 1),
(8, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Janko', 'Jankovic', 'klijent1@test.com', '1234567890008', '00000008', 'm', '061000008', 0),
(9, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Milos', 'Milosevic', 'klijent2@test.com', '1234567890009', '00000009', 'm', '061000008', 0),
(10, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Nikola', 'Nikolic', 'klijent3@test.com', '1234567890010', '00000010', 'm', '061000010', 0),
(11, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Nikolina', 'Nikolic', 'klijent4@test.com', '1234567890011', '00000011', 'z', '061000011', 0),
(12, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Ana', 'Anic', 'klijent5@test.com', '1234567890012', '00000012', 'z', '061000012', 0),
(13, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Vesna', 'Vesnic', 'klijent6@test.com', '1234567890013', '00000013', 'z', '061000013', 0),
(14, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Marija', 'Maric', 'klijent7@test.com', '1234567890014', '00000014', 'z', '061000014', 0),
(15, '$2y$10$1KTf2kgo1mYVVORXXgaL/.X6RsiNjn7Hqypq.IvzdcS.al6T4jiue', 'Danilo', 'Danilovic', 'klijent8@test.com', '1234567890015', '00000015', 'm', '061000015', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lekar`
--

CREATE TABLE `lekar` (
  `idLekar` int(11) NOT NULL,
  `nazivStruke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lekar`
--

INSERT INTO `lekar` (`idLekar`, `nazivStruke`) VALUES
(4, 'Endokrinologija'),
(3, 'Gastroenterologija'),
(2, 'Opsta medicina'),
(5, 'Opsta medicina');

-- --------------------------------------------------------

--
-- Table structure for table `linkovi`
--

CREATE TABLE `linkovi` (
  `id` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `idKorisnik` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pitanje`
--

CREATE TABLE `pitanje` (
  `idPitanje` int(11) NOT NULL,
  `odgovor` mediumtext,
  `nazivStruke` varchar(20) NOT NULL,
  `naslov` varchar(20) NOT NULL,
  `tekstPitanja` mediumtext NOT NULL,
  `idLekar` int(11) DEFAULT NULL,
  `datumvreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gostpitao` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitanje`
--

INSERT INTO `pitanje` (`idPitanje`, `odgovor`, `nazivStruke`, `naslov`, `tekstPitanja`, `idLekar`, `datumvreme`, `gostpitao`) VALUES
(1, '', 'Endokrinologija', 'Lorem ipsum dolor si', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis placerat turpis dapibus mollis feugiat. Vivamus in dui ligula. Ut vitae est et ante pretium vehicula.', NULL, '2021-06-10 15:33:49', 1),
(2, NULL, 'Opsta medicina', 'Praesent finibus', 'Praesent finibus libero vel turpis commodo malesuada. Nam vel diam dolor. Nulla facilisis sollicitudin elit, at ultricies est tincidunt eget. Aenean imperdiet felis pellentesque lectus sagittis, ut dictum augue sollicitudin. Praesent sollicitudin consequat ligula, sit amet scelerisque tortor scelerisque et.', NULL, '2021-06-10 15:33:52', 1),
(3, NULL, 'Opsta medicina', 'Aenean imperdiet', 'Aenean imperdiet felis pellentesque lectus sagittis, ut dictum augue sollicitudin. Praesent sollicitudin consequat ligula, sit amet scelerisque tortor scelerisque et?', NULL, '2021-06-10 15:31:53', 0),
(4, NULL, 'Hirurgija', 'Aliquam vel ', 'Aliquam vel convallis odio, eu euismod turpis. Vivamus ornare velit diam, ac ultricies lorem ultrices id. Curabitur molestie tellus sit amet posuere rhoncus?', NULL, '2021-06-10 15:31:53', 0),
(5, 'Donec pharetra vehicula mauris a dapibus. Sed congue rhoncus ante egestas dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis non bibendum est, a ultrices nunc. Sed condimentum nibh nibh, quis aliquet magna vehicula nec. Vestibulum interdum nisl nec vulputate porta.', 'Opsta medicina', 'In tempus ', 'In tempus erat arcu, at sagittis ligula volutpat id. Nam ac pellentesque leo, vitae tristique diam. Pellentesque in fermentum tellus.\r\n\r\n', 2, '2021-06-10 15:31:53', 0),
(7, NULL, 'Endokrinologija', 'Nulla feugiat', 'Praesent volutpat dui vel purus porttitor iaculis. Donec efficitur mi faucibus turpis pulvinar tempus nec luctus quam. Sed quis eros quis nibh pretium aliquet. In gravida mattis est. Nulla feugiat eros velit, ac bibendum ex sollicitudin vel. Aenean molestie at lectus aliquam vestibulum. ', NULL, '2021-06-10 15:31:53', 0),
(8, NULL, 'Radiologija', 'In nec scelerisque', 'In nec scelerisque nibh. Donec consequat interdum lectus non iaculis. Praesent commodo quam nisl, eu hendrerit lorem aliquam vitae. Aenean ut sem ac nibh commodo mollis. Nulla varius, libero sit amet efficitur suscipit, neque magna tincidunt est, nec iaculis ex quam ac tellus. Praesent ut scelerisque dolor.', NULL, '2021-06-10 15:31:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pitanjegost`
--

CREATE TABLE `pitanjegost` (
  `idPitanje` int(11) NOT NULL,
  `imeprezime` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitanjegost`
--

INSERT INTO `pitanjegost` (`idPitanje`, `imeprezime`, `email`) VALUES
(1, 'Marko', 'gost2@test.com'),
(2, 'Milos', 'gost1@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `pitanjeklijent`
--

CREATE TABLE `pitanjeklijent` (
  `idPitanje` int(11) NOT NULL,
  `idKlijent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pitanjeklijent`
--

INSERT INTO `pitanjeklijent` (`idPitanje`, `idKlijent`) VALUES
(3, 8),
(7, 10),
(4, 11),
(5, 13),
(8, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pregled`
--

CREATE TABLE `pregled` (
  `idPregled` int(11) NOT NULL,
  `idLekar` int(11) NOT NULL,
  `jeOnline` tinyint(1) NOT NULL,
  `idKlijent` int(11) NOT NULL,
  `vreme` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE `racun` (
  `idStavka` int(11) NOT NULL,
  `placeno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sadrzi`
--

CREATE TABLE `sadrzi` (
  `idStavka` int(11) NOT NULL,
  `idFajl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sluzbenik`
--

CREATE TABLE `sluzbenik` (
  `idSluzb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stavkakartona`
--

CREATE TABLE `stavkakartona` (
  `idStavka` int(11) NOT NULL,
  `idKlijent` int(11) NOT NULL,
  `pregledObavio` int(11) NOT NULL,
  `dijagnostika` mediumtext NOT NULL,
  `preporucenaTerapija` mediumtext NOT NULL,
  `internaNapomena` mediumtext,
  `imeUsluge` varchar(200) NOT NULL,
  `nazivStruke` varchar(20) NOT NULL,
  `datumvreme` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stavkakartona`
--

INSERT INTO `stavkakartona` (`idStavka`, `idKlijent`, `pregledObavio`, `dijagnostika`, `preporucenaTerapija`, `internaNapomena`, `imeUsluge`, `nazivStruke`, `datumvreme`) VALUES
(1, 8, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis placerat turpis dapibus mollis feugiat. Vivamus in dui ligula. Ut vitae est et ante pretium vehicula. Praesent finibus libero vel turpis commodo malesuada. Nam vel diam dolor. Nulla facilisis sollicitudin elit, at ultricies est tincidunt eget. Aenean imperdiet felis pellentesque lectus sagittis, ut dictum augue sollicitudin. Praesent sollicitudin consequat ligula, sit amet scelerisque tortor scelerisque et. Aliquam vel convallis odio, eu euismod turpis. Vivamus ornare velit diam, ac ultricies lorem ultrices id.', 'Curabitur molestie tellus sit amet posuere rhoncus. ', 'In tempus erat arcu, at sagittis ligula volutpat id. Nam ac pellentesque leo, vitae tristique diam. Pellentesque in fermentum tellus.', 'Pregled lekara opste prakse', 'Opsta medicina', '2021-06-08 18:39:22'),
(2, 8, 5, 'Donec pharetra vehicula mauris a dapibus. Sed congue rhoncus ante egestas dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis non bibendum est, a ultrices nunc. Sed condimentum nibh nibh, quis aliquet magna vehicula nec. Vestibulum interdum nisl nec vulputate porta. ', 'Phasellus aliquet justo ac urna rhoncus tincidunt. Donec feugiat, tortor id consectetur pharetra, lacus nisl fringilla magna, ut aliquam purus turpis eu diam.', NULL, 'Pregled lekara opste prakse', 'Opsta medicina', '2021-06-08 18:39:32'),
(3, 8, 3, 'Fusce ultrices purus ut venenatis tincidunt. Nulla id dictum mauris. Nulla massa leo, consequat ut enim et, blandit posuere diam. Aliquam nec lacus ipsum. Aenean sapien sem, elementum a blandit quis, laoreet et orci. Vestibulum tincidunt neque massa, sed tincidunt ipsum eleifend euismod. Etiam eget tortor et mi venenatis consectetur in vitae eros. Sed interdum vestibulum commodo. Nam cursus fermentum orci, at rhoncus arcu auctor non. Etiam bibendum tincidunt tortor, vel maximus augue. Sed mollis at orci non egestas. Ut tempus, lorem vitae mollis placerat, ante nibh ultricies enim, nec commodo nisi diam sit amet massa. Morbi a ornare mauris, in suscipit felis. ', 'Morbi et eros vel magna semper vulputate. ', 'Mauris eget dolor at lacus rutrum semper.', 'Pregled gastroenterologa', 'Gastroenterologija', '2021-06-07 18:39:43'),
(4, 9, 2, 'Fusce ultrices purus ut venenatis tincidunt. Nulla id dictum mauris. Nulla massa leo, consequat ut enim et, blandit posuere diam. Aliquam nec lacus ipsum. Aenean sapien sem, elementum a blandit quis, laoreet et orci. Vestibulum tincidunt neque massa, sed tincidunt ipsum eleifend euismod. Etiam eget tortor et mi venenatis consectetur in vitae eros. Sed interdum vestibulum commodo. Nam cursus fermentum orci, at rhoncus arcu auctor non. Etiam bibendum tincidunt tortor, vel maximus augue. Sed mollis at orci non egestas. Ut tempus, lorem vitae mollis placerat, ante nibh ultricies enim, nec commodo nisi diam sit amet massa. Morbi a ornare mauris, in suscipit felis. ', 'Morbi et eros vel magna semper vulputate. ', 'Mauris eget dolor at lacus rutrum semper.', 'Sistematski pregled', 'Opsta medicina', '2021-06-02 18:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `struka`
--

CREATE TABLE `struka` (
  `nazivStruke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struka`
--

INSERT INTO `struka` (`nazivStruke`) VALUES
('Dermatologija'),
('Endokrinologija'),
('Gastroenterologija'),
('Ginekologija'),
('Hematologija'),
('Hirurgija'),
('Kardiologija'),
('Laboratorija'),
('Neurologija'),
('Neuropsihijatrija'),
('Oftalmologija'),
('Opsta medicina'),
('Ortopedija'),
('Pshijatrija'),
('Radiologija'),
('Urologija');

-- --------------------------------------------------------

--
-- Table structure for table `termin`
--

CREATE TABLE `termin` (
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vreme` time NOT NULL,
  `idTermin` int(11) NOT NULL,
  `idLekar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uloge`
--

CREATE TABLE `uloge` (
  `idUloge` int(11) NOT NULL,
  `nazivUloge` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uloge`
--

INSERT INTO `uloge` (`idUloge`, `nazivUloge`) VALUES
(0, 'Klijent'),
(1, 'Sluzbenik'),
(2, 'Lekar'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `usluga`
--

CREATE TABLE `usluga` (
  `imeUsluge` varchar(200) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `nazivStruke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usluga`
--

INSERT INTO `usluga` (`imeUsluge`, `cena`, `nazivStruke`) VALUES
('Hormonalni panel', '9000.00', 'Laboratorija'),
('Liposukcija', '12000.00', 'Hirurgija'),
('Pregled gastroenterologa', '7000.00', 'Gastroenterologija'),
('Pregled lekara opste prakse', '3000.00', 'Opsta medicina'),
('Pregled Neuropsihijatra', '8000.00', 'Neuropsihijatrija'),
('Pregled Oftalmologa', '4000.00', 'Oftalmologija'),
('Pregled ortopeda', '5000.00', 'Ortopedija'),
('Pregled psihijatra', '6500.00', 'Pshijatrija'),
('Sistematski pregled', '4000.00', 'Opsta medicina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `fajl`
--
ALTER TABLE `fajl`
  ADD PRIMARY KEY (`idFajl`);

--
-- Indexes for table `klijent`
--
ALTER TABLE `klijent`
  ADD PRIMARY KEY (`idKlijent`),
  ADD KEY `R_9` (`izabraniLekar`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`idK`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `Uloga` (`idUloge`);

--
-- Indexes for table `lekar`
--
ALTER TABLE `lekar`
  ADD PRIMARY KEY (`idLekar`),
  ADD KEY `R_19` (`nazivStruke`);

--
-- Indexes for table `linkovi`
--
ALTER TABLE `linkovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LinkKorisnik` (`idKorisnik`);

--
-- Indexes for table `pitanje`
--
ALTER TABLE `pitanje`
  ADD PRIMARY KEY (`idPitanje`),
  ADD KEY `R_33` (`nazivStruke`),
  ADD KEY `R_40` (`idLekar`);

--
-- Indexes for table `pitanjegost`
--
ALTER TABLE `pitanjegost`
  ADD PRIMARY KEY (`idPitanje`);

--
-- Indexes for table `pitanjeklijent`
--
ALTER TABLE `pitanjeklijent`
  ADD PRIMARY KEY (`idPitanje`),
  ADD KEY `R_36` (`idKlijent`);

--
-- Indexes for table `pregled`
--
ALTER TABLE `pregled`
  ADD PRIMARY KEY (`idPregled`) USING BTREE,
  ADD KEY `R_23` (`idKlijent`),
  ADD KEY `R_24` (`idLekar`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
  ADD PRIMARY KEY (`idStavka`);

--
-- Indexes for table `sadrzi`
--
ALTER TABLE `sadrzi`
  ADD PRIMARY KEY (`idStavka`,`idFajl`),
  ADD KEY `R_39` (`idFajl`);

--
-- Indexes for table `sluzbenik`
--
ALTER TABLE `sluzbenik`
  ADD PRIMARY KEY (`idSluzb`);

--
-- Indexes for table `stavkakartona`
--
ALTER TABLE `stavkakartona`
  ADD PRIMARY KEY (`idStavka`),
  ADD KEY `R_16` (`idKlijent`),
  ADD KEY `R_17` (`pregledObavio`),
  ADD KEY `R_41` (`imeUsluge`,`nazivStruke`),
  ADD KEY `R_42` (`nazivStruke`);

--
-- Indexes for table `struka`
--
ALTER TABLE `struka`
  ADD PRIMARY KEY (`nazivStruke`);

--
-- Indexes for table `termin`
--
ALTER TABLE `termin`
  ADD PRIMARY KEY (`idTermin`,`idLekar`),
  ADD KEY `R_25` (`idLekar`);

--
-- Indexes for table `uloge`
--
ALTER TABLE `uloge`
  ADD PRIMARY KEY (`idUloge`);

--
-- Indexes for table `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`imeUsluge`) USING BTREE,
  ADD KEY `R_22` (`nazivStruke`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fajl`
--
ALTER TABLE `fajl`
  MODIFY `idFajl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klijent`
--
ALTER TABLE `klijent`
  MODIFY `idKlijent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `idK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `linkovi`
--
ALTER TABLE `linkovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pitanje`
--
ALTER TABLE `pitanje`
  MODIFY `idPitanje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pregled`
--
ALTER TABLE `pregled`
  MODIFY `idPregled` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stavkakartona`
--
ALTER TABLE `stavkakartona`
  MODIFY `idStavka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `termin`
--
ALTER TABLE `termin`
  MODIFY `idTermin` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `R_6` FOREIGN KEY (`idAdmin`) REFERENCES `korisnik` (`idK`) ON DELETE CASCADE;

--
-- Constraints for table `klijent`
--
ALTER TABLE `klijent`
  ADD CONSTRAINT `R_4` FOREIGN KEY (`idKlijent`) REFERENCES `korisnik` (`idK`) ON DELETE CASCADE,
  ADD CONSTRAINT `R_9` FOREIGN KEY (`izabraniLekar`) REFERENCES `lekar` (`idLekar`);

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `Uloga` FOREIGN KEY (`idUloge`) REFERENCES `uloge` (`idUloge`);

--
-- Constraints for table `lekar`
--
ALTER TABLE `lekar`
  ADD CONSTRAINT `R_19` FOREIGN KEY (`nazivStruke`) REFERENCES `struka` (`nazivStruke`),
  ADD CONSTRAINT `R_8` FOREIGN KEY (`idLekar`) REFERENCES `korisnik` (`idK`) ON DELETE CASCADE;

--
-- Constraints for table `linkovi`
--
ALTER TABLE `linkovi`
  ADD CONSTRAINT `LinkKorisnik` FOREIGN KEY (`idKorisnik`) REFERENCES `korisnik` (`idK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pitanje`
--
ALTER TABLE `pitanje`
  ADD CONSTRAINT `R_33` FOREIGN KEY (`nazivStruke`) REFERENCES `struka` (`nazivStruke`),
  ADD CONSTRAINT `R_40` FOREIGN KEY (`idLekar`) REFERENCES `lekar` (`idLekar`);

--
-- Constraints for table `pitanjegost`
--
ALTER TABLE `pitanjegost`
  ADD CONSTRAINT `R_35` FOREIGN KEY (`idPitanje`) REFERENCES `pitanje` (`idPitanje`) ON DELETE CASCADE;

--
-- Constraints for table `pitanjeklijent`
--
ALTER TABLE `pitanjeklijent`
  ADD CONSTRAINT `R_34` FOREIGN KEY (`idPitanje`) REFERENCES `pitanje` (`idPitanje`) ON DELETE CASCADE,
  ADD CONSTRAINT `R_36` FOREIGN KEY (`idKlijent`) REFERENCES `klijent` (`idKlijent`);

--
-- Constraints for table `pregled`
--
ALTER TABLE `pregled`
  ADD CONSTRAINT `R_21` FOREIGN KEY (`idLekar`) REFERENCES `lekar` (`idLekar`),
  ADD CONSTRAINT `R_23` FOREIGN KEY (`idKlijent`) REFERENCES `klijent` (`idKlijent`);

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
  ADD CONSTRAINT `R_31` FOREIGN KEY (`idStavka`) REFERENCES `stavkakartona` (`idStavka`);

--
-- Constraints for table `sadrzi`
--
ALTER TABLE `sadrzi`
  ADD CONSTRAINT `R_38` FOREIGN KEY (`idStavka`) REFERENCES `stavkakartona` (`idStavka`),
  ADD CONSTRAINT `R_39` FOREIGN KEY (`idFajl`) REFERENCES `fajl` (`idFajl`);

--
-- Constraints for table `sluzbenik`
--
ALTER TABLE `sluzbenik`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`idSluzb`) REFERENCES `korisnik` (`idK`) ON DELETE CASCADE;

--
-- Constraints for table `stavkakartona`
--
ALTER TABLE `stavkakartona`
  ADD CONSTRAINT `R_16` FOREIGN KEY (`idKlijent`) REFERENCES `klijent` (`idKlijent`),
  ADD CONSTRAINT `R_17` FOREIGN KEY (`pregledObavio`) REFERENCES `lekar` (`idLekar`),
  ADD CONSTRAINT `R_41` FOREIGN KEY (`imeUsluge`) REFERENCES `usluga` (`imeUsluge`),
  ADD CONSTRAINT `R_42` FOREIGN KEY (`nazivStruke`) REFERENCES `struka` (`nazivStruke`);

--
-- Constraints for table `termin`
--
ALTER TABLE `termin`
  ADD CONSTRAINT `R_25` FOREIGN KEY (`idLekar`) REFERENCES `lekar` (`idLekar`);

--
-- Constraints for table `usluga`
--
ALTER TABLE `usluga`
  ADD CONSTRAINT `R_22` FOREIGN KEY (`nazivStruke`) REFERENCES `struka` (`nazivStruke`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
