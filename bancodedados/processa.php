<?php

session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

$cpf = filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_STRING);

$matricula = filter_input(INPUT_POST,'matricula', FILTER_SANITIZE_STRING);

//echo "Nome: $nome<br>";
//echo "E-mail: $email<br>";

$result_usuario = "INSERT INTO usuario (nome, email, cpf, matricula, created) VALUES ('$nome', '$email', '$cpf', '$matricula', NOW())";

$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)){

	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p><br>";
	header("location: index.php");
}else{

	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado</p><br>";
	header("location: index.php");
}




?>