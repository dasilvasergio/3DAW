<?php
/* i - saber se o usuário clicou no link;
   ii - criar uma tela de de menu, usando esta aqui; 
   iii - criar outro arquivo para tratar a solicitação do usuário;
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>LISTAR ALUNOS</title>
</head>
<body>
	<h1>LISTAR ALUNOS</h1>

	<table border='1'>
	<tr>
	<td>Pressione ==></td>	
	<th><a href="listaralunos.php?listar=alunos">Listar Alunos</a></th>
	</tr>
	</table><br>

	<table border='1'>
		<tr>
			<th>lista o conteúdo do banco de dados</th>

		</tr>
	</table>
	<!-- funciona como um botão submit, método GET-->
	<!--<a href="listaralunos.php?incluir=alunos">Incluir Alunos</a>
	<br>
	<a href="listaralunos.php?Alterar=alunos">Alterar Alunos</a><br>-->

</body>
</html>