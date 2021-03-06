-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 02-03-2014 a les 11:56:46
-- Versió del servidor: 5.6.12-log
-- Versió de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Estructura de la taula `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria` char(1) NOT NULL,
  `preu` float NOT NULL,
  PRIMARY KEY (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `categoria`
--

INSERT INTO `categoria` (`categoria`, `preu`) VALUES
('A', 300),
('B', 200),
('C', 100);

-- --------------------------------------------------------

--
-- Estructura de la taula `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `nif` varchar(9) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `cognom` varchar(30) NOT NULL,
  `activat` tinyint(1) NOT NULL,
  PRIMARY KEY (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `client`
--

INSERT INTO `client` (`nif`, `nom`, `cognom`, `activat`) VALUES
('00000000T', 'Sergio', 'Arteaga', 0),
('41511058Z', 'Joaquim', 'Nadal', 0),
('49830939J', 'Joaquin', 'Martinez', 0),
('53127437J', 'David', 'Arteaga', 0),
('97626643S', 'David', 'Martin', 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `habitacio`
--

CREATE TABLE IF NOT EXISTS `habitacio` (
  `numHabitacio` int(11) NOT NULL,
  `categoria` varchar(1) NOT NULL,
  PRIMARY KEY (`numHabitacio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `habitacio`
--

INSERT INTO `habitacio` (`numHabitacio`, `categoria`) VALUES
(101, 'C'),
(102, 'B'),
(103, 'B'),
(104, 'B'),
(105, 'A'),
(106, 'A'),
(201, 'C'),
(202, 'B'),
(203, 'B'),
(204, 'A');

-- --------------------------------------------------------

--
-- Estructura de la taula `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `habitacio` int(11) NOT NULL,
  `nifClient` varchar(9) NOT NULL,
  `dataEntrada` date NOT NULL,
  `dataSortida` date NOT NULL,
  `activa` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Bolcant dades de la taula `reserva`
--

INSERT INTO `reserva` (`id`, `habitacio`, `nifClient`, `dataEntrada`, `dataSortida`, `activa`) VALUES
(1, 101, '53127437J', '2014-04-01', '2014-04-02', 1),
(2, 103, '00000000T', '2014-04-16', '2014-04-17', 0),
(3, 202, '49830939J', '2014-03-01', '2014-03-02', 0),
(4, 101, '00000000T', '2014-02-18', '2014-02-20', 1),
(9, 106, '53127437J', '2014-03-19', '2014-03-22', 1),
(10, 204, '97626643S', '2014-03-02', '2014-03-05', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `contrasenya` varchar(100) NOT NULL,
  `nivellAcces` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Bolcant dades de la taula `usuaris`
--

INSERT INTO `usuaris` (`id`, `dni`, `nom`, `contrasenya`, `nivellAcces`) VALUES
(2, '87654321A', 'recepcionista1', '098ec1a1e2d910c82c6b6bc569d00e6d', 2),
(3, '12345678A', 'admin', 'bcc67d8524948bbd873e4df12c89b182', 1),
(4, '2', 'recepcionista2', 'c81e728d9d4c2f636f067f89cc14862c', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
