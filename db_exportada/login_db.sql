-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2023 a las 17:09:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_db`
--

CREATE TABLE `login_db` (
  `Usuario` int(250) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Photo` longblob NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Bio` varchar(500) NOT NULL,
  `Phone` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_db`
--

INSERT INTO `login_db` (`Usuario`, `Email`, `Contrasena`, `Photo`, `Name`, `Bio`, `Phone`) VALUES
(56, 'soy@soy', '$2y$10$MlZQgMlTLa00cbe9oMqPROPlqxrBdUZHZo3FH9HIWtztDtjl94xNO', 0x313638323433303132373132332e6a7067, 'alonso ', 'soy bueno estudiando ', 5258963),
(59, 'rich@rich', '$2y$10$YwG9LT1e5O13q5PlXGNZku/fsnbUtw4KVzBXEAQABYmGT9nACw53W', 0x456c6f6e2e77656270, 'Ricardo', 'soy intrepida,, me gusta comer e ir al cine', 784561),
(61, 'test@test', '$2y$10$Nm36J3Nr0m70m3bqtEi/Le3OBM.A7FsvIeMaRQZVrhrV7S1QsmBs2', 0x6d616b6569746d656d655f316f7754412e6a706567, 'Richy Adds', 'Me gusta salir a pasear', 963852),
(62, 'admin@admin', '$2y$10$OXZ7uVTIwtei2jA0Urrh1.IJ4CcdDnRUoa2E7NIkmSZYunZm7ops.', 0x736564756369722d706172612d76656e6465722e6a7067, 'Susana Rodriguez', 'soy buena cocinando, me gusta mi trabajo, soy profesional en ventas a nivel mundial ', 7410852963);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`Usuario`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login_db`
--
ALTER TABLE `login_db`
  MODIFY `Usuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
