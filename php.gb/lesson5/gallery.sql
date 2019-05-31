-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2019 г., 15:04
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(128) NOT NULL,
  `size` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `views` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path`, `size`, `name`, `views`) VALUES
(1, 'images/', 105822, 'butterfly-1127666_960_720.jpg', 0),
(2, 'images/', 140281, 'butterfly-1391809_960_720.jpg', 0),
(3, 'images/', 92178, 'crocus-2139771_960_720.jpg', 0),
(4, 'images/', 131030, 'crocus-4030138_960_720.jpg', 0),
(5, 'images/', 87295, 'japanese-cherry-trees-324175_960_720.jpg', 3),
(6, 'images/', 75558, 'ladybug-4125852_960_720.jpg', 0),
(7, 'images/', 107484, 'nature-1593406_960_720.jpg', 0),
(8, 'images/', 173179, 'rose-174817_960_720.jpg', 2),
(9, 'images/', 218766, 'spring-276014_960_720.jpg', 0),
(10, 'images/', 297123, 'spring-awakening-1197602_960_720.jpg', 0),
(11, 'images/', 157043, 'spring-bird-2295431_960_720.jpg', 0),
(12, 'images/', 120695, 'tulips-320151_960_720.jpg', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
