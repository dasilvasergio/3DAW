<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> 3DAW - PRIMEIRA AVALIAÇÃO</title>
	<h4 align="center"> 3DAW - Segunda Avaliação </h4>
	<h4 align="left">Aluno : Sérgio da Silva - Matricula : 1920478300055</h4>
<script>  
    function  listarumProdutos() {
                                
                let xhr = new XMLHttpRequest( );
                
                console.log(xhr); 

               let objProd = document.getElementById("formProduto");

                xhr.onreadystatechange = function( ){
                   
                    if (xhr.readyState == 4 && xhr.status == 200) {

                    	let objeto = JSON.parse(this.response);//obj.value;
                         console.log( "objeto parseado no front: ", objeto );
                          console.log( "teste: ", objeto );

                          document.getElementById("resposta").innerHTML = 'ID:' + objeto.id +'<br>CODIGO BARRA:'+ objeto.codigoBarra+'<br>NOME:'+ objeto.nome +'<br>FABRICANTE:'+ objeto.fabricante +'<br>CATEGORIA:'+ objeto.categoria +'<br>TIPO:'+ objeto.tipodeproduto +'<br>PREÇO:'+ objeto.precodevenda +'<br>QUANT. ESTOQUE:'+ objeto.estoque +'<br>PESO:'+ objeto.peso +'<br>DESCRIÇÃO:'+ objeto.descricao +'<br>DATA INCLUSÃO:'+ objeto.inclusao +'<br>STATUS:'+ objeto.ativo;  
                         
                   
                                     
                }

            }
            xhr.open ("GET","http://localhost/3DAW/3dawav2/listarumproduto.php?codigo=" + objProd.codigo.value,true);

            xhr.send();
            console.log("requisição enviada");

       }     
      
  </script>

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
  <h2 align="center">LISTAR UM PRODUTO</h2>
    <form class="form-inline" action="" method="GET" id="formProduto">
    <div class="form-group">
      <label for="number">Código de Barras:</label>
      <input type="number" class="form-control" id="codigo" placeholder="Enter com o Código" name="codigo">
    </div>
  <input type="button" name="op" value="Listar um Produto" onclick= "listarumProdutos()">
	<!---<button type="submit" class="btn btn-default" align = "center">Submit</button>-->
  </form>
</div>

&nbsp&nbsp<p id="resposta"></p>

&nbsp&nbsp<a href='paginaprincipal.php'>MENU</a><br>
</body>
</html>

	
	
