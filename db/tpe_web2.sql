-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2026 a las 01:08:00
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
-- Base de datos: `tpe_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nombre_album` varchar(40) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `duracion_minutos` int(11) NOT NULL,
  `cantidad_canciones` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_artista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id_album`, `nombre_album`, `genero`, `fecha_lanzamiento`, `duracion_minutos`, `cantidad_canciones`, `imagen`, `id_artista`) VALUES
(1, '24K Magic', 'Funk, Pop', '2016-11-18', 33, 9, 'https://i.scdn.co/image/ab67616d0000b273232711f7d66a1e19e89e28c5', 1),
(2, 'The Romantic', 'Pop', '2026-02-27', 31, 9, 'https://upload.wikimedia.org/wikipedia/en/b/b8/Bruno_Mars_-_The_Romantic.png', 1),
(3, 'Keep The Faith', 'Rock', '1992-11-03', 65, 12, 'https://i.scdn.co/image/ab67616d0000b27359bfe048568a969c6f0bd08c', 2),
(4, 'Slippery When Wet', 'Hard Rock', '1986-08-18', 43, 10, 'https://i.scdn.co/image/ab67616d0000b2731336b31b6a1799f0de5807ac', 2),
(5, 'Red', 'Country,Pop', '2012-10-22', 65, 16, 'https://static.wikia.nocookie.net/taylorswift/images/7/70/Red_-_Portada_oficial.jpg/revision/latest?cb=20181127032635&path-prefix=es', 3),
(6, '1989', 'Pop', '2014-10-27', 48, 13, 'foto.jpg', 3),
(7, 'Blizzard Of Ozz', 'Metal', '1980-09-12', 93, 19, 'https://i.scdn.co/image/ab67616d0000b273ed5c19fd9206d2d7e73c140c', 4),
(8, 'Diary Of A Madman', 'Metal', '1981-11-07', 53, 10, 'https://cdn-p.smehost.net/sites/36a287df83ae4bd5bbf9a5628b66a36c/wp-content/uploads/2020/04/1500x1500bb-7-1024x1024.jpeg', 4),
(9, 'Future Nostalgia', 'Pop', '2020-03-27', 43, 13, 'https://i.scdn.co/image/ab67616d0000b2735ffd3856144e0414dea4b838', 5),
(10, 'Radical Optimism', 'Pop', '2024-05-03', 36, 11, 'https://upload.wikimedia.org/wikipedia/en/f/fa/Dua_Lipa_-_Radical_Optimism.png', 5),
(11, 'Rebel Yell', 'Rock', '1983-11-10', 38, 9, 'https://i.scdn.co/image/ab67616d0000b273ea07dca8b4ca808c1e5b17fb', 6),
(12, 'CyberPunk', 'Rock', '1993-06-29', 71, 20, 'https://i.scdn.co/image/ab67616d00001e029290a5f1a7e0e3e9ddb11073', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `id_artista` int(11) NOT NULL,
  `nombre_artista` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_fallecimiento` date DEFAULT NULL,
  `lugar_origen` varchar(40) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`id_artista`, `nombre_artista`, `fecha_nacimiento`, `fecha_fallecimiento`, `lugar_origen`, `imagen`) VALUES
(1, 'Bruno Mars', '1985-10-08', NULL, 'Hawaii, EE.UU', 'https://admuzzum.xdevel.com/cloud/x/cid/5202/im/jpeg/XZXV/YZ/XV/db0f099edb1034dfb5d9bc42ce568133.jpg'),
(2, 'Bon Jovi', '1962-03-02', NULL, 'New Jersey, EE.UU', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Jon_Bon_Jovi_at_the_2009_Tribeca_Film_Festival_3.jpg/250px-Jon_Bon_Jovi_at_the_2009_Tribeca_Film_Festival_3.jpg'),
(3, 'Taylor Swift', '1989-12-13', NULL, 'Pensilvania, EE.UU', 'https://media.vogue.mx/photos/5c072934cac6a8dedd25dc2b/master/w_1600%2Cc_limit/la_magia_del_rosa_748052830.jpg'),
(4, 'Ozzy Osbourne', '1948-12-03', '2025-07-22', 'Marston Green, Inglaterra', 'https://m.media-amazon.com/images/M/MV5BNzk3OTYyMzc2Nl5BMl5BanBnXkFtZTcwMTk3NTUyMg@@._V1_FMjpg_UX1000_.jpg'),
(5, 'Dua Lipa', '1995-08-22', NULL, 'London, Inglaterra', 'https://elplanetaurbano.com/wp-content/uploads/2024/03/Dua-Lipa.webp'),
(6, 'Billy Idol', '1955-11-30', NULL, 'Stanmore, Inglaterra', 'https://www.guioteca.com/los-80/files/2019/07/Billy-7.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE `reseña` (
  `id_reseña` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `puntuacion` enum('1','2','3','4','5') NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseña`
--

INSERT INTO `reseña` (`id_reseña`, `comentario`, `puntuacion`, `id_album`) VALUES
(1, 'Un album bueno que no se destaca demasiado, regular.', '3', 1),
(2, 'Un gran album para escuchar en el auto', '4', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `password`) VALUES
(1, 'webadmin', '$2y$10$4Q86lewXp6LhfpBubLvSQu4nANLXsnLW.qrlb.ieFTHNkbgxjiUd2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `fk_album_artista` (`id_artista`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`);

--
-- Indices de la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD PRIMARY KEY (`id_reseña`),
  ADD KEY `fk_reseña_album` (`id_album`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reseña`
--
ALTER TABLE `reseña`
  MODIFY `id_reseña` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_album_artista` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`);

--
-- Filtros para la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD CONSTRAINT `fk_reseña_album` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
