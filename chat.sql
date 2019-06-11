-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 11 2019 г., 19:53
-- Версия сервера: 5.7.21-log
-- Версия PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `msg`
--

CREATE TABLE `msg` (
  `name` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `msgtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `msg`
--

INSERT INTO `msg` (`name`, `text`, `msgtime`) VALUES
('Test1', 'Test1', '2019-06-11 19:36:51'),
('Ð¢ÐµÑÑ‚', 'Ð¢ÐµÑÑ‚', '2019-06-11 19:42:32'),
('Ð¢ÐµÑÑ‚2', 'Ð¢ÐµÑÑ‚2', '2019-06-11 19:44:37'),
('Ð¢ÐµÑÑ‚3', 'Ð¢ÐµÑÑ‚3', '2019-06-11 19:45:03'),
('Ð¢ÐµÑÑ‚4', 'Ð¢ÐµÑÑ‚4', '2019-06-11 19:45:14'),
('again', 'again', '2019-06-11 19:45:27'),
('Ð¢ÐµÑÑ‚5', 'Ð¢ÐµÑÑ‚5', '2019-06-11 19:45:52'),
('Test6', 'Test6', '2019-06-11 19:51:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
