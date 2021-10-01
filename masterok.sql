-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 01 2021 г., 15:52
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `masterok`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path`, `order_id`) VALUES
(2, '../img/orders/img1.jpg', 1),
(3, '../img/orders/img2.jpg', 2),
(4, '../img/orders/img3.jpg', 3),
(5, '../img/orders/img4.jpg', 4),
(6, '../img/orders/img5.png', 5),
(7, '../img/orders/img6.jpg', 6),
(8, '../img/orders/img7.jpg', 7),
(9, '../img/orders/img8.jpg', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `timestamp`, `address`, `category`, `status`) VALUES
(1, '2021-09-30 06:12:10', 'address 1', 'Косметический ремонт', 'отремонтированно'),
(2, '2021-09-30 06:12:16', 'address 2', 'Полный ремонт', 'отремонтированно'),
(3, '2021-09-30 06:12:16', 'address 3', 'Частичный ремонт', 'отремонтированно'),
(4, '2021-09-30 06:12:46', 'address 4', 'Полный ремонт', 'отремонтированно'),
(5, '2021-09-30 06:13:12', 'address 5', 'Частичный ремонт', 'не отремонтированно'),
(6, '2021-09-30 06:13:32', 'address 6', 'Частичный ремонт', 'отремонтированно'),
(7, '2021-09-30 06:13:45', 'address 7', 'Косметический ремонт', 'не отремонтированно'),
(8, '2021-09-30 06:39:37', 'address 8', 'Косметический ремонт', 'отремонтированно');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`) VALUES
(60, '', 'evgeniy', '', '$2y$10$yN2rrrVev2peGsq2757YZesjPN.U.e5hnSEkJOC58wvx/t6xnUId.'),
(61, '', 'evg', '', '$2y$10$i6kbxIphHLzxZOXpjoNDpOnT3YCeWuJa2bnjVFll0btFPQVRgEzuW'),
(62, '', 'evge', '', '$2y$10$2ZBi19aaPqUWdNKKvGy5V.HTMAxj0.I632P1KwXPnsEbzj7b8Y.4C'),
(63, '', 'evgen', '', '$2y$10$HKmLqo8BQ0yPV7BN1BKFL.pqG/OKwmAmZN1qsQx45YLqTy.t1MTmO'),
(64, '', '', '', '$2y$10$CQxD72vNNfepsFMrXfHsgOX9x5w2bTYUyp2dVtI/f8vLBMMZBoV0u'),
(65, '', 'evgen1', '', '$2y$10$XSJDeB3FmN0i/FMj0p/3d.yPTqzOA9bQ0c8F3jxtFJFmNS904U9nC'),
(66, '', 'ev', '', '$2y$10$MxseKPVVIU6vDJplq5EwAuiLsUXSuEkiZkG2snMebjcmDTSf8ihdS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
