-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2017 a las 23:18:20
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moviexpert`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminchats`
--

CREATE TABLE `adminchats` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `numguionistas` int(11) NOT NULL,
  `numactores` int(11) NOT NULL,
  `numdirectores` int(11) NOT NULL,
  `numcamaras` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `creadorchat` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `adminconcursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fechainicioinscripcion` date NOT NULL,
  `fechafininscripcion` date NOT NULL,
  `fechafinconcurso` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `admingeneros` (
  `id` int(10) UNSIGNED NOT NULL,
  `genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admingeneros`
--

INSERT INTO `admingeneros` (`id`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Terror', '2017-05-25 17:27:59', '2017-05-25 17:27:59'),
(2, 'Accion', '2017-05-25 17:28:17', '2017-05-25 17:28:17'),
(3, 'comedia', '2017-06-08 16:08:16', '2017-06-08 16:08:16'),
(4, 'Animación', '2017-06-08 16:08:22', '2017-06-08 16:08:22'),
(6, 'Romántica', '2017-06-08 16:09:12', '2017-06-08 16:09:12'),
(7, 'Drama', '2017-06-08 16:09:21', '2017-06-08 16:09:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminpeliculas`
--

CREATE TABLE `adminpeliculas` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `genero` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `adminpeliculas`
--

INSERT INTO `adminpeliculas` (`id`, `titulo`, `anio`, `pais`, `director`, `guion`, `reparto`, `sinopsis`, `trailer`, `cartelera`, `created_at`, `updated_at`, `genero`) VALUES
(5, 'Abuelos al poder', 2012, 'Estados Unidos', 'Andy Fickman', 'Billy Crystal, Lisa Addario', 'Billy Crystal,  Bette Midler,  Marisa Tomei,  Tom Everett Scott,  Bailee Madison, Joshua Rush,  Kyle Harrison Breitkopf,  Jennifer Crystal Foley,  Rhoda Griffis, Gedde Watanabe,  Tony Hawk,  Cade Jones,  Mavrick Moreno,  Steve Levy', 'Artie y Diane aceptan cuidar de sus tres nietos mientras los padres de estos salen de viaje por motivos de trabajo. Pero cuando los métodos educativos más modernos entran en colisión con los de la vieja escuela, los problemas comienzan a surgir', 'rYpOQcQZ1aY', 'abuelosalpoder.jpg', '2017-05-29 14:16:16', '2017-06-08 15:44:43', 2),
(17, 'Piratas del Caribe 5', 2017, 'Estados Unidos', 'Joachim Rønning,  Espen Sandberg', 'Jeff Nathanson', 'Johnny Depp,  Javier Bardem,  Brenton Thwaites,  Kaya Scodelario,  Geoffrey Rush, Orlando Bloom,  Kevin McNally,  David Wenham,  Stephen Graham,  Adam Brown, Golshifteh Farahani,  Martin Klebba,  Goran D. Kleut,  Jessica Green,  Paul McCartney, Keira Knightley', 'El capitán Jack Sparrow se enfrentará a un grupo de piratas-fantasma comandados por una de sus viejas némesis, el terrorífico capitán Salazar, recién escapado del Triángulo de las Bermudas. ', 'wGLBEj30lds', 'piratas.jpg', '2017-06-07 17:56:23', '2017-06-08 16:09:43', 2),
(18, 'Brave', 2011, 'Estados Unidos', 'Mark Andrews,  Brenda Chapman,  Steve Purcell', 'Mark Andrews, Steve Purcell, Brenda Chapman, Irene Mecchi (Historia: Brenda Chapman)', 'Animation', 'Merida, la indómita hija del Rey Fergus y de la Reina Elinor, es una hábil arquera que decide romper con una antigua costumbre, que es sagrada para los señores de la tierra: el gigantesco Lord MacGuffin, el malhumorado Lord Macintosh y el cascarrabias Lord Dingwall', '0gc36idTb3c', 'brave.jpg', '2017-06-08 15:50:17', '2017-06-08 16:09:55', 4),
(19, 'Bittersweet Days', 2016, 'España', 'Marga Melià', 'Marga Melià', 'Esther González,  Brian Teuwen,  Joan Miquel Artigues,  Patricia Caballero, Natasja Bode,  Michael Kalweit,  Queralt Riera,  Joan Marqueño,  Marga Melià', 'Cuando el novio de Julia tiene que trasladarse temporalmente a Londres, ella se ve obligada a compartir piso con Luuk, un extrovertido fotógrafo holandés. Su convivencia hará que los dos se replanteen su manera de afrontar la vida. ', 'QLiKuv4aDfQ', 'bittersweet_days.jpg', '2017-06-08 15:52:13', '2017-06-08 16:10:14', 6),
(20, 'Thor', 2011, 'Estados Unidos', 'Kenneth Branagh', 'Mark Protosevich, J. Michael Straczynski, Don Payne, Zack Stentz, Ashley Miller (Personajes: Stan Lee, Jack Kirby)', 'Chris Hemsworth,  Natalie Portman,  Tom Hiddleston,  Anthony Hopkins, Stellan Skarsgård,  Jaimie Alexander,  Ray Stevenson,  Idris Elba,  Kat Dennings, Colm Feore,  Clark Gregg,  Josh Dallas,  Tadanobu Asano,  Rene Russo, Maximiliano Hernández,  Jeremy Renner,  Samuel L. Jackson,  Dakota Goyo', 'Thor es un arrogante y codicioso guerrero cuya imprudencia desata una antigua guerra. Por ese motivo, su padre Odín lo castiga desterrándolo a la Tierra para que viva entre los hombres y descubra así el verdadero sentido de la humildad.', 'mi8Jg4DHsAg', 'Thor.jpg', '2017-06-08 16:06:07', '2017-06-08 16:10:30', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticapeliculas`
--

CREATE TABLE `criticapeliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idpelicula` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `critica` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `fechavoto` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `criticapeliculas`
--

INSERT INTO `criticapeliculas` (`id`, `idpelicula`, `idusuario`, `critica`, `fechavoto`, `created_at`, `updated_at`) VALUES
(10, 5, 11, 'me ha gustado la película', '2017-06-08 23:04:00', '2017-06-08 21:04:00', '2017-06-08 21:04:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajechats`
--

CREATE TABLE `mensajechats` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmiembro` int(10) UNSIGNED NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `miembrochats` (
  `id` int(10) UNSIGNED NOT NULL,
  `idchat` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `tipomiembro` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `participanconcursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `idconcurso` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `otrosparticipantes` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `corto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `participanconcursos`
--

INSERT INTO `participanconcursos` (`id`, `idconcurso`, `idusuario`, `otrosparticipantes`, `titulo`, `descripcion`, `corto`, `created_at`, `updated_at`) VALUES
(1, 3, 11, '', '', '', '', '2017-06-08 16:34:11', '2017-06-08 16:34:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `apellidos`, `direccion`, `localidad`, `genero`, `fechanacimiento`, `foto`, `tipousuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'admin@admin.com', '$2y$10$SN0shKVsheex0psfJsrb4.kU4hqVqsIR1v1XjdB3xUP4t2d35KJlK', 'admin', 'admin', 'admin', 'admin', 'Hombre', '2017-06-02', '', 'admin', 'H1FCb8Bq09fIHfDu3qHhm6hQSKJic5jNn9lhmuLkkobxhneYUcaa0HQ8jxbY', '2017-05-27 14:48:50', '2017-06-07 15:52:26'),
(14, 'pilar@gmail.com', '$2y$10$SN0shKVsheex0psfJsrb4.kU4hqVqsIR1v1XjdB3xUP4t2d35KJlK', 'Pilar', 'Peris', 'Rodeo 20', 'Garganta la Olla', 'Mujer', '2017-05-10', 'perfildefecto.png', 'normal', 'g4OaddQSQjg18lUrvFswjaSoDsScZPDRfADUuGC2cebelDHKsbheSm5C1yCn', '2017-05-31 16:12:31', '2017-06-07 14:05:21'),
(15, 'sheila_bravo@hotmail.com', '$2y$10$byc0FTHBZ1Qg/HfwCg8QL.Icmt5kl.Gf2QmvlhdlcNsAmyz47rtVS', 'Sheila', 'Bravo Sánchez', 'c/José Armella nº8 2ºA', 'Navalmoral de la Mata', 'mujer', '1989-11-07', 'perfildefecto.png', 'normal', 'x9EZAb5eTwrswa7crXpH2nYFigQO6SOruBDM3jo2deHefsCEE8QR5bMaeeP9', '2017-06-08 15:43:02', '2017-06-08 15:43:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votosconcursos`
--

CREATE TABLE `votosconcursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `idcortoconcurso` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `voto` int(11) NOT NULL,
  `fechavoto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votospeliculas`
--

CREATE TABLE `votospeliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idpelicula` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `voto` int(11) NOT NULL,
  `fechavoto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminchats`
--
ALTER TABLE `adminchats`
  ADD PRIMARY KEY (`id`,`nombre`),
  ADD KEY `adminchats_creadorchat_foreign` (`creadorchat`);

--
-- Indices de la tabla `adminconcursos`
--
ALTER TABLE `adminconcursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admingeneros`
--
ALTER TABLE `admingeneros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `adminpeliculas`
--
ALTER TABLE `adminpeliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminpeliculas_genero_foreign` (`genero`);

--
-- Indices de la tabla `criticapeliculas`
--
ALTER TABLE `criticapeliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criticapeliculas_idpelicula_foreign` (`idpelicula`),
  ADD KEY `criticapeliculas_idusuario_foreign` (`idusuario`);

--
-- Indices de la tabla `mensajechats`
--
ALTER TABLE `mensajechats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensajechats_idmiembro_foreign` (`idmiembro`);

--
-- Indices de la tabla `miembrochats`
--
ALTER TABLE `miembrochats`
  ADD PRIMARY KEY (`id`,`idchat`,`idusuario`),
  ADD KEY `idchat` (`idchat`);

--
-- Indices de la tabla `participanconcursos`
--
ALTER TABLE `participanconcursos`
  ADD PRIMARY KEY (`id`,`idconcurso`,`idusuario`),
  ADD KEY `participanconcursos_idconcurso_foreign` (`idconcurso`),
  ADD KEY `participanconcursos_idusuario_foreign` (`idusuario`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `votosconcursos`
--
ALTER TABLE `votosconcursos`
  ADD PRIMARY KEY (`id`,`idcortoconcurso`,`idusuario`),
  ADD KEY `votosconcursos_idcortoconcurso_foreign` (`idcortoconcurso`),
  ADD KEY `votosconcursos_idusuario_foreign` (`idusuario`);

--
-- Indices de la tabla `votospeliculas`
--
ALTER TABLE `votospeliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votospeliculas_idpelicula_foreign` (`idpelicula`),
  ADD KEY `votospeliculas_idusuario_foreign` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adminchats`
--
ALTER TABLE `adminchats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `adminconcursos`
--
ALTER TABLE `adminconcursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `admingeneros`
--
ALTER TABLE `admingeneros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `adminpeliculas`
--
ALTER TABLE `adminpeliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `criticapeliculas`
--
ALTER TABLE `criticapeliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `mensajechats`
--
ALTER TABLE `mensajechats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `miembrochats`
--
ALTER TABLE `miembrochats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT de la tabla `participanconcursos`
--
ALTER TABLE `participanconcursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `votosconcursos`
--
ALTER TABLE `votosconcursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `votospeliculas`
--
ALTER TABLE `votospeliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `criticapeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`),
  ADD CONSTRAINT `criticapeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`);

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
  ADD CONSTRAINT `votospeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`),
  ADD CONSTRAINT `votospeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
