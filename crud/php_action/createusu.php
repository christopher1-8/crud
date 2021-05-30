<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$login= clear($_POST['login']);
	$senha = clear($_POST['senha']);
    $telefone = clear($_POST['telefone']);
    $foto = clear($_POST['foto']);
    $datadac = clear($_POST['data']);

	$sql = "INSERT INTO tbusuario (nome, login, senha, telefone , foto ,datanasc ) VALUES ('$nome', '$login', '$senha', '$telefone', '$foto' ,'$datadac')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;
