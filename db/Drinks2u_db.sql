-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2017 a las 05:51:58
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `drinks2u`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'alexisFdz_19_admin@outlook.com', 'Carnemolida19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `beb_id` int(11) NOT NULL,
  `beb_nombre` text NOT NULL,
  `beb_descripcion` text NOT NULL,
  `beb_imagen` text NOT NULL,
  `beb_precio` double(100,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`beb_id`, `beb_nombre`, `beb_descripcion`, `beb_imagen`, `beb_precio`) VALUES
(1, 'Crema', 'Crema de Maguey FRUTICREAM 1L', '1.jpg', 150),
(3, 'Mezcal', 'Mezcal Divino reposado 2L', '2.jpg', 100),
(4, 'Mezcal', 'Mezcal Oro de Oaxaca 1.5L', '3.jpg', 120),
(5, 'Tequila', 'Tequila Hijos de Villa 3L en presentacion especial de arma', '4.jpg', 450),
(6, 'Tequila', 'Tequila Hijos de Villa 3L blanco en presentacion especial de arma', '5.jpg', 350),
(7, 'Tequila', 'Tequila blanco Hijos de Villa 500ml ', '6.jpg', 150),
(8, 'Tequila', 'Licor de tequila con gusanito Hijos de villa 1L', '7.jpg', 200),
(9, 'Mezcal', 'Mezcal Oaxaca añejo, blanco, gusano Los Cuerudos 1L', '8.jpg', 200),
(10, 'Tequila', 'Tequila Mocambo 1L presentacion especial escopeta', '9.jpg', 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `cumpleanos` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `usuario`, `nombres`, `apellidos`, `cumpleanos`, `email`, `password`, `direccion`, `telefono`) VALUES
(1, 'Santi', 'Santiago Ayran', 'Huh Can', '15/08/1996', 'ayrancan619@gmail.com', 'e57ff245aa575ac6bc85f90547e66a3f7e2feced', 'Av. diagonal 85', '9841432059'),
(12, 'alexisFdz', 'Alexis', 'Fernandez', '12/11/1997', 'alexisFdz_19@outlook.com', 'cab9b35d34f5367f7538846c451224cf00db1e46', 'Fraccionamiento la Guadalupana', '9841652701');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_numeroventa` int(11) NOT NULL,
  `ped_nombre` text NOT NULL,
  `ped_imagen` text NOT NULL,
  `ped_precio` double(100,0) NOT NULL,
  `ped_cantidad` int(11) NOT NULL,
  `ped_subtotal` double(100,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`beb_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `beb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
