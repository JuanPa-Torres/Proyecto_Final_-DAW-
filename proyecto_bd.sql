-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 22:34:32
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
-- Base de datos: `proyecto_bd`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `bicicleta`
--

CREATE TABLE `bicicleta` (
  `idBicicleta` int(11) NOT NULL,
  `Marca` int(11) NOT NULL,
  `Modelo` int(11) NOT NULL,
  `Componentes` int(11) NOT NULL,
  `Caracteristicas` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bicicleta`
--

INSERT INTO `bicicleta` (`idBicicleta`, `Marca`, `Modelo`, `Componentes`, `Caracteristicas`, `Precio`, `Foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 1000, 'https://i.imgur.com/x500000.png', '2023-10-08 00:00:00', NULL, NULL),
(2, 2, 2, 2, 2, 2000, 'https://i.imgur.com/y500000.png', '2023-10-08 00:00:00', NULL, NULL),
(3, 3, 3, 3, 3, 3000, 'https://i.imgur.com/z500000.png', '2023-10-08 00:00:00', NULL, NULL),
(4, 4, 4, 4, 4, 4000, 'https://i.imgur.com/a500000.png', '2023-10-08 00:00:00', NULL, NULL),
(5, 5, 5, 5, 5, 5000, 'https://i.imgur.com/b500000.png', '2023-10-08 00:00:00', NULL, NULL),
(6, 6, 6, 6, 6, 6000, 'https://i.imgur.com/c500000.png', '2023-10-08 00:00:00', NULL, NULL),
(7, 7, 7, 7, 7, 7000, 'https://i.imgur.com/d500000.png', '2023-10-08 00:00:00', NULL, NULL),
(8, 8, 8, 8, 8, 8000, 'https://i.imgur.com/e500000.png', '2023-10-08 00:00:00', NULL, NULL),
(9, 9, 9, 9, 9, 9000, 'https://i.imgur.com/f500000.png', '2023-10-08 00:00:00', NULL, NULL),
(10, 10, 10, 10, 10, 10000, 'https://i.imgur.com/g500000.png', '2023-10-08 00:00:00', NULL, NULL),
(11, 11, 11, 11, 11, 11000, 'https://i.imgur.com/h500000.png', '2023-10-08 00:00:00', NULL, NULL),
(12, 12, 12, 12, 12, 12000, 'https://i.imgur.com/i500000.png', '2023-10-08 00:00:00', NULL, NULL),
(13, 13, 13, 13, 13, 13000, 'https://i.imgur.com/j500000.png', '2023-10-08 00:00:00', NULL, NULL),
(14, 14, 14, 4, 14, 14000, 'https://i.imgur.com/k500000.png', '2023-10-08 00:00:00', NULL, NULL),
(15, 15, 15, 5, 15, 15000, 'https://i.imgur.com/l500000.png', '2023-10-08 00:00:00', NULL, NULL),
(16, 16, 16, 6, 16, 16000, 'https://i.imgur.com/m500000.png', '2023-10-08 00:00:00', NULL, NULL),
(17, 17, 17, 7, 17, 17000, 'https://i.imgur.com/n500000.png', '2023-10-08 00:00:00', NULL, NULL),
(18, 18, 18, 8, 18, 18000, 'https://i.imgur.com/o500000.png', '2023-10-08 00:00:00', NULL, NULL),
(19, 19, 19, 9, 19, 19000, 'https://i.imgur.com/p500000.png', '2023-10-08 00:00:00', NULL, NULL),
(20, 20, 20, 2, 20, 20000, 'https://i.imgur.com/q500000.png', '2023-10-08 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `idCaracteristicas` int(11) NOT NULL,
  `Talla_Cuadro` varchar(20) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Colores_Disponibles` varchar(30) NOT NULL,
  `Geometrias` varchar(100) NOT NULL,
  `Peso` varchar(15) NOT NULL,
  `Limite_Peso` varchar(50) NOT NULL,
  `Garantia` varchar(80) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`idCaracteristicas`, `Talla_Cuadro`, `Material`, `Colores_Disponibles`, `Geometrias`, `Peso`, `Limite_Peso`, `Garantia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'S', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '9 kg', '120 kg', '2 años', NULL, NULL, NULL),
(2, 'M', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '10 kg', '125 kg', '2 años', NULL, NULL, NULL),
(3, 'L', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '11 kg', '130 kg', '2 años', NULL, NULL, NULL),
(4, 'XL', 'Aluminio', 'Rojo, Blanco, Negro', 'Endurance', '12 kg', '135 kg', '2 años', NULL, NULL, NULL),
(5, 'S', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '8 kg', '110 kg', '3 años', NULL, NULL, NULL),
(6, 'M', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '9 kg', '115 kg', '3 años', NULL, NULL, NULL),
(7, 'L', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '10 kg', '120 kg', '3 años', NULL, NULL, NULL),
(8, 'XL', 'Carbono', 'Rojo, Blanco, Negro', 'Aero', '11 kg', '125 kg', '3 años', NULL, NULL, NULL),
(9, 'S', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '15 kg', '150 kg', '1 año', NULL, NULL, NULL),
(10, 'M', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '16 kg', '155 kg', '1 año', NULL, NULL, NULL),
(11, 'L', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '17 kg', '160 kg', '1 año', NULL, NULL, NULL),
(12, 'XL', 'Acero', 'Rojo, Blanco, Negro', 'Cruiser', '18 kg', '165 kg', '1 año', NULL, NULL, NULL),
(13, 'S', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '12 kg', '100 kg', '5 años', NULL, NULL, NULL),
(14, 'M', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '13 kg', '105 kg', '5 años', NULL, NULL, NULL),
(15, 'L', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '14 kg', '110 kg', '5 años', NULL, NULL, NULL),
(16, 'XL', 'Titanio', 'Rojo, Blanco, Negro', 'Montaña', '15 kg', '115 kg', '5 años', NULL, NULL, NULL),
(17, 'S', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '11 kg', '120 kg', '2 años', NULL, NULL, NULL),
(18, 'M', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '12 kg', '125 kg', '2 años', NULL, NULL, NULL),
(19, 'L', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '13 kg', '130 kg', '2 años', NULL, NULL, NULL),
(20, 'XL', 'Aluminio', 'Rojo, Blanco, Negro', 'Urbana', '14 kg', '135 kg', '2 años', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `idComponentes` int(11) NOT NULL,
  `Tija` varchar(50) NOT NULL,
  `Amortiguador` varchar(50) NOT NULL,
  `Ruedas_Delanteras` varchar(50) NOT NULL,
  `Ruedas_Traseras` varchar(50) NOT NULL,
  `Llantas` varchar(50) NOT NULL,
  `Cambio_Delantero` varchar(50) NOT NULL,
  `Cambio_Trasero` varchar(50) NOT NULL,
  `Casstte` varchar(50) NOT NULL,
  `Bielas` varchar(50) NOT NULL,
  `Frenos` varchar(50) NOT NULL,
  `Rotores_Frenos` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`idComponentes`, `Tija`, `Amortiguador`, `Ruedas_Delanteras`, `Ruedas_Traseras`, `Llantas`, `Cambio_Delantero`, `Cambio_Trasero`, `Casstte`, `Bielas`, `Frenos`, `Rotores_Frenos`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tija de sillín de carbono', 'Amortiguador RockShox SID Select+ RL2', 'Ruedas delanteras Bontrager Aeolus RSL 50', 'Ruedas traseras Bontrager Aeolus RSL 50', 'Neumáticos Bontrager R1 Hard-Case Lite', 'Cambio delantero Shimano Ultegra Di2', 'Cambio trasero Shimano Ultegra Di2', 'Cassette Shimano Ultegra 11-34T', 'Bielas Shimano Ultegra R8000', 'Frenos Shimano Ultegra Disc', 'Rotores de frenos Shimano RT800', NULL, NULL, NULL),
(2, 'Tija de sillín de fibra de carbono', 'Amortiguador Fox Factory Float SC', 'Ruedas delanteras DT Swiss XRC 1200 Spline', 'Ruedas traseras DT Swiss XRC 1200 Spline', 'Neumáticos Specialized Turbo Cotton', 'Cambio delantero Shimano XTR Di2', 'Cambio trasero Shimano XTR Di2', 'Cassette Shimano XTR 12-34T', 'Bielas Shimano XTR M9100', 'Frenos Shimano XTR Disc', 'Rotores de frenos Shimano XTR RT-MT900', NULL, NULL, NULL),
(3, 'Tija de sillín de aluminio', 'Amortiguador RockShox Reba RL', 'Ruedas delanteras Giant P-SL0', 'Ruedas traseras Giant P-SL0', 'Neumáticos Giant Gavia Fondo 0', 'Cambio delantero Shimano 105', 'Cambio trasero Shimano 105', 'Cassette Shimano 105 11-34T', 'Bielas Shimano 105', 'Frenos Shimano 105 Disc', 'Rotores de frenos Shimano BR-RS700', NULL, NULL, NULL),
(4, 'Tija de sillín de aluminio', 'Amortiguador Suntour XCR34 RL-R', 'Ruedas delanteras Shimano WH-RS171', 'Ruedas traseras Shimano WH-RS171', 'Neumáticos Schwalbe Lugano', 'Cambio delantero Shimano Tiagra', 'Cambio trasero Shimano Tiagra', 'Cassette Shimano Tiagra 11-32T', 'Bielas Shimano Tiagra', 'Frenos Shimano Tiagra Disc', 'Rotores de frenos Shimano BR-RS400', NULL, NULL, NULL),
(5, 'Tija de sillín de acero', 'Amortiguador SR Suntour XCM34', 'Ruedas delanteras Alexrims MD10', 'Ruedas traseras Alexrims MD10', 'Neumáticos Kenda Kwick Roller', 'Cambio delantero Shimano Claris', 'Cambio trasero Shimano Claris', 'Cassette Shimano Claris 11-32T', 'Bielas Shimano Claris', 'Frenos Shimano Claris Disc', 'Rotores de frenos Shimano BR-MT200', NULL, NULL, NULL),
(6, 'Tija de sillín de carbono', 'Amortiguador RockShox SID SL', 'Ruedas delanteras Bontrager Aeolus 3 V2', 'Ruedas traseras Bontrager Aeolus 3 V2', 'Neumáticos Bontrager R1 Hard-Case Lite', 'Cambio delantero Shimano Ultegra', 'Cambio trasero Shimano Ultegra', 'Cassette Shimano Ultegra 11-34T', 'Bielas Shimano Ultegra', 'Frenos Shimano Ultegra Disc', 'Rotores de frenos Shimano RT700', NULL, NULL, NULL),
(7, 'Tija de sillín de fibra de carbono', 'Amortiguador Fox Factory Float SC', 'Ruedas delanteras DT Swiss XRC 1200 Spline', 'Ruedas trasera DT Swiss XRC 3200 Spline', 'Neumatico Maxxis Arden', 'Sin Cambio delantero', 'Cambio trasero Shimano XTR', 'Cassette Shimano XTR', 'Biela Shimano XT', 'Frenos Shimano XTR', 'Rotores XTR', NULL, NULL, NULL),
(8, 'Tija de sillín de carbono', 'Amortiguador RockShox Reba RL', 'Ruedas delanteras Shimano XTR', 'Ruedas traseras Shimano XTR', 'Neumáticos Schwalbe Hans Dampf', 'Cambio delantero Shimano XTR', 'Cambio trasero Shimano XTR', 'Cassette Shimano XTR 12 velocidades', 'Bielas Shimano XTR', 'Frenos Shimano XTR', 'Rotores de freno Shimano XTR 180 mm', NULL, NULL, NULL),
(9, 'Tija de sillín de aluminio', 'Amortiguador Fox Float 34 Performance Elite', 'Ruedas delanteras DT Swiss XRC 1200', 'Ruedas traseras DT Swiss XRC 1200', 'Neumáticos Continental Race King', 'Cambio delantero Shimano XT', 'Cambio trasero Shimano XT', 'Cassette Shimano XT 12 velocidades', 'Bielas Shimano XT', 'Frenos Shimano XT', 'Rotores de freno Shimano XT 180 mm', NULL, NULL, NULL),
(10, 'Tija de sillín de aluminio', 'Amortiguador RockShox Recon Silver', 'Ruedas delanteras Mavic Crossmax Elite', 'Ruedas traseras Mavic Crossmax Elite', 'Neumáticos Maxxis Ikon', 'Cambio delantero Shimano Deore', 'Cambio trasero Shimano Deore', 'Cassette Shimano Deore 10 velocidades', 'Bielas Shimano Deore', 'Frenos Shimano Deore', 'Rotores de freno Shimano Deore 160 mm', NULL, NULL, NULL),
(11, 'Tija de sillín de aluminio', 'Amortiguador Suntour XCR32', 'Ruedas delanteras WTB ST i23', 'Ruedas traseras WTB ST i23', 'Neumáticos Schwalbe Smart Sam', 'Cambio delantero Shimano Altus', 'Cambio trasero Shimano Altus', 'Cassette Shimano Altus 9 velocidades', 'Bielas Shimano Altus', 'Frenos Shimano Altus', 'Rotores de freno Shimano Altus 160 mm', NULL, NULL, NULL),
(12, 'Tija de sillín de acero', 'Amortiguador Suntour XCM', 'Ruedas delanteras Shimano WH-R501', 'Ruedas traseras Shimano WH-R501', 'Neumáticos Kenda K197', 'Cambio delantero Shimano Tourney', 'Cambio trasero Shimano Tourney', 'Cassette Shimano Tourney 7 velocidades', 'Bielas Shimano Tourney', 'Frenos Shimano V-Brake', 'Rotores de freno Shimano V-Brake 160 mm', NULL, NULL, NULL),
(13, 'Tija de sillín de carbono', 'Amortiguador RockShox SID SL', 'Ruedas delanteras DT Swiss XMC 1200', 'Ruedas traseras DT Swiss XMC 1200', 'Neumáticos Maxxis Aspen', 'Cambio delantero SRAM X01 Eagle AXS', 'Cambio trasero SRAM X01 Eagle AXS', 'Cassette SRAM X01 Eagle AXS 12 velocidades', 'Bielas SRAM X01 Eagle AXS', 'Frenos SRAM Code RSC', 'Rotores de freno SRAM Code RSC 200 mm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuidor`
--

CREATE TABLE `distribuidor` (
  `idDistribuidor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Telefono` mediumtext NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `distribuidor`
--

INSERT INTO `distribuidor` (`idDistribuidor`, `Nombre`, `Ciudad`, `Telefono`, `Correo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bicimex', 'Ciudad de México', '5555555555', 'bicimex@example.com', NULL, NULL, NULL),
(2, 'Bicicletas ABC', 'Guadalajara', '3333333333', 'abc@example.com', NULL, NULL, NULL),
(3, 'Bicis El Bici', 'Monterrey', '8181818181', 'elbici@example.com', NULL, NULL, NULL),
(4, 'Bicicletas La Mejor', 'Querétaro', '4444444444', 'lamejor@example.com', NULL, NULL, NULL),
(5, 'Bicis El Gallo', 'Puebla', '2222222222', 'elgallo@example.com', NULL, NULL, NULL),
(6, 'Bicicletas El Niño', 'Veracruz', '2222222222', 'elnino@example.com', NULL, NULL, NULL),
(7, 'Bicis El Tigre', 'Oaxaca', '9519519519', 'eltigre@example.com', NULL, NULL, NULL),
(8, 'Bicicletas El León', 'Chihuahua', '6146146146', 'eleon@example.com', NULL, NULL, NULL),
(9, 'Bicis El Águila', 'Durango', '6186186186', 'elaguila@example.com', NULL, NULL, NULL),
(10, 'Bicicletas El Zorro', 'Sonora', '6626626626', 'elzorro@example.com', NULL, NULL, NULL),
(11, 'Bicis El Gato', 'Nayarit', '3113113113', 'elgato@example.com', NULL, NULL, NULL),
(12, 'Bicicletas El Perro', 'Coahuila', '8448448444', 'elperro@example.com', NULL, NULL, NULL),
(13, 'Bicis El Caballo', 'Guanajuato', '4734734734', 'elcaballo@example.com', NULL, NULL, NULL),
(14, 'Bicis El Elefante', 'Yucatán', '9999999999', 'elefante@example.com', NULL, NULL, NULL),
(15, 'Bicis El Mono', 'Campeche', '9819819819', 'elmono@example.com', NULL, NULL, NULL),
(16, 'Bicis El Pato', 'Quintana Roo', '9989989989', 'elpato@example.com', NULL, NULL, NULL),
(17, 'Bicis El Conejo', 'Tabasco', '9939939939', 'elconejo@example.com', NULL, NULL, NULL),
(18, 'Bicis El Perro', 'Veracruz', '2222222222', 'elperro@example.com', NULL, NULL, NULL),
(19, 'Bicis El Gato', 'Nayarit', '3113113113', 'elgato@example.com', NULL, NULL, NULL),
(20, 'Bicicletas El Caballo', 'Guanajuato', '4734734734', 'elcaballo@example.com', NULL, NULL, NULL),
(21, 'dedede', '', '', '', NULL, NULL, NULL),
(22, '13456789', 'wertyuk', 'erty', 'erty', NULL, NULL, '2023-11-14 13:52:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Pais_Origen` varchar(50) NOT NULL,
  `Logo` varchar(200) DEFAULT NULL,
  `Pais_Distribuidor` varchar(50) NOT NULL,
  `Distribuidor` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `Nombre`, `Pais_Origen`, `Logo`, `Pais_Distribuidor`, `Distribuidor`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trek', 'Estados Unidos', 'https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/052014/trek_bicycle_corporation.png?itok=8XA3Zrqs', 'México', 1, NULL, NULL, NULL),
(2, 'Specialized', 'Estados Unidos', 'https://download.logo.wine/logo/Specialized_Bicycle_Components/Specialized_Bicycle_Components-Logo.wine.png', 'México', 2, NULL, NULL, NULL),
(3, 'Cannondale', 'Estados Unidos', 'https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/042019/cannondale.png?GjRRUhG_CAt7M0WBAj.yhxYxkmeaWIj1&itok=-dirKEjj', 'México', 3, NULL, NULL, NULL),
(4, 'Giant', 'Taiwán', 'https://1000marcas.net/wp-content/uploads/2021/05/Giant-Bicycles-Logo.jpg', 'México', 4, NULL, NULL, NULL),
(5, 'Scott', 'Suiza', 'https://cdn.shopify.com/s/files/1/0685/3887/files/SCOTTLOGO_480x480.jpg?v=1628707794', 'México', 5, NULL, NULL, NULL),
(6, 'Orbea', 'España', 'https://upload.wikimedia.org/wikipedia/commons/9/98/01_logo_orbea_azul_pos.jpg', 'México', 6, NULL, NULL, NULL),
(7, 'BH', 'España', 'https://www.datocms-assets.com/80258/1676643467-bh-bikes-350x350.jpg?auto=format&fit=max&w=400', 'México', 7, NULL, NULL, NULL),
(8, 'Merida', 'Taiwán', 'https://searchvectorlogo.com/wp-content/uploads/2019/09/merida-bikes-logo-vector.png', 'México', 8, NULL, NULL, NULL),
(9, 'Kross', 'Polonia', 'https://csport.itdotum.pl/public/data/n/2828.jpg', 'México', 9, NULL, NULL, NULL),
(10, 'Canyon', 'Alemania', 'https://download.logo.wine/logo/Canyon_Bicycles/Canyon_Bicycles-Logo.wine.png', 'México', 10, NULL, NULL, NULL),
(11, 'Focus', 'Alemania', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/FOCUS_Bikes_Logo_schwarz.svg/2560px-FOCUS_Bikes_Logo_schwarz.svg.png', 'México', 11, NULL, NULL, NULL),
(12, 'Cube', 'Alemania', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/CUBE_Logo_neu.svg/1280px-CUBE_Logo_neu.svg.png', 'México', 12, NULL, NULL, NULL),
(13, 'GT', 'Estados Unidos', 'https://cdn.worldvectorlogo.com/logos/gt-bicycles-2.svg', 'México', 13, NULL, NULL, NULL),
(14, 'Santa Cruz', 'Estados Unidos', 'https://getlogovector.com/wp-content/uploads/2020/09/santa-cruz-bicycles-logo-vector.png', 'México', 14, NULL, NULL, NULL),
(15, 'Yeti', 'Estados Unidos', 'https://cdn11.bigcommerce.com/s-h4smy34w/product_images/uploaded_images/yeti-cycles-logo.png', 'México', 15, NULL, NULL, NULL),
(16, 'Pivot', 'Estados Unidos', 'https://theloamwolf.com/wp-content/uploads/2020/04/pivot_04_black-250x250.jpg', 'México', 16, NULL, NULL, '0000-00-00 00:00:00'),
(17, 'Canfield', 'Estados Unidos', NULL, 'México', 17, NULL, NULL, NULL),
(18, 'Ibis', 'Estados Unidos', NULL, 'México', 18, NULL, NULL, NULL),
(19, 'Norco', 'Canadá', NULL, 'México', 19, NULL, NULL, NULL),
(20, 'Rocky Mountain', 'Canadá', NULL, 'México', 20, NULL, NULL, NULL),
(27, 'paquitoooo', 'itaila', 'https://cdn.shopify.com/s/files/1/0685/3887/files/SCOTTLOGO_480x480.jpg?v=1628707794', 'japon', 1, NULL, NULL, '2023-11-16 12:45:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `idModelo` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Modalidad` varchar(50) NOT NULL,
  `Año` int(11) NOT NULL,
  `Gama` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`idModelo`, `Nombre`, `Modalidad`, `Año`, `Gama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trek Madone SLR 10', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(2, 'Specialized Tarmac SL7', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(3, 'Cannondale SuperSix EVO Hi-Mod', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(4, 'Giant Propel Advanced SL', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(5, 'Scott Addict RC 10', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(6, 'Orbea Orca Aero', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(7, 'BH Ultralight Evo', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(8, 'Merida Reacto Team', 'Carrera', 2023, 'Alta', NULL, NULL, NULL),
(9, 'Kross Vento 5.0', 'Carrera', 2023, 'Media', NULL, NULL, NULL),
(10, 'Canyon Aeroad CF SLX 8', 'Carrera', 2023, 'Media', NULL, NULL, NULL),
(11, 'Focus Izalco Max 8.0', 'Carrera', 2023, 'Media', NULL, NULL, NULL),
(12, 'Cube Litening C:68X 850', 'Carrera', 2023, 'Media', NULL, NULL, NULL),
(13, 'GT Grade Carbon Pro', 'Carrera', 2023, 'Media', NULL, NULL, NULL),
(14, 'Santa Cruz Blur TR CC', 'Montaña', 2023, 'Alta', NULL, NULL, NULL),
(15, 'Yeti SB150 TR', 'Montaña', 2023, 'Alta', NULL, NULL, NULL),
(16, 'Pivot Firebird 9 XTR', 'Montaña', 2023, 'Alta', NULL, NULL, NULL),
(17, 'Canfield Nimble 9 Carbon', 'Montaña', 2023, 'Alta', NULL, NULL, NULL),
(18, 'Ibis Ripley AF', 'Montaña', 2023, 'Alta', NULL, NULL, NULL),
(19, 'Norco Range C7', 'Montaña', 2023, 'Alta', NULL, NULL, NULL),
(20, 'Rocky Mountain Instinct C70', 'Montaña', 2023, 'Alta', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` tinyint(4) NOT NULL,
  `Perfil` varchar(20) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `Perfil`, `Descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'administrador', NULL, '2023-08-29 09:00:00', NULL, NULL),
(2, 'Cliente', NULL, '2023-08-29 09:00:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apell_Paterno` varchar(50) NOT NULL,
  `Pais` varchar(20) DEFAULT NULL,
  `Correo_Elec` varchar(50) NOT NULL,
  `Contraseña` varchar(150) NOT NULL,
  `Perfil` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Apell_Paterno`, `Pais`, `Correo_Elec`, `Contraseña`, `Perfil`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Javier', 'García', 'Mexico', 'www.JAvGarc.com', 'P@ssw0rd1', 1, '2023-08-29 00:00:00', NULL, NULL),
(2, 'Arleth', 'Vidal', 'Inglaterra', 'www.ArleVital.com', '12345Abc', 2, '2023-08-29 00:00:00', NULL, NULL),
(3, 'Pablo', 'Johnson', 'EE.UU', 'www.PabloTorr.com', 'SecurePass!', 2, '2023-08-29 00:00:00', NULL, NULL),
(4, 'Cristian', 'Rossi', 'Italia', 'www.CrissMendez.com', 'MySecretPass', 2, '2023-08-29 00:00:00', NULL, NULL),
(5, 'Carlos', 'Lee', 'Corea', 'www.CarloParra.com', '1qaz2wsx', 2, '2023-08-29 00:00:00', NULL, NULL),
(6, 'Karla', 'Patel', 'India', 'www.karlaMar.com', 'Passw0rd123', 2, '2023-08-29 00:00:00', NULL, NULL),
(7, 'Monica', 'Schmidt', 'Alemania', 'www.MonicA.com', 'StrongP@ss', 2, '2023-08-29 00:00:00', NULL, NULL),
(8, 'Azul', 'Lopez ', 'España', 'www.azulEsca.com', 'LetMeIn2020', 2, '2023-08-29 00:00:00', NULL, NULL),
(9, 'Frida', 'Ahmed', 'Egipto', 'www.FriddChavez.com', 'FakeP@ssw0rd', 2, '2023-08-29 00:00:00', NULL, NULL),
(10, 'Mauricio', 'Kim', 'Corea', 'www.MaurRamon.com', '0p3nSes@m3', 2, '2023-08-29 00:00:00', NULL, NULL),
(11, 'Guadalupe', 'Wang', 'China', 'www.LupeRoq.com', 'RainbowP@ss', 1, '2023-08-29 00:00:00', NULL, NULL),
(12, 'Moises', 'Mülle', 'Alemania', 'www.moyoCa.com', 'Ch@ngeMeNow', 2, '2023-08-29 00:00:00', NULL, NULL),
(13, 'Michel', 'Guzman', 'Mexico', 'www.MichezGum.com', 'Passw0rd!', 2, '2023-08-29 00:00:00', NULL, NULL),
(14, 'Vanesa', 'Garcia', 'España', 'www.vanessG.com', 'Ex@mpl3Pass', 2, '2023-08-29 00:00:00', NULL, NULL),
(15, 'Hector', 'Rodriguez', 'Mexico', 'www.HectRodri.com', '2BeOrNot2Be', 2, '2023-08-29 00:00:00', NULL, NULL),
(16, 'Joseline', 'Adams', 'Inglaterra', 'www.JosseLz.com', 'Sunshine1', 2, '2023-08-29 00:00:00', NULL, NULL),
(17, 'Raul', 'Perez', 'España', 'www.raulSAn.com', 'BlueSky#2023', 1, '2023-08-29 00:00:00', NULL, NULL),
(18, 'Sara', 'Sanchez', 'España', 'www.Saraby.com', 'P@ssw0rd2023', 1, '2023-08-29 00:00:00', NULL, NULL),
(19, 'Brenda', 'Torres', 'Torres', 'www.brent.com', 'Qwerty123', 2, '2023-08-29 00:00:00', NULL, NULL),
(20, 'Gillermo', 'Ramon', 'Mexico', 'www.GillermoRiv.com', '3456789iytfghj', 2, '2023-08-29 00:00:00', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  ADD PRIMARY KEY (`idBicicleta`),
  ADD KEY `idMarca` (`Marca`),
  ADD KEY `idModelo` (`Modelo`),
  ADD KEY `idComponentes` (`Componentes`),
  ADD KEY `idCaracteristicas` (`Caracteristicas`);

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`idCaracteristicas`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`idComponentes`);

--
-- Indices de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  ADD PRIMARY KEY (`idDistribuidor`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`),
  ADD KEY `idDistribuidor` (`Distribuidor`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idModelo`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Perfil` (`Perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `Nombre` (`Nombre`),
  ADD KEY `Perfil` (`Perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  MODIFY `idBicicleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `idCaracteristicas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `idComponentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  MODIFY `idDistribuidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idModelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bicicleta`
--
ALTER TABLE `bicicleta`
  ADD CONSTRAINT `idCaracteristicas` FOREIGN KEY (`Caracteristicas`) REFERENCES `caracteristicas` (`idCaracteristicas`),
  ADD CONSTRAINT `idComponentes` FOREIGN KEY (`Componentes`) REFERENCES `componentes` (`idComponentes`),
  ADD CONSTRAINT `idMarca` FOREIGN KEY (`Marca`) REFERENCES `marca` (`idMarca`),
  ADD CONSTRAINT `idModelo` FOREIGN KEY (`Modelo`) REFERENCES `modelo` (`idModelo`);

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `idDistribuidor` FOREIGN KEY (`Distribuidor`) REFERENCES `distribuidor` (`idDistribuidor`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Perfil`) REFERENCES `perfiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


select * from modelo;

select * from bicicleta;

select * from componentes;

select * from caracteristicas;