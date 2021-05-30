<?php
// Header
include_once 'includes/header.php';
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body background="img/car2.jpg">
	

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo veiculo </h3>
		<form action="php_action/createusu.php" method="POST">
			<div class="input-field col s12">
				
				<input type="text" name="marca" id="marca">
				
				<label for="marca">marca</label>
			</div>

			<div class="input-field col s12">
			
				<input type="text" name="modelo" id="modelo">
				<label for="modelo">modelo</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="ano" id="ano">
				<label for="ano">ano</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="cor" id="cor">
				<label for="cor">cor</label>
			</div>
            
			<div class="input-field col s12">
				<input type="text" name="placa" id="placa">
				<label for="placa">placa</label>
			</div>
            
			<div class="input-field col s12">
				<input type="text" name="motor" id="motor">
				<label for="motor">motor  </label>
			</div>
 
            <div class="input-field col s12">
				<input type="text" name="km" id="km">
				<label for="km">km  </label>
			</div>
            
            <div class="input-field col s12">
				<input type="text" name="valorfire" id="valorfire">
				<label for="valorfire">valorfire  </label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="crudvcl.php" class="btn green"> Lista de veiculo </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
</body>
</html>