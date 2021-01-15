-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 15 2021 г., 11:53
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `myblog`
--

CREATE TABLE `myblog` (
  `id_post` int(10) UNSIGNED NOT NULL,
  `author` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `myblog`
--

INSERT INTO `myblog` (`id_post`, `author`, `title`, `post`) VALUES
(31, 'Leonid', 'Test form', '3453'),
(32, 'Leonid', 'Simple title', 'text'),
(33, 'Eugen', 'Lorem', 'is the best text');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `myblog`
--
ALTER TABLE `myblog`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `myblog`
--
ALTER TABLE `myblog`
  MODIFY `id_post` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
