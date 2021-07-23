<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBanco = "3dawnoiteav2";

$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
if ($conn->connect_error) {
    die("Conexão com erro: " . $conn->connect_error);
}
 function validarDados() {

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $codigo = $_GET["codigo"];
        $nome = $_GET["nome"];
        $fabricante = $_GET["fabricante"];
        $preco = $_GET["preco"];
        $quantidade = $_GET["quantidade"];
        $peso = $_GET["peso"];
        $data = $_GET["datainclusao"];
        $descricao = $_GET["descricao"];
        $categoria = $_GET["categoria"];
        $tipo = $_GET["tipo"];
        $estado = $_GET["estado"];
        $msg = "";

        if(($codigo < 0) || ($codigo > 1000000000000)) {

         $msg = $msg . "Codigo Inválido. <br>";

         print_r($msg);
         $msg = "";
      }
      if($nome === "") {

        $msg = $msg . " Nome Inválido. <br>";

        print_r($msg);
        $msg = "";
      }
      if($fabricante === "") {

        $msg = $msg . "Preencha o campo Fabricante.<br>";

        print_r($msg);
        $msg = "";
      }
      if($preco === "") {
        $msg = $msg . "Preencha o campo preço.<br>";

        print_r($msg);
        $msg = "";
      }
      if($quantidade === "") {
        $msg = $msg . "Preencha o campo quantidade.<br>";

        print_r($msg);
        $msg = "";
      }
      if($peso === "") {
        $msg = $msg . "Preencha o campo peso.<br>";

        print_r($msg);
        $msg = "";
      }
      if($descricao === "") {
        $msg = $msg . "Preencha o campo descricao.<br>";

        print_r($msg);
        
      }

      return msg;


       $sql = "UPDATE `produto` SET `codigobarra`='$codigo',`nome`='$nome',`fabricante`= '$fabricante',`categoria`='$categoria',`tipodeproduto`='$tipo',`precodevenda`='$preco',`estoque`='$quantidade',`peso`='$peso',`descricao`='$descricao',`inclusao`='$data',`ativo`='$estado' WHERE codigobarra = '$codigo'";
        

        $result = $conn->query($sql); 

       
       if ($result == TRUE) {
            
           echo json_encode("Produto".$nome."Alterado com Sucesso");

        } else {
            echo json_encode("insert error: ");
        }
   

    }

}


?>