-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2019 г., 18:54
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
-- База данных: `myproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(12) NOT NULL,
  `id_item` int(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` int(12) NOT NULL,
  `count` int(12) NOT NULL,
  `login` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(12) NOT NULL,
  `login` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `brand` varchar(64) NOT NULL,
  `desinger` varchar(64) NOT NULL,
  `material` varchar(64) NOT NULL,
  `color` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` int(12) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `category`, `brand`, `desinger`, `material`, `color`, `size`, `description`, `price`, `quantity`, `img`, `is_active`) VALUES
(1, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_1.jpg', 1),
(2, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_2.jpg', 1),
(3, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_3.jpg', 1),
(4, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_4.jpg', 1),
(5, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_5.jpg', 1),
(6, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_6.jpg', 1),
(7, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_7.jpg', 1),
(8, 'Mango  People  T-shirt', 'featured', '', '', '', '', '', '', 52, 0, 'images/product_8.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `login` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
