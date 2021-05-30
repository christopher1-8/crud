<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body background="img/car.jpg">
	

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> veiculo </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>marca:</th>
					<th>modelo:</th>
					<th>ano:</th>
					<th>cor:</th>
                    <th>placa:</th>
                    <th>motor:</th>
                    <th>km:</th>
                    <th>valorfire</th>

				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM tbveiculo";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['marca']; ?></td>
					<td><?php echo $dados['modelo']; ?></td>
					<td><?php echo $dados['ano']; ?></td>
					<td><?php echo $dados['cor']; ?></td>
                    <td><?php echo $dados['placa']; ?></td>
                    <td><?php echo $dados['motor']; ?></td>
                    <td><?php echo $dados['km']; ?></td>
                    <td><?php echo $dados['valorfire']; ?></td>
					<td><a href="editavcl.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse veiculo?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="php_action/deleteusu.php" method="POST">
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
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionarvcl.php" class="btn">Adicionar veiculo</a>
	</div>
</div>
</body>
</html>
<?php
// Footer
include_once 'includes/footer.php';
?>

