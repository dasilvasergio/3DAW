<?php
if ($op = "Listar Alunos"){
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$nomeBanco = "faeterj3DAWNoite";
	$conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);

	//passar o comando sql para ler a tabela
	$sql = "SELECT * FROM `alunos` WHERE 1";

	$result = $conn->query($sql);
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>ID</th><th>NOME</th><th>E-MAIL</th><th>MATRICULA</th>";
	echo"<br>";

	while ($linha = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<br>";
	echo "<th>". $linha["id"] ."</th>";
	//echo "<br>"; 
	echo "<td>". $linha["nome"] . "</td>";
	//echo "<br>";
	echo "<td>". $linha["email"] . "</td>";
	//echo "<br>";
	echo "<td>". $linha["matricula"] . "</td>";
	echo"<tr>";

	}
	echo "<tr>";
	echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>LISTAR ALUNOS</title>
</head>
<body>
</body>
</html>

