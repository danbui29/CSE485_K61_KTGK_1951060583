-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 06:57 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `exam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exams`
--

CREATE TABLE `exams` (
  `id` varchar(50) NOT NULL,
  `exam_title` varchar(50) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` time NOT NULL,
  `total_question` int(11) NOT NULL,
  `marks_per_right_answer` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `status_exams` varchar(50) NOT NULL,
  `exam_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `exams`
--

INSERT INTO `exams` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status_exams`, `exam_code`) VALUES
('01', 'Lập trình wedsite', '2021-10-14', '22:03:09', 50, 1, '2021-10-15', 'Pending', '123abc'),
('02', 'Mạng máy tính', '2021-10-04', '46:06:09', 50, 1, '2021-10-30', '‘Created', '234bcd'),
('1222', 'Công nghệ thông tin', '2021-10-10', '00:00:45', 50, 1, '2021-10-27', 'Pending', '222'),
('1223', 'Kinh tế', '0000-00-00', '00:00:45', 50, 1, '2021-10-28', 'Pending', '234'),
('1235', 'Công nghệ thông tin', '2021-10-10', '00:00:45', 50, 1, '2021-10-28', 'Pending', '333');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
