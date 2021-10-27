-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2021 г., 20:23
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
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_price` int(11) NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Новая',
  `before_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `after_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `timestamp`, `address`, `category`, `description`, `max_price`, `status`, `before_image`, `after_image`) VALUES
(5, '2021-09-30 06:13:12', 'address 5', 'Частичный ремонт', '', 0, 'не отремонтированно', '../img/orders/img3jpg', '../img/orders/img1.jpg'),
(6, '2021-09-30 06:13:32', 'address 6', 'Частичный ремонт', '', 0, 'отремонтированно', '../img/orders/img4.jpg', '../img/orders/img2.jpg'),
(7, '2021-09-30 06:13:45', 'address 7', 'Косметический ремонт', '', 0, 'не отремонтированно', '../img/orders/img6.jpg', '../img/orders/img5.png'),
(8, '2021-09-30 06:39:37', 'address 8', 'Косметический ремонт', '', 0, 'отремонтированно', '../img/orders/img8.jpg', '../img/orders/img7.jpg'),
(9, '2021-10-26 04:53:41', 'address 9', 'new category', 'very looooooooong decription', 1111111, 'Новая', 'before_img', NULL),
(10, '2021-10-26 04:53:55', 'Новый адрес', 'Косметический ремонт', 'Новое описание', 1200400, 'Новая', '../img/orders/20rabotsnovafix.dt', NULL);

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
(66, '', 'ev', '', '$2y$10$MxseKPVVIU6vDJplq5EwAuiLsUXSuEkiZkG2snMebjcmDTSf8ihdS'),
(67, 'фыв', 'asd', 'buharin_2002@mail.ru', '$2y$10$9hKg7ajUlywiGR8MsvquC.ATd6FB542vQWAiX7SRfmXOJaBhqcoVW'),
(68, 'Бухарин Е А', 'bukharin', 'buharin_2002@mail.ru', '$2y$10$EaLX8ef8RSRKzFN6ETiHm.XsL.GxIU7JI7yn6gh7lGuoziSntEvzO'),
(69, 'еваааа', 'v', 'buharin_2002@mail.ru', '$2y$10$lgk.LQaZbWOgdTt8pyRwcePu.HIv.WFcMV5uFJzYCRzyGimK6EKEK'),
(70, 'Еввв', 'evgq', 'evgq@google.com', '$2y$10$EnRPYEVEmXFIDBV4I7Xca.osaXTWlODg19DvMRxeW7Ez7SUR/j5l6'),
(71, 'Егвений', 'regina', 'regina@mail.ru', '$2y$10$Jz8Ik8ipR5v9Hr42tavx3etnxujMNpMJwEqFvDkP0ay7SFhcxX99C'),
(72, '[', '[', '[', '$2y$10$751EKd0ByIqsyBrsoghBeOBewaGe488dGyY/5xZcO6u68ycDBYpbe'),
(73, 'фио', 'loginbbb', 'loginbbb@mauk.ru', '$2y$10$7/CsTE5To7zeB0RM8ec.Lu3fhgrC8MrCiy3MhDS1ILsgzwTAaeEwS'),
(74, 'Зубенко Михаил Петрович', 'zubenkooo', 'zubenkooo@mail.ru', '$2y$10$thElIYeqcbr/1Z.ZpGRt3ulExKrXApcXFneeKbwr9VxjnXcNZxzIq'),
(75, 'Зубенко Михаил Петрович', 'zubenkooos', 'zubenkooo@mail.ru', '$2y$10$TqEaPfrtj396zAwt2V.Uwe7In5HMH68e2FDy/mbR25iYmQtShLo9i'),
(76, 'Бухарин Евгений Александрович', 'bukharina', 'bukharin@mail.ru', '$2y$10$OJ0LPK.Spop.6sz1mGeft.ke4YmpaPMHoObqVoAjkOvBYqnTRx/UG');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
