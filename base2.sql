-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2022 a las 16:39:27
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
-- Base de datos: `base2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo`, `cedula`, `nombre`, `apellido`, `telefono`, `sexo`, `correo`) VALUES
(1, 1001096259, 'valeria', 'martinez', 123456789, 'femenino', 'valeriamartinez.2509@gmail.com'),
(2, 1065847236, 'ernesto', 'henker', 12345, 'masculino', 'henkerernesto@gmail.com'),
(5, 1000952300, 'jorge ', 'martinez', 1234567, 'masculino', 'jorge.martinezc1950@gmail.com'),
(6, 1193597419, 'rafael', 'suarez', 9876, 'masculino', 'rasubu1411@gmail.com'),
(7, 41941372, 'carolina', 'Castañeda', 12345, 'femenino', 'carolina9678@hotmail.com'),
(8, 1001096259, 'valeria2', 'martinez2', 1234, 'femenino', 'valeriamartinez.2509@gmail.com2'),
(9, 123, 'valeria3', 'martinez3', 1234, 'femenino', 'valeriamartinez.2509@gmail.com'),
(10, 1001096259, 'carolina', '', 0, '2', ''),
(11, 41941372, 'rafael', '', 0, '2', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `codigo` int(20) NOT NULL,
  `sexo` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`codigo`, `sexo`) VALUES
(1, 'femenino'),
(2, 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `usuario` varchar(50) DEFAULT NULL,
  `clave` int(50) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`usuario`, `clave`, `correo`) VALUES
('valeria', 1234, 'valeriamartinez.2509@gmail.com'),
('carolina', 1234, 'carolina9678@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
