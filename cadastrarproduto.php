<?php 
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m1 ">
        <h3 class="light">Novo Produto</h3>
        <form action="" method="post">
            <div class="input-field col s12">
                <input type="text" name="codigoestoque" id="codigoestoque">
                <label for="codigoestoque">Código de Controle do Estoque</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="nomeproduto" id="nomeproduto">
                <label for="nomeproduto">Nome do Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="datacompra" id="datacompra">
                <label for="datacompra">Data da Compra</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="precocompra" id="precocompra">
                <label for="precocompra">preço da compra</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="precovenda" id="precovenda">
                <label for="precovenda">preço da venda</label>
            </div>
            <a href="index.php" class="btn">Voltar
           <i class="material-icons right">undo</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action">cadastrar
            <i class="material-icons right">send</i>
            </button> 
        </form>
        
</div>

<?php
include_once 'includes/footer.php';
?>