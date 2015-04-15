-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2015 a las 00:25:48
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbdcps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analista de negocios`
--

CREATE TABLE analista_de_negocios (
  Cedula bigint(20) NOT NULL,
  Nombre varchar(50) NOT NULL,
  Correo varchar(50) NOT NULL,
  Contraseña varchar(50) NOT NULL,
  tipo int(20) NOT NULL,
  PRIMARY KEY (Cedula),
  KEY tipo_Analista (tipo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analista de negocios`
--

INSERT INTO analista_de_negocios (Cedula, Nombre, Correo, Contraseña, tipo) VALUES
(1017149861, 'jj', 'jua@ho', '12', 1),
(1017149862, 'Otto', 'Otto@hotmail.com', 'dd1', 1),
(1017149863, 'Julio', 'Ju@gmail.com', 'dd3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arquitecto de software`
--

CREATE TABLE arquitecto_de_software (
  Cedula bigint(20) NOT NULL,
  Nombre varchar(50) NOT NULL,
  Correo varchar(50) NOT NULL,
  Contraseña varchar(50) NOT NULL,
  tipo int(20) NOT NULL,
  PRIMARY KEY (Cedula),
  KEY tipo_Arquitecto (tipo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `arquitecto de software`
--

INSERT INTO arquitecto_de_software (Cedula, Nombre, Correo, Contraseña, tipo) VALUES
(1017149864, 'Analsita', 'Analista@gmail.com', 'yw', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE cliente (
  Cedula bigint(20) NOT NULL,
  Nombre varchar(50) NOT NULL,
  Correo varchar(50) NOT NULL,
  Contraseña varchar(50) NOT NULL,
  tipo int(20) NOT NULL,
  PRIMARY KEY (Cedula),
  KEY tipo_Cliente (tipo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO cliente (Cedula, Nombre, Correo, Contraseña, tipo) VALUES
(1017149865, 'cliente', 'Cliente@gmail.com', 'ywL', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialista en desarrollo de producto`
--

CREATE TABLE especialista_en_desarrollo_de_producto (
  Cedula bigint(20) NOT NULL,
  Nombre varchar(50) NOT NULL,
  Correo varchar(50) NOT NULL,
  Contraseña varchar(50) NOT NULL,
  tipo int(20) NOT NULL,
  PRIMARY KEY (Cedula),
  KEY tipo_Especialista (tipo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialista en desarrollo de producto`
--

INSERT INTO especialista_en_desarrollo_de_producto (Cedula, Nombre, Correo, Contraseña, tipo) VALUES
(1017149866, 'Especialista', 'e@h', 'especialista', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente de negocios`
--

CREATE TABLE gerente_de_negocios (
  Cedula bigint(20) NOT NULL,
  Nombre varchar(50) NOT NULL,
  Correo varchar(50) NOT NULL,
  Contraseña varchar(50) NOT NULL,
  tipo int(20) NOT NULL,
  PRIMARY KEY (Cedula),
  KEY tipo_Gerente (tipo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gerente de negocios`
--

INSERT INTO gerente_de_negocios (Cedula, Nombre, Correo, Contraseña, tipo) VALUES
(1017149867, 'Gerente', 'g@unal.edu.co', 'gerente', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE login (
  Cedula bigint(20) NOT NULL,
  contraseña varchar(50) NOT NULL,
  tipo int(20) NOT NULL,
  PRIMARY KEY (Cedula),
  KEY tipo_login (tipo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO login (Cedula, contraseña, tipo) VALUES
(1017149861, '12', 1),
(1017149862, 'dd1', 1),
(1017149863, 'dd3', 1),
(1017149864, 'yw', 2),
(1017149865, 'ywL', 3),
(1017149866, 'especialista', 4),
(1017149867, 'gerente', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo usuario`
--

CREATE TABLE tipo_usuario (
  idtipo int(11) NOT NULL AUTO_INCREMENT,
  tipo varchar(45) DEFAULT NULL,
  PRIMARY KEY (idtipo)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tipo usuario`
--

INSERT INTO tipo_usuario (idtipo, tipo) VALUES
(1, 'Analista de negocios'),
(2, 'Arquitecto de software'),
(3, 'Cliente'),
(4, 'Especialista en desarrollo de producto'),
(5, 'Gerente de negocios');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analista de negocios`
--
ALTER TABLE `analista_de_negocios`
  ADD CONSTRAINT `tipo_Analista` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`idtipo`);

--
-- Filtros para la tabla `arquitecto de software`
--
ALTER TABLE `arquitecto_de_software`
  ADD CONSTRAINT `tipo_Arquitecto` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`idtipo`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `tipo_Cliente` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`idtipo`);

--
-- Filtros para la tabla `especialista en desarrollo de producto`
--
ALTER TABLE `especialista_en_desarrollo_de_producto`
  ADD CONSTRAINT `tipo_Especialista` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`idtipo`);

--
-- Filtros para la tabla `gerente de negocios`
--
ALTER TABLE `gerente_de_negocios`
  ADD CONSTRAINT `tipo_Gerente` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`idtipo`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `tipo_login` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`idtipo`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
