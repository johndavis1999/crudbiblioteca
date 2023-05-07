-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2022 a las 02:37:57
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id`, `nombre`) VALUES
(1, 'MIGUEL DE CERVANTES'),
(3, 'HOMERO'),
(4, 'J.K. ROULING'),
(5, 'JANE AUSTEN'),
(6, 'GABRIEL GARCIA MARQUEZ'),
(10, 'OTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'OTRO'),
(5, 'NOVELA'),
(6, 'TERROR'),
(7, 'FANTASIA'),
(8, 'ROMANCE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id` int(11) NOT NULL,
  `idprestamo` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id`, `idprestamo`, `idlibro`) VALUES
(1, 1, 10),
(2, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id`, `nombre`) VALUES
(1, 'OTRO'),
(3, 'ACANTILADO'),
(4, 'ALIANZA'),
(5, 'PENGUIN BOOKS'),
(6, 'IMPEDIMENTA'),
(7, 'DEBOLSILLO'),
(8, 'SALAMANDRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idautor` int(11) DEFAULT NULL,
  `ideditorial` int(11) DEFAULT NULL,
  `imagen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `cantidad`, `stock`, `idcategoria`, `idautor`, `ideditorial`, `imagen`) VALUES
(9, 'CIEN AÑOS DE SOLEDAD', 3, 3, 8, 6, 4, 'img/libros/cien años de soledad.png'),
(10, 'CUENTOS INFANTILES', 20, 20, 9, NULL, 7, 'img/libros/cuentos infantiles.png'),
(11, 'DON QUIJOTE DE LA MANCHA', 12, 12, 5, 3, 7, 'img/libros/don quijote de la mancha.png'),
(12, 'NOVELAS EJEMPLARES', 4, 4, 5, 1, 7, 'img/libros/novelas ejemplares.png'),
(13, 'ANIMALES FANTASTICOS', 2, 2, 7, 4, 8, 'img/libros/animales fantasticos 1.png'),
(16, 'HARRY POTTER Y EL PRISIONERO DE AZKABAN', 2, 2, 7, 4, 8, 'img/libros/hp3.png'),
(17, 'HARRY POTTER Y EL CALIZ DE FUEGO', 2, 2, 7, 4, 8, 'img/libros/hp4.png'),
(18, 'HARRY POTTER Y LA ORDEN DEL FENIX', 3, 3, 7, 4, 8, 'img/libros/hp4.png'),
(19, 'HARRY POTTER Y EL MISTERIO DEL PRINCIPE', 2, 2, 7, 4, 8, 'img/libros/hp4.png'),
(20, 'HARRY POTTER Y LAS RELIQUIAS DE LA MUERTE', 3, 3, 7, 4, 8, 'img/libros/hp4.png'),
(119, 'Sangre de campeon', 1, 1, 1, 10, 1, 'img/libros/'),
(120, 'Divergente', 23, 12, 1, 10, 1, 'img/libros/'),
(121, 'Los Innovadores: Los genios que inventaron el futuro', 2, 2, 1, 10, 1, 'img/libros/los_innovadores.png'),
(122, 'Las Vidas de Marie', 10, 5, 7, 0, 0, 'img/libros/las vidas de marie.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `es_admin` tinyint(1) NOT NULL,
  `cedula` int(11) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `usuario`, `clave`, `es_admin`, `cedula`, `correo`) VALUES
(1, 'asdsa', 'luis', 'luis', 0, 43242, 'asds@dfsfs.com'),
(2, 'LUIS GOMEZ VELOZ', 'lgomez', 'lgomez', 1, 926744933, 'lgomez@gmail.com'),
(3, 'john', 'john', 'john', 0, 0, 'john'),
(4, 'JohnDavis', 'JohnDavis', 'JohnDavis', 0, 0, 'JohnDavis'),
(5, 'JohnDavis', 'JohnDavis', 'JohnDavis', 0, 0, 'JohnDavis'),
(6, 'qa', 'qa', 'qa', 0, 0, 'qa'),
(7, 'si', 'si', 'si', 0, 0, 'si'),
(8, 'john1999', 'john1999', 'john1999', 1, 923896591, 'mail@mail.com'),
(26, 'prueba final', 'prueba final', 'prueba final', 0, 0, 'prueba final'),
(27, 'asdasd', '', '', 0, 0, ''),
(28, 'prueba1', '', '', 0, 0, ''),
(29, 'prueba1', '', '', 0, 0, ''),
(30, 'prueba2', '', '', 0, 0, ''),
(31, ' include \"datos/qregistro.php\"', ' include \"datos/qregistro.php\"', ' include \"datos/qregistro.php\"', 0, 0, ' include \"datos/qregistro.php\"'),
(32, 'xd', 'xd', '', 0, 0, ''),
(33, 'prueba', 'prueba', 'prueba', 0, 123, 'prueba@prueba.com'),
(34, 'xd', 'si', 'si', 0, 1, 'si@si'),
(35, 'jd', 'jd', 'jd', 0, 1, '1'),
(36, 'jd', 'jd', 'jd', 0, 1, '1'),
(37, 'pruebas', '1', '12', 0, 12, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `devuelto` tinyint(1) NOT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id`, `fecha`, `devuelto`, `fecha_devolucion`, `idpersona`) VALUES
(1, '2022-12-14', 0, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idprestamo` (`idprestamo`),
  ADD KEY `idlibro` (`idlibro`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcategoria` (`idcategoria`),
  ADD KEY `idautor` (`idautor`),
  ADD KEY `ideditorial` (`ideditorial`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpersona` (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
