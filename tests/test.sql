-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 03:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eims`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_all_pending_applications_for_hostel` ()  BEGIN
SELECT stv.student_name, stv.department, stv.session, stv.semester, stv.father_name, stv.mother_name, stv.dob, stv.blood_group, stv.student_id, hsa.father_occupation, hsa.mother_occupation, hsa.total_family_member, hsa.yearly_family_income, hsa.current_address, hsa.permanent_address, hsa.created_at FROM hostel_sit_applications AS hsa JOIN students_view AS stv ON stv.student_id = hsa.student_id ORDER BY hsa.id DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_hostel_payments_by_student_id` (IN `student_id` INT(12) UNSIGNED)  BEGIN

SELECT * FROM hostel_payments
WHERE student_id = @student_id;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admission_applications`
--

CREATE TABLE `admission_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_gpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_gpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_applications`
--

INSERT INTO `admission_applications` (`id`, `session_id`, `student_name`, `father_name`, `mother_name`, `dob`, `phone`, `permanent_address`, `current_address`, `email`, `ssc_roll`, `ssc_reg`, `ssc_group`, `ssc_board`, `ssc_passing_year`, `ssc_gpa`, `hsc_roll`, `hsc_group`, `hsc_reg`, `hsc_board`, `hsc_passing_year`, `hsc_gpa`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laboriosam voluptat', 'Dolor non aut eos e', 'Natus id quis omnis', '1985-10-19', '51', 'Est aut laboriosam ', 'Aute nisi excepteur ', 'vyqekuv@mailinator.com', 'Rose', 'Elijah', 'science', 'Eu laboriosam eum d', '89', '89', 'Gary', 'science', 'Wing', 'Duis modi eveniet e', '27', '83', 'Approved', NULL, NULL, NULL),
(3, 1, 'Id corrupti except', 'Nobis sed nobis itaq', 'Sint eiusmod mollit', '2012-03-08', '99', 'Incididunt placeat ', 'Eu est culpa delectu', 'huker@mailinator.com', 'Phelan', 'Cedric', 'science', 'Magna placeat omnis', '21', '21', 'Lee', 'science', 'Kerry', 'Harum quia suscipit ', '85', '25', 'Approved', NULL, NULL, NULL),
(4, 1, 'Mollit maiores quis ', 'Excepteur ipsum in ', 'Doloremque enim volu', '1997-04-06', '30', 'Magnam nostrud quia ', 'Et id nulla ex harum', 'wewo@mailinator.com', 'Ramona', 'Cassidy', 'science', 'Omnis harum nulla qu', '1', '12', 'Jonah', 'science', 'Ivy', 'Labore ullamco sint', '89', '15', 'Rejected', NULL, NULL, '2022-02-22 13:55:02'),
(5, 1, 'Quo ex in voluptatem', 'Dicta deserunt quis ', 'Eaque repellendus D', '2010-01-11', '74', 'Et autem eum et prae', 'Mollit sed quia mole', 'xabakyxe@mailinator.com', 'Fay', 'Harding', 'science', 'Quos duis doloribus ', '15', '5', 'Jarrod', 'science', 'Samuel', 'Porro aut rem molest', '35', '100', 'Rejected', NULL, NULL, '2022-02-22 15:31:25'),
(6, 1, 'Test Student', 'Test Student Father', 'Test Student Mother', '2010-12-27', '01743920880', 'test student, permanent address', 'Dolura, Ratar goan, Bishwamvarpur, Sunamganj', 'test.student@gmail.com', '2091932', '2091932423', 'science', 'Sylhet', '2019', '4', '3391932', 'science', '2091932423', 'Sylhet', '2021', '4', 'Approved', NULL, NULL, '2022-02-22 14:56:24'),
(7, 1, 'Officiis at exercita', 'Nam suscipit dolores', 'Iure exercitation vo', '1988-01-05', '82', 'Doloribus cum invent', 'Suscipit ipsum eius', 'xovyzydu@mailinator.com', 'Cedric', 'Akeem', 'science', 'Blanditiis quas eum ', '36', '35', 'Roary', 'science', 'Tatum', 'Modi vitae aut volup', '17', '88', 'Approved', NULL, '2022-02-22 15:04:04', '2022-02-22 15:04:57'),
(8, 1, 'Consectetur officia', 'Tempora dolore vel d', 'Officiis atque proid', '1993-11-19', '69', 'Adipisicing similiqu', 'Incidunt et et repr', 'mejylaryt@mailinator.com', 'Alice', 'Oscar', 'science', 'Necessitatibus eiusm', '2', '61', 'Willa', 'science', 'Roanna', 'Quisquam non ut sunt', '80', '7', 'Pending', NULL, '2022-02-24 10:46:27', '2022-02-24 10:46:27'),
(9, 1, 'Toma Banik', 'Aute sed ea error qu', 'Esse necessitatibus ', '1980-07-13', '57', 'Et voluptatibus qui ', 'Cumque earum perfere', 'zelijyd@mailinator.com', 'Lareina', 'Xandra', 'science', 'Amet quia voluptati', '71', '56', 'Charissa', 'science', 'India', 'Nihil enim consectet', '4', '17', 'Approved', NULL, '2022-02-24 10:46:54', '2022-02-24 10:48:14'),
(10, 1, 'Tawfik Alahi', 'Ut numquam laboris u', 'Delectus irure qui ', '2009-05-20', '101455454145', 'Voluptate saepe susc', 'Pariatur Itaque mag', 'tafik@mailinator.com', 'Alexis', '21231231231', 'science', 'Sylhet', '26', '5', 'Kai', 'science', 'Wade', 'Dolores duis harum s', '54', '5', 'Approved', NULL, '2022-02-25 05:16:37', '2022-02-25 05:18:53'),
(11, 1, 'Humba', 'Labore recusandae R', 'Aliquid ut voluptate', '1990-04-27', '87', 'Architecto pariatur', 'Culpa inventore nobi', 'kemytyw@mailinator.com', 'Tanya', 'Leonard', 'science', 'Ex quos quo molestia', '35', '9', 'Sybil', 'science', 'Caesar', 'Voluptas non reicien', '10', '95', 'Approved', NULL, '2022-02-25 05:19:59', '2022-02-25 05:19:59'),
(12, 1, 'Qui placeat corpori', 'Iusto dolore enim do', 'Autem et anim omnis ', '1992-08-20', '47', 'Amet ut nesciunt s', 'Molestias blanditiis', 'winaquqe@mailinator.com', 'Shad', 'Upton', 'science', 'Sunt libero maxime d', '73', '73', 'Gloria', 'science', 'Hayden', 'Qui est consequatur', '95', '15', 'Approved', NULL, '2022-02-25 05:27:00', '2022-02-25 05:27:28'),
(13, 1, 'testing', 'Lorem earum amet la', 'Sit autem voluptate', '1989-10-25', '111', 'Tenetur veniam nisi', 'Pariatur Nostrud qu', 'cupyj@mailinator.com', 'Ashton', 'Rigel', 'science', 'Quia accusantium qua', '82', '16', 'Russell', 'science', 'Dawn', 'Esse corporis quia u', '66', '28', 'Pending', NULL, '2022-02-26 08:03:50', '2022-02-26 08:03:50'),
(14, 4, 'Iure sint culpa tot', 'Vel sint perspiciati', 'Non animi accusanti', '2001-07-21', '11', 'Deserunt laborum Is', 'Ipsum culpa fuga D', 'bosurejoz@mailinator.com', 'Alan', 'Noel', 'science', 'Quis excepteur minim', '34', '57', 'Cheyenne', 'science', 'Channing', 'Dolore consectetur v', '8', '50', 'Approved', NULL, '2022-02-26 12:59:59', '2022-02-26 12:59:59'),
(15, 4, 'Blanditiis nesciunt', 'Ea enim proident co', 'Maiores perferendis ', '2008-08-26', '68', 'Ut dicta sapiente no', 'Quis nisi qui sit d', 'qeho@mailinator.com', 'Nehru', 'Dustin', 'science', 'Laudantium est natu', '86', '99', 'Chandler', 'science', 'Vivian', 'Commodi qui cumque l', '25', '98', 'Approved', NULL, '2022-02-26 13:06:56', '2022-02-26 13:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications_for_hostel_seats`
--

CREATE TABLE `applications_for_hostel_seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `current_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearly_income` double NOT NULL,
  `reason_for_hostel_seat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `available` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `rack_no` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `col_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_quantity` int(11) NOT NULL DEFAULT 5,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `code`, `title`, `author`, `image`, `details`, `price`, `available`, `total`, `rack_no`, `row_no`, `col_no`, `created_at`, `type`, `total_quantity`, `updated_at`) VALUES
(1, NULL, 'Programming in C', 'E. Balagurusamy', 'programing_in_c.jpg', 'This book presents a detailed exposition of C in an extremely simple style. The various features of the language have been systematically discussed. The entire text has been reviewed and revised incorporating the feedback from the readers edited', 100, 6, NULL, 12, 10, 10, '2022-02-25 02:21:01', 'Computer Science', 20, '2022-02-25 02:30:59'),
(2, NULL, 'Computer Graphics', 'Roy Plastok', 'computer_graphics.jpg', 'computer graphics – A solved-problem book using an algorithmic approach to digitizing images for computer generation. It covers all necessary programming and vector, matrix, and character graphics generation, clipping functions, and more. Program structures are presented in a language and machine independent form through the use of ‘Hierarchy Plus Input-Process Output’ (HIPO) charts, and technique for modularizing a program which is useable on any system', 90, NULL, NULL, 12, 11, 10, '2022-02-25 02:21:01', 'Computer Science', 20, '2022-02-25 02:21:01'),
(3, NULL, 'Programming With C', 'Byron Gottfried', 'programming_with_c.jpg', 'Undoubtedly one of the best books to learn C programming language, Programming With C (pdf) by Byron Gottfried is preferred by thousands of programmers around the world. Filled with tons of examples, review questions, and solved problems, this book is ideal for students – both beginners and intermediates, when it comes to test preparations or self-study.', 90, NULL, NULL, 12, 11, 10, '2022-02-25 02:21:01', 'Computer Science', 20, '2022-02-25 02:21:01'),
(4, NULL, 'Artificial Intelligence', 'Stuart J. Russell and Peter Norvig', 'artificial_intellegence.jpg', 'Artificial Intelligence: A Modern Approach is a university textbook on artificial intelligence, written by Stuart J. Russell and Peter Norvig. It was first published in 1995 and the fourth edition of the book was released on 28 April 2020.', 90, NULL, NULL, 12, 11, 10, '2022-02-25 02:21:01', 'Computer Science', 20, '2022-02-25 02:21:01'),
(5, NULL, 'Concrete Mathematics', 'Ronald Graham, Donald Knuth, and Oren Patashnik', 'concrete_mathematics.jpg', 'Concrete Mathematics: A Foundation for Computer Science, by Ronald Graham, Donald Knuth, and Oren Patashnik, first published in 1989, is a textbook that is widely used in computer-science departments as a substantive but light-hearted treatment of the analysis of algorithms', 90, NULL, NULL, 12, 11, 10, '2022-02-25 02:21:01', 'Computer Science', 20, '2022-02-25 02:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `title`, `department_id`, `semester_id`, `credit`, `created_at`, `updated_at`) VALUES
(1, 'CSE 101', 'Introduction to Computer Science', '101', '101', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(2, 'CSE 102', 'Introduction to Computer Science(Sessional)', '101', '101', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(3, 'PHY 101', 'Physics', '101', '101', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(4, 'PHY 102', 'Physics (Sessional)', '101', '101', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(5, 'PHY 102', 'Physics (Sessional)', '101', '101', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(6, 'ME 101', 'Mechanical Engineering', '101', '101', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(7, 'ME 102', 'Mechanical Engineering (Sessional)', '101', '101', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(8, 'CSE 201', 'Programming with c', '101', '102', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(9, 'CSE 202', 'Programming with c', '101', '102', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(10, 'CHY 201', 'Chemistry', '101', '102', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(11, 'CHY 202', 'Chemistry (Sessional)', '101', '102', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(12, 'PHY 102', 'Physics (Sessional)', '101', '102', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(13, 'ME 101', 'Mechanical Drawing', '101', '102', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(14, 'CSE 201', 'Programming with c', '101', '103', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(15, 'CSE 202', 'Programming with c', '101', '103', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(16, 'CHY 201', 'Chemistry', '101', '103', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(17, 'CHY 202', 'Chemistry (Sessional)', '101', '103', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(18, 'PHY 102', 'Physics (Sessional)', '101', '103', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(19, 'ME 101', 'Mechanical Drawing', '101', '103', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(20, 'CSE 201', 'Programming with c', '101', '103', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(21, 'CSE 202', 'Programming with c', '101', '103', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(22, 'CHY 201', 'Chemistry', '101', '103', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(23, 'CHY 202', 'Chemistry (Sessional)', '101', '103', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(24, 'PHY 102', 'Physics (Sessional)', '101', '103', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(25, 'ME 101', 'Mechanical Drawing', '101', '103', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(26, 'CSE 201', 'Programming with c', '101', '104', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(27, 'CSE 202', 'Programming with c', '101', '104', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(28, 'CHY 201', 'Chemistry', '101', '104', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(29, 'CHY 202', 'Chemistry (Sessional)', '101', '104', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(30, 'PHY 102', 'Physics (Sessional)', '101', '104', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(31, 'ME 101', 'Mechanical Drawing', '101', '104', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(32, 'CSE 601', 'Compiler Design', '101', '105', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(33, 'CSE 602', 'Compiler Design (Sessional)', '101', '105', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(34, 'CSE 603', 'Networking', '101', '105', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(35, 'CSE 604', 'Networking (Sessional)', '101', '105', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(36, 'CSE 605', 'Software Engineering', '101', '105', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(37, 'CSE 606', 'software Engineering (Sessional)', '101', '105', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(38, 'CSE 607', 'Concrete Mathmetics', '101', '105', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(39, 'CSE 609', 'Numerical Methods', '101', '105', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(40, 'CSE 609', 'Numerical Methods (Sessional)', '101', '105', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(41, 'CSE 201', 'Programming with c', '101', '106', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(42, 'CSE 202', 'Programming with c', '101', '106', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(43, 'CHY 201', 'Chemistry', '101', '106', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(44, 'CHY 202', 'Chemistry (Sessional)', '101', '106', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(45, 'PHY 102', 'Physics (Sessional)', '101', '106', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(46, 'ME 101', 'Mechanical Drawing', '101', '106', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(47, 'CSE 201', 'Programming with c', '101', '108', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(48, 'CSE 202', 'Programming with c', '101', '108', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(49, 'CHY 201', 'Chemistry', '101', '108', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(50, 'CHY 202', 'Chemistry (Sessional)', '101', '108', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(51, 'PHY 102', 'Physics (Sessional)', '101', '108', '3.00', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(52, 'ME 101', 'Mechanical Drawing', '101', '108', '1.50', '2022-02-18 09:40:19', '2022-02-18 09:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `course_exam_registration`
--

CREATE TABLE `course_exam_registration` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Regular',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `short_form`, `created_at`, `updated_at`) VALUES
(101, 'Computer Science & Engineering', 'CSE', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(102, 'Electrical & Electronics Engineering', 'EEE', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(103, 'Civil Engineering', 'CE', '2022-02-18 09:40:19', '2022-02-18 09:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `drop_courses`
--

CREATE TABLE `drop_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `active`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nostrum itaque esse voluptatem.', 'Exercitationem ut molestias voluptate et nobis non omnis dolorem porro nobis consequatur iusto commodi ipsum doloremque amet a laudantium.', 1, '54671fc9-edc0-3601-a272-5c94ce41d247.jpg', '2022-02-25 00:22:26', '2022-02-25 00:22:26'),
(2, 'Doloribus autem delectus corporis.', 'Est et ut rerum ea voluptatem quis nihil sed et temporibus at ut dolorum qui temporibus cumque doloribus veniam ex ut alias ea enim id.', 1, '62af3e7b-db37-3c2e-8687-cc1586790461.jpg', '2022-02-25 00:22:26', '2022-02-25 00:22:26'),
(3, 'Et vero dolorem omnis aperiam.', 'Placeat incidunt cum et voluptatem laborum a architecto doloremque in earum est est.', 1, '58cd072e-65f5-36c9-a221-820cd0203f50.jpg', '2022-02-25 00:22:26', '2022-02-25 00:22:26'),
(4, 'Est ut occaecati quos adipisci.', 'Ex quasi iure modi iure cumque omnis deserunt laudantium dolor voluptatem qui saepe ut quia consequatur ea incidunt tenetur ut ut aut aspernatur temporibus modi.', 1, 'b398017e-8ac5-3569-806d-eed38f7dd48a.jpg', '2022-02-25 00:22:26', '2022-02-25 00:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `registration_start_date` date NOT NULL DEFAULT '2022-02-26',
  `registration_end_date` date NOT NULL DEFAULT '2022-03-08',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Upcoming',
  `notice_published` tinyint(1) NOT NULL DEFAULT 1,
  `result_published` tinyint(1) NOT NULL DEFAULT 0,
  `pdf_routine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `semester_id`, `department_id`, `registration_start_date`, `registration_end_date`, `status`, `notice_published`, `result_published`, `pdf_routine`, `created_at`, `updated_at`) VALUES
(1, '4th year, 2nd Semester Final Exam', 107, 101, '2022-02-28', '2022-03-22', 'Upcoming', 1, 0, NULL, '2022-02-26 18:06:11', '2022-02-26 18:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attendances`
--

CREATE TABLE `exam_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Present',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_registrations`
--

CREATE TABLE `exam_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_course` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_room` int(11) NOT NULL,
  `total_sit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `name`, `phone`, `address`, `total_room`, `total_sit`, `created_at`, `updated_at`) VALUES
(5, 'Muktijuddha Hall', '+8801743920880', 'Alortal Road, Tilagor, Sylhet', 40, 120, '2022-02-18 09:40:19', '2022-02-18 09:40:19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hostel_applications_view`
-- (See below for the actual view)
--
CREATE TABLE `hostel_applications_view` (
`form_id` bigint(20) unsigned
,`student_id` bigint(20) unsigned
,`student_name` varchar(255)
,`department` varchar(255)
,`session` varchar(255)
,`semester` varchar(255)
,`phone` varchar(255)
,`email` varchar(255)
,`father_name` varchar(255)
,`mother_name` varchar(255)
,`dob` varchar(255)
,`blood_group` varchar(255)
,`father_occupation` varchar(255)
,`father_yearly_income` double
,`mother_occupation` varchar(255)
,`mother_yearly_income` double
,`total_family_member` double
,`yearly_family_income` double
,`current_address` text
,`permanent_address` text
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_fees`
--

CREATE TABLE `hostel_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_members`
--

CREATE TABLE `hostel_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) NOT NULL,
  `room_no` int(11) NOT NULL,
  `sit_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_members`
--

INSERT INTO `hostel_members` (`id`, `student_id`, `hostel_id`, `semester_id`, `room_no`, `sit_no`, `created_at`, `updated_at`) VALUES
(1, 2021333201, 5, 0, 506, 9127, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(2, 2018330711, 5, 0, 407, 5688, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(3, 2019330506, 5, 0, 105, 7208, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(4, 2019333890, 5, 0, 208, 6447, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(5, 2015333828, 5, 0, 307, 2776, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(6, 2016334303, 5, 0, 506, 4472, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(7, 2015330305, 5, 0, 205, 9742, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(8, 2016333969, 5, 0, 502, 8026, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(9, 2017332642, 5, 0, 303, 9209, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(10, 2018330283, 5, 0, 305, 8497, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(11, 2017332327, 5, 0, 403, 4153, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(12, 2021331245, 5, 0, 103, 7377, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(13, 2017334794, 5, 0, 104, 3940, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(14, 2013333711, 5, 0, 402, 8911, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(15, 2012333254, 5, 0, 308, 2623, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(16, 2016330376, 5, 0, 509, 1393, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(17, 2011330923, 5, 0, 408, 7752, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(19, 2018332430, 5, 0, 507, 4453, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(20, 2015332395, 5, 0, 306, 1562, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(25, 2016331509, 5, 105, 27, 75, '2022-02-24 03:38:10', '2022-02-24 03:38:10'),
(26, 2015330308, 5, 102, 899, 56, '2022-02-24 10:53:58', '2022-02-24 10:53:58'),
(27, 2022101509, 5, 103, 98, 84, '2022-02-25 05:33:09', '2022-02-25 05:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_payments`
--

CREATE TABLE `hostel_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `hostel_fee_id` bigint(20) NOT NULL,
  `hostel_member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Due',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_payments`
--

INSERT INTO `hostel_payments` (`id`, `student_id`, `semester_id`, `hostel_fee_id`, `hostel_member_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 101, 1, 9, 1350, 'Due', '2022-02-18 18:35:48', '2022-02-18 18:35:48'),
(5, 2016331509, 105, 1, 25, 1350, 'Paid', NULL, NULL),
(6, 2015330308, 102, 1, 26, 1350, 'Paid', NULL, NULL),
(7, 2022101509, 103, 1, 27, 1350, 'Paid', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hostel_payments_view`
-- (See below for the actual view)
--
CREATE TABLE `hostel_payments_view` (
`id` bigint(20) unsigned
,`student_id` bigint(20)
,`semester` varchar(255)
,`amount` int(11)
,`status` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_sit_applications`
--

CREATE TABLE `hostel_sit_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_yearly_income` double NOT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_yearly_income` double NOT NULL,
  `total_family_member` double NOT NULL,
  `yearly_family_income` double NOT NULL,
  `current_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_sit_applications`
--

INSERT INTO `hostel_sit_applications` (`id`, `student_id`, `father_occupation`, `father_yearly_income`, `mother_occupation`, `mother_yearly_income`, `total_family_member`, `yearly_family_income`, `current_address`, `permanent_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 2016331509, 'Esse beatae modi co', 51, 'Consequatur delectus', 23, 76, 60, 'Illum fugit eaque ', 'Id culpa nisi est qu', 'Approved', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hostel_students_view`
-- (See below for the actual view)
--
CREATE TABLE `hostel_students_view` (
`student_name` varchar(255)
,`student_id` bigint(20) unsigned
,`department` varchar(255)
,`session` varchar(255)
,`semester` varchar(255)
,`father_name` varchar(255)
,`mother_name` varchar(255)
,`dob` varchar(255)
,`phone` varchar(255)
,`email` varchar(255)
,`permanent_address` varchar(255)
,`blood_group` varchar(255)
,`room_no` int(11)
,`sit_no` int(11)
,`hostel_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_06_232213_create_students_table', 1),
(7, '2021_04_08_142428_create_roles_table', 1),
(8, '2021_04_08_223358_create_departments_table', 1),
(9, '2021_04_09_220224_create_applications_table', 1),
(10, '2021_04_10_093714_create_semesters_table', 1),
(12, '2021_04_12_124141_create_courses_table', 1),
(13, '2021_04_14_153200_create_teachers_table', 1),
(14, '2021_04_15_081051_create_attendances_table', 1),
(15, '2021_04_15_154410_create_course_teacher_table', 1),
(16, '2021_04_15_200457_create_registration_forms_table', 1),
(17, '2021_04_16_075459_create_payments_table', 1),
(19, '2021_04_16_192338_create_books_table', 1),
(20, '2021_04_17_104741_create_notices_table', 1),
(22, '2021_04_17_160833_create_events_table', 1),
(24, '2021_04_18_051009_create_issue_books_table', 1),
(25, '2021_04_18_081243_create_notifications_table', 1),
(26, '2021_04_18_145400_create_hostel_members_table', 1),
(27, '2021_04_18_195357_create_drop_courses_table', 1),
(28, '2021_04_23_155036_create_role_user_table', 1),
(29, '2021_12_12_162816_create_semester_admissions_table', 1),
(30, '2021_12_16_035838_create_exam_registrations_table', 1),
(31, '2022_02_05_202538_create_applications_for_hostel_seats_table', 1),
(34, '2021_04_17_163841_create_hostels_table', 2),
(35, '2022_02_18_142321_create_provost_table', 2),
(36, '2022_02_18_172828_create_hostel_payments_table', 3),
(37, '2021_04_11_201723_create_admission_applications_table', 4),
(41, '2022_02_18_174231_create_hostel_fees_table', 5),
(42, '2022_02_22_031408_create_hostel_sit_applications_table', 5),
(43, '2022_02_23_144615_create_student_clearances_table', 5),
(44, '2022_02_25_055123_create_slider_images_table', 6),
(55, '2022_02_26_274115_create_results_table', 7),
(58, '2022_02_26_161405_create_sessions_table', 8),
(59, '2022_02_26_152053_create_exams_table', 9),
(60, '2022_02_27_001109_create_exam_attendance_table', 10),
(61, '2022_02_27_005601_create_course_exam_registration_table', 11),
(62, '2022_02_27_013206_create_registration_fees_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provosts`
--

CREATE TABLE `provosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provosts`
--

INSERT INTO `provosts` (`id`, `user_id`, `hostel_id`, `designation`) VALUES
(2, 37, 5, 'Provost');

-- --------------------------------------------------------

--
-- Table structure for table `registration_fees`
--

CREATE TABLE `registration_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Due'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_forms`
--

CREATE TABLE `registration_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `full_marks` double NOT NULL,
  `pass_mark_parcentage` double DEFAULT NULL,
  `obtained_marks` double NOT NULL,
  `stored_by_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `semester_id`, `course_id`, `exam_id`, `full_marks`, `pass_mark_parcentage`, `obtained_marks`, `stored_by_user_id`, `created_at`, `updated_at`) VALUES
(2, 2016331509, 102, 37, 1001, 100, NULL, 80, 60, '2022-02-26 04:36:36', '2022-02-26 06:19:11'),
(4, 2016331509, 105, 33, 1002, 100, NULL, 45, 60, '2022-02-26 04:41:06', '2022-02-26 04:41:06'),
(5, 2016331509, 105, 35, 1002, 100, NULL, 45, 60, '2022-02-26 04:38:02', '2022-02-26 04:38:02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `results_view`
-- (See below for the actual view)
--
CREATE TABLE `results_view` (
`id` bigint(20)
,`student_id` bigint(20) unsigned
,`exam_id` bigint(20) unsigned
,`course_code` varchar(255)
,`course_title` varchar(255)
,`credit` varchar(255)
,`exam_name` varchar(255)
,`obtained_marks` double
,`full_marks` double
,`created_at` timestamp
,`updated_at` timestamp
,`stored_by` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'student', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(2, 'hostel-provost', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(3, 'teacher', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(4, 'admin', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(5, 'librarian', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 2, 7, NULL, NULL),
(6, 1, 8, NULL, NULL),
(7, 1, 9, NULL, NULL),
(8, 1, 10, NULL, NULL),
(9, 1, 11, NULL, NULL),
(10, 1, 12, NULL, NULL),
(11, 1, 13, NULL, NULL),
(12, 1, 14, NULL, NULL),
(13, 1, 15, NULL, NULL),
(14, 1, 16, NULL, NULL),
(15, 1, 17, NULL, NULL),
(16, 1, 18, NULL, NULL),
(17, 1, 19, NULL, NULL),
(18, 1, 20, NULL, NULL),
(19, 1, 21, NULL, NULL),
(20, 1, 22, NULL, NULL),
(21, 1, 23, NULL, NULL),
(22, 1, 24, NULL, NULL),
(23, 1, 25, NULL, NULL),
(24, 1, 26, NULL, NULL),
(25, 1, 27, NULL, NULL),
(26, 4, 29, NULL, NULL),
(27, 4, 31, NULL, NULL),
(28, 4, 32, NULL, NULL),
(29, 4, 34, NULL, NULL),
(30, 1, 35, NULL, NULL),
(31, 1, 36, NULL, NULL),
(32, 2, 37, NULL, NULL),
(33, 1, 38, NULL, NULL),
(34, 1, 39, NULL, NULL),
(35, 1, 40, NULL, NULL),
(36, 1, 41, NULL, NULL),
(37, 1, 42, NULL, NULL),
(38, 1, 43, NULL, NULL),
(39, 1, 44, NULL, NULL),
(40, 1, 45, NULL, NULL),
(41, 1, 46, NULL, NULL),
(42, 1, 47, NULL, NULL),
(43, 1, 48, NULL, NULL),
(44, 1, 49, NULL, NULL),
(45, 1, 50, NULL, NULL),
(46, 1, 51, NULL, NULL),
(47, 1, 52, NULL, NULL),
(48, 1, 53, NULL, NULL),
(49, 1, 54, NULL, NULL),
(50, 1, 55, NULL, NULL),
(51, 1, 56, NULL, NULL),
(52, 1, 57, NULL, NULL),
(53, 3, 60, NULL, NULL),
(54, 1, 61, NULL, NULL),
(55, 1, 68, NULL, NULL),
(56, 1, 69, NULL, NULL),
(57, 1, 70, NULL, NULL),
(58, 5, 72, NULL, NULL),
(59, 1, 73, NULL, NULL),
(60, 1, 75, NULL, NULL),
(61, 1, 78, NULL, NULL),
(62, 1, 79, NULL, NULL),
(63, 1, 82, NULL, NULL),
(64, 1, 87, NULL, NULL),
(65, 1, 88, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `number`, `name`, `short_form`, `created_at`, `updated_at`) VALUES
(101, NULL, '1st year 1st semester', '1/1', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(102, NULL, '1st year 2nd semester', '1/2', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(103, NULL, '2nd year 1st semester', '2/1', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(104, NULL, '2nd year 2nd semester', '2/2', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(105, NULL, '3rd year 1st semester', '3/1', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(106, NULL, '3rd year 2nd semester', '3/2', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(107, NULL, '4th year 1st semester', '4/1', '2022-02-18 11:51:49', '2022-02-18 11:51:49'),
(108, NULL, '4th year 2nd semester', '4/2', '2022-02-18 11:51:49', '2022-02-18 11:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `semester_admissions`
--

CREATE TABLE `semester_admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'incomplete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opened_for_admission` tinyint(1) NOT NULL DEFAULT 0,
  `admission_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not started',
  `batch_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `opened_for_admission`, `admission_status`, `batch_number`, `created_at`, `updated_at`) VALUES
(1, '2016-2017', 0, 'Completed', 10, '2022-02-26 11:00:22', '2022-02-26 12:10:37'),
(4, '2017-2018', 1, 'Ongoing', 11, '2022-02-26 12:14:18', '2022-02-26 12:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, '01.jpg', NULL, NULL),
(2, '02.jpg', NULL, NULL),
(3, '03.jpg', NULL, NULL),
(4, '04.jpg', NULL, NULL),
(5, '05.jpg', NULL, NULL),
(6, '06.jpg', NULL, NULL),
(7, '07.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `session_id` int(255) UNSIGNED NOT NULL DEFAULT 1,
  `semester_id` int(11) NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `department_id`, `session_id`, `semester_id`, `dob`, `phone`, `blood_group`, `father_name`, `mother_name`, `current_address`, `permanent_address`, `created_at`, `updated_at`, `type`) VALUES
(2016331509, 35, 101, 1, 108, '1997-12-16 00:00:00', '+8801743920880', 'A+', 'Tajul Islam', 'Rasheda Khatun', 'Dolura, Bissawmbharpur, Sunamgonj', 'same', '2022-02-18 09:40:19', '2022-02-18 09:40:19', 'Active'),
(2016331510, 87, 101, 1, 101, '1990-04-27', '87', NULL, 'Labore recusandae R', 'Aliquid ut voluptate', 'Culpa inventore nobi', 'Architecto pariatur', '2022-02-26 15:21:47', '2022-02-26 15:21:47', 'Active'),
(2017101501, 88, 101, 4, 101, '2001-07-21', '11', NULL, 'Vel sint perspiciati', 'Non animi accusanti', 'Ipsum culpa fuga D', 'Deserunt laborum Is', '2022-02-26 15:25:56', '2022-02-26 15:25:56', 'Active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `students_view`
-- (See below for the actual view)
--
CREATE TABLE `students_view` (
`student_name` varchar(255)
,`email` varchar(255)
,`student_id` bigint(20) unsigned
,`session` varchar(255)
,`batch` int(11)
,`department` varchar(255)
,`semester` varchar(255)
,`father_name` varchar(255)
,`mother_name` varchar(255)
,`dob` varchar(255)
,`phone` varchar(255)
,`blood_group` varchar(255)
,`current_address` varchar(255)
,`permanent_address` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `student_clearances`
--

CREATE TABLE `student_clearances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `current_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `phone`, `nid`, `dob`, `father_name`, `mother_name`, `department_id`, `current_address`, `permanent_address`, `image`, `created_at`, `updated_at`) VALUES
(1, 60, '+8801743920880', '202022002022020', '12-12-99', 'Mr. Halim', 'Mrs. Halim', 102, 'Current Address', 'Parmanent Address', '', '2022-02-21 22:37:33', '2022-02-21 22:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(34, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$KnZHPaaTLrEfM6W/tavD9uIWethLHzEGv8FuLroND.JfIMoC.T9Re', NULL, NULL, NULL, '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(35, 'Abdul Halim', 'a.halimics@gmail.com', NULL, NULL, '$2y$10$19uqQnBv9wotWimBKMtu0eCKRvP91vc7Lzvij063prya81bkGfeYW', NULL, NULL, 'GgrkyQzN9wNpPVBd7G6sDy1Gt2P6GtrmNPVksR6d1EUC7YaJEd8IWdhSev83', '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(36, 'Toma Banik', 'tomabanik.1997@gmail.com', NULL, NULL, '$2y$10$yJ9Iu5.JknnAjPJ9PYcRguYTsbHyxx74JMOiO.a8Cw62k0Mq3TzBm', NULL, NULL, NULL, '2022-02-18 09:40:19', '2022-02-18 09:40:19'),
(37, 'Test Provost', 'provost@gmail.com', NULL, NULL, '$2y$10$EZV5mRBXgrxwDQcgTrMHPO7rz42xUxSZH7jXr7/a.DpOWB41sJQM.', NULL, NULL, NULL, '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(38, 'Furman Murphy', 'esteban48@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'GnIu5OG6uN', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(39, 'Dr. Rudy Abshire II', 'hoppe.kristofer@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'uHTvWlh8sk', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(40, 'Ewell Gutkowski', 'stephon69@example.net', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'LjeswMXxm4', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(41, 'Cristian Hill', 'mfunk@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '6By2f98io2', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(42, 'Elna Barton Sr.', 'durgan.jacinthe@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'n1PLP2WE76', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(43, 'Brenden Vandervort', 'billy.jacobi@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'qlVZJJwzld', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(44, 'Penelope Koss', 'zcrooks@example.net', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'atwKaYCfcz', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(45, 'Dr. Weldon Aufderhar PhD', 'dianna.boehm@example.net', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'trnILjEbbb', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(46, 'Alverta Ernser', 'marlene51@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'PBStBt0cyW', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(47, 'Stephan Beer MD', 'akautzer@example.net', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'pBN6vWrJt6', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(48, 'Brandon Huel', 'verner15@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'QKeRHiLbFC', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(49, 'Dr. Alvis Roob', 'piper.hill@example.net', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'x4LvGHWwwP', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(50, 'Daphnee Daugherty', 'ccrooks@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '5N9YOAY5ZF', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(51, 'Owen Halvorson', 'koepp.loma@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'hPFF2KnPJF', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(52, 'Rodrigo Rogahn', 'otilia.lind@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'ZvcCBYlCGT', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(53, 'Myra Murphy', 'reed.feil@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'Ujtjaxy9lX', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(54, 'Michaela Kiehn', 'powlowski.avis@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'YEDiZDbW3O', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(55, 'Audra Rolfson MD', 'jerry.legros@example.com', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'IIJNuyrJSL', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(56, 'Dr. Cole Wehner', 'oleannon@example.net', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'Zddx6EgT9C', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(57, 'Ova Padberg', 'murazik.anabel@example.org', NULL, '2022-02-18 09:40:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'm0K7glRQhX', '2022-02-18 09:40:20', '2022-02-18 09:40:20'),
(60, 'Mr. Emon', 'teacher@gmail.com', NULL, NULL, '$2y$10$JkuZcNVL2eICJscrkibleemsBsNPb4I9UcxdVgCzcIjNsgBpCiVLq', NULL, NULL, NULL, '2022-02-21 22:37:33', '2022-02-21 22:37:33'),
(61, 'Laboriosam voluptat', 'vyqekuv@mailinator.com', NULL, NULL, '$2y$10$zaZM9V8QhGqid.whw0ebeecigWNFCTpa2FzkIh204yGxsdw3l4rem', NULL, NULL, NULL, '2022-02-22 14:05:07', '2022-02-22 14:05:07'),
(68, 'Test Student', 'test.student@gmail.com', NULL, NULL, '$2y$10$Tq8e1WZ0jPWN5fgXq29QWOH/fMHImdVBrP38hCUs3gPcSQVlq2Udy', NULL, NULL, NULL, '2022-02-22 14:56:24', '2022-02-22 14:56:24'),
(69, 'Officiis at exercita', 'xovyzydu@mailinator.com', NULL, NULL, '$2y$10$HhTEqXISQkVyJGsdxPscO.4fh4fhO1NpFhkabUBiOsg9D52vTl8/2', NULL, NULL, NULL, '2022-02-22 15:04:57', '2022-02-22 15:04:57'),
(70, 'Toma Banik', 'zelijyd@mailinator.com', NULL, NULL, '$2y$10$Ynr3TM8mMXzuoIgumvvwE.lTj8sHnFas19XE2HixMfqjDAfLeAXMy', NULL, NULL, NULL, '2022-02-24 10:48:14', '2022-02-24 10:48:14'),
(72, 'Kamrul Hasan', 'librarian@gmail.com', NULL, NULL, '$2y$10$lZ.HQyCXQMAVZMZpnPjVZ.QWNtWQb57bSJdtNRxuSQI8u2.1QnHn2', NULL, NULL, NULL, '2022-02-25 01:33:03', '2022-02-25 01:33:03'),
(73, 'Tawfik Alahi', 'tafik@mailinator.com', NULL, NULL, '$2y$10$tBwbAgcdH8ywbXSggAMUc.lzM9woBgRttp2WwAENOhdJ/DyEkAqe6', NULL, NULL, 'Mf1S4POnNaC8We02B4ZeFBGdvEgrsIkNrS4Frss9o7PAWz6O56Cy9AjiKzr4', '2022-02-25 05:18:53', '2022-02-25 05:18:53'),
(75, 'Qui placeat corpori', 'winaquqe@mailinator.com', NULL, NULL, '$2y$10$8AFP1.KM2D0eYFU9f62aM.H2iVclbgVhRW5v0X1bc4K7clS2VxRAG', NULL, NULL, NULL, '2022-02-25 05:27:28', '2022-02-25 05:27:28'),
(78, 'Consectetur officia', 'mejylaryt@mailinator.com', NULL, NULL, '$2y$10$UZB89kW1cjPYR2g4gACgyuyrKlewP7WgmLfNnvmrfR5yS8scK.hE.', NULL, NULL, NULL, '2022-02-26 08:52:13', '2022-02-26 08:52:13'),
(79, 'testing', 'cupyj@mailinator.com', NULL, NULL, '$2y$10$nmj/1itoQgQg/eLyYwSoMOcOr8QSpHsrgLjrNccR5EC5peop9bd52', NULL, NULL, NULL, '2022-02-26 09:02:31', '2022-02-26 09:02:31'),
(82, 'Blanditiis nesciunt', 'qeho@mailinator.com', NULL, NULL, '$2y$10$8wZund4HJR3zi2dKi6kon.LWo3tBeC.WhhO2617j7VF5fEwTQAna6', NULL, NULL, NULL, '2022-02-26 13:59:24', '2022-02-26 13:59:24'),
(87, 'Humba', 'kemytyw@mailinator.com', NULL, NULL, '$2y$10$/fvnx7rcfx45zL/Xj3FDeeUxHl92SEmRHWwobKg2.vhF87VKA8jsy', NULL, NULL, NULL, '2022-02-26 15:21:47', '2022-02-26 15:21:47'),
(88, 'Iure sint culpa tot', 'bosurejoz@mailinator.com', NULL, NULL, '$2y$10$Lun6Z/Ps/qWSDup04Z9Qv.j0urNX6dXZLuuTgvuzvniVA/NgzzXZ6', NULL, NULL, NULL, '2022-02-26 15:25:56', '2022-02-26 15:25:56');

-- --------------------------------------------------------

--
-- Structure for view `hostel_applications_view`
--
DROP TABLE IF EXISTS `hostel_applications_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hostel_applications_view`  AS SELECT `hsa`.`id` AS `form_id`, `stv`.`student_id` AS `student_id`, `stv`.`student_name` AS `student_name`, `stv`.`department` AS `department`, `stv`.`session` AS `session`, `stv`.`semester` AS `semester`, `stv`.`phone` AS `phone`, `stv`.`email` AS `email`, `stv`.`father_name` AS `father_name`, `stv`.`mother_name` AS `mother_name`, `stv`.`dob` AS `dob`, `stv`.`blood_group` AS `blood_group`, `hsa`.`father_occupation` AS `father_occupation`, `hsa`.`father_yearly_income` AS `father_yearly_income`, `hsa`.`mother_occupation` AS `mother_occupation`, `hsa`.`mother_yearly_income` AS `mother_yearly_income`, `hsa`.`total_family_member` AS `total_family_member`, `hsa`.`yearly_family_income` AS `yearly_family_income`, `hsa`.`current_address` AS `current_address`, `hsa`.`permanent_address` AS `permanent_address`, `hsa`.`created_at` AS `created_at` FROM (`hostel_sit_applications` `hsa` join `students_view` `stv` on(`stv`.`student_id` = `hsa`.`student_id`)) ORDER BY `hsa`.`id` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `hostel_payments_view`
--
DROP TABLE IF EXISTS `hostel_payments_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hostel_payments_view`  AS SELECT `hp`.`id` AS `id`, `hp`.`student_id` AS `student_id`, `sem`.`name` AS `semester`, `hp`.`amount` AS `amount`, `hp`.`status` AS `status` FROM (`hostel_payments` `hp` join `semesters` `sem` on(`hp`.`semester_id` = `sem`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `hostel_students_view`
--
DROP TABLE IF EXISTS `hostel_students_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hostel_students_view`  AS SELECT `sv`.`student_name` AS `student_name`, `sv`.`student_id` AS `student_id`, `sv`.`department` AS `department`, `sv`.`session` AS `session`, `sv`.`semester` AS `semester`, `sv`.`father_name` AS `father_name`, `sv`.`mother_name` AS `mother_name`, `sv`.`dob` AS `dob`, `sv`.`phone` AS `phone`, `sv`.`email` AS `email`, `sv`.`permanent_address` AS `permanent_address`, `sv`.`blood_group` AS `blood_group`, `hm`.`room_no` AS `room_no`, `hm`.`sit_no` AS `sit_no`, `hostels`.`name` AS `hostel_name` FROM ((`students_view` `sv` join `hostel_members` `hm` on(`sv`.`student_id` = `hm`.`student_id`)) join `hostels` on(`hm`.`hostel_id` = `hostels`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `results_view`
--
DROP TABLE IF EXISTS `results_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `results_view`  AS SELECT `r`.`id` AS `id`, `r`.`student_id` AS `student_id`, `e`.`id` AS `exam_id`, `c`.`course_code` AS `course_code`, `c`.`title` AS `course_title`, `c`.`credit` AS `credit`, `e`.`name` AS `exam_name`, `r`.`obtained_marks` AS `obtained_marks`, `r`.`full_marks` AS `full_marks`, `r`.`created_at` AS `created_at`, `r`.`updated_at` AS `updated_at`, `u`.`name` AS `stored_by` FROM (((`results` `r` join `courses` `c` on(`r`.`course_id` = `c`.`id`)) join `exams` `e` on(`e`.`id` = `r`.`exam_id`)) join `users` `u` on(`r`.`stored_by_user_id` = `u`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `students_view`
--
DROP TABLE IF EXISTS `students_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students_view`  AS SELECT `u`.`name` AS `student_name`, `u`.`email` AS `email`, `st`.`id` AS `student_id`, `ses`.`name` AS `session`, `ses`.`batch_number` AS `batch`, `dept`.`name` AS `department`, `sem`.`name` AS `semester`, `st`.`father_name` AS `father_name`, `st`.`mother_name` AS `mother_name`, `st`.`dob` AS `dob`, `st`.`phone` AS `phone`, if(`st`.`blood_group` is null,'',`st`.`blood_group`) AS `blood_group`, `st`.`current_address` AS `current_address`, `st`.`permanent_address` AS `permanent_address` FROM ((((`students` `st` join `users` `u` on(`u`.`id` = `st`.`user_id`)) join `departments` `dept` on(`dept`.`id` = `st`.`department_id`)) join `semesters` `sem` on(`sem`.`id` = `st`.`semester_id`)) join `sessions` `ses` on(`st`.`session_id` = `ses`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_applications`
--
ALTER TABLE `admission_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications_for_hostel_seats`
--
ALTER TABLE `applications_for_hostel_seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_for_hostel_seats_student_id_foreign` (`student_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_exam_registration`
--
ALTER TABLE `course_exam_registration`
  ADD PRIMARY KEY (`student_id`,`course_id`,`exam_id`),
  ADD KEY `course_exam_registration_semester_id_foreign` (`semester_id`),
  ADD KEY `course_exam_registration_exam_id_foreign` (`exam_id`),
  ADD KEY `course_exam_registration_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drop_courses`
--
ALTER TABLE `drop_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_semester_id_foreign` (`semester_id`),
  ADD KEY `exams_department_id_foreign` (`department_id`);

--
-- Indexes for table `exam_attendances`
--
ALTER TABLE `exam_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_attendances_student_id_foreign` (`student_id`),
  ADD KEY `exam_attendances_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_attendances_course_id_foreign` (`course_id`);

--
-- Indexes for table `exam_registrations`
--
ALTER TABLE `exam_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_fees`
--
ALTER TABLE `hostel_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel_fees_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `hostel_members`
--
ALTER TABLE `hostel_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_payments`
--
ALTER TABLE `hostel_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel_payments_semester_id_foreign` (`semester_id`),
  ADD KEY `hostel_payments_hostel_member_id_foreign` (`hostel_member_id`);

--
-- Indexes for table `hostel_sit_applications`
--
ALTER TABLE `hostel_sit_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel_sit_applications_student_id_foreign` (`student_id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `provosts`
--
ALTER TABLE `provosts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provosts_provost_id_foreign` (`user_id`),
  ADD KEY `provosts_hostel_id_foreign` (`hostel_id`);

--
-- Indexes for table `registration_fees`
--
ALTER TABLE `registration_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_fees_form_id_foreign` (`form_id`),
  ADD KEY `registration_fees_student_id_foreign` (`student_id`);

--
-- Indexes for table `registration_forms`
--
ALTER TABLE `registration_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`student_id`,`exam_id`,`course_id`),
  ADD KEY `results_semester_id_foreign` (`semester_id`),
  ADD KEY `results_course_id_foreign` (`course_id`),
  ADD KEY `results_exam_id_foreign` (`exam_id`),
  ADD KEY `results_stored_by_user_id_foreign` (`stored_by_user_id`),
  ADD KEY `result_index` (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_admissions`
--
ALTER TABLE `semester_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sessions_name_unique` (`name`),
  ADD UNIQUE KEY `sessions_batch_number_unique` (`batch_number`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_clearances`
--
ALTER TABLE `student_clearances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_applications`
--
ALTER TABLE `admission_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications_for_hostel_seats`
--
ALTER TABLE `applications_for_hostel_seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `drop_courses`
--
ALTER TABLE `drop_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_attendances`
--
ALTER TABLE `exam_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_registrations`
--
ALTER TABLE `exam_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hostel_fees`
--
ALTER TABLE `hostel_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_members`
--
ALTER TABLE `hostel_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hostel_payments`
--
ALTER TABLE `hostel_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hostel_sit_applications`
--
ALTER TABLE `hostel_sit_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provosts`
--
ALTER TABLE `provosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration_fees`
--
ALTER TABLE `registration_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_forms`
--
ALTER TABLE `registration_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `semester_admissions`
--
ALTER TABLE `semester_admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022101511;

--
-- AUTO_INCREMENT for table `student_clearances`
--
ALTER TABLE `student_clearances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications_for_hostel_seats`
--
ALTER TABLE `applications_for_hostel_seats`
  ADD CONSTRAINT `applications_for_hostel_seats_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_exam_registration`
--
ALTER TABLE `course_exam_registration`
  ADD CONSTRAINT `course_exam_registration_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_exam_registration_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_exam_registration_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_exam_registration_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_attendances`
--
ALTER TABLE `exam_attendances`
  ADD CONSTRAINT `exam_attendances_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_attendances_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hostel_fees`
--
ALTER TABLE `hostel_fees`
  ADD CONSTRAINT `hostel_fees_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`);

--
-- Constraints for table `hostel_payments`
--
ALTER TABLE `hostel_payments`
  ADD CONSTRAINT `hostel_payments_hostel_member_id_foreign` FOREIGN KEY (`hostel_member_id`) REFERENCES `hostel_members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hostel_payments_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hostel_sit_applications`
--
ALTER TABLE `hostel_sit_applications`
  ADD CONSTRAINT `hostel_sit_applications_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provosts`
--
ALTER TABLE `provosts`
  ADD CONSTRAINT `provosts_hostel_id_foreign` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `provosts_provost_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registration_fees`
--
ALTER TABLE `registration_fees`
  ADD CONSTRAINT `registration_fees_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `registration_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_fees_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_stored_by_user_id_foreign` FOREIGN KEY (`stored_by_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
