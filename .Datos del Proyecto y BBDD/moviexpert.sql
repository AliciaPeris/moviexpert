-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2017 a las 19:46:28
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `moviexpert`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminchats`
--

DROP TABLE IF EXISTS `adminchats`;
CREATE TABLE IF NOT EXISTS `adminchats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `numguionistas` int(11) NOT NULL,
  `numactores` int(11) NOT NULL,
  `numdirectores` int(11) NOT NULL,
  `numcamaras` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `creadorchat` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`nombre`),
  KEY `adminchats_creadorchat_foreign` (`creadorchat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Truncar tablas antes de insertar `adminchats`
--

TRUNCATE TABLE `adminchats`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminconcursos`
--

DROP TABLE IF EXISTS `adminconcursos`;
CREATE TABLE IF NOT EXISTS `adminconcursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fechainicioinscripcion` date NOT NULL,
  `fechafininscripcion` date NOT NULL,
  `fechafinconcurso` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Truncar tablas antes de insertar `adminconcursos`
--

TRUNCATE TABLE `adminconcursos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admingeneros`
--

DROP TABLE IF EXISTS `admingeneros`;
CREATE TABLE IF NOT EXISTS `admingeneros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Truncar tablas antes de insertar `admingeneros`
--

TRUNCATE TABLE `admingeneros`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminpeliculas`
--

DROP TABLE IF EXISTS `adminpeliculas`;
CREATE TABLE IF NOT EXISTS `adminpeliculas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anio` int(11) NOT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guion` text COLLATE utf8_unicode_ci NOT NULL,
  `reparto` text COLLATE utf8_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8_unicode_ci NOT NULL,
  `cartelera` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `genero` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `adminpeliculas_genero_foreign` (`genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Truncar tablas antes de insertar `adminpeliculas`
--

TRUNCATE TABLE `adminpeliculas`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticapeliculas`
--

DROP TABLE IF EXISTS `criticapeliculas`;
CREATE TABLE IF NOT EXISTS `criticapeliculas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idpelicula` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `critica` text COLLATE utf8_unicode_ci NOT NULL,
  `fechavoto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `criticapeliculas_idpelicula_foreign` (`idpelicula`),
  KEY `criticapeliculas_idusuario_foreign` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Truncar tablas antes de insertar `criticapeliculas`
--

TRUNCATE TABLE `criticapeliculas`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajechats`
--

DROP TABLE IF EXISTS `mensajechats`;
CREATE TABLE IF NOT EXISTS `mensajechats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idmiembro` int(10) unsigned NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mensajechats_idmiembro_foreign` (`idmiembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Truncar tablas antes de insertar `mensajechats`
--

TRUNCATE TABLE `mensajechats`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembrochats`
--

DROP TABLE IF EXISTS `miembrochats`;
CREATE TABLE IF NOT EXISTS `miembrochats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idchat` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `tipomiembro` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`idchat`,`idusuario`),
  KEY `idchat` (`idchat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=81 ;

--
-- Truncar tablas antes de insertar `miembrochats`
--

TRUNCATE TABLE `miembrochats`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_11_214702_create_admingeneros_table', 2),
('2017_05_11_214703_create_adminpeliculas_table', 2),
('2017_05_11_214727_create_adminconcursos_table', 2),
('2014_10_12_000001_create_users_table', 3),
('2017_05_11_214727_create_adminchats_table', 4),
('2017_05_29_154650_create_participanconcursos_table', 5),
('2017_05_29_154732_create_votosconcursos_table', 5),
('2017_06_01_192816_create_mensajechats_table', 6),
('2017_06_01_163215_create_criticapeliculas_table', 7),
('2017_06_01_163310_create_votospeliculas_table', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participanconcursos`
--

DROP TABLE IF EXISTS `participanconcursos`;
CREATE TABLE IF NOT EXISTS `participanconcursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idconcurso` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `otrosparticipantes` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `corto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`idconcurso`,`idusuario`),
  KEY `participanconcursos_idconcurso_foreign` (`idconcurso`),
  KEY `participanconcursos_idusuario_foreign` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncar tablas antes de insertar `participanconcursos`
--

TRUNCATE TABLE `participanconcursos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `password_resets`
--

TRUNCATE TABLE `password_resets`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechanacimiento` date NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipousuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`email`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `apellidos`, `direccion`, `localidad`, `genero`, `fechanacimiento`, `foto`, `tipousuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'admin@gmail.com', '$2y$10$SN0shKVsheex0psfJsrb4.kU4hqVqsIR1v1XjdB3xUP4t2d35KJlK', 'admin', 'admin', 'admin', 'admin', 'Hombre', '2017-06-02', '', 'admin', '2VKe83KjnHRbiXrGVxLg6Z6DhtTHfNmIzRePoRzbchkSwxnmKcRErYlYjQ6c', '2017-05-27 14:48:50', '2017-06-13 15:22:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votosconcursos`
--

DROP TABLE IF EXISTS `votosconcursos`;
CREATE TABLE IF NOT EXISTS `votosconcursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idcortoconcurso` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `voto` int(11) NOT NULL,
  `fechavoto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`idcortoconcurso`,`idusuario`),
  KEY `votosconcursos_idcortoconcurso_foreign` (`idcortoconcurso`),
  KEY `votosconcursos_idusuario_foreign` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Truncar tablas antes de insertar `votosconcursos`
--

TRUNCATE TABLE `votosconcursos`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votospeliculas`
--

DROP TABLE IF EXISTS `votospeliculas`;
CREATE TABLE IF NOT EXISTS `votospeliculas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idpelicula` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `voto` int(11) NOT NULL,
  `fechavoto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `votospeliculas_idpelicula_foreign` (`idpelicula`),
  KEY `votospeliculas_idusuario_foreign` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Truncar tablas antes de insertar `votospeliculas`
--

TRUNCATE TABLE `votospeliculas`;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adminchats`
--
ALTER TABLE `adminchats`
  ADD CONSTRAINT `adminchats_creadorchat_foreign` FOREIGN KEY (`creadorchat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `adminpeliculas`
--
ALTER TABLE `adminpeliculas`
  ADD CONSTRAINT `adminpeliculas_genero_foreign` FOREIGN KEY (`genero`) REFERENCES `admingeneros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `criticapeliculas`
--
ALTER TABLE `criticapeliculas`
  ADD CONSTRAINT `criticapeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `criticapeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensajechats`
--
ALTER TABLE `mensajechats`
  ADD CONSTRAINT `mensajechats_idmiembro_foreign` FOREIGN KEY (`idmiembro`) REFERENCES `miembrochats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `miembrochats`
--
ALTER TABLE `miembrochats`
  ADD CONSTRAINT `miembrochats_ibfk_1` FOREIGN KEY (`idchat`) REFERENCES `adminchats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participanconcursos`
--
ALTER TABLE `participanconcursos`
  ADD CONSTRAINT `participanconcursos_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participanconcursos_idconcurso_foreign` FOREIGN KEY (`idconcurso`) REFERENCES `adminconcursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `votosconcursos`
--
ALTER TABLE `votosconcursos`
  ADD CONSTRAINT `votosconcursos_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votosconcursos_idcortoconcurso_foreign` FOREIGN KEY (`idcortoconcurso`) REFERENCES `participanconcursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `votospeliculas`
--
ALTER TABLE `votospeliculas`
  ADD CONSTRAINT `votospeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votospeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
