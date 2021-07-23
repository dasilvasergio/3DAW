<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "3dawnoiteav2";
	$codigo = $_GET["codigo"];

	//conectando ao banco
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
		
	if($conn->connect_error){
		
		//poderia ser usado o comando echo
		die ("Erro de conexão". $conn->connect_error);
	
	}else{
	
		//echo json_decode("conexão OK!");
	}

	
		//$sql = "SELECT `id`, `codigobarra`, `nome`, `fabricante`, `categoria`, `tipodeproduto`, `precodevenda`, `estoque`, `peso`, `descricao`, `inclusao`, `ativo` FROM `produto` WHERE codigobarra = '$codigo'";

		$sql = "DELETE FROM `produto` WHERE codigobarra = '$codigo'";

		//passar o comando sql para ler a tabela
		//$sql = "SELECT * FROM `produto` WHERE codigobarra = '$codigo'";
		$result = $conn->query($sql);
		

		if(!$conn->query($sql))
		{
			echo json_encode("Erro!!!");
		}
		else
		{
			echo json_encode("Produto excluido com sucesso");
			
		}
		 

			
}
?>