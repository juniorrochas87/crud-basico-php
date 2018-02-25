# crud-basico-php
# configurar a conexão com o banco em config/conecta.php
# Crud Basico 


Tabela criada para o exemplo

CREATE TABLE `usuario` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `nome` varchar(50) NOT NULL,
   `sobrenome` varchar(70) NOT NULL,
   `email` varchar(50) NOT NULL,
   `logradouro` varchar(100) NOT NULL,
   `cidade` varchar(30) NOT NULL,
   `estado` varchar(2) NOT NULL,
   `created` datetime NOT NULL,
   PRIMARY KEY (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 
