-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2015 a las 15:56:44
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitwifi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('03a5863e587412c26c997c5e8ed15b12', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1442267125, 'a:5:{s:9:"user_data";s:0:"";s:6:"nombre";s:5:"Angel";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:8:"logueado";b:1;}'),
('1eb712db79b18b0d327201d2d8a90a6f', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1442274092, 'a:5:{s:9:"user_data";s:0:"";s:6:"nombre";s:5:"Angel";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:8:"logueado";b:1;}'),
('2cbab8b723432d0643545163e973fc92', '172.17.4.183', 'Mozilla/5.0 (Linux; U; Android 4.0.4; es-mx; SonyEricssonWT19a Build/4.1.B.0.587) AppleWebKit/534.30 (KHTML, like Gecko)', 1442272348, 'a:5:{s:9:"user_data";s:0:"";s:6:"nombre";s:5:"Angel";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:8:"logueado";b:1;}'),
('e3b6b872dcee2ed7ff5e19c2d014eb5c', '172.17.7.174', 'Mozilla/5.0 (Linux; Android 4.4.2; LG-D320 Build/KOT49I) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.133 Mob', 1442268585, 'a:5:{s:9:"user_data";s:0:"";s:6:"nombre";s:5:"Angel";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:8:"logueado";b:1;}'),
('e8c5fe4687786e6e574a1ec2c9b3da30', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0', 1442272696, 'a:5:{s:9:"user_data";s:0:"";s:6:"nombre";s:5:"Angel";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:8:"logueado";b:1;}'),
('f951250c88d7314075e15b7e6767d9df', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 1442268522, 'a:5:{s:9:"user_data";s:0:"";s:6:"nombre";s:5:"Angel";s:2:"id";s:1:"1";s:7:"permiso";s:1:"1";s:8:"logueado";b:1;}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idClientes` int(11) NOT NULL,
  `cliente_nombre` varchar(45) NOT NULL,
  `cliente_direccion` varchar(45) DEFAULT NULL,
  `cliente_telefono` varchar(45) DEFAULT NULL,
  `cliente_correo` varchar(45) DEFAULT NULL,
  `fechaRegistro` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `cliente_nombre`, `cliente_direccion`, `cliente_telefono`, `cliente_correo`, `fechaRegistro`) VALUES
(1, 'Pruba', 'alskdj', 'alksdj', 'alskdj', '2015-09-15'),
(2, 'Aluxes', 'a 15 minutos', 'Prueba', 'ALSKJD@ALKSDJ.COM', '2015-09-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `idPermisos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `permiso` text,
  `estado` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idPermisos`, `nombre`, `permiso`, `estado`, `data`) VALUES
(1, 'Admin', 'a:37:{s:8:"aCliente";s:1:"1";s:8:"eCliente";s:1:"1";s:8:"dCliente";s:1:"1";s:8:"vCliente";s:1:"1";s:11:"aHabitacion";s:1:"1";s:11:"eHabitacion";s:1:"1";s:11:"dHabitacion";s:1:"1";s:11:"vHabitacion";s:1:"1";s:9:"aProducto";s:1:"1";s:9:"eProducto";s:1:"1";s:9:"dProducto";s:1:"1";s:9:"vProducto";s:1:"1";s:3:"aAP";s:1:"1";s:3:"eAP";s:1:"1";s:3:"dAP";s:1:"1";s:3:"vAP";s:1:"1";s:9:"aServicio";s:1:"1";s:9:"eServicio";s:1:"1";s:9:"dServicio";s:1:"1";s:9:"vServicio";s:1:"1";s:3:"aOs";s:1:"1";s:3:"eOs";s:1:"1";s:3:"dOs";s:1:"1";s:3:"vOs";s:1:"1";s:8:"aArchivo";s:1:"1";s:8:"eArchivo";s:1:"1";s:8:"dArchivo";s:1:"1";s:8:"vArchivo";s:1:"1";s:8:"cUsuario";s:1:"1";s:8:"cEmpresa";s:1:"1";s:8:"cPermiso";s:1:"1";s:7:"cBackup";s:1:"1";s:11:"rHabitacion";s:1:"1";s:9:"rProducto";s:1:"1";s:3:"rAP";s:1:"1";s:9:"rServicio";s:1:"1";s:3:"rOs";s:1:"1";}', 1, '2015-09-02'),
(2, 'SinVerHabitacion', 'a:33:{s:11:"aHabitacion";b:0;s:11:"eHabitacion";b:0;s:11:"dHabitacion";b:0;s:11:"vHabitacion";b:0;s:9:"aProducto";b:0;s:9:"eProducto";b:0;s:9:"dProducto";b:0;s:9:"vProducto";s:1:"1";s:3:"aAP";b:0;s:3:"eAP";b:0;s:3:"dAP";b:0;s:3:"vAP";s:1:"1";s:9:"aServicio";b:0;s:9:"eServicio";b:0;s:9:"dServicio";b:0;s:9:"vServicio";s:1:"1";s:3:"aOs";b:0;s:3:"eOs";b:0;s:3:"dOs";b:0;s:3:"vOs";s:1:"1";s:8:"aArchivo";b:0;s:8:"eArchivo";b:0;s:8:"dArchivo";b:0;s:8:"vArchivo";s:1:"1";s:8:"cUsuario";b:0;s:8:"cEmpresa";b:0;s:8:"cPermiso";b:0;s:7:"cBackup";b:0;s:11:"rHabitacion";b:0;s:9:"rProducto";b:0;s:3:"rAP";b:0;s:9:"rServicio";b:0;s:3:"rOs";b:0;}', 1, '2015-09-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fechaRegistro` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `permisos_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombre`, `apellido`, `user`, `pass`, `email`, `telefono`, `fechaRegistro`, `estado`, `permisos_id`) VALUES
(1, 'Angel', 'López', 'anghellp', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'alopez@sitwifi.com', '9982320028', '2015-09-02', 1, 1),
(2, 'SitWifi', NULL, 'sitroot', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'sitwifi@sitwifi.com', NULL, '2015-09-02', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idPermisos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usuarios_permisos_idx` (`permisos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idPermisos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_permisos` FOREIGN KEY (`permisos_id`) REFERENCES `permisos` (`idPermisos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
