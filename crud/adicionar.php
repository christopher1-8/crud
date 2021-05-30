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
<body background="img/4.jpg">
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				
				<input type="text" name="nome" id="nome">
				
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="crudcli.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>
</body>
</html>


<?php
// Footer
include_once 'includes/footer.php';
?>
