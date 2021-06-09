<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrando formulário com PHP</title>
</head>
<body>
	<h3>Cadastrar Usuário</h3>
	<?php
	if(isset($_SESSION ['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION ['msg']);
	}
	?>

	<form action="processa.php" method="post">
    Nome:&nbsp <input type="text" name="nome" placeholder="Digite o nome completo"><br>
    Email:&nbsp <input type="email" name="email" placeholder="Digite seu melhor email"><br>
    CPF:&nbsp <input type="text" name="cpf" placeholder="Digite seu CPF"><br>
    Matricula:&nbsp <input type="text" name="matricula" placeholder="Digite sua matricula"> <br><br>

    <input type="submit" name="op" value="Cadastrar" >
</form>

</body>
</html>



<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "teste1";

$link = mysqli_connect($host, $user, $pass, $banco);
if(mysqli_connect_errno($link)){
	//echo "Erro de conexão";
}else{
	//echo "conexão OK!";
}

?>