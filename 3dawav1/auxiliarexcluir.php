<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> 3DAW - PRIMEIRA AVALIAÇÃO</title>
	<h4 align="center"> 3DAW - Primeira Avaliação </h4>
	<h4 align="left">Aluno : Sérgio da Silva - Matricula : 1920478300055</h4>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">EXCLUIR UMA DISCIPLINA</h2>
    <form class="form-inline" action="excluirdisciplina.php" method="POST">
    <div class="form-group">
      <label for="number">DIGITE O ID PARA EXCLUIR A DISCIPLINA:</label>
      <input type="number" class="form-control" id="number" placeholder="Entre com o ID" name="id">
    </div>
	<button type="submit" name= "op" value= "ExcluirDisciplina" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

	
	<!--<h4>LISTAR UMA DISCIPLINA</h4>
	<form action="listarumadisciplina.php" method="POST">
	Número do ID: &nbsp<input type="number" name="id" placeholder="Digite a ID da Linha para Alterar">	
	<input type="submit" name= "listarumadisciplina" value= "Listar Uma Disciplina">
	<table border="1"><tr><td> &rarr; Presione o botão para Listar uma única disciplina</td></tr></table>
	</form><br>-->

	
</body>
</html>
