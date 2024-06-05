-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2024 a las 14:20:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `system_lybrary`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadoras`
--

CREATE TABLE `computadoras` (
  `ID` int(11) NOT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Especificaciones` text DEFAULT NULL,
  `ID_Ubicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `computadoras`
--

INSERT INTO `computadoras` (`ID`, `Marca`, `Modelo`, `Especificaciones`, `ID_Ubicacion`) VALUES
(1, 'HP', 'Pavilion', 'Procesador Intel Core i5, 8GB de RAM, 256GB SSD, Pantalla de 15.6 pulgadas', 3),
(2, 'Dell', 'Inspiron', 'Procesador AMD Ryzen 5, 12GB de RAM, 512GB SSD, Pantalla táctil de 14 pulgadas', 3),
(3, 'Lenovo', 'IdeaPad', 'Procesador Intel Core i7, 16GB de RAM, 1TB HDD, Pantalla de 15.6 pulgadas', 3),
(4, 'Asus', 'VivoBook', 'Procesador Intel Core i3, 4GB de RAM, 128GB SSD, Pantalla de 13.3 pulgadas', 3),
(5, 'Acer', 'Swift', 'Procesador AMD Ryzen 3, 8GB de RAM, 256GB SSD, Pantalla de 14 pulgadas', 3),
(6, 'Apple', 'MacBook Air', 'Procesador Apple M1, 8GB de RAM, 256GB SSD, Pantalla Retina de 13.3 pulgadas', 3),
(7, 'Microsoft', 'Surface Laptop', 'Procesador Intel Core i5, 8GB de RAM, 128GB SSD, Pantalla táctil de 13.5 pulgadas', 3),
(8, 'Samsung', 'Galaxy Book', 'Procesador Intel Core i7, 16GB de RAM, 512GB SSD, Pantalla táctil de 15.6 pulgadas', 3),
(9, 'Huawei', 'MateBook', 'Procesador AMD Ryzen 7, 16GB de RAM, 512GB SSD, Pantalla táctil de 13 pulgadas', 3),
(10, 'LG', 'Gram', 'Procesador Intel Core i5, 8GB de RAM, 256GB SSD, Pantalla de 14 pulgadas', 3),
(11, 'Asus', 'VivoBook', 'Procesador Intel Core i3, 4GB de RAM, 128GB SSD, Pantalla de 13.3 pulgadas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont_audiovisual`
--

CREATE TABLE `cont_audiovisual` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Director` varchar(255) DEFAULT NULL,
  `Fecha_Lanzamiento` date DEFAULT NULL,
  `Formato` enum('Digital','DVD','VHS') DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `ID_Ubicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cont_audiovisual`
--

INSERT INTO `cont_audiovisual` (`ID`, `Titulo`, `Director`, `Fecha_Lanzamiento`, `Formato`, `Descripcion`, `ID_Ubicacion`) VALUES
(1, 'El Padrino', 'Francis Ford Coppola', '1972-03-24', 'DVD', 'Clásico del cine de mafia que sigue la historia de la familia Corleone.', 6),
(2, 'Titanic', 'James Cameron', '1997-12-19', 'DVD', 'Romance épico ambientado en el hundimiento del Titanic.', 6),
(3, 'El Señor de los Anillos: La Comunidad del Anillo', 'Peter Jackson', '2001-12-19', 'DVD', 'Primera entrega de la trilogía basada en la obra de J.R.R. Tolkien.', 6),
(4, 'La La Land', 'Damien Chazelle', '2016-12-25', 'DVD', 'Musical romántico que sigue a una aspirante a actriz y un pianista de jazz.', 6),
(5, 'La Lista de Schindler', 'Steven Spielberg', '1993-12-15', 'DVD', 'Drama histórico basado en la historia real de Oskar Schindler durante el Holocausto.', 6),
(6, 'El Rey León', 'Roger Allers, Rob Minkoff', '1994-06-15', 'DVD', 'Clásico de Disney que sigue la historia del joven león Simba.', 6),
(7, 'Toy Story', 'John Lasseter', '1995-11-22', 'VHS', 'Primera película de animación completamente hecha por computadora.', 6),
(8, 'Los Increíbles', 'Brad Bird', '2004-11-05', 'VHS', 'Película de superhéroes animada que sigue a una familia de superhéroes retirados.', 6),
(9, 'La Bella y la Bestia', 'Gary Trousdale, Kirk Wise', '1991-11-13', 'VHS', 'Clásico de Disney que cuenta la historia de amor entre una joven y una bestia.', 6),
(10, 'Avatar', 'James Cameron', '2009-12-18', 'DVD', 'Épica de ciencia ficción que se desarrolla en el planeta Pandora.', 6),
(11, 'Inception', 'Christopher Nolan', '2010-07-16', 'DVD', 'Película de ciencia ficción', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cubiculo_grupal`
--

CREATE TABLE `cubiculo_grupal` (
  `ID` int(11) NOT NULL,
  `Capacidad` int(11) DEFAULT NULL,
  `ID_Ubicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cubiculo_grupal`
--

INSERT INTO `cubiculo_grupal` (`ID`, `Capacidad`, `ID_Ubicacion`) VALUES
(1, 4, 4),
(2, 4, 4),
(3, 4, 4),
(4, 5, 4),
(11, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escritorio_individual`
--

CREATE TABLE `escritorio_individual` (
  `ID` int(11) NOT NULL,
  `ID_Ubicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escritorio_individual`
--

INSERT INTO `escritorio_individual` (`ID`, `ID_Ubicacion`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(21, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Autor` varchar(255) DEFAULT NULL,
  `Editorial` varchar(255) DEFAULT NULL,
  `Fecha_Publicacion` date DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `ID_Ubicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID`, `Titulo`, `Autor`, `Editorial`, `Fecha_Publicacion`, `Descripcion`, `ID_Ubicacion`) VALUES
(1, 'Harry Potter y la piedra filosofal', 'J.K. Rowling', 'Bloomsbury', '1997-06-26', 'Primer libro de la serie de Harry Potter.', 1),
(2, 'El código Da Vinci', 'Dan Brown', 'Doubleday', '2003-03-18', 'Thriller de misterio que mezcla arte, religión y simbología.', 1),
(3, 'El señor de los anillos', 'J.R.R. Tolkien', 'Allen & Unwin', '1954-07-29', 'Trilogía épica de fantasía que sigue la lucha contra el mal.', 1),
(4, 'Orgullo y prejuicio', 'Jane Austen', 'Thomas Egerton', '1813-01-28', 'Novela de amor que sigue las vidas de las hermanas Bennet.', 1),
(5, 'Matar a un ruiseñor', 'Harper Lee', 'J.B. Lippincott & Co.', '1960-07-11', 'Novela que aborda temas de injusticia racial y moralidad.', 1),
(6, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 'Juan de la Cuesta', '1605-01-16', 'Clásico de la literatura española que sigue las aventuras de Don Quijote.', 1),
(7, 'El retrato de Dorian Gray', 'Oscar Wilde', 'Lippincott\'s Monthly Magazine', '1890-06-20', 'Novela de Wilde sobre la vanidad y la moralidad.', 1),
(8, 'Crimen y castigo', 'Fyodor Dostoevsky', 'The Russian Messenger', '1866-01-01', 'Novela psicológica que sigue a un estudiante universitario y sus acciones.', 1),
(9, 'Matar a un ruiseñor', 'Harper Lee', 'J.B. Lippincott & Co.', '1960-07-11', 'Novela que aborda temas de injusticia racial y moralidad.', 1),
(10, 'El gran Gatsby', 'F. Scott Fitzgerald', 'Charles Scribner\'s Sons', '1925-04-10', 'Novela sobre la decadencia del sueño americano en la década de 1920.', 1),
(11, 'Cien años de soledad', 'Gabriel García Márquez', 'Editorial Sudamericana', '1967-05-30', 'Obra maestra del realismo mágico latinoamericano.', 1),
(12, 'Orgullo y prejuicio', 'Jane Austen', 'Thomas Egerton', '1813-01-28', 'Novela de amor que sigue las vidas de las hermanas Bennet.', 1),
(13, 'Matar a un ruiseñor', 'Harper Lee', 'J.B. Lippincott & Co.', '1960-07-11', 'Novela que aborda temas de injusticia racial y moralidad.', 1),
(14, 'El gran Gatsby', 'F. Scott Fitzgerald', 'Charles Scribner\'s Sons', '1925-04-10', 'Novela sobre la decadencia del sueño americano en la década de 1920.', 1),
(15, 'Cien años de soledad', 'Gabriel García Márquez', 'Editorial Sudamericana', '1967-05-30', 'Obra maestra del realismo mágico latinoamericano.', 5),
(16, 'Orgullo y prejuicio', 'Jane Austen', 'Thomas Egerton', '1813-01-28', 'Novela de amor que sigue las vidas de las hermanas Bennet.', 5),
(17, 'El guardián entre el centeno', 'J.D. Salinger', 'Little, Brown and Company', '1951-07-16', 'Novela que sigue a un adolescente alienado en Nueva York.', 5),
(18, 'Jane Eyre', 'Charlotte Brontë', 'Smith, Elder & Co.', '1847-10-16', 'Novela que sigue la vida de la huérfana Jane Eyre.', 5),
(19, 'El hobbit', 'J.R.R. Tolkien', 'George Allen & Unwin', '1937-09-21', 'Novela de fantasía que sigue el viaje del hobbit Bilbo Baggins.', 5),
(20, 'Guerra y paz', 'Leo Tolstoy', 'The Russian Messenger', '1869-01-01', 'Épica novela histórica que sigue la vida de varios personajes durante las guerras napoleónicas', 5),
(69, 'El nombre del viento', 'Patrick Rothfuss', 'Debolsillo', '2007-03-27', 'Una novela épica y emocionante que narra la historia de Kvothe.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID` int(11) NOT NULL,
  `solicitud_ID` int(11) DEFAULT NULL,
  `Usuarios_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `ID_Recurso` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `tipo_actividad` enum('Préstamo','Reserva') NOT NULL,
  `estado_actividad` enum('Pendiente','En ejecución','Cancelada') NOT NULL,
  `inicio_actividad` datetime NOT NULL,
  `fin_actividad` datetime NOT NULL,
  `encargado_id` int(11) DEFAULT NULL,
  `encargado_nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`ID`, `solicitud_ID`, `Usuarios_id`, `nombre`, `User_name`, `ID_Recurso`, `cantidad`, `tipo_actividad`, `estado_actividad`, `inicio_actividad`, `fin_actividad`, `encargado_id`, `encargado_nombre`) VALUES
(1, 1, 2, 'Fernando Enrique', 'fernenri33@gmail.com', 1, 1, 'Préstamo', 'Pendiente', '2024-06-04 01:22:19', '2024-06-06 01:22:00', NULL, NULL),
(2, 3, 3, 'Juan', 'ejemplo@mail.com', 1, 1, 'Reserva', 'Pendiente', '2024-06-04 01:28:31', '2024-06-22 01:27:00', NULL, NULL),
(3, 26, 5, 'Irvin', 'irvin@gmail.com', 1, 1, 'Préstamo', 'Pendiente', '2024-06-04 03:21:02', '2024-06-04 09:20:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE `recursos` (
  `ID` int(11) NOT NULL,
  `Tipo_Recurso` enum('computadoras','cont_audiovisual','cubiculo_grupal','escritorio_individual','libros','tablets') DEFAULT NULL,
  `Tipo_Recurso_ID` int(11) DEFAULT NULL,
  `Cantidad_Disponible` int(11) DEFAULT NULL,
  `Cantidad_Prestada` int(11) DEFAULT NULL,
  `Cantidad_Dañada` int(11) DEFAULT NULL,
  `Cantidad_Total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recursos`
--

INSERT INTO `recursos` (`ID`, `Tipo_Recurso`, `Tipo_Recurso_ID`, `Cantidad_Disponible`, `Cantidad_Prestada`, `Cantidad_Dañada`, `Cantidad_Total`) VALUES
(1, 'computadoras', 1, 5, 0, 0, 5),
(2, 'computadoras', 2, 4, 1, 0, 5),
(3, 'computadoras', 3, 2, 2, 1, 5),
(4, 'computadoras', 4, 3, 1, 1, 5),
(5, 'computadoras', 5, 4, 0, 1, 5),
(6, 'computadoras', 6, 3, 1, 0, 4),
(7, 'computadoras', 7, 2, 2, 0, 4),
(8, 'computadoras', 8, 4, 0, 0, 4),
(9, 'computadoras', 9, 3, 1, 0, 4),
(10, 'computadoras', 10, 4, 0, 0, 4),
(11, 'cont_audiovisual', 1, 4, 0, 0, 4),
(12, 'cont_audiovisual', 2, 3, 1, 0, 4),
(13, 'cont_audiovisual', 3, 2, 2, 0, 4),
(14, 'cont_audiovisual', 4, 1, 3, 0, 4),
(15, 'cont_audiovisual', 5, 4, 0, 0, 4),
(16, 'cont_audiovisual', 6, 3, 1, 0, 4),
(17, 'cont_audiovisual', 7, 2, 2, 0, 4),
(18, 'cont_audiovisual', 8, 1, 3, 0, 4),
(19, 'cont_audiovisual', 9, 4, 0, 0, 4),
(20, 'cont_audiovisual', 10, 3, 1, 0, 4),
(21, 'cubiculo_grupal', 1, 2, 2, 0, 4),
(22, 'cubiculo_grupal', 2, 1, 3, 0, 4),
(23, 'cubiculo_grupal', 3, 4, 0, 0, 4),
(24, 'cubiculo_grupal', 4, 3, 1, 0, 4),
(25, 'escritorio_individual', 1, 2, 2, 0, 4),
(26, 'escritorio_individual', 2, 1, 3, 0, 4),
(27, 'escritorio_individual', 3, 4, 0, 0, 4),
(28, 'escritorio_individual', 4, 3, 1, 0, 4),
(29, 'libros', 1, 2, 2, 0, 4),
(30, 'libros', 2, 1, 3, 0, 4),
(31, 'libros', 3, 4, 0, 0, 4),
(32, 'libros', 4, 3, 1, 0, 4),
(33, 'libros', 5, 2, 2, 0, 4),
(34, 'libros', 6, 1, 3, 0, 4),
(35, 'libros', 7, 4, 0, 0, 4),
(36, 'libros', 8, 3, 1, 0, 4),
(37, 'libros', 9, 2, 2, 0, 4),
(38, 'libros', 10, 1, 3, 0, 4),
(39, 'libros', 11, 4, 0, 0, 4),
(40, 'libros', 12, 3, 1, 0, 4),
(41, 'libros', 13, 2, 2, 0, 4),
(42, 'libros', 14, 1, 3, 0, 4),
(43, 'libros', 15, 4, 0, 0, 4),
(44, 'libros', 16, 3, 1, 0, 4),
(45, 'libros', 17, 2, 2, 0, 4),
(46, 'libros', 18, 1, 3, 0, 4),
(47, 'libros', 19, 4, 0, 0, 4),
(48, 'libros', 20, 0, 0, 0, 0),
(49, 'tablets', 1, 0, 0, 0, 0),
(50, 'tablets', 2, 0, 0, 0, 0),
(51, 'tablets', 3, 0, 0, 0, 0),
(52, 'tablets', 4, 0, 0, 0, 0),
(53, 'tablets', 5, 0, 0, 0, 0),
(54, 'tablets', 6, 0, 0, 0, 0),
(55, 'tablets', 7, 0, 0, 0, 0),
(56, 'tablets', 8, 0, 0, 0, 0),
(57, 'tablets', 9, 0, 0, 0, 0),
(58, 'tablets', 10, 0, 0, 0, 0),
(281, 'computadoras', 11, 0, 0, 0, 0),
(284, 'libros', 69, 10, 2, 1, 13),
(292, 'tablets', 18, 10, 2, 1, 13),
(293, 'cont_audiovisual', 11, 10, 2, 1, 13),
(294, 'computadoras', 12, 1, 1, 1, 3),
(297, 'cubiculo_grupal', 11, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `ID` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `tipo_actividad` enum('Préstamo','Reserva') NOT NULL,
  `estado` enum('En revisión','Aceptada','Denegada') NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_revision` datetime DEFAULT NULL,
  `fecha_actividad` datetime NOT NULL,
  `fecha_fin_actividad` datetime NOT NULL,
  `Usuarios_id` int(11) DEFAULT NULL,
  `ID_Recurso` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`ID`, `cantidad`, `tipo_actividad`, `estado`, `fecha_creacion`, `fecha_revision`, `fecha_actividad`, `fecha_fin_actividad`, `Usuarios_id`, `ID_Recurso`, `nombre`) VALUES
(1, 1, 'Préstamo', 'En revisión', '2024-06-04 01:22:19', NULL, '2024-06-05 01:22:00', '2024-06-06 01:22:00', 3, 1, 'computadoras'),
(3, 1, 'Reserva', 'En revisión', '2024-06-04 01:28:31', NULL, '2024-06-08 01:27:00', '2024-06-22 01:27:00', 3, 1, 'cont_audiovisual'),
(26, 1, 'Préstamo', 'En revisión', '2024-06-04 03:21:02', NULL, '2024-06-04 03:20:00', '2024-06-04 09:20:00', 3, 1, 'computadoras'),
(27, 1, 'Reserva', 'En revisión', '2024-06-04 03:23:03', NULL, '2024-06-04 03:22:00', '2024-06-04 03:29:00', 3, 1, 'cubiculo_grupal'),
(28, 1, 'Préstamo', 'En revisión', '2024-06-04 03:30:12', NULL, '2024-06-06 03:30:00', '2024-06-14 03:30:00', 5, 1, 'escritorio_individual'),
(29, 2, 'Reserva', 'En revisión', '2024-06-04 03:30:29', NULL, '2024-06-05 03:30:00', '2024-06-05 09:30:00', 5, 1, 'libros'),
(30, 1, 'Préstamo', 'En revisión', '2024-06-04 03:31:34', NULL, '2024-06-28 03:31:00', '2024-06-29 09:37:00', 6, 8, 'computadoras'),
(31, 1, 'Reserva', 'En revisión', '2024-06-04 03:40:54', NULL, '2024-06-29 06:40:00', '2024-06-04 09:40:00', 6, 9, 'tablets'),
(32, 2, 'Reserva', 'En revisión', '2024-06-04 03:45:25', NULL, '2024-06-05 03:45:00', '2024-06-05 09:45:00', 6, 4, 'escritorio_individual'),
(33, 1, 'Reserva', 'En revisión', '2024-06-04 03:47:12', NULL, '2024-06-29 03:46:00', '2024-08-10 03:53:00', 2, 20, 'libros'),
(34, 1, 'Préstamo', 'En revisión', '2024-06-04 06:18:25', NULL, '2024-06-05 06:18:00', '2024-06-06 06:18:00', 2, 1, 'cubiculo_grupal'),
(35, 2, 'Préstamo', 'En revisión', '2024-06-04 06:19:00', NULL, '2024-06-29 06:18:00', '2024-07-01 06:18:00', 2, 10, 'computadoras'),
(36, 2, 'Préstamo', 'En revisión', '2024-06-04 08:29:58', NULL, '2024-06-05 08:29:00', '2024-06-05 08:35:00', 2, 1, 'libros'),
(37, 1, 'Préstamo', 'En revisión', '2024-06-04 09:37:59', NULL, '2024-06-04 09:37:00', '2024-06-07 15:43:00', 2, 1, 'libros'),
(38, 1, 'Reserva', 'En revisión', '2024-06-04 09:38:50', NULL, '2024-06-30 09:38:00', '2024-06-30 15:38:00', 2, 10, 'computadoras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablets`
--

CREATE TABLE `tablets` (
  `ID` int(11) NOT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Especificaciones` text DEFAULT NULL,
  `ID_Ubicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablets`
--

INSERT INTO `tablets` (`ID`, `Marca`, `Modelo`, `Especificaciones`, `ID_Ubicacion`) VALUES
(1, 'Samsung', 'Galaxy Tab A', 'Pantalla de 10.1 pulgadas, 32GB de almacenamiento, Procesador Exynos 7904, 2GB de RAM', 3),
(2, 'Apple', 'iPad 9ª Generación', 'Pantalla Retina de 10.2 pulgadas, 32GB de almacenamiento, Chip A13 Bionic', 3),
(3, 'Lenovo', 'Tab M10 Plus', 'Pantalla de 10.3 pulgadas, 64GB de almacenamiento, Procesador MediaTek Helio P22T, 4GB de RAM', 3),
(4, 'Huawei', 'MatePad T10', 'Pantalla de 9.7 pulgadas, 32GB de almacenamiento, Procesador Kirin 710A, 2GB de RAM', 3),
(5, 'Amazon', 'Fire HD 10', 'Pantalla Full HD de 10.1 pulgadas, 32GB de almacenamiento, Procesador MediaTek MT8183, 2GB de RAM', 3),
(6, 'Samsung', 'Galaxy Tab S7', 'Pantalla Super AMOLED de 11 pulgadas, 128GB de almacenamiento, Procesador Qualcomm Snapdragon 865 Plus, 6GB de RAM', 3),
(7, 'Apple', 'iPad Air 4ª Generación', 'Pantalla Liquid Retina de 10.9 pulgadas, 64GB de almacenamiento, Chip A14 Bionic', 3),
(8, 'Lenovo', 'Tab P11', 'Pantalla de 11 pulgadas, 128GB de almacenamiento, Procesador Qualcomm Snapdragon 662, 6GB de RAM', 3),
(9, 'Huawei', 'MatePad Pro', 'Pantalla FullView de 10.8 pulgadas, 128GB de almacenamiento, Procesador Kirin 990, 6GB de RAM', 3),
(10, 'Amazon', 'Fire HD 8', 'Pantalla HD de 8 pulgadas, 32GB de almacenamiento, Procesador MediaTek MT8168, 2GB de RAM', 3),
(18, 'Apple', 'iPad Pro', '256GB, Wi-Fi', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporecurso`
--

CREATE TABLE `tiporecurso` (
  `ID` int(11) NOT NULL,
  `tipo_recurso` enum('computadoras','cont_audiovisual','cubiculo_grupal','escritorio_individual','libros','tablets') NOT NULL,
  `recurso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiporecurso`
--

INSERT INTO `tiporecurso` (`ID`, `tipo_recurso`, `recurso_id`) VALUES
(1, 'computadoras', 1),
(2, 'computadoras', 2),
(3, 'computadoras', 3),
(4, 'computadoras', 4),
(5, 'computadoras', 5),
(6, 'computadoras', 6),
(7, 'computadoras', 7),
(8, 'computadoras', 8),
(9, 'computadoras', 9),
(10, 'computadoras', 10),
(11, 'cont_audiovisual', 1),
(12, 'cont_audiovisual', 2),
(13, 'cont_audiovisual', 3),
(14, 'cont_audiovisual', 4),
(15, 'cont_audiovisual', 5),
(16, 'cont_audiovisual', 6),
(17, 'cont_audiovisual', 7),
(18, 'cont_audiovisual', 8),
(19, 'cont_audiovisual', 9),
(20, 'cont_audiovisual', 10),
(21, 'cubiculo_grupal', 1),
(22, 'cubiculo_grupal', 2),
(23, 'cubiculo_grupal', 3),
(24, 'cubiculo_grupal', 4),
(25, 'escritorio_individual', 1),
(26, 'escritorio_individual', 2),
(27, 'escritorio_individual', 3),
(28, 'escritorio_individual', 4),
(29, 'libros', 1),
(30, 'libros', 2),
(31, 'libros', 3),
(32, 'libros', 4),
(33, 'libros', 5),
(34, 'libros', 6),
(35, 'libros', 7),
(36, 'libros', 8),
(37, 'libros', 9),
(38, 'libros', 10),
(39, 'libros', 11),
(40, 'libros', 12),
(41, 'libros', 13),
(42, 'libros', 14),
(43, 'libros', 15),
(44, 'libros', 16),
(45, 'libros', 17),
(46, 'libros', 18),
(47, 'libros', 19),
(48, 'libros', 20),
(49, 'tablets', 1),
(50, 'tablets', 2),
(51, 'tablets', 3),
(52, 'tablets', 4),
(53, 'tablets', 5),
(54, 'tablets', 6),
(55, 'tablets', 7),
(56, 'tablets', 8),
(57, 'tablets', 9),
(58, 'tablets', 10),
(59, 'computadoras', 11),
(60, 'libros', 69),
(68, 'tablets', 18),
(69, 'cont_audiovisual', 11),
(70, 'escritorio_individual', 12),
(71, 'escritorio_individual', 21),
(72, 'escritorio_individual', 22),
(73, 'cubiculo_grupal', 11),
(74, 'cubiculo_grupal', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Tipo_Recurso` varchar(100) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`ID`, `Nombre`, `Descripcion`, `Tipo_Recurso`, `Estado`) VALUES
(1, 'Estantería A', 'Estantería ubicada en la sección de Ficción.', 'Estantería', 'Disponible'),
(2, 'Sala de Lectura 1', 'Sala de lectura con mesas y sillas para estudiar.', 'Sala de Lectura', 'Disponible'),
(3, 'Área de Computadoras', 'Área con computadoras para uso público.', 'computadoras', 'Disponible'),
(4, 'Sala de cubiculos', 'Sala equipada con sillas y escritorios.', 'Sala de cubiculos', 'Disponible'),
(5, 'Estantería B', 'Estantería ubicada en la sección de No Ficción.', 'Estantería', 'En mantenimiento'),
(6, 'Sala multimedia y conferencias', 'Sala con proyector y sillas para conferencias y visualización de contenido multimedia', 'Auditorio', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombres` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `categoria` enum('alumno','docente','particular','bibliotecario','administrador') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombres`, `Apellidos`, `Direccion`, `email`, `telefono`, `password`, `categoria`) VALUES
(2, 'Fernando Enrique', 'Portillo Palacios', 'San Salvador', 'fernenri33@gmail.com', '123456789', '22067000', 'alumno'),
(3, 'Juan', 'Lopez', 'San Salvador', 'ejemplo@mail.com', NULL, '22067000', 'alumno'),
(5, 'Irvin', 'Geovani', 'Usulután', 'irvin@gmail.com', NULL, '22067000', 'alumno'),
(6, 'Edwin', 'Bercian', 'Soyapango', 'bercian@mail.com', '123456789', '22067000', 'particular');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Ubicacion` (`ID_Ubicacion`);

--
-- Indices de la tabla `cont_audiovisual`
--
ALTER TABLE `cont_audiovisual`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Ubicacion` (`ID_Ubicacion`);

--
-- Indices de la tabla `cubiculo_grupal`
--
ALTER TABLE `cubiculo_grupal`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Ubicacion` (`ID_Ubicacion`);

--
-- Indices de la tabla `escritorio_individual`
--
ALTER TABLE `escritorio_individual`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Ubicacion` (`ID_Ubicacion`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Ubicacion` (`ID_Ubicacion`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `solicitud_ID` (`solicitud_ID`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Tipo_Recurso` (`Tipo_Recurso`,`Tipo_Recurso_ID`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Usuarios_id` (`Usuarios_id`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `ID_Recurso` (`ID_Recurso`);

--
-- Indices de la tabla `tablets`
--
ALTER TABLE `tablets`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Ubicacion` (`ID_Ubicacion`);

--
-- Indices de la tabla `tiporecurso`
--
ALTER TABLE `tiporecurso`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cont_audiovisual`
--
ALTER TABLE `cont_audiovisual`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `cubiculo_grupal`
--
ALTER TABLE `cubiculo_grupal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `escritorio_individual`
--
ALTER TABLE `escritorio_individual`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `tablets`
--
ALTER TABLE `tablets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tiporecurso`
--
ALTER TABLE `tiporecurso`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD CONSTRAINT `computadoras_ibfk_1` FOREIGN KEY (`ID_Ubicacion`) REFERENCES `ubicacion` (`ID`);

--
-- Filtros para la tabla `cont_audiovisual`
--
ALTER TABLE `cont_audiovisual`
  ADD CONSTRAINT `cont_audiovisual_ibfk_1` FOREIGN KEY (`ID_Ubicacion`) REFERENCES `ubicacion` (`ID`);

--
-- Filtros para la tabla `cubiculo_grupal`
--
ALTER TABLE `cubiculo_grupal`
  ADD CONSTRAINT `cubiculo_grupal_ibfk_1` FOREIGN KEY (`ID_Ubicacion`) REFERENCES `ubicacion` (`ID`);

--
-- Filtros para la tabla `escritorio_individual`
--
ALTER TABLE `escritorio_individual`
  ADD CONSTRAINT `escritorio_individual_ibfk_1` FOREIGN KEY (`ID_Ubicacion`) REFERENCES `ubicacion` (`ID`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`ID_Ubicacion`) REFERENCES `ubicacion` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
