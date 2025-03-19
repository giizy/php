<?php 
	function exibir(){
		STATIC $ano; //mantém o valor, enquanto o GLOBAL muda de todos
		$ano++;
		echo "</br>" . $ano;
	}
	echo exibir();
	echo exibir();
	echo exibir();

 ?>