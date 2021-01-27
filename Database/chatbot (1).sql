-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(100) NOT NULL,
  `queries` varchar(500) NOT NULL,
  `replies` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi|hello|hello!|hello there|hi!', 'hello there!'),
(2, 'department|departments|courses|stream|streams|subject|subjects|i want to know about departments|i want to know about streams', 'Teaching in the university is achieved through various specialized        departments. The Departments in our university are Applied Sciences & Humanities, Computer Science & Engineering, Electronics & Communication Engineering, Information Technology, Mechanical & Autmation Engineering, Architecture & Planning, and Management.\r\nFor more details visit:\r\n\r\n\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=203&Itemid=15\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=203&Itemid=15</a>'),
(3, 'Admissions|admission|i want to know about admission|i want to know about admissions\r\n', 'Admissions in several courses have been closed.\r\nPlease visit the following link: \r\n\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=595&Itemid=594\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=595&Itemid=594</a>\r\n'),
(4, 'result|results|i want to know about result|i want to know about results|when will the results come?|when will the results come|when will results come|when will be the results declared|when will be the results declared?|when will be the result declared?|when will be the result declared', 'Check out your result on:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=621&Itemid=655\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=621&Itemid=655</a>\r\n\r\n'),
(5, 'Datesheet|datesheets|i want to know about datesheets|i want to know about datesheet|i want to check about datesheets|i want to check about datesheet|i want to check  datesheet||i want to check about datesheets\r\n', 'Check out the datesheets here:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=401&Itemid=657#\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=401&Itemid=657#</a>\r\n'),
(6, 'syllabus|i want to know about syllabus|i want to check syllabus|what is the syllabus?|what is the syllabus|how can i check syllabus|syllabus scheme|syllabus of mca|syllabus for btech|syllabus for mca|syllabus of btech|syllabus of mtech|syllabus for btech|', ' The Scheme of Examination and Syllabus for batch 2013 onwards is updated on the website. Kindly visit the following link:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=240&Itemid=197\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=240&Itemid=197</a>\r\n'),
(7, 'MCA|i want to know about mca\r\n', 'Department of IT has introduced a postgraduate MCA programme from the Academic session 2011-2012 with an annual intake of 60 students. The MCA course helps an individual to grab the request amount of knowledge both technical and academic that after 3 years an outgoing MCA post-graduate student is ready to face any challenge in the industry. The student strength is 60 in each year.\r\nFor details on other courses, visit:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=203\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=203</a>'),
(8, 'Societies|society\r\n', 'Student societies aim to facilitate a particular activity or promote a belief system. Our university has many societies for the students, both Technical and Non-Technical. \r\nTechnical societies are: ACM Student Chapter, CSI Student Branch, IEEE Student Chapter, American Society of Mechanical Engineers (ASME) Chapter, Enactus, Robolution, and Lean In. For more details, visit:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=24&Itemid=550\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=24&Itemid=550</a>\r\nNon-Technical Societies are: Antargat, Technoliterati, The Economics society, Taarangana, Greensphere, SPIC MACAY Chapter, Tarannum, Zena, Rotary Club, Synergy, Rahnuma, Hypnotics, Instinct, and B.H.A.V (Behold an Architect’s View). For more details, visit:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=140&Itemid=551\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=140&Itemid=551</a>\r\n'),
(9, 'Sports\r\n', 'IGDTUW has introduced new sports and recreation facilities. Students launched their own Sports club in 2009 as an endeavor to refresh minds of students and inculcate spirit of sportsmanship among them. Synergy Sports Club is the first sports society of IGDTUW.\r\n'),
(10, 'Facilities\r\n', 'The university provides many facilities such as Library, Dispensary, Computer Centre, Bank, Guest House, Common Room, and Hostel.\r\nRead more about them here: \r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=67&Itemid=461#\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=67&Itemid=461#</a>\r\n'),
(11, 'Hostel|hostels\r\n', 'The University has two women hostels - Krishna Hostel and Kaveri Hostel, to accommodate approximately 340 students. These two hostels are located in the University campus. The hostels provide a safe, secure and clean environment for the students to grow, learn and mature in the society away from their own homes. The hostel authorities always facilitate to create an environment for the students to study, do well in their academics and focus on their career and future. All rooms are on twin/triple sharing basis and are equipped with individual Beds, Chairs, Built-in Cupboards, Study Tables, Rack, Paid laundry services, Refrigerators’, Induction Heaters, Microwave Ovens, Purified drinking water (RO systems), Wi-Fi facility, etc.\r\n'),
(12, 'Fests|Festivals|fest|festivities|activities\r\n', 'The university organizes various festivals every year. These festivals are namely Espectro, Impulse, Tremors, Xebec.\r\nRead more about them here:\r\n<a href=\"https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=171&Itemid=553\" target=\"_blank\">https://www.igdtuw.ac.in/index.php?option=com_content&view=article&id=171&Itemid=553</a>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
