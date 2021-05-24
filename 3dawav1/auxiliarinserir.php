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
  <h2 align="center">INSERIR DISCIPLINA</h2>
    <form class="form-inline" action="inserirdisciplina.php" method="POST">
    <div class="form-group">
      <label for="text"> NOME:</label>
      <input type="text" class="form-control" id="text" placeholder="Entre com o NOME" name="nome">
    </div>
    <div class="form-group">
      <label for="text">ID DA DISCIPLINA:</label>
      <input type="text" class="form-control" id="text" placeholder="Entre com o ID" name="iddisciplina">
    </div>
    <div class="form-group">
      <label for="text">PERÍODO:</label>
      <input type="text" class="form-control" id="number" placeholder="Entre com o PERÍODO" name="periodo">
    </div>
    <div class="form-group">
      <label for="text">ID PRÉ REQUISITO :</label>
      <input type="text" class="form-control" id="text" placeholder="Entre com o PRÉ REQUISITO" name="pre-requisito">
    </div>
    <div class="form-group">
      <label for="number">CRÉDITOS:</label>
      <input type="number" class="form-control" id="number" placeholder="Entre com o CRÉDITO" name="creditos">
    </div>
	<button type="submit" name= "op" value= "InserirDisciplina" class="btn btn-default">Submit</button>
  
  </form>
</div>

</body>
</html>