<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> 3DAW - SEGUNDA AVALIAÇÃO</title>
	<h4 align="center"> 3DAW - Segunda Avaliação </h4>
	<h4 align="left">Aluno : Sérgio da Silva - Matricula : 1920478300055</h4>

  <script>  
    function  listarprodutos () {
                var objeto;
                                
                let xhr = new XMLHttpRequest( );
                
                console.log(xhr); 

                //xhr.responseType = "json";

                xhr.onreadystatechange = function( ){
                   
                    if (xhr.readyState == 4 && xhr.status == 200) {
                       

                         objeto = JSON.parse(this.response);//obj.value;
                         console.log( "objeto parseado no front: ", objeto );
                          console.log( "teste: ", objeto );

                              
                              document.getElementById("resposta").innerHTML = this.response; 
                   }
                  
                }
                   
                    xhr.open ("GET","http://localhost/3DAW/3dawav2/listarprodutos.php", true);

                    xhr.send();
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
  <h2 align="center">LISTAR TODOS OS PRODUTOS</h2>
    <form class="form-inline" action="" method="GET">
    
  <input type="button" name="op" value="Listar Produtos" onclick = "listarprodutos()">
	
  </form>
<!--</div>
 TABELA 
    <div id="content" class="mx-auto">

          <table class='table table-striped table-bordered' style="margin-top: 20px;"  >

            <tr>
              <th>Código de barras</th>
              <th>Nome</th>
              <th>Categoria</th>
              <th>Preço de venda</th>
              <th>Estoque</th>
            </tr>

      </div>
      FIM DA TABELA -->

&nbsp&nbsp<p id="resposta">DADOS DO PRODUTO</p>

&nbsp&nbsp<a href='paginaprincipal.php'>MENU</a><br>
</body>
</html>