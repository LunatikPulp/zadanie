-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2023 г., 19:14
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Books`
--

CREATE TABLE `Books` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `inventory_number` int(11) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `place_of_publication` varchar(255) NOT NULL,
  `number_of_pages` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Books`
--

INSERT INTO `Books` (`id`, `genre`, `title`, `inventory_number`, `authors`, `year`, `publisher`, `place_of_publication`, `number_of_pages`, `price`) VALUES
(1, 'Роман', 'ДА', 1234, 'Лев Толстой', 1800, 'Крапива', 'Москва', 500, '5000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `Students`
--

CREATE TABLE `Students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Students`
--

INSERT INTO `Students` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Роман', 'ponytno@mail.ru', '+7-900-605-34-32');

-- --------------------------------------------------------

--
-- Структура таблицы `Transactions`
--

CREATE TABLE `Transactions` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Transactions`
--

INSERT INTO `Transactions` (`id`, `book_id`, `student_id`, `issue_date`, `return_date`) VALUES
(2, 1, 1, '2023-12-13', '2023-12-20');

-- --------------------------------------------------------

--
-- Структура таблицы `WriteOffs`
--

CREATE TABLE `WriteOffs` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `write_off_date` date NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `WriteOffs`
--

INSERT INTO `WriteOffs` (`id`, `book_id`, `write_off_date`, `reason`) VALUES
(1, 1, '2023-12-15', 'Да уж'),
(2, 1, '2023-12-22', 'Сложно');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Индексы таблицы `WriteOffs`
--
ALTER TABLE `WriteOffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Books`
--
ALTER TABLE `Books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `WriteOffs`
--
ALTER TABLE `WriteOffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Transactions`
--
ALTER TABLE `Transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Books` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `Students` (`id`);

--
-- Ограничения внешнего ключа таблицы `WriteOffs`
--
ALTER TABLE `WriteOffs`
  ADD CONSTRAINT `writeoffs_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
