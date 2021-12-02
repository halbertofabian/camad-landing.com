-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-12-2021 a las 19:38:21
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

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
-- Estructura de tabla para la tabla `tbl_encuesta_est`
--

DROP TABLE IF EXISTS `tbl_encuesta_est`;
CREATE TABLE IF NOT EXISTS `tbl_encuesta_est` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_estado_tramite` varchar(250) NOT NULL,
  `est_curp` varchar(50) NOT NULL,
  `est_correo` varchar(100) NOT NULL,
  `est_nombre` varchar(250) NOT NULL,
  `est_app` varchar(100) NOT NULL,
  `est_apm` varchar(100) NOT NULL,
  `est_sexo` varchar(100) NOT NULL,
  `est_fecha_nac` date NOT NULL,
  `est_lugar_nac` varchar(250) NOT NULL,
  `est_nom_comp` text NOT NULL,
  `est_estado` text NOT NULL,
  `est_municipio` text NOT NULL,
  `est_colonia` text NOT NULL,
  `est_calle` text NOT NULL,
  `est_num_ext` varchar(20) NOT NULL,
  `est_num_int` varchar(20) NOT NULL,
  `est_codigo_postal` int(11) NOT NULL,
  `est_lada_tel_fijo` varchar(10) NOT NULL,
  `est_tel_fijo` varchar(20) NOT NULL,
  `est_lada_tel_movil` varchar(10) NOT NULL,
  `est_tel_movil` varchar(20) NOT NULL,
  `est_inst_nom` varchar(250) NOT NULL,
  `est_inst_tipo` varchar(20) NOT NULL,
  `est_inst_pais` varchar(20) NOT NULL,
  `est_inst_estado` text NOT NULL,
  `est_inst_municipio` text NOT NULL,
  `est_inst_colonia` text NOT NULL,
  `est_inst_calle` text NOT NULL,
  `est_inst_num_ext` varchar(10) NOT NULL,
  `est_inst_cod_pos` int(11) NOT NULL,
  `est_inst_tel` varchar(20) NOT NULL,
  `est_inst_correo` varchar(100) NOT NULL,
  `est_exp_nom_emp1` text NOT NULL,
  `est_exp_cargo1` text NOT NULL,
  `est_exp_tiempo1` text NOT NULL,
  `est_exp_tel1` varchar(20) NOT NULL,
  `est_exp_comprobante1` text NOT NULL,
  `est_exp_nom_emp2` text NOT NULL,
  `est_exp_cargo2` text NOT NULL,
  `est_exp_tiempo2` text NOT NULL,
  `est_exp_tel2` varchar(20) NOT NULL,
  `est_exp_comprobante2` text NOT NULL,
  `est_exp_nom_emp3` text NOT NULL,
  `est_exp_cargo3` text NOT NULL,
  `est_exp_tiempo3` text NOT NULL,
  `est_exp_tel3` varchar(29) NOT NULL,
  `est_exp_comprobante3` text NOT NULL,
  `est_ext_curso1` text NOT NULL,
  `est_ext_inst1` text NOT NULL,
  `est_ext_fecha1` varchar(30) NOT NULL,
  `est_ext_anot1` text NOT NULL,
  `est_ext_curso2` text NOT NULL,
  `est_ext_inst2` text NOT NULL,
  `est_ext_fecha2` varchar(30) NOT NULL,
  `est_ext_anot2` text NOT NULL,
  `est_doc_acta` varchar(10) NOT NULL,
  `est_observaciones_acta` text NOT NULL,
  `est_doc_ine` varchar(10) NOT NULL,
  `est_observaciones_ine` text NOT NULL,
  `est_doc_curp` varchar(10) NOT NULL,
  `est_observaciones_curp` text NOT NULL,
  `est_doc_ant_acd` varchar(10) NOT NULL,
  `est_observaciones_ant_acd` text NOT NULL,
  `est_doc_crt_bach` varchar(10) NOT NULL,
  `est_observaciones_crt_bach` text NOT NULL,
  `est_doc_cntc_bach` varchar(10) NOT NULL,
  `est_observaciones_cntc_bach` text NOT NULL,
  `est_doc_derechos` varchar(10) NOT NULL,
  `est_observaciones_derechos` text NOT NULL,
  `est_status` varchar(250) NOT NULL DEFAULT 'PENDIENTE',
  PRIMARY KEY (`est_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
