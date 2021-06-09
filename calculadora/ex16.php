<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora Simplex</h1>
	<form action="ex16.php" method="post">
		
		Valor 1 : <input type="number" name="a"/>
		

		&nbsp <select name="operacao">
			<option value="soma">+</option>
			<option value="subtracao">-</option>
			<option value = "multiplicacao">&times;</option>
			<option value="divisao">&div;</option>
			<option value="exponenciacao">^</option>
			<option value="raizquadrada">&radic;</option>
			<option value="operacaoinversa">1/x</option>
			<option value="porcentagem">%</option>
		</select>
				
		&nbsp Valor 2 : <input type="number" name="b"/>
		<br><br>
		
		<input type="submit" value="enviar" name="enviar"/>
		

	</form>


</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"]  == "POST")
{
	$a = $_POST ["a"];
	$b = $_POST ["b"];
	$operacao = $_POST ["operacao"];
	$resultado = 0;
	$msgerro = "";
	$op = "";

		function validadados ( $a1, $b1, $operacao){

			echo "<br>OPERAÇÃO: &nbsp$operacao<br>";
	        echo "VALOR 1 = &nbsp$a1<br>";
	        echo "VALOR 2 = &nbsp$b1<br>";
	    	$msgerro1 = "";

		/*if(($operacao == "raiz quadrada") and ($a1 < 0)){

			$msgerro1 = "Operação inválida, não existe raiz de número menor que zero";
		}*/
		
			if(!ctype_digit($a1)){
				$msgerro1 = "Parâmetro 'a' não é numérico";
			}
			if(!ctype_digit($b1)){
				$msgerro1 = "Parâmetro 'b' não é numérico";
				}	
			
			if((($operacao == "divisao") and ($b1 == 0)) or (($operacao == "operacao inversa") and ($a1 == 0))){

				$msgerro1 = "Operação inválida, preencha novamente os campos";
			}
			
			return $msgerro1; 
		} 

		//Criando funções da calculadora

		function soma ($a1, $b1){

			return $a1 + $b1;
	    }     
	    
	    function subtracao ($a1, $b1){

	    	return $a1 - $b1;
	    }
	        
	    function multiplicacao ($a1, $b1){

	    	return $a1 * $b1;
	    }

	    function divisao ($a1, $b1){

	    	return $a1 / $b1;
	    }

	    function exponenciacao ($a1, $b1){

	    	return pow ($a1, $b1);
	    }     

	    function raizquadrada ($a1){

	    	return sqrt($a1);
	    }

	    function operacaoinversa ($a1){

	    	return 1 / $a1;
	    }    

	    function porcentagem ($a1, $b1){

	    	return ($a1 / $b1) * 100;
	    }
	
			$msgerro = validadados ($a,$b,$operacao);
			
			if($msgerro == "")
			{

				if($operacao == "soma")
				{
					$resultado = soma($a,$b);
					$op = "+";
					echo "$a $op $b = $resultado";
				}
				else
				{
					if($operacao == "subtracao")
					{
						$resultado = subtracao($a,$b);
						$op = "-";
						echo "$a $op $b = $resultado";
					}
					else
					{
						if($operacao == "multiplicacao")
						{
							$resultado = multiplicacao($a,$b);
							$op = "*";
							echo "$a $op $b = $resultado";
						}
						else
						{
							if($operacao == "divisao")
							{
								$resultado = divisao($a,$b);
								$op = "/";
								echo "$a $op $b = $resultado";
							}	
							else
							{
								if($operacao == "exponenciacao")
								{
									$resultado = exponenciacao($a,$b);
									$op = "^";
									echo "$a $op $b = $resultado";
								}
								else
								{
									if($operacao == "raizquadrada")
									{
										$resultado = raizquadrada($a);
										$op = "√";
										echo "$op $a = $resultado";
									}
									else
									{
										if($operacao == "operacaoinversa")
										{
											$resultado = operacaoinversa($a);
											$op = "1";
											echo "$op/$a = $resultado";
										}
										else
										{
											if($operacao == "porcentagem")
											{
												$resultado = porcentagem($a,$b);
												$op = "%";
												echo "$b $op $a = $resultado";
											}	
												
										}	
									}	
								}
							}
						}
					}
				}	
			}
				
				//$msgerro = validadados($a,$b,$operacao);

				if($msgerro != "")
				{
					echo "$msgerro";	
				}	

				
				
		
	}

?>
