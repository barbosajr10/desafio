CREATE DATABASE `desafio`;

CREATE TABLE `funcionarios` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `data` date NOT NULL
) PRIMARY KEY(codigo);
