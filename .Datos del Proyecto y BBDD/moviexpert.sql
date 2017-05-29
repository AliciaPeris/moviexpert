-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2017 a las 17:27:26
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
  PRIMARY KEY (`id`),
  KEY `adminchats_creadorchat_foreign` (`creadorchat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Truncar tablas antes de insertar `adminconcursos`
--

TRUNCATE TABLE `adminconcursos`;
--
-- Volcado de datos para la tabla `adminconcursos`
--

INSERT INTO `adminconcursos` (`id`, `nombre`, `descripcion`, `fechainicioinscripcion`, `fechafininscripcion`, `fechafinconcurso`, `created_at`, `updated_at`) VALUES
(3, 'Naturaleza', 'Los cortos deberán ser originales e inéditos y no deberán haber recibido previamente ningún premio o accésit en otro certamen o concurso nacional y/o internacional. Deberán ser un cortometraje en español de una duración mínima de 3 minutos y máxima de 6 minutos. La temática general de los cortos será la Naturaleza: su belleza, biodiversidad y conservación; su papel como hábitat natural nuestro y del resto de especies; nuestro vínculo con ella y el impacto que ocasionamos como sociedad; la naturaleza como fuente de inspiración y las emociones que nos genera… La organización se reserva el derecho de admisión de la participación de los cortos que no contemplen el tema central propuesto.', '2017-05-29', '2017-06-25', '2017-08-17', '2017-05-29 15:26:50', '2017-05-29 15:26:50');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncar tablas antes de insertar `adminpeliculas`
--

TRUNCATE TABLE `adminpeliculas`;
--
-- Volcado de datos para la tabla `adminpeliculas`
--

INSERT INTO `adminpeliculas` (`id`, `titulo`, `anio`, `pais`, `director`, `guion`, `reparto`, `sinopsis`, `trailer`, `cartelera`, `created_at`, `updated_at`, `genero`) VALUES
(5, 'Abuelos al poder', 2012, 'Estados Unidos', 'Andy Fickman', 'Billy Crystal, Lisa Addario', 'Billy Crystal,  Bette Midler,  Marisa Tomei,  Tom Everett Scott,  Bailee Madison, Joshua Rush,  Kyle Harrison Breitkopf,  Jennifer Crystal Foley,  Rhoda Griffis, Gedde Watanabe,  Tony Hawk,  Cade Jones,  Mavrick Moreno,  Steve Levy', 'Artie y Diane aceptan cuidar de sus tres nietos mientras los padres de estos salen de viaje por motivos de trabajo. Pero cuando los métodos educativos más modernos entran en colisión con los de la vieja escuela, los problemas comienzan a surgir', 'abuelosalpoder.jpg', 'abuelosalpoder.jpg', '2017-05-29 14:16:16', '2017-05-29 14:16:16', 1);

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
('2017_05_29_154732_create_votosconcursos_table', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `apellidos`, `direccion`, `localidad`, `genero`, `fechanacimiento`, `foto`, `tipousuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'admin@admin.com', '$2y$10$WeKndm/ircmIedEF9.2Fce7q.DqwN4TCcleKYp451roOYiz4pQQWm', 'admin', 'admin', 'admin', 'admin', 'admin', '0000-00-00', '', 'admin', 'EI0sOafzCk65qvcEryfNxKGa1CHjhmUrbYG9eXRrwUHabXv4ZDOtQeAU3ZKK', '2017-05-27 14:48:50', '2017-05-27 15:52:39');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
