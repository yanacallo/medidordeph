-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 03:07:24
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci_google_maps_api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id_loc` bigint(20) NOT NULL,
  `provincia_loc` varchar(100) NOT NULL,
  `canton_loc` varchar(100) NOT NULL,
  `parroquia_loc` varchar(100) NOT NULL,
  `barrio_loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id_loc`, `provincia_loc`, `canton_loc`, `parroquia_loc`, `barrio_loc`) VALUES
(1, 'Cotopaxi', 'Latacunga', 'Tanicuchi', 'Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `propietario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `producto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `title`, `description`, `propietario`, `producto`, `imagen`) VALUES
(10, '-0.77305334426997', '-78.65279773813381', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'Juan Perez', 'Frejol', '4419d-1.jpg'),
(11, '-0.7821505591832469', ' -78.65914920854547', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'ACHOTE	YANCHAGUANO JHADIRA MISHELL', 'papas', 'b0b6f-2.jpg'),
(12, '-0.7811206867823793', '-78.64936451088428', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'AGUILAR	INGA	OMAR SAMAEL', 'habas', 'd600e-3.jpg'),
(13, '-0.7672173848040682', ' -78.65022281769667', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'ANARUMBA	ULLOA	JOHNNY FRANCISCO', 'cevada', 'e9a5a-4.jpg'),
(14, '-0.7757996753646366', ' -78.66258243579502', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'BANDA	LLANGANATE	DAVID ALEXANDER', 'trigo', '823cf-5.jpg'),
(15, '-0.7804341050415723', '-78.66498569486969', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'BASTIDAS	RACINES	KEVIN ALEJANDRO', 'lechuga', ''),
(16, '-0.7847252390790219', '-78.66532901759464', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'BERMEO	ALVARADO	RENATO JOEL', 'quinua', ''),
(17, '-0.7886730785062509', '-78.66361240396986', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CAILLAGUA	YANEZ	LUIS RAMIRO', 'Maiza amarillo', ''),
(18, '-0.7939940735452439', ' -78.66138080625768', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CAISATOA	SANGOPANTA	PAOLA ALEXANDRA', 'Maiz amarillo', ''),
(19, '-0.7965687461083772', '-78.65811924037061', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CANDO	CHASILOA	ERIKA YESSENIA', 'frejol', ''),
(20, '-0.8000016403560531', '-78.65605930402089', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CAPUZ	MALLQUI	GISSELA LIZBETH', 'habas', ''),
(21, '-0.8006882188613327', '-78.6529693994963', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CHICAIZA	VELA	WILSON LEONARDO	', 'habas', ''),
(22, '-0.8054942651733218', '-78.65090946314658', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CHINCHIN	PONCE	JHOEL ALEXANDER	', 'Maiz amarillo', ''),
(23, '-0.8082405748090022', '-78.64163974957282', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'CUJI	CHILIQUINGA	BRYAN SAUL', 'Maiz amarillo', ''),
(24, '-0.8024046646212788', '-78.6380348609608', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'DIAZ JAGUACO	OSCAR ANTONIO', 'Maiz amarillo', ''),
(25, '-0.8018897309688446', '-78.63460163371126', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'ESCOBAR	LAVERDE	MARIA JOSE', 'papas', ''),
(26, '-0.8000016403560531', '-78.64575962227227', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'GANCINO	MEJIA	FRANKLIN SAUL', 'papas', ''),
(27, '-0.7986284830009509', '-78.64249805638521', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'GAVILANEZ	GUANOLUISA	DIEGO DAVID', 'papas', ''),
(28, '-0.7988001276954428', '-78.63563160188612', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'GREFA	VEGAY	CARLOS EDUARDO', 'papas', ''),
(29, '-0.7836953673105758', '-78.63648990869851', 'Cotopaxi(Tanicuchi)', 'Esto es una gran descripción para esta coordenada.', 'GUANA	CASA	MARLON VINICIO', 'papas', ''),
(30, '-0.9208926083428204', '-78.60212758348345', 'Cotopaxi(Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'Diego Perez', 'Maiz Amarillo', ''),
(31, '-0.9126539171751934', '-78.60006764713371', 'Cotopaxi(Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'Maria Chan', 'Maiz Amarillo', ''),
(32, '-0.926385058552764', '-78.60968068343243', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'Carlos Moreano', 'papas', ''),
(33, '-0.9270716142314316', '-78.60212758348345', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'GUANOCHANGA	QUINAUCHO	LUIS FERNANDO', 'frejol', ''),
(34, '-0.9243253907190144', '-78.59732106533409', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'HERRERA	ROMERO	MARY ISABEL', 'frejol', ''),
(35, '-0.9215791650829281', '-78.59114125628491', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'ICHINA	TUAPANTA	BRYAN GUSTAVO', 'frejol', ''),
(36, '-0.926385058552764', '-78.57534841093702', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'IZA	QUISPE	GERMANICO RAFAEL', 'lechuga', ''),
(37, '-0.9318775002490752', ' -78.5643620837385', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'LAGOS	MALDONADO	WASHINGTON ALEXIS', 'col', ''),
(38, '-0.9291312804682756', '-78.5547490474398', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'LANDETA	TAPIA	ANTONY JOEL', 'col', ''),
(39, '-0.9270716142314316', '-78.5396428475418', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'MEDINA	IZA	LENIN ALEXANDER', 'col', ''),
(40, '-0.926385058552764', '-78.52385000219391', 'Cotopaxi (Juan montalvo)', 'Esto es una gran descripción para esta coordenada.', 'MOLINA	CORDONES	BRYAN ALEXANDER	', 'col', ''),
(41, '-0.9188329373294702', ' -78.51629690224493', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'MOLINA	PANCHI	EDISON DAVID', 'col', ''),
(42, '-0.9147135917429915', '-78.50050405689706', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'MORETA	TOPON	STALYN ANDRES', 'col', ''),
(43, '-0.9140270336849381', ' -78.48677114789889', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'PAREDES	HERNANDEZ	ERIKA MARISOL', 'col', ''),
(44, '-0.9085345645037746', '-78.47372488435063', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'PENAHERRERA	ROMERO	LESLIE ISABEL', 'habas', ''),
(45, '-0.9085345645037746', '-78.46067862080238', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'PILATASIG	TRAVEZ	BRYAN ALEXIS', 'habas', ''),
(46, '-0.90990768258381', '-78.4462590663543', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'PILICITA	PILICITA	PAUL IGNACIO', 'cevada', ''),
(47, '-0.9105942414278929', '-78.43458609370587', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'PUNINA	LUTUALA	CARLOS DANIEL', 'cevada', ''),
(48, '-0.9126539171751934', '-78.42153983015763', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'QUISHPE	SANDOVAL	DAVID ALEJANDRO', 'cevada', ''),
(49, '-0.8934302313544467', '-78.44076590275505', 'Cotopaxi (Juan Montalvo)', 'Esto es una gran descripción para esta coordenada.', 'SANGOQUIZA	PILATASIG	NORMA MARIBEL', 'cevada', ''),
(50, '-0.9919136677395897', '-78.62829994118613', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'SIERRA	BAJANA	MARLON DAVID', 'cevada', ''),
(51, '-0.9923856657430626', '-78.6262400048364', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'SIMBANA	YANACALLO	JONATHAN ESTEBAN', 'cevada', ''),
(52, '-0.9929863903773402', '-78.62585376677083', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'SORIA	SUNTASIG	JEFERSON FABRICIO', 'lechuga', ''),
(53, '-0.9935442060114174', '-78.62525295200216', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'TIPAN	VALLEJO	ALEXANDER FERNANDO', 'lechuga', ''),
(54, '-0.9939303860106217', '-78.62482379859597', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'TUTILLO	QUIMBIULCO	LUIS RONALDO', 'lechuga', ''),
(55, '-0.9944882014852894', '-78.6244375605304', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'VIERA	CORRALES	SERGIO SEBASTIAN	', 'lechuga', ''),
(56, '-0.9952605612176384', '-78.62396549178358', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'VILCA	IZA	ROSA FERNANDA', 'lechuga', ''),
(57, '-0.9960758296277942', '-78.62353633837739', 'Cotopaxi (Salache) ', 'Esto es una gran descripción para esta coordenada.', 'ZAMBRANO	VERDUGA	DANIELA MERCEDES', 'papas', ''),
(58, '-0.9968910978362518', '-78.62327884633368', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'GUAMAN	GUALOTO	JUAN STEVE', 'papas', ''),
(59, '-0.9978780011869144', '-78.62310718497119', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'MARTINEZ	MARTINEZ	EDDY ERNESTO', 'papas', ''),
(60, '-0.992128212294971', '-78.63010238549212', 'Cotopaxi (Salache)', 'Esto es una gran descripción para esta coordenada.', 'NARANJO	VERDESOTO	EDGAR PATRICIO', 'papas', ''),
(61, '-0.9981354541862425', '-78.62392257644296', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'ORTIZ	MOLINA	AMILCAR GIORDANO', 'Maiz amarillo', ''),
(62, '-0.9989507218844247', '-78.62310718497119', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'PEÑA	AGUILAR	BRYAN GERMAN', 'Maiz amarillo', ''),
(63, '-0.9917849409996793', ' -78.63190482979813', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'PILATAXI	QUINALUISA	ANGELO ALEXANDER', 'Maiz amarillo', ''),
(64, '-0.9913129429105222', '-78.63332103603857', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'PULLOTASIG	TASINCHANA	ERICK JOEL', 'Maiz amarillo', ''),
(65, '-0.991656214254769', ' -78.6342651735322', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'QUINGA	NASIMBA	ROBERT STEVEN', 'Maiz amarillo', ''),
(66, '-0.9913987607499235', '-78.63353561274167', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'REINOSO	GUTIERREZ	JONATHAN PAUL', 'Maiz amarillo', ''),
(67, '-0.9907551269002491', ' -78.63306354399485', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'ROMERO	GUANOLUISA	NIXON EDUARDO', 'Maiz amarillo', ''),
(68, '-0.991141307225066', ' -78.63224815252309', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'SILVA	PUNINA	KEVIN ANDRES', 'Maiz amarillo', ''),
(69, '-0.9915703964220469', '-78.63027404685461', 'Cotopaxi(Salache)', 'Esto es una gran descripción para esta coordenada.', 'VILLA QUISHPE MANUEL WILLIAM', 'Maiz amarillo', ''),
(70, '-0.9173967', '-78.6329799', 'Utc la matriz', 'Carrera de Ingenieria en Sistemas', 'Dr. Fabricio Tinajero', 'Rector de la Universidad', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id_loc`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id_loc` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
