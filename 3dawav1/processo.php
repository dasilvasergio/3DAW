<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "3dawnoitedisciplina";

//conectando ao banco
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
		
	if($conn->connect_error){
		
		//poderia ser usado o comando echo
		die ("Erro de conexão". $conn->connect_error);
	
	}else{
	
		//echo "conexão OK!";
	}

	//Receber os dados do formulário
	$arquivo = $_FILES ['arquivo'];
	//var_dump ($arquivo);

	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
	var_dump ($arquivo_tmp);

	//lendo o arquivo para o vetor
	$dados = file($arquivo_tmp);
	var_dump($dados);

	
	foreach ($dados as $linha) {
		//echo "Valor da linha: $linha";
		$linha = trim($linha);
		$valor = explode(';', $linha);
		var_dump($valor);

		
		$nome = $valor['0'];
		$email = $valor['1'];
		$senha = $valor['2'];
		$perfil = $valor['3'];

		

		//Inserindo usuários no banco de dados

		$sql = "INSERT INTO usuarios (nome,email,senha,perfil) VALUES ('$nome', '$email', '$senha', '$perfil')";

		$resultado = mysqli_query($conn,$sql);		

		


		
	}

		$_SESSION['msg'] = "<p style='color:green'> Carregado os dados com sucesso</p>";
		header("Location: upload.php");
}


?>