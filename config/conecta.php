<?php

$conn = 'mysql:host=localhost:3307;dbname=curso_php';

try {
//     conecta ao banco,'login','senha'
	$db = new PDO($conn,'user_curso','Suasenha');

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) { //tratamento de erros de conexão de acordo com o código sql
	if($e->getCode() == 42000){
		echo "Banco de dados informado não existe";
		}
	if($e->getCode() == 28000){
		echo "Erro de SQL, ";
		}
	if($e->getCode() == 1049){
		echo "Não existe banco de dados com o nome informado";
		}
	if($e->getCode() == 1146){
		echo "Não existe tabela com o nome informado";
		}
	if($e->getCode() == 1045){
		echo "Senha ou usuário incorreto(s) para o banco dados informado";
		}
	if($e->getCode() == 2005){
		echo "Não existe host com o nome informado ";
		}
	if($e->getCode() == 1065){
		echo "A querya está vazia ";
		}
	else {
		echo " erro de conexão: ". $e->getMessage();
	}
}//fim catch
 ?>
