<?php 
	print("Usando print para exibir a tela <br/>");

	$data = "17 de março de 2025";
	$salario = 850.50;
	$cargo = "Estagiária";

	echo("Arquivo criado em $data <br/>");

	printf("Salário minimo R$ %.2f por mês. <br/>",$salario);

	$texto = sprintf("%s recebe R$ %.2f por mês.",$cargo,$salario*2);

	echo($texto);

 ?>