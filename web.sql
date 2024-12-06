-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2024 at 07:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT '0',
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `role`, `createAt`, `updateAt`) VALUES
('admin', '$2y$10$SSBBJb3eln4ooI.dJswSMOz7i6MtWPWi7Vgs40HH65PBe1jO0ZK.O', '1', '2024-12-01 15:18:07', '2024-12-01 15:18:08'),
('manh', '$2y$10$uSAjd62t8LjypQGkqzjZ0eZGLBqWkvgFUN4VMn5ypFbOBePxqKGBm', '0', '2024-12-01 16:20:07', '2024-12-06 16:18:07'),
('thaiquang', '$2y$10$URJRrn5oIzsPwqdMcOWVyOKgiTSlRMe/TrmB6.C2Nf29N87kRV4Um', '0', '2024-12-06 10:43:30', '2024-12-06 10:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `date`, `approved`, `content`, `news_id`, `user_id`, `parent`) VALUES
(106, '2024-12-06 11:31:44', 1, 'Thích quá', 5, 'khoa.le@hcmut.edu.vn', NULL),
(107, '2024-12-06 11:32:02', 1, 'Ước gì được tham gia', 5, 'khoa.le@hcmut.edu.vn', 106);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `createAt`, `updateAt`) VALUES
(1, 'Chi nhánh TPHCM', 'F-Town Building, Lot T2, D1 Street, Saigon Hi-Tech Park, Tan Phu Ward, District 9,Ho Chi Minh City, Vietnam', NULL, NULL),
(2, 'Chi nhánh Đà Nẵng', 'FPT Complex Building, Nam Ky Khoi Nghia Rd., Hoa Hai Ward, Ngu Hanh Son Dist., Danang, Vietnam', NULL, NULL),
(3, 'Chi nhánh Hà Nội', 'F-Ville Building, Technology Village No.3 & 4, Software Area, Hoa Lac Hi-Tech Park, Km29, Thanglong Freeway, Thach That District, Hanoi City, Vietnam.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `creates`
--

CREATE TABLE `creates` (
  `news_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creates`
--

INSERT INTO `creates` (`news_id`, `admin_email`) VALUES
(1, 'admin@gmail.com'),
(3, 'admin@gmail.com'),
(4, 'manh@gmail.com'),
(5, 'manh@gmail.com'),
(6, 'manh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `status`, `date`, `title`, `description`, `content`, `admin_id`) VALUES
(1, 1, '2024-10-02 05:13:37', 'Japanese Ambassador Visits Fsoft To Promote Bilateral Cooperation', 'On November 20, the Ambassador Extraordinary and Plenipotentiary of Japan to Vietnam, Mr. Ito Naoki, visited campus #Codecation Hola Park. The visit provided an opportunity to strengthen the friendship between the two sides and build a solid foundation for advancing digital transformation in Japan.', 'The Chairwoman of #FPTSoftware, Ms. Chu Thi Thanh Ha, shared FPT Software’s remarkable achievements in the Japanese market, particularly its strategic projects that have significantly contributed to the digital transformation of major partners. Besides, Mr. Ito Naoki affirmed his commitment to supporting FPT Software engineers in working more conveniently in Japan.', 'admin'),
(2, 1, '2024-10-25 05:14:23', 'In response to the Happy Giga Run, FPT Korea spreads a love for exercise in the heart of Seoul', 'Following the success of Happy Giga Run in September, the Autumn Giga Run relay race took place at Yeouido Hangang Park in Seoul, South Korea. The event featured 28 athletes who are employees of FPT Korea, cheered on enthusiastically by their family, friends, and colleagues.', 'Mr. Kim Minwoo, an FPT Korea employee who participated in the race, shared: \"I\'m very happy and excited to be part of this fun event. Since it\'s held every quarter, I\'ll keep participating and hope to win next time.\"', 'admin'),
(3, 1, '2022-11-02 16:20:00', '[FPT Software\'s 25 Years] Campus for Settlement', 'CEO of #FPTSoftware, Mr. Pham Minh Tuan emphasizes that to become an World-class enterprise, attracting and promoting resource development is vital. Therefore, he hopes to transform the campus complex into an icon of the Vietnamese IT industry, reaching a leading position in the Asia-Pacific region, becoming a “magnet” for global IT engineers.', 'Towards the goal of contributing 50% to #FPT Corporation\'s target of 1 million employees - 1 million digital transformation warriors by 2035, FSOFT will continue to expand its market, open branches, and establish campus/office complexes in major cities in Vietnam such as Hue, Quy Nhon, Nha Trang, as well as in international markets, including Mexico, Saudi Arabia, Romania, Colombia.', 'admin'),
(4, 1, '2022-11-03 16:20:00', 'Campus for Settlement', 'CEO of #FPTSoftware, Mr. Pham Minh Tuan emphasizes that to become an World-class enterprise, attracting and promoting resource development is vital. Therefore, he hopes to transform the campus complex into an icon of the Vietnamese IT industry, reaching a leading position in the Asia-Pacific region, becoming a “magnet” for global IT engineers.', 'Towards the goal of contributing 50% to #FPT Corporation\'s target of 1 million employees - 1 million digital transformation warriors by 2035, FSOFT will continue to expand its market, open branches, and establish campus/office complexes in major cities in Vietnam such as Hue, Quy Nhon, Nha Trang, as well as in international markets, including Mexico, Saudi Arabia, Romania, Colombia.', 'admin'),
(5, 1, '2024-11-25 05:14:23', 'FPT Software and FPT Education partner to open educational representative office in Japan', 'FPT has announced the plan to establish an educational representative office in Japan. With the aim of globalizing  studying experience, the office will connect students from Vietnam, Japan and Northeast Asia, fostering opportunities to enhance training quality and cultivate a skilled workforce in the technology sector. The office is expected to be located at one of FPT\'s branches in Japan.', '\"This signing event marks a significant milestone in fulfilling the long-term commitment of FPT Software and #FPTEducation to train and provide high-quality IT professionals, particularly for Japan - a market renowned for its stringent standards for IT engineers. I believe that the collaboration between FPT\'s IT services and education units in Vietnam and Japan will not only foster new advancements in developing highly skilled professionals with IT expertise, fluency in Japanese, and a deep understanding of Japanese culture but also exemplify FPT\'s unity and synergy on the global stage\", shared Ms. Chu Thanh Ha, Chairwoman of FPT Software.', 'admin'),
(10, 1, '2024-12-06 03:50:50', 'FPT News week 49/2024', 'Hello', 'FPT Corporation (FPT) is a globally leading technology and IT services provider headquartered in Vietnam. FPT operates in three core sectors: Technology, Telecommunications, and Education. During over three decades of development, FPT has constantly provided practical and effective products to millions of people and tens of thousands of business and non-business organizations worldwide, establishing Vietnam’s position on the global tech map. Keeping up with the latest market trends and emerging technologies, FPT has developed the Made-by-FPT ecosystem of services, products, solutions, and platforms, which enables sustainable growth for organizations and businesses and offers distinctive experiences to customers. In 2023, FPT recorded a total revenue of USD 2.17 billion and 48,000+ employees. For more information, please visit https://fpt.com/en.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(7, 0, 'AUTOSAR Services & Solutions', 'Optimize and accelerate innovation to drive greater values from software with AUTOSAR', 'With fast-changing demands from consumers for more digital experiences as they drive, FPT Software recognizes and is committed to delivering agile, end-to-end services and platforms that reach beyond the vehicles. Our outcome-driven, integrated platform-centric view fosters end-to-end managed services across the enterprise\'s entire IT management stack. Our proprietary framework - FAFCO (FPT\'s Applied framework and Cognitive Operations) - is a comprehensive approach to business process, application, and infrastructure management services that will enable your organization to achieve its goals.', 'public/img/products/autosar.jpg'),
(8, 0, 'Embedded Systems', 'Delivering Embedded System and beyond!', 'In recent years, the market for embedded systems is expected to proliferate. Embedded systems can be applied in various use cases (such as home appliances, smart homes, and business automation) and employed in multiple industries, including healthcare, automotive, and the military and defense. With the market size for embedded systems reaching 161.86 billion by 2030, FPT Software can be your trusted partner with in-depth expertise and advanced technologies to accompany companies towards a more embedded future.', 'public/img/products/Embedded-systems.jpg'),
(9, 0, 'IoT', 'FPT Software IoT expertise and service offering', 'FPT Software is a leading ICT firm in Asia-Pacific. For decades, we offer Internet of Things (IoT) services and solutions for industries ranging from Home application, Smart City to Manufactory, Entertainment, Retail, and Healthcare. With thousands of talented engineers and industry experts, we empower the IoT industry to improve safety, security, and energy efficiency.', 'public/img/products/metaverse-V2.0.png'),
(10, 0, 'Cloud & Big Data', 'Leverage the power of Cloud for business success', 'FPT Software offers a full array of cloud services and solutions, encompassing cloud migration, system orchestration, advanced cloud-based problem resolution, necessary workforce enablement, and culture changes needed for lasting success.', 'public/img/products/bigdata.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `profile_photo`, `fname`, `lname`, `gender`, `birthday`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('abc@gmail.com', 'public/img/user/image.png', 'Tạ Quang', 'Thái', 1, 2004, '1231313132', '2024-11-05 12:32:27', '2024-11-06 16:07:23', '$2y$10$gNFVJqwP7i5XSQ3pH/kpU.0vdcoTwsLJSfuhHzSr4sT2Pqvtls56a'),
('hcmuter@gmail.com', 'public/img/user/image.png', 'Lê Thị Thu', 'Thủy', 0, 2004, '3213213', '2024-11-01 10:52:40', '2024-11-06 16:23:39', '$2y$10$gNFVJqwP7i5XSQ3pH/kpU.0vdcoTwsLJSfuhHzSr4sT2Pqvtls56a'),
('khoa.le@hcmut.edu.vn', 'public/img/user/2024_12_03_07_05_02pm.png', 'Lê Anh', 'Khoa', 1, 2004, '1123456789', '2024-11-28 20:31:38', '2024-12-04 01:05:02', '$2y$10$gNFVJqwP7i5XSQ3pH/kpU.0vdcoTwsLJSfuhHzSr4sT2Pqvtls56a'),
('manh@gmail.com', 'public/img/user/default.png', 'manh', 'Tran', 1, 2003, '183401', '2024-12-04 00:42:06', '2024-12-04 00:42:06', '$2y$10$aJhfc2lR5Npj3a9n1Y9thu1yzK373avmtRY6dA/O.96N65Es0IyYa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creates`
--
ALTER TABLE `creates`
  ADD PRIMARY KEY (`news_id`,`admin_email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
