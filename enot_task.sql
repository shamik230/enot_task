-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 15 2023 г., 17:25
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `enot_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `charcode` varchar(3) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `charcode`, `name`) VALUES
(2, 'AUD', 'Австралийский доллар'),
(3, 'AZN', 'Азербайджанский манат'),
(4, 'GBP', 'Фунт стерлингов Соединенного королевства'),
(5, 'AMD', 'Армянских драмов'),
(6, 'BYN', 'Белорусский рубль'),
(7, 'BGN', 'Болгарский лев'),
(8, 'BRL', 'Бразильский реал'),
(9, 'HUF', 'Венгерских форинтов'),
(10, 'VND', 'Вьетнамских донгов'),
(11, 'HKD', 'Гонконгский доллар'),
(12, 'GEL', 'Грузинский лари'),
(13, 'DKK', 'Датская крона'),
(14, 'AED', 'Дирхам ОАЭ'),
(15, 'USD', 'Доллар США'),
(16, 'EUR', 'Евро'),
(17, 'EGP', 'Египетских фунтов'),
(18, 'INR', 'Индийских рупий'),
(19, 'IDR', 'Индонезийских рупий'),
(20, 'KZT', 'Казахстанских тенге'),
(21, 'CAD', 'Канадский доллар'),
(22, 'QAR', 'Катарский риал'),
(23, 'KGS', 'Киргизских сомов'),
(24, 'CNY', 'Китайский юань'),
(25, 'MDL', 'Молдавских леев'),
(26, 'NZD', 'Новозеландский доллар'),
(27, 'NOK', 'Норвежских крон'),
(28, 'PLN', 'Польский злотый'),
(29, 'RON', 'Румынский лей'),
(30, 'XDR', 'СДР (специальные права заимствования)'),
(31, 'SGD', 'Сингапурский доллар'),
(32, 'TJS', 'Таджикских сомони'),
(33, 'THB', 'Таиландских батов'),
(34, 'TRY', 'Турецких лир'),
(35, 'TMT', 'Новый туркменский манат'),
(36, 'UZS', 'Узбекских сумов'),
(37, 'UAH', 'Украинских гривен'),
(38, 'CZK', 'Чешских крон'),
(39, 'SEK', 'Шведских крон'),
(40, 'CHF', 'Швейцарский франк'),
(41, 'RSD', 'Сербских динаров'),
(42, 'ZAR', 'Южноафриканских рэндов'),
(43, 'KRW', 'Вон Республики Корея'),
(44, 'JPY', 'Японских иен');

-- --------------------------------------------------------

--
-- Структура таблицы `currency_values`
--

CREATE TABLE `currency_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `charcode` varchar(3) NOT NULL,
  `rate` decimal(10,4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `currency_values`
--

INSERT INTO `currency_values` (`id`, `charcode`, `rate`, `timestamp`) VALUES
(1, 'AUD', 60.2492, '2023-12-15 14:12:52'),
(2, 'AZN', 52.7627, '2023-12-15 14:12:52'),
(3, 'GBP', 114.4529, '2023-12-15 14:12:52'),
(4, 'AMD', 0.2213, '2023-12-15 14:12:52'),
(5, 'BYN', 28.4093, '2023-12-15 14:12:52'),
(6, 'BGN', 50.0763, '2023-12-15 14:12:52'),
(7, 'BRL', 18.3395, '2023-12-15 14:12:52'),
(8, 'HUF', 0.2585, '2023-12-15 14:12:52'),
(9, 'VND', 0.0038, '2023-12-15 14:12:52'),
(10, 'HKD', 11.5114, '2023-12-15 14:12:52'),
(11, 'GEL', 33.3954, '2023-12-15 14:12:52'),
(12, 'DKK', 13.1347, '2023-12-15 14:12:52'),
(13, 'AED', 24.4239, '2023-12-15 14:12:52'),
(14, 'USD', 89.6966, '2023-12-15 14:12:52'),
(15, 'EUR', 98.4186, '2023-12-15 14:12:52'),
(16, 'EGP', 2.9033, '2023-12-15 14:12:52'),
(17, 'INR', 1.0759, '2023-12-15 14:12:52'),
(18, 'IDR', 0.0058, '2023-12-15 14:12:52'),
(19, 'KZT', 0.1969, '2023-12-15 14:12:52'),
(20, 'CAD', 66.8430, '2023-12-15 14:12:52'),
(21, 'QAR', 24.6419, '2023-12-15 14:12:52'),
(22, 'KGS', 1.0075, '2023-12-15 14:12:52'),
(23, 'CNY', 12.6091, '2023-12-15 14:12:52'),
(24, 'MDL', 5.0189, '2023-12-15 14:12:52'),
(25, 'NZD', 55.6209, '2023-12-15 14:12:52'),
(26, 'NOK', 8.5032, '2023-12-15 14:12:52'),
(27, 'PLN', 22.8085, '2023-12-15 14:12:52'),
(28, 'RON', 19.7875, '2023-12-15 14:12:52'),
(29, 'XDR', 120.0643, '2023-12-15 14:12:52'),
(30, 'SGD', 67.5579, '2023-12-15 14:12:52'),
(31, 'TJS', 8.1881, '2023-12-15 14:12:52'),
(32, 'THB', 2.5723, '2023-12-15 14:12:52'),
(33, 'TRY', 3.0923, '2023-12-15 14:12:52'),
(34, 'TMT', 25.6276, '2023-12-15 14:12:52'),
(35, 'UZS', 0.0073, '2023-12-15 14:12:52'),
(36, 'UAH', 2.4248, '2023-12-15 14:12:52'),
(37, 'CZK', 4.0083, '2023-12-15 14:12:52'),
(38, 'SEK', 8.7603, '2023-12-15 14:12:52'),
(39, 'CHF', 103.4921, '2023-12-15 14:12:52'),
(40, 'RSD', 0.8413, '2023-12-15 14:12:52'),
(41, 'ZAR', 4.8195, '2023-12-15 14:12:52'),
(42, 'KRW', 0.0692, '2023-12-15 14:12:52'),
(43, 'JPY', 0.6299, '2023-12-15 14:12:52'),
(44, 'AUD', 60.2492, '2023-12-15 14:13:53'),
(45, 'AZN', 52.7627, '2023-12-15 14:13:53'),
(46, 'GBP', 114.4529, '2023-12-15 14:13:53'),
(47, 'AMD', 0.2213, '2023-12-15 14:13:53'),
(48, 'BYN', 28.4093, '2023-12-15 14:13:53'),
(49, 'BGN', 50.0763, '2023-12-15 14:13:53'),
(50, 'BRL', 18.3395, '2023-12-15 14:13:53'),
(51, 'HUF', 0.2585, '2023-12-15 14:13:53'),
(52, 'VND', 0.0038, '2023-12-15 14:13:53'),
(53, 'HKD', 11.5114, '2023-12-15 14:13:53'),
(54, 'GEL', 33.3954, '2023-12-15 14:13:53'),
(55, 'DKK', 13.1347, '2023-12-15 14:13:53'),
(56, 'AED', 24.4239, '2023-12-15 14:13:53'),
(57, 'USD', 89.6966, '2023-12-15 14:13:53'),
(58, 'EUR', 98.4186, '2023-12-15 14:13:53'),
(59, 'EGP', 2.9033, '2023-12-15 14:13:53'),
(60, 'INR', 1.0759, '2023-12-15 14:13:53'),
(61, 'IDR', 0.0058, '2023-12-15 14:13:53'),
(62, 'KZT', 0.1969, '2023-12-15 14:13:53'),
(63, 'CAD', 66.8430, '2023-12-15 14:13:53'),
(64, 'QAR', 24.6419, '2023-12-15 14:13:53'),
(65, 'KGS', 1.0075, '2023-12-15 14:13:53'),
(66, 'CNY', 12.6091, '2023-12-15 14:13:53'),
(67, 'MDL', 5.0189, '2023-12-15 14:13:53'),
(68, 'NZD', 55.6209, '2023-12-15 14:13:53'),
(69, 'NOK', 8.5032, '2023-12-15 14:13:53'),
(70, 'PLN', 22.8085, '2023-12-15 14:13:53'),
(71, 'RON', 19.7875, '2023-12-15 14:13:53'),
(72, 'XDR', 120.0643, '2023-12-15 14:13:53'),
(73, 'SGD', 67.5579, '2023-12-15 14:13:53'),
(74, 'TJS', 8.1881, '2023-12-15 14:13:53'),
(75, 'THB', 2.5723, '2023-12-15 14:13:53'),
(76, 'TRY', 3.0923, '2023-12-15 14:13:53'),
(77, 'TMT', 25.6276, '2023-12-15 14:13:53'),
(78, 'UZS', 0.0073, '2023-12-15 14:13:53'),
(79, 'UAH', 2.4248, '2023-12-15 14:13:53'),
(80, 'CZK', 4.0083, '2023-12-15 14:13:53'),
(81, 'SEK', 8.7603, '2023-12-15 14:13:53'),
(82, 'CHF', 103.4921, '2023-12-15 14:13:53'),
(83, 'RSD', 0.8413, '2023-12-15 14:13:53'),
(84, 'ZAR', 4.8195, '2023-12-15 14:13:53'),
(85, 'KRW', 0.0692, '2023-12-15 14:13:53'),
(86, 'JPY', 0.6299, '2023-12-15 14:13:53');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'mike', '$2y$10$tQ6Bu2Kc3cClOxWbnaoKMOweWOSmZl5rbeoBQ8Mof36KIWw8YiI2a');

-- --------------------------------------------------------

--
-- Структура таблицы `users_sessions`
--

CREATE TABLE `users_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users_sessions`
--

INSERT INTO `users_sessions` (`id`, `id_user`, `token`, `created_at`) VALUES
(2, 1, '354da36e8350bb639e69534b7ff5d5d714c6e70f7a1711675c9538f2b267fad1a954eda3505edef655980882d8fe1a3230a1ac8099b731766f6818c172250051', '2023-12-15 14:56:50'),
(3, 1, 'a5c49621724f2c86834c3082f92fbd668db1e1bb9a7a35f2b7a919639194f9489af1d7be148acfcdce049f1c4e4199d63e53254d9d2981ab62712cf943e37a50', '2023-12-15 14:57:53'),
(4, 1, '4f86128497473572b46efd5b22c293c73b312fef9d46b7101188a5a1c893299cadba4159afd2e196dc4828310fe1ad5b35f3605ffcf62c7b332dc2f40d99c96a', '2023-12-15 14:58:08'),
(5, 1, '4b2649944585fd838ceda05c7ff016c62ee7e4aec8adb61f7e7388cf1d087007a23a109365e8c13cc73134aee8f86064282a508264948e3abd4e11df99cc7074', '2023-12-15 14:58:11'),
(6, 1, '1a83ffe472acf7ba14fe8a77e4107f1519f5e5eb29df5305d1e1c58191df2d5e9453254c4b99e98e77888fef3cd2c32409e18f6a6fedfbd2ee1758a30feae281', '2023-12-15 15:00:05'),
(7, 1, 'fa7034e23e973214f737d163df08e45ff7daa38f29b7a3643f4933baacdc838978256da134de80aab4eeeef536991944fc48629d2d5fb08698bd6c975cccbe47', '2023-12-15 15:00:13'),
(8, 1, 'b35fefd8dbc910f5c9b7f21878437440c67608738e495c09e56e8f09f0b446928e938dda97a2098228f466a5233bd791f4082b3a0cd3133179aeca38fcc2b6d2', '2023-12-15 15:00:49'),
(9, 1, 'f27ef7be78c80b319100918edb1e51e7d114a3caf9fcf9cfd82912e82463f86e8a48110c374ece6ccce7bb1229da672cf6d365018a29a168008ea5b53e567dfe', '2023-12-15 15:03:38'),
(10, 1, 'ede8f51b9f5afd031f1e055e75f8d61779d4f0f7f0c4246ccf4521af9305378b2eb0e6c4f1cf0e1878922c1b523958d5446ad57b24f34ef1032157fd0ecaf5d2', '2023-12-15 15:03:49'),
(11, 1, 'a614e518fd979a927647b2f33460c9140effb911f6223cf72e9a92609960a1c81041ae7b57d2b4ebccb3b43073cbde4fa17b91f2d7c486e4e5f45dfaf6f4f485', '2023-12-15 15:03:53'),
(12, 1, 'eee9213ac077840cfe2e453730ce6a3df223e75fcfbf42ddad89a54f57120b855e5f9051adf2b166e234cad3f890e4b7719bccd11e3ec2ee9ec236917d80c455', '2023-12-15 15:40:55'),
(13, 1, 'df3cb44aafc73575f941c88f6724b450e6c0192008e4d3cbc28a71ae724f474a4d798cd93ad9023c1c16ca4efd8583e86bbb122901c5f71aee2b3b0859ab3ad3', '2023-12-15 15:45:15'),
(14, 1, '142f9df755ade77c81e85ed065a98b268a2cfa294eb79fce60e9a497d2610d6a12f89360244c36706a65bd519f1e83d4d4907e0e66d2282e50ee3b41881a010a', '2023-12-15 15:48:14'),
(15, 1, 'f100ca02f39a96e966c8fdd3dac895fa630d6bf9457da46c311557117c0ad0e631453c7c8d873602f57dd6a40382ef1f3da980dca4a2d6af997f2ab48c4337ec', '2023-12-15 16:21:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `charcode` (`charcode`);

--
-- Индексы таблицы `currency_values`
--
ALTER TABLE `currency_values`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Индексы таблицы `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `currency_values`
--
ALTER TABLE `currency_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
