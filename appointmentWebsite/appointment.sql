-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 07:24 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fullname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ic` varchar(20) CHARACTER SET latin1 NOT NULL,
  `emailaddress` varchar(50) CHARACTER SET latin1 NOT NULL,
  `phoneno` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fullname`, `ic`, `emailaddress`, `phoneno`, `gender`, `password`) VALUES
('Admin', '970110010008', 'admin@gmail.com', '0167896543', 'female', 'Admin@123'),
('Nurul Syuhadah Binti Said', '970101010882', 'adminNS@gmail.com', '0126789456', 'female', 'Nurul@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(250) NOT NULL,
  `emailaddress` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `treatmenttype` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `emailaddress`, `date`, `time`, `treatmenttype`, `status`) VALUES
(1, 'amiraasikn@gmail.com', '2023-03-20', '10:00:00', 'Teeth Whitening', 'Approved'),
(2, 'azim@gmail.com', '2023-03-28', '02:00:00', 'Minor Oral Surgery', 'Approved'),
(3, 'azim@gmail.com', '2023-03-30', '15:00:00', 'Examination and Consultation', 'Approved'),
(4, 'nuradlina0702@gmail.com', '2023-04-01', '13:00:00', 'Examination and Consultation', 'Approved'),
(5, 'nurulizzaty197@gmail.com', '2023-03-22', '12:05:00', 'Teeth Whitening', 'Rejected'),
(6, 'admin@gmail.com', '2023-03-21', '22:12:00', 'Scaling and Polishing', 'Approved'),
(7, 'noridahadam3@gmail.com', '2023-03-27', '15:00:00', 'Denture', 'Approved'),
(8, 'Andzirh07@gmail.com ', '2023-04-12', '14:00:00', 'Braces (Orthodontic)', 'Approved'),
(9, 'kpsyazwani@gmail.com', '2023-03-29', '14:11:00', 'Braces (Orthodontic)', 'Approved'),
(10, 'kpsyazwani@gmail.com', '2021-04-15', '14:30:00', 'Root Canal Treatment', ''),
(11, 'kpsyazwani@gmail.com', '2023-04-17', '10:30:00', 'Crown and Bridge', 'Approved'),
(12, 'addaayusoff@gmail.com', '1996-05-11', '14:00:00', 'Teeth Whitening', ''),
(13, 'salamahadam@gmail.com', '2023-02-20', '14:30:00', 'Scaling and Polishing', ''),
(14, 'arif@gmail.com', '2023-03-14', '10:00:00', 'Teeth Whitening', ''),
(15, 'ameerudeinn1@gmail.com', '2023-04-20', '15:30:00', 'Teeth Whitening', ''),
(16, 'Asimah@gmail.com', '2023-03-30', '08:30:00', 'Scaling and Polishing', ''),
(17, 'yusadam71@gmail.com', '2023-08-17', '14:00:00', 'Denture', ''),
(18, 'ainshahira@gmail.com', '2023-04-05', '14:00:00', 'Scaling and Polishing', ''),
(19, 'hafiz@gmail.com', '2023-03-30', '17:00:00', 'Crown and Bridge', ''),
(20, 'amiraasikn@gmail.com', '2023-03-20', '10:00:00', 'Teeth Whitening', ''),
(23, 'Test@gmail.com', '2023-03-30', '11:00:00', 'Teeth Whitening', ''),
(24, 'amiraasikn@gmail.com', '2023-03-20', '10:00:00', 'Select Treatment Type', ''),
(25, 'amiraasikn@gmail.com', '2023-03-20', '10:00:00', 'Tooth Extraction', ''),
(26, 'amiraasikn@gmail.com', '2023-03-20', '10:00:00', 'Select Treatment Type', ''),
(27, 'amiraasikn@gmail.com', '2023-03-20', '10:00:00', 'Tooth Filling', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `no` int(100) NOT NULL,
  `emailaddress` varchar(50) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`no`, `emailaddress`, `message`) VALUES
(1, 'amiraasikn@gmail.com', 'doctors and staff very friendly. I like !'),
(2, 'azim@gmail.com', 'good services and doctor very friendly.'),
(3, 'nuradlina0702@gmail.com', 'The website is pretty'),
(4, 'noridahadam3@gmail.com', 'Layanan ok'),
(5, 'Andzirh07@gmail.com ', 'Doctor and staff very friendly'),
(6, 'Test@gmail.com', 'Good Services'),
(7, 'amiraasikn@gmail.com', 'Services bagus');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `bil` int(100) NOT NULL,
  `treatmenttype` varchar(50) CHARACTER SET latin1 NOT NULL,
  `treatmentdesc` varchar(250) CHARACTER SET latin1 NOT NULL,
  `treatmentprice` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`bil`, `treatmenttype`, `treatmentdesc`, `treatmentprice`) VALUES
(1, 'Braces (Orthodontic)', 'Braces are a tool to correct and straighten the teeth and fix the bite position of the teeth in a jaw.', 'RM5000'),
(2, 'Crown and Bridge', 'A crown is a dental cover used to cover damaged teeth.', 'RM700'),
(3, 'Denture', 'Dentures are removable appliances used to replace missing teeth and surrounding tissue.', 'RM200'),
(4, 'Minor Oral Surgery', 'Minor Oral Surgery is a treatment carried out by an Oral Surgeon or dentist who has a special interest in oral surgery and involves surgical treatment              for dental problems involving the teeth, jaw, gums, lips or mouth and soft tissues in ', 'RM600'),
(5, 'Root Canal Treatment', 'Root canal treatment is an alternative treatment for severely damaged teeth where              the pulp tissue has become infected or has died, so that the tooth is not ved and  can continue to function in the mouth.remo', 'RM400'),
(6, 'Scaling and Polishing', 'Dental scaling is a treatment to clean tartar. This treatment needs to be done regularly to prevent tooth and gum damage.', 'RM70'),
(7, 'Teeth Whitening', 'Teeth whitening treatment is an effective way to lighten the original color of teeth without cutting them.', 'RM550'),
(8, 'Tooth Extraction', 'Tooth extraction is a procedure used when the tooth has been damaged and cannot be saved anymore.', 'RM70'),
(9, 'Tooth Filling', 'Dental fillings are a treatment to restore a cavity by sealing the space where bacteria can enter.', 'RM70'),
(10, 'Veneer', 'A veneer is a little piece of porcelain that is cemented to the tooth. These veneers are viewed as facial cosmetics that may conceal flaws, geuinely correct the teeth\'s structure, and accentuate gains made\r\nwithout affecting your natural teeth.', 'RM250'),
(11, 'Retainer', 'A teeth retainer is a custom-made device you wear in your mouth over your teeth. It helps keep your teeth in their new, correct position after braces.', 'RM300'),
(12, 'Examination and Consultation', 'A dental consultation and examination is a process used by a dentist to discuss a plan of action for your\r\noral health needs. The purpose of this consultation and exam is to inform the patient on what defines\r\ngood oral health and the actions they sh', 'RM10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fullname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ic` varchar(20) CHARACTER SET latin1 NOT NULL,
  `emailaddress` varchar(50) CHARACTER SET latin1 NOT NULL,
  `phoneno` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fullname`, `ic`, `emailaddress`, `phoneno`, `gender`, `password`) VALUES
('RABIATUL ADAWIYAH BINTI MD YUSOF', '960511105612', 'addaayusoff@gmail.com', '0166564149', 'female', 'Rabiatul96'),
('Masrita Mahfool', '0009200100990', 'admin@gmail.com', '0177761472', 'female', 'Rita@7890'),
('Nur Ain Shahira binti Mohd Yunos', '020506012200', 'ainshahira@gmail.com', '0142678938', 'female', 'Ain2002_'),
('Nur Alia Amira', '000720010000', 'aliamira@gmail.com', '0177528386', 'female', 'Aliamira@00'),
('muhamad amiruddin bin jamian', '940219016657', 'ameerudeinn1@gmail.com', '0166564149', 'female', 'Amiruddin94'),
('Nur Amira Asikin Binti Md Sudi', '000720010996', 'amiraasikn@gmail.com', '0106642936', 'female', 'Amira@20'),
('Nur Auni Nadzirah binti Md Sudi', '070614010726', 'Andzirh07@gmail.com ', '0143964064', 'female', 'An140607.'),
('Muhammad Arif Bin jamian', '970314016441', 'arif@gmail.com', '0198765432', 'male', 'Arif@12345'),
('Nur Asimah Binti Kamisan', '710814016500', 'Asimah@gmail.com', '0143179240', 'female', 'Asimah@123'),
('Muhammad Azim Bin Azman', '000809019807', 'azim@gmail.com', '0177654567', 'male', 'Azim@123'),
('Muhammad Al Hafiz Bin Mohd Yunos', '980622016215', 'hafiz@gmail.com', '0196543278', 'male', 'Hafiz@123'),
('KLINIK PERGIGIAN SYAZWANI', '210421', 'kpsyazwani@gmail.com', '0107017741', 'male', 'Kpsyaz2021'),
('Nur Maisarah Binti Salim', '00222018976', 'maisarah@gmail.com', '0187656677', 'female', 'Maisarah@12'),
('Muhammad Arif Bin Jamian', '970314016441', 'Muhdarifjamian33@gmail.com', '0166560250', 'male', 'Arifjamian1997'),
('Noridah binti Adam', '771003016274', 'noridahadam3@gmail.com', '0146389639', 'female', 'Manggis77$'),
('Nur Adlina', '001203050214', 'nuradlina0702@gmail.com', '0172271950', 'female', 'Siti0702#'),
('Nik Izzaty', '000719110094', 'nurulizzaty197@gmail.com', '0185714548', 'female', 'Izzaty197'),
('salamah adam', '700904016476', 'salamahadam@gmail.com', '0166567806', 'female', 'Salamah70'),
('Test', '000000000000', 'Test@gmail.com', '0123456789', 'male', 'Test@123'),
('Mohd Yunus bin Adam', '710817015757', 'yusadam71@gmail.com', '0177503867', 'male', 'Yus575771_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`emailaddress`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`bil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emailaddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `bil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
