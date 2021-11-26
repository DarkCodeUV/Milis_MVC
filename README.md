# Milis_MVC

# DATABASE SETTINGS

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
-- Base de datos: `milis`
CREATE DATABASE milis;
use milis;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL DEFAULT '0',
  `ApellidoP` varchar(40) NOT NULL DEFAULT '0',
  `ApellidoM` varchar(40) NOT NULL DEFAULT '0',
  `Correo` varchar(40) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
-- Índices de la tabla 'cliente'

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);
 

-- AUTO_INCREMENT de la tabla `cliente`

ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL DEFAULT '0',
  `apellido` varchar(40) NOT NULL DEFAULT '0',
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `orden` varchar(150) NOT NULL,
  `precio` varchar(15) NOT NULL,
  `fecha_entrega` varchar(20) NOT NULL,
  `situacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Índices de la tabla 'pedidos'

ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT de la tabla `pedidos`

ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
