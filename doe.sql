-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Abr-2022 às 00:20
-- Versão do servidor: 5.7.37-log
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Roupa, Mesa e Banho'),
(2, 'Calçados'),
(3, 'Produtos de Higiene'),
(4, 'Brinquedos'),
(5, 'Móveis e Eletrodomésticos'),
(6, 'Utensílios'),
(7, 'Eletrônicos'),
(8, 'Itens infantis'),
(9, 'Alimentos/Cesta Básica'),
(10, 'Materiais de Construção'),
(11, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_donativo`
--

DROP TABLE IF EXISTS `tb_donativo`;
CREATE TABLE IF NOT EXISTS `tb_donativo` (
  `id_donativo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_donativo` varchar(80) NOT NULL,
  `descricao_donativo` varchar(300) NOT NULL,
  `qtdeItem` int(11) NOT NULL,
  `entregaSouN` varchar(80) NOT NULL,
  `novo_usado` varchar(80) NOT NULL,
  `fotoDonativo` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_donativo`),
  KEY `fk_email` (`email`),
  KEY `fk_id_categoria` (`id_categoria`),
  KEY `id_donativo` (`id_donativo`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_donativo`
--

INSERT INTO `tb_donativo` (`id_donativo`, `nome_donativo`, `descricao_donativo`, `qtdeItem`, `entregaSouN`, `novo_usado`, `fotoDonativo`, `email`, `id_categoria`) VALUES
(75, 'Calça', '  Jeans', 1, 'SN', 'Usado', 'jeans.png', 'carlinha@gmail.com', 1),
(76, 'camisa', 'Colorida', 1, 'SN', 'Novo', 'camisacorolorida.png', 'carlinha@gmail.com', 1),
(77, 'Camiseta', 'Palmeiras', 1, 'N', 'Usado', 'palmeiras.png', 'soares@gmail.com', 1),
(78, 'Microondas', 'Electrolux', 1, 'S', 'Usado', 'microondas.png', 'paulo@hotmail.com', 5),
(79, 'Tv', 'de tubo', 1, 'S', 'Usado', 'tvtubo.png', 'paulo@hotmail.com', 5),
(80, 'Sofá', 'marrom', 1, 'N', 'Usado', 'sofavelho.png', 'paulo@hotmail.com', 5),
(81, 'Talheres', 'tramontina', 1, 'S', 'Usado', 'talheres.png', 'paulo@hotmail.com', 6),
(82, 'Sapato', 'amarelo', 1, 'N', 'Usado', 'sapatoamarelo.png', 'carlinha@gmail.com', 2),
(83, 'Armário', 'branco', 1, 'N', '', 'armario.png', 'carlinha@gmail.com', 5),
(86, 'Boneca', 'de pano ', 1, 'N', 'Usado', 'boneca.png', 'carlinha@gmail.com', 4),
(87, 'Sandália', 'cor de rosa', 1, 'S', 'Usado', 'sapatorosa.png', 'susana_lima@gmail.com', 2),
(88, 'Camisa', 'social', 3, 'S', 'Usado', 'roupas.png', 'susana_lima@gmail.com', 1),
(89, 'Creme dental', 'Close up', 5, 'S', 'Novo', 'pasta.png', 'susana_lima@gmail.com', 3),
(90, 'Escova de dentes', 'Colgate', 4, 'S', 'Novo', 'escovadentes.png', 'susana_lima@gmail.com', 3),
(91, 'Papel higiênico', 'Personal', 2, 'S', 'Novo', 'papel.png', 'susana_lima@gmail.com', 3),
(92, 'Cesta básica', 'diversos produtos', 2, 'S', 'Novo', 'cesta.png', 'susana_lima@gmail.com', 9),
(93, 'Tênis', 'Vermelho', 1, 'N', 'Usado', 'tenis.png', 'soares@gmail.com', 2),
(94, 'Sapato social', 'preto', 1, 'N', 'Usado', 'social.png', 'soares@gmail.com', 2),
(95, 'Bola', ' de futebol', 1, 'N', 'Usado', 'futebol.png', 'cami@gmail.com', 4),
(96, 'Jogo', 'Monopoly', 1, 'N', 'Usado', 'monopoly.png', 'cami@gmail.com', 4),
(97, 'Tablet Samsung', 'preto', 1, 'N', 'Novo', 'tablet.png', 'cami@gmail.com', 7),
(98, 'mamadeira', 'desenho girafa', 1, 'N', 'Usado', 'mamadeira.png', 'cami@gmail.com', 8),
(99, 'Leite em pó', 'Nestle', 6, 'N', 'Novo', 'leite.png', 'cami@gmail.com', 8),
(100, 'Ração Cachorro', 'raças médio e grande porte', 2, 'N', 'Novo', 'racaodog.png', 'cami@gmail.com', 11),
(101, 'Kit ferramentas', 'Tramontina', 1, 'S', 'Usado', 'ferramentas.png', 'sampaio@gmail.com', 10),
(102, 'Pula Pirata', 'marca estrela', 1, '', 'Novo', 'pirata.png', 'cami@gmail.com', 4),
(103, 'Pratos', 'Conjuntos cinza', 6, '', '', 'pratos.png', 'cami@gmail.com', 6),
(104, 'Panelas', 'Conjunto preto', 1, 'N', 'Usado', 'panelas.png', 'cami@gmail.com', 6),
(105, 'Sabão Líquido', 'Omo', 2, 'S', 'Novo', 'omo.png', 'susana_lima@gmail.com', 3),
(106, 'Pendrive', 'SandDisk 32gb', 1, 'S', 'Usado', 'pendrive.png', 'susana_lima@gmail.com', 7),
(107, 'Monitor Computador', 'Samsung', 1, 'S', 'Usado', 'monitor.png', 'susana_lima@gmail.com', 7),
(108, 'Impressora', 'HP antiga', 1, 'SN', 'Usado', 'impressora.png', 'paulo@hotmail.com', 7),
(110, 'Kit berço', 'cor de rosa', 1, 'SN', 'Novo', 'berco.png', 'cami@gmail.com', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(24) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `dica` varchar(60) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`nome`, `sobrenome`, `cep`, `email`, `telefone`, `senha`, `dica`) VALUES
('Camila', 'Rodrigues', '88080900', 'cami@gmail.com', '48-98813-3665', '303030', 'filme'),
('Carla', 'Tavares', '88010003', 'carlinha@gmail.com', '4899360808', '1989', 'casa'),
('projeto', 'doe', '88036570', 'doeprojetodoe@gmail.com', '48-98989-7755', 'ifscifsc', 'Curso'),
('Maria', 'Pimental', '88036000', 'maria@gmail.com', '48-99888-7777', '777777', 'dog'),
('Paulo', 'Thieves', '88025500', 'paulo@hotmail.com', '47-99636-363', '101010', 'dog'),
('ramon', 'facchin', '88101000', 'ramon@gmail.com', '48-99999-8888', 'pudimgostoso', 'cachorro'),
('Pedro', 'Sampaio', '88085200', 'sampaio@gmail.com', '48-99996-1616', '404040', 'familia'),
('Roberto', 'Soares', '88044566', 'soares@gmail.com', '47988653464', '1234', 'cachorro'),
('Susana', 'de Lima', '88040001', 'susana_lima@gmail.com', '48-99961-5588', '202020', 'numeros');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
