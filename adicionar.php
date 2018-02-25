<?php
require_once 'config/conecta.php';

if (isset($_POST['cadastrar'])){
    #id, nome, sobrenome, email, logradouro, cidade, estado, created
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $logradouro = $_POST['logradouro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $created = date('Y-m-d H:i:s');
    //print_r ($_POST);
    try {
        $stmt = $db->prepare('INSERT INTO usuario (nome, sobrenome, email, logradouro, cidade, estado, created) VALUES (:nome, :sobrenome, :email, :logradouro, :cidade, :estado, :created)');
        
        print_r ($stmt);
        //amarrando as variaveis aos campos do banco
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':sobrenome', $sobrenome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':logradouro', $logradouro);
        $stmt->bindValue(':cidade', $cidade);
        $stmt->bindValue(':estado', $estado);
        $stmt->bindValue(':created', $created);

        $stmt->execute();
        header('Location: index.php?cadastro=true'); //volta para a página principal
        exit;
    } catch (Exception $e) {
        
            echo "Não foi possível realizar a inserção. Erro: " . $e->getMessage();
            exit;
        
    }
    
} elseif (isset($_POST['alterar'])){
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $logradouro = $_POST['logradouro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $created = date('Y-m-d H:i:s');
    
    $sql = "UPDATE usuario SET nome='$nome', sobrenome='$sobrenome', email='$email', logradouro='$logradouro', cidade='$cidade', estado='$estado' WHERE id = $id"; //Faz a Atualização
    
    try {
        $atualizar = $db->prepare($sql); //prepara a atualização para evitar sql injection
        $atualizar->execute(); //executa a atualização
        header('Location: index.php?altera=true'); //volta para a página principal
    } catch (PDOException $e) {
        echo $e->getMessage(); //Se não conseguiu fazer a atualização retorna um erro
    }
}else {
    header('Location: index.php'); //volta para a página principal
    exit;
}