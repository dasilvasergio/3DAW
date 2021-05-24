<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> 3DAW - PRIMEIRA AVALIAÇÃO</title>
	<h4 align="center"> 3DAW - Primeira Avaliação </h4>
	<h4 align="left">Aluno : Sérgio da Silva - Matricula : 1920478300055</h4>
<!--4) Criar a funcionalidade de criar novos usuários a partir de um arquivos contendo novos usuários, Usuários terá nome, email, senha e perfil.
    5) A funcionalidade de carga de usuarios deverá fazer upload do arquivo para processamento.(se fizer a carga já está bom).-->
</head>
<body>
	<div class="container">
  <h2 align="left">UPLOAD</h2>
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  ?>
     <form method="POST" action="processo.php" enctype="multipart/form-data">
      <label>ARQUIVO</label>
      <input type="file" name="arquivo"><br><br>

      <input type="submit" value="UPLOAD">
      </form>
	
</body>
</html>

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

 