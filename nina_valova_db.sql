-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 12 2024 г., 15:15
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nina_valova_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `main_page_assets`
--

CREATE TABLE `main_page_assets` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `adress` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` bigint NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `main_page_assets`
--

INSERT INTO `main_page_assets` (`id`, `logo`, `title`, `city`, `adress`, `phone`, `main_image`, `created_at`, `updated_at`) VALUES
(1, 'logo.svg', 'nina valova', 'Москва', 'Нахимовский проспект 7 к1', 9257317383, 'main_page_img.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_04_08_130200_create_main_page_assets_table', 1),
(3, '2024_04_08_130209_create_service_works_table', 1),
(4, '2024_04_08_130217_create_portfolio_works_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_general_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_works`
--

CREATE TABLE `portfolio_works` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `portfolio_works`
--

INSERT INTO `portfolio_works` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, '1.png', NULL, NULL, NULL),
(2, '2.png', NULL, NULL, NULL),
(3, '3.png', NULL, NULL, NULL),
(4, '4.png', NULL, NULL, NULL),
(5, '5.png', NULL, NULL, NULL),
(6, '6.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `service_works`
--

CREATE TABLE `service_works` (
  `id` bigint UNSIGNED NOT NULL,
  `work_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `duration` int NOT NULL,
  `work_img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `service_works`
--

INSERT INTO `service_works` (`id`, `work_title`, `description`, `price`, `duration`, `work_img`, `created_at`, `updated_at`) VALUES
(1, 'пудровое напыление бровей', 'современная методика, позволяющая подчеркнуть форму и цвет бровей. Этот метод отличается длительным эффектом и помогает скрыть эстетические недостатки внешности. Пигмент вводится в поверхностный слой кожи, создавая дымчатый эффект.', 2150, 60, '1.png', NULL, NULL),
(2, 'аппаратные волоски', 'инновация в сфере перманентного макияжа. Игла машинки ходит подобно швейной игле, краска вводится через микропроколы. Они быстро заживают, не оставляя шрамов и рубцов, а полученный оттенок не меняется со временем.', 6500, 120, '2.png', NULL, NULL),
(3, 'Микроблейдинг', 'цветовая коррекция бровей, или по-другому – татуаж, выполненный мануальным способом. С помощью специальной «ручки» (манипулы) с тонким лезвием мастер делает небольшие надрезы и вбивает в эпидермис пигмент.', 4500, 120, '3.png', NULL, NULL),
(4, 'перманент межресничного пространства', 'процедура, при которой красящее вещество в составе пигмента вводится в верхний слой эпидермиса по линии роста ресниц и пространства между ними. Это позволяет создать стойкий, но не броский макияж век и выделить глаза.', 12000, 60, '4.png', NULL, NULL),
(5, 'пудровое напыление губ', 'вид татуажа, при котором краситель вносится в поверхностный слой кожи в небольшом количестве, создавая эффект слегка подкрашенных губ. Пигмент вводится неглубоко, поэтому техника считается щадящей и безопасной. Заживление происходит быстрее, чем после обычного тату.', 12000, 120, '5.png', NULL, NULL),
(6, 'перекрытие', 'полное изменение татуажа или перманентного макияжа с целью правки цвета, формы, длины. Другими словами, это полная переделка уже существующего татуажа, который по каким-либо причинам не устраивает.', 15000, 120, '6.png', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `main_page_assets`
--
ALTER TABLE `main_page_assets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `portfolio_works`
--
ALTER TABLE `portfolio_works`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service_works`
--
ALTER TABLE `service_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `main_page_assets`
--
ALTER TABLE `main_page_assets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `portfolio_works`
--
ALTER TABLE `portfolio_works`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `service_works`
--
ALTER TABLE `service_works`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
