<?php 
	$ano = 2025;

	function exibir (){
		GLOBAL $ano; //o GLOBAL faz com que a variável seja vista no cód todo, do contrário, seria uma variável a parte
		$ano ++;
		return $ano;
    }
    echo("Ano: $ano <br/>");
    echo("Ano: " . exibir ());
    echo(" <br/> Ano: $ano");


 ?>