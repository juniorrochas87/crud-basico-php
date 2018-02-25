<?php
require_once("cabecalho.php");
$id = $_GET['id']; // recebendo as variaveis vindas do formulário

if (empty($_GET['id'])) {//Se nada foi passado por post
    header('Location: index.php'); //volta para a página principal
} else { //Se houver um dado enviado por post
    $sql = "select * from usuario WHERE id = $id"; //Faz a Consulta 
    try {
        $consulta = $db->prepare($sql); //prepara a consulta para evitar sql injection
        $consulta->execute(); //executa a consulta
    } catch (PDOException $e) {
        echo $e->getMessage(); //Se não conseguiu fazer a consulta retorna um erro
    }
    while ($resultado = $consulta->fetch(PDO::FETCH_OBJ)) {//Enquanto houver um resultado
        ?>

        <div class="pt-5 container">
    
            <form class="form" action="adicionar.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal"><img class="mb-4" src="img/login.png" alt="Cadastro" width="120" height="100"> Cadastro de Usúario </h1>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Primeiro Nome</label>
                        <input type="text" name="nome" value="<?php echo $resultado->nome; ?>" class="form-control" required>                    
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome" value="<?php echo $resultado->sobrenome; ?>" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>E-mail</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" name="email" value="<?php echo $resultado->email; ?>" class="form-control" aria-describedby="inputGroupPrepend3" required>                        
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Logradouro</label>
                        <input type="text" name="logradouro" value="<?php echo $resultado->logradouro; ?>"  class="form-control" required>                    
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Cidade</label>
                        <input type="text" name="cidade" value="<?php echo $resultado->cidade; ?>"  class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Estado</label>
                        <input type="text" name="estado" value="<?php echo $resultado->estado; ?>"  class="form-control" required>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
                <button class="btn btn-lg btn-primary" type="submit" name="alterar">Alterar</button>
            </form>
        </div>
        <?php }; //while final; 
}
 require_once("rodape.php"); ?>
