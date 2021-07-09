-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 10 2021 г., 10:27
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `LaravelTask1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `theme`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Hi-tech', 'Sed porta orci id enim interdum, eget tincidunt diam mollis. Aenean id semper libero. Nullam sodales massa quis tellus viverra gravida. Etiam venenatis aliquam est. Quisque porta diam eu suscipit varius. Suspendisse suscipit dictum odio, rhoncus molestie nulla aliquet a. Nam sollicitudin consectetur orci sed tincidunt. Aenean varius est dolor, ut rutrum purus bibendum sed. Vivamus feugiat, leo ac euismod maximus, ipsum magna sollicitudin tellus, in ornare quam tellus eu lacus. Vivamus ut rutrum diam, eu vehicula urna. Nulla faucibus fermentum elit non porttitor.', '2021-06-10 01:52:34', '2021-06-10 01:52:34'),
(7, 'Science', 'Sed eleifend sapien sed elit commodo ullamcorper. Quisque feugiat magna at enim consectetur, ac ultrices lectus egestas. In consequat mi ante, sit amet accumsan eros accumsan sit amet. Nam quis mauris malesuada, sagittis massa non, lacinia orci. Morbi volutpat nisl eu nisl sagittis imperdiet. Quisque non lacus sem. Nam eu sodales tellus,', '2021-06-10 01:52:53', '2021-06-10 01:52:53'),
(8, 'IT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet auctor mi, sit amet pulvinar nisi rhoncus id. In consequat molestie quam, euismod efficitur arcu cursus non. Vivamus blandit ipsum vel aliquet fermentum. Nulla est dui, pharetra suscipit felis cursus, ornare ornare enim. Vivamus tincidunt accumsan ullamcorper. Etiam volutpat tempus nibh, a scelerisque nisl bibendum in. Sed augue lorem, dictum quis dui vitae, tristique aliquam velit. Etiam luctus odio ac est commodo, vel dictum libero viverra. Praesent suscipit, lectus a scelerisque rutrum, leo eros egestas nibh, sit amet pharetra felis turpis non dolor. Praesent fringilla lacus nec sagittis auctor. Donec in scelerisque risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque hendrerit gravida nibh, ut vestibulum augue condimentum quis.', '2021-06-10 02:50:56', '2021-06-10 02:50:56'),
(9, 'Economy', 'liquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum mauris vitae vestibulum venenatis. Sed eleifend sapien sed elit commodo ullamcorper. Quisque feugiat magna at enim consectetur, ac ultrices lectus egestas. In consequat mi ante, sit amet accumsan eros accumsan sit amet. Nam quis mauris malesuada, sagittis massa non, lacinia orci. Morbi volutpat nisl eu nisl sagittis imperdiet. Quisque non lacus sem. Nam eu sodales tellus, in conse', '2021-06-10 02:51:13', '2021-06-10 02:51:13');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_10_063724_create_blogs_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daurbek', 'Daurbek@gmail.com', NULL, '$2y$10$m5TtKeg.fOt0.VTQjIfwcu4Iyc6kIKaB4NULo.EktdfbS2s8QPwX6', '87777777777', NULL, '2021-06-09 23:50:40', '2021-06-09 23:50:40');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
