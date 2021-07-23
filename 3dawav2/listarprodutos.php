<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "3dawnoiteav2";

	//conectando ao banco
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
		
	if($conn->connect_error){
		
		//poderia ser usado o comando echo
		die ("Erro de conexão". $conn->connect_error);
	
	}else{
	
		//echo json_decode("conexão OK!");
	}

	
		//passar o comando sql para ler a tabela
		$sql = "SELECT * FROM `produto`";
		$result = $conn->query($sql);
		//$linha = $conn->fetch_assoc($result);

		if(!$conn->query($sql))
		{
			echo json_encode("Erro!!!");
		}
		else
		{
			
			while ($linha = $result->fetch_assoc()) {

				$arrayresult[] = array(

					//'id' => $linha['id'],
					'codigoBarra' => $linha['codigobarra'],
					'nome' => $linha['nome'],
					//'fabricante' => $linha['fabricante'],
					'categoria' => $linha ['categoria'],
					//'tipodeproduto' => $linha['tipodeproduto'],
					'precodevenda' => $linha['precodevenda'],
					'estoque' => $linha['estoque'],
					//'peso' => $linha['peso'],
					//'descricao' => $linha['descricao'],
					//'inclusao' => $linha['inclusao'],
					//'ativo' => $linha['ativo'],
				);

				//echo"<br>";

			}
			
			echo json_encode($arrayresult);	
		}
		


}
?>
