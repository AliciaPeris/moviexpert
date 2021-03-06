-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2017 a las 22:01:36
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
(1, 'Los amantes inaguantables', 'Un corto sobre personas que se quieren pero no pueden estar juntas', 2, 12, 1, 4, '2017-06-13 21:44:13', '2017-06-13 21:44:13', 12),
(2, 'Corto sobre el reciclaje', 'Un cortometraje que sirva para concienciar sobre el reciclaje', 3, 4, 2, 2, '2017-06-13 21:45:21', '2017-06-13 21:45:21', 13),
(3, 'Naturaleza', 'Participar en el concurso de Naturaleza', 4, 10, 1, 3, '2017-06-15 16:14:09', '2017-06-15 16:14:09', 12);

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
(1, 'Naturaleza', 'Cortometraje sobre la naturaleza, cómo viven los animales', '2017-06-13', '2017-06-14', '2017-06-15', '2017-06-13 21:49:00', '2017-06-13 21:49:00'),
(2, 'Tecnologías', 'Como los avances tecnológicos estan cambiando la vida cotidiana de las personas', '2017-06-13', '2017-06-15', '2017-07-30', '2017-06-13 21:50:02', '2017-06-13 21:50:02'),
(3, 'Maltrato animal', 'Concurso para concienciar a las personas en contra del maltrato animal', '2017-06-12', '2017-06-19', '2017-07-13', '2017-06-13 21:51:07', '2017-06-13 21:51:07'),
(4, 'La historia de Flinn', 'Un hombre que estaba loco que quería volar', '2017-06-15', '2017-06-15', '2017-06-18', '2017-06-15 16:57:45', '2017-06-15 17:03:06');

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
(1, 'Ciencia Ficción', '2017-06-13 20:14:40', '2017-06-13 20:14:40'),
(2, 'Drama', '2017-06-13 20:14:46', '2017-06-13 20:14:46'),
(3, 'Romance', '2017-06-13 20:14:54', '2017-06-13 20:14:54'),
(4, 'Thriller', '2017-06-13 20:15:02', '2017-06-13 20:15:02'),
(5, 'Terror', '2017-06-13 20:15:07', '2017-06-15 16:48:41'),
(6, 'Comedia', '2017-06-13 20:15:14', '2017-06-13 20:15:14'),
(7, 'Animation', '2017-06-13 20:25:11', '2017-06-13 20:25:11'),
(8, 'Documental', '2017-06-15 16:49:24', '2017-06-15 16:49:24');

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
  `trailer` text COLLATE utf8_unicode_ci NOT NULL,
  `cartelera` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `genero` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `adminpeliculas`
--

INSERT INTO `adminpeliculas` (`id`, `titulo`, `anio`, `pais`, `director`, `guion`, `reparto`, `sinopsis`, `trailer`, `cartelera`, `created_at`, `updated_at`, `genero`) VALUES
(1, '2001: A Space Odyssey', 1968, 'Reino Unido', 'Stanley Kubrick', 'Stanley Kubrick, Arthur C. Clarke (Novela corta: Arthur C. Clarke)', 'Keir Dullea,  Gary Lockwood,  William Sylvester,  Daniel Richter,  Leonard Rossiter, Margaret Tyzack,  Robert Beatty,  Sean Sullivan,  Frank Miller,  Penny Brahms, Alan Gilfford,  Vivian Kubrick', 'La película de ciencia-ficción por excelencia de la historia del cine narra los diversos periodos de la historia de la humanidad, no sólo del pasado, sino también del futuro. Hace millones de años, antes de la aparición del "homo sapiens", unos primates descubren un monolito que los conduce a un estadio de inteligencia superior. Millones de años después, otro monolito, enterrado en una luna, despierta el interés de los científicos. Por último, durante una misión de la NASA, HAL 9000, una máquina dotada de inteligencia artificial, se encarga de controlar todos los sistemas de una nave espacial tripulada.', 'yS4Xu6FeWNY', '2001.jpg', '2017-06-13 20:16:55', '2017-06-13 23:27:36', 1),
(2, 'Abuelos al poder', 2012, 'Estados Unidos', 'Andy Fickman', 'Billy Crystal, Lisa Addario', 'Billy Crystal,  Bette Midler,  Marisa Tomei,  Tom Everett Scott,  Bailee Madison, Joshua Rush,  Kyle Harrison Breitkopf,  Jennifer Crystal Foley,  Rhoda Griffis, Gedde Watanabe,  Tony Hawk,  Cade Jones,  Mavrick Moreno,  Steve Levy', 'Artie y Diane aceptan cuidar de sus tres nietos mientras los padres de estos salen de viaje por motivos de trabajo. Pero cuando los métodos educativos más modernos entran en colisión con los de la vieja escuela, los problemas comienzan a surgir. ', 'ZXdsEJW9g6I', 'abuelosalpoder.jpg', '2017-06-13 20:18:35', '2017-06-13 20:22:12', 6),
(3, 'Capitán Calzoncillos', 2017, 'Estados Unidos', 'David Soren', 'Nicholas Stoller (Libro: Dav Pilkey)', 'Animation', 'Dos escolares traviesos hipnotizan al director del colegio para convertirlo en su héroe de cómic: Capitán Calzoncillos. Jorge y Berto son super buenos amigos y pasan sus días creando cómics y soñando con bromas. Un día, hipnotizan accidentalmente al ''dire'' de su escuela, el Sr. Krupp, que a partir de entonces se cree que es el Capitán Calzoncillos, un súperhéroe malhumorado cuyo traje consiste en ropa interior y una capa. Por si esto no fuera suficientemente malo, su nuevo maestro es un malvado científico maldito dispuesto a exigir su venganza en la escuela. Jorge, Berto y el Capitán Calzoncillos deberán entonces unirse para frustrar su malvado plan. ', 'IudovqRZo4E', 'captain_.jpg', '2017-06-13 20:26:28', '2017-06-13 20:26:28', 7),
(4, 'Brave', 2012, 'Estados Unidos', 'Mark Andrews,  Brenda Chapman,  Steve Purcell', 'Mark Andrews, Steve Purcell, Brenda Chapman, Irene Mecchi (Historia: Brenda Chapman)', 'Animation', 'Merida, la indómita hija del Rey Fergus y de la Reina Elinor, es una hábil arquera que decide romper con una antigua costumbre, que es sagrada para los señores de la tierra: el gigantesco Lord MacGuffin, el malhumorado Lord Macintosh y el cascarrabias Lord Dingwall. Las acciones de Merida desencadenan el caos y la furia en el reino. Además, pide ayuda a una sabia anciana que le concede un deseo muy desafortunado. La muchacha tendrá que afrontar grandes peligros antes de aprender qué es la auténtica valentía.', '0gc36idTb3c', 'brave.jpg', '2017-06-13 20:28:41', '2017-06-13 20:28:41', 7),
(5, 'Entre lobos', 2010, 'España', 'Gerardo Olivares', 'Gerardo Olivares', 'Juan José Ballesta,  Sancho Gracia,  Manuel Camacho,  Carlos Bardem, Àlex Brendemühl,  Eduardo Gómez,  Agustín Rodríguez López,  Luisa Martín, Vicente Romero,  Dafne Fernández,  José Chaves,  Francisco Conde, José Manuel Soto,  Félix Sancho,  Antonio Dechent', 'Siendo un niño, a Marcos su padre lo entregó a un terrateniente para saldar una deuda, y éste lo dejó en manos de un pastor de cabras que vivía en una cueva. Con él, Marcos aprendió, a cazar, a buscar comida y a hacer fuego. Al tiempo que se iba ganando la confianza de los lobos de la zona, Marcos se queda solo al fallecer el pastor... ', 'whGakwUpz1o', 'entrelobos.jpg', '2017-06-13 20:31:19', '2017-06-13 20:31:19', 2),
(6, 'Pieles', 2017, 'España', 'Eduardo Casanova', 'Eduardo Casanova', 'Candela Peña,  Ana Polvorosa,  Macarena Gómez,  Carmen Machi,  Secun de la Rosa, Jon Kortajarena,  Joaquín Climent,  Enrique Martínez,  Eloi Costa,  Itziar Castro, Carolina Bang,  Ana María Ayala,  Adolfo Fernández,  Javier Bódalo', 'Sigue la historia de personas físicamente diferentes que, por este motivo, se han visto obligadas a esconderse, recluirse o unirse entre ellas. Nadie elige cómo nace, pero la apariencia física nos condiciona para con la sociedad, aunque no la hayamos elegido nosotros', 'Xl-7YSWNuQQ', 'pieles.jpg', '2017-06-13 20:33:54', '2017-06-13 20:33:54', 2),
(7, 'La momia', 2017, 'Estados Unidos', 'Alex Kurtzman', 'David Koepp, Christopher McQuarrie, Dylan Kussman (Historia: Jon Spaihts, Alex Kurtzman, Jenny Lumet)', 'Tom Cruise,  Russell Crowe,  Annabelle Wallis,  Sofia Boutella,  Jake Johnson, Courtney B. Vance,  Marwan Kenzari,  Javier Botet,  Shina Shihoko Nagai, Solomon Taiwo Justified,  Emily Ng,  Jason Matthewson,  Dylan Smith,  Rez Kempton', 'A pesar de estar enterrada en una tumba en lo más profundo del desierto, una antigua princesa (Sofia Boutella) cuyo destino le fue arrebatado injustamente, se despierta en la época actual, trayendo consigo una maldición que ha crecido hasta límites insospechados con el paso de miles de años.', 'b6iqUM7bxk4', 'the_mummy.jpg', '2017-06-13 20:35:49', '2017-06-13 20:35:49', 1),
(8, 'Raid dingue', 2017, 'Francia', 'Dany Boon', 'Dany Boon, Sarah Kaminsky', 'Alice Pol,  Dany Boon,  Michel Blanc,  Yvan Attal,  Patrick Mille,  Sabine Azéma, Anne Marivin,  Alain Doutey,  François Levantal', 'Johanna Pasquali es una joven policía pero no es como las otras. Para los otros policías es simpática pero totalmente nula. Sin embargo, dotada de buenas habilidades, su torpeza hace de ella una amenaza para los delincuentes... y para la gente. Le asignan misiones sin importancia, pero ella se entrena sin descanso, en su tiempo libre, para hacer realidad su sueño de ser la primera mujer en formar parte del grupo de élite de RAID, los cuerpos especiales.', '6BsHfgTfEPE', 'raid_dingue-520600817-large.jpg', '2017-06-13 20:38:20', '2017-06-13 20:38:20', 6),
(9, 'Verbo', 2011, 'España', 'Eduardo Chapero-Jackson', 'Eduardo Chapero-Jackson', 'Alba García,  Miguel Ángel Silvestre,  Najwa Nimri,  Verónica Echegui, Macarena Gómez,  Manolo Solo,  Adam Jezierski,  Víctor Clavijo, Nasser Saleh Ibrihim,  Michelle Asante,  Peter Peralta,  Álvaro Cañete,  Miriam Martín, Fernando Soto', 'Sara, una tímida chica de 15 años que posee un sexto sentido, empieza a intuir que en el mundo tiene que haber algo más que lo que ven sus ojos, algo oculto que acaba obsesionándola. Guiada por su instinto, empieza a encontrar en su gris existencia inquietantes mensajes y pistas que la empujan a entrar en un mundo nuevo y peligroso, en el que deberá emprender un viaje para salvar su vida. ', 'cn00V8d39dA', 'verbo.jpg', '2017-06-13 20:45:48', '2017-06-13 20:45:48', 1),
(10, 'Marie Curie', 2016, 'Alemania', 'Marie Noëlle', 'Marie Noëlle, Andrea Stoll', 'Karolina Gruszka,  Arieh Worthalter,  Charles Berling,  Izabela Kuna,  Malik Zidi, André Wilms,  Daniel Olbrychski,  Marie Denarnaud,  Samuel Finzi,  Piotr Glowacki, Jan Frycz,  Sabin Tambrea,  Sasha Crapanzano,  Rose Montron,  Adele Schmitt, Emma Pokromska,  Edgar Sehr,  Nikolaus Frei,  Artur Dziurman,  Piotr Bartuszek, Aldona Bonarowska,  Klara Bielawka,  Mariola Brycht,  Pawel Kleszcz,  Wenanty Nosul, Jakub Kotynski,  Ksawery Szlenkier,  Michal Meyer,  Konrad Bugaj, Krzysztof Bochenek', 'Al poco tiempo de que el matrimonio formado por Marie Curie (Karolina Gruszka) y Pierre Curie (Charles Berling) obtuviera el Nobel de Física, Pierre muere en un trágico accidente. Sola con dos niños, la treinteañera Marie se aferra a sus estudios científicos en un mundo dominado por los hombres, conviertiéndose en la primera mujer en recibir una cátedra en la Universidad Sorbona de París. Cuando se enamora de un científico casado e inicia una aventura con él, la mujer de éste, celosa, hace pública su relación, al mismo tiempo que se anuncia su premio Nobel de Química. En lugar de disfrutar de la fama que se ha ganado por su portentoso trabajo de investigación, Marie se ve difamada por cometer adulterio. ', 'ypeWEFWDdEA', 'marie_curie.jpg', '2017-06-13 20:47:26', '2017-06-13 20:47:26', 2),
(11, 'Thor', 2011, 'Estados Unidos', 'Kenneth Branagh', 'Mark Protosevich, J. Michael Straczynski, Don Payne, Zack Stentz, Ashley Miller (Personajes: Stan Lee, Jack Kirby)', 'Chris Hemsworth,  Natalie Portman,  Tom Hiddleston,  Anthony Hopkins, Stellan Skarsgård,  Jaimie Alexander,  Ray Stevenson,  Idris Elba,  Kat Dennings, Colm Feore,  Clark Gregg,  Josh Dallas,  Tadanobu Asano,  Rene Russo, Maximiliano Hernández,  Jeremy Renner,  Samuel L. Jackson,  Dakota Goyo', 'Thor es un arrogante y codicioso guerrero cuya imprudencia desata una antigua guerra. Por ese motivo, su padre Odín lo castiga desterrándolo a la Tierra para que viva entre los hombres y descubra así el verdadero sentido de la humildad. Cuando el villano más peligroso de su mundo envía a la Tierra a las fuerzas más oscuras de Asgard, Thor se dará cuenta de lo que realmente hace falta para ser un verdadero héroe.', 'gNOX4SEQ7aM', 'thor.jpg', '2017-06-13 20:49:33', '2017-06-13 20:49:33', 1),
(12, 'Al final del túnel', 2016, 'Argentina', 'Rodrigo Grande', 'Rodrigo Grande', 'Leonardo Sbaraglia,  Clara Lago,  Pablo Echarri,  Federico Luppi,  Javier Godino, Walter Donado,  Uma Salduende,  Daniel Morales Comini,  Laura Faienza, Sergio Ferreiro,  Facundo Nahuel Giménez,  Ariel Nuñez Di Croce,  Cristóbal Pinto', 'Joaquín está en silla de ruedas. Su casa, que conoció tiempos mejores, ahora es lúgubre y oscura. Berta, bailarina de striptease, y su hija Betty, llaman a su puerta respondiendo a un anuncio que puso Joaquín para alquilar una habitación. Su presencia alegra la casa y anima la vida de Joaquín. Una noche, mientras trabaja en su sótano, Joaquín escucha un ruido casi imperceptible. Se da cuenta entonces que una banda de delincuentes está construyendo un túnel que pasa bajo su casa con la intención de robar un banco cercano.', 'eO0vwfzwuEI', 'alfinaldeltunel.jpg', '2017-06-13 20:51:54', '2017-06-13 20:51:54', 4),
(13, 'Piratas del Caribe V', 2017, 'Estados Unidos', 'Joachim Rønning,  Espen Sandberg', 'Jeff Nathanson (Personajes: Ted Elliott, Terry Rossio, Stuart Beattie, Jay Wolpert)', 'Johnny Depp,  Javier Bardem,  Brenton Thwaites,  Kaya Scodelario,  Geoffrey Rush, Orlando Bloom,  Kevin McNally,  David Wenham,  Stephen Graham,  Adam Brown, Golshifteh Farahani,  Martin Klebba,  Goran D. Kleut,  Jessica Green,  Paul McCartney, Keira Knightley', 'El capitán Jack Sparrow se enfrentará a un grupo de piratas-fantasma comandados por una de sus viejas némesis, el terrorífico capitán Salazar, recién escapado del Triángulo de las Bermudas. La única posibilidad de Sparrow para salir con vida es encontrar el legendario Tridente de Poseidón, un poderoso artefacto que le da a su poseedor el control de los mares.', 'KsW1CAGX5JQ', 'piratas.jpg', '2017-06-13 20:53:46', '2017-06-13 20:53:46', 6),
(14, 'Deadpool 2', 2018, 'Estados Unidos', 'David Leitch', 'Rhett Reese, Paul Wernick', 'Ryan Reynolds,  Zazie Beetz,  Josh Brolin,  Morena Baccarin,  T.J. Miller, Brianna Hildebrand,  Leslie Uggams,  Zazie Beetz,  Karan Soni,  Stefan Kapicic, Jack Kesy', 'Secuela de la exitosa película (recaudó más de 780 millones de dólares en todo el mundo) parodia de los superhéroes mutantes del 2016, también protagonizada por Reynolds.', 'LWhql2dm410', 'deadPool2.jpg', '2017-06-13 20:57:11', '2017-06-13 20:57:11', 1),
(15, 'La mécanique de', 2017, 'Francia', 'Thomas Kruithof', 'Yann Gozlan, Thomas Kruithof', 'François Cluzet,  Alba Rohrwacher,  Simon Abkarian,  Sami Bouajila, Denis Podalydès,  Alexia Depicker', 'Un enigmático hombre de negocios en nombre de una misteriosa organización se pone en contacto con Duval (François Cluzet) para ofrecerle un trabajo sencillo y bien remunerado: transcribir escuchas telefónicas interceptadas. Duval, económicamente desesperado, acepta sin preguntar sobre la finalidad de la empresa que lo contrata. De pronto, envuelto en un complot político, debe afrontar la brutal mecánica del mundo oculto de los servicios secretos. ', 'NGGVpnWxd0o', 'la_mecanique.jpg', '2017-06-13 20:59:38', '2017-06-13 20:59:38', 4),
(16, 'Norman, el hombre', 2017, 'Estados Unidos', 'Joseph Cedar', 'Joseph Cedar', 'Richard Gere,  Lior Ashkenazi,  Michael Sheen,  Charlotte Gainsbourg,  Dan Stevens, Steve Buscemi,  Jonathan Avigdori,  Yehuda Almagor,  Caitlin O''Connell,  Hank Azaria, Harris Yulin,  Miranda Bailey,  Andrew Polk,  Jorge Pupo,  Maryann Urbano, Jay Patterson', 'Un hombre de negocios de poca monta llamado Norman Oppenheimer se hace amigo de un joven político en un momento bajo y solitario de su vida. Tres años más tarde, cuando ese político se convierte en un líder mundial influyente, la vida de Norman cambia dramáticamente. Para bien. Y para mal.', 'rs2eUnnFVTA', 'norman.jpg', '2017-06-13 21:02:32', '2017-06-13 21:02:32', 2),
(17, 'Black Panther', 2018, 'Estados Unidos', 'Ryan Coogler', 'Joe Robert Cole, Ryan Coogler (Cómics: Jack Kirby, Stan Lee)', 'Ludwig Göransson', '“Black Panther" cuenta la historia de T''Challa quien, después de los acontecimientos de "Capitán América: Civil War", vuelve a casa, a la nación de Wakanda, aislada y muy avanzada tecnológicamente, para ser proclamado Rey. Pero la reaparición de un viejo enemigo pone a prueba el temple de T''Challa como Rey y Black Panther ya que se ve arrastrado a un conflicto que pone en peligro todo el destino de Wakanda y del mundo.', 'xhziyNtTfao', 'pantera-negra-poster.jpg', '2017-06-13 21:05:23', '2017-06-13 21:05:23', 1),
(18, 'Jurassic World II', 2018, 'Estados Unidos', 'J.A. Bayona', 'Colin Trevorrow, Derek Connolly', 'Chris Pratt,  Bryce Dallas Howard,  James Cromwell,  Rafe Spall,  Toby Jones, Justice Smith,  Daniella Pineda,  Ted Levine,  Geraldine Chaplin,  Jeff Goldblum', 'Secuela de "Jurassic World" (2015), la cuarta película más taquillera de la historia del cine, y reinicio de Parque Jurásico.', 'Z6KgshZfDRs', 'JurasicWorld.jpg', '2017-06-13 21:08:47', '2017-06-13 21:08:47', 1),
(19, 'Avatar 2', 2020, 'Estados Unidos', 'James Cameron', 'James Cameron, Rick Jaffa, Amanda Silver', 'Sam Worthington,  Zoe Saldana,  Stephen Lang,  Clilff Curtis', 'Secuela del éxito de taquilla Avatar (2009). En palabras de su director, James Cameron, hechas el 21 de abril de 2010, "Parte de mi enfoque en la segunda película estará en la creación de un entorno diferente, un escenario diferente de Pandora. Voy a centrarme en el océano de Pandora, que será igual de rico, diverso, loco e imaginativo, pero sin ser una selva tropical. No digo que no volvamos a ver lo visto anteriormente, sino que veremos más', 'iuh1cuGx_Vc', 'avatar2.jpg', '2017-06-13 21:12:41', '2017-06-13 21:12:41', 1),
(20, 'Los increibles 2', 2018, 'Estados Unidos', 'Brad Bird', 'Brad Bird', 'Animation', 'Secuela de "Los increíbles".', 'YNsvyq4Oxco', 'los_increibles2.jpg', '2017-06-13 21:15:35', '2017-06-13 21:15:35', 7),
(21, 'Bittersweet Days', 2016, 'España', 'Marga Melià', 'Marga Melià', 'Esther González,  Brian Teuwen,  Joan Miquel Artigues,  Patricia Caballero, Natasja Bode,  Michael Kalweit,  Queralt Riera,  Joan Marqueño,  Marga Melià', 'Cuando el novio de Julia tiene que trasladarse temporalmente a Londres, ella se ve obligada a compartir piso con Luuk, un extrovertido fotógrafo holandés. Su convivencia hará que los dos se replanteen su manera de afrontar la vida. ', 'QLiKuv4aDfQ', 'bittersweet_days.jpg', '2017-06-13 21:17:02', '2017-06-13 21:17:02', 2),
(23, 'Baywatch', 2017, 'Estados Unidos', 'Seth Gordon', 'Damian Shannon, Mark Swift', 'Dwayne "The Rock" Johnson,  Zac Efron,  Alexandra Daddario,  Kelly Rohrbach, Ilfenesh Hadera,  Jon Bass,  Priyanka Chopra,  David Hasselhoff,  Izabel Goulart, Charlotte McKinney,  Belinda,  Pamela Anderson', 'Adaptación al cine de la serie "Los vigilantes de la playa". Narrará la historia del esforzado socorrista Mitch Buchannon (Johnson) y su choque de carácter con un bravucón socorrista novato (Efron). Juntos, descubren una trama delictiva local que amenaza el futuro de la Bahía', 'QiaC7rycMDw', 'baywatch.jpg', '2017-06-13 21:21:14', '2017-06-13 21:21:14', 6),
(24, 'Como la espuma', 2017, 'España', 'Roberto Pérez Toledo', 'Roberto Pérez Toledo', 'Sara Sálamo,  Nacho San José,  Pepe Ocio,  Sergio Torrico,  María Cotiello, Miguel Diosdado,  Daniel Muriel,  Carlo D''Ursi,  Jonás Beramí,  Raquel Quintana, Adrián Expósito,  Diego Martínez,  Maria Cotiello,  Dani Muriel,  Jonás Berami, Álex Villazán,  Javier Ballesteros,  Elisa Matilla', 'Una vieja mansión. Un plan B condenado a desmadrarse. Una orgía improvisada... Y, de pronto, un montón de historias de amor, desamor, reencuentro y descubrimiento. Del amanecer al atardecer, una quincena de protagonistas vivirán una experiencia sexual y emocional que les cambiará la vida. Una historia coral en la que quince personajes se encuentran y desencuentran en una vieja mansión en la que está teniendo lugar una orgía. Pero nunca una orgía estuvo tan plagada de sentimientos..', 'CL8PpCMvIrM', 'como_la_espuma.jpg', '2017-06-13 21:30:35', '2017-06-13 21:30:35', 6),
(25, 'Moviexpert', 2020, 'Sin información', 'Sin información', 'Sin información', 'Sin información', 'Sin información', 'D6HpR7umnps', 'defecto.jpg', '2017-06-13 21:34:04', '2017-06-13 21:34:04', 7),
(26, 'Michelangelo', 2017, 'Reino Unido', 'David Bickerstaff', 'David Bickerstaff', 'Documentary', 'Michelangelo Buonarroti (1475-1564) fue un arquitecto, escultor y pintor italiano renacentista, considerado uno de los más grandes artistas de la historia. Este documental construye, a través de comentarios de expertos y de los escritos del propio Miguel Ángel, la figura de un hombre enigmático, ahora más cerca que nunca. Pertenece a la serie ''Exhibition on Screen''', 'PSvdcVw9eUY', 'michelangelo.jpg', '2017-06-15 16:47:27', '2017-06-15 16:48:28', 2),
(27, 'American Pastoral', 2017, 'Estados Unidos', 'Ewan McGregor', 'John Romano (Novela: Philip Roth)', 'Ewan McGregor,  Jennifer Connelly,  Dakota Fanning,  Peter Riegert,  Rupert Evans, Uzo Aduba,  Molly Parker,  Valorie Curry,  Hannah Nordberg,  Julia Silverman, Mark Hildreth,  Samantha Mathis,  David Strathairn,  David Whalen,  Corrie Danieley', 'Seymour Lvov, “el Sueco”, es un exitoso hombre de negocios con una vida perfecta que ve como su estabilidad familiar peligra por la turbulenta situación política estadounidense de la década de los 60. La tormenta se desata cuando su hija Merry desaparece tras ser acusada de cometer un acto violento. Lvov se dedicará a buscarla y a reunir a su familia. Lo que descubre remueve sus cimientos, forzándole a mirar más allá de la superficie y afrontar el caos que está forjando el mundo a su alrededor: ninguna familia americana volverá a ser la misma.', 'h6wQWbg8hg8', 'american_pastoral.jpg', '2017-06-15 19:25:48', '2017-06-15 19:25:48', 2),
(28, 'Cartas de guerra', 2017, 'Portugal', 'Ivo Ferreira', 'Ivo Ferreira, Edgar Medina (Novela: António Lobo Antunes)', 'Miguel Nunes,  Margarida Vila-Nova,  Ricardo Pereira,  João Pedro Vaz, João Pedro Mamede', 'Cartas da Guerra está basada en un libro del renombrado autor portugués António Lobo Antunes. La novela epistolar, publicada en 2005, reúne las cartas que un joven soldado envió a su mujer desde Angola entre 1971 y 1973, durante la Guerra Colonial. Al igual que el propio Lobo Antunes, el joven soldado es médico y escritor en ciernes.', '27wTFqK0A0M', 'cartasGuerra.jpg', '2017-06-15 19:29:09', '2017-06-15 19:29:09', 2),
(29, 'Pet', 2017, 'Estados Unidos', 'Carles Torrens', 'Jeremy Slater', 'Dominic Monaghan,  Ksenia Solo,  Jennette McCurdy,  Da''Vone McDonald, Nathan Parsons,  Janet Song,  Sean Blakemore', 'Seth y Holly, son dos personas aisladas que tienen mucho más en común de lo que creen. Una oscura historia de amor que examina cuánto estamos dispuestos a hacer en nombre del amor. ', 'rYmeSZ6ocAo', 'pet.jpg', '2017-06-15 19:31:05', '2017-06-15 19:31:05', 4),
(30, 'Bitter Harvest', 2017, 'Canadá', 'George Mendeluk', 'Richard Bachynsky Hoover, George Mendeluk', 'Barry Pepper,  Max Irons,  Richard Brake,  Tom Austen,  Samantha Barks, Terence Stamp,  Aneurin Barnard,  Tamer Hassan,  Lucy Brown,  Nicholas Aaron, Edward Akrout,  William Beck,  Michael Jenn,  Richard Ashton,  Jack Hollington, Gary Oliver', 'Ucrania, 1930. Stalin avanza con sus ambiciones mientras Yuri, un joven artista nacido en una familia de guerreros cosacos, trata de salvar a su amante, Natalka, cuando el Ejército Rojo invade su país y tiene lugar el genocidio ucraniano que acabó con las vidas de millones de personas', 'tKnLAQKg4RI', 'bitter_harvest.jpg', '2017-06-15 19:33:28', '2017-06-15 19:33:28', 2),
(31, 'Frozen', 2013, 'Estados Unidos', 'Chris Buck,  Jennifer Lee', 'Jennifer Lee (Novela: Hans Christian Andersen)', 'Animation', 'Cuando una profecía condena a un reino a vivir un invierno eterno, la joven Anna, el temerario montañero Kristoff y el reno Sven emprenden un viaje épico en busca de Elsa, hermana de Anna y Reina de las Nieves, para poner fin al gélido hechizo. Adaptación libre del cuento "La reina de las nieves"', 'b0wQhtVSVjA', 'frozen.jpg', '2017-06-15 19:35:30', '2017-06-15 19:35:30', 7),
(32, 'Ballerina', 2016, 'Francia', 'Éric Warin,  Éric Summer', 'Éric Summer, Carol Noble, Laurent Zeitoun', 'Animation', 'Felicia es una niña que, tras perder a sus padres, vive en un orfanato en su Bretaña natal. Su pasión es la danza y sueña con convertirse en una bailarina profesional. Para conseguirlo se escapa con la ayuda de su amigo Víctor y viaja hasta el París de 1879. Allí se hará pasar por otra persona para conseguir entrar como alumna de la Grand Opera House y así luchar por tener la vida que desea.', 'CDPcawduyy0', 'ballerina.jpg', '2017-06-15 19:37:04', '2017-06-15 19:37:04', 7),
(33, 'Wilson', 2017, 'Estados Unidos', 'Craig Johnson', 'Daniel Clowes (Novela gráfica: Daniel Clowes)', 'Woody Harrelson,  Laura Dern,  Isabelle Amara,  Judy Greer,  Cheryl Hines, James Saito,  Chris Carlson,  Chelsea Anne Lawrence,  Bruce Bohne, Bobby E. Erickson,  Andrew Hawtrey', 'Tras la muerte de su padre, Wilson, más solo que nunca, se propone encontrar a su ex mujer y recuperar su relación; de ese modo descubre que tiene una hija adolescente que nació tras la ruptura de su matrimonio y que fue dada en adopción. Wilson fuerza el reencuentro con su ex mujer y su desconocida hija, pero el soñado encuentro se alejará bastante de un final feliz. ', '-xF-KKlTzFI', 'wilson.jpg', '2017-06-15 19:39:37', '2017-06-15 19:39:37', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criticapeliculas`
--

CREATE TABLE `criticapeliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idpelicula` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `critica` text COLLATE utf8_unicode_ci NOT NULL,
  `fechavoto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `criticapeliculas`
--

INSERT INTO `criticapeliculas` (`id`, `idpelicula`, `idusuario`, `critica`, `fechavoto`, `created_at`, `updated_at`) VALUES
(3, 16, 13, '"Contiene máximas y moralejas en cantidad (...) Gran trabajo de este actor [Gere] habitualmente diluido en líquidos banales y que compone aquí una figura tragicómica', '2017-06-13', '2017-06-13 21:41:04', '2017-06-13 21:41:04'),
(4, 24, 13, '"Inundada de frases chispeantes marca de la casa (...), también tiene pompas de tristeza y burbujas de pesimismo, pero lo que flota más es la esperanza de que sea el principio de un cambio ', '2017-06-13', '2017-06-13 21:41:30', '2017-06-13 21:41:30'),
(5, 24, 12, '"El tono resulta demasiado amateur e inconsistente (...) en el que prima la afectación y la pretenciosidad a golpe de diálogos ridículos e interpretaciones cochambrosas', '2017-06-13', '2017-06-13 21:42:56', '2017-06-13 21:42:56'),
(6, 33, 15, '"Hay ocasiones en que una película pertenece por completo a un intérprete (...) Cada gesto, cada frase y cada réplica del protagonista son una irreverente fiesta, momentos irrepetibles en un conjunto irregular".', '2017-06-15', '2017-06-15 19:41:05', '2017-06-15 19:41:05'),
(7, 27, 15, '"Sinopsis en movimiento que cuida algunos detalles para no darles uso (...) [se sale] de la sala con la idea de haber visto un drama familiar donde, sobre el papel, había una tragedia colectiva." \r\n', '2017-06-15', '2017-06-15 19:41:35', '2017-06-15 19:41:35'),
(8, 32, 15, '"Resulta un estilizado filme de animación que lleva a la danza elementos típicos de cuentos como ''La cenicienta'' (...) hay tiempo para divertidos momentos', '2017-06-15', '2017-06-15 19:42:17', '2017-06-15 19:42:17'),
(9, 26, 15, '"Hay oficio, hay didáctica, hay artesanía, respecto del cine, en la película de Bickerstaff. Pero nunca creatividad. Y quizá se podría añadir: ni falta que le hace." ', '2017-06-15', '2017-06-15 19:43:30', '2017-06-15 19:43:30'),
(10, 13, 15, '“Si, en el conjunto, hubiese habido un equilibrio similar entre el sentido de la aventura y las nuevas formas del blockbuster, aquí habría una película menos agotadora, menos dada a sabotearse a sí misma.” \r\n', '2017-06-15', '2017-06-15 19:44:01', '2017-06-15 19:44:01'),
(12, 16, 15, '"La narración ligera (...) engatusa con sus cuatro actos, elipsis y secundarios con chispa (...) si bien el poso final de la película no es mayor que el de una agradable charlatanería "', '2017-06-15', '2017-06-15 19:44:47', '2017-06-15 19:44:47'),
(13, 28, 15, '"El empeño por subrayar cada frase con otra, cada gesto con un grito y cada cadáver con el mismo infierno termina en un monocorde, triste y premioso ejercicio de lo mismo"', '2017-06-15', '2017-06-15 19:45:15', '2017-06-15 19:45:15'),
(14, 19, 15, '"Allí donde se juntan cine y alucine. (...) se sale ebrio de fantasía, pero entero, porque la película ha tenido la sensatez de mantener el fondo liviano del cuento, el ''érase una vez'', dentro de un pellejo abrumadoramente perfecto.', '2017-06-15', '2017-06-15 19:45:45', '2017-06-15 19:45:45'),
(15, 33, 12, '"Matiza la radicalidad del original (...). Hay menos fragmentación narrativa en un trabajo que apuesta por una cohesión dramática más convencional, engrandecida por el papel de Woody Harrelson" ', '2017-06-15', '2017-06-15 19:50:49', '2017-06-15 19:50:49'),
(16, 3, 12, '"Está tan lleno de entusiasmo y creatividad que le permite capturar el espíritu de un niño mejor que cualquier otra ficción infantil reciente"', '2017-06-15', '2017-06-15 19:52:17', '2017-06-15 19:52:17'),
(17, 7, 17, '"Lo de Sommers dio para varias secuelas cada vez de menor cuantía, suscitando esta pregunta para la nueva momia Universal: debemos esperarla como un placer culpable o como una nueva plaga de Egipto…"', '2017-06-15', '2017-06-15 19:56:19', '2017-06-15 19:56:19'),
(18, 2, 17, '"Mientras que sus veteranas estrellas hacen un magnífico trabajo (...) ''Guidance'' lo arruina, en todos los aspectos, en su retrato de cualquiera por debajo de los 55"', '2017-06-15', '2017-06-15 19:56:48', '2017-06-15 19:56:48'),
(19, 31, 17, '"Un ‘disney’ de los grandes. (...) lo que más reluce en ella es ese aroma de los primeros clásicos. (...) Con estructura y arraigo de musical, ''Frozen'' mejora incluso a la ya excelente ''Enredados''"', '2017-06-15', '2017-06-15 19:57:28', '2017-06-15 19:57:28'),
(20, 4, 17, '"Es una obra excepcional: no sólo la mejor película animada de este verano, sino un interesante juego de reajuste del clásico cuento con princesa, sublimado por su virtuoso manejo del lenguaje animado" ', '2017-06-15', '2017-06-15 19:58:39', '2017-06-15 19:58:39');

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
(1, 1, 14, 'Camara', '2017-06-13 21:45:44', '2017-06-13 21:45:44'),
(2, 1, 13, 'Actor', '2017-06-13 21:46:05', '2017-06-13 21:46:05'),
(3, 2, 12, 'Camara', '2017-06-15 16:16:07', '2017-06-15 16:16:07');

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
(1, 1, 12, '13', 'Los animales nuestros amigos', 'Un corto rodado al natural , con la naturaleza tal cual es', 'tttMLnR_3_Q', '2017-06-13 21:52:29', '2017-06-15 17:33:14'),
(2, 2, 13, '', 'Face to Face', 'Como hemos perdido contacto con nosotros mismos', 'tttMLnR_3_Q', '2017-06-13 21:54:10', '2017-06-15 17:26:02'),
(4, 4, 12, '13', 'Flinn y sus aventuras', 'Flinn el hombre sin cerebro', 'mWHTCZeUvLI', '2017-06-15 17:01:49', '2017-06-15 17:22:14');

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
(11, 'admin@gmail.com', '$2y$10$SN0shKVsheex0psfJsrb4.kU4hqVqsIR1v1XjdB3xUP4t2d35KJlK', 'admin', 'admin', 'admin', 'admin', 'Hombre', '2017-06-02', '', 'admin', 'tCLicGXWocJ4IS3AvAQ6UUIpGOMzVRYLq252ZeDzomBYx9tnJuCuhXzmXC0L', '2017-05-27 14:48:50', '2017-06-15 19:54:42'),
(12, 'sheila_bravo@hotmail.com', '$2y$10$eG94gl/kSGQRRhu3MRKT1OTQNYb7Kwr0.jbTTcfsdby5/OBrrBCna', 'Sheila', 'Bravo Sánchez', 'c/José Armella nº8 2ºA', 'Navalmoral de la Mata', 'Mujer', '1989-11-07', '', 'normal', 'kfsqWQuoOaUFfwEFcUIbikXN0qk1CaiQAvaaLiM02h4pnuJ6gaGKHBcke7vg', '2017-06-13 21:35:30', '2017-06-15 19:52:44'),
(13, 'alicia@hotmail.com', '$2y$10$o8F3a79LKtlMLN58Cl7RWeKQFnuRKuEbOMlhDZ1cYeKxUNFp5RC3S', 'Alicia', 'Peris', 'c/Tulipan nº3 1ºB', 'Garganta la Olla', 'Mujer', '1992-09-08', 'perfildefecto.png', 'normal', 'Jk0ofKP3qigRbvA07mxFCp6bUbtoyOiEOB5UuUEiMI68a8xHLifHiUHYxfJp', '2017-06-13 21:36:30', '2017-06-13 22:20:07'),
(15, 'lola@hotmail.com', '$2y$10$F5JD5S9cRrVgaaRGjeA5vupRjc4issk9XiKag2gWn4C9s2Z8DOwJS', 'Lolita', 'Bravo', 'c/Plaza de España', 'Alcalá de Henares', 'Mujer', '2017-06-15', '', 'normal', 'xrPKBioXAxw2tL6YCD5GG6nZHA6XjJY0uD9b8XxwimLFPvHYWVn86VvwuwcZ', '2017-06-15 16:32:55', '2017-06-15 19:53:36'),
(17, 'manolo@hotmail.com', '$2y$10$cxfYi79tzGoCGJ5ttAF2COp/IzcPrT8CMQMIISKVhdgvVSXdpcTb2', 'manolin', 'Bravo', 'c/jose armella', 'Navalmoral', 'Hombre', '1993-06-07', 'perfildefecto.png', 'normal', 'etzTnasKeQuvHqKy6Keu3MHj7a1LN28ghHWakvEQWmZUobbvBtEtgQbtjGA7', '2017-06-15 19:55:17', '2017-06-15 19:59:25');

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

--
-- Volcado de datos para la tabla `votosconcursos`
--

INSERT INTO `votosconcursos` (`id`, `idcortoconcurso`, `idusuario`, `voto`, `fechavoto`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 4, '2017-06-14', '2017-06-14 11:21:33', '2017-06-14 11:21:33'),
(3, 2, 11, 1, '2017-06-15', '2017-06-15 18:47:20', '2017-06-15 18:47:20'),
(4, 2, 15, 4, '2017-06-15', '2017-06-15 19:53:05', '2017-06-15 19:53:05'),
(5, 4, 15, 5, '2017-06-15', '2017-06-15 19:53:17', '2017-06-15 19:53:17'),
(6, 2, 17, 3, '2017-06-15', '2017-06-15 19:59:10', '2017-06-15 19:59:10'),
(7, 4, 17, 5, '2017-06-15', '2017-06-15 19:59:17', '2017-06-15 19:59:17');

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
-- Volcado de datos para la tabla `votospeliculas`
--

INSERT INTO `votospeliculas` (`id`, `idpelicula`, `idusuario`, `voto`, `fechavoto`, `created_at`, `updated_at`) VALUES
(6, 24, 13, 6, '0000-00-00', NULL, NULL),
(7, 8, 13, 8, '0000-00-00', NULL, NULL),
(8, 16, 13, 8, '0000-00-00', NULL, NULL),
(9, 1, 13, 10, '0000-00-00', NULL, NULL),
(10, 13, 13, 8, '0000-00-00', NULL, NULL),
(11, 7, 13, 2, '0000-00-00', NULL, NULL),
(12, 24, 12, 8, '0000-00-00', NULL, NULL),
(13, 24, 11, 6, '0000-00-00', NULL, NULL),
(14, 26, 11, 6, '0000-00-00', NULL, NULL),
(15, 27, 11, 8, '0000-00-00', NULL, NULL),
(16, 33, 15, 4, '0000-00-00', NULL, NULL),
(17, 24, 15, 6, '0000-00-00', NULL, NULL),
(18, 26, 15, 8, '0000-00-00', NULL, NULL),
(19, 13, 15, 6, '0000-00-00', NULL, NULL),
(20, 16, 15, 6, '0000-00-00', NULL, NULL),
(21, 28, 15, 6, '0000-00-00', NULL, NULL),
(22, 19, 15, 8, '0000-00-00', NULL, NULL),
(23, 33, 12, 6, '0000-00-00', NULL, NULL),
(24, 12, 12, 6, '0000-00-00', NULL, NULL),
(25, 29, 12, 6, '0000-00-00', NULL, NULL),
(26, 26, 12, 6, '0000-00-00', NULL, NULL),
(27, 28, 12, 8, '0000-00-00', NULL, NULL),
(28, 19, 12, 10, '0000-00-00', NULL, NULL),
(29, 3, 12, 6, '0000-00-00', NULL, NULL),
(30, 23, 12, 4, '0000-00-00', NULL, NULL),
(31, 33, 17, 6, '0000-00-00', NULL, NULL),
(32, 26, 17, 6, '0000-00-00', NULL, NULL),
(33, 8, 17, 4, '0000-00-00', NULL, NULL),
(34, 7, 17, 6, '0000-00-00', NULL, NULL),
(35, 2, 17, 4, '0000-00-00', NULL, NULL),
(36, 28, 17, 6, '0000-00-00', NULL, NULL),
(37, 24, 17, 8, '0000-00-00', NULL, NULL),
(38, 31, 17, 6, '0000-00-00', NULL, NULL),
(39, 16, 17, 8, '0000-00-00', NULL, NULL),
(40, 15, 17, 6, '0000-00-00', NULL, NULL),
(41, 4, 17, 6, '0000-00-00', NULL, NULL),
(42, 32, 17, 6, '0000-00-00', NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `adminconcursos`
--
ALTER TABLE `adminconcursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `admingeneros`
--
ALTER TABLE `admingeneros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `adminpeliculas`
--
ALTER TABLE `adminpeliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `criticapeliculas`
--
ALTER TABLE `criticapeliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `mensajechats`
--
ALTER TABLE `mensajechats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `miembrochats`
--
ALTER TABLE `miembrochats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `participanconcursos`
--
ALTER TABLE `participanconcursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `votosconcursos`
--
ALTER TABLE `votosconcursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `votospeliculas`
--
ALTER TABLE `votospeliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
  ADD CONSTRAINT `criticapeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `criticapeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `participanconcursos_idconcurso_foreign` FOREIGN KEY (`idconcurso`) REFERENCES `adminconcursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participanconcursos_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `votosconcursos`
--
ALTER TABLE `votosconcursos`
  ADD CONSTRAINT `votosconcursos_idcortoconcurso_foreign` FOREIGN KEY (`idcortoconcurso`) REFERENCES `participanconcursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votosconcursos_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `votospeliculas`
--
ALTER TABLE `votospeliculas`
  ADD CONSTRAINT `votospeliculas_idpelicula_foreign` FOREIGN KEY (`idpelicula`) REFERENCES `adminpeliculas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votospeliculas_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
