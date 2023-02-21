-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 21 2023 г., 04:01
-- Версия сервера: 5.7.33-0ubuntu0.16.04.1
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ikkbkfin_m1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `country`, `year`, `model`, `count`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Epson', 14000, '/public/img/printer1.png', 'Russia', 2015, 'm-51', 10, 1, NULL, NULL),
(2, 'Sony', 13000, '/public/img/printer2.png', 'China', 2021, 'gm-1151', 9, 1, NULL, NULL),
(3, 'Codak', 10000, '/public/img/printer3.png', 'Japan', 2016, 'mh-01', 11, 2, NULL, NULL),
(4, 'LG', 24000, '/public/img/printer4.png', 'Portugal', 2019, 'gf-44', 15, 3, NULL, NULL),
(5, 'HP', 10000, '/public/img/printer5.png', 'USA', 2011, 'sm-505', 0, 1, NULL, NULL),
(6, 'Philips', 19000, '/public/img/printer6.png', 'Germany', 2017, 'gg-911', 3, 2, NULL, NULL),
(7, 'Canon', 35000, '/public/img/printer7.png', 'Spain', 2023, 'ultraM-010', 15, 3, NULL, NULL),
(8, 'Epson', 17000, '/public/img/printer8.png', 'Russia', 2019, 'VB-501', 10, 1, NULL, NULL),
(9, 'Sony', 18000, '/public/img/printer9.png', 'China', 2023, 'gL-7191', 7, 1, NULL, NULL),
(10, 'Codak', 9000, '/public/img/printer10.png', 'Japan', 2011, 'AB-010', 3, 2, NULL, NULL),
(11, 'LG', 23000, '/public/img/printer11.png', 'Portugal', 2020, 'PP-404', 11, 3, NULL, NULL),
(12, 'HP', 10500, '/public/img/printer12.png', 'USA', 2011, 'LP-5050', 1, 1, NULL, NULL),
(13, 'Philips', 19000, '/public/img/printer13.png', 'Germany', 2018, 'OKS-9000', 3, 2, NULL, NULL),
(14, 'Canon', 32000, '/public/img/printer14.png', 'Spain', 2022, 'gammaM-010', 10, 3, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
