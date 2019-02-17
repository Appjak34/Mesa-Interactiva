-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-02-2019 a las 03:02:07
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Marca` text COLLATE utf8_spanish_ci NOT NULL,
  `Modelo` text COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Color` text COLLATE utf8_spanish_ci NOT NULL,
  `Lanzamiento` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `Imagen`, `Nombre`, `Precio`, `Marca`, `Modelo`, `Descripcion`, `Color`, `Lanzamiento`) VALUES
(1, 'motog7.jpeg', 'Moto G7', 5500, 'Motorola', 'XT1952-2', 'Experimenta el rendimiento súper rápido con el procesador Qualcomm® Snapdragon™ 632 octa-core que cuenta con 4GB de RAM y 64GB de ROM.\\r\\n\\r\\nPantalla\\r\\nLa pantalla Max Vision va más allá de las pantallas tradicionales, \\r\\nproporcionando una visualización máxima con formato 19: 9, \\r\\npara que te sientas inmerso en tus juegos y series favoritas.', 'Negro', 'El móvil saldrá a la venta en el mes de febrero del presente año'),
(2, 'galaxy-j2.jpeg', 'Galaxy J2', 2598, 'Samsung', 'SM-J200MZDAIUS', 'Pantalla\r\nSu pantalla de 4.7” ofrece gran claridad y es perfecta para cualquier contenido. La cámara trasera de 5 MP y f / 2.2 te permite capturar fotos y videos brillantes de gran calidad y sin ruido incluso en condiciones de poca luz.\r\n\r\n', 'Negro', 'Salió a la venta en el mes de febrero del 2018'),
(3, 'huawei-mate-20-lite.jpeg', 'Huawei P20 Lite', 5398, 'Huawei', 'P20 Lite', 'El Huawei P20 Lite es la variante lite de la nueva línea P de Huawei para el 2018. El P20 Lite tiene una pantalla de 5.84 pulgadas a 1080 x 2280 pixels de resolución, procesador Kirin 659, 4GB de RAM, cámara dual de 16 MP + 2 MP, cámara frontal de 16 MP, lector de huellas y batería de 3000 mAh. Características Principales Pantalla 5.84", 1080 x 2280 pixels Procesador Kirin 659 2.36GHz 4GB RAM 32GB, microSD Cámara: Dual, 16MP+2MP Batería: 3000 mAh OS: Android 8.0 Perfil: 7.4 mm Peso: 145 g', 'Negro, Azul, Rosa', 'Salió a la venta  el  4 de mayo del 2018'),
(4, 'samsung-galaxys9.jpeg', 'Galaxy S9', 11500, 'Samsung', 'SM-G9600', 'Diagonal de la pantalla: 14,7 cm (5.8") Resolución de la pantalla: 1440 x 2960 Pixeles Tipo de visualizador: SAMOLED Frecuencia del procesador: 2,7 GHz Capacidad de RAM: 4 GB La cámara. reimaginado. El galaxy S9 está repleto de características increíbles para ayudarle a hacer más de lo que nunca imaginó. Con una cámara de revolucionario que se adapta al igual que el ojo humano, prepárate para capturar su mundo como nunca antes. ', 'Negro, Gris, Lila', 'Salió a la venta  el  15 de marzo del 2018'),
(5, 'xiaomy-note5.jpeg', 'Xiaomy Note5', 3853, 'Xiaomi', 'RMI-N5-64GB-GLD', 'Xiaomi Redmi Note 5 está diseñado en perfecta simetría, es increíblemente delgado y elegante para una sensación cómoda de la mano. La esquina redondeada está especialmente diseñada para reducir el riesgo de daños en la pantalla al extender la fuerza a través de un área más grande. Redmi Note 5 funciona con Snapdragon 636, lo que mejora la vida útil general de su capacidad de 4000mAh en su Redmi Note 5.', 'Blanco, Gold', 'Salió a la venta  el  09 de noviembre del 2018'),
(6, 'iphone-xs.jpeg', 'Iphone X', 23999, 'Apple', 'A1901', 'Apple iPhone Xs 64 GB Gold, presentamos el iPhone Xs con pantalla Súper Retina. Face ID aún más rápido. El chip más inteligente y potente en un smartphone. Y un sistema de cámara dual revolucionario. El iPhone XS tiene todo lo que te gusta del iPhone, llevado al extremo.', 'Gris, Plata', 'Salió a la venta en el mes de septiembre del 2018'),
(7, 'xperia-l2.jpeg', 'Xperia L2', 6629, 'Sony', 'H3321', 'Las dimensiones del Sony Xperia L2 son: 78 mm de ancho, 150 mm de alto y 9,8 mm de grosor en su perfil, mientras que su peso es de 178 g.\r\n\r\nEn cuanto a características técnicas, el procesador del Sony Xperia L2 es un Mediatek MT6737T de 1 núcleos y con una velocidad de reloj de 1,5 GHz. En el apartado de memoria, contamos con 3 GB de memoria RAM, y 32 GB de memoria interna o de almacenamiento. La memoria de almacenamiento se puede ampliar vía microSD.', 'Negro, Rosa', 'Salió a la venta en el mes de mayo del 2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
