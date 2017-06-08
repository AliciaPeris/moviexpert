-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2017 a las 16:44:37
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
CREATE DATABASE IF NOT EXISTS `moviexpert` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moviexpert`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncar tablas antes de insertar `adminchats`
--

TRUNCATE TABLE `adminchats`;
--
-- Volcado de datos para la tabla `adminchats`
--

INSERT INTO `adminchats` (`id`, `nombre`, `descripcion`, `numguionistas`, `numactores`, `numdirectores`, `numcamaras`, `created_at`, `updated_at`, `creadorchat`) VALUES
(4, 'El mundo de yobi', 'Un corto infantil cuyo personaje principal es un zorro llamado yobi', 0, 0, 1, 0, '2017-06-01 19:17:02', '2017-06-01 19:17:02', 11),
(5, 'La ultima guerra', 'Basado en historias reales de la ultima guerro en chipre', 2, 2, 1, 3, '2017-06-05 16:21:53', '2017-06-05 16:21:53', 11);

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
--
-- Volcado de datos para la tabla `adminconcursos`
--

INSERT INTO `adminconcursos` (`id`, `nombre`, `descripcion`, `fechainicioinscripcion`, `fechafininscripcion`, `fechafinconcurso`, `created_at`, `updated_at`) VALUES
(3, 'Naturaleza', 'Los cortos deberán ser originales e inéditos y no deberán haber recibido previamente ningún premio o accésit en otro certamen o concurso nacional y/o internacional. Deberán ser un cortometraje en español de una duración mínima de 3 minutos y máxima de 6 minutos. La temática general de los cortos será la Naturaleza: su belleza, biodiversidad y conservación; su papel como hábitat natural nuestro y del resto de especies; nuestro vínculo con ella y el impacto que ocasionamos como sociedad; la naturaleza como fuente de inspiración y las emociones que nos genera… La organización se reserva el derecho de admisión de la participación de los cortos que no contemplen el tema central propuesto.', '2017-05-29', '2017-06-25', '2017-08-17', '2017-05-29 15:26:50', '2017-05-29 15:26:50'),
(4, 'Electronica', 'Todo en ambito que se refiere a la tecnologia ', '2017-05-09', '2017-05-29', '2017-08-26', '2017-05-30 17:40:21', '2017-05-30 17:40:21');

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
--
-- Volcado de datos para la tabla `admingeneros`
--

INSERT INTO `admingeneros` (`id`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Terror', '2017-05-25 17:27:59', '2017-05-25 17:27:59'),
(2, 'Accion', '2017-05-25 17:28:17', '2017-05-25 17:28:17');

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
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cartelera` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `genero` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `adminpeliculas_genero_foreign` (`genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Truncar tablas antes de insertar `adminpeliculas`
--

TRUNCATE TABLE `adminpeliculas`;
--
-- Volcado de datos para la tabla `adminpeliculas`
--

INSERT INTO `adminpeliculas` (`id`, `titulo`, `anio`, `pais`, `director`, `guion`, `reparto`, `sinopsis`, `trailer`, `cartelera`, `created_at`, `updated_at`, `genero`) VALUES
(5, 'Abuelos al poder', 2017, 'Estados Unidos', 'Andy Fickman', 'Billy Crystal, Lisa Addario', 'Billy Crystal,  Bette Midler,  Marisa Tomei,  Tom Everett Scott,  Bailee Madison, Joshua Rush,  Kyle Harrison Breitkopf,  Jennifer Crystal Foley,  Rhoda Griffis, Gedde Watanabe,  Tony Hawk,  Cade Jones,  Mavrick Moreno,  Steve Levy', 'Artie y Diane aceptan cuidar de sus tres nietos mientras los padres de estos salen de viaje por motivos de trabajo. Pero cuando los métodos educativos más modernos entran en colisión con los de la vieja escuela, los problemas comienzan a surgir', 'abuelosalpoder.jpg', 'abuelosalpoder.jpg', '2017-05-29 14:16:16', '2017-05-29 14:16:16', 1),
(17, 'afsdfasdf', 2017, 'afsdfa', 'sdf', 'asdfas', 'dfasdf', 'fasdfas', 'Os3tVZD2g-8&index=26&list=PLIddmSRJEJ0u-5Nv2k6W8Vhe0wUP_7H5W', '', '2017-06-07 17:56:23', '2017-06-07 17:56:23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticapeliculas`
--

DROP TABLE IF EXISTS `criticapeliculas`;
CREATE TABLE IF NOT EXISTS `criticapeliculas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idpelicula` int(10) unsigned NOT NULL,
  `idusuario` int(10) unsigned NOT NULL,
  `critica` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Truncar tablas antes de insertar `mensajechats`
--

TRUNCATE TABLE `mensajechats`;
--
-- Volcado de datos para la tabla `mensajechats`
--

INSERT INTO `mensajechats` (`id`, `idmiembro`, `mensaje`, `created_at`, `updated_at`) VALUES
(1, 79, 'miembro 79', NULL, NULL),
(2, 80, 'Miembro 80', NULL, NULL),
(3, 79, 'asdfasd', '2017-06-07 14:51:14', '2017-06-07 14:51:14'),
(4, 79, 'errwet', '2017-06-07 14:52:37', '2017-06-07 14:52:37'),
(5, 79, 'trwer', '2017-06-07 14:53:06', '2017-06-07 14:53:06'),
(6, 79, 'asdfsf', '2017-06-07 14:55:07', '2017-06-07 14:55:07'),
(7, 79, 'rtwgerfwerfwer', '2017-06-07 14:55:14', '2017-06-07 14:55:14'),
(8, 79, 'ynbertge4rq3rw3eqqwr', '2017-06-07 14:55:24', '2017-06-07 14:55:24'),
(9, 79, '', '2017-06-07 14:56:31', '2017-06-07 14:56:31'),
(10, 79, '', '2017-06-07 14:59:15', '2017-06-07 14:59:15');

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
--
-- Volcado de datos para la tabla `miembrochats`
--

INSERT INTO `miembrochats` (`id`, `idchat`, `idusuario`, `tipomiembro`, `created_at`, `updated_at`) VALUES
(77, 4, 11, 'Director', '2017-06-06 15:57:53', '2017-06-06 15:57:53'),
(79, 5, 11, 'Camara', '2017-06-06 15:59:11', '2017-06-06 15:59:11'),
(80, 5, 14, 'Camara', '2017-06-07 13:49:15', '2017-06-07 13:49:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
(11, 'admin@admin.com', '$2y$10$SN0shKVsheex0psfJsrb4.kU4hqVqsIR1v1XjdB3xUP4t2d35KJlK', 'admin', 'admin', 'admin', 'admin', 'Hombre', '2017-06-02', '', 'admin', 'H1FCb8Bq09fIHfDu3qHhm6hQSKJic5jNn9lhmuLkkobxhneYUcaa0HQ8jxbY', '2017-05-27 14:48:50', '2017-06-07 15:52:26'),
(14, 'pilar@gmail.com', '$2y$10$SN0shKVsheex0psfJsrb4.kU4hqVqsIR1v1XjdB3xUP4t2d35KJlK', 'Pilar', 'Peris', 'Rodeo 20', 'Garganta la Olla', 'Mujer', '2017-05-10', 'perfildefecto.png', 'normal', 'g4OaddQSQjg18lUrvFswjaSoDsScZPDRfADUuGC2cebelDHKsbheSm5C1yCn', '2017-05-31 16:12:31', '2017-06-07 14:05:21');

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
  ADD CONSTRAINT `adminchats_creadorchat_foreign` FOREIGN KEY (`creadorchat`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `adminpeliculas`
--
ALTER TABLE `adminpeliculas`
  ADD CONSTRAINT `adminpeliculas_genero_foreign` FOREIGN KEY (`genero`) REFERENCES `admingeneros` (`id`);

--
-- Filtros para la tabla `criticapeliculas`
--
ALTER TABLE `criticapeliculas`
  ADD CONSTRAINT `criticapeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `criticapeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`);

--
-- Filtros para la tabla `mensajechats`
--
ALTER TABLE `mensajechats`
  ADD CONSTRAINT `mensajechats_idmiembro_foreign` FOREIGN KEY (`idmiembro`) REFERENCES `miembrochats` (`id`);

--
-- Filtros para la tabla `miembrochats`
--
ALTER TABLE `miembrochats`
  ADD CONSTRAINT `miembrochats_ibfk_1` FOREIGN KEY (`idchat`) REFERENCES `adminchats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participanconcursos`
--
ALTER TABLE `participanconcursos`
  ADD CONSTRAINT `participanconcursos_idconcurso_foreign` FOREIGN KEY (`idconcurso`) REFERENCES `adminconcursos` (`id`),
  ADD CONSTRAINT `participanconcursos_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `votosconcursos`
--
ALTER TABLE `votosconcursos`
  ADD CONSTRAINT `votosconcursos_idcortoconcurso_foreign` FOREIGN KEY (`idcortoconcurso`) REFERENCES `participanconcursos` (`id`),
  ADD CONSTRAINT `votosconcursos_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `votospeliculas`
--
ALTER TABLE `votospeliculas`
  ADD CONSTRAINT `votospeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `votospeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
