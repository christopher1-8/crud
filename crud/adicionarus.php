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
<body background="img/kpoph.png">
	

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Usuario </h3>
		<form action="php_action/createusu.php" method="POST">
			<div class="input-field col s12">
				
				<input type="text" name="nome" id="nome">
				
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			
				<input type="text" name="login" id="login">
				<label for="login">login</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="senha" id="senha">
				<label for="senha">senha</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="telefone" id="telefone">
				<label for="telefone">telefone</label>
			</div>
            
			<div class="input-field col s12">
				<input type="text" name="foto" id="foto">
				<label for="foto">foto</label>
			</div>
            
			<div class="input-field col s12">
				<input type="text" name="data" id="data">
				<label for="data">data de nacimento</label>
			</div>


			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="crudusu.php" class="btn green"> Lista de usuarios </a>
		</form>
		
	</div>
</div>
</body>
</html>
<?php
// Footer
include_once 'includes/footer.php';
?>
