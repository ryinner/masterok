-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 29 2021 г., 17:21
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
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(9, 'Косметический ремонт'),
(10, 'Капитальный ремонт'),
(11, 'Ремонт электрики');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_price` int(11) DEFAULT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Новая',
  `before_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `after_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `timestamp`, `address`, `category`, `description`, `max_price`, `status`, `before_image`, `after_image`) VALUES
(4, 3, '2021-10-29 14:10:55', 'Яблочкина 20, 71', 9, 'Красивый дом нужен ремонт ', 120000, 'Отремонтированно', '../img/orders/img8.jpg', '../img/orders/img7.jpg'),
(5, 3, '2021-10-29 14:11:27', 'Курчатова 12, 88', 10, 'Красивое описание', 60000, 'Отремонтированно', '../img/orders/img6.jpg', '../img/orders/img5.png'),
(6, 3, '2021-10-29 14:12:03', 'Южная 89, 41', 11, 'Не красивое описание', 40000, 'Отремонтированно', '../img/orders/img4.jpg', '../img/orders/img2.jpg'),
(7, 3, '2021-10-29 14:12:27', 'Фиолетовая 42', 9, 'Очень оригинальное описание', 55000, 'Отремонтированно', '../img/orders/img3.jpg', '../img/orders/img1.jpg'),
(8, 3, '2021-10-29 14:12:03', 'Северная 15', 11, 'Красивое описание', 80000, 'Новая', '', NULL),
(9, 3, '2021-10-29 14:12:27', 'Восточная 14', 9, 'Не нужное описание', 400000, 'Новая', '', NULL),
(10, 3, '2021-10-29 14:19:13', 'Интересный адрес', 9, 'Не менее оригинальное описание', 1200000, 'Новая', '../img/orders/folder.png', NULL);

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
(1, 'Админ', 'admin', 'admin@mail.ru', '$2y$10$DxljSQOaUe28fnOHProjVOwlXIIwCLFWp88RF1vSAakNm6sQWnzky'),
(2, 'Тестовый Логин', 'testlogin', 'testlogin@mail.ru', '$2y$10$6wv94mg5eI5AtRz8GbK3RuFRgt2bm9onUADWlb2Wgr5yAOrfzLlfK'),
(3, 'Тест', 'test', 'test@mail.ru', '$2y$10$wZTSWb4b3P1G2E3e6C2mF.LfwZFCr4WOyP2Ri11RAtoVz04g0iIKC');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
