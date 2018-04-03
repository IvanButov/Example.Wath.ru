-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 03 2018 г., 18:35
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Watch`
--
CREATE DATABASE IF NOT EXISTS `Watch` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Watch`;

-- --------------------------------------------------------

--
-- Структура таблицы `Apple`
--

CREATE TABLE `Apple` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Apple`
--

INSERT INTO `Apple` (`id`, `img`, `title`, `price`) VALUES
(4, 'Apple/Apple4.jpg', 'Смарт-часы Apple Watch S3 Sport 42mm', '26690');

-- --------------------------------------------------------

--
-- Структура таблицы `Asus`
--

CREATE TABLE `Asus` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Asus`
--

INSERT INTO `Asus` (`id`, `img`, `title`, `price`) VALUES
(1, 'Asus/Asus1.jpg', 'ASUS ZenWatch', '16990'),
(2, 'Asus/Asus2.jpg', 'ASUS ZenWatch 2 (WI501Q-1RTUP0015)', '14990'),
(3, 'Asus/Asus3.jpg', 'ASUS ZenWatch 2 (WI501Q)', '21890');

-- --------------------------------------------------------

--
-- Структура таблицы `brend`
--

CREATE TABLE `brend` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brend`
--

INSERT INTO `brend` (`id`, `img`, `text`) VALUES
(1, 'brend/casio.jpg', '	Casio Computer Co., Ltd. (яп. カシオ計算機株式会社 Касио кэйсанки кабусики гайся) (TYO: 6952) — японский производитель электронных устройств. Корпорация основана в апреле 1946 года в Токио. Наиболее известна как производитель калькуляторов, аудио оборудования, КПК, фотокамер, музыкальных инструментов, планшетов и наручных часов. В 1957 году фирма Casio выпустила первый в мире полностью электронный калькулятор (Модель 14-А). В 1983 году произошло одно из самых заметных событий в истории компании Casio — общественности были представлены первые часы G-Shock. Группа, занимавшаяся разработкой концепта, была образована в 1981 году, а создание и тестирование всех прототипов заняло около двух лет.Компания Casio разделяет все свои часы по брендам. У каждого бренда своя аудитория и свои рекламные представители — послы бренда. Бренд G-Shock. Зарубежные послы бренда: Eminem, Nigel Sylvester, Stevie Williams, Louie Vito Российские амбассадоры: Code Red, Алексей Прошин, Антон Евстифеев, Григорий Михалицын, Дмитрий Оскес, Егор Попретинский, Максим Круглов, Михаил Осипов, Павел Фукин.'),
(2, 'brend/apple.jpg', 'Apple Watch — наручные часы с дополнительной функциональностью \r\n(умные часы), созданные корпорацией Apple и представленные 9 сентября 2014 года. Для их полноценной работы требуется смартфон семейства iPhone 5 или новее.Продажи Apple Watch стартовали в\r\n 9 странах мира (США, Канаде, Великобритании, Австралии, Франции, Германии, Гонконге, Китае, Японии) 24 апреля 2015, но до 18 июня \r\n 2015 года не были доступны в розничных магазинах, а распространялись только по предзаказу, оформленному через интернет-магазин. Цена —\r\n от 349 долларов США.\r\nС 26 июня 2015 года Apple Watch стали доступны ещё в семи странах — Испании, Италии, Мексике, Сингапуре, Тайване, Швейцарии и Южной Корее.\r\nС 17 июля 2015 года продажи стартовали в Нидерландах, Таиланде и Швеции.\r\n31 июля 2015 года продажи стартовали в России, Новой Зеландии и Турции.\r\n9 октября Apple Watch появились в Бельгии, Люксембурге, Норвегии, Польше и Финляндии, 16 октября – в Бразилии и Колумбии.\r\n В начале 2016 года смарт-часы появились в Малайзии, Чехии и Португалии.');

-- --------------------------------------------------------

--
-- Структура таблицы `casio`
--

CREATE TABLE `casio` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `casio`
--

INSERT INTO `casio` (`id`, `img`, `title`, `price`) VALUES
(1, 'casio/casio1.jpg', 'MTP-VS02L-1A', '3790'),
(2, 'casio/casio2.jpg', 'EFR-526L-1A', '8590'),
(3, 'casio/casio3.jpg', 'GST-B100-1A', '23330'),
(4, 'casio/casio4.jpg', 'MRW-200H-1B3', '2890');

-- --------------------------------------------------------

--
-- Структура таблицы `Casio2`
--

CREATE TABLE `Casio2` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Casio2`
--

INSERT INTO `Casio2` (`id`, `img`, `title`, `price`) VALUES
(1, 'Casio-K/Casio-K1.jpg', 'Casio GST-W300G-1A1', '22490'),
(2, 'Casio-K/Casio-K2.jpg', 'Casio GST-W300G-1A4', '22490'),
(3, 'Casio-K/Casio-K3.jpg', 'Casio GST-W300-1A', '19940'),
(4, 'Casio-K/Casio-K4.jpg', 'Casio EFA-120D-1A', '6490');

-- --------------------------------------------------------

--
-- Структура таблицы `Fossil`
--

CREATE TABLE `Fossil` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Fossil`
--

INSERT INTO `Fossil` (`id`, `img`, `title`, `price`) VALUES
(1, 'Fossil/Fossil1.jpg', 'Fossil ME3053', '15510'),
(2, 'Fossil/Fossil2.jpg', 'Fossil ME3054', '17080'),
(3, 'Fossil/Fossil3.jpg', 'Fossil ME3055', '17080'),
(4, 'Fossil/Fossil4.jpg', 'Fossil ME3052', '15510');

-- --------------------------------------------------------

--
-- Структура таблицы `Huawei`
--

CREATE TABLE `Huawei` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Huawei`
--

INSERT INTO `Huawei` (`id`, `img`, `title`, `price`) VALUES
(1, 'Huawei/Huawei1.jpg', 'Смарт-часы Huawei WATCH 2 Classic Gray(LEO-BX9)', '26690'),
(2, 'Huawei/Huawei2.jpg', 'Смарт-часы Huawei WATCH 2 Sport Bluetooth Black', '22990'),
(3, 'Huawei/Huawei3.jpg', 'Смарт-часы Huawei WATCH 2 Sport LTE Orange ', '26690'),
(4, 'Huawei/Huawei4.jpg', 'Смарт-часы Huawei CLASSIC LEATHER Silver', '26990');

-- --------------------------------------------------------

--
-- Структура таблицы `Orient`
--

CREATE TABLE `Orient` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Orient`
--

INSERT INTO `Orient` (`id`, `img`, `title`, `price`) VALUES
(1, 'Orient/Orient1.jpg', 'Orient ET0P002B', '21940'),
(2, 'Orient/Orient2.jpg', 'Orient DBAE001T', '17220'),
(3, 'Orient/Orient3.jpg', 'Orient EV0U002T', '13680'),
(4, 'Orient/Orient4.jpg', 'Orient ER27001B', '9910');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `phone`, `login`, `date`) VALUES
(4, 'admin@mail.ru', '0192023a7bbd73250516f069df18b500', '89994768393', 'admin', 'Tuesday 05th 2017f December 2017 08:0:59 PM');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Apple`
--
ALTER TABLE `Apple`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Asus`
--
ALTER TABLE `Asus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brend`
--
ALTER TABLE `brend`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `casio`
--
ALTER TABLE `casio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Casio2`
--
ALTER TABLE `Casio2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Fossil`
--
ALTER TABLE `Fossil`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Huawei`
--
ALTER TABLE `Huawei`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Orient`
--
ALTER TABLE `Orient`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Apple`
--
ALTER TABLE `Apple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Asus`
--
ALTER TABLE `Asus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `brend`
--
ALTER TABLE `brend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `casio`
--
ALTER TABLE `casio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Casio2`
--
ALTER TABLE `Casio2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Fossil`
--
ALTER TABLE `Fossil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Huawei`
--
ALTER TABLE `Huawei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Orient`
--
ALTER TABLE `Orient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
