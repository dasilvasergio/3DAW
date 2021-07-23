<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset = "utf-8">
	<title> 3DAW - SEGUNDA AVALIAÇÃO </title>
	<h4 align = "center"> 3DAW - Segunda Avaliação </h4>
	<h4 align = "left"> Aluno: Sérgio da Silva - Matrícula: 1920478300055 </h4>

  <script>
     function incluirProduto() {

        let xhr = new XMLHttpRequest();
        console.log(xhr);
 
       let objProd = document.getElementById("formProduto");
       let msg = validarProduto(objProd);

       if(msg == "") {

       
        xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //let obj = JSON.parse(this.responseText);
            document.getElementById("resposta").innerHTML = this.responseText;  //obj.value;
            
        }

      }  

  }
    xhr.open("GET", "http://localhost/3DAW/3dawav2/incluirprodutos.php?codigo=" + objProd.codigo.value + "&nome=" + objProd.nome.value + "&fabricante=" + objProd.fabricante.value + "&preco=" + objProd.preco.value + "&quantidade=" + objProd.quantidade.value + "&peso=" + objProd.peso.value + "&datainclusao=" + objProd.datainclusao.value + "&descricao="+objProd.descricao.value + "&categoria=" + objProd.categoria.value + "&tipo=" + objProd.tipo.value + "&estado=" + objProd.estado.value);
   
    xhr.send();
    console.log("requisição enviada");
}


function validarProduto(Aproduto) {

  let objValidForm = document.getElementById("formProduto");
  let codigo = objValidForm.codigo.value;
  let nome = objValidForm.nome.value;
  let fabricante = objValidForm.fabricante.value;
  let preco = objValidForm.preco.value;
  let quantidade = objValidForm.quantidade.value;
  let peso = objValidForm.peso.value;
  let data = objValidForm.datainclusao.value
  let descricao = objValidForm.descricao.value;
  let msg = "";


      if((codigo < 0) || (codigo > 1000000000000)) {

         msg = msg + "codigo Inválido. <br>";

         alert(msg);
      }
      if(nome === "") {

        msg = msg + "Preencha o campo Nome. <br>";

        alert(msg);
      }
      if(fabricante === "") {

        msg = msg + "Preencha o campo Fabricante.<br>";

        alert(msg);
      }
      if(preco === "") {
        msg = msg + "Preencha o campo preço.<br>";

        alert(msg);
      }
      if(quantidade === "") {
        msg = msg + "Preencha o campo quantidade.<br>";

        alert(msg);
      }
      if(peso === "") {
        msg = msg + "Preencha o campo peso.<br>";

        alert(msg);
      }
      if(descricao === "") {
        msg = msg + "Preencha o campo descricao.<br>";

        alert(msg);
      }

      return msg;
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

<div class = "container">
  <h2 align = "center"> INSERIR PRODUTO </h2>
    <form class = "form-inline" action = "" method = "GET" name="Produto" id="formProduto">
    <div class = "form-group">
      <label for = "number"> CÓD. PRODUTO: </label>
      <input type = "number" class = "form-control" id = "codigo" placeholder = "0 < Código > 1000000000000" name = "codigo">
    </div>
    <div class = "form-group">
      <label for = "text"> &nbsp&nbspNOME: </label>
      <input type = "text" class = "form-control" id = "nome" placeholder = "Entre com o Nome" name = "nome">
    </div>
    <div class = "form-group">
      <label for = "text"> &nbsp&nbspFABRICANTE: </label>
      <input type = "text" class = "form-control" id = "fabricante" placeholder = "Entre com o Fabricante" name="fabricante">
    </div><br><br><br>
    <div class = "form-group">
      <label for = "number"> PREÇO DE VENDA: </label>
      <input type = "number" class = "form-control" id = "preco" placeholder = "Entre com o Preço" name = "preco">
    </div>
    <div class = "form-group">
      <label for = "number"> &nbsp&nbspQUANTIDADE EM ESTOQUE: </label>
      <input type = "number" class = "form-control" id = "quantidade" placeholder = "Entre com a Quantidade" name="quantidade">
    </div>
    <div class = "form-group">
      <label for = "number"> &nbsp&nbspPESO: </label>
      <input type = "number" class = "form-control" id = "peso" placeholder = "Entre com o Peso" name = "peso">
    </div><br><br><br>
    <div class = "form-group">
      <label for = "data"> DATA DE INCLUSÂO: </label>
      <input type = "date" class = "form-control data" id = "datainclusao" placeholder = "Formato AAAA MM DD" name = "datainclusao">
    </div>
    <div class = "form-group">
      <label for = "text"> &nbsp&nbspDESCRIÇÃO: </label>
      <input type = "text" class = "form-control" id = "descricao" placeholder = "Informe um nome para Subcategoria" name = "descricao">
    </div><br><br><br>
    <div class = "form-group">
      <label for = "text"> &nbsp&nbspCATEGORIA: </label>
              <select  name="categoria" class="form-control"> <br>
                  <option value="tecnologia">Tecnologia</option>
                  <option value="vestuario">Vestuário</option>
                  <option value="higiene" >Higiene</option>
                  <option value="outros" >Outros</option>
              </select>
                        
      <label for = "text"> &nbsp&nbspTIPO: </label>
              <select  name="tipo" id ="tipo" class="form-control"><br> 
                  <option value="conveniencia">Conveniência</option>
                  <option value="industriais">Industriais</option>
                  <option value="intermediarios">Intermediarios</option>
                  <option value="outros">Outros</option>
              </select>
              <label for = "text"> &nbsp&nbspESTADO </label>
              <select  name="estado" id ="estado" class="form-control"><br> 
                  <option value="ativo">Ativo</option>
                  <option value="inativo">Inativo</option>
              </select><br><br>
      <!--- <input type = "text" class = "form-control" id = "text" placeholder = "Entre com o ID" name = "iddisciplina">  -->
    </div>
    <br><br><br>
	 <input type="button" name="op" value="Incluir Produto" onclick= "incluirProduto()">
  <!---<button type = "submit" name = "op" value = "inserirproduto" class = "btn btn-default"> Enviar </button> -->
  
  </form>
</div>
&nbsp&nbsp<p id="resposta"></p>
&nbsp&nbsp<a href='paginaprincipal.php'>MENU</a><br>
</body>
</html>