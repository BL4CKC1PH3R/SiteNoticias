-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2015 às 17:01
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `previa` varchar(100) DEFAULT NULL,
  `corpo` blob NOT NULL,
  `categoria` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `data_postagem` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `previa`, `corpo`, `categoria`, `autor`, `data_postagem`, `status`, `imagem`) VALUES
(3, 'Vayne is My Main', NULL, 0x3c703e54686973206973206d7920746578746172656120746f206265207265706c61636564207769746820434b456469746f722e3c2f703e, 1, 4, '2015-09-11', 'Ativo', 'noticias_img/e03081134f038d19d8fe1d45ec441cab.jpg'),
(4, 'Gustavo Ã© bixa', NULL, 0x3c6832207374796c653d22746578742d616c69676e3a2063656e7465723b223e3c7374726f6e673e4269786f6e61206269786120626978696e686120636f636f266e6273703b3c2f7374726f6e673e3c2f68323e, 1, 4, '2015-09-11', 'Ativo', 'noticias_img/5d64d49f0100a7ab51deeac8361975cf.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
