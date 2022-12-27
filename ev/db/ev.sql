-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 11:52 AM
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
(1, '18BH002', 'KONA', 'HYUNDAI', 2018, 480, 'HATCHBACK', 1500, 'Y', 'The Hyundai Kona is a compact crossover SUV that was introduced in 2017. It is available with a choice of gasoline or electric powertrains, and it has received positive reviews for its stylish design, spacious interior, and good fuel efficiency. Standard features on the Kona include a touchscreen infotainment system, a rearview camera, and a suite of advanced safety technologies. The Kona is available in a range of trims, including the SE, SEL, Limited, and Ultimate, and it comes with a 5-year/60,000-mile basic warranty.\r\n', 'hyundaikona.webp'),
(2, '19BH010', 'NEXON EV', 'TATA', 2019, 310, 'SUV', 2000, 'Y', 'The Nexon EV is an all-electric compact SUV produced by Tata Motors. It was unveiled in December 2019 and is available in two different battery sizes: a standard 30.2 kWh battery pack and a long-range 41.5 kWh battery pack. The Nexon EV is powered by a single electric motor that produces up to 129 horsepower and has a range of up to 342 miles (550 km) on a single charge. It also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Nexon EV is a compact, all-electric SUV that offers a long driving range and a variety of advanced features.\r\n', 'nexonev.jpg'),
(3, '20BH004', 'COOPER SE', 'MINI', 2020, 180, 'HATCHBACK', 1500, 'Y', 'The Mini Cooper SE is an electric version of the Mini Cooper, a small hatchback car that is known for its sporty handling and unique style. The Mini Cooper SE features a electric powertrain that produces 181 horsepower and 199 pound-feet of torque, and it has a range of up to 110 miles on a single charge. It comes with a 7.4-kW onboard charger, and it can be charged using either a standard household outlet or a Level 2 charger. The Mini Cooper SE also comes with a range of standard features, including a 6.5-inch touchscreen infotainment system, a rearview camera, and advanced safety technologies. It is available in three trims: the Cooper SE, Cooper SE ALL4, and John Cooper Works GP.\r\n', 'minicooperse.jpeg'),
(4, '20BH009', 'TAYCAN', 'PORSCHE', 2020, 320, 'SPORTS', 3000, 'Y', 'The Porsche Taycan is an all-electric sports sedan produced by Porsche. It was unveiled in September 2019 and is available in two different battery sizes: a standard 79.2 kWh battery pack and a long-range 93.4 kWh battery pack. The Taycan is powered by two electric motors that produce up to 750 horsepower and has a 0-60 mph acceleration time of just 2.4 seconds. It also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Porsche Taycan is a high-performance, all-electric sports sedan that offers quick acceleration and a variety of advanced features.\r\n', 'porschetaycan.jpg'),
(5, '20BH012', 'BENZ EQB', 'MERCEDES', 2020, 425, 'SUV', 2000, 'Y', 'The Mercedes-Benz EQB is an all-electric compact crossover SUV produced by Mercedes-Benz. It is based on the brand\'s new Electric Vehicle Architecture (EVA) and was unveiled in April 2021. The EQB is available in two different battery sizes: a standard 66.5 kWh battery pack and a long-range 87.0 kWh battery pack. It is powered by a single electric motor that produces up to 302 horsepower and has a range of up to 358 miles (576 km) on a single charge. The EQB also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Mercedes-Benz EQB is a compact, all-electric crossover SUV that offers a long driving range and a variety of advanced features.\r\n', 'mercedeseqb.webp'),
(6, '21BH003', 'IONIQ 5', 'HYUNDAI', 2021, 480, 'HATCHBACK', 1500, 'Y', 'The Ioniq 5 is an all-electric crossover SUV produced by Hyundai Motor Group. It is the first vehicle to be based on Hyundai\'s new Electric-Global Modular Platform (E-GMP) and was unveiled in February 2021. The Ioniq 5 is available in two different battery sizes: a standard 58 kWh battery pack and a long-range 77.4 kWh battery pack. It is powered by a single electric motor that produces up to 215 horsepower or a dual-motor setup that produces up to 302 horsepower. The Ioniq 5 also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Ioniq 5 is a high-performance, all-electric crossover SUV that offers a long driving range, quick acceleration, and a variety of advanced features.\r\n', 'hyundaiioniq5.webp'),
(7, '21BH005', 'MODEL S', 'TESLA', 2021, 570, 'SEDAN', 2500, 'Y', 'The Tesla Model S is a luxury electric sedan that was introduced in 2012. It is available in a range of trims, including the Long Range, Plaid, and Plaid Plus, and it has a range of up to 402 miles on a single charge, depending on the trim. The Model S is powered by two electric motors that produce a combined output of up to 1,020 horsepower, and it can accelerate from 0 to 60 mph in as little as 2.4 seconds. It also comes with a range of advanced features, including a 17-inch touchscreen infotainment system, a rearview camera, and a suite of advanced safety technologies. The Model S comes with a 4-year/50,000-mile basic warranty and an 8-year/100,000-mile battery and drive unit warranty.\r\n', 'teslamodels.jpg'),
(8, '21BH006', 'I4', 'BMW', 2021, 490, 'SEDAN', 2500, 'Y', 'The BMW i4 is an all-electric sedan produced by BMW. It was unveiled in March 2021 and is based on the BMW Group\'s fifth-generation electric drivetrain technology. The i4 is available in two different battery sizes: a standard 80 kWh battery pack and an extended range 105 kWh battery pack. It is powered by a single electric motor that produces up to 516 horsepower and has a 0-60 mph acceleration time of just 4 seconds. The i4 also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the BMW i4 is a high-performance, all-electric sedan that offers quick acceleration and a variety of advanced features.\r\n', 'bmwi4.jpg'),
(9, '21BH011', 'ZS EV', 'MORRIS GARAGES', 2021, 445, 'SUV', 2000, 'Y', 'The MG ZS EV is an electric crossover SUV that was introduced in 2020. It is available in a range of trims, including the Excite, Exclusive, and Exclusive Plus, and it has a range of up to 262 miles on a single charge. The ZS EV is powered by a single electric motor that produces 141 horsepower and 291 pound-feet of torque, and it comes with a 44.5-kWh battery pack and a 50-kW fast-charging system. It also comes with a range of standard features, including a 7-inch touchscreen infotainment system, a rearview camera, and advanced safety technologies.\r\n', 'mgzsev.jpg'),
(10, '22BH001', 'EV 6', 'KIA', 2022, 700, 'HATCHBACK', 1500, 'Y', 'The Kia EV6 is an all-electric crossover SUV that features a long driving range, quick acceleration, and a variety of advanced features. It is available in two different battery sizes and is powered by either a single or dual electric motor. The EV6 also includes a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates.\r\n', 'kiaev6.jpg'),
(11, '22BH007', 'BENZ EQS', 'MERCEDES', 2022, 850, 'SEDAN', 2500, 'Y', 'The Mercedes-Benz EQS is an all-electric luxury sedan produced by Mercedes-Benz. It was unveiled in April 2021 and is based on the brand\'s new Electric Vehicle Architecture (EVA). The EQS is available in two different battery sizes: a standard 90 kWh battery pack and a long-range 107.8 kWh battery pack. It is powered by a single electric motor that produces up to 516 horsepower and has a 0-60 mph acceleration time of just 4.3 seconds. The EQS also features a variety of advanced driver assistance systems and connectivity features, such as a high-resolution touch screen display and over-the-air software updates. Overall, the Mercedes-Benz EQS is a high-performance, all-electric luxury sedan that offers quick acceleration and a variety of advanced features.\r\n', 'mercedeseqs.webp'),
(12, '22BH008', 'E-TRON GT', 'AUDI', 2022, 400, 'SPORTS', 3000, 'Y', 'The Audi e-tron GT is an electric sports sedan that was introduced in 2021. It is available in two trims: the e-tron GT and the RS e-tron GT. The e-tron GT is powered by two electric motors that produce a combined output of 469 horsepower and 464 pound-feet of torque, and it has a range of up to 238 miles on a single charge. The RS e-tron GT is even more powerful, with a combined output of 590 horsepower and 612 pound-feet of torque, and a slightly shorter range of up to 232 miles. Both trims come with a 93.4-kWh battery pack and a 350-kW fast-charging system, which allows for rapid charging at compatible charging stations. The e-tron GT also comes with a range of advanced features, including a 12.3-inch digital instrument cluster, a 10.1-inch touchscreen infotainment system, and a suite of advanced safety technologies.\r\n', 'audi.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`REGISTRATION_NUMBER`),
  ADD UNIQUE KEY `id` (`car_id`),
  ADD KEY `CARFK1` (`CAR_CATEGORY_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `CARFK1` FOREIGN KEY (`CAR_CATEGORY_NAME`) REFERENCES `car_category` (`CATEGORY_NAME`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
