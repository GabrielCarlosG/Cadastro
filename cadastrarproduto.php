<?php 
include_once 'includes/header.php';
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
</script>

<div class="row">
    <div class="col s12 m6 push-m1 ">
        <h3 class="light">Novo Produto</h3>
        <form action="phpaction/createproduct.php" method="POST">
            <div class="input-field col s12">
                <select class="browser-default">
                    <option value="" disabled selected>Tipo produto</option>
                    <option value="1">Informática</option>
                    <option value="2">Escritório</option>
                    <option value="3">Limpeza</option>
                </select>
                <label></label>
            </div>
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
            <br>
            <a href="index.php" class="btn red">Voltar
                <i class="material-icons right">undo</i></a>
                <button class="btn waves-effect waves-light green" type="submit" name="btn-cadastrar">cadastrar
                    <i class="material-icons right">send</i>
                </button> 
            </form>
            
        </div>
        
        <?php
include_once 'includes/footer.php';
?>