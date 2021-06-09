<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){

		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$dbname = "3dawnoitecidades";
		$i = 0;

		//criando a conexão com o BD
		$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

		if($conn->connect_error){
			
			//poderia ser usado o comando echo
			die ("Erro de conexão". $conn->connect_error);
		
		}else{
		
			//echo "conexão OK!";
		}

		
		$estado = $_GET["estado"];

		//echo $estado;

		//passar o comando sql para ler a tabela
		$query = "SELECT * FROM estado where uf = '$estado'";
		$result = $conn->query($query);
		$linha = $result->fetch_assoc();
		$idEstado = $linha["id"];

		//echo $idEstado;


		$query2 = "SELECT * FROM `cidade` where estado = $idEstado";
		$result2 = $conn->query($query2);
		
		//A Versão do PHP não possui a função Json_encode();
		
		echo "[";
		$cidade = mysqli_fetch_assoc($result2);

		while($cidade)
		{
			echo '{"id": "'.$cidade['id'].'",';
			echo '"nome": "'.$cidade['nome'].'",';
			echo '"estado": "'.$cidade['estado'].'"}';

			$cidade = mysqli_fetch_assoc($result2);
			if($cidade)
				echo ", ";
		}

		echo"]";





		//$cidades = array();
		
		/*while ($linha2 = $result2->fetch_assoc()) {
          
          $cidades[$i] = $linha2["nome"];
          
          echo $linha2["nome"];
          
          $i++;

      	}



		/*while ($cidade = mysqli_fetch_assoc($result2))
		{
			$cidades[] = $cidade;

			//echo $cidade["nome"];
		}
		
		//echo 'PHP version:'.phpversion(); verifica a versão instalada do programa
		
		echo sizeof($cidades);*/


		//echo json_encode($cidades); 
															
}

?>