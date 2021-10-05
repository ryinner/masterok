-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 05 2021 г., 19:09
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
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `before_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `after_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `timestamp`, `address`, `category`, `status`, `before_image`, `after_image`) VALUES
(5, '2021-09-30 06:13:12', 'Россия, г. Киров, Северная ул., д. 11 кв.111', 'Частичный ремонт', 'не отремонтированно', '../img/orders/img3.jpg', '../img/orders/img1.jpg'),
(6, '2021-09-30 06:13:32', 'Россия, г. Дербент, Космонавтов ул., д. 17 кв.128', 'Частичный ремонт', 'отремонтированно', '../img/orders/img4.jpg', '../img/orders/img2.jpg'),
(7, '2021-09-30 06:13:45', 'Россия, г. Подольск, Интернациональная ул., д. 8 кв.27', 'Косметический ремонт', 'отремонтированно', '../img/orders/img6.jpg', '../img/orders/img5.png'),
(8, '2021-09-30 06:39:37', 'Россия, г. Абакан, Вокзальная ул., д. 4 кв.103', 'Косметический ремонт', 'отремонтированно', '../img/orders/img8.jpg', '../img/orders/img7.jpg');

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
(1, 'Евгений', 'evg', 'evg@mail.ru', '$2y$10$PTPxJWv7zOHU2MenxEOk5OyzRgQPa1s4cOklnjbB.gwA4S3zXQAyK'),
(2, '', 'evge', '', '$2y$10$7C/vs6RwR/fx5eX3qdJtduaIIbyIPMViTUjitfYE40QzCeccw0ucy'),
(3, 'evn', 'evn', 'evnevnevn', '$2y$10$DUQKAHLWvSFoslf55LyWNedkd7omDT6uYbjaEI.VTRLgUFddrS.M6'),
(4, '', 'evd', '', '$2y$10$a0R18ZU7MQ.FYYgClEp0yumRKRxeW3q0JpvvHW4LDs6dHZ2Z7hwoi'),
(5, '', '123', '', '$2y$10$ToAi0jkEBflUWfLz/8S9xO9wYQVb1mZuPqCZEtRpu7fRJGcj.JjGu'),
(6, '1234', '1234', '1234', '$2y$10$Wm0hEM/NGkPPIslzgPgUnOEuiBvHbdbXdvzSG1BQb1Su83WtHJDTa'),
(7, '', '', '', '$2y$10$Bo15e/Fe.GjV9mPeCtxiHui9uEHPmZZBkOqr77imXZ.fCJ9d/ekqS'),
(8, '', 'ev', '', '$2y$10$QyHvu/N4hDG4Or7uu9p/Ie9E3omNkWKRcvjDvmdatQVD6Mnn/BahO'),
(9, '', 'evgen', '', '$2y$10$BLg04mlj/kOLg8545u7d4e8oaxWGE4dfcC6HQz188Jnlg/l9Hw9ZC'),
(10, '', 'evget', '', '$2y$10$6jL3I1WuaoQ8pL.QQeOrjud3KP4W6n674.ZwGkcZ3rWxMLxAHY/D6'),
(11, '', 'evgetevget', '', '$2y$10$UPVF/GDMRS0XRu3yL01zGedtpSwTvBkVjPE5t.d4m6aECi7rMYmLi'),
(12, '', 'evg1', '', '$2y$10$ViXHNIcJEat1UccE6zT6ueVFTRudADJ9bNBxorI.2gtiRzBUavegm');

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
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
