-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 03:02:38
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
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbfacturaciones`
--

CREATE TABLE `dbfacturaciones` (
  `idEmp` int(11) NOT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Telefono` text DEFAULT NULL,
  `Carrera` varchar(100) DEFAULT NULL,
  `Pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dbfacturaciones`
--

INSERT INTO `dbfacturaciones` (`idEmp`, `Nombres`, `Apellidos`, `Telefono`, `Carrera`, `Pais`) VALUES
(1, 'Silla gamer', 'Hogar', '549900', '4', '500000'),
(2, 'Daniel', '', '3016265415', '', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbinventario`
--

CREATE TABLE `dbinventario` (
  `codigo_producto` int(11) NOT NULL,
  `nombre_del_producto` text NOT NULL,
  `tipo_de_producto` set('-- Selecciona --','Juguetes','Comida','Ropa','Hogar','Belleza','Cocina','Salud','Electronica','Transporte','Otros..','') NOT NULL,
  `estado` set('-- Selecciona --','Disponible','No disponible','') NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dbinventario`
--

INSERT INTO `dbinventario` (`codigo_producto`, `nombre_del_producto`, `tipo_de_producto`, `estado`, `precio`, `stock_producto`, `descripcion`) VALUES
(1, 'Silla Gamer Silla De Oficina Reclinable Ergonomica', 'Hogar', 'Disponible', '549800', 5, 'de 2 en 1 Kids Pretend Toy Playset Cocina portátil Mochila Juguete Juguete educativo para el desarro'),
(2, 'Bicicicleta Roadmaster Hurricane 29 Shimano Revosh', 'Transporte', 'Disponible', '300000', 2, 'Marco RoadMaster Hurricane 29\" Acero Inoxidable, con pintura YS Code\r\nTenedor: Acero RoadMaster 28.6'),
(3, 'Xiaomi Pocophone Poco M3 Pro 5g Dual Sim 128 Gb Az', 'Electronica', 'No disponible', '800', 10, 'Procesador MediaTek MT6833 Dimensión 700 (7 nm)\r\nMemoria RAM 6Gb\r\nAlmacenamiento 128Gb\r\nPantalla de '),
(4, 'Arete Piercing Falso Sin Perforación Para Hombres', 'Belleza', 'Disponible', '10400', 5, 'Marca Alisouy\r\nMaterial: Acero inoxidable\r\nColor: Negro / Plateado\r\nTalla: 8mm / 10mm\r\nDiámetro: 8mm / 10mm\r\nGrosor: 6 mm\r\nPeso: 10 gr\r\nEL EMPAQUE CONTIENE:\r\n1 x Unidad Piercing magnético'),
(5, 'Silla Tolix Acero Comedor Sala Jardin Bar Restaura', 'Hogar', 'No disponible', '229800', 12, 'La Silla Tolix es un icono en la decoración industrial, su resistencia y versatilidad no se deben pasar por alto cuando se busca un estilo retro. Ya vienen completamente armadas, listas para abrir el paquete y usarlas, no necesita ningún esfuerzo para armar, ahorre tiempo y esfuerzo. Las sillas son apilables ideales para comedores, restaurantes, cafetería, etc.\r\n'),
(6, 'Smartwatch Reloj Inteligente Deportivo Linkon Android Ios\r\n', 'Electronica', 'Disponible', '129900', 3, '¡Monitorea tu salud, actividad física, ve tus mensajes y contesta o haz llamadas con tu Reloj inteligente LinkOn!\r\n\r\n- Puedes leer tus mensajes en el teléfono, llamar y recibir llamadas con tu reloj ¡sin importar si tienes tu celular a mano!\r\n- Su batería de larga duración te permite no volver a cargarlo en 7 días.\r\n- Puedes elegir el fondo de pantalla que tu quieras entre los prediseñados o incluso tus fotos!\r\n- Compatible con celulares con Android 4.4 o superior y con iOS 9.0 o superior.'),
(7, 'Mochila Portátil De 17 Piezas Para Niños, Juego De Doctor\r\n', 'Juguetes', 'Disponible', '145680', 10, 'FOMENTA EL JUEGO DE SIMULACIÓN: el juego de médico infantil ayudará a los niños a tener la oportunidad de experimentar al médico y a la enfermera, y aliviará la ansiedad de los niños sobre las visitas al médico Fomenta el juego de simulación y desarrolla la coordinación ojo-mano en los'),
(8, 'Mesa Set Herramientas Mochila 3 En 1 Juguete Maletin 23 Pcs\r\n', 'Juguetes', 'Disponible', '120000', 12, 'MOCHILA DE JUGUETES PARA NIÑOS\r\nbien diseñada tiene tres modos de entretener a tus niños.\r\n\r\nSe puede convertir en mochila\r\n\r\nMesa de juguete de pie.\r\n\r\nMesa de juguete de escritorio.\r\n\r\nLa elegante mochila se puede convertir en una mesa de juguete en pocos segundos.\r\n\r\nIngenioso método de almacenamiento, fácil de cambiar. La diversión no tiene límites.\r\n\r\nContiene 23 accesorios de simulación.\r\n\r\nEsta mochila ayuda a estimular la imaginación de los niños y les permiten experimentar la vida profesional de ingenieros y carpinteros.\r\n\r\nTambien cuenta con la facilidad de transportar y almacenar.\r\nEs un conjunto de juguetes de herramientas y también una bolsa de almacenamiento.\r\nCuelga las herramientas de ingeniería con un gancho en la parte superior del producto, que no ocupa espacio y es cómodo de usar.\r\n\r\nVisite nuestro perfil en MercadoLibre para conocer otros artículos en juguetería, tecnología y hogar.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbusuarios`
--

CREATE TABLE `dbusuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombres` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `Contraseña` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla Empleados';

--
-- Volcado de datos para la tabla `dbusuarios`
--

INSERT INTO `dbusuarios` (`idUsuario`, `Nombres`, `Apellidos`, `Usuario`, `email`, `Contraseña`) VALUES
(1, 'Luis', 'Mauro', 'LuisMora20', 'LuisM22@gmail.com', 'luisitom22'),
(2, 'Katerine', 'Campo', 'KateCash12', 'katerineC@hotmail.com', '1002398473'),
(3, 'Antonio Felipe', 'Castañeda', 'AntonioC2450', 'AntonyC24@gmail.com', '2345999'),
(8, 'Sergio', 'Zuluaga rios', 'SergRios_00', 'LuisM22@hotmail.com', 'qwerty123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `IdLogin` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `tipoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`IdLogin`, `usuario`, `clave`, `tipoUsuario`) VALUES
(1, 'Gaby2000', 'Gabi123', 'Administrador'),
(2, 'DiegoBB03', 'Diego321', 'moderador'),
(3, 'Olivia21', 'Olivia123', 'usuario'),
(4, 'DanielG25', 'Enrique25', 'Administrador'),
(5, 'OlgaCab01', 'Olguita21', 'usuario'),
(6, 'SergioZ00', 'Sergio123', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dbfacturaciones`
--
ALTER TABLE `dbfacturaciones`
  ADD PRIMARY KEY (`idEmp`);

--
-- Indices de la tabla `dbinventario`
--
ALTER TABLE `dbinventario`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- Indices de la tabla `dbusuarios`
--
ALTER TABLE `dbusuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dbfacturaciones`
--
ALTER TABLE `dbfacturaciones`
  MODIFY `idEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dbinventario`
--
ALTER TABLE `dbinventario`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dbusuarios`
--
ALTER TABLE `dbusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `IdLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
