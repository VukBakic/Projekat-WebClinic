-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2021 at 03:56 AM
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
(17, 2),
(38, 2),
(47, 5);

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
(1, '$2y$10$EXAPFeRbjhE1E/HnQ0dxI.rezdBaEOkVMhffn/wZ3Qm7kYDISo1wa', 'Vuk', 'Bakic', 'bakic.vuk@gmail.com', '1234567891011', '123456789101', 'm', '0640645657', 3),
(2, '$2y$10$ePWa4OBsbXE.EESg6VVhmuzwIewIMUjo/PuXgRHEwbPtOp2NSV0fG', 'Nemanja', 'Nemanjic', 'nemanja@webclinic.com', '5395596237196', '539559623719', 'm', '063123123', 2),
(3, '$2y$10$ePWa4OBsbXE.EESg6VVhmuzwIewIMUjo/PuXgRHEwbPtOp2NSV0fG', 'Pera', 'Peric', 'pera.peric@webclinic.com', '0152626144195', '015262614419', 'm', '061999555', 2),
(4, '$2y$10$ePWa4OBsbXE.EESg6VVhmuzwIewIMUjo/PuXgRHEwbPtOp2NSV0fG', 'Marina', 'Marinovic', 'marina@webclinic.com', '4832324024090', '483232402409', 'z', '0691234567', 2),
(5, '$2y$10$ePWa4OBsbXE.EESg6VVhmuzwIewIMUjo/PuXgRHEwbPtOp2NSV0fG', 'Marko', 'Markovic', 'markovic@gmail.com', '9862013808924', '986201380892', 'm', '06123456789', 2),
(17, 'qUnB#tKYVXI', 'Vuk', 'Bakic', 'bakic.vuk1@gmail.com', '0901997710220', '12345678', 'm', '+381645656', 0),
(38, '$2y$10$6v3mD9P9W0cmAy0gb/Xe5eqO1bSipHlbg5N9.rwr/uAlWV51C0ODq', 'Vuk', 'Bakic', 'wapelo6049@geekale.com', '0901997710220', '12345678', 'm', '+381645656', 0),
(47, '$2y$10$g5JpRcJ0WEHksV/0UxVJeO4BOyzgPfhR/tmVfEkl.CneXOzPJkQTq', 'igor', 'dukic', 'dukicigor01@gmail.com', '1307991710000', '12345678', 'm', '0638925102', 0);

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
(3, 'Endokrinologija'),
(2, 'Opsta medicina'),
(5, 'Opsta medicina'),
(4, 'Pshijatrija');

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
  `idLekar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pitanjegost`
--

CREATE TABLE `pitanjegost` (
  `idPitanje` int(11) NOT NULL,
  `imeprezime` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pitanjeklijent`
--

CREATE TABLE `pitanjeklijent` (
  `idPitanje` int(11) NOT NULL,
  `idKlijent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pregled`
--

CREATE TABLE `pregled` (
  `idPregled` int(11) NOT NULL,
  `idLekar` int(11) NOT NULL,
  `jeOnline` tinyint(1) NOT NULL,
  `idKlijent` int(11) NOT NULL,
  `idTermin` int(11) NOT NULL
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
  `imeUsluge` varchar(20) NOT NULL,
  `nazivStruke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `imeUsluge` varchar(20) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `nazivStruke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`idPregled`,`idLekar`,`idKlijent`),
  ADD KEY `R_21` (`idLekar`),
  ADD KEY `R_23` (`idKlijent`),
  ADD KEY `R_24` (`idTermin`,`idLekar`);

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
  ADD KEY `R_41` (`imeUsluge`,`nazivStruke`);

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
  ADD PRIMARY KEY (`imeUsluge`,`nazivStruke`),
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
  MODIFY `idKlijent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `idK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pitanje`
--
ALTER TABLE `pitanje`
  MODIFY `idPitanje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pregled`
--
ALTER TABLE `pregled`
  MODIFY `idPregled` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stavkakartona`
--
ALTER TABLE `stavkakartona`
  MODIFY `idStavka` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `R_23` FOREIGN KEY (`idKlijent`) REFERENCES `klijent` (`idKlijent`),
  ADD CONSTRAINT `R_24` FOREIGN KEY (`idTermin`,`idLekar`) REFERENCES `termin` (`idTermin`, `idLekar`);

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
  ADD CONSTRAINT `R_41` FOREIGN KEY (`imeUsluge`,`nazivStruke`) REFERENCES `usluga` (`imeUsluge`, `nazivStruke`);

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
