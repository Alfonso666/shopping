-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2019 a las 02:24:28
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db-shopp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_30_215920_create_productos_table', 1),
(4, '2019_06_30_221634_create_productos_table', 2),
(5, '2014_10_12_000000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `titulo`, `descripcion`, `precio`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'https://i.blogs.es/5c4542/spider-man-lejos-de-casa-duracion-oficial/450_1000.jpeg', 'Los vengadores', ' Gran figura pelicula de los vengadores, esta pelicula ya se encuentra en cines.', 2500, 'Juguetes', '2019-07-01 02:27:12', '2019-07-01 02:27:12'),
(2, 'https://ae01.alicdn.com/kf/HTB1Ck9sRpXXXXXWXpXXq6xXFXXXQ/Pel-cula-Los-Vengadores-Iron-Man-Mark-MK7-figma-Marvel-PVC-acci-n-figura-colecci-n.jpg_640x640.jpg', 'Figura de Iron Man', ' Figura  de accion, tamaño 16cm.', 8000, 'Juguetes', '2019-07-01 02:27:12', '2019-07-01 02:27:12'),
(3, 'https://images-na.ssl-images-amazon.com/images/I/81t674jwyoL._SY355_.jpg', 'Figura de Spiderman', ' Figura de Spiderman, pelicula de los vengadores', 5000, 'Juguetes', '2019-07-01 02:27:12', '2019-07-01 02:27:12'),
(7, 'http://dungeonmarvels.com/54862-large_default/set-de-2-figuras-marvel-ant-man-and-the-wasp-sh-figuarts-ant-man-hormiga-15-cm.jpg', 'Atman', ' Figura de Atman, pelicula de los vengadores', 3400, 'Juguetes', '2019-07-04 08:26:09', '2019-07-04 08:26:09'),
(8, 'https://images-na.ssl-images-amazon.com/images/I/81SBiZzq45L._SX425_.jpg', 'Holk', ' Figura de Holk, pelicula de los vengadores', 4150, 'Juguetes', '2019-07-04 08:26:09', '2019-07-04 08:26:09'),
(9, 'https://staticpasa.cdnstatics.com/static/upl/img//011N19/A5_Descripcion_Imagen_2_1550070819852.png', 'Capitan America', ' Figura del Capitan America, pelicula de los vengadores', 4150, 'Juguetes', '2019-07-04 08:26:09', '2019-07-04 08:26:09'),
(10, 'https://cdn.totalcode.com.co/homesentry/product-zoom/es/figura-de-accion-marvel-hasbro%C2%A0thanos_multicolor-1.jpg', 'Los vengadores Infinity wars', ' Gran figura pelicula de thanos presente en la pelicula los vengadores, esta pelicula ya se encuentra en cines.', 2500, 'Juguetes', '2019-07-04 08:39:09', '2019-07-04 08:39:09'),
(11, 'https://http2.mlstatic.com/national-art-mx-thanos-figura-articulada-juguete-avengers-i-D_NQ_NP_942254-MLM30232994904_052019-Q.jpg', 'Figura de Thanos', ' Figura  de accion de Thanos Pelicula End Game, tamaño 16cm.', 8000, 'Juguetes', '2019-07-04 08:39:09', '2019-07-04 08:39:09'),
(12, 'https://cloud10.todocoleccion.online/figuras-accion/tc/2019/06/07/17/167411124.jpg', 'Figura de Black Panter', ' Figura de accion Black Panter, pelicula de los vengadores', 5000, 'Juguetes', '2019-07-04 08:39:09', '2019-07-04 08:39:09'),
(13, 'https://resources.sears.com.mx/medios-plazavip/fotos/productos_sears1/original/2806754.jpg', 'Los vengadores Dr. Strange', ' Gran figura pelicula de Dr. Strange presente en la pelicula los vengadores, esta pelicula ya se encuentra en cines.', 10000, 'Juguetes', '2019-07-04 08:46:15', '2019-07-04 08:46:15'),
(14, 'https://staticpasa.cdnstatics.com/static/upl/img//011N19/entrega_011N19007_gadget_1554128777927.jpg', 'Figura de la Viuda Negra', ' Figura  de accion de Viuda Negra Pelicula End Game, tamaño 16cm.', 8000, 'Juguetes', '2019-07-04 08:46:15', '2019-07-04 08:46:15'),
(15, 'https://cdn.shopify.com/s/files/1/0051/3074/7968/products/E3885AS00_630509775439_main_18_Online_300DPI.jpg?v=1552400132', 'Figura de la Capitana Marvel', ' Figura de accion Capitana Marvelr, pelicula de los vengadores', 5000, 'Juguetes', '2019-07-04 08:46:15', '2019-07-04 08:46:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'juan@gmail.com', NULL, '$2y$10$ZfPA32XiZT.KFVRgBlgjze51owyIiUM3e2Dv.ATQDS/mD.NwAJe8O', NULL, '2019-07-01 02:55:45', '2019-07-01 02:55:45'),
(2, 'alfonso@gmail.com', NULL, '$2y$10$cmCekRY3x8InS9x2Zy6t.eo5zgOcK8OVOOUFq/xyz3mv66z.Emd/u', NULL, '2019-07-04 08:04:56', '2019-07-04 08:04:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
