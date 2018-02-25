<?php require_once("cabecalho.php"); ?>

<div class="pt-5 container">
    
            <form class="form" action="adicionar.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal"><img class="mb-4" src="img/login.png" alt="Cadastro" width="120" height="100"> Cadastro de Usúario </h1>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Primeiro Nome</label>
                        <input type="text" name="nome" class="form-control" required>                    
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>E-mail</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" name="email" class="form-control" aria-describedby="inputGroupPrepend3" required>                        
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Logradouro</label>
                        <input type="text" name="logradouro" class="form-control" required>                    
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Cidade</label>
                        <input type="text" name="cidade" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Estado</label>
                        <input type="text" name="estado" class="form-control" required>
                    </div>
                </div>

                <button class="btn btn-lg btn-primary" type="submit" name="cadastrar">Cadastrar</button>
            </form>
        </div>

<?php require_once("rodape.php"); ?>

