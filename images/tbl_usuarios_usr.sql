-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-01-2021 a las 00:29:34
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
-- Estructura de tabla para la tabla `tbl_usuarios_usr`
--

CREATE TABLE `tbl_usuarios_usr` (
  `usr_id` int(20) NOT NULL,
  `usr_matricula` varchar(20) NOT NULL,
  `usr_nombre` varchar(100) DEFAULT NULL,
  `usr_app` text DEFAULT NULL,
  `usr_apm` text DEFAULT NULL,
  `usr_telefono` varchar(25) DEFAULT NULL,
  `usr_direccion` text DEFAULT NULL,
  `usr_calle` text DEFAULT NULL,
  `usr_ne` text DEFAULT NULL,
  `usr_ni` text DEFAULT NULL,
  `usr_cp` text DEFAULT NULL,
  `usr_colonia` text DEFAULT NULL,
  `usr_estado` text DEFAULT NULL,
  `usr_municipio` text DEFAULT NULL,
  `usr_pais` varchar(100) DEFAULT 'México',
  `usr_correo` varchar(100) DEFAULT NULL,
  `usr_clave` text DEFAULT NULL,
  `usr_rol` varchar(50) DEFAULT 'Ejecutivo',
  `usr_estado_verificacion` char(1) DEFAULT '0',
  `usr_token` text DEFAULT NULL,
  `usr_recuperar_clave` char(1) DEFAULT '0',
  `usr_usuario_registro` text DEFAULT NULL,
  `usr_fecha_registro` datetime DEFAULT NULL,
  `usr_firma` text NOT NULL,
  `usr_caja` int(11) NOT NULL,
  `usr_id_sucursal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios_usr`
--

INSERT INTO `tbl_usuarios_usr` (`usr_id`, `usr_matricula`, `usr_nombre`, `usr_app`, `usr_apm`, `usr_telefono`, `usr_direccion`, `usr_calle`, `usr_ne`, `usr_ni`, `usr_cp`, `usr_colonia`, `usr_estado`, `usr_municipio`, `usr_pais`, `usr_correo`, `usr_clave`, `usr_rol`, `usr_estado_verificacion`, `usr_token`, `usr_recuperar_clave`, `usr_usuario_registro`, `usr_fecha_registro`, `usr_firma`, `usr_caja`, `usr_id_sucursal`) VALUES
(1, 'ST-0001', 'Héctor Alberto Lopez Fabian', NULL, NULL, '7341006945', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'México', 'lf_alberto@outlook.com', '$2y$10$aoxEa2vQk/Q1nCmqstx.hekj732WAifRPcpkrcqE5iqA4UcfzoJIa', 'Administrador', '1', '', '0', '', '0000-00-00 00:00:00', 'app/upload/firmas_digitales/e9ad68ea30526588c82473535d7af3c4/ST-0001.png', 29, 'ST-5eda37ea1f6680605459bc0a773e5d3d'),
(71, '0002', 'Juan Herandez Garcia', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'México', 'juan@gmail.com', '$2y$10$k0nVshY3UFOT1AkOr/MPYOEDjqpmJxNzpvPfJz6C145QPplSPFCcC', 'Asesor Educativo', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-04 10:06:16', 'app/upload/firmas_digitales/0002.png', 30, 'ST-5eda37ea1f6680605459bc0a773e5d3d'),
(72, 'ST-0072', 'Luis Antonio', 'Lopez', 'Fabian', '342425242', NULL, 'Jose Acosta', '3970', '', '42720', 'Villas de gualupe', 'Jalisco', 'Guadalajara', 'México', 'luis@gmail.com', '', 'Alumno', '0', NULL, '0', 'Juan Herandez Garcia', '2021-01-04 10:08:44', '', 0, 'ST-5eda37ea1f6680605459bc0a773e5d3d'),
(73, 'ST-0073', 'Susana', 'Salgado', 'Cueto', '7282525625', NULL, 'Hidalgo', '406', '', '7255', 'Jojutla Centro', 'Tamaulipas', 'Jojutla', 'México', 'susan@gmail.com', '$2y$10$ws2ukmupfTu877WCDILGMOhdBfOGnqoBZgpY7UL53/A3gRHWzNpB6', 'Alumno', '0', NULL, '0', 'Juan Herandez Garcia', '2021-01-04 10:19:07', '', 0, 'ST-5eda37ea1f6680605459bc0a773e5d3d'),
(75, 'SM-0074', 'Fernando', 'Salgado', 'Huerta', '', NULL, 'xx', 'xx', 'xx', 'xx', 'xx', 'Tamaulipas', 'xx', 'México', 'fernando@gmail.com', '$2y$10$unSj9tpFbh1R9wuEWSTyw.ClGyDXgvENGkCsp6I5.zoNpIxa5GqGq', 'Alumno', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-05 01:13:53', '', 0, '74460210405f05c5826fb4a89ee89160'),
(76, 'SMD-0076', 'Hugo Alberto', 'Sanhez', 'López', '', NULL, 'x', 'x', '', 'x', 'x', 'Tamaulipas', 'x', 'México', 'hugo@gmail.com', '$2y$10$X4qo90JDa4SQZvZx0pVBje1zm7GRI8u.acfY1i42UjsCSm4/LNp/C', 'Alumno', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-05 02:17:27', '', 0, 'd7a33a4fa6c3c60527abbee3afe843ef'),
(77, 'SMD-0077', 'Erika', 'Gonzales', 'Arteaga', '', NULL, 'v', 'v', '', 'v', 'v', 'Tamaulipas', 'v', 'México', 'erika@gmail.com', '$2y$10$tQKaqe2h8OZ8gb574b1VR.4nUqL78XdJvurmL38F5Zsaf9KNTvZ8S', 'Alumno', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-05 02:38:38', '', 0, 'd7a33a4fa6c3c60527abbee3afe843ef'),
(78, '0078', 'Enrique Gonzales', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'México', 'enr@gmail.com', '$2y$10$DaNOMUFhy77zWt0yy5kpcefyDFhooJcCvbVC15OY6ghSJ4Lm2JWu2', 'Responsable de sucursal', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-05 11:48:10', '', 0, 'ST-5eda37ea1f6680605459bc0a773e5d3d'),
(79, '0079', 'Responsable', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'México', 'respo@gmail.com', '$2y$10$2hte4iowQuHMoVr9yVPSTuDzlK/hyOoV2hHk3xQ1B4lMgfdxbj7D.', 'Responsable de sucursal', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-09 02:42:27', '', 0, '74460210405f05c5826fb4a89ee89160'),
(82, '0080', 'Auditor de prueba', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'México', 'auditor.exte@gmail.com', '$2y$10$alei9MyvfiaHdZNh0MNdDOzn.XCUtEZ80xsmwo06E0/zpGqIPMqKq', 'Auditor externo', '0', NULL, '0', 'Héctor Alberto Lopez Fabian', '2021-01-23 10:39:19', '', 31, 'd7a33a4fa6c3c60527abbee3afe843ef');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_usuarios_usr`
--
ALTER TABLE `tbl_usuarios_usr`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `usr_matricula` (`usr_matricula`),
  ADD KEY `usr_suc_fk` (`usr_id_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios_usr`
--
ALTER TABLE `tbl_usuarios_usr`
  MODIFY `usr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_usuarios_usr`
--
ALTER TABLE `tbl_usuarios_usr`
  ADD CONSTRAINT `usr_suc_fk` FOREIGN KEY (`usr_id_sucursal`) REFERENCES `tbl_sucursal_scl` (`scl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
