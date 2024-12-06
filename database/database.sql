SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

--
-- Database: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER
SET
  utf8mb4 COLLATE utf8mb4_general_ci;

USE `web`;

-- --------------------------------------------------------
--
-- Table structure for table `admin`
--
CREATE TABLE
  `admin` (
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) DEFAULT NULL,
    `role` varchar(255) DEFAULT '0',
    `createAt` datetime DEFAULT NULL,
    `updateAt` datetime DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--
INSERT INTO
  `admin` (
    `username`,
    `email`,
    `password`,
    `role`,
    `createAt`,
    `updateAt`
  )
VALUES
  (
    'admin',
    'admin@gmail.com',
    '$2y$10$SSBBJb3eln4ooI.dJswSMOz7i6MtWPWi7Vgs40HH65PBe1jO0ZK.O',
    '1',
    '2024-12-01 15:18:07',
    '2024-12-01 15:18:08'
  ),
  (
    'manh',
    'manh@gmail.com',
    '$2y$10$uSAjd62t8LjypQGkqzjZ0eZGLBqWkvgFUN4VMn5ypFbOBePxqKGBm',
    '0',
    '2024-12-01 16:20:07',
    '2024-12-06 16:18:07'
  );

-- --------------------------------------------------------
--
-- Table structure for table `comment`
--
CREATE TABLE
  `comment` (
    `id` int (11) NOT NULL,
    `date` datetime DEFAULT NULL,
    `approved` tinyint (1) DEFAULT NULL,
    `content` varchar(10000) DEFAULT NULL,
    `news_id` int (11) DEFAULT NULL,
    `user_id` varchar(255) DEFAULT NULL,
    `parent` int (11) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--
INSERT INTO
  `comment` (
    `id`,
    `date`,
    `approved`,
    `content`,
    `news_id`,
    `user_id`,
    `parent`
  )
VALUES
  (
    55,
    '2024-12-06 16:25:26',
    0,
    'rất hay',
    5,
    'hcmuter@gmail.com',
    NULL
  ),
  (
    58,
    '2024-12-06 16:36:46',
    1,
    'hay quá !!!',
    4,
    'abc@gmail.com',
    NULL
  ),
  (
    59,
    '2024-12-06 16:38:19',
    1,
    'chúc mừng Fsoft',
    4,
    'abc@gmail.com',
    NULL
  ),
  (
    63,
    '2024-12-06 17:01:41',
    1,
    'ai muốn join team thì ib mình nhé sđt: 012345678',
    5,
    'hcmuter@gmail.com',
    NULL
  ),
  (
    66,
    '2024-12-06 17:03:49',
    1,
    'ai còn slot liên hệ mình nhé...',
    5,
    'abc@gmail.com',
    NULL
  ),
  (
    67,
    '2024-12-06 17:05:17',
    1,
    'mình nè bạn ơi!',
    5,
    'abc@gmail.com',
    63
  ),
  (
    68,
    '2024-12-06 17:05:53',
    1,
    '. hóng',
    5,
    'abc@gmail.com',
    66
  ),
  (
    69,
    '2024-12-06 17:06:27',
    1,
    '. len top',
    5,
    'abc@gmail.com',
    66
  ),
  (
    70,
    '2024-12-06 17:06:50',
    1,
    'và gojek nữa :))',
    4,
    'abc@gmail.com',
    59
  ),
  (
    71,
    '2024-12-06 17:08:31',
    1,
    'ib mình nhé :3',
    5,
    'khoa.le@hcmut.edu.vn',
    63
  ),
  (
    72,
    '2024-12-06 18:57:09',
    1,
    'ok',
    5,
    'khoa.le@hcmut.edu.vn',
    55
  ),
  (
    79,
    '2024-12-06 19:11:01',
    1,
    'quá lý tưởng',
    1,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    80,
    '2024-12-06 19:11:26',
    1,
    'đúng vậy',
    1,
    'khoa.le@hcmut.edu.vn',
    79
  ),
  (
    81,
    '2024-12-06 19:12:08',
    1,
    'đúng vậy',
    1,
    'khoa.le@hcmut.edu.vn',
    79
  ),
  (
    82,
    '2024-12-06 19:13:33',
    1,
    'tuyệt vời',
    5,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    83,
    '2024-12-06 19:14:51',
    1,
    'quá tự hào',
    3,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    84,
    '2024-12-06 19:16:01',
    1,
    'FPT số 1',
    3,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    85,
    '2024-12-06 19:24:13',
    1,
    'quá ngạo nghễ',
    3,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    86,
    '2024-12-06 19:34:17',
    1,
    'đúng vậy',
    3,
    'abc@gmail.com',
    85
  ),
  (
    87,
    '2024-12-06 19:37:00',
    1,
    'quá đúng!',
    3,
    'abc@gmail.com',
    84
  ),
  (
    88,
    '2024-12-06 19:39:04',
    1,
    'tuyệt vời',
    4,
    'abc@gmail.com',
    NULL
  ),
  (
    95,
    '2024-12-06 20:41:05',
    1,
    'tuyệt vời',
    2,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    96,
    '2024-12-06 20:42:52',
    1,
    'thích quá',
    5,
    'khoa.le@hcmut.edu.vn',
    NULL
  ),
  (
    98,
    '2024-12-07 10:37:29',
    1,
    'ok',
    2,
    'khoa.le@hcmut.edu.vn',
    95
  ),
  (
    99,
    '2024-12-07 10:37:34',
    1,
    'hay quá',
    3,
    'khoa.le@hcmut.edu.vn',
    NULL
  );

-- --------------------------------------------------------
--
-- Table structure for table `company`
--
CREATE TABLE
  `company` (
    `id` int (11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    `address` varchar(1000) DEFAULT NULL,
    `createAt` datetime DEFAULT NULL,
    `updateAt` datetime DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `company`
--
INSERT INTO
  `company` (`id`, `name`, `address`, `createAt`, `updateAt`)
VALUES
  (
    1,
    'Chi nhánh TPHCM',
    'F-Town Building, Lot T2, D1 Street, Saigon Hi-Tech Park, Tan Phu Ward, District 9,Ho Chi Minh City, Vietnam',
    NULL,
    NULL
  ),
  (
    2,
    'Chi nhánh Đà Nẵng',
    'FPT Complex Building, Nam Ky Khoi Nghia Rd., Hoa Hai Ward, Ngu Hanh Son Dist., Danang, Vietnam',
    NULL,
    NULL
  ),
  (
    3,
    'Chi nhánh Hà Nội',
    'F-Ville Building, Technology Village No.3 & 4, Software Area, Hoa Lac Hi-Tech Park, Km29, Thanglong Freeway, Thach That District, Hanoi City, Vietnam.',
    NULL,
    NULL
  );

-- --------------------------------------------------------
--
-- Table structure for table `creates`
--
CREATE TABLE
  `creates` (
    `news_id` int (11) NOT NULL,
    `admin_email` varchar(255) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `creates`
--
INSERT INTO
  `creates` (`news_id`, `admin_email`)
VALUES
  (1, 'admin@gmail.com'),
  (3, 'admin@gmail.com'),
  (4, 'manh@gmail.com'),
  (5, 'manh@gmail.com'),
  (6, 'manh@gmail.com');

-- --------------------------------------------------------
--
-- Table structure for table `news`
--
CREATE TABLE
  `news` (
    `id` int (11) NOT NULL,
    `status` tinyint (1) DEFAULT NULL,
    `date` datetime DEFAULT NULL,
    `title` varchar(255) DEFAULT NULL,
    `description` varchar(1000) DEFAULT NULL,
    `content` varchar(10000) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `news`
--
INSERT INTO
  `news` (
    `id`,
    `status`,
    `date`,
    `title`,
    `description`,
    `content`
  )
VALUES
  (
    3,
    1,
    '2022-11-2 16:20:00',
    '[FPT Software''s 25 Years] Campus for Settlement',
    'CEO of #FPTSoftware, Mr. Pham Minh Tuan emphasizes that to become an World-class enterprise, attracting and promoting resource development is vital. Therefore, he hopes to transform the campus complex into an icon of the Vietnamese IT industry, reaching a leading position in the Asia-Pacific region, becoming a “magnet” for global IT engineers.',
    'Towards the goal of contributing 50% to #FPT Corporation''s target of 1 million employees - 1 million digital transformation warriors by 2035, FSOFT will continue to expand its market, open branches, and establish campus/office complexes in major cities in Vietnam such as Hue, Quy Nhon, Nha Trang, as well as in international markets, including Mexico, Saudi Arabia, Romania, Colombia.'
  ),
  (
    4,
    1,
    '2022-11-3 16:20:00',
    'Campus for Settlement',
    'CEO of #FPTSoftware, Mr. Pham Minh Tuan emphasizes that to become an World-class enterprise, attracting and promoting resource development is vital. Therefore, he hopes to transform the campus complex into an icon of the Vietnamese IT industry, reaching a leading position in the Asia-Pacific region, becoming a “magnet” for global IT engineers.',
    'Towards the goal of contributing 50% to #FPT Corporation''s target of 1 million employees - 1 million digital transformation warriors by 2035, FSOFT will continue to expand its market, open branches, and establish campus/office complexes in major cities in Vietnam such as Hue, Quy Nhon, Nha Trang, as well as in international markets, including Mexico, Saudi Arabia, Romania, Colombia.'
  ),
  (
    1,
    1,
    '2024-10-02 05:13:37',
    'Japanese Ambassador Visits Fsoft To Promote Bilateral Cooperation',
    'On November 20, the Ambassador Extraordinary and Plenipotentiary of Japan to Vietnam, Mr. Ito Naoki, visited campus #Codecation Hola Park. The visit provided an opportunity to strengthen the friendship between the two sides and build a solid foundation for advancing digital transformation in Japan.',
    'The Chairwoman of #FPTSoftware, Ms. Chu Thi Thanh Ha, shared FPT Software’s remarkable achievements in the Japanese market, particularly its strategic projects that have significantly contributed to the digital transformation of major partners. Besides, Mr. Ito Naoki affirmed his commitment to supporting FPT Software engineers in working more conveniently in Japan.'
  ),
  (
    5,
    1,
    '2024-11-25 05:14:23',
    'FPT Software and FPT Education partner to open educational representative office in Japan',
    'FPT has announced the plan to establish an educational representative office in Japan. With the aim of globalizing  studying experience, the office will connect students from Vietnam, Japan and Northeast Asia, fostering opportunities to enhance training quality and cultivate a skilled workforce in the technology sector. The office is expected to be located at one of FPT''s branches in Japan.',
    '"This signing event marks a significant milestone in fulfilling the long-term commitment of FPT Software and #FPTEducation to train and provide high-quality IT professionals, particularly for Japan - a market renowned for its stringent standards for IT engineers. I believe that the collaboration between FPT''s IT services and education units in Vietnam and Japan will not only foster new advancements in developing highly skilled professionals with IT expertise, fluency in Japanese, and a deep understanding of Japanese culture but also exemplify FPT''s unity and synergy on the global stage", shared Ms. Chu Thanh Ha, Chairwoman of FPT Software.'
  ),
  (
    2,
    1,
    '2024-10-25 05:14:23',
    'In response to the Happy Giga Run, FPT Korea spreads a love for exercise in the heart of Seoul',
    'Following the success of Happy Giga Run in September, the Autumn Giga Run relay race took place at Yeouido Hangang Park in Seoul, South Korea. The event featured 28 athletes who are employees of FPT Korea, cheered on enthusiastically by their family, friends, and colleagues.',
    'Mr. Kim Minwoo, an FPT Korea employee who participated in the race, shared: "I''m very happy and excited to be part of this fun event. Since it''s held every quarter, I''ll keep participating and hope to win next time."'
  );

-- --------------------------------------------------------
--
-- Table structure for table `product`
--
CREATE TABLE
  `product` (
    `id` int (11) NOT NULL,
    `price` int (11) DEFAULT NULL,
    `name` varchar(255) DEFAULT NULL,
    `description` varchar(1000) DEFAULT NULL,
    `content` varchar(10000) DEFAULT NULL,
    `img` varchar(255) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `product`
--
INSERT INTO
  `product` (
    `id`,
    `price`,
    `name`,
    `description`,
    `content`,
    `img`
  )
VALUES
  (
    7,
    0,
    'AUTOSAR Services & Solutions',
    'Optimize and accelerate innovation to drive greater values from software with AUTOSAR',
    'With fast-changing demands from consumers for more digital experiences as they drive, FPT Software recognizes and is committed to delivering agile, end-to-end services and platforms that reach beyond the vehicles. Our outcome-driven, integrated platform-centric view fosters end-to-end managed services across the enterprise''s entire IT management stack. Our proprietary framework - FAFCO (FPT''s Applied framework and Cognitive Operations) - is a comprehensive approach to business process, application, and infrastructure management services that will enable your organization to achieve its goals.',
    'public/img/products/autosar.png'
  ),
  (
    8,
    0,
    'Embedded Systems',
    'Delivering Embedded System and beyond!',
    'In recent years, the market for embedded systems is expected to proliferate. Embedded systems can be applied in various use cases (such as home appliances, smart homes, and business automation) and employed in multiple industries, including healthcare, automotive, and the military and defense. With the market size for embedded systems reaching 161.86 billion by 2030, FPT Software can be your trusted partner with in-depth expertise and advanced technologies to accompany companies towards a more embedded future.',
    'public/img/products/Embedded-systems.jpg'
  ),
  (
    9,
    0,
    'IoT',
    'FPT Software IoT expertise and service offering',
    'FPT Software is a leading ICT firm in Asia-Pacific. For decades, we offer Internet of Things (IoT) services and solutions for industries ranging from Home application, Smart City to Manufactory, Entertainment, Retail, and Healthcare. With thousands of talented engineers and industry experts, we empower the IoT industry to improve safety, security, and energy efficiency.',
    'public/img/products/metaverse-V2.0.png'
  ),
  (
    10,
    0,
    'Cloud & Big Data',
    'Leverage the power of Cloud for business success',
    'FPT Software offers a full array of cloud services and solutions, encompassing cloud migration, system orchestration, advanced cloud-based problem resolution, necessary workforce enablement, and culture changes needed for lasting success.',
    'public/img/products/bigdata.jpg'
  );

-- --------------------------------------------------------
--
-- Table structure for table `user`
--
CREATE TABLE
  `user` (
    `email` varchar(255) NOT NULL,
    `profile_photo` varchar(255) DEFAULT NULL,
    `fname` varchar(255) DEFAULT NULL,
    `lname` varchar(255) DEFAULT NULL,
    `gender` tinyint (1) DEFAULT NULL,
    `birthday` int (11) DEFAULT NULL,
    `phone` varchar(10) DEFAULT NULL,
    `createAt` datetime DEFAULT NULL,
    `updateAt` datetime DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `user`
--
INSERT INTO
  `user` (
    `email`,
    `profile_photo`,
    `fname`,
    `lname`,
    `gender`,
    `birthday`,
    `phone`,
    `createAt`,
    `updateAt`,
    `password`
  )
VALUES
  (
    'abc@gmail.com',
    'public/img/user/image.png',
    'Tạ Quang',
    'Thái',
    1,
    2004,
    '12313131321',
    '2024-11-05 12:32:27',
    '2024-11-06 16:07:23',
    '$2y$10$gNFVJqwP7i5XSQ3pH/kpU.0vdcoTwsLJSfuhHzSr4sT2Pqvtls56a'
  ),
  (
    'khoa.le@hcmut.edu.vn',
    'public/img/user/image.jpg',
    'Lê Anh',
    'Khoa',
    1,
    2004,
    '321321321312',
    '2024-11-28 20:31:38',
    '2024-12-06 16:19:36',
    '$2y$10$gNFVJqwP7i5XSQ3pH/kpU.0vdcoTwsLJSfuhHzSr4sT2Pqvtls56a'
  ),
  (
    'hcmuter@gmail.com',
    'public/img/user/image.png',
    'Lê Thị Thu',
    'Thủy',
    0,
    2004,
    '3213213',
    '2024-11-01 10:52:40',
    '2024-11-06 16:23:39',
    '$2y$10$gNFVJqwP7i5XSQ3pH/kpU.0vdcoTwsLJSfuhHzSr4sT2Pqvtls56a'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `admin`
--
ALTER TABLE `admin` ADD PRIMARY KEY (`username`, `email`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment` ADD PRIMARY KEY (`id`),
ADD KEY `news_id` (`news_id`),
ADD KEY `user_id` (`user_id`),
ADD KEY `parent` (`parent`);

--
-- Indexes for table `company`
--
ALTER TABLE `company` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creates`
--
ALTER TABLE `creates` ADD PRIMARY KEY (`news_id`, `admin_email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user` ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 100;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 11;

--
-- Constraints for dumped tables
--
--
-- Constraints for table `comment`
--
ALTER TABLE `comment` ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;