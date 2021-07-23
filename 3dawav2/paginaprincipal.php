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
      <li><a href="auxiliarlistarprodutos.php">LISTAR PRODUTOS</a></li>
      <li><a href="auxiliarlistarumproduto.php">LISTAR UM PRODUTO</a></li>
      <li><a href="auxiliarincluirproduto.php">INCLUIR PRODUTO</a></li>
      <li><a href="auxiliaralterarproduto.php">ALTERAR PRODUTO</a></li>
      <li><a href="auxiliarexcluirproduto.php">EXCLUIR PRODUTO</a></li>
      
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
  $banco = "3dawnoiteav2";

  //conectando ao banco
  $conn = new mysqli($servidor, $usuario, $senha, $banco);
    
  if($conn->connect_error){
    
    //poderia ser usado o comando echo
    die ("Erro de conexão". $conn->connect_error);
  
  }else{
  
    echo "conexão OK!";
  }
}
?>