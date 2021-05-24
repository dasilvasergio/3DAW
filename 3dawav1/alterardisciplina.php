<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "3dawnoitedisciplina";

	$op = $_POST["op"];
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$ID_Disciplina = $_POST["iddisciplina"];
	$periodo = $_POST["periodo"];
	$prerequisito = $_POST["pre-requisito"];
	$creditos = $_POST["creditos"];


	//conectando ao banco
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
		
	if($conn->connect_error){
		
		//poderia ser usado o comando echo
		die ("Erro de conexão". $conn->connect_error);
	
	}else{
	
		//echo "conexão OK!";
	}

}	
		if($op == "AlterarDisciplina"){
		
		$sql = "UPDATE `disciplina` SET `id`= '$id' , `nome` =  '$nome' , `ID Disciplina` = '$ID_Disciplina' , `periodo` = '$periodo', `idprerequisito` = '$prerequisito' , `creditos` = '$creditos' WHERE id =  '$id'";
		//$sql = "UPDATE `disciplina` SET `nome`= 'Engenharia de Requisitos' WHERE id = '17'";
		
						
		$result = $conn->query($sql);	
		
		}

		
		

?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "SELECT * FROM disciplina";
		$result = $conn->query($sql);

		//Criando bordas no resultado
		echo "<table border ='1'>";
		echo"<tr><th>ID</th><th>NOME</th><th>ID Disciplina</th><th>PERIODO</th><th>idPREREQUISITO</th><th>CREDITOS</th></tr>";
		while ($linha = $result->fetch_assoc()) {
			echo"<tr>";
			echo "<td>" . $linha["id"] . "</td>";
			echo "<td>" . $linha["nome"] . "</td>";
			echo "<td>" . $linha["ID Disciplina"] . "</td>";
			echo "<td>" . $linha['periodo'] . "</td>";
			echo "<td>" . $linha["idprerequisito"] . "</td>";
			echo "<td>" . $linha["creditos"] . "</td>";
			echo"<br>";
			
		}
		echo "</tr>";
		echo "</table>";
}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MENU PRINCIPAL</title>
</head>
<body>
	<br><br>
<a href="paginaprincipal.php">MENU PRINCIPAL</a>
</body>
</html>

