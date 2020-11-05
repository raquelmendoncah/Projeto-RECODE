-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2020 às 15:17
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`) VALUES
(1, 'Raquel', 'Olá mundo\"', '2020-11-03 15:28:06'),
(2, 'Nayara', 'BD Senior', '2020-11-03 15:59:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `valor_unitario` float NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `preco_final` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `categoria`, `descricao`, `imagem`, `preco`, `preco_final`) VALUES
(1, 'geladeira', 'Geladeira Brastemp', './Imagens/Geladeira 1.jpeg', '2500.00', '2000.00'),
(2, 'geladeira', 'Geladeira Eletrolux', './Imagens/Geladeira 2.jpeg', '3000.00', '2500.00'),
(3, 'microondas', 'Microondas Brastemp', './Imagens/Microondas 1.jpeg', '400.00', '300.00'),
(4, 'microondas', 'Microondas Eletrolux', './Imagens/Microondas 2.jpeg', '600.00', '500.00'),
(5, 'lava_loucas', 'Lava Louças Brastemp', './Imagens/Lava Loucas 1.jpeg', '1500.00', '1000.00'),
(6, 'lava_loucas', 'Lava Louças Eletrolux', './Imagens/Lava Loucas 2.jpeg', '800.00', '700.00'),
(7, 'maquina_de_lavar', 'Maquina de lavar Brastemp', './Imagens/Maquina de lavar 1.jpeg', '2000.00', '1500.00'),
(8, 'maquina_de_lavar', 'Maquina de lavar Eletrolux', './Imagens/Maquina de lavar 2.jpeg', '1500.00', '1000.00'),
(9, 'geladeira', 'Geladeira Consul', './Imagens/Geladeira Frost Free Brastemp Branca 375 litros.jpg', '3500.00', '3000.00'),
(10, 'maquina_de_lavar', 'Maquina de lavar Consul', './Imagens/Lavadora de Roupas Brastemp 11 kg com Turbo Performance Branca.jpg', '2000.00', '1500.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
