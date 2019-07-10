-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 25 2019 г., 00:09
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
  `name_item` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `brand` varchar(64) NOT NULL,
  `designer` varchar(64) NOT NULL,
  `material` varchar(64) NOT NULL,
  `color` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL,
  `desc_item` text NOT NULL,
  `price` int(12) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name_item`, `category`, `brand`, `designer`, `material`, `color`, `size`, `desc_item`, `price`, `quantity`, `img`, `is_active`) VALUES
(1, 'T-shirt', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'White', 'XL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 52, 5, 'uploads/product_1.jpg', 1),
(2, 'Blouse', 'Women', 'Mango  People', 'Binburhan', 'Cotton', 'Red', 'L', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 96, 3, 'uploads/product_2.jpg', 1),
(3, 'Jacket', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'Black', 'XXL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 124, 4, 'uploads/product_3.jpg', 1),
(4, 'Dress', 'Women', 'Mango  People', 'Binburhan', 'Cotton', 'White', 'S', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 67, 6, 'uploads/product_4.jpg', 1),
(5, 'Blouse', 'Women', 'Mango  People', 'Binburhan', 'Cotton', 'Black', 'XL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 65, 0, 'uploads/product_5.jpg', 1),
(6, 'Jacket', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'Gray', 'L', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 84, 6, 'uploads/product_6.jpg', 1),
(7, 'Trousers', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'White', 'XXL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 73, 4, 'uploads/product_7.jpg', 1),
(8, 'Sweater', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'Blue', 'SL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 84, 4, 'uploads/product_8.jpg', 1),
(9, 'Jacket', 'Men', 'Calvin Klein', 'Poul Smith', 'Cotton', 'Black', 'XL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 206, 1, 'uploads/product1.jpg', 0),
(10, 'Jacket', 'Men', 'Calvin Klein', 'Poul Smith', 'Cotton', 'Brown', 'XXL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 254, 2, 'uploads/product2.jpg', 0),
(11, 'T-shirt', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'White', 'L', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 164, 5, 'uploads/product4.jpg', 0),
(12, 'Trousers', 'Men', 'Calvin Klein', 'Poul Smith', 'Cotton', 'White', 'L', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 167, 5, 'uploads/product6.jpg', 0),
(13, 'Jacket', 'Men', 'Mango  People', 'Binburhan', 'Cotton', 'Brown', 'XXL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 324, 3, 'uploads/product8.jpg', 0),
(14, 'T-shirt', 'Men', 'Calvin Klein', 'Poul Smith', 'Cotton', 'Blue', 'L', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 56, 4, 'uploads/product9.jpg', 0),
(15, 'Sweater', 'Women', 'Mango  People', 'Binburhan', 'Cotton', 'Gray', 'S', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 87, 2, 'uploads/alsoImg4.jpg', 0),
(16, 'Trousers', 'Kids', 'Mango  People', 'Poul Smith', 'Cotton', 'White', '136', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 124, 4, 'uploads/categKids.jpg', 0),
(17, 'Jacket', 'Women', 'Mango  People', 'Binburhan', 'Cotton', 'Black', 'L', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 347, 2, 'uploads/offerForWomen.jpg', 0),
(18, 'Leggings', 'Women', 'Mango  People', 'Binburhan', 'Cotton', 'Black', 'SL', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fugiat cum necessitatibus! Vitae illo libero, veniam excepturi odit, tenetur adipisci quas fugit, magnam nam sapiente minima laudantium culpa esse. Corporis tenetur fugiat inventore, distinctio laudantium aperiam aspernatur dicta maxime, quos dolorum sed unde. Explicabo vero cum aliquam id dolorem repellat?', 85, 2, 'uploads/slide.jpg', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
