-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 29 2020 г., 15:52
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`user_1`, `user_2`) VALUES
(21, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `to_user_id`, `from_user_id`, `message`, `time`) VALUES
(155, 5, 21, '', '2020-07-28 16:41:26'),
(156, 1, 22, 'hellow', '2020-07-29 12:45:35'),
(157, 1, 22, 'how are u&\r\n', '2020-07-29 12:52:20'),
(158, 1, 22, '123', '2020-07-29 12:58:32'),
(159, 1, 22, '123', '2020-07-29 12:59:07'),
(160, 0, 22, '', '2020-07-29 13:46:11'),
(161, 0, 0, '', '2020-07-29 14:01:19'),
(162, 0, 0, '', '2020-07-29 14:06:27'),
(163, 0, 0, '', '2020-07-29 14:06:30'),
(164, 0, 0, '', '2020-07-29 14:06:46'),
(165, 0, 0, '', '2020-07-29 14:08:38'),
(166, 2, 22, '', '2020-07-29 14:09:08'),
(167, 2, 22, '123', '2020-07-29 14:10:10'),
(168, 2, 22, 'test', '2020-07-29 14:11:36'),
(169, 2, 22, '', '2020-07-29 14:13:25'),
(170, 2, 22, '123', '2020-07-29 14:13:30'),
(171, 2, 22, '', '2020-07-29 14:14:02'),
(172, 2, 22, '123', '2020-07-29 14:19:48'),
(173, 2, 22, 'test 1', '2020-07-29 14:20:20'),
(174, 1, 22, 'test', '2020-07-29 14:21:15'),
(175, 1, 22, 'test 2', '2020-07-29 14:22:11'),
(176, 1, 22, 'test 3', '2020-07-29 14:22:19'),
(177, 1, 22, 'tre', '2020-07-29 14:23:22'),
(178, 1, 22, 'qwe', '2020-07-29 14:23:54'),
(179, 3, 22, 'test', '2020-07-29 14:25:24'),
(180, 4, 22, '123', '2020-07-29 14:27:07'),
(181, 6, 22, '123', '2020-07-29 14:28:15'),
(182, 6, 22, '123', '2020-07-29 14:28:17'),
(183, 6, 22, '123', '2020-07-29 14:28:17'),
(184, 6, 22, '123', '2020-07-29 14:28:17'),
(185, 6, 22, '123', '2020-07-29 14:28:17'),
(186, 6, 22, '123', '2020-07-29 14:28:18'),
(187, 6, 22, '123', '2020-07-29 14:28:18'),
(188, 6, 22, '123', '2020-07-29 14:28:19'),
(189, 6, 22, '123', '2020-07-29 14:28:19'),
(190, 6, 22, '123', '2020-07-29 14:28:20'),
(191, 6, 22, '123', '2020-07-29 14:28:20'),
(192, 6, 22, 'qwe', '2020-07-29 14:30:05'),
(193, 6, 22, 'test', '2020-07-29 14:30:44'),
(194, 6, 22, 'qwe', '2020-07-29 14:32:20'),
(195, 6, 22, '213', '2020-07-29 14:33:59'),
(196, 6, 22, '', '2020-07-29 14:41:00'),
(197, 1, 22, 'qwe', '2020-07-29 16:17:01'),
(198, 1, 22, 'тест', '2020-07-29 16:17:13'),
(199, 1, 22, 'test 123', '2020-07-29 16:18:07'),
(200, 4, 22, 'test 1', '2020-07-29 16:19:16'),
(201, 4, 22, 'qwe', '2020-07-29 16:19:18'),
(202, 4, 22, 'qwe', '2020-07-29 16:19:19'),
(203, 4, 22, 'qwe', '2020-07-29 16:19:20'),
(204, 4, 22, 'qwe', '2020-07-29 16:19:22'),
(205, 4, 22, 'e', '2020-07-29 16:19:23'),
(206, 19, 22, 'sdf', '2020-07-29 16:19:48'),
(207, 1, 19, '123', '2020-07-29 16:35:07');

-- --------------------------------------------------------

--
-- Структура таблицы `polsovately`
--

CREATE TABLE `polsovately` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `polsovately`
--

INSERT INTO `polsovately` (`id`, `name`, `photo`, `email`, `password`, `phone`) VALUES
(1, 'Андрій', 'images/user1.webp', '', '', '+3806565664'),
(2, 'Ваня', 'images/user1.webp', '', '', '+38055524264'),
(3, 'Віка', 'images/user2.png', '', '', '+406595446'),
(4, 'Настя', 'images/user2.png', '', '', '+70622662'),
(5, 'Діма', 'images/user1.webp', '', '', '+38032642'),
(6, 'Артем', 'images/user1.webp', '', '', '+3806565664'),
(7, 'Надя', 'images/user2.png', '', '', '+406595446'),
(8, 'Алла', 'images/user2.png', '', '', '+406595446'),
(19, 'Inkognito', 'images/user1.webp', 'name1@name', '123456789', ''),
(20, 'Inkognito', 'images/user1.webp', 'name2@name', '123456789', ''),
(21, 'Stepan', 'images/user1.webp', 'stepan@stepan', '123456789', ''),
(22, 'Stefan', 'images/user1.webp', 'Stefan@stefan', '123456789', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
  ADD UNIQUE KEY `user_1` (`user_1`,`user_2`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `polsovately`
--
ALTER TABLE `polsovately`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT для таблицы `polsovately`
--
ALTER TABLE `polsovately`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
