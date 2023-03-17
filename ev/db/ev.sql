-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 01:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `EMAIL_ID` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`EMAIL_ID`, `PASSWORD`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `BILL_ID` int(11) NOT NULL,
  `DL_NUM` varchar(10) NOT NULL,
  `NAME` varchar(30) DEFAULT NULL,
  `BOOKING_ID` int(11) NOT NULL,
  `BILL_DATE` date NOT NULL,
  `MODEL_NAME` varchar(30) DEFAULT NULL,
  `FROM_DATE` date DEFAULT NULL,
  `TO_DATE` date DEFAULT NULL,
  `NO_OF_DAYS` int(11) NOT NULL,
  `CPD` int(11) DEFAULT NULL,
  `PICK_LOC` char(30) DEFAULT NULL,
  `DROP_LOC` char(30) DEFAULT NULL,
  `GROSS_TOTAL` int(11) NOT NULL,
  `TOTAL_AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing_details`
--
--
--

INSERT INTO `billing_details` (`BILL_ID`, `DL_NUM`, `NAME`, `BOOKING_ID`, `BILL_DATE`, `MODEL_NAME`, `FROM_DATE`, `TO_DATE`, `NO_OF_DAYS`, `CPD`, `PICK_LOC`, `DROP_LOC`, `GROSS_TOTAL`, `TOTAL_AMOUNT`) VALUES
(22, 'SAAKA55', 'Saathvik M V', 35, '2022-12-31', 'BENZ EQS', '2022-12-31', '2023-01-02', 3, 2500, 'MALL OF MYSORE', 'MYSORE TARPAULINS', 7500, 8400),
(51, '123KA55', 'Adithya P Patel', 64, '2023-01-07', 'COOPER SE', '2023-01-07', '2023-01-08', 2, 1500, 'MYSORE TARPAULINS', 'VIDHANA SOUDHA', 3000, 3360),
(54, '123KA55', 'Adithya P Patel', 66, '2023-01-11', 'MODEL S', '2023-01-11', '2023-01-13', 3, 2500, 'MYSORE TARPAULINS', 'VIDHANA SOUDHA', 7500, 8400),
(56, '123KA55', 'Adithya P Patel', 68, '2023-01-11', 'I4', '2023-01-11', '2023-01-13', 3, 2500, 'VIDHANA SOUDHA', 'MALL OF MYSORE', 7500, 8400),
(60, '123KA55', 'Adithya P Patel', 72, '2023-01-20', 'TAYCAN', '2023-01-21', '2023-01-22', 2, 3000, 'Mane', 'Mane', 6000, 6720),
(61, 'SAAKA55', 'Saathvik M V', 86, '2023-01-21', 'NEXON EV', '2023-01-21', '2023-01-23', 3, 2000, 'MYSORE TARPAULINS', 'MYSORE TARPAULINS', 6000, 6720),
(74, '99999', 'adi p patel', 87, '2023-01-21', 'BENZ EQS', '2023-01-21', '2023-01-22', 2, 2500, 'VIDHANA SOUDHA', 'MYSORE TARPAULINS', 5000, 5600);

--
-- Triggers `billing_details`
--
DELIMITER $$
CREATE TRIGGER `delete_duplicate_booking` AFTER INSERT ON `billing_details` FOR EACH ROW BEGIN
    DELETE FROM billing_details
    WHERE BOOKING_ID = NEW.BOOKING_ID
    AND ID NOT IN (SELECT MIN(ID) FROM billing_details GROUP BY BOOKING_ID);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `BOOKING_ID` int(11) NOT NULL,
  `FROM_DT_TIME` date DEFAULT NULL,
  `RET_DT_TIME` date DEFAULT NULL,
  `AMOUNT` int(11) NOT NULL,
  `BOOKING_STATUS` char(1) NOT NULL,
  `PICKUP_LOC` char(4) NOT NULL,
  `DROP_LOC` char(4) NOT NULL,
  `REG_NUM` char(7) NOT NULL,
  `DL_NUM` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`BOOKING_ID`, `FROM_DT_TIME`, `RET_DT_TIME`, `AMOUNT`, `BOOKING_STATUS`, `PICKUP_LOC`, `DROP_LOC`, `REG_NUM`, `DL_NUM`) VALUES
(35, '2022-12-31', '2023-01-02', 2500, 'Y', 'MOM', 'DUR', '22BH007', 'SAAKA55'),
(64, '2023-01-07', '2023-01-08', 1500, 'Y', 'DUR', 'VDS', '20BH004', '123KA55'),
(66, '2023-01-11', '2023-01-13', 2500, 'Y', 'DUR', 'VDS', '21BH005', '123KA55'),
(68, '2023-01-11', '2023-01-13', 2500, 'Y', 'VDS', 'MOM', '21BH006', '123KA55'),
(72, '2023-01-21', '2023-01-22', 3000, 'Y', 'HOME', 'HOME', '20BH009', '123KA55'),
(86, '2023-01-21', '2023-01-23', 2000, 'Y', 'DUR', 'DUR', '19BH010', 'SAAKA55'),
(87, '2023-01-21', '2023-01-22', 2500, 'Y', 'VDS', 'DUR', '22BH007', '99999');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `REGISTRATION_NUMBER` char(7) NOT NULL,
  `MODEL_NAME` varchar(25) NOT NULL,
  `MAKE` varchar(25) NOT NULL,
  `MODEL_YEAR` int(11) NOT NULL,
  `CAR_RANGE` int(11) NOT NULL,
  `CAR_CATEGORY_NAME` varchar(25) NOT NULL,
  `COST_PER_DAY` int(11) NOT NULL,
  `AVAILABILITY_FLAG` char(1) NOT NULL,
  `CAR_DESCRIPTION` longtext NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `REGISTRATION_NUMBER`, `MODEL_NAME`, `MAKE`, `MODEL_YEAR`, `CAR_RANGE`, `CAR_CATEGORY_NAME`, `COST_PER_DAY`, `AVAILABILITY_FLAG`, `CAR_DESCRIPTION`, `image`) VALUES
(1, '18BH002', 'KONA', 'HYUNDAI', 2018, 480, 'HATCHBACK', 1500, 'Y', 'The Hyundai Kona is a compact crossover SUV that was introduced in 2017. It is available with a choice of gasoline or electric powertrains, and it has received positive reviews for its stylish design, spacious interior, and good fuel efficiency. Standard features on the Kona include a touchscreen infotainment system, a rearview camera, and a suite of advanced safety technologies. The Kona is available in a range of trims, including the SE, SEL, Limited, and Ultimate, and it comes with a 5-year/60,000-mile basic warranty.\r\n', 'hyundaikona.png'),
(2, '19BH010', 'NEXON EV', 'TATA', 2019, 310, 'MINI SUV', 2000, 'Y', 'The Nexon EV is an all-electric compact SUV produced by Tata Motors. It was unveiled in December 2019 and is available in two different battery sizes: a standard 30.2 kWh battery pack and a long-range 41.5 kWh battery pack. The Nexon EV is powered by a single electric motor that produces up to 129 horsepower and has a range of up to 342 miles (550 km) on a single charge. It also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Nexon EV is a compact, all-electric SUV that offers a long driving range and a variety of advanced features.\r\n', 'nexonev.jpg'),
(3, '20BH004', 'COOPER SE', 'MINI', 2020, 180, 'HATCHBACK', 1500, 'Y', 'The Mini Cooper SE is an electric version of the Mini Cooper, a small hatchback car that is known for its sporty handling and unique style. The Mini Cooper SE features a electric powertrain that produces 181 horsepower and 199 pound-feet of torque, and it has a range of up to 110 miles on a single charge. It comes with a 7.4-kW onboard charger, and it can be charged using either a standard household outlet or a Level 2 charger. The Mini Cooper SE also comes with a range of standard features, including a 6.5-inch touchscreen infotainment system, a rearview camera, and advanced safety technologies. It is available in three trims: the Cooper SE, Cooper SE ALL4, and John Cooper Works GP.\r\n', 'minicooperse.png'),
(4, '20BH009', 'TAYCAN', 'PORSCHE', 2020, 320, 'SPORTS', 3000, 'Y', 'The Porsche Taycan is an all-electric sports sedan produced by Porsche. It was unveiled in September 2019 and is available in two different battery sizes: a standard 79.2 kWh battery pack and a long-range 93.4 kWh battery pack. The Taycan is powered by two electric motors that produce up to 750 horsepower and has a 0-60 mph acceleration time of just 2.4 seconds. It also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Porsche Taycan is a high-performance, all-electric sports sedan that offers quick acceleration and a variety of advanced features.\r\n', 'porschetaycan.jpg'),
(5, '20BH012', 'BENZ EQB', 'MERCEDES', 2020, 425, 'SUV', 2000, 'Y', 'The Mercedes-Benz EQB is an all-electric compact crossover SUV produced by Mercedes-Benz. It is based on the brand\'s new Electric Vehicle Architecture (EVA) and was unveiled in April 2021. The EQB is available in two different battery sizes: a standard 66.5 kWh battery pack and a long-range 87.0 kWh battery pack. It is powered by a single electric motor that produces up to 302 horsepower and has a range of up to 358 miles (576 km) on a single charge. The EQB also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates.', 'mercedeseqb.png'),
(6, '21BH003', 'IONIQ 5', 'HYUNDAI', 2021, 480, 'HATCHBACK', 1500, 'Y', 'The Ioniq 5 is an all-electric crossover SUV produced by Hyundai Motor Group. It is the first vehicle to be based on Hyundai\'s new Electric-Global Modular Platform (E-GMP) and was unveiled in February 2021. The Ioniq 5 is available in two different battery sizes: a standard 58 kWh battery pack and a long-range 77.4 kWh battery pack. It is powered by a single electric motor that produces up to 215 horsepower or a dual-motor setup that produces up to 302 horsepower. The Ioniq 5 also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates.\r\n', 'hyundaiioniq5.png'),
(7, '21BH005', 'MODEL S', 'TESLA', 2021, 570, 'SEDAN', 2500, 'Y', 'The Tesla Model S is a luxury electric sedan that was introduced in 2012. It is available in a range of trims, including the Long Range, Plaid, and Plaid Plus, and it has a range of up to 402 miles on a single charge, depending on the trim. The Model S is powered by two electric motors that produce a combined output of up to 1,020 horsepower, and it can accelerate from 0 to 60 mph in as little as 2.4 seconds. It also comes with a range of advanced features, including a 17-inch touchscreen infotainment system, a rearview camera, and a suite of advanced safety technologies. The Model S comes with a 4-year/50,000-mile basic warranty and an 8-year/100,000-mile battery and drive unit warranty.\r\n', 'teslamodels.jpg'),
(8, '21BH006', 'I4', 'BMW', 2021, 490, 'SEDAN', 2500, 'Y', 'The BMW i4 is an all-electric sedan produced by BMW. It was unveiled in March 2021 and is based on the BMW Group\'s fifth-generation electric drivetrain technology. The i4 is available in two different battery sizes: a standard 80 kWh battery pack and an extended range 105 kWh battery pack. It is powered by a single electric motor that produces up to 516 horsepower and has a 0-60 mph acceleration time of just 4 seconds. The i4 also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the BMW i4 is a high-performance, all-electric sedan that offers quick acceleration and a variety of advanced features.\r\n', 'bmwi4.jpg'),
(9, '21BH011', 'ZS EV', 'MORRIS GARAGES', 2021, 445, 'MINI SUV', 2000, 'Y', 'The MG ZS EV is an electric crossover SUV that was introduced in 2020. It is available in a range of trims, including the Excite, Exclusive, and Exclusive Plus, and it has a range of up to 262 miles on a single charge. The ZS EV is powered by a single electric motor that produces 141 horsepower and 291 pound-feet of torque, and it comes with a 44.5-kWh battery pack and a 50-kW fast-charging system. It also comes with a range of standard features, including a 7-inch touchscreen infotainment system, a rearview camera, and advanced safety technologies.\r\n', 'mgzsev.jpg'),
(10, '22BH001', 'EV 6', 'KIA', 2022, 700, 'HATCHBACK', 1500, 'Y', 'The Kia EV6 is an all-electric crossover SUV that features a long driving range, quick acceleration, and a variety of advanced features. It is available in two different battery sizes and is powered by either a single or dual electric motor. The EV6 also includes a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates.\r\n', 'kiaev6.jpg'),
(11, '22BH007', 'BENZ EQS', 'MERCEDES', 2022, 850, 'SEDAN', 2500, 'Y', 'The Mercedes-Benz EQS is an all-electric luxury sedan produced by Mercedes-Benz. It was unveiled in April 2021 and is based on the brand\'s new Electric Vehicle Architecture (EVA). The EQS is available in two different battery sizes: a standard 90 kWh battery pack and a long-range 107.8 kWh battery pack. It is powered by a single electric motor that produces up to 516 horsepower and has a 0-60 mph acceleration time of just 4.3 seconds. The EQS also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Mercedes-Benz EQS is a high-performance, all-electric luxury sedan that offers quick acceleration and a variety of advanced features.\r\n', 'mercedeseqs.png'),
(12, '22BH008', 'E-TRON GT', 'AUDI', 2022, 400, 'SPORTS', 3000, 'Y', 'The Audi e-tron GT is an electric sports sedan that was introduced in 2021. It is available in two trims: the e-tron GT and the RS e-tron GT. The e-tron GT is powered by two electric motors that produce a combined output of 469 horsepower and 464 pound-feet of torque, and it has a range of up to 238 miles on a single charge. The RS e-tron GT is even more powerful, with a combined output of 590 horsepower and 612 pound-feet of torque, and a slightly shorter range of up to 232 miles. Both trims come with a 93.4-kWh battery pack and a 350-kW fast-charging system, which allows for rapid charging at compatible charging stations.\r\n', 'audi.png');

--
-- Triggers `car`
--
DELIMITER $$
CREATE TRIGGER `delete_car_id_0` AFTER INSERT ON `car` FOR EACH ROW BEGIN
    DELETE FROM car WHERE car_id = 0;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `car_category`
--

CREATE TABLE `car_category` (
  `CATEGORY_NAME` varchar(25) NOT NULL,
  `NO_OF_LUGGAGE` int(11) NOT NULL,
  `NO_OF_PERSON` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_category`
--

INSERT INTO `car_category` (`CATEGORY_NAME`, `NO_OF_LUGGAGE`, `NO_OF_PERSON`) VALUES
('HATCHBACK', 310, 5),
('MINI SUV', 370, 5),
('SEDAN', 425, 5),
('SPORTS', 180, 2),
('SUV', 580, 7);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Message`) VALUES
(1, 'aaa@gmail.com', 'Adithya', 'salfkasjvnaskjfnbkwjgfw'),
(345, 'adithya@gmail.com', 'Adithya', 'sdjffnsjf'),
(346, 'adithya@gmail.com', 'Adithya', 'sdjffnsjf'),
(347, 'sdsg@gmail.com', 'Adithyadfgfg', 'iugiobgiehg'),
(348, 'sdsg@gmail.com', 'Adithyadfgfg', 'iugiobgiehg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `EMAIL_ID` varchar(30) NOT NULL,
  `FNAME` varchar(25) NOT NULL,
  `MNAME` varchar(15) DEFAULT NULL,
  `LNAME` varchar(25) NOT NULL,
  `DL_NUMBER` char(8) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE_NAME` varchar(20) NOT NULL,
  `ZIPCODE` int(11) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`EMAIL_ID`, `FNAME`, `MNAME`, `LNAME`, `DL_NUMBER`, `PHONE_NUMBER`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`, `PASSWORD`) VALUES
('aaa@gmail.com', 'Adithya', 'P', 'Patel', '123KA55', 97317, 'LINK', 'Mysore', 'Kar', 570008, 'FFF'),
('sat@gmail.com', 'D', 'B', 'c', '123KAjsf', 9900, 'Randi', 'BKL', 'dkjfg', 89475, 'GGG'),
('adi@gmail.com', 'dkjkvfvn', 'djfgn', 'kdjdfnk', '539897', 4876, 'djffn', 'ljrjn', 'lskkvn', 6987, 'JJJ'),
('skjh@gmail.com', 'skdfjkfn', 'kjksnvk', 'kjnsddv', '678', 678, 'ksjdv', 'kjk', 'ksjdv', 9786, 'TTT'),
('dar@gmail.com', 'ksg', 'ksjdf', 'ksjdn', '8786', 789, 'slkdkfn', 'ljkjnln', 'ljjn', 897, 'DDD'),
('lll@gmail.com', 'l', 'l', 'l', '987', 789, 'l', 'l', 'l', 787, 'lund'),
('adithya@gmail.com', 'adi', 'p', 'patel', '99999', 99999, 'mane road', 'mane city', 'mane state', 570008, 'london'),
('abc@gmail.com', 'Saathvik', 'M', 'V', 'SAAKA55', 9880, 'Dattagalli', 'Mysore', 'KA', 570022, 'FFF');

-- --------------------------------------------------------

--
-- Table structure for table `location_details`
--

CREATE TABLE `location_details` (
  `LOCATION_ID` char(4) NOT NULL,
  `LOCATION_NAME` varchar(50) NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE_NAME` varchar(20) NOT NULL,
  `ZIPCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location_details`
--

INSERT INTO `location_details` (`LOCATION_ID`, `LOCATION_NAME`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`) VALUES
('DUR', 'MYSORE TARPAULINS', 'DD. URS ROAD', 'MYSORE', 'KARNATAKA', 570001),
('MOM', 'MALL OF MYSORE', 'MG ROAD', 'MYSORE', 'KARNATAKA', 570010),
('VDS', 'VIDHANA SOUDHA', 'AMBEDKAR BHEEDHI', 'BENGALURU', 'KARNATAKA', 560001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`EMAIL_ID`,`PASSWORD`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`BILL_ID`),
  ADD KEY `BILLINGFK1` (`BOOKING_ID`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`BOOKING_ID`),
  ADD KEY `BOOKINGFK1` (`PICKUP_LOC`),
  ADD KEY `BOOKINGFK2` (`DROP_LOC`),
  ADD KEY `BOOKINGFK3` (`REG_NUM`),
  ADD KEY `BOOKINGFK4` (`DL_NUM`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`REGISTRATION_NUMBER`),
  ADD UNIQUE KEY `id` (`car_id`),
  ADD KEY `CARFK1` (`CAR_CATEGORY_NAME`);

--
-- Indexes for table `car_category`
--
ALTER TABLE `car_category`
  ADD PRIMARY KEY (`CATEGORY_NAME`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`DL_NUMBER`),
  ADD UNIQUE KEY `EMAIL_ID` (`EMAIL_ID`);

--
-- Indexes for table `location_details`
--
ALTER TABLE `location_details`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `BILL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `BOOKING_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD CONSTRAINT `BILLINGFK1` FOREIGN KEY (`BOOKING_ID`) REFERENCES `booking_details` (`BOOKING_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
