-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2022 a las 18:26:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

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
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`) VALUES
(10, '-0.77305334426997', '-78.65279773813381', 'Cotopaxi(Tanicuchi)'),
(11, '-0.7821505591832469', ' -78.65914920854547', 'Cotopaxi(Tanicuchi)'),
(12, '-0.7811206867823793', '-78.64936451088428', 'Cotopaxi(Tanicuchi)'),
(13, '-0.7672173848040682', ' -78.65022281769667', 'Cotopaxi(Tanicuchi)'),
(14, '-0.7757996753646366', ' -78.66258243579502', 'Cotopaxi(Tanicuchi)'),
(15, '-0.7804341050415723', '-78.66498569486969', 'Cotopaxi(Tanicuchi)'),
(16, '-0.7847252390790219', '-78.66532901759464', 'Cotopaxi(Tanicuchi)'),
(17, '-0.7886730785062509', '-78.66361240396986', 'Cotopaxi(Tanicuchi)'),
(18, '-0.7939940735452439', ' -78.66138080625768', 'Cotopaxi(Tanicuchi)'),
(19, '-0.7965687461083772', '-78.65811924037061', 'Cotopaxi(Tanicuchi)'),
(20, '-0.8000016403560531', '-78.65605930402089', 'Cotopaxi(Tanicuchi)'),
(21, '-0.8006882188613327', '-78.6529693994963', 'Cotopaxi(Tanicuchi)'),
(22, '-0.8054942651733218', '-78.65090946314658', 'Cotopaxi(Tanicuchi)'),
(23, '-0.8082405748090022', '-78.64163974957282', 'Cotopaxi(Tanicuchi)'),
(24, '-0.8024046646212788', '-78.6380348609608', 'Cotopaxi(Tanicuchi)'),
(25, '-0.8018897309688446', '-78.63460163371126', 'Cotopaxi(Tanicuchi)'),
(26, '-0.8000016403560531', '-78.64575962227227', 'Cotopaxi(Tanicuchi)'),
(27, '-0.7986284830009509', '-78.64249805638521', 'Cotopaxi(Tanicuchi)'),
(28, '-0.7988001276954428', '-78.63563160188612', 'Cotopaxi(Tanicuchi)'),
(29, '-0.7836953673105758', '-78.63648990869851', 'Cotopaxi(Tanicuchi)'),
(30, '-0.9208926083428204', '-78.60212758348345', 'Cotopaxi(Juan Montalvo)'),
(31, '-0.9126539171751934', '-78.60006764713371', 'Cotopaxi(Juan Montalvo)'),
(32, '-0.926385058552764', '-78.60968068343243', 'Cotopaxi (Juan Montalvo)'),
(33, '-0.9270716142314316', '-78.60212758348345', 'Cotopaxi (Juan Montalvo)'),
(34, '-0.9243253907190144', '-78.59732106533409', 'Cotopaxi (Juan Montalvo)'),
(35, '-0.9215791650829281', '-78.59114125628491', 'Cotopaxi (Juan Montalvo)'),
(36, '-0.926385058552764', '-78.57534841093702', 'Cotopaxi (Juan Montalvo)'),
(37, '-0.9318775002490752', ' -78.5643620837385', 'Cotopaxi (Juan Montalvo)'),
(38, '-0.9291312804682756', '-78.5547490474398', 'Cotopaxi (Juan Montalvo)'),
(39, '-0.9270716142314316', '-78.5396428475418', 'Cotopaxi (Juan Montalvo)'),
(40, '-0.926385058552764', '-78.52385000219391', 'Cotopaxi (Juan montalvo)'),
(41, '-0.9188329373294702', ' -78.51629690224493', 'Cotopaxi (Juan Montalvo)'),
(42, '-0.9147135917429915', '-78.50050405689706', 'Cotopaxi (Juan Montalvo)'),
(43, '-0.9140270336849381', ' -78.48677114789889', 'Cotopaxi (Juan Montalvo)'),
(44, '-0.9085345645037746', '-78.47372488435063', 'Cotopaxi (Juan Montalvo)'),
(45, '-0.9085345645037746', '-78.46067862080238', 'Cotopaxi (Juan Montalvo)'),
(46, '-0.90990768258381', '-78.4462590663543', 'Cotopaxi (Juan Montalvo)'),
(47, '-0.9105942414278929', '-78.43458609370587', 'Cotopaxi (Juan Montalvo)'),
(48, '-0.9126539171751934', '-78.42153983015763', 'Cotopaxi (Juan Montalvo)'),
(49, '-0.8934302313544467', '-78.44076590275505', 'Cotopaxi (Juan Montalvo)'),
(50, '-0.9919136677395897', '-78.62829994118613', 'Cotopaxi (Salache)'),
(51, '-0.9923856657430626', '-78.6262400048364', 'Cotopaxi (Salache)'),
(52, '-0.9929863903773402', '-78.62585376677083', 'Cotopaxi (Salache)'),
(53, '-0.9935442060114174', '-78.62525295200216', 'Cotopaxi (Salache)'),
(54, '-0.9939303860106217', '-78.62482379859597', 'Cotopaxi (Salache)'),
(55, '-0.9944882014852894', '-78.6244375605304', 'Cotopaxi (Salache)'),
(56, '-0.9952605612176384', '-78.62396549178358', 'Cotopaxi (Salache)'),
(57, '-0.9960758296277942', '-78.62353633837739', 'Cotopaxi (Salache) '),
(58, '-0.9968910978362518', '-78.62327884633368', 'Cotopaxi (Salache)'),
(59, '-0.9978780011869144', '-78.62310718497119', 'Cotopaxi (Salache)'),
(60, '-0.992128212294971', '-78.63010238549212', 'Cotopaxi (Salache)'),
(61, '-0.9981354541862425', '-78.62392257644296', 'Cotopaxi(Salache)'),
(62, '-0.9989507218844247', '-78.62310718497119', 'Cotopaxi(Salache)'),
(63, '-0.9917849409996793', ' -78.63190482979813', 'Cotopaxi(Salache)'),
(64, '-0.9913129429105222', '-78.63332103603857', 'Cotopaxi(Salache)'),
(65, '-0.991656214254769', ' -78.6342651735322', 'Cotopaxi(Salache)'),
(66, '-0.9913987607499235', '-78.63353561274167', 'Cotopaxi(Salache)'),
(67, '-0.9907551269002491', ' -78.63306354399485', 'Cotopaxi(Salache)'),
(68, '-0.991141307225066', ' -78.63224815252309', 'Cotopaxi(Salache)'),
(69, '-0.9915703964220469', '-78.63027404685461', 'Cotopaxi(Salache)');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
