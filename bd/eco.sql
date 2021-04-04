-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Mar-2020 às 15:00
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `titulo_morada` varchar(100) NOT NULL,
  `texto_morada` text NOT NULL,
  `titulo_email` varchar(100) NOT NULL,
  `email_um` varchar(250) NOT NULL,
  `email_dois` varchar(250) NOT NULL,
  `titulo_contacto` varchar(100) NOT NULL,
  `contacto_um` varchar(250) NOT NULL,
  `contacto_dois` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `titulo`, `titulo_morada`, `texto_morada`, `titulo_email`, `email_um`, `email_dois`, `titulo_contacto`, `contacto_um`, `contacto_dois`) VALUES
(1, 'Contactos', 'Morada', 'Rua da Liberdade 4, 2565 Matacães, Portugal', 'Email', 'info@sefo.pt', 'email 2 ', 'Contactos', '87487874573 1', '83745873487 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa`
--

CREATE TABLE `equipa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `equipa`
--

INSERT INTO `equipa` (`id`, `titulo`, `texto`) VALUES
(1, 'Equipa', 'A nossa equipa de colaboradores do Eco-Escolas aqui na ESCO.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `titulo`, `texto`) VALUES
(1, 'Galeria', 'Com esta galeria pretende-mos mostrar-vos algumas fotos da ESCO.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery`
--

CREATE TABLE `gallery` (
  `idGallery` int(11) NOT NULL,
  `titleGallery` longtext NOT NULL,
  `descGallery` longtext NOT NULL,
  `imgFullNameGallery` longtext NOT NULL,
  `orderGallery` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `gallery`
--

INSERT INTO `gallery` (`idGallery`, `titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`) VALUES
(32, 'dog', 'apenas dogs', 'dog.5e5d0893afc749.61021687.jpg', '3'),
(45, 'dog 2', 'apenas dogs', 'dog.5e6ce811b95e02.57664783.jpg', '2'),
(46, 'dog', 'apenas cães', 'dog.5e6cf2be2f18f9.18568295.jpg', '3'),
(47, 'juba', 'juba preto', 'dogs.5e6fcc94b60500.71138706.jpg', '4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `sub_titulo` varchar(100) NOT NULL,
  `sub_texto` text NOT NULL,
  `sub_titulo_secundario` varchar(100) NOT NULL,
  `sub_texto_secundario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `inicio`
--

INSERT INTO `inicio` (`id`, `titulo`, `texto`, `sub_titulo`, `sub_texto`, `sub_titulo_secundario`, `sub_texto_secundario`) VALUES
(1, 'Sobre Nós ', 'Com este website pretendemos mostrar as atividade da ESCO e promover a sustentabilidade em cada um de nós.', 'ESCO', 'ESCO é uma escola em Torres Vedras com cursos profissionais com equivalência a 12ªano.', 'ECO-Escolas', 'É um programa internacional desenvolvido em Portugal desde 1996, pretende encorajar ações e reconhecer o trabalho de qualidade desenvolvido pela escola.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`) VALUES
(35, 'Anúncio COVID-19', 'A esco informa que todas as aulas presencias estão encerradas até novas orientações. Mas os alunos têm que continuar a manter o contacto com os professores para receberem trabalhos, para equivaler a horas de módulo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planoacao`
--

CREATE TABLE `planoacao` (
  `id` int(11) NOT NULL,
  `titulo_atividade_um` varchar(100) NOT NULL,
  `texto_atividade_um` text NOT NULL,
  `topico_atividade_um` varchar(100) NOT NULL,
  `titulo_atividade_dois` varchar(100) NOT NULL,
  `texto_atividade_dois` text NOT NULL,
  `topico_atividade_dois` varchar(100) NOT NULL,
  `titulo_atividade_tres` varchar(100) NOT NULL,
  `texto_atividade_tres` text NOT NULL,
  `topico_atividade_tres` varchar(100) NOT NULL,
  `titulo_atividade_quatro` varchar(100) NOT NULL,
  `texto_atividade_quatro` text NOT NULL,
  `topico_atividade_quatro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `planoacao`
--

INSERT INTO `planoacao` (`id`, `titulo_atividade_um`, `texto_atividade_um`, `topico_atividade_um`, `titulo_atividade_dois`, `texto_atividade_dois`, `topico_atividade_dois`, `titulo_atividade_tres`, `texto_atividade_tres`, `topico_atividade_tres`, `titulo_atividade_quatro`, `texto_atividade_quatro`, `topico_atividade_quatro`) VALUES
(1, 'Projeto Livra-te', 'Com o objetivo de recolher 300 manuais escolares para troca', 'Troca de livros', 'Corta Mato da Esco', 'Envolver os melhores 20 alunos da escola', 'Atividade Desportiva', 'Conselho Eco-Escolas', 'Onde se realizam 2 auditorias ambientais.', 'Reunião Eco-Escolas', 'Cabazes solidários', ' Cabazes solidários, para recolher alimentos para dar a famílias mais necessitadas.', 'Recolha de alimentos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` text NOT NULL,
  `titulo_secundario` varchar(150) NOT NULL,
  `texto_secundario` text NOT NULL,
  `titulo_terceiro` varchar(150) NOT NULL,
  `texto_terceiro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `texto`, `titulo_secundario`, `texto_secundario`, `titulo_terceiro`, `texto_terceiro`) VALUES
(1, 'titulo 1', 'o martim é martimebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre e', 'titulo 2', 'o senhor e parvoebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre eebsite pretednemos falar sobre eco escolasNos somos da falar sobre e', 'titulo 3', 'texto 3 falar sobre eco escolasNos somos da RESCO E COM ESTE website pretednemos falar sobre eco escolasNos somos da falar sobre eco escolasNos somos da RESCO E COM ESTE website pretednemos falar sobre eco escolasNos somos da falar sobre eco escolasNos somos da RESCO E COM ESTE website pretednemos falar sobre eco escolasNos somos da falar sobre eco escolasNos somos da RESCO E COM ESTE website pretednemos falar sobre eco escolasNos somos da falar sobre eco escolasNos somos da RESCO E COM ESTE website pretednemos falar sobre eco escolasNos somos da');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `nome`, `email`, `password`) VALUES
(1, 'Exemplo', 'exemplo@exemplo.com', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipa`
--
ALTER TABLE `equipa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idGallery`);

--
-- Índices para tabela `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planoacao`
--
ALTER TABLE `planoacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `equipa`
--
ALTER TABLE `equipa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idGallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `planoacao`
--
ALTER TABLE `planoacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
