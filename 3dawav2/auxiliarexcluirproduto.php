 <! DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "utf-8">
	<title> 3DAW - SEGUNDA AVALIAÇÃO </title>
	<h4 align = "center"> 3DAW - Segunda Avaliação </h4>
	<h4 align = "left"> Aluno: Sérgio da Silva - Matrícula: 1920478300055 </h4>


	<script type="text/javascript">


		
		 function  excluirProduto() {
                                
                let xhr = new XMLHttpRequest( );
                
                console.log(xhr); 

               let objProd = document.getElementById("formProduto");

                xhr.onreadystatechange = function( ){
                   
                    if (xhr.readyState == 4 && xhr.status == 200) {

                    	//let objeto = JSON.parse(this.response);//obj.value;
                        // console.log( "objeto parseado no front: ", objeto );
                          //console.log( "teste: ", objeto );

                             

                             document.getElementById("resposta").innerHTML = this.response;                   
                   
                                     
                }

            }
            xhr.open ("GET","http://localhost/3DAW/3dawav2/excluirproduto.php?codigo=" + objProd.codigo.value,true);

            xhr.send();
            console.log("requisição enviada");

       }     


	</script>



</head>
<body>
<! DOCTYPE html>
<html lang = "pt-br">
<head>
  <title> Exemplo de bootstrap </title>
  <meta charset = "utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
</head>
<body>

	<!--<script type="text/javascript" src="auxiliarlistarprodutos.php"></script>-->

<div class = "container">
  <h2 align = "center"> EXCLUIR UM PRODUTO </h2>
    <form class = "form-inline" action = "" method = "GET" id="formProduto">
    <div class = "form-group">
      <label for = "number"> DIGITE O CÓDIGO DE BARRAS DO PRODUTO: </label>
      <input type = "number" class = "form-control" id = "codigo" placeholder = "0 < COD > 1000000000000">
    </div>
	 <input type="button" name="op" value="Excluir um Produto" onclick= "excluirProduto()">
  </form>
</div>
&nbsp&nbsp<p id="resposta"></p>

&nbsp&nbsp<a href='paginaprincipal.php'>MENU</a><br>
</body>
</html>
