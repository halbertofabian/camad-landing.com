-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-01-2021 a las 00:31:16
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sead`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursal_scl`
--

CREATE TABLE `tbl_sucursal_scl` (
  `scl_id` varchar(100) NOT NULL,
  `scl_nombre` text NOT NULL,
  `scl_direccion` text NOT NULL,
  `scl_rfc` text NOT NULL,
  `scl_telefono` text NOT NULL,
  `scl_sub_fijo` text NOT NULL,
  `scl_acceso_usr` text NOT NULL,
  `scl_usuario_registro` text NOT NULL,
  `scl_fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_sucursal_scl`
--

INSERT INTO `tbl_sucursal_scl` (`scl_id`, `scl_nombre`, `scl_direccion`, `scl_rfc`, `scl_telefono`, `scl_sub_fijo`, `scl_acceso_usr`, `scl_usuario_registro`, `scl_fecha_registro`) VALUES
('2cff89ccbcb6602c5967850d5a5133b6', 'English Intitute', '', '', '', 'EI-', '[\"0080\",\"ST-0001\"]', 'Héctor Alberto Lopez Fabian', '2021-01-23 10:40:57'),
('74460210405f05c5826fb4a89ee89160', 'SUCURSAL MEXICO', 'Gastelum #893, Plaza Copa Cabana local 12 , zona centro, Ensenada B. C.	', 'SEL200724P58', '8331304192', 'SM-', '[\"0079\",\"0002\",\"ST-0001\"]', 'Héctor Alberto Lopez Fabian', '2021-01-05 12:20:27'),
('9f3b645d6b56fd6e1b79e9b92b903ea5', 'Plantel de prueba', '', '', '', 'pb', '[\"0078\",\"ST-0001\"]', 'Héctor Alberto Lopez Fabian', '2021-01-07 01:42:27'),
('d7a33a4fa6c3c60527abbee3afe843ef', 'SUCURSAL MADERO', 'Fray Andres de Olmos #105 , Zona Centro Tampico Tamps.	', 'SEL200724P58', '353453453', 'SMD-', '[\"0078\",\"0002\",\"ST-0001\"]', 'Héctor Alberto Lopez Fabian', '2021-01-05 02:13:41'),
('ST-5eda37ea1f6680605459bc0a773e5d3d', 'SUCURSAL TAMPICO', 'Capitán Pérez 204, zona centro,\r\nAltamira Tamps., México CP.\r\n89600.', 'SEL200724P58', '6462640926	', 'ST-', '', '', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_sucursal_scl`
--
ALTER TABLE `tbl_sucursal_scl`
  ADD PRIMARY KEY (`scl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
