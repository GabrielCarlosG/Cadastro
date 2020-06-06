<?php 
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m1 ">
        <h3 class="light">Novo Cliente</h3>
        <form action="phpaction/createclientjuridico.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="nomefantasia" id="nomefantasia">
                <label for="nomefantasia">Nome Fantasia</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="razaosocial" id="razaosocial">
                <label for="razaosocial">Razão Social</label>
            </div>
            <p>
                <label>
                    <input class="with-gap" name="tipocliente" type="radio" id="fisico" checked />
                    <span>Pessoa Física</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="tipocliente" type="radio" id="juridico"/>
                    <span>Pessoa Jurídica</span>
                </label>
            </p>
            <div class="input-field col s12">
                <input type="text"  name="cpf" id="cpf">
                <label for="cpf">CPF</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="cnpj" id="cnpj">
                <label for="cnpj">CNPJ</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="pais" id="pais">
                <label for="pais">País</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="cep" id="cep">
                <label for="cep">CEP</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="uf" id="uf">
                <label for="uf">UF</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="cidade" id="cidade">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="rua" id="rua">
                <label for="rua">Endereço</label>
            </div>
            <div class="input-field col s12">
                <input type="text"  name="numero" id="numero">
                <label for="numero">Número</label>
            </div>
            <a href="index.php" class="btn red">Voltar
           <i class="material-icons right">undo</i>
           </a>
            <button class="btn waves-effect waves-light green" name="btn-cadastrar" type="submit" name="action">cadastrar
            <i class="material-icons right">send</i>
            </button>
        </form>
        
</div>

<?php
include_once 'includes/footer.php';
?>