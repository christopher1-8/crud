<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM tbclientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar veiculo</h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="marca" id="nome" value="<?php echo $dados['marca'];?>">
				<label for="marca">marca</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="modelo" value="<?php echo $dados['modelo'];?>" id="modelo">
				<label for="modelo">modelo</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['ano'];?>" name="ano" id="ano">
				<label for="ano">ano</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cor'];?>" name="cor" id="cor">
				<label for="cor">cor</label>
			</div>
            
            <div class="input-field col s12">
				<input type="text" value="<?php echo $dados['placa'];?>" name="placa" id="placa">
				<label for="placa">placa</label>
			</div>

            <div class="input-field col s12">
				<input type="text" value="<?php echo $dados['motor'];?>" name="motor" id="motor">
				<label for="motor">motor  </label>
			</div>
            
            <div class="input-field col s12">
				<input type="text" value="<?php echo $dados['km'];?>" name="km" id="km">
				<label for="km">km  </label>
			</div>

            <div class="input-field col s12">
				<input type="text" value="<?php echo $dados['valorfire'];?>" name="valorfire" id="valorfire">
				<label for="valorfire">valorfire  </label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="crudvcl.php" class="btn green"> Lista de veiculo </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
