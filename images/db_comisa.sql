-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2021 a las 23:20:29
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
-- Base de datos: `db_comisa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_abonos_abs`
--

CREATE TABLE `tbl_abonos_abs` (
  `abs_id` int(11) NOT NULL,
  `abs_id_tarjeta_cobro` varchar(20) NOT NULL,
  `abs_fecha_cobro` datetime NOT NULL,
  `abs_id_cobrador` int(11) NOT NULL,
  `abs_monto` double(10,2) NOT NULL,
  `abs_adeudo` double(10,2) NOT NULL,
  `abs_mp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes_cts`
--

CREATE TABLE `tbl_clientes_cts` (
  `cts_id` int(11) NOT NULL,
  `cts_nombre` text NOT NULL,
  `cts_telefono_1` text NOT NULL,
  `cts_domicilio` text NOT NULL,
  `cts_colonia` text NOT NULL,
  `cts_calles` text NOT NULL,
  `cts_puesto` text NOT NULL,
  `cts_direccion_trabajo` text NOT NULL,
  `cts_colonia_trabajo` text NOT NULL,
  `cts_telefono_trabajo` text NOT NULL,
  `cts_antiguedad_trabajo` text NOT NULL,
  `cts_ingreso_mensual_trabajo` double NOT NULL,
  `cts_credencial_elector` text NOT NULL,
  `cts_documentos` text NOT NULL,
  `cts_tipo_casa` text NOT NULL,
  `cts_tiempo_casa` text NOT NULL,
  `cts_nombre_casa` text NOT NULL,
  `cts_reg_propiedad` text NOT NULL,
  `cts_fecha_registro` datetime NOT NULL,
  `cts_usuario_registro` text NOT NULL,
  `cts_usuario_modifico` text NOT NULL,
  `cts_fecha_modifico` datetime NOT NULL,
  `cts_tipo_cliente` text NOT NULL,
  `cts_notas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contrato_crt`
--

CREATE TABLE `tbl_contrato_crt` (
  `ctr_id` int(11) NOT NULL,
  `ctr_folio` int(11) NOT NULL,
  `ctr_fecha_contrato` datetime NOT NULL,
  `ctr_id_vendedor` int(11) NOT NULL,
  `ctr_id_cliente` int(11) NOT NULL,
  `ctr_numero_cuenta` text NOT NULL,
  `ctr_ruta` text NOT NULL,
  `ctr_forma_pago` text NOT NULL,
  `ctr_dia_pago` text NOT NULL,
  `ctr_proximo_pago` datetime NOT NULL,
  `ctr_plazo_credito` int(11) NOT NULL,
  `ctr_tipo_pago` text NOT NULL,
  `ctr_id_producto` int(11) NOT NULL,
  `ctr_total` int(11) NOT NULL,
  `ctr_enganche` double(10,2) NOT NULL,
  `ctr_pago_adicional` double(10,2) NOT NULL,
  `ctr_saldo` double(10,2) NOT NULL,
  `ctr_elaboro` text NOT NULL,
  `ctr_nota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos_pds`
--

CREATE TABLE `tbl_productos_pds` (
  `pds_id` int(11) NOT NULL,
  `pds_nombre` text NOT NULL,
  `pds_descripcion` text NOT NULL,
  `pds_piezas` int(11) NOT NULL,
  `pds_precio` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_referencias_cliente_crfc`
--

CREATE TABLE `tbl_referencias_cliente_crfc` (
  `crfc_id` int(11) NOT NULL,
  `crfc_id_cliente` int(11) NOT NULL,
  `crfc_id_referencia` int(11) NOT NULL,
  `crfc_tipo_referencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_referencias_rfc`
--

CREATE TABLE `tbl_referencias_rfc` (
  `rfc_id` int(11) NOT NULL,
  `rfc_trabajo` text NOT NULL,
  `rfc_puesto_trabajo` text NOT NULL,
  `rfc_direccion_trabajo` text NOT NULL,
  `rfc_colonia_trabajo` text NOT NULL,
  `rfc_telefono_trabajo` text NOT NULL,
  `rfc_antiguedad_trabajo` text NOT NULL,
  `rfc_parentesco` text NOT NULL,
  `rfc_direccion` text NOT NULL,
  `rfc_colonia` text NOT NULL,
  `rfc_telefono` text NOT NULL,
  `rfc_documentos` text NOT NULL,
  `rfc_credencial_elector` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tarjeta_cobro_tcbo`
--

CREATE TABLE `tbl_tarjeta_cobro_tcbo` (
  `tcbo_id` varchar(20) NOT NULL,
  `tcbo_orden` int(11) NOT NULL,
  `tcbo_ruta` text NOT NULL,
  `tcbo_id_contrato` int(11) NOT NULL,
  `tcbo_promotor` int(11) NOT NULL,
  `tcbo_saldo` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_abonos_abs`
--
ALTER TABLE `tbl_abonos_abs`
  ADD PRIMARY KEY (`abs_id`),
  ADD KEY `abs_id_tarjeta_cobro` (`abs_id_tarjeta_cobro`);

--
-- Indices de la tabla `tbl_clientes_cts`
--
ALTER TABLE `tbl_clientes_cts`
  ADD PRIMARY KEY (`cts_id`);

--
-- Indices de la tabla `tbl_contrato_crt`
--
ALTER TABLE `tbl_contrato_crt`
  ADD PRIMARY KEY (`ctr_id`),
  ADD UNIQUE KEY `ctr_folio` (`ctr_folio`),
  ADD UNIQUE KEY `ctr_numero_cuenta` (`ctr_numero_cuenta`(100)),
  ADD KEY `ctr_id_cliente` (`ctr_id_cliente`),
  ADD KEY `ctr_id_productos` (`ctr_id_producto`);

--
-- Indices de la tabla `tbl_productos_pds`
--
ALTER TABLE `tbl_productos_pds`
  ADD PRIMARY KEY (`pds_id`);

--
-- Indices de la tabla `tbl_referencias_cliente_crfc`
--
ALTER TABLE `tbl_referencias_cliente_crfc`
  ADD PRIMARY KEY (`crfc_id`),
  ADD KEY `crfc_id_cliente` (`crfc_id_cliente`),
  ADD KEY `crfc_id_referenica` (`crfc_id_referencia`);

--
-- Indices de la tabla `tbl_referencias_rfc`
--
ALTER TABLE `tbl_referencias_rfc`
  ADD PRIMARY KEY (`rfc_id`);

--
-- Indices de la tabla `tbl_tarjeta_cobro_tcbo`
--
ALTER TABLE `tbl_tarjeta_cobro_tcbo`
  ADD PRIMARY KEY (`tcbo_id`),
  ADD KEY `tcbo_id_contrato` (`tcbo_id_contrato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_abonos_abs`
--
ALTER TABLE `tbl_abonos_abs`
  MODIFY `abs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_clientes_cts`
--
ALTER TABLE `tbl_clientes_cts`
  MODIFY `cts_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_contrato_crt`
--
ALTER TABLE `tbl_contrato_crt`
  MODIFY `ctr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_productos_pds`
--
ALTER TABLE `tbl_productos_pds`
  MODIFY `pds_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_referencias_cliente_crfc`
--
ALTER TABLE `tbl_referencias_cliente_crfc`
  MODIFY `crfc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_referencias_rfc`
--
ALTER TABLE `tbl_referencias_rfc`
  MODIFY `rfc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_abonos_abs`
--
ALTER TABLE `tbl_abonos_abs`
  ADD CONSTRAINT `abs_id_tarjeta_cobro` FOREIGN KEY (`abs_id_tarjeta_cobro`) REFERENCES `tbl_tarjeta_cobro_tcbo` (`tcbo_id`);

--
-- Filtros para la tabla `tbl_contrato_crt`
--
ALTER TABLE `tbl_contrato_crt`
  ADD CONSTRAINT `ctr_id_cliente` FOREIGN KEY (`ctr_id_cliente`) REFERENCES `tbl_clientes_cts` (`cts_id`),
  ADD CONSTRAINT `ctr_id_productos` FOREIGN KEY (`ctr_id_producto`) REFERENCES `tbl_productos_pds` (`pds_id`);

--
-- Filtros para la tabla `tbl_referencias_cliente_crfc`
--
ALTER TABLE `tbl_referencias_cliente_crfc`
  ADD CONSTRAINT `crfc_id_cliente` FOREIGN KEY (`crfc_id_cliente`) REFERENCES `tbl_clientes_cts` (`cts_id`),
  ADD CONSTRAINT `crfc_id_referenica` FOREIGN KEY (`crfc_id_referencia`) REFERENCES `tbl_referencias_rfc` (`rfc_id`);

--
-- Filtros para la tabla `tbl_tarjeta_cobro_tcbo`
--
ALTER TABLE `tbl_tarjeta_cobro_tcbo`
  ADD CONSTRAINT `tcbo_id_contrato` FOREIGN KEY (`tcbo_id_contrato`) REFERENCES `tbl_contrato_crt` (`ctr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
