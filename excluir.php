<?php
require_once 'config/conecta.php';
$id = $_GET['id'];
if (empty($_GET['id'])) {//Se nada foi passado por post
    header('Location: index.php'); //volta para a página principal
} else { //Se houver um dado enviado por post
    $sql = "delete from usuario where id= $id"; //Faz a Consulta 
    try {
        $excluir = $db->prepare($sql); //prepara a consulta para evitar sql injection
        $excluir->execute(); //executa a consulta
        header('Location: index.php?excluido=true'); //volta para a página principal
        exit;
    } catch (PDOException $e) {
        echo $e->getMessage(); //Se não conseguiu fazer a consulta retorna um erro
    }
}

