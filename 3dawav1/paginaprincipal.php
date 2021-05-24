<html lang="pt-br">
<head>
  <title>MENU PRINCIPAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">3DAW</a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li class="active"><a href="">Listar</a></li>-->
      <li><a href="auxiliarlistar.php">LISTAR</a></li>
      <li><a href="auxiliarlistaruma.php">LISTAR ÚNICA</a></li>
      <li><a href="auxiliarinserir.php">INSERIR</a></li>
      <li><a href="auxiliaralterar.php">ALTERAR</a></li>
      <li><a href="auxiliarexcluir.php">EXCLUIR</a></li>
      <li><a href="upload.php">UPLOAD</a></li>
    </ul>
  </div>
</nav>

</body>
</html>

<?php
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
}
?>



