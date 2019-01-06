-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 12:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upskills`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`, `full_name`) VALUES
(1, 'haya', '12345', 'haya hneti'),
(5, 'salameh', '1984', 'Salameh Yasin'),
(6, 'esraa', '1996', 'esraa aboud');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `ar_name` varchar(50) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `ar_name`, `cat_image`) VALUES
(1, 'Office Managment', 'إدارة المكاتب', 'course05.jpg'),
(2, 'Interior Design', 'التصميم الداخلي', 'blog04.jpg'),
(3, 'Graphic Design', 'التصميم الجرافيكي', 'blog-post-background.jpg'),
(4, 'Network Engineer', 'هندسة الشبكات', 'network.jpg'),
(5, 'Free drawing', 'الرسم الحر', 'course03.jpg'),
(6, 'professional photography', 'التصوير الاحترافي', 'course07.jpg'),
(7, 'Fashion design', 'تصميم الازياء', 'course08.jpg'),
(8, 'Animation', 'تعلم الانيميشن', 'animation.jpg'),
(9, 'Programming', 'البرمجة', 'course04.jpg'),
(10, 'English courses', 'اللغة الانجليزية', 'blog02.jpg'),
(11, 'Engineering', 'الهندسة', 'eng.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(3) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_ar_name` varchar(50) NOT NULL,
  `course_image` text NOT NULL,
  `course_desc` varchar(500) NOT NULL,
  `course_ar_desc` varchar(500) NOT NULL,
  `hour` int(3) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cat_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_ar_name`, `course_image`, `course_desc`, `course_ar_desc`, `hour`, `start_date`, `end_date`, `cat_id`) VALUES
(1, 'PHP', 'بي اتش بي', 'phplogo.jpg', 'PHP â€œHypertext Preprocessorâ€ is the most famous server-side programming language in the world. It is used to create a dynamic website and it supports many databases such as oracle, SQL server, etc. It has the following functionalities: Cross platform (run with all operation system), Robust, Reasonability, Scalable, Fully object oriented. It is the most widely used programming languages â€œused on many famous sites such as: Facebook, Apple, Wikipedia, etc.\", and by using it you can enjoy the ', '', 80, '2018-09-01', '2018-11-01', 9),
(2, 'JAVA', 'جافا', 'java.png', 'What Is Java? Java is a computer programming language that enables programmer to build software and huge systems (Web Application or Desktop Application) that make the business of any type doable using the most modern principles. Java is Portable which means run on any platform windows or linux. Java made connecting with database of any provider easy and reliable with modern framework such as ORM through JPA framework. Our Java  course enables the trainee to build Java application in OOP style w', '', 35, '2018-09-16', '2018-09-16', 9),
(3, 'ASP.NNET', 'اس بي.نت', 'asp.png', 'ASP â€œActive Server Pagesâ€ is the most secure robust server side technology to build enterprise-class web applications with a minimum number of coding. ASP.NET is part of the .NET Framework and by using it; you can code your applications in any language compatible with the common language runtime (CLR), including Microsoft Visual Basic and C#. \r\nOur ASP.NET Web Form (level 1) course includes step by step instructions, classroom exercises and discussions to have a basic level of knowledge in u', '', 40, '2018-11-04', '2018-12-23', 9),
(4, 'Basicl English', 'اللغة الانجليزية', 'en1.jpg', 'Business English course is designed for students who wish to improve their written and spoken business communication skills. The course focuses on level-appropriate grammar, introduces vocabulary specific to various business domains, and familiarizes students with the finer points of business etiquette and business correspondence. In addition to business correspondence, this course includes soft skills such as; presentation skills, negotiation skills, interviewing skills, and personal skills.', '', 40, '2018-09-02', '2018-10-21', 10),
(5, 'English Conversation', 'محادثة اللغة الانجليزية', 'en2.png', 'English Conversation 1 is the first of two conversation courses designed to develop cognitive skills and awareness in conversational English. The course focuses on how communication works. It encourages participants to interact through variable topics involving different activities such; reading, listening and speaking. While concentrating broadly on listening and speaking, it targets many sub â€“ skills reaching conversational competences. Participants will demonstrate the vocational language i', '', 25, '2018-10-01', '2018-11-04', 10),
(6, 'IELTS Test Preparation', 'التحضير لفحص الايلتس', 'ielts.jpg', 'The listening part is designed to reflect some real world listening situations. It starts by introducing listening from basics into advanced to match the exam criteria. It helps examinees step by step into listening for guests, directions, and lectures. This course is based on Cambridge 3rd edition new insight into IELTS by Vanessa Jakeman and Clare Mcdowell', '', 50, '2018-09-09', '2018-11-04', 10),
(7, 'Auto CAD Civil', 'اتوكاد', 'auto cad.png', 'Drawings remain the primary means by which engineers convey ideas to the craftspeople who will manifest them into tangible structures. This course aims to teach students the fundamentals of structural composition that later translate to designing structures and provide them with a solid understanding of basic construction spaces, their functionality and how to draw and design them, as well as providing them with the skills and knowledge necessary to enable them to draw all structural elements, c', '', 25, '2018-09-02', '2018-10-07', 11),
(8, 'Revit Structure', 'ريفيت', 'REVIT.jpg', '', '', 30, '2018-09-02', '2018-10-14', 11),
(9, 'Prokon', 'بروكون', 'PROKON-.png', '', '', 30, '2018-09-16', '2018-10-28', 11);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(50) NOT NULL,
  `instructor_name` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `national_number` int(20) NOT NULL,
  `major` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_name`, `phone`, `Email`, `national_number`, `major`, `cv`, `photo`) VALUES
(5, 'salameh', '07986255', 'hayahunaity.94@gmail.com', 6856656, 'cis', 'android h.w.docx', '4.jpg'),
(6, 'salameh', '0785452110', 'M22@gmail.com', 2147483647, 'cs', 'الخطة.docx', 'bg.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `reg_id` int(50) NOT NULL,
  `course_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `hours` int(50) NOT NULL,
  `fees` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`reg_id`, `course_id`, `student_id`, `date`, `hours`, `fees`) VALUES
(1, 11, 4, '2018-11-15', 25, 66),
(2, 11, 4, '2018-11-15', 25, 66),
(3, 11, 4, '2018-11-15', 25, 66),
(4, 11, 4, '2018-11-15', 25, 66),
(5, 11, 4, '2018-11-15', 25, 66),
(6, 558, 4, '2018-11-10', 54, 69),
(7, 5, 4, '2018-11-17', 54, 66);

-- --------------------------------------------------------

--
-- Table structure for table `reg_course`
--

CREATE TABLE `reg_course` (
  `course_id` int(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `hours` int(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `instructor_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reg_course`
--

INSERT INTO `reg_course` (`course_id`, `course_name`, `hours`, `start_date`, `end_date`, `instructor_id`) VALUES
(1, '3', 54, '2018-12-28', '0000-00-00', 0),
(2, '4', 54, '2018-12-15', '2000-09-30', 0),
(3, '4', 54, '2018-12-15', '2000-09-30', 0),
(4, '4', 50, '2018-12-12', '2018-12-17', 0),
(5, '4', 50, '2018-12-12', '2018-12-17', 0),
(6, '4', 50, '2018-12-12', '2018-12-17', 0),
(7, '4', 50, '0000-00-00', '0000-00-00', 0),
(8, '7', 50, '0000-00-00', '2018-12-28', 0),
(9, '7', 50, '0000-00-00', '2018-12-28', 0),
(10, '7', 50, '0000-00-00', '2018-12-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_student`
--

CREATE TABLE `reg_student` (
  `student_id` int(50) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `national_id` int(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_hours` varchar(20) NOT NULL,
  `course_time` time(4) NOT NULL,
  `course_fees` time(4) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `test_result` varchar(30) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reg_student`
--

INSERT INTO `reg_student` (`student_id`, `student_name`, `phone`, `Email`, `national_id`, `photo`, `course_name`, `course_hours`, `course_time`, `course_fees`, `start_date`, `end_date`, `test_result`, `admin_id`) VALUES
(2, 'salameh', '0785412014', 'haya@gmail.com', 2147483647, 'bg.jpeg', '4', '50', '00:00:00.0000', '00:05:40.0000', '2018-12-31', '2019-01-16', '40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(3) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `course_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `Email`, `mobile`, `course_id`) VALUES
(3, 'haya', 'hunaite', 'hayahunaity.94@gmail.com', '32659+89', 65),
(4, 'hay', 'hunaite', 'haya@gmail.com', '659+85', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `reg_course`
--
ALTER TABLE `reg_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `reg_student`
--
ALTER TABLE `reg_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `reg_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg_course`
--
ALTER TABLE `reg_course`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reg_student`
--
ALTER TABLE `reg_student`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
