-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 22 2018 г., 13:23
-- Версия сервера: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- Версия PHP: 7.1.20-1+ubuntu18.04.1+deb.sury.org+1

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
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(11) UNSIGNED NOT NULL,
  `message` tinytext,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `message`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dsadsad', 1, '2018-08-21 14:45:17', '2018-08-21 14:45:17', NULL),
(2, 'sdjlkasjdlkjsalkd', 3, '2018-08-21 14:46:10', '2018-08-21 14:46:10', NULL),
(3, 'test', 3, '2018-08-21 14:47:25', '2018-08-21 14:47:25', NULL),
(4, 'test', 1, '2018-08-22 07:20:45', '2018-08-22 07:20:45', NULL),
(5, 'dsadsad', 1, '2018-08-22 07:20:49', '2018-08-22 07:20:49', NULL),
(6, 'adsdassda', 1, '2018-08-22 07:20:51', '2018-08-22 07:20:51', NULL),
(7, 'dsadsada', 1, '2018-08-22 07:20:54', '2018-08-22 07:20:54', NULL),
(8, 'dasdas', 1, '2018-08-22 07:20:56', '2018-08-22 07:20:56', NULL),
(9, 'ter', 1, '2018-08-22 07:46:42', '2018-08-22 07:46:42', NULL),
(10, '111', 3, '2018-08-22 08:05:20', '2018-08-22 08:05:20', NULL),
(11, 'ggg', 1, '2018-08-22 10:22:09', '2018-08-22 10:22:09', NULL),
(12, '7777', 1, '2018-08-22 10:22:17', '2018-08-22 10:22:17', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tet-a-tet`
--

CREATE TABLE `tet-a-tet` (
  `id` int(11) UNSIGNED NOT NULL,
  `message` tinytext,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asd', 'asd@adasdas', 'asd', '2018-08-16 09:47:23', '2018-08-16 09:47:23', NULL),
(2, 'dasd', 'dasdsa@ma', 'dsad', '2018-08-20 14:43:15', '2018-08-20 14:43:15', NULL),
(3, 'min', 'min@min', 'min', '2018-08-21 12:11:05', '2018-08-21 12:11:05', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tet-a-tet`
--
ALTER TABLE `tet-a-tet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `tet-a-tet`
--
ALTER TABLE `tet-a-tet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
