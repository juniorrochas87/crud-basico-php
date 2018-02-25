<?php require_once 'cabecalho.php'; ?>

<div class="pt-5 container">
    <?php
    if ($_GET['altera'] == true) {
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Parabéns!</strong> Usuário foi Alterado.
        </div>
        <?php
    }
    if ($_GET['cadastro'] == true) {
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Parabéns!</strong> Usuário foi cadastrado.
        </div>
        <?php
    }
    if ($_GET['excluido'] == true) {
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Parabéns!</strong> Usuário foi excluido.
        </div>
        <?php
    }
    ?> 
    <h1 class="h3 mb-3 font-weight-normal"><img class="mb-4" src="img/login.png" alt="Cadastro" width="120" height="100"> Usúarios Cadastrados </h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th> 
                <th>E-mail</th>
                <th>Logradouro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Ação</th>
            </tr>
            <?php
            $sql = "select id, nome, sobrenome, email, logradouro, cidade, estado, created from usuario"; //Consulta 

            try {
                $consulta = $db->prepare($sql); //prepara a consulta para evitar sql injection
                $consulta->execute(); //executa a consulta
            } catch (PDOException $e) {
                echo $e->getMessage(); //Se não conseguiu fazer a consulta retorna um erro
            }
            while ($resultado = $consulta->fetch(PDO::FETCH_OBJ)) {//Enquanto houver um resultado
                //constrói as colunas
                ?>
                <tr>
                    <td><?php echo $resultado->nome; ?></td>
                    <td><?php echo $resultado->sobrenome; ?></td>
                    <td><?php echo $resultado->email; ?></td>
                    <td><?php echo $resultado->logradouro; ?></td>
                    <td><?php echo $resultado->cidade; ?></td>
                    <td><?php echo $resultado->estado; ?></td>                             
                    <td>
                        <a href="alterar.php?id=<?= $resultado->id; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><i class="fa fa-pencil"></i></a>
                        <a href="excluir.php?id=<?= $resultado->id; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
            <?php }; ?>
        </table>
    </div>
</div>

<?php require_once 'rodape.php'; ?>