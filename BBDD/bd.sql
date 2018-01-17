-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2017 at 04:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gecko`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `IMG_id` int(11) NOT NULL,
  `IMG_destacada` tinyint(1) DEFAULT '0',
  `IMG_descripcion` varchar(120) DEFAULT NULL,
  `IMG_path` varchar(500) NOT NULL,
  `IMG_id_INM` int(11) DEFAULT NULL,
  `IMG_id_ORG` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`IMG_id`, `IMG_destacada`, `IMG_descripcion`, `IMG_path`, `IMG_id_INM`, `IMG_id_ORG`) VALUES
(80, 0, NULL, 'imagen/2-0dingo.png', 2, NULL),
(81, 0, NULL, 'imagen/3-02-1.jpg', 3, NULL),
(82, 0, NULL, 'imagen/4-01-1.jpg', 4, NULL),
(83, 0, NULL, 'imagen/4-11-2.jpg', 4, NULL),
(84, 0, NULL, 'imagen/4-21-3.jpg', 4, NULL),
(85, 0, NULL, 'imagen/4-31-4.jpg', 4, NULL),
(86, 0, NULL, 'imagen/5-01-1.jpg', 5, NULL),
(87, 0, NULL, 'imagen/5-11-2.jpg', 5, NULL),
(88, 0, NULL, 'imagen/5-21-3.jpg', 5, NULL),
(89, 0, NULL, 'imagen/5-31-4.jpg', 5, NULL),
(90, 1, NULL, 'imagen/5-01-1.jpg', 5, NULL),
(91, 0, NULL, 'imagen/7-0dingo.png', NULL, 7),
(92, 0, NULL, '../web/imagen/6-0lvl1Icon.png', 6, NULL),
(93, 0, NULL, '../web/imagen/6-1lvl2Icon.png', 6, NULL),
(94, 0, NULL, '../web/imagen/6-2lvl3Icon.png', 6, NULL),
(95, 0, NULL, '../web/imagen/6-3lvl4Icon.png', 6, NULL),
(96, 0, NULL, '../web/imagen/7-0lvl1Icon.png', 7, NULL),
(97, 0, NULL, '../web/imagen/7-1lvl2Icon.png', 7, NULL),
(98, 0, NULL, '../web/imagen/7-2lvl3Icon.png', 7, NULL),
(99, 0, NULL, '../web/imagen/7-3lvl4Icon.png', 7, NULL),
(100, 0, NULL, '../web/imagen/8-0lvl1Icon.png', 8, NULL),
(101, 0, NULL, '../web/imagen/8-1lvl2Icon.png', 8, NULL),
(102, 0, NULL, '../web/imagen/8-2lvl3Icon.png', 8, NULL),
(103, 0, NULL, '../web/imagen/8-3lvl4Icon.png', 8, NULL),
(104, 0, NULL, '../web/imagen/9-0lvl1Icon.png', 9, NULL),
(105, 0, NULL, '../web/imagen/9-1lvl2Icon.png', 9, NULL),
(106, 0, NULL, '../web/imagen/9-2lvl3Icon.png', 9, NULL),
(107, 0, NULL, '../web/imagen/9-3lvl4Icon.png', 9, NULL),
(108, 0, NULL, '../web/imagen/10-0lvl1Icon.png', 10, NULL),
(109, 0, NULL, '../web/imagen/10-1lvl2Icon.png', 10, NULL),
(110, 0, NULL, '../web/imagen/10-2lvl3Icon.png', 10, NULL),
(111, 0, NULL, '../web/imagen/10-3lvl4Icon.png', 10, NULL),
(112, 0, NULL, '../web/imagen/11-0lvl1Icon.png', 11, NULL),
(113, 0, NULL, '../web/imagen/11-1lvl2Icon.png', 11, NULL),
(114, 0, NULL, '../web/imagen/11-2lvl3Icon.png', 11, NULL),
(115, 0, NULL, '../web/imagen/11-3lvl4Icon.png', 11, NULL),
(116, 0, NULL, 'imagen/12-0icon v2alphaless.png', 12, NULL),
(117, 1, NULL, 'imagen/12-0icondraw.jpg', 12, NULL),
(118, 0, NULL, '../web/imagen/13-0IMG_2017-02-15 12:48:51.jpg', 13, NULL),
(119, 0, NULL, '../web/imagen/13-1IMG_2017-02-15 12:49:03.jpg', 13, NULL),
(120, 0, NULL, '../web/imagen/13-2IMG_2017-02-15 12:49:13.jpg', 13, NULL),
(121, 0, NULL, '../web/imagen/13-3IMG_2017-02-15 12:49:19.jpg', 13, NULL),
(122, 1, '', 'imagen/13-0dingo.png', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inmueble`
--

CREATE TABLE `inmueble` (
  `IMN_id` int(11) NOT NULL,
  `IMN_Titulo` varchar(50) NOT NULL,
  `IMN_tipo` varchar(23) NOT NULL,
  `IMN_referencia` varchar(50) NOT NULL,
  `IMN_desc` varchar(500) NOT NULL,
  `IMN_precio` double NOT NULL,
  `IMN_habitaciones` int(1) DEFAULT NULL,
  `IMN_banos` int(1) DEFAULT NULL,
  `IMN_m2` int(11) NOT NULL,
  `IMN_anoconstruccion` int(11) NOT NULL,
  `IMN_certificadoener` varchar(5) DEFAULT NULL,
  `IMN_venta` varchar(20) NOT NULL,
  `IMN_dest` tinyint(1) NOT NULL,
  `IMN_organizacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inmueble`
--

INSERT INTO `inmueble` (`IMN_id`, `IMN_Titulo`, `IMN_tipo`, `IMN_referencia`, `IMN_desc`, `IMN_precio`, `IMN_habitaciones`, `IMN_banos`, `IMN_m2`, `IMN_anoconstruccion`, `IMN_certificadoener`, `IMN_venta`, `IMN_dest`, `IMN_organizacion`) VALUES
(3, 'La Laguna 2', 'Apartamento', 'prueba referencia 2', 'el segundo de todos', 12341, 4, 4, 100, 2010, 'A', 'Venta', 0, 1),
(4, 'La Cuesta MODIFICADO', 'Adosado', 'MODIFICADO prueba referencia 3 ', 'MODIFICADO la tercera', 200001, 3, 2, 150, 2010, 'Venta', '', 1, 1),
(5, 'La Cuesta', 'Adosado', 'prueba referencia 3 ', 'la tercera', 200000, 2, 2, 150, 2010, 'A', 'Venta', 1, 1),
(6, 'Dingo', 'Adosado', 'Dingo', 'el mejor juego del mundo a llegado para quedarse ', 100000, 2, 2, 44, 2000, 'Venta', '', 1, 1),
(7, 'Dingo', 'Adosado', 'Dingo', 'el mejor juego del mundo a llegado para quedarse ', 100000, 2, 2, 44, 2000, 'Venta', '', 1, 1),
(8, 'Dingo', 'Adosado', 'Dingo', 'el mejor juego del mundo a llegado para quedarse ', 100000, 2, 2, 44, 2000, 'Venta', '', 1, 1),
(9, 'Dingo', 'Adosado', 'Dingo', 'el mejor juego del mundo a llegado para quedarse ', 100000, 2, 2, 44, 2000, 'Venta', '', 1, 1),
(10, 'Dingo', 'Adosado', 'Dingo', 'el mejor juego del mundo a llegado para quedarse ', 100000, 2, 2, 44, 2000, 'Venta', '', 1, 1),
(11, 'Dingo', 'Adosado', 'Dingo', 'el mejor juego del mundo a llegado para quedarse ', 100000, 2, 2, 44, 2000, 'Venta', '', 1, 1),
(12, '12', 'Adosado', '12', '212212', 21212, 2, 2, 2, 2010, 'A', 'Venta', 1, 1),
(13, 'Dingo', 'Chalet', 'Dingo', 'dingooo', 21231431, 2, 2, 44, 2010, 'Venta', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizacion`
--

CREATE TABLE `organizacion` (
  `ORG_id` int(11) NOT NULL,
  `ORG_nombre` varchar(50) NOT NULL,
  `ORG_correo` varchar(50) NOT NULL,
  `ORG_telefono` varchar(15) NOT NULL,
  `ORG_direccion` varchar(180) NOT NULL,
  `ORG_tipo` varchar(20) NOT NULL DEFAULT 'Inmobiliaria',
  `ORG_acerca` varchar(500) NOT NULL,
  `ORG_acerca2` varchar(300) DEFAULT NULL,
  `ORG_acerca3` varchar(300) DEFAULT NULL,
  `ORG_tituloacerca` varchar(100) NOT NULL,
  `ORG_servicio1` varchar(700) NOT NULL,
  `ORG_servicio2` varchar(700) DEFAULT NULL,
  `ORG_servicio3` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizacion`
--

INSERT INTO `organizacion` (`ORG_id`, `ORG_nombre`, `ORG_correo`, `ORG_telefono`, `ORG_direccion`, `ORG_tipo`, `ORG_acerca`, `ORG_acerca2`, `ORG_acerca3`, `ORG_tituloacerca`, `ORG_servicio1`, `ORG_servicio2`, `ORG_servicio3`) VALUES
(2, 'Nombre', 'correoORG', '123455', 'C/ Constitución 155, ', 'Inmobiliaria', 'acerca de la empresa 1 3ro B', NULL, NULL, 'titulo acerca', 'Servicio 1 ', 'Servicio 2 ', 'Servicio 3'),
(3, 'MODNombre2222', 'MODcorreoORG', '123455', 'MODC/ Constituciï¿½n 155, ', 'Inmobiliaria', 'MODacerca de la empresa 1 3ro B', 'MOD', 'MOD', 'MODtitulo acerca', 'MODServicio 1 ', 'MODServicio 2 ', 'MODServicio 3'),
(4, 'pagina', 'pagina', '21324242', 'calle leleleel', 'Inmobiliaria', 'acercas 12 1231231 ', 'Ascerca 22222 ', 'acerca 3333 ', 'toosada', 'Servicio 1 ', 'Servicio 2222', 'Servicio3333'),
(5, 'pagina2222', 'pagina2222', '21324242', 'calle leleleel2222', 'Inmobiliaria', 'acercas 12 1231231 22', '2Ascerca 22222 ', '3acerca 3333 ', 'toosada2222', '4Servicio 1 ', '5Servicio 2222', '6Servicio3333'),
(6, 'pagina2222', 'pagina2222', '21324242', 'calle leleleel2222', 'Inmobiliaria', 'acercas 12 1231231 22', '2Ascerca 22222 ', '3acerca 3333 ', 'toosada2222', '4Servicio 1 ', '5Servicio 2222', '6Servicio3333'),
(7, 'pagina2222', 'pagina2222', '21324242', 'calle leleleel2222', 'Inmobiliaria', 'acercas 12 1231231 22', '2Ascerca 22222 ', '3acerca 3333 ', 'toosada2222', '4Servicio 1 ', '5Servicio 2222', '6Servicio3333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`IMG_id`);

--
-- Indexes for table `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`IMN_id`);

--
-- Indexes for table `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`ORG_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `IMG_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `inmueble`
--
ALTER TABLE `inmueble`
  MODIFY `IMN_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `ORG_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
