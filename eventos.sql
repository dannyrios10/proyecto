-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2020 a las 00:59:06
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `usuario_admin` char(50) NOT NULL,
  `nombre_admin` varchar(100) NOT NULL,
  `contrasenia_admin` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`usuario_admin`, `nombre_admin`, `contrasenia_admin`) VALUES
('organizador1', 'Escalona Espinoza Omam Sebastian', 'orgsebas'),
('organizador2', 'Avendaño Prieto Adalberto', 'adalorg'),
('organizador3', 'Mondragon Jayme Erick Isaac', 'monjorg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencia`
--

CREATE TABLE `conferencia` (
  `folio` int(10) NOT NULL,
  `nombre_conferencia` varchar(70) NOT NULL,
  `sede` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `inicio` time NOT NULL,
  `termino` time NOT NULL,
  `nombre_conferencista` varchar(50) NOT NULL,
  `apellido_Mat` varchar(50) NOT NULL,
  `Apellido_Pat` varchar(50) NOT NULL,
  `numero_asientos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `fecha` text DEFAULT NULL,
  `lugar` text DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `ocupados` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre`, `fecha`, `lugar`, `capacidad`, `ocupados`) VALUES
(1, 'Conferencia Infromática', '06/08/2019', 'Pesados', 100, 0),
(2, 'Semana de la Administración Industrial', '02/01/2021', 'Sociales', 100, 0),
(3, 'Partido UPIICSA vs ESIME', '16/01/2020', 'Canchas', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_usuario` char(50) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` char(50) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `contrasenia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `contrasenia`) VALUES
('ramiromiro', 'Ramiro Serrato Andrade', 'ramiromiro98@gmail.com', 'ramiro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`usuario_admin`),
  ADD UNIQUE KEY `nombre_admin` (`nombre_admin`);

--
-- Indices de la tabla `conferencia`
--
ALTER TABLE `conferencia`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_usuario`,`id_evento`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
