<?php 

include_once 'phpaction/db_connect.php';

include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m10 push-m1">
		<h3 class="light"> Clientes Jurídico</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome Fantasia:</th>
					<th>Razao Social:</th>
					<th>Cnpj:</th>
                    <th>País:</th>
                    <th>Uf:</th>
                    <th>CEP:</th>
                    <th>Cidade:</th>
                    <th>Rua:</th>
                    <th>Numero:</th>

				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientejuridico";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nomefantasia']; ?></td>
					<td><?php echo $dados['razaosocial']; ?></td>
					<td><?php echo $dados['cnpj']; ?></td>
                    <td><?php echo $dados['pais']; ?></td>
                    <td><?php echo $dados['uf']; ?></td>
                    <td><?php echo $dados['cep']; ?></td>
                    <td><?php echo $dados['cidade']; ?></td>
                    <td><?php echo $dados['rua']; ?></td>
                    <td><?php echo $dados['numero']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
        <br>
        <a href="consultartipocliente.php" class="btn red">Voltar<i class="material-icons right">undo</i></a>
		<a href="adicionarcliente.php" class="btn"><i class="material-icons right">person_add</i>Adicionar cliente</a>
	</div>
</div>

<?php
include_once 'includes/footer.php';
?>