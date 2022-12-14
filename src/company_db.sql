-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 05/12/2022 às 03:55
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `company_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidates_vacancy`
--

CREATE TABLE `candidates_vacancy` (
  `id` int NOT NULL,
  `id_job` int NOT NULL,
  `id_user` int NOT NULL,
  `points` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `candidates_vacancy`
--

INSERT INTO `candidates_vacancy` (`id`, `id_job`, `id_user`, `points`) VALUES
(1, 10, 7, 5),
(2, 5, 7, 5),
(3, 10, 2, 5),
(4, 1, 2, 5),
(5, 5, 2, 5),
(6, 2, 5, 5),
(7, 10, 5, 5),
(8, 1, 5, 5),
(9, 10, 6, 1),
(10, 8, 6, 1),
(11, 12, 6, 1),
(12, 12, 4, 10),
(13, 12, 7, 5),
(14, 12, 5, 5),
(15, 12, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrers_focus`
--

CREATE TABLE `carrers_focus` (
  `id_carrer` int NOT NULL,
  `name_carrer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `carrers_focus`
--

INSERT INTO `carrers_focus` (`id_carrer`, `name_carrer`) VALUES
(1, 'Back-End'),
(2, 'Front-End'),
(3, 'Full Stack'),
(4, 'Mobile');

-- --------------------------------------------------------

--
-- Estrutura para tabela `english_levels`
--

CREATE TABLE `english_levels` (
  `id_english` int NOT NULL,
  `name_english` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `english_levels`
--

INSERT INTO `english_levels` (`id_english`, `name_english`) VALUES
(1, 'Básico'),
(2, 'Intermediário'),
(3, 'Avançado'),
(4, 'Fluente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `experience_levels`
--

CREATE TABLE `experience_levels` (
  `id_experience` int NOT NULL,
  `name_experience` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `experience_levels`
--

INSERT INTO `experience_levels` (`id_experience`, `name_experience`) VALUES
(1, 'Júnior'),
(2, 'Pleno'),
(3, 'Sênior');

-- --------------------------------------------------------

--
-- Estrutura para tabela `rh_jobs`
--

CREATE TABLE `rh_jobs` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `office` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `english_level` int NOT NULL,
  `experience_level` int NOT NULL,
  `carrer_focus` int NOT NULL,
  `local` varchar(100) NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `job_image` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `rh_jobs`
--

INSERT INTO `rh_jobs` (`id`, `name`, `office`, `description`, `salary`, `english_level`, `experience_level`, `carrer_focus`, `local`, `active`, `job_image`) VALUES
(1, 'Analista de Sistemas Automatizados', 'Desenvolvedor Python', 'Uma vaga para auxílio de desenvolvimento de automações e focado para realizar regras de negócios entre os clientes e aplicações.', '10000.00', 2, 2, 1, 'Remoto', 1, '0511221667673034farunk.jpg'),
(2, 'Desenvolvedor de Sistemas Web', 'Programador', 'Uma vaga para desenvolvimento de sites. Tenho um conhecimento breve em conceitos básicos de tela de usuário.', '15000.00', 3, 3, 3, 'Remoto', 1, ''),
(5, 'Desenvolvedor Node.js', 'Desenvolvedor Pleno II', 'Uma vaga para desenvolvedor de sistemas web, onde faça integrações com APIs / REST / SOAP e que entenda conceitos de metodologia ágil.', '6000.00', 2, 2, 1, 'Remoto', 1, '0511221667676182loguinho.jpg'),
(8, 'Analista Desenvolvedor PHP', 'Programador PHP', 'Uma vaga para desenvolvedor PHP, onde se destaque no desenvolvimento full-stack e tenha uma ótima comunicação em inglês.', '15000.00', 3, 3, 3, 'Remoto', 1, '0511221667676661nameimage.jpg'),
(10, 'Analista de Dados', 'Desenvolvedor Python', 'Vaga focada para fazer pesquisas e análises em cima da base dados da empresa, trazendo comparações melhores resultados a partir dos dados.', '9000.00', 3, 3, 1, 'Remoto', 1, '0412221670116738mercedez.png'),
(12, 'Desenvolvedor de Plataformas Web', 'Desenvolvedor Web', 'Vaga focada para desenvolvimento de nossa plataforma web. Saber metodologias ágeis e ter boa comunicação para participação de reuniões.', '8000.00', 2, 3, 3, 'Remoto', 1, '0412221670117084mercado_livre.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `rh_jobs_skills`
--

CREATE TABLE `rh_jobs_skills` (
  `id` int NOT NULL,
  `id_job` int NOT NULL,
  `skill_id` int NOT NULL,
  `skill_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `rh_jobs_skills`
--

INSERT INTO `rh_jobs_skills` (`id`, `id_job`, `skill_id`, `skill_level`) VALUES
(3, 2, 2, 1),
(4, 2, 4, 1),
(46, 5, 1, 1),
(47, 5, 2, 2),
(48, 5, 4, 4),
(52, 8, 4, 4),
(53, 8, 3, 3),
(54, 8, 2, 2),
(55, 1, 1, 2),
(56, 1, 2, 3),
(57, 1, 4, 4),
(61, 10, 1, 4),
(62, 10, 3, 4),
(63, 10, 4, 2),
(67, 12, 3, 3),
(68, 12, 2, 4),
(69, 12, 4, 2),
(70, 12, 14, 2),
(71, 12, 13, 4),
(72, 12, 12, 3),
(73, 10, 12, 3),
(74, 10, 11, 3),
(75, 10, 19, 2),
(76, 10, 14, 3),
(77, 10, 13, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `select_job_users`
--

CREATE TABLE `select_job_users` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `job_id` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `avaliation` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(1, 'Python'),
(2, 'JavaScript'),
(3, 'SQL'),
(4, 'Docker'),
(5, 'Node.js'),
(6, 'Angular'),
(7, 'Vue.js'),
(8, 'Bootstrap'),
(9, 'PHP'),
(10, 'MySQL'),
(11, 'PostgreSQL'),
(12, 'AWS'),
(13, 'Java'),
(14, 'Kotlin'),
(15, 'C#'),
(16, 'C++'),
(17, 'React.js'),
(18, 'RabbitMQ'),
(19, 'Kafka'),
(20, 'Django');

-- --------------------------------------------------------

--
-- Estrutura para tabela `talent_bank`
--

CREATE TABLE `talent_bank` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `job_id` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `avaliation` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `type_permission` int DEFAULT '3',
  `create_date` datetime NOT NULL,
  `accept_terms` tinyint(1) NOT NULL,
  `phone_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `url_linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `url_cloud` varchar(255) DEFAULT NULL,
  `user_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `user_image` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `first_name`, `last_name`, `email`, `birth_date`, `type_permission`, `create_date`, `accept_terms`, `phone_number`, `url_linkedin`, `url_cloud`, `user_description`, `user_image`, `status`) VALUES
(1, 'pedro_link', 'e10adc3949ba59abbe56e057f20f883e', 'Pedro', 'Link', 'pedrohplink@gmail.com', '2000-06-15', 1, '2022-08-30 18:53:39', 1, '(54) 9 9155-7639', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'Desenvolvedor a mais de 4 anos, com experiência em análise, desenvolvimento e métodos ágeis, trabalhando atualmente com (Python, Vue.js, JavaScript, Django, Flask, Docker, MySQL, Postgres). Ótima técnica em comunicação, pro atividade, determinação, engajamento e aprendizado rápido. Criativo, atencioso e sempre busco inovar para o crescimento profissional, empresarial e pessoal. Sempre disposto a contribuir e ser retribuído com o conhecimento dos demais colegas da área visando criar um bom ambiente de trabalho. Estou sempre disposto a entregar as demandas com agilidade e qualidade. Para meu foco de crescimento atual, estou buscando estar engajado dentro de atividades para o desenvolvimento Backend.', '0211221667360829profile.jpg', 1),
(2, 'matheus_vizzoto', 'e10adc3949ba59abbe56e057f20f883e', 'Matheus', 'Vizzoto', 'matheus_vizzoto@gmail.com', '1978-11-07', 3, '2022-11-07 19:04:14', 1, '54 9 9155-7639', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'Nota-se que, no trecho escrito pela poeta, o termo liberdade é relacionado ao trecho descritivo uma palavra que o sonho humano alimenta, não há ninguém que explique e ninguém que não entenda, por meio do verbo ser flexionado na 3 pessoa do singular.', '0811221667874396pexels-bruno-salvadori-2269872.jpg', 1),
(3, 'joao_fuzinno', 'e10adc3949ba59abbe56e057f20f883e', 'João', 'Fuzinno', 'joao_fuzinno@gmail.com', '1995-09-05', 3, '2022-12-04 01:11:48', 1, '54 9 9232-3212', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'Descrição', '0412221670118446pexels-simon-robben-614810.jpg', 1),
(4, 'kaio_colla', 'e10adc3949ba59abbe56e057f20f883e', 'Kaio', 'Colla', 'kaio_colla@hotmail.com', '1987-07-06', 3, '2022-12-04 01:12:15', 1, '54 9 9675-2312', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'Desenvolvedor a mais de 4 anos, com experiência em análise, desenvolvimento e métodos ágeis, trabalhando atualmente com (Python, Vue.js, JavaScript, Django, Flask, Docker, MySQL, Postgres). Ótima técnica em comunicação, pro atividade, determinação, engajamento e aprendizado rápido. Criativo, atencioso e sempre busco inovar para o crescimento profissional, empresarial e pessoal. Sempre disposto a contribuir e ser retribuído com o conhecimento dos demais colegas da área visando criar um bom ambiente de trabalho. Estou sempre disposto a entregar as demandas com agilidade e qualidade. Para meu foco de crescimento atual, estou buscando estar engajado dentro de atividades para o desenvolvimento Backend.', '0412221670118840pexels-moksh-sethi-4052800.jpg', 1),
(5, 'andressa_trandia', 'e10adc3949ba59abbe56e057f20f883e', 'Andressa', 'Trandia', 'andressa_trandia@gmail.com', '1993-08-15', 3, '2022-12-04 01:12:48', 1, '45 9 9432-4312', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'Descrição', '0412221670119021pexels-đỗ-ngọc-tú-quyên-1520760.jpg', 1),
(6, 'joana_castilho', 'e10adc3949ba59abbe56e057f20f883e', 'Joana', 'Castilho', 'joana_castilho@outlook.com', '1999-03-06', 3, '2022-12-04 01:13:13', 1, '', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'Descrição', '0512221670212165joana.png', 1),
(7, 'gustavo_dalesco', 'e10adc3949ba59abbe56e057f20f883e', 'Gustavo', 'Dalesco', 'gu_dalesco@gmail.com', '1996-01-01', 3, '2022-12-04 01:13:37', 1, '54991557633', 'https://www.linkedin.com/in/pedro-link-745565171/', 'https://github.com/pedrolink', 'descri', '0412221670119300pexels-yuri-manei-3190334.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user_address`
--

CREATE TABLE `user_address` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cep` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `district` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `address`, `city`, `cep`, `state`, `district`) VALUES
(1, 1, 'Rua Joaquim Brasil Cabral', 'Erechim', '99700420', 'Rio Grande do Sul', 'Centro'),
(2, 2, 'Rua Aratiba', 'Erechim', '99700560', 'Rio Grande do Sul', 'Villa Oeste'),
(3, 3, 'Rua Malderino Vieira', 'Sananduva', '99800567', 'Rio Grande do Sul', 'Malderino'),
(4, 4, 'Rua Village Supino', 'Erechim', '99700567', 'Rio Grande do Sul', 'Centro'),
(5, 5, 'Rua Madallo Simpla', 'São Paulo', '99323432', 'São Paulo', 'Centro'),
(6, 6, 'Rua Falafos', 'Getúlio', '99800343', 'Rio Grande do Sul', 'Centro'),
(7, 7, 'Rua Kalico Bendito', 'Erechim', '99700420', 'Rio Grande do Sul', 'Centro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user_experience`
--

CREATE TABLE `user_experience` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `carrer_focus` int DEFAULT NULL,
  `experience_level` int DEFAULT NULL,
  `english_level` int DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `user_experience`
--

INSERT INTO `user_experience` (`id`, `user_id`, `carrer_focus`, `experience_level`, `english_level`, `salary`) VALUES
(1, 1, 1, 2, 2, '5000.00'),
(2, 2, 1, 3, 3, '5000.00'),
(3, 3, 1, 2, 2, '5000.00'),
(4, 4, 3, 3, 3, '7000.00'),
(5, 5, 3, 3, 3, '10000.00'),
(6, 6, 4, 1, 1, '3000.00'),
(7, 7, 1, 2, 3, '6000.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user_permissons`
--

CREATE TABLE `user_permissons` (
  `id` int NOT NULL,
  `id_permission` int NOT NULL,
  `name_permission` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `user_permissons`
--

INSERT INTO `user_permissons` (`id`, `id_permission`, `name_permission`) VALUES
(1, 1, 'Admin'),
(2, 2, 'Funcionário'),
(3, 3, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user_skills`
--

CREATE TABLE `user_skills` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `skill_id` int NOT NULL,
  `skill_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `user_skills`
--

INSERT INTO `user_skills` (`id`, `user_id`, `skill_id`, `skill_level`) VALUES
(1, 1, 1, 5),
(2, 1, 3, 4),
(10, 2, 1, 5),
(11, 2, 2, 5),
(12, 2, 3, 5),
(13, 1, 4, 4),
(22, 1, 2, 4),
(23, 3, 7, 3),
(24, 3, 9, 4),
(25, 3, 2, 4),
(26, 3, 6, 2),
(27, 3, 12, 1),
(28, 3, 17, 1),
(29, 3, 19, 1),
(30, 4, 7, 4),
(31, 4, 17, 3),
(35, 4, 12, 3),
(36, 5, 6, 4),
(37, 5, 15, 2),
(38, 5, 14, 2),
(39, 5, 7, 5),
(40, 5, 17, 4),
(41, 5, 12, 3),
(42, 5, 5, 1),
(43, 6, 15, 1),
(44, 6, 4, 1),
(45, 6, 7, 2),
(46, 6, 3, 1),
(47, 7, 14, 3),
(48, 7, 13, 3),
(49, 7, 5, 2),
(50, 7, 4, 4),
(51, 7, 1, 5),
(52, 7, 12, 3),
(53, 7, 20, 3),
(54, 7, 9, 2),
(58, 4, 14, 5),
(59, 4, 13, 5),
(60, 4, 3, 5),
(61, 4, 2, 5),
(62, 4, 4, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `candidates_vacancy`
--
ALTER TABLE `candidates_vacancy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`id_user`),
  ADD KEY `job_id` (`id_job`);

--
-- Índices de tabela `carrers_focus`
--
ALTER TABLE `carrers_focus`
  ADD KEY `id_carrer` (`id_carrer`);

--
-- Índices de tabela `english_levels`
--
ALTER TABLE `english_levels`
  ADD KEY `id` (`id_english`);

--
-- Índices de tabela `experience_levels`
--
ALTER TABLE `experience_levels`
  ADD KEY `id_experience` (`id_experience`);

--
-- Índices de tabela `rh_jobs`
--
ALTER TABLE `rh_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rh_english_level` (`english_level`),
  ADD KEY `rh_carrer_focus` (`carrer_focus`),
  ADD KEY `rh_experience_level` (`experience_level`);

--
-- Índices de tabela `rh_jobs_skills`
--
ALTER TABLE `rh_jobs_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job` (`id_job`),
  ADD KEY `skill` (`skill_id`);

--
-- Índices de tabela `select_job_users`
--
ALTER TABLE `select_job_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `select_user_id` (`user_id`),
  ADD KEY `select_job_id` (`job_id`);

--
-- Índices de tabela `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `talent_bank`
--
ALTER TABLE `talent_bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_talent_bank` (`user_id`),
  ADD KEY `job_talent_bank` (`job_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user` (`type_permission`);

--
-- Índices de tabela `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_address_cascade` (`user_id`);

--
-- Índices de tabela `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_experience_cascade` (`user_id`),
  ADD KEY `user_english_level` (`english_level`),
  ADD KEY `carrer_focus` (`carrer_focus`),
  ADD KEY `experience_level` (`experience_level`);

--
-- Índices de tabela `user_permissons`
--
ALTER TABLE `user_permissons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_permission` (`id_permission`) USING BTREE;

--
-- Índices de tabela `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_skill` (`skill_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidates_vacancy`
--
ALTER TABLE `candidates_vacancy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `rh_jobs`
--
ALTER TABLE `rh_jobs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `rh_jobs_skills`
--
ALTER TABLE `rh_jobs_skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `select_job_users`
--
ALTER TABLE `select_job_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `talent_bank`
--
ALTER TABLE `talent_bank`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user_permissons`
--
ALTER TABLE `user_permissons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `user_skills`
--
ALTER TABLE `user_skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `candidates_vacancy`
--
ALTER TABLE `candidates_vacancy`
  ADD CONSTRAINT `job_id` FOREIGN KEY (`id_job`) REFERENCES `rh_jobs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Restrições para tabelas `rh_jobs`
--
ALTER TABLE `rh_jobs`
  ADD CONSTRAINT `rh_carrer_focus` FOREIGN KEY (`carrer_focus`) REFERENCES `carrers_focus` (`id_carrer`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rh_english_level` FOREIGN KEY (`english_level`) REFERENCES `english_levels` (`id_english`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rh_experience_level` FOREIGN KEY (`experience_level`) REFERENCES `experience_levels` (`id_experience`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Restrições para tabelas `rh_jobs_skills`
--
ALTER TABLE `rh_jobs_skills`
  ADD CONSTRAINT `job` FOREIGN KEY (`id_job`) REFERENCES `rh_jobs` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `skill` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Restrições para tabelas `select_job_users`
--
ALTER TABLE `select_job_users`
  ADD CONSTRAINT `select_job_id` FOREIGN KEY (`job_id`) REFERENCES `rh_jobs` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `select_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Restrições para tabelas `talent_bank`
--
ALTER TABLE `talent_bank`
  ADD CONSTRAINT `job_talent_bank` FOREIGN KEY (`job_id`) REFERENCES `rh_jobs` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_talent_bank` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `permission_user` FOREIGN KEY (`type_permission`) REFERENCES `user_permissons` (`id_permission`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Restrições para tabelas `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_cascade` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `user_experience`
--
ALTER TABLE `user_experience`
  ADD CONSTRAINT `user_carrer_focus` FOREIGN KEY (`carrer_focus`) REFERENCES `carrers_focus` (`id_carrer`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_english_level` FOREIGN KEY (`english_level`) REFERENCES `english_levels` (`id_english`),
  ADD CONSTRAINT `user_experience_cascade` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_experience_level` FOREIGN KEY (`experience_level`) REFERENCES `experience_levels` (`id_experience`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Restrições para tabelas `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `id_skill` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
